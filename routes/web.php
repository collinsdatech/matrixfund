<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login/submit', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register/submit', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    // show success mesaage

    return redirect('/user/dashboard');
})->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

Route::get('/email/verify', function () {
    $user = Auth::user();


    return view('auth.email.verify', compact('user'));
})->middleware(['auth'])->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return redirect()->back()->with('success', 'Verification link resent successfully!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::middleware(['auth', 'verified', 'token_check'])->prefix('user')->group(function () {


    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/deposit', [UserController::class, 'deposit'])->name('user.deposit');
    Route::get('/withdraw', [UserController::class, 'withdraw'])->name('user.withdraw');
    Route::get('/referrals', [UserController::class, 'referrals'])->name('user.referrals');
    Route::get('/transactions', [UserController::class, 'transactions'])->name('user.transactions');
    Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');
    Route::get('/activity', [UserController::class, 'activity'])->name('user.activity');
    Route::get('/demo', [UserController::class, 'demo'])->name('user.demo');

    // Route to buy a package
    Route::get('/package/billing/{id}', [PackageController::class, 'package'])->name('user.package.billing');


    // Route to enroll in a package
    Route::post('/package/enroll/{id}', [PackageController::class, 'enroll'])->name('user.package.enroll');
    Route::get('/payment/gateway', [PackageController::class, 'gateway'])->name('user.payment.gateway');






    // Route to view notifications
    Route::get('/notifications', function () {
        $user = Auth::user();
        $notifications = $user->notifications()->latest()->get();
        return view('user.notifications', compact('notifications'));
    })->name('user.notifications');

    // Route for settings page usercontroller
    Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');


    // Route to update user settings
    Route::post('/settings/update', [UserController::class, 'updateSettings'])->name('user.settings.update');

    // Route to change password
    Route::post('/settings/change-password', [UserController::class, 'changePassword'])->name('user.settings.change-password');

    // Route to support center
    Route::get('/support/center', [UserController::class, 'support'])->name('user.support');

    // Route for refferals
    Route::get('/refferals', [UserController::class, 'refferals'])->name('user.refferals');
});
