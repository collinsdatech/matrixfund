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
            <span class="dp-username">{{ $user->username }}</span>
            <div class="dp-avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
        </div>
    </div>

    <!-- Payment Methods & KYC Section -->
    <div class="dp-row">
        <!-- Payment Methods -->
        <div class="dp-col-md-6">
            <div class="dp-card py-5">
                <div class="dp-card-body">
                    <h2 class="mb-3">Payment Methods</h2>
                    <p class="dp-text-muted">
                        Due to AML laws we're required to ask for some details to verify aspects such as: Who you are, Source of funds and more. The information we gather is for the benefit of Matrix and yourself.
                    </p>
                    <div class="dp-badge-group">
                        <span class="dp-badge dp-badge-success">
                            <i class="fas fa-coins"></i>&nbsp;&nbsp;&nbsp; Cryptocurrencies
                        </span>
                        <span class="dp-badge dp-badge-primary">
                            <i class="fas fa-university"></i>&nbsp;&nbsp;&nbsp; Bank Transfer
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- KYC Completion -->
        <div class="dp-col-md-6">
            <div class="dp-card dp-card-success py-5">
                <div class="dp-card-body text-center">
                    <h2 class="mb-3 text-white">Request your Payouts</h2>
                    <p>Minimum payout amount for withdrawal is $20.<br>Complete KYC verification to enable payout requests.</p>
                    <button class="dp-btn dp-btn-light dp-btn-sm rounded-5">
                        Complete KYC <i class="fas fa-arrow-right dp-ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Balances & Funded Accounts -->
    <div class="dp-row">
        <!-- Wallet Section -->
        <div class="dp-col-md-6 dp-col-lg-3">
            <div class="dp-card">
                <div class="dp-card-header">
                    <h6><i class="fas fa-wallet dp-icon-primary"></i> Wallet</h6>
                </div>
                <div class="dp-card-body">
                    <div class="lightgray2 border-0 p-3 rounded-4 mb-2">
                        <span>
                            <p><i class="fas fs-20 fa-dollar-sign dp-text-success"></i></p> Cash Balance
                        </span>
                        <p class="dp-balance-amount">$0.00</p>
                    </div>
                    <div class="lightgray2 border-0 p-3 rounded-4 mb-2">
                        <span>
                            <p><i class="fas fs-20 fa-gift dp-text-success"></i></p> Bonus Balance
                        </span>
                        <p class="dp-balance-amount">$0.00</p>
                    </div>
                    <div class="lightgray2 border-0 p-3 rounded-4">
                        <span>
                            <p><i class="fas fs-20 fa-hourglass-half dp-text-muted"></i></p> Pending Transactions
                        </span>
                        <p class="dp-balance-amount">$0.00</p>
                    </div>
                    <button class="dp-btn dp-btn-success dp-mt-3 dp-w-100" data-bs-toggle="modal" data-bs-target="#withdrawModal">
                        Withdraw
                    </button>
                </div>
            </div>
        </div>

        <!-- Funded Accounts (x3) -->
        @for ($i = 0; $i < 3; $i++)
        <div class="dp-col-md-6 dp-col-lg-3">
            <div class="dp-card">
                <div class="dp-card-header">
                    <h6 class="dp-text-muted"><i class="fas fa-chart-line"></i>&nbsp;&nbsp; Funded Account</h6>
                </div>
                <div class="dp-card-body">
                    <div class="lightgray2 border-0 p-3 rounded-4 mb-2">
                        <span>
                            <p><i class="fas fs-20 fa-coins dp-text-primary"></i></p> Trading Profit
                        </span>
                        <p class="dp-balance-amount">$0.00</p>
                    </div>
                    <div class="lightgray2 border-0 p-3 rounded-3">
                        <span>
                            <p><i class="fas fs-20 fa-percentage dp-text-info"></i></p> Basic Profit Share
                        </span>
                        <p class="dp-balance-amount">$0.00 (0%)</p>
                    </div>
                    <button class="dp-btn dp-btn-outline dp-btn-success dp-mt-3 dp-w-100" data-bs-toggle="modal" data-bs-target="#transferModal{{$i}}">
                        Transfer To Wallet
                    </button>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Transactions Table -->
    <div class="dp-card">
        <div class="dp-card-body dp-text-muted">
            No transaction yet
        </div>
    </div>
</div>

<!-- Withdraw Modal with Styled Tabs -->
<div class="modal fade modal-lg" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold" id="withdrawModalLabel">Wallet Transactions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <!-- Tab Navigation - Custom Styled -->
                <ul class="nav nav-pills mb-4 wallet-tabs" id="walletTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active d-flex align-items-center" id="deposit-tab" data-bs-toggle="pill" data-bs-target="#deposit" type="button" role="tab">
                            <i class="fas fa-arrow-down me-2"></i>
                            <span>Deposit</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="withdraw-tab" data-bs-toggle="pill" data-bs-target="#withdraw" type="button" role="tab">
                            <i class="fas fa-arrow-up me-2"></i>
                            <span>Withdraw</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="redeem-tab" data-bs-toggle="pill" data-bs-target="#redeem" type="button" role="tab">
                            <i class="fas fa-gift me-2"></i>
                            <span>Redeem</span>
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="walletTabsContent">
                    <!-- Deposit Tab -->
                    <div class="tab-pane fade show active" id="deposit" role="tabpanel">
                        <div class="dp-card p-4 mb-3">
                            <h6 class="fw-bold mb-3"><i class="fas fa-money-bill-wave text-primary me-2"></i> Deposit Funds</h6>

                            <div class="-mt-2 lightgray p-3 rounded-4">
                                Select Crypto
                        <!-- Group Container -->
                            <div class="d-flex">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio1" autocomplete="off" checked>
                            <label class="w-100" style="font-weight: 700" for="radio1">
                                <span class="checkbox-fake"></span>
                                Bitcoin (BTC)
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio2" autocomplete="off">
                            <label class="w-100" for="radio2" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Ethurem (ETH)
                            </label>
                            </div>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio3" autocomplete="off">
                            <label class="w-100" for="radio3" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Litcoin (LTC)
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio4" autocomplete="off">
                            <label class="w-100" for="radio4" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Solana (SOL)
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio5" autocomplete="off">
                            <label class="w-100" for="radio5" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                USDT
                            </label>
                            </div>
                            </div>

                            
                    </div>


                            <form>
                                <div class="mb-3 mt-3">
                                    <label for="withdrawAmount" class="form-label small text-muted">Amount (USD)</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control form-control-lg rounded-5" id="withdrawAmount" placeholder="0.00">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="alert alert-light border mb-4 rounded-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-exclamation-circle text-warning me-2"></i>
                                <div>
                                    <small class="d-block text-muted">Withdrawal Notice</small>
                                    <small>Minimum withdrawal amount is $20. Processing may take 1-3 business days.</small>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg w-100 py-3 fw-bold rounded-3">
                            <i class="fas fa-arrow-down me-2"></i> Fund Account
                        </button>
                    </div>

                    <!-- Withdraw Tab -->
                    <div class="tab-pane fade" id="withdraw" role="tabpanel">
                        <div class="dp-card p-4 mb-3">
                            <h6 class="fw-bold mb-3"><i class="fas fa-money-bill-wave text-primary me-2"></i> Withdraw Funds</h6>

                            <div class="-mt-2 lightgray p-3 rounded-4">
                                Select Crypto
                        <!-- Group Container -->
                            <div class="d-flex">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio1" autocomplete="off" checked>
                            <label class="w-100" style="font-weight: 700" for="radio1">
                                <span class="checkbox-fake"></span>
                                Bitcoin (BTC)
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio2" autocomplete="off">
                            <label class="w-100" for="radio2" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Ethurem (ETH)
                            </label>
                            </div>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio3" autocomplete="off">
                            <label class="w-100" for="radio3" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Litcoin (LTC)
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio4" autocomplete="off">
                            <label class="w-100" for="radio4" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Solana (SOL)
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio5" autocomplete="off">
                            <label class="w-100" for="radio5" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                USDT
                            </label>
                            </div>
                            </div>

                            
                    </div>



                            <div class="mt-3 p-3 rounded-4 lightgray">
                                Select Crypto
                        <!-- Group Container -->
                            <div class="d-flex">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault3" id="banktrans2" autocomplete="off" checked>
                            <label class="w-100" style="font-weight: 700" for="banktrans2">
                                <span class="checkbox-fake"></span>
                                Bank Transfer
                            </label>
                            </div>
                            </div>

                            
                    </div>


                            <form>
                                <div class="mb-3 mt-3">
                                    <label for="withdrawAmount" class="form-label small text-muted">Amount (USD)</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control form-control-lg rounded-5" id="withdrawAmount" placeholder="0.00">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="alert alert-light border mb-4 rounded-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-exclamation-circle text-warning me-2"></i>
                                <div>
                                    <small class="d-block text-muted">Withdrawal Notice</small>
                                    <small>Minimum withdrawal amount is $20. Processing may take 1-3 business days.</small>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg w-100 py-3 fw-bold rounded-3">
                            <i class="fas fa-arrow-up me-2"></i> Confirm Withdrawal
                        </button>
                    </div>

                    <!-- Redeem Tab -->
                    <div class="tab-pane fade" id="redeem" role="tabpanel">
                        <div class="dp-card p-4 mb-3 rounded-4">
                            <h6 class="fw-bold mb-3"><i class="fas fa-gift text-primary me-2"></i> Redeem Bonus</h6>
                            <form>
                                
                                <div class="mb-3">
                                    <label for="redeemCode" class="form-label small text-muted">Promo Code</label>
                                    <input type="text" class="form-control form-control-lg rounded-5" id="redeemCode" placeholder="Enter promo code (if any)">
                                </div>
                            </form>
                        </div>
                        <div class="alert alert-light border mb-4 rounded-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-info-circle text-primary me-2"></i>
                                <div>
                                    <small class="d-block text-muted">Bonus Information</small>
                                    <small>Redeem your bonus balance to your wallet. Bonus may have specific terms.</small>
                                </div>
                            </div>
                        </div> 
                        <button type="button" class="btn btn-primary btn-lg w-100 py-3 fw-bold rounded-3">
                            <i class="fas fa-gift me-2"></i> Redeem Bonus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Transfer Modals (one for each funded account) -->
@for ($i = 0; $i < 3; $i++)
<div class="modal fade" id="transferModal{{$i}}" tabindex="-1" aria-labelledby="transferModalLabel{{$i}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transferModalLabel{{$i}}">Transfer From Funded Account #{{$i+1}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="transferAmount{{$i}}" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="transferAmount{{$i}}" placeholder="Enter amount to transfer">
                    </div>
                    <div class="mb-3">
                        <label for="transferSource{{$i}}" class="form-label">Transfer From</label>
                        <select class="form-select" id="transferSource{{$i}}">
                            <option value="profit">Trading Profit ($0.00)</option>
                            <option value="share">Basic Profit Share ($0.00)</option>
                        </select>
                    </div>
                </form>
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-exclamation-triangle me-2"></i> Transfers to your wallet may affect your account balance and trading limits.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Confirm Transfer</button>
            </div>
        </div>
    </div>
</div>
@endfor

<!-- Styles (include inline or in your CSS file) -->
<style>
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

    .dp-container {
        padding: 20px;
        background-color: #f5f7fb;
    }

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

    .dp-card {
        background: white;
        border-radius: var(--dp-radius);
        box-shadow: var(--dp-shadow);
        overflow: hidden;
        height: 100%;
        transition: transform 0.3s ease;
    }

    .dp-card:hover {
        transform: translateY(-3px);
    }

    .dp-card-header {
        padding: 15px 20px;
        border-bottom: 1px solid var(--dp-border);
    }

    .dp-card-body {
        padding: 20px;
    }

    .dp-card-success {
        background-color: var(--dp-success);
        color: white;
    }

    .dp-icon-primary {
        color: var(--dp-primary);
        margin-right: 10px;
    }

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
        font-weight: 900;
        color: #000000;
        font-size: 20px;
    }

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

    .dp-mt-3 { margin-top: 15px; }
    .dp-mr-2 { margin-right: 10px; }
    .dp-ml-2 { margin-left: 10px; }

    .dp-text-muted { color: #6c757d; }
    .dp-text-primary { color: var(--dp-primary); }
    .dp-text-success { color: var(--dp-success); }
    .dp-text-info { color: var(--dp-info); }

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

        /* Custom Tab Styling */
    .wallet-tabs {
        background:rgba(108, 117, 125, 0.05);
        border-radius: 12px;
        padding: 5px;
        margin-top: 20px;
        border-radius: 30px;
        border: 1px solid rgba(108, 117, 125, 0.08);
        text-align: center;
        display: flex;
        justify-content: center;
    }
    
    .wallet-tabs .nav-item {
        border-radius: 30px !important;
    }
    
    
    .wallet-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        padding: 10px 15px;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
        border-radius: 30px !important;
    }
    
    .wallet-tabs .nav-link:hover {
        color:green;
        background: rgba(67, 97, 238, 0.1);
    }
    
    .wallet-tabs .nav-link.active {
        background:green;
        color: white;
        box-shadow: 0 4px 12px rgba(67, 97, 238, 0.2);
    }
    
    .wallet-tabs .nav-link i {
        font-size: 0.9rem;
    }
    
    /* Form Styling */
    .form-control-lg, .form-select-lg {
        padding: 12px 15px;
        border-radius: 8px;
        border: 1px solid #e0e6ed;
    }
    
    .input-group-text {
        background-color: #f8f9fa;
        border: 1px solid #e0e6ed;
        border-radius: 50px !important;
        width: 50px;
        display: flex;
        justify-content: center
    } 
    
    /* Card Styling */
    .dp-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        border: none;
    }
    
    /* Alert Styling */
    .alert-light {
        background-color: #f8f9fa;
        border-color: #e0e6ed;
    }
    
    /* Button Styling */
    .btn-primary {
        background-color:green;
        border: none;
    }
    
    .btn-primary:hover {
        background-color: #3a56d4;
    }
    
    .rounded-3 {
        border-radius: 12px !important;
    }

      .radio-select .btn-check:checked + label {
    background-color:rgba(87, 124, 107, 0.15);
    color: green;
    border-color: green;
  }

  .radio-select label {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    border: 1px solid green;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: background 0.3s, border-color 0.3s;
    color: green;
    font-size: 12px;
  }

  .checkbox-fake {
    width: 1.2rem;
    height: 1.2rem;
    border: 1px solid green;
    border-radius: 0.25rem;
    background-color: rgba(87, 124, 107, 0.15);
    display: inline-block;
    flex-shrink: 0;
    position: relative;
  }

  .btn-check:checked + label .checkbox-fake {
    background-color: green;
    border-color: green;
    color: white
  }

  .btn-check:checked + label .checkbox-fake::after {
    content: "";
    position: absolute;
    top: 0.1rem;
    left: 0.35rem;
    width: 0.4rem;
    height: 0.75rem;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
  }
</style>
@endsection

