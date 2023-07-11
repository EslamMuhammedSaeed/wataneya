@extends('web.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template-normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('css/ar/board.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/en/board.css')}}">
    @endif
    
    <style>
        p {
            text-align: justify;
        }

        .slogen-main p {
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="title">
                <h1>مجلس الإدارة</h1>
            </div>
            <div class="main">

                @forelse ($board as $member)
                    <div class="box rad-6">
                        <a href="#">
                            <div class="image-frame">
                                <img src="{{ asset('storage/'.$member->image) }}" alt="">
                            </div>
                            <div class="staff-detail">
                                @if (LaravelLocalization::getCurrentLocale() == 'ar')
                                    <h4>{{ $member->name }}</h4>
                                    <h5>{{ $member->position }}</h5>
                                @else
                                    <h4>{{ $member->name_en }}</h4>
                                    <h5>{{ $member->position_en }}</h5>
                                @endif

                                
                                
                                
                            </div>
                        </a>
                    </div>
                @empty
                    
                @endforelse
                
                
            </div>
        </div>
    </section>
    
@endsection

@section('js')
    <script src="{{ asset('js/wataneya.js') }}"></script>
@endsection
