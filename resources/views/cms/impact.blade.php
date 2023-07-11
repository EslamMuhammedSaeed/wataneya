@extends('web.layouts.master')
@section('header_tags')
    <title>{{ __('lang.impact') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.impact') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.impact') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.impact') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection
@section('style')
    {{-- @if (app()->getLocale() == 'ar')
        <link href="{{ asset('css/ar/who_we_are.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/en/who_we_are.css') }}" rel="stylesheet">
    
    @endif --}}

    <style>
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .site-map ul li p {
            font-size: 16px;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid remove-padding cont-main">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.impact') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="project-main" style="margin-top:0 !important">



            <style>
                .project-main a {
                    background: none;
                }

                .project-main a:hover {
                    background: none;
                }

                .wataneya-Impact .container {
                    width: 1200px;
                    margin: auto;
                }

                .wataneya-Impact .container .row {
                    margin: 50px 0 50px 0;
                    display: grid;
                    grid-template-columns: 30% 70%;
                    grid-auto-rows: minmax(100px, auto);
                    grid-template-areas: "col1 space""col1 col2""col1 col3""col1 col4";
                }

                .wataneya-Impact .container .row .col {
                    margin: 10px;
                    display: grid;
                    justify-items: center;
                    align-items: center;
                    background-color: #F5F5F5;
                    line-height: 35px;
                }

                .wataneya-Impact .container .row .col p {
                    font-size: 18px;
                    padding: 5px 30px 5px 30px;
                }

                .wataneya-Impact .container .row .col h1 {
                    font-size: 30px;
                    text-align: center;
                    margin: 20px;
                    color: white;
                }

                .wataneya-Impact .container .row .col2,
                .wataneya-Impact .container .row .col3,
                .wataneya-Impact .container .row .col4 {
                    border-radius: 60px !important;
                }

                .wataneya-Impact .container .row .col1 {
                    grid-area: col1;
                    border-radius: 100px 100px 100px 0px !important;
                    height: 120px;
                    margin: 0;
                }

                .wataneya-Impact .container .row .col2 {
                    grid-area: col2;
                }

                .wataneya-Impact .container .row .col3 {
                    grid-area: col3;
                }

                .wataneya-Impact .container .row .col4 {
                    grid-area: col4;
                }

                .wataneya-Impact .container .row .col p {
                    direction: rtl;
                }

                .wataneya-Impact .container .row .col1 {
                    background-color: #fdde00;
                }

                .wataneya-Impact .container .row .col1 h1 {
                    color: white !important;
                }

                .wataneya-Impact .container .row2 .col1 {
                    margin-left: 0;
                    background-color: #3ec1ce;
                }

                .wataneya-Impact .container .row2 .col1 h1 {
                    color: white !important;
                }

                .wataneya-Impact .container .row3 .col p {
                    direction: rtl;
                }

                .wataneya-Impact .container .row3 .col1 {
                    margin-right: 0px;
                    background-color: #fdde00;
                }

                .wataneya-Impact .container .row4 .col1 {
                    margin-left: 0;
                    background-color: #3ec1ce;
                }

                .wataneya-Impact .container .row4 .col1 h1 {
                    color: white !important;
                }

                .wataneya-Impact .container .row5 .col p {
                    direction: rtl;
                }

                .wataneya-Impact .container .row5 .col1 {
                    margin-right: 0px;
                    background-color: #3ec1ce;
                }

                @media (max-width: 1200px) {
                    .wataneya-Impact .container {
                        width: 991px;
                        margin: auto;
                    }
                }

                @media (max-width: 991px) {
                    .wataneya-Impact .container {
                        width: auto;
                        margin: 0 100px 0 100px;
                    }

                    .wataneya-Impact .container .row1 {
                        margin: 20px 0 20px 0;
                        grid-template-areas: "col1 col1""col2 col2""col3 col3""col4 col4";
                    }

                    .wataneya-Impact .container .row1 .col1 {
                        margin: auto auto 10px auto !important;
                        width: 200px;
                    }

                    .wataneya-Impact .container .row1 .col1 h1 {
                        font-size: 20px;
                    }

                    .wataneya-Impact .container .row1 .col {
                        margin-right: 0px;
                        margin-left: 0px;
                    }

                    .wataneya-Impact .container .row2 {
                        grid-template-areas: "col1 col1""col2 col2""col3 col3""col4 col4";
                    }

                    .wataneya-Impact .container .row2 .col1 {
                        border-radius: 100px 100px 100px 0px !important;
                        width: 200px;
                        margin: auto auto 10px auto !important;
                    }

                    .wataneya-Impact .container .row2 .col1 h1 {
                        font-size: 20px;
                    }

                    .wataneya-Impact .container .row2 .col {
                        margin-right: 0px;
                        margin-left: 0px;
                    }

                    .wataneya-Impact .container .row3 {
                        grid-template-areas: "col1 col1""col2 col2""col3 col3""col4 col4";
                    }

                    .wataneya-Impact .container .row3 .col1 {
                        margin: auto auto 10px auto !important;
                        width: 200px;
                    }

                    .wataneya-Impact .container .row3 .col1 h1 {
                        font-size: 20px;
                    }

                    .wataneya-Impact .container .row3 .col {
                        margin-right: 0px;
                        margin-left: 0px;
                    }

                    .wataneya-Impact .container .row4 {
                        grid-template-areas: "col1 col1""col2 col2""col3 col3""col4 col4""col5 col5";
                    }

                    .wataneya-Impact .container .row4 .col1 {
                        margin: auto auto 10px auto !important;
                        width: 200px;
                    }

                    .wataneya-Impact .container .row4 .col1 h1 {
                        font-size: 20px;
                    }

                    .wataneya-Impact .container .row4 .col2,
                    .wataneya-Impact .container .row4 .col3,
                    .wataneya-Impact .container .row4 .col4,
                    .wataneya-Impact .container .row4 .col5 {
                        margin-right: 0px !important;
                        margin-left: 0px !important;
                    }

                    .wataneya-Impact .container .row5 {
                        grid-template-areas: "col1 col1""col2 col2""col3 col3""col4 col4""col5 col5";
                    }

                    .wataneya-Impact .container .row5 .col1 {
                        margin: auto auto 10px auto !important;
                        border-radius: 100px 100px 0px 100px !important;
                        width: 200px;
                    }

                    .wataneya-Impact .container .row5 .col1 h1 {
                        font-size: 20px;
                    }

                    .wataneya-Impact .container .row5 .col2,
                    .wataneya-Impact .container .row5 .col3,
                    .wataneya-Impact .container .row5 .col4,
                    .wataneya-Impact .container .row5 .col5 {
                        margin-right: 0px !important;
                        margin-left: 0px !important;
                    }
                }

                @media (max-width: 780px) {
                    .wataneya-Impact .container {
                        width: auto;
                        margin: auto;
                    }
                }

                .job-s-main p {
                    color: #fff;
                    margin-top: 15px;
                    margin-bottom: 15px;
                    font-weight: bold;
                    font-size: 26px;
                }

                .job-s-main span {
                    color: #fff;
                    font-size: 16px;
                }

                .job-s-main div.col-md-2 {
                    text-align: center;
                    width: 20%;
                }
                .job-s-main h4 {
                    color: #fff;
                    margin-top: 15px !important;
                    margin-bottom: 30px !important;
                    font-weight: bold;
                    font-size: 30px;
                }
                .slick-prev, .slick-next {
                    background-color: #33c2cf !important;
                }
                .slick-prev {
                    left: 10px !important;
                }
                .slick-next {
                    right: 10px !important;
                    transform: rotate(0deg);
                    
                }
                .slick-next:before {
                    color: white !important;
                    margin: -2px -2px;
                    font-size: 35px;
                }
                .slick-prev:before {
                    color: white !important;
                    margin: -2px -2px;
                    font-size: 35px;
                }

                


            </style>
            @if (app()->getLocale() == 'en')
                <style>
                    .wataneya-Impact .container .row .col1 {
                        grid-area: col1;
                        border-radius: 100px 100px 0px 100px !important;
                        height: 170px;
                        margin: 0;
                    }
                </style>
            @endif

            <div class="container remove-padding">
                <div class="col-xs-12 site-map">
                    <ul>
                        <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                        <li><p>{{ __('lang.impact') }}</p></li>
                    </ul>
                </div>
            </div>

            <div class="wataneya-Impact" style="">
                @php
                    function language($attr)
                    {
                        return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
                    }
                    $title = language('title');
                    $content = language('content');
                    $image_src = language('image');
                    $name = language('name');
                @endphp
                <div class="container">
                    @forelse ($impact_main_output as $key => $impact_main)
                        <div class="row row5">
                            <div class="col col1">
                                <h1>{{ $key }}</h1>
                            </div>
                            @forelse ($impact_main as $index => $item)
                                <div class="col col{{ $index + 2 }}">
                                    <p>{{ $item->$content }}</p>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    @empty
                    @endforelse

                    {{-- <div class="row row1">
                    <div class="col col1">
                        <h1>تمكين بيوت الرعاية لتطبيق معايير الجودة</h1>
                    </div>
                    <div class="col col2">
                        <p>إطلاق مشروع "سند" في عام ٢٠١٤ بالتعاون مع دروسوس لتطوير نماذج نجاح من بيوت الرعاية
                            مطبقة لمعايير الجودة </p>
                    </div>
                    <div class="col col3">
                        <p>إطلاق "جائزة بيت الحلم" في عام ٢٠١٥ لبيوت رعاية الأيتام المتميزة بالتعاون مع الأمل
                            MBC و Drosos </p>
                    </div>
                    <div class="col col4">
                        <p>تطوير حقيبة تدريبية لحماية الطفل بناء على معايير الجودة داخل بيوت الرعاية عام ٢٠١٧
                        </p>
                    </div>
                </div>
                <div class="row row2">
                    <div class="col col1">
                        <h1>إعداد ودمج الشباب الأيتام</h1>
                    </div>
                    <div class="col col2">
                        <p>تقديم برنامج "فرصة" في عام ٢٠١١ كأول برنامج في مصر موجه لتنمية الشباب الأيتام وتعزيز
                            ثقتهم بأنفسهم</p>
                    </div>
                    <div class="col col3">
                        <p>إطلاق ملتقى شهري للشباب الأيتام في عام ،٢٠١٨ لتبادل الخبرات بينهم </p>
                    </div>
                    <div class="col col4">
                        <p>إطلاق "برنامج تأهيل الشباب للأ ستقلالية والاعتماد على النفس" في عام ٢٠١٩ بالتعاون مع
                            وزارة التضامن الاجتماعي و دروسوس بهدف تطوير منظومة الرعاية اللاحقة</p>
                    </div>
                </div>
                <div class="row row3">
                    <div class="col col1">
                        <h1>تطوير مهنة مقدم الرعاية</h1>
                    </div>
                    <div class="col col2">
                        <p>إنشاء وحدة متخصصة للتعلم والتطوير عام ٢٠٠٩ لتدريب العاملين في مجال الرعاية البديلة
                        </p>
                    </div>
                    <div class="col col3">
                        <p>اعتماد وطنية دوليا عام ٢٠١٢ من هيئة بيرسون لتقديم شهادة مهنية متخصصة فى مجال تعزيز
                            نمو الطفل</p>
                    </div>
                    <div class="col col4">
                        <p>الحصول على ضمان جودة بيرسون عام ٢٠١٦ لتشمل جميع العمليات التعليمية في وطنية</p>
                    </div>
                </div>
                <div class="row row4">
                    <div class="col col1">
                        <h1>كسب التأييد ورفع وعي المجتمع</h1>
                    </div>
                    <div class="col col2">
                        <p>إطلاق "ملتقى سند" عام ٢٠١٥ كأول ملتقى يهدف لخلق مساحة لبيوت الرعاية لتبادل الخبرات
                            فيما بينهم، وفي عام ٢٠٢١ تم توسيع نطاق "ملتقى سند" ليكون منصة للحوار ورفع وعي
                            المجتمع بقضية الأطفال والشباب الأيتام</p>
                    </div>
                    <div class="col col3">
                        <p>عقد مؤتمر سند الاقليمي عام ،٢٠١٩ كأول مؤتمر للرعاية البديلة يضم تجارب على المستوى
                            العربي ناقش فى دورته الأولى موضوع الرعاية اللاحقة للشباب الأيتام بعد أن يستقلوا
                            بحياتهم </p>
                    </div>
                    <div class="col col4">
                        <p>المشاركة فى تطوير مقترح قانون موحد للرعاية البديلة فى عام ٢٠٢١ تحت إشراف وزارة
                            التضامن الاجتماعي.</p>
                    </div>
                </div> --}}
                </div>
            </div>

            <div class="container-fluid remove-padding job-s-main">
                <div class="container remove-padding">
                    <div class="mb-2">
                        <h4>{{ __('lang.achievements') }}</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        @forelse ($impact_numbers as $no)
                            <div class="col-md-2 col-xs-6 col-sm-6">
                                <img alt="wataneya" src="{{ asset('storage/' . $no->image) }}">
                                <p class="counter">{{$no->number }}</p>
                                <span>{{ $no->$title }}</span>
                            </div>
                        @empty
                            
                        @endforelse
                        
                       
                    </div>
                </div>
            </div>
            <style>
                body {
                    -moz-font-family: 'wataneya-r',  !important;
                }
    
                .slide-cont-main a {
                    background: #fdde00 !important;
                    font-weight: 600;
                }
    
                .slide-cont-main a:hover {
                    background: #3ec1ce !important;
                    font-weight: 600;
                }
    
                .tab-content {
                    height: auto !important;
                }
    
                .tab-content p {
                    text-align: justify !important;
                }
    
                .about-info-main .col-md-6 {
                    margin-bottom: 45px !important;
                }
    
                .about-info-main {
                    display: contents;
                }
    
                .slick-slide {
                    float: left !important;
                    height: auto !important;
                }
    
                .slick-next {
                    left: auto !important;
                    right: 25px !important;
                }
    
                .slick-vertical .slick-slide {
                    width: auto;
                }
    
                .yellow-line {
                    position: relative;
                }
    
                .search .submit {
                    left: 5px;
                }
    
                .about-main h3 {
                    width: 125px;
    
                }
    
                .yellow-line::before {
                    content: "";
                    position: absolute;
                    width: 100%;
                    top: 65%;
                    height: 15px;
                    background-color: #fdde0078;
                    z-index: -1;
                    border-radius: 50px;
                }
    
                .title-ser h4 {
                    width: 110px;
                }
    
                .home-slider img[alt="ادعم برامج وطنية"] {
                    height: calc(100vh - 9px);
                }
    
                .book {
                    position: fixed;
                    left: 20px;
                    bottom: 100px;
                    animation: 2s ease-in-out infinite book;
                    width: 200px;
                    height: 250px;
                    z-index: 500;
                }
    
                @keyframes book {
                    0% {
                        transform: translate(0px, 0px);
                    }
    
                    50% {
                        transform: translate(0px, 3px);
                    }
    
                    100% {
                        transform: translate(0px, 0px);
                    }
    
                }
    
                .book a {
                    text-decoration: none !important;
                    color: #fff !important;
                    background-color: #3ec1ce;
                    width: 200px;
                    height: 250px;
                    display: grid;
                    justify-items: center;
                    padding-top: 10px;
                }
    
                .book img {
                    text-decoration: none !important;
                    color: #fff !important;
                    cursor: pointer;
                }
    
                .book .closeBook {
                    width: 20px;
                    height: 20px;
                    background: url('https://wataneya.org/storage/media/photos/shares/62a5e76b42187.svg') no-repeat;
                    background-size: cover;
                    position: absolute;
                    top: -20px;
                    right: -20px;
                    cursor: pointer;
                }
    
                @media (max-width: 500px) {
                    .book {
                        width: 120px;
                        height: 170px;
                        bottom: 50px;
                    }
    
                    .book a {
                        width: 120px;
                        height: 170px;
                        padding-top: 5px;
                        font-size: 10px;
    
                    }
                }
                [dir='rtl'] .slick-prev:before {
                    content: '←';
                }
                [dir='rtl'] .slick-next:before {
                    content: '→';
                }
            </style>
            <div class="container remove-padding center-slider">
                <div class="col-xs-12 both-title">
                    <p class="yellow-line line3 " style="font-size: 24px">{{ __('lang.stories') }}</p>
                </div>
                <div class="col-xs-12">
                    <div class="center" dir="ltr">
                        @forelse ($stories as $story)
                        <div>
                            <a href="{{ route('web.stories.show',$story->id) }}"><img alt="wataneya"
                                    src="{{ asset('storage/' . $story->image) }}">
                                <p>{{ $story->$name }}</p>
                            </a>
                        </div>
                        
                        @empty
                            
                        @endforelse
                        
                       
                    </div>
                </div>
                <div class="col-xs-12 both-title">
                    <a href="{{ route('web.stories.index') }}" class="mere-btn">{{ __('lang.more') }} <i class="ri-arrow-left-line"></i></a>
                </div>
            </div>

        </div>
    </div>

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
@endsection
