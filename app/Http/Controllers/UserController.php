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

    public function support() {
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

    public function refferals() {
        $user = Auth::user();

        // Fetch referrals for the user
        $referrals = User::where('refer_by_id', $user->id)->get();

        dd($referrals);
        // 1 referral = setting('referral_bonus') = 10 USD
        // Calculate total earnings from referrals
        $referralBonus = setting('referral_bonus', 10); // Default to 10 if not set
        $user->referralEarnings = $referrals->count() * $referralBonus;
        $user->referralCount = $referrals->count();

        return view('user.refferals', compact('user'));
    }
}
