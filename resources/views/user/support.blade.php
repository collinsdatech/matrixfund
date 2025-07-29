@extends('layouts.user') {{-- DreamPos Layout --}}

@section('content')
<div class="content">
    <div class="container-fluid">

        <!-- Enhanced Page Header -->
        <div class="page-header mb-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="page-title mb-2">
                        <i class="fas fa-headset me-2 text-primary"></i>Support Center
                    </h3>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-light text-dark me-3">
                            <i class="fas fa-user-circle me-1"></i> User ID: <strong>1066</strong>
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success">
                            <i class="fas fa-check-circle me-1"></i> Premium Support
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-outline-primary">
                        <i class="fas fa-history me-1"></i> View Tickets
                    </button>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Main Support Section -->
            <div class="col-xl-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <!-- Contact Channels -->
                        <div class="row mb-5">
                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 h-100 bg-light">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-4">
                                            <i class="ti ti-mail text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Support Team</h5>
                                            <h4 class="text-primary mb-3">support@matrix.com</h4>
                                            <p class="text-muted mb-2">
                                                <i class="fas fa-clock me-2"></i> Average response: <strong>12 hours</strong>
                                            </p>
                                            <p class="text-muted small">
                                                For technical issues, account questions, and platform support
                                            </p>
                                            <button class="btn btn-primary mt-2">
                                                <i class="fas fa-paper-plane me-2"></i> Contact Support
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="p-4 border rounded-3 h-100 bg-light">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-success bg-opacity-10 p-3 rounded-circle me-4">
                                            <i class="fas fa-bullhorn text-success fs-4"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Financial Team</h5>
                                            <h4 class="text-success mb-3">marketing@matrix.com</h4>
                                            <p class="text-muted mb-2">
                                                <i class="fas fa-clock me-2"></i> Average response: <strong>24 hours</strong>
                                            </p>
                                            <p class="text-muted small">
                                                For partnership inquiries, media requests, and marketing opportunities
                                            </p>
                                            <button class="btn btn-success mt-2">
                                                <i class="fas fa-paper-plane me-2"></i> Contact Marketing
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Live Support Section -->
                        <div class="p-4 border rounded-3 mb-5 bg-gradient-light">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5 class="text-primary mb-1">
                                        <i class="fas fa-user-shield me-2"></i> Immediate Assistance
                                    </h5>
                                    <p class="text-muted mb-md-0">
                                        Connect with our live support team for real-time help with urgent matters.
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    <button class="btn btn-success px-4">
                                        <i class="fas fa-comment-dots me-2"></i> Start Live Chat
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Section -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="mb-0">
                                    <i class="fas fa-question-circle me-2 text-primary"></i>Knowledge Base
                                </h4>
                                <div class="input-group" style="max-width: 300px;">
                                    <input type="text" class="form-control" placeholder="Search FAQs...">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Enhanced Tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#all" data-bs-toggle="tab">
                                        <i class="fas fa-layer-group me-2"></i>All Topics
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#general" data-bs-toggle="tab">
                                        <i class="fas fa-cog me-2"></i>General
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us" data-bs-toggle="tab">
                                        <i class="fas fa-info-circle me-2"></i>About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#trading" data-bs-toggle="tab">
                                        <i class="fas fa-chart-line me-2"></i>Trading
                                    </a>
                                </li>
                            </ul>

                            <!-- FAQ Accordions -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all">
                                    <div class="accordion custom-accordion" id="faqAccordion">
                                        <!-- FAQ Item 1 -->
                                        <div class="accordion-item border-0 mb-3">
                                            <h2 class="accordion-header" id="faq1">
                                                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
                                                    <i class="fas fa-wallet me-3 text-primary"></i>
                                                    <span>How fast can I get my payout?</span>
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body bg-light rounded-bottom-3">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-primary me-3">
                                                            <i class="fas fa-info-circle"></i>
                                                        </div>
                                                        <div>
                                                            <p>Payouts are typically processed within 1-2 business days after approval. For wire transfers, please allow additional time for bank processing.</p>
                                                            <p class="mb-0"><strong>Processing times by method:</strong></p>
                                                            <ul class="mb-0">
                                                                <li>Cryptocurrency: 1-2 hours</li>
                                                                <li>E-wallets: 24 hours</li>
                                                                <li>Bank transfers: 3-5 business days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ Item 2 -->
                                        <div class="accordion-item border-0 mb-3">
                                            <h2 class="accordion-header" id="faq2">
                                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                                    <i class="fas fa-percentage me-3 text-success"></i>
                                                    <span>What is the profit split?</span>
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body bg-light rounded-bottom-3">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-3">
                                                            <i class="fas fa-info-circle"></i>
                                                        </div>
                                                        <div>
                                                            <p>Our standard profit split structure is as follows:</p>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Account Level</th>
                                                                        <th>Trader Share</th>
                                                                        <th>Company Share</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Starter</td>
                                                                        <td>70%</td>
                                                                        <td>30%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Intermediate</td>
                                                                        <td>75%</td>
                                                                        <td>25%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Advanced</td>
                                                                        <td>80%</td>
                                                                        <td>20%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Professional</td>
                                                                        <td>85%</td>
                                                                        <td>15%</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- FAQ Item 3 -->
                                        <div class="accordion-item border-0 mb-3">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                                    <i class="fas fa-arrows-alt-h me-3 text-warning"></i>
                                                    <span>What is my leverage?</span>
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body bg-light rounded-bottom-3">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-warning me-3">
                                                            <i class="fas fa-info-circle"></i>
                                                        </div>
                                                        <div>
                                                            <p>Leverage varies by instrument and account type:</p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h6 class="mb-3">Standard Accounts</h6>
                                                                    <ul>
                                                                        <li>Forex Majors: 1:100</li>
                                                                        <li>Forex Minors: 1:50</li>
                                                                        <li>Indices: 1:20</li>
                                                                        <li>Commodities: 1:10</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h6 class="mb-3">Professional Accounts</h6>
                                                                    <ul>
                                                                        <li>Forex Majors: 1:200</li>
                                                                        <li>Forex Minors: 1:100</li>
                                                                        <li>Indices: 1:50</li>
                                                                        <li>Commodities: 1:25</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0"><em>Leverage is subject to change based on market conditions.</em></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Other tabs would go here -->
                            </div>
                        </div>

                        <!-- Support Resources -->
                        <div class="mt-5">
                            <h5 class="mb-4">
                                <i class="fas fa-book-open me-2 text-primary"></i>Additional Resources
                            </h5>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                                                <i class="fas fa-video text-primary fs-4"></i>
                                            </div>
                                            <h5>Tutorial Videos</h5>
                                            <p class="text-muted">Learn platform features with our video guides</p>
                                            <button class="btn btn-outline-primary">View Videos</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="bg-success bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                                                <i class="fas fa-file-pdf text-success fs-4"></i>
                                            </div>
                                            <h5>Documentation</h5>
                                            <p class="text-muted">Download comprehensive platform manuals</p>
                                            <button class="btn btn-outline-success">Download PDFs</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center p-4">
                                            <div class="bg-warning bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                                                <i class="fas fa-users text-warning fs-4"></i>
                                            </div>
                                            <h5>Community Forum</h5>
                                            <p class="text-muted">Connect with other traders</p>
                                            <button class="btn btn-outline-warning">Join Community</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<style>
    /* Custom Styles */
    .page-header {
        padding: 20px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    .nav-tabs-custom {
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    .nav-tabs-custom .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        padding: 12px 20px;
        border-radius: 0;
        position: relative;
    }

    .nav-tabs-custom .nav-link.active {
        color: #4361ee;
        background: transparent;
        border-bottom: 3px solid #4361ee;
    }

    .nav-tabs-custom .nav-link:hover {
        color: #4361ee;
    }

    .custom-accordion .accordion-button {
        background-color: rgba(67,97,238,0.05);
        font-weight: 500;
    }

    .custom-accordion .accordion-button:not(.collapsed) {
        background-color: rgba(67,97,238,0.1);
        color: #4361ee;
    }

    .custom-accordion .accordion-button:after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234361ee'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    .bg-gradient-light {
        background: linear-gradient(135deg, rgba(248,249,250,1) 0%, rgba(241,243,245,1) 100%);
    }

    .rounded-3 {
        border-radius: 16px !important;
    }
</style>
@endsection
