@extends('layouts.app-front-goodeva-lp')

@section('title', 'Careers')
{{-- Meta Section --}}

@section('meta_desc')
Punya ide untuk inovasi digitalisasi dengan technology untuk membuat bisnis menjadi lebih efektif & efisien mari bersama goodeva kembangkan bisnis anda.
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

<!-- Compiled and minified CSS -->

{{-- <link rel="stylesheet" href="{{asset('public/css/materialize.min.css')}}"> --}}

{{-- <link rel="stylesheet" href="{{asset('public/css/style-custom.css')}}"> --}}



<style>
  .box-img-m {
    width: 100px;
    height: auto;
  }

  .title {
    font-weight: bold;
    line-height: 20px;
    min-height: 6vh;
  }

  .desc {
    line-height: 24px;
    color: black;
  }

  .ninja-text-mobile {
    font-size: 12px;
    margin-top: -10px;
    line-height: 24px;
  }

  .ninja-container {
    margin-top: 5%;
  }


  .desc-title {
    font-weight: 500;
    line-height: 24px;
    color: #666666;
  }

  .desc-title-mobile {
    font-weight: 500;
    line-height: 24px;
    color: white;
  }

  .header-desc {
    font-size: 18px;
    color: white;
  }

  .heading-title .header-title {
    color: white;
    line-height: 60px;
    margin-top: 0px;
  }

  .btn-primary-m {
    background-color: #ffffff;
    padding: 0 18px;
    border-radius: 7px;
    border: 1px solid #ffffff;
    color: #31A9B7;
  }


  .box-img {
    width: 165px;
    border-radius: 100px;
  }

  .desc-m {
    line-height: 20px;
    width: auto;
    margin-right: 17%;
  }

  .section-heading .heading-menuname p {

    color: #2B2A35;

    margin-bottom: 0;

    font-weight: 400;

    letter-spacing: 0.03px;

    font-size: 18px;

  }


  _::-webkit-full-page-media,
  _:future,
  :root .wa-icon {
    width: 40px;
    text-align: center;
    /* margin: auto; */
    margin-left: 15px;
    margin-top: 12px;
  }

  .wa-icon {
    width: 30px;
    text-align: center;
    /* margin: auto; */
    margin-left: 21px;
    margin-top: 19px;
  }

  /*--- zoom 125% (main media screen)  ---*/
  @media screen and (min-width: 1280px) and (max-width: 1300px) {
    .title {
      font-weight: bold;
      line-height: 20px;
      min-height: 6vh;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .title {
      font-weight: bold;
      line-height: 20px;
      min-height: 6vh;
    }
  }

  /* 
    desktop zoom custom1   

    main width: 1367px;
    */
  @media screen and (min-width: 1321px) and (max-width: 1380px) {
    .title {
      font-weight: bold;
      line-height: 20px;
      min-height: 6vh;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .title {
      font-weight: bold;
      line-height: 20px;
      min-height: 6vh;
    }
  }


  @media(min-width:767px) and (max-width:992px) {
    .section-comments {
      padding-top: 100px !important;
    }

    .box1:nth-child(2) {
      text-align: center;
    }
  }

  @media (min-width:767px) and (max-width:1000px) {
    .header-contact.hidden-xs .row {
      flex-wrap: wrap;
      display: flex;

    }

    .box1:nth-child(1) {
      /* order:2; */
    }

    .box1:nth-child(2) {
      /* order:1; */
      padding-left: 0 !important;
    }

    .section-heading .heading-text p {
      font-size: 16px;
    }

    .section-heading .heading-title {
      font-size: 38px;
    }

    .mt-tablet-1rem {
      margin-top: 1rem;
    }

    .bg--rekrut {
      padding-top: 4rem;
      background-size: auto
    }

    .title {
      text-align: center;

    }

    .desc-title {
      text-align: center;
    }

    .box-img-m {
      width: 100px;
      height: auto;
      margin-left: 42%;
    }

  }

  @media (max-width:767px) {


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

    nav {
      height: auto !important;
    }

    .l-burger {
      top: 9px !important;
    }

    .col-xs-12 {
      width: 100%;
    }

    .desc-m {
      line-height: 24px;
    }

    .ninja-container {
      margin-top: 25%;
    }

    .bg--rekrut {
      padding-top: 4rem;
      background-size: auto;
    }

    .heading-title .header-title {
      font-size: 28px;
      line-height: 40px;

    }


  }

  @media screen and (max-width: 376px) {
    .maxh-m {
      max-height: 320px;
    }

    .icon-pin {
      width: 10% !important;
    }

    .box-img {
      width: 75%;
      border-radius: 100px;
    }
  }


  @media (max-width:320px) {
    .desc-m {
      line-height: 20px;
    }

  }

  .section-heading .heading-title {

    color: #133A72;

    line-height: 43px;

    font-size: 40px;

    margin-top: 6px;

    letter-spacing: 0.08px;

  }



  .section-heading .heading-text p {

    color: #2B2A35;

    font-weight: 300;

    font-size: 18px;

    line-height: 27px;

    letter-spacing: 0.03px;

    margin-top: 15px !important;

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

    text-transform: none;

  }



  .text--findus-m {

    color: #1D1D1D;

    font-size: 32px;

    font-weight: 700;

  }



  .block-title-office {

    font-family: 'Inter', sans-serif;

    font-weight: 700;
    color: #143477;

  }



  .block--office {

    padding: 17px 20px !important;

  }



  .block-desk-office p {

    font-weight: 400;
    font-size: 16px;
    letter-spacing: 0.07px;
    line-height: 24px !important;


  }

  .col-2 img {

    margin-left: -4%;

  }

  .col-2 .col-md-5 {

    padding-left: 0;

  }

  .text-span-input {
    color: red;
    font-size: 12px;
  }

  .bg-header-to {
    border-radius: 3%;
  }

  .border-2px {
    border: 2px solid #dbd5db;
  }

  .time-job {
    padding: 6px;
    background: #31a9b72e;
    border-radius: 5px 0px;
    color: #31A9B7;
  }

  .dsp-flex {
    display: flex;
  }

  .icon-pin {
    width: 5%;
  }

  .button-blue {
    background: #63A6B3;
    border: 0px;
    padding: 7px 10px;
    border-radius: 5px;
    /* color: #ffff; */
  }

  .scroll-to-job {
    padding: 5px;
    background: #fff;
    border-radius: 7px;
    color: #31A9B7;
    font-weight: 600;
  }

  .block-desk-office p,
  .block-desk-office p a {
    color: #2B2A35 !important;
  }
</style>

<link rel="stylesheet" href="{{asset('public/css/style-mobile.css')}}">

@endsection





@section('content')

<!------------ banner halaman ------------>
{{-- Ini Header Dekstop --}}
<section class="header-contact wrap hidden-xs" style="background-color: #31A9B7; padding-top: 90px;">

  <div class="container-custom">

    <div class="row">

      <div class="col-md-7 col-sm-12">

        <div class="heading-title pt-5 mt-5">
          <h2 class="header-title">
            <?php echo $text_lang[$default_lang]['section1']['title'] ?>
          </h2>
        </div>

        <div class="heading-text">
          <p class="mt-1 desktop-show header-desc" style="margin-right: 21%;"><?php echo $text_lang[$default_lang]['section1']['text1'] ?></p>
        </div>

        <div class="heading-text py-5">
          <span class="scroll-to-job">{{ $text_lang[$default_lang]['section1']['text2'] }}</span>
        </div>

      </div>

      <div class="col-md-5 col-sm-12 text-center">

        <div class="section-heading mb-0">

          <img src="{{ asset('public/img/assets/career/goodeva-career.png') }}" alt="" class="bg-header-to">

        </div>

      </div>

    </div>

  </div>

</section>
{{-- Akhir Ini Header Dekstop --}}

{{-- Ini Header-1 Mobile --}}
<section class="header-contact hidden-sm hidden-md hidden-lg" style="background-color: #31A9B7; padding-top: 90px;">
  <div class="row mx-0 my-0">
    <div class="col-sm-12 text-center px-0">
      <div class="full-img">
        <img src="{{ asset('public/img/assets/career/goodeva-career.png') }}" alt="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="container-mobile">

        <div class="heading-title">
          <h2 class="header-title">
            <?php echo $text_lang[$default_lang]['section1']['title'] ?>
          </h2>
        </div>

        <div class="heading-text">
          <p class="mt-1 mobile-show desc-title-mobile"><?php echo $text_lang[$default_lang]['section1']['text1'] ?></p>
        </div>

        <div class="heading-text pb-5 pt-4">
          <span class="scroll-to-job">{{ $text_lang[$default_lang]['section1']['text2'] }}</span>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Akhir Header-1 Mobile --}}
<!------------ banner halaman ------------>





{{--- Section Join Us --}}
<section style="background-color: #fcfcfc;" class="py-5 px-3">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <div class="section-heading mb-4 text-center">
        <div class="text--findus-m">
          <?php echo $text_lang[$default_lang]['section2']['title'] ?>
        </div>
        <br>
        <p class="mt-1 desktop-show desc-title "><?php echo $text_lang[$default_lang]['section2']['text1'] ?></p>
        <p class="mt-1 mobile-show desc-title my-2"><?php echo $text_lang[$default_lang]['section2']['text1'] ?></p>
      </div>
    </div>
  </div>


  {{-- Join Us Desktop --}}
  <div class="container hidden-xs">
    <div class="row mx-0">

      @for($i_content = 0; $i_content < count($text_lang[$default_lang]['section2']['content']); $i_content++) <!-- comment separator -->
        <div class="col-md-4 col-lg-4">

          <img src="{{ asset('public/img/assets/career/'.$text_lang[$default_lang]['section2']['content'][$i_content]['icon']) }}" class="box-img-m" alt="">

          <p class="title mt-2">{{ $text_lang[$default_lang]['section2']['content'][$i_content]['title'] }}</p>

          <p class="desc-title">{{ $text_lang[$default_lang]['section2']['content'][$i_content]['description'] }}</p>

        </div>
        @endfor

    </div>

  </div>
  {{-- end Join Us Desktop--}}

  {{-- Join Us Mobile --}}
  <div class="container-custom mt-0  hidden-sm hidden-md hidden-lg">

    <div class="row mx-0 my-0">

      @for($i_content = 0; $i_content < count($text_lang[$default_lang]['section2']['content']); $i_content++) <!-- comment separator -->
        <div class="col-xs-12 col-sm-12 my-2">
          <img src="{{ asset('public/img/assets/career/'.$text_lang[$default_lang]['section2']['content'][$i_content]['icon']) }}">

          <p class="title">{{ $text_lang[$default_lang]['section2']['content'][$i_content]['title'] }}</p>

          <p class="desc">{{ $text_lang[$default_lang]['section2']['content'][$i_content]['description'] }}</p>
        </div>
        @endfor
    </div>

  </div>
  {{-- end Join Us Mobile --}}

</section>
{{-- Akhir Section Join Us --}}





{{-- Section Explore Teams --}}
<section style="background-color: #f5f5f5;" class="py-5 px-3">

  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="text-center">
        <div class="text--findus-m">
          {{ $text_lang[$default_lang]['section3']['title'] }}
        </div>
        <br>
        <p class="mt-1 desktop-show desc-title"><?php echo $text_lang[$default_lang]['section3']['text1'] ?></p>
        <p class="mt-1 mobile-show desc-title"><?php echo $text_lang[$default_lang]['section3']['text1'] ?></p>
      </div>
    </div>
  </div>

  <!-------- explore team desktop -------->
  <?php
  $i_album = 0;
  $n_album_baris = 0;
  ?>

  <div class="container hidden-xs">
    @for($i_job = 1; $i_job <= count($text_lang[$default_lang]['section3']['list_job']); $i_job++) <!-- separator -->
      @if(($i_job - 1) % 4 == 0 || $i_job == 1)
      <div class="row mx-0 text-center">
        @endif

        <div class="col-sm-3 col-md-3 col-lg-3 py-2">

          <div class="block b-radius10px border-2px">

            <div class="row mx-0">

              <div class="col-md-12 col-lg-12 pb-2 px-0 dsp-flex">
                <span class="time-job">{{ $text_lang[$default_lang]['section3']['list_job'][$i_job]['status'] }}</span>
              </div>

              <div class="col-md-12">

                <img src="{{ asset('public/img/assets/career/'.$text_lang[$default_lang]['section3']['list_job'][$i_job]['icon']) }}" class="box-img" alt="">

              </div>
              <div class="col-md-12 pt-2 px-2">

                <p>Goodeva Ninja</p>

                <p class="title">{{ $text_lang[$default_lang]['section3']['list_job'][$i_job]['position'] }}</p>

                <span>
                  <img src="{{ url('public/asset-goodeva-lp/marker/pin-location.png') }}" alt="" srcset="" class="icon-pin">
                  {{ $text_lang[$default_lang]['section3']['list_job'][$i_job]['location'] }}
                </span>

                <div class="row">
                  <div class="col-md-12 col-lg-12 py-3">
                    <button class="button-blue">
                      <?
                      // $textSubject = "Apply_" . $text_lang[$default_lang]['section3']['list_job'][. $i_job]['position'] . "_Goodeva";
                      // $textBody = "Hallo kandidat goodeva ninja, %0D%0A %0D%0A Mohon lengkapi data di bawah ini! %0D%0A %0D%0A Nama : %0D%0A Domisili : %0D%0A Posisi yang di lamar : " . $text_lang[$default_lang]['section3']['list_job'][. $i_job]['position'] . " %0D%0A %0D%0A Mohon silakan cantumkan CV dan portofolio dibawah ini!";
                      ?>
                      <!-- <a class="text-white" style="text-decoration: none;" target="_blank" href="<?php echo $text_lang[$default_lang]['section3']['list_job'][$i_job]['link'] ?>"> -->
                      <!-- Apply now -->
                      <!-- </a> -->
                      <a class="text-white" style="text-decoration: none;" target="_blank" href="<?php echo $text_lang[$default_lang]['section3']['list_job'][$i_job]['link'] ?>">
                        Apply now
                      </a>
                    </button>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
        @if(($i_job % 4) == 0 || $i_job == count($text_lang[$default_lang]['section3']['list_job']))
      </div>
      @endif
      @endfor

  </div>
  <!-------- end explore team desktop -------->


  <!-------- explore team mobile -------->
  <?php
  // echo count($text_lang[$default_lang]['section3']['list_job'])
  ?>

  <div class="container-custom hidden-sm hidden-md hidden-lg">
    @for($i_job = 1; $i_job <= count($text_lang[$default_lang]['section3']['list_job']); $i_job++) <!-- separator -->
      @if($i_job == 1 || ($i_job % 2) == 0)
      <div class="row mx-0 my-0 text-center">
        @endif
        <div class="col-xs-6 col-sm-6 py-1 px-1">

          <div class="block b-radius10px border-2px maxh-m">

            <div class="row mx-0">

              <div class="col-xs-12 col-sm-12 pb-2 px-0 dsp-flex">
                <span class="time-job">{{ $text_lang[$default_lang]['section3']['list_job'][$i_job]['status'] }}</span>
              </div>

              <div class="col-xs-12 col-sm-12">

                <img src="{{ asset('public/img/assets/career/'.$text_lang[$default_lang]['section3']['list_job'][$i_job]['icon']) }}" class="box-img" alt="">

              </div>
              <div class="col-xs-12 col-sm-12 pt-2 px-2">

                <p>Goodeva Ninja</p>

                <p class="title">{{ $text_lang[$default_lang]['section3']['list_job'][$i_job]['position'] }}</p>

                <span>
                  <img src="{{ url('public/asset-goodeva-lp/marker/pin-location.png') }}" alt="" srcset="" class="icon-pin">
                  {{ $text_lang[$default_lang]['section3']['list_job'][$i_job]['location'] }}
                </span>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 py-3">
                    <button class="button-blue">
                      <a class="text-white" style="text-decoration: none;" href="<?php echo $text_lang[$default_lang]['section3']['list_job'][$i_job]['link'] ?>">
                        Apply now
                      </a>
                    </button>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
        @if(($i_job % 2) == 0 || $i_job == count($text_lang[$default_lang]['section3']['list_job']))
      </div>
      @endif
      @endfor
  </div>
  <!-------- explore team mobile -------->

</section>
{{-- Akhir Section Teams --}}





<section style="background-color: #f9f9f9;">
  {{-- Ini Header Mobile --}}

  <div class="container-mobile pt-5">
    <div class="row pb-4 mx-0 col-2 mb-0">
      <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="section-heading mb-0">

          <img src="{{ asset('public/img/assets/contact/contact-goodeva.png') }}" alt="" class="b-radius10px">

        </div>

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 mt-3">

        <div class="section-heading mb-4">

          <div class="text--findus-m">
            {{ $text_lang[$default_lang]['section4']['title'] }}
          </div>

        </div>

        <div class="row">

          <div class="col-md-12">
            <h5 class="mb-5">{{ $text_lang[$default_lang]['section4']['text1'] }}</h5>
          </div>

          <div class="col-md-6">

            <div class="block--office bg-white px-3 py-2 b-radius10px">

              <div class="row mb-0">

                <div class="col-md-12">

                  <div class="block-title-office">

                    {{ $text_lang[$default_lang]['section4']['card1']['name'] }}

                  </div>

                </div>

                <div class="col-md-12">

                  <div class="block-desk-office">

                    <p>{{ $text_lang[$default_lang]['section4']['card1']['address'] }}</p>

                    <p><?php echo $text_lang[$default_lang]['section4']['card1']['contact'] ?></p>

                    <p><?php echo $text_lang[$default_lang]['section4']['card1']['email'] ?></p>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-6 of-3 mt-tablet-1rem">

            <div class="block--office bg-white px-3 py-2 b-radius10px">

              <div class="row mb-0">

                <div class="col-md-12">

                  <div class="block-title-office">

                    {{ $text_lang[$default_lang]['section4']['card2']['name'] }}

                  </div>

                </div>

                <div class="col-md-12">

                  <div class="block-desk-office">

                    <p>{{ $text_lang[$default_lang]['section4']['card2']['address'] }}</p>

                    <p><?php echo $text_lang[$default_lang]['section4']['card2']['contact'] ?></p>

                    <p><?php echo $text_lang[$default_lang]['section4']['card2']['email'] ?></p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  </div>

</section>
<!--./section comment -->
{{-- Akhir Header Mobile --}}

{{-- Section Goodeva Ninja --}}
{{-- Desktop Goodeva Ninja --}}
<section class="section-comments bg--rekrut desktop-show pt-5 pb-0" style="display: none;">

  <div class="container ninja-container">

    <div class="row mt-4 mb-3">

      <div class="col-md-12 text-center">

        <div class="heading-title" style="color: #fff;">
          <h2>
            We are <span style="font-weight: 600;">Goodeva</span> Ninja
          </h2>
        </div>

        <p class="ninja-text-mobile">We are dreamer, optimistic, work fast & growing together</p>

      </div>

    </div>
  </div>

</section>
<!--./section comment -->

{{-- Mobile Goodeva Ninja--}}
<section class="section-comments bg--rekrut-mobile mobile-show pt-5" style="display: none;">

  <div class="container hidden-xs ninja-container">

    <div class="row mt-4 mx-0 text-center">

      <div class="col-md-12 ">

        <div class="heading-title" style="color: #fff;">
          <h4>
            We are <span style="font-weight: 600;">Goodeva</span> Ninja
          </h4>
        </div>

        <p class="ninja-text-mobile">We are dreamer, optimistic, work fast & growing together</p>

      </div>

    </div>

  </div>
  <div class="container ninja-container hidden-lg hidden-md hidden-sm">

    <div class="row mt-4 mx-0 text-center">

      <div class="col-md-12 ">

        <div class="heading-title" style="color: #fff;">
          <h4>
            We are <span style="font-weight: 600;">Goodeva</span> Ninja
          </h4>
        </div>

        <p class="ninja-text-mobile">We are dreamer, optimistic, work fast & growing together</p>

      </div>

    </div>

  </div>

</section>
{{-- Akhir Section Goodeva Ninja--}}
@endsection




@section('js_after')

<!-- Compiled and minified JavaScript -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
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

    $("#email_mobile").keyup(function() {
      var email = $('#email_mobile').val();
      if (email == "") {
        $("#span_email_mobile").html("Email Belum Terisi");
      } else if (!validateEmail(email)) {
        $("#span_email_mobile").html("Email tidak sesuai");
      } else {
        $("#span_email_mobile").html("");
      }
    });

    $("#name_mobile").keyup(function() {
      var name = $('#name_mobile').val();
      if (name == "") {
        $("#span_nama_mobile").html("Nama Belum Terisi");
      } else {
        $("#span_nama_mobile").html("");
      }
    });

    $("#message_mobile").keyup(function() {
      var message = $('#message_mobile').val();
      if (message == "") {
        $("#span_pesan_mobile").html("Pesan Belum Terisi");
      } else {
        $("#span_pesan_mobile").html("");
      }
    });

    $('#kirim_pesan_mobile').on('click', function() {
      var email = $('#email_mobile').val();
      var name = $('#name_mobile').val();
      var message = $('#message_mobile').val();

      if (email != "" && name != "" && message != "" && validateEmail(email)) {
        $('#form-contact-mobile').submit();
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

@endsection