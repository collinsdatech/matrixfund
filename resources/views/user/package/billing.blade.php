@extends('layouts.user')
<style>
    .radio-select .btn-check:checked+label {
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

    .btn-check:checked+label .checkbox-fake {
        background-color: green;
        border-color: green;
        color: white
    }

    .btn-check:checked+label .checkbox-fake::after {
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
</style>
@section('content')
    <div class="container mt-4">

        {{-- Coupon Banner --}}
        <div class="card mb-4 border-0 shadow-sm bg-success text-white rounded-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <!-- Left Column: Image + 3-line list -->
                    <div class="col-md-6 d-flex">
                        <div class="w-50">
                            <img src="{{ asset('user/assets/img/medal/medal2.svg') }}" class="w-75 mt-2" alt="Trophy">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="form-check text-white mb-2 d-flex">
                                <i class="ti ti-check"></i>&nbsp;&nbsp;
                                <label class="form-check-label">Special Coupon for Any Challenge!</label>
                            </div>
                            <div class="form-check text-white mb-2">
                                <i class="ti ti-check"></i>&nbsp;
                                <label class="form-check-label">One time fee is reduced by %</label>
                            </div>
                            <div class="form-check text-white d-flex">
                                <i class="ti ti-check"></i>&nbsp;&nbsp;
                                <label class="form-check-label">Offer valid for new account purchases only</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2"></div>

                    <!-- Right Column: Input with copy button -->
                    <div class="col-md-4 mt-4 mt-md-0">
                        <div class="p-3 rounded-4" style="background-color:rgba(255, 255, 255, 0.08);">
                            <label for="coupon" class="form-label mb-1 text-white">Your Coupon Code</label>
                            <div class="input-group">
                                <input type="text" id="coupon" class="form-control rounded-start-pill"
                                    placeholder="Enter code here" readonly>
                                <button class="btn btn-light text-success rounded-end-pill" type="button"
                                    onclick="copyCoupon()">Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            {{-- Plans & Pricing --}}
            <div class="col-md-7">
                <div class="card mb-4 border-0 rounded-4" style="background-color:rgb(240, 240, 240);">
                    <div class="card-body">
                        <label class="form-label mb-3 fw-bold">Select a Challenge</label>

                        <div class="-mt-2" id="challenge-options">
                            <!-- Will be populated dynamically -->
                            <div class="text-center py-4">
                                <p>Please select a Plan Type first</p>
                            </div>
                        </div>

                        <div class="text-center my-4">
                            <div class="fs-13 text-muted">Total Amount to be Paid</div>
                            <div class="display-5 fw-bold text-success" id="total-amount">$0.00</div>
                        </div>

                        <form action="{{ route('user.package.enroll') }}" method="POST" id="enrollForm">
                            @csrf
                            <input type="hidden" name="selected_plan" id="selected-plan" value="">
                            <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow">
                                Enroll Now &rarr;
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Plan Options --}}
            <div class="col-md-5">
                <div class="card border-0 rounded-4 p-3" style="background-color:rgb(240, 240, 240);">
                    <!-- Plan Type Section -->
                    <div class="card border-0 rounded-4 mb-2">
                        <div class="card-body">
                            <h5 class="mb-3">Select Plan Type</h5>
                            <div id="plan-type-container" class="-mt-2">
                                <div class="text-center py-3">
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div id="errorBox"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tradable Assets Section -->
                    <div class="card border-0 rounded-4 mb-2">
                        <div class="card-body">
                            <h5 class="mb-3">Tradable Assets</h5>
                            <div id="assets-container" class="-mt-2">
                                <div class="text-center py-3">
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                                                        <div id="errorBox"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Platform Section -->
                    <div class="card border-0 rounded-4 mb-0">
                        <div class="card-body">
                            <h5 class="mb-3">Select Your Preference</h5>
                            <div id="platforms-container" class="-mt-2">
                                <div class="text-center py-3">
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                                                        <div id="errorBox"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Fetch all data in parallel
            const promises = [
                fetch('/api/packages').then(res => res.json()),
                fetch('/api/trading-platforms').then(res => res.json()),
                fetch('/api/tradeable-assets').then(res => res.json())
            ];

            Promise.all(promises)
                .then(([packages, platforms, assets]) => {
                    renderPlanTypes(packages);
                    renderAssets(assets);
                    renderPlatforms(platforms);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    document.getElementById('errorBox').innerHTML = `
            <div class="alert alert-danger">
                Failed to load plan types: ${error.message}
            </div>
        `;
                });


            // Render Plan Types
            function renderPlanTypes(packages) {
                const container = document.getElementById('plan-type-container');
                container.className = 'd-flex flex-column gap-3 pb-4';
                container.innerHTML = '';



                packages.forEach((pkg, index) => {
                    container.appendChild(createRadioOption(
                        'flexRadioDefault',
                        `plan-${pkg.id}`,
                        pkg.name,
                        index === 0 // First item checked by default
                    ));

                    // Fetch time fees for the first package
                    if (index === 0) {
                        fetchPackageTimeFees(pkg.id);
                    }
                });
            }

            // Render Tradable Assets
            function renderAssets(assets) {
                const container = document.getElementById('assets-container');
                container.innerHTML = '';

                // Create a flex container for the first row
                const firstRow = document.createElement('div');
                firstRow.className = 'd-flex';
                container.appendChild(firstRow);

                assets.slice(0, 3).forEach((asset, index) => {
                    firstRow.appendChild(createRadioOption(
                        'flexRadioDefaultss',
                        `asset-${asset.id}`,
                        asset.name,
                        index === 0,
                        true // Add margin
                    ));
                });

                // Second row for remaining assets
                if (assets.length > 3) {
                    const secondRow = document.createElement('div');
                    secondRow.className = 'd-flex mt-3';
                    container.appendChild(secondRow);

                    assets.slice(3).forEach(asset => {
                        secondRow.appendChild(createRadioOption(
                            'flexRadioDefaultss',
                            `asset-${asset.id}`,
                            asset.name,
                            false,
                            true
                        ));
                    });
                }
            }

            // Render Platforms
            function renderPlatforms(platforms) {
                const container = document.getElementById('platforms-container');
                container.innerHTML = '';

                const row = document.createElement('div');
                row.className = 'd-flex';
                container.appendChild(row);

                platforms.forEach((platform, index) => {
                    row.appendChild(createRadioOption(
                        'flexRadioDefaultsss',
                        `platform-${platform.id}`,
                        platform.name,
                        index === 0,
                        true
                    ));
                });
            }

            // Helper function to create radio options
            function createRadioOption(name, id, label, isChecked = false, addMargin = false) {
                const group = document.createElement('div');
                group.className = 'radio-select';
                if (addMargin) group.style.marginRight = '16px';

                const input = document.createElement('input');
                input.type = 'radio';
                input.className = 'btn-check';
                input.name = name;
                input.id = id;
                input.autocomplete = 'off';
                input.checked = isChecked;

                const labelEl = document.createElement('label');
                labelEl.className = 'w-100';
                labelEl.style.fontWeight = '700';
                labelEl.htmlFor = id;

                const checkboxFake = document.createElement('span');
                checkboxFake.className = 'checkbox-fake';

                labelEl.appendChild(checkboxFake);
                labelEl.appendChild(document.createTextNode(label));

                group.appendChild(input);
                group.appendChild(labelEl);

                return group;
            }
        });

        // Copy coupon code function
        function copyCoupon() {
            const couponInput = document.getElementById('coupon');
            couponInput.select();
            couponInput.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand('copy');
            alert('Coupon code copied to clipboard!');
        }

        function fetchPackageTimeFees(packageId) {
            const container = document.getElementById('challenge-options');
            container.innerHTML = `
                <div class="text-center py-3">
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            `;

            fetch(`/api/packages/${packageId}/time-fees`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        renderChallengeOptions(data.package.formatted_fees);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    container.innerHTML = `
                        <div class="alert alert-danger">
                            Failed to load pricing options. Please try again.
                        </div>
                    `;
                });
        }

        function renderChallengeOptions(tiers) {
            const container = document.getElementById('challenge-options');
            container.innerHTML = '';

            tiers.forEach((tier, index) => {
                const optionId = `challenge-${index}`;
                const isFirst = index === 0;
                const discountClass = tier.discount_percent > 0 ? 'text-success' : 'text-danger';

                const optionDiv = document.createElement('div');
                optionDiv.className = `radio-select bg-light ${!isFirst ? 'mt-3' : ''}`;
                optionDiv.innerHTML = `
                    <input type="radio" class="btn-check" name="challengeOption"
                           id="${optionId}" autocomplete="off" ${isFirst ? 'checked' : ''}
                           data-fee="${tier.fee}" data-label="${tier.label}">
                    <label class="w-100 d-flex justify-content-between align-items-center fw-bold"
                           for="${optionId}">
                        <div class="d-flex align-items-center">
                            <span class="checkbox-fake me-2"></span>
                            <div>
                                <div>${tier.label}</div>
                                <small class="text-muted">$${tier.account_size}</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <h4 class="text-black mb-0">$${tier.fee}</h4>
                            <small class="${discountClass}">
                                ${tier.discount_percent > 0 ?
                        `${tier.discount_percent}% OFF` :
                        `${Math.abs(tier.discount_percent)}% Increase`}
                            </small>
                        </div>
                    </label>
                `;

                container.appendChild(optionDiv);
            });

            // Update total with first tier
            if (tiers.length > 0) {
                updateTotalAmount(tiers[0]);
            }

            // Add event listeners
            document.querySelectorAll('input[name="challengeOption"]').forEach((radio, index) => {
                radio.addEventListener('change', () => updateTotalAmount(tiers[index]));
            });
        }

        function updateTotalAmount(tier) {
            document.getElementById('total-amount').innerHTML = `
                <span>$${tier.fee}</span>
                <small class="text-muted d-block">${tier.label}</small>
            `;
            document.getElementById('selected-plan').value = JSON.stringify(tier);
        }
    </script>
@endsection
