@extends('layouts.app-front-goodeva-lp')

@section('title', 'Contact')
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
  .section-heading .heading-menuname p {

    color: #2B2A35;

    margin-bottom: 0;

    font-weight: 700;

    letter-spacing: 0.03px;

    font-size: 18px;

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



  .text--findus {

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

  .block-desk-office p,
  .block-desk-office p a {
    color: #2B2A35 !important;
  }
</style>

<link rel="stylesheet" href="{{asset('public/css/style-mobile.css')}}">

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



@section('content')

<!-- Section comment -->

<section class="section-comments bg-greyf9">

  {{-- Ini Header Dekstop --}}
  <section class="header-contact wrap hidden-xs ">

    <div class="container-custom">

      <div class="row">

        <div class="col-md-5 col-sm-6 pr-4 box1">

          <div class="section-heading mb-2">

            <div class="heading-menuname">

              <p class="d-block">{{ $text_lang[$default_lang]['section1']['title'] }}</p>

            </div>

            <div class="heading-title">{{ ucfirst($text_lang[$default_lang]['section1']['text1']) }}</div>

            <div class="heading-text">

              <p>{{ $text_lang[$default_lang]['section1']['text2'] }}</p>

            </div>

          </div>

          <div class="">

            <div class="row mx-0">

              <form action="{{url('send-saran')}}" id="form-contact" method="post">

                @csrf

                <div class="input-field px-0 col l11 s12">

                  <input id="name" type="text" name="name">

                  <label for="name">{{ $text_lang[$default_lang]['section1']['input']['input1'] }}</label>
                  <span class="text-span-input" id="span_nama"></span>

                </div>

                <div class="input-field px-0 col s11">

                  <input id="email" type="text" name="email">

                  <label for="email">{{ $text_lang[$default_lang]['section1']['input']['input2'] }}</label>
                  <span class="text-span-input" id="span_email"></span>

                </div>

                <div class="input-field px-0 col s11">

                  <textarea name="message" class="materialize-textarea" maxlength="382" id="message" cols="30" rows="10"></textarea>

                  <label for="message">{{ $text_lang[$default_lang]['section1']['input']['input3'] }}</label>

                  <span class="text-span-input" id="span_pesan"></span>

                </div>


                <div class="input-field px-0 col s11">
                  {!! NoCaptcha::display() !!}
                  <span class="text-span-input">{{ $errors->first('g-recaptcha-response') }}</span>

                </div>


                <div class="input-field px-0 col s12">

                  <button class="btn btn--send" type="button" id="kirim_pesan">{{ $text_lang[$default_lang]['section1']['input']['submit'] }}</button>

                </div>

              </form>

            </div>

          </div>

        </div>

        <div class="col-md-7 col-sm-6 pr-0 pl-5 box1">

          <div class="section-heading mb-0">

            <img src="{{ asset('public/img/assets/contact/header-goodeva-contact.png') }}" alt="" class="bg-header-to">

          </div>

        </div>

      </div>

    </div>

  </section>
  {{-- Akhir Ini Header Dekstop --}}


  {{-- Ini Header Mobile --}}
  <section class="header-contact hidden-sm hidden-md hidden-lg" style="margin-top:3rem !important">

    <div class="row mx-0">

      <div class="col-sm-12 px-0">

        <div class="full-img">

          <img src="{{ asset('public/img/assets/contact/header-goodeva-contact.png') }}" alt="">

        </div>

        <div class="section-heading mb-0">

        </div>

      </div>

      <div class="col-sm-12">

        <div class="container-mobile">

          <div class="section-heading mb-2">

            <div class="heading-menuname">

              <p>{{ $text_lang[$default_lang]['section1']['title'] }}</p>

            </div>

            <div class="heading-title">{{ ucfirst($text_lang[$default_lang]['section1']['text1']) }}</div>

            <div class="heading-text">

              <p>{{ $text_lang[$default_lang]['section1']['text2'] }}</p>

            </div>

          </div>

          <div class="">

            <div class="row">

              <form action="{{url('send-saran')}}" id="form-contact-mobile" method="post">

                @csrf

                <div class="input-field col s12">

                  <input id="name_mobile" type="text" name="name">

                  <label for="name">{{ $text_lang[$default_lang]['section1']['input']['input1'] }}</label>

                  <span class="text-span-input" id="span_nama_mobile"></span>

                </div>

                <div class="input-field col s12">

                  <input id="email_mobile" type="text" name="email">

                  <label for="email">{{ $text_lang[$default_lang]['section1']['input']['input2'] }}</label>

                  <span class="text-span-input" id="span_email_mobile"></span>

                </div>

                <div class="input-field col s12">

                  <textarea name="message" class="materialize-textarea" maxlength="382" id="message_mobile" cols="30" rows="10"></textarea>

                  <label for="message">{{ $text_lang[$default_lang]['section1']['input']['input3'] }}</label>

                  <span class="text-span-input" id="span_pesan_mobile"></span>

                </div>

                <div class="input-field col s12">
                  {!! NoCaptcha::display() !!}
                  <span class="text-span-input">{{ $errors->first('g-recaptcha-response') }}</span>

                </div>

                <div class="input-field col s12">

                  <button class="btn btn--send" type="button" id="kirim_pesan_mobile">{{ $text_lang[$default_lang]['section1']['input']['submit'] }}</button>

                </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
  {{-- Akhi rIni Header Mobile --}}


  {{-- alamat perusahaan mobile --}}
  <div class="container-mobile">

    <div class="row pb-2 mx-0 col-2">

      <div class="col-md-5 col-sm-6 col-xs-12">

        <div class="section-heading mb-0">

          <img src="{{ asset('public/img/assets/contact/contact-goodeva.png') }}" alt="" class="b-radius10px">

        </div>

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="section-heading mb-4">

          <div class="text--findus">{{ $text_lang[$default_lang]['section2']['title'] }}</div>

        </div>

        <div class="row">
          <div class="col-md-12 mb-3">

            <div class="block--office bg-white px-3 py-2 b-radius10px">

              <div class="row mb-0">

                <div class="col-md-12">

                  <div class="block-title-office">{{ $text_lang[$default_lang]['section2']['card1']['name'] }}</div>

                </div>

                <div class="col-md-12">

                  <div class="block-desk-office">

                    <p><?php echo $text_lang[$default_lang]['section2']['card1']['address'] ?></p>

                    <p>{{ $text_lang[$default_lang]['section2']['card1']['email'] }}</p>

                    <p>{{ $text_lang[$default_lang]['section2']['card1']['office'] }}</p>

                  </div>

                </div>

              </div>

            </div>

          </div>
        </div>

        <div class="row">

          <div class="col-md-6">

            <div class="block--office bg-white px-3 py-2 b-radius10px">

              <div class="row mb-0">

                <div class="col-md-12">

                  <div class="block-title-office">

                  {{ $text_lang[$default_lang]['section2']['card2']['name'] }}

                  </div>

                </div>

                <div class="col-md-12">

                  <div class="block-desk-office">

                    <p><?php echo $text_lang[$default_lang]['section2']['card2']['address'] ?></p>

                    <p><?php echo $text_lang[$default_lang]['section2']['card2']['marketing'] ?></p>

                    <p>{{ $text_lang[$default_lang]['section2']['card2']['email'] }}</p>

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

                  {{ $text_lang[$default_lang]['section2']['card3']['name'] }}

                  </div>

                </div>

                <div class="col-md-12">

                  <div class="block-desk-office">

                    <p>
                    <?php echo $text_lang[$default_lang]['section2']['card3']['address'] ?>
                    </p>

                    <p><?php echo $text_lang[$default_lang]['section2']['card3']['marketing'] ?></p>

                    <p>{{ $text_lang[$default_lang]['section2']['card3']['email'] }}</p>

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

@endsection