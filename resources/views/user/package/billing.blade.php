@extends('layouts.user')
<style>
  .radio-select .btn-check:checked + label {
    background-color:rgba(87, 124, 107, 0.15);
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

  .btn-check:checked + label .checkbox-fake {
    background-color: green;
    border-color: green;
    color: white
  }

  .btn-check:checked + label .checkbox-fake::after {
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
          <input type="text" id="coupon" class="form-control rounded-start-pill" placeholder="Enter code here" readonly>
          <button class="btn btn-light text-success rounded-end-pill" type="button" onclick="copyCoupon()">Copy</button>
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

                    <div class="-mt-2">
  <!-- Option 1 -->
  <div class="radio-select bg-light">
    <input type="radio" class="btn-check" name="flexRadioDefaultdddd" id="radios1" autocomplete="off">
    <label class="w-100 d-flex justify-content-between align-items-center fw-bold" for="radios1">
      <div class="d-flex align-items-center">
        <span class="checkbox-fake me-2"></span>
        Synthetic Indices Practice
      </div>
      <h4 class="text-black">$0</h4>
    </label>
  </div>

  <!-- Option 2 -->
  <div class="radio-select bg-light mt-3">
    <input type="radio" class="btn-check" name="flexRadioDefaultdddd" id="radios2" autocomplete="off" checked>
    <label class="w-100 d-flex justify-content-between align-items-center fw-bold" for="radios2">
      <div class="d-flex align-items-center">
        <span class="checkbox-fake me-2"></span>
        Synthetic Indices
      </div>
      <h4 class="text-black">$10</h4>
    </label>
  </div>

  <!-- Option 3 -->
  <div class="radio-select bg-light mt-3">
    <input type="radio" class="btn-check" name="flexRadioDefaultdddd" id="radios3" autocomplete="off" checked>
    <label class="w-100 d-flex justify-content-between align-items-center fw-bold" for="radios3">
      <div class="d-flex align-items-center">
        <span class="checkbox-fake me-2"></span>
        Forex Program
      </div>
      <h4 class="text-black">$20</h4>
    </label>
  </div>

  <!-- Option 4 -->
  <div class="radio-select bg-light mt-3">
    <input type="radio" class="btn-check" name="flexRadioDefaultdddd" id="radios4" autocomplete="off" checked>
    <label class="w-100 d-flex justify-content-between align-items-center fw-bold" for="radios4">
      <div class="d-flex align-items-center">
        <span class="checkbox-fake me-2"></span>
        Forex Instant Funding
      </div>
      <h4 class="text-black">$50</h4>
    </label>
  </div>

  <!-- Option 5 -->
  <div class="radio-select bg-light mt-3">
    <input type="radio" class="btn-check" name="flexRadioDefaultdddd" id="radios5" autocomplete="off" checked>
    <label class="w-100 d-flex justify-content-between align-items-center fw-bold" for="radios5">
      <div class="d-flex align-items-center">
        <span class="checkbox-fake me-2"></span>
        Synthetic Indices Instant Funding
      </div>
      <h4 class="text-black">$35</h4>
    </label>
  </div>
</div>



                    <div class="text-center my-4">
                        <div class="fs-13 text-muted">Total Amount to be Paid</div>
                        <div class="display-5 fw-bold text-success">${{ number_format($package->fee ?? 0, 2) }}</div>
                    </div>

                    <form action="{{ route('user.package.enroll', $package->id) }}" method="POST" id="enrollForm">
                        @csrf
                        <input type="hidden" name="trade_type" id="trade_type" value="">
                        <input type="hidden" name="platform" id="platform" value="">
                        <button type="submit" class="btn btn-success btn-lg w-100 rounded-pill shadow">
                            Enroll Now &rarr;
                        </button>
                    </form>

                    <!-- <h6 class="text-muted mb-3"><i class="fas fa-info-circle me-2"></i>Package Details</h6>
                    <ul class="list-group list-group-flush">
                        @foreach($details as $item)
                            <li class="list-group-item d-flex align-items-center px-0 py-1">
                                <i class="{{ $item['icon'] }} me-2 text-success"></i>
                                <span class="fw-bold me-2">{{ $item['label'] }}:</span>
                                <span>{{ $item['value'] }}</span>
                            </li>
                        @endforeach
                    </ul> -->
                </div>
            </div>
        </div>

        {{-- Plan Options --}}
        <div class="col-md-5">
            <div class="card border-0 rounded-4 p-3" style="background-color:rgb(240, 240, 240);">
                <div class="card border-0 rounded-4 mb-2">
                <div class="card-body">
                    <h5 class="mb-3">Select Plan Type</h5>

                    <div class="-mt-2">
                        <!-- Group Container -->
                            <div class="d-flex">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio1" autocomplete="off">
                            <label class="w-100" style="font-weight: 700" for="radio1">
                                <span class="checkbox-fake"></span>
                                Synthetic Indices Practice
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio2" autocomplete="off" checked>
                            <label class="w-100" for="radio2" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Synthetic Indices
                            </label>
                            </div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio3" autocomplete="off" checked>
                            <label class="w-100" for="radio3" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Forex Program
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio4" autocomplete="off" checked>
                            <label class="w-100" for="radio4" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Forex Instant Funding
                            </label>
                            </div>
                            </div>

                            <div class="radio-select mt-3">
                            <input type="radio" class="btn-check" name="flexRadioDefault" id="radio5" autocomplete="off" checked>
                            <label class="w-100" for="radio5" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Synthetic Indices Instant Funding
                            </label>
                            </div>
                    </div>

                </div>
            </div>








               <div class="card border-0 rounded-4 mb-2">
                <div class="card-body">
                    <h5 class="mb-3">Tradable Assets</h5>

                    <div class="-mt-2">
                        <!-- Group Container -->
                            <div class="d-flex">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefaultss" id="radio11" autocomplete="off">
                            <label class="w-100" style="font-weight: 700" for="radio11">
                                <span class="checkbox-fake"></span>
                                Forex
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefaultss" id="radio12" autocomplete="off" checked>
                            <label class="w-100" for="radio12" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Crypto
                            </label>
                            </div>

                             &nbsp;&nbsp;&nbsp;

                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefaultss" id="radio13" autocomplete="off" checked>
                            <label class="w-100" for="radio13" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Equity
                            </label>
                            </div>
                            </div>
                            <div class="d-flex mt-3">
                        
                               
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefaultss" id="radio14" autocomplete="off" checked>
                            <label class="w-100" for="radio14" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Crypto Futures
                            </label>
                            </div>
                            </div>
                    </div>

                </div>
            </div>







            <!-- Select Your Platform -->

            <div class="card border-0 rounded-4 mb-0">
                <div class="card-body">
                    <h5 class="mb-3">Select Your Preference</h5>

                    <div class="-mt-2">
                        <!-- Group Container -->
                            <div class="d-flex">
                                <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefaultsss" id="radio111" autocomplete="off" checked>
                            <label class="w-100" style="font-weight: 700" for="radio111">
                                <span class="checkbox-fake"></span>
                                Forex
                            </label>
                            </div>
                                &nbsp;&nbsp;&nbsp;
                            <div class="radio-select">
                            <input type="radio" class="btn-check" name="flexRadioDefaultsss" id="radio222" autocomplete="off" >
                            <label class="w-100" for="radio222" style="font-weight: 700">
                                <span class="checkbox-fake"></span>
                                Crypto
                            </label>
                            </div>
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
        updateHiddenInputs();

        document.querySelectorAll('input[name="tradeable"]').forEach(el => {
            el.addEventListener('change', updateHiddenInputs);
        });

        document.querySelectorAll('input[name="platform_select"]').forEach(el => {
            el.addEventListener('change', updateHiddenInputs);
        });
    });

    function updateHiddenInputs() {
        let checkedTrade = document.querySelector('input[name="tradeable"]:checked');
        let checkedPlatform = document.querySelector('input[name="platform_select"]:checked');

        if (checkedTrade) {
            document.getElementById('trade_type').value = checkedTrade.value;
        }
        if (checkedPlatform) {
            document.getElementById('platform').value = checkedPlatform.value;
        }
    }
</script>
@endsection
