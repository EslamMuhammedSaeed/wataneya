@extends('web.layouts.master2')


@section('style')
    {{-- @if (app()->getLocale() == 'ar')
        <link href="{{ asset('css/ar/who_we_are.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/en/who_we_are.css') }}" rel="stylesheet">
    
    @endif --}}

    <link href="https://wataneya.org/assets/web/css/donation-p.css" rel="stylesheet">



    <style>
        html{
            direction: ltr !important;
        }
        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 16px;
        }

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .site-map ul li p {
            font-size: 16px;
        }
        .slick-prev:before, .slick-next:before {
            color: #3ec1ce;
        }
        .slick-next:before {

            content: '←';

        }
    </style>
@endsection

@section('content')
    <style>
        .slider-donate-main h1 {
            font-size: 22px;
            font-weight: 600;
        }

        .map-main h1 {
            font-weight: 600;
            font-size: 18px;
        }

        .donate-type-item label {
            font-size: 16px;
            font-weight: bold;
            line-height: 40px;
            display: grid;
            align-items: center;
            justify-items: center;
        }

        .donate-type-item.active-donate-type label {
            color: #fff;
        }

        #AtherDonationWay .All-Donation-Ways .way button.active {
            cursor: text;
        }
    </style>
    @if (app()->getLocale() == 'en')
        <style>
            #whyDonation .slider .direction a {
                padding: 6px 30px 10px 30px;
            }
        </style>
    @endif
    @if (app()->getLocale() == 'ar')
        <style>
            #whyDonation .title-donate img {
                transform: rotateY(180deg);
            }
        </style>
    @endif
    <!--frist section -->
    @php
       
         function language($attr)
        {
            return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
        }$title = language('title');
        $content = language('content');
        $image_src = language('image');
    @endphp
    <section id="whyDonation" style="margin-top: 100px">
        <div class="text-donate">
            <div class="title-donate">
                
                <h1>{{$cms_content[0]->$title }}</h1>
                <img src="{{ asset('img/6224893fe9e13.png') }}" alt="faq" width="50px" height="50px">
            </div>
            <p>{{$cms_content[0]->$content }}</p>
            <a class="call-action" href="{{ route('web.pages.impact') }}">{{ __('lang.learn_more_about_donation') }}</a>
        </div>
        <div class="slider">
            <div class="slider-photos ">
                <div class="slider-photos ">
                    <div class="mySlides fade">
                        <img src="{{ asset('storage/' . $cms_content[1]->image) }}" alt="img2" width="100%" height="100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="{{ asset('storage/' . $cms_content[2]->image) }}" alt="img2" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <div class="direction">
                <img src="{{ asset('img/6224893f844f0.svg') }}" alt="left arrow" width="80" height="80"
                    onclick="plusSlides(-1)">
                <a class="call-action" href="#Donation" class="smooth-scroll">{{ __('lang.donate_to') }}</a>
                <img src="{{ asset('img/6224893f844f0.svg') }}" alt="right arrow" width="80" height="80"
                    onclick="plusSlides(1)">
            </div>
        </div>
    </section>
    <!--second section -->
    <section id="Fatwa">
        <div class="title-donate">
            <h1>{{ $cms_content[3]->$title }}</h1>
            <img src="{{ asset('img/6224893f9ccea.png') }}" alt="faq" width="50px" height="50px">
        </div>
        <img src="{{ asset('storage/' . $cms_content[3]->image) }}" alt="dar-elaifita" width="326" height="300">
        <p>{{$cms_content[3]->$content }}</p>
    </section>
    <!--third section -->
    <section id="All-Fatwas">
        <div class="frist-fatwa fatwa">
            <div class="title-donate">
                <h1>{{ $cms_content[4]->$title }}</h1>
            </div>
            <p>{{ $cms_content[4]->$content }}</p>
            <a class="call-action" href="{{ $cms_content[4]->link }}">{{ __('lang.read_fatwa') }}</a>
        </div>
        <div class="secand-fatwa fatwa">
            <div class="title-donate">
                <h1>{{ $cms_content[5]->$title }}</h1>
            </div>
            <p>{{ $cms_content[5]->$content }}</p>
            <a class="call-action" href="{{ $cms_content[5]->link }}">{{ __('lang.read_fatwas') }}</a>
        </div>
    </section>
    <!--fourth section -->
    <section id="Donation">
        <div class="title-donate">
            <h1>{{ __('lang.donation_to') }}</h1>
            <img src="{{ asset('img/622489401ba19.png') }}" alt="healthcare" width="50px" height="50px">
        </div>
        {{-- <p style="text-align:center; font-size:20px; font-weight:600; margin-top:20px;">{{__('lang.Nodonationatthismoment')}}</p> --}}
    </section>
    <!--col-md-8 col-md-offset-2 col-xs-12 col-sm-12-->
    <div class="">
        <form id="donation">
            <div class="col-xs-12 slider-donate-main px-5" style="direction:ltr">
                <h1>{{ __('lang.d_txt5') }}</h1>
                <div class="slick-carousel">
                    <div class="slide-content">
                        <div class="donate-type-item active-donate-type">
                            <label for="type1">{{ __('lang.d_txt9') }}</label>
                            <input type="radio" value="{{ __('lang.d_txt9') }}" name="type" id="type1">
                        </div>
                    </div>

                    <div class="slide-content">
                        <div class="donate-type-item ">
                            <label for="type2">{{ __('lang.d_txt6') }}</label>
                            <input type="radio" value="{{ __('lang.d_txt6') }}" name="type" id="type2">
                        </div>
                    </div>

                    <div class="slide-content">
                        <div class="donate-type-item">
                            <label for="type3">{{ __('lang.d_txt7') }}</label>
                            <input type="radio" value="{{ __('lang.d_txt7') }}" name="type" id="type3">
                        </div>
                    </div>

                    <div class="slide-content">
                        <div class="donate-type-item">
                            <label for="type4">{{ __('lang.d_txt8') }}</label>
                            <input type="radio" value="{{ __('lang.d_txt8') }}" name="type" id="type4">
                        </div>
                    </div>
                </div>
            </div>

            @csrf
            <div class="col-xs-12 remove-padding dona-form-main px-5">

                <div class="col-xs-12 remove-padding input-main">
                    <label for="name">{{ __('lang.d_txt11') }}</label>
                    <input name="name" type="text" id="name">
                </div>

                <div class="col-xs-12 remove-padding input-main">
                    <label for="phone_number">{{ __('lang.d_txt12') }}</label>
                    <input name="phone_number" type="text" id="phone_number">
                </div>


                <div class="col-xs-12 remove-padding input-main">
                    <label for="email">{{ __('lang.d_txt13') }}</label>
                    <input name="email" type="text" id="email">
                </div>


                <div class="col-xs-12 remove-padding input-main">
                    <label for="amount">{{ __('lang.d_txt14') }}</label>
                    <input name="amount" type="number" id="amount">
                    <span>{{ __('lang.d_txt15') }}</span>
                </div>


                <div class="col-xs-12 remove-padding">
                    <button class="solid-btn">{{ __('lang.d_txt16') }}</button>
                </div>

            </div>
        </form>
    </div>

    <div class="clearfix"></div>

    <!--fifth section -->
    <section id="AtherDonationWay">
        <div class="title-donate">
            <h1>{{ __('lang.Other_ways_of_donation') }}</h1>
            <img src="{{ asset('img/622489401ba19.png') }}" alt="healthcare" width="50px" height="50px">
        </div>
        <div class="All-Donation-Ways">
            @forelse ($banks as $bank)
            <div class="frist-way way">
                <img src="{{ asset('storage/' . $bank->image) }}" alt="CIB" width="100%" height="78">
                <p class="call-action-btn" data-number={{ $bank->$content }}>{{ __('lang.Account_number') }}</p>
            </div>
            @empty
                
            @endforelse
            
            {{-- <div class="second-way way">
                <img src="{{ asset('img/6224893f85cf3.png') }}" alt="united bank" width="100%" height="59">
                <p class="call-action-btn" data-number={{ __('lang.united_bank_code') }}>{{ __('lang.Account_number') }}
                </p>
            </div>
            <div class="third-way way">
                <img src="{{ asset('img/6224893fb3fc4.png') }}" alt="national bank of egypt" width="100%"
                    height="60">
                <p class="call-action-btn" data-number={{ __('lang.national_bank_of_egypt_code') }}>
                    {{ __('lang.Account_number') }}</p>
            </div>
            <div class="fourth-way way">
                <img src="{{ asset('img/6224893fd38c5.png') }}" alt="fawry" width="100%" height="75">
                <p class="call-action-btn" data-number={{ __('lang.fawry_code') }}>{{ __('lang.payment_code') }}</p>
            </div> --}}
        </div>
        {{-- <p style="text-align:center; font-size:20px; font-weight:600; margin-top:20px;">{{__('lang.Nodonationatthismoment')}}</p> --}}
    </section>
    <!--sixth section -->
    <section id="RecoveryMoney">
        <div class="title-donate">
            <h1>{{$return_policy->$title }}</h1>
            <img src="{{ asset('img/6224893fd3911.png') }}" alt="cashback" width="50px" height="50px">
        </div>
        <div class="Money-Back">
            <p>{{ $return_policy->$content }}</p>
            <p>{{ __('lang.Kindly_understand_that') }}</p>
            <div class="conditions">
                <span>{{ __('lang.one') }}</span>
                <p>{{ __('lang.frist_condition') }}</p>
            </div>
            <div class="conditions">
                <span>{{ __('lang.two') }}</span>
                <p>{{ __('lang.second_condition') }}</p>
            </div>
            <a class="call-action" href="{{ route('contact_us') }}">{{ __('lang.contact_to') }}</a>
        </div>
    </section>
    <script src="{{ asset('assets/web/js/donation3.js') }}"></script>
@endsection

@push('scripts')
    <script src="https://cibpaynow.gateway.mastercard.com/checkout/version/61/checkout.js" data-error="errorCallback"
        data-cancel="cancelCallback"></script>
    <script type="text/javascript">
        function errorCallback(error) {

            console.log(JSON.stringify(error));

        }

        function cancelCallback() {

            console.log('Payment cancelled');

        }
    </script>

    <script>
        $("#donation").on("submit", function(e) {
            e.preventDefault()


            var form = $(this);
            var url = "{{ route('web.donations.createSession') }}";

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    console.log(data.status); // show response from the php script.

                    if (data.status) {
                        Checkout.configure({

                            session: {

                                id: data.session

                            },

                            interaction: {

                                merchant: {

                                    name: 'TESTCIB701357',

                                    address: {

                                        line1: '200 Sample St',

                                        line2: '1234 Example Town'

                                    }

                                }

                            }

                        });
                        Checkout.showPaymentPage();

                    }
                }
            });


        })
    </script>
@endpush
