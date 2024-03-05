@extends('v2.layouts.master')
@section('no_header')
    <div></div>
@endsection
@section('content')
<div>
    <div class="lqd-modal-inner">
        <div class="lqd-modal-head"></div>
        <section
            class="lqd-modal-content link-black bg-center bg-cover bg-norepeat"
            style="
                background-image: url({{asset('assets/frontend/v2')}}/images/common/modal-bg.jpeg);
            "
        >
            <div
                class="container min-h-100vh flex items-center flex-wrap"
            >
                <div
                    class="w-55percent relative flex flex-col sm:w-full"
                >
                    <div
                        class="flex flex-col items-start justify-center py-10 pr-100 pl-10 module-content"
                    >
                        <div class="ld-fancy-heading">
                            <h2
                                class="ld-fh-element mb-0/5em text-122 text-black leading-0/8em font-medium"
                            >
                                Become an <span>affiliate.</span>
                            </h2>
                        </div>
                        <div class="ld-fancy-heading">
                            <p class="ld-fh-element text-18 mb-0/5em">
                                Join us today, become an affiliate.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-45percent relative flex flex-col sm:w-full module-form"
                >
                    <div
                        class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10 sm:p-0"
                    >
                        <div role="form">
                            @if(session()->get('sponsor') != null)
                                <div class="col-md-12">
                                    <div class="form-group mb-30">
                                        @if ($sponsorRole == "Ambassador")
                                            <label>@lang('Ambassador Name')</label>
                                        @elseif ($sponsorRole == "Affiliate")
                                            <label>@lang('Affiliate Name')</label>
                                        @elseif ($sponsorRole == "User")
                                            <label>@lang('User Name')</label>
                                        @endif

                                        <input type="text" name="sponsor" class="form-control" id="sponsor"
                                                placeholder="{{trans('Sponsored By') }}"
                                                value="{{session()->get('sponsor')}}" readonly>
                                    </div>
                                </div>
                            @endif
                            <div class="screen-reader-response">
                                <p
                                    role="status"
                                    aria-live="polite"
                                    aria-atomic="true"
                                ></p>
                            </div>
                            <form
                                action="{{ route('register') }}"
                                method="POST"
                                class="lqd-cf-form"
                                novalidate="novalidate"
                                data-status="init"
                            >
                                @csrf
                                <div class="row -mr-15 -ml-15">
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap text"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="text"
                                                    name="firstname"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="First name"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap text"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="text"
                                                    name="lastname"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Last name"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap username"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="text"
                                                    name="username"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Username"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap email"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="email"
                                                    name="email"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Email address"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    @php
                                        $country_code = null;
                                        if (isset($info['code']) || !empty($info['code'])) {
                                            $country_code = @$info['code'][0];
                                        }
                                        $countries = config('country');
                                    @endphp
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >    
                                        <p>
                                            <span class="lqd-form-control-wrap">
                                                <select name="phone_code" class="text-13 text-black border-black-20 bg-transparent">
                                                    @foreach($countries as $country)
                                                        <option
                                                            value="{{$country['phone_code']}}"
                                                            data-name="{{$country['name']}}"
                                                            data-code="{{$country['code']}}"
                                                            {{$country_code == $country['code'] ? 'selected' : ''}}
                                                        >
                                                        <strong>{{$country['name']}} {{$country['phone_code']}} </strong>
                                                        </option>
                                                    @endforeach
                                                </select> 
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap tel"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="text"
                                                    name="phone"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Phone Number"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap text"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="password"
                                                    name="password"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Password"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-6 px-15"
                                    >
                                        <p>
                                            <span
                                                class="lqd-form-control-wrap text"
                                            >
                                                <input
                                                    class="text-13 text-black border-black-20 bg-transparent"
                                                    type="password"
                                                    name="password_confirmation"
                                                    value=""
                                                    size="40"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                    placeholder="Confirm Password"
                                                />
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col col-12 px-15 mb-1/25em">
                                        <div>
                                            <a class="btn"
                                               href="{{ route('login') }}">@lang("Already have account?")</a>
                                        </div>
                                    </div>
                                    <div
                                        class="col col-12 text-center px-15"
                                    >
                                        <button
                                            type="submit"
                                            class="lqd-cf-form-control text-16 uppercase leading-1em tracking-1 font-bold bg-primary text-white rounded-100 border-none"
                                        >Submit</button>
                                        <p class="mt-1/25em text-black">
                                            email:
                                            info@rocketsocialboost.com
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <div class="lqd-cf-response-output"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="lqd-modal-foot"></div>
    </div>
</div>
@endsection
@section('no_footer')
    <div></div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endpush