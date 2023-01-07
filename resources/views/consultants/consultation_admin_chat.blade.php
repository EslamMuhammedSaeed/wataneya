@extends('users.layout.app')
<!--nav-->
<!--nav-->
<!--start main section-->

@section('css')
    <link rel="stylesheet" href="{{ asset('css/section-5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-2.css') }}">


    <style>
        @font-face {
            font-family: 'dli';
            src: url('/fonts/DINNextLTArabic-Regular-2.ttf');
            /* src: url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2); */
        }

        .br-img {
            height: 60px;
        }

        @media (max-width: 520px) {
            .bs-stepper-content {
                padding: 0 20px 20px;
            }

            .bs-stepper-header {
                margin: 0 10px;
                text-align: center;
            }
        }

        @media (max-width:766px) {
            .br-img {
                height: 40px;
            }

            .tx-sm {
                font-size: 14px
            }
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Almarai', sans-serif !important;
        }

        .sidebar-dark-success {
            background-color: #034939ec !important;
            color: white !important;
        }

        [class*=sidebar-dark-] .sidebar a {
            color: white !important;
        }

        [class*=sidebar-dark] .brand-link,
        [class*=sidebar-dark] .brand-link .pushmenu {
            color: white !important;
        }

        [class*=sidebar-dark] .brand-link {
            border-bottom: 1px solid #999999;
        }

        [class*=sidebar-dark] .user-panel {
            border-bottom: none;
        }

        .nav-end-items {
            margin-right: auto;
        }

        .dataTables_filter {
            text-align: left !important;
        }

        div.dataTables_wrapper div.dataTables_filter input {
            margin-right: 0.5em;
        }

        dt-button-collection {
            right: 0 !important;
        }

        nav .nav-item p {
            font-weight: bold;
        }

        .dropdown-menu {
            left: 0 !important;
            right: auto !important;
        }

        [dir="rtl"] .voyager .navbar .navbar-nav .dropdown-menu,
        [dir="rtl"] .voyager .navbar.navbar-default .navbar-nav .dropdown-menu {
            background-color: #fff;
            display: block;
            position: absolute !important;
        }

        .navbar .open .dropdown-menu.dropdown-menu-animated {
            visibility: visible;
            opacity: 1;
            transition: opacity .5s, transform .5s;
            transition-timing-function: cubic-bezier(.2, 1, .3, 1);
            transform: scaleX(1) translateZ(0);
        }

        .navbar .dropdown.profile .dropdown-menu {
            width: 250px;
            padding: 18px;
        }

        .navbar-nav .nav-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .user-name {

            font-family: 'Almarai', sans-serif !important;
            /* font-size: 1rem;*/
            font-weight: bold;

        }

        .nav-treeview a {
            margin-right: 5px;
        }

        .nav-treeview p {
            font-size: 0.8rem;
        }

        .alert {
            margin-top: 10px;
        }
    </style>
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <section>
            <div class="container">
                <div class="chat-box">
                    <div class="image">
                        <img src="{{ filter_var($data->user->avatar, FILTER_VALIDATE_URL) ? $data->user->avatar : Voyager::image($data->user->avatar) }}"
                            alt="">
                        <span>{{ $data->user->name }}</span>
                    </div>
                    <div class="text-box">
                        <div class="box-content">
                            <div class="first-box">
                                <p>{{ $data->title }}</p>
                                <p>{!! $data->content !!}</p>
                            </div>
                            <div class="second-box">
                                <img src="{{ asset('img/Group 223.png') }}" alt="">
                                <img src="{{ asset('img/Group 224.png') }}" alt="">
                                <a href="{{ $data->attachment }}">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="time">
                        <span>{{ $data->updated_at }}</span>
                    </div>
                </div>

                @foreach ($reply as $key)
                    @if ($key->owner == 1 || $key->status == 'approved' || $key->status == 'rejected')
                        <div class="chat-box">
                            <div class="image">
                                <img src="{{ filter_var($data->consultant->user->avatar, FILTER_VALIDATE_URL) ? $data->consultant->user->avatar : Voyager::image($data->consultant->user->avatar) }}"
                                    alt="">
                                <span>{{ $data->consultant->user->name }}</span>
                            </div>

                            @if ($key->owner == 0 || $key->status == 'rejected')
                                <div class="text-box">
                                    <div class="box-content">
                                        <div class="first-box">
                                            <p>{!! $key->content !!}</p>
                                        </div>
                                        <div class="second-box">
                                            <img src="{{ asset('img/Group 223.png') }}" alt="">
                                            <img src="{{ asset('img/Group 224.png') }}" alt="">
                                            <a href="{{ $key->attachment }}">Download</a>
                                        </div>
                                        <div class="thired-box" style="color: red">
                                            <p>{!! $key->comment !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="text-box">
                                    <div class="box-content">
                                        <div class="first-box">
                                            <p>{!! $key->content !!}</p>
                                        </div>
                                        <div class="second-box">
                                            <img src="{{ asset('img/Group 223.png') }}" alt="">
                                            <img src="{{ asset('img/Group 224.png') }}" alt="">
                                            <a href="{{ $key->attachment }}">Download</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="time">
                                <span>{{ $key->updated_at }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach


                @if ($data->status == 'assigned')
                    <div class="footer-section">
                        <div class="container">
                            <span>Your Answer</span>
                            <div class="box-cont">
                                <img src="{{ asset('img/wataneya logo middle3.png') }}" alt="">
                                <div class="text-cont">
                                    <header>
                                        <ul>
                                            <li><i class="fa-thin fa-b"></i></li>
                                            <li><i class="fa-solid fa-i"></i></li>
                                            <li><i class="fa-solid fa-download"></i></li>
                                            <li><i class="fa-solid fa-download"></i></li>
                                            <li><i class="fa-solid fa-download"></i></li>
                                        </ul>
                                    </header>
                                    <form class="send" method="POST"
                                        action="{{ url('consultants/consultation/chat/store') }}">
                                        @csrf
                                        <textarea name="content" id=""></textarea>
                                        <button type="submit" name="id" value="{{ $id }}"><img
                                                src="{{ asset('img/Fill 2.png') }}" alt=""></button>
                                    </form>
                @endif
            </div>
    </div>
    </div>
    </div>

    <br><br>
    {{--       <div id="btn">
          <button>
              رد
          <i class="fa-solid fa-circle-plus"></i>
          </button>
          <button>ُقبول</button>
          <button>اغلاق الاستشارة</button>
      </div> --}}
    </div>
    </section>
    </div>
    <!-- /.content-wrapper -->
@endsection




@section('js')
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- AdminLTE -->
    <script src="./dist/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="./dist/js/pages/dashboard3.js"></script>
    <!-- jQuery -->

    <!-- InputMask -->
    <script src="./plugins/jquery-ui/jquery-ui.min.js"></script>


    <script src="./plugins/fullcalendar/main.js"></script>
    <script src="./plugins/bs-stepper/js/bs-stepper.min.js"></script>
@endsection
