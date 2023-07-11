@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.news') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.news') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.news') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.news') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection

@section('content')
<style>
    .page-item .page-link, .page-item span {
    
        font-size: 1.475rem;
    }
</style>
<style>
    .site-map a{
        background: none;

    }
    .site-map a:hover{
        background: none;
        
    }
    .site-map ul li p {
        font-size: 16px;
    }
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
</style>

    <div class="container-fluid remove-padding cont-main" style="margin-top: 100px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.news') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container remove-padding">
            <div class="col-xs-12 title">
                <h1>{{ __('lang.news') }}</h1>
            </div>

            <div class="col-xs-12 remove-padding news-main-cont d-flex">
                @forelse($news as $_news_item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        @include('cms.news.components.news_item')
                    </div>
                @empty
                    <div class="col-sm-12">
                        <div class="alert alert-info">{{ __('lang.no_data') }}</div>
                    </div>
                @endforelse
            </div>

            <div class="col-xs-12 text-center">{!! $news->links() !!}</div>
        </div>
    </div>
@endsection