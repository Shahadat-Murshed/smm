@extends('v2.layouts.master')
@section('content')
    <div id="wrap">
        <main
            class="content bg-repeat bg-center"
            id="lqd-site-content"
            style="
                background-image: url({{asset('assets/frontend/v2')}}/images/demo/saas/bg/bg-pattern.svg);
            "
        >
            <div id="lqd-contents-wrap">
                <!-- Start Banner -->
                <section
                    class="lqd-section banner flex items-center justify-center pt-35 pb-50"
                    id="banner"
                >
                    <div class="w-full h-full absolute pointer-events-none">
                        <div
                            class="ld-particles-container lqd-particles-as-bg"
                        >
                            <div
                                class="ld-particles-inner"
                                id="lqd-particles-banner"
                                data-particles="true"
                                data-particles-options='{"particles": {"number": {"value" : 5} , "color": {"value" : ["#fdc14c", "#fd5c4c", "#48bb0f", "#fda44c"]} , "shape": {"type" : ["circle", "edge", "triangle", "polygon"]} , "opacity": {"random": true} , "size": {"value" : 5} , "move": {"out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'
                            ></div>
                        </div>
                    </div>
                    <div
                        class="lqd-imggrp-container w-full absolute pointer-events-none top-20percent left-0"
                        data-move-element='{ "target":  ".container", "type":  "insertBefore" }'
                        data-parallax="true"
                        data-parallax-from='{"y" : 114}'
                        data-parallax-to='{"y" : -122}'
                        data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
                    >
                        <div class="lqd-imggrp-single relative">
                            <div
                                class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center"
                            >
                                <figure>
                                    <img
                                        width="43"
                                        height="279"
                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/bg.png"
                                        alt="shape"
                                    />
                                    <img
                                        width="43"
                                        height="279"
                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/Mask-Group-3@2x.jpg"
                                        alt="shape"
                                    />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div
                                class="col col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center"
                            >
                                <div
                                    class="module-title flex flex-wrap justify-center px-15percent"
                                    data-custom-animations="true"
                                    data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 35, "rotationX" : 10, "rotationY" : 25, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "rotationX" : 0, "rotationY" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
                                >
                                    <div
                                        class="ld-fancy-heading max-w-full"
                                    >
                                        <h1
                                            class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-split-lines Tracking-0 font-semibold leading-1em text-70"
                                            data-split-text="true"
                                            data-split-options='{"type": "lines"}'
                                        >
                                            Welcome to Rocket<br/>
                                            <span
                                                class="gradient-word"
                                                style="
                                                    background-image: linear-gradient(
                                                        to right,
                                                        #3d9bfc,
                                                        #7b40e4,
                                                        #f53a8b,
                                                        #ee704a,
                                                        #2ddd4f
                                                    );
                                                "
                                            >
                                                Social Boost.
                                            </span>
                                        </h1>
                                    </div>
                                    <div
                                        class="ld-fancy-heading max-w-full"
                                    >
                                        <p
                                            class="ld-fh-element mb-0/5em lqd-split-lines text-18 leading-30 text-slate-700"
                                            data-split-text="true"
                                            data-split-options='{"type": "lines"}'
                                        >
                                            The place to truly elevate your
                                            social game, check all about us
                                            below.
                                        </p>
                                    </div>
                                    <div class="w-full h-20"></div>
                                    <a
                                        href="#contact-modal"
                                        class="ajx_modal btn btn-solid btn-hover-txt-switch btn-hover-txt-switch-y border-none px-1em mx-10 mb-10 bg-primary rounded-100 text-17 leading-1/5em text-white hover:bg-black"
                                        data-lity="#contact-modal"
                                        data-url="{{ route('register-as-affiliate') }}"
                                    >
                                        <span
                                            class="inline-flex py-1/15em px-2/1em items-center"
                                        >
                                            <span
                                                class="btn-txt"
                                                data-text="Sign up free"
                                                data-transition-delay="true"
                                                data-delay-options='{"elements":  ".lqd-chars", "delayType":  "animation", "startDelay":  0, "delayBetween":  32.5}'
                                                data-split-text="true"
                                                data-split-options='{"type":  "chars, words"}'
                                            >Sign up
                                            </span>
                                            <span class="btn-icon">
                                                <i
                                                    class="lqd-icn-ess icon-md-arrow-forward"
                                                ></i>
                                            </span>
                                        </span>
                                    </a>
                                    <a
                                        href="{{route('services')}}"
                                        class="btn btn-default btn-hover-txt-switch btn-hover-txt-switch-y border-thick btn-icon-left btn-hover-swp px-0/5em mx-10 mb-10 border-2 border-black-10 rounded-100 text-17 text-black leading-1/5em hover:bg-black hover:text-white"
                                    >
                                        <span
                                            class="inline-flex py-1/15em px-2/1em items-center"
                                        >
                                            <span
                                                class="btn-txt -mr-1em"
                                            >Premium Services</span
                                            >
                                            <span
                                                class="btn-icon text-primary mr-5"
                                            >
                                                <i
                                                    class="lqd-icn-ess icon-ion-ios-play"
                                                ></i>
                                            </span>

                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 text-center"
                            >
                                <div
                                    class="module-icon-box flex flex-col flex-grow-1 pt-50 pb-15"
                                    data-custom-animations="true"
                                    data-ca-options='{"triggerHandler": "inview", "animationTarget": ".iconbox", "duration": "1800", "startDelay": "850", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
                                >
                                    <div class="row">
                                        <div
                                            class="w-33percent sm:w-full px-15"
                                        >
                                            <div
                                                class="iconbox iconbox-inline items-center iconbox-circle relative flex-row flex-wrap justify-start text-start mb-2em sm:justify-center"
                                                data-animate-icon="true"
                                                data-plugin-options='{"color": "rgb(0, 108, 227)"}'
                                            >
                                                <div
                                                    class="iconbox-icon-wrap flex items-center"
                                                >
                                                    <span
                                                        class="iconbox-icon-container relative flex items-center justify-center text-16 w-30 h-30 text-blue-300 bg-blue-100 rounded-full"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-checkmark absolute-center"
                                                        ></i>
                                                    </span>
                                                </div>
                                                <h3 class="mb-0 text-14">
                                                    Real and Organic
                                                    Services
                                                </h3>
                                                <a
                                                    href="#"
                                                    class="liquid-overlay-link z-2"
                                                ></a>
                                            </div>
                                        </div>
                                        <div
                                            class="w-33percent sm:w-full px-15"
                                        >
                                            <div
                                                class="iconbox iconbox-inline items-center iconbox-circle relative flex-row flex-wrap justify-start text-start mb-2em sm:justify-center"
                                                data-animate-icon="true"
                                                data-plugin-options='{"color": "rgb(0, 108, 227)"}'
                                            >
                                                <div
                                                    class="iconbox-icon-wrap flex items-center"
                                                >
                                                    <span
                                                        class="iconbox-icon-container relative flex items-center justify-center text-16 w-30 h-30 text-blue-300 bg-blue-100 rounded-full"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-checkmark absolute-center"
                                                        ></i>
                                                    </span>
                                                </div>
                                                <h3 class="mb-0 text-14">
                                                    Social Package Coverage
                                                </h3>
                                                <a
                                                    href="#"
                                                    class="liquid-overlay-link z-2"
                                                ></a>
                                            </div>
                                        </div>
                                        <div
                                            class="w-33percent sm:w-full px-15"
                                        >
                                            <div
                                                class="iconbox iconbox-inline items-center iconbox-circle relative flex-row flex-wrap justify-start text-start mb-2em sm:justify-center"
                                                data-animate-icon="true"
                                                data-plugin-options='{"color": "rgb(0, 108, 227)"}'
                                            >
                                                <div
                                                    class="iconbox-icon-wrap flex items-center"
                                                >
                                                    <span
                                                        class="iconbox-icon-container relative flex items-center justify-center text-16 w-30 h-30 text-blue-300 bg-blue-100 rounded-full"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-checkmark absolute-center"
                                                        ></i>
                                                    </span>
                                                </div>
                                                <h3 class="mb-0 text-14">
                                                    Top Tier Support
                                                </h3>
                                                <a
                                                    href="#"
                                                    class="liquid-overlay-link z-2"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-xl-10 offset-xl-1">
                                <div
                                    class="lqd-imggrp-container relative mb-2em transition-all"
                                    data-custom-animations="true"
                                    data-ca-options='{"triggerHandler": "inview", "animationTarget": ".lqd-imggrp-single", "duration": "1800", "startDelay": "1450", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 80, "scaleX" : 0.85, "scaleY" : 0.85, "opacity" : 0} , "animations": {"y" : 0, "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'
                                >
                                    <div
                                        class="lqd-imggrp-inner flex flex-wrap justify-center"
                                    >
                                        <div
                                            class="lqd-imggrp-single block absolute module-shape-1 -right-100 -left-100 -bottom-230"
                                        >
                                            <div
                                                class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center"
                                            >
                                                <figure>
                                                    <img
                                                        width="953"
                                                        height="659"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/BG-Lines.svg"
                                                        alt="shape"
                                                    />
                                                </figure>
                                            </div>
                                        </div>
                                        <div
                                            class="lqd-imggrp-single block relative transition-all"
                                            data-shadow-style="4"
                                            data-roundness="8"
                                            data-hover3d="true"
                                        >
                                            <div
                                                class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center"
                                                data-stacking-factor="1"
                                            >
                                                <figure>
                                                    <img
                                                        width="841"
                                                        height="513"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/img-1@2x.jpg"
                                                        alt="banner image"
                                                    />
                                                </figure>
                                            </div>
                                        </div>
                                        <div
                                            class="lqd-imggrp-single block absolute module-shape-2 top-10percent -left-5percent"
                                            data-roundness="8"
                                        >
                                            <div
                                                class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center"
                                                data-parallax="true"
                                                data-parallax-from='{"y" : -11, "rotationZ" : -1}'
                                                data-parallax-to='{"y" : 185, "rotationZ" : 15}'
                                                data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
                                            >
                                                <figure>
                                                    <img
                                                        width="38"
                                                        height="59"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/1@2x.png"
                                                        alt="banner image"
                                                    />
                                                </figure>
                                            </div>
                                        </div>
                                        <div
                                            class="lqd-imggrp-single block absolute module-shape-3 top-70percent -right-5percent"
                                            data-roundness="8"
                                        >
                                            <div
                                                class="lqd-imggrp-img-container max-w-full relative flex items-center justify-center"
                                                data-parallax="true"
                                                data-parallax-from='{"y" : 99, "rotationZ" : -1}'
                                                data-parallax-to='{"y" : -165, "rotationZ" : 15}'
                                                data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
                                            >
                                                <figure>
                                                    <img
                                                        width="59"
                                                        height="61"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/banner/2@2x.png"
                                                        alt="banner image"
                                                    />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Banner -->

                <!-- Start Section Navigation -->
                
                <!-- End Section Navigation -->

                <!-- Start Clients Marquee -->
                <section class="lqd-section clients clients-marquee pb-35">
                    <div class="container-fluid">
                        <div class="row justify-center">
                            <div class="col col-12 col-md-6 text-center">
                                <div class="ld-fancy-heading mb-25">
                                    <p
                                        class="ld-fh-element mb-0/5em text-14 text-green-700"
                                    >
                                        Fancy becoming an affiliate?
                                    </p>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div
                                    class="carousel-container lqd-marquee-carousel lqd-fade-sides -mr-15 -ml-15 transition-all"
                                >
                                    <div
                                        class="carousel-items"
                                        data-lqd-flickity='{"marquee": true, "wrapAround": true, "equalHeightCells": true, "middleAlignContent": true, "cellAlign": "center", "draggable": true}'
                                    >
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-tinder.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-spotify.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-facebook.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-instagram.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-tiktok.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-twitterx.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow mx-15 px-15"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <figure>
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-youtube.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Clients Marquee -->

                <!-- Start Features -->
                <section
                    class="lqd-section features pt-35 pb-45"
                    id="features"
                >
                    <div class="container">
                        <div class="row">
                            <div
                                class="col col-12 col-md-6 col-lg-3 text-center"
                            >
                                <div
                                    class="flex flex-col items-center justify-center mb-30"
                                >
                                    <div class="lqd-imggrp-single mb-30">
                                        <div
                                            class="lqd-imggrp-img-container relative inline-flex items-center justify-center"
                                        >
                                            <figure class="w-full">
                                                <img
                                                    width="167"
                                                    height="144"
                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-facebook-480.svg"
                                                    alt="features"
                                                />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <h3
                                            class="ld-fh-element mb-1/25em text-18"
                                        >
                                            Facebook
                                        </h3>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p class="ld-fh-element mb-0/5em">
                                            Maximize your reach and drive meaningful interactions with your audience on the world's largest social network.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col col-12 col-md-6 col-lg-3 text-center"
                            >
                                <div
                                    class="flex flex-col items-center justify-center mb-30"
                                >
                                    <div
                                        class="lqd-imggrp-single mb-30 mt-25 sm:mt-0"
                                    >
                                        <div
                                            class="lqd-imggrp-img-container relative inline-flex items-center justify-center"
                                        >
                                            <figure class="w-full">
                                                <img
                                                    width="193"
                                                    height="119"
                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-instagram-new.svg"
                                                    alt="features"
                                                />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <h3
                                            class="ld-fh-element mb-1/25em text-18"
                                        >
                                            Instagram
                                        </h3>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p class="ld-fh-element mb-0/5em">
                                            Leverage our services to grow your followers, boost engagement, and turn your Instagram profile into a powerful marketing asset.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col col-12 col-md-6 col-lg-3 text-center"
                            >
                                <div
                                    class="flex flex-col items-center justify-center mb-30"
                                >
                                    <div
                                        class="lqd-imggrp-single mb-30 mt-15 sm:mt-0"
                                        data-roundness="4"
                                    >
                                        <div
                                            class="lqd-imggrp-img-container relative inline-flex items-center justify-center"
                                        >
                                            <figure class="w-full">
                                                <img
                                                    width="156"
                                                    height="130"
                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-twitter.svg"
                                                    alt="features"
                                                />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <h3
                                            class="ld-fh-element mb-1/25em text-18"
                                        >
                                            X (Twitter)
                                        </h3>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p class="ld-fh-element mb-0/5em">
                                            Boost Twitter Presence: Gain likes, followers, and comments with our targeted social media growth service.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col col-12 col-md-6 col-lg-3 text-center"
                            >
                                <div
                                    class="flex flex-col items-center justify-center mb-30"
                                >
                                    <div
                                        class="lqd-imggrp-single mb-30 mt-25 sm:mt-0"
                                    >
                                        <div
                                            class="lqd-imggrp-img-container relative inline-flex items-center justify-center"
                                        >
                                            <figure class="w-full">
                                                <img
                                                    width="193"
                                                    height="119"
                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-youtube-new.svg"
                                                    alt="features"
                                                />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <h3
                                            class="ld-fh-element mb-1/25em text-18"
                                        >
                                            Youtube
                                        </h3>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p class="ld-fh-element mb-0/5em">
                                            Let us help you in building a strong YouTube presence that resonates with your target audience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Features -->

                <!-- Start Use Cases -->
                <section
                    class="lqd-section use-cases pt-75 pb-35 bg-slate-300"
                    id="usecases"
                >
                    <div class="container">
                        <div class="row justify-center">
                            <div class="col col-12 col-lg-8 text-center">
                                <div class="module-title mb-55">
                                    <div
                                        class="ld-fancy-heading module-title-11vw"
                                    >
                                        <h2
                                            class="ld-fh-element mb-0/5em text-42"
                                        >
                                            What we offer.
                                        </h2>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p
                                            class="ld-fh-element mb-0/5em px-10percent leading-1/5em text-18 text-gray-500 lg:px-0"
                                        >
                                            We offer a range of packages,
                                            and a huge list of services, for
                                            all social platforms, see a few
                                            below.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div
                                    class="lqd-tabs lqd-tabs-style-13 flex flex-row-reverse mb-30 md:flex-col"
                                    data-tabs-options='{"trigger": "click"}'
                                >
                                    <nav
                                        class="lqd-tabs-nav-wrap lqd-tabs-nav-has-btn"
                                    >
                                        <ul
                                            class="reset-ul lqd-tabs-nav flex flex-col"
                                            role="tablist"
                                        >
                                            @php $index=1; $categories = app('App\Models\Category')->where('status',1)->get(); @endphp
                                            @foreach($categories as $category)
                                            <li
                                                data-bs-controls="lqd-use-case-item-{{$index}}"
                                                role="presentation"
                                            >
                                                <a
                                                    class="flex flex-wrap items-center mb-1em text-black {{ $index === 1 ? 'active' : '' }}"
                                                    href="#lqd-use-case-item-1"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-use-case-item-1"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="lqd-tabs-nav-txt text-16 font-semibold"
                                                    >{{ $category->category_title }}</span
                                                    >
                                                    <span
                                                        class="lqd-tabs-nav-ext"
                                                    >{{ $category->category_description }}</span>
                                                </a>
                                            </li>
                                            @php $index++; @endphp
                                            @endforeach
                                            <li
                                                data-bs-controls="lqd-use-case-item-5"
                                                role="presentation"
                                                class=""
                                            >
                                                <a
                                                    class="flex flex-wrap items-center mb-1em text-black"
                                                    href="#lqd-use-case-item-5"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-use-case-item-5"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="lqd-tabs-nav-txt text-16 font-semibold"
                                                    >Many More</span
                                                    >
                                                    <span
                                                        class="lqd-tabs-nav-ext"
                                                    >Adjust responsive
                                                        spacing, change font
                                                        size, hide sections
                                                        on specific devices,
                                                        append custom column
                                                        width.</span
                                                    >
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="lqd-tabs-nav-btn-wrap">
                                            <a
                                                href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                                class="fresco btn btn-naked btn-icon-left btn-icon-custom-size btn-icon-circle btn-icon-solid text-16 font-semibold text-primary"
                                            >
                                                <span
                                                    class="btn-txt"
                                                    data-text="See How it Works"
                                                >See How it Works</span
                                                >
                                                <span
                                                    class="btn-icon text-10 mr-15 w-20 h-20 bg-primary text-white"
                                                >
                                                    <i
                                                        class="lqd-icn-ess icon-ion-ios-play"
                                                    ></i>
                                                </span>
                                            </a>
                                        </div>
                                    </nav>
                                    <div
                                        class="lqd-tabs-content pr-2/5rem md:p-0"
                                    >
                                        <div
                                            id="lqd-use-case-item-1"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade active show"
                                        >
                                            <div
                                                class="container-fluid p-0"
                                            >
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-xl-9 offset-xl-2"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col flex-grow-1"
                                                        >
                                                            <figure
                                                                class="inline-flex max-w-full justify-center flex-grow-1 rounded-4"
                                                            >
                                                                <img
                                                                    class="rounded-inherit sm:w-full"
                                                                    width="1192"
                                                                    height="842"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/use-case/img-6@2x-1.png"
                                                                    alt="use case"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-use-case-item-2"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade"
                                        >
                                            <div
                                                class="container-fluid p-0"
                                            >
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-xl-9 offset-xl-2"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col flex-grow-1"
                                                        >
                                                            <figure
                                                                class="inline-flex max-w-full justify-center flex-grow-1 rounded-4"
                                                            >
                                                                <img
                                                                    class="rounded-inherit sm:w-full"
                                                                    width="522"
                                                                    height="435"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/use-case/Group-32818@2x.png"
                                                                    alt="use case"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-use-case-item-3"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade"
                                        >
                                            <div
                                                class="container-fluid p-0"
                                            >
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-xl-9 offset-xl-2"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col flex-grow-1"
                                                        >
                                                            <figure
                                                                class="inline-flex max-w-full justify-center flex-grow-1 rounded-4"
                                                            >
                                                                <img
                                                                    class="rounded-inherit sm:w-full"
                                                                    width="1192"
                                                                    height="842"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/use-case/img-6@2x-1.png"
                                                                    alt="use case"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-use-case-item-4"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade"
                                        >
                                            <div
                                                class="container-fluid p-0"
                                            >
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-xl-9 offset-xl-2"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col flex-grow-1"
                                                        >
                                                            <figure
                                                                class="inline-flex max-w-full justify-center flex-grow-1 rounded-4"
                                                            >
                                                                <img
                                                                    class="rounded-inherit sm:w-full"
                                                                    width="522"
                                                                    height="435"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/use-case/Group-32818@2x.png"
                                                                    alt="use case"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-use-case-item-5"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade"
                                        >
                                            <div
                                                class="container-fluid p-0"
                                            >
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-xl-9 offset-xl-2"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col flex-grow-1"
                                                        >
                                                            <figure
                                                                class="inline-flex max-w-full justify-center flex-grow-1 rounded-4"
                                                            >
                                                                <img
                                                                    class="rounded-inherit sm:w-full"
                                                                    width="1192"
                                                                    height="842"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/use-case/img-6@2x-1.png"
                                                                    alt="use case"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div
                                    class="lqd-imggrp-single w-full flex flex-col relative flex-grow-1"
                                >
                                    <div
                                        class="lqd-imggrp-img-container absolute right-0 left-0 -top-110"
                                    >
                                        <figure>
                                            <img
                                                width="1256"
                                                height="287"
                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/use-case/Decorative-BG@2x-1024x234.png"
                                                alt="shape"
                                            />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Use Cases -->

                <!-- Start Solutions -->
                <section
                    class="lqd-section solutions pt-100 pb-45"
                    id="solutions"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col col-12">
                                <div
                                    class="lqd-tabs lqd-tabs-style-2 flex flex-col-reverse mb-30"
                                    data-tabs-options='{"trigger": "click"}'
                                >
                                    <nav class="lqd-tabs-nav-wrap">
                                        <ul
                                            class="reset-ul lqd-tabs-nav flex items-center flex-wrap"
                                            role="tablist"
                                        >
                                            <li
                                                data-bs-controls="lqd-solution-item-1"
                                                role="presentation"
                                                class="mt-2em py-0"
                                            >
                                                <a
                                                    class="text-16 font-semibold text-gray-500 active"
                                                    href="#lqd-solution-item-1"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-solution-item-1"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="iconbox iconbox-square flex-row items-center justify-start text-start"
                                                    >
                                                        <span
                                                            class="iconbox-icon-wrap mr-30"
                                                        >
                                                            <span
                                                                class="iconbox-icon-container w-85 h-85 text-30 bg-slate-100 rounded-30 text-slate-900"
                                                            >
                                                                <i
                                                                    class="lqd-icn-ess icon-lqd-envelope absolute-center"
                                                                ></i>
                                                            </span>
                                                        </span>
                                                        <span
                                                            class="flex flex-col pr-1/5rem md:pr-0"
                                                        >
                                                            <span
                                                                class="iconbox-title mt-0 mb-0 text-16 font-semibold -tracking-0/02em"
                                                            >A Little
                                                                About
                                                                RocketSocialBoost</span
                                                            >
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="lqd-tabs-nav-progress"
                                                    >
                                                        <span
                                                            class="lqd-tabs-nav-progress-inner"
                                                        ></span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li
                                                data-bs-controls="lqd-solution-item-2"
                                                role="presentation"
                                                class="mt-2em py-0"
                                            >
                                                <a
                                                    class="text-16 font-semibold text-gray-500"
                                                    href="#lqd-solution-item-2"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-solution-item-2"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="iconbox iconbox-square flex-row items-center justify-start text-start"
                                                    >
                                                        <span
                                                            class="iconbox-icon-wrap mr-30"
                                                        >
                                                            <span
                                                                class="iconbox-icon-container w-85 h-85 text-30 bg-slate-100 rounded-30 text-slate-900"
                                                            >
                                                                <i
                                                                    class="lqd-icn-ess icon-lqd-compass absolute-center"
                                                                ></i>
                                                            </span>
                                                        </span>
                                                        <span
                                                            class="flex flex-col pr-1/5rem md:pr-0"
                                                        >
                                                            <span
                                                                class="iconbox-title mt-0 mb-0 text-16 font-semibold -tracking-0/02em"
                                                            >We Cover
                                                                All Your
                                                                Social
                                                                Needs</span
                                                            >
                                                        </span> </span
                                                    ><span
                                                        class="lqd-tabs-nav-progress"
                                                    >
                                                        <span
                                                            class="lqd-tabs-nav-progress-inner"
                                                        ></span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li
                                                data-bs-controls="lqd-solution-item-3"
                                                role="presentation"
                                                class="mt-2em py-0"
                                            >
                                                <a
                                                    class="text-16 font-semibold text-gray-500"
                                                    href="#lqd-solution-item-3"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-solution-item-3"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="iconbox iconbox-square flex-row items-center justify-start text-start"
                                                    >
                                                        <span
                                                            class="iconbox-icon-wrap mr-30"
                                                        >
                                                            <span
                                                                class="iconbox-icon-container w-85 h-85 text-30 bg-slate-100 rounded-30 text-slate-900"
                                                            >
                                                                <i
                                                                    class="lqd-icn-ess icon-lqd-laptop absolute-center"
                                                                ></i>
                                                            </span>
                                                        </span>
                                                        <span
                                                            class="flex flex-col pr-1/5rem md:pr-0"
                                                        >
                                                            <span
                                                                class="iconbox-title mt-0 mb-0 text-16 font-semibold -tracking-0/02em"
                                                            >Join Us,
                                                                Start The
                                                                Process
                                                                Becoming an
                                                                Affiliate.</span
                                                            >
                                                        </span> </span
                                                    ><span
                                                        class="lqd-tabs-nav-progress"
                                                    >
                                                        <span
                                                            class="lqd-tabs-nav-progress-inner"
                                                        ></span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div
                                        class="lqd-tabs-content pb-35 -mr-15 -ml-15"
                                    >
                                        <div
                                            id="lqd-solution-item-1"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade active Show"
                                        >
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-lg-6 col-xl-5 self-center"
                                                    >
                                                        <div
                                                            class="module-content w-full relative flex flex-col justify-center flex-grow-1 pr-5percent lg:pr-0"
                                                        >
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <h6
                                                                    class="ld-fh-element mb-2em"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/lable/Group-32402.svg"
                                                                            alt="theme option"
                                                                            width="110"
                                                                            height="19"
                                                                        />
                                                                    </a>
                                                                    <span
                                                                    >About</span
                                                                    >
                                                                </h6>
                                                            </div>
                                                            <div
                                                                class="ld-fancy-heading module-title-10vw"
                                                            >
                                                                <h2
                                                                    class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
                                                                    data-inview="true"
                                                                    data-transition-delay="true"
                                                                    data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                                                >
                                                                    <span
                                                                    >A
                                                                        little
                                                                        about</span
                                                                    >
                                                                    <mark
                                                                        class="lqd-highlight"
                                                                    >
                                                                        <span
                                                                            class="lqd-highlight-txt"
                                                                        >RocketSocialBoost.</span
                                                                        >
                                                                        <span
                                                                            class="lqd-highlight-inner bg-blue-200 left-0"
                                                                        >
                                                                            <svg
                                                                                class="hidden"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="235.509"
                                                                                height="13.504"
                                                                                viewbox="0 0 235.509 13.504"
                                                                                aria-hidden="true"
                                                                                preserveaspectratio="none"
                                                                            >
                                                                                <path
                                                                                    d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
                                                                                    transform="translate(0 0.002)"
                                                                                ></path>
                                                                            </svg>
                                                                        </span>
                                                                    </mark>
                                                                    <span></span>
                                                                </h2>
                                                            </div>
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <p
                                                                    class="ld-fh-element mb-0/5em text-17 leading-1/5em"
                                                                >
                                                                    RocketSocialBoost
                                                                    differs
                                                                    from
                                                                    others,
                                                                    as we
                                                                    provide
                                                                    organic
                                                                    methods,
                                                                    e have a
                                                                    strong
                                                                    global
                                                                    network
                                                                    of many
                                                                    celebs,
                                                                    influencers
                                                                    and
                                                                    agencies.
                                                                    <br/><br/>This
                                                                    means,
                                                                    we can
                                                                    naturally
                                                                    help
                                                                    boost
                                                                    your
                                                                    page,
                                                                    and
                                                                    ensure
                                                                    you are
                                                                    satisfied
                                                                    from our
                                                                    services,
                                                                    by
                                                                    driving
                                                                    organic
                                                                    traffic
                                                                    to your
                                                                    page.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-12 col-lg-6 col-xl-7"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col justify-center flex-grow-1 pl-10percent md:pl-0"
                                                        >
                                                            <figure
                                                                class="inline-flex flex-grow-1 vertical-top"
                                                            >
                                                                <img
                                                                    width="1280"
                                                                    height="798"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/solution/Support@2x.png"
                                                                    alt="solution"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-solution-item-2"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade"
                                        >
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-lg-6 col-xl-5 self-center"
                                                    >
                                                        <div
                                                            class="module-content w-full relative flex flex-col justify-center flex-grow-1 pr-5percent lg:pr-0"
                                                        >
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <h6
                                                                    class="ld-fh-element mb-2em"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/lable/Group-32402.svg"
                                                                            alt="theme option"
                                                                            width="110"
                                                                            height="19"
                                                                        />
                                                                    </a>
                                                                    <span>
                                                                        Your
                                                                        Needs</span
                                                                    >
                                                                </h6>
                                                            </div>
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <h2
                                                                    class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
                                                                    data-inview="true"
                                                                    data-transition-delay="true"
                                                                    data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                                                >
                                                                    <span
                                                                    >We
                                                                        Cover
                                                                        All
                                                                        Your</span
                                                                    >
                                                                    <mark
                                                                        class="lqd-highlight"
                                                                    >
                                                                        <span
                                                                            class="lqd-highlight-txt"
                                                                        >Social
                                                                            Needs.</span
                                                                        >
                                                                        <span
                                                                            class="lqd-highlight-inner bg-blue-200 left-0"
                                                                        >
                                                                            <svg
                                                                                class="hidden"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="235.509"
                                                                                height="13.504"
                                                                                viewbox="0 0 235.509 13.504"
                                                                                aria-hidden="true"
                                                                                preserveaspectratio="none"
                                                                            >
                                                                                <path
                                                                                    d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
                                                                                    transform="translate(0 0.002)"
                                                                                ></path>
                                                                            </svg>
                                                                        </span>
                                                                    </mark>
                                                                </h2>
                                                            </div>
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <p
                                                                    class="ld-fh-element mb-0/5em text-17 leading-1/5em"
                                                                >
                                                                    Elevate
                                                                    your
                                                                    social
                                                                    presence
                                                                    with
                                                                    RocketSocialBoost,
                                                                    we
                                                                    provide
                                                                    many
                                                                    services
                                                                    and
                                                                    packages,
                                                                    to
                                                                    either
                                                                    get you
                                                                    started,
                                                                    or fully
                                                                    elevate
                                                                    your
                                                                    pages!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-12 col-lg-6 col-xl-7"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col justify-center flex-grow-1 pl-10percent md:pl-0"
                                                        >
                                                            <figure
                                                                class="inline-flex flex-grow-1 vertical-top"
                                                            >
                                                                <img
                                                                    width="522"
                                                                    height="435"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/solution/Group-32818@2x.png"
                                                                    alt="solution"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-solution-item-3"
                                            role="tabpanel"
                                            class="lqd-tabs-pane fade"
                                        >
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-lg-6 col-xl-5 self-center"
                                                    >
                                                        <div
                                                            class="module-content w-full relative flex flex-col justify-center flex-grow-1 pr-5percent lg:pr-0"
                                                        >
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <h6
                                                                    class="ld-fh-element mb-2em"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/lable/Group-32402.svg"
                                                                            alt="theme option"
                                                                            width="110"
                                                                            height="19"
                                                                        />
                                                                    </a>
                                                                    <span
                                                                    >Join
                                                                        Us</span
                                                                    >
                                                                </h6>
                                                            </div>
                                                            <div
                                                                class="ld-fancy-heading module-title-10vw"
                                                            >
                                                                <h2
                                                                    class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
                                                                    data-inview="true"
                                                                    data-transition-delay="true"
                                                                    data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                                                >
                                                                    <mark
                                                                        class="lqd-highlight"
                                                                    >
                                                                        <span
                                                                            class="lqd-highlight-txt"
                                                                        >The
                                                                            Process
                                                                        </span>
                                                                        <span
                                                                            class="lqd-highlight-inner bg-blue-200 left-0"
                                                                        >
                                                                            <svg
                                                                                class="hidden"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="235.509"
                                                                                height="13.504"
                                                                                viewbox="0 0 235.509 13.504"
                                                                                aria-hidden="true"
                                                                                preserveaspectratio="none"
                                                                            >
                                                                                <path
                                                                                    d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
                                                                                    transform="translate(0 0.002)"
                                                                                ></path>
                                                                            </svg>
                                                                        </span>
                                                                    </mark>
                                                                    <span
                                                                    >Becoming
                                                                        an
                                                                        Affiliate</span
                                                                    >
                                                                </h2>
                                                            </div>
                                                            <div
                                                                class="ld-fancy-heading"
                                                            >
                                                                <p
                                                                    class="ld-fh-element mb-0/5em text-17 leading-1/5em"
                                                                >
                                                                    Join the
                                                                    team and
                                                                    become
                                                                    an
                                                                    Affiliate,
                                                                    here you
                                                                    can earn
                                                                    money
                                                                    with us,
                                                                    by
                                                                    helping
                                                                    anyone
                                                                    you may
                                                                    know
                                                                    benefit
                                                                    from out
                                                                    service.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-12 col-lg-6 col-xl-7"
                                                    >
                                                        <div
                                                            class="w-full relative flex flex-col justify-center flex-grow-1 pl-10percent md:pl-0"
                                                        >
                                                            <figure
                                                                class="inline-flex flex-grow-1 vertical-top"
                                                            >
                                                                <img
                                                                    width="1192"
                                                                    height="842"
                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/solution/img-6@2x-1.png"
                                                                    alt="solution"
                                                                />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Solutions -->

                <!-- Start Text Box -->
                <section class="lqd-section text-box py-20" id="overview">
                    <div class="container">
                        <div class="row justify-center">
                            <div
                                class="col col-12 col-lg-7 text-center mb-35"
                            >
                                <div class="ld-fancy-heading">
                                    <h2
                                        class="ld-fh-element mb-0/5em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-42"
                                        data-inview="true"
                                        data-transition-delay="true"
                                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                    >
                                        <span>Real & Organic</span>
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt"
                                            >Products.</span
                                            >
                                            <span
                                                class="lqd-highlight-inner bg-blue-200 left-0"
                                            >
                                                <svg
                                                    class="hidden"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="235.509"
                                                    height="13.504"
                                                    viewbox="0 0 235.509 13.504"
                                                    aria-hidden="true"
                                                    preserveaspectratio="none"
                                                >
                                                    <path
                                                        d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
                                                        transform="translate(0 0.002)"
                                                    ></path>
                                                </svg>
                                            </span>
                                        </mark>
                                    </h2>
                                </div>
                                <div
                                    class="ld-fancy-heading px-10percent lg:px-0"
                                >
                                    <p
                                        class="ld-fh-element mb-0/5em leading-1/5em text-18 text-gray-500"
                                    >
                                        Our services are real and organic,
                                        providing you a product, which will
                                        help you grow your platform.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Text Box -->

                <!-- Start Overview -->
                <section class="lqd-section overview">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col col-12">
                                <div
                                    class="carousel-container carousel-nav-left carousel-nav-mobile-centercarousel-nav-md carousel-dots-mobile-center carousel-dots-style1 carousel-dots-mobile-outside"
                                >
                                    <div
                                        class="carousel-items"
                                        data-lqd-flickity='{"cellAlign": "center", "prevNextButtons": false, "pageDots": false, "groupCells": true, "wrapAround": true, "pauseAutoPlayOnHover": false, "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "dotsIndicator": "dots", "numbersStyle": "circle", "dotsAppendTo": "self"}'
                                    >
                                        <div
                                            class="carousel-item has-width flex flex-col items-stretch justify-center transition-shadow"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="flex items-center flex-grow-1"
                                                    >
                                                        <figure
                                                            class="inline-flex max-w-full relative flex-grow-1 vertical-top justify-center"
                                                        >
                                                            <img
                                                                width="1866"
                                                                height="1226"
                                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/overview/ss-1@2x.png"
                                                                alt="overview"
                                                            />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width flex flex-col items-stretch justify-center transition-shadow"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="flex items-center flex-grow-1"
                                                    >
                                                        <figure
                                                            class="inline-flex max-w-full relative flex-grow-1 vertical-top justify-center"
                                                        >
                                                            <img
                                                                width="1866"
                                                                height="1226"
                                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/overview/ss-1@2x.png"
                                                                alt="overview"
                                                            />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width flex flex-col items-stretch justify-center transition-shadow"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="flex items-center flex-grow-1"
                                                    >
                                                        <figure
                                                            class="inline-flex max-w-full relative flex-grow-1 vertical-top justify-center"
                                                        >
                                                            <img
                                                                width="1866"
                                                                height="1226"
                                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/overview/ss-1@2x.png"
                                                                alt="overview"
                                                            />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width flex flex-col items-stretch justify-center transition-shadow"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="flex items-center flex-grow-1"
                                                    >
                                                        <figure
                                                            class="inline-flex max-w-full relative flex-grow-1 vertical-top justify-center"
                                                        >
                                                            <img
                                                                width="1866"
                                                                height="1226"
                                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/overview/ss-1@2x.png"
                                                                alt="overview"
                                                            />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Overview -->

                <!-- Start Text Image Box -->
                <section class="lqd-section text-image-box pt-120 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 col-lg-5 self-center">
                                <div
                                    class="module-content w-full relative flex flex-col flex-grow-1 justify-center"
                                >
                                    <div class="ld-fancy-heading">
                                        <h6 class="ld-fh-element mb-2em">
                                            <a href="#">
                                                <img
                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/lable/Group-32402.svg"
                                                    alt="theme option"
                                                    width="110"
                                                    height="19"
                                                />
                                            </a>
                                            <span>Next Generation</span>
                                        </h6>
                                    </div>
                                    <div
                                        class="ld-fancy-heading module-title-11vw"
                                    >
                                        <h2
                                            class="ld-fh-element mb-0/35em lqd-highlight-underline lqd-highlight-grow-left lqd-highlight-reset-onhover text-decoration-default text-50"
                                            data-inview="true"
                                            data-transition-delay="true"
                                            data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                        >
                                            <span>Behind the scenes.</span>
                                            <mark class="lqd-highlight">
                                                <span
                                                    class="lqd-highlight-txt"
                                                >The Process.</span
                                                >
                                                <span
                                                    class="lqd-highlight-inner bg-blue-200 left-0"
                                                >
                                                    <svg
                                                        class="hidden"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="235.509"
                                                        height="13.504"
                                                        viewbox="0 0 235.509 13.504"
                                                        aria-hidden="true"
                                                        preserveaspectratio="none"
                                                    >
                                                        <path
                                                            d="M163,.383a13.044,13.044,0,0,1,1.517-.072,3.528,3.528,0,0,1,1.237-.134q.618.044,1.237.044a.249.249,0,0,1-.1.178.337.337,0,0,0-.1.266q3.092.088,6.184-.044T178.953.4l-.206-.088a12,12,0,0,0,4.123,0,13.467,13.467,0,0,1,5.772,0q1.443-.178,2.68-.266A5.978,5.978,0,0,1,193.8.4,16.707,16.707,0,0,1,198.01.045q2.164.088,4.844.088-.618.088-.824.134L201.412.4a3.893,3.893,0,0,0,2.061,0,5.413,5.413,0,0,1,1.649-.356q.618.088,1.134.178a9.762,9.762,0,0,0,1.544.09,17,17,0,0,1,3.092-.266q1.649,0,3.5.178,2.886.088,5.875.044t5.875-.222q0,.088.206.088h.412a21.975,21.975,0,0,0,2.577.889A12.458,12.458,0,0,1,232.12,2.18a3.962,3.962,0,0,1,1.031.622A3.349,3.349,0,0,1,234.8,3.825a5.079,5.079,0,0,1,.618,1.111q.412.534-1.031.98-1.031.444-.618.98a2.09,2.09,0,0,1,.206.889q0,.444.825.889.618.8-.206,1.245l-1.237.534q-1.443-.088-2.68-.134a17.255,17.255,0,0,1-2.267-.222,3.128,3.128,0,0,0-.928-.044,3.129,3.129,0,0,1-.928-.044q-2.267-.178-4.432-.266T217.7,9.476q-1.649-.088-2.886-.088a17.343,17.343,0,0,1-2.474-.178q-3.916,0-7.73-.088t-7.73-.266l-12.471-.178q-6.287-.088-12.883-.088h-1.958q-.928,0-1.958.088h-2.061q-1.031,0-2.061-.088-2.68-.088-5.256-.134t-5.256.044h-5.462q-2.577,0-5.462.088-4.535.088-8.76.178t-8.554.088q-2.886.088-5.875.088t-5.875.088q-1.443.088-2.886.134t-3.092.044q-4.741.178-9.791.312t-9.791.312q-2.267.088-4.329.088T78.77,10.1q-4.329.266-8.863.49t-9.276.49q-1.237.088-2.68.134a24.356,24.356,0,0,0-2.683.224q-2.68.178-5.462.312t-5.668.4q-2.474.266-4.741.312t-4.741.044q-1.031-.088-1.958-.134a9.684,9.684,0,0,1-1.958-.312,12.5,12.5,0,0,0-1.443-.312q-.825-.134-1.856-.31-2.886.356-6.39.666t-6.8.845a26.709,26.709,0,0,1-2.886.356,20.758,20.758,0,0,1-9.482-.889Q.232,11.962.026,11.25T1.263,9.917q0-.266.825-.266a13.039,13.039,0,0,0,2.886-.444A17.187,17.187,0,0,1,7.86,8.672q3.092-.266,6.184-.8,1.649-.178,3.3-.312t3.5-.312q4.123-.354,8.039-.712t8.039-.622q9.478-.8,18.758-1.338,2.68-.178,5.153-.356t4.741-.356q2.474-.178,5.05-.356T75.88,3.24h1.34a4.829,4.829,0,0,0,1.34-.178q2.267-.178,4.329-.222t4.329-.134a7.256,7.256,0,0,1,2.267,0,3.459,3.459,0,0,0,1.031-.088,6.009,6.009,0,0,1,2.37-.266,14.745,14.745,0,0,0,2.783-.088q1.649,0,2.474.088a1.308,1.308,0,0,1,.185.011,1.226,1.226,0,0,1,.33-.1,3.656,3.656,0,0,0,.515-.088,4.433,4.433,0,0,1,2.886.266q.412-.088,1.031-.178l1.237-.178q.412,0,1.031.044a5.761,5.761,0,0,0,1.237-.044q2.886-.088,5.772-.044a53.829,53.829,0,0,0,5.772-.222,9.505,9.505,0,0,1,1.34-.088h1.34a4.428,4.428,0,0,1,.821-.258l.825-.178a15.178,15.178,0,0,1,1.855.444,3.028,3.028,0,0,1,1.031-.534,4.039,4.039,0,0,1,1.443-.178,6.158,6.158,0,0,1,1.649.178,5.05,5.05,0,0,0,2.267.268q1.855-.088,3.813-.134T138.13,1.2q1.031,0,2.164-.044t2.37-.044q-.206-.088.412-.534h3.092q.412,0,.309.266t.928,0a5.845,5.845,0,0,1,1.443,0,31.833,31.833,0,0,0,5.359.088,21.471,21.471,0,0,1,6.8.178,5.236,5.236,0,0,0,1.031-.4q.412-.222.825-.4a.694.694,0,0,1,.137.07Z"
                                                            transform="translate(0 0.002)"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </mark>
                                        </h2>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p
                                            class="ld-fh-element mb-0/5em text-17 leading-1/5em"
                                        >
                                            Follow the step by step process
                                            below to get started with your
                                            order, and rocket your way to
                                            success by boosting your Social
                                            pages organically.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col col-12 col-lg-7 flex items-stretch"
                            >
                                <div
                                    class="w-full relative flex flex-col flex-grow-1 pl-5percent justify-center transition-all lg:pl-0"
                                >
                                    <div
                                        class="lqd-imggrp-single relative transition-all"
                                        data-hover3d="true"
                                    >
                                        <div
                                            class="lqd-imggrp-img-container max-w-full flex relative items-center justify-center"
                                            data-stacking-factor="1"
                                        >
                                            <figure class="w-full">
                                                <img
                                                    width="1256"
                                                    height="719"
                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/text-image-box/img-10@2x.jpg"
                                                    alt="text box image"
                                                />
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Text Image Box -->

                <!-- Start Icon Box -->
                <section
                    class="lqd-section icon-box py-50 mb-35 md:mb-0"
                    data-custom-animations="true"
                    data-ca-options='{"triggerHandler": "inview", "animationTarget": ".iconbox", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"x" : 35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"x" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
                >
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 col-lg-4">
                                <div
                                    class="iconbox text-align-default iconbox-circle iconbox-xs flex-row items-stretch justify-start text-start mb-2em"
                                    data-animate-icon="true"
                                    data-plugin-options='{"color": "rgb(0, 0, 0)", "hoverColor": "rgb(255, 255, 255)"}'
                                    data-shape-border="1"
                                >
                                    <div class="iconbox-icon-wrap mr-30">
                                        <span
                                            class="iconbox-icon-container w-45 h-45 relative text-16 text-black bg-white border-1 border-black-10 rounded-full"
                                        >
                                            <span
                                                class="iconbox-icon-hover-bg w-full h-full absolute inline-block top-0 left-0 transition-opacity opacity-0 bg-primary rounded-inherit"
                                            ></span>
                                            <i
                                                class="lqd-icn-ess icon-num-1 absolute-center"
                                            ></i>
                                        </span>
                                    </div>
                                    <div class="contents">
                                        <h3
                                            class="font-bold text-14 leading-1/5em"
                                        >
                                            CREATE AN ORDER
                                        </h3>
                                        <p>
                                            Make an order, this may be a
                                            package deal, or a single
                                            service. Create, edit, and
                                            customize your order to your
                                            liking.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-lg-4">
                                <div
                                    class="iconbox text-align-default iconbox-circle iconbox-xs flex-row items-stretch justify-start text-start mb-2em"
                                    data-animate-icon="true"
                                    data-plugin-options='{"color": "rgb(26, 26, 26)", "hoverColor": "rgb(255, 255, 255)"}'
                                    data-shape-border="1"
                                >
                                    <div class="iconbox-icon-wrap mr-30">
                                        <span
                                            class="iconbox-icon-container w-45 h-45 relative text-16 text-black bg-white border-1 border-black-10 rounded-full"
                                        >
                                            <span
                                                class="iconbox-icon-hover-bg w-full h-full absolute inline-block top-0 left-0 transition-opacity opacity-0 bg-primary rounded-inherit"
                                            ></span>
                                            <i
                                                class="lqd-icn-ess icon-num-2 absolute-center"
                                            ></i>
                                        </span>
                                    </div>
                                    <div class="contents">
                                        <h3
                                            class="font-bold text-14 leading-1/5em"
                                        >
                                            ORDER PROCESSING
                                        </h3>
                                        <p>
                                            We instantly process your order,
                                            based on your choice.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-lg-4">
                                <div
                                    class="iconbox text-align-default iconbox-circle iconbox-xs flex-row items-stretch justify-start text-start mb-2em"
                                    data-animate-icon="true"
                                    data-plugin-options='{"color": "rgb(22, 22, 22)", "hoverColor": "rgb(255, 255, 255)"}'
                                    data-shape-border="1"
                                >
                                    <div class="iconbox-icon-wrap mr-30">
                                        <span
                                            class="iconbox-icon-container w-45 h-45 relative text-16 text-black bg-white border-1 border-black-10 rounded-full"
                                        >
                                            <span
                                                class="iconbox-icon-hover-bg w-full h-full absolute inline-block top-0 left-0 transition-opacity opacity-0 bg-primary rounded-inherit"
                                            ></span>
                                            <i
                                                class="lqd-icn-ess icon-num-3 absolute-center"
                                            ></i>
                                        </span>
                                    </div>
                                    <div class="contents">
                                        <h3
                                            class="font-bold text-14 leading-1/5em"
                                        >
                                            RESULTS!!!
                                        </h3>
                                        <p>
                                            Watch the results come in, and
                                            your platform grow to new
                                            levels!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Icon Box -->

                <!-- Start Testimonials -->
                <section
                    class="lqd-section testimonials pt-120 pb-120 bg-slate-500"
                    id="testimonials"
                >
                    <div
                        class="lqd-imggrp-container absolute bottom-5 pointer-events-none"
                        data-move-element='{ "target":  ".container", "type":  "insertBefore" }'
                        data-parallax="true"
                        data-parallax-from='{"x" : 63}'
                        data-parallax-to='{"x" : 0}'
                        data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
                    >
                        <div class="lqd-imggrp-inner flex flex-wrap">
                            <div
                                class="lqd-imggrp-single"
                                data-float="ease-in"
                            >
                                <div
                                    class="lqd-imggrp-img-container max-w-full relative inline-flex items-center justify-center"
                                >
                                    <figure class="w-full">
                                        <img
                                            width="111"
                                            height="182"
                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/testimonials/Mask-Group-1@2x.png"
                                            alt="Image"
                                        />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row items-center">
                            <div class="col col-12 col-lg-6">
                                <div class="ld-fancy-heading">
                                    <h6 class="ld-fh-element mb-2em">
                                        <a href="#">
                                            <img
                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/lable/Group-32402.svg"
                                                alt="theme option"
                                                width="110"
                                                height="19"
                                            />
                                        </a>
                                        <span>Trusted</span>
                                    </h6>
                                </div>
                                <div
                                    class="ld-fancy-heading module-title-10vw"
                                >
                                    <h2
                                        class="ld-fh-element mb-0/35em text-50"
                                    >
                                        Trusted by influencers & agencies.
                                    </h2>
                                </div>
                                <div class="ld-fancy-heading">
                                    <p
                                        class="ld-fh-element mb-0/5em text-17 leading-1/5em mr-10percent"
                                    >
                                        We are trusted by our clients,
                                        providing organic services to help
                                        your social media's growth.
                                    </p>
                                </div>
                                <div class="flex flex-wrap -mr-15 -ml-15">
                                    <div
                                        class="w-50percent flex flex-col justify-start items-start flex-auto px-15 sm:w-full"
                                    >
                                        <div
                                            class="lqd-counter lqd-counter-default text-blue-900 mb-0/5rem"
                                        >
                                            <div
                                                class="lqd-counter-element relative mb-0 text-44 font-bold"
                                                data-enable-counter="true"
                                                data-counter-options='{"targetNumber": "478k+"}'
                                            >
                                                <span>478k+</span>
                                            </div>
                                        </div>
                                        <div class="ld-fancy-heading">
                                            <p
                                                class="ld-fh-element mb-0/5em text-14 text-blue-700"
                                            >
                                                Services Delivered
                                            </p>
                                        </div>
                                        <div class="flex mb-0">
                                            <figure
                                                class="max-w-full inline-flex flex-col flex-grow-1"
                                            >
                                                <div
                                                    class="max-w-full inline-flex flex-col vertical-top mb-10"
                                                >
                                                    <img
                                                        width="94"
                                                        height="14"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/testimonials/stars.svg"
                                                        alt="stars"
                                                    />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div
                                        class="w-50percent flex flex-col justify-start items-start flex-auto px-15 sm:w-full"
                                    >
                                        <div
                                            class="lqd-counter lqd-counter-default text-blue-900 mb-0/5rem"
                                        >
                                            <div
                                                class="lqd-counter-element relative mb-0 text-44 font-bold"
                                                data-enable-counter="true"
                                                data-counter-options='{"targetNumber": "4.78"}'
                                            >
                                                <span>4.78</span>
                                            </div>
                                        </div>
                                        <div class="flex mb-0">
                                            <figure
                                                class="max-w-full inline-flex flex-col flex-grow-1"
                                            >
                                                <div
                                                    class="max-w-full inline-flex flex-col vertical-top mb-10"
                                                >
                                                    <img
                                                        width="94"
                                                        height="14"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/testimonials/stars.svg"
                                                        alt="stars"
                                                    />
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="ld-fancy-heading">
                                            <p
                                                class="ld-fh-element mb-0/5em text-14 text-blue-700"
                                            >
                                                Customer Review
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-lg-6">
                                <div
                                    class="carousel-container carousel-nav-left carousel-nav-mobile-centercarousel-nav-md carousel-dots-left carousel-dots-mobile-center carousel-dots-style1 carousel-dots-mobile-outside lqd-carousel-fade"
                                >
                                    <div
                                        class="carousel-items"
                                        data-lqd-flickity='{"cellAlign": "left", "prevNextButtons": false, "pageDots": true, "groupCells": true, "wrapAround": true, "fade": true, "pauseAutoPlayOnHover": false, "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "dotsIndicator": "numbers", "numbersStyle": "line", "dotsAppendTo": "self"}'
                                    >
                                        <div
                                            class="carousel-item has-width"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="container-fluid p-0"
                                                    >
                                                        <div class="row">
                                                            <div
                                                                class="col col-12"
                                                            >
                                                                <div
                                                                    class="lqd-testi flex flex-wrap lqd-testi-details-sm lqd-testi-avatar-72 mb-30"
                                                                >
                                                                    <div
                                                                        class="lqd-testi-quote mb-1/5em"
                                                                    >
                                                                        <blockquote
                                                                            class="text-24"
                                                                        >
                                                                            <p>
                                                                                <span
                                                                                    class="text-20 leading-30"
                                                                                >This
                                                                                    is
                                                                                    a
                                                                                    random
                                                                                    testimonial,
                                                                                    you
                                                                                    can
                                                                                    place
                                                                                    anything
                                                                                    you
                                                                                    like
                                                                                    in
                                                                                    this
                                                                                    test
                                                                                    box,
                                                                                    just
                                                                                    make
                                                                                    sure
                                                                                    it
                                                                                    looks
                                                                                    organic,
                                                                                    and
                                                                                    helps
                                                                                    the
                                                                                    customers
                                                                                    feel
                                                                                    safe
                                                                                    and
                                                                                    that
                                                                                    RSB
                                                                                    is
                                                                                    a
                                                                                    trusted
                                                                                    service.</span
                                                                                >
                                                                            </p>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div
                                                                        class="lqd-testi-info w-full"
                                                                    >
                                                                        <div
                                                                            class="lqd-testi-details flex flex-row items-center justify-start"
                                                                        >
                                                                            <figure
                                                                                class="lqd-testi-avatar mr-25"
                                                                            >
                                                                                <img
                                                                                    class="rounded-full"
                                                                                    width="136"
                                                                                    height="136"
                                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/testimonials/Image@2x.jpg"
                                                                                    alt="avatar"
                                                                                />
                                                                            </figure>
                                                                            <div
                                                                                class="lqd-testi-np"
                                                                            >
                                                                                <h3
                                                                                    class="font-medium"
                                                                                >
                                                                                    Sache
                                                                                    Bellagucci
                                                                                </h3>
                                                                                <h4
                                                                                    class="font-weight-light"
                                                                                >
                                                                                    AgencyX
                                                                                    CEO
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="container-fluid p-0"
                                                    >
                                                        <div class="row">
                                                            <div
                                                                class="col col-12"
                                                            >
                                                                <div
                                                                    class="lqd-testi flex flex-wrap lqd-testi-details-sm lqd-testi-avatar-72 mb-30"
                                                                >
                                                                    <div
                                                                        class="lqd-testi-quote mb-1/5em"
                                                                    >
                                                                        <blockquote
                                                                            class="text-24"
                                                                        >
                                                                            <p>
                                                                                <span
                                                                                    class="text-20 leading-30"
                                                                                >This
                                                                                    is
                                                                                    a
                                                                                    random
                                                                                    testimonial,
                                                                                    you
                                                                                    can
                                                                                    place
                                                                                    anything
                                                                                    you
                                                                                    like
                                                                                    in
                                                                                    this
                                                                                    test
                                                                                    box,
                                                                                    just
                                                                                    make
                                                                                    sure
                                                                                    it
                                                                                    looks
                                                                                    organic,
                                                                                    and
                                                                                    helps
                                                                                    the
                                                                                    customers
                                                                                    feel
                                                                                    safe
                                                                                    and
                                                                                    that
                                                                                    RSB
                                                                                    is
                                                                                    a
                                                                                    trusted
                                                                                    service.</span
                                                                                >
                                                                            </p>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div
                                                                        class="lqd-testi-info w-full"
                                                                    >
                                                                        <div
                                                                            class="lqd-testi-details flex flex-row items-center justify-start"
                                                                        >
                                                                            <figure
                                                                                class="lqd-testi-avatar mr-25"
                                                                            >
                                                                                <img
                                                                                    class="rounded-full"
                                                                                    width="136"
                                                                                    height="136"
                                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/testimonials/karpz.jpg"
                                                                                    alt="avatar"
                                                                                />
                                                                            </figure>
                                                                            <div
                                                                                class="lqd-testi-np"
                                                                            >
                                                                                <h3
                                                                                    class="font-medium"
                                                                                >
                                                                                    Karpz
                                                                                </h3>
                                                                                <h4
                                                                                    class="font-weight-light"
                                                                                >
                                                                                    Designer
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width"
                                        >
                                            <div
                                                class="carousel-item-inner"
                                            >
                                                <div
                                                    class="carousel-item-content"
                                                >
                                                    <div
                                                        class="container-fluid p-0"
                                                    >
                                                        <div class="row">
                                                            <div
                                                                class="col col-12"
                                                            >
                                                                <div
                                                                    class="lqd-testi flex flex-wrap lqd-testi-details-sm lqd-testi-avatar-72 mb-30"
                                                                >
                                                                    <div
                                                                        class="lqd-testi-quote mb-1/5em"
                                                                    >
                                                                        <blockquote
                                                                            class="text-24"
                                                                        >
                                                                            <p>
                                                                                <span
                                                                                    class="text-20 leading-30"
                                                                                >This
                                                                                    is
                                                                                    a
                                                                                    random
                                                                                    testimonial,
                                                                                    you
                                                                                    can
                                                                                    place
                                                                                    anything
                                                                                    you
                                                                                    like
                                                                                    in
                                                                                    this
                                                                                    test
                                                                                    box,
                                                                                    just
                                                                                    make
                                                                                    sure
                                                                                    it
                                                                                    looks
                                                                                    organic,
                                                                                    and
                                                                                    helps
                                                                                    the
                                                                                    customers
                                                                                    feel
                                                                                    safe
                                                                                    and
                                                                                    that
                                                                                    RSB
                                                                                    is
                                                                                    a
                                                                                    trusted
                                                                                    service.</span
                                                                                >
                                                                            </p>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div
                                                                        class="lqd-testi-info w-full"
                                                                    >
                                                                        <div
                                                                            class="lqd-testi-details flex flex-row items-center justify-start"
                                                                        >
                                                                            <figure
                                                                                class="lqd-testi-avatar mr-25"
                                                                            >
                                                                                <img
                                                                                    class="rounded-full"
                                                                                    width="136"
                                                                                    height="136"
                                                                                    src="{{asset('assets/frontend/v2')}}/images/demo/saas/testimonials/tanin.png"
                                                                                    alt="avatar"
                                                                                />
                                                                            </figure>
                                                                            <div
                                                                                class="lqd-testi-np"
                                                                            >
                                                                                <h3
                                                                                    class="font-medium"
                                                                                >
                                                                                    Tanin
                                                                                </h3>
                                                                                <h4
                                                                                    class="font-weight-light"
                                                                                >
                                                                                    Project
                                                                                    Lead
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Testimonials -->

                <!-- Start Pricing -->
                <section
                    class="lqd-section pricing pt-100 pb-50"
                    id="pricing"
                >
                    <div class="container">
                        <div class="row justify-center">
                            <div class="col col-12 col-lg-6 text-center">
                                <div
                                    class="w-full relative flex flex-col px-15 mb-30"
                                    data-custom-animations="true"
                                    data-ca-options='{"triggerHandler": "inview", "animationTarget": "all-childs", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 30, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
                                >
                                    <div
                                        class="ld-fancy-heading module-title-11vw"
                                    >
                                        <h2
                                            class="ld-fh-element mb-0/5em text-50"
                                        >
                                            A Package for Everyone.
                                        </h2>
                                    </div>
                                    <div class="ld-fancy-heading">
                                        <p
                                            class="ld-fh-element mb-0/5em px-5percent leading-30 text-18 lg:px-0"
                                        >
                                            View our range of packages, and
                                            choose your social platform to
                                            get started.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 relative">
                                <div
                                    class="lqd-imggrp-single z-2 absolute top-0 -left-35"
                                    data-float="ease"
                                >
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center"
                                    >
                                        <figure>
                                            <img
                                                width="128"
                                                height="168"
                                                src="{{asset('assets/frontend/v2')}}/images/demo/saas/pricing/img-22@2x.png"
                                                alt="shape"
                                            />
                                        </figure>
                                    </div>
                                </div>
                                <div
                                    class="lqd-tabs lqd-tabs-style-10 mb-30"
                                    data-tabs-options='{"trigger": "click"}'
                                >
                                    <nav
                                        class="lqd-tabs-nav-wrap mb-2/75em"
                                    >
                                        <ul
                                            class="reset-ul lqd-tabs-nav flex flex-wrap justify-center items-center"
                                            role="tablist"
                                        >
                                            <li
                                                data-bs-controls="lqd-pricing-monthly"
                                                role="presentation"
                                                class="font-medium"
                                            >
                                                <a
                                                    class="flex items-center text-gray-500 font-medium justify-center text-15 active"
                                                    href="#lqd-pricing-monthly"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-pricing-monthly"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="lqd-tabs-nav-txt"
                                                    >Monthly</span
                                                    >
                                                </a>
                                            </li>
                                            <li
                                                data-bs-controls="lqd-pricing-annually"
                                                role="presentation"
                                                class="font-medium"
                                            >
                                                <a
                                                    class="flex items-center text-gray-500 font-medium justify-center text-15"
                                                    href="#lqd-pricing-annually"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-pricing-annually"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                >
                                                    <span
                                                        class="lqd-tabs-nav-txt"
                                                    >Annually Save
                                                        30%</span
                                                    >
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="lqd-tabs-content">
                                        <div
                                            id="lqd-pricing-monthly"
                                            role="tabpanel"
                                            class="lqd-tabs-pane lqd-pricing-monthly fade active show"
                                        >
                                            <div class="container-fluid">
                                                <div class="row">
                                                    @php
                                                        $packages = app('App\Models\Package')->where('status',true)->get()->take(2);
                                                    @endphp
                                                    <div
                                                        class="col col-12 col-md-6 p-0"
                                                    >
                                                        <div
                                                            class="lqd-pt lqd-pt lqd-pt-style-3 lqd-pt-style-3b lqd-pt-title-18 lqd-pt-price-50 relative transition-all border-1 border-black-20"
                                                        >
                                                            <div
                                                                class="lqd-pt-inner"
                                                            >
                                                                <div
                                                                    class="lqd-pt-bg lqd-overlay flex"
                                                                ></div>
                                                                <div
                                                                    class="lqd-pt-head relative pt-8 px-7 px-md-9"
                                                                >
                                                                    <h4
                                                                        class="lqd-pt-title font-semibold uppercase tracking-0/2em my-0"
                                                                    >
                                                                        {{ $packages[0]->package_name }}
                                                                    </h4>
                                                                    <span
                                                                        class="lqd-pt-price font-semibold mt-1rem mb-0/5rem text-black"
                                                                    >{{ site_currency().$packages[0]->price_monthly  }}
                                                                        <small
                                                                        >/
                                                                            month</small
                                                                        ></span
                                                                    >
                                                                    <p
                                                                        class="lqd-pt-description-md mb-0"
                                                                    >
                                                                        {{ $packages[0]->description }}
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-body relative pt-1/5em pb-4rem"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark text-primary"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-gray-700"
                                                                                >{{ $packages[0]->point_1  }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark text-primary"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-gray-700"
                                                                                >{{ $packages[0]->point_2 }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark text-primary"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-gray-700"
                                                                                >{{ $packages[0]->point_3  }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-foot relative py-1em pr-0/5rem pl-0/5rem md:px-0 text-center border-black-20"
                                                                >
                                                                    @include('component.buy-button',['type' => 'package', 'id' => $packages[0]->id])
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-12 col-md-6 p-0"
                                                    >
                                                        @if(isset($packages[1]))
                                                        <div
                                                            class="lqd-pt lqd-pt-featured lqd-pt lqd-pt-style-3 lqd-pt-style-3b lqd-pt-title-18 lqd-pt-price-50 relative transition-all bg-blue-900 border-none"
                                                        >
                                                            <div
                                                                class="lqd-pt-inner"
                                                            >
                                                                <div
                                                                    class="lqd-pt-bg lqd-overlay flex"
                                                                ></div>
                                                                <div
                                                                    class="lqd-pt-head relative pt-8 px-7 px-md-9"
                                                                >
                                                                    <h4
                                                                        class="lqd-pt-title font-semibold uppercase tracking-0/2em my-0"
                                                                    >
                                                                        {{ $packages[1]->package_name }}
                                                                    </h4>
                                                                    <span
                                                                        class="lqd-pt-price font-semibold mt-1rem mb-0/5rem"
                                                                    >{{ site_currency().$packages[1]->price_monthly }}
                                                                        <small
                                                                        >/
                                                                            month</small
                                                                        ></span
                                                                    >
                                                                    <p
                                                                        class="lqd-pt-description-md mb-0 text-white-40"
                                                                    >
                                                                        {{ $packages[1]->description }}
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-body relative pt-1/5em pb-4rem"
                                                                >
                                                                    <ul
                                                                        class="text-blue-300"
                                                                    >
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-white"
                                                                                >{{ $packages[1]->point_1 }}</span>
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-white"
                                                                                >{{ $packages[1]->point_2 }}</span>
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-white"
                                                                                >{{ $packages[1]->point_3 }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-foot relative py-1em pr-0/5rem pl-0/5rem md:px-0 text-center border-transparent"
                                                                >
                                                                    @include('component.buy-button',['type' => 'package', 'id' => $packages[1]->id])
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lqd-pricing-annually"
                                            role="tabpanel"
                                            class="lqd-tabs-pane lqd-pricing-annually -ml-1 fade"
                                        >
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div
                                                        class="col col-12 col-md-6 p-0"
                                                    >
                                                        <div
                                                            class="lqd-pt lqd-pt lqd-pt-style-3 lqd-pt-style-3b lqd-pt-title-18 lqd-pt-price-50 relative transition-all border-1 border-black-20"
                                                        >
                                                            <div
                                                                class="lqd-pt-inner"
                                                            >
                                                                <div
                                                                    class="lqd-pt-bg lqd-overlay flex"
                                                                ></div>
                                                                <div
                                                                    class="lqd-pt-head relative pt-8 px-7 px-md-9"
                                                                >
                                                                    <h4
                                                                        class="lqd-pt-title font-semibold uppercase tracking-0/2em my-0"
                                                                    >
                                                                        {{ $packages[0]->package_name }}
                                                                    </h4>
                                                                    <span
                                                                        class="lqd-pt-price font-semibold mt-0/35em mb-0/15em text-black"
                                                                    >£840.00
                                                                        <small
                                                                        >{{ site_currency().$packages[0]->price_anually }}
                                                                            /
                                                                            year</small
                                                                        ></span
                                                                    >
                                                                    <p
                                                                        class="lqd-pt-description-md mb-0"
                                                                    >
                                                                        {{ $packages[0]->description }}
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-body relative pt-1/5em pb-4rem"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark text-primary"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-gray-700"
                                                                                >{{ $packages[0]->ponit_1 }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark text-primary"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-gray-700"
                                                                                >
                                                                                    {{ $packages[0]->ponit_2 }}
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark text-primary"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-gray-700"
                                                                                >
                                                                                    {{ $packages[0]->ponit_3 }}
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-foot relative py-1em pr-0/5rem pl-0/5rem md:px-0 text-center border-black-20"
                                                                >
                                                                    @include('component.buy-button',['type' => 'package', 'id' => $packages[0]->id])
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(isset($packages[1]))
                                                    <div
                                                        class="col col-12 col-md-6 p-0"
                                                    >
                                                        <div
                                                            class="lqd-pt lqd-pt-featured lqd-pt lqd-pt-style-3 lqd-pt-style-3b lqd-pt-title-18 lqd-pt-price-50 relative transition-all bg-blue-900 border-none"
                                                        >
                                                            <div
                                                                class="lqd-pt-inner"
                                                            >
                                                                <div
                                                                    class="lqd-pt-bg lqd-overlay flex"
                                                                ></div>
                                                                <div
                                                                    class="lqd-pt-head relative pt-8 px-7 px-md-9"
                                                                >
                                                                    <h4
                                                                        class="lqd-pt-title font-semibold uppercase tracking-0/2em my-0"
                                                                    >
                                                                        {{ $packages[1]->package_name }}
                                                                    </h4>
                                                                    <span
                                                                        class="lqd-pt-price font-semibold mt-1rem mb-0/15em"
                                                                    >{{ site_currency(). $packages[1]->price_anually }}
                                                                        <small
                                                                        >/
                                                                            year</small
                                                                        ></span
                                                                    >
                                                                    <p
                                                                        class="lqd-pt-description-md mb-0 text-white-40"
                                                                    >
                                                                        {{ $packages[1]->description }}
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-body relative pt-1/5em pb-4rem"
                                                                >
                                                                    <ul
                                                                        class="text-blue-300"
                                                                    >
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-white"
                                                                                >
                                                                                    {{ $packages[1]->point_1 }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-white"
                                                                                >
                                                                                    {{ $packages[1]->point_2 }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span
                                                                                class="block mb-1em"
                                                                            >
                                                                                <i
                                                                                    class="lqd-icn-ess icon-ion-ios-checkmark"
                                                                                ></i>
                                                                                <span
                                                                                    class="text-17 text-white"
                                                                                >
                                                                                    {{ $packages[1]->pont_3 }}</span
                                                                                >
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class="lqd-pt-foot relative py-1em pr-0/5rem pl-0/5rem md:px-0 text-center border-transparent"
                                                                >
                                                                    @include('component.buy-button',['type' => 'package', 'id' => $packages[1]->id])
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 text-center px-0">
                                <div class="ld-fancy-heading">
                                    <p
                                        class="ld-fh-element mb-0/5em text-14 font-medium"
                                    >
                                        <span
                                        >Have a look at</span
                                        >
                                        <a href="{{ route('packages') }}">
                                            <span
                                                class="underline text-purple-500"
                                            >all packages.</span
                                            >
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Pricing -->

                <!-- Start Subscribe -->
                <section
                    class="lqd-section subscribe"
                    id="subscribe"
                    data-custom-animations="true"
                    data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element, p, .btn", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 65, "scaleX" : 0.85, "scaleY" : 0.85, "rotationX" : -35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "scaleX" : 1, "scaleY" : 1, "rotationX" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
                >
                    <div
                        class="w-full h-full absolute top-0 left-0 pointer-events-none"
                    >
                        <div
                            class="ld-particles-container lqd-particles-as-bg w-full h-340 absolute -top-120 left-0"
                        >
                            <div
                                class="ld-particles-inner w-full h-full absolute top-0 left-0"
                                id="lqd-subscribe-bg"
                                data-particles="true"
                                data-particles-options='{"particles": {"number": {"value" : 13} , "shape": {"type" : ["image"], "image": {"src": "https:\/\/saaspro.liquid-themes.com\/wp-content\/uploads\/2021\/01\/Path@2x.png", "width" : 110, "height" : 67}} , "opacity": {"random": true} , "size": {"value" : 62, "random": true} , "move": {"enable": true, "direction": "right", "speed" : 1, "random": true, "out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'
                            ></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-12">
                                <div
                                    class="module-col w-full relative flex flex-wrap items-center justify-between bg-white shadow-lg py-40 pr-90 pl-90 bg-no-repeat bg-center rounded-10 animation-element"
                                    style="
                                        background-image: url({{asset('assets/frontend/v2')}}/images/demo/saas/subscribe-bg/Mask-Group-1.svg);
                                    "
                                >
                                    <div
                                        class="w-50percent md:w-full text-start md:text-center"
                                    >
                                        <div class="ld-fancy-heading">
                                            <p
                                                class="ld-fh-element mb-0/5em text-18 leading-1/25em"
                                            >
                                                Become part of the team and
                                                sign up to be an affiliate,
                                                you can find more details
                                                upon signing up.
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="w-50percent md:w-full text-end md:text-center"
                                    >
                                        <a
                                            href="#contact-modal"
                                            class="btn btn-solid border-thin btn-hover-swp items-center px-0/25em bg-blue-900 rounded-100 text-18 font-medium text-white hover:bg-black"
                                            data-lity="#contact-modal"
                                        >
                                            <span
                                                class="inline-flex items-center py-0/85em px-1/5em"
                                            >
                                                <span
                                                    class="btn-txt"
                                                    data-text="Sign up free"
                                                >Sign up free</span
                                                >
                                                <span class="btn-icon">
                                                    <i
                                                        class="lqd-icn-ess icon-md-arrow-forward"
                                                    ></i>
                                                </span>
                                                <span class="btn-icon">
                                                    <i
                                                        class="lqd-icn-ess icon-md-arrow-forward"
                                                    ></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Subscribe -->

                <!-- Start Help -->
                <section class="lqd-section help pt-70" id="help">
                    <div class="container">
                        <div class="row">
                            <div class="col col-12 col-md-8">
                                <div
                                    class="ld-fancy-heading module-title-10vw"
                                >
                                    <h2
                                        class="ld-fh-element mb-0/35em leading-1/1em text-44"
                                    >
                                        Frequently Asked Questions.
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="col col-12 col-md-4 text-end md:text-start"
                            >
                                <div class="ld-fancy-heading">
                                    <p
                                        class="ld-fh-element mb-0/5em text-15 text-black"
                                    >
                                        <span>Support Team</span>
                                        <img
                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/help/Images@2x.jpg"
                                            alt="help"
                                            width="93"
                                            height="44"
                                        />
                                    </p>
                                </div>
                            </div>
                            <div class="col col-12 mt-50">
                                <div
                                    class="accordion accordion-lg accordion-title-underlined accordion-expander-lg mb-2em"
                                    id="accordion-help"
                                    role="tablist"
                                    aria-multiselectable="true"
                                >
                                    <div class="accordion-item panel mb-10">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-1"
                                            data-id="lqd-item-1"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-1"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-1"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-1"
                                                >
                                                    <span>Is it safe? Will I face any consequences?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-1"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-1"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    You can rest assured about safety when purchasing followers from a reputable site like Rocket Social Boost. We deliver genuine followers through authentic methods, and major social media platforms typically only penalize accounts that engage in buying bot or fake followers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item panel mb-10">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-2"
                                            data-id="lqd-item-2"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-2"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-2"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-2"
                                                >
                                                    <span>What are the benefits for me?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-2"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-2"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    Rocket Social Boost offers authentic and high-quality followers for popular social media platforms, leading to increased organic reach, more website traffic, and numerous leads.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item panel mb-10">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-3"
                                            data-id="lqd-item-3"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-3"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-3"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-3"
                                                >
                                                    <span>How long does it take to fulfill an order?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-3"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-3"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    Order processing is instant, and you'll likely see a quick boost. However, we recommend drip-feeding results to encourage organic growth.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item panel mb-10">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-4"
                                            data-id="lqd-item-4"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-4"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-4"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-4"
                                                >
                                                    <span>Where is the engagement from?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-4"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-4"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    While Rocket Social Boost aims to provide a hundred percent targeted audience, followers, likes, and views, the strict algorithms of platforms like Instagram make it challenging. Nonetheless, we strive to offer 75 percent high-quality real USA Instagram followers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item panel mb-10">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-5"
                                            data-id="lqd-item-5"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-5"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-5"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-5"
                                                >
                                                    <span>Why should I choose your service?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-5"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-5"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    As a top-rated social media marketing growth services provider, Rocket Social Boost takes pride in delivering high-quality services at affordable rates. We excel in providing reliable, genuine, and permanent followers, likes, comments, and views for major social media platforms.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-item panel">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-6"
                                            data-id="lqd-item-6"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-6"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-6"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-6"
                                                >
                                                    <span>Do you offer customized packages?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-6"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-6"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    Yes, we can create custom packages tailored to your specific needs. Simply send us a message on our support email.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item panel mb-10">
                                        <div
                                            class="accordion-heading"
                                            role="tab"
                                            id="heading-lqd-item-7"
                                            data-id="lqd-item-7"
                                        >
                                            <h4
                                                class="accordion-title text-18 leading-1/5em text-black"
                                                data-bs-controls="lqd-item-7"
                                            >
                                                <a
                                                    class="collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-parent="#accordion-help"
                                                    href="#lqd-item-7"
                                                    aria-expanded="false"
                                                    aria-controls="lqd-item-7"
                                                >
                                                    <span>Does my account need to be public?</span>
                                                    <span
                                                        class="accordion-expander text-purple-500 text-22 absolute"
                                                    >
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-add"
                                                        ></i>
                                                        <i
                                                            class="lqd-icn-ess icon-ion-ios-remove"
                                                        ></i>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div
                                            id="lqd-item-7"
                                            class="accordion-collapse collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-lqd-item-7"
                                            data-bs-parent="#accordion-help"
                                        >
                                            <div class="accordion-content">
                                                <div
                                                    class="ld-fancy-heading"
                                                >
                                                    <p
                                                        class="ld-fh-element mb-1/5em text-18 leading-1/6em tracking-0"
                                                    >
                                                    For successful order processing of followers, likes, or comments, your account needs to be set to public, allowing our system access.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="lqd-imggrp-container relative transition-all mb-2em"
                                >
                                    <div
                                        class="lqd-imggrp-inner flex flex-wrap"
                                    >
                                        <div
                                            class="lqd-imggrp-single block absolute transition-all -right-80 bottom-250"
                                        >
                                            <div
                                                class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center"
                                                data-parallax="true"
                                                data-parallax-from='{"y" : 65, "rotationZ" : -30}'
                                                data-parallax-to='{"y" : -106, "rotationZ" : 23}'
                                                data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
                                            >
                                                <figure>
                                                    <img
                                                        width="64"
                                                        height="47"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/help/img-12@2x.png"
                                                        alt="shape"
                                                    />
                                                </figure>
                                            </div>
                                        </div>
                                        <div
                                            class="lqd-imggrp-single block absolute transition-all -left-80 bottom-400"
                                        >
                                            <div
                                                class="lqd-imggrp-img-container inline-flex max-w-full relative items-center justify-center"
                                                data-parallax="true"
                                                data-parallax-from='{"y" : -54, "rotationZ" : 26}'
                                                data-parallax-to='{"y" : 95, "rotationZ" : -19}'
                                                data-parallax-options='{"overflowHidden": false, "ease": "linear", "start": "top bottom"}'
                                            >
                                                <figure>
                                                    <img
                                                        width="38"
                                                        height="59"
                                                        src="{{asset('assets/frontend/v2')}}/images/demo/saas/help/1@2x.png"
                                                        alt="shape"
                                                    />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Help -->

                <!-- Start Clients None Marquee-->
                <section
                    class="lqd-section clients clients-none-marquee pb-35"
                >
                    <div class="container">
                        <div class="row justify-center">
                            <div class="col col-12 col-md-6 text-center">
                                <div class="ld-fancy-heading mb-25">
                                    <p
                                        class="ld-fh-element mb-0/5em text-14 text-green-700"
                                    >
                                        Transforming the Social World
                                    </p>
                                </div>
                            </div>
                            <div class="col col-12">
                                <div
                                    class="carousel-container lqd-marquee-carousel lqd-fade-sides -mr-15 -ml-15 transition-all"
                                >
                                    <div
                                        class="carousel-items"
                                        data-lqd-flickity='{"cellAlign": "center", "prevNextButtons": false, "pageDots": false, "groupCells": false, "wrapAround": true, "equalHeightCells": true, "middleAlignContent": true, "pauseAutoPlayOnHover": false, "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "dotsIndicator": "dots", "numbersStyle": "circle", "dotsAppendTo": "self"}'
                                    >
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-instagram.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-spotify.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-tiktok.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-facebook.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-tinder.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-twitterx.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="carousel-item has-width w-20percent flex flex-col justify-center items-center transition-shadow px-15"
                                        >
                                            <div
                                                class="carousel-item-inner w-full justify-center"
                                            >
                                                <div
                                                    class="carousel-item-content justify-center"
                                                >
                                                    <figure
                                                        class="max-w-full inline-flex flex-grow-1 vertical-top justify-center"
                                                    >
                                                        <img
                                                            width="50"
                                                            height="50"
                                                            src="{{asset('assets/frontend/v2')}}/images/demo/saas/clients/icons8-youtube.svg"
                                                            alt="clients"
                                                        />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Clients none Marquee -->

                <!-- Start Download -->
                <section
                    class="lqd-section download pt-15"
                    id="download"
                    data-custom-animations="true"
                    data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element, h2, .btn", "duration": "1800", "delay": "180", "ease": "power4.out", "direction": "forward", "initValues": {"y" : 65, "scaleX" : 0.85, "scaleY" : 0.85, "rotationX" : -35, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 0} , "animations": {"y" : 0, "scaleX" : 1, "scaleY" : 1, "rotationX" : 0, "transformOriginX" : 50, "transformOriginY" : 50, "transformOriginZ": "0px", "opacity" : 1}}'
                >
                    <div class="container">
                        <div class="row">
                            <div
                                class="col col-12"
                                data-parallax="true"
                                data-parallax-from='{"y" : 100, "scaleX" : 1.2, "scaleY" : 1.2}'
                                data-parallax-to='{"y" : 0, "scaleX" : 1, "scaleY" : 1}'
                                data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom-=650 top"}'
                            >
                                <div
                                    class="module-col w-full relative flex flex-wrap items-center justify-between bg-blue-900 py-55 px-90 -mb-100 rounded-10 shadow-lg animation-element"
                                >
                                    <div
                                        class="w-65percent text-start md:w-full md:text-center"
                                    >
                                        <div
                                            class="ld-fancy-heading module-title-10vw"
                                        >
                                            <h2
                                                class="ld-fh-element mb-0 text-46 font-bold leading-1em text-white"
                                            >
                                                Join us and increase your
                                                Social Analytics.
                                            </h2>
                                        </div>
                                    </div>
                                    <div
                                        class="w-35percent text-end md:w-full md:text-center"
                                    >
                                        <a
                                            href="#contact-modal"
                                            class="btn btn-solid btn-hover-txt-switch btn-hover-txt-switch-y btn-lg circle border-thin bg-white rounded-100 text-1em text-black hover:text-white hover:bg-black"
                                            data-lity="#contact-modal"
                                        >
                                            <span
                                                class="btn-txt"
                                                data-text="Get Started"
                                                data-transition-delay="true"
                                                data-delay-options='{"elements":  ".lqd-chars", "delayType":  "animation", "startDelay":  0, "delayBetween":  32.5}'
                                                data-split-text="true"
                                                data-split-options='{"type":  "chars, words"}'
                                            >Get Started</span
                                            >
                                            <span class="btn-icon">
                                                <i
                                                    class="lqd-icn-ess icon-md-arrow-forward"
                                                ></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Download -->
            </div>
        </main>
    </div>

    <!-- Start custom cursor -->
    <div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
    <div
        class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none"
    >
        <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
        <div
            class="lqd-cc-solid-txt flex justify-center text-center relative"
        >
            <div class="lqd-cc-solid-txt-inner">Explide</div>
        </div>
    </div>
    <div
        class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none"
    >
        <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
        <div
            class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                style="width: 1em; height: 1em"
            >
                <path
                    fill="currentColor"
                    d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z"
                ></path>
            </svg>
        </div>
        <div
            class="lqd-cc-solid-txt flex justify-center text-center relative"
        >
            <div class="lqd-cc-solid-txt-inner">Drag</div>
        </div>
        <div
            class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                style="width: 1em; height: 1em"
            >
                <path
                    fill="currentColor"
                    d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z"
                ></path>
            </svg>
        </div>
    </div>
    <div
        class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none"
    >
        <svg
            width="80"
            height="80"
            viewBox="0 0 80 80"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z"
            />
        </svg>
    </div>
    <div
        class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none"
    >
        <div
            class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative"
        >
            <svg
                width="32"
                height="32"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 32 32"
                style="width: 1em; height: 1em"
            >
                <path
                    fill="currentColor"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z"
                ></path>
            </svg>
        </div>
    </div>
    <div
        class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"
    ></div>
    <!-- End custom cursor -->

    <template id="lqd-temp-sticky-header-sentinel">
        <div
            class="lqd-sticky-sentinel invisible absolute pointer-events-none"
        ></div>
    </template>
    <template id="lqd-snickersbar">
        <div
            class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in"
            data-item-id
        >
            <div class="lqd-snickersbar-inner flex flex-wrap items-center">
                <div class="lqd-snickersbar-detail">
                    <p class="hidden lqd-snickersbar-addding-temp my-0">
                        Adding {{--itemName--}} to cart
                    </p>
                    <p class="hidden lqd-snickersbar-added-temp my-0">
                        Added {{--itemName--}} to cart
                    </p>
                    <p
                        class="my-0 lqd-snickersbar-msg flex items-center"
                    ></p>
                    <p
                        class="my-0 lqd-snickersbar-msg-done flex items-center "
                    ></p>
                </div>
                <div class="lqd-snickersbar-ext ml-4"></div>
            </div>
        </div>
    </template>

@endsection
