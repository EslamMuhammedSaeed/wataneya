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
        .slick-slide {
            float: left !important;
        }

        .slick-next {
            left: auto !important;
            right: 25px !important;
        }

        .slick-vertical .slick-slide {
            width: auto;
        }
        p, .p {
            font-size: 1.4rem;
            text-align: justify;
        }


        

 .thumbImg {
    margin-bottom: 20px;
    border-radius: 6px;
}
.thumbImg img{
    border-radius: 3px;
}
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
    <div class="container-fluid remove-padding cont-main" style="margin-top: 80px">
        <div class="container remove-padding d-flex">
            <div class="col-md-9 col-sm-12 col-xs-12 news-cont">
                <div class="col-xs-12 site-map">
                    <ul>
                        <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                        <li><a href="{{ route('web.news.index') }}">{{ __('lang.news') }}</a></li>
                        {{-- <!--<li><p>{{ $title }}</p></li>--> --}}
                        <li>
                            <p>{{ __('lang.news_piece') }}</p>
                        </li>
                    </ul>
                </div>
                @php if(LaravelLocalization::getCurrentLocale() == 'ar'){
                    $item_title=$news_item->title;
                    $item_details = $news_item->details;
                }else{
                    $item_title=$news_item->title_en;
                    $item_details = $news_item->details_en;
                } 
                @endphp
                <h3>{{ $item_title }}</h3>
                <h5 style="font-weight:bold;margin-bottom: 0px !important;">{{ $date }}</h5>
                <br>
                <div class="banner-section news-section-slider" dir="ltr">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider d-flex flex-row">
                            <div class="slider slider-for">
                                
                                @php $images = json_decode($news_item->image); @endphp
                                
                                @if ($images)
                                    @php $images = array_slice($images, 0, 3); @endphp
                                    @php $main_image = $images[0]; @endphp
                                    <div class="slider-banner-image">
                                        <img src="@if (!filter_var($main_image, FILTER_VALIDATE_URL)) {{ Voyager::image($main_image) }}@else{{ $main_image }} @endif" alt="{{ $news_item->title }}">
                                    </div>
                                    {{-- @forelse($images as $image)
                                        <div class="slider-banner-image">
                                            <img src="@if (!filter_var($image, FILTER_VALIDATE_URL)) {{ Voyager::image($image) }}@else{{ $image }} @endif">
                                        </div>
                                    @empty
                                    @endforelse --}}
                                @endif
                                {{-- @forelse($images as $image)
                                    <div class="slider-banner-image">
                                    <img ssrc="@if (!filter_var($image, FILTER_VALIDATE_URL)){{ Voyager::image( $image ) }}@else{{ $image }}@endif">
                                </div>
                                @empty
                                @endforelse --}}
                            </div>
                            <div class="slider slider-nav thumb-image mx-2" style="width: auto">
                                
                                @forelse($images as $image)
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img width="100px" src="@if (!filter_var($image, FILTER_VALIDATE_URL)) {{ Voyager::image($image) }}@else{{ $image }} @endif" alt="{{ $news_item->title }}">
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <p class="new-info-p">
                    {!! $item_details !!}
                </p>
            </div>

            <div class="col-md-3 col-xs-12 col-sm-12 new-side">
                <div class="col-xs-12 remove-padding title">
                    <h1>{{ __('lang.read_too') }}</h1>
                </div>

                @forelse($other_news as $_news_item)
                    @include('cms.news.components.news_item')
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
