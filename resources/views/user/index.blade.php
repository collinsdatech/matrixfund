@extends('layouts.user')

@section('content')

    <style>
        .challenge-card {
            background: linear-gradient(135deg, #ffffff 0%, #fffffa 100%);
        }

        .stat-card {
            text-align: center;
            padding: 1.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--gray-600);
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .metric-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .metric-row:last-child {
            border-bottom: none;
        }

        .metric-label {
            color: var(--gray-700);
            font-weight: 500;
        }

        .metric-value {
            font-weight: 600;
            color: var(--gray-800);
        }

        .progress-custom {
            height: 8px;
            border-radius: 4px;
        }

        .progress-bar-success {
            background: linear-gradient(90deg, #dd9e00, #34d399);
        }

        .progress-bar-warning {
            background: linear-gradient(90deg, #dd9e00, #fbbf24);
        }


        .icon-wrapper {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .icon-blue {
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            color: var(--primary-blue);
        }

        .icon-green {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            color: var(--success-green);
        }

        .icon-red {
            background: linear-gradient(135deg, #fee2e2, #fecaca);
            color: var(--danger-red);
        }

        .icon-yellow {
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            color: var(--warning-yellow);
        }

        .chart-placeholder {
            height: 300px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border: 2px dashed var(--gray-300);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-600);
        }

        .balance-display {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #dd9e00, #33014b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>


    <div class="row">

        <div class="col-xxl-8 col-xl-8 col-sm-12 col-12 ">
            <h4 class="mb-3">Dashboard</h4>
            @if($userPackages->count() > 0)

                <h5 class="fw-light mb-3 mt-2">Your package: {{ $packages->first()->name ?? 'N/A' }}</h5>

                <!-- Header Stats -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <span class="avatar avatar-lg bg-primary flex-shrink-0">
                                        <i class="ti ti-building fs-16"></i>
                                    </span>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Total Companies</p>
                                        <h4>950</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <span class="avatar avatar-lg bg-success flex-shrink-0">
                                        <i class="ti ti-users fs-16"></i>
                                    </span>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Total Traders</p>
                                        <h4>1,200</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <span class="avatar avatar-lg bg-danger flex-shrink-0">
                                        <i class="ti ti-chart-line fs-16"></i>
                                    </span>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Total Trades</p>
                                        <h4>5,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="card challenge-card">
                            <div class="card-header bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">
                                        <i class="fas fa-trophy text-warning me-2"></i>
                                        Practice Challenge
                                    </h5>
                                    <button class="btn btn-outline-info">
                                        <i class="fas fa-download me-2"></i>Export Trade Report
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <h3 class="balance-display">$10,000.00</h3>
                                        <p class="text-muted mb-0">Current Balance</p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h6 class="text-primary mb-1">Synthetic Indices Challenge</h6>
                                        <small class="text-muted">Trading Challenge Program</small>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h6 class="text-success mb-2">Profit Progress</h6>
                                        <div class="progress progress-custom mb-2">
                                            <div class="progress-bar progress-bar-success" style="width: 30%"></div>
                                        </div>
                                        <small class="text-muted">$30 / $800 (8% profit target)</small>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Portfolio Performance</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-placeholder">
                                    <div class="text-center">
                                        <i class="fas fa-chart-area fa-3x mb-3"></i>
                                        <p class="mb-0">Performance Chart Widget</p>
                                        <small class="text-muted">Real-time portfolio tracking</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Market Overview</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-placeholder">
                                    <div class="text-center">
                                        <i class="fas fa-globe fa-2x mb-3"></i>
                                        <p class="mb-0">Market Data</p>
                                        <small class="text-muted">Live market indices</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Recent Trading Activity</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Time</th>
                                                <th>Symbol</th>
                                                <th>Type</th>
                                                <th>Volume</th>
                                                <th>Price</th>
                                                <th>P&L</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="7" class="text-center text-muted py-4">
                                                    <i class="fas fa-inbox fa-2x mb-2"></i>
                                                    <p class="mb-0">No trading activity yet</p>
                                                    <small>Start your first trade to see activity here</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            @else

                <div class="row">
                    @foreach($packages as $package)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="card shadow bg-light mb-3 rounded-4" style="border: 0px solid #33014b;">
                                <div class="card-body">
                                    <div class="lightgray2 mb-3 rounded-4 pt-3 text-center">
                                        <img src="{{ asset('user/assets/img/medal/medal5.svg') }}" class="w-50" alt="">
                                        <p class="mb-1 px-2 text-black">{{ $package->name }}</p>
                                    <div class="d-flex justify-content-center text-center mb-2 px-2">
                                        <h5>${{ number_format($package->account_size_min, 2) }}</h5>
                                        @if($package->account_size_max)
                                            <span class="d-inline-flex text-primary ms-1 fs-12"> -
                                                ${{ number_format($package->account_size_max, 2) }}</span>
                                        @endif
                                    </div>
                                    <p class="mb-3 px-2">{{ $package->challenge_type }} Program</p>
                                    <a href="{{ route('user.package.billing', $package->id) }}" class="btn btn-secondary w-100 rounded-4">Subscribe Now</a>
                                    </div>
                                    <span class="d-block mb-1">Features</span>
                                    <p class="mb-2">Includes in this package:</p>
                                    <ul>
                                        <li class="d-flex align-items-center mb-2">
                                            <span class="pricing-check bg-success rounded-circle me-2">
                                                <i class="ti ti-check fs-10"></i>
                                            </span>Profit Target: {{ $package->profit_target }}%
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <span class="pricing-check bg-success rounded-circle me-2">
                                                <i class="ti ti-check fs-10"></i>
                                            </span>Max Drawdown: {{ $package->max_drawdown }}%
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <span class="pricing-check bg-success rounded-circle me-2">
                                                <i class="ti ti-check fs-10"></i>
                                            </span>Daily Loss Limit: {{ $package->daily_loss_limit }}%
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <span
                                                class="pricing-check {{ $package->commission_rate > 0 ? 'bg-success' : 'bg-secondary-transparent' }} rounded-circle me-2">
                                                <i class="ti ti-check fs-10"></i>
                                            </span>Commission: {{ $package->commission_rate }}%
                                        </li>
                                        <li class="d-flex align-items-center mb-2">
                                            <span
                                                class="pricing-check {{ $package->leverage ? 'bg-success' : 'bg-secondary-transparent' }} rounded-circle me-2">
                                                <i class="ti ti-check fs-10"></i>
                                            </span>Leverage: {{ $package->leverage }}
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span
                                                class="pricing-check {{ $package->profit_share > 0 ? 'bg-success' : 'bg-secondary-transparent' }} rounded-circle me-2">
                                                <i class="ti ti-check fs-10"></i>
                                            </span>Profit Share: {{ $package->profit_share }}%
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @endif

        </div>



        <!-- User Information (col-4) -->
        <div class="col-xxl-4 col-xl-5">
            <div class="card shadow bg-light flex-fill rounded-4" style="border: 0px solid">
                <div class="card-header">
                    <div class="d-inline-flex align-items-center">
                        <h5 class="card-title mb-0">User Information</h5>
                    </div>
                </div>
                <div class="card-body">
      <div class="d-flex align-items-center justify-content-between mb-3 p-2 py-3 rounded-4 lightgray2" style="padding-right: 20px !important;">
    <!-- Avatar and User Info -->
    <div class="d-flex align-items-center">
        <a href="javascript:void(0);" class="avatar avatar-xl flex-shrink-0">
            @if ($user->profile_picture)
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture">
            @else
                <span style="width: 60px; height: 60px;"
                    class="avatar-title rounded-4 d-flex justify-content-center align-items-center text-center fs-16 bg-primary text-white" width="460" height="40">
                    <h4 style="font-size: 27px !important;">
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                    </h4>
                </span>
            @endif
        </a>
        <div class="ms-2">
            <h6 class="fs-14 fw-bold mb-1">
                <a href="javascript:void(0);">{{ $user->name }}</a>
            </h6>
            <div class="d-flex align-items-center item-list">
                <p class="d-inline-flex align-items-center">{{ $user->email }}</p>
            </div>
        </div>
    </div>

    <!-- Edit Button -->
    <div>
        <a href="{{ route('user.profile') }}"
   class="bg-primary text-white d-flex justify-content-center align-items-center"
   style="float: right; width: 35px; height: 35px; border-radius: 50%;">
    <i class="ti ti-edit"></i>
</a>

    </div>
</div>



                    <div
                        class="d-flex align-items-center justify-content-between rounded-2 mb-2 flex-wrap gap-2 mb-3 p-2 py-3 rounded-4 lightgray2">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-lg">
                                <span class="bg-primary text-white d-flex justify-content-center align-items-center p-2 rounded-3"> <i class="ti ti-coin fs-16"
                                        style="font-size: 20px !important;"></i>
                                </span>
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-bold text-primary">Bonus Balance
                                </h6>
                                <div class="d-flex align-items-center item-list">
                                    <p class="fs-16 d-inline-flex align-items-center"> <b>
                                            {{ $user->accounts->currency }} {{ $user->accounts->refer_bonus }} </b></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div
                        class="d-flex align-items-center justify-content-between rounded-2 mb-2 flex-wrap gap-2 mb-3 p-2 py-3 pt-2.3 rounded-4 lightgray2">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-lg">
                                <span class="bg-success text-white d-flex justify-content-center align-items-center p-2 rounded-3"> <i class="ti ti-coin fs-16"
                                        style="font-size: 20px !important;"></i>
                                </span>
                            </a>
                            <div class="ms-2 mt-2">
                                <h6 class="fs-14 fw-bold mb-1">Account Balance
                                </h6>
                                <div class="d-flex align-items-center item-list">
                                    <p class="fs-16 d-inline-flex align-items-center"><b>
                                            {{ $user->accounts->currency }} {{ $user->accounts->balance }} </b></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex justify-content-between mt-3 gap-3">
    <button type="button" class="btn w-100 d-block btn-primary rounded-4" style="height: 45px;"
        onclick="window.location.href='{{ route('user.deposit') }}'">
        <i class="ti ti-rocket" style="font-size: 18px;"></i> Fund Account
    </button>

    <button type="button" class="btn w-100 d-block btn-success rounded-4" style="height: 45px;"
        onclick="window.location.href='{{ route('user.deposit') }}'">
        <i class="ti ti-download mt-2" style="font-size: 18px;"></i> Withdraw
    </button>
</div>

                </div>

            </div>













            <div class="card shadow bg-success flex-fill rounded-4 mt-3" style="border: 0px solid">
                <div class="mb-3 rounded-4 pt-3 text-center">
                                        <img src="{{ asset('user/assets/img/medal/trophy.svg') }}" class="w-50 mt-4" alt="">
                </div>
                <div class="card-body">

                <h3 class="text-center text-white">Register for our FX challenge</h3>
                <p class="text-center text-light">We're are thrilled to announce that registeration</p>

                    <div class="d-flex justify-content-between mt-3 gap-3">

    <button type="button" class="btn w-100 d-block align-items-center btn-light text-success rounded-4" style="height: 45px;">
        Learn More <i class="ti ti-chevron-right" style="font-size: 18px;"></i>
    </button>
</div>

                </div>

            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    </div>
@endsection
