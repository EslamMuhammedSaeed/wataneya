@extends('web.layouts.master')

@section('content')
    <div class="success">
        <div class="thank img">
            <img src="{{ asset('assets/web/img/heart.png') }}" alt="">
        </div>
        <div class="text">

            @if(app()->getLocale() == 'ar')


                <h1> السيد/ة  {{$donation->name}} </h1>

                <p>
                    شكراً لدعمكم...
                </p> <p>
                    ترعكم بقيمة   {{$donation->amount}}  جنيهاً يسهم في مهمتنا ورسالتنا من أجل حياة كريمة لكل يتيم.
                </p><p>
                    تحياتنا،
                </p><p>
                    فريق وطنية
                </p>

            @else
                <h1>
                    Thank you for your support, {{$donation->name}}.
                </h1>
                <p>
                Your donation with the amount of {{$donation->amount}}  EGP contributes directly to our mission towards quality of life
                </p> <p>

                for every orphan.

                </p> <p>


                Best regards,
                </p> <p>

                Wataneya team
                </p>

            @endif

        </div>
        <p>{{ __('lang.toShowAnneulReport') }} <a href="https://wataneya.org/storage/532/Wataneya-Annual-Report-2021-DigitalVersion.pdf" target="blank">{{ __('lang.clickHere') }}</a></p>
        <br>
        <a href="{{route('web.home.index')}}">{{__('lang.home')}}</a>
    </div>
@endsection

@push('scripts')



@endpush
