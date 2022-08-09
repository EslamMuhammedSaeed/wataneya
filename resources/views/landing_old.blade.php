<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>

    <script id="mcjs">
        ! function(c, h, i, m, p) {
            m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m,
                p)
        }(document, "script",
            "https://chimpstatic.com/mcjs-connected/js/users/25ba645f10169963cf352dcf8/621ab03d0665c883a70ea203e.js");
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '763923804986112');
        fbq('track', 'PageView');
    </script>
    <!-- End Meta Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WWNHXDK4NW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WWNHXDK4NW');
    </script>
    <meta name="facebook-domain-verification" content="u69rhywl1ogmh6y4oo2k5036ri70ro" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="is_rtl" content="{{ app()->getLocale() == 'ar' ? 'true' : 'false' }}">
    <title>{{ isset($title) ? $title : __('lang.home') }} | {{ setting('app_name', env('APP_NAME')) }}</title>
    <meta content="{{ __('lang.Meta_description') }}" name="description" />
    <!-- Google / Search Engine Tags -->
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


    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.3.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
        integrity="sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg=="
        crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/928ee97a5c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/web/css/bootstrap1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/donation-p.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/web/css/bootstrap-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick-themes.css') }}" rel="stylesheet">
   
        <link href="{{ asset('assets/web/css/style-Ar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/web/css/footer-ar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/web/css/style-En.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/web/css/footer-en.css') }}" rel="stylesheet">
    {{-- <link rel="icon" href="{{ setting('app_icon', default_icon(), 'small') }}" /> --}}
    <link href="{{ asset('assets/web/customs/css/style.css') }}" rel="stylesheet" />
    @yield('css')
    @stack('styles')
</head>

<body>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=763923804986112&ev=PageView&noscript=1" /></noscript>
    <!--Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!--    Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "121737661236346");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!--    Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/ar_AR/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <style>
        #whats-app {
            position: fixed;
            bottom: 100px;
            right: 25px;
            background: #25D366;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            z-index: 10;
            cursor: pointer;
            display: grid;
            justify-items: center;
            align-items: center;
            box-shadow: 2px 2px 10px 0px #00000036;
        }

        .logo-whats-app {
            text-decoration: none;
        }

        .fa-whatsapp {
            font-size: 40px;
            color: #fff;
        }
    </style>
    <a class="logo-whats-app" href="https://api.whatsapp.com/send/?phone=201027744425&text&app_absent=0">
        <div id="whats-app"><i class="fa-brands fa-whatsapp"></i></div>
    </a>
    <div class="container-fluid remove-padding head-top">
        <div class="container remove-padding">

            <div class="col-md-4 col-sm-4 head-links-main">
                <ul>
                    {{-- @forelse(social_accounts() as $_social_account)
                        <li class="hidden-xs hidden-sm">
                            <a href="{{ $_social_account->url }}" target="_blank" title="{{ $_social_account->title }}">
                                <i class="{{ $_social_account->icon_code }}"></i>
                            </a>
                        </li>
                    @empty
                    @endforelse --}}
                    {{-- <li class="phone-link"><a href="{{ route('web.contact-us.index') }}"><i
                                class="ri-phone-fill"></i>{{ __('lang.contact_us') }}</a></li> --}}
                </ul>
            </div>

            <div class="col-md-4 col-sm-4 slogen-main hidden-xs">
                <p>{{ __('lang.slogan') }}</p>
            </div>


        </div>
    </div>

    <div class="container-fluid remove-padding headr-main">
        <div class="container remove-padding">
            <div class="col-md-3 side-btns col-xs-12 col-sm-12">
                <ul>
           
                    <li>
                        <a href="#" class="solid-btn">
                            {{ __('lang.donate_now') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 menu-main">
                <ul>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">{{ __('lang.about') }}
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <div class="dropdown-menu">
                            
                        </div>
                    </li>
    
    
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">{{__('lang.wataneya_services') }}
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <div class="dropdown-menu">
                            
                        </div>
                    </li>
    
    
                    
    
                   
                </ul>
    
                <ul class="visible-xs visible-sm">
                    
                        <li class="hidden-xs hidden-sm"><a href="#" target="_blank"
                                                           title="#"><i
                                    class="#"></i></a></li>
                  
                </ul>
    
            </div>
            <div class="col-md-2 col-xs-12 logo-main">
                <a href="#">
                    <img src="" class="img-responsive"
                         alt="{{ setting('app_name') }}"/>
                </a>
                <span class="menu-btn"></span>
            </div>
        </div>
    </div>
    
    <div class="container-fluid remove-padding cont-main">

    <script src="{{ asset('assets/web/js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/web/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/init.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/web/js/slick.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets/web/js/jquery.countup.min.js') }}"></script>
    <script src="{{ asset('assets/web/customs/js/plugin.js') }}"></script>

    @yield('js')
    @stack('scripts')
</body>

</html>
