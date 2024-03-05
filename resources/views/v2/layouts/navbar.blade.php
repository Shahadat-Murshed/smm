<div class="lqd-sticky-placeholder hidden"></div>
<header id="site-header" class="main-header" data-sticky-header="true" data-sticky-values-measured="false">
    <div class="lqd-head-sec-wrap relative lqd-hide-onstuck pt-5 pb-45 pl-160 md:hidden"
        style="
            background: linear-gradient(
                270deg,
                rgb(61, 155, 252) 0%,
                rgb(123, 64, 228) 25.15923566878981%,
                rgb(245, 58, 139) 50%,
                rgb(238, 112, 74) 74.8407643312102%,
                #ddd24c 100%
            );
        ">
        <div class="lqd-head-sec container flex items-stretch">
            <div class="col w-full flex justify-end text-end pr-5 pl-15">
                <div class="ld-fancy-heading flex items-center">
                    <p class="ld-fh-element mb-0 text-12 text-white">
                        Sign up and receive 20% bonus discount on
                        checkout.
                    </p>
                </div>
            </div>
            <div class="col w-full flex text-start pr-15 pl-5">
                <div class="header-module module-button py-10">
                    <a href="#" class="btn btn-naked text-13 leading-1em text-white-80">
                        <span class="btn-txt" data-text="Learn more">Learn more</span>
                        <span class="btn-icon">
                            <i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="lqd-head-sec-wrap relative -mt-40 bg-white module-bottom md:hidden">
        <div class="lqd-head-sec container-fluid flex items-stretch p-0">
            <div class="col lqd-head-col">
                <div class="header-module module-logo no-rotate navbar-brand-plain py-25">
                    <a class="navbar-brand text-18" href="{{ route('home') }}" rel="home">
                        <span class="navbar-brand-inner">
                            <img class="logo-default"
                                src="{{ asset('assets/frontend/v2') }}/images/demo/saas/logo/logo.png"
                                alt="LandingHub Theme" />
                        </span>
                    </a>
                </div>
            </div>
            <div class="col lqd-head-col">
                <div class="header-module module-primary-nav static">
                    <div class="navbar-collapse lqd-submenu-cover h-full" aria-expanded="false" role="navigation">
                        <ul class="main-nav lqd-menu-counter-right main-nav-hover-underline-1 items-stretch justify-center reset-ul flex h-full"
                            data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a"}'>
                            <li>
                                <a class="text-gray-500 font-medium" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#overview' : route('home').'#overview' }}">
                                    <span>Overview</span>
                                    <span class="submenu-expander"></span>
                                    <span class="link-icon right-icon">
                                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-500 font-medium" href="{{ route('services') }}">Services</a>
                            </li>
                            <li>
                                <a class="text-gray-500 font-medium" href="{{ route('packages') }}">Packages</a>
                            </li>                            
                            <li>
                                <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#testimonials' : route('home').'#testimonials' }}">Testimonials</a>
                            </li>
                            <li>
                                <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#pricing' : route('home').'#pricing' }}">
                                    <span>Pricing</span>
                                    <span class="link-badge text-primary">New</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#help' : route('home').'#help'  }}">
                                    <span>Help</span>
                                    <span class="submenu-expander"></span>
                                    <span class="link-icon right-icon">
                                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col lqd-head-col text-end justify-end lg:hidden">
                <div class="header-module module-button">
                    <a href="{{ request()->route()->getName() === 'home' ? '#contact-modal' : route('register-as-affiliate')  }}"
                        class="{{ request()->route()->getName() === 'home' ? 'ajx_modal' : ''  }} btn btn-solid btn-sm border-none bg-slate-100 rounded-100 text-14 leading-1/25em text-black"
                       {{ request()->route()->getName() === 'home' ? 'data-lity=#contact-modal' : ''  }}
                        {{ request()->route()->getName() === 'home' ? 'data-url='.route('register-as-affiliate') : route('register-as-affiliate')  }}
                    >
                        <span class="btn-txt" data-text="Join Hubz">Join as Affiliate!</span>
                        <span class="btn-icon">
                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="lqd-head-sec-wrap relative lqd-hide-onstuck module-line md:hidden">
        <div class="lqd-head-sec container-fluid flex items-stretch p-0">
            <div class="col lqd-head-col">
                <div class="w-full h-1px mb-55">
                    <span class="w-full relative block border-top border-black-10"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="lqd-stickybar-wrap lqd-stickybar-left pointer-events-none md:hidden">
        <div class="lqd-stickybar w-full h-full relative flex justify-center items-center vertical-rl">
            <div class="col lqd-head-col"></div>
            <div class="col lqd-head-col justify-center text-center pr-0 pl-0">
                <div class="header-module flex-col py-10 rotate-180">
                    <div class="lqd-fancy-menu lqd-custom-menu lqd-menu-td-underline static">
                        <ul class="reset-ul inline-nav" data-lqd-interactive-color="true" data-localscroll="true"
                            data-localscroll-options='{"itemsSelector":">li > a"}'>
                            <li class="w-full">
                                <a class="text-14 font-semibold leading-1em text-black pointer-events-auto hover:text-black-60"
                                    href="#download" target="_blank">Top Selling Packages</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col lqd-head-col"></div>
        </div>
    </div>
    <div class="lqd-stickybar-wrap lqd-stickybar-right pointer-events-none md:hidden">
        <div class="lqd-stickybar w-full h-full relative flex justify-center items-center vertical-rl">
            <div class="col lqd-head-col"></div>
            <div class="col lqd-head-col justify-center text-center pr-0 pl-0">
                <div class="header-module flex-col py-10 rotate-180">
                    <div class="lqd-scrl-indc" data-lqd-scroll-indicator="true">
                        <a class="pointer-events-auto text-black" href="#wrap" data-localscroll="true"
                            data-lqd-interactive-color="true">
                            <span class="lqd-scrl-indc-inner flex items-center">
                                <span class="lqd-scrl-indc-txt">scroll</span>
                                <span class="lqd-scrl-indc-line bg-black w-1 h-60 relative">
                                    <span
                                        class="lqd-scrl-indc-el inline-block w-10 h-10 absolute -top-5 -left-5 rounded-8"></span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col lqd-head-col text-end justify-end">
                <div class="header-module module-button py-10">
                    <a href="#modal-mini"
                        class="btn btn-naked btn-icon-custom-size btn-icon-circle btn-icon-solid pointer-events-auto ml-20 font-family-inherit"
                        data-lity="#modal-mini" data-lqd-interactive-color="true">
                        <span class="btn-icon bg-red-500 text-white text-22 w-50 h-50">
                            <i class="lqd-icn-ess icon-speech-bubble"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="lqd-mobile-sec">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch">
            <div class="lqd-mobile-modules-container"></div>
            <button type="button"
                class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end border-none bg-transparent p-0"
                data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav"
                aria-expanded="false"
                data-bs-toggle-options='{"changeClassnames":  {"html": "mobile-nav-activated"} }'>
                <span class="sr-only">Menu</span>
                <span class="bars inline-block relative z-1">
                    <span class="bars-inner flex flex-col w-full h-full">
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                    </span>
                </span>
            </button>
            <a class="navbar-brand flex justify-start" href="#">
                <span class="navbar-brand-inner">
                    <img class="logo-default" src="{{ asset('assets/frontend/v2') }}/images/demo/saas/logo/logo.png"
                        alt="LandingHub Theme" />
                </span>
            </a>
        </div>
        <div class="lqd-mobile-sec-nav w-full absolute z-10">
            <div class="mobile-navbar-collapse collapse navbar-collapse bg-white" id="lqd-mobile-sec-nav"
                aria-expanded="false" role="navigation">
                <ul class="reset-ul lqd-mobile-main-nav main-nav text-black" data-localscroll="true"
                    data-localscroll-options='{"itemsSelector":"> li > a"}'>
                    <li>
                        <a href="#banner"> Home </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ request()->route()->getName() === 'home' ? '#overview' : route('home').'#overview' }}">
                            Overview
                            <span class="submenu-expander absolute"></span>
                        </a>
                    </li>
                    <li>
                        <a class="text-gray-500 font-medium" href="{{ route('services') }}">Services</a>
                    </li>
                    <li>
                        <a class="text-gray-500 font-medium" href="{{ route('packages') }}">Packages</a>
                    </li>
                    @if(request()->routeIs('home'))
                        <li>
                            <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#testimonials' : route('home').'#testimonials'  }}">Testimonials</a>
                        </li>
                        <li>
                            <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#pricing' : route('home').'#pricing'  }}">
                                <span>Pricing</span>
                                <span class="link-badge text-primary">New</span>
                            </a>
                        </li>
                    @endif
                    <li class="menu-item-has-children">
                        <a class="text-gray-500 font-medium" href="{{ request()->route()->getName() === 'home' ? '#help' : route('home').'#help'  }}">
                            <span>Help</span>
                            <span class="submenu-expander"></span>
                            <span class="link-icon right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
