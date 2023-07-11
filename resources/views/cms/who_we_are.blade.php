@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.Who We Are') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.Who We Are') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.Who We Are') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.Who We Are') }} | {{ __('lang.wataneya') }}">
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

        .project-main a:hover {

            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>

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
@endsection

@section('content')
    <style>
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
            .project-main{
                margin-top:80px;
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
            .project-main{
                margin-top:140px !important
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
    </style>

    <!-- section1 -->
    @php
        function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }
        $title = language('title');
        $content = language('content');
        $image_src = language('image');
    @endphp

    <div class="container-fluid remove-padding" style="margin-top: 70px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ $sections[0]->$title }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="project-main" >




        
        <section class="watania-story">
            <div class="container">
                <div class="text">
                    <h1 class="title yellow-line line1">{{ $sections[0]->$title }}</h1>
                    <p class="text-justify">
                        {{ $sections[0]->$content }}
                    </p>
                    <button class="full-text">{{ __('lang.more') }}</button>
                </div>
                <div class="watania-video">
                    <iframe class="story-video" src="https://www.youtube.com/embed/ohsVcM3QClk" width="450"
                        height="300" name="wataneya" title="wataneya"></iframe>
                </div>
            </div>
        </section>
        <!-- section2 -->
        <section class="our-message">
            <div class="container">
                <div class="text text1">
                    <h1 class="title yellow-line line2">{{ $sections[1]->$title }}</h1>
                    <p>{{ $sections[1]->$content }}</p>
                </div>
                <div class="text text2">
                    <h1 class="title yellow-line line3">{{ $sections[2]->$title }}</h1>
                    <p>{{ $sections[2]->$content }}</p>
                </div>
                <div class="img-message">
                    <img src="{{ asset('storage/' . $sections[2]->image) }}" alt="رسالتنا" loading="lazy">
                </div>
            </div>
        </section>
        <!-- section3 -->
        <section class="our-values">
            <div class="container">
                <div class="text">
                    <h1 class="title yellow-line line4">{{ $sections[3]->$title }} </h1>
                    <p>{{ $sections[3]->$content }}</p>
                </div>
            </div>
            <div class="values">

                <div class="values-img">
                    @forelse(App\Models\WhoWeArePage::where('title','values_images')->get() as $image)
                        @php
                            $img = str_replace('\\', '/', $image->$image_src);
                        @endphp
                        <img class="value" src="{{ asset('storage/' . $image->$image_src) }}" loading="lazy"
                            onclick="changeImg('{{ asset('storage/' . $img) }}','#3EC1CE','{{ $image->$content }}')">
                    @empty
                    @endforelse
                    {{-- <img class="value" src="/storage/media/photos/shares/6141b508df0e7.png"
                        alt="التفكير الابتكاري" loading="lazy"
                        onclick="changeImg('/storage/media/photos/shares/6141b508df0e7.png','#179588','نسعى لتقديم حلول مبتكرة وتفعيل وتطبيق الأفكار الجديدة لتعميق الأثر الناتج عن تحقيق أهدافنا ')">
                    <img class="value" src="/storage/media/photos/shares/6141b508eaaa1.png"
                        alt="التواصل البناء" loading="lazy"
                        onclick="changeImg('/storage/media/photos/shares/6141b508eaaa1.png','#ED9A4B','نتعاون ونعمل نحو أهداف وقيم مشتركة، من خلال تواصلنا بوضوح وشفافية لبناء علاقات إيجابية مع الآخرين والمحافظة عليها ويكون أساسها الثقة والاحترام المتبادل')">
                    <img class="value" src="/storage/media/photos/shares/6141b508df131.png"
                        alt="المسؤولية و الملكية" loading="lazy"
                        onclick="changeImg('/storage/media/photos/shares/6141b508df131.png','#FCDF05','نتحمل المسؤولية تجاه المهام والنتائج عن طريق بذل أفضل ما لدينا ومتابعة العمل بانتظام إلى أن يتم الانتهاء منه للوصول إلى النتائج المرجوة ' )"> --}}
                </div>
                <div class="slider-values">
                    {{-- @forelse(App\Models\WhoWeArePage::where('title','values_images')->get() as $image) --}}
                    <img src="{{ asset('storage/' . $image->$image_src) }}" loading="lazy" class="change-img">
                    <p>{{ $image->$content }}</p>
                    {{-- @empty
                    @endforelse --}}

                </div>
            </div>
        </section>
        <!-- section4 -->
        <section class="our-methodology">
            <div class="container">
                <div class="text">
                    <h1 class="title yellow-line line5">{{ $sections[8]->$title }}</h1>
                    <p>{{ $sections[8]->$content }}</p>
                </div>
            </div>
        </section>
        <!-- section5 -->
        <section class="future-of-watania">
            <div class="container">
                <div class="watania d2017">
                    @php
                        function to_arabic_number($Month)
                        {
                            if (app()->getLocale() == 'ar') {
                                $Month = str_replace('1', '۱', $Month);
                                $Month = str_replace('2', '۲', $Month);
                                $Month = str_replace('3', '۳', $Month);
                                $Month = str_replace('4', '٤', $Month);
                                $Month = str_replace('5', '٥', $Month);
                                $Month = str_replace('6', '٦', $Month);
                                $Month = str_replace('7', '۷', $Month);
                                $Month = str_replace('8', '۸', $Month);
                                $Month = str_replace('9', '۹', $Month);
                                $Month = str_replace('0', '۰', $Month);
                                $Month = str_replace('January', 'يناير', $Month);
                                $Month = str_replace('February', 'فبراير', $Month);
                                $Month = str_replace('March', 'مارس', $Month);
                                $Month = str_replace('April', 'أبريل', $Month);
                                $Month = str_replace('May', 'مايو', $Month);
                                $Month = str_replace('June', 'يونيو', $Month);
                                $Month = str_replace('July', 'يليو', $Month);
                                $Month = str_replace('August', 'أغسطس', $Month);
                                $Month = str_replace('September', 'سبتمبر', $Month);
                                $Month = str_replace('October', 'أكتوبر', $Month);
                                $Month = str_replace('November', 'نوفمبر', $Month);
                                $Month = str_replace('December', 'ديسمبر', $Month);
                            }
                            return $Month;
                        }
                    @endphp
                    <h1>{{ $sections[10]->$title }}</h1>
                    <div class="targets">
                        @forelse (App\Models\WhoWeArePage::where('title','الأهداف الاستراتيجية طويلة المدى ٢٠١٧ - ٢٠٢٤')->get() as $index => $target)
                            <div class="target target{{ $index + 1 }}">
                                <h1>{{ to_arabic_number($index + 1) }}</h1>
                                <p>
                                    {{ $target->$content }} ​
                                </p>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
            <!-- part2 -->
            <div class="watania d2030">
                <h1>{{ $sections[14]->$title }}</h1>
                @if (app()->getLocale() == 'ar')
                    <div class="development-img">
                        <img src="{{ asset('img/a3.png') }}" loading="lazy">
                        <img src="{{ asset('img/a4.png') }}" loading="lazy">
                        <img src="{{ asset('img/a5.png') }}" loading="lazy">
                        <img src="{{ asset('img/a8.png') }}" loading="lazy">
                        <img src="{{ asset('img/a10.png') }}" loading="lazy">
                        <img src="{{ asset('img/a16.png') }}" loading="lazy">
                        <img src="{{ asset('img/a17.png') }}" loading="lazy">
                    </div>
                @else
                    <div class="development-img">
                        <img src="{{ asset('img/b3.png') }}" loading="lazy">
                        <img src="{{ asset('img/b4.png') }}" loading="lazy">
                        <img src="{{ asset('img/b5.png') }}" loading="lazy">
                        <img src="{{ asset('img/b8.png') }}" loading="lazy">
                        <img src="{{ asset('img/b10.png') }}" loading="lazy">
                        <img src="{{ asset('img/b16.png') }}" loading="lazy">
                        <img src="{{ asset('img/b17.png') }}" loading="lazy">
                    </div>
                @endif

                <div class="watania2030-video">
                    <div class="text">
                        <h1 class="title yellow-line line6">{{ $sections[15]->$title }}</h1>
                        <p>{{ $sections[15]->$content }}</p>
                    </div>
                    <div class="watania-video">
                        <iframe class="story-video" src="{{ $sections[15]->link_url }}" width="450" height="300"
                            loading="lazy"></iframe>
                    </div>
                </div>
                <a class="call-action" href="{{ $sections[16]->file }}">{{ $sections[16]->$title }}</a>
            </div>
        </section>

        <script>
            // remove button when on click to show all text in wataneya story section
            var fullText = document.querySelector('.full-text');
            fullText.addEventListener('click', function() {
                document.querySelector('.watania-story .container .text P').style.height = "auto";
                document.querySelector('.full-text').style.display = "none";
            });

            // remove text and imgs when dbclick on window in our values section
            window.addEventListener('dblclick', () => document.querySelector('.slider-values').style = "display:none;");
            // change text and img when click on values meun
            function changeImg(anyImg, anyColor, anyText) {
                document.querySelector(".change-img").src = anyImg;
                document.querySelector('.slider-values').style = `display: grid;border:2px dotted ${anyColor}`;
                document.querySelector('.slider-values p').innerText = anyText;
            };
        </script>

    </div>
    </div>

    <style>
        .helper_text {
            color: #fff !important;
            font-weight: bold;
            direction: ltr;
        }

        #mce-success-response {
            color: #fff !important;
            font-weight: bold;
            direction: ltr;
        }

        #mce-error-response {
            color: #fff !important;
            font-weight: bold;
            direction: ltr;
        }

        .mce_inline_error {
            direction: ltr;
        }

        .bottom-list-img {
            display: grid;
        }

        .bottom-list-img h3 {
            margin-bottom: 0px !important;
            font-size: 18px !important;
        }

        .achieve-goals-imgs {
            margin-top: 20px;
        }

        .achieve-goals-imgs li {
            margin: 0px 2.5px !important;
        }

        .achieve-goals-imgs li img {
            height: 61px !important;
        }
    </style>

    <style>
        #mc_embed_signup {
            margin-top: 20px;
            font-family: "wataneya-r" !important;
        }

        #mc_embed_signup .mc-field-group label {
            float: right !important;
        }


        }
    </style>



    <style>
        #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error {
            /*display : none !important;*/
            background: none;
        }

        .slick-prev {
            left: 25px !important;
        }

        #mc_embed_signup h2 {
            margin: 20px 10px 20px 10px !important;
            float: inherit;
            text-align: center;
            font-size: 20px;
            color: #fff;
        }

        .mc-field-group {
            direction: rtl !important;
            float: left !important;
        }

        #mc_embed_signup .brandingLogo {
            justify-self: left;
            grid-row: 2;
            grid-column: 1/3;
            margin-left: 15px;
        }

        #mc_embed_signup .mc-field-group input {
            border: 2px solid #FFF;
            border-radius: 85px 63px 158px 196px;
        }

        #mc_embed_signup .asterisk,
        #mc_embed_signup .mc-field-group label {
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
            margin-top: 10px;
        }

        .container-fluid {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        #mc_embed_signup_scroll {
            display: grid;
            position: relative;
        }

        .optionalParent .foot {
            display: grid;
            justify-items: center;
            grid-template-columns: 100% !important;

        }

        @media (max-width:350px) {
            .map {
                width: 250px;
            }
        }
    </style>


    <style type="text/css">
        #mc_embed_signup {
            clear: left;
            font: 14px Helvetica, Arial, sans-serif;
        }

        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        .brandingLogo a img {
            width: 100px;
        }

        @media (max-width:991px) {
            .footer-main .container .col-md-4 {
                width: 100%;
            }

            .footer-main .container .list-footer li {
                display: grid;
                justify-items: center;
            }

            .footer-main .container .list-footer {
                margin-bottom: 20px;
            }

        }
    </style>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/template-normalize.css">
    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/who we are.css">
    <title>Who We are</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="img/image 48.png" alt="">
            <div class="list">
                <ul>
                    <li><i class="fa-sharp fa-solid fa-chevron-down"></i>عن وطنية</li>
                    <li><i class="fa-sharp fa-solid fa-chevron-down"></i>خدمات وطنيه</li>
                    <li><i class="fa-sharp fa-solid fa-chevron-down"></i>سند للرعاية البديلة</li>
                    <li><i class="fa-sharp fa-solid fa-chevron-down"></i>المركز الاعلامي</li>
                    <li><i class="fa-sharp fa-solid fa-chevron-down"></i>شركاء رحلتنا</li>
                </ul>
            </div>
            <button>تبرع الان</button>
            <span class="icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
    </header>
    
    <script src="javaScript/wataneya.js"></script>
</body>
</html> --}}
