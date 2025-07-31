<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;
use App\Models\PromoCode;
use App\Models\Device;
use App\Models\Activity;
use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        // Middleware can be applied here if needed
    }

    public function index()
    {

        $user = Auth::user();

        $account = $user->accounts;
        // check if user has package from UserPackage model if no package are found procced to display all Packge Avaialble

        // check if user has package
        $userHasPackage = $user->userPackage()->get();




        if ($userHasPackage->count() > 0) {
            $userPackages = UserPackage::where('user_id', $user->id)
                ->with('package')
                ->latest()
                ->get();

            $packages = null; // Or you can omit this if not needed
        } else {
            $userPackages = collect();
            $packages = Package::all();
        }


        return view('user.index', compact('user', 'packages', 'userPackages'));
    }

    public function settings()
    {
        $user = Auth::user();
        return view('user.settings', compact('user'));
    }

    public function support()
    {
        // Handle logic for support action
        // This could be a contact form or support ticket system
        return view('user.support'); // Assuming there's a view for support
    }

    public function demo()
    {
        // Handle logic for a demo action
        // This could be a placeholder for testing or demonstration purposes
        return view('user.demo'); // Assuming there's a view for demo
    }

    public function refferals()
    {
        $user = Auth::user();

        // Fetch referrals for the user
        $referrals = User::where('refer_by_id', $user->id)->get();
        $referralBonus = setting('referralBonus', 10);

        $referralEarnings = $referrals->count() * $referralBonus;
        $referralCount = $referrals->count();
        $referralLink = route('register', ['ref' => $user->internetId]);

        $referralDates = $referrals->pluck('created_at')->map(function ($date) {
            return $date->format('M d');
        })->reverse()->values();



        return view('user.refferals', compact(
            'user',
            'referrals',
            'referralEarnings',
            'referralCount',
            'referralLink',
            'referralDates'  // Add this

        ));
    }

    public function UpdatePersonalInfo(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);


        // Check if the email is already taken by another user
        if (User::where('email', $request->email)->where('id', '!=', $user->id)->exists()) {
            return redirect()->back()->with('error', 'The email address is already taken by another user.');
        }
        // Check if the username is already taken by another user
        if (User::where('username', $request->username)->where('id', '!=', $user->id)->exists()) {
            return redirect()->back()->with('error', 'The username is already taken by another user.');
        }



        try {
            $user->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

            return redirect()->back()->with('success', 'Personal information updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update personal information. Please try again.');
        }
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required|string',
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
