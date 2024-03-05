@extends('admin.layouts.app')
@section('title')
    @lang('Edit Advanced Service')
@endsection
@section('content')
    <div class="card card-primary card-form m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body ">
            <form action="{{route('admin.advanced-services.update', $service->id)}}" method="POST" id="form">
                @csrf
                <h5 class="table-group-title text-info mb-2 mb-md-3"><span>@lang('Service Basic')</span></h5>
                <input type="hidden" name="id" value="{{$service->id}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>@lang('Service Title')</label>
                            <input type="text" name="service_title"
                                   value="{{old('service_title',$service->service_title)}}"
                                   class="form-control form-control-sm">
                            @if($errors->has('service_title'))
                                <div class="error text-danger">@lang($errors->first('service_title')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Select Category')</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="{{old('category_id',$service->category_id)}}" selected
                                        hidden>@lang('Change Category')</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id  }}"
                                            @if($service->category_id == $category->id ) selected @endif>{{ $category->category_title  }}</option>
                                @endforeach
                            </select>

                        </div>
                        @if($errors->has('category_id'))
                            <div class="error text-danger mt-2">@lang($errors->first('category_id')) </div>
                        @endif
                    </div>
                </div>
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Price & Status')</span></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Minimum Amount')</label>
                            <input type="number" class="form-control square" name="min_amount"
                                   value="{{old('min_amount',$service->min_amount)}}">
                            @if($errors->has('min_amount'))
                                <div class="error text-danger">@lang($errors->first('min_amount')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group ">
                            <label class="d-block">@lang('Status') </label>
                            <div class="custom-switch-btn">
                                <input type='hidden' value='1' name='service_status'>
                                <input type="checkbox" name="service_status" class="custom-switch-checkbox"
                                       id="service_status"
                                       value="0" {{ $service->service_status == '0' ? 'checked': '' }} >
                                <label class="custom-switch-checkbox-label" for="service_status">
                                    <span class="custom-switch-checkbox-inner"></span>
                                    <span class="custom-switch-checkbox-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Maximum Amount')</label>
                            <input type="number" class="form-control square" name="max_amount"
                                   value="{{data_get($service,'max_amount',$service->min_amount)}}">
                            @if($errors->has('max_amount'))
                                <div class="error text-danger">@lang($errors->first('max_amount')) </div>
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
                                   value="{{ $service->discount_threshold }}">
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
                                       id="has_discount" value="0" {{ $service->service_status == '0' ? 'checked': '' }}>      
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
                            value="{{ $service->discount_ambassador }}">
                            @if($errors->has('discount_ambassador'))
                            <div class="error text-danger mt-2">@lang($errors->first('discount_ambassador')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Discount for Affiliates')</label>
                            <input type="number" class="form-control square" name="discount_affiliate"
                                   value="{{ $service->discount_affiliate }}">
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
                            <label>@lang('Drip Time Starts at') {{$service->drip_timer_starts}}</label>
                            <select class="form-control" id="drip_timer_starts" name="drip_timer_starts">
                                <option disabled value="" selected hidden>@lang('Select When to Start Drip Timer')</option>
                                    @for ($i = 1; $i < 24; $i++)
                                        <option {{$service->drip_timer_starts == $i ? 'selected' : ''}} value="{{$i}}">{{ $i }} : 00</option>
                                    @endfor
                            </select>
                            @if($errors->has('drip_timer_starts'))
                                <div class="error text-danger mt-2">@lang($errors->first('drip_timer_starts')) </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>@lang('Drip Time Ends at') {{$service->drip_timer_ends}}</label>
                            <select class="form-control" id="drip_timer_ends" name="drip_timer_ends">
                                <option disabled value="" selected hidden>@lang('Select When to Stop Drip Timer')</option>
                                    @for ($i = 1; $i < 24; $i++)
                                        <option {{$service->drip_timer_ends == $i ? 'selected' : ''}} value="{{$i}}">{{ $i }} : 00</option>
                                    @endfor
                            </select>
                            @if($errors->has('drip_timer_ends'))
                                <div class="error text-danger mt-2">@lang($errors->first('drip_timer_ends')) </div>
                            @endif
                        </div>
                    </div>
                </div>  
                <div class="divider"></div>
                <h5 class="table-group-title text-primary mb-2 mb-md-3"><span>@lang('Type & Details') </span></h5>
                <button class="btn-primary" type="button" id="add_new_provider">Add new provider</button>
                <div class="all-providers">
                @php $index = 0 @endphp
                @foreach($service->advanced_providers as $provider)
                    @include('partials.add-new-provider',[
                        'provider' => $provider,
                        'index' => $index,
                        'services' => $services,
                        'id' => $provider->id,
                    ])
                @php $index++; @endphp
                @endforeach
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3"><span><i
                            class="fas fa-save pr-2"></i> @lang('Save Changes')</span>
                </button>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
            "use strict";

            var providerIndex = {{ $service->advanced_providers->count() }};

            $(document).ready(function(){
            $('#form').on('submit', function(event){
                event.preventDefault();
                jQuery.ajax({
                    url: "{{route('admin.advanced-services.update',$service->id)}}",
                    data: jQuery('#form').serialize(),
                    type: 'put',
                    success:function(result){
                        Notiflix.Notify.Success("Advanced Services Created Successfully");
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        providerIndex=0;
                    },
                    error:function(result){
                        Notiflix.Notify.Failure("Something went wrong. Please try again");
                    }
                })
            });
        });

        $(document).ready(function() {
            $('.select2').select2();
        });

        $('.service_selected').change(function(){
            let selected = $('.service_selected').find(':selected').val();
        });

        $('#add_new_provider').click(function(){
            $.ajax({
                url: "{{ @route('admin.advanced-services.append') }}" + "?index=" + providerIndex,
                success : function (res){
                    $('.all-providers').append(res);
                    providerIndex++;
                }
            });
        });
        
        $(document).on('click','.remove-provider',function(){
            const providerIndex = $(this).data().index;
            console.log('#provider-'+ providerIndex);
            $('#provider-'+ providerIndex).remove();
        })
    </script>
@endpush
