@extends('layouts.user')

@section('content')
<div class="dp-container">
    <!-- Page Header -->
    <div class="dp-page-header">
        <div class="dp-header-title">
            <h3><i class="fas fa-money-bill-wave dp-icon-primary"></i> Payout</h3>
            <p class="dp-text-muted">Manage your withdrawals and account transfers</p>
        </div>
        <div class="dp-user-profile">
            <span class="dp-username">{{$user->username}}</span>
            <div class="dp-avatar">
                 {{ ucwords($user->name[0]) ?? '' }}
                            {{ ucwords($user->name[1] ?? '') }}            
            </div>
        </div>
    </div>

    <!-- Top Notice Cards -->
    <div class="dp-row">
        <!-- Payment Methods Card -->
        <div class="dp-col-md-8">
            <div class="dp-card">
                <div class="dp-card-header">
                    <h5><i class="fas fa-credit-card dp-icon-primary"></i> Payment Methods</h5>
                </div>
                <div class="dp-card-body">
                    <p class="dp-text-muted">
                        Due to AML laws we're required to ask for some details to verify aspects such as: Who you are, Source of funds and more. The information we gather is for the benefit of Matrix and yourself.
                    </p>
                    <div class="dp-badge-group">
                        <span class="dp-badge dp-badge-success">
                            <i class="fas fa-coins"></i> Cryptocurrencies
                        </span>
                        <span class="dp-badge dp-badge-primary">
                            <i class="fas fa-university"></i> Bank Transfer
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- KYC Notice Card -->
        <div class="dp-col-md-4">
            <div class="dp-card dp-card-success">
                <div class="dp-card-body">
                    <h5><i class="fas fa-id-card"></i> Request your Payouts</h5>
                    <p>Minimum payout amount for withdrawal is $20.<br>Complete KYC verification to enable payout requests.</p>
                    <button class="dp-btn dp-btn-light dp-btn-sm">
                        Complete KYC <i class="fas fa-arrow-right dp-ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Wallet and Accounts Grid -->
    <div class="dp-row">
        <!-- Wallet Balance Card -->
        <div class="dp-col-md-6 dp-col-lg-3">
            <div class="dp-card">
                <div class="dp-card-header">
                    <h5><i class="fas fa-wallet dp-icon-primary"></i> Wallet</h5>
                </div>
                <div class="dp-card-body">
                    <div class="dp-balance-item">
                        <span class="dp-balance-label">
                            <i class="fas fa-dollar-sign dp-text-success"></i> Cash Balance
                        </span>
                        <span class="dp-balance-amount">$0.00</span>
                    </div>
                    <div class="dp-balance-item">
                        <span class="dp-balance-label">
                            <i class="fas fa-gift dp-text-warning"></i> Bonus Balance
                        </span>
                        <span class="dp-balance-amount">$0.00</span>
                    </div>
                    <div class="dp-balance-item">
                        <span class="dp-balance-label">
                            <i class="fas fa-hourglass-half dp-text-muted"></i> Pending Transactions
                        </span>
                        <span class="dp-balance-amount">$0.00</span>
                    </div>
                    <button class="dp-btn dp-btn-success dp-mt-3 dp-w-100">
                        <i class="fas fa-money-bill-wave dp-mr-2"></i> Withdraw
                    </button>
                </div>
            </div>
        </div>

        <!-- Funded Account Cards -->
        @for($i = 0; $i < 3; $i++)
        <div class="dp-col-md-6 dp-col-lg-3">
            <div class="dp-card">
                <div class="dp-card-header">
                    <h5 class="dp-text-muted"><i class="fas fa-chart-line"></i> Funded Account</h5>
                </div>
                <div class="dp-card-body">
                    <div class="dp-balance-item">
                        <span class="dp-balance-label">
                            <i class="fas fa-coins dp-text-primary"></i> Trading Profit
                        </span>
                        <span class="dp-balance-amount">$0.00</span>
                    </div>
                    <div class="dp-balance-item">
                        <span class="dp-balance-label">
                            <i class="fas fa-percentage dp-text-info"></i> Basic Profit Share
                        </span>
                        <span class="dp-balance-amount">$0.00 (0%)</span>
                    </div>
                    <button class="dp-btn dp-btn-outline dp-btn-success dp-mt-3 dp-w-100">
                        <i class="fas fa-exchange-alt dp-mr-2"></i> Transfer To Wallet
                    </button>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<style>
    /* DreamPOS Theme Variables */
    :root {
        --dp-primary: #4361ee;
        --dp-success: #16a34a;
        --dp-warning: #ffc107;
        --dp-danger: #dc3545;
        --dp-info: #17a2b8;
        --dp-light: #f8f9fa;
        --dp-dark: #212529;
        --dp-border: #e0e6ed;
        --dp-radius: 12px;
        --dp-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }

    /* Base Container */
    .dp-container {
        padding: 20px;
        background-color: #f5f7fb;
    }

    /* Page Header */
    .dp-page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--dp-border);
    }

    .dp-header-title h3 {
        font-weight: 700;
        color: var(--dp-dark);
        margin-bottom: 5px;
    }

    .dp-text-muted {
        color: #6c757d;
    }

    .dp-user-profile {
        display: flex;
        align-items: center;
    }

    .dp-username {
        margin-right: 15px;
        font-weight: 500;
    }

    .dp-avatar {
        width: 40px;
        height: 40px;
        background-color: var(--dp-primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    /* Grid System */
    .dp-row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px 20px;
    }

    .dp-col-md-4, .dp-col-md-6, .dp-col-md-8, .dp-col-lg-3 {
        padding: 0 15px;
        margin-bottom: 20px;
    }

    .dp-col-md-4 { width: 33.33%; }
    .dp-col-md-6 { width: 50%; }
    .dp-col-md-8 { width: 66.66%; }
    .dp-col-lg-3 { width: 25%; }

    /* Card Styles */
    .dp-card {
        background: white;
        border-radius: var(--dp-radius);
        box-shadow: var(--dp-shadow);
        overflow: hidden;
        height: 100%;
        transition: transform 0.3s ease;
    }

    .dp-card:hover {
        transform: translateY(-5px);
    }

    .dp-card-header {
        padding: 15px 20px;
        border-bottom: 1px solid var(--dp-border);
    }

    .dp-card-header h5 {
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .dp-card-body {
        padding: 20px;
    }

    .dp-card-success {
        background-color: var(--dp-success);
        color: white;
    }

    /* Icons */
    .dp-icon-primary {
        color: var(--dp-primary);
        margin-right: 10px;
    }

    /* Badges */
    .dp-badge-group {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .dp-badge {
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
    }

    .dp-badge-primary {
        background-color: rgba(67,97,238,0.1);
        color: var(--dp-primary);
    }

    .dp-badge-success {
        background-color: rgba(22,163,74,0.1);
        color: var(--dp-success);
    }

    /* Balance Items */
    .dp-balance-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid var(--dp-border);
    }

    .dp-balance-item:last-child {
        border-bottom: none;
    }

    .dp-balance-label {
        display: flex;
        align-items: center;
    }

    .dp-balance-label i {
        margin-right: 10px;
        font-size: 0.9rem;
    }

    .dp-balance-amount {
        font-weight: 600;
    }

    /* Buttons */
    .dp-btn {
        border: none;
        border-radius: var(--dp-radius);
        padding: 10px 20px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .dp-btn-sm {
        padding: 8px 15px;
        font-size: 0.85rem;
    }

    .dp-btn-success {
        background-color: var(--dp-success);
        color: white;
    }

    .dp-btn-success:hover {
        background-color: #138a3d;
    }

    .dp-btn-light {
        background-color: white;
        color: var(--dp-success);
    }

    .dp-btn-light:hover {
        background-color: #f8f9fa;
    }

    .dp-btn-outline {
        background-color: transparent;
        border: 1px solid var(--dp-success);
        color: var(--dp-success);
    }

    .dp-btn-outline:hover {
        background-color: rgba(22,163,74,0.05);
    }

    .dp-w-100 {
        width: 100%;
    }

    /* Spacing Utilities */
    .dp-mt-3 { margin-top: 15px; }
    .dp-mr-2 { margin-right: 10px; }
    .dp-ml-2 { margin-left: 10px; }

    /* Text Colors */
    .dp-text-primary { color: var(--dp-primary); }
    .dp-text-success { color: var(--dp-success); }
    .dp-text-warning { color: var(--dp-warning); }
    .dp-text-info { color: var(--dp-info); }
    .dp-text-muted { color: #6c757d; }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .dp-col-md-4, .dp-col-md-6, .dp-col-md-8, .dp-col-lg-3 {
            width: 50%;
        }
    }

    @media (max-width: 768px) {
        .dp-col-md-4, .dp-col-md-6, .dp-col-md-8, .dp-col-lg-3 {
            width: 100%;
        }

        .dp-page-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .dp-user-profile {
            margin-top: 15px;
        }
    }
</style>
@endsection
