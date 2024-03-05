<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&family=Nunito:wght@400;600;700&family=Roboto&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="">
<form action="{{route('order.package')}}" method="post">
    @csrf
    <div class="w-full mx-auto border bg-gray-100 shadow-lg lg:min-h-screen p-20 lg:px-72">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 ">
            <div class="space-y-4 col-span-2">
                <div>
                    <div
                        class="flex items-center space-x-4 px-10 py-3 rounded-full bg-gray-200"
                    >
								<span
                                    class="flex items-center justify-center w-10 h-10 shrink-0 rounded-full  text-gray-900"
                                >
                                    <figure class="w-full relative">
                                        <img width="75" height="75" src="{{asset('assets/frontend')}}/images/demo/index/SocialIcons/Front View/Instagram.png" alt="clients">
                                    </figure>
{{--									<svg--}}
{{--                                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                                        class="w-6 h-6"--}}
{{--                                        width="24"--}}
{{--                                        height="24"--}}
{{--                                        viewBox="0 0 24 24"--}}
{{--                                        stroke-width="1.5"--}}
{{--                                        stroke="currentColor"--}}
{{--                                        fill="none"--}}
{{--                                        stroke-linecap="round"--}}
{{--                                        stroke-linejoin="round"--}}
{{--                                    >--}}
{{--										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>--}}
{{--										<path d="M8 16a3 3 0 0 1 -3 3"></path>--}}
{{--										<path d="M16 16a3 3 0 0 0 3 3"></path>--}}
{{--										<path d="M12 16v4"></path>--}}
{{--										<path--}}
{{--                                            d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"--}}
{{--                                        ></path>--}}
{{--										<path d="M7 13v-3a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v3"></path>--}}
{{--									</svg>--}}
								</span>
                        <div class="flex flex-col flex-1">
                            <h2 class="text-center text-3xl font-extrabold text-black lg:text-left text-gray-600">
                                {{ data_get($package,'package_name')  }}
                            </h2>
                            <p class="text-sm font-medium tracking-wider  text-gray-700">
                                {{ data_get($package, 'description', 'Watch the results come in, and your platform grow to new levels!') }}
                            </p>
                            <div class="mt-2 ">
                                @if(data_get($package,'price_annually'))
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5" name="subscription"
                                               value="annually" data-price="{{data_get($package,'price_annually')}}">
                                        <span
                                            class="ml-2 font-bold text-md">Annually ${{data_get($package,'price_annually')}}</span>
                                    </label>
                                @endif
                                @if(data_get($package,'price_monthly'))
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio w-5 h-5" name="subscription"
                                               value="monthly" data-price="{{data_get($package,'price_monthly')}}">
                                        <span
                                            class="ml-2 font-bold text-md">Monthly ${{ data_get($package,'price_monthly')  }}</span>
                                    </label>
                                @endif
                                @if(data_get($package,'price'))
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio w-5 h-5" name="subscription"
                                               value="one_time" data-price="{{ data_get($package,'price')  }}"
                                               checked
                                        >
                                        <span
                                            class="ml-2 font-bold text-md">One time ${{ data_get($package,'price')  }}</span>
                                    </label>
                                @endif
                            </div>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 shrink-0"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div
                        class="flex  justify-start py-3 rounded-full "
                    >
								<span
                                    class="flex items-center mr-3 justify-center bg-white w-7 h-7 shrink-0 rounded-full  text-gray-900"
                                >
									<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                         clip-rule="evenodd">
										<path
                                            d="M14.851 11.923c-.179-.641-.521-1.246-1.025-1.749-1.562-1.562-4.095-1.563-5.657 0l-4.998 4.998c-1.562 1.563-1.563 4.095 0 5.657 1.562 1.563 4.096 1.561 5.656 0l3.842-3.841.333.009c.404 0 .802-.04 1.189-.117l-4.657 4.656c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-1.952-1.951-1.952-5.12 0-7.071l4.998-4.998c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464.493.493.861 1.063 1.105 1.672l-.787.784zm-5.703.147c.178.643.521 1.25 1.026 1.756 1.562 1.563 4.096 1.561 5.656 0l4.999-4.998c1.563-1.562 1.563-4.095 0-5.657-1.562-1.562-4.095-1.563-5.657 0l-3.841 3.841-.333-.009c-.404 0-.802.04-1.189.117l4.656-4.656c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464 1.951 1.951 1.951 5.119 0 7.071l-4.999 4.998c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-.494-.495-.863-1.067-1.107-1.678l.788-.785z"/>
									</svg>
								</span>
                        <h2 class="text-xl font-semibold ">Social Media Links</h2>
                    </div>
                    <div id="link-container">
                        <label
                            for="config[links][]"
                            class="block text-sm font-medium text-gray-700"
                        >Link</label
                        >
                        <div class="link-item">
                            <input
                                type="text"
                                name="config[links][]"
                                class=" mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                            />
                            <a href="#" class="remove-link text-red-600">Remove</a>
                        </div>
                    </div>
                    <div class="mt-4 w-full">
                        <button
                            id="add-link"
                            type="button"
                            class="w-1/4 block py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring focus:border-indigo-700 mx-auto"
                        >
                            Add Link
                        </button>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div
                        class="flex justify-start py-3 rounded-full "
                    >
								<span
                                    class="flex items-center justify-center bg-white w-7 h-7 shrink-0 rounded-full  text-gray-900 mr-3"
                                >
									<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                         clip-rule="evenodd">
										<path
                                            d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z"/>
									</svg>
								</span>
                        <h2 class="text-xl font-semibold ">Payment Info</h2>
                    </div>
                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700"
                        >Email</label
                        >
                        <input
                            type="text"
                            id="email"
                            name="email"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        />
                    </div>
                    <div>
                        <label
                            for="email"
                            class="block mt-2 text-sm font-medium text-gray-700"
                        >Promo Code</label
                        >
                        <input
                            type="text"
                            id="promo"
                            name="promo"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                        />
                    </div>
                    <div class="mt-2 ">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio w-5 h-5" name="payment_type" value="annually">
                            <span class="ml-2 font-bold text-md">Card</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio w-5 h-5" name="payment_type" value="monthly">
                            <span class="ml-2 font-bold text-md">Paypal</span>
                        </label>
                    </div>
                    <div class="mt-4 w-full">
                        <button
                            type="submit"
                            id="order-button"
                            class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring focus:border-indigo-700"
                        >
                            Complete Order (${{ data_get($package,'price')  }})
                        </button>
                    </div>
                </div>
            </div>
            <div class="
{{--            flex align-content-between bg-white p-8 rounded-xl shadow-md --}}
            ">
                <div class="col-span-1 m-5 mt-0 p-4 bg-white shadow-lg rounded-2xl">
                    <h2 class="mb-4 text-xl font-medium text-gray-800">
                        {{data_get($package,'package_name')}}
                    </h2>
                    <p class="mt-4 text-xs text-gray-600 ">
                        {{ data_get($package,'description')  }}
                    </p>
                    <ul class="w-full mt-6 mb-6 text-sm text-gray-600 ">
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            {{data_get($package,'point_1')}}
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            {{data_get($package,'point_2')}}
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Upto {{$package->total_links()}} links
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            {{ data_get($package,'point_3') }}
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Live Support 24/7
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            AI driven drip feed
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Scheduled drip feeds
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            See growth organically
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                 stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Advanced algorithm for better results
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
<script src="{{asset('assets/frontend')}}/vendors/jquery.min.js"></script>
<script>
    const maxLinks = {{$package->total_links()}};

    $(document).ready(function () {

        $("input[name='subscription']").change(function () {
            let price = $(this).data()?.price;
            $('#order-button').html('Complete Order ($' + price + ')');
        });

        $('#add-link').on('click', function () {
            let newLinkItem = $('#link-container .link-item:first').clone();
            if ($('#link-container .link-item').length !== maxLinks) {
                $('#link-container').append(newLinkItem);
                newLinkItem.find('input').val('');
            }
            $(this).closest('.link-item').remove();
        });
        $('#link-container').on('click', '.remove-link', function () {
            if ($('#link-container .link-item').length > 1) {
                $(this).closest('.link-item').remove();
            }
            // if ($('#link-container .link-item').length === 1) {
            //     $('#link-container .remove-link').prop('disabled', true);
            // }
        });
    });
</script>
