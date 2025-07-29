@extends('layouts.user')

@section('content')
   <style>
        :root {
            --primary-color: #1a1a1a;
            --secondary-color: #6c757d;
            --accent-color: #0066cc;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-bg: #f8f9fa;
            --card-border: #e9ecef;
            --text-muted: #6c757d;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .notifications-container {
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .notifications-header {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--card-border);
        }

        .notifications-title {
            font-weight: 600;
            color: var(--primary-color);
            margin: 0;
            font-size: 1.75rem;
        }

        .filter-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            border: 1px solid var(--card-border);
            background: white;
            color: var(--secondary-color);
            font-weight: 500;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-btn:hover {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .filter-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .notification-card {
            background: white;
            border-radius: 12px;
            margin-bottom: 1rem;
            border: 1px solid var(--card-border);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .notification-card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }

        .notification-header {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            position: relative;
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .notification-icon.login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .notification-icon.success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%);
            color: white;
        }

        .notification-icon.warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .notification-content {
            flex: 1;
        }

        .notification-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.25rem;
        }

        .notification-subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .notification-time {
            color: var(--text-muted);
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .read-more-link {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.2s ease;
        }

        .read-more-link:hover {
            color: var(--primary-color);
            gap: 0.5rem;
        }

        .close-btn {
            background: none;
            border: none;
            color: var(--text-muted);
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.2s ease;
            border-radius: 6px;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-btn:hover {
            background: #f8f9fa;
            color: var(--danger-color);
        }

        .notification-details {
            background: #f8f9fa;
            border-top: 1px solid var(--card-border);
            padding: 1.5rem;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .detail-label {
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .detail-value {
            font-size: 0.9rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-success {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }

        .unread-indicator {
            position: absolute;
            top: 1rem;
            right: 4rem;
            width: 8px;
            height: 8px;
            background: var(--accent-color);
            border-radius: 50%;
        }

        @media (max-width: 768px) {
            .notifications-header {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }

            .filter-buttons {
                justify-content: center;
            }

            .notification-header {
                flex-direction: column;
                align-items: stretch;
                gap: 1rem;
            }

            .notification-details .row {
                gap: 1rem;
            }

            .detail-item {
                margin-bottom: 1rem;
            }
        }
    </style>
<div class="notifications-container">
    <!-- Header Section -->
    <div class="notifications-header d-flex justify-content-between align-items-center">
        <h1 class="notifications-title">
            <i class="ti ti-bell me-2"></i>
            Notifications
        </h1>
        <div class="filter-buttons">
            <a href="#" class="filter-btn active"><i class="ti ti-list"></i> All</a>
            <a href="#" class="filter-btn"><i class="ti ti-login"></i> Login</a>
            <a href="#" class="filter-btn"><i class="ti ti-info-circle"></i> General</a>
        </div>
    </div>

    <!-- Notifications Loop -->
    @forelse ($notifications as $notification)
        <div class="notification-card" data-type="{{ strtolower($notification->type) }}">
            @if ($notification->status === 'unread')
                <div class="unread-indicator"></div>
            @endif

            <div class="notification-header">
                <div class="d-flex">
                    <div class="notification-icon {{ strtolower($notification->type) }}">
                        <i class="{{ $notification->icon }}"></i>
                    </div>
                    <div class="notification-content">
                        <h5 class="notification-title">{{ $notification->type }}</h5>
                        <p class="notification-subtitle">{{ $notification->message }}</p>
                        <div class="notification-time">
                            <i class="ti ti-clock"></i>
                            {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                        </div>
                        <a href="#" class="read-more-link mt-2">
                            Read More <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <button class="close-btn"><i class="ti ti-x"></i></button>
            </div>
        </div>
    @empty
        <div class="no-notifications text-center py-5">
            <i class="ti ti-bell-off fs-1 mb-3 text-muted"></i>
            <h4 class="text-muted">No notifications found</h4>
            <p class="text-muted">You're all caught up!</p>
        </div>
    @endforelse
</div>

@endsection
