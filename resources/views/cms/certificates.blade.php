@extends('web.layouts.master')
@section('header_tags')
    <title>{{ __('lang.awards') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.awards') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.awards') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.awards') }} | {{ __('lang.wataneya') }}">
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
        .container-fluid{
            padding-left: 0;
            padding-right: 0;
        }
        .site-map ul li p {
            font-size: 16px;
        }
    </style>

   
@endsection

@section('content')
<div class="container-fluid remove-padding cont-main" style="margin-top: 80px">
    <div class="container remove-padding">
        <div class="col-xs-12 site-map">
            <ul>
                <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                <li>
                    <p>{{ __('lang.awards') }}</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="project-main" style="margin-top:0 !important">



        <style>
            /* global */
            .text h1 {
                margin: 0 0 30px 0;
                font-size: 24px;
                justify-self: center;
                align-self: end;
                line-height: 35px;
            }

            .text p {
                font-size: 16px;
                text-align: justify;
            }

            /* sections */
            .awerds .container {
                width: 1120px;
                margin: auto;
                display: grid;
            }

            .awerd {
                margin: 50px 0 50px 0;
                display: flex;
                padding: 50px;
                box-shadow: 0px 16px 32px 0px rgb(0 0 0 / 10%);
            }

            .awerd .text {
                margin: 0 0 0 50px;
                display: grid;
                justify-items: center;
            }

            .awerd .img {
                display: grid;
                justify-items: center;
                align-items: center;
            }

            @media(max-width:1200px) {

                /* global */
                .text h1 {
                    font-size: 18px;
                    justify-self: center;
                    text-align: center;
                }

                .text p {
                    font-size: 14px;
                }

                /* sections */
                .awerd {
                    flex-flow: column;
                    justify-content: center;
                    display: flex;
                    padding: 20px;
                }

                .awerds .container {
                    width: 990px;
                    margin: auto;
                }

                .awerd .text {
                    margin: 30px 0 0 0;
                }

            }

            @media(max-width:990px) {

                /* sections */
                .awerds .container {
                    width: auto;
                    margin: 0 20px 0 20px;
                }
            }

            @media(max-width:990px) {

                /* sections */
                .awerds .container {
                    margin: 0 5px 0 5px;
                }
            }

            @media(max-width:386px) {

                /* global */
                .img img {
                    width: 150px !important;
                }
            }
            .awerd .text {
                margin-inline-start: 50px;
                display: grid;
                justify-items: center;
            }
        </style>

        @php
            function language($attr)
            {
                return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
            }
            $title = language('title');
            $content = language('content');
            $image_src = language('image');
        @endphp
        <section class="awerds">
            <div class="container">
                @forelse ($certificates as $certificate)
                    <div class="awerd a11">
                        <div class="img"><img src="{{ asset('storage/' . $certificate->image) }}"
                                alt="{{ $certificate->$title }}"
                                width="200" height="auto"></div>
                        <div class="text">
                            <h1>{{ $certificate->$title }}
                            </h1>
                            <p>{{ $certificate->$content }}</p>
                        </div>
                    </div>
                @empty
                    
                @endforelse
                

 
            </div>
        </section>

    </div>
</div>
@endsection
