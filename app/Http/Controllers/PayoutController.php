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

class PayoutController extends Controller
{
    //

    public function __construct()
    {
        // Middleware can be applied here if needed
    }

    public function payout()
    {
        // Logic to retrieve and display payouts
        $user = Auth::user();

        return view('user.payout', compact( 'user'));
    }
}
