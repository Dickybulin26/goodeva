@extends('layouts.app-front-goodeva-lp')

@section('title', 'Goodeva Technology Ai & iOT Enterprise')
{{-- Meta Section --}}

@section('meta_desc')
    Wujudkan ide & mimpi dalam satu platform terintegrasi untuk membantu bisnis berkembang hebat bersama technology
@endsection

@section('meta_key')
    Goodeva technology, goodeva software, goodeva, good evaluation, IT & digital solutions, jasa pembuatan aplikasi andorid,
    jasa pembuatan aplikasi ios, jasa pembuatan aplikasi website, smart safety, jasa penghubung api, perusahaan IT bekasi,
    perusahaan it jakarta
@endsection

@section('meta_auth')
    goodeva
@endsection

{{-- End Meta Section --}}

@section('css_after')

    <link rel="stylesheet" href="{{ asset('public/css/materialize.min.css') }}">



    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">



    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">

    <link href="{{ asset('public/css/lity.css') }}" rel="stylesheet">


    <style>
        .font-inter {
            font-family: 'Inter', sans-serif !important;
        }

        .relative {
            position: relative;
        }

        .bg-port {
            background: #F1F5F9 !important;
        }

        /* PROJECT */
        .nav-goodeva {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem;
            color: #959595;
            font-weight: 600;
            font-family: 'Inter', sans-serif !important;
            font-size: 22px;
            line-height: 28px;
            text-decoration: none !important;
        }


        .nav-goodeva .nav-link.active,
        .nav-goodeva .show>.nav-link {
            border-bottom: 5px solid #26A7B5;
            color: #000000;
        }

        .project-area .tab-content {
            margin-top: 20px;
            text-align: center;
        }

        .project-area .tab-pane {
            display: none;
        }

        .project-area .tab-pane.active {
            display: block;
        }

        .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .project-area .card {
            height: 250px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .project-area .card img.bg-card {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .project-area .card:hover img.bg-card {
            transform: scale(1.1);
        }

        .project-area .card img.logo-card {
            color: #ffffff !important;
            position: absolute;
            top: 15px;
            text-align: left;
            left: 15px;
        }

        .project-area .card .card-body {
            color: #ffffff !important;
            position: absolute;
            bottom: 15px;
            text-align: left;
            left: 0;
            margin: 0 5%;
            width: 90%;
        }

        .project-area p.card-text {
            margin-bottom: 0;
            color: #ffffff !important;
            font-size: 12px;
            line-height: 14.52px;
        }

        .project-area .card .card-title {
            font-weight: 600;
        }

        .project-area .btn-more-area{
            margin-top: 20px;
        }

        .project-area .btn-more-project{
            color: #000000;
            font-family: Inter;
            font-size: 22px;
            font-weight: 600;
            line-height: 28px;
            text-align: center;            
        }

        .project-area .btn-more-project:hover{
            text-decoration: none;
        }

        .project-area .add-project {
            display: none; /* Sembunyikan elemen pada awalnya */
        }

        /* END PROJECT */

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .btn-mobile-started-2 {
            background-color: #fff !important;
            color: #000 !important;
            font-size: 15px !important;
            border-radius: 45px !important;
            border: 2px solid #fff;
            font-weight: bold !important;
            text-transform: none !important;
        }

        .btn-wa-2 {
            background-color: transparent !important;
            color: #fff !important;
            font-size: 15px !important;
            border-radius: 5px !important;
            border: 2px solid #fff;
        }

        .img-section {
            height: 85vh !important;
            width: 100% !important;

        }

        .mt-5-custom {
            margin-top: 4.5rem !important;
        }

        .btn-wa {
            background-color: #63A6B3 !important;
            color: #fff !important;
            display: inline !important;
            font-size: 15px !important;
            border-radius: 5px !important;
        }

        /* BANNER SLIDER */

        .hslide-area .slid-content img.main-image {
            height: 100vh;
            object-fit: cover;
        }
        #hslide-area-mobile .slid-content img.main-image {
            height: 100vh;
            object-fit: cover;
        }

        .hslide-area .slid-content img.char--info-img {
            height: auto !important;
        }

        .hslide-area .slick-dots li.slick-active button:before {
            opacity: 1;
            color: #ffffff;
        }

        .hslide-area .slick-dots li button:before {
            font-size: 9px;
            top: -35px;
            color: #ffffff;
        }

        .hslide-area .slid-content {
            position: relative;
        }

        .hslide-area .slid-content img.left-slider-item {
            position: absolute;
            left: 0;
            bottom: 0;
            top: 60px;
            height: 543px;
            margin: auto 0;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .hslide-area .slid-content img.left-slider-item-bottom {
            position: absolute;
            left: 20px;
            bottom: 0;
            height: 583px;
        }

        .hslide-area .slid-content img.left-slider-item-bottom.transforming-1 {
            height: 543px;
            left: 32px;
        }

        .hslide-area .slid-content img.left-slider-item-bottom.prevent_accident {
            height: 600px;
        }

        .txt-header-right,
        .txt-header-right-hp {
            width: 37%;
            position: absolute;
            top: 50%;
            left: 70%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-size: 46px;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
        }



        .img-left-hp {
            position: absolute;
            top: 57.5%;
            left: 24%;
            height: 659px;
            object-fit: contain;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;

        }



        .img-left-worker {
            position: absolute;
            top: 57%;
            left: 26%;
            height: 597px;
            object-fit: contain;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;

        }



        .txt-header-right span {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: 'justify';

        }


        .txt-header-right h2 {
            margin-top: 0;
            line-height: 73px;
            font-weight: 600;
            font-size: 60px;
            margin-bottom: 2rem;
            letter-spacing: 1.3px;
        }

        .txt-header-right-hp h2 {
            font-weight: 600;
        }

        .txt-header-right p {
            font-size: 22px;
            line-height: 30.63px;
        }

        .btn-started-header-new {
            color: #fff;
            border: 1px solid #26A7B5;
            border-radius: 70px;
            padding: 4px 32px;
            text-transform: none;
            background: #26A7B5;
            display: flex;
            width: 38%;
            font-size: 16px;
            letter-spacing: -2%;
            font-weight: 700;
            justify-content: space-between;
            align-items: center;
        }

        .btn-started-header-new:hover{
            border: 1px solid #26A7B5;
            background: #ffffff;
            color: #26A7B5;
        }

        #hslide-area-mobile .slid-content .txt-header-right-hp {
            position: absolute;
            top: 10%;
            left: 5%;
            width: 90%;
        }

        /* END BANNER SLIDER */


        .mt-6rem {
            margin-top: 6rem !important;
        }

        .mt-10rem {
            margin-top: 10rem !important;
        }



        /* FITUR */

        .fitur .space-height {
            height: 5%;
        }

        .fitur .fitur-odd {
            background: #F1F5F9;
        }

        .fitur-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 85vh;
        }

        .fitur .fitur-title {
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
        }

        .fitur .fitur-desc {
            color: #15191C;
            font-weight: 400;
            line-height: 27px;
            font-size: 22px;
            letter-spacing: -1px;
            padding-right: 0;
            display: block;
            margin-top: 0;
        }

        .py-fitur {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        #started {
            background: none !important;
        }

        /* #started .content-started{
            position: absolute;
            right: 0;
            left: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            padding: 0;
            text-align: center;
          } */

        #started img.full-bg-started,
        #started-mobile img.full-bg-started {
            margin: 0;
            width: 100%;
            height: 100vh;
            object-fit: cover;

        }

        #started img.logo-started,
        #started-mobile img.logo-started {
            margin: 0;

        }

        #started .content-title,
        #started-mobile .content-title {
            margin: 0 !important;
            padding: 0 !important;
            margin-top: -5vh !important;
        }

        #started .content-started,
        #started-mobile .content-started {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            text-align: center;
        }

        #started-mobile .content-started{
            width: 90%;
        }

        #started .btn-started,
        #started-mobile .btn-started {
            border-radius: 58px;
            padding: 0px 30px;
        }


        .fitur img {

            height: 80px;
            object-fit: contain;

        }

        .fitur .smart-safety-logo {
            height: 100px;
        }


        .fitur .btn-wa {
            border-radius: 66px !important;
            background: #26A7B5 !important;
            color: #fff !important;
            display: block !important;
            font-size: 22px !important;
            border: 1px solid #26A7B5;
            padding: 15px 25px;
            margin-top: 30px;
            text-align: center;
            letter-spacing: 0px;
        }

        .fitur .btn-wa:hover{
            border: 1px solid #26A7B5 !important;
            background: #ffffff !important;
            color: #26A7B5 !important;
        }

        /* END FITUR */


        /* Testimoni */

        .testimoni {

            padding: 8em 9em 6em 9em;

        }



        .testimoni h4 {

            color: #fff;

            font-size: 18px;

            font-weight: 200;

            letter-spacing: 0.32px;

            font-family: 'Inter', sans-serif !important;

            padding-right: 20%;

            line-height: 22px;

            margin-top: 16px;

        }



        .testimoni p {

            font-family: 'Inter', sans-serif;

            color: #fff;

            font-size: 14px !important;

            font-weight: 700;

            margin-top: 3.5em;

            margin-bottom: 0em;

        }



        .testimoni span {

            color: #fff;

            font-size: 14px !important;

            font-weight: 500;

        }



        .testimoni .p-putih {

            color: #fff;

            padding-bottom: 1em;

            font-weight: 200;

            font-size: 14px !important;

            letter-spacing: 0.07px;

            margin-top: -5px;

        }



        .testimoni .box-box {

            border-radius: 7px;

            margin: -2em -4em 0em 2em;

            min-height: 250px;

            background: #133A72;

            padding-left: 5px;

            width: 520px;

            padding: 15px;

        }



        .testimoni .lay {

            z-index: 0;

        }



        .testimoni .img-customer {

            padding: 2em 11em 3em 1em;

            padding-bottom: 0 !important;

        }



        .testimoni .img-customer img {

            width: 40px;

        }

        .testimoni .img-customer img.kpp-logo {

            width: 50px;

        }

        b {
            font-weight: 700 !important;
        }



        /* .container-jud-testi{

                    padding: 3em 10em 1em 10em;

                }



                .container-jud-testi h2{

                    font-family: 'Open Sans' ;

                    color: #2a3271;

                    font-weight: 700;

                    font-size: 34px;

                    line-height: 1.1;

                    text-align: center;

                }



                .container-jud-testi .skyni{

                    font-weight: 400;

                }

                .container-jud-testi .t-col{

                    position: relative;

                    padding: 0 .1em;

                    color: #2a3271;

                    font-weight: 700;

                }



                .container-jud-testi .t-col:after{

                    content: "";

                    position: absolute;

                    bottom: 5px;

                    left: -2px;

                    width: 100%;

                    height: 35%;

                    background-color: #fed596;

                    z-index: -10;

                    -webkit-transition: all .1s linear;

                    -moz-transition: all .1s linear;

                    transition: all .1s linear;

                } */




        @media screen and (min-width: 1515px) {
            .hslide-area .slid-content img.left-slider-item-bottom {
                position: absolute;
                left: 20px;
                bottom: 0;
                height: 643px;
            }

            .hslide-area .slid-content img.left-slider-item-bottom.transforming-1 {
                height: 603px;
                left: 32px;
            }

            .hslide-area .slid-content img.left-slider-item-bottom.prevent_accident {
                height: 670px;
            }

            .testimoni-h .w-80 {
                width: 23vw;
                margin-right: 0px;
            }
        }

        @media screen and (max-width: 1515px) {

            .txt-header-right h2 {

                font-size: 48px !important;
                line-height: 64px;
                font-weight: 600;

            }

            .txt-header-right-hp h2 {
                font-size: 54px !important;
                line-height: 64px;
            }

            .fitur .smart-safety-logo {
                height: 88px;
            }

           

        }

        @media (min-width:767px) {
            .slick-dotted.slick-slider {
                margin-bottom: 0;
            }

            .info-card .card-safety img {
                right: 82px;
            }
        }




        @media screen and (max-width: 767px) {

            .px-container{                              
                padding-right: 1.7rem;
                padding-left: 1.7rem;                        
            }
            .txt-header-right-hp h2 {
                font-size: 30px !important;
                line-height: 38px !important;
                width: 90%;
            }

            .btn-started-header-new{     
                margin-top: 15px;           
                padding: 0 15px;
                width: 45%;
            }

            .header .navbar {

                background: transparent;

            }

            .testimoni-h .slick-dots li button:before {
                top: 14px !important;
            }

            .testimoni .lay {

                /* margin-top: 2rem ; */

            }


            /* .header .navbar .navbar-nav > li > a {

                    color: #fff;

                    } */

            /* Slider Card */

            .btn-lihat-detail {
                border-radius: 8px;
                padding: 2px 36px;
            }

            .btn-lihat-detail span {
                font-size: 14.5px;
            }

            .info-card .card-safety .text-judul {
                color: #FFA200 !important;
                font-weight: 300;
                font-size: 12.5px;
            }

            .info-card .card-safety p {
                font-size: 18px !important;
                line-height: 24px;
            }

            #infocard_slider .slick-center .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not([tabindex="-1"])+.slick-cloned[aria-hidden="true"] .h-box-f {
                height: 425px !important;
                margin-top: 0 !important;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }



            #infocard_slider .slick-slide .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not(.slick-cloned)~.slick-cloned[aria-hidden="true"] .h-box-f {
                height: 390px;
                margin-top: 2rem;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }

            .info-card .card-safety span,
            .info-card .card-safety .text-judul {
                font-weight: 200;
            }

            .h-box-f {
                width: 300px !important;
            }

            #infocard_slider .slick-dots li.slick-active button:before {
                color: #63A6B3;
            }

            #infocard_slider .slick-dots li button:before {
                color: #63A6B3;
                top: 22px;
            }

            /* Akhir Slider Card */

            .col-sm-12 {

                width: 100%
            }

            .col-sm-11 {

                width: 91.66666667%
            }

            .col-sm-10 {

                width: 83.33333333%
            }

            .col-sm-9 {

                width: 75%
            }

            .col-sm-8 {

                width: 66.66666667%
            }

            .col-sm-7 {

                width: 58.33333333%
            }

            .col-sm-6 {

                width: 50%
            }

            .col-sm-5 {

                width: 41.66666667%
            }

            .col-sm-4 {

                width: 33.33333333%
            }

            .col-sm-3 {

                width: 25%
            }

            .col-sm-2 {

                width: 16.66666667%
            }

            .col-sm-1 {

                width: 8.33333333%
            }

            .px-sm-0{
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .section-watch-video .header{
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;

            }

            .section-watch-video .header h5 {                                
                font-size: 32px;
                font-weight: 700;
                line-height: 38.73px;
                text-align: center;
                width: 69vw;

            }

            .testimoni h4 {
                font-size: 15px;
            }

            .testimoni span {
                font-size: 14px;
                margin-top: 5px;
                margin-bottom: -5px !important;
                display: block;
            }

            .testimoni .p-putih {
                font-size: 13px !important;
            }

            .testimoni h4 {
                font-size: 15px;
            }

            .testimoni span {
                font-size: 14px;
                margin-top: 5px;
                margin-bottom: -5px !important;
                display: block;
            }

            .testimoni .p-putih {
                font-size: 13px !important;
            }

            .content-title span {                                
                font-size: 24px !important;
                font-weight: 600;
                line-height: 29.05px;
                text-align: center;

            }

            .btn-mobile-started-2{
                color: #263238 !important;
                font-weight: 600 !important;
            }

            .fitur-area{
                margin-top: 6rem !important;
            }

            .box-fitur{
                background: none;
                box-shadow: none !important;
                border-radius: 0 !important;
            }

            .fitur img {
                /* box-shadow: 0px 3px 25px #0000002E;
                margin-top: -54px !important;
                border-radius: 10px; */
                width: 100% !important;
                height: 100% !important;
                background: none !important;
                margin-bottom: 0 !important;
            }

            .my-fitur{
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .fitur-content{
                display: block;
                height: auto;
            }

            .fitur .fitur-content img {
                width: 50% !important;
            }

            .fitur .smart-safety-logo{
                height: 48px !important;
                margin-top: 15px;
                margin-bottom: 15px !important;
            }

            .fitur .btn-wa{
                padding: 12px 0px;                
                width: 30vw;
                font-size: 16px !important;
                margin-top: 15px !important;
            }

            .fitur .non-smart-safety-logo{
                height: 36px !important;
                margin-top: 15px;
                margin-bottom: 15px !important;
                object-position: left center !important;
            }

            .fitur .fitur-title{                
                font-size: 24px;
                font-weight: 800;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: left;
            }

            .fitur .fitur-desc{                
                font-size: 14px;
                font-weight: 400;
                line-height: 24.46px;
                letter-spacing: -0.03em;
                text-align: left;

            }

            #info-card-mobile .nav-goodeva.justify-content-center{
                justify-content: space-between !important;
            }

            .portofolio-slide-m .img-responsive{
                width: 100%;
            }

            #info-card-mobile .nav-goodeva .nav-link{
                font-size: 15px;
                width: 28vw;
                text-align: center;
                padding: .5rem .8rem;
            }

            #info-card-mobile .nav-goodeva{
                flex-wrap: nowrap;
                gap: 10px;
                overflow-x: scroll;
            }

            .pt-sm-1-5rem {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .section-compannies.liputan {
                padding-top: 2.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .w-100p {
                width: 100%;
            }

        }



        .btn-started>span {

            display: inherit;

            /* color: #000; */

            font-size: 14px;

            line-height: 0;

            font-weight: 600;

        }



        .btn-started>i {

            font-size: 11px;

        }

        @media screen and (max-width: 770px) {

            .testimoni .box-box {

                margin: -2em -3em 0em -3em;

                height: 280px;

            }



            .testimoni .max-img {

                width: 347px;

                height: 275px;

                margin-left: 1em;

            }



            .testimoni h4 {

                font-size: 13px;

            }



        }



        @media screen and (max-width: 450px) {

            /* .container-jud-testi .t-col:after{

                        height: 20%;

                    } */

            /* .testimoni{

                        padding: 2em 2em 2em 2em;

                    } */

            .testimoni-h .slick-dots li button:before {

                left: 0px !important;

            }

            .testimoni .box-box {

                margin: -1em -14em 0em 0em;

            }



            .testimoni p {

                margin-top: 3.5em;

                font-size: 11px;

            }



            .testimoni .hid {

                display: none;

            }



            /* .container-jud-testi{

                        padding: 0;

                    }



                    .container-jud-testi h2{

                        font-size: 20px;

                        padding-top: 2em;

                    } */

        }


        .testimoni-h {
            margin-top: 6rem;
        }

        .testimoni-h .slick-dots {
            background: transparent;
        }

        .testimoni-h .custom-prev-arrow,
        .testimoni-h .custom-next-arrow {
            position: absolute;
            background: #249FAC;
            border-radius: 89px;
            padding: 15px 30px;
            color: #ffffff;
            border: none;

        }

        .testimoni-h .custom-prev-arrow {
          bottom: 7%;
          left: -85%;
        }

        .testimoni-h .custom-next-arrow {
            bottom: 7%;
            left: -65%;
        }

        .testimoni-h .custom-prev-arrow:hover,
        .testimoni-h .custom-next-arrow:hover {
            background: #0F7C89;
        }

        .testimoni-h .testimoni-content {
            padding-left: 20%;
        }

        .testimoni-h .testimoni-image-area {
            width: 100%;
            height: 500px;
            position: relative
        }

        .testimoni-h .testimoni-image-area img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            max-height: 100%;
            max-width: 100%;            
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .testimoni-h .testimoni-title {
            font-family: 'Poppins', sans-serif !important;
            font-size: 40px;
            font-weight: 700;
            line-height: 60px;
            text-align: left;
            width: 80%;
        }

        .testimoni-h .w-80 {
            width: 25vw;
            margin-right: 15px;
        }

        .testimoni-h .slick-slide{            
            transition: filter 0.3s ease, transform 0.3s ease;
        }
        .testimoni-h .slick-slide:not(.slick-current) {            
            filter: grayscale(100%); 
            transform: scale(0.9);
        }
        .testimoni-h .slick-slide .testimoni-image-area img {
            transition: height 0.3s ease;
        }
        .testimoni-h .slick-slide:not(.slick-current) .testimoni-image-area img {            
            height: 80%;
            display: flex;
            align-items: center;
        }
        

        .testimoni-h .testimoni-statement {
            font-size: 22px;
            font-weight: 400;
            line-height: 35px;
            text-align: left;
            color: #606264;
        }

        .testimoni-h .testimoni-name {
            font-size: 22px;
            font-weight: 700;
            line-height: 26.63px;
            text-align: left;
            color: #000000;
        }

        .testimoni-h .testimoni-client {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: left;
            color: #000000;

        }



        .testimoni-h .slick-dots li.slick-active button:before {

            opacity: 1;

            color: #63A6B3;

        }



        .testimoni-h .slid-content {

            position: relative;

        }

        .atas-rounded {
            margin-top: -135px !important;
            background: #ffffff !important;
            border-top-left-radius: 70px;
            border-top-right-radius: 70px;
        }

        /* Zoom 150% */

        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            .testimoni-h .slick-dots li button:before {

                left: 140px !important;

            }

            .hslide-area .slid-content img {
                height: 565px;
            }

            .atas-rounded {
                margin-top: -115px !important;
            }

            .slick-dotted.slick-slider {
                margin-bottom: 0;
            }

            .hslide-area .slid-content img {
                height: 580px;
            }

            .info-card .card-erp p {
                font-size: 26px;
            }



            .testimoni .max-img {

                right: -219px !important;

            }



            .ml-7rem {

                margin-left: 2rem !important;

            }



            .h-box-f {

                width: 366px;

            }



            .info-card .card-safety img {

                right: 71px;

            }



            .img-left-hp {

                left: 29% !important;

            }




            .testimoni {

                padding: 8em 9em 6em 5em;

            }

            .fitur .fitur-title{
                font-size: 36px;
            }

            .fitur .fitur-desc{
                font-size: 18px;
            }

            .img-section,.fitur-content{
                height: 55vh !important;
            }

            .fitur img{
                height: 50px;
            }

            .testimoni-h .w-80{
                width: 33vw;
            }

            .testimoni-h .testimoni-statement{
                line-height: 28px;
            }
            
            .fitur .smart-safety-logo{
                height: 57px;
            }

            .fitur .btn-wa{
                margin-top: 15px;
                font-size: 18px !important;    
                padding: 8px 18px;
            }

            .testimoni-h .custom-prev-arrow {
            bottom: 2%;
            left: -85%;
            }

            .testimoni-h .custom-next-arrow {
                bottom: 2%;
                left: -65%;
            }

        }



        /* Zoom 125% */

        @media screen and (min-width: 1098px) and (max-width: 1300px) {





            .testimoni-h .slick-dots li button:before {

                left: 68px !important;

            }



            .testimoni .max-img {

                right: -135px !important;

            }



            .txt-header-right-hp h2 {

                font-size: 49px !important;

            }



            .txt-header-right-hp p {

                font-size: 19px;

            }



            .txt-header-right-hp span {

                font-size: 16px;

            }



            .txt-header-right-hp .btn-started-header span {

                font-size: 13.5px !important;

            }


            .hslide-area .slid-content img.left-slider-item-bottom.prevent_accident {
                left: 0px;
                height: 555px;
            }

            .btn-started-header-new {
                width: 48%;
            }

            .fitur .smart-safety-logo {
                height: 88px;
            }

        }

        @media (min-width: 1098px) and (max-width:1200px) {
            .testimoni-h .custom-next-arrow,
            .testimoni-h .custom-prev-arrow{
                bottom: -2%;
            }
        }
        @media (min-width: 1098px) and (max-width:1120px) {
            .h-box-l {
                height: 242px;
            }

            .info-card .card-erp p {
                padding-right: 35%;
            }

            .info-card .card-erp img {
                width: 36%;
            }

            .hslide-area .slid-content img.left-slider-item {
                height: 489px;
            }

            .hslide-area .slid-content img.left-slider-item-bottom.prevent_accident {
                height: 535px;
            }

            .hslide-area .slid-content img.left-slider-item-bottom.transforming-1 {

                height: 513px;
            }

        }

        @media(max-width: 990px) {
            .fitur {

                overflow: hidden;

            }
        }




        /* Zoom 110% */

        @media screen and (min-width: 1300px) and (max-width: 1410px) {

            .testimoni-h .slick-dots li button:before {

                left: 22px !important;

            }



            .testimoni .max-img {

                right: -85px !important;

            }

        }



        /* Zoom 90% */

        @media screen and (min-width: 1556px) {

            .testimoni-h .slick-dots li button:before {

                left: -115px !important;

            }



            .testimoni .max-img {

                right: 150px !important;

            }

        }



        /* All */



        .testimoni-h .slick-dots li button:before {

            font-size: 9px;

            top: -72px;

            left: -29px;

            color: #63A6B3;

        }



        .testimoni .max-img {

            width: 350px;

            height: 259px;

            object-fit: cover;

            z-index: 999;

            border-radius: 10px;

            position: absolute;

            top: 45px;

            right: 13px;

        }



        .btn-lihat-detail {

            /* border-radius: 7px; */
            /* padding: 0 36px; */
            /* padding-right: 20px !important; */
            /* text-transform: none; */
            /* background: transparent linear-gradient(1deg, #FFA234 0%, #FFDB50 100%) 0% 0% no-repeat padding-box; */

            border-radius: 7px;
            padding: 0 36px;
            padding-right: 20px !important;
            text-transform: none;
            background: transparent;
            border: 1px solid;
            color: #ffff;

        }



        .btn-lihat-detail:hover {

            /* background: transparent linear-gradient(1deg, #f98900 0%, #e5b707 100%) 0% 0% no-repeat padding-box; */
            background: #e9e1e942;
            border: 1px solid #fff;
        }



        .btn-lihat-detail span {

            color: #fff !important;

            font-size: 13.5px !important;

            font-weight: 700 !important;

            margin-right: 10px !important;

        }



        .btn-lihat-detail i {

            color: #fff;

            font-size: 13px !important;

        }




        @media screen and (min-width: 1000px) and (max-width: 1098px) {
            .hslide-area .slid-content img.left-slider-item {
                height: 453px;
            }

            .hslide-area .slid-content img.left-slider-item-bottom.prevent_accident {
                left: 0px;
                height: 470px;
            }

            .hslide-area .slid-content img.left-slider-item-bottom.transforming-1 {
                left: 0px;
                height: 455px;
            }

            .btn-started-header-new {
                width: 48%;
            }
        }

        @media (min-width:768px) and (max-width:1000px) {

            .fitur p {
                padding-right: 0;
            }

            .portfolio {
                padding-right: 0px !important;
                padding-left: 0px !important;
            }

            .info-card .card-erp p {
                font-size: 24px
            }

            .info-card .card-safety img {
                right: 65px;
            }

            .testimoni .max-img {
                width: 272px;
                height: 183px;
                object-fit: cover;
                z-index: 999;
                border-radius: 10px;
                position: absolute;
                top: -115px;
                right: -41px;
            }

            .txt-header-right h2 {
                font-size: 44px !important;
                line-height: 58px;
            }

            .txt-header-right-hp h2 {
                font-size: 44px !important;
                line-height: 58px;
            }

            .txt-header-right p,
            .txt-header-left p {
                font-size: 17px;
            }



            .atas-rounded {
                margin-top: -100px;
            }

            .section-watch-video .control-button {
                top: 150px;
            }

            .play-btn {
                width: 70%;
            }

            #started .content-title span {
                font-size: 40px;
            }

            #started img {
                margin-top: -10px;
            }

            .hslide-area .slid-content img.img-left-worker {
                height: 605px !important;
            }

            .hslide-area .slid-content img.img-left-hp {
                height: 511px !important
            }

            .txt-header-right,
            .txt-header-right-hp,
            .txt-header-left {
                top: 40%;
            }

            .img-left-worker {
                left: 29%;
            }

            .img-left-hp {
                left: 31%;
                top: 63.5%;
            }

            img.img-left-hp {
                height: 415px !important;
            }


        }

        @media (max-width:375px) {
            .h-box-f {
                width: 275px !important;
            }
        }

        @media(max-width:361px) {
            .h-box-f {
                width: 265px !important
            }

            .section-watch-video .header h5 {
                font-size: 20px;
            }

            .info-card .card-safety .text-judul {
                font-size: 13px;
            }

            .info-card .card-safety p {
                font-size: 17px;
            }

            .info-card .card-safety .text-judul {
                font-size: 16px;
            }

            .info-card .card-safety p {
                font-size: 20px !important;
                line-height: 28px;
            }

            .img-left-hp {
                top: 75% !important;
            }

            .img-left-worker {
                top: 77% !important;
                height: 322px !important;
            }

            .txt-header-right-hp h2 {
                font-size: 28px !important;
            }

        }

        @media(max-width:321px) {
            .h-box-f {
                width: 228px !important
            }

            /* Ini Yang Diatas Video  */
            .section-watch-video .header h5 {
                font-size: 18px !important;
                margin-left: 0px !important;
                margin-right: 0px !important;
                margin-bottom: 7px !important;
            }

            .section-watch-video .p {
                font-size: 12px !important;
                line-height: 20px !important;
            }

            /* Ini Yang Card */
            .info-card .card-safety .text-judul {
                font-size: 12px !important;
            }

            .info-card .card-safety p {
                font-size: 16px !important;
            }

            .img-health,
            .img-safety {
                width: 85%;
                right: 6%;
            }

            .img-erp {
                width: 96%;
                right: 0%;
            }

            /* Testimoni */
            .testimoni .p-putih {
                font-size: 11px !important;
            }

            /* Footer */
            .content-title span {
                font-size: 25px;
            }

            #infocard_slider .slick-center .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not([tabindex="-1"])+.slick-cloned[aria-hidden="true"] .h-box-f {
                height: 371px !important;
                margin-top: 0 !important;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }



            #infocard_slider .slick-slide .h-box-f,
            #infocard_slider .slick-slide[aria-hidden="true"]:not(.slick-cloned)~.slick-cloned[aria-hidden="true"] .h-box-f {
                height: 338px;
                margin-top: 2rem;
                -webkit-transition: all 1s cubic-bezier(0.39, 0.58, 0.57, 1);
            }

            .img-left-hp {
                top: 77% !important;
            }

            .img-left-worker {
                top: 77% !important;
                left: 51% !important;
                height: 326px !important;
            }

            .portfolio .header h4,
            .liputan .header h4,
            .fitur-heatlhy .header-fitur h4,
            .info-card .header-fitur-safety h4 {
                font-size: 28px !important;
            }

            .txt-header-right-hp h2 {
                font-size: 25px !important;
            }
        }

        .section-watch-video {
            margin-top: -2.5%;
        }



        .atas-rounded.mobile-show {
            margin-top: -18.5% !important;
            background: #F5F5F5 !important;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .ml-2-5rem {
            margin-left: 2.5rem !important;
        }

        .info-card.desktop-show {
            background: #F1F5F9 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .info-card.mobile-show {
            background: #F1F5F9 !important;
            padding-top: 0rem !important;
            padding-bottom: 3rem !important;
        }

        .section-compannies.liputan {
            background: #F1F5F9 !important;
            padding-top: 1.5rem !important;
        }


        @media (max-width:767px) {
            .content-title {
                padding-left: 25px;
                padding-right: 25px;
            }

            .txt-fitur-blue {
                color: #140080;
            }

            .txt-fitur-cyan {
                color: #03B4CF;
            }

            .txt-fitur-green {
                color: #188A59;
            }

            .title-fitur {
                font-size: 29px;
                font-weight: 600;
            }

            .by--goodeva {
                color: #B4B4B4;
                font-size: 12px;
                margin-bottom: 5%;

            }

            .fitur-area{
                background: #F1F5F9;
            }

            .fitur-area .fitur-even{
                background: #ffffff;
            }

            .my-fitur:nth-last-child(1) {
                margin-bottom: 1rem !important;
            }

            .section-watch-video .header p.mobile-show {
                padding-top: 5%;
                font-size: 14px;
                font-weight: 400;
                line-height: 16.94px;
                text-align: center;

            }

            #started-mobile{
                background: none !important;
            }

            #started-mobile .content-title span{                
                font-size: 24px;
                font-weight: 400;
                line-height: 29.05px;
                text-align: center;
            }

            .portfolio .header{
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column
            }

            .portfolio .header h4{
                width: 65vw;
            }

            #info-card-mobile .project-area{
                padding-right: 1.7rem;
                padding-left: 1.7rem;    
            }
            #info-card-mobile .card-project-area{
                margin-top: 1rem;
                margin-bottom: 1rem;
                padding: 0;
            }   
            
            .project-area .btn-more-project{
                font-size: 16px; 
            }
            .project-area .btn-more-project{
                width: 14px;
            }

            .testimoni-h{
                margin-top: 2rem;
                margin-bottom: 3rem;
            }

            .testimoni-h .testimoni-content{
                padding-left: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                
            }
            
            .testimoni-h .testimoni-title{                
                font-size: 32px;
                font-weight: 700;
                line-height: 48px;
                text-align: center;
                width: 85%;
            }

            .testimoni-h .testimoni-statement{
                font-size: 14px;
                font-weight: 400;
                line-height: 16.94px;
                text-align: center;
                margin-bottom: 15px;
                margin-top: 25px;
            }

            .testimoni-h .testimoni-name,.testimoni-h .testimoni-client{                
                font-size: 14px;
                font-weight: 700;
                line-height: 16.94px;
                text-align: center;

            }

            .testimoni-h .testimoni-client{                                
                font-weight: 400;
            }

            .testimoni-h .w-80{
                width: 60vw;
            }

            .testimoni-h .testimoni-image-area{
                height: 280px;
            }

            .testimoni-h .testimoni-image-area img{
                border-radius: 4px;
            }

            .testimoni-h .custom-prev-arrow{
                bottom: -67%;
                left: 32%;
            }
            .testimoni-h .custom-next-arrow{
                bottom: -67%;
                left: 52%;
            }

            .testimoni-h .custom-prev-arrow, .testimoni-h .custom-next-arrow{
                padding: 9px 23px;
            }
            
        }

        .h-box-f {
            width: 100%;
        }

        .info-card .card-erp p {
            /* color: #fff; */
            /* font-weight: 300; */
            /* margin-bottom: 14px; */
            /* padding-right: 28%; */
            /* line-height: 35px; */
            /* letter-spacing: 0.8px; */
            font-size: 20px;
        }

        .testimoni-h .slick-dots li button:before,
        .portofolio-slide .slick-dots li button:before,
        .portofolio-slide-m .slick-dots li button:before {
            font-size: 9px;
            top: -72px;
            left: -29px;
            color: #63A6B3;

        }

        .portofolio-slide-m .slick-dots li button:before{
            opacity: 0;
        }

        .slick-prev::before {
            font-family: FontAwesome !important;
            content: "\f0d9";

        }

        .slick-next::before {
            font-family: FontAwesome !important;
            content: "\f0da";

        }

        .slick-prev:before,
        .slick-next:before {
            color: #4C8D9A !important;
            font-size: 25px !important;
        }

        .info-card .card-safety img {
            width: 60%;
            height: 50%;
            right: 95px;
        }

        /* css for safari browser */
        _::-webkit-full-page-media,
        _:future,
        :root .pt-5,
        .py-5 {

            padding-top: 9rem !important;
        }
    </style>

@endsection



@section('content')

    <!---------- Banner slider ---------->
    <section class="header" id="header">

        <!-- versi desktop -->
        <div class="slider-area desktop-show mt-3">
            <div class="hslide-area d-none d-sm-block" id="hslide-area">
                <!-- slide pertama -->
                @for ($i_slider = 1; $i_slider <= count($text_lang[$default_lang]['section1']['list_slider']); $i_slider++)
                    <!-- comment separator -->
                    <!-- Tanpa Asset di sebelah kiri -->
                    @if ($i_slider <= 1)
                        <!-- comment separator -->
                        <div class="slid-content">
                            <img src="{{ asset('public/img/assets/home/slider/' . $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['img_first']) }}"
                                class="d-block {{ $i_slider != 2 ? 'w-100' : '' }} main-image" alt="">
                            <div class="txt-header-right">
                                <span
                                    class="font-inter">{{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text1'] }}</span>
                                <h2 class="font-inter">
                                    {{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text2'] }}
                                </h2>
                                <p class="font-inter">
                                    {{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text3'] }}
                                </p>
                                <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                                    {{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text_button'] }}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @else
                        <!-- Dengan Asset di sebelah kiri -->
                        <div class="slid-content">
                            <img src="{{ asset('public/img/assets/home/slider/' . $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['img_first']) }}"
                                class="d-block w-100 main-image" alt="">
                            @php
                                if (
                                    isset(
                                        $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider][
                                            'code'
                                        ],
                                    )
                                ) {
                                    $codeItem =
                                        $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider][
                                            'code'
                                        ];
                                    if ($codeItem == 'wearable_apps') {
                                        $classAssetLeft = 'left-slider-item';
                                    } else {
                                        $classAssetLeft = 'left-slider-item-bottom';
                                        $classAssetLeft .= ' ' . $codeItem;
                                    }
                                }
                            @endphp
                            <img src="{{ asset('public/img/assets/home/slider/' . $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['img_second']) }}"
                                class="{{ $classAssetLeft }}" alt="">
                            <div class="txt-header-right">
                                <span
                                    class="font-inter">{{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text1'] }}</span>
                                <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text2'] }}
                                </h2>
                                <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text3'] }}
                                </p>
                                <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                                    {{ $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['text_button'] }}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endif
                @endfor

            </div>

        </div>

        <div class="slider-area mobile-show mt-0">

            <div class="hslide-area d-none d-sm-block" id="hslide-area-mobile">

                <div class="slid-content">

                    <img src="{{ asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">

                    {{-- <img src="{{ asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise-mobile.png') }}"
                        class="img-left-hp" alt=""> --}}

                    <div class="txt-header-right-hp">

                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text1'] }}</span>

                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text2'] }}</h2>

                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text3'] }}</p>

                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">

                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text_button'] }}</span>

                            <i class="fa fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <div class="slid-content">

                    <img src="{{ asset('public/img/assets/home/slider/wearables-and-apps-integration-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">

                    {{-- <img src="{{ asset('public/img/assets/home/slider/Goodeva-b2b-integrated-health-safety-technology-2.png') }}"
                        class="img-left-worker" alt=""> --}}

                    <div class="txt-header-right-hp txt-header-right-worker">

                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text1'] }}</span>

                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text2'] }}</h2>

                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text3'] }}</p>

                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">

                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text_button'] }}</span>

                            <i class="fa fa-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div class="slid-content">


                    <img src="{{ asset('public/img/assets/home/slider/prevent-accidents-due-to-fatigue-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">


                    {{-- <img src="{{ asset('public/img/assets/home/slider/goodeva-technology-integrasi-wearables-aplikasi-2-mobile.png') }}"
                        class="img-left-hp" alt=""> --}}

                    <div class="txt-header-right-hp">

                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text1'] }}</span>

                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text2'] }}</h2>

                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text3'] }}</p>

                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">

                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text_button'] }}</span>

                            <i class="fa fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                <div class="slid-content">

                    <img src="{{ asset('public/img/assets/home/slider/transforming-global-technology-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">

                    {{-- <img src="{{ asset('public/img/assets/home/slider/Solusi-keselamatan-kerja-goodeva-technology-smart-safety-2.png') }}"
                        class="img-left-worker" alt=""> --}}

                    <div class="txt-header-right-hp txt-header-right-worker">

                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider4']['text1'] }}</span>

                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider4']['text2'] }}</h2>

                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider4']['text3'] }}</p>

                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">

                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider4']['text_button'] }}</span>

                            <i class="fa fa-arrow-right"></i>

                        </a>

                    </div>

                </div>




              


            </div>

        </div>

    </section>



    {{-- Video --}}

    <section class="section-watch-video">

        <div class="container-custom">

            <div class="header text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">

                <h3 class="mt-6rem mb-2 desktop-show">{{ $text_lang[$default_lang]['section2']['title'] }}</h3>
                <h5 class="mt-0 mb-0 mx-4 mt-5 mobile-show">{{ $text_lang[$default_lang]['section2']['title'] }}</h5>

                <p class="desktop-show mb-0">{{ $text_lang[$default_lang]['section2']['text1'] }}</p>
                <p class="mobile-show">{{ $text_lang[$default_lang]['section2']['text1'] }}</p>

            </div>

            <div class="row desktop-show">

                <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="450" data-aos-once="true"
                    data-aos-duration="1500" data-aos-easing="linear">

                    <div class="control-button">

                        <a href="https://youtu.be/v_oMbXlVSLg" data-lity>

                            <img src="{{ asset('public/img/assets/home/Video - Paly button.png') }}" alt=""
                                class="play-btn">

                        </a>

                        <div class="clearfix"></div>

                    </div>

                    <div class="computer">

                        <img src="{{ asset('public/img/assets/home/Mining-indusrty-technology-smart-safety.png') }}"
                            alt="" />

                    </div>

                </div>

            </div>

            <div class="row mx-0  mobile-show">

                <div class="col-lg-12 col-md-12" data-aos="zoom-in-up" data-aos-delay="450" data-aos-once="true"
                    data-aos-duration="700" data-aos-easing="linear">

                    <div class="control-button">

                        {{-- <a href="https://www.youtube.com/watch?v=MIjr9xjQpf4" class="fancybox-video"> --}}

                        <a href="https://youtu.be/v_oMbXlVSLg" data-lity>

                            {{-- <span class="icon icon-Play"></span> --}}

                            <img src="{{ asset('public/img/assets/home/Video - Paly button.png') }}" alt=""
                                class="play-btn">

                        </a>

                        <div class="clearfix"></div>

                        {{-- <span>watch the video</span> --}}

                    </div>

                    <div class="computer">

                        <img src="{{ asset('public/img/assets/home/Mining-indusrty-technology-smart-safety.png') }}"
                            alt="" />

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- Akhir Video --}}



    {{-- Fitur --}}

    <section class="fitur mt-5  atas-rounded desktop-show" id="fitur">

        <div class="row mx-0">
            <div class="col-md-12 space-height">
            </div>
        </div>
        <div class="row mx-0 fitur-odd">
            <div class="col-md-6 pr-5 pl-0 py-fitur">
                <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content1']['cover']) }}"
                    class="img-section " alt="">
            </div>
            <div class="col-md-6 px-5 py-fitur">
                <div class="fitur-content">
                    <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content1']['logo']) }}"
                        class="img-responsive smart-safety-logo" alt="">
                    <h4 class="fitur-title font-inter">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content1']['main_text'] }}</h4>
                    <p class="fitur-desc font-inter">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content1']['sub_text'] }}
                    </p>
                    <a href="{{ url('goodeva-smart-safety') }}" class="btn-wa">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content1']['button_text'] }}
                    </a>
                </div>
            </div>
        </div>

        <div class="row mx-0">

            <div class="col-md-6 px-5 py-fitur">
                <div class="fitur-content">
                    <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content2']['logo']) }}"
                        class="img-responsive sales-trace-logo" alt="">
                    <h4 class="fitur-title">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content2']['main_text'] }}</h4>
                    <p class="fitur-desc">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content2']['sub_text'] }}
                    </p>
                    <a href="{{ url('goodeva-sales-trace') }}" class="btn-wa">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content2']['button_text'] }}
                    </a>
                </div>
            </div>

            <div class="col-md-6 pl-5 pr-0 py-fitur">
                <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content2']['cover']) }}"
                    class="img-section " alt="">
            </div>

        </div>

        <div class="row mx-0 fitur-odd">
            <div class="col-md-6 pr-5 pl-0 py-fitur">
                <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content3']['cover']) }}"
                    class="img-section " alt="">
            </div>
            <div class="col-md-6 px-5 py-fitur">
                <div class="fitur-content">
                    <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content3']['logo']) }}"
                        class="img-responsive goodeva-enterprise-logo" alt="">
                    <h4 class="fitur-title">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content3']['main_text'] }}</h4>
                    <p class="fitur-desc">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content3']['sub_text'] }}
                    </p>
                    <a href="{{ url('goodeva-smart-safety') }}" class="btn-wa">
                        {{ $text_lang[$default_lang]['section2']['about_product']['content3']['button_text'] }}
                    </a>
                </div>
            </div>
        </div>

    </section>

    <section class="fitur mt-0 mb-0 atas-rounded mobile-show" id="fitur">

        <div class="container px-0">

            <div class="mx-0 py-4 fitur-area">

                <div class="box-fitur my-fitur mx-0 fitur-odd px-container" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="1000" data-aos-once="true">

                    <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content1']['cover']) }}"
                    class="img-section " alt="">

                    <div class="fitur-content">
                        <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content1']['logo']) }}"
                            class="img-responsive smart-safety-logo" alt="">
                        <h4 class="fitur-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['main_text'] }}</h4>
                        <p class="fitur-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-smart-safety') }}" class="btn-wa">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['button_text'] }}
                        </a>
                    </div>
                </div>

                <div class="box-fitur my-fitur mx-0 px-container fitur-even" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="1000" data-aos-once="true">

                    <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content2']['cover']) }}"
                    class="img-section " alt="">

                    <div class="fitur-content">
                        <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content2']['logo']) }}"
                            class="img-responsive non-smart-safety-logo" alt="">
                        <h4 class="fitur-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['main_text'] }}</h4>
                        <p class="fitur-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-smart-safety') }}" class="btn-wa">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['button_text'] }}
                        </a>
                    </div>
                </div>

                <div class="box-fitur my-fitur mx-0 fitur-odd px-container" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="1000" data-aos-once="true">

                    <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content3']['cover_mobile']) }}"
                    class="img-section " alt="">

                    <div class="fitur-content">
                        <img src="{{ asset('public/img/assets/home/updated_asset/' . $text_lang[$default_lang]['section2']['about_product']['content3']['logo']) }}"
                            class="img-responsive non-smart-safety-logo" alt="">
                        <h4 class="fitur-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['main_text'] }}</h4>
                        <p class="fitur-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-smart-safety') }}" class="btn-wa">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['button_text'] }}
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- Akhir Fitur --}}



    {{-- Section Info Card --}}

    <section class="info-card desktop-show" id="info-card">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 project-area">
                    <ul class="nav-goodeva justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-tab="tabAll">All Recent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="tabGov">Government</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="tabCor">Corporate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tab="tabInt">International</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tabAll" class="tab-pane active">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/lkpp-goodeva-bg.png') }}"
                                                class="bg-card" alt="lkpp-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/lkpp-goodeva-logo.png') }}"
                                                class="logo-card" alt="lkpp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">LKPP</h5>
                                                <p class="card-text">Integrated and web-based national inpassing system for LKPP</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/b20-goodeva-bg.png') }}"
                                                class="bg-card" alt="b20-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/b20-goodeva-logo.png') }}"
                                                class="logo-card" alt="b20-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">B20 Council Platform</h5>
                                                <p class="card-text">The B20 is an international business forum composed of representatives from the G20 business community, serving as a platform for dialogue between global business leaders</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/asean-goodeva-bg.png') }}"
                                                class="bg-card" alt="asean-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/asean-goodeva-logo.png') }}"
                                                class="logo-card" alt="asean-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">ASEAN</h5>
                                                <p class="card-text">Develop and implement a standalone LMS that can be accessed by all member countries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-group row mx-0 add-project">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/kementan-goodeva-bg.png') }}"
                                                class="bg-card" alt="KementanRI-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/kementan-goodeva-logo.png') }}"
                                                class="logo-card" alt="KementanRI-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">Kementrian Pertanian</h5>
                                                <p class="card-text">Special web platform for palm oil monitoring to integrate data from various sources so that it is easy to access</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/kadin-goodeva-bg.png') }}"
                                                class="bg-card" alt="kadin-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/kadin-goodeva-logo.png') }}"
                                                class="logo-card" alt="kadin-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">Kadin Indonesia</h5>
                                                <p class="card-text">Integrated vaccination management system for Mutual Cooperation Vaccination needs</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/undp-goodeva-bg.png') }}"
                                                class="bg-card" alt="undp-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/undp-goodeva-logo.png') }}"
                                                class="logo-card" alt="undp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">UNDP</h5>
                                                <p class="card-text">This system will integrate data from various sources into a platform that is easy to access and analyze</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center btn-more-area">
                                <a href="#" class="btn-more-project font-inter">Load More <br> <img src="{{ asset('public/img/assets/home/btn-more.svg') }}"></a>
                            </div>
                        </div>
                        <div id="tabGov" class="tab-pane">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/lkpp-goodeva-bg.png') }}"
                                                class="bg-card" alt="lkpp-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/lkpp-goodeva-logo.png') }}"
                                                class="logo-card" alt="lkpp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">LKPP</h5>
                                                <p class="card-text">Integrated and web-based national inpassing system for LKPP</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/kementan-goodeva-bg.png') }}"
                                                class="bg-card" alt="KementanRI-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/kementan-goodeva-logo.png') }}"
                                                class="logo-card" alt="KementanRI-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">Kementrian Pertanian</h5>
                                                <p class="card-text">Special web platform for palm oil monitoring to integrate data from various sources so that it is easy to access</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="tabCor" class="tab-pane">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/kadin-goodeva-bg.png') }}"
                                                class="bg-card" alt="kadin-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/kadin-goodeva-logo.png') }}"
                                                class="logo-card" alt="kadin-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">Kadin Indonesia</h5>
                                                <p class="card-text">Integrated vaccination management system for Mutual Cooperation Vaccination needs</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/undp-goodeva-bg.png') }}"
                                                class="bg-card" alt="undp-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/undp-goodeva-logo.png') }}"
                                                class="logo-card" alt="undp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">UNDP</h5>
                                                <p class="card-text">This system will integrate data from various sources into a platform that is easy to access and analyze</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="tabInt" class="tab-pane">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/b20-goodeva-bg.png') }}"
                                                class="bg-card" alt="b20-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/b20-goodeva-logo.png') }}"
                                                class="logo-card" alt="b20-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">B20 Council Platform</h5>
                                                <p class="card-text">The B20 is an international business forum composed of representatives from the G20 business community, serving as a platform for dialogue between global business leaders</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="">
                                        <div class="card">
                                            <img src="{{ asset('public/img/assets/home/asean-goodeva-bg.png') }}"
                                                class="bg-card" alt="asean-goodeva-bg">
                                            <img src="{{ asset('public/img/assets/home/asean-goodeva-logo.png') }}"
                                                class="logo-card" alt="asean-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="card-title">ASEAN</h5>
                                                <p class="card-text">Develop and implement a standalone LMS that can be accessed by all member countries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>

        </div>

    </section>

    <section class="info-card mobile-show" id="info-card-mobile">

        <div class="container px-0">

            <div class="row mx-0">

                <div class="slider-area mobile-show mt-0">
                    
                        <div class="w-100 project-area">
                            <ul class="nav-goodeva justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-tab="tabAllMob">All Recent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-tab="tabGovMob">Government</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-tab="tabCorMob">Corporate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-tab="tabIntMob">International</a>
                                </li>
                            </ul>
        
                            <div class="tab-content">
                                <div id="tabAllMob" class="tab-pane active">
                                    <div class="card-group row mx-0">
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/lkpp-goodeva-bg.png') }}"
                                                        class="bg-card" alt="lkpp-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/lkpp-goodeva-logo.png') }}"
                                                        class="logo-card" alt="lkpp-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">LKPP</h5>
                                                        <p class="card-text">Integrated and web-based national inpassing system for LKPP</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/b20-goodeva-bg.png') }}"
                                                        class="bg-card" alt="b20-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/b20-goodeva-logo.png') }}"
                                                        class="logo-card" alt="b20-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">B20 Council Platform</h5>
                                                        <p class="card-text">The B20 is an international business forum composed of representatives from the G20 business community, serving as a platform for dialogue between global business leaders</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/asean-goodeva-bg.png') }}"
                                                        class="bg-card" alt="asean-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/asean-goodeva-logo.png') }}"
                                                        class="logo-card" alt="asean-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">ASEAN</h5>
                                                        <p class="card-text">Develop and implement a standalone LMS that can be accessed by all member countries</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-group row mx-0 add-project">
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/kementan-goodeva-bg.png') }}"
                                                        class="bg-card" alt="KementanRI-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/kementan-goodeva-logo.png') }}"
                                                        class="logo-card" alt="KementanRI-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Kementrian Pertanian</h5>
                                                        <p class="card-text">Special web platform for palm oil monitoring to integrate data from various sources so that it is easy to access</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/kadin-goodeva-bg.png') }}"
                                                        class="bg-card" alt="kadin-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/kadin-goodeva-logo.png') }}"
                                                        class="logo-card" alt="kadin-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Kadin Indonesia</h5>
                                                        <p class="card-text">Integrated vaccination management system for Mutual Cooperation Vaccination needs</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/undp-goodeva-bg.png') }}"
                                                        class="bg-card" alt="undp-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/undp-goodeva-logo.png') }}"
                                                        class="logo-card" alt="undp-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">UNDP</h5>
                                                        <p class="card-text">This system will integrate data from various sources into a platform that is easy to access and analyze</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center btn-more-area">
                                        <a href="#" class="btn-more-project font-inter">Load More <br> <img src="{{ asset('public/img/assets/home/btn-more.svg') }}"></a>
                                    </div>
                                </div>
                                <div id="tabGovMob" class="tab-pane">
                                    <div class="card-group row mx-0">
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/lkpp-goodeva-bg.png') }}"
                                                        class="bg-card" alt="lkpp-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/lkpp-goodeva-logo.png') }}"
                                                        class="logo-card" alt="lkpp-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">LKPP</h5>
                                                        <p class="card-text">Integrated and web-based national inpassing system for LKPP</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/kementan-goodeva-bg.png') }}"
                                                        class="bg-card" alt="KementanRI-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/kementan-goodeva-logo.png') }}"
                                                        class="logo-card" alt="KementanRI-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Kementrian Pertanian</h5>
                                                        <p class="card-text">Special web platform for palm oil monitoring to integrate data from various sources so that it is easy to access</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="tabCorMob" class="tab-pane">
                                    <div class="card-group row mx-0">
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/kadin-goodeva-bg.png') }}"
                                                        class="bg-card" alt="kadin-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/kadin-goodeva-logo.png') }}"
                                                        class="logo-card" alt="kadin-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Kadin Indonesia</h5>
                                                        <p class="card-text">Integrated vaccination management system for Mutual Cooperation Vaccination needs</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/undp-goodeva-bg.png') }}"
                                                        class="bg-card" alt="undp-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/undp-goodeva-logo.png') }}"
                                                        class="logo-card" alt="undp-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">UNDP</h5>
                                                        <p class="card-text">This system will integrate data from various sources into a platform that is easy to access and analyze</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="tabIntMob" class="tab-pane">
                                    <div class="card-group row mx-0">
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/b20-goodeva-bg.png') }}"
                                                        class="bg-card" alt="b20-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/b20-goodeva-logo.png') }}"
                                                        class="logo-card" alt="b20-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">B20 Council Platform</h5>
                                                        <p class="card-text">The B20 is an international business forum composed of representatives from the G20 business community, serving as a platform for dialogue between global business leaders</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 card-project-area">
                                            <a href="">
                                                <div class="card">
                                                    <img src="{{ asset('public/img/assets/home/asean-goodeva-bg.png') }}"
                                                        class="bg-card" alt="asean-goodeva-bg">
                                                    <img src="{{ asset('public/img/assets/home/asean-goodeva-logo.png') }}"
                                                        class="logo-card" alt="asean-goodeva-logo">
                                                    <div class="card-body">
                                                        <h5 class="card-title">ASEAN</h5>
                                                        <p class="card-text">Develop and implement a standalone LMS that can be accessed by all member countries</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                   
                </div>

            </div>

        </div>

    </section>

    {{-- Akhir Section Card --}}



    {{-- Section Portfolio --}}

    <section class="section-compannies portfolio bg-port pt-6rem pb-6rem pt-sm-1-5rem" id="portfolio">
        

            <div class="header text-center">

                <h4 class="mt-0 mb-5 desktop-show">{{ $text_lang[$default_lang]['section3']['title'] }}</h4>
                <h4 class="mt-0 mb-4 mobile-show">{{ $text_lang[$default_lang]['section3']['title'] }}</h4>

            </div>

            <div class="container">

                <div class="row mx-0">

                    <div class="col-lg-12 col-md-12 px-sm-0 text-center">
                        <div class="portofolio-slide desktop-show">
                            <div>
                                <img class="img-responsive desktop-show"
                                    src="{{ asset('public/img/assets/home/goodeva-portfolio-client-1.svg') }}"
                                    alt="">
                            </div>
                            {{-- <div>
              <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/goodeva-portfolio-client-2.png?v=1.2')}}" alt="">
            </div> --}}
                        </div>

                        <div class="portofolio-slide-m mobile-show">
                            <div>
                                <img class="img-responsive mobile-show"
                                    src="{{ asset('public/img/assets/home/goodeva-portfolio-client-mobile-1.svg') }}"
                                    alt="">
                            </div>
                            {{-- <div>
              <img class="img-responsive mobile-show" src="{{asset('public/img/assets/home/goodeva-portfolio-client-m-2.png?v=1.2')}}" alt="">
            </div> --}}
                        </div>


                    </div>

                </div>

            </div>
        



        {{-- Testimoni --}}

        <div class="testimoni-h desktop-show">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="testimoni-content">
                            <h3 class="testimoni-title">What Our Client
                                Are Saying </h3>
                            <h4 class="testimoni-statement font-inter" id="testimoni-statement">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['statement'] }}
                            </h4>

                            <span
                                class="testimoni-name font-inter" id="testimoni-name">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['name'] }}
                              </span>

                            <p class="p-putih testimoni-client font-inter" id="testimoni-client">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['klien_from'] }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="testimoni-slider">
                            @for ($i_klien = 1; $i_klien <= count($text_lang[$default_lang]['section3']['state_klien']); $i_klien++)
                                <!-- comment separator -->
                                <div class="w-80">
                                    <div class="testimoni-image-area">
                                        <img class="max-img hid"
                                            src="{{ asset('public/img/assets/home/' . $text_lang[$default_lang]['section3']['state_klien']['state' . $i_klien]['picture']) }}"
                                            alt="Client Image">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimoni-h mobile-show">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="testimoni-content">
                            <h3 class="testimoni-title">What Our Client
                                Are Saying </h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="testimoni-slider">
                            @for ($i_klien = 1; $i_klien <= count($text_lang[$default_lang]['section3']['state_klien']); $i_klien++)
                                <!-- comment separator -->
                                <div class="w-80">
                                    <div class="testimoni-image-area">
                                        <img class="max-img hid"
                                            src="{{ asset('public/img/assets/home/' . $text_lang[$default_lang]['section3']['state_klien']['state' . $i_klien]['picture']) }}"
                                            alt="Client Image">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="testimoni-content">
                            <h4 class="testimoni-statement font-inter" id="testimoni-statement-mobile">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['statement'] }}
                            </h4>
                            <span
                                class="testimoni-name font-inter" id="testimoni-name-mobile">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['name'] }}
                              </span>
                            <p class="p-putih testimoni-client font-inter" id="testimoni-client-mobile">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['klien_from'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- ========= -->

            {{-- Akhir Testimoni --}}

    </section>

    {{-- Akhir Section Portfolio --}}







    {{-- Section Liputan --}}

    <section class="section-compannies liputan" id="liputan">

        <div class="header text-center">

            <h4 class="mt-5 desktop-show mb-2">{{ $text_lang[$default_lang]['section4']['title'] }}</h4>

            <h4 class="mt-2 mobile-show mb-4">{{ $text_lang[$default_lang]['section4']['title'] }}</h4>

        </div>

        <div class="container-custom">

            <div class="row desktop-show">

                <div class="col-lg-2 col-md-2 col-sm-4">
                    {{-- <a href="https://www.liputan6.com/"> --}}
                    <a
                        href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Liputan-6-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    {{-- <a href="https://www.bisnis.com/"> --}}
                    <a
                        href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    {{-- <a href="https://www.beritasatu.com/"> --}}
                    <a href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Berita-satu-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    {{-- <a href="https://kumparan.com/"> --}}
                    <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Kumparan-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    {{-- <a href="https://www.tempo.co/"> --}}
                    <a href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Tempo-goodeva.png') }}" alt="">
                    </a>
                </div>



                <div class="col-lg-2 col-md-2 col-sm-4">
                    {{-- <a href="https://www.tribunnews.com/"> --}}
                    <a
                        href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png') }}"
                            alt="">
                    </a>
                </div>

            </div>

            <div class="row mobile-show mx-0">

                <div class=" col-xs-4 col-sm-4">
                    {{-- <a href="https://www.liputan6.com/"> --}}
                    <a
                        href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Liputan-6-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    {{-- <a href="https://www.bisnis.com/"> --}}
                    <a
                        href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    {{-- <a href="https://www.beritasatu.com/"> --}}
                    <a href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Berita-satu-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    {{-- <a href="https://kumparan.com/"> --}}
                    <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/TirtoId-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    {{-- <a href="https://www.tempo.co/"> --}}
                    <a href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Tempo-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    {{-- <a href="https://www.tribunnews.com/"> --}}
                    <a
                        href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png') }}"
                            alt="">
                    </a>
                </div>

                {{-- <div class="col-lg-12 col-md-12 mx-3 text-center"> --}}

                {{-- <img class="img-responsive mobile-show mt-5" src="{{asset('public/img/assets/home/diliput-goodeva-mobile.png')}}" alt=""> --}}

                {{-- </div> --}}

            </div>

        </div>

    </section>

    {{-- Akhir Section Liputan --}}



    {{-- Get Started --}}

    <section id="started" class="desktop-show">

        <div class="dark-content relative">

            <img src="{{ asset('public/img/assets/home/goodeva-started.png') }}" alt="bg-started-goodeva"
                class="full-bg-started">

            <h2 class="content-title content-started" data-aos="fade-up" data-aos-delay="0" data-aos-once="true"
                data-aos-duration="1500">

                <img src="{{ asset('public/img/assets/solution/goodeva-logo-white-lights.png') }}"
                    alt="logo-goodeva-white" class="logo-started">

                <span><?php echo $text_lang[$default_lang]['section5']['title']; ?></span>

                <a href="{{ url('contact') }}" class="btn btn-started">

                    <span class="mb-2">{{ $text_lang[$default_lang]['section5']['button_text'] }}</span>

                    <i class="fa fa-chevron-right pl-2"></i>

                </a>

            </h2>

        </div>

    </section>

    <section id="started-mobile" class="mobile-show">

        <div class="dark-content px-0 relative">

            <img src="{{ asset('public/img/assets/home/goodeva-started-mobile.png') }}" alt="bg-started-goodeva"
                class="full-bg-started">
                            

                    <h2 class="content-title content-started" data-aos="fade-up" data-aos-delay="150" data-aos-once="true"
                        data-aos-duration="1500" data-aos-easing="linear">

                        <img class="mb-2"
                            src="{{ asset('public/img/assets/solution/goodeva-logo-white-lights.png') }}" alt="">

                        <span><?php echo $text_lang[$default_lang]['section5']['title']; ?></span>

                        <a href="{{ url('contact') }}" class="btn btn-started desktop-show">

                            <span class="mb-2">Get Started</span>

                            <i class="fa fa-chevron-right pl-2"></i>

                        </a>

                        <a href="{{ url('contact') }}" class="btn btn-mobile-started-2 mobile-show px-5">

                            {{ 'Get Started' }}

                            <i class="fa fa-chevron-right pl-2"></i>

                        </a>

                        {{-- <a href="{{ url('/wa') }}" class="btn btn-wa-2 mobile-show"> --}}
                        {{-- <i class="fa fa-whatsapp" style="font-size: 18px !important;"></i>&nbsp; --}}
                        {{-- Whatsapp Kami --}}
                        {{-- </a> --}}

                    </h2>

                    {{-- <img src="{{ asset('public/img/assets/home/Footer@2x.png') }}" alt=""
                        class="valign-middle w-100p"> --}}                

        </div>

    </section>

    {{-- Akhir Get Started --}}

@endsection




@section('js_after')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <script src="{{ asset('public/js/slick.min.js') }}" charset="utf-8"></script>

    {{-- <script src="vendor/jquery.js"></script> --}}
    <script src="{{ asset('public/js/lity.min.js') }}"></script>



    <script type="text/javascript">
        $('#hslide-area,#hslide-area-mobile').slick({

            dots: true,

            infinite: true,

            adaptiveHeight: true,

            //   slidesToShow: 3,

            //   slidesToScroll: 1,

            autoplay: false,

            autoplaySpeed: 4000,

            arrows: false,

            pauseOnHover: false,

            pauseOnFocus: false,

            responsive: [

                {

                    breakpoint: 767,

                    settings: {

                        arrows: false,

                        dots: false,

                        adaptiveHeight: true,


                    }

                }

            ]

        });

        $('#infocard_slider').slick({

            dots: true,

            infinite: true,

            adaptiveHeight: true,

            //   slidesToShow: 3,

            //   slidesToScroll: 1,

            autoplay: false,

            autoplaySpeed: 4000,

            arrows: false,

            pauseOnHover: false,

            pauseOnFocus: false,



            responsive: [

                {

                    breakpoint: 480,

                    settings: {

                        arrows: false,

                        centerMode: true,

                        centerPadding: '40px',



                    }

                }

            ]

        });

        $('.portofolio-slide-m').slick({
            infinite: true,

            //  speed: 400,

            slidesToShow: 1,

            variableWidth: false,

            autoplay: true,

            pauseOnHover: false,

            autoplaySpeed: 5000,

            dots: true,

            arrows: false,
        })

        $('.portofolio-slides').slick({

            infinite: true,

            //  speed: 400,

            slidesToShow: 1,

            variableWidth: false,

            autoplay: true,

            pauseOnHover: false,

            autoplaySpeed: 5000,

            dots: false,

            arrows: true,

            prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",

            responsive: [

                {

                    breakpoint: 672,

                    settings: {

                        // variableWidth: false,

                        autoplay: false,

                        //   autoplaySpeed: 3000,

                        centerMode: true,



                        centerPadding: '50px',

                    }

                }

            ]

        });
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav-goodeva').on('click', '.nav-link', function(e) {
                e.preventDefault();

                if ($(this).hasClass('disabled')) return;

                // Remove active class from all tab links
                $('.nav-link').removeClass('active');

                // Add active class to the clicked tab link
                $(this).addClass('active');

                // Hide all tab panes with fade out
                $('.tab-pane.active').fadeOut(400, function() {
                    // Show the selected tab pane with fade in after fade out is complete
                    var tabId = $('.nav-link.active').data('tab');
                    $('.tab-pane').removeClass('active');
                    $('#' + tabId).addClass('active').fadeIn(400);
                });
            });

            $('.btn-more-project').click(function(e) {
                e.preventDefault(); // Mencegah aksi default dari link

                // Menampilkan elemen dengan efek animasi
                $('.add-project').slideDown(300);

                // Menyembunyikan tombol setelah diklik
                $(this).hide();
            });
        });

        const testimonies = @json($text_lang[$default_lang]['section3']['state_klien']);

        $('.testimoni-slider').slick({

            infinite: true,

            //  speed: 400,

            slidesToShow: 1,

            variableWidth: true,
            centerMode: false,

            autoplay: false,

            pauseOnHover: false,

            //  autoplaySpeed: 3000,

            dots: false,

            arrows: true,

            prevArrow: '<button type="button" class="custom-prev-arrow"><i class="fa fa-arrow-left"></i></button>',
            nextArrow: '<button type="button" class="custom-next-arrow"><i class="fa fa-arrow-right"></i></button>',

            responsive: [

                {

                    breakpoint: 672,

                    settings: {

                        // variableWidth: false,

                        autoplay: false,

                        //   autoplaySpeed: 3000,

                        centerMode: true,

                        prevArrow: '<button type="button" class="custom-prev-arrow"><i class="fa fa-arrow-left"></i></button>',
                        nextArrow: '<button type="button" class="custom-next-arrow"><i class="fa fa-arrow-right"></i></button>',
                        arrows: true,


                        centerPadding: '50px',

                    }

                }

            ]

        });

         // Fungsi untuk memperbarui konten teks berdasarkan indeks
         function updateTestimonyContent(index) {
            $('#testimoni-statement').text(testimonies['state' + (index + 1)]['statement']);
            $('#testimoni-name').text(testimonies['state' + (index + 1)]['name']);
            $('#testimoni-client').text(testimonies['state' + (index + 1)]['klien_from']);
            $('#testimoni-statement-mobile').text(testimonies['state' + (index + 1)]['statement']);
            $('#testimoni-name-mobile').text(testimonies['state' + (index + 1)]['name']);
            $('#testimoni-client-mobile').text(testimonies['state' + (index + 1)]['klien_from']);
        }

        // Perbarui konten saat slider berubah
        $('.testimoni-slider').on('afterChange', function(event, slick, currentSlide) {
            updateTestimonyContent(currentSlide);
        });

        // Inisialisasi konten dengan slide pertama
        updateTestimonyContent(0);
    </script>



@endsection
