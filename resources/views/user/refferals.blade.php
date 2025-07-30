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
            <input type="text" class="form-control py-2" value="{{ $user->internetId }}" readonly>
            <button class="btn btn-outline-primary copy-btn" title="Copy to clipboard">
              <i class="far fa-copy"></i>
            </button>
          </div>
        </div>

        <!-- Referral Link -->
        <div class="col-md-6">
          <label class="form-label fw-bold">Your Referral Link</label>
          <div class="input-group">
            <input type="text" class="form-control py-2" value="{{ $referralLink }}" readonly>
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
              <h3 class="mb-0">{{ $referralCount }}</h3>
            </div>
          </div>
          <div class="progress mt-2" style="height: 4px;">
            <div class="progress-bar" style="width: {{ min($referralCount, 100) }}%"></div>
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
              <h3 class="mb-0">${{ number_format($referralEarnings, 2) }}</h3>
            </div>
          </div>
          <div class="progress mt-2" style="height: 4px;">
            <div class="progress-bar bg-success" style="width: {{ min($referralEarnings/50*100, 100) }}%"></div>
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
              <h3 class="mb-0">{{ $referrals->where('deposit_amount', '>', 0)->count() }}</h3>
            </div>
          </div>
          <div class="progress mt-2" style="height: 4px;">
            <div class="progress-bar bg-warning" style="width: {{ min($referrals->where('deposit_amount', '>', 0)->count()/max($referralCount,1)*100, 100) }}%"></div>
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
          <button class="btn btn-primary px-3 {{ $referralEarnings < 50 ? 'disabled' : '' }}">
            Claim Earnings <i class="fas fa-arrow-right ms-2"></i>
          </button>
          <small class="text-muted mt-1">Minimum $50 to withdraw</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Referrals Table -->
  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
      <h5 class="mb-3">
        <i class="fas fa-users me-2"></i>Your Referrals ({{ $referralCount }})
      </h5>

      @if($referrals->count() > 0)
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Joined Date</th>
              <th>Status</th>
              <th>Earnings</th>
            </tr>
          </thead>
          <tbody>
            @foreach($referrals as $referral)
            <tr>
              <td>{{ $referral->name }}</td>
              <td>{{ $referral->email }}</td>
              <td>{{ $referral->created_at->format('M d, Y') }}</td>
              <td>
                <span class="badge bg-{{ $referral->deposit_amount > 0 ? 'success' : 'warning' }}">
                  {{ $referral->deposit_amount > 0 ? 'Active' : 'Pending' }}
                </span>
              </td>
              <td>${{ $referral->deposit_amount > 0 ? $referralBonus : '0.00' }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
      <div class="text-center py-5">
        <i class="fas fa-users-slash text-muted fs-1 mb-3"></i>
        <h5>No Referrals Yet</h5>
        <p class="text-muted">Share your referral link to start earning commissions</p>
      </div>
      @endif
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

      @if($referrals->count() > 0)
      <div class="chart-container bg-light rounded-3 p-4">
        <!-- You would implement a real chart here with chart.js or similar -->
        <canvas id="referralChart" height="300"></canvas>
      </div>
      @else
      <div class="chart-container bg-light rounded-3 p-4 text-center">
        <div class="py-5">
          <i class="fas fa-chart-line text-muted fs-1 mb-3"></i>
          <h5>No Data Available Yet</h5>
          <p class="text-muted">Your affiliate performance metrics will appear here</p>
        </div>
      </div>
      @endif

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

<script>
// You would add JavaScript here to handle the copy buttons and chart initialization
document.querySelectorAll('.copy-btn').forEach(button => {
  button.addEventListener('click', function() {
    const input = this.parentElement.querySelector('input');
    input.select();
    document.execCommand('copy');

    // Show tooltip or notification
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

// Initialize chart if there are referrals
@if($referrals->count() > 0)
const ctx = document.getElementById('referralChart').getContext('2d');
const chart = new Chart(ctx, {
  type: 'line',
  data: {

    labels: {!! json_encode($referralDates) !!},    datasets: [{
      label: 'Referrals',
      data: {!! json_encode(range(1, $referrals->count())) !!},
      borderColor: '#4361ee',
      backgroundColor: 'rgba(67, 97, 238, 0.1)',
      tension: 0.1,
      fill: true
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      }
    },
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
@endif
</script>

<style>


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
