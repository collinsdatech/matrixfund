@extends('layouts.user')

@section('content')
  <!-- Main Content -->
<div class="main-content">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Affiliates</h3>
    <div class="btn-tabs">
      <button class="btn btn-dark btn-sm">Affiliates</button>
      <button class="btn btn-outline-secondary btn-sm">Stats</button>
    </div>
  </div>

  <!-- Referral Code -->
  <div class="info-card">
    <h5>Below is your code to start earning FREE rewards</h5>
    <div class="mb-3">
      <label class="form-label">Your Code</label>
      <div class="input-group">
        <input type="text" class="form-control" value="qooj219614" readonly>
        <button class="btn btn-outline-secondary copy-icon" title="Copy">
          📋
        </button>
      </div>
    </div>
    <div>
      <label class="form-label">Link</label>
      <div class="input-group">
        <input type="text" class="form-control" value="https://prop.matrixtradersfund.com/register/?code=qooj219614" readonly>
        <button class="btn btn-outline-secondary copy-icon" title="Copy">
          📋
        </button>
      </div>
    </div>
    <img src="https://via.placeholder.com/900x140?text=Get+10%25+Deposit+Bonus" class="header-img mt-3" alt="Bonus Banner">
  </div>

  <!-- Stats -->
  <div class="row g-3 mb-3">
    <div class="col-md-3">
      <div class="stat-card">
        <h6>Affiliates</h6>
        <h4>0</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">
        <h6>Total Earnings</h6>
        <h4>$0.00</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">
        <h6>Unique Depositors</h6>
        <h4>0</h4>
      </div>
    </div>
    <div class="col-md-3 d-flex align-items-center justify-content-center">
      <button class="btn btn-claim">Claim →</button>
    </div>
  </div>

  <!-- Chart Placeholder -->
  <div class="chart-placeholder">
    <h6>Affiliated Users & FTD Count</h6>
    <p>No data available yet.</p>
  </div>
</div>
@endsection
