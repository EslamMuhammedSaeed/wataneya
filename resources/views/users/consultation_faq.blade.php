@extends('users.layout.app')
    <!--nav-->

 <!--nav-->
 <!--start main section-->
 @section('css')
    <link rel="stylesheet" href="{{ asset('css/Request.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FAQS.css') }}">



    <style>
        @font-face {
            font-family: 'dli';
            src:url('/fonts/DINNextLTArabic-Regular-2.ttf');
            /* src: url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2); */
        }
        .content-wrapper .h1{
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
        .br-img{
          height: 60px;
        }
        @media (max-width: 520px){
          .bs-stepper-content {
              padding: 0 20px 20px;
          }
          .bs-stepper-header {
              margin: 0 10px;
              text-align: center;
          }
        }
        @media (max-width:766px){
          .br-img{
            height: 40px;
          }
          .tx-sm{
            font-size: 14px
          }
        }
        body, h1, h2, h3, h4, h5, h6 {
          font-family: 'Almarai', sans-serif !important;
        }
        .sidebar-dark-success{
          background-color: #034939ec !important;
          color: white !important;
        }
        [class*=sidebar-dark-] .sidebar a {
            color: white !important;
        }
        [class*=sidebar-dark] .brand-link, [class*=sidebar-dark] .brand-link .pushmenu {
            color: white !important;
        }
        [class*=sidebar-dark] .brand-link {
            border-bottom: 1px solid #999999;
        }
        [class*=sidebar-dark] .user-panel {
            border-bottom: none;
        }
        .nav-end-items{
          margin-right: auto;
        }
        .dataTables_filter{
          text-align: left !important;
        }
        div.dataTables_wrapper div.dataTables_filter input {
          margin-right: 0.5em;
        }
        dt-button-collection{
          right:0 !important;
        }
        nav .nav-item p{
          font-weight: bold;
        }
        .dropdown-menu {
            left: 0 !important;
            right: auto !important;
        }
        [dir="rtl"] .voyager .navbar .navbar-nav .dropdown-menu, [dir="rtl"] .voyager .navbar.navbar-default .navbar-nav .dropdown-menu {
            background-color: #fff;
            display: block;
            position: absolute !important;
        }
        .navbar .open .dropdown-menu.dropdown-menu-animated {
            visibility: visible;
            opacity: 1;
            transition: opacity .5s,transform .5s;
            transition-timing-function: cubic-bezier(.2,1,.3,1);
            transform: scaleX(1) translateZ(0);
        }
        .navbar .dropdown.profile .dropdown-menu {
            width: 250px;
            padding: 18px;
        }
        .navbar-nav .nav-item{
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .user-name{

            font-family: 'Almarai', sans-serif !important;
            /* font-size: 1rem;*/
            font-weight: bold;

        }
        .nav-treeview a{
            margin-right: 5px;
        }
        .nav-treeview p{
            font-size: 0.8rem;
        }
        .alert{
          margin-top: 10px;
        }
      </style>

  @endsection


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <div class="FAQS p-5">
            <div class="text">
              <h4 class="mx-2">FAQ'S</h4>
              <br>
              <h1 class="text-bold ">الأسئلة الأكثر شيوعًا</h1>
              <h4>لديك أي أسئلة؟ وطنية هنا للمساعدة على اسئلتك</h4>

              <div>
                <form action="{{ Route('users.consultation.search') }}" method="GET" role="search" id="search">

                <div class="dropdown">
                    <select class="btn searchBtn dropdown-toggle" class="btn searchBtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="">
                      <option>الأقسام</option>
                         @foreach ($data as $item)
                         <option value=" {{ $item->id  }}">{{ $item->name }}</option>
                         {{-- <a class="dropdown-item" href="{{ route('users.consultation.index',['category'=>$item->name]) }}"></a> --}}

                        @endforeach
                    </select>
                </div>

                 <input type="search" class="form-control" aria-label="Small" name="search" value="" aria-describedby="inputGroup-sizing-sm" placeholder="ابحث هنا .. ">
              </div>
            </form>

            <div class="container btn">
            <div class="send w-50 my-5">
                <button class="btn w-50" type="submit" form="search" value="Submit">ابحث</button>
                </div>
            </div>
              </div>

          </div>

  <div class="container">

            <div class="accordion">
                @foreach ($cfaq as $key)
              <div class="accordion-item">
                <div class="accordion-item-header ">
                  <div class="circule"></div>
                  <h1 class="index">{{ $key->id }}</h1>

                    {{ $key->title }}

                </div>

                <div class="accordion-item-body">

                  <div class="accordion-item-body-content">
                     {!! $key->content !!}   </div>
                </div>
              </div>
              @endforeach


            </div>


          </div>
          <div class="d-flex justify-content-center">

            {{ $cfaq->links() }}
          </div>

          <div class="moreQ my-5">

            <div>
                    <p class="text-bold"> مازال لديك أسئلة؟   </p >
                <h6 >في حالة لم يتم الإجابة على أسئلتك، قم بطلب استشارة جديدة من هنا </h6>

            </div>
                <div class="btn my-5">
                    <button class="btnRequest">
                     <a href="{{ url('/users/consultation/request/create') }}" style="color:white">
                        طلب استشارة</a>
                    </button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="{{ asset('js/FAQS.js') }}"></script>

  @endsection
