<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Hash;
use App\Models\TradingPlatform;
use App\Models\TradableAsset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    //

    public function package($id)
    {
        $user = Auth::user();

        $package = Package::findOrFail($id);



        $platforms = TradingPlatform::all();

        $tradeables = TradableAsset::all();

        $details = [
            ['icon' => 'fas fa-user', 'label' => 'Name', 'value' => $package->name],
            ['icon' => 'fas fa-wallet', 'label' => 'Account Size', 'value' => '$' . number_format($package->account_size_min) . ' - $' . number_format($package->account_size_max)],
            ['icon' => 'fas fa-trophy', 'label' => 'Profit Target', 'value' => $package->profit_target . '%'],
            ['icon' => 'fas fa-clock', 'label' => 'Time Limit', 'value' => $package->time_limit . ' days'],
            ['icon' => 'fas fa-arrow-down', 'label' => 'Max Drawdown', 'value' => $package->max_drawdown . '%'],
            ['icon' => 'fas fa-chart-line', 'label' => 'Daily Loss Limit', 'value' => $package->daily_loss_limit . '%'],
            ['icon' => 'fas fa-percent', 'label' => 'Commission Rate', 'value' => $package->commission_rate . '%'],
            ['icon' => 'fas fa-balance-scale', 'label' => 'Leverage', 'value' => $package->leverage . 'x'],
            ['icon' => 'fas fa-hand-holding-usd', 'label' => 'Profit Share', 'value' => $package->profit_share . '%'],
            ['icon' => 'fas fa-calendar-alt', 'label' => 'Payout Frequency', 'value' => $package->payout_frequency],
        ];

        return view('user.package.billing', compact('package', 'tradeables', 'platforms', 'details'));
    }

    public function enroll(Request $request, $id)
    {

        $request->validate([
            'trade_type' => 'required|exists:tradable_assets,id',
            'platform' => 'required|exists:trading_platforms,id',
        ]);
        $user = Auth::user();

        dd($request->trade_type, $request->platform);

        $accounts = $user->accounts;



        $package = Package::findOrFail($id);

        if (!$package) {
            return redirect()->back()->with('error', 'Package not found.');
        }

        if (!$package->is_active) {
            return redirect()->back()->with('error', 'This package is not available for enrollment.');
        }

        if ($accounts->balance < $package->fee) {
            return redirect()->back()->with('error', 'Insufficient balance to enroll in this package.');
        }

        return redirect()->route('user.payment.gateway', [
            'package_id' => $package->id,
            'trade_type' => $request->trade_type,
            'platform' => $request->platform,
        ]);

    }

    public function gateway()
    {
        // Logic to handle the payment gateway
        // This could involve redirecting to a payment provider or displaying a payment form
        return view('user.package.gateway'); // Assuming there's a view for the payment gateway
    }
}
