<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Challenge Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #2962ff;
            --secondary: #455a64;
            --success: #00c853;
            --warning: #ffab00;
            --danger: #ff5252;
            --info: #00b8d4;
            --light: #f8f9fa;
            --dark: #212529;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        body {
            background-color: #f5f7fb;
            color: #37474f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .dashboard-card {
            background: white;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            border: none;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary), #448aff);
            color: white;
            padding: 20px;
            border-bottom: none;
            border-radius: 16px 16px 0 0 !important;
        }

        .metric-row {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f0f4f8;
        }

        .metric-row:last-child {
            border-bottom: none;
        }

        .metric-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .metric-content {
            flex-grow: 1;
        }

        .metric-label {
            font-size: 0.9rem;
            color: #78909c;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .metric-value {
            font-size: 1.4rem;
            font-weight: 700;
            display: block;
        }

        .text-danger { color: var(--danger); }
        .text-warning { color: var(--warning); }
        .text-success { color: var(--success); }
        .text-primary { color: var(--primary); }
        .text-muted { color: #78909c; }

        .balance-display {
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            padding: 30px;
            border-radius: 16px;
            margin: 20px 0;
            text-align: center;
        }

        .challenge-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .challenge-subtitle {
            color: #78909c;
            margin-bottom: 20px;
        }

        .progress-container {
            background-color: #f1f5f9;
            border-radius: 10px;
            height: 14px;
            overflow: hidden;
            margin: 20px 0;
        }

        .progress-bar {
            background: linear-gradient(90deg, var(--primary), #448aff);
            height: 100%;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: var(--card-shadow);
            text-align: center;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 15px;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #78909c;
            font-size: 0.9rem;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e7ee;
        }

        .brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        .brand i {
            margin-right: 10px;
        }

        .user-profile {
            display: flex;
            align-items: center;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="brand">
            <i class="bi bi-graph-up"></i>TradingMaster
        </div>
        <div class="user-profile">
            <span>Welcome, Trader!</span>
            <div class="user-avatar">
                <i class="bi bi-person"></i>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Challenge Card -->
                <div class="dashboard-card">
                    <div class="card-header">
                        <h3 class="mb-1"><i class="bi bi-trophy me-2"></i>Practice Challenge</h3>
                        <p class="mb-0">Synthetic Indices Challenge</p>
                    </div>

                    <div class="card-body p-4">
                        <!-- Balance Display -->
                        <div class="balance-display">
                            <div class="challenge-title">Challenge Balance</div>
                            <h1 class="display-4 fw-bold">$10,000.00</h1>
                            <div class="challenge-subtitle">Profit Target: Phase 1 & 2</div>

                            <!-- Progress Bar -->
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 45%"></div>
                            </div>
                            <p>Phase 1 Progress: 45% complete</p>
                        </div>

                        <!-- Metrics Grid -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <!-- Max Drawdown -->
                                <div class="metric-row">
                                    <div class="metric-icon bg-danger bg-opacity-10 text-danger">
                                        <i class="bi bi-graph-down-arrow"></i>
                                    </div>
                                    <div class="metric-content">
                                        <span class="metric-label">Max Drawdown</span>
                                        <span class="metric-value text-danger">8.00%</span>
                                    </div>
                                </div>

                                <!-- Daily Loss Limit -->
                                <div class="metric-row">
                                    <div class="metric-icon bg-warning bg-opacity-10 text-warning">
                                        <i class="bi bi-exclamation-triangle"></i>
                                    </div>
                                    <div class="metric-content">
                                        <span class="metric-label">Daily Loss Limit</span>
                                        <span class="metric-value text-warning">8.00%</span>
                                    </div>
                                </div>

                                <!-- Commission -->
                                <div class="metric-row">
                                    <div class="metric-icon bg-success bg-opacity-10 text-success">
                                        <i class="bi bi-percent"></i>
                                    </div>
                                    <div class="metric-content">
                                        <span class="metric-label">Commission</span>
                                        <span class="metric-value text-success">0.00%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Leverage -->
                                <div class="metric-row">
                                    <div class="metric-icon bg-primary bg-opacity-10 text-primary">
                                        <i class="bi bi-arrows-fullscreen"></i>
                                    </div>
                                    <div class="metric-content">
                                        <span class="metric-label">Leverage</span>
                                        <span class="metric-value text-primary">1:1000</span>
                                    </div>
                                </div>

                                <!-- Profit Share -->
                                <div class="metric-row">
                                    <div class="metric-icon bg-secondary bg-opacity-10 text-muted">
                                        <i class="bi bi-pie-chart"></i>
                                    </div>
                                    <div class="metric-content">
                                        <span class="metric-label">Profit Share</span>
                                        <span class="metric-value text-muted">0.00%</span>
                                    </div>
                                </div>

                                <!-- Challenge Status -->
                                <div class="metric-row">
                                    <div class="metric-icon bg-success bg-opacity-10 text-success">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                    <div class="metric-content">
                                        <span class="metric-label">Challenge Status</span>
                                        <span class="metric-value">
                                            <span class="badge bg-success">In Progress</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Stats -->
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-currency-exchange"></i>
                                </div>
                                <div class="stat-value">29</div>
                                <div class="stat-label">Total Trades</div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-icon bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                                <div class="stat-value">72%</div>
                                <div class="stat-label">Win Rate</div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-icon bg-info bg-opacity-10 text-info">
                                    <i class="bi bi-speedometer2"></i>
                                </div>
                                <div class="stat-value">5.2%</div>
                                <div class="stat-label">Current Drawdown</div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="stat-value">12</div>
                                <div class="stat-label">Days Remaining</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Note -->
                <div class="text-center mt-4 text-muted">
                    <p>Synthetic Indices Challenge - TradingMaster Dashboard</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
