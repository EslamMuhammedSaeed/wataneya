<!DOCTYPE html>
<html lang="ar" dir="rtl" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('land2/assets/img/apple-icon.png') }}">
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>

    <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    <title>{{ __('lang.home') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.home') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.home') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.home') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('assets/web/css/style-Ar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick-themes.css') }}" rel="stylesheet">

    <style>
        * {
            font-family: 'dli';
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
            background-color: #33c1ce;
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

            .head-links-main ul {
                display: flex;
                justify-content: center;
            }


        }

        .btn-slide {
            padding: 15px 30px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            font-size: 1.2rem;
            color: white;
            background-color: #fdde00;
            text-shadow: 1px 1px 0px rgba(62, 62, 62, 0.756);

        }

        .btn-slide:hover {
            color: white;

        }

        @media only screen and (max-width: 991px) {
            body {
                padding-top: 56px !important;
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

            .head-links-main {
                width: auto !important;
            }

            .head-links-main ul {
                display: flex;
                justify-content: center;
            }

            .about-us {
                padding-top: 56px !important;
            }

            .dropdown.nav-item .dropdown-menu-animation.show {
                height: auto !important;
                min-height: 150px !important
            }
            

        }
        .container-fluid{
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>

<body class="about-us">
    
    <!-- Navbar Transparent -->


   @include('web.inc.nav_bar')


    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark" style="padding-top: 80px;">
        <div class="page-header min-vh-90 d-block">
            {{-- <span class="mask bg-gradient-info opacity-8"></span> --}}
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    @forelse ($slides as $index => $slide)
                        <li data-target="#demo" data-slide-to="0"
                            class="test @if ($index == 0) active @endif"></li>
                    @empty
                    @endforelse
                    {{-- <li data-target="#demo" data-slide-to="1"></li> --}}
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    @forelse ($slides as $index => $slide)
                        <div class="carousel-item @if ($index == 0) active @endif">

                            @php
                                $Agent = new Jenssegers\Agent\Agent();
                            @endphp


                            @if ($Agent->isMobile())
                                <img width="1500px" src="{{ asset('storage/' . $slide->mobile_image) }}" alt="image">
                            @else
                                <img width="1500px" src="{{ asset('storage/' . $slide->image) }}" alt="image">    
                            @endif    
                            @if ($slide->action)
                                <div class="carousel-caption d-flex justify-content-end">
                                    <a href="{{ $slide->route }}" class="btn  btn-slide">اعرف المزيد</a>
                                </div>
                            @endif
                        </div>
                    @empty
                    @endforelse


                    {{-- <div class="carousel-item">
                        <img width="1500px" src="{{ asset('img/carousal_2.png') }}" alt="image">
                    </div> --}}

                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0" style="margin-top: -20px">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 40" preserveAspectRatio="none" shaps-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3"
                            fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5"
                            fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8"
                            fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13"
                            fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->

    <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <h3 class="ar text-justify mb-3">عن وطنية</h3>
                    <p class="ps-5 ar text-justify">
                        منذ نشأتها في 2008، نجحت جمعية وطنية في أن تصبح بيت خبرة في مجال الرعاية البديلة، وأن تكون نقطة
                        مرجعية من قبل أصحاب المصلحة لما لها من خبرات عملية وعلمية، كانت وطنية أول من يتعاون مع وزارة
                        التضامن الاجتماعي لاعتماد معايير جودة الرعاية البديلة في مصر لتطبيقها في بيوت الرعاية وامتدت
                        أنشطتها لتشمل تنمية محاور الرعاية البديلة الرئيسية:
                    </p>

                </div>

                <div class="col-lg-12 text-center mt-lg-0 mt-5 pe-lg-0 pe-0">
                    <div class="row text-center">
                        <div class="col-md-4 text-center">
                            <div
                                class="p-2 text-center d-flex align-items-center justify-content-center justify-content-md-start flex-column">
                                <div class="icon icon-lg icon-shape text-center" style="">
                                    {{-- <i class="fas fa-ship opacity-10"></i> --}}
                                    <img class="img-fluid" src="{{ asset('img/home.png') }}" alt="">
                                </div>
                                <div class="description mt-2">
                                    <h5 class="mb-0 ar">
                                        بيوت الرعاية
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="p-2 text-center d-flex align-items-center flex-column">
                                <div class="icon icon-lg icon-shape text-center" style="">
                                    {{-- <i class="fas fa-ship opacity-10"></i> --}}
                                    <img class="img-fluid " src="{{ asset('img/home2.png') }}" alt="">
                                </div>
                                <div class="description mt-2 d-block">
                                    <h5 class="mb-0 ar">
                                        الرعاية البديلة
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 align-items-center ">
                            <div class="p-2 text-center d-flex align-items-center flex-column">
                                <div class="icon icon-lg icon-shape text-center" style="">
                                    {{-- <i class="fas fa-ship opacity-10"></i> --}}
                                    <img class="img-fluid" src="{{ asset('img/home3.png') }}" alt="">
                                </div>
                                <div class="description mt-2">
                                    <h5 class="mb-0 ar">
                                        الأسر البديلة
                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <section class="pt-4 pb-5 bg-gray-100" id="count-stats">
        <div class="container">
            <h3 class="ar mb-4 text-right">أثر وطنية</h3>
            <div class="d-flex flex-md-row flex-column align-items-center justify-content-around text-center ">
                <div class="mb-2 mb-md-0" style="width: 187px">
                    <img width="84px" src="{{ asset('img/52.svg') }}" alt="">
                    <h3 class="text-gradient text-info ar mt-0 mb-0" id="state1" countTo="220">0</h3>
                    <h6 class="ar">بيت رعاية</h6>
                </div>
                <div class="mb-2 mb-md-0" style="width: 187px">
                    <img width="84px" src="{{ asset('img/62.svg') }}" alt="">
                    <h3 class="text-gradient text-info ar mt-0 mb-0" id="state2" countTo="2000">0</h3>
                    <h6 class="ar">مدير ومقدم رعاية</h6>
                </div>
                <div class="mb-2 mb-md-0" style="width: 187px">
                    <img height="84px" src="{{ asset('img/22.svg') }}" alt="">
                    <h3 class="text-gradient text-info ar mt-0 mb-0" id="state3" countTo="3644">0</h3>
                    <h6 class="ar">طفل وشاب</h6>
                </div>
                <div class="mb-2 mb-md-0" style="width: 187px">
                    <img width="84px" src="{{ asset('img/62.svg') }}" alt="">
                    <h3 class="text-gradient text-info ar mt-0 mb-0" id="state4" countTo="2330000">0</h3>
                    <h6 class="ar">فرد في المجتمع تم رفع وعيهم</h6>
                </div>
                <div class="mb-2 mb-md-0" style="width: 187px">
                    <img width="84px" src="{{ asset('img/62.svg') }}" alt="">
                    <h3 class="text-gradient text-info ar mt-0 mb-0" id="state5" countTo="500">0</h3>
                    <h6 class="ar">كادر بوزارة التضامن الاجتماعي</h6>
                </div>

            </div>
        </div>
    </section>
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 px-lg-2 px-5 ">
                    <div class="card shadow-lg">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                            <div class="d-block blur-shadow-image">
                                <img src="{{ asset('img/1.jpg') }}" alt="img-blur-shadow"
                                    class="img-fluid shadow rounded-3">
                            </div>
                            <div class="colored-shadow"
                                style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);">
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="javascript:;">
                                {{-- <h5 class="mt-3">
                  Get insights on Search
                </h5> --}}
                            </a>
                            <p class="mt-1 ar text-justify">
                                خلال أكثر من 12 عاماً، نجحت جمعية وطنية في أن تصبح بيت خبرة في مجال الرعاية البديلة، وأن
                                وينظر لها كنقطة مرجعية في المعرفة وتنمية المهارات في المجال، من قبل العديد من أصحاب
                                المصلحة.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto mt-lg-0 mt-4 px-lg-2 px-4  text-center">

                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info mb-3">
                                <div class="icon icon-shape text-center mb-2">
                                    <img src="{{ asset('img/care.png') }}" alt="">
                                </div>
                                <h5 class="ar">ادعم تأهيل شاب</h5>
                                <p class="ar">تبرع لتغطية تكلفة تأهيل شاب في الشهر أو في السنة.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info mb-3">
                                <div class="icon icon-shape text-center mb-2">
                                    <img src="{{ asset('img/helping.png') }}" alt="">
                                </div>
                                <h5 class="ar">ادعم تأهيل طفل</h5>
                                <p class="ar">تبرع لتغطية تكلفة تأهيل طفل في الشهر أو في السنة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info mb-3">
                                <div class="icon icon-shape text-center mb-2">
                                    <img src="{{ asset('img/love-2.png') }}" alt="">
                                </div>
                                <h5 class="ar">ادعم تأهيل مقدم رعاية</h5>
                                <p class="ar">تبرع لتأهيل مقدم رعاية من أجل تأهيل أفضل للشباب والأطفال.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info mb-3">
                                <div class="icon icon-shape text-center mb-2">
                                    <img src="{{ asset('img/home-9.png') }}" alt="">
                                </div>
                                <h5 class="ar">تبرع عام</h5>
                                <p class="ar">إدعم مشاريع وطنية من أجل حياة كريمة لكل يتيم.</p>
                            </div>
                        </div>
                        <a href="https://wataneya.org/ar/donations" class="text-info icon-move-left ar"
                            style="font-size: 1.7em;">تبرع الآن
                            <i class="fas fa-arrow-left  me-1" style="font-size: 0.6em;"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="mt-6">
        <div class="container mb-5">
            <h3 class="ar text-right mb-3">خدماتنا</h3>

        </div>
        <div class="container-fluid ser bg-gray-100 shadow-sm">
            <div class="container">

                <div class="row">
                    <div class="py-4 col-md-7 d-flex justify-content-top flex-column">
                        <h5 class="ar text-right mb-2" style="font-weight: 600">تطوير نظم الرعاية البديلة</h5>
                        <p class="ar text-justify" style="font-weight: 300;font-size:1.2rem">
                            تعمل وطنية على تقديم الدعم لبيوت الرعاية في تعلم كيفية تطبيق معايير جودة الرعاية والتي تهتم
                            بالجوانب الإدارية والفنية والبيئية التي تحقق الأمان والاستقرار داخل المكان وتهيئ مستقبل آمن
                            لنزلاء البيت .
                        </p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center dis-rel flex-column align-items-center"
                        style="position: relative;bottom:40px">
                        <div class="text-center dis-rel" style="position: relative;bottom:40px">
                            <img height="250px" class="img-thumbnail shadow" style="height: 250px; width:337px"
                                src="{{ asset('img/ser_1.jpg') }}">
                            <div>
                                <a href="https://wataneya.org/ar/services?service_category_id=1"
                                    class="btn btn-dark btn-navy mt-3 px-4"
                                    style="font-weight: 500;background-color:#3ec1ce">اعرف المزيد</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid ser bg-gray-100 shadow-sm mt-7">
            <div class="container">

                <div class="row">
                    <div class="py-4 col-md-7 d-flex justify-content-top flex-column">
                        <h5 class="ar text-right mb-2" style="font-weight: 600">الاستشارات الفنية</h5>
                        <p class="ar text-justify" style="font-weight: 300;font-size:1.2rem">
                            تقدم جمعية وطنية خدمة الاستشارات الفنية لبيوت الرعاية، المؤسسات المعنية بالأطفال والشباب
                            فاقدي الرعاية الوالدية، والمسؤولية المجتمعية لشركات القطاع الخاص، من أجل خدمات أفضل للأطفال
                            والشباب، تضم الخدمة جميع الجوانب الفنية والإدارية حول رعاية الأطفال والشباب فاقدي الرعاية
                            الوالدية ، من قبل متخصصين بهدف تطبيق معايير جودة الرعاية البديلة و الوصول الى حياة كريمة لكل
                            يتيم.
                        </p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center dis-rel flex-column align-items-center"
                        style="position: relative;bottom:40px">
                        <div class="text-center dis-rel" style="position: relative;bottom:40px">
                            <img height="250px" class="img-thumbnail shadow" style="height: 250px; width:337px"
                                src="{{ asset('img/ser_2.jpg') }}">
                            <div>
                                <a href="https://wataneya.org/ar/services?service_category_id=2"
                                    class="btn btn-dark btn-navy mt-3 px-4"
                                    style="font-weight: 500;background-color:#3ec1ce">اعرف المزيد</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid ser bg-gray-100 shadow-sm mt-7">
            <div class="container">

                <div class="row">
                    <div class="py-4 col-md-7 d-flex justify-content-top flex-column">
                        <h5 class="ar text-right mb-2" style="font-weight: 600">برامج التعلم والتطوير</h5>
                        <p class="ar text-justify" style="font-weight: 300;font-size:1.2rem">
                            هي برامج متخصصة في بناء قدرات العاملين في مجال رعاية وحماية الأطفال والشباب فاقدي الرعاية
                            الوالدية والمتطوعين والكفلاء والأسر البديلة وكذلك شباب الأيتام.
                        </p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center dis-rel flex-column align-items-center"
                        style="position: relative;bottom:40px">
                        <div class="text-center dis-rel" style="position: relative;bottom:40px">
                            <img height="250px" class="img-thumbnail shadow" style="height: 250px; width:337px"
                                src="{{ asset('img/ser_3.jpg') }}">
                            <div>
                                <a href="https://wataneya.org/ar/services?service_category_id=3"
                                    class="btn btn-dark btn-navy mt-3 px-4"
                                    style="font-weight: 500;background-color:#3ec1ce">اعرف المزيد</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid ser bg-gray-100 shadow-sm mt-7">
            <div class="container">

                <div class="row">
                    <div class="py-4 col-md-7 d-flex justify-content-top flex-column">
                        <h5 class="ar text-right mb-2" style="font-weight: 600">الإنتاج المعرفي</h5>
                        <p class="ar text-justify" style="font-weight: 300;font-size:1.2rem">
                            هي حصيلة المعارف والخبرات المتراكمة الخاصة بوطنية متاحة للراغبين في التعمق في مجال رعاية
                            الأطفال والشباب فاقدي الرعاية الوالدية
                        </p>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center dis-rel flex-column align-items-center"
                        style="position: relative;bottom:40px">
                        <div class="text-center dis-rel" style="position: relative;bottom:40px">
                            <img height="250px" class="img-thumbnail shadow" style="height: 250px; width:337px"
                                src="{{ asset('img/ser_4.jpg') }}">
                            <div>
                                <a href="https://wataneya.org/ar/services?service_category_id=4"
                                    class="btn btn-dark btn-navy mt-3 px-4"
                                    style="font-weight: 500;background-color:#3ec1ce">اعرف المزيد</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container remove-padding mt-5">
        {{-- <div class="col-xs-12 both-title">
            <p class="yellow-line line4">أحدث الفيديوهات</p>
        </div> --}}
        <h3 class="ar text-right mb-5">أحدث الفيديوهات</h3>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-12">
                <a href="https://www.youtube.com/watch?v=eOQnj2D3Ptk" target="_blank" class="new-item">
                    <i class="ri-youtube-fill"></i>
                    <div class="img-frame">
                        <img alt="حياة بعد الـ١٨" src="https://wataneya.org/storage/448/conversions/y18-medium.jpg">
                    </div>
                    <p>حياة بعد الـ١٨</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12">
                <a href="https://www.youtube.com/watch?v=lke9wBZ6Ngk&amp;t=38s" target="_blank" class="new-item">
                    <i class="ri-youtube-fill"></i>
                    <div class="img-frame">
                        <img alt="مؤتمر سند" src="https://wataneya.org/storage/56/conversions/v2c-medium.jpg">
                    </div>
                    <p>مؤتمر سند</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <a href="https://www.youtube.com/watch?v=4xPtHmaBl3o" target="_blank" class="new-item">
                    <i class="ri-youtube-fill"></i>
                    <div class="img-frame">
                        <img alt="أنشطة وطنية" src="https://wataneya.org/storage/55/conversions/v1c-medium.jpg">
                    </div>
                    <p>أنشطة وطنية</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <a href="https://www.youtube.com/watch?v=ohsVcM3QClk" target="_blank" class="new-item">
                    <i class="ri-youtube-fill"></i>
                    <div class="img-frame">
                        <img alt="حكاية وطنية" src="https://wataneya.org/storage/69/conversions/wj-medium.jpg">
                    </div>
                    <p>حكاية وطنية</p>
                </a>
            </div>
        </div>

    </div>
    <div class="container remove-padding mt-5">
        {{-- <div class="col-xs-12 both-title">
          <p class="yellow-line line4">أحدث الفيديوهات</p>
      </div> --}}
        <h3 class="ar text-right mb-5">أحدث الأخبار</h3>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://wataneya.org/ar/news/nahla-el-nimer-s-story-wins-the-american-telly-awards-gold-award"
                    class="col-xs-12 remove-padding news-item" style="padding: 10px;width:100%">
                    <div class="img-frame">
                        <img alt="من التمييز إلى التميز -قصة  نهلة النمر تحصد الجائزة الذهبية &quot;Telly Awards&quot; الأمريكية"
                            src="https://wataneya.org/storage/555/conversions/Screenshot-(264)-medium.jpg">
                    </div>
                    <div class="col-xs-12 news">
                        <p>من التمييز إلى التميز -قصة نهلة النمر تحصد الجائزة الذهبية &quot;Telly Awards&quot; الأمريكية
                        </p>
                    </div>
                </a>
                <style>
                    .news p {
                        margin-bottom: 10px !important;
                        padding-top: 0px !important;
                        height: 70px !important;
                        display: grid;
                        overflow: hidden !important;
                        font-size: 14px !important;
                        text-align: center !important;
                        align-items: center;
                    }
                </style>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://wataneya.org/ar/news/wataneya-qualifies-orphan-youth-for-employment"
                    class="col-xs-12 remove-padding news-item" style="padding: 10px;width:100%">
                    <div class="img-frame">
                        <img alt="نعمل على تنمية مهارات الشباب لسوق العمل"
                            src="https://wataneya.org/storage/553/conversions/1-medium.jpg">
                    </div>
                    <div class="col-xs-12 news">
                        <p>نعمل على تنمية مهارات الشباب لسوق العمل</p>
                    </div>
                </a>

                <style>
                    .news p {
                        margin-bottom: 10px !important;
                        padding-top: 0px !important;
                        height: 70px !important;
                        display: grid;
                        overflow: hidden !important;
                        font-size: 14px !important;
                        text-align: center !important;
                        align-items: center;
                    }
                </style>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://wataneya.org/ar/news/building-the-capacity-of-wataneya-team"
                    class="col-xs-12 remove-padding news-item" style="padding: 10px;width:100%">
                    <div class="img-frame">
                        <img alt="رفع قدرات فريق عمل وطنية"
                            src="https://wataneya.org/storage/551/conversions/278569461_5431465906930135_8682515887320277676_n-medium.jpg">
                    </div>
                    <div class="col-xs-12 news">
                        <p>رفع قدرات فريق عمل وطنية</p>
                    </div>
                </a>

                <style>
                    .news p {
                        margin-bottom: 10px !important;
                        padding-top: 0px !important;
                        height: 70px !important;
                        display: grid;
                        overflow: hidden !important;
                        font-size: 14px !important;
                        text-align: center !important;
                        align-items: center;
                    }
                </style>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://wataneya.org/ar/news/first-lady-honors-mrs-azza-abdel-hamid"
                    class="col-xs-12 remove-padding news-item" style="padding: 10px; width:100%;">
                    <div class="img-frame">
                        <img alt="تكريم أ. عزة عبد الحميد من السيدة الأولى في مصر"
                            src="https://wataneya.org/storage/522/conversions/275563573_5319139491496111_6571968865697772131_n-medium.jpg">
                    </div>
                    <div class="col-xs-12 news">
                        <p>تكريم أ. عزة عبد الحميد من السيدة الأولى في مصر</p>
                    </div>
                </a>

                <style>
                    .news p {
                        margin-bottom: 10px !important;
                        padding-top: 0px !important;
                        height: 70px !important;
                        display: grid;
                        overflow: hidden !important;
                        font-size: 14px !important;
                        text-align: center !important;
                        align-items: center;
                    }
                </style>
            </div>
        </div>

    </div>







    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <section class="mt-5 pt-5 pb-4" style="background-color: var(--green-color);">
        <div class="container text-right">
            <div class="row">
                <div class="col-md-6 m-auto d-flex justify-content-center flex-column">
                    <h4 class="mb-3 text-white">للاشتراك في النشرة الدورية لجمعية وطنية</h4>
                    <form action="{{ route('newsletter.store_user') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control mb-sm-0"
                                        placeholder="البريد الإلكتروني">
                                </div>
                            </div>
                            <div class="col-4 pe-0">
                                <button type="submit"
                                    class="btn bg-white mb-0 h-100 position-relative z-index-2">اشتراك</button>
                            </div>
                        </div>
                    </form>
                    <h4 class="mb-3 mt-5 text-white">تابعنا على شبكات التواصل الاجتماعي</h4>
                    <div class="row footer-main pt-0">
                        <ul class="d-flex justify-content-start">
                            <li>
                                <a href="https://www.facebook.com/wataneya/" target="_blank" title="تطبيق الفيس بوك">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/WataneyaSociety" target="_blank" title="تطبيق التويتر">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/wataneyasociety/" target="_blank"
                                    title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank"
                                    title="لينكد إن">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-5 me-auto">
                    <div class="position-relative">
                        <a target="_blank"
                            href="https://google.com/maps/search/Wataneya%20Society%20(جمعية%20وطنية)/@30.086658477783203,31.328941345214844,17z?hl=en">
                            <img class="max-width-30 w-100 position-relative z-index-2 rounded"
                                src="{{ asset('img/cairo.jpg') }}" style="width: 300px !important" alt="image">
                        </a>
                    </div>
                    <ul class="support mt-3">
                        <li style="color:white;"><i class="fa-solid fa-phone fa-shake"
                                style="--fa-animation-duration: 3s;"></i> ٢٢٦٩٠٧١٩٥+ </li>
                        <li style="color:white;"><i class="fa-solid fa-mobile fa-shake"
                                style="--fa-animation-duration: 3s;"></i> ٢٠١٠٢٧٧٤٤٢٥+ </li>
                        <li style="color:white;"><i class="fa-solid fa-envelope fa-bounce"
                                style="--fa-animation-duration: 3s;"></i> Info@wataneya.org </li>
                        <li style="color:white;"><i class="fa-solid fa-map-location-dot fa-bounce"
                                style="--fa-animation-duration: 3s;"></i> 3 شارع البيروني بجوار قصر البارون - مصر
                            الجديدة - القاهرة </li>
                    </ul>
                </div>
            </div>
            <div class="text-right mr-3 mt-2">
                <p class="text-white">جميع الحقوق محفوظة لجمعية وطنية ©2022</p>
            </div>
        </div>

    </section>
    <div class="container remove-padding mb-3">
        <div class="col-xs-12 bottom-list-img">
            <h3 style="font-family: 'dli';">تعمل وطنية على تحقيق أهداف التنمية المستدامة و رؤية مصر 2030</h3>
            <div class="text-center">
                <ul class="achieve-goals-imgs">
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b1.png"></li>
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b2.png"></li>
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b3.png"></li>
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b4.png"></li>
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b5.png"></li>
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b6.png"></li>
                    <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b7.png"></li>

                </ul>
            </div>

        </div>
    </div>
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->

    <!--   Core JS Files   -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{ asset('landing/assets/js/plugins/countup.min.js') }}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{ asset('landing/assets/js/plugins/parallax.min.js') }}"></script>
    <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{ asset('landing/assets/js/soft-design-system.min.js?v=1.0.5') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/web/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/web/js/slick.min.js') }}"></script>
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
    {{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
    <script>
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
    </script>
    <script>
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
    </script>
</body>

</html>
