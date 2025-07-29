@extends('layouts.auth')


@section('content')

<div class="main-wrapper">
    <div class="account-content">
        <div class="login-wrapper login-new">
            <div class="row w-100">
                <div class="col-lg-5 mx-auto">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="{{ asset('user/assets/img/logo.svg') }}" alt="img">
                            <a href="#" class="login-logo logo-white">
                                <img src="{{ asset('user/assets/img/logo-white.svg') }}" alt="Img">
                            </a>
                        </div>

                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="login-userheading text-center">
                                        <h3>Email Verification</h3>
                                        <h4>We've sent a verification link to your email</h4>
                                        <p class="text-muted mt-2">Please check your inbox at <strong>{{ $user->email }}</strong></p>
                                    </div>

                                    <div class="text-center my-5">
                                        <div class="mb-2">
                                            <i class="ti ti-mail text-primary" style="font-size: 50px;"></i>
                                        </div>
                                        <p class="mb-3">Click the link in the email to verify your account.</p>
                                    </div>

                                    <div class="mb-3 d-flex flex-column align-items-center">
                                        <p class="text-gray-9 mb-2">Didn't receive the email?</p>
                                        <div>
                                            <form id="resendForm" action="{{ route('verification.send') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary w-100" id="resend-verification">Resend Verification Email</button>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <a href="{{ route('logout') }}" class="btn text-primary btn-link w-100">Logout Account</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                <p>Copyright &copy; 2025 {{ setting('siteName') }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
