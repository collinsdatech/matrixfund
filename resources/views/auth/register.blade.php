@extends('layouts.auth')

@section('content')

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper login-new">
                <div class="row w-100">
                    <div class="col-lg-5 mx-auto">
                        <div class="login-content user-login">
                            <div class="login-logo">
                                <img src="{{ asset('user/assets/img/logo.svg') }}" alt="img">
                                <a href="index.html" class="login-logo logo-white">
                                    <img src="{{ asset('user/assets/img/logo-white.svg') }}" alt="Img">
                                </a>
                            </div>

                            <form action="{{ route('register.submit') }}" method="POST">
                                @csrf
                                <div class="card">
                                    <div class="card-body p-5">
                                        <div class="login-userheading">
                                            <h3>Register</h3>
                                            <h4>Create New {{ setting('siteName') }} Account</h4>
                                        </div>

                                        <!-- Username -->
                                        <div class="mb-3">
                                            <label class="form-label">Username <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" id="username" name="username"
                                                    value="{{ old('username') }}"
                                                    class="form-control border-end-0 @error('username') is-invalid @enderror">
                                                <span class="input-group-text border-start-0"><i
                                                        class="ti ti-user"></i></span>
                                            </div>
                                            @error('username')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                                    class="form-control border-end-0 @error('name') is-invalid @enderror">
                                                <span class="input-group-text border-start-0"><i
                                                        class="ti ti-user"></i></span>
                                            </div>
                                            @error('name')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                    class="form-control border-end-0 @error('email') is-invalid @enderror">
                                                <span class="input-group-text border-start-0"><i
                                                        class="ti ti-mail"></i></span>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Phone -->
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <div class="input-group">
                                                <input type="number" id="phone" name="phone" value="{{ old('phone') }}"
                                                    class="form-control border-end-0 @error('phone') is-invalid @enderror">
                                                <span class="input-group-text border-start-0"><i
                                                        class="ti ti-phone"></i></span>
                                            </div>
                                            @error('phone')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Country & Promo -->
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Country</label>
                                                <select id="country" name="country"
                                                    class="form-select @error('country') is-invalid @enderror">
                                                    <option value="" disabled selected>Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>
                                                            {{ $country }}
                                                        </option>

                                                    @endforeach
                                                    <!-- Add more -->
                                                </select>
                                                @error('country')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Promocode</label>
                                                <input type="text" id="promo_code" name="promo_code"
                                                    value="{{ old('promo_code') }}"
                                                    class="form-control @error('promo_code') is-invalid @enderror">
                                                @error('promo_code')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Password & Confirm -->
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Password <span
                                                        class="text-danger">*</span></label>
                                                <div class="pass-group">
                                                    <input type="password" id="password" name="password"
                                                        class="pass-input form-control @error('password') is-invalid @enderror">
                                                    <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                                </div>
                                                @error('password')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Repeat Password <span
                                                        class="text-danger">*</span></label>
                                                <div class="pass-group">
                                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                                        class="pass-input form-control @error('confirm_password') is-invalid @enderror">
                                                    <span class="ti toggle-passwords ti-eye-off text-gray-9"></span>
                                                </div>
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Referred By (Hidden) -->
                                        <input type="hidden" id="refer_by_id" name="refer_by_id"
                                            value="{{ old('refer_by_id') }}">

                                        <!-- Terms -->
                                        <div class="form-login authentication-check">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                        <input type="checkbox" id="terms_agree" name="terms_agree" value="1"
                                                            {{ old('terms_agree') ? 'checked' : '' }} required>
                                                        <span class="checkmarks"></span>I agree to the <a href="#"
                                                            class="text-primary">Terms & Privacy</a>
                                                    </label>
                                                    @error('terms_agree')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="form-login mt-3">
                                            <button type="submit" id="submit-button" class="btn btn-login">Create An Account</button>
                                        </div>

                                        <!-- Already have an account -->
                                        <div class="signinform mt-3">
                                            <h4>Already have an account? <a href="{{ route('login') }}" class="hover-a">Sign
                                                    In Instead</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                        <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                            <p>Copyright &copy; 2025 {{ setting('siteName') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
