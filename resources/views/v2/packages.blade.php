@extends('v2.layouts.master')
@section('styles')
<style>
    .swing-in-top-fwd {
        -webkit-animation: swing-in-top-fwd 1.5s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
        animation: swing-in-top-fwd 1.5s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
    }
    @-webkit-keyframes swing-in-top-fwd {
        0% {
            -webkit-transform: rotateX(-100deg);
                transform: rotateX(-100deg);
            -webkit-transform-origin: top;
                transform-origin: top;
            opacity: 0;
        }
        100% {
            -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
            -webkit-transform-origin: top;
                transform-origin: top;
            opacity: 1;
        }
        }
        @keyframes swing-in-top-fwd {
        0% {
            -webkit-transform: rotateX(-100deg);
                transform: rotateX(-100deg);
            -webkit-transform-origin: top;
                transform-origin: top;
            opacity: 0;
        }
        100% {
            -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
            -webkit-transform-origin: top;
                transform-origin: top;
            opacity: 1;
        }
    }
</style>
@endsection
@section('content')
    <section class="lqd-section banner flex items-center justify-center pt-35 pb-50" id="banner">
        <div class="w-full h-full absolute pointer-events-none">
            <div class="ld-particles-container lqd-particles-as-bg">
                <div class="ld-particles-inner" id="lqd-particles-banner" data-particles="true"
                    data-particles-options='{"particles": {"number": {"value" : 5} , "color": {"value" : ["#fdc14c", "#fd5c4c", "#48bb0f", "#fda44c"]} , "shape": {"type" : ["circle", "edge", "triangle", "polygon"]} , "opacity": {"random": true} , "size": {"value" : 5} , "move": {"out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'>
                </div>
            </div>
        </div>
        <div class="lqd-imggrp-container w-full absolute pointer-events-none top-20percent left-0"
            data-move-element='{ "target":  ".container", "type":  "insertBefore" }' data-parallax="true"
            data-parallax-from='{"y" : 114}' data-parallax-to='{"y" : -122}'
            data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'>
            <div class="lqd-imggrp-single relative">
                <div class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center">
                    <figure>
                        <img width="43" height="279" src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/bg.png" alt="shape">
                        <img width="43" height="279" src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/Mask-Group-3@2x.jpg"
                             alt="shape">
                    </figure>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center">
                    <div class="module-title flex flex-wrap justify-center px-15percent" data-custom-animations="true"
                        data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 35, "rotationX" : 10, "rotationY" : 25, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "rotationX" : 0, "rotationY" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'>
                        <div class="ld-fancy-heading max-w-full">
                            <h1 class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-split-lines Tracking-0 font-semibold leading-1em text-70"
                                data-split-text="true" data-split-options='{"type": "lines"}'>
                                Choose<br>
                                <span class="gradient-word"
                                    style="background-image: linear-gradient(to right, #3D9BFC, #7B40E4, #F53A8B, #EE704A, #2DDD4F);">
                                    Our Packages.
                                </span>
                            </h1>
                        </div>
                        <div class="ld-fancy-heading max-w-full">
                            <p class="ld-fh-element mb-0/5em lqd-split-lines text-18 leading-30 text-slate-700"
                                data-split-text="true" data-split-options='{"type": "lines"}'>
                                View our range of packages, and choose your social platform to get started.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <!-- Start Pricing -->
    <div class="swing-in-top-fwd lqd-tabs lqd-tabs-style-9 lqd-tabs-style-9-alt2 flex flex-col lqd-nav-underline- lqd-tabs-nav-items-not-expanded"
        data-tabs-options="{&quot;trigger&quot;: &quot;click&quot;}">
        <!-- SOCIAL ICONS GOES HERE -->
        <nav class="lqd-tabs-nav-wrap mb-2/5em">
            <ul class="reset-ul lqd-tabs-nav flex items-center flex-wrap justify-center relative" role="tablist">
                <li data-controls="lqd-tab-pricing-Twitter" role="presentation">
                    <a class="text-13 font-medium tracking-0 block" href="#lqd-tab-pricing-Twitter" aria-expanded="false"
                        aria-controls="lqd-tab-pricing-Twitter" role="tab" data-bs-toggle="tab" aria-selected="false"
                        tabindex="-1">
                        <span class="lqd-tabs-nav-txt"><i style="font-size: 30px" class="fab fa-twitter"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="lqd-tabs-content relative">
            <!-- PACKAGE CARDS GOES HERE-->
            <div id="lqd-tab-pricing-Instagram" role="tabpanel" class="lqd-tabs-pane active show">
                <div class="pt-50 pb-20 px-20 lg:p-0 module-sections">
                    <div class="container p-0">
                        <div class="row m-0">
                            @php
                                $packages = app('App\Models\Package')
                                    ->where('status', 1)
                                    ->get();
                            @endphp
                            @foreach ($packages as $package)
                                <div class="co-12 col-md-4 p-0 mb-5em">
                                    <div
                                        class="module-section mx-20 flex flex-wrap bg-white rounded-10 border-0  border-gray-100 shadow-sm transition-all">
                                        <div
                                            class="w-full flex flex-col items-center border-bottom  border-gray-100 transition-all pt-15 pb-5 px-35">
                                            <div class="mb-20 ld-fancy-heading relative">
                                                <p
                                                    class="font-title text-16 font-bold leading-1 tracking-0 -mb-1em text-amber-600 ld-fh-element inline-block relative">
                                                    {{ $package->package_name }}</p>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <h3 class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                    @money($package->price_monthly * 100, 'USD')
                                                    <small class="font-bold text-13 text-sky-900">/mo</small>
                                                </h3>
                                            </div>
                                            <div class="ld-fancy-heading relative">
                                                <h3 class="font-title text-46 font-bold mb-20 ld-fh-element inline-block relative">
                                                    @money($package->price_annually * 100, 'USD')
                                                    <small class="font-bold text-13 text-sky-900">/year</small>
                                                </h3>
                                            </div>
                                        </div>
                                        <div
                                            class="module-section-bottom w-full flex flex-col py-30 px-55 items-center text-center">
                                            <div class="mb-20 ld-fancy-heading relative lg:text-start">
                                                <p
                                                    class="text-16 leading-1/5em mb-0/5em text-secondary ld-fh-element inline-block relative">
                                                    {{ $package->description }}</p>
                                            </div>
                                            <div
                                                class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                <div class="iconbox-icon-wrap mr-15">
                                                    <div
                                                        class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                        <i aria-hidden="true"
                                                            class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                    </div>
                                                </div>
                                                <h3 class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                    {{ $package->point_1 }}
                                                </h3>
                                            </div>
                                            <div
                                                class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                <div class="iconbox-icon-wrap mr-15">
                                                    <div
                                                        class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                        <i aria-hidden="true"
                                                            class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                    </div>
                                                </div>
                                                <h3 class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                    {{ $package->point_2 }}
                                                </h3>
                                            </div>
                                            <div
                                                class="w-full mb-20 -mt-5 iconbox flex flex-grow-1 relative flex-wrap items-center iconbox-circle">
                                                <div class="iconbox-icon-wrap mr-15">
                                                    <div
                                                        class="iconbox-icon-container inline-flex relative z-1 rounded-full w-25 h-25 text-14 text-amber-600 bg-amber-100">
                                                        <i aria-hidden="true"
                                                            class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                                    </div>
                                                </div>
                                                <h3 class="text-14 font-normal m-0 text-secondary lqd-iconbox-heading">
                                                    {{ $package->point_3 }}
                                                </h3>
                                            </div>
                                            @include('component.buy-button',['type' => 'package', 'id' => $package->id])
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
