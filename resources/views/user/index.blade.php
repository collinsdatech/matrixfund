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
            <h3>Welcome to your Dashboard {{ $user->name }}</h3>
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
                <h5 class="mt-2 mb-2">Available Packages</h5>

                <div class="row">
                    @foreach($packages as $package)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <p class="mb-1">{{ $package->name }}</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <h4>${{ number_format($package->account_size_min, 2) }}</h4>
                                        @if($package->account_size_max)
                                            <span class="d-inline-flex ms-1"> -
                                                ${{ number_format($package->account_size_max, 2) }}</span>
                                        @endif
                                    </div>
                                    <p class="mb-3">{{ $package->challenge_type }} Program</p>
                                    <a href="{{ route('user.package.billing', $package->id) }}"
                                        class="btn btn-secondary w-100 mb-3">Subscribe Now</a>
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
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-inline-flex align-items-center">
                        <span class="title-icon bg-soft-info fs-16 me-2"><i class="ti ti-info-circle"></i></span>
                        <h5 class="card-title mb-0">User Information</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3 flex-wrap gap-2">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
                                @if ($user->profile_picture)
                                    <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture">
                                @else
                                    <span style="width: 40px; height: 40px;"
                                        class="avatar-title rounded-2 text-center fs-16 bg-primary text-white" width="460"
                                        height="40">
                                        {{-- Default avatar if no profile picture --}}
                                        <h4
                                            style="font-size: 27px !important; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important;">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </h4>
                                @endif
                            </a>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-bold mb-1"><a href="javascript:void(0);">{{ $user->name }}</a>
                                </h6>
                                <div class="d-flex align-items-center item-list">
                                    <p class="d-inline-flex align-items-center">{{ $user->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('user.profile') }}" class="btn btn-sm btn-info">
                                <i class="ti ti-edit"></i> Edit Account</a>
                        </div>
                    </div>


                    <div
                        class="d-flex align-items-center justify-content-between jumbotrun bg-transarent border rounded-2 mb-2 pb-2 flex-wrap gap-2">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-lg mt-3">
                                <span class="text-primary"> <i class="ti ti-coin fs-16"
                                        style="font-size: 20px !important;"></i>
                                </span>
                            </a>
                            <div class="ms-2 mt-2">
                                <h6 class="fs-14 fw-bold mb-1 text-primary">Bonus Balance
                                </h6>
                                <div class="d-flex align-items-center item-list">
                                    <p class="fs-16 d-inline-flex align-items-center"> <b>
                                            {{ $user->accounts->currency }} {{ $user->accounts->refer_bonus }} </b></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div
                        class="d-flex align-items-center justify-content-between jumbotrun bg-dark rounded-2 mb-2 pb-2 flex-wrap gap-2">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="avatar avatar-lg mt-3">
                                <span class="text-white"> <i class="ti ti-coin fs-16"
                                        style="font-size: 20px !important;"></i>
                                </span>
                            </a>
                            <div class="ms-2 mt-2">
                                <h6 class="fs-14 fw-bold mb-1 text-white">Account Balance
                                </h6>
                                <div class="d-flex align-items-center item-list">
                                    <p class="fs-16 d-inline-flex align-items-center"><b>
                                            {{ $user->accounts->currency }} {{ $user->accounts->balance }} </b></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('user.deposit') }}" class="btn w-100 d-block btn-primary">
                            <i class="ti ti-rocket"></i> Fund Account</a>

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
