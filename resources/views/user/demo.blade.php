@extends('layouts.user')

@section('content')
<div class="main-content">
    <!-- Dashboard Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="page-title mb-1">
                <i class="fas fa-tachometer-alt text-primary me-2"></i>Trading Dashboard
            </h3>
            <p class="text-muted small mb-0">Monitor your challenges and account performance</p>
        </div>
        <div class="d-flex align-items-center">
            <select class="form-select form-select-sm w-auto me-3">
                <option selected>Select Challenge</option>
                <option>Synthetic Indices</option>
                <option>Forex Program</option>
                <option>Crypto Challenge</option>
            </select>
            <button class="btn btn-sm btn-primary">
                <i class="fas fa-plus me-1"></i> New Challenge
            </button>
        </div>
    </div>

    <div class="row g-4">
        <!-- Challenge Card 1 -->
        <div class="col-md-4">
            <div class="card pricing-card shadow-sm border-0 h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-line me-2"></i>Synthetic Indices Practice
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Account Size</span>
                            <span class="fw-bold">$10,000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Challenge Type</span>
                            <span class="badge bg-info">Practice</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Profit Target</span>
                            <span class="fw-bold text-success">15%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Max Drawdown</span>
                            <span class="fw-bold text-danger">8%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Daily Loss</span>
                            <span class="fw-bold text-warning">8%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Leverage</span>
                            <span class="fw-bold">1:1000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Profit Share</span>
                            <span class="fw-bold">0%</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-play me-2"></i>Start Challenge
                    </button>
                </div>
                <div class="card-footer bg-light">
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i> No time limits • Payouts: Daily
                    </small>
                </div>
            </div>
        </div>

        <!-- Challenge Card 2 -->
        <div class="col-md-4">
            <div class="card pricing-card shadow-sm border-0 h-100">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-pie me-2"></i>Synthetic Indices
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Account Size</span>
                            <span class="fw-bold">$5k–$50k</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Challenge</span>
                            <span class="badge bg-primary">One Phase</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Profit Target</span>
                            <span class="fw-bold text-success">15%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Max Drawdown</span>
                            <span class="fw-bold text-danger">8%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Daily Loss</span>
                            <span class="fw-bold text-warning">8%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Leverage</span>
                            <span class="fw-bold">1:1000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Profit Share</span>
                            <span class="fw-bold text-success">80%</span>
                        </li>
                    </ul>
                    <button class="btn btn-success w-100">
                        <i class="fas fa-play me-2"></i>Start Challenge
                    </button>
                </div>
                <div class="card-footer bg-light">
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i> No time limits • Payouts: Monthly
                    </small>
                </div>
            </div>
        </div>

        <!-- Challenge Card 3 -->
        <div class="col-md-4">
            <div class="card pricing-card shadow-sm border-0 h-100">
                <div class="card-header bg-purple text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-globe me-2"></i>Forex Program
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Account Size</span>
                            <span class="fw-bold">$15k–$200k</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Challenge</span>
                            <span class="badge bg-warning text-dark">Two Phase</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Profit Target</span>
                            <span class="fw-bold text-success">P1 10%, P2 8%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Max Drawdown</span>
                            <span class="fw-bold text-danger">12%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Daily Loss</span>
                            <span class="fw-bold text-warning">5%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Leverage</span>
                            <span class="fw-bold">1:100</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Profit Share</span>
                            <span class="fw-bold text-success">80%</span>
                        </li>
                    </ul>
                    <button class="btn btn-purple w-100">
                        <i class="fas fa-play me-2"></i>Start Challenge
                    </button>
                </div>
                <div class="card-footer bg-light">
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i> No time limits • Payouts: Monthly
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Account Sidebar -->
    <div class="row mt-4">
        <div class="col-md-4 offset-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar bg-primary text-white rounded-circle me-3" style="width: 50px; height: 50px; line-height: 50px;">
                            CO
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">collinsobaseki0</h6>
                            <small class="text-muted">collinsobaseki0@gmail.com</small>
                        </div>
                    </div>

                    <div class="account-stats mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Cash Balance</span>
                            <span class="fw-bold">$0.00</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Bonus Balance</span>
                            <span class="fw-bold text-success">$0.00</span>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mb-4">
                        <button class="btn btn-success flex-grow-1">
                            <i class="fas fa-plus me-1"></i> Deposit
                        </button>
                        <button class="btn btn-outline-secondary flex-grow-1">
                            <i class="fas fa-minus me-1"></i> Withdraw
                        </button>
                    </div>

                    <div class="text-center">
                        <img src="{{ asset('assets/img/trading-trophy.png') }}" class="img-fluid" alt="Trading Trophy" style="max-height: 120px;">
                        <h6 class="mt-2 mb-1">Your Trading Journey</h6>
                        <p class="text-muted small mb-0">Complete challenges to unlock achievements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom DreamsPOS Theme Styles */
    :root {
        --primary: #4361ee;
        --secondary: #6c757d;
        --success: #28a745;
        --danger: #dc3545;
        --warning: #ffc107;
        --info: #17a2b8;
        --purple: #6f42c1;
        --light: #f8f9fa;
        --dark: #343a40;
    }

    .main-content {
        padding: 20px;
        background-color: #f5f7fb;
    }

    .card {
        border-radius: 12px;
        border: none;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .card-header {
        border-radius: 12px 12px 0 0 !important;
        padding: 15px 20px;
    }

    .pricing-card .list-group-item {
        border-color: rgba(0,0,0,0.05);
        padding: 8px 0;
    }

    .btn-purple {
        background-color: var(--purple);
        color: white;
    }

    .btn-purple:hover {
        background-color: #5a32a8;
        color: white;
    }

    .bg-purple {
        background-color: var(--purple) !important;
    }

    .account-stats {
        background-color: rgba(0,0,0,0.02);
        padding: 15px;
        border-radius: 8px;
    }

    .form-select {
        border-radius: 8px;
        padding: 8px 15px;
    }

    .page-title {
        font-weight: 600;
        color: var(--dark);
    }

    .avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }
</style>
@endsection
