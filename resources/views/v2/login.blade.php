@extends('v2.layouts.master')
@section('no_header')
    <div></div>
@endsection
@section('styles')
<style>
    .invalid-feedback{
        width:100%;
        margin-top:.25rem;
        font-size:80%;
        color:#ff4f70
        }
</style>
@endsection
@section('content')
<div>
    <div >
        <div></div>
        <section>
            <div class="container min-h-100vh flex items-center flex-wrap">
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
                                Login.
                            </h2>
                        </div>
                        <figure
                            class="max-w-full relative inline-flex justify-start vertical-top mb-35 sm:justify-center"
                        >
                            <img
                                class="max-w-full h-auto vertical-top border-inherit"
                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/logo/logo3.png"
                                alt="Hub Saas Pro"
                            />
                        </figure>
                        
                    </div>
                </div>
                <div
                    class="w-45percent relative flex flex-col sm:w-full module-form"
                >
                    <div
                        class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10 sm:p-0"
                    >
                        <div role="form">
                            
                            <div class="screen-reader-response">
                                <p
                                    role="status"
                                    aria-live="polite"
                                    aria-atomic="true"
                                ></p>
                            </div>
                            <form
                                action="{{ route('login') }}"
                                method="POST"
                                class="lqd-cf-form"
                                novalidate="novalidate"
                                data-status="init"
                            >
                                @csrf
                                <div class="row -mr-15 -ml-15">
                                    <div
                                        class="col col-12 col-md-12 px-15"
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
                                                    placeholder="Email Or Username"
                                                />
                                                @error('username')<p class="invalid-feedback  mt-1">{{ $message }}</p>@enderror
                                                @error('email')<p class="invalid-feedback  mt-1">{{ $message }}</p>@enderror
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        class="col col-12 col-md-12 px-15"
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
                                        class="col col-12 text-center px-15"
                                    >
                                        <button
                                            type="submit"
                                            class="lqd-cf-form-control text-16 uppercase leading-1em tracking-1 font-bold bg-primary text-white rounded-100 border-none"
                                        >Login</button>
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
    </div>
</div>
@endsection
@section('no_footer')
    <div></div>
@endsection