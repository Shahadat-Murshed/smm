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
                                    Our Services.
                                </span>
                            </h1>
                        </div>
                        <div class="ld-fancy-heading max-w-full">
                            <p class="ld-fh-element mb-0/5em lqd-split-lines text-18 leading-30 text-slate-700"
                                data-split-text="true" data-split-options='{"type": "lines"}'>
                                View our range of services, and get started today.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <!-- Start Table -->
    @php
        $services = app('App\Models\AdvancedService')->where('service_status', 1)->get();
    @endphp
    <div class="w-70percent overflow-x-scroll mx-auto rounded-10 overflow-hidden module-title">
        <table class="shadow swing-in-top-fwd text-center">
            <tbody>
                <tr >
                    <th scope="col" class=" pl-25 py-15  text-sm font-medium text-white  uppercase"
                    style="background-color: #6c7ae0;"
                    >Platform</th>
                    <th scope="col" class=" pl-25 py-15  text-sm font-medium text-white  uppercase"
                    style="background-color: #6c7ae0;"
                    >Service</th>
                    <th scope="col" class=" pl-25 py-15  text-sm font-medium text-white  uppercase"
                    style="background-color: #6c7ae0;"
                    >Order amount</th>
                    <th scope="col" class=" pl-25 py-15  text-sm font-medium text-white  uppercase"
                    style="background-color: #6c7ae0;"
                    >Price Per service Per 1K</th>
                    <th scope="col" class=" pl-25 py-15  text-sm font-medium text-white  uppercase text-center"
                    style="background-color: #6c7ae0;"
                    >Action</th>
                </tr>
                @foreach ($services as $service)
                        <?php
                            $price = 0;
                            foreach ($service->advanced_providers as $provider){
                                $price += ($provider->price_per_action)*1000;
                            }
                        ?>
                    <tr>
                        <td class="h-12 pl-25 text-sm transition duration-300 py-15">{{$service->category->category_title}}</td>
                        <td class="h-12 pl-25 text-sm transition duration-300 py-15">{{$service->service_title}}</td>
                        <td class="h-12 pl-25 text-sm transition duration-300 py-15">{{$service->min_amount}} - {{$service->max_amount}}</td>
                        <td class="h-12 pl-25 text-sm transition duration-300 py-15">
                            @money($price * 100, 'USD')
                        </td>
                        <td class="h-12 pl-25 text-sm transition duration-300 py-15">
                           @include('component.buy-button',['type' => 'service', 'id'=> $service->id])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!-- End Table -->
@endsection
