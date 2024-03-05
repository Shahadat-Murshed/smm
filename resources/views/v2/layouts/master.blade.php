<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="keywords"
            content="social media, SMM, marketing, social, media, engagement, boost, instagram, TikTok, analytics, agency, influencer"
        />
        <meta name="author" content="Karpz - RocketSocialBoost™" />
        <meta
            name="description"
            content="RocketSocialBoost™ aims to provide the best social services, by offering affordable, premium, and reliable services to take you to the next level."
        />
        <meta property="og:title" content="RocketSocialBoost" />
        <meta
            property="og:description"
            content="RocketSocialBoost™ aims to provide the best social services, by offering affordable, premium, and reliable services to take you to the next level."
        />
        <meta property="og:type" content="website" />
        <meta
            property="og:image"
            content="{{asset('assets/frontend/v2')}}/images/common/og-image.jpg"
        />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <link
            rel="stylesheet"
            href="{{asset('assets/frontend/v2')}}/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css"
        />
        <link rel="stylesheet" href="{{asset('assets/frontend/v2')}}/css/theme.min.css" />
        <link rel="stylesheet" href="{{asset('assets/frontend/v2')}}/css/utility.min.css" />
        <link rel="stylesheet" href="{{asset('assets/frontend/v2')}}/css/demo/saas.css" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap"
            rel="stylesheet"
        />

        <title>RocketSocialBoost</title>
        <link
            rel="icon"
            type="image/x-icon"
            href="{{asset('assets/frontend/v2')}}/images/demo/saas/logo/rocket.png"
        />
        @yield('styles')
        @yield('styles')
    </head>
<body
    data-mobile-nav-breakpoint="1199"
    data-mobile-nav-style="minimal"
    data-mobile-nav-scheme="light"
    data-mobile-nav-trigger-alignment="right"
    data-mobile-header-scheme="light"
    data-mobile-logo-alignment="default"
    data-mobile-nav-align="left"
    >

    @hasSection('no_footer')
        <div></div>
    @else
        @include('v2.layouts.navbar')
    @endif

    @yield('content')

    <!-- Contact modal -->
    @include('v2.layouts.modal')
    <!-- Contact modal -->

    <!-- Mini Contact Modal -->
    @include('v2.layouts.mini-contacts')
    <!-- Mini Contact Modal -->

    @hasSection('no_footer')
        <div></div>
    @else
        @include('v2.layouts.footer')
    @endif

    <div
        class="lity"
        role="dialog"
        aria-label="Dialog Window (Press escape to close)"
        tabindex="-1"
        data-modal-type="default"
    >
        <div class="lity-wrap" data-lity-close role="document">
            <div class="lity-loader" aria-hidden="true">Loading...</div>
            <div class="lity-container">
                <div class="lity-content"></div>
            </div>
            <button
                class="lity-close"
                type="button"
                aria-label="Close (Press escape to close)"
                data-lity-close
            >
                &times;
            </button>
        </div>
    </div>
    <!-- Master JS -->

    <script src="{{asset('assets/frontend/v2')}}/vendors/jquery.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/fastdom/fastdom.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/fresco/js/fresco.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/lity/lity.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/gsap/minified/gsap.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/gsap/utils/CustomEase.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/gsap/minified/ScrollTrigger.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/draw-shape/liquidDrawShape.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/fontfaceobserver.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/gsap/utils/SplitText.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/particles.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/flickity/flickity.pkgd.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/flickity/flickity-fade.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/vendors/isotope/packery-mode.pkgd.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/js/liquid-gdpr.min.js"></script>
    <script src="{{asset('assets/frontend/v2')}}/js/theme.min.js"></script>
    {{-- <script src="{{asset('assets/frontend/v2')}}/js/liquid-ajax-contact-form.min.js"></script> --}}
    @stack('scripts')
    <script>
        $(document).ready(function() {
            $(".ajx_modal").on('click',function(e) {
                var url = $(this).data().url;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('#contact-modal').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
