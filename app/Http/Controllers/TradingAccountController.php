<?php

namespace App\Http\Controllers;
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

use Illuminate\Http\Request;

class TradingAccountController extends Controller
{
    //

    public function __construct()
    {
        // Middleware can be applied here if needed
    }

    public function accounts()
    {
        // Logic to retrieve and display trading accounts
        $user = Auth::user();
        $accounts = $user->accounts; // Assuming the User model has a relationship with accounts

        return view('user.accounts', compact('accounts'));
    }
}
