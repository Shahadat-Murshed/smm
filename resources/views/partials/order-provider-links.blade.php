<div class="row {{ $link == 0 ? '' : 'd-none' }} provider-{{$providerIndex}}" id="provider-{{$providerIndex}}-link-{{$link}}">
    <div class="form-group col-6">
        <label>@lang('Link')</label>
        <input
            type="text"
            name="configs[{{$providerIndex}}][links][{{$link}}]"
            value=""
            placeholder="www.example.com/your_profile_identity"
            class="form-control provider-link"
            data-validator={{$provider->link_validators_id}}
            {{ $link === 0 ? '' : 'disabled' }}
        >
    </div>
    <div class="form-group col-6">
        <label>@lang('Drips in Days')</label>
        <select class="form-control change-drip-days"
            {{ $link === 0 ? '' : 'disabled' }}
            data-provider="{{$providerIndex}}"
            data-link="{{$link}}"
            name="configs[{{$providerIndex}}][drips][{{$link}}]"
        >
            <option value="0" selected>Select Drip days</option>
            @php $dripDays = (int) $provider->drip_in_days; @endphp
            @for($i = 1 ; $i <= $dripDays ; $i++ )
                <option value={{$i}}>{{$i}}</option>
            @endfor
        </select>
    </div>
    <div class="form-group col-12">
        <label>Quantities</label>
        <input
            class="form-control"
            id="qty-provider-{{$providerIndex}}-link-{{$link}}"
            data-provider="{{$providerIndex}}"
            name="configs[{{$providerIndex}}][qty][{{$link}}]"
{{--            {{ $link === 0 ? '' : 'disabled' }}--}}
        >
    </div>
    @if($link != 0)
    <div class="form-group col-12">
        <button class="btn btn-danger remove-link" type="button" data-provider="{{$providerIndex}}" data-link="{{$link}}">Remove item</button>
    </div>
    @endif
</div>
