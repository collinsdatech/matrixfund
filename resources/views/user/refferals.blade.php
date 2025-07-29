@extends('layouts.user')

@section('content')
<div class="main-content">
  <!-- Header Section -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h3 class="mb-1">
        <i class="fas fa-users-rectangle text-primary me-2"></i>Affiliate Program
      </h3>
      <p class="text-muted small mb-0">Earn commissions by referring traders to our platform</p>
    </div>
    <div class="btn-tabs">
      <button class="btn btn-primary btn-sm px-3 active">
        <i class="fas fa-user-plus me-1"></i> Affiliates
      </button>
      <button class="btn btn-outline-secondary btn-sm px-3">
        <i class="fas fa-chart-line me-1"></i> Stats
      </button>
    </div>
  </div>

  <!-- Referral Section -->
  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
      <div class="d-flex align-items-center mb-3">
        <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-3">
          <i class="fas fa-gift text-primary"></i>
        </div>
        <div>
          <h5 class="mb-0">Start Earning Today</h5>
          <p class="text-muted small mb-0">Share your unique referral code and earn rewards</p>
        </div>
      </div>

      <div class="row g-3">
        <!-- Referral Code -->
        <div class="col-md-6">
          <label class="form-label fw-bold">Your Referral Code</label>
          <div class="input-group">
            <input type="text" class="form-control py-2" value="qooj219614" readonly>
            <button class="btn btn-outline-primary copy-btn" title="Copy to clipboard">
              <i class="far fa-copy"></i>
            </button>
          </div>
        </div>
        
        <!-- Referral Link -->
        <div class="col-md-6">
          <label class="form-label fw-bold">Your Referral Link</label>
          <div class="input-group">
            <input type="text" class="form-control py-2" value="https://prop.matrixtradersfund.com/register/?code=qooj219614" readonly>
            <button class="btn btn-outline-primary copy-btn" title="Copy to clipboard">
              <i class="far fa-copy"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Social Share Buttons -->
      <div class="mt-4">
        <h6 class="fw-bold mb-2">Share via:</h6>
        <div class="d-flex gap-2">
          <button class="btn btn-sm btn-outline-primary">
            <i class="fab fa-facebook-f me-1"></i> Facebook
          </button>
          <button class="btn btn-sm btn-outline-info">
            <i class="fab fa-twitter me-1"></i> Twitter
          </button>
          <button class="btn btn-sm btn-outline-success">
            <i class="fab fa-whatsapp me-1"></i> WhatsApp
          </button>
          <button class="btn btn-sm btn-outline-secondary">
            <i class="fas fa-envelope me-1"></i> Email
          </button>
        </div>
      </div>

      <!-- Promotional Banner -->
      <div class="mt-4 text-center">
        <img src="https://via.placeholder.com/900x140/4361ee/ffffff?text=Get+10%25+Deposit+Bonus+For+Every+Referral" 
             class="img-fluid rounded-3" 
             alt="Referral Bonus Banner">
        <p class="text-muted small mt-2">Customize your promotional materials in the marketing kit</p>
      </div>
    </div>
  </div>

  <!-- Stats Dashboard -->
  <div class="row g-3 mb-4">
    <div class="col-md-3">
      <div class="card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-3">
              <i class="fas fa-users text-primary"></i>
            </div>
            <div>
              <h6 class="text-muted mb-1">Affiliates</h6>
              <h3 class="mb-0">0</h3>
            </div>
          </div>
          <div class="progress mt-2" style="height: 4px;">
            <div class="progress-bar" style="width: 0%"></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="bg-success bg-opacity-10 p-2 rounded-circle me-3">
              <i class="fas fa-dollar-sign text-success"></i>
            </div>
            <div>
              <h6 class="text-muted mb-1">Total Earnings</h6>
              <h3 class="mb-0">$0.00</h3>
            </div>
          </div>
          <div class="progress mt-2" style="height: 4px;">
            <div class="progress-bar bg-success" style="width: 0%"></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="bg-warning bg-opacity-10 p-2 rounded-circle me-3">
              <i class="fas fa-user-check text-warning"></i>
            </div>
            <div>
              <h6 class="text-muted mb-1">Unique Depositors</h6>
              <h3 class="mb-0">0</h3>
            </div>
          </div>
          <div class="progress mt-2" style="height: 4px;">
            <div class="progress-bar bg-warning" style="width: 0%"></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="card stat-card h-100">
        <div class="card-body text-center d-flex flex-column justify-content-center">
          <div class="mb-2">
            <i class="fas fa-coins text-primary fs-2"></i>
          </div>
          <button class="btn btn-primary px-3">
            Claim Earnings <i class="fas fa-arrow-right ms-2"></i>
          </button>
          <small class="text-muted mt-1">Minimum $50 to withdraw</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Analytics Chart -->
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">
          <i class="fas fa-chart-bar text-primary me-2"></i>Affiliate Performance
        </h5>
        <div class="dropdown">
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Last 30 Days
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Last 7 Days</a></li>
            <li><a class="dropdown-item" href="#">Last 30 Days</a></li>
            <li><a class="dropdown-item" href="#">Last 90 Days</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>
      </div>
      
      <div class="chart-container bg-light rounded-3 p-4 text-center">
        <div class="py-5">
          <i class="fas fa-chart-line text-muted fs-1 mb-3"></i>
          <h5>No Data Available Yet</h5>
          <p class="text-muted">Your affiliate performance metrics will appear here</p>
        </div>
      </div>
      
      <div class="mt-3 d-flex justify-content-between">
        <small class="text-muted">
          <i class="fas fa-info-circle me-1"></i> Data updates every 24 hours
        </small>
        <button class="btn btn-sm btn-outline-primary">
          <i class="fas fa-download me-1"></i> Export Data
        </button>
      </div>
    </div>
  </div>
</div>

<style>
  /* Custom Styles */
  .main-content {
    padding: 20px;
    background-color: #f8f9fa;
  }
  
  .card {
    border: none;
    border-radius: 12px;
    transition: transform 0.2s;
  }
  
  .card:hover {
    transform: translateY(-2px);
  }
  
  .stat-card {
    background-color: white;
    box-shadow: 0 4px 6px rgba(0,0,0,0.03);
  }
  
  .stat-card h3 {
    font-weight: 700;
  }
  
  .copy-btn {
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .chart-container {
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .btn-tabs .btn {
    border-radius: 8px;
    min-width: 100px;
  }
  
  .btn-tabs .btn.active {
    box-shadow: 0 2px 8px rgba(67,97,238,0.2);
  }
  
  .form-control {
    border-radius: 8px;
    padding: 10px 15px;
  }
  
  .input-group-text {
    border-radius: 8px 0 0 8px;
  }
</style>

<script>
  // Simple copy functionality
  document.querySelectorAll('.copy-btn').forEach(button => {
    button.addEventListener('click', function() {
      const input = this.parentElement.querySelector('input');
      input.select();
      document.execCommand('copy');
      
      // Show tooltip feedback
      const tooltip = new bootstrap.Tooltip(this, {
        title: 'Copied!',
        trigger: 'manual'
      });
      tooltip.show();
      
      setTimeout(() => {
        tooltip.hide();
      }, 1000);
    });
  });
</script>
@endsection
