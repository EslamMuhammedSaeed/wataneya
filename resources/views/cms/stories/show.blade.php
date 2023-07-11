@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.stories') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.stories') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.stories') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.stories') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection

@section('content')
    <div class="container-fluid remove-padding cont-main">
        <style>
            .story-main {
                margin-top: 100px;
            }

            .story-main img {
                width: 100%;
                margin-bottom: 30px;
            }
            .container-fluid{
                padding-left: 0;
                padding-right: 0;
            }
        </style>

        <div class="container project-main remove-padding story-main">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <img src="{{ asset('storage/' . $story->image) }}" class="img-responsive">
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">

                @if (LaravelLocalization::getCurrentLocale() == 'ar')
                    <h1>{{ $story->name }}</h1>
                    <h6>{{ $story->position }}</h6>
                    <br>
                    <p>{!! $story->description !!}</p>
                @else
                    <h1>{{ $story->name_en }}</h1>
                    <h6>{{ $story->position_en }}</h6>
                    <br>
                    <p>{!! $story->description_en !!}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
