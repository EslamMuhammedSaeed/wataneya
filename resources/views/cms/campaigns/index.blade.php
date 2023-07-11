@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.campaigns') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.campaigns') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.campaigns') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.campaigns') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection


@section('content')
    @php
        
        function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }
        $title = language('title');
        $description = language('description');
        $image_src = language('image');
    @endphp
    <style>
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .title {
            display: grid;
            justify-items: center;
        }

        .search .submit {
            top: 10px !important;
            height: 70% !important;
        }

        .yellow-line {
            position: relative;
            width: 170px
        }

        .yellow-line::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 15px;
            background-color: #fdde0078;
            z-index: -1;
            border-radius: 50px;
        }

        .team-main .news-item {
            height: auto;
        }

        a.news-item {
            border-radius: 8px;
            box-shadow: 0px 12px 32px 0px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
    </style>
    @if (app()->getLocale() == 'ar')
        <style>
            .line2 {
                width: 120px
            }

            .yellow-line::before {
                top: 65%;
                right: -10px;
            }
        </style>
    @endif
    @if (app()->getLocale() == 'en')
        <style>
            .line2 {
                width: 170px
            }

            .yellow-line::before {
                top: 50%;
                right: 10px;
            }
        </style>
    @endif
    <style>
        .site-map a {
            background: none;

        }

        .site-map a:hover {
            background: none;

        }

        .site-map ul li p {
            font-size: 16px;
        }
    </style>






    <div class="container-fluid remove-padding cont-main " style="margin-top: 80px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.campaigns') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container remove-padding project-main">
            @if (app()->getLocale() == 'ar')
                <style>
                    /* global */
                    .title {
                        text-align: center;
                        font-size: 25px !important;
                        line-height: 30px;
                        margin-top: 50px;
                    }

                    /* frist section */
                    .Awareness-Campaigns .container {
                        width: 1160px;
                        margin: auto;
                        display: grid;
                        justify-items: center;
                        align-items: center;
                        grid-template-columns: 60% 40%;
                        grid-template-areas: "text2 img2""text2 img2";
                    }

                    .Awareness-Campaigns .container h1 {
                        font-size: 30px;
                        margin-top: 50px;
                    }

                    .Awareness-Campaigns .container img {
                        grid-area: img2;
                    }

                    .Awareness-Campaigns .container .text {
                        margin: 25px;
                        grid-area: text2;

                    }

                    .Awareness-Campaigns .container .text p {
                        font-size: 18px;

                        text-align: justify;
                    }

                    /* second section */
                    .HasTag {
                        margin: 0px 0 100px 0;
                    }

                    .HasTag .slider-HasTag {
                        padding: 50px 0 100px 0;
                        width: 1160px;
                        margin: auto;
                        overflow: hidden;
                        height: 60px;
                    }

                    .HasTag .slider-HasTag .container {
                        display: flex;
                        flex-flow: wrap;
                        width: calc(240px * 11);
                        -webkit-animation: 40s an linear infinite;
                        animation: 40s an linear infinite;
                        perspective: 1000px;
                    }

                    .HasTag .slider-HasTag .container:hover {
                        -webkit-animation-play-state: paused;
                        animation-play-state: paused;
                    }

                    .HasTag .slider-HasTag .container h1 {
                        margin: 0px 20px 0 20px;
                        cursor: pointer;
                        font-size: 30px;
                        transition: 0.4s ease-in-out;
                    }

                    .HasTag .slider-HasTag .container h1:hover {
                        transform: scale(1.2);
                        transition: 0.4s ease-in-out;
                        color: #3ec1ce;
                    }

                    /* animation for slider hastagس */
                    @-webkit-keyframes an {
                        0% {
                            transform: translateX(calc(-140px * 8));
                        }

                        100% {
                            transform: translateX(calc(365px * 7));
                        }
                    }

                    @keyframes an {
                        0% {
                            transform: translateX(calc(-140px * 8));
                        }

                        100% {
                            transform: translateX(calc(365px * 7));
                        }
                    }

                    .HasTag .change {
                        margin-top: 60px !important;
                    }

                    .HasTag .container {
                        width: 1160px;
                        margin: auto;
                        display: grid;
                        grid-template-areas: "text img""text img";
                    }

                    .HasTag .container .text {
                        position: relative;
                        display: grid;
                        align-items: end;
                        justify-items: center;
                        grid-area: text;
                        grid-auto-rows: min-content;
                        align-self: center;
                    }

                    .HasTag .container .text img {
                        position: absolute;
                        z-index: -1;
                        top: 0px;
                        width: 350px;
                        height: 350px;
                        padding-left: 20px;
                        opacity: 0.3;
                    }

                    .HasTag .container .text h1 {
                        font-size: 30px;
                        font-size: 40px;
                        align-self: center;
                        margin-bottom: 80px;
                    }

                    .HasTag .container .text p {
                        font-size: 16px;

                        text-align: justify;
                        text-align: justify;
                        font-weight: bold;
                        margin-top: -60px;
                        padding: 40px 45px 0 35px;
                        align-self: start;
                    }

                    .HasTag .container .text .a-HasTag {
                        font-size: 20px;
                        cursor: pointer;
                        border-radius: 10px;
                        align-self: center;
                        width: 200px;
                        height: 40px;
                        background: #3ec1ce;
                        color: white;
                        margin-top: 40px;
                        text-decoration: none;
                        padding-top: 5px;
                    }

                    .HasTag .container .img-HasTag {
                        padding-right: 20px;
                        -webkit-animation: 10s img ease-in-out infinite;
                        animation: 10s img ease-in-out infinite;
                        width: 350px;
                        height: 350px;
                        grid-area: img;
                    }

                    .HasTag .container .img-HasTag2 {
                        display: none;
                        width: 350px;
                        height: 350px;
                        background: url("/storage/media/photos/shares/613df8ebadb29.png") no-repeat;
                        background-size: 100% 100%;
                        grid-area: img;
                        -webkit-animation: 15s slide2 ease infinite;
                        animation: 15s slide2 ease infinite;
                    }

                    /* animation for slider hastag 2  (img) */
                    @-webkit-keyframes slide2 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8ebadb29.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8eb91bf7.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8eba57d9.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    @keyframes slide2 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8ebadb29.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8eb91bf7.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8eba57d9.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    .HasTag .container .img-HasTag3 {
                        display: none;
                        width: 350px;
                        height: 350px;
                        background: url("/storage/media/photos/shares/613df8eb93392.png") no-repeat;
                        background-size: 100% 100%;
                        grid-area: img;
                        -webkit-animation: 15s slide3 ease infinite;
                        animation: 15s slide3 ease infinite;
                    }

                    /* animation for slider hastag 3  (img) */
                    @-webkit-keyframes slide3 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8eb93392.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8ec03d05.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8ec35c48.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    @keyframes slide3 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8eb93392.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8ec03d05.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8ec35c48.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    /* screen to 1200 ps maxmum */
                    @media (max-width: 1200px) {
                        .Awareness-Campaigns .container {
                            width: 990px;
                            justify-items: center;
                        }

                        .HasTag .slider-HasTag {
                            width: 990px;
                        }

                        .HasTag .container {
                            width: 990px;
                        }

                        .HasTag .container .text {
                            margin-top: 0px;
                        }

                        .HasTag .container .text img {
                            top: 0px;
                        }

                        .HasTag .container .text h1 {
                            align-self: center;
                        }

                        .HasTag .container .text p {
                            font-size: 16px;

                            text-align: justify;
                            text-align: justify;
                            font-weight: bold;
                            margin-top: -60px;
                            padding: 0 45px 0 35px;
                            align-self: start;
                        }

                        .HasTag .container .img-HasTag {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 300px;
                            height: 300px !important;
                        }
                    }

                    /* screen to 1050px maxmum */
                    @media (max-width: 1050px) {
                        .Awareness-Campaigns .container {
                            width: auto;
                            margin: 0 50px 0 50px;
                            grid-template-areas: "img2 img2""text2 text2";
                        }

                        .title {
                            font-size: 20px !important;
                        }

                        .HasTag .slider-HasTag {
                            width: auto;
                            margin: 0 50px 0 50px;
                        }

                        .HasTag .container {
                            width: auto;
                            margin: 0 50px 0 50px;
                            grid-template-areas: "img""text";
                            justify-items: center;
                        }

                        .HasTag .container .text {
                            margin-top: 100px;
                        }

                        .HasTag .container .text img {
                            top: -100px;
                        }

                        .HasTag .container .text p {
                            padding: 0px;
                            margin-top: 0px;
                        }

                        .HasTag .container .text h1 {
                            margin-top: -50px;
                        }

                        .HasTag .container .img-HasTag {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 300px;
                            height: 300px !important;
                        }
                    }

                    /* screen to 500px maxmum */

                    @media (max-width: 500px) {
                        .title {
                            font-size: 16px !important;
                        }

                        .Awareness-Campaigns .container {
                            margin: 0 20px 0 20px;
                        }

                        .Awareness-Campaigns .container .text p {
                            text-align: justify;
                        }

                        .HasTag .slider-HasTag {
                            margin: 0 20px 0 20px;
                        }

                        .HasTag .container {
                            margin: 0 20px 0 20px;
                            grid-template-areas: "img""text";
                        }

                        .Awareness-Campaigns .container img {
                            width: 250px;
                            height: 166px;
                        }

                        .HasTag .container .text img {
                            top: -50px;
                            width: 300px;
                            height: 300px;
                        }

                        .HasTag .container .img-HasTag {
                            width: 250px;
                            height: 250px !important;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 250px;
                            height: 250px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 250px;
                            height: 250px !important;
                        }
                    }

                    @media (max-width: 390px) {
                        .Awareness-Campaigns .container {
                            margin: 0 20px 0 20px;
                        }

                        .Awareness-Campaigns .container .text p {
                            text-align: justify;
                        }

                        .HasTag .slider-HasTag {
                            margin: 0 20px 0 20px;
                        }

                        .HasTag .container {
                            margin: 0 20px 0 20px;
                            grid-template-areas: "img""text";
                        }

                        .HasTag .container .text img {
                            top: -50px;
                            width: 250px;
                            height: 250px;
                        }

                        .HasTag .container .text p {
                            padding: 0px;
                        }

                        .HasTag .container .text h1 {
                            font-size: 30px;
                        }

                        .HasTag .container .img-HasTag {
                            width: 230px;
                            height: 230px !important;
                            padding-right: 0px;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 230px;
                            height: 230px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 230px;
                            height: 230px !important;
                        }
                    }

                    /* screen to 350px maxmum */
                    @media (max-width: 350px) {
                        .HasTag .container .text img {
                            top: 50px;
                        }
                    }

                    /* screen to 300px maxmum */
                    @media (max-width: 300px) {
                        .Awareness-Campaigns .container .text p {
                            text-align: center;
                        }

                        .HasTag .container .text p {
                            text-align: center;
                        }
                    }

                    @media (min-width: 1200px) {
                        .container {
                            max-width: 3204px;
                        }
                    }
                </style>
            @else
                <style>
                    .title {
                        text-align: center;
                        font-size: 25px !important;
                        line-height: 30px;
                        margin-top: 50px;
                    }

                    .Awareness-Campaigns .container {
                        width: 1160px;
                        margin: auto;
                        display: grid;
                        justify-items: center;
                        align-items: center;
                        grid-template-columns: 60% 40%;
                        grid-template-areas: "text2 img2""text2 img2";
                    }

                    .Awareness-Campaigns .container h1 {
                        font-size: 30px;
                        margin-top: 50px;
                    }

                    .Awareness-Campaigns .container img {
                        grid-area: img2;
                    }

                    .Awareness-Campaigns .container .text {
                        margin: 25px;
                        grid-area: text2;
                    }

                    .Awareness-Campaigns .container .text p {
                        font-size: 18px;

                        text-align: justify;
                    }

                    .HasTag {
                        margin: 0px 0 100px 0;
                    }

                    .HasTag .slider-HasTag {
                        padding: 50px 0 100px 0;
                        width: 1160px;
                        margin: auto;
                        overflow: hidden;
                        height: 60px;
                    }

                    .HasTag .slider-HasTag .container {
                        display: flex;
                        flex-flow: wrap;
                        width: calc(285px * 11);
                        -webkit-animation: 40s an linear infinite;
                        animation: 40s an linear infinite;
                        perspective: 1000px;
                    }

                    .HasTag .slider-HasTag .container:hover {
                        -webkit-animation-play-state: paused;
                        animation-play-state: paused;
                    }

                    .HasTag .slider-HasTag .container h1 {
                        margin: 0px 20px 0 20px;
                        cursor: pointer;
                        font-size: 30px;
                        transition: 0.4s ease-in-out;
                    }

                    .HasTag .slider-HasTag .container h1:hover {
                        transform: scale(1.2);
                        transition: 0.4s ease-in-out;
                        color: #3ec1ce;
                    }

                    @-webkit-keyframes an {
                        0% {
                            transform: translateX(calc(90px * 13));
                        }

                        100% {
                            transform: translateX(calc(-285px * 11));
                        }
                    }

                    @keyframes an {
                        0% {
                            transform: translateX(calc(90px * 13));
                        }

                        100% {
                            transform: translateX(calc(-285px * 11));
                        }
                    }

                    .HasTag .change {
                        margin-top: 60px !important;
                    }

                    .HasTag .container {
                        width: 1160px;
                        margin: auto;
                        display: grid;
                        grid-template-areas: "text img""text img";
                    }

                    .HasTag .container .text {
                        position: relative;
                        display: grid;
                        align-items: end;
                        justify-items: center;
                        grid-area: text;
                        grid-auto-rows: min-content;
                        align-self: center;
                    }

                    .HasTag .container .text img {
                        position: absolute;
                        z-index: -1;
                        top: 0px;
                        width: 350px;
                        height: 350px;
                        padding-left: 20px;
                        opacity: 0.3;
                    }

                    .HasTag .container .text h1 {
                        font-size: 30px;
                        font-size: 40px;
                        align-self: center;
                        margin-bottom: 80px;
                    }

                    .HasTag .container .text p {
                        font-size: 16px;

                        text-align: justify;
                        text-align: justify;
                        font-weight: bold;
                        margin-top: -60px;
                        padding: 40px 45px 0 35px;
                        align-self: start;
                    }

                    .HasTag .container .text .a-HasTag {
                        font-size: 20px;
                        cursor: pointer;
                        border-radius: 10px;
                        align-self: center;
                        width: 200px;
                        height: 40px;
                        background: #3ec1ce;
                        color: white;
                        margin-top: 40px;
                        text-decoration: none;
                        padding-top: 5px;
                    }

                    .HasTag .container .img-HasTag {
                        padding-right: 20px;
                        -webkit-animation: 10s img ease-in-out infinite;
                        animation: 10s img ease-in-out infinite;
                        width: 350px;
                        height: 350px;
                        grid-area: img;
                    }

                    .HasTag .container .img-HasTag2 {
                        display: none;
                        width: 350px;
                        height: 350px;
                        background: url("/storage/media/photos/shares/613df8ebadb29.png") no-repeat;
                        background-size: 100% 100%;
                        grid-area: img;
                        -webkit-animation: 15s slide2 ease infinite;
                        animation: 15s slide2 ease infinite;
                    }

                    @-webkit-keyframes slide2 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8ebadb29.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8eb91bf7.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8eba57d9.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    @keyframes slide2 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8ebadb29.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8eb91bf7.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8eba57d9.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    .HasTag .container .img-HasTag3 {
                        display: none;
                        width: 350px;
                        height: 350px;
                        background: url("/storage/media/photos/shares/613df8eb93392.png") no-repeat;
                        background-size: 100% 100%;
                        grid-area: img;
                        -webkit-animation: 15s slide3 ease infinite;
                        animation: 15s slide3 ease infinite;
                    }

                    @-webkit-keyframes slide3 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8eb93392.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8ec03d05.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8ec35c48.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    @keyframes slide3 {
                        0% {
                            background: url("/storage/media/photos/shares/613df8eb93392.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        33% {
                            background: url("/storage/media/photos/shares/613df8ec03d05.png") no-repeat;
                            background-size: 100% 100%;
                        }

                        66% {
                            background: url("/storage/media/photos/shares/613df8ec35c48.png") no-repeat;
                            background-size: 100% 100%;
                        }
                    }

                    @media (max-width: 1200px) {
                        .Awareness-Campaigns .container {
                            width: 990px;
                            justify-items: center;
                        }

                        .Awareness-Campaigns .container .text p {
                            text-align: center;
                        }

                        .HasTag .slider-HasTag {
                            width: 990px;
                        }

                        .HasTag .container {
                            width: 990px;
                        }

                        .HasTag .container .text {
                            margin-top: 0px;
                        }

                        .HasTag .container .text img {
                            top: 0px;
                        }

                        .HasTag .container .text h1 {
                            align-self: center;
                        }

                        .HasTag .container .text p {
                            font-size: 16px;

                            text-align: justify;
                            text-align: justify;
                            font-weight: bold;
                            margin-top: -60px;
                            padding: 0 45px 0 35px;
                            align-self: start;
                        }

                        .HasTag .container .img-HasTag {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 300px;
                            height: 300px !important;
                        }
                    }

                    @media (max-width: 1050px) {
                        .Awareness-Campaigns .container {
                            width: auto;
                            margin: 0 50px 0 50px;
                            grid-template-areas: "img2 img2""text2 text2";
                        }

                        .title {
                            font-size: 20px !important;
                        }

                        .Awareness-Campaigns .container .text p {
                            text-align: center;
                        }

                        .HasTag .slider-HasTag {
                            width: auto;
                            margin: 0 50px 0 50px;
                        }

                        .HasTag .container {
                            width: auto;
                            margin: 0 50px 0 50px;
                            grid-template-areas: "img""text";
                            justify-items: center;
                        }

                        .HasTag .container .text {
                            margin-top: 100px;
                        }

                        .HasTag .container .text img {
                            top: -100px;
                        }

                        .HasTag .container .text p {
                            padding: 0px;
                            margin-top: 0px;
                        }

                        .HasTag .container .text h1 {
                            margin-top: -50px;
                        }

                        .HasTag .container .img-HasTag {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 300px;
                            height: 300px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 300px;
                            height: 300px !important;
                        }
                    }

                    @media (max-width: 500px) {
                        .title {
                            font-size: 16px !important;
                        }

                        .Awareness-Campaigns .container {
                            margin: 0 20px 0 20px;
                        }

                        .Awareness-Campaigns .container .text p {
                            text-align: justify;
                        }

                        .Awareness-Campaigns .container img {
                            width: 250px;
                            height: 166px;
                        }

                        .HasTag .slider-HasTag {
                            margin: 0 20px 0 20px;
                        }

                        .HasTag .container {
                            margin: 0 20px 0 20px;
                            grid-template-areas: "img""text";
                        }

                        .HasTag .container .text img {
                            top: -50px;
                            width: 300px;
                            height: 300px;
                        }

                        .HasTag .container .img-HasTag {
                            width: 250px;
                            height: 250px !important;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 250px;
                            height: 250px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 250px;
                            height: 250px !important;
                        }
                    }

                    @media (max-width: 390px) {
                        .Awareness-Campaigns .container {
                            margin: 0 20px 0 20px;
                        }

                        .Awareness-Campaigns .container .text p {
                            text-align: justify;
                        }

                        .HasTag .slider-HasTag {
                            margin: 0 20px 0 20px;
                        }

                        .HasTag .container {
                            margin: 0 20px 0 20px;
                            grid-template-areas: "img""text";
                        }

                        .HasTag .container .text img {
                            top: -50px;
                            width: 250px;
                            height: 250px;
                        }

                        .HasTag .container .text p {
                            padding: 0px;
                        }

                        .HasTag .container .text h1 {
                            font-size: 30px;
                        }

                        .HasTag .container .img-HasTag {
                            width: 230px;
                            height: 230px !important;
                            padding-right: 0px;
                        }

                        .HasTag .container .img-HasTag2 {
                            width: 230px;
                            height: 230px !important;
                        }

                        .HasTag .container .img-HasTag3 {
                            width: 230px;
                            height: 230px !important;
                        }
                    }

                    @media (max-width: 350px) {
                        .HasTag .container .text img {
                            top: 50px;
                        }
                    }

                    @media (max-width: 300px) {
                        .Awareness-Campaigns .container .text p {
                            text-align: center;
                        }

                        .HasTag .container .text p {
                            text-align: center;
                        }
                    }
                </style>

            @endif        

            <!-- section 1 -->
            <section class="Awareness-Campaigns">
                <div class="container">
                    <img src="{{ asset('img/61e691e0b20e8.jpg') }}" alt="الحملات التوعوية" width="400" height="266">
                    <div class="text">
                        @if (app()->getLocale() == 'ar')
                            <p> لكي تكتمل منظومة رعاية الأيتام وجب علينا أن نتشارك مع المجتمع مفهوم أهمية جودة الرعاية من
                                خلال
                                معايير موحدة تطبقها المؤسسات الإيوائية لتقدم للمجتمع أطفال وشباب صالحين ومنتجين ومندمجين
                                بشكل
                                صحي وسليم، و تعمل جمعية وطنية منذ أن بدأت رحلتها على توعية المجتمع بقضية الأيتام واحتياجات
                                الطفل
                                اليتيم وأهمية دور مهنة مقدم الرعاية والأم البديلة وأيضا مسؤولية المتطوع والكفيل تجاه الأطفال
                                والشباب الأيتام أو فاقدي الرعاية الأسرية . </p>
                        @else
                            <p>
                                To have a holistic care system for orphans complete the care, we must cooperate with society
                                on the concept of the importance of quality care through unifying quality standards for care
                                homes to apply and raise healthy, productive, and socially integrated children and youth.
                                Since the beginning of its journey, Wataneya Society has been working to raise the awareness
                                of society about orphans, their needs, the important role of the care leaver and surrogate
                                mother, as well as the responsibility of the volunteer and the sponsor towards children and
                                youth without parental care.
                            </p>
                        @endif

                    </div>
                </div>
            </section>
            @if (app()->getLocale() == 'ar')
                <h1 class="title"> قدمت جمعية وطنية عدد من حملات التوعية لتسليط الضوء على قضية الأيتام منها :</h1>
            @else
                <h1 class="title">
                    Wataneya Society has launched a number of awareness campaigns to highlight the cause of children and
                    youth without parental care, including:
                </h1>
            @endif
            <!-- section 2 -->
            <section class="HasTag">
                <div class="slider-HasTag">
                    <div class="container">
                        @forelse ($campaigns as $index => $campaign)
                            <h1 class="link1" onclick="HasTag{{ $index + 1 }}();">#{{ $campaign->$title }}</h1>
                        @empty
                        @endforelse

                        {{-- <h1 class="link2" onclick="HasTag2();">#علامهم_سندهم </h1>
                        <h1 class="link3" onclick="HasTag3();">#أمانهم_أولووية</h1>
                        <h1 class="link4" onclick="HasTag4();">#مش_زي_أي_أم</h1>
                        <h1 class="link5" onclick="HasTag5();">#مايهمنيش</h1>
                        <h1 class="link6" onclick="HasTag6();">#آن_الآوان</h1>
                        <h1 class="link7" onclick="HasTag7();">#الأصول_بتقول</h1>
                        <h1 class="link8" onclick="HasTag8();">#أعظم_مهنة</h1>
                        <h1 class="link9" onclick="HasTag9();">#عشان_نكبرهم_صح</h1>
                        <h1 class="link10" onclick="HasTag10();">#كل_من_رباني_هي_أمي</h1>
                        <h1 class="link11" onclick="HasTag11();">#اعرفني_أنا_مش_بس_يتيم</h1> --}}
                    </div>
                </div>
                <div class="container change">
                    <div class="text"><img src="{{ asset('img/611bcb73e85fe.svg') }}" alt="شكل هاشتاج">
                        <h1 class="title-HasTag">#{{ $campaigns[0]->$title }}</h1>
                        <p class="p-HasTag">{{ $campaigns[0]->$description }}</p>
                        <a class="a-HasTag" href="{{ $campaigns[0]->link }}">{{ __('lang.more') }}</a>
                    </div><img class="img-HasTag" src="{{ asset('storage/' . $campaigns[0]->image) }}" alt="هاشتاج">
                    <div class="img-HasTag2"></div>
                    <div class="img-HasTag3"></div>
                </div>
            </section>

            <script>
                // when onclick to any hastag text do scroll into view this hastag
                var HasTag = document.querySelector('.HasTag');
                HasTag.addEventListener('click', function() {
                    this.scrollIntoView({
                        behavior: "smooth"
                    })
                })
                // all function to change content when change hastag

                // function HasTag1() {
                //     // hastag content
                //     let img = "/storage/media/photos/shares/613df8eb5771c.png";
                //     let pragraph =
                //         "هــي إمتداد لحملــة عالمهــم ســندهم لدعــم تعليــم وتأهيــل الاطفــال والشـباب فاقـدي الرعايـة الوالديـة والعمـل علـى جاهزيتهـم للتخـرج مـن بيـوت الرعايـة بآمـان.";
                //     let title = "#ابني_إنسان";
                //     let link = 'https://www.facebook.com/wataneya/photos/a.131466236930155/3494666423943436/';
                //     // first 3 query because some hastags have slider instead of one img so should display none all img we didnt use it
                //     // if remove it expect when you onclick on hastags some img won't show in browser 
                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     // ---------------------------------------------------------------------------------------------------------------- and ather hastags
                //     // change content of hastag
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag2() {
                //     let img = "/storage/media/photos/shares/613df8ebadb29.png";
                //     let pragraph =
                //         "تهدف الحملة إلـى رفـع وعـي المجتمـع بمساندة الأطفـال والشـباب فــي الحصــول علــى التعليــم الجيــد واكتساب مهــارات الحيــاة التــي تساعدهم علـى الأسـتقرار والأعتمـاد علـى النفـس بعـد خروجهـم مـن بيـوت الرعايـة لمواجهة الحيــاة. قامـت دار نهضة مصر للنشر توقيــع بروتوكـول تعــاون مــع وطنيــة، لدعــم الحملــة لتمكين الشــباب فاقــدي الرعايــة الوالديــة، اجتماعيــاً واقتصاديــاً مــن خــلال التعليــم.";
                //     let title = "#علامهم _سندهم ";
                //     let link = 'https://www.facebook.com/wataneya/photos/a.267187540024690/3264134100330004/';

                //     document.querySelector('.img-HasTag').style.display = "none";
                //     document.querySelector('.img-HasTag2').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag3() {
                //     let img = "/storage/media/photos/shares/613e196cc3789.png";
                //     let pragraph =
                //         "تزامنـت الحملـة مـع أزمـة كوفيـد 19 التـي اجتاحـت العالـم فـي أوائـل عـام 2020 فانطلقــت الحلمــة لطمأنــة العامليــن والمديريــن فــي بيــوت الرعايــة  ومســاندتهم علــى مواجهــة الأزمــة وتشــجيعهم علــى المواقــف الجــادة والمسـؤولة التـي اتخذوهـا الحتـواء قلـق الأطفـال والشـباب خـلال الأزمة.";
                //     let title = "#أمانهم_أولووية ";
                //     let link = 'https://www.facebook.com/wataneya/photos/a.131466236930155/3199867356756679/';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag4() {
                //     let img = "/storage/media/photos/shares/613df8eb93392.png";
                //     let pragraph =
                //         "تهــدف الحملــة إلــى تســليط الضــوء علــى الـدور النبيـل الـذي تقـوم بـه كل مـن أخـذت علــى عاتقهــا رعايــة أطفــال مــن فاقــدي الرعايــة الوالديــة فهــي قصــص نجــاح الامهـات غيـر عاديـات سـواء كانـت أم بديلة أو كفيله أو أم حاضنة.";
                //     let title = "#مش_زي_أي_أم";
                //     let link = 'https://www.facebook.com/wataneya/photos/a.131466236930155/3494666423943436/';

                //     document.querySelector('.img-HasTag').style.display = "none";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style = "display:block;height:350px;";
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag5() {
                //     let img = "/storage/media/photos/shares/613df8ec8eb3e.jpg";
                //     let pragraph =
                //         "تهدف الحملة إلى لفت النظر إلى ضرورة تقديم الفرص للشباب بناء على قدراتهم ومهاراتهم الشخصية وإمكانياتهم العلمية دون التمييز بين شاب وآخر بسبب خلفياتهم الاجتماعية وتقبل الشاب اليتيم كجزء أصيل من نسيج وبناء المجتمع.";
                //     let title = "#مايهمنيش";
                //     let link = 'https://www.facebook.com/wataneya/photos/?tab=album&album_id=2138098986266860';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag6() {
                //     let img = "/storage/media/photos/shares/613df8ec79aab.png";
                //     let pragraph =
                //         "تهدف الحملة إلى تسليط الضوء على الجوانب التي تؤثر على منظومة الرعاية البديلة في مصر مثل: \n •	ضرورة تأهيل مقدم الرعاية \n •	ضرورة تقدير واحترام مهنة الأم البديلة \n •	ضرورة تطبيق معايير جودة الرعاية داخل المؤسسات الإيوائية";
                //     let title = "#آن_الآوان";
                //     let link =
                //         'https://www.facebook.com/wataneya/photos/?tab=album&album_id=2138204549589637&__xts__[0]=68.ARCNToEoGfux4aZxAgSyOlF9enTBbR-bUXwGznzFdShZZva_xzdjr4sPQ6-Q69_ORHWWMFxMNQgTZIXRWZ7oVOWvXvb-RSESm9SgTVs-5NJHYOJyMmPO9xyatvCLrYFkJkq65jrtnHjndA2Nn8zPRXOdZKKKztz2a8HFctw-UgsvVCiiM31y6w';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;

                // }

                // function HasTag7() {
                //     let img = "/storage/media/photos/shares/613df8ec359db.jpg";
                //     let pragraph =
                //         "هدف الحملة نشر الوعي باحتياجات اليتيم النفسية وآداب التعامل معه وتقوم الفكرة ببساطة على أن يرسل أفراد المجتمع صورهم وهم يحملون رسالة موجهة للمجتمع عم الأصول والآداب في التعامل مع الأيتام باستخدام .";
                //     let title = "#الأصول_بتقول";
                //     let link = 'https://www.facebook.com/wataneya/photos/?tab=album&album_id=699088843501222';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag8() {
                //     let img = "/storage/media/photos/shares/619cbd8530281.jpg";
                //     let pragraph =
                //         "لو جالك فرصة تشتغل أعظم مهنة تقول إيه؟  \nكان هذا هو السؤال الموجه للمتابعين على صفحات التواصل الاجتماعي حين تم عرض فيلم قصير بمناسبة عيد الأم، وكان الغرض منه تسليط الضوء على مهنة الأم البديلة في المؤسسات الإيوائية والتي لا يعرف عنها الكثير من الناس فهي الشخصية التي تقوم برعاية الأطفال داخل المؤسسات الإيوائية من عمر أيام إلى 12 سنة. \n كان الهدف من إنتاج هذا الفيلم القصير لفت النظر لأهمية هذه المهنة العظيمة السامية والمجهود الكبير الذي تتحمله الأم البديلة في المؤسسة لعدد من الأطفال قد يصل في أفضل الظروف 5 إلى 6 أطفال وأحيانا أكثر، تقدم لهم الرعاية والاهتمام من جميع الجوانب كأي أم في المنزل الفرق أنها لا تحركها غريزة الأمومة الموجودة بشكل طبيعي عند الأمهات تجاه أطفالهن، لذا تستحق منا كل التقدير والإحترام . فكان لابد أن نوجه لها الشكر والتحية.";
                //     let title = "#أعظم_مهنة";
                //     let link = 'https://www.facebook.com/wataneya/videos/1444715182271914';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.title-HasTag').style = "margin:-80px 0 90px 0";
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag9() {
                //     let img = "/storage/media/photos/shares/613df8eccd150.png";
                //     let pragraph =
                //         "حملة هدفها توجيه كل المتعاملين مع الأطفال سواء بشكل عام مثل المتطوعين والكفلاء أو الأسر الطبيعية أو بشكل متخصص مثل مقدمي الرعاية في المؤسسات الإيوائية إلى التعامل مع التحديات التي يواجهونها مع الأطفال أثناء تنشئتهم في شكل نقاط بسيطة يتبعونها.";
                //     let title = "#عشان_نكبرهم_صح";
                //     let link = 'https://www.facebook.com/amaancenter/photos/?tab=album&album_id=2121925901383069';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag10() {
                //     let img = "/storage/media/photos/shares/619cc059d640f.jpg";
                //     let pragraph =
                //         "هل تعلم كل أم بديلة أنها مصدر للأمان في حياة الطفل هل تعلم أن ما تقدمه من رعاية سيعود عليها بالحب، فكرنا أن نقدم لها هذا الفيلم القصير في عيد الأم، لتعلم مدى حب الأطفال وأن المجهود الذي المبذول له كل التقدير والاحترام.";
                //     let title = "#كل_من_رباني_هي_أمي";
                //     let link = 'https://www.youtube.com/watch?v=LGI0Kc7i1C8';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }

                // function HasTag11() {
                //     let img = "/storage/media/photos/shares/613df8ec21591.jpg";
                //     let pragraph =
                //         "هي أول حملة تهدف إلى نشر المفاهيم الإيجابية عن الأيتام من خلال تفهم الاحتياجات النفسية والاجتماعية لهم التي إما أن تكون مهملة أو أن نكون قد أخطأنا في تفسيرها. كما أنها تهدف إلى تصحيح المفاهيم المغلوطة التي تكونت عبر السنين عن اليتيم من خلال مصدر المعلومات الأساسي وهو الإعلام أو المواد الفنية مثل الأفلام أو الحلقات التلفزيونية الاجتماعية. \n\n تقوم فكرة الحملة على عرض شخصيات ناجحة في العالم عاشوا فترات من حياتهم إما في دور للأيتام أو أسر بديلة مثل ستيف جوبز، أو الشاعر حافظ إبراهيم، عبد الحليم حافظ ونيلسون مانديلا.";
                //     let title = "#اعرفني_أنا_مش_بس_يتيم";
                //     let link =
                //         'https://www.facebook.com/e3rafny/?fb_dtsg_ag=AdyYhmaq0cvoBPfcnAyrerBaB04tnx3Ra22nOZOIr-ro-Q%3AAdx7IaPYzsenpvDmqFCmii9UwlBbHM0rwaYhZBrhgAatDA';

                //     document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                //     document.querySelector('.img-HasTag2').style.display = "none";
                //     document.querySelector('.img-HasTag3').style.display = "none";
                //     document.querySelector('.img-HasTag').src = img;
                //     document.querySelector('.title-HasTag').innerText = title;
                //     document.querySelector('.p-HasTag').innerText = pragraph;
                //     document.querySelector('.a-HasTag').href = link;
                // }
            </script>
            @forelse ($campaigns as $index => $campaign)
                <script>
                    function HasTag{{ $index + 1 }}() {
                        // hastag content
                        let img = '{{ asset('storage/' . str_replace('\\', '/', $campaign->image)) }}';
                        let pragraph = '{{ $campaign->$description }}';
                        let title = "#" + '{{ $campaign->$title }}';
                        let link = '{{ $campaign->link }}';
                        // first 3 query because some hastags have slider instead of one img so should display none all img we didnt use it
                        // if remove it expect when you onclick on hastags some img won't show in browser 
                        document.querySelector('.img-HasTag').style = "display:block;height:350px;";
                        document.querySelector('.img-HasTag2').style.display = "none";
                        document.querySelector('.img-HasTag3').style.display = "none";
                        // ---------------------------------------------------------------------------------------------------------------- and ather hastags
                        // change content of hastag
                        document.querySelector('.img-HasTag').src = img;
                        document.querySelector('.title-HasTag').innerText = title;
                        document.querySelector('.p-HasTag').innerText = pragraph;
                        document.querySelector('.a-HasTag').href = link;
                    }
                </script>

            @empty
            @endforelse
        </div>
    </div>
@endsection
