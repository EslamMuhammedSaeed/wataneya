@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.Alliances') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.Alliances') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.Alliances') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.Alliances') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection

@section('content')
    <style>
        a {
            color: black;
        }

        a:hover {
            color: #25cad2;
        }

        .staff-detail {
            font-size: 16px;
            text-align: start;
        }

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
                width: 65px
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
                <style>
                    /* global */
                    .text .title {
                        font-size: 28px;
                        justify-self: center;
                        margin-top: 20px;
                    }
    
                    .text {
                        display: grid;
                        grid-column: 1/2;
                    }
    
                    .text p {
                        font-size: 16px;
                        overflow: hidden;
                        text-align: justify;
                        margin-top: 40px;
                    }
    
                    /* section */
                    .our-values {
                        margin-top: 50px;
                    }
    
                    .our-values .container {
                        width: 1150px;
                        margin: auto;
                    }
    
                    .our-values .container .text p {
                        margin-bottom: 50px;
                    }
    
                    .slider-values {
                        display: none;
                        padding: 20px;
                        border-radius: 20px;
                        max-width: 750px;
                        grid-template-areas: "img p";
                        align-items: center;
                        margin: auto;
                        margin-top: 50px;
                        border: 4px solid #3ec1ce;
                    }
    
                    .slider-values img {
                        margin: 20px;
                        grid-area: img;
                    }
    
                    .our-values .container .values {
                        margin: auto;
                        display: grid;
                        justify-items: center;
                        position: relative;
                        z-index: 0;
                    }
    
                    .values-img {
                        display: grid;
                        grid-template-columns: 25% 25% 25% 25%;
                        justify-items: center;
                        align-items: center;
                        max-width: 1200px;
                        margin: auto
                    }
    
                    .values-img5 {
                        display: grid;
                        grid-template-columns: 33% 33% 33%;
                        justify-items: center;
                        align-items: center;
                    }
    
                    .values-img img {
                        cursor: pointer;
                        transition: 0.5s ease-in-out;
                        margin: 0 30px 0 30px;
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
    
                    /* height of all img */
                    .values-img .value6 {
                        width: 150px !important;
                    }
    
                    .values-img .value7 {
                        width: 300px !important;
                    }
    
    
                    @media (max-width:1200px) {
                        .our-values .container {
                            width: 900px;
                            margin: auto;
                        }
    
                        .values {
                            width: 900px;
                            margin: auto;
                        }
    
                        .slider-values {
                            width: auto;
                            border-radius: 20px;
                            max-width: 800px;
                        }
    
                        .slider-values img {
                            margin: 20px 0px 50px 0;
                        }
    
                        .slider-values p {
                            margin: 20px 20px;
                            width: auto;
                        }
    
                        /* height of all img max-width 1200px */
                        .values-img .value {
                            width: 150px;
                        }
    
                        .values-img .value6 {
                            width: 120px;
                        }
    
                        .values-img .value7 {
                            width: 200px !important;
                        }
                    }
    
                    @media (max-width:990px) {
                        .our-values {
                            display: grid;
                        }
    
                        .our-values .container {
                            width: auto;
                            max-width: 740px;
                        }
    
                        .our-values .container .text h1 {
                            margin: 0px 0px 30px 0;
                            justify-self: center;
                            font-size: 18px;
                        }
    
                        .our-values .container .text p {
                            height: auto;
                            margin: 0 0 0 0;
                            justify-self: center;
                            font-size: 14px;
                        }
    
                        .our-values .container .text {
                            width: auto;
                        }
    
                        .values {
                            width: auto;
                            margin-top: 50px;
                        }
    
                        .slider-values {
                            width: auto;
                            height: auto;
                            margin-top: 20px;
                            grid-template-areas: "img""p";
                            max-width: 370px;
                        }
    
                        .slider-values p {
                            margin: 0px 0px;
                            width: auto;
                            font-size: 14px;
                        }
    
                        .values .slider-values {
                            padding: 20px
                        }
    
                        .values-img {
                            margin: 0 10px 0 10px;
                            display: flex;
                            flex-flow: wrap column;
                            justify-content: center;
                            align-items: center;
                        }
    
                        .values-img img {
                            margin: 20px 0px 20px 0px;
                        }
                    }
    
                    @media(max-width:471px) {
                        .our-values {
                            margin-top: 30px;
                        }
    
                        .our-values .container .text h1 {
                            font-size: 16px;
                            text-align: center;
                        }
    
                        .our-values .container .text p {
                            font-size: 14px;
                            margin-bottom: 50px;
                        }
    
                        .values .slider-values {
                            padding: 20px;
                        }
    
                        .slider-values p {
                            margin: 0px 0px;
                            width: auto;
                            font-size: 14px;
                        }
    
                        .slider-values {
                            border-radius: 20px;
                            border: 2px solid;
                            max-width: 270px;
                        }
    
                        .slider-values img {
                            display: none;
                        }
    
                        .values {
                            width: auto;
                            margin: 0;
                        }
                    }
                </style>





    @php
       function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }
        $title = language('title');
        $description = language('description');
        $image_src = language('image');
    @endphp
    <div class="container-fluid remove-padding cont-main " style="margin-top: 80px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.Alliances') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container remove-padding mb-5">


            <div class="text-center">
                <h2 class="mb-5">
                    {{ __('lang.alliances_title') }}
                </h2>
            </div>
            <p style="font-size: 16px">
                {{ __('lang.alliances_details') }}
            </p>


            <div class="our-values">

                <div class="values">
                    <div class="values-img values-img1">
                        @forelse ($alliances as $alliance)
                        <img class="value value1" width="200px" hieght="auto" src="{{ asset('storage/' . $alliance->image) }}"  onclick="changeImg('{{ asset('storage/' . str_replace('\\', '/', $alliance->image)) }}','{{ $alliance->$description }}')">
                   
                        @empty
                            
                        @endforelse
                        
                    </div>
                    <div class="slider-values slider-values1">
                        <img class="change-img change-img1" src="{{ asset('storage/' . $alliances[0]->image) }}"
                            alt="تحالفات">
                        <p>-</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // remove text of alliances when dblclick
        window.addEventListener('dblclick', () => document.querySelector('.slider-values').style = "display:none;");

        // scroll into view text of alliances on click on it and give smooth scroller
        let values = document.querySelector('.values');
        values.addEventListener('click', () => document.querySelector('.slider-values').scrollIntoView({
            behavior: "smooth"
        }));

        // change text and img when change alliance
        function changeImg(anyImg, anyText) {
            document.querySelector(".change-img").src = anyImg;
            document.querySelector('.slider-values p').innerText = anyText;
            document.querySelector('.slider-values').style = `display: grid; justify-items:center; `;
        };
    </script>
@endsection
