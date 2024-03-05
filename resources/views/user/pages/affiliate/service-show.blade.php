@extends('user.layouts.app')
@section('title')
    @lang('Advanced Service Show')
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
    <div id="accordion" class="accordion-service">
        @foreach($categories as $key =>  $category)
            <div class="card card-primary m-0 m-md-4 my-1 m-md-0 ">
                <a href="#" class="btn" data-toggle="collapse"
                   data-target="#faq{{$category->id}}" aria-expanded="true"
                   aria-controls="faq{{$category->id}}">
                    <div class="card-header text-left" id="faqhead{{$category->id}}">
                        {{$category->category_title }}
                    </div>
                </a>
                
                <div id="faq{{$category->id}}" class="collapse @if($loop->first) show @endif"
                     aria-labelledby="faqhead{{$category->id}}" data-parent="#accordion">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="categories-show-table table table-hover  table-striped table-bordered  text-right text-lg-center">
                                <thead class="thead-primary">
                                <tr>
                                    <th scope="col">@lang('Serial')</th>
                                    <th scope="col" class="text-left">@lang('Name')</th>
                                    <th scope="col" class="text-left">@lang('Min amount')</th>
                                    <th scope="col" class="text-left">@lang('Max amount')</th>
                                    <th scope="col">@lang('Drip-Feed')</th>
                                    <th scope="col">@lang('Status')</th>
                                    <th scope="col">@lang('discount')</th>
                                    <th scope="col">@lang('Your Profit (min)')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category->advanced_service as $service)
                                    <tr>
                                        <td data-label="@lang('ID')">{{$loop->index+1}}</td>
                                        <td data-label="@lang('Name')" class="text-right text-lg-left">
                                                {{\Str::limit($service->service_title, 30)}}
                                        </td>
                                        <td>
                                            {{ $service->min_amount }}
                                        </td>
                                        <td>
                                            {{ $service->max_amount }}
                                        </td>
                                        <td data-label="@lang('Drip-Feed')">
                                    <span
                                        class="badge badge-pill badge-success">Active</span>
                                        </td>
                                        <td data-label="@lang('Status')">
                                            <span
                                            class="badge badge-pill {{ $service->service_status == 0 ? 'badge-danger' : 'badge-success' }}">{{ $service->service_status == 0 ? 'Inactive' : 'Active' }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($user->role == 'Ambassador')
                                                {{$service->discount_ambassador}}
                                            @elseif ($user->role == 'Affiliate')
                                                {{$service->discount_affiliate}}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!$service->profit)
                                                0
                                            @else
                                            {{ $service->profit*auth()->user()?->base_percentage/100 }} + Tier ({{ $userTier?->tier?->name ?: 'N/A' }} + {{ $userTier?->tier?->percentage }}% ) = {{ $service->profit*auth()->user()?->base_percentage/100 + $service->profit*auth()->user()?->base_percentage/100 * $userTier?->tier?->percentage/100 }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($categories->total() > config('basic.paginate'))
        <div class="card card-primary m-0 m-md-4 my-4 m-md-0">
            <div class="card-body">
                {{ $categories->links() }}
            </div>
        </div>
    @endif
@endsection
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
