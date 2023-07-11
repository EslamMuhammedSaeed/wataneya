@extends('web.layouts.master')

@section('header_tags')
    @php
        
        function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }
        $title = language('title');
        $content = language('content');
        $image_src = language('image');
        $description = language('description');
        $page = language('page');
    @endphp
    <title>{{ $sub_service->$title }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ $sub_service->$title }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $sub_service->$title }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $sub_service->$title }} | {{ __('lang.wataneya') }}">
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
        .start {
            display: grid;
            justify-items: center;
        }

        .start .type {
            width: 250px;
            background-color: #3ec1ce;
            text-align: center;
            color: #fff;
            border-radius: 10px;
            padding: 10px 0px 10px 0px;
            font-size: 20px;
        }

        .start .details {
            margin: 50px 150px 50px 150px;
            font-size: 18px;
            text-align: justify;
        }

        section {
            display: grid;
            justify-items: center;
            grid-template-columns: 90% 10%;
            margin: 50px 0 100px 0;
        }

        section .article {
            position: relative;
            width: 100%;
            height: auto;
            background-color: #e9e9e9;
            display: grid;
            grid-template-columns: 45% 50% 5%;
            border-radius: 10px 0px 0px 10px;
            min-height: 550px;
        }

        section .article .title-article {
            justify-self: center;
            margin: auto 0 auto 0;
        }

        section .article .title-article .title h1 {
            font-size: 50px;
            color: #3ec1ce;
            margin-bottom: 30px;
            text-align: center;
            width: 350px;
        }

        section .article .title-article .img-article {
            display: grid;
            justify-items: center;
        }

        section .article .title-article .img-article .img {

            border-radius: 10px;
            box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.364);
        }

        section .text {
            align-self: center;
            padding: 30px 25px 30px 25px;
            display: grid;
        }

        section .text p {
            font-size: 16px;
            text-align: justify;
        }

        section .text h3 {
            margin: 20px 0 20px 0;
            font-size: 25px;
            text-align: justify;
        }

        section .text .pdf {
            background-color: #3ec1ce;
            outline: none;
            border: none;
            margin-top: 20px;
            color: #fff !important;
            width: 120px;
            height: 40px;
            justify-self: end;
            display: grid;
            justify-items: center;
            align-items: center;
            text-decoration: none;
        }

        section .text .pdf:hover {
            color: #fff !important;
            background: #3ec1ce !important;
        }

        section .text .full {
            height: 240px;
            overflow: hidden;
            position: relative;
        }

        section .text a {
            justify-self: end;
            cursor: pointer;
            font-weight: 800;
            background: none;
            text-decoration: none;
            color: #58585b;
        }

        section .text a:hover {
            color: #3ec1ce !important;
            background: none;
            text-decoration: none;
        }

        section .text .li {
            margin: 5px 50px 5px 50px;
            font-size: 16px;
            list-style: none;
            text-align: justify;
        }

        section .text .circle {
            position: absolute;
            top: 50%;
            transform: translate(0%, -50%);
            justify-self: end;
            width: 100px;
            height: 100px;
            border: 4px solid #3ec1ce;
            border-radius: 10px 40px 10px 40px;
            box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.118);
            display: grid;
            justify-items: center;
            align-items: center;
        }

        section .text .circle h1 {
            color: #333333b2;
            font-weight: 900;
            font-size: 55px;
        }

        section:nth-child(odd) {
            direction: rtl;
        }

        section:nth-child(odd) .article {
            border-radius: 10px 0px 0px 10px;
        }

        section:nth-child(odd) .text .circle {
            left: -55px;
        }

        section:nth-child(even) {
            direction: ltr;
        }

        section:nth-child(even) .article {
            border-radius: 0px 10px 10px 0px;
        }

        section:nth-child(even) .text {
            direction: rtl;
        }

        section:nth-child(even) .text .circle {
            right: -55px;
        }

        @media (max-width: 1200px) {
            section .article .title-article .title h1 {
                font-size: 40px;
            }

            section .article .title-article .img-article .img {
                width: 350px;
                height: 350px;
            }
        }

        @media (max-width: 990px) {
            .start .details {
                margin: 50px;
            }

            section {
                grid-template-columns: 100%;
                margin: 50px;
            }

            section .article {
                max-width: 830px;
                grid-template-columns: 100%;
                grid-template-rows: auto;
                border-radius: 5px;
                height: auto;
            }

            section .article .title-article {
                display: grid;
                justify-items: center;
                grid-template-rows: 30% 70%;
            }

            section .article .title-article .title {
                align-self: center;
            }

            section .article .title-article .title h1 {
                margin: 25px 0 25px 0;
            }

            section .article .title-article .img-article .img {
                border-radius: 5px;
                box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.199);
            }

            section .text {
                padding: 0px 20px 0px 20px;
                margin: 50px 0 50px 0;
            }

            section .text h3 {
                text-align: center;
            }

            section .text .circle {
                width: 80px;
                height: 40px;
                border: 3px solid #3ec1ce;
                background-color: #3ec2cea4;
                border-radius: 5px;
                top: -22.5px;
            }

            section .text .circle h1 {
                font-size: 40px;
                color: #fff;
            }

            section:nth-child(odd) .article {
                border-radius: 5px;
            }

            section:nth-child(odd) .text .circle {
                transform: translate(-50%, 0%);
                left: 50%;
            }

            section:nth-child(even) .text .circle {
                transform: translate(50%, 0%);
                right: 50%;
            }
        }

        @media (max-width: 600px) {
            .start .details {
                margin: 25px;
                font-size: 18px;
            }

            section {
                margin: 50px 10px 50px 10px;
            }

            section .article .title-article {
                margin-top: 20px;
            }

            section .article .title-article .title h1 {
                font-size: 30px;
                width: 250px;
            }

            section .article .title-article .img-article .img {
                width: 200px;
                height: 200px;
                box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.096);
            }

            section .text {
                padding: 0px 10px 0px 10px;
                margin: 0px 0 40px 0;
            }

            section .text p {
                text-align: justify;
            }

            section .text .li {
                margin: 5px 10px 5px 10px;
            }

            section .text h3 {
                font-size: 22px;
            }

            section .text .circle {
                transform: translate(-50%, 0%);
                left: 50%;
                justify-self: end;
                width: 80px;
                height: 40px;
                border: 2px solid #3ec2cea4;
                border-radius: 5px;
                background-color: #3ec2cea4;
                box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.049);
            }

            section .text .circle h1 {
                font-weight: 900;
                font-size: 25px;
            }

            section:nth-child(even) .text .circle {
                transform: translate(-50%, 0%);
            }
        }
    </style>






    <div class="container-fluid remove-padding cont-main " style="margin-top: 80px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <a href="#">{{ __('lang.services') }}</a></p>
                    </li>
                    <li>
                        <a
                            href="{{ route('web.pages.services', $sub_service->service->id) }}">{{ $sub_service->service->$title }}</a>
                    </li>
                    <li>
                        <p>{{ $sub_service->$title }}</p>
                    </li>
                </ul>
            </div>
        </div>

        @if ($sub_service->$page)
            <div class="container remove-padding">
                {!! $sub_service->$page !!}
            </div>
        @else
            <div class="container remove-padding">

                <div class="mt-4 px-3">
                    <h2 class="mb-5">
                        {{ $sub_service->$title }}
                    </h2>
                </div>
                <p class="px-3" style="font-size: 16px">
                    {{ $sub_service->$description }}
                </p>


                <div class="all-sections">
                    @foreach ($sub_service->items as $index => $item)
                    @endforeach
                    <section>
                        <div class="article">
                            <div class="title-article">
                                <div class="title">
                                    <h1>{{ $item->$title }}</h1>
                                </div>
                                <div class="img-article"><img width="350" height="350" class="img img1"
                                        src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->$title }}"></div>
                            </div>
                            <div class="text">
                                {!! $item->$description !!}
                                @if ($item->file)
                                    <a class="pdf" href="{{ $item->file }}">{{ __('lang.more') }}</a>
                                @endif
                                <div class="circle">
                                    <h1>{{ $index + 1 }}</h1>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                {{-- <div class="col-xs-12 d-flex remove-padding team-main mt-6">
                @forelse($service->sub_services as $sub_service)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="{{ route('web.pages.sub_services',$sub_service->id) }}" class="new-item pro-item">
                            <div class="img-frame">
                                <img src="{{ asset('storage/' . $sub_service->image) }}" alt="{{ $sub_service->$title }}">
                            </div>
                            <div class="col-xs-12 staff-detail py-4">
                                {{ $sub_service->$title }}
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-sm-12">
                        <div class="alert alert-info">{{ __('lang.no_data') }}</div>
                    </div>
                @endforelse

            </div> --}}
            </div>
        @endif
    </div>
@endsection
