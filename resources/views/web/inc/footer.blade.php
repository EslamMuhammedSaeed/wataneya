<section class="mt-8 mb-0 pt-5 pb-4" style="background-color:#0b2240;">
    <div class="container text-right">
        <div class="row">
            <div class="col-md-6 m-auto d-flex justify-content-center flex-column">
                <h4 class="mb-3 text-white" style="text-align: start">{{ __('lang.subscribe') }}</h4>
                <form action="{{ route('newsletter.store_user') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" name="email" class="form-control mb-sm-0"
                                    placeholder="{{ __('lang.email') }}">
                            </div>
                        </div>
                        <div class="col-4 pe-0" style="text-align: start">
                            <button type="submit"
                                class="btn bg-white mb-0 h-100 position-relative z-index-2">{{ __('lang.join') }}</button>
                        </div>
                    </div>
                </form>
                <h4 class="mb-3 mt-5 text-white" style="text-align: start">{{ __('lang.join_social') }}</h4>
                <div class="row footer-main pt-0" style="background-color:#0b2240">
                    <ul class="d-flex justify-content-start">
                        <li>
                            <a href="https://www.facebook.com/wataneya/" target="_blank" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/WataneyaSociety" target="_blank" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/amaaner" target="_blank" title="Youtube">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/wataneyasociety/" target="_blank"
                                title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://eg.linkedin.com/company/wataneya-society" target="_blank"
                                title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-md-5 me-auto">
                <div class="position-relative">
                    <a target="_blank"
                        href="https://google.com/maps/search/Wataneya%20Society%20(جمعية%20وطنية)/@30.086658477783203,31.328941345214844,17z?hl=en">
                        <img class="max-width-30 w-100 position-relative z-index-2 rounded"
                            src="{{ asset('img/cairo.jpg') }}" style="width: 300px !important" alt="image">
                    </a>
                </div>
                <ul class="support mt-3">
                    <li style="color:white;"><i class="fa-solid fa-phone fa-shake"
                            style="--fa-animation-duration: 3s;"></i> {{ __('lang.home_phone_wataneya') }} </li>
                    <li style="color:white;"><i class="fa-solid fa-mobile fa-shake"
                            style="--fa-animation-duration: 3s;"></i> {{ __('lang.phone_number_wataneya') }} </li>
                    <li style="color:white;"><i class="fa-solid fa-envelope fa-bounce"
                            style="--fa-animation-duration: 3s;"></i> Info@wataneya.org </li>
                    <li style="color:white;"><i class="fa-solid fa-map-location-dot fa-bounce"
                            style="--fa-animation-duration: 3s;"></i>{{ __('lang.address_wataneya') }}</li>
                </ul>
            </div>
        </div>
        <div class="text-right mr-3 mt-2">
            <p class="text-white">{{ __('lang.copy_rights') }}</p>
        </div>
    </div>

</section>
<div class="container remove-padding mb-3">
    <div class="col-xs-12 bottom-list-img">
        <h3 class="mb-3" style="font-family: 'dli';">{{ __('lang.wataneya_is_working_to_achieve_goals') }}</h3>
        <div class="text-center">
            <ul class="achieve-goals-imgs">
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b1.png"></li>
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b2.png"></li>
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b3.png"></li>
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b4.png"></li>
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b5.png"></li>
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b6.png"></li>
                <li><img style="width: 100px;height:auto !important" alt="internetPlus" src="https://wataneya.org/assets/web/img/b7.png"></li>

            </ul>
        </div>

    </div>
</div>