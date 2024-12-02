@extends('layouts.app-frontend')

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

    .section-heading .heading-menuname p {

        color: #2B2A35;

        margin-bottom: 0;

        font-weight: 400;

        letter-spacing: 0.03px;

        font-size: 18px;

    }

    @media(min-width:767px) and (max-width:992px){
        .section-comments{
            padding-top: 100px !important;
        }
        .box1:nth-child(2){
            text-align: center;
        }
    }

    @media (min-width:767px) and (max-width:1000px){
        .header-contact.hidden-xs .row{
            flex-wrap:wrap;
            display: flex;

        }
        .box1:nth-child(1){
            /* order:2; */
        }
        .box1:nth-child(2){
            /* order:1; */
            padding-left: 0 !important;
        }

        .section-heading .heading-text p{
            font-size: 16px;
        }

        .section-heading .heading-title{
            font-size:38px;
        }

        .mt-tablet-1rem{
            margin-top: 1rem;
        }
    }

    @media (max-width:767px) { 

        
        nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons{
                height: 0
        }

        .container{
                width: auto;
                max-width: 1280px;
        }

        nav{
            height: auto !important;
        }

        .l-burger{
            top:9px !important;
        }

        .col-xs-12{
            width: 100% ;
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



    input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {

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

    .bg-header-to{
        border-radius: 3%;
    }
	
	.btn-primary-m{
		background-color: #ffffff;
		padding: 0 18px;
		border-radius: 7px;
		border: 1px solid #ffffff;
		color: #31A9B7;
		line-height: 36px;
	}
</style>

<link rel="stylesheet" href="{{asset('public/css/style-mobile.css')}}">

@endsection



@section('js_after')

<!-- Compiled and minified JavaScript -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>


    $(document).ready(function(){

        @if(Session::has('success'))
        Swal.fire(
            "Berhasil!",
            "{{ Session::get('success') }}",
            "success"
        )
        @endif

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
    }
    
      $("#email").keyup(function(){
          var email = $('#email').val();
            if(email == ""){
                $("#span_email").html("Email Belum Terisi");
            }else if(!validateEmail(email)){
                $("#span_email").html("Email tidak sesuai");
            }else{
                $("#span_email").html("");
            }
      });

      $("#name").keyup(function(){
          var name = $('#name').val();
            if(name == ""){
                $("#span_nama").html("Nama Belum Terisi");
            }else{
                $("#span_nama").html("");
            }
      });

      $("#message").keyup(function(){
          var message = $('#message').val();
            if(message == ""){
                $("#span_pesan").html("Pesan Belum Terisi");
            }else{
                $("#span_pesan").html("");
            }
      });

      $('#kirim_pesan').on('click',function(){
            var email = $('#email').val();
            var name = $('#name').val();
            var message = $('#message').val();

            if(email != "" && name != "" && message != "" && validateEmail(email))
            {
                $('#form-contact').submit();
            }else
            {
                
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Form tidak boleh kosong!',
                })
        
            }
            


      })

      $("#email_mobile").keyup(function(){
          var email = $('#email_mobile').val();
            if(email == ""){
                $("#span_email_mobile").html("Email Belum Terisi");
            }else if(!validateEmail(email)){
                $("#span_email_mobile").html("Email tidak sesuai");
            }else{
                $("#span_email_mobile").html("");
            }
      });

      $("#name_mobile").keyup(function(){
          var name = $('#name_mobile').val();
            if(name == ""){
                $("#span_nama_mobile").html("Nama Belum Terisi");
            }else{
                $("#span_nama_mobile").html("");
            }
      });

      $("#message_mobile").keyup(function(){
          var message = $('#message_mobile').val();
            if(message == ""){
                $("#span_pesan_mobile").html("Pesan Belum Terisi");
            }else{
                $("#span_pesan_mobile").html("");
            }
      });

      $('#kirim_pesan_mobile').on('click',function(){
            var email = $('#email_mobile').val();
            var name = $('#name_mobile').val();
            var message = $('#message_mobile').val();

            if(email != "" && name != "" && message != "" && validateEmail(email))
            {
                $('#form-contact-mobile').submit();
            }else
            {
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

<section class="section bg-greyf9">

    {{-- Ini Header Dekstop --}}

    <section class="header-contact wrap hidden-xs " style="background-color: #31A9B7; padding-top: 90px;">

        <div class="container-custom">

            <div class="row">

                <div class="col-md-7">

                    <div class="heading-title">
                        <h2 style="color: white; line-height: 60px; margin-top: 16%;">

                             A <span style="font-weight: 600;">place</span> for those <span style="font-weight: bold;">who do things exceptionally</span> well

                        </h2>

                    </div>
					<div class="heading-text">
						<p class="mt-1 desktop-show" style="color: white; margin-right: 28%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo a minima corporis. Rem similique rerum accusamus nesciunt obcaecati animi impedit ipsum omnis est! Dicta, corrupti repudiandae.</p>
						<p class="mt-1 mobile-show" style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo a minima corporis. Rem similique rerum accusamus nesciunt obcaecati animi impedit ipsum omnis est! Dicta, corrupti repudiandae.</p>
					</div>
				
					<a href="" class="btn btn-primary-m text-center mt-3" style="text-decoration: none; ">Find Jobs</a>
									
                </div>

                <div class="col-md-5 col-sm-6 ">

                    <div class="section-heading mb-0">

                        <img src="{{ asset('public/img/assets/career/goodeva-career.png') }}" alt="" class="bg-header-to">

                    </div>

                </div>

            </div>

        </div>

    </section>
</section>

    {{-- Akhir Ini Header Dekstop --}}

	{{-- Ini Header-1 Mobile --}}
<section class="header-contact hidden-sm hidden-md hidden-lg" style="background-color: #31A9B7; padding-top: 90px;">
	<div class="row mx-0">
		<div class="col-sm-12 px-0">
			<div class="full-img">
				<img src="{{ asset('public/img/assets/career/goodeva-career.png') }}" alt="">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="container-mobile">
				<div class="heading-title">
					<h2 style="color: white; ">

					 A <strong style="font-weight: bold;">place</strong> for those <strong style="font-weight: bold;">who do things exceptionally</strong> well

					</h2>

                </div>
				<div class="heading-text">
					<p class="mt-1 desktop-show" style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo a minima corporis. Rem similique rerum accusamus nesciunt obcaecati animi impedit ipsum omnis est! Dicta, corrupti repudiandae.</p>
					<p class="mt-1 mobile-show" style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo a minima corporis. Rem similique rerum accusamus nesciunt obcaecati animi impedit ipsum omnis est! Dicta, corrupti repudiandae.</p>
				</div>
			</div>
		</div>
	</div>
</section>
	{{-- Akhir Header-1 Mobile --}}

	{{--- Section Join Us --}}
<section>
	<div class="row mx-0 my-3">
		<div class="col-md-12 col-sm-12">
			<div class="section-heading mb-4 text-center">
				<div class="text--findus ">@php
					echo ucwords('Why Join Us');
					@endphp
				</div>
				<br>
				<p>Our culture would be great fit for those who share similar values. If how we do<br>things resonates with you, we welcome you to join us</p>
			</div>
		</div>
	</div>
</section>
	{{-- Akhir Section Join Us --}}

	{{-- Section Awards --}}
<section>
	{{-- Awards Desktop --}}
	<div class="container mt-5 hidden-xs">

            <div class="row ">

                <div class="col-md-4 col-sm-6">

                    <img src="{{asset('public/img/assets/career/goodeva-We embrace experimentation.png')}}" alt="">

                    <p style="font-weight: bold;" class="title mt-2">We embrace experimentation</p>

                    <p class="desc">Tanpa batasan agar tidak terlalu cemas akan hilangnya data-data</p>

                </div>

                <div class="col-md-4 col-sm-6">

                    <img src="{{asset('public/img/assets/career/goodeva-We reward achievements.png')}}" alt="">

                    <p style="font-weight: bold;" class="title mt-2">We reward achievements</p>

                    <p class="desc">Tanpa batasan agar tidak terlalu cemas akan hilangnya data-data</p>

                </div>

                <div class="col-md-4 col-sm-6 mt-tablet-3rem">

                    <img src="{{asset('public/img/assets/career/goodeva-We foster respectful relationships.png')}}" alt="">

                    <p style="font-weight: bold;" class="title mt-2">We foster respectful relationships</p>

                    <p class="desc">Tanpa batasan agar tidak terlalu cemas akan hilangnya data-data</p>

                </div>

            </div>

        </div>
		{{--Akhir Awards Desktop--}}
		
		{{-- Awards Mobile --}}
		 <div class="container-custom mt-5 hidden-sm hidden-md hidden-lg">

            <div class="row mx-0">

                <div class="col-sm-12">

                    <div class="row">

                        <div class="col-sm-12 pr-0">
						
							<div class="row">
								
								<div class="col-sm-12">
									<img src="{{asset('public/img/assets/career/goodeva-We embrace experimentation.png')}}" alt="">
								</div>
							
							</div>

                            <div class="row">
							
								<div class="col-sm-12">

									<p style="font-weight: bold;" class="title">We embrace experimentation</p>

									<p class="desc">Tanpa batasan agar tidak terlalu cemas akan hilangnya data-data</p>

								</div>
							
							</div>

                        </div>

                        

                    </div>

                </div>

                <div class="col-sm-12">

                    <div class="row">
					
					  <div class="col-sm-12 pr-0">
						
							<div class="row">
								
								<div class="col-sm-12">
									<img src="{{asset('public/img/assets/career/goodeva-We reward achievements.png')}}" alt="">
								</div>
							
							</div>

                            <div class="row">
							
								<div class="col-sm-12">

									<p style="font-weight: bold;" class="title">We reward achievements</p>

									<p class="desc">Tanpa batasan agar tidak terlalu cemas akan hilangnya data-data</p>

								</div>
							
							</div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-12">

                    <div class="row">
					
						 <div class="col-sm-12 pr-0">
						
							<div class="row">
								
								<div class="col-sm-12">
									<img src="{{asset('public/img/assets/career/goodeva-We foster respectful relationships.png')}}" alt="">
								</div>
							
							</div>

                            <div class="row">
							
								<div class="col-sm-12">

									<p style="font-weight: bold;" class="title">We foster respectful relationships</p>

									<p class="desc">Tanpa batasan agar tidak terlalu cemas akan hilangnya data-data</p>

								</div>
							
							</div>

                        </div>
					
                    </div>

                </div>

            </div>

        </div>
		{{-- Akhir Awards Mobile --}}
		
</section>
	{{-- Akhir Section Awards --}}
	
	{{-- Section Explore Teams --}}
<section>
	<div class="row mx-0 my-3 pt-5">
		<div class="col-md-12 col-sm-12">
			<div class="section-heading mb-4 text-center">
				<div class="text--findus ">@php
					echo ucwords('Explore The Teams');
					@endphp
				</div>
				<br>
				<p class="mt-1 desktop-show">Our culture would be great fit for those who share similar values. If how we do <br> things resonates with you, we welcome you to join us</p>
				<p class="mt-1 mobile-show">Our culture would be great fit for those who share similar values. If how we do <br> things resonates with you, we welcome you to join us</p>
			</div>
		</div>
	</div>
	<div class="container mt-5 hidden-xs">
		<div class="row mx-0 mb-5 text-center">
			<div class="col-md-4">

				<div class="block b-radius10px">

					<div class="row mx-0">

						<div class="col-md-12">

							<img src="{{asset('public/img/assets/career/goodeva-it-support.png')}}"  alt="">

						</div>

					</div>

					<div class="row mx-0 ">

						<div class="col-md-12 pt-2 pb-4 px-2">

							<p style="font-weight: bold;" class="title">IT Support</p>

							<a style="text-decoration: none;" href="#"> Apply now</a>

						</div>

					</div>

				</div>

			</div>

			<div class="col-md-4">

				<div class="block b-radius10px">

					<div class="row mx-0">

						<div class="col-md-12">

							<img src="{{asset('public/img/assets/career/goodeva-business-development.png')}}" alt="">

						</div>

					</div>

					<div class="row mx-0 ">

						<div class="col-md-12 pt-3 pb-4 px-3">

							<p style="font-weight: bold;" class="title">Business Development</p>

							<a style="text-decoration: none;" href="#"> Apply now</a>

						</div>

					</div>

				</div>

			</div>

			<div class="col-md-4">

				<div class="block b-radius10px">

					<div class="row mx-0">

						<div class="col-md-12">

							<img src="{{asset('public/img/assets/career/goodeva-design-graphic.png')}}"  alt="">

						</div>

					</div>

					<div class="row mx-0 ">

						<div class="col-md-12 pt-3 pb-4 px-3">

							<p style="font-weight: bold;" class="title">Design Graphic</p>

							<a style="text-decoration: none;" href="#"> Apply now</a>

						</div>

					</div>

				</div>

			</div>
	
		</div>
	</div>
	
	<div class="container-custom mt-5 hidden-sm hidden-md hidden-lg">
		<div class="row mx-0 mb-5 text-center">
			<div class="col-sm-6 col-xs-6">

				<div class="block b-radius10px">

					<div class="row mx-0">

						<div class="col-md-12">

							<img src="{{asset('public/img/assets/career/goodeva-it-support.png')}}"  alt="">

						</div>

					</div>

					<div class="row mx-0 ">

						<div class="col-md-12 pt-2 pb-4 px-2">

							<p style="font-weight: bold;" class="title">IT Support</p>

							<a style="text-decoration: none;" href="#"> Apply now</a>

						</div>

					</div>

				</div>

			</div>


			<div class="col-sm-6 col-xs-6">

				<div class="block b-radius10px">

					<div class="row mx-0">

						<div class="col-md-12">

							<img src="{{asset('public/img/assets/career/goodeva-design-graphic.png')}}"   alt="">

						</div>

					</div>

					<div class="row mx-0 ">

						<div class="col-md-12 pt-3 pb-4 px-3">

							<p style="font-weight: bold;" class="title">Design Graphic</p>

							<a style="text-decoration: none;" href="#"> Apply now</a>

						</div>

					</div>

				</div>

			</div>
			
			<div class="col-sm-12 col-xs-12">

				<div class="block b-radius10px">

					<div class="row mx-0">

						<div class="col-md-12">

							<img src="{{asset('public/img/assets/career/goodeva-business-development.png')}}" style="width: 115px;" alt="">

						</div>

					</div>

					<div class="row mx-0 ">

						<div class="col-md-12 pt-3 pb-4 px-3">

							<p style="font-weight: bold;" class="title">Business Development</p>

							<a style="text-decoration: none;" href="#"> Apply now</a>

						</div>

					</div>

				</div>

			</div>
	
		</div>
	</div>
	
</section>
	{{-- Akhir Section Teams --}}
	
	
<section>
    {{--  Ini Header Mobile --}}

    <div class="container-mobile">

        <div class="row pb-2 mx-0 col-2">

            <div class="col-md-6 col-sm-6 col-xs-12">

                <div class="section-heading mb-0">

                    <img src="{{ asset('public/img/assets/career/goodeva-career-1.jpg') }}" alt="" class="b-radius10px">

                </div>

            </div>

            <div class="col-md-5 col-sm-6 col-xs-12">

                <div class="heading-title mb-2">

                    <div class="text--findus">@php

                        echo ucwords('Where To Find Us');

                    @endphp </div>

                </div>
				
				<div class="heading-text mb-2">
					<div class="heading-text">
                    <p>Our culture would be great fit for those who share similar values. If how we do things resonates with you, we welcome you to join us</p>
					</div>
                </div>

                <div class="row mt-3">

                    <div class="col-md-6">

                        <div class="block--office bg-white px-3 py-2 b-radius10px" >

                              <div class="row mb-0">

                                  <div class="col-md-12">

                                      <div class="block-title-office">

                                         Goodeva Office 1

                                      </div>

                                  </div>

                                  <div class="col-md-12">

                                      <div class="block-desk-office">

                                        <p>Goodeva building 1, Grand Galaxy Commercial, Blok RSK 6/15 Jalan Boulevar Raya Timur, Kota Bekasi.</p>

                                        <p>WhatsApp : <br> 081222-666-196</p>

                                        <p>Email : sales@goodeva.co.id</p>

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

                                          Goodeva Office 2

                                      </div>

                                  </div>

                                  <div class="col-md-12">

                                      <div class="block-desk-office">

                                        <p>
                                            Goodeva building 2, Grand Galaxy Commercial, Blok RSK 6/17 Jalan Boulevar Raya Timur, Kota Bekasi.    
                                        </p>

                                        <p>WhatsApp : <br> 081222-666-196</p>

                                        <p>Email : sales@goodeva.co.id</p>

                                      </div>



                                  </div>

                              </div>

                          </div>

                      </div>

                </div>

            </div>

        </div>

    </div>

</section><!--./section comment -->
{{-- Akhir Header Mobile --}}
@endsection

