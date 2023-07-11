@extends('web.layouts.master')

@section('header_tags')
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
@endsection
@section('style')
    <style>
        * {
            font-family: 'dli';
        }
        /* * { border: 1px solid red; } */
        .row{
            margin-left: 0 !important;
            margin-right: 0 !important;
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
            max-height: 261px !important;
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
            font-size: 18px;
            color: white;
            background-color: #fdde00;
            text-shadow: 1px -1px 3px rgba(0, 0, 0, 0.51) !important;

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
            .impact-numbers{
                flex-direction: column;
            }

            .job-s-main div.col-md-2 {
                width: 100% !important;
            }
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

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .page-header {
            padding-bottom: 0;
            margin: 0;
            border-bottom: none;
        }

        h3,
        .h3 {
            font-size: 28px;
        }

        p,
        .p {
            font-size: 16px;
        }

        h5,
        .h5 {
            font-size: 16px;
        }
        
    </style>
    @if (app()->getLocale() == 'en')
        <style>
            .arrow{
            margin-top: 4px;
        }
        .dropdown-menu-animation a{
            text-align: left;
        }
        </style>
    @endif
@endsection


@section('content')
    @php
       
         function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }$title = language('title');
        $content = language('content');
        $image_src = language('image');
        $description = language('description');
    @endphp
    <header class="bg-gradient-dark" style="padding-top: 20px;">
        <div class="page-header min-vh-90 d-block" style="min-height: 74vh !important;">
            {{-- <span class="mask bg-gradient-info opacity-8"></span> --}}
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    @forelse ($slides as $index => $slide)
                        <li data-target="#demo" data-slide-to="0" class="test @if ($index == 0) active @endif">
                        </li>
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
                                    <a href="{{ $slide->route }}" class="btn  btn-slide">{{ __('lang.more') }}</a>
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
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    @if (app()->getLocale() == 'ar')

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
                    <div class="row text-center mx-0">
                        <div class="col-md-4 text-center  ">
                            <div
                                class=" text-center d-flex align-items-center justify-content-center justify-content-md-start flex-column">
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
                        <div class="col-md-4 text-center px-0">
                            <div class=" text-center d-flex align-items-center flex-column">
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
                            <div class=" text-center d-flex align-items-center flex-column">
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

    @else
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <h3 class="ar text-justify mb-3">About</h3>
                    <p class="ps-5 ar text-justify">
                        Launched in 2008, Wataneya Society works on providing innovative solutions in the alternative care sector, with the aim of creating a future full of equal opportunities for children and youth without parental care. Since its establishment, Wataneya has succeeded in becoming a center of excellence in the field of alternative care, and a point of reference for key stakeholders both locally and internally. In order to uphold its commitment to the community, Wataneya takes a holistic approach in developing the main pillars of the ecosystem.
                    </p>

                </div>

                <div class="col-lg-12 text-center mt-lg-0 mt-5 pe-lg-0 pe-0">
                    <div class="row text-center mx-0">
                        <div class="col-md-4 text-center px-0">
                            <div
                                class="p-2 text-center d-flex align-items-center justify-content-center justify-content-md-start flex-column">
                                <div class="icon icon-lg icon-shape text-center" style="">
                                    {{-- <i class="fas fa-ship opacity-10"></i> --}}
                                    <img class="img-fluid" src="{{ asset('img/home.png') }}" alt="">
                                </div>
                                <div class="description mt-2">
                                    <h5 class="mb-0 ar">
                                        Alternative care homes

                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center px-0">
                            <div class="p-2 text-center d-flex align-items-center flex-column">
                                <div class="icon icon-lg icon-shape text-center" style="">
                                    {{-- <i class="fas fa-ship opacity-10"></i> --}}
                                    <img class="img-fluid " src="{{ asset('img/home2.png') }}" alt="">
                                </div>
                                <div class="description mt-2 d-block">
                                    <h5 class="mb-0 ar">
                                        After Care

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
                                        Alternative families (Kafala)

                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif

    <div class="container-fluid remove-padding job-s-main mt-4">
        <div class="container remove-padding">
            <div class="mb-2">
                <h4>{{ __('lang.achievements') }}</h4>
            </div>
            <div class="d-flex impact-numbers justify-content-between">
                @forelse ($impact_numbers as $no)
                    <div class="col-md-2 col-xs-12 col-sm-12 text-center number-item">
                        <img alt="wataneya" src="{{ asset('storage/' . $no->image) }}">
                        <p class="counter">{{ $no->number }}</p>
                        <span>{{ $no->$title }}</span>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </div>
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    <!-- Section with four info areas left & one card right with image and waves -->
    @if (app()->getLocale() == 'ar')
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
                            <a href="{{ route('web.donations.index') }}" class="text-info icon-move-left ar"
                                style="font-size: 1.7em;">تبرع الآن
                                <i class="fas fa-arrow-left  me-1" style="font-size: 0.6em;"></i>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    @else
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
                                    Your donation guarantees a quality of life for every orphan
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
                                    <h5 class="ar">Support the youth:</h5>
                                    <p class="ar">Donate to cover the educational expenses for a young adult in a month/a year</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info mb-3">
                                    <div class="icon icon-shape text-center mb-2">
                                        <img src="{{ asset('img/helping.png') }}" alt="">
                                    </div>
                                    <h5 class="ar">Support the children:</h5>
                                    <p class="ar">Donate to cover the educational expenses of a child in a month/ a year</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="info mb-3">
                                    <div class="icon icon-shape text-center mb-2">
                                        <img src="{{ asset('img/love-2.png') }}" alt="">
                                    </div>
                                    <h5 class="ar">Support the caregivers:</h5>
                                    <p class="ar">Donate to develop caregivers for a better care of children and youth</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info mb-3">
                                    <div class="icon icon-shape text-center mb-2">
                                        <img src="{{ asset('img/home-9.png') }}" alt="">
                                    </div>
                                    <h5 class="ar">General donation:</h5>
                                    <p class="ar">Join us in making sure every orphan lives the quality life they deserve. Donate now to support Wataneya’s projects.</p>
                                </div>
                            </div>
                            <a href="{{ route('web.donations.index') }}" class="text-info icon-move-left ar"
                                style="font-size: 1.7em;">Donate now
                                <i class="fas fa-arrow-left  me-1" style="font-size: 0.6em;"></i>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    @endif    

    <section class="mt-6">
        <div class="container mb-5">
            <h3 class="mb-3">{{ __('lang.our_services') }}</h3>

        </div>

        @forelse ($services as $index => $service)
            <div class="container-fluid ser bg-gray-100 shadow-sm @if($index == 0) mt-4 @else mt-7 @endif">
                <div class="container">

                    <div class="row">
                        
                        <div class="py-4 col-md-7 d-flex justify-content-top flex-column">
                            <h4 class="mb-2" style="font-weight: 600">{{ $service->$title }}</h4>
                            <p class="ar text-justify" style="font-weight: 300;font-size:16px">
                                {{ $service->$description }}
                            </p>
                        </div>
                        <div class="col-md-5 d-flex justify-content-center dis-rel flex-column align-items-center"
                            style="position: relative;bottom:40px">
                            <div class="text-center dis-rel" style="position: relative;bottom:0px">
                                <img height="250px" class="img-thumbnail shadow" style="height: 250px; width:337px"
                                    src="{{ asset('storage/' . $service->image) }}">
                                <div>
                                    <a href="https://wataneya.org/ar/services?service_category_id=3"
                                        class="btn btn-dark btn-navy mt-3 px-4"
                                        style="font-weight: 500;background-color:#3ec1ce">{{ (__('lang.more')) }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>       
        @empty
                        
        @endforelse


    </section>

    <div class="container remove-padding mt-7">
        
        <h3 class="mb-5">{{ __('lang.latest_videos') }}</h3>
        <div class="row">
            @forelse ($videos as $video)
            <div class="col-md-3 col-sm-4 col-12">
                <a href="{{ $video->link }}" target="_blank" class="new-item">
                    <i class="ri-youtube-fill"></i>
                    <div class="img-frame">
                        <img alt="{{ $video->$title }}" src="{{ asset('storage/' . $video->image) }}">
                    </div>
                    <p>{{ $video->$title }}</p>
                </a>
            </div>
            @empty
                
            @endforelse
            

        </div>

    </div>
    <div class="container remove-padding mt-6">
        {{-- <div class="col-xs-12 both-title">
      <p class="yellow-line line4">أحدث الفيديوهات</p>
  </div> --}}
        <h3 class="mb-5">{{ __('lang.latest_news') }}</h3>
        <div class="row">
            @forelse ($news as $news_item)
                @php $images = json_decode($news_item->image); @endphp
                @if ($images)
                    @php $images = array_slice($images, 0, 3); @endphp
                    @php $main_image = $images[0]; @endphp
                @endif
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="{{ route('web.news.show',$news_item->id) }}"
                        class="col-xs-12 remove-padding news-item" style="padding: 10px;width:100%">
                        <div class="img-frame">
                            <img alt=""{{ $news_item->$title }}
                            src="@if (!filter_var($main_image, FILTER_VALIDATE_URL)) {{ Voyager::image($main_image) }}@else{{ $main_image }} @endif">
                        </div>
                        <div class="col-xs-12 news">
                            <p>{{ $news_item->$title }}
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
            @empty
            @endforelse

        </div>

    </div>
@endsection
