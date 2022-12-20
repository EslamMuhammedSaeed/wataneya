@extends('users.layout.app')
<!--nav-->
<!--nav-->
<!--start main section-->

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Request.css') }}">


    <style>
        @font-face {
            font-family: 'dli';
            src: url('/fonts/DINNextLTArabic-Regular-2.ttf');
            /* src: url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2); */
        }

        .content-wrapper .h1 {
            width: 164px;
            height: 29px;

            font-family: 'DIN Next LT Arabic';
            font-style: normal;
            font-weight: 500;
            font-size: 19.8828px;
            line-height: 29px;
            text-align: right;
            letter-spacing: 0.01em;


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

    @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif



        <div class="content">

            <div class="container ">


                <div class="form w-50">



                    <div id="form">

                        <label for="inputPassword5" class="form-label">الاسم</label>
                        <input type="name" name="name" value="{{ $user->name }}" id="inputPassword5" class="form-control">
                    </div>


                    <div id="form">
                        <label for="inputPassword5" class="form-label "> البريد الالكتروني </label>
                        <input type="email" name="email" value="{{ $user->email }}" id="inputPassword5" class="form-control">
                    </div>


                    <div id="form">
                        <label for="inputPassword5" class="form-label"> رقم الهاتف </label>
                        <input type="text" value="{{ $phone }}" id="inputPassword5" class="form-control">
                    </div>

    {{-- <form method="POST" action="{{ Route('consultation.store') }}" class="main-form was-validated px-5" enctype="multipart/form-data">
        @csrf --}}
                    <form method="POST" action="{{ url('users/consultation/request/store') }}">
                        @csrf
                    <div id="form">
                        <label for="inputPassword5" class="form-label"> العنوان</label>
                        <input class="form-control " name="title" placeholder="العنوان:" id="inputPassword5" aria-describedby="required-description" required>
                    </div>


                    <div id="form">

                        <label for="inputPassword5" class="form-label"> ضع استشارتك هنا </label>


                        <div class="content mb-5">
                            <textarea class="form-control " name="content" placeholder="اكتب هنا :" id="floatingTextarea2" style="height: 100px" aria-describedby="required-description" required></textarea>
                            <div class="attach w-100 ">

                                <input class="btn w-100" type="file" name="attachment" multiple>
                                    اضف مرفق <i class="fa fa-paperclip"></i>

                            </div>
                        </div>


                    </div>


                    {{-- <div class="">

                    <label for="inputPassword5" class="form-label"> ما هي الطريقة التي تفضل وصول الرد عن طريقها
                    </label>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label " for="flexRadioDefault1">

                            البريد الالكتروني

                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label " for="flexRadioDefault2">

                            رسالة نصية على الهاتف المحمول (واتساب).

                        </label>

                        <div class="send w-100 my-5">
                            <button class="btn w-100">
                                ارسال
                            </button>
                        </div>



                    </div>



                </div> --}}

                    <div class="send w-100 my-5">
                        <button class="btn w-100">
                            ارسال
                        </button>
                    </div>
                </form>


                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
