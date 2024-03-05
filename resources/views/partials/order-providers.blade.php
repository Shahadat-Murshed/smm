@php $providerIndex = 0; @endphp
@foreach($providers as $provider)
    <div>
        <h3 id="{{$provider->id}}" class="m-5 text-center">{{ data_get($provider, 'title') }}</h3>
        <input type="hidden" name="configs[{{$providerIndex}}][advanced_service_provider_id]" value="{{ $provider->id }}">
        <div class="row provider">
            <div class="col-12 provider-{{$providerIndex}}">
                @for($link = 0; $link < (int) $provider->max_urls; $link++)
                    @include('partials.order-provider-links',[
                        'providerIndex' => $providerIndex,
                        'provider' => $provider,
                        'links' => $link
                    ])
                @endfor
            </div>
            <button type="button" class="btn ml-3 btn-success add-new-link" data-index="{{$providerIndex}}" data-max="{{$provider->max_urls}}" data-id="{{$provider->id}}">Add new link </button>
        </div>
    </div>
@php
    $providerIndex++;
@endphp

@endforeach

<script>

    $(document).ready(function(){
        createTagifyTagsPerLink();
    });

    let providersCount = {{$providers->count()}};
    let visibleLinks = Array({{$providers->count()}}).fill(1);
    let maxDripDays = JSON.parse('@json($providers->pluck('drip_in_days'))');
    let maxLinks = JSON.parse('@json($providers->pluck('max_urls'))');
    let providerPrices = JSON.parse('@json($providers->pluck('price_per_action'))');
    let drips = Array({{$providers->count()}}).fill(0);
    let tags = [];
    let quantitiesPerLink = []
    let linkValidators = @json(app('App\Models\LinkValidator')->all()->toArray());

    function getRegex(validatorId)
    {
        let linkValidator = linkValidators.find((item)=>item.id===parseInt(validatorId));
        let regex = linkValidator.regex;
        return RegExp(regex);
    }

    function toggleLinks(el,type)
    {
        let inputDiv = el
        if (type === 'disable') $(inputDiv).addClass('d-none');
        if (type === 'enable') $(inputDiv).removeClass('d-none');
        $(inputDiv).find('tags').each(function(index,inputTag) {
            if(type === 'disable') $(inputTag).attr("disabled", 'disabled');
            if(type === 'enable') $(inputTag).removeAttr("disabled");
        });
        $(inputDiv).find(':input').each(function(index,inputTag) {
            if(type === 'disable') $(inputTag).attr("disabled", 'disabled');
            if(type === 'enable') $(inputTag).removeAttr("disabled");
        });
    }

    $(document).on('change','.provider-link',function(){
        let data = $(this).data();
        let link = $(this).val();
        let regex = getRegex(parseInt(data.validator));
        if(!regex.test(link)){
            $(this).addClass('is-invalid')
        }else{
            $(this).removeClass('is-invalid')
            $(this).addClass('is-valid')
        }
    })

    $(document).on('click','.add-new-link',function () {
        let provider = $(this).data();
        let closestProvider = $(this).closest(`.provider`);
        let hidden = closestProvider.find(`.d-none`).first()[0];
        if(visibleLinks[provider.index] === maxLinks[provider.index]){
            Notiflix.Notify.Failure('Max url limit reached.');
        }else{
            visibleLinks[provider.index]+=1;
            if(visibleLinks[provider.index] === maxLinks[provider.index]){
                $(this).addClass('d-none');
            }
            toggleLinks(hidden, 'enable')
        }
    });

    $(document).on('click','.remove-link',function(){
        let linkData = $(this).data();
        const targetDiv = `#provider-${linkData.provider}-link-${linkData.link}`;
        toggleLinks($(targetDiv),'disable')
        visibleLinks[linkData.provider]-=1;
        resetDiv(linkData);
        $('.add-new-link').removeClass('d-none');
    });

    $(document).on('change','.change-drip-days',function(){
        let days = $(this).find(':selected').val();
        let providerInfo = $(this).data();
        let tagify = getTagifyInstance(providerInfo.provider, providerInfo.link);
        tagify.removeAllTags();
        getCurrentQty();
        tagify.settings.maxTags = days;
    });

    function getCurrentQty()
    {
        let total = 0;
        quantitiesPerLink = [];
        tags.forEach((tag)=>{
            tag.value.forEach((qty) => {
                total+=parseInt(qty.value)
                quantitiesPerLink.push(parseInt(qty));
            })
        });
        $('.current_quantity').val(total);
    }


    function totalPrice()
    {
        let total_price = 0;
        let startIndex = 0;

        maxLinks.forEach((maxValue,index)=> {
            let price_per_action = providerPrices[index];
            const endIndex = startIndex + maxValue;
            const selectedElements = tags.slice(startIndex, endIndex);
            selectedElements.forEach((tag)=>{
                tag.value.forEach((qty) => {
                    total_price+=parseFloat(qty.value)* parseFloat(price_per_action)

                })
            });
            startIndex = endIndex;
        })

        $('#price').val(total_price);
    }

    function updateQtyAndPrice(e)
    {
        if(e.type === 'add' || e.type === 'edit'){

        }
        getCurrentQty();
        totalPrice();
    }



    function getTagifyInstance(providerIndex,linkIndex)
    {
        // providerIndex = 1, linkIndex = 1 maxLinks = [3,5,2] tags.length = 8
        // if the providerIndex = 0 just sum providerIndex + linkIndex
        // max[providerIndex] = 5 - 1, tags = [0,1,2,3,4,5,6,7,8,9]
        // sum of maxes before that index Eg: 3
        // slice the tags on that sum tags.slice()
        // take the sliced part
        if(providerIndex === 0){
            return tags[providerIndex+linkIndex];
        }else{
            let prevMaxSum = maxLinks.slice(0,providerIndex).reduce((accumulator, currentValue) => {
                return accumulator + currentValue
            },0);
            return tags.slice(prevMaxSum,maxLinks[providerIndex] + prevMaxSum)[linkIndex]
        }
    }

    function createTagifyTagsPerLink(){
        for(let i = 0; i < providersCount; i++){
            let maxDays = maxDripDays[i];
            for(let j = 0; j < maxLinks[i]; j++){
                let id = `#qty-provider-${i}-link-${j}`
                let tagify = new Tagify(document.querySelector(id), {
                    maxTags : 0,
                    pattern: /^[0-9]*$/,
                    placeholder : 'Type the quantity in order of dates',
                    duplicates: true,
                    callbacks: {
                        "add": (e) => updateQtyAndPrice(e),
                        "edit": (e) => updateQtyAndPrice(e),
                        "remove": (e) => updateQtyAndPrice(e),
                    }
                });
                tags.push(tagify)
            }
        }
    }

    function resetDiv(linkData)
    {
        const targetDiv = $(`#provider-${linkData.provider}-link-${linkData.link}`);
        // Find and reset all form elements within the div
        targetDiv.find("input, select, textarea").each(function() {
            var elementType = $(this).attr('type');
            if (elementType === "text" || elementType === "password" || elementType === "textarea") {
                $(this).val(""); // Reset text inputs and text areas
            } else if (elementType === "checkbox" || elementType === "radio") {
                $(this).prop("checked", false); // Reset checkboxes and radio buttons
            } else if ($(this).is("select")) {
                $(this).val($(this).find("option:first").val()); // Reset select elements
            }
        });
    }

</script>
