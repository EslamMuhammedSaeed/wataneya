<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <link href="{{ asset('assets/web/css/style-Ar.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick-themes.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/bootstrap2.css') }}" rel="stylesheet">
        <link href="https://wataneya.org/assets/web/css/donation-p.css"  rel="stylesheet">


    


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
<body>
        
    
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=763923804986112&ev=PageView&noscript=1"
/></noscript>
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
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ar_AR/sdk/facebookChat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <style>
        #whats-app{
            position:fixed;
            bottom:100px;
            right:25px;
            background:#25D366;
            width:60px;
            height:60px;
            border-radius:50px;
            z-index:10;
            cursor:pointer;
            display:grid;
            justify-items:center;
            align-items:center;
            box-shadow: 2px 2px 10px 0px #00000036;
        }
        .logo-whats-app{
            text-decoration:none;
        }
        .fa-whatsapp{
            font-size:40px;
            color:#fff;
        }

 .about-main p {
        font-size:18px !important;
        text-align:justify !important;
    }
    .searchBar{
    opacity:0;
    position:fixed;
    top:10%;
    left:50%;
    z-index:2;
    transform: translate(-50%, -50%);
    transition: 1s ease-in-out;
    width:400px;
}
@media (max-width:420px){
.searchBar{
    width:300px;
}
}
.searchBar.active{
    opacity:1;
    top:25%;
    transition: 1s ease-in-out;
}
.searchBar.active h2{
    color: #707070;
}
.search{
    margin: 0 10px;
    position: relative;
    width: 100%;
    max-width:320px;
    margin: 20px 0;
}
#search{
    margin: 0 !important;
    width: 100%;
    height: 50px;
    border-radius: 10px;
    color: #707070;
    border: 1px solid #707070;
    background: #fff;
    font-size: 18px;
    margin: 10px 0;
    padding: 0 10px;
}
.search .submit{
    position: absolute;
    top: 24px;
    height: 60%;
    padding: 0 10px;
    border-radius: 10px;
    border: none;
    background: #3ec1ce;
    color: #fff;
    display: grid;
    justify-items: center;
    align-items: center;
    z-index: 1;
}
.message {
    position: fixed;
    bottom: 50px;
    z-index: 100;
    color: #fff;
    margin:0 20px;
}
.message .fail{
    background-color: #b10000ec;
    padding: 10px;
    border-radius: 10px;
}

    </style>


    <!--<a class="logo-whats-app" href="https://api.whatsapp.com/send/?phone=201027744425&text&app_absent=0"><div id="whats-app"><i class="fa-brands fa-whatsapp"></i></div></a>-->

        <div class="message">
                    </div>
        <form method="post" action="https://wataneya.org/ar/goToResult
    " class="searchBar">
        <input type="hidden" name="_token" value="K0qFHY3o6FEKdvDfOrkx3ct1GXJllvyLIZtdxmKG">        <div class="search">
            <label for="search"></label>
            <input type="text" name="search" id="search" list="pages">
                <datalist id="pages">
                                        <option value="من نحن">
                                         <option value="تحالفات">
                                         <option value="تكريم جهود وطنية">
                                         <option value="أثر وطنية">
                                         <option value="جهات حكومية">
                                         <option value="جهات مانحة">
                                         <option value="قطاع خاص">
                                         <option value="مجتمع مدني ومبادرات">
                                         <option value="مؤسسات تعليمية">
                                         <option value="جهات إعلامية">
                                         <option value="الحملات التوعوية">
                                         <option value="انضم لفريق وطنية">
                                         <option value="سند للرعاية البديلة">
                                         <option value="مجلس الأدارة">
                                         <option value="الأخبار">
                                         <option value="فريق العمل">
                                         <option value="التقارير الفنية">
                                      </datalist>
            <button type="submit" class="submit" aria-label="Center Align">بحث</button>
        </div>
    
    </form>
    

<div class="container-fluid remove-padding head-top">
    <div class="container remove-padding">

        <div class="col-md-4 col-sm-4 head-links-main">
            <ul>
                                    <li class="hidden-xs hidden-sm">
                        <a href="https://www.facebook.com/wataneya/" target="_blank" title="تطبيق الفيس بوك">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                                    <li class="hidden-xs hidden-sm">
                        <a href="https://twitter.com/WataneyaSociety" target="_blank" title="تطبيق التويتر">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                                    <li class="hidden-xs hidden-sm">
                        <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                                    <li class="hidden-xs hidden-sm">
                        <a href="https://www.instagram.com/wataneyasociety/" target="_blank" title="Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                                    <li class="hidden-xs hidden-sm">
                        <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank" title="لينكد إن">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                                <li class="phone-link"><a href="https://wataneya.org/ar/contact-us"><i class="ri-phone-fill"></i>اتصل الآن</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-4 slogen-main hidden-xs">
            <p>حيـــــاة كر يمـــــة لكــــل يتيـــــم</p>
        </div>

        <div class="col-md-4 lan-main col-sm-4">
            <button class="searchIcon" style="
                margin: 0 10px; background:none; border:none;
            "><img src="https://wataneya.org/storage/media/photos/shares/62c059dbded47.svg" width="20px" height="20px" alt="search"></button>
                                                                            <a href="https://wataneya.org/en/donations">
                        English
                    </a>
                                    </div>
    </div>
</div>
<style>
    .tab-content .img-frame {
        padding-bottom: 42%;
    }
    .tab-content .col-md-6 {
        display: grid;
        justify-items: center;
        margin-top: 30px;
        align-items: center;
    }
    .tab-content .col-md-6.remove-padding{
        margin-top: 0px;
    }
    .col-md-8.menu-main {
         display:grid;
         justify-items:center;
    }
    .col-md-4.lan-main.col-sm-4{
        display:flex;
        justify-content:center;
    }
    @media  only screen and (max-width: 991px){
        .col-md-8.menu-main {
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #eee;
            top: 0px;
            right: 0;
            left: 0;
            z-index: 1;
            padding-top: 30px;
            display: none;
        }
        .col-md-8.menu-main.active {
            display: block;
        }
    }
    @media (max-width: 768px){
    .menu-main {
        display:grid;
        justify-items:center;
    }
    }
</style>
<style>

    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
            float: right !important;
    }
    @media (min-width: 992px){
        .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
            float: right !important;
        }
   }
    .logo-main{
        float:left !important;
    }
    .side-btns{
        float:left !important;
    }
    .menu-main{
        float:left !important;
    }

</style>
<div class="container-fluid remove-padding headr-main">
    <div class="container remove-padding">
        <div class="col-md-2 side-btns col-xs-12 col-sm-12">
            <ul>
                
                
                
                
                
                
                <li style="width:80%">
                    <a href="https://wataneya.org/ar/donations" class="solid-btn">
                        تبرع الآن
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 menu-main">
            <ul>
                <li class="dropdown" onclick="menudown(this)">
                    <a href="#" data-toggle="dropdown">عن وطنية
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <div class="dropdown-menu">
                                                    <a href="https://wataneya.org/ar/pages/who-we-are">من نحن</a>
                                                            <a href="https://wataneya.org/ar/Board-Member">مجلس الإدارة</a>
                                <a href="https://wataneya.org/ar/staff">فريق العمل</a>
                            
                                                    <a href="https://wataneya.org/ar/pages/alliances-and-partnerships">تحالفات</a>
                            
                                                    <a href="https://wataneya.org/ar/pages/awards">تكريم جهود وطنية</a>
                            
                                                    <a href="https://wataneya.org/ar/pages/the-impact">أثر وطنية</a>
                            
                                                    <a href="https://wataneya.org/ar/pages/careers">انضم لفريق وطنية</a>
                            
                                            </div>
                </li>


                <li class="dropdown" onclick="menudown(this)">
                    <a href="#" data-toggle="dropdown">خدمات وطنية
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <div class="dropdown-menu">
                                                    <a
                                href="https://wataneya.org/ar/services?service_category_id=1">تطوير نظم الرعاية البديلة</a>

                                                    <a
                                href="https://wataneya.org/ar/services?service_category_id=2">الاستشارات الفنية</a>

                                                    <a
                                href="https://wataneya.org/ar/services?service_category_id=3">برامج التعلم والتطوير</a>

                                                    <a
                                href="https://wataneya.org/ar/services?service_category_id=4">الإنتاج المعرفي</a>

                                            </div>
                </li>


                 
                                    <li class="dropdown" onclick="menudown(this)">
                        <a class="dropdown" style="text-decoration: none"
                           href="https://wataneya.org/ar/pages/sanad-for-alternative-care">سند للرعاية البديلة</a>
                    </li>
                                                <li class="dropdown" onclick="menudown(this)">
                    <a href="#" data-toggle="dropdown">المركز الإعلامي <i
                            class="ri-arrow-down-s-line"></i></a>
                    <div class="dropdown-menu">
                        <a href="https://wataneya.org/ar/news">الأخبار</a>
                                                    <a href="https://wataneya.org/ar/pages/awareness-campaigns">الحملات التوعوية</a>
                                                <a href="https://wataneya.org/ar/events">الفعاليات</a>
                        <a href="https://wataneya.org/ar/media-bags">الحقيبة الإعلامية</a>
                        <a href="https://wataneya.org/ar/technical-reports">التقارير الفنية</a>
                        <a href="https://wataneya.org/ar/periodical-newsletters">النشرة الدورية</a>
                    </div>
                </li>

                <li class="dropdown" onclick="menudown(this)">
                    <a href="#" data-toggle="dropdown">شركاء رحلتنا
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <div class="dropdown-menu">
                                                    <a href="https://wataneya.org/ar/pages/government-agencies">جهات حكومية</a>
                                                    <a href="https://wataneya.org/ar/pages/donors">جهات مانحة</a>
                                                    <a href="https://wataneya.org/ar/pages/private-sector">قطاع خاص</a>
                                                    <a href="https://wataneya.org/ar/pages/civil-society-and-initiatives">مجتمع مدني ومبادرات</a>
                                                    <a href="https://wataneya.org/ar/pages/educational-sector">مؤسسات تعليمية</a>
                                                    <a href="https://wataneya.org/ar/pages/media-parties">جهات إعلامية</a>
                                            </div>
                </li>
            </ul>

            <ul class="visible-xs visible-sm">
                                    <li class="hidden-xs hidden-sm"><a href="https://www.facebook.com/wataneya/" target="_blank"
                                                       title="تطبيق الفيس بوك"><i
                                class="fa fa-facebook"></i></a></li>
                                    <li class="hidden-xs hidden-sm"><a href="https://twitter.com/WataneyaSociety" target="_blank"
                                                       title="تطبيق التويتر"><i
                                class="fa fa-twitter"></i></a></li>
                                    <li class="hidden-xs hidden-sm"><a href="https://www.youtube.com/user/amaaner" target="_blank"
                                                       title="Youtube"><i
                                class="fa fa-youtube"></i></a></li>
                                    <li class="hidden-xs hidden-sm"><a href="https://www.instagram.com/wataneyasociety/" target="_blank"
                                                       title="Instagram"><i
                                class="fa fa-instagram"></i></a></li>
                                    <li class="hidden-xs hidden-sm"><a href="https://eg.linkedin.com/company/wataneya-society" target="_blank"
                                                       title="لينكد إن"><i
                                class="fa fa-linkedin"></i></a></li>
                            </ul>

        </div>
        <div class="col-md-2 col-xs-12 logo-main">
            <a href="https://wataneya.org/ar">
                <img src="https://wataneya.org/assets/defaults/logo/logo.png" class="img-responsive"
                     alt="وطنية" width="132" height="56">
            </a>
            <span class="menu-btn"></span>
        </div>
    </div>
</div>

<script>

     let menuBtn = document.querySelector('menu-btn')
     if(document.querySelector('menu-btn')){
        menuBtn.addEventListener('click',function(){
           document.querySelector('.col-md-8.menu-main').classList.toggle('active')
        })
     }

</script>

<div class="container-fluid remove-padding cont-main">

   <style>
       .slider-donate-main h1{
           font-size:22px;
           font-weight: 600;
       }
       .map-main h1{
            font-weight:600;
            font-size:18px;
        }
       .donate-type-item label {
            font-size: 16px;
            font-weight: bold;
            line-height: 40px;
            display: grid;
            align-items: center;
            justify-items: center;
        }
        .donate-type-item.active-donate-type label {
            color: #fff;
         }
       #AtherDonationWay .All-Donation-Ways .way button.active {
            cursor: text;
        }
   </style>
         <style>
        #whyDonation .title-donate img{
            transform:rotateY(180deg);
        }
    </style>
         <!--frist section -->
    <section id="whyDonation">
         <div class="text-donate">
            <div class="title-donate">
                <h1>ازاي تبرعك هيساعدنا</h1>
                <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893fe9e13.png" alt="faq" width="50px" height="50px">
             </div>
            <p>بتبرعك لجمعية وطنية فأنت تدعم برامجنا لتنمية وتأهيل الأطفال والشباب فاقدي الرعاية الوالدية من أجل حياة امنة وكريمة بعد الخروج من الدار، كما تدعم برامج تأهيل مقدمي الرعاية والأمهات البديلات لضمان جودة الرعاية المقدمة لهم</p>
            <a class="call-action" href="https://wataneya.org/ar/pages/the-impact">لمعرفة أثر وطنية اضغط هنا</a>
         </div>
         <div class="slider">
            <div class="slider-photos ">
                <div class="slider-photos ">
                    <div class="mySlides fade">
                        <img src="https://wataneya.org/storage/media/photos/shares/donation/622f507102bfe.jpeg" alt="img2" width="100%" height="100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="https://wataneya.org/storage/media/photos/shares/donation/622f5070d5c83.jpeg" alt="img2" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <div class="direction">
                <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893f844f0.svg" alt="left arrow" width="80" height="80" onclick="plusSlides(-1)">
                <a class="call-action" href="#Donation" class="smooth-scroll">تبرع</a>
                <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893f844f0.svg" alt="right arrow" width="80" height="80" onclick="plusSlides(1)"> 
            </div>
         </div>
    </section>
     <!--second section -->
    <section id="Fatwa">
        <div class="title-donate">
            <h1>فتوي مال الزكاة والصدقات</h1>
            <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893f9ccea.png" alt="faq" width="50px" height="50px">
         </div>
         <img src="https://wataneya.org/storage/media/photos/shares/donation/62248940635b2.png" alt="dar-elaifita" width="326" height="300">
         <p>استناداً لدار الإفتاء المصرية يجوز صرف مال الزكاة لتعليم الأطفال والشباب فاقدي الرعاية الوالدية، كما يمكن عمل صدقة جارية لتعليمهم وتعليم القائمين على رعايتهم</p>
    </section>
         <!--third section -->
        <section id="All-Fatwas">
              <div class="frist-fatwa fatwa">
                <div class="title-donate">
                    <h1>الزكاة</h1>
                 </div>
                 <p>فتوى صرف مال الزكاة لتعليم الأطفال والشباب فاقدي الرعاية الوالدية</p>
                 <a class="call-action" href="https://wataneya.org/storage/media/files/shares/Fatwa/622f3beee85ca.pdf">قراءة المزيد</a>
              </div>
              <div class="secand-fatwa fatwa">
                <div class="title-donate">
                    <h1>الصدقات</h1>
                 </div>
                 <p>فتاوى الصدقات لتأهيل الأيتام والقائمين على رعايتهم</p>
                 <a class="call-action" href="https://wataneya.org/storage/media/files/shares/Fatwa/62247ef63790e.pdf">قراءة المزيد</a>
              </div>
        </section>
         <!--fourth section -->
        <section id="Donation">
            <div class="title-donate">
                <h1>التبرع</h1>
                <img src="https://wataneya.org/storage/media/photos/shares/donation/622489401ba19.png" alt="healthcare" width="50px" height="50px">
             </div>
            
        </section>
        <!--col-md-8 col-md-offset-2 col-xs-12 col-sm-12-->
<div class="">
        <form id="donation">
            <div class="col-xs-12 slider-donate-main">
                <h1>نوع التبرع </h1>
                <div class="slick-carousel">
                    <div class="slide-content">
                        <div class="donate-type-item active-donate-type">
                            <label for="type1">تأهيل طفل</label>
                            <input type="radio" value="تأهيل طفل" name="type" id="type1">
                        </div>
                    </div>

                    <div class="slide-content">
                        <div class="donate-type-item ">
                            <label for="type2">تأهيل شاب</label>
                            <input type="radio" value="تأهيل شاب" name="type" id="type2">
                        </div>
                    </div>

                    <div class="slide-content">
                        <div class="donate-type-item">
                            <label for="type3">تأهيل مقدم رعاية</label>
                            <input type="radio" value="تأهيل مقدم رعاية" name="type" id="type3">
                        </div>
                    </div>

                    <div class="slide-content">
                        <div class="donate-type-item">
                            <label for="type4">تبرع عام</label>
                            <input type="radio" value="تبرع عام" name="type" id="type4">
                        </div>
                    </div>
                </div>
            </div>
            @csrf

            <input type="hidden" name="_token" value="K0qFHY3o6FEKdvDfOrkx3ct1GXJllvyLIZtdxmKG">            <div class="col-xs-12 remove-padding dona-form-main">

                <div class="col-xs-12 remove-padding input-main">
                    <label for="name">الاسم</label>
                    <input name="name" type="text" id="name">
                </div>

                <div class="col-xs-12 remove-padding input-main">
                    <label for="phone_number">رقم الموبايل</label>
                    <input name="phone_number" type="text" id="phone_number">
                </div>


                <div class="col-xs-12 remove-padding input-main">
                    <label for="email">البريد الالكتروني</label>
                    <input name="email" type="text" id="email">
                </div>


                <div class="col-xs-12 remove-padding input-main">
                    <label for="amount">قيمة التبرع</label>
                    <input name="amount"  type="number" id="amount">
                    <span>جنية مصري</span>
                </div>


                <div class="col-xs-12 remove-padding">
                    <button class="solid-btn">تبرع الآن</button>
                </div>

            </div>
        </form>
    </div>

    <div class="clearfix"></div>
  
         <!--fifth section -->
        <section id="AtherDonationWay">
            <div class="title-donate">
                <h1>طرق اخري للتبرع</h1>
                <img src="https://wataneya.org/storage/media/photos/shares/donation/622489401ba19.png" alt="healthcare" width="50px" height="50px">
             </div>
            <div class="All-Donation-Ways">
                 <div class="frist-way way">
                     <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893f5105c.png" alt="CIB" width="100%" height="78">
                     <p class="call-action-btn" data-number=١٠٠٠٣٥٧٦٤٤٢٣ >رقم الحساب</p>
                 </div>
                 <div class="second-way way">
                    <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893f85cf3.png" alt="united bank" width="100%" height="59">
                    <p class="call-action-btn" data-number=٢٠٣-٩٦١-٦٠٥>رقم الحساب</p>
                </div>
                <div class="third-way way">
                    <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893fb3fc4.png" alt="national bank of egypt" width="100%" height="60">
                    <p class="call-action-btn" data-number=١٣٢٣٠٧٠٧١٧٥٩٦٦٠١٠١٨>رقم الحساب</p>
                </div>
                <div class="fourth-way way">
                    <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893fd38c5.png" alt="fawry" width="100%" height="75">
                    <p class="call-action-btn" data-number=٩٠٤٠٦>كود الدفع</p>
                </div>
             </div>
            
        </section>
         <!--sixth section -->
        <section id="RecoveryMoney">
            <div class="title-donate">
                <h1>سياسة الاسترجاع</h1>
                <img src="https://wataneya.org/storage/media/photos/shares/donation/6224893fd3911.png" alt="cashback" width="50px" height="50px">
            </div>
            <div class="Money-Back">
                 <p>نحن ممتنون لتبرعك ودعمك لجمعية وطنية. تبرعك يدعم المشروعات والأنشطة المجتمعية التي تقدمها وطنية. نظرًا لأن تبرعك يتم عبر الإنترنت دون تدخل منا، برجاء مراعاة ومراجعة التفاصيل الخاصة بك وبمبلغ تبرعك بعناية لأنه قد يتم الاحتياج لقدر كبير من الوقت الإداري للتعامل مع أي خطأ وتصحيحه.</p>
                 <p>برجاء العلم ان :</p>
                <div class="conditions">
                    <span>١</span>
                    <p>لا يوجد حد ادني للتبرع.</p>
                </div>
                <div class="conditions">
                    <span>٢</span>
                    <p>عادةً ما تكون التبرعات غير قابلة للاسترداد، ولكن إذا كنت قد أدخلت مبلغ خاطئ أثناء تقديم تبرعك أو غيرت رأيك بشأن المساهمة، فيرجى الاتصال بنا.</p>
                </div>
                <a class="call-action" href="https://wataneya.org/ar/contact-us">اتصل بنا</a>
            </div>
        </section>
        <script src="https://wataneya.org/assets/web/js/donation3.js" ></script>


<style>
                    .helper_text{
                        color:#fff !important;
                        font-weight:bold;
                        direction: ltr;
                    }
                    #mce-success-response{
                        color:#fff !important;
                        font-weight:bold;   
                        direction: ltr;
                    }
                    #mce-error-response{
                        color:#fff !important;
                        font-weight:bold;  
                        direction: ltr;
                    }
                    .mce_inline_error{
                        direction: ltr;
                    }

                .bottom-list-img{
                    display:grid;
                }
                .bottom-list-img h3{
                    margin-bottom:0px !important;
                    font-size:18px !important;
                }
                .achieve-goals-imgs{
                    margin-top:20px;
                }
                .achieve-goals-imgs li{
                    margin:0px 2.5px !important;
                }
                .achieve-goals-imgs li img{
                    height:61px !important;
                }


                </style>
                
                    <style>
                        #mc_embed_signup{
                            margin-top:20px;
                            font-family:"wataneya-r" !important;
                        }

                        #mc_embed_signup .mc-field-group label{
                            float: right !important;
                        }


                    }
                    </style>

                                
                                
                    <style>

                    #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error{
                         /*display : none !important;*/
                         background:none;
                    }
                    .slick-prev {
                        left: 25px !important;
                    }
                        #mc_embed_signup h2{
                            margin:20px 10px 20px 10px !important;
                            float: inherit;
                            text-align: center;
                            font-size: 20px;
                            color:#fff;
                        }
                        .mc-field-group{
                            direction: rtl !important;
                            float: left !important;
                        }
    
                        #mc_embed_signup .brandingLogo{
                            justify-self: left;
                            grid-row: 2;
                            grid-column: 1/3;
                            margin-left:15px;
                        }
                        #mc_embed_signup .mc-field-group input {
                            border: 2px solid #FFF;
                            border-radius: 85px 63px 158px 196px;
                        }
                        #mc_embed_signup .asterisk, #mc_embed_signup .mc-field-group label   {
                            color: #fff !important;
                        }
                        #mc_embed_signup .button {
                            background: #fff;
                            color: #58585b !important;
                            width: 100px;
                            height: 40px;
                            font-size: 16px;
                            font-weight: bold;
                            padding: 0px 1px 2px 2px;
                            border-radius: 85px 63px 158px 196px;
                            margin-top:10px;
                        }
                        .container-fluid{
                            padding-right:0px !important;
                            padding-left:0px  !important;
                        }
                        #mc_embed_signup_scroll{
                            display:grid;
                            position:relative;
                        }

                        .optionalParent .foot{
                           display:grid;
                           justify-items:center;
                           grid-template-columns: 100% !important;
                    
                        }
                        @media (max-width:350px){
                            .map{
                                width:250px;
                            }
                        }
                    </style>


                <style type="text/css">
                    #mc_embed_signup{ clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    .brandingLogo a img{
                        width:100px;
                    }
                    @media (max-width:991px){
                        .footer-main .container .col-md-4{
                            width:100% ;
                        }
                        .footer-main .container .list-footer li{
                            display:grid;
                            justify-items:center;
                        }
                        .footer-main .container .list-footer{
                            margin-bottom:20px;
                        }
   
                    }

                </style>
                   

<div class="container-fluid remove-padding footer-main">
    <div class="container remove-padding">
        <div class="col-md-3 list-footer" style="display: grid;justify-items: center;">
            <ul>
                
                <li>
                    <a href="https://wataneya.org/ar/contact-us">اتصل الآن</a>
                </li>
                
                
                <li>
                    <a href="https://wataneya.org/ar/donations">تبرع لدعم برامجنا</a>
                </li>
                <li>
                    <a href="https://wataneya.org/ar/technical-reports">التقارير الفنية</a>
                </li>
                <!--<li>-->
                <!--    <a href="https://wataneya.org/ar/volunteering">تطوع معنا</a>-->
                <!--</li>-->


                                    <li>
                        <a href="https://wataneya.org/ar/pages/careers">انضم لفريق وطنية</a>
                    </li>
                
            </ul>
            <p>تابعنا على شبكات التواصل الاجتماعي </p>
            <ul style="display:flex;">
                                    <li style="margin: 0 10px;">
                        <a href="https://www.facebook.com/wataneya/" target="_blank" title="تطبيق الفيس بوك">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                                    <li style="margin: 0 10px;">
                        <a href="https://twitter.com/WataneyaSociety" target="_blank" title="تطبيق التويتر">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                                    <li style="margin: 0 10px;">
                        <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                                    <li style="margin: 0 10px;">
                        <a href="https://www.instagram.com/wataneyasociety/" target="_blank" title="Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                                    <li style="margin: 0 10px;">
                        <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank" title="لينكد إن">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                            </ul>
        </div>

        
        
        
        
        
        
        
        
        <div class="col-xs-4 col-md-4">
            
          

<div id="mc_embed_signup">
   <form action="https://wataneya.us17.list-manage.com/subscribe/post?u=25ba645f10169963cf352dcf8&amp;id=8ebbd70fee&amp;f_id=00b245e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
            <h2>للاشتراك في النشرة الدورية لجمعية وطنية</h2>
            <div class="mc-field-group">
                <label for="mce-MMERGE13">الاسم بالكامل<span class="asterisk">*</span></label>
            	<input type="text" value="" name="MMERGE13" class="required" id="mce-MMERGE13" required>
            	<span id="mce-MMERGE13-HELPERTEXT" class="helper_text"></span>
            </div>
            <div class="mc-field-group">
            	<label for="mce-EMAIL">البريد الإلكترونى<span class="asterisk">*</span>
            </label>
            	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
            	<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
            </div>
            
            <div class="mc-field-group">
                	<label for="mce-PHONE">الهاتف<span class="asterisk">*</span></label>
                	<input type="text" name="PHONE" class="required" value="" id="mce-PHONE" required>
                	<span id="mce-PHONE-HELPERTEXT" class="helper_text"></span>
            </div>

                <div class="mc-field-group">
                	<label for="mce-MMERGE7">الشركة / المؤسسة<span class="asterisk">*</span></label>
                	<input type="text" value="" name="MMERGE7" class="required" id="mce-MMERGE7" required>
                	<span id="mce-MMERGE7-HELPERTEXT" class="helper_text"></span>
                </div>
            </div>
<div hidden="true"><input type="hidden" name="tags" value="6393289"></div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px; display:none;" aria-hidden="true"><input type="text" name="b_25ba645f10169963cf352dcf8_8ebbd70fee" tabindex="-1" value=""></div>
    <div class="clear" style="display:grid; justify-items:center;"><input type="submit" value="اشتراك" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='PHONE';ftypes[4]='phone';fnames[13]='MMERGE13';ftypes[13]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

        <div class="map col-md-3">
            <a target="_blank"
               href="https://google.com/maps/search/Wataneya%20Society%20(جمعية%20وطنية)/@30.086658477783203,31.328941345214844,17z?hl=en"><img
                    src="https://wataneya.org/assets/web/img/cairo_0.jpg" alt="map" width="270" height="151">.</a>
            <!--<ul class="support">   -->
            <!--        <li style="color:white;">226907195</li>-->
            <!--    -->
            <!--        <li style="color:white;">20102774425+</li>-->
            <!--    -->

            <!--    <li style="color:white;">Info@wataneya.com</li>-->
            <!--</ul>-->
            <ul class="support">                       
                <li style="color:white;"><i class="fa-solid fa-phone fa-shake" style="--fa-animation-duration: 3s;"></i> ٢٢٦٩٠٧١٩٥+</li>
                <li style="color:white;"><i class="fa-solid fa-mobile fa-shake"  style="--fa-animation-duration: 3s;"></i> ٢٠١٠٢٧٧٤٤٤٢٥+</li>
                <li style="color:white;"><i class="fa-solid fa-envelope fa-bounce"  style="--fa-animation-duration: 3s;"></i>  Info@wataneya.org </li>
                <li style="color:white;"><i class="fa-solid fa-map-location-dot fa-bounce" style="--fa-animation-duration: 3s;"></i> 3 شارع البيروني بجوار قصر البارون - مصر الجديدة - القاهرة </li>
            </ul>
        </div>

        <div class="col-md-2">
            <br>

        </div>

        <div class="col-md-12">
            <div class="col-xs-12 remove-padding">
                
                
            </div>
        </div>

        <div class="col-xs-12 foot-bot">
            <p>جميع الحقوق محفوظة لجمعية وطنية ©2022</p>
            <ul>
                <li><a href="https://www.internetplus.biz/ar/service/websites"><img alt="internet plus"
                                                                                    src="https://wataneya.org/assets/web/img/Designed_&amp;-rtl.png" width="51" height="15"></a>
                </li>
                <li><a href="https://www.internetplus.biz/ar/systems"><img alt="internet plus"
                                                                           src="https://wataneya.org/assets/web/img/Developed_by-rtl.png" width="50" height="15"></a>
                </li>
                <li><a href="https://internetplus.biz/"><img alt="internet plus"
                                                             src="https://wataneya.org/assets/web/img/ip.png" width="87" height="15"></a></li>
            </ul>
        </div>

        <div class="col-xs-12">

        </div>
    </div>
</div>

<div class="container remove-padding">
    <div class="col-xs-12 bottom-list-img">
        <h3>تعمل وطنية على تحقيق أهداف التنمية المستدامة و رؤية مصر 2030</h3>
        <ul class="achieve-goals-imgs">
                        <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b1.png" width="61" height="61"></li>
            <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b2.png" width="61" height="61"></li>
            <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b3.png" width="61" height="61"></li>
            <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b4.png" width="61" height="61"></li>
            <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b5.png" width="61" height="61"></li>
            <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b6.png" width="61" height="61"></li>
            <li><img alt="internetPlus" src="https://wataneya.org/assets/web/img/b7.png" width="61" height="61"></li>

                    </ul>
    </div>
</div>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://wataneya.org/assets/web/js/jquery.min.js"></script>
<script src="https://wataneya.org/assets/web/js/website1.js"></script>
<script src="https://wataneya.org/assets/web/js/bootstrap.js"></script>
<script src="https://wataneya.org/assets/web/js/chosen.jquery.js"></script>
<script src="https://wataneya.org/assets/web/js/init.js"></script>
<script src="https://wataneya.org/assets/web/js/jquery-ui.js"></script>
<script src="https://wataneya.org/assets/web/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://wataneya.org/assets/web/js/jquery.countup.min.js"></script>
<script src="https://wataneya.org/assets/web/customs/js/plugin.js" ></script>


    <script src="https://cibpaynow.gateway.mastercard.com/checkout/version/61/checkout.js" data-error="errorCallback"
            data-cancel="cancelCallback"></script>
    <script type="text/javascript">

        function errorCallback(error) {

            console.log(JSON.stringify(error));

        }

        function cancelCallback() {

            console.log('Payment cancelled');

        }




    </script>

    <script>
        $("#donation").on("submit", function (e) {
            e.preventDefault()


            var form = $(this);
            var url = "{{ route('web.donations.createSession') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    console.log(data.status); // show response from the php script.

                   if(data.status){
                    Checkout.configure({

                        session: {

                            id: data.session

                        },

                        interaction: {

                            merchant: {

                                name: 'TESTCIB701357',

                                address: {

                                    line1: '200 Sample St',

                                    line2: '1234 Example Town'

                                }

                            }

                        }

                    });
                    Checkout.showPaymentPage();

                }
                }
            });


        })
    </script>
</body>
</html>
