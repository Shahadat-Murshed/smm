@extends('user.layouts.app')
@section('title')
    @lang('New Order')
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb center-items">
            <li><a href="{{route('user.home')}}">@lang('Home')</a></li>
            <li class="active">@lang('New Order')</li>
        </ol>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title mb-3">@lang('Add new')</h4>
                                <form class="form" method="post" id="adv_form" action="{{route('user.orderV2.store')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label" for="category_id">@lang('Category')</label>
                                        <select id="category" class="form-control" name="category">
                                            <option value="0" hidden>@lang('Select Category')</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : (isset($selectService) && $selectService->category_id == $category->id ? 'selected ' : '')  }}>@lang($category->category_title)</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('category'))
                                            <div class="error text-danger">@lang($errors->first('category')) </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label " for="service_id">@lang('Service')</label>
                                        <select id="service" class="form-control" name="service">
                                        </select>
                                        @if($errors->has('service'))
                                            <div class="error text-danger">@lang($errors->first('service'))</div>
                                        @endif
                                    </div>
                                    <div class="configs">
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-12">
                                            <div class="form-group price">
                                                <label>@lang('Price')</label>
                                                <input type="number" id="price" name="price" class="form-control"
                                                       disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="agree" name="check">
                                        <label class="form-check-label"
                                               for="agree">@lang('Yes, i have confirmed the order!')</label>
                                        @if($errors->has('check'))
                                            <div class="error text-danger">@lang($errors->first('check')) </div>
                                        @endif
                                    </div>
                                    <div class="submit-btn-wrapper mt-md-5 text-center text-md-left">
                                        <button type="submit"
                                                class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3 place_order">
                                            <span>@lang('Place Order')</span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <h4 class="card-title mb-3">@lang('Order Resume')</h4>
                                <form class="form" id="formDescription">
                                    <div class="form-group ">
                                        <label>@lang('Service name')</label>
                                        <input type="text" class="form-control service_name" disabled>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label>@lang('Minimum Amount')</label>
                                                <input class="form-control minimum_amount" name="min_amount" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label>@lang('Maximum Amount')</label>
                                                <input type="text" class="form-control maximum_amount" name="max_amount"
                                                       disabled>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>@lang('Current Quantity')</label>
                                                <input type="text" class="form-control current_quantity" name="current_quantity"
                                                       disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label>@lang('Description')</label>
                                        <textarea class="form-control description" disabled rows="12"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        "use strict";

        $(document).ready(function () {
            var catId = "{{ old('category', $selectService->category_id ?? '') }}";
            if (catId) {
                getService(catId);
            }
            $(document).on('change', '#category', function (e) {
                var cat_id = $('option:selected', this).val();
                getService(cat_id);
                $('.configs').html('');
            });

            $(document).on('change', '#service', function () {
                var ser_id = $('option:selected', this).val();
                getServiceDetails(ser_id)
                $('.configs').html('');
            });

            function getService(cat_id) {
                $.ajax({
                    url: "{{ route('user.adv.service') }}",
                    type: "GET",
                    data: {cat_id: cat_id},
                    success: function (data) {
                        $('#service').html('');
                        if (data.length) {
                            var serviceId = "{{old('service', $selectService->id ?? '')}}";
                            if (!serviceId) {
                                $('#service').append('<option value="" disabled selected>Select Service</option>');
                            }
                            $(data).each(function (key, val) {
                                if (serviceId == val.id) {
                                    $('#service').append('<option value="' + val.id + '" selected>' + val.service_title + '</option>');
                                } else {
                                    $('#service').append('<option value="' + val.id + '">' + val.service_title + '</option>');
                                }
                            });
                            if (serviceId) {
                                getServiceDetails(serviceId);
                            }
                        }
                    }
                })
            }

            function getProviderDetails(serviceId)
            {
                $.ajax({
                    type : 'get',
                    data: {service_id: serviceId},
                    url: "{{ route('user.adv.get_providers') }}",
                    success: function (data) {
                        $('.configs').append(data);
                    }
                });
            }

            function getServiceDetails(ser_id) {
                $.ajax({
                    type: "get",
                    data: {ser_id: ser_id},
                    url: "{{ route('user.adv.service_id') }}",
                    success: function (data) {
                        var price = (data.user_rate) ? data.user_rate : data.price;
                        $('.service_name').val(data.service_title);
                        $('.minimum_amount').val(data.min_amount);
                        $('.maximum_amount').val(data.max_amount);
                        $('.price_per').val(price);
                        $('.description').val(data.description);
                        getProviderDetails(data.id);
                    }
                    });
            }

            $('#adv_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url: "{{route('user.orderV2.store')}}",
                    data: $('#adv_form').serialize(),
                    type: 'post',
                    success: function(res){
                        Notiflix.Notify.Success("Order Placed Successfully");
                        if(res.redirect && res.redirect?.status && res.redirect?.url){
                            setTimeout(()=>{
                                window.location = res.redirect.url;
                            },1000)
                        }
                    },
                    error:function(result){
                        Notiflix.Notify.Failure(result.responseJSON.message);
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/@yaireo/dragsort@1.3.1/dist/dragsort.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/browse/@yaireo/dragsort@1.3.1/dist/dragsort.css">
@endpush
