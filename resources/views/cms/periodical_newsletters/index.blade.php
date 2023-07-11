@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.periodical_newsletters') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.periodical_newsletters') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.periodical_newsletters') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.periodical_newsletters') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection

@section('content')
    <style>
        a{
            color: black;
        }
        a:hover{
            color: #25cad2;
        }
        .staff-detail{
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





    @php
       
         function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }$title = language('title');
        $content = language('content');
        $image_src = language('image');
    @endphp
    <div class="container-fluid remove-padding cont-main " style="margin-top: 80px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.periodical_newsletters') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container remove-padding">


            <div class="col-xs-12 d-flex remove-padding team-main mt-4">
                @forelse($news_letters as $news_letter)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="{{ $news_letter->link }}" class="new-item pro-item">
                            <div class="img-frame">
                                <img src="{{ asset('storage/' . $news_letter->image) }}" alt="{{ $news_letter->$title }}">
                            </div>
                            <div class="col-xs-12 staff-detail py-4">
                                {{ $news_letter->$title }}
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-sm-12">
                        <div class="alert alert-info">{{ __('lang.no_data') }}</div>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection
