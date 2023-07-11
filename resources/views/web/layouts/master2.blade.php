<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'ltr' : 'ltr' }}" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('land2/assets/img/apple-icon.png') }}">
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>

    <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    <meta itemprop="name" content="الرئيسية | وطنية">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="https://wataneya.org/storage/media/photos/shares/625d55fceb5d9.jpg">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://wataneya.org/ar">
    <meta property="og:type" content="website">
    <meta property="og:title" content="الرئيسية | وطنية">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="https://wataneya.org/storage/media/photos/shares/625d55fceb5d9.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="الرئيسية | وطنية">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="https://wataneya.org/storage/media/photos/shares/625d55fceb5d9.jpg">


    <!--     Fonts and icons     -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.3.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
        integrity="sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg=="
        crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/928ee97a5c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="{{ asset('landing/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('landing/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('landing/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="{{ asset('css/slick/slick-theme.css') }}" rel="stylesheet" />

    {{-- <link id="pagestyle" href="{{asset('landing/assets/css/soft-design-system.css?v=1.0.5')}}" rel="stylesheet" /> --}}
    <link id="pagestyle" href="{{ asset('land2/assets/css/material-kit.css?v=3.0.0') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    {{-- <link href="{{ asset('assets/web/css/style-Ar.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick-themes.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/bootstrap2.css') }}" rel="stylesheet">

    


    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('assets/web/css/bootstrap-rtl.css') }}" rel="stylesheet">
    @endif

    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('assets/web/css/style-ar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/web/css/footer-ar.css') }}" rel="stylesheet">
        <style>
            .search .submit {
                left: 4px;
            }

            body {
                text-align: right
            }
        </style>
    @else
        <style>
            .search .submit {
                right: 4px;
            }
        </style>
        <link href="{{ asset('assets/web/css/style-en.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/web/css/footer-en.css') }}" rel="stylesheet">
    @endif
    @yield('style')

    <style>
        * {
            font-family: 'dli';
        }
        @media (max-width: 991.98px){
            .dropdown.nav-item .dropdown-menu-animation.show {
                /* height: 250px; */
                opacity: 1;
                height: auto;
            }
            
            
        }

        nav .text-md {
            font-size: 1.5rem !important;
        }

        @media (min-width: 768px) {
            .me-md-2 {
                margin-inline-start: 0.5rem;

            }
            
        }

        @media (min-width: 576px) {
            .me-sm-3 {
                margin-inline-start: 0.5rem;
            }
        }

        @media (min-width: 992px) {
            .me-lg-7 {
                margin-inline-start: 6rem !important;
            }
        }





        .carousel-inner img {
            width: 100%;
            height: 650px;
        }

        .btn-outline-info:hover {
            color: white !important;
            background-image: linear-gradient(195deg, #49a3f1 0%, #1A73E8 100%) !important;
        }

        .btn-navy {
            color: white;
        }

        .btn-navy:hover {
            background-color: #309ea9 !important;
            color: white;
        }

        .btn-yellow:hover {
            background-color: #ecd73e !important;
            color: white;
        }

        .dropdown-menu a {
            text-align: right;
            font-family: 'dli' !important;
        }

        @font-face {
            font-family: 'dli';
            src: url('/fonts/DINNextLTArabic-Regular-2.ttf');
            /* src: url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2); */
        }

        .ar {
            font-family: 'dli' !important;
        }

        .nav-link span:hover {
            color: #3ec1ce;
        }

        .head-top {
            background-color: #0b2240 !important;
        }

        .head-top .slogen-main p {
            color: white;
        }

        .head-top ul li a i {
            color: white;
        }

        .head-top ul li a i:hover {
            color: var(--gray-color);
            ;
        }

        .head-top ul li a {
            color: white;
        }

        .head-top ul li a:hover {
            color: var(--gray-color);

        }

        .head-top ul li.phone-link:before {
            background-color: white;
        }

        .ser {
            max-height: 250px !important;
        }


        .footer-main ul li {
            display: inline-block;
            margin-left: 20px;
        }

        .footer-main ul li a {
            font-size: 26px;
            color: #fff;
            text-decoration: none;
        }

        .footer-main ul li a:hover {
            color: #fdde00;
        }

        @media (min-width: 992px) {
            .dropdown.dropdown-hover:after {
                bottom: 250px !important;
            }
        }

        @media (max-width: 667px) {
            .ser {
                max-height: none !important;
            }

            .ser img {
                bottom: 0px !important;
            }

            .dis-rel {
                bottom: 0px !important;
            }
        }
    </style>
    @yield('style')
</head>

<body class="about-us">

    @include('web.inc.nav_bar')


    @yield('content')







    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    @include('web.inc.footer')
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->

    <!--   Core JS Files   -->
    @yield('js')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    {{-- <script src="{{ asset('landing/assets/js/plugins/countup.min.js') }}"></script> --}}
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{ asset('landing/assets/js/plugins/parallax.min.js') }}"></script>
    <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{ asset('landing/assets/js/soft-design-system.min.js?v=1.0.5') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/web/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/web/js/slick.min.js') }}"></script>
    {{-- <script src="https://wataneya.org/assets/web/js/website1.js"></script> --}}
    {{-- <script src="https://wataneya.org/assets/web/js/bootstrap.js"></script> --}}
    {{-- <script src="https://wataneya.org/assets/web/js/chosen.jquery.js"></script> --}}
    <script src="{{ asset('assets/web/js/init.js') }}"></script>
    {{-- <script src="https://wataneya.org/assets/web/js/jquery-ui.js"></script> --}}
    {{-- <script src="https://wataneya.org/assets/web/js/slick.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets/web/js/jquery.countup.min.js') }}"></script>
    <script src="{{ asset('assets/web/customs/js/plugin.js') }}" ></script>

    <script>
        $('.comp-main').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    @stack('scripts')
    {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
    {{-- <script>
        // get the element to animate
        var element = document.getElementById('count-stats');
        var elementHeight = element.clientHeight;

        // listen for scroll event and call animate function

        document.addEventListener('scroll', animate);

        // check if element is in view
        function inView() {
            // get window height
            var windowHeight = window.innerHeight;
            // get number of pixels that the document is scrolled
            var scrollY = window.scrollY || window.pageYOffset;
            // get current scroll position (distance from the top of the page to the bottom of the current viewport)
            var scrollPosition = scrollY + windowHeight;
            // get element position (distance from the top of the page to the bottom of the element)
            var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

            // is scroll position greater than element position? (is element in view?)
            if (scrollPosition > elementPosition) {
                return true;
            }

            return false;
        }

        var animateComplete = true;
        // animate element when it is in view
        function animate() {

            // is element in view?
            if (inView()) {
                if (animateComplete) {
                    if (document.getElementById('state1')) {
                        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
                        if (!countUp.error) {
                            countUp.start();
                        } else {
                            console.error(countUp.error);
                        }
                    }
                    if (document.getElementById('state2')) {
                        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
                        if (!countUp1.error) {
                            countUp1.start();
                        } else {
                            console.error(countUp1.error);
                        }
                    }
                    if (document.getElementById('state3')) {
                        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
                        if (!countUp2.error) {
                            countUp2.start();
                        } else {
                            console.error(countUp2.error);
                        };
                    }
                    if (document.getElementById('state4')) {
                        const countUp2 = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
                        if (!countUp2.error) {
                            countUp2.start();
                        } else {
                            console.error(countUp2.error);
                        };
                    }
                    if (document.getElementById('state5')) {
                        const countUp2 = new CountUp('state5', document.getElementById("state5").getAttribute("countTo"));
                        if (!countUp2.error) {
                            countUp2.start();
                        } else {
                            console.error(countUp2.error);
                        };
                    }
                    animateComplete = false;
                }
            }
        }

        if (document.getElementById('typed')) {
            var typed = new Typed("#typed", {
                stringsElement: '#typed-strings',
                typeSpeed: 90,
                backSpeed: 90,
                backDelay: 200,
                startDelay: 500,
                loop: true
            });
        }
    </script> --}}
    {{-- <script>
        if (document.getElementsByClassName('page-header')) {
            window.addEventListener('scroll', function() {
                var scrollPosition = window.pageYOffset;
                var bgParallax = document.querySelector('.page-header');
                var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
                if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
                    bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
                } else {
                    bgParallax.style.backgroundPositionY = '50%';
                }
            });
        }
    </script> --}}
</body>

</html>
