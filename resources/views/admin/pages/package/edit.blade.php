@extends('admin.layouts.app')
@section('title')
    @lang('Edit packages')
@endsection
@section('content')
    <div class="card card-primary card-form m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body ">
            <form action="{{route('admin.package.update', $package->id)}}" method="POST" class="form">
                @method('PUT')
                @csrf
                <h5 class="table-group-title text-info mb-2 mb-md-3"><span>@lang('Package Basic')</span></h5>
                {{-- {{$package->package_name}} --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Package Title')</label>
                            <input type="text" name="package_title" value="{{ $package->package_name? $package->package_name : old('package_title') }}"
                                placeholder="@lang('Package Title')" class="form-control">
                            @if($errors->has('package_title'))
                                <div class="error text-danger">@lang($errors->first('package_title')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="d-block">@lang('Status')</label>
                                <div class="custom-switch-btn">
                                    <input type='hidden' value='1' name='status'>
                                    <input type="checkbox" name="status" class="custom-switch-checkbox" id="status" value="0">
                                    <label class="custom-switch-checkbox-label" for="status">
                                        <span class="custom-switch-checkbox-inner"></span>
                                        <span class="custom-switch-checkbox-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Category')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label " for="category">@lang('Service')</label>
                            <select class="form-control js-example-basic-multiple form-control" name="category">
                                <option value="0" hidden>@lang('Select Category')</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $package->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Add multiple services')</span></h5>
                <div class="all-service">
                <div id="service}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label " for="services">@lang('Services')</label>
                                @php
                                    $service_ids = $package->advanced_services->pluck('adv_service_id')->toArray();
                                @endphp
                                <select id="search-adv" class="form-control js-example-basic-multiple form-control" value="" name="services[]" multiple="multiple">
                                    <option value="0" hidden>@lang('Select service name')</option>
                                        @foreach ( $advanced_services as $advanced_service )
                                            <option value="{{ $advanced_service->id }}"
                                                {{in_array($advanced_service->id, $service_ids) ? 'selected=selected': ''}}
                                                >{{ $advanced_service->service_title }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="adv-table" class="col-md-12 table-responsive">
                            <table class="categories-show-table table table-hover table-striped table-bordered">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Advanced Service</th>
                                        <th>Services</th>
                                        <th>Max Url</th>
                                        <th>Cost</th>
                                        <th>Selling Price</th>
                                        <th>Amount</th>
                                        <th>Total (Cost)</th>
                                        <th>Total (Selling Price)</th>
                                    </tr>
                                </thead>
                                <tbody id="adv-table-body">
                                    @foreach ($package->advanced_services as $adv_service)
                                    @php
                                        $provider = \App\Models\AdvancedServiceProvider::where('id', $adv_service->adv_service_provider_id)->first();
                                    @endphp
                                    <tr>
                                        <td>{{$adv_service->service->service_title}}</td>
                                        <td style="width: 500px;">
                                            <ul>
                                                {{$provider->service->service_title}}
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                {{$provider->max_urls}}
                                            </ul>
                                        </td>
                                        <td>
                                            <ul id="cost-{{$provider->id}}">
                                                {{$provider->api_provider_price}}
                                            </ul>
                                        </td>
                                        <td>
                                            <ul id="price-{{$provider->id}}">
                                                {{$provider->service->price}}
                                            </ul>
                                        </td>
                                        <td style="width: 200px;">
                                                <input class="form-control square w-100" type="number"  name="package_amounts[{{$provider->id}}]"  id="amount-{{$provider->id}}"  placeholder="Enter Amount" value="{{$adv_service->amount}}" oninput="updateTotal({{$provider->id}})">
                                        </td>
                                        <td>
                                            <ul class="total-cost" id="costTotal-{{$provider->id}}">
                                                {{$provider->api_provider_price * $adv_service->amount}}
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="total-amount" id="total-{{$adv_service->adv_service_provider_id}}">
                                                {{$provider->service->price * $adv_service->amount}}
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="6">Total</td>
                                        <td class="text-right"><input class="form-control square w-100" name="total_cost_sum"  id="total-cost-sum"  value="" readonly></td>
                                        <td class="text-right"><input class="form-control square w-100" name=""  id="total-amount-sum"  value="" readonly></td>
                                      </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Price & Status')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Package Price')</label>
                            <input type="number" name="price" value="{{ $package->price? $package->price : old('price') }}"
                                   placeholder="@lang('package price')" class="form-control">
                            @if($errors->has('price'))
                                <div class="error text-danger">@lang($errors->first('price')) </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Package Price (Monthly)')</label>
                            <input type="number" name="price_monthly" value="{{ $package->price_monthly }}"
                                    placeholder="@lang('package price monthly')" class="form-control">
                            @if($errors->has('price_monthly'))
                                <div class="error text-danger">@lang($errors->first('price_monthly')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Package Price (Annually)')</label>
                            <input type="number" name="price_annually" value="{{ $package->price_annually }}"
                                    placeholder="@lang('package price annually')" class="form-control">
                            @if($errors->has('price_annually'))
                                <div class="error text-danger">@lang($errors->first('price_annually')) </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Addiotional Points')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Point One')</label>
                            <input type="text" name="point_1" value="{{$package->point_1}}"
                                    placeholder="@lang('Point One')" class="form-control">
                            @if($errors->has('point_1'))
                                <div class="error text-danger">@lang($errors->first('point_1')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Point Two')</label>
                            <input type="text" name="point_2" value="{{$package->point_2}}"
                                    placeholder="@lang('Point Two')" class="form-control">
                            @if($errors->has('point_2'))
                                <div class="error text-danger">@lang($errors->first('point_2')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Point Three')</label>
                            <input type="text" name="point_3" value="{{$package->point_3}}"
                                    placeholder="@lang('Point Three')" class="form-control">
                            @if($errors->has('point_3'))
                                <div class="error text-danger">@lang($errors->first('point_3')) </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Discounts')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Discount Threshold')</label>
                            <input type="number" class="form-control square" name="discount_threshold"
                                   value="{{ $package->discount_threshold }}">
                            @if($errors->has('discount_threshold'))
                                <div class="error text-danger mt-2">@lang($errors->first('discount_threshold')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group ">
                            <label class="d-block">@lang('Has Discount?')</label>
                            <div class="custom-switch-btn">
                                <input type='hidden' value='1' name='has_discount'>
                                <input type="checkbox" name="has_discount" class="custom-switch-checkbox"
                                       id="has_discount" value="0" {{ $package->service_status == '0' ? 'checked': '' }}>

                                <label class="custom-switch-checkbox-label" for="has_discount">
                                    <span class="custom-switch-checkbox-inner"></span>
                                    <span class="custom-switch-checkbox-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Discount for Ambassador')</label>
                            <input type="number" class="form-control square" name="discount_ambassador"
                            value="{{ $package->discount_ambassador }}">
                            @if($errors->has('discount_ambassador'))
                            <div class="error text-danger mt-2">@lang($errors->first('discount_ambassador')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Discount for Affiliates')</label>
                            <input type="number" class="form-control square" name="discount_affiliate"
                                   value="{{ $package->discount_affiliate }}">
                            @if($errors->has('discount_affiliate'))
                                <div class="error text-danger mt-2">@lang($errors->first('discount_affiliate')) </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Drip Timer Configuration')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Drip Time Starts at') {{$package->drip_timer_starts}}</label>
                            <select class="form-control" id="drip_timer_starts" name="drip_timer_starts">
                                <option disabled value="" selected hidden>@lang('Select When to Start Drip Timer')</option>
                                    @for ($i = 1; $i < 24; $i++)
                                        <option {{$package->drip_timer_starts == $i ? 'selected' : ''}} value="{{$i}}">{{ $i }} : 00</option>
                                    @endfor
                            </select>
                            @if($errors->has('drip_timer_starts'))
                                <div class="error text-danger mt-2">@lang($errors->first('drip_timer_starts')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Drip Time Ends at') {{$package->drip_timer_ends}}</label>
                            <select class="form-control" id="drip_timer_ends" name="drip_timer_ends">
                                <option disabled value="" selected hidden>@lang('Select When to Stop Drip Timer')</option>
                                    @for ($i = 1; $i < 24; $i++)
                                        <option {{$package->drip_timer_ends == $i ? 'selected' : ''}} value="{{$i}}">{{ $i }} : 00</option>
                                    @endfor
                            </select>
                            @if($errors->has('drip_timer_ends'))
                                <div class="error text-danger mt-2">@lang($errors->first('drip_timer_ends')) </div>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Additional Days and Pricing')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Additional Days?')</label>
                            <input type="number" name="additional_days" value="{{ $package->additional_days? $package->additional_days : old('additional_days') }}"
                                placeholder="@lang('Additional Days')" class="form-control">
                            @if($errors->has('additional_days'))
                                <div class="error text-danger">@lang($errors->first('additional_days')) </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Pricing')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Package Price (Monthly)')</label>
                            <input type="number" name="price_monthly" value="{{ $package->price_monthly }}"
                                    placeholder="@lang('package price monthly')" class="form-control">
                            @if($errors->has('price_monthly'))
                                <div class="error text-danger">@lang($errors->first('price_monthly')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Package Price (Annually)')</label>
                            <input type="number" name="price_annually" value="{{ $package->price_annually }}"
                                    placeholder="@lang('package price annually')" class="form-control">
                            @if($errors->has('price_annually'))
                                <div class="error text-danger">@lang($errors->first('price_annually')) </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="control-label " for="fieldone">@lang('Description')</label>
                    <textarea class="form-control" rows="4" placeholder="@lang('Description') " name="description">{!! $package->description !!}</textarea>
                    @if($errors->has('description'))
                        <div class="error text-danger">@lang($errors->first('description')) </div>
                    @endif
                </div>
                </div>
                <div class="submit-btn-wrapper mt-md-3  text-center text-md-left">
                    <button type="submit" class="btn  btn-primary btn-block mt-3">
                        <span><i class="fas fa-save pr-2"></i> @lang('Save Changes')</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection


@push('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        var totalAmountElements = document.getElementsByClassName("total-amount");
        var totalAmountSum = 0;
        for (var i = 0; i < totalAmountElements.length; i++) {
        totalAmountSum += parseFloat(totalAmountElements[i].textContent) || 0;
        }

        var totalCostElements = document.getElementsByClassName("total-cost");
        var totalCostSum = 0;
        for (var i = 0; i < totalCostElements.length; i++) {
        totalCostSum += parseFloat(totalCostElements[i].textContent) || 0;
        }

        document.getElementById("total-amount-sum").value = totalAmountSum;
        document.getElementById("total-cost-sum").value = totalCostSum;
    });
</script>
<script>
    $(document).ready(function () {
        $('#search-adv').on('input', function () {
            var query = $(this).val();
            $('#adv-table-body').html('');
            $.each(query, function(index, value) {
                $.ajax({
                    url: "{{route('admin.package.search-advService')}}",
                    method: 'GET',
                    data: { value: value },
                    success: function (response) {
                        $('#adv-table').removeClass('d-none');
                        $('#adv-table-body').append(`<tr>
                                                        <td>${response.data.service_title}</td>
                                                        <td style="width: 500px;">
                                                            <ul>
                                                                ${response.provider.map(({service})=> `<li>${service.service_title}</li>`).join('')}
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                ${response.provider.map(provider => `<li>${provider.max_urls}</li>`).join('')}
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                ${response.provider.map(provider => `<li id="cost-${provider.id}">${provider.service.api_provider_price}</li>`).join('')}
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                ${response.provider.map(provider => `<li id="price-${provider.id}" class="selling-${provider.id}">${provider.service.price}</li>`).join('')}
                                                            </ul>
                                                        </td>
                                                        <td style="width: 200px;">
                                                                ${response.provider.map(provider =>
                                                                    `<input class="form-control square w-100" type="number"  name="package_amounts[${provider.id}]"  id="amount-${provider.id}"  placeholder="Enter Amount" value="" oninput="updateTotal('${provider.id}')">`
                                                                ).join('')}
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                ${response.provider.map(provider => `<li class="total-cost" id="costTotal-${provider.id}"></li>`).join('')}
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                ${response.provider.map(provider => `<li class="total-amount" id="total-${provider.id}"></li>`).join('')}
                                                            </ul>
                                                        </td>
                                                    </tr>`);
                    },
                    error: function(data){
                    console.log(data)
                    }
                });
            });
            $('#adv-table-body').append(`<tr>Total</tr>`)
        });
    });
</script>
<script>
    function updateTotal(providerId) {

        let priceInput = document.getElementById(`price-${providerId}`);
        let costInput = document.getElementById(`cost-${providerId}`);
        let quantityInput = document.getElementById(`amount-${providerId}`);
        let totalElement = document.getElementById(`total-${providerId}`);
        let totalCostElement = document.getElementById(`costTotal-${providerId}`);

        let quantity = parseFloat(quantityInput.value) || 0;
        let price = priceInput.textContent;
        let cost = costInput.textContent;
        let total = (quantity * price).toFixed(2);
        let totalCost = (quantity * cost).toFixed(2);

        totalElement.textContent = total;
        totalCostElement.textContent = totalCost;

        var totalAmountElements = document.getElementsByClassName("total-amount");
        var totalAmountSum = 0;
        for (var i = 0; i < totalAmountElements.length; i++) {
        totalAmountSum += parseFloat(totalAmountElements[i].textContent) || 0;
        }

        var totalCostElements = document.getElementsByClassName("total-cost");
        var totalCostSum = 0;
        for (var i = 0; i < totalCostElements.length; i++) {
        totalCostSum += parseFloat(totalCostElements[i].textContent) || 0;
        }

        document.getElementById("total-amount-sum").value = totalAmountSum.toFixed(2);
        document.getElementById("total-cost-sum").value = totalCostSum.toFixed(2);
    }
</script>
@endpush
