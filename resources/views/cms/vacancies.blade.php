@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.join_wataneya') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.join_wataneya') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.join_wataneya') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.join_wataneya') }} | {{ __('lang.wataneya') }}">
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
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .yellow-line {
            position: relative;
        }

        .line3::before {
            top: 30% !important;
        }

        .yellow-line::before {
            content: "";
            position: absolute;
            top: 65%;
            width: 100%;
            height: 15px;
            background-color: #fdde0078;
            z-index: -1;
            border-radius: 50px;
        }

        .call-action {
            padding: 7px 20px 15px 20px;
        }

        .call-action:hover {
            color: #fff !important;
        }

        /* global properties */
        section {
            margin-bottom: 50px;
        }

        .text p strong {
            font-size: 25px;
        }

        iframe {
            border: none;
        }

        button {
            outline: none;
            border: none;
            cursor: pointer;
        }

        .text .title {
            font-size: 25px;
            justify-self: start;
        }

        .text {
            display: grid;
        }

        .text1 {
            grid-row: 1;
        }

        .text2 {
            grid-row: 2;
        }

        .text p {
            font-size: 18px;
            width: 70.2%;
            height: 210px;
            overflow: hidden;
            text-align: justify;
            justify-self: end;
            margin-top: 30px;
        }

        .text button {
            width: 200px;
            height: 40px;
            background: #3EC1CE;
            border-radius: 10px;
            font-size: 20px;
            justify-self: center;
            margin: 20px 180px 0px 0px;
            color: #fff;
        }

        /* section 1 */
        .watania-story .container {
            width: 1120px;
            margin: auto;
            display: grid;
            grid-template-columns: 55% 45%;
            padding: 0px 0 50px 0px;
        }

        .watania-story .container .text {
            grid-row: 1;
        }

        .watania-video {
            justify-self: end;
            height: 350px;
            grid-row: 1;
        }

        @keyframes story {
            0% {
                margin-top: 90px;
            }

            50% {
                margin-top: 110px;
            }

            100% {
                margin-top: 90px;
            }
        }

        .story-video {
            border-radius: 20px;
            animation: story 3s ease-in-out infinite;
        }

        /* section2 */
        .our-message .container {
            width: 1120px;
            margin: auto;
            display: grid;
            grid-template-columns: 55% 45%;
        }

        .our-message .container .text p {
            width: 70%;
            text-align: justify;
            overflow: auto;
            height: auto;
            margin-bottom: 50px;
        }

        .our-message .container .text .title {
            justify-self: start;
        }

        .img-message {
            justify-self: center;
            grid-row: 2;
            grid-column: 2/3;
        }

        .img-message img {
            width: 350px;
            height: 250px;
            border-radius: 30px;
            margin-top: 40px;
        }

        /* section3 */
        .our-values .container {
            width: 1120px;
            margin: auto;
        }

        .our-values .container .text p {
            justify-self: center;
        }

        .slider-values {
            display: none;
            margin-top: 50px;
            width: 800px;
            grid-template-areas: "img p";
            align-items: center;
            justify-items: center;
            padding: 40px;
            border-radius: 20px;
        }

        .slider-values img {
            width: 200px;
            height: 200px;
            margin: 0 10px 0 10px;
            grid-area: img;
        }

        .values {
            width: 1120px;
            margin: auto;
            display: grid;
            justify-items: center;
            position: relative;
            z-index: 0;
        }

        .values-img img {
            cursor: pointer;
            transition: 0.5s ease-in-out;
            width: 200px;
            height: 200px;
        }

        .values-img img:hover {
            transform: translateY(-20px);
            transition: 0.5s ease-in-out;
        }

        .slider-values p {
            font-size: 16px;
            width: 100%;
            text-align: justify;
            grid-area: p;
        }

        /* section4 */
        .our-methodology {
            margin: 50px 0 50px 0;
        }

        .our-methodology .container {
            width: 1160px;
            margin: auto;
        }

        .our-methodology .container .text p {
            justify-self: center;
            margin-right: 200px;
            height: auto;
            width: 80%;
        }

        /* section5 */
        .watania {
            display: grid;
            justify-items: center;
            margin: 50px 0 50px 0;
            text-align: center;
        }

        .watania h1 {
            font-size: 30px;
            margin: 0 0 50px 0;
            text-align: center;
        }

        .watania .targets {
            display: flex;
            flex-flow: wrap;
            justify-content: center;
        }

        .watania .targets .target {
            display: grid;
            justify-items: center;
            padding: 10px;
        }

        .watania .targets .target h1 {
            font-size: 70px;
            background: #02bdd4;
            border-radius: 50%;
            width: 130px;
            height: 130px;
            padding: 25px 40px 25px 40px;
            color: whitesmoke;
        }

        .watania .targets .target p {
            font-size: 18px;
            text-align: center;
            background: #e4e4e4;
            width: 200px;
            padding: 70px 20px 50px 10px;
            margin-top: -115px;
            z-index: -1;
            min-height: 250px;
            display: grid;
            align-items: center;
        }

        .watania .targets .target4 h1 {
            padding: 25px 40px 25px 40px;
        }

        .future-of-watania {
            width: 1200px;
            margin: 50px auto 0px auto;
        }

        .development-img {
            display: flex;
            flex-flow: wrap;
            justify-content: center;
        }

        .development-img img {
            width: 150px;
            height: 150px;
            margin: 7px
        }

        .d2030 h1 {
            text-align: center;
            margin-top: 30px;
        }

        .d2030 .text p {
            width: 500px;
        }

        .watania2030-video {
            display: flex;
            justify-content: space-between;
            width: 1120px;
            margin-top: 100px;
        }

        .watania2030-video .text h1 {
            text-align: start;
            height: 20px;
            justify-self: center;
        }

        .watania2030-video .text p {
            margin-top: 0px;
            justify-self: center;
            width: 500px;
        }

        .watania2030-video .story-video {
            width: 500px;
            animation: future 3s ease-in-out infinite;
        }

        @media (max-width:1200px) {

            /* global */
            .text {
                display: grid;
                grid-column: 1/2;
                grid-row: 2;
            }

            .text p {
                margin-right: 0px;
                justify-self: center;
                width: 90%;
                margin-top: 20px;
            }

            .text .title {
                justify-self: center;
                margin-top: 50px;
            }

            .text button {
                margin: 30px 0px 0px 0;
            }

            /* section1  */
            .watania-story .container .text {
                grid-row: 2;
            }

            .watania-story .container {
                width: 900px;
                grid-template-columns: none;
                margin: auto;
                padding: 0px;
            }

            .watania-video {
                justify-self: center;
                margin-top: 0px;
                grid-column: 1/2;
                grid-row: 1;
            }

            .watania-video {
                display: grid;
                justify-items: center;
                margin-top: 50px;
                align-items: end;
            }

            .watania-story .container .text {
                margin-top: 20px;
            }

            /* wataneya story video animation */
            @keyframes story {
                0% {
                    margin-top: 70px;
                }

                50% {
                    margin-top: 100px;
                }

                100% {
                    margin-top: 70px;
                }
            }

            /* section2 */
            .text1 {
                grid-row: 1;
            }

            .text2 {
                grid-row: 3;
            }

            .our-message .container {
                width: 900px;
                margin: auto;
            }

            .our-message .container .text .title {
                justify-self: center;
            }

            .our-message .container .text {
                grid-column: 1/3;
                width: 900px;
                justify-self: center;
            }

            .our-message .container .text p {
                width: 90%;
                margin-right: -20px;
                text-align: center;
            }

            .img-message {
                grid-row: 2;
                grid-column: 1/3;
                justify-self: center;
            }

            .img-message img {
                margin-top: 70px;
            }

            /* section3 */
            .our-values .container {
                width: 900px;
                margin: auto;
            }

            .our-values .container .text p {
                justify-self: center;
            }

            .values {
                width: 900px;
                margin: auto;
            }

            .slider-values {
                width: 800px;
                border-radius: 20px;
            }

            .slider-values img {
                width: 200px;
                height: 200px;
            }

            .values-img img {
                width: 200px;
                height: 200px;
            }

            /* section4 */
            .our-methodology .container {
                width: 900px;
            }

            .our-methodology .container .text p {
                width: 95%;
                margin-right: 0;
            }

            .future-of-watania {
                width: 900px;
            }

            .future-of-watania .container {
                width: 900px;
            }

            .watania2030-video .text p {
                width: 900px;
            }

            .watania2030-video {
                width: auto;
                flex-flow: column-reverse wrap;
                margin: 0 10px 0 10px;
            }
        }

        @media (max-width:990px) {

            /* global */
            .text {
                width: auto;
                justify-self: center;
            }

            .text .title {
                margin-top: 0px;
            }

            .text p {
                font-size: 14px;
            }

            .text button {
                font-size: 20px
            }

            .text p strong {
                font-size: 20px;
            }

            /* section1 */
            .watania-story .container {
                width: auto;
            }

            .watania-video {
                align-items: start;
            }

            /* wataneya story video animation */
            @keyframes story {
                0% {
                    margin-top: 0px;
                }

                50% {
                    margin-top: 30px;
                }

                100% {
                    margin-top: 0px;
                }
            }

            /* section2 */
            .our-message .container {
                width: auto;
            }

            .our-message .container .text h1 {
                margin-top: 50px;
            }

            .our-message .container .text p {
                width: auto;
                margin: 0 20px;
            }

            .img-message img {
                width: 250px;
                height: 150px;
                margin-top: 20px;
            }

            .our-message .container .text {
                width: auto;
            }

            .our-values {
                display: grid;
            }

            .our-values .container {
                width: auto;
            }

            .our-values .container .text h1 {
                margin: 0px 0px 30px 0;
            }

            .our-values .container .text p {
                height: auto;
                margin: 0 0 0 0;
            }

            .our-values .container .text {
                width: auto;
            }

            /* section3 */
            .values {
                width: auto;
                margin: 0 20px 0 20px;
                margin-top: 50px;
            }

            .slider-values {
                width: 320px;
                height: auto;
                border-radius: 15px;
                margin-top: 20px;
                padding: 10px;
            }

            .slider-values img {
                display: none;
            }

            .slider-values p {
                margin: 20px 20px;
                width: auto;
                font-size: 14px;
            }

            .values-img img {
                width: 80px;
                height: 80px;
            }

            /* section4 */
            .our-methodology .container {
                width: auto;
                margin: 0 20px 0 20px;
            }

            .our-methodology .container .text p {
                width: auto;
            }

            /* section5 */
            .watania .targets {
                width: auto;
                margin: 0 20px 0 20px
            }

            .watania h1 {
                font-size: 25px;
            }

            .d2017 .targets .target p {
                min-height: 180px;
                max-width: 400px;
                padding: 80px 20px 40px 20px;
                width: auto;
            }

            .watania .targets .target p {
                font-size: 14px;
            }

            .development-img img {
                width: 100px;
                height: 100px;
                margin: 10px
            }

            .watania2030-video .text p {
                width: auto;
            }

            .watania2030-video .text h1 {
                margin: 0 0 20px 0;
            }

            .future-of-watania {
                width: auto;
                margin: 0 20px 0 20px
            }

            .future-of-watania .container {
                width: auto;
            }

            .watania2030-video .story-video {
                width: 450px;
            }
        }

        @media(max-width:550px) {

            /* section1 */
            .story-video {
                width: 270px;
                height: 200px;
                margin: 10px 0px 0px 0px;
            }

            .watania-video {
                height: 230px;
            }

            /* section3 */
            .slider-values img {
                display: none;
            }

            /* section5 */
            .watania2030-video .story-video {
                width: 250px
            }
        }

        @media(max-width:372px) {

            /* section3 */
            .values .values-img .value {
                width: 60px;
                height: 60px;
            }

            .slider-values {
                padding: 5px;
                width: 250px;
            }
        }

        @media(max-width:300px) {

            /* section5 */
            .watania2030-video {
                width: 250px;
            }

            .watania2030-video .text {
                width: 250px;
                flex-basis: 0px;
            }
        }

        .project-main a {

            color: white;
            border-radius: 5px;
        }

        .project-main p {
            line-height: 26px;
            font-size: 17px;
        }

        .bottom-list-img h3 {
            
            font-size: 19px;
            margin-bottom: 11px;
        }

        .project-main a:hover {

            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid remove-padding cont-main" style="margin-top: 70px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.join_wataneya') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="project-main" style="margin-top:0 !important">



            <style>
                @media only screen and (max-width: 991px) {
                    body {
                        /* padding-bottom: 39px !important; */
                        padding-top: 0px !important;
                    }
                }

                .site-map {
                    position: absolute;
                    z-index: 6;
                }

                .site-map li p {
                    color: #fdde00 !important;
                }

                .site-map li a {
                    color: #fff !important;
                }

                /* give all links (a element) this properties */
                .job a {
                    font-size: 18px;
                    justify-self: center;
                    box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.179);
                    transition: 0.5s ease-in-out;
                    border-radius: 85px 63px 158px 196px;
                    cursor: pointer;
                    color: white !important;
                    font-weight: 600;
                    text-decoration: none !important;
                    padding: 10px 20px;
                    display: grid;
                    justify-items: center;
                    margin-top: 0 !important;
                }

                #header {
                    display: grid;
                    background-image: url({{ asset('img/6288cc24d048a.jpg') }});
                    background-size: cover;
                    width: 100%;
                    height: 70vh;
                    background-position: center;
                    position: relative;
                }

                #header::after {
                    content: "";
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    background-color: rgba(0, 0, 0, 0.416);
                    z-index: 4;
                }

                #header::before {
                    content: "انضم الي وطنية";
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    color: #fff;
                    font-size: 6vw;
                    font-weight: 700;

                }

                #header img {
                    justify-self: center;
                }

                #jobs {
                    display: flex;
                    flex-flow: wrap;
                    justify-content: center;
                }

                #jobs .job {
                    box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.179);
                    border-radius: 20px;
                    display: grid;
                    justify-items: center;
                    align-items: center;
                    height: 220px;
                    grid-auto-rows: 35% 85% 0%;
                    position: relative;
                    background: #fff;
                    padding: 20px 10px 25px 10px;
                    width: 280px;
                    margin: 70px 40px;
                    direction: ltr;
                }

                #jobs .job::after {
                    content: "";
                    width: 50%;
                    height: 40px;
                    background: #3ec1ce;
                    position: absolute;
                    top: -3%;
                    left: 50%;
                    z-index: -1;
                    transform: translate(-50%, 0%);
                    border-radius: 85px 63px 158px 196px;
                }

                #jobs .job .icon {
                    position: absolute;
                    top: -90px;
                    right: -15%;
                    z-index: -1;
                }

                #jobs .job h1 {
                    font-size: 25px;
                    text-align: center;
                    font-weight: bold !important;
                }

                #jobs .job h1::after {
                    content: "";
                    width: 25%;
                    height: 10px;
                    border-radius: 50px;
                    background-color: #fdde00;
                    position: absolute;
                    top: 35%;
                    left: 50%;
                    transform: translate(-50%, 0%);
                    text-align: center;
                }

                #jobs .job h1:nth-child(4) {
                    color: #3ec1ce;
                }

                #jobs .job h2 {
                    font-size: 18px;
                    text-align: center;
                    font-weight: bold !important;
                }

                #jobs .job .call-to-job {

                    left: 20px;
                    background-color: #3ec1ce !important;

                }

                #jobs .job .apply-to-job {
                    right: 10px;
                    background-color: #001A31 !important;

                }

                .info {
                    font-size: 18px;
                    text-align: center;
                    color: #57585b;
                    margin: 50px 0;
                    font-weight: 600;
                }

                @media (max-width: 500px) {
                    #header img {
                        justify-self: center;
                        width: 270px;
                    }
                }

                @media (max-width: 343px) {
                    #jobs .job {
                        height: 260px;
                        width: 280px;
                        margin: 70px 10px;
                        min-height: 300px;
                    }
                }
            </style>
            <header id="header">
            </header>

            @php
                function language($attr)
                {
                    return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
                }
                $title = language('title');
                $content = language('content');
                $image_src = language('image');
            @endphp
            <p class="info">If you are interested send your CV to info@wataneya.org with job title in the subject
            </p>
            <section id="jobs">
                <!-- job6 -->
                @forelse ($vacancies as $vacancy)
                    <div class="job first-job">
                        <h1>{{ __('lang.looking_for_talents') }}</h1>
                        <h1>{{ $vacancy->$title }}</h1>
                        <div class="links">
                            <a class="call-to-job"
                                href="/storage/media/files/shares/jobs/6392421e6b2a4.pdf">{{ __('lang.more') }}</a>
                        </div>
                    </div>

                @empty
                @endforelse

                {{-- <div class="job third-job">
                <h1>Looking for Talents</h1>
                <h1>After Care Coordinator</h1>
                <div class="links">
                    <a class="call-to-job" href="/storage/media/files/shares/jobs/63c51922b0cfb.pdf">More</a>
                </div>
            </div>
            <div class="job third-job">
                <h1>Looking for Talents</h1>
                <h1>Fundraising and Partnerships Manager</h1>
                <div class="links">
                    <a class="call-to-job" href="/storage/media/files/shares/jobs/643fccac341ce.pdf">More</a>
                </div>
            </div>
            <div class="job third-job">
                <h1>Looking for Talents</h1>
                <h1>Project Manager</h1>
                <div class="links">
                    <a class="call-to-job" href="/storage/media/files/shares/jobs/643fd45b6fe7d.pdf">More</a>
                </div>
            </div> --}}
            </section>

        </div>
    </div>
@endsection
