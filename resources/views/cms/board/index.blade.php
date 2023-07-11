@extends('web.layouts.master')

@section('header_tags')
    <title>{{ __('lang.board_members') }} | {{ __('lang.wataneya') }}</title>
    <meta itemprop="name" content="{{ __('lang.board_members') }} | {{ __('lang.wataneya') }}">
    <meta itemprop="description" content="{{ __('lang.Meta_description') }}">
    <meta itemprop="image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('lang.board_members') }} | {{ __('lang.wataneya') }}">
    <meta property="og:description" content="{{ __('lang.Meta_description') }}">
    <meta property="og:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('lang.board_members') }} | {{ __('lang.wataneya') }}">
    <meta name="twitter:description" content="{{ __('lang.Meta_description') }}">
    <meta name="twitter:image" content="{{ asset('img/625d55fceb5d9.jpg') }}">
@endsection

@section('content')
    <style>
        .container-fluid {
            padding-left: 0 ;
            padding-right: 0 ;
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

        @if (app()->getLocale() == 'ar')

            .line2 {
                width: 120px
            }

            .yellow-line::before {
                top: 65%;
                right: -10px;
            }
        @endif
        @if (app()->getLocale() == 'en')

            .line2 {
                width: 170px
            }

            .yellow-line::before {
                top: 50%;
                right: 10px;
            }
        @endif
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
    </style>



        
        

    <div class="container-fluid remove-padding cont-main " style="margin-top: 80px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.board_members') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container remove-padding">
            <div class="col-xs-12 title">
                <h1 class="yellow-line line2">{{ __('lang.board_members') }}</h1>
            </div>

            <div class="col-xs-12 d-flex remove-padding team-main mt-4">
                @forelse($board as $board_member)
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        @include('cms.board.components.board_member')
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
