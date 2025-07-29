<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Device;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class CheckTokenExpiry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $deviceFingerprint = md5($request->ip() . $request->userAgent());
            $device = Device::where('user_id', Auth::id())
                ->where('device_fingerprint', $deviceFingerprint)
                ->where('expires_at', '>', Carbon::now())
                ->first();

            if (!$device) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();


                  return redirect()->route('login')->with(
            'error',
            'Your Session Has Expired Login Your Account to Continue.',
        );
            }
        }


        return $next($request);
    }
}
