@extends('layouts.user')

<style>
    .radio-select .btn-check:checked + label {
        background-color: rgba(87, 124, 107, 0.15);
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
        color: white;
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

    li {
      background-color: transparent !important;
      border: 0px solid blue !important;
    }
</style>

@section('content')

<div class="container mt-5">
    <!-- Header Coupon Banner -->
    <div class="card mb-4 border-0 shadow-sm bg-success text-white rounded-4">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex">
                    <div class="w-50">
                        <img src="{{ asset('user/assets/img/medal/medal2.svg') }}" class="w-75 mt-2" alt="Trophy">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="form-check text-white mb-2 d-flex align-items-center">
                            <i class="ti ti-check me-2"></i>
                            <label class="form-check-label">Special Coupon for Any Challenge!</label>
                        </div>
                        <div class="form-check text-white mb-2 d-flex align-items-center">
                            <i class="ti ti-check me-2"></i>
                            <label class="form-check-label">One time fee is reduced by %</label>
                        </div>
                        <div class="form-check text-white d-flex align-items-center">
                            <i class="ti ti-check me-2"></i>
                            <label class="form-check-label">Offer valid for new account purchases only</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>

                <!-- Right Side: Coupon Copy Box -->
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="p-3 rounded-4" style="background-color:rgba(255, 255, 255, 0.08);">
                        <label for="coupon" class="form-label mb-1 text-white">Your Coupon Code</label>
                        <div class="input-group">
                            <input type="text" id="coupon" class="form-control rounded-start-pill" placeholder="Enter code here" readonly>
                            <button class="btn btn-light text-success rounded-end-pill" type="button" onclick="copyCoupon()">Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment and Plan Section -->
    <div class="row">
        <!-- Left: Payment Method -->
        <div class="col-lg-7">
            <div class="card" style="background-color:rgb(240, 240, 240); border-radius: 20px;">
                <div class="card-header fw-bold">Choose Your Payment Method</div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-3">
                        <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio1" autocomplete="off" checked>
                            <label class="w-100 fw-bold" for="radio1">
                                <span class="checkbox-fake"></span>
                                Fiat Transaction/Card
                            </label>
                        </div>
                        <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio2" autocomplete="off">
                            <label class="w-100 fw-bold" for="radio2">
                                <span class="checkbox-fake"></span>
                                Crypto Payment
                            </label>
                        </div>
                        <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio3" autocomplete="off">
                            <label class="w-100 fw-bold" for="radio3">
                                <span class="checkbox-fake"></span>
                                Balance
                            </label>
                        </div>
                        <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio4" autocomplete="off">
                            <label class="w-100 fw-bold" for="radio4">
                                <span class="checkbox-fake"></span>
                                Other
                            </label>
                        </div>
                    </div>

                    <div class="text-center my-4">
                        <div class="fs-14 text-muted">Total Amount to be Paid</div>
                        <div class="display-5 fw-bold text-success">$100.00</div>
                    </div>

                    <form>
                        @csrf
                        <input type="hidden" name="trade_type" id="trade_type" value="">
                        <input type="hidden" name="platform" id="platform" value="">
                        <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow">
                            Enroll Now &rarr;
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right: Plan Summary -->
        <div class="col-lg-5">
            <div class="card" style="background-color:rgb(240, 240, 240); border-radius: 20px;">
                <div class="card-header fw-bold">Plan Summary</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><span>Plan</span><span>Synthetic Indices | $5,000.00</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Platform</span><span>MT5</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Server</span><span>MetaTrader 5</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Price</span><span>$100.00</span></li>
                        <li class="list-group-item">
                            <div class="input-group">
                                <input type="text" class="form-control rounded-5" placeholder="Coupon Code">&nbsp;&nbsp;
                                <button class="btn btn-primary rounded-5">Apply Coupon</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="input-group">
                                <input type="number" class="form-control rounded-5" placeholder="Amount">&nbsp;&nbsp;
                                <button class="btn btn-primary rounded-5">Apply</button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between"><span>Apply Bonus</span><span>$0.00</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Discount</span><span>$0.00</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Add-Ons</span><span>$0.00</span></li>
                        <li class="list-group-item d-flex justify-content-between"><span>Swap</span><span>-</span></li>
                        <li class="list-group-item d-flex justify-content-between fw-bold"><span>Total Amount</span><span>$100.00</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyCoupon() {
        const input = document.getElementById("coupon");
        input.select();
        document.execCommand("copy");
        alert("Coupon copied!");
    }
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
