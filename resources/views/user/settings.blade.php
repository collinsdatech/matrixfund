@extends('layouts.user')

@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- Enhanced Page Header -->
        <div class="page-header mb-4">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="page-title mb-0">Account Settings</h3>

                    <nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-divide">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
				    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left Column: Settings -->
            <div class="col-xl-8 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <!-- Enhanced Tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom px-4 pt-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#personal-info" data-bs-toggle="tab">
                                    <i class="fas fa-user-circle me-2"></i>Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#change-password" data-bs-toggle="tab">
                                    <i class="fas fa-lock me-2"></i>Security
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#verification" data-bs-toggle="tab">
                                    <i class="fas fa-id-card me-2"></i>Verification
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#certificates" data-bs-toggle="tab">
                                    <i class="fas fa-certificate me-2"></i>Certificates
                                </a>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content p-4">
                            <!-- Personal Info -->
                            <div class="tab-pane fade show active" id="personal-info">

                                <h5 class="mb-4"><i class="fas fa-user-edit me-2"></i>Personal Information</h5>
                                <form action="{{ route('user.update.personalInfo') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}" name="username" id="username">
                                                 @error('username')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                <input type="number" class="form-control  @error('phone') is-invalid @enderror" value="{{ $user->phone }}" name="phone" id="phone">
                                                @error('phone')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Full Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name}}" id="name" name="name">
                                                @error('name')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" name="email" id="email">
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4">
                                        <i class="fas fa-save me-2"></i>Save Changes
                                    </button>
                                </form>

                                <hr class="my-4">

                                <h5 class="mb-4"><i class="fas fa-share-alt me-2"></i>Connected Accounts</h5>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fab fa-google text-danger me-2"></i>
                                            <span>Google Account</span>
                                        </div>
                                        <span class="badge bg-success bg-opacity-10 text-success">Connected</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fab fa-facebook text-primary me-2"></i>
                                            <span>Facebook Account</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary">Connect</button>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fab fa-discord text-indigo me-2"></i>
                                            <span>Discord Account</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary">Connect</button>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fab fa-telegram text-info me-2"></i>
                                            <span>Telegram Account</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-primary">Connect</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Change Password -->
                            <div class="tab-pane fade" id="change-password">
                                <h5 class="mb-4"><i class="fas fa-shield-alt me-2"></i>Security Settings</h5>
                                <form action="{{ route('user.settings.change-password') }}" method="POST">
                                    @csrf
                                    <p class="text-muted mb-4">
                                        Change your password to keep your account secure. Ensure it is at least 8 characters long and includes a mix of letters and numbers.
                                    </p>
                                    <div class="mb-3">
                                        <label>Current Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            <input type="password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror">

                                        </div>
                                                                                    @error('current_password')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror">
                                        </div>
                                        @error('new_password')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        <small class="text-muted">Minimum 8 characters with at least one number</small>
                                    </div>
                                    <div class="mb-4">
                                        <label>Confirm New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror">
                                        </div>
                                        @error('new_password_confirmation')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4">
                                        <i class="fas fa-sync-alt me-2"></i>Update Password
                                    </button>
                                </form>

                                <hr class="my-4">

                                <h5 class="mb-3"><i class="fas fa-history me-2"></i>Recent Activity</h5>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <small>Password changed</small>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <small>New device login</small>
                                            <small class="text-muted">1 week ago</small>
                                        </div>
                                        <small class="text-muted">Chrome, Windows 10</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Verification -->
                            <div class="tab-pane fade" id="verification">
                                <h5 class="mb-4"><i class="fas fa-id-card me-2"></i>Identity Verification</h5>
                                <div class="alert alert-info bg-gradient border-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    Verified accounts enjoy higher limits and additional features.
                                </div>

                                <div class="verification-steps">
                                    <div class="step completed">
                                        <div class="step-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="step-content">
                                            <h6>Email Verification</h6>
                                            <p class="text-muted">Verified on 15/07/2025</p>
                                        </div>
                                    </div>
                                    <div class="step">
                                        <div class="step-icon">
                                            <i class="fas fa-id-card"></i>
                                        </div>
                                        <div class="step-content">
                                            <h6>Identity Document</h6>
                                            <p class="text-muted">Upload government-issued ID</p>
                                            <button class="btn btn-sm btn-outline-primary">Upload Now</button>
                                        </div>
                                    </div>
                                    <div class="step">
                                        <div class="step-icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="step-content">
                                            <h6>Address Verification</h6>
                                            <p class="text-muted">Upload proof of address</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Certificates -->
                            <div class="tab-pane fade" id="certificates">
                                <h5 class="mb-4"><i class="fas fa-certificate me-2"></i>Your Certificates</h5>
                                <div class="text-center py-5">
                                    <div class="mb-4">
                                        <i class="fas fa-certificate text-muted" style="font-size: 4rem;"></i>
                                    </div>
                                    <h5>No Certificates Yet</h5>
                                    <p class="text-muted">Complete challenges to earn certificates</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-trophy me-2"></i>View Challenges
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Profile -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center py-4">
                        <div class="avatar bg-primary bg-gradient text-white rounded-circle mx-auto mb-3"
                             style="width:100px; height:100px; line-height:100px; font-size:2.5rem;">
                            {{ ucwords($user->name[0]) ?? '' }}
                            {{ ucwords($user->name[1] ?? '') }}
                        </div>
                        <h4>{{ $user->name }}</h4>
                        <p class="text-muted mb-4">{{ $user->email }}</p>

                        <div class="d-flex justify-content-center gap-2 mb-4">
                            <a href="{{ route('user.deposit') }}" class="btn btn-success btn-sm px-3">
                                <i class="fas fa-plus me-1"></i> Deposit
                            </a>
                            <a href="{{ route('user.withdraw')}}" class="btn btn-outline-success btn-sm px-3">
                                <i class="fas fa-minus me-1"></i> Withdraw
                            </a>
                        </div>

                        <div class="list-group list-group-flush text-start">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span><i class="fas fa-wallet me-2"></i> Cash Balance</span>
                                    <strong> {{ $user->accounts->currency }} {{ $user->accounts->balance }}</strong>

                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span><i class="fas fa-gift me-2"></i> Bonus Balance</span>
                                    <strong> {{ $user->accounts->currency }} {{ $user->accounts->refer_bonus }}</strong>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span><i class="fas fa-calendar-alt me-2"></i> Member Since</span>
                                    <strong>{{ $user->created_at }}</strong>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span><i class="fas fa-id-badge me-2"></i> User ID</span>
                                    <strong>{{ $user->internetId }}</strong>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h6 class="text-start mb-3"><i class="fas fa-chart-line me-2"></i>Account Status</h6>
                        <div class="progress mb-2" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                        <p class="text-start text-muted small">Complete verification to unlock full account features.</p>
                    </div>
                </div>

                <!-- Security Card -->
                <div class="card shadow-sm border-0 mt-4">
                    <div class="card-body">
                        <h5 class="mb-3"><i class="fas fa-shield-alt me-2"></i>Security</h5>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="twoFactor" checked>
                                    <label class="form-check-label" for="twoFactor">Two-Factor Authentication</label>
                                </div>
                            </div>
                            <div class="list-group-item px-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="emailAlerts" checked>
                                    <label class="form-check-label" for="emailAlerts">Email Notifications</label>
                                </div>
                            </div>
                            <div class="list-group-item px-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="smsAlerts">
                                    <label class="form-check-label" for="smsAlerts">SMS Alerts</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm mt-3">
                            <i class="fas fa-eye me-1"></i> View Active Sessions
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Styles */
    .nav-tabs-custom {
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    .nav-tabs-custom .nav-link {
        border: none;
        color: #53774f;
        font-weight: 500;
        padding: 12px 20px;
        border-radius: 0;
        position: relative;
    }

    .nav-tabs-custom .nav-link.active {
        color: #0e9419;
        background: transparent;
        border-bottom: 3px solid #0e9419;
    }

    .nav-tabs-custom .nav-link:hover {
        color: #0e9419;
    }

    .verification-steps .step {
        display: flex;
        padding: 15px 0;
        position: relative;
    }

    .verification-steps .step:not(:last-child):after {
        content: '';
        position: absolute;
        left: 21px;
        top: 40px;
        height: calc(100% - 40px);
        width: 2px;
        background: #e9ecef;
    }

    .verification-steps .step.completed:not(:last-child):after {
        background: #00c853;
    }

    .verification-steps .step-icon {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        z-index: 1;
    }

    .verification-steps .step.completed .step-icon {
        background: #00c853;
        color: white;
    }

    .verification-steps .step-content {
        flex: 1;
    }

    .avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    .bg-gradient {
        background: linear-gradient(135deg, rgba(67,97,238,0.1) 0%, rgba(67,97,238,0.05) 100%);
    }
</style>

<script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    });
</script>
@endsection
