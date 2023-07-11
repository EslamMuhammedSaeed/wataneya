@php
    
    $lang = app()->getLocale() == 'ar' ? 'EN' : 'العربية';
    $language = app()->getLocale() == 'ar' ? 'en' : 'ar';
    
@endphp

@php
    
    function language2($attr)
    {
        return app()->getLocale() == 'ar' ? $attr : $attr . '_en';
    }
    $title2 = language2('title');
    
@endphp
<style>
    .social-list{
        font-size: 18px;
        font-weight: 400
    }
    .social-list li{
        padding: 0 3px;
    }
    @media (min-width: 768px){

        .navbar-brand{
                margin-inline-start: 180px !important;
        }
    }
</style>
<div class="container-fluid remove-padding head-top" style="padding: 10px 0">
    <div class="container remove-padding d-flex" style="min-height: 26px">




        <div class=" col-md-4 col-sm-4 head-links-main lign-items-center d-md-flex d-none">
            <ul>
                <li class="hidden-xs hidden-sm">
                    <a href="https://www.facebook.com/wataneya/" target="_blank" title="تطبيق الفيس بوك">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="hidden-xs hidden-sm">
                    <a href="https://twitter.com/WataneyaSociety" target="_blank" title="تطبيق التويتر">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="hidden-xs hidden-sm">
                    <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
                <li class="hidden-xs hidden-sm">
                    <a href="https://www.instagram.com/wataneyasociety/" target="_blank" title="Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="hidden-xs hidden-sm">
                    <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank" title="لينكد إن">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li class="phone-link"><a href="https://wataneya.org/ar/contact-us">{{ __('lang.contact_us') }}</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-4 slogen-main d-flex justify-content-center align-items-center">
            <p class="mt-0" style="font-size: 14px;">{{ __('lang.slogan') }}</p>
        </div>

        <div class="col-md-4 col-sm-4" style="text-align: end">
            <a href="{{ str_replace([env('APP_URL') . '/' . 'ar', env('APP_URL') . '/' . 'en'], env('APP_URL') . '/' . $language, url()->full()) }}"
                style="color: white;font-weight:bold">{{ $lang }}</a>
        </div>

    </div>
</div>
{{-- <div class="head-top">
    <div class="col-4 d-flex">
        <ul class="d-flex social-list">
            <li class="">
                <a href="https://www.facebook.com/wataneya/" target="_blank" title="تطبيق الفيس بوك">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="">
                <a href="https://twitter.com/WataneyaSociety" target="_blank" title="تطبيق التويتر">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="">
                <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
            <li class="">
                <a href="https://www.instagram.com/wataneyasociety/" target="_blank" title="Instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li class="">
                <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank" title="لينكد إن">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="phone-link"><a href="https://wataneya.org/ar/contact-us">{{ __('lang.contact_us') }}</a></li>
        </ul>
        
    </div>
    <div class="col-4 slogen-main">
        <p>{{ __('lang.slogan') }}</p>
    </div>

</div> --}}
<!-- Navbar Transparent -->


<div class="container-fluid position-sticky z-index-sticky top-0">
    <div class="row mx-0">
        <div class="col-12">
            <nav
                class="navbar navbar-expand-lg bg-white top-0 z-index-fixed shadow position-absolute py-2 start-0 end-0">

                <div class="container-fluid px-0">
                    <a class="navbar-brand py-1 font-weight-bolder" style=""
                        href="{{ route('landing') }}" rel="tooltip" title="Designed and Coded by Creative Tim"
                        data-placement="bottom" target="_blank">
                        <img class="py-1" height="65px" src="{{ asset('img/logo_main.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler shadow-none me-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto text-right">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link pe-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <i class="material-icons opacity-6 ms-2 text-md">dashboard</i> --}}
                                    <span class="ar text-md text-bold pb-1">{{ __('lang.about') }}</span>

                                    <img src="{{ asset('land2/assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                        class="arrow me-auto me-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation me-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3 shadow-sm"
                                    aria-labelledby="dropdownMenuPages">
                                    <div class="">

                                        <a href="{{ route('web.pages.who_we_are') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.Who We Are') }}</span>
                                        </a>
                                        <a href="{{ route('web.board.index') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.board_members') }}</span>
                                        </a>
                                        <a href="{{ route('web.team_members.index') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.staff') }}</span>
                                        </a>

                                        <a href="{{ route('web.pages.alliances') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.Alliances') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.certificates') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.awards') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.impact') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.impact') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.vacancies') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.join_wataneya') }}</span>
                                        </a>
                                    </div>



                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link pe-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <i class="material-icons opacity-6 ms-2 text-md">dashboard</i> --}}
                                    <span class="ar text-md text-bold pb-1">{{ __('lang.services') }}</span>

                                    <img src="{{ asset('land2/assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                        class="arrow me-auto me-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation me-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuPages">
                                    <div class="">

                                        @forelse ($services_nav as $service_nav)
                                            <a href="{{ route('web.pages.services', $service_nav->id) }}"
                                                class="dropdown-item border-radius-md">
                                                <span>{{ $service_nav->$title2 }}</span>
                                            </a>
                                        @empty
                                        @endforelse

                                        {{-- <a href="https://wataneya.org/ar/services?service_category_id=1"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.Alternative care system development')}}</span>
                                        </a>
                                        <a href="https://wataneya.org/ar/services?service_category_id=2"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.Consultation')}}</span>
                                        </a>
                                        <a href="https://wataneya.org/ar/services?service_category_id=3"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.Learning and development')}}</span>
                                        </a>

                                        <a href="https://wataneya.org/ar/services?service_category_id=4"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.Knowledge creation')}}</span>
                                        </a> --}}
                                    </div>



                                </div>
                            </li>

                            <li class="nav-item  mx-2">
                                <a href="{{ route('web.pages.sanad') }}"
                                    class="nav-link pe-2 d-flex cursor-pointer align-items-center">
                                    {{-- <i class="material-icons opacity-6 ms-2 text-md">dashboard</i> --}}
                                    <span class="ar text-md text-bold pb-1">{{ __('lang.sanad') }}</span>

                                </a>

                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link pe-2 d-flex cursor-pointer align-items-center"
                                    id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <i class="material-icons opacity-6 ms-2 text-md">dashboard</i> --}}
                                    <span class="ar text-md text-bold pb-1">{{ __('lang.media_center') }}</span>

                                    <img src="{{ asset('land2/assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                        class="arrow me-auto me-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation me-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuPages">
                                    <div class="">

                                        <a href="{{ route('web.news.index') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.news') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.campaigns') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.campaigns') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.events') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.events') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.media_bags') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.media_kit') }}</span>
                                        </a>

                                        <a href="{{ route('web.pages.technical_reports') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.technical_reports') }}</span>
                                        </a>
                                        <a href="{{ route('web.pages.periodical_newsletters') }}"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.periodical_newsletters') }}</span>
                                        </a>
                                    </div>



                                </div>
                            </li>

                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link pe-2 d-flex cursor-pointer align-items-center"
                                    id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <i class="material-icons opacity-6 ms-2 text-md">dashboard</i> --}}
                                    <span class="ar text-md text-bold pb-1">{{ __('lang.our_partners') }}</span>

                                    <img src="{{ asset('land2/assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                        class="arrow me-auto me-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation me-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuPages">
                                    <div class="">

                                        @forelse ($partners as $partner)
                                            <a href="{{ route('web.pages.partners', $partner->slug) }}"
                                                class="dropdown-item border-radius-md">
                                                <span>{{ $partner->$title2 }}</span>
                                            </a>
                                        @empty
                                        @endforelse

                                        {{-- <a href="https://wataneya.org/ar/pages/donors"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.donors') }}</span>
                                        </a>
                                        <a href="https://wataneya.org/ar/pages/private-sector"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.private_sector') }}</span>
                                        </a>

                                        <a href="https://wataneya.org/ar/pages/civil-society-and-initiatives"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.civil_society') }}</span>
                                        </a>
                                        <a href="https://wataneya.org/ar/pages/educational-sector"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.educational_institutions') }}</span>
                                        </a>
                                        <a href="https://wataneya.org/ar/pages/media-parties"
                                            class="dropdown-item border-radius-md">
                                            <span>{{ __('lang.media_bodies') }}</span>
                                        </a> --}}
                                    </div>


                                </div>
                            </li>




                            @if (!Auth::user())
                                <li class="nav-item my-auto me-3 me-lg-7"
                                    style="  margin-inline-start: 15rem !important;">

                                    <a href="{{ route('web.donations.index') }}"
                                        class="btn  btn-dark btn-navy  ar text-md mb-0 ms-1 mt-2 shadow-md mt-md-0 "
                                        style="font-weight: 500;background-color:#3ec1ce">{{ __('lang.donate_now') }}</a>


                                    <a href="{{ route('login') }}"
                                        class="btn  btn-dark btn-navy  ar text-md mb-0 ms-1 mt-2 shadow-md mt-md-0"
                                        style="font-weight: 500;background-color:#3ec1ce">{{ __('lang.login') }}</a>

                                </li>
                            @else
                                <li class="nav-item dropdown dropdown-hover mx-2"
                                    style="  margin-inline-start: 15rem !important;">
                                    <a class="nav-link pe-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{-- <i class="material-icons opacity-6 ms-2 text-md">dashboard</i> --}}
                                        <span class="ar text-md text-bold pb-1">{{ Auth::user()->name }}</span>

                                        <img src="{{ asset('land2/assets/img/down-arrow-dark.svg') }}"
                                            alt="down-arrow" class="arrow me-auto me-md-2">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation me-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="">

                                            <a href="{{ route('dashboard') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>{{ __('lang.profile') }}</span>
                                            </a>
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item border-radius-md">
                                                    <span>{{ __('lang.logout') }}</span>
                                                </button>
                                            </form>

                                        </div>


                                    </div>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
