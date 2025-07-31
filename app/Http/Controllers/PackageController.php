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

    public function package()
    {
        $user = Auth::user();





        // return view('user.package.billing', compact('package', 'tradeables', 'platforms', 'details'));
        return view('user.package.billing');
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

    public function getPackageTimeFees($packageId)
    {
        $package = Package::select(['id', 'name', 'time_fee'])
            ->where('id', $packageId)
            ->firstOrFail();

        $timeFee = json_decode($package->time_fee, true);

        // Format the fee data
        $formattedFees = array_map(function ($tier) {

            return [
                'label' => $tier['label'],
                'fee' => number_format($tier['fee'], 2),
                'original_price' => number_format($tier['original_price'], 2)
            ];
        }, $timeFee['tiers']);

        return response()->json([
            'success' => true,
            'package' => [
                'id' => $package->id,
                'name' => $package->name,
                'formatted_fees' => $formattedFees
            ]
        ]);
    }

    public function getPackagesWithFees()
    {
        $packages = Package::where('is_active', 1)
            ->select(['id', 'name', 'time_fee'])
            ->get()
            ->map(function ($package) {
                // Transform the time_fee JSON into a more usable format
                $timeFee = json_decode($package->time_fee, true);
                $package->formatted_fees = $this->formatFeeData($timeFee['tiers']);
                return $package;
            });

        return response()->json([
            'success' => true,
            'packages' => $packages
        ]);
    }

    /**
     * Format fee data for frontend display
     */
    private function formatFeeData(array $tiers): array
    {
        return array_map(function ($tier) {
            return [
                'label' => $tier['label'],
                'fee' => number_format($tier['fee'], 2),
                'original_price' => number_format($tier['original_price'], 2),
            ];
        }, $tiers);
    }





    public function gateway()
    {
        // Logic to handle the payment gateway
        // This could involve redirecting to a payment provider or displaying a payment form
        return view('user.package.gateway'); // Assuming there's a view for the payment gateway
    }
}
