@extends('web.layouts.master')


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
            .input-main p {
                margin-bottom: 10px;
                font-weight: bold;
                font-size: 16px;
            }
            .contact-bottom p {
                font-size: 14px;
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
        #map {
            width: 100%;
            height: 400px;
            background-color: grey;
        }

        button.solid-btn {
            background-color: #25cad2;
            color: #fff;
            height: 40px;
            line-height: 40px;
            border: none;
            border-radius: 85px 63px 158px 196px;
            border: none;
            width: 100%;
            text-decoration: none;
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
        $description = language('description');
    @endphp
    <div class="container-fluid remove-padding cont-main " style="margin-top: 80px">
        <div class="container remove-padding">
            <div class="col-xs-12 site-map">
                <ul>
                    <li><a href="{{ route('landing') }}">{{ __('lang.home') }}</a></li>
                    <li>
                        <p>{{ __('lang.contact_us') }}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">



            <div class="col-11 col-md-8">
                <form method="POST" action="{{ route('contact_us.send') }}">
                    @csrf
                    <div class="col-xs-12 remove-padding input-main has-feedback ">
                        <p>{{ __('lang.name') }}</p>
                        <input type="text" class="form-control" placeholder="{{ __('lang.name') }}" name="name" id="name"
                            value="">
                    </div>
                    <div class="col-xs-12 remove-padding input-main has-feedback ">
                        <p>{{ __('lang.email') }}</p>
                        <input type="email" class="form-control" placeholder="{{ __('lang.email') }}" name="email"
                            id="email" value="">
                    </div>

                    <div class="col-xs-12 remove-padding input-main has-feedback ">
                        <p>{{ __('lang.phone') }}</p>
                        <input type="text" class="form-control" placeholder="{{ __('lang.phone') }}" name="phone" id="phone"
                            value="">
                    </div>

                    <div class="col-xs-12 remove-padding input-main has-feedback ">
                        <p>{{ __('lang.message') }}</p>
                        <textarea name="message" id="message" placeholder="{{ __('lang.message') }}" cols="10" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="solid-btn">{{ __('lang.send') }}</button>
                </form>

                <div class="col-xs-12 remove-padding map-main">
                    <h4>{{ __('lang.location') }}</h4>
                    <p>{{ __('lang.address_wataneya') }}</p>
                    <span class="details">
                        <div id="map"></div>
                    </span>
                    <div class="col-xs-12 remove-padding contact-bottom">
                        <div class="col-md-6 col-xs-12 col-sm-6 remove-padding">
                            <h4>{{ __('lang.phone_contact') }}</h4>
                            <p>{{ __('lang.home_phone_wataneya') }}</p>
                            <p>{{ __('lang.phone_number_wataneya') }}</p>

                        </div>

                        <div class="col-md-6 col-xs-12 col-sm-6 remove-padding">
                            <h4>{{ __('lang.social_contact') }}</h4>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/wataneya/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/WataneyaSociety" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/wataneyasociety/" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank"
                                        title="لينكد إن">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: Number("30.086659598970105"),
                lng: Number("31.328940491491885")
            };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 12,
                    center: uluru
                });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
@endsection
