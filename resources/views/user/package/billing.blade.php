@extends('layouts.user')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <!-- Plans & Pricing -->
            <div class="col-md-7">
                <div class="card mb-4 shadow border-0">
                    <div class="card-header bg-light border-0">
                        <strong><i class="fas fa-tags me-2 text-success"></i>Plans & Pricing</strong>
                    </div>
                    <div class="card-body">
                        <label class="form-label mb-2">Select a challenge</label>
                        <div class="input-group mb-3 align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input rounded-circle border-success" type="checkbox" checked
                                    disabled>
                                <label class="form-check-label fw-bold text-success">
                                    One time fee: ${{ number_format($package->fee ?? 0, 2) }}
                                </label>
                            </div>
                            <div class="ms-auto fw-bold fs-5 text-primary">
                                ${{ number_format($package->account_size_min ?? 0, 2) }}
                            </div>
                        </div>
                        <div class="text-center my-4">
                            <div class="fs-4">Total Amount to be Paid</div>
                            <div class="display-5 fw-bold text-success">${{ number_format($package->fee ?? 0, 2) }}</div>
                        </div>
                        <div class="d-grid">
                            <form action="{{ route('user.package.enroll', $package->id) }}" method="POST" id="enrollForm">
                                @csrf
                                <input type="hidden" name="trade_type" id="trade_type" value="">
                                <input type="hidden" name="platform" id="platform" value="">
                                <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow">
                                    Enroll Now &rarr;
                                </button>
                            </form>
                        </div>
                        <hr>
                        <div>











                            <h6 class="mb-3 text-muted"><i class="fas fa-info-circle me-2"></i>Package Details</h6>
                            <ul class="list-group list-group-flush">
                                @foreach($details as $item)
                                    <li class="list-group-item d-flex align-items-center border-0 px-0 py-1">
                                        <i class="{{ $item['icon'] }} me-2 text-success"></i>
                                        <span class="fw-bold me-2">{{ $item['label'] }}:</span>
                                        <span>{{ $item['value'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Plan Options -->
            <div class="col-md-5">
                <div class="card mb-4 shadow border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Selected Plan Type</label>
                            <div class="w-100">
                                <div class="mb-2">
                                    <input type="radio" class="btn-check" name="planType" id="syntheticPractice" checked>
                                    <label class="btn btn-outline-primary btn-lg w-100 mb-2 text-start"
                                        for="syntheticPractice">
                                        <i class="fas fa-robot me-1"></i>{{ $package->name }}
                                    </label>
                                </div>


                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tradable Assets</label>
                            <div class="">
                                @foreach($tradeables as $tradeable)
                                    @if($tradeable->is_active)
                                        <div class="form-check w-100 mb-2">
                                            <input type="checkbox" class="btn-check" id="tradeable-{{ $tradeable->id }}" checked>
                                            <label class="btn btn-outline-primary w-100" for="tradeable-{{ $tradeable->id }}">
                                                <i class="{{ $tradeable->icon }} me-1"></i>{{ $tradeable->name }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Select Your Platform</label>
                            <div>
                                @foreach($platforms as $platform)
                                    @if($platform->is_active)
                                        <div class="form-check w-100 mb-2">
                                            <input type="checkbox" class="btn-check" id="platform-{{ $platform->id }}">
                                            <label class="btn btn-outline-success w-100 rounded-pill"
                                                for="platform-{{ $platform->id }}">
                                                <img src="{{ $platform->logo_url }}" alt="{{ $platform->name }}" width="24"
                                                    class="me-2">
                                                {{-- {{ $platform->name }} --}}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <label class="form-label fw-bold">Select Your Preference</label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="preference" id="swap" checked>
                                <label class="btn btn-outline-success rounded-pill" for="swap">
                                    <i class="fas fa-sync-alt me-1"></i>Swap
                                </label>
                                <input type="radio" class="btn-check" name="preference" id="swapFree">
                                <label class="btn btn-outline-secondary rounded-pill" for="swapFree">
                                    <i class="fas fa-ban me-1"></i>Swap Free (Price +20.00%)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Make sure to include FontAwesome in your layout or here --}}
    <script>
    // Set default values on page load
    document.addEventListener('DOMContentLoaded', function () {
        // Set trade_type to the first checked tradeable
        let checkedTrade = document.querySelector('input[name="tradeable"]:checked');
        if (checkedTrade) {
            document.getElementById('trade_type').value = checkedTrade.value;
        }
        // Set platform to the first checked platform
        let checkedPlatform = document.querySelector('input[name="platform_select"]:checked');
        if (checkedPlatform) {
            document.getElementById('platform').value = checkedPlatform.value;
        }
    });

    // Update hidden input when tradeable is changed
    document.querySelectorAll('input[name="tradeable"]').forEach(function(el) {
        el.addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('trade_type').value = this.value;
            }
        });
    });

    // Update hidden input when platform is changed
    document.querySelectorAll('input[name="platform_select"]').forEach(function(el) {
        el.addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('platform').value = this.value;
            }
        });
    });
</script>
@endsection
