@extends('layouts.user')

@section('content')

<!-- DreamPOS-Style Billing UI Replication -->
<div class="container mt-5">
  <!-- Header Coupon Banner -->
  <div class="card bg-success text-white p-4 mb-4">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h5 class="fw-bold mb-3">Your Coupon Code!</h5>
        <div class="d-flex gap-2 mb-2">
          <span class="badge bg-light text-dark"><i class="fas fa-check-circle"></i> Special Coupon for Any Challenge</span>
          <span class="badge bg-light text-dark"><i class="fas fa-check-circle"></i> One time fee is reduced by %</span>
          <span class="badge bg-light text-dark"><i class="fas fa-check-circle"></i> New account offer only</span>
        </div>
        <div class="input-group w-50">
          <input type="text" class="form-control" placeholder="Enter Coupon">
          <button class="btn btn-dark"><i class="fas fa-copy"></i></button>
        </div>
      </div>
      <div class="col-md-4 text-end">
        <img src="/assets/images/payment-banner.png" class="img-fluid" alt="Banner Illustration">
      </div>
    </div>
  </div>

  <!-- Payment Summary Section -->
  <div class="row">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header fw-bold">Choose Your Payment Method</div>
        <div class="card-body">
          <div class="btn-group mb-3" role="group">
            <input type="radio" class="btn-check" name="payment_method" id="card" checked>
            <label class="btn btn-outline-primary" for="card">Fiat Transactions/Card</label>

            <input type="radio" class="btn-check" name="payment_method" id="crypto">
            <label class="btn btn-outline-primary" for="crypto">Crypto Payment</label>

            <input type="radio" class="btn-check" name="payment_method" id="balance">
            <label class="btn btn-outline-primary" for="balance">Balance</label>

            <input type="radio" class="btn-check" name="payment_method" id="other">
            <label class="btn btn-outline-primary" for="other">Other</label>
          </div>

          <h3 class="text-center my-4 fw-bold">$500.00</h3>
          <div class="d-grid">
            <button class="btn btn-success">Enroll Now</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card">
        <div class="card-header fw-bold">Plan Summary</div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><span>Plan</span><span>Synthetic Indices Instant Funding | $5,000.00</span></li>
            <li class="list-group-item d-flex justify-content-between"><span>Platform</span><span>MT5</span></li>
            <li class="list-group-item d-flex justify-content-between"><span>Server</span><span>MetaTrader 5</span></li>
            <li class="list-group-item d-flex justify-content-between"><span>Price</span><span>$500.00</span></li>
            <li class="list-group-item">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Coupon Code">
                <button class="btn btn-primary">Apply Coupon</button>
              </div>
            </li>
            <li class="list-group-item">
              <div class="input-group">
                <input type="number" class="form-control" placeholder="Amount">
                <button class="btn btn-primary">Apply</button>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between"><span>Apply Bonus</span><span>$0.00</span></li>
            <li class="list-group-item d-flex justify-content-between"><span>Discount</span><span>$0.00</span></li>
            <li class="list-group-item d-flex justify-content-between"><span>Add-Ons</span><span>$0.00</span></li>
            <li class="list-group-item d-flex justify-content-between"><span>Swap</span><span>-</span></li>
            <li class="list-group-item d-flex justify-content-between fw-bold"><span>Total Amount</span><span>$500.00</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Optional: Include Bootstrap Icons + FontAwesome if DreamPOS includes them -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


@endsection
