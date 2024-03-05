<div id="provider-{{$index}}">
    <div class="row">
        @isset($id)
            <input value="{{$id}}" type="hidden" name="provider[{{$index}}][id]">
        @endisset
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label " for="provider[{{$index}}][apiprovider]">@lang('API Provider Name')</label>
                <select class="form-control" name="provider[{{$index}}][api_provider_id]">
                    <option value="0" hidden>@lang('Select API Provider name')</option>
                    @foreach($apiProviders as $apiProvider)
                        <option value="{{ $apiProvider->id }}" {{ data_get($provider,'api_provider_id') == $apiProvider->id ? 'selected' : '' }}>{{ $apiProvider->api_name }}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>@lang('API Service ID and Price')</label>
                <select 
                    class="form-control select-2 service_selected"
                    name="provider[{{$index}}][api_service_id]"
                    >
                    @foreach($services as $service)
                        <option
                        value="{{$service->api_service_id}}"
                        data-price={{$service->api_provider_price}}
                        >
                        Title: {{$service->service_title}}. (Price: {{$service->api_provider_price}})</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control square" name="provider[{{$index}}][api_service_id]"
                value="{{ old('api_service_id') }}" placeholder="@lang('Api Service ID')"> --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>@lang('Select Refill')</label>
            <select class="form-control" name="provider[{{$index}}][refill]" id="refill">
                <option disabled value="" selected hidden>@lang('Select Refill')</option>
                <option value="1" {{(old('refill') == '1') ? 'selected':''}} >@lang('Manual')</option>
                <option value="2" {{(old('refill') == '2') ? 'selected':''}} class="automatic">@lang('Automatic')</option>
                <option value="3" selected >@lang('Off')</option>
            </select>
        </div>
        <input
            type="hidden"
            name='provider[{{$index}}][drip_feed]'
            value="1"
        >
        <div class="col-md-6">
            <label>@lang('Max urls')</label>
            <input type="number" class="form-control square"
            value="{{data_get($provider,'max_urls',0)}}"
            name="provider[{{$index}}][max_urls]" >
        </div>
        <div class="col-md-6">
            <label>@lang('Price per action')</label>
            <input type="number" class="form-control square price_per_action" step="0.0001"
            value="{{data_get($provider,'price_per_action',0)}}"
            name="provider[{{$index}}][price_per_action]" >  
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                <label class="d-block">@lang('Drip feed in days')</label>
                <input
                    class="form-control"
                    type="number"
                    name="provider[{{$index}}][drip_in_days]"
                    min="1"
                    value="{{ data_get($provider,'drip_in_days',0) }}"
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>@lang('Link Validator')</label>
                <select
                    class="form-control select-2 link_validators_selected"
                    name="provider[{{$index}}][link_validators_id]"
                    >
                    @foreach($linkValidators as $linkValidator)
                        <option {{$linkValidator->id == $provider?->link_validators_id ? 'selected': ''}}
                        value="{{$linkValidator->id}}"
                        data-price={{$linkValidator->id}}
                        >{{$linkValidator->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group ">
                <label class="d-block">@lang('Has Comment?')</label>
                <div class="custom-switch-btn">
                    <input type='hidden' value='1' name='provider[{{$index}}][has_comment]'>
                    <input type="checkbox" name="provider[{{$index}}][has_comment]" class="custom-switch-checkbox"
                           id="provider[{{$index}}][has_comment]" value="0">
                    <label class="custom-switch-checkbox-label" for="provider[{{$index}}][has_comment]">
                        <span class="custom-switch-checkbox-inner"></span>
                        <span class="custom-switch-checkbox-switch"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group mt-4">
        <label class="control-label " for="title">@lang('Title')</label>
        <textarea class="form-control" rows="3" placeholder="@lang('Title') " name="provider[{{$index}}][title]">{{ data_get($provider,'title',0) }}</textarea>
    </div>
    <button
        class="btn-danger mb-2 remove-provider"
        data-index="{{$index}}"
        type="button"
    >
        Remove
    </button>
</div>

@push('js')
    <script>
        $(document).on('change','.service_selected',function(){
            alert('Hello');
        })
    </script>
@endpush