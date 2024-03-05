@extends('user.layouts.app')
@section('title')
    @lang($page_title)
@endsection
@php
    $userTier = auth()->user()?->tier()?->latest()?->first();
@endphp
@push('style')
    <style>
        .stepper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .step {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .step-filled {
            background-color: #007bff;
            color: #fff;
        }
        .stepper .line {
            height: 2px;
            width: 160px; 
            background-color: #ccc;
            margin: 0 5px;
        }
        .tier-label {
            font-size: 12px;
            text-align: center;
            margin-top: 5px;
        }
    </style>
    
@endpush
@section('content')
<div class="row m-0 px-5 d-flex">
    <div class="card card-primary mr-5 shadow col-md-6">
        <div class="card-body">
            <h6 class="font-weight-bold">@lang('Promo Code')</h6>
            <div class="input-group">  
                <input name="promo_code" type="text" value="{{Auth::user()->promo_code}}"
                    class="form-control form-control-lg" readonly id="promo_code">
                <div class="input-group-append">
                    <span class="input-group-text copytext copyPromo" id="copyPromo" onclick="copyFunction()">
                            <i class="fa fa-copy"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @php
        $tier = 2;
    @endphp
    <div class="card card-primary ml-5 shadow col-md-5">
        <div class="card-body">
            <div class="stepper mb-2">
                <div class="tier-label">Silver</div>
                <div class="tier-label">Gold</div>
                <div class="tier-label">Platinum</div>
              </div>
            <div class="stepper">
                <div class="step {{ $tier >= 1 ? 'step-filled' : '' }}">1</div>
                <div
                    class="progress"
                    role="progressbar"
                    aria-label="Basic example"
                    aria-valuenow="75"
                    aria-valuemin="0"
                    aria-valuemax="100"
                    style="width: 160px"
                    >
                    <div class="progress-bar" style="width: 70%;"></div>
                </div>
                <div class="step {{ $tier >= 2 ? 'step-filled' : ($tier === 3 ? 'step-filled' : '') }}">2</div>
                <div class="line"></div>
                <div class="step {{ $tier >= 3 ? 'step-filled' : '' }}">3</div>
              </div>
            </div>
        </div>
    </div>
</div>
    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="categories-show-table table table-hover table-striped table-bordered text-lg-center">
                    <thead class="thead-primary">
                    <tr>
                        <th scope="col">@lang('Serial')</th>
                        <th scope="col">@lang('Package Title')</th>
                        <th scope="col">@lang('Description')</th>
                        <th scope="col">@lang('Price')</th>
                        <th scope="col">@lang('Status')</th>
                        <th class="text-center" scope="col">@lang('Discount')</th>
                        <th class="text-center" scope="col">@lang('Profit')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td data-label="@lang('Package Title')">{{$package->package_name}}</td>
                            <td data-label="@lang('Description')">{{$package->description}}</td>
                            <td data-label="@lang('Price')">{{$package->price}} <br>{{$package->price_monthly}} (monthly) <br>{{$package->price_annually}} (annually)</td>
                            <td data-label="@lang('Status')">
                                <span
                                    class="badge badge-pill {{ $package->status == 0 ? 'badge-danger' : 'badge-success' }}">{{ $package->status == 0 ? 'Inactive' : 'Active' }}</span>
                            </td>
                            <td class="text-center">
                                @if (Auth::user()->role == 'Ambassador')
                                    {{$package->discount_ambassador}}
                                @elseif (Auth::user()->role == 'Affiliate')
                                    {{$package->discount_affiliate}}
                                @endif
                            </td>
                            <td>
                                @if(!$package->profit)
                                    0
                                @else
                                  {{ $package->profit*auth()->user()?->base_percentage/100 }} + Tier ({{ $userTier?->tier?->name ?: 'N/A' }} + {{ $userTier?->tier?->percentage }}% ) = {{ $package->profit*auth()->user()?->base_percentage/100 + $package->profit*auth()->user()?->base_percentage/100 * $userTier?->tier?->percentage/100 }} <br>
                                  {{ $package->profit_monthly*auth()->user()?->base_percentage/100 }} + Tier ({{ $userTier?->tier?->name ?: 'N/A' }} + {{ $userTier?->tier?->percentage }}% ) = {{ $package->profit_monthly*auth()->user()?->base_percentage/100 + $package->profit_monthly*auth()->user()?->base_percentage/100 * $userTier?->tier?->percentage/100 }} (monthly)<br>
                                  {{ $package->profit_annually*auth()->user()?->base_percentage/100 }} + Tier ({{ $userTier?->tier?->name ?: 'N/A' }} + {{ $userTier?->tier?->percentage }}% ) = {{ $package->profit_annually*auth()->user()?->base_percentage/100 + $package->profit_annually*auth()->user()?->base_percentage/100 * $userTier?->tier?->percentage/100 }} (annually)
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- {{ $paginate->appends($_GET)->links() }} --}}
            </div>
        </div>
    </div>  

@endsection

@push('js-lib')
    <script src="{{ asset('assets/global/js/jquery-ui.min.js') }}"></script>
@endpush

@push('js')
    <script>

        function copyFunction() {
            var copyText = document.getElementById("promo_code");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>
@endpush
