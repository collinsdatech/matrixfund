<?php



namespace App\Http\Controllers;

use App\Helpers\NotificationHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Account;
use App\Models\PromoCode;
use App\Models\Device;
use App\Models\Activity;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Notifications\NewDeviceNotification;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //

    public function __construct()
    {
        // Middleware can be applied here if needed
    }

    public function login(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'identifier' => 'required|string',
                'password' => 'required|string',
            ], [
                'identifier.required' => 'Username or Internet ID is required.',
            ]);

            $identifier = trim($request->identifier);

            // If the identifier is numeric, we can match internetId
            if (is_numeric($identifier)) {
                $user = User::where('username', $identifier)
                    ->orWhereRaw('internetId = ?', [(int) $identifier])
                    ->first();
            } else {
                // If not numeric, only check username
                $user = User::where('username', $identifier)->first();
            }





            if (!$user || !Hash::check($request->password, $user->password)) {

                Log::info('Login attempt failed', [
                    'identifier' => $request->identifier,
                    'user_password' => $user->password ?? 'N/A',
                    'request_password' => $request->password,
                ]);

                return back()->with('error', 'The provided credentials are incorrect.')->withInput();
            }





            // Generate device fingerprint
            $deviceFingerprint = md5($request->ip() . $request->userAgent());

            // Check for new device
            $isNewDevice = !Device::where('user_id', $user->id)
                ->where('device_fingerprint', $deviceFingerprint)
                ->exists();

            // Create login token
            $token = Str::random(60);
            $expiresAt = Carbon::now()->addHours(6); // 24-hour expiry

            // Store device and token
            Device::create([
                'user_id' => $user->id,
                'device_fingerprint' => $deviceFingerprint,
                'token' => $token,
                'expires_at' => $expiresAt,
            ]);

            // Log login activity
            Activity::create([
                'user_id' => $user->id,
                'type' => 'login_success',
                'description' => 'Logged at ' . now() . ' at IP: ' . $request->ip(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'device_fingerprint' => $deviceFingerprint,
            ]);

            // New device notification
            if ($isNewDevice) {
                $user->notify(new NewDeviceNotification([
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                ]));

                // Store notification in database

                NotificationHelper::storeNotification($user, 'New Login Device', 'New device login detected', 'unread', 'ti ti-device-desktop');
            }

            // Log in user
            Auth::login($user);

            // Set success message
            session()->flash('success', ['title' => 'Success!', 'message' => 'Logged in successfully.']);

            // Redirect based on email verification
            return redirect()->intended($user->hasVerifiedEmail() ? '/user/dashboard' : '/email/verify');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Login failed', ['error' => $e->getMessage()]);
            session()->flash('error', ['title' => 'Error occurred', 'message' => 'Login failed. Please try again.']);
            return back()->withInput();
        }
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email',
            'phone' => 'required|string|max:20',
            'country' => 'required|string',
            'promo_code' => 'nullable|string|max:50|exists:promo_codes,code',
            'refer_by_id' => 'nullable|string|max:50|exists:users,internetId',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'terms_agree' => 'required|accepted',
        ], [
            'email.unique' => 'This email is already registered.',
            'username.unique' => 'This username is already taken.',
            'promo_code.exists' => 'Invalid promo code.',
            'refer_by_id.exists' => 'Invalid referral code.',
            'terms_agree.accepted' => 'You must agree to the Terms & Privacy.',
        ]);

        try {
            DB::beginTransaction();

            $emailVerificationEnabled = setting('emailVerification');

            // Handle promo code
            $promoReward = $this->handlePromoCode($validated['promo_code'] ?? null);

            // Handle referral
            $referrerId = $this->handleReferral($validated['refer_by_id'] ?? null);

            // Create user
            $user = User::create([
                'username' => $validated['username'],
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'country' => $validated['country'],
                'refer_by_id' => $referrerId,
                'password' => Hash::make($validated['password']),
                'status' => 'active',
                'email_verified_at' => $emailVerificationEnabled ? null : now(),
            ]);

            // Create account
            $this->createUserAccount($user, $promoReward);

            // Handle referral bonus if applicable
            if ($referrerId) {
                $this->applyReferralBonus($referrerId, $user->id);
            }

            Auth::login($user);
            DB::commit();

            return $this->registrationSuccessResponse();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Registration failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Registration failed. Please try again.')->withInput();
        }
    }

    protected function handlePromoCode(?string $promoCode): float
    {
        if (!$promoCode) return 0;

        $promo = PromoCode::where('code', $promoCode)->firstOrFail();

        if (!$promo->is_active) {
            throw new \Exception('This promo code is inactive.');
        }

        $now = Carbon::now();
        if ($promo->valid_from && $now < $promo->valid_from) {
            throw new \Exception('This promo code is not yet valid.');
        }

        if ($promo->valid_until && $now > $promo->valid_until) {
            throw new \Exception('This promo code has expired.');
        }

        return $promo->reward;
    }

    protected function handleReferral(?string $referralCode): ?int
    {
        if (!$referralCode) return null;

        $referrer = User::where('internetId', $referralCode)->first();
        return $referrer ? $referrer->id : null;
    }

    protected function createUserAccount(User $user, float $promoReward = 0): void
    {
        Account::create([
            'user_id' => $user->id,
            'currency' => setting('defaultCurrency', 'USD'),
            'currency_symbol' => setting('defaultCurrency', 'USD') === 'USD' ? '$' : '€',
            'status' => 'pending',
            'balance' => $promoReward,
        ]);
    }

    protected function applyReferralBonus(int $referrerId, int $newUserId): void
    {
        $referrerAccount = Account::where('user_id', $referrerId)
            ->where('status', 'active')
            ->first();

        if ($referrerAccount) {
            $bonusAmount = setting('referralBonusAmount', 10.00);
            $referrerAccount->increment('balance', $bonusAmount);
            Log::info('Referral bonus added', [
                'referrer_id' => $referrerId,
                'new_user_id' => $newUserId,
                'bonus_amount' => $bonusAmount,
            ]);
        }
    }

    protected function registrationSuccessResponse()
    {
        $emailVerificationEnabled = setting('emailVerification', true);

        if ($emailVerificationEnabled) {
            return redirect()->to('/email/verify')
                ->with('success', 'Success! Please check your email to verify your account.');
        }

        return redirect()->to('/dashboard')
            ->with('success', 'Success! Your account has been created successfully.');
    }


    public function logout(Request $request)
    {
        // Handle logout logic
        // Invalidate session, redirect, etc.

        $deviceFingerprint = md5($request->ip() . $request->userAgent());
        Device::where('user_id', Auth::id())
            ->where('device_fingerprint', $deviceFingerprint)
            ->update(['expires_at' => Carbon::now()]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with(
            'success',
            'Logged out successfully.',
        );
    }

    public function resetPassword(Request $request)
    {
        // Handle password reset logic
        // Validate request, send reset link, etc.
    }


    public function showLoginForm()
    {
        // Return the login view

        return view('auth.login');
    }

    public function showRegistrationForm()
    {
        // Return the registration view
        $countries = [
            'Afghanistan',
            'Albania',
            'Algeria',
            'Andorra',
            'Angola',
            'Antigua and Barbuda',
            'Argentina',
            'Armenia',
            'Australia',
            'Austria',
            'Azerbaijan',
            'Bahamas',
            'Bahrain',
            'Bangladesh',
            'Barbados',
            'Belarus',
            'Belgium',
            'Belize',
            'Benin',
            'Bhutan',
            'Bolivia',
            'Bosnia and Herzegovina',
            'Botswana',
            'Brazil',
            'Brunei',
            'Bulgaria',
            'Burkina Faso',
            'Burundi',
            'Cabo Verde',
            'Cambodia',
            'Cameroon',
            'Canada',
            'Central African Republic',
            'Chad',
            'Chile',
            'China',
            'Colombia',
            'Comoros',
            'Congo, Democratic Republic of the',
            'Congo, Republic of the',
            'Costa Rica',
            'Cote d\'Ivoire',
            'Croatia',
            'Cuba',
            'Cyprus',
            'Czech Republic',
            'Denmark',
            'Djibouti',
            'Dominica',
            'Dominican Republic',
            'Ecuador',
            'Egypt',
            'El Salvador',
            'Equatorial Guinea',
            'Eritrea',
            'Estonia',
            'Eswatini',
            'Ethiopia',
            'Fiji',
            'Finland',
            'France',
            'Gabon',
            'Gambia',
            'Georgia',
            'Germany',
            'Ghana',
            'Greece',
            'Grenada',
            'Guatemala',
            'Guinea',
            'Guinea-Bissau',
            'Guyana',
            'Haiti',
            'Honduras',
            'Hungary',
            'Iceland',
            'India',
            'Indonesia',
            'Iran',
            'Iraq',
            'Ireland',
            'Israel',
            'Italy',
            'Jamaica',
            'Japan',
            'Jordan',
            'Kazakhstan',
            'Kenya',
            'Kiribati',
            'Korea, North',
            'Korea, South',
            'Kosovo',
            'Kuwait',
            'Kyrgyzstan',
            'Laos',
            'Latvia',
            'Lebanon',
            'Lesotho',
            'Liberia',
            'Libya',
            'Liechtenstein',
            'Lithuania',
            'Luxembourg',
            'Madagascar',
            'Malawi',
            'Malaysia',
            'Maldives',
            'Mali',
            'Malta',
            'Marshall Islands',
            'Mauritania',
            'Mauritius',
            'Mexico',
            'Micronesia',
            'Moldova',
            'Monaco',
            'Mongolia',
            'Montenegro',
            'Morocco',
            'Mozambique',
            'Myanmar',
            'Namibia',
            'Nauru',
            'Nepal',
            'Netherlands',
            'New Zealand',
            'Nicaragua',
            'Niger',
            'Nigeria',
            'North Macedonia',
            'Norway',
            'Oman',
            'Pakistan',
            'Palau',
            'Palestine',
            'Panama',
            'Papua New Guinea',
            'Paraguay',
            'Peru',
            'Philippines',
            'Poland',
            'Portugal',
            'Qatar',
            'Romania',
            'Russia',
            'Rwanda',
            'Saint Kitts and Nevis',
            'Saint Lucia',
            'Saint Vincent and the Grenadines',
            'Samoa',
            'San Marino',
            'Sao Tome and Principe',
            'Saudi Arabia',
            'Senegal',
            'Serbia',
            'Seychelles',
            'Sierra Leone',
            'Singapore',
            'Slovakia',
            'Slovenia',
            'Solomon Islands',
            'Somalia',
            'South Africa',
            'South Sudan',
            'Spain',
            'Sri Lanka',
            'Sudan',
            'Suriname',
            'Sweden',
            'Switzerland',
            'Syria',
            'Taiwan',
            'Tajikistan',
            'Tanzania',
            'Thailand',
            'Timor-Leste',
            'Togo',
            'Tonga',
            'Trinidad and Tobago',
            'Tunisia',
            'Turkey',
            'Turkmenistan',
            'Tuvalu',
            'Uganda',
            'Ukraine',
            'United Arab Emirates',
            'United Kingdom',
            'United States',
            'Uruguay',
            'Uzbekistan',
            'Vanuatu',
            'Vatican City',
            'Venezuela',
            'Vietnam',
            'Yemen',
            'Zambia',
            'Zimbabwe'
        ];
        return view('auth.register', compact('countries'));
    }
}
