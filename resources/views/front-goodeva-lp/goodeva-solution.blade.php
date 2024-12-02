@extends('layouts.app-front-goodeva-lp')

@section('title', 'Solutions')
{{-- Meta Section --}}

@section('meta_desc')
Temukan solusi - solusi yang akan membantu bisnis anda berkembang dengan hebat Bersama Goodeva Technology
@endsection

@section('meta_key')
Goodeva technology, goodeva software, goodeva, good evaluation, IT & digital solutions, jasa pembuatan aplikasi andorid, jasa pembuatan aplikasi ios, jasa pembuatan aplikasi website, smart safety, jasa penghubung api, perusahaan IT bekasi, perusahaan it jakarta
@endsection

@section('meta_auth')
goodeva
@endsection

{{-- End Meta Section --}}

@section('css_before')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endsection

@section('css_after')

{{-- <link rel="stylesheet" href="{{asset('public/css/materialize.min.css')}}"> --}}

<style>
  body,
  p,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {

    font-family: 'Inter', sans-serif !important;

  }

  body {
    background: #f5f5f5;
  }


  nav {

    height: auto;
  }

  /* .container { */
  /* width: auto; */
  /* } */



  nav ul {}




  /* CSS Sebelum Di Scroll */

  @media (min-width:767px) {
    .header .navbar {

      border-top: 2px solid #148c99;

    }

    .mt-header-solution {
      margin-top: -160px;
    }

  }

  .header .navbar {

    background: transparent;

  }



  .header .navbar .navbar-nav>li>a {

    color: #fff;

  }



  .header .navbar .navbar-nav>li>a:hover {

    color: #eeeeee;

  }



  .header .navbar .navbar-nav>.current>a {

    color: #fff
  }



  .header .navbar .navbar-nav>li>a>.fa-chevron-down {

    color: #fff;

  }



  .header .navbar .navbar-nav>li:hover a,
  .header .navbar .navbar-nav>li:hover a>i {

    color: #ffffff !important;

  }

  .header .navbar .navbar-collapse .navbar-nav>li>a:hover,
  .header .navbar .navbar-collapse .navbar-nav>li:hover a>i {
    color: #63A6B3 !important;
  }

  .header .navbar {
    box-shadow: none !important;
  }


  /* CSS Setelah Di Scroll */

  .header .navbar.navbar-default.navbar-scrolling .navbar-nav>li>a {

    color: #000;

  }

  .header .navbar.navbar-default.navbar-fixed-top .navbar-nav>li>a:hover {

    color: #eeeeee !important;

  }




  .header .navbar.navbar-default.navbar-scrolling .navbar-nav>li>a>.fa-chevron-down {

    color: #535161;

  }



  .header.scrolling-header .navbar.navbar-default.navbar-scrolling,
  .header.scrolling-header .navbar.navbar-default.navbar-scrolling-fixing {

    background: #f5f5f5;

    border-top: none;

  }

  /* .header.scrolling-header .navbar.navbar-default.navbar-fixed-top { */

    /* border-top: none; */

  /* } */



  .header .navbar.navbar-default.navbar-scrolling .navbar-nav>li:hover>a {

    color: #63A6B3 !important;

  }



  .solutions-head figure {

    width: 590px;

    margin: 0 auto -80px auto;

    position: relative;

  }



  @keyframes light-r {

    0% {

      transform: rotate(0) scale(1, 1) translate(0, 0);

    }

    100% {

      transform: rotate(360deg) scale(1, 1) translate(0, 0);

    }

  }



  @keyframes light {

    0% {

      opacity: 1;

    }

    50% {

      opacity: 0.6;

    }

    100% {

      opacity: 1;

    }

  }



  .solutions-head figure span {

    animation: light-r 10s infinite linear;

  }

  .solutions-head figure span {

    display: block;

    margin: 0 auto 0 auto;

  }



  .solutions-head .lights {

    animation: light 1s infinite linear;

  }



  .solusi .header p {

    padding-left: 17%;

    padding-right: 17%;

  }



  /* Zoom 150% */

  @media (min-width:1100px) and (max-width:1199px) {
    #ts-footer {
      margin-top: 30% !important;

    }

    .box-quest {
      margin-top: -25% !important;
    }
  }

  @media screen and (min-width: 1000px) and (max-width: 1098px) {

    .portfolio {

      padding-left: 20px !important;

    }



    .testimoni {

      padding: 8em 9em 6em 5em;

    }



    #ts-footer .ts-box {

      margin-top: -10.125rem !important;

    }

  }

  /* Zoom 125% */

  @media screen and (min-width: 1098px) and (max-width: 1300px) {

    .portfolio {

      padding-left: 20px !important;

    }

  }

  .solusi .row-iot p,
  .solusi .row-android p,
  .solusi .row-robotic p,
  .solusi .row-data p {
    margin-bottom: 4rem !important;
  }

  @media (min-width:767px) and (max-width:1000px) {
    .mt-center {
      margin-top: 0 !important;
    }

    .box-quest {
      margin-top: -40% !important;
    }

    .tablet-none {
      display: none !important;
    }

    #ts-footer {
      margin-top: 50% !important;
    }

    .tablet-none {
      display: none !important;
    }
  }


  @media (max-width:767px) {

    .row {

      flex-wrap: wrap;

      display: flex;

    }

    /* Ordering CSS Flexing */

    .wrap {

      display: flex;

      flex-direction: row;

      position: relative;

    }

    /* Ini untuk photography */

    .box:nth-child(1) {
      order: 2;
    }

    .box:nth-child(2) {
      order: 1;
    }

    nav i,
    nav [class^="mdi-"],
    nav [class*="mdi-"],
    nav i.material-icons {
      height: 0
    }

    .container {
      width: auto;
      max-width: 1280px;
    }

    .header .navbar {

      border-top: 2px solid #148c99;

    }

    .header .navbar {
      box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
    }

    @media (max-width:767px) {
      .header .navbar {
        box-shadow: none !important;
      }

      .header .navbar.bg-white {
        box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
      }

      .mt-sm-4rem {
        margin-top: 4rem !important;
      }
    }

    .header .navbar.navbar-default.navbar-fixed-top .navbar-nav>li>a:hover {

      color: #39aEBB !important;

    }

    .solusi .header h3 {
      font-size: 34px;
      line-height: 40px;
    }

    .content-title span {
      font-size: 32px;
    }

    .solusi .header h3 {
      font-size: 31px;
      line-height: 35px;
    }

    .solusi .header p {
      font-size: 16px !important;
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

    .mb-sm-0 {
      margin-bottom: 0 !important;
    }

    .px-rem1 {
      padding-left: 1rem !important;
      padding-right: 1rem !important;
    }

    .contact p {
      line-height: 24px !important;
    }

  }



  input:not([type]),
  input[type=text]:not(.browser-default),
  input[type=password]:not(.browser-default),
  input[type=email]:not(.browser-default),
  input[type=url]:not(.browser-default),
  input[type=time]:not(.browser-default),
  input[type=date]:not(.browser-default),
  input[type=datetime]:not(.browser-default),
  input[type=datetime-local]:not(.browser-default),
  input[type=tel]:not(.browser-default),
  input[type=number]:not(.browser-default),
  input[type=search]:not(.browser-default),
  textarea.materialize-textarea {

    border-bottom: 2px solid #DBDBDB;

  }



  .input-field>label {

    color: #AEAEAE;

    font-weight: 300;

  }



  .btn--send {

    padding: 0 50px;

    height: 43px;

    font-size: 13.5px;

    font-weight: 300;

  }

  .box-quest {
    margin-top: -45%;
  }

  .text-span-input {
    color: red;
    font-size: 12px;
  }

  @media (max-width:361px) {
    .solusi .header h3 {
      font-size: 28px !important;
    }

    .solusi .header p {
      font-size: 14px;
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

    .solusi .header p {
      padding-left: 0 !important;
      padding-right: 0 !important;
      font-size: 15px;
    }

    .solusi .row-iot h4,
    .solusi .row-robotic h4,
    .solusi .row-data h4 {
      line-height: 2rem;
      font-size: 26px;
    }

    .solusi .row-iot p,
    .solusi .row-android p,
    .solusi .row-robotic p,
    .solusi .row-data p {
      font-size: 14px;
    }

  }


  @media (max-width:412px) {
    .header-section.home-header {
      height: 112vh;
    }
  }

  @media (max-width:361px) {
    .header-section.home-header {
      height: 130vh;
    }
  }

  @media (max-width:321px) {
    .header-section.home-header {
      height: 143vh;
    }

    .contact h5 {
      font-size: 17px !important;
    }

    .contact p {
      font-size: 13px !important;
    }
  }

  @media (max-width:321px) {
    .content-title span {
      font-size: 24px;
      line-height: 2rem;
    }

    .header-section p {
      font-size: 14px;
    }

    .solusi .header h3 {
      font-size: 29px;
      line-height: 35px;
    }
  }
</style>

@endsection



@section('content')

<section class="header-section solutions-head home-header half-effect">

  <div class="container dark-content">

    <div class="row">

      <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-aos-duration="1500">

        <div class="content-title">

          <img src="{{asset('public/img/assets/solution/goodeva-logo-white-lights.png')}}" alt="" class="mb-5 mb-sm-0">

          <h2>

            <span><strong>{{ $text_lang[$default_lang]['section1']['title'] }}</strong></span>

          </h2>

        </div>

        <p class="mt-1 desktop-show"><?php echo $text_lang[$default_lang]['section1']['text1'] ?></p>
        <p class="mt-1 mobile-show"><?php echo $text_lang[$default_lang]['section1']['text1'] ?></p>

      </div>

    </div>

  </div>

</section>



<section class="component desktop-show" id="component">

  <div class="container">

    <img src="{{asset('public/img/assets/solution/solution-goodeva-component.png')}}" alt="">

  </div>

</section>

<section class="component mobile-show" id="component">

  <div class="">

    <div class="wrapper-component">

      <img src="{{asset('public/img/assets/solution/solution-goodeva-component-mobile.png')}}" alt="">

    </div>


  </div>

</section>





{{-- Section Solusi --}}

<section class="solusi mt-10 desktop-show" id="solusi">

  <div class="container">

    <div class="header text-center">

      <h3 class="mt-5 mb-2">{{ $text_lang[$default_lang]['section2']['title'] }}</h3>

      <p>{{ $text_lang[$default_lang]['section2']['text1'] }}</p>

    </div>

    <section class="section-1 wrap">

      <div class="row row-iot mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="1500">

        <div class="col-md-6 col-sm-6 col-xs-12 pl-5 pr-0 box">

          <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content1']['name'] }}</h4>

          <p>{{ $text_lang[$default_lang]['section2']['content1']['description'] }}</p>

        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 px-0 box">

          <img src="{{asset('public/img/assets/solution/iOT-with-artificial-intelligence.png')}}" alt="">

        </div>

      </div>

    </section>

    <div class="row row-android mt-5" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500" data-aos-delay="800">

      <div class="col-md-6 col-sm-6 col-xs-12 pl-0">

        <img src="{{asset('public/img/assets/solution/Android-iOS-aplikasi-development.png')}}" alt="">

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 pl-5 pr-0">

        <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content2']['name'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section2']['content2']['description'] }}</p>

      </div>

    </div>

  </div>

  <div class="bg-abu py-5">

    <div class="container">

      <section class="wrap">

        <div class="row bg-abu row-robotic mt-5" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">

          <div class="col-md-6 col-sm-6 col-xs-12 pl-5 pr-0 box">

            <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content3']['name'] }}</h4>

            <p>{{ $text_lang[$default_lang]['section2']['content3']['description'] }}</p>

          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 px-0 box">

            <img src="{{asset('public/img/assets/solution/Robotic-process-automation.png')}}" alt="">

          </div>

        </div>

      </section>

      <div class="row bg-abu row-data mt-5" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">

        <div class="col-md-6 col-sm-6 col-xs-12 pl-0">

          <img src="{{asset('public/img/assets/solution/data-management.png')}}" alt="">

        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 pl-5 pr-0">

          <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content4']['name'] }}</h4>

          <p>{{ $text_lang[$default_lang]['section2']['content4']['description'] }}</p>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="solusi mt-5 mobile-show" id="solusi">


  <div class="container">

    <div class="header text-center">

      <h3 class="mt-0 mb-2">{{ $text_lang[$default_lang]['section2']['title'] }}</h3>

      <p>{{ $text_lang[$default_lang]['section2']['text1'] }}</p>

    </div>

  </div>



  <div class="container">

    <section class="section-1 wrap">

      <div class="row row-iot mt-5 mt-sm-4rem mb-0" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true" data-aos-duration="1500">

        <div class="col-md-6 pl-5 pr-0 box">

          <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content1']['name'] }}</h4>

          <p>{{ $text_lang[$default_lang]['section2']['content1']['description'] }}</p>

        </div>

        <div class="col-md-6 px-0 box">

          <img src="{{asset('public/img/assets/solution/iOT-with-artificial-intelligence.png')}}" alt="">

        </div>

      </div>

    </section>

  </div>

  <div class="bg-abu">

    <div class="container">

      <div class="row row-android mt-5 mt-sm-4rem mb-0" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">

        <div class="col-md-6 pl-0">

          <img src="{{asset('public/img/assets/solution/Android-iOS-aplikasi-development.png')}}" alt="">

        </div>

        <div class="col-md-6 pl-5 pr-0">

          <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content2']['name'] }}</h4>

          <p>{{ $text_lang[$default_lang]['section2']['content2']['description'] }}</p>

        </div>

      </div>

    </div>

  </div>

  <div class="pb-5">

    <div class="container">


      <section class="wrap">

        <div class="row row-robotic mt-5 mt-sm-4rem mb-0" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">

          <div class="col-md-6 pl-5 pr-0 box">

            <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content3']['name'] }}</h4>

            <p>{{ $text_lang[$default_lang]['section2']['content3']['description'] }}</p>

          </div>

          <div class="col-md-6 px-0 box">

            <img src="{{asset('public/img/assets/solution/Robotic-process-automation.png')}}" alt="">

          </div>

        </div>

      </section>

    </div>

    <div class="bg-abu">

      <div class="container">

        <div class="row  row-data mt-5 mt-sm-4rem mb-0" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">

          <div class="col-md-6 pl-0">

            <img src="{{asset('public/img/assets/solution/data-management.png')}}" alt="">

          </div>

          <div class="col-md-6 pl-5 pr-0">

            <h4 class="mt-center">{{ $text_lang[$default_lang]['section2']['content4']['name'] }}</h4>

            <p>{{ $text_lang[$default_lang]['section2']['content4']['description'] }}</p>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

{{-- Akhir Section Solusi --}}



{{-- Section Portfolio --}}

<section class="section-compannies portfolio" id="portfolio" style="display: none;">

  <div class="header text-center">

    <h4 class="my-5 mb-2">Portofolio & Client</h4>

  </div>

  <div class="container-custom">

    <div class="row mx-0  desktop-show">

      <div class="col-lg-12 col-md-12">

        <img class="img-responsive " src="{{asset('public/img/assets/home/goodeva-portfolio.png')}}" alt="">



      </div>

    </div>

    <div class="row mx-0 mb-50p mobile-show">

      <div class="col-lg-12 col-md-12">

        <img class="img-responsive " src="{{asset('public/img/assets/home/goodeva-portfolio-m.png')}}" alt="">

      </div>

    </div>

  </div>

</section>

{{-- Akhir Section Portfolio --}}



{{-- Contact --}}

<section id="ts-footer">

  <div class="container">

    <div class="ts-box mb-0 py-5 px-5 ts-mt__n-10 px-rem1 contact px-rem1 box-quest mx-auto" data-animate="ts-fadeInUp">

      <h5 class="my-0 ml-2">{{ $text_lang[$default_lang]['section3']['title'] }}</h5>

      <p class="mt-2 ml-2 desktop-show">{{ $text_lang[$default_lang]['section3']['description'] }}</p>

      <p class="mt-2 ml-2 mobile-show">{{ $text_lang[$default_lang]['section3']['description'] }}</p>

      <div class="row mb-0 mt-3">

        <div class="col-md-12 col-xs-12">
          <form action="{{url('send-saran')}}" id="form-contact" method="post">

            @csrf

            <div class="row desktop-show">

              <div class="col-md-6 col-sm-6 col-xs-12 desktop-show">

                <div class="input-field  mb-1 col s12">

                  <input id="name" type="text" name="name">

                  <label for="name">{{ $text_lang[$default_lang]['section3']['input']['input1'] }}</label>
                  <span class="text-span-input" id="span_nama"></span>
                </div>

              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 desktop-show">

                <div class="input-field  mb-1 col s12">

                  <input id="email" type="text" name="email">

                  <label for="email">{{ $text_lang[$default_lang]['section3']['input']['input2'] }}</label>
                  <span class="text-span-input" id="span_email"></span>
                </div>

              </div>

            </div>

            <div class="row">

              <div class="col-md-12 col-xs-12 desktop-show">

                <div class="input-field mb-1 col s12">

                  <textarea name="message" class="materialize-textarea" id="message" cols="30" rows="10"></textarea>
                  <input type="hidden" name="from_url" value="solutions">
                  <label for="message">{{ $text_lang[$default_lang]['section3']['input']['input3'] }}</label>
                  <span class="text-span-input" id="span_pesan"></span>
                </div>

              </div>

            </div>

            <div class="row mb-0">
              <div class="col-md-12 col-xs-12">
                <div class="input-field col my-0 s12 desktop-show">
                  {!! NoCaptcha::display() !!}
                  <span class="text-span-input">{{ $errors->first('g-recaptcha-response') }}</span>
                </div>
              </div>
            </div>
            <div class="row mb-0">
              <div class="col-md-12 col-xs-12">
                <div class="input-field col s12 desktop-show">
                  <button class="btn btn--kirim" id="kirim_pesan" type="button">{{ $text_lang[$default_lang]['section3']['input']['submit'] }}</button>
                </div>
                <div class="mobile-show">
                  <a href="{{ url('contact') }}">
                    <button class="btn btn--kirim col-xs-12" id="kirim_pesan" type="button">{{ $text_lang[$default_lang]['section3']['input']['submit'] }}</button>
                  </a>
                </div>
              </div>
            </div>

            <div class="form-contact-status"></div>

          </form>

        </div>

      </div>

    </div>

  </div>

</section>

{{-- Akhir Contact --}}

@endsection



@section('js_after')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).ready(function() {

    @if(Session::has('success'))
    Swal.fire(
      "Berhasil!",
      "{{ Session::get('success') }}",
      "success"
    )
    @endif

    function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test($email);
    }

    $("#email").keyup(function() {
      var email = $('#email').val();
      if (email == "") {
        $("#span_email").html("Email Belum Terisi");
      } else if (!validateEmail(email)) {
        $("#span_email").html("Email tidak sesuai");
      } else {
        $("#span_email").html("");
      }
    });

    $("#name").keyup(function() {
      var name = $('#name').val();
      if (name == "") {
        $("#span_nama").html("Nama Belum Terisi");
      } else {
        $("#span_nama").html("");
      }
    });

    $("#message").keyup(function() {
      var message = $('#message').val();
      if (message == "") {
        $("#span_pesan").html("Pesan Belum Terisi");
      } else {
        $("#span_pesan").html("");
      }
    });

    $('#kirim_pesan').on('click', function() {
      var email = $('#email').val();
      var name = $('#name').val();
      var message = $('#message').val();

      if (email != "" && name != "" && message != "" && validateEmail(email)) {
        $('#form-contact').submit();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Form tidak boleh kosong!',
        })
      }



    })


  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>
@endsection