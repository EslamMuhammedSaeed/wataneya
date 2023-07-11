
<!DOCTYPE html>
<html dir="{{app()->getLocale() == 'ar'?'rtl':'ltr'}}" lang="{{app()->getLocale()}}" >
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="is_rtl" content="{{ app()->getLocale() == 'ar' ? 'true' : 'false' }}">
        <meta http-equiv="Cache-control" content="public" max-age=31536000>
        <title>{{ isset($title)?$title:__('lang.home') }} | {{ setting('app_name', env('APP_NAME')) }}</title>
    <meta content="{{__('lang.Meta_description')}}" name="description" />
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="الرئيسية | وطنية">
    <meta itemprop="description" content="{{__('lang.Meta_description')}}">
    <meta itemprop="image" content="https://wataneya.org/storage/media/photos/shares/625d55fceb5d9.jpg">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://wataneya.org/ar">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ارئيسية | وطنية">
    <meta property="og:description" content="{{__('lang.Meta_description')}}">
    <meta property="og:image" content="https://wataneya.org/storage/media/photos/shares/625d55fceb5d9.jpg">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="الرئيسية | وطنية">
    <meta name="twitter:description" content="{{__('lang.Meta_description')}}">
    <meta name="twitter:image" content="https://wataneya.org/storage/media/photos/shares/625d55fceb5d9.jpg">


    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.3.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/928ee97a5c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/web/css/bootstrap2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/donation-p.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/web/css/style.css') }}"  rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        <link href="{{ asset('assets/web/css/bootstrap-rtl.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('assets/web/css/chosen.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/web/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/slick-themes.css') }}" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        <link href="{{ asset('assets/web/css/style-ar.css') }}"  rel="stylesheet">
        <link href="{{ asset('assets/web/css/footer-ar.css') }}"  rel="stylesheet">
        <style>
        .search .submit{
           left:4px;
        }
        </style>
    @else
        <style>
        .search .submit{
           right:4px;
        }
        </style>
        <link href="{{ asset('assets/web/css/style-en.css') }}"  rel="stylesheet">
        <link href="{{ asset('assets/web/css/footer-en.css') }}"  rel="stylesheet">

    @endif
    {{-- <link rel="icon" href="{{ setting('app_icon', default_icon(), 'small') }}" /> --}}
    <link href="{{ asset('assets/web/customs/css/style.css') }}" rel="stylesheet"/>
    @yield('css')
    @stack('styles')
</head>
<body>
    {{-- @php
        use Modules\Page\Entities\Page;
        $pages = Page::where('active' , 'yes')->get();
    @endphp     --}}
    
{{-- <noscript><img height="1" width="1" style="display:none"
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
    </script> --}}

 <!--    Your SDK code -->
    {{-- <script>
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
    </script> --}}
    
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

        {{-- <div class="message">
          @if(session()->has('errorSearch'))
            <div class="fail">
                {{session()->get('errorSearch')}}
            </div>
          @endif
          </div>
        <form method="post" action="{{ LaravelLocalization::localizeUrl(route('web.goToResult')) }}
    " class="searchBar">
        @csrf
        <div class="search">
            <label for="search"></label>
            <input type="text" name="search" id="search" list="pages">
                <datalist id="pages">
                    @foreach($pages as $page)
                    <option value="{{$page->title}}">
                     @endforeach
                 </datalist>
            <button type="submit" class="submit" aria-label="Center Align">{{ __('lang.search') }}</button>
        </div>
    
    </form> --}}
    

