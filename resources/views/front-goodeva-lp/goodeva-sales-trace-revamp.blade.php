@extends('layouts.app-front-goodeva-lp')

@section('title', 'Goodeva Sales Automation - Sales Automation Membantu Resi Penjualan')
{{-- Meta Section --}}

@section('meta_desc')
    Aplikasi pendeteksi fatigue terbaik pertama di Indonesia, Goodeva Smart Safety dapat mencegah risiko kecelakaan kerja
    yang utama
    karena fatigue secara otomatis, dan dapat meningkatkan produktivitas karyawan anda.
@endsection

@section('meta_key')
    Goodeva Smart Safety, Smart Safety, Kecelakaan Kerja, Fatigue, Aplikasi pendeteksi fatigue
@endsection

@section('meta_auth')
    goodeva
@endsection

{{-- End Meta Section --}}

@section('css_after')    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">
    <!-- Compiled and minified CSS -->

    <style>
        html {
            scroll-behavior: smooth;
        }

        .font-inter {
            font-family: 'Inter', sans-serif !important;
        }

        body {
            background: #ffffff;
        }

        .header-safety {
            background: #ffffff;
            background: url('{{ asset("public/img/assets/omsetku/background-hero.svg") }}');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .header-safety .wrap {
            height: 0vh;
        }

        .header-safety .safety-produk {
            height: 100vh;
            object-fit: cover;
        }

        .header-safety h3 {
            font-size: 100px;
            font-weight: 600;
            line-height: 121.02px;
            letter-spacing: -0.05em;
            text-align: left;
            color: #ffffff;
        }

        .header-safety .sub-header span {
            color: #26A7B5;
            font-size: 48px;
            font-weight: 500;
            line-height: 58.09px;
            letter-spacing: -0.05em;
            text-align: left;
        }

        .header-safety .sub-header span {
            background: none !important;
            padding: 0 !important;
            border-radius: 0;
        }

        .header-safety span {
            color: #133A72;
        }

        .header-safety .sub-header p {
            color: #ffffff;
        }

        .header-safety .btn--uji {
            border: 1px solid #26A7B5;
            border-radius: 70px;
            padding: 4px 32px;
            text-transform: none;
            background: #26A7B5;
            display: flex;
            width: 38%;
            font-size: 16px;
            letter-spacing: -0.02rem;
            font-weight: 700;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
        }

        .header-safety .btn--uji:hover {
            border: 1px solid #26A7B5;
            background: #ffffff;
            color: #26A7B5;
        }

        .header-safety img.left-slider-item {
            position: absolute;
            left: 0;
            bottom: 0;
            top: 60px;
            height: 543px;            
            margin: auto 0;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .header-safety .txt-header-right,
        .header-safety .txt-header-right-hp {
            width: 37%;
            position: absolute;
            top: 30%;
            left: 55%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-size: 46px;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
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

        .fitur img {

            height: 80px;
            object-fit: contain;

        }

        .img-section {
            height: 100% !important;
            width: 100% !important;
        }

        .fitur .img-section{
            height: 85vh !important;
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

        .fitur .btn-wa:hover {
            border: 1px solid #26A7B5 !important;
            background: #ffffff !important;
            color: #26A7B5 !important;
        }

        .slider-fitur{
            background: #ffffff;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .slider-fitur .fitur-content{
            background: #000000;
            padding:2vw 3vw;
            height: 90vh !important;
        }

        .slider-fitur .fitur-title {
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
            color: #ffffff;
        }

        .slider-fitur .fitur-desc {
            color: #737373;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px !important;            
            padding-right: 0;
            display: block;
            margin-top: 0;
            letter-spacing: 0;
            color: #ffffff;
        }
        
        .slider-fitur .fitur-list{            
            font-size: 22px;
            font-weight: 600;
            line-height: 43px;
            text-align: left;
            position: absolute;
            bottom: 25vh;
            left: 21%;
        }

        .slider-fitur .fitur-list span{
            color: #ffffff;
        }
        .slider-fitur .fitur-list .slide-item-active{            
            text-decoration: underline !important;
        }
        .slider-fitur .fitur-list .slide-item-count{
            color: #737577;            
        }

        .slider-fitur .slider-image-area {
            width: 100%;
            height: 90vh;
            position: relative
        }

        .slider-fitur .slider-image-area img {
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

        .slider-fitur img {            
            object-fit: cover;
        }
        .slider-fitur .img-section {
            height: 90vh !important;
        }            

        .slider-fitur .custom-prev-arrow,
        .slider-fitur .custom-next-arrow {
            position: absolute;
            background: transparent;
            border: 1px solid #ffffff;
            color: #ffffff;
            border-radius: 70px;
            padding: 15px 30px;
            color: #ffffff;            
            z-index: 1;

        }

        .slider-fitur .custom-prev-arrow {
          bottom: 25vh;
          right: -16%;
        }

        .slider-fitur .custom-next-arrow {
            bottom: 25vh;
            right: -45%;
        }

        .slider-fitur .custom-prev-arrow:hover,
        .slider-fitur .custom-next-arrow:hover {
            background: #ffffff;
            color: #000000;
            border: 1px solid #ffffff;
        }
        
        .why-reason{
            background: #ffffff;
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .why-reason .fitur-title {
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
        }

        .why-reason .fitur-desc {
            color: #737373;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px !important;            
            padding-right: 0;
            display: block;
            margin-top: 0;
            letter-spacing: 0;
        }

        

        .why-reason .py-fitur {
            padding-top: 3.5rem;
            padding-bottom: 0;
        }

        .why-reason img {            
            object-fit: contain;
        }
        .why-reason .img-section {
            height: 80vh !important;
        }            

        .why-reason .fitur-list ul li{
            vertical-align: middle;
        }

        .why-reason img.icon-check {
            height: 3vh;
            margin-right: 1vw;
        }

        .why-reason .fitur-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .why-reason .fitur-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;            
            font-size: 22px;
            font-weight: 400;
            line-height: 37.5px;
            text-align: left;
            color: #737373;

        }

        .why-reason .icon-check {
            margin-right: 10px;
            vertical-align: middle;
        }

        .faq{
            background: #ffffff;
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .faq .relative{
            position: relative;
        }

        .faq .bg-elipse{
            position: absolute;
            left: 0;
            top: 50%;            
            transform: translateY(-50%);
        }

        .faq .accordion{
            width: 42vw;
        }

        .faq .fitur-content{
            width: 40%;
            height: 100vh;
            position: absolute;
            left: 3vw;
            top: 50%;
            transform: translateY(-50%);
        }

        .faq .fitur-title {
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
            width: 40vw;
        }

        .faq .fitur-desc {
            color: #000000;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px !important;            
            padding-right: 0;
            display: block;
            margin-top: 0;
            letter-spacing: 0;
        }
        .faq .py-fitur {
            padding-top: 3.5rem;
            padding-bottom: 0;
        }    
      
        .faq .btn-header-faq{
            font-family: 'Inter',sans-serif !important;
            font-size: 25px;
            font-weight: 600;
            line-height: 34px;
            text-align: left;
            color: #1D1E25;
            padding: 20px 0;
            white-space: normal;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 3vw;
        }
        .faq .btn-header-faq:active,
        .faq .btn-header-faq:focus{
            text-decoration: none !important;
            color: #1D1E25;
        }
        .faq .btn-header-faq:hover{
            text-decoration: none !important;
            color: #3C9EA9;
        }

        .faq .btn-header-faq i{
            background: #F5F5F5;
            color: #1D1E25;
            padding: 10px;
            border-radius: 50%;
        }

        .faq .accordion .card{
            border-bottom: 1px solid #EDEDED;
            padding-top: 1vh;
            padding-bottom: 1vh;
        }
        .faq .accordion .card .card-body p{            
            font-size: 18px;
            font-weight: 400;
            line-height: 32px;
            text-align: left;
            color: #7E8492;

        }

        .integrasi {
            background: url('{{ asset('public/img/assets/background-noise.png') }}');
            background-color: #FFFFFF;
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .integrasi.feature-apps .two-col span {
            font-weight: 400;
            font-size: 18px;
            display: block;
            letter-spacing: 0.03px;
            color: #fff;
            background: #FFA200;
            padding: 10px;
            width: fit-content;
            text-align: center;
            border-radius: 5px;
        }

        .integrasi .box-biru {
            background: #020609;
            border-radius: 25px;
            margin-bottom: 15px;
            width: 100%;
            padding: 25px;
            margin: 0 10px;
        }

        .integrasi .box-biru p {
            color: #ffffff;
            font-size: 25px;
            font-weight: 400;
            line-height: 30px;
            text-align: left;
            margin-top: 10px;
            margin-bottom: 0;

        }

        .integrasi .box-biru p span {
            font-weight: 700 !important;
            background: none !important;
            display: inline !important;
            padding: 0px !important;
        }

        .integrasi .box-biru .icon-inside {
            width: 20%;
        }

        .content-feature {
            display: flex;
            align-items: center;
        }

        .integrasi .content-feature {
            justify-content: center;
            flex-direction: column;
        }

        .integrasi .content-feature.content-feature-list {
            justify-content: space-between;
            flex-direction: row;
        }


        .integrasi .header-feature.content-feature h4 {
            text-align: center;
            width: 50vw;
            margin-bottom: 2rem;
        }

        .integrasi .header-feature.content-feature p {
            text-align: center;
            width: 50vw;
            margin-bottom: 2rem;
        }



        .partner {
            background: url('{{ asset('public/img/assets/background-noise.png') }}');
            background-color: #d0e5fb;
            padding: 4rem 0 4rem !important;
            position: relative
        }

        .partner .partner-content {
            padding: 0 3vw;
        }

        .partner h3 {
            font-size: 40px;
            font-weight: 800;
            line-height: 48.41px;
            text-align: center;
            color: #15191C;
            margin-bottom: 10px;
        }

        .partner span {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #7A7A7A;
            margin-top: 0 !important;
            margin-bottom: 3rem !important;
            display: block !important;
        }

        .partner .stream-icon {
            position: absolute;
            right: 10%;
            top: -8%;
        }

        .realize-zero {
            background: #ffffff;
            padding-top: 3rem !important;
            padding-bottom: 12rem !important;
        }

        .realize-zero .header h3 {
            font-size: 50px;
            font-weight: 400;
            line-height: 60px;
            text-align: left;
        }

        .realize-zero .header .card-black {
            background: linear-gradient(180deg, #15191C 0%, #15191C 100%);
            border-radius: 24px;
            width: 50%;
            height: 100%;
            padding: 15px;
            padding-top: 5vh;
            padding-bottom: 30vh;
        }

        .realize-zero .header .card-black p {
            color: #ffffff;
            font-size: 22px;
            font-weight: 400;
            line-height: 37.5px;
            text-align: left;
        }

        .realize-zero .realize-content {
            margin-top: -150px;
            position: absolute;
            width: auto;
            z-index: 1;
        }

        .realize-zero .realize-content .realize-frame-image {
            width: 100%;
            height: 280px;
            border-radius: 28px;
        }

        .realize-zero .realize-content .realize-frame-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 28px;
        }

        .realize-zero .realize-content .col-lg-8.col-md-8 img {
            box-shadow: 30.25px 22.69px 90.76px 0px #00000040;
        }

        .liputan {
            background: url('{{ asset('public/img/assets/background-noise.png') }}');
            background-color: #d0e5fb;
        }

        .liputan .header h4 {
            font-size: 40px !important;
            letter-spacing: 0.03rem !important;
            line-height: 52px;
        }

        .liputan .list-diliput {
            margin-bottom: 1rem;
        }

        .ninja.bg--safety-trial {

            background: url('../public/img/assets/texture-bg-ninja-goodeva.png') no-repeat;
            background-repeat: no-repeat;
            background-size: cover;   
            padding-top: 0 !important;     
            padding-bottom: 0 !important;    
            position: relative; 
        }

        .ninja .texture-bg-ninja{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ninja .ninja-content{
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .ninja .ninja-area{
            position: relative;
        }

        .ninja .ninja--img{
            right: 5%;
            bottom: 0;
            margin-top: 0 !important;
            height: 135%;
            width: auto !important;
        }

        .ninja .ninja-content .text-left{
            width: 55vw;
        }

        .ninja .title--rekrut{
            font-size: 50px;
            line-height: 60.51px;
            font-weight: 700;
        }

        .ninja .btn-group-ninja,
        .ninja-mobile .btn-group-ninja{
            margin-top: 20px;
        }

        .ninja .btn-group-ninja .btn,
        .ninja-mobile .btn-group-ninja .btn{
            border-radius: 70px;
        }

        .ninja .btn-group-ninja .btn--trial,
        .ninja-mobile .btn-group-ninja .btn--trial{
            background: linear-gradient(102.11deg, #FFFFFF 0.98%, #249FAC 225.08%);
            color: #010205;
            border: 1px solid #F3F3F3;
            height: auto !important;
        }

        .ninja .btn-group-ninja .btn--trial span,
        .ninja-mobile .btn-group-ninja .btn--trial span{
            margin-right: 0;
        }
        
        .ninja .btn-group-ninja .btn--fitur-lihat,
        .ninja-mobile .btn-group-ninja .btn--fitur-lihat{
            background: #ffffff;
            border: 1px solid #ffffff;            
            color: #010205;
            margin-left: 10px;
            height: auto !important;
        }

        .ninja .btn-group-ninja .btn--fitur-lihat span,
        .ninja .btn-group-ninja .btn--trial span,
        .ninja-mobile .btn-group-ninja .btn--fitur-lihat span,
        .ninja-mobile .btn-group-ninja .btn--trial span{
            font-size: 18px;
            font-weight: 700;
            line-height: 25.2px;
            letter-spacing: -0.02em;
            text-align: left;
        }

        .ninja .btn-group-ninja .btn--fitur-lihat i,
        .ninja-mobile .btn-group-ninja .btn--fitur-lihat i{
            color: #65BD46 !important;
            font-size: 18px !important;            
        }

        .pl-text-fitur {
            padding-left: 10rem !important;
        }

        .txt-reason {
            line-height: 24px;
        }

        .numberCircle {

            border-radius: 50%;

            width: 36px;

            height: 36px;

            padding: 8px;

            background: #fff;

            color: #133A72;

            text-align: center;

            font-size: 20px;

            display: inline-block;

        }

        .integrasi .header h3 {
            line-height: 110%;
        }


        .box-putih {

            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 15px 20px;
            gap: 20px;

            width: 375px;
            height: 352px;

            background: #FFFFFF;
            border-radius: 10px;
            margin-left: 10px;
        }



        .hslide-area .slid-content img {

            height: 460px;

            object-fit: cover;

        }

        #map,
        #map-m {

            height: 460px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;

        }

        #map-m {

            /* height: 460px; */
            border-top-left-radius: 0px !important;
            border-top-right-radius: 0px !important;

        }


        .hslide-area .slick-dots li.slick-active button:before {

            opacity: 1;

            color: white;

        }

        #img-reason {
            margin-left: 0%;
            vertical-align: middle;
            width: 100%;
            height: 435px;
        }



        .hslide-area .slick-dots li button:before {

            font-size: 9px;

            top: -35px;

            color: white;

        }

        .hslide-area .slid-content {

            position: relative;

        }



        .section-custom-sliders {

            min-height: 716px !important;

        }

        .mb-3rem {

            margin-bottom: 3rem !important;

        }



        @media screen and (min-width: 1300px) and (max-width: 1400px) {
            .ml-7rem {
                margin-left: 7rem !important;
            }

        }

        @media(min-width:1000px) {
            .col-sm-offset-1 {
                margin-left: 0;
            }

            .col-md-offset-1 {
                margin-left: 8.33333333% !important;
            }
        }

        /* Zoom 150% */

        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            .section-custom-sliders {

                min-height: 463px !important;

                padding-top: 0 !important;

            }



            .card--custom {

                margin-left: 0 !important;
                width: auto !important;


            }



            .ml-9rem {

                margin-left: 4rem !important;

            }



            .text-active,
            .text-non-active {

                font-size: 14px !important;

            }



            .numberCircle {

                width: 28px;

                height: 28px;

                padding-top: 6px !important;

                padding-left: 10px !important;

            }



            .text-non-active .numberCircle {

                font-size: 15px;

            }



            #list-reason>.p-3 {

                padding: 7px 1rem !important;

            }



            #list-reason {

                margin-top: 0 !important;

            }





            #img-reason {

                height: 455px;

            }



            .bg--safety-trial {

                padding-top: 5px !important;

                padding-bottom: 1px !important;

            }



            .card--custom .card-body {

                padding-left: 6rem !important;

            }

            .mt-center-header {
                margin-top: 19% !important;
            }

            .btn--uji {
                padding: 0 8px;
            }

            .bg--point-circle-compt.active.shadow--point {

                top: 11px !important;
                right: 8px !important;

            }

            .text-non-active i {
                font-size: 14px !important;
            }

            .title--rekrut {
                font-size: 40px !important;
            }

            .ninja--img {
                margin-top: -22% !important;
            }

            .btn--uji {
                padding: 0 8px;
            }

            .pl-text-fitur {
                padding-left: 4rem !important;
            }

            .col-125percen-12 {
                width: 100% !important;
                margin-left: 0 !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .txt-reason {
                line-height: 20px;
            }


        }


        #list-reason .list--reason {
            margin-bottom: 3%;
        }



        /* Zoom 125% */

        @media screen and (min-width: 1200px) and (max-width: 1320px) {
            .realize-zero .header h3{
                font-size: 46px;
            }

            .realize-zero .header .card-black{
                width: 60%;
            }
        }
        @media screen and (min-width: 1024px) and (max-width: 1230px) {
            .integrasi .header-feature.content-feature h4,
            .integrasi .header-feature.content-feature p{
                width: 70vw;
            }
            .ninja .title--rekrut{
                font-size: 46px !important;
            }
        }
        @media screen and (min-width: 1024px) and (max-width: 1140px) {
            .ninja .title--rekrut{
                font-size: 41px !important;
            }
        }
        @media screen and (min-width: 1000px) and (max-width: 1024px) {
            .integrasi .header-feature.content-feature h4,
            .integrasi .header-feature.content-feature p{
                width: 75vw;
            }
            .ninja .title--rekrut{
                font-size: 40px !important;
            }
        }
        @media screen and (min-width: 1098px) and (max-width: 1300px) {

            .section-custom-sliders {

                min-height: 463px !important;

                padding-top: 0 !important;

                overflow: hidden !important;

            }


            .header-safety {
                height: 660px;
            }




            .text-active,
            .text-non-active {

                font-size: 19px !important;

            }


            .pl-text-fitur {
                padding-left: 5rem !important;
            }


            .ml-9rem {

                margin-left: 3rem !important;

            }



            .bg--safety-trial {

                padding-bottom: 1rem !important;

            }

            .txt-reason {
                line-height: 24px;
            }


        }

        @media screen and (min-width: 1098px) and (max-width: 1300px) {



            .mt-center-header {

                margin-top: 14% !important;

            }

            .header-safety h3 {
                font-size: 88px !important;
                line-height: 95px !important;
            }

            .header-safety span {
                font-size: 32px !important;
            }

            .header-safety p {
                font-size: 16px !important;
                text-align: justify;
            }

            .bg--point-circle-compt.active.shadow--point {

                top: 17px !important;
                right: 13px !important;

            }

            .text-non-active i {
                font-size: 14px !important;
            }

            .title--rekrut {
                font-size: 50px !important;
            }

            .ninja--img {
                margin-top: -22% !important;
            }

            .btn--uji {
                padding: 0 11px;
            }

            .slider-fitur .custom-prev-arrow{
                right: -19%;
            }
            .slider-fitur .fitur-list{
                left: 24%
            }
            .slider-fitur .custom-next-arrow{
                right: -51%;
            }

        }

        @media (min-width: 1100px) and (max-width:1198px) {
            .card--custom {
                width: 48.9rem !important;
                margin-left: 5rem !important;
            }

            .integrasi .box-biru p{
                font-size: 14px !important;
            }

            .integrasi .box-biru p span{
                font-size: 14px !important;
            }

            .slider-fitur .custom-prev-arrow{
                right: -21%;
            }
            .slider-fitur .fitur-list{
                left: 26%
            }            
            .slider-fitur .custom-next-arrow{
                right: -57%;
            }
        }

        


        @media (min-width: 1000px) and (max-width:1100px) {
            .integrasi .box-biru p,
            .integrasi .box-biru span{
                font-size: 15px !important
            }

            .slider-fitur .custom-prev-arrow{
                right: -21%;
            }
            .slider-fitur .fitur-list{
                left: 26%
            }            
            .slider-fitur .custom-next-arrow{
                right: -59%;
            }
        }
        @media (min-width: 1000px) and (max-width:1200px) {
            .realize-zero .header .card-black{
                width: 70%;
            }
        }
        @media (min-width: 1098px) and (max-width:1100px) {

            .header-safety img {
                max-width: 110% !important;
            }

            .ninja--img {
                margin-top: -19% !important;
            }

            /* .header-safety p{
                    margin-bottom: 1.5rem ;
                } */

            .card--custom {
                width: 48.5rem !important;
                margin-left: 5rem !important;
            }

            .bg--safety-trial {
                background-size: auto;
            }

          
            
        }



        @media(min-width: 900px) and (max-width:1098px) {
            .header-safety img {
                max-width: 110% !important;
            }

            .header-safety h3 {
                font-size: 64px !important;
                line-height: 80px !important;
            }

            .header-safety span {
                font-size: 32px !important;
            }

            .header-safety .txt-header-right,
            .header-safety .txt-header-right-hp {
                left: 60%;
            }

            .header-safety .btn--uji {
                width: 50%;
            }

            .header-safety img.left-slider-item {
                height: 490px;
            }
        }

        @media(min-width: 821px) and (max-width:899px) {
            .header-safety img {
                max-width: 125% !important;
            }
        }

        @media(min-width: 767px) and (max-width:820px) {
            .header-safety img {
                max-width: 135% !important;
            }
        }

        @media screen and (max-width:426px) {}

        @media screen and (max-width:376px) {

            .img-fluid {
                margin-top: -10px !important;
            }

            .img-cover {
                margin-bottom: 18px !important;
            }

            .img-cover1 {
                margin-bottom: 0px !important;
            }

            .img-cover2 {
                height: 450px !important;
            }

        }

        @media screen and (max-width: 390px) and (min-width: 377px) {

            .header-safety img {
                margin-top: -10px;
            }

            .img-cover {
                margin-top: 29px !important;
                margin-bottom: 21px !important;
            }

            .box-putih-res {
                width: 359px;
            }            

        }

        @media screen and (max-width:395px) and (min-width: 391px) {
            .box-putih-res {
                width: 365px !important;
            }

            .img-cover {
                margin-bottom: -67px !important;
                margin-top: -96px !important;
                z-index: 9 !important;
                position: relative !important;
            }
        }

        @media screen and (max-width:414px) and (min-width:396px) {

            .box-putih-res {
                width: 384px !important;
            }

            .img-cover {
                margin-bottom: -64px !important;
                margin-top: -92px !important;
                position: relative !important;
                z-index: 9 !important;
            }

        }

        @media screen and (max-width:428px) and (min-width: 415px) {


            .box-putih-res {
                width: 397px !important;
            }

            .img-cover {
                margin-bottom: -57px !important;
                margin-top: -87px !important;
                position: relative !important;
                z-index: 9 !important;
            }

        }

        @media (min-width:767px) and (max-width:992px) {
            .bg--reason-erp .box:nth-child(1) {
                order: 2;
            }

            .bg--reason-erp .box:nth-child(2) {
                order: 1;
            }
        }

        @media(min-width: 767px) and (max-width:1000px) {

            .row {
                flex-wrap: wrap;
                display: flex;
            }

            .header-safety img {
                margin-left: 0;
            }

            .header-safety {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .mt-center-header {
                margin-top: 10% !important;
            }

            .mb-m-10p {
                margin-bottom: 10%;
            }

            .mt-center-program,
            .mt-center-fatigue {

                margin-top: 15% !important;

            }

            .header-safety span {
                font-size: 13px !important;
            }


            .pl-text-fitur {
                padding-left: 25px !important;
            }

            .py-150px {
                padding-top: 0 !important;
                padding-bottom: 4rem !important;
            }

            .px-sm-3rem {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .col-sm-offset-1 {
                margin-left: 8.33333333%;
            }

            .pl-sm-5 {
                padding-left: 3rem !important;
            }

            .px-tablet-3rem {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .px-tablet-0 {
                padding-left: 0rem !important;
                padding-right: 0rem !important;
            }

            .mx-tablet-0 {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .card--custom {
                margin-left: 0 !important;
                width: auto !important;
            }

            .info-card .card-safety-l p {
                font-size: 24px !important;
                line-height: 32px !important;
            }

            .info-card .card-safety-l img {
                width: 35%;
            }

            .px-tablet-2rem {
                padding-left: 2rem !important;
                padding-left: 2rem !important;
            }

            .ml-tablet-1rem {
                margin-left: 1rem !important;
            }

            .tablet-none {
                display: none;
            }

            .fitur-heatlhy .header-fitur h4 {
                line-height: 42px;
            }

            .mt-tablet-3rem {
                margin-top: 3rem !important;
            }

            .pt-tablet-3rem {
                padding-top: 3rem !important;
            }

            .pt-tablet-0 {
                padding-top: 0 !important;
            }

            .header-safety h3 {
                font-size: 30px !important;
                line-height: 36px !important
            }

            .header-safety p {
                font-size: 13px !important;
                line-height: 24px !important;
                margin-bottom: 1.5rem !important;
            }

            .mt-center-header {
                margin-top: 20% !important;
            }

            .bg--safety-trial {
                background-size: auto;
            }

            .title--rekrut {
                font-size: 28px;
                line-height: 30px;
                margin-bottom: 8px;
            }

            .bg--safety-trial p {
                line-height: 20px;
                font-size: 16px;
                margin-bottom: 1rem;
            }

            .fitur-heatlhy .title {
                font-size: 18px;
            }

            .fitur-heatlhy .desc {
                font-size: 16px;
            }
        }

       


        @media (max-width:767px) {

            .partner span.hidden-xs{
                display: none !important;
            }
            .r-position-object {
                object-position: right 100%;
            }

            .card--custom {
                margin-left: 0 !important;
                margin-right: 0 !important;
                border-radius: 0 !important;
            }

            .h-box-safety {
                height: 480px !important;
            }

            .card--custom .hslide-area img {
                border-radius: 0 !important;
            }

            .info-card .card-safety-l img {
                position: absolute;
                bottom: 0;
                right: 0%;
                width: 100%;
            }

            .info-card .card-safety-l p {

                font-size: 18px;
                padding: 0;


            }

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



            .box:nth-child(1) {
                order: 2;
            }

            .box:nth-child(2) {
                order: 1;
            }



            /* Css Header */

            .header-safety {

                padding-left: 0;

            }



            .header-safety .header-text {

                padding-left: 5%;

                padding-right: 4%;

            }



            .header-safety h3 {

                font-weight: 700;

                font-size: 27.5px;

                line-height: 36px;

                letter-spacing: 0.06px;



            }



            .header-safety span {

                font-size: 15px;

                font-weight: 500;

            }



            .header-safety .col-md-7 {

                padding: 0;

                margin-top: 4%;

            }



            .header-safety img {

                margin-left: 0;


            }



            .header-safety p {

                font-weight: 400;

                font-size: 14px;

                margin-bottom: 1rem;

            }

           

            .integrasi .header span {
                font-size: 14px;
            }

            .integrasi .header h3 {
                font-size: 20px;
                margin-top: .5rem !important;
            }


            .img-icon {
                width: 70px;
                height: 70px;
                margin-top: 40px;
            }

            .icon-inside {
                width: 40px;
                height: 40px;
                margin: 8px;
            }

            .teks-why-omsetku {
                color: #213262;
                margin-top: 20px;
            }

            .integrasi{
                background: none !important;
                background-color: #F9F9F9 !important;
            }

            .box-putih-res {
                width: 350px;
                height: 160px;
                background-color: #FFFFFF;
                border-radius: 5px;
                margin-bottom: 15px;
            }

            .box-biru-res {  
                background: #020609;
                border-radius: 25px;
                margin-bottom: 15px;
                width: 100%;
                padding: 25px;
                margin: 15px 0;
            }

            .integrasi p.content-feature{
                color: #000000;
            }

            .integrasi .box-biru-res p{
                font-family: 'Inter',sans-serif;
                font-size: 20px;
                font-weight: 700;
                line-height: 24px;
                text-align: left;
                color: #FFFFFF !important;
            }                             

            .integrasi.feature-apps .two-col span{
                background: none !important;
                padding: 0;
                display: inline;
            }

            .faq .accordion{
                width: 100%;
            }

            .faq .fitur-content{
                position: relative;
                width: 100%;
                left: unset;
                top: unset;
                transform:none;
                height: auto;
            }

            .faq .fitur-title{
                width: 100%;                
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.02em;
                text-align: left;
            }

            .faq .fitur-desc{                
                font-size: 14px !important;
                font-weight: 400;
                line-height: 24.46px;
                text-align: left;
            }

           

            .ml-9rem {

                margin-left: 0 !important;

            }

            .ml-sm-0 {
                margin-left: 0 !important;
            }



            .pl-1-3rem {

                padding-left: 1.3rem !important;

            }



            .pr-sm-2rem {

                padding-right: 2rem !important;

            }



            .mt-center-program,
            .mt-center-fatigue {

                margin-top: 3%;

            }



            .pr-sm-0 {

                padding-right: 0 !important;

            }



            .pr-sm-7 {

                padding-right: 7px !important;

            }



            .pl-sm-0 {

                padding-left: 0 !important;

            }



            .pl-sm-10 {

                padding-left: 10px !important;

            }



            .pl-sm-20 {

                padding-left: 20px !important;

            }

            .px-sm-custom-center {

                padding-left: 2rem !important;
                padding-right: 1.5rem !important;

            }

            .pr-sm-15px {

                padding-right: 15px !important;

            }



            .mx-sm-0 {

                margin-left: 0 !important;

                margin-right: 0 !important;

            }



            .pt-sm-0 {

                padding-top: 0 !important;

            }

            .pt-sm-5 {

                padding-top: 3rem !important;

            }

            .px-sm-0 {

                padding-left: 0 !important;
                padding-right: 0 !important;

            }



            .mt-sm-0 {

                margin-top: 0 !important;

            }

            .mb-sm-0 {

                margin-bottom: 0 !important;

            }

            .mt-sm-5 {
                margin-top: 3rem !important;
            }

            .bg-sm-abu {
                background: #eeeeee !important;
            }

            .bg-putih {
                background-color: #fff !important;
            }





            .integrasi .two-col span {

                font-size: 15px;

            }



            .integrasi .two-col h4 {
                                                
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.02em;
                text-align: center;
                width: 90%;

            }



            .integrasi .two-col p {

                font-family: 'Open Sans', sans-serif !important;

                font-size: 14px;

                line-height: 25px;

                font-weight: 500;

            }

            /* Akhir Css Content */



            /* CSS Carousel Hover */

            #img-reason {

                margin-left: -1%;

                height: 250px;

                width: 100%
            }

            .partner {
                padding-left: 0%;
            }



            .reason--title {

                font-size: 23px;

                line-height: 35px;

            }



            .bg--reason p,
            .bg--reason-healthy p,
            .bg--reason-erp p {

                font-size: 13.5px;

            }



            .bg--reason-erp .heading-menuname p {

                font-size: 15px;

            }



            .numberCircle {

                height: 34px;

            }



            .bg--reason-erp .text-active p {

                font-weight: 400 !important;

            }



            .bg--reason-erp .text-non-active p {

                font-weight: 300;

            }

            /* Akhir CSS Carousel Hover */



            /* CSS Fitur */

            .header-fitur {

                padding-right: 1rem;

                padding-left: 1rem;

            }



            .info-card .header-fitur-safety p,
            .fitur-heatlhy p {

                font-size: 14.5px;

            }



            .portfolio .header h4,
            .liputan .header h4,
            .fitur-heatlhy .header-fitur h4,
            .info-card .header-fitur-safety h4 {

                font-size: 25px;

            }



            .fitur-heatlhy img {

                width: 100%;

                margin-top: 0.8rem;

                /* margin-left: 0.8rem; */

            }



            .fitur-heatlhy .title {

                font-size: 17px;

            }



            .fitur-heatlhy .desc {

                font-size: 14.5px;

                letter-spacing: 0.08px;

                font-weight: 500;

            }



            .fitur-heatlhy .container-custom .col-sm-12 {

                margin-bottom: 1rem;

            }



            #infocard_slider .slick-active {

                opacity: 1 !important;

            }



            #infocard_slider .slick-slide {

                opacity: 0.6;

            }

            /* Akhir CSS Fitur */



            /* Slider */

            .hslide-area .slid-content {

                position: relative;

            }





            .hslide-area .slick-dots li.slick-active button:before {



                opacity: 1;



                color: rgb(255, 0, 0);



            }







            .hslide-area .slick-dots li button:before {



                font-size: 9px;



                top: -35px;



                color: rgb(251, 0, 0);



            }



            .bg--safety-trial {

                background: url('../public/img/assets/bg-ninja-goodeva-mobile.png') no-repeat;
                background-repeat: no-repeat;
                background-size: cover;   
                padding-top: 0 !important;     
                padding-bottom: 0 !important;    
                position: relative; 

            }

            /* Card Custom CSS */
            svg {
                position: absolute;
                bottom: 20%;
                width: 100%;
                height: 13vw;
                fill: #133a72;
                right: 0;
            }

            .card--custom .card-body span {
                font-size: 17px;
                font-weight: 400;
            }

            .card--custom .card-body p {
                font-size: 15.5px;
                opacity: 0.8;
                color: #F9FAFB;
            }

            .header-safety span {
                font-size: 16px;
            }

            .header-safety h3 {
                font-size: 30px;
            }

            .why-reason .img-section{
                height: auto !important;
            }

            .why-reason .py-fitur{
                padding-top: 0;
            }
            .why-reason .fitur-content{
                margin-top: 1rem;
                height: auto !important;                
                
            }

            .why-reason .fitur-title{
                font-size: 24px;
                font-weight: 700;
                line-height: 28.8px;
                text-align: left;
                letter-spacing: 0;
            }
            .why-reason .fitur-desc{                
                font-size: 14px !important;
                font-weight: 400;
                line-height: 24.46px;
                text-align: left;
                letter-spacing: 0;
                margin-bottom: 15px;
            }

            .why-reason .fitur-list li{                
                font-size: 14px;
                font-weight: 400;
                line-height: 21px;
                text-align: left;
            }

            .why-reason img.icon-check{
                height: 2vh;
            }
            .header-safety .sub-header span{                
                font-size: 16px;
                font-weight: 500;
                line-height: 19.36px;
                letter-spacing: -0.05em;
                text-align: center;
            }

            .header-safety p {
                font-size: 16px;
            }

            .partner span {
                font-size: 16px !important;
            }

            .integrasi .header span {
                font-size: 15px;
            }

            .integrasi .header h3 {
                font-size: 22px;
            }

            .integrasi .header p {
                font-size: 15px;
            }

            .integrasi .two-col p,
            .integrasi.feature-apps .two-col span {
                font-size: 18px !important;
            }
            
            .integrasi .two-col p{
                width: 80%;
            }

            .integrasi.feature-apps .two-col span{
                font-weight: 700 !important;
            }

            .info-card .card-safety-l p {
                font-size: 20px;
                line-height: 1.9rem;
            }

            .title--rekrut {
                font-size: 24px !important;
                line-height: 2rem;
            }

            .bg--rekrut p,
            .bg--rekrut-mobile p,
            .bg--safety-trial p {
                font-size: 17px;
            }

            .mb-m-10p {
                margin-bottom: 10%;
            }

            .mt-m-10p {
                margin-top: 10% !important;
            }

            .bg--point-circle-compt.active.shadow--point {
                top: 4px !important;
                right: 37px !important;

            }

            .ninja-mobile .btn-group-ninja{
                display: flex;
                flex-direction: row;
            }

            .ninja--img {
                position: relative !important;
                margin-top: 3rem !important;
                vertical-align: middle !important;
            }

            .text-non-active {
                font-size: 18px;
            }

            .text-active {
                font-size: 18px !important;
            }

            .hslide-area .slid-content img {
                height: 586px;
            }

            .col-xs-12 {
                width: 100%;
            }

            .liputan{
                background: none !important;
                background-color: #F1F5F9 !important;
            }

            .liputan .header h4.mobile-show{
                font-size: 24px !important;                                
                font-weight: 600;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: center;
                width: 85%;
                margin: 0 auto;
            }

            .header-safety .safety-produk{
                height: auto;
            }

            .header-safety img.left-slider-item{
                width: 100%;
                height: auto;
                margin: 20px auto;
                position: relative;
            }

            .header-safety .txt-header-right, .header-safety .txt-header-right-hp{
                position: relative;
                width: 100%;
                margin-top: 40px;
                margin-bottom: 40px;
                text-align: center;
                left: unset;
                height: auto;
            }

            .header-safety h3{
                text-align: center;
            }

            .header-safety .btn--uji{
                width: 50%;                
                padding: 1px 32px;
                margin:0 auto;
            }

            .partner{
                background: none !important;
                background-color: #F1F5F9 !important;
            }

            .partner h3{
                font-size: 32px;
                margin-bottom: 40px;
            }
            .partner span {

                margin-bottom: 2rem !important;

                margin-top: 2rem !important;

            }

            .partner .stream-icon{
                top: -6%; 
            }

            .realize-zero{
                padding: 0 !important;
            }

            .fitur .img-section{
                height: auto !important;
                background: none !important;
                width: 90% !important;
            }
            .fitur .img-section.right-img{
                float: right;
            }
            .fitur .img-section.left-img{
                float: left;
            }

            .fitur .fitur-title {
                font-weight: 700;
                font-size: 24px;
                line-height: 31px;
                letter-spacing: -0.03rem;
                display: block;
            }

            .fitur .fitur-desc {                                
                font-size: 14px;
                font-weight: 400;
                line-height: 24.46px;
                letter-spacing: -0.03em;
                text-align: left;

            }

        }

        .ml-10pxmin {
            margin-left: -10px;
        }

        @media (min-width:767px) {
            .list--reason .py-1-5r {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .list--reason .col-md-10 {
                padding-top: .5rem !important;
            }

            .list--reason .col-md-1 {
                padding-top: .5rem !important;
            }

            .card--custom .card-body span {
                font-size: 15px;
                margin-top: -2px;
                display: block;
            }

            .card--custom .card-body p {
                font-size: 13px;
            }

            .img-fatigue {
                width: 90%;
                margin-left: 1.5rem !important;
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important;
            }
        }

        @media(max-width:767px) {
            .hslide-area .slid-content img {
                height: 945px
            }
        }

        @media(max-width:632px) {
            .hslide-area .slid-content img {
                height: 845px
            }
        }

        @media (max-width:532px) {
            .hslide-area .slid-content img {
                height: 745px
            }
        }

        @media (max-width:432px) {
            .hslide-area .slid-content img {
                height: 620px
            }
        }

        @media (max-width:412px) {

            .bg--point-circle-compt.active.shadow--point {
                top: 3px !important;
                right: 39px !important;

            }
        }

        @media (max-width:400px) {

            .bg--point-circle-compt.active.shadow--point {
                top: 4px !important;
                right: 38px !important;

            }
        }

        @media (max-width:395px) {

            .bg--point-circle-compt.active.shadow--point {
                top: 3px !important;
                right: 37.5px !important;

            }
        }

        @media (max-width:393px) {
            .info-card .header-fitur-safety p {
                /* line-height: 1.9rem; */
                margin-bottom: 1rem !important;
            }

            .card--custom {
                width: 100% !important;
                border-radius: 0px !important;
                /* margin-left: 6rem !important; */
                background: #133A72 !important;
            }

            .content-region {
                width: 100% !important;
            }

            .section-relative {
                top: 45px !important;
                z-index: 1;
            }

            .bg--point-circle-compt.active.shadow--point {
                top: 3px !important;
                right: 34px !important;

            }

            .header-safety .col-md-7 {
                margin-top: 10% !important;
            }

            .img-cover {
                /* max-height: 500px; */
                height: 250px !important;
                /* object-fit: contain; */
            }
        }

        /* Hp Moto G4 Dan Galaxy S5 */
        @media (max-width:361px) {
            .card--custom .card-body p {
                font-size: 14px;
            }

            .integrasi .header span {
                font-size: 13px;
            }

            .integrasi .header h3 {
                font-size: 19px;
            }

            .integrasi .header p {
                font-size: 13px;
            }

            .bg--reason-erp .list--reason {
                font-size: 19px;
                line-height: 1.5rem !important;
            }

            .col-xs-offset-1 {
                margin-left: 6.333333%;
            }

            .info-card .card-safety-l p {
                line-height: 1.8rem;
            }

            .h-box-safety {
                height: 410px;
            }

            .fitur-heatlhy .header-fitur h4 {
                font-size: 22px;
                line-height: 1.8rem;
            }

            .fitur-heatlhy p {
                font-size: 14px;
            }

            .fitur-heatlhy .desc {
                font-size: 14px;
            }

            .title--rekrut {
                font-size: 22px !important;
                line-height: 2rem;
            }

            .bg--rekrut p,
            .bg--rekrut-mobile p,
            .bg--safety-trial p {
                font-size: 15px;
                line-height: 20px;
            }

            .bg--point-circle-compt.active.shadow--point {
                top: 2.5px !important;
                right: 31px !important;

            }

            .hslide-area .slid-content img {
                height: 540px;
            }

        }

        @media (max-width:321px) {

            .header-safety .sub-header span {
                padding: 5px 10px;
            }

            .btn--uji {
                padding: 0 8px;
            }
            
            .header-safety h3 {
                font-size: 25px;
            }

            .header-safety .sub-header span{                
                font-size: 16px;
                font-weight: 500;
                line-height: 19.36px;
                letter-spacing: -0.05em;
                text-align: center;
            }

            .header-safety span {
                font-size: 14px;
            }

            .partner span {
                font-size: 14px;
            }

            .integrasi .header p {
                font-size: 14px;
            }

            .integrasi .header h3 {
                font-size: 17px;
            }

            .integrasi .header span {
                font-size: 13px;
            }

            .integrasi .two-col span {
                font-size: 14px;
            }

            .integrasi .two-col h4 {
                font-size: 24px;
            }


            .bg--reason-erp .list--reason {
                font-size: 19px;
            }

            .reason--title {
                font-size: 21px;
            }

            .bg--reason-erp .heading-menuname p {
                font-size: 14px;
            }

            .col-xs-offset-1 {
                margin-left: 3.333333%;
            }

            .fitur-healthy {
                margin-top: 3rem !important;
            }

            .info-card .card-safety-l p {
                font-size: 16px;
                padding: 0;
                line-height: 1.8rem;
            }

            .h-box-safety {
                height: 373px;
            }

            .fitur-heatlhy .header-fitur h4 {
                font-size: 22px;
                line-height: 1.8rem;
            }

            .fitur-heatlhy p {
                font-size: 13px;
            }

            .fitur-heatlhy p>br {
                display: none;
            }

            .fitur-heatlhy .title {
                font-size: 15.5px;
            }

            .fitur-heatlhy .desc {
                font-size: 13px;
            }

            .title--rekrut {
                font-size: 20px !important;
                line-height: 2rem;
            }

            .bg--rekrut p,
            .bg--rekrut-mobile p,
            .bg--safety-trial p {
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 2rem;
            }

            .bg--point-circle-compt.active.shadow--point {
                top: 3px !important;
                right: 24px !important;

            }

            .hslide-area .slid-content img {
                height: 448px;
            }

        }



        .bg--point-circle-compt.active {
            color: #FFA919;
            opacity: 1;
        }

        .bg--point-circle-compt {
            color: #ffffff;
            opacity: 0.59;
        }

        .bg--point-circle-compt.active.shadow--point {

            top: 14px;
            right: 15px;
            opacity: .27;

        }

        .bg--point-circle-compt.shadow--point {
            transform: scale(1.9);
            z-index: 0;
            position: absolute;
            top: 14px;
            right: 15px;

            width: auto;
            height: auto;
            opacity: 0;
        }

        .text-non-active i {
            font-size: 18px;
        }

        .ninja--img {
            position: absolute;
            /* margin-top: -22%; */
            margin-top: -61px;
            width: 100%;
        }



        .py-150px {
            padding-top: 150px;
            padding-bottom: 150px;
        }

        .h-box-safety {
            height: auto;
        }

        .img-cover {
            max-height: 500px;
            height: 450px;
            object-fit: contain;
        }


        .predict-fatigue {
            background: url("../public/img/assets/omsetku/background-customer.webp");
        }

        .section-relative {
            position: relative;
            top: 55px;
        }

        .dashboard-smart-safety {
            background: #213262;
            color: #ffffff;
        }

        .dashboard-smart-safety .header p {
            color: #ffffff;
            font-size: 18px;
        }

        .dashboard-smart-safety .section-relative {
            top: 32px;
        }



        .img-w75 {
            width: 75%;
        }



        .pl-9 {
            padding-left: 9rem;
        }



        .flex-content {
            display: flex;
            align-items: center;
        }

        .flex-justify-content-space-evenly {
            display: flex;
            justify-content: space-evenly;
        }

        .content-region {
            width: 35%;
            padding: 7px 0px;
        }

        .map_infowindow a {
            color: #000;
        }

        .heading-menuname p {
            width: fit-content;
            background: linear-gradient(360deg, rgba(255, 202, 110, 0) -477.5%, #FFA200 100%);
            border-radius: 10px;
            padding: 10px;
        }
    </style>

@endsection



@section('js_after')

    <!-- Compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $('.btn--transparent').addClass('text-non-active');



            var x = -1;

            var images = ['reason-1', 'reason-2', 'reason-3', 'reason-4', 'reason-5'];

            function changeImage() {

                var $el = $('#img-reason');



                x++;



                $('.btn--transparent').removeClass('text-active');

                $('.btn--transparent').addClass('text-non-active');

                $el.addClass('img-out-compt');

                $('.' + images[x]).addClass('text-active');


                $('.bg--point-circle-compt').removeClass('active');

                $('.bg--point-circle-reason').removeClass('active');

                i = $('.' + images[x]).find('i');

                i.addClass('active');

                img = $('.' + images[x]).data("img");

                // console.log(x);

                setTimeout(function() {

                    $el.removeClass('img-out-compt');

                    $el.addClass('img-out-compt');

                    $el.attr('src', img);

                    $el.removeClass('img-out-compt');

                    $el.addClass('img-in-compt');



                }, 400);



                n = parseInt(images.length - 1);

                x = x % n;

            }



            if ((screen.width <= 768)) {

                changeImage();

                setInterval(changeImage, 4000); // Interval

            }

        })

        $(document).on('click','.btn-header-faq', function() {
            const icon = $(this).find('.toggle-icon');
            
            // Toggle icon classes
            if(icon.hasClass('fa-plus')) {
                icon.removeClass('fa-plus').addClass('fa-minus');
            } else {
                icon.removeClass('fa-minus').addClass('fa-plus');
            }
        });        

        $("#list-reason").on('mouseover', '.btn--transparent', function(e) {

            $el = $('#img-reason');

            if ($(this).hasClass('text-active')) {

            } else {

                $('.btn--transparent').removeClass('text-active');

                $el.addClass('img-out-compt');

                $(this).addClass('text-active');

                $('.btn--transparent').addClass('text-non-active');



                $('.bg--point-circle-compt').removeClass('active');

                $('.bg--point-circle-reason').removeClass('active');

                i = $(this).find('i');

                i.addClass('active');

                img = $(this).data("img");

                setTimeout(function() {

                    $el.removeClass('img-out-compt');

                    $el.addClass('img-out-compt');

                    $el.attr('src', img);

                    $el.removeClass('img-out-compt');

                    $el.addClass('img-in-compt');



                }, 400);

            }
        });
    </script>



    <script src="{{ asset('public/js/slick.min.js') }}" charset="utf-8"></script>



    <script type="text/javascript">
        
        const slider_contents = @json($text_lang[$default_lang]['section17']['fiturs']);

        $('.slider-content').slick({

            infinite: true,

            //  speed: 400,

            slidesToShow: 1,

            variableWidth: false,
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
            $('#slider-fitur-title').text(slider_contents['fitur' + (index + 1)]['title']);
            $('#slider-fitur-desc').text(slider_contents['fitur' + (index + 1)]['desc']);            
            // $('#slider-fitur-title-mobile').text(testimonies['state' + (index + 1)]['statement']);
            // $('#slider-fitur-desc-mobile').text(testimonies['state' + (index + 1)]['name']);
            $('#slide-item-active').text(String(index + 1).padStart(2, '0'));
        }

        // Perbarui konten saat slider berubah
        $('.slider-content').on('afterChange', function(event, slick, currentSlide) {
            updateTestimonyContent(currentSlide);
        });

        // Inisialisasi konten dengan slide pertama
        updateTestimonyContent(0);

        $('.hslide-area').slick({

            dots: false,

            infinite: true,

            adaptiveHeight: true,

            //   slidesToShow: 3,

            //   slidesToScroll: 1,

            autoplay: true,

            autoplaySpeed: 3000,

            arrows: false,

            pauseOnHover: false,

            pauseOnFocus: false,

            responsive: [

                {

                    breakpoint: 480,

                    settings: {

                        arrows: false,

                    }

                }

            ]

        });
    </script>

@endsection



@section('content')

    {{-- Header --}}
    <section class="header-safety bg-blue-header" id="header-safety">

        <div class="wrap"></div>

        <div class="row mx-0 sub-header safety-produk">
            <div class="desktop-show">
                <img class="left-slider-item" src="{{ asset('public/img/assets/omsetku/banner-item-sales-trace.png') }}"
                    alt="">
    
                <div class="txt-header-right" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <span class="font-inter">{{ $text_lang[$default_lang]['section1']['name_product'] }}</span>
                    <h3 class="font-inter"><?php echo $text_lang[$default_lang]['section1']['title']; ?></h3>
                    <a href="{{ url('contact') }}" class="btn btn--uji transition-content">
                        {{ $text_lang[$default_lang]['section1']['text1'] }}
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="mobile-show" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <img class="left-slider-item" src="{{ asset('public/img/assets/omsetku/banner-item-sales-trace-m.svg') }}"
                    alt="">
    
                <div class="txt-header-right" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">                    
                    <span class="font-inter">{{ $text_lang[$default_lang]['section1']['name_product'] }}</span>
                    <h3 class="font-inter"><?php echo $text_lang[$default_lang]['section1']['title']; ?></h3>
                    <a href="{{ url('contact') }}" class="btn btn--uji transition-content">
                        {{ $text_lang[$default_lang]['section1']['text1'] }}
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>



        {{-- Section Partner --}}

        {{-- Akhir Section Partner --}}

    </section>

    <section class="partner pb-4rem" id="partner">
        <img src="{{ asset('public/img/assets/stream-icon.svg') }}" alt="" class="stream-icon hidden-xs">
        <div class="text-center partner-content">

            <h3 class="font-inter">{{ $text_lang[$default_lang]['section2']['title'] }}</h3>
            <span class="font-inter hidden-xs">{{ $text_lang[$default_lang]['section2']['subtitle'] }}</span>

            <img class="hidden-xs" src="{{ asset('public/img/assets/omsetku/sales-trace-client.svg') }}" alt="">

            <img class="hidden-md hidden-lg hidden-sm"
                src="{{ asset('public/img/assets/omsetku/sales-trace-client-m.svg') }}" alt="">

            <div id="feature-section"></div>

        </div>

    </section>

    {{-- Akhir Header --}}





    {{-- Section realize zero --}}
    <section class="realize-zero wrap" id="realize-zero">

        <!-- content desktop -->
        <div class="px-5 d-block mb-sm-0 desktop-show">

            <div class="header">

                <div class="row mx-0">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3 class="font-inter"><?php echo $text_lang[$default_lang]['section3']['title']; ?></h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-black">
                            <p class="font-inter">
                                <?php echo $text_lang[$default_lang]['section3']['text1']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="realize-content">
                <div class="row mx-0">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="realize-frame-image">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section3']['image1']) }}"
                                alt="manage-marketing-1">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="realize-frame-image">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section3']['image2']) }}"
                                alt="manage-marketing-2">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="realize-frame-image">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section3']['image3']) }}"
                                alt="manage-marketing-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- content mobile -->
        {{-- <div class="container mx-auto d-block mb-sm-0 mobile-show">

            <div class="header text-start py-5">

                <span class="text-white">{{ $text_lang[$default_lang]['section3']['name_product'] }}</span>

                <h3 class="text-white pt-2 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section3']['title']; ?></h3>

                <p class="text-white px-sm-0" style="font-size: 16px;"><?php echo $text_lang[$default_lang]['section3']['text-res']; ?></p>

            </div>

            <img class="mx-auto d-block img-cover1"
                src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section3']['image']) }}"
                alt="">

        </div> --}}
    </section>
    {{-- end Section realize zero --}}


    {{-- Section feature apps smart safety --}}
    <section class="wrap fitur" id="feature-apps">

        <!-- feature apps smart safety desktop -->
        <div class="d-block mb-sm-0 desktop-show">

            <div class="row mx-0">

                <div class="col-md-6 px-5 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}</h4>
                        <p class="fitur-desc">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}
                        </p>
                    </div>
                </div>

                <div class="col-md-6 pl-5 pr-0 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content1']['cover']) }}"
                        class="img-section" alt="">
                </div>

            </div>

            <div class="row mx-0 fitur-odd">
                <div class="col-md-6 pr-5 pl-0 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content2']['cover']) }}"
                        class="img-section " alt="">
                </div>
                <div class="col-md-6 px-5 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>
                        <p class="fitur-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mx-0">

                <div class="col-md-6 px-5 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}</h4>
                        <p class="fitur-desc">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}
                        </p>
                    </div>
                </div>

                <div class="col-md-6 pl-5 pr-0 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content3']['cover']) }}"
                        class="img-section " alt="">
                </div>

            </div>



            <div class="row mx-0 fitur-odd">
                <div class="col-md-6 pr-5 pl-0 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content4']['cover']) }}"
                        class="img-section " alt="">
                </div>
                <div class="col-md-6 px-5 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content4']['main_text'] }}</h4>
                        <p class="fitur-desc">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content4']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mx-0">

                <div class="col-md-6 px-5 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content5']['main_text'] }}</h4>
                        <p class="fitur-desc">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content5']['sub_text'] }}
                        </p>
                    </div>
                </div>

                <div class="col-md-6 pl-5 pr-0 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content5']['cover']) }}"
                        class="img-section " alt="">
                </div>

            </div>

        </div>

        <!-- feature apps smart safety mobile -->
        <div class="mx-auto d-block mb-sm-0 mobile-show mt-2">

            <div class="row mx-0 two-col feature1 content-feature pb-5 py-5" data-aos="fade-up" data-aos-duration="1800"
                data-aos-delay="500" data-aos-once="true">                
                <div class="col-md-12 col-sm-12 col-xs-12 px-0">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content1']['cover_m']) }}"
                        alt="" class="img-section right-img">
                </div>

                <div class="col-xs-12 col-sm-12 mt-3">                    
                    <h4 class="fitur-title">{{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}</h4>
                    <p class="fitur-desc">{{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}</p>
                </div>

            </div>

            <div class="row mx-0 two-col feature2 content-feature pb-5 fitur-odd py-5" data-aos="fade-up" data-aos-duration="1800"
                data-aos-delay="300" data-aos-once="true">

                <div class="col-xs-12 col-sm-12 text-center px-0">

                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content2']['cover_m']) }}"
                        alt="" class="img-section left-img">
                </div>

                <div class="col-xs-12 col-sm-12 mt-3">                    
                    <h4 class="fitur-title">{{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>
                    <p class="fitur-desc">{{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}</p>

                </div>

            </div>

            <div class="row mx-0 two-col feature3 content-feature py-5" data-aos="fade-up" data-aos-duration="1800"
                data-aos-delay="500" data-aos-once="true">

                <div class="col-xs-12 col-sm-12 px-0">

                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content3']['cover']) }}"
                        alt="" class="img-section right-img">

                </div>

                <div class="col-xs-12 col-sm-12 mt-3">                    

                    <h4 class="fitur-title">{{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}</h4>

                    <p class="fitur-desc">{{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}</p>
                </div>

            </div>

            <div class="row mx-0 two-col feature3 content-feature fitur-odd py-5" data-aos="fade-up" data-aos-duration="1800"
                data-aos-delay="500" data-aos-once="true">

                <div class="col-xs-12 col-sm-12 px-0">

                    <img
                        src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content4']['cover']) }}"
                        alt="" class="img-section left-img">

                </div>

                <div class="col-xs-12 col-sm-12 mt-3">                    
                    <h4 class="fitur-title">{{ $text_lang[$default_lang]['section7']['feature_product']['content4']['main_text'] }}</h4>
                    <p class="fitur-desc">{{ $text_lang[$default_lang]['section7']['feature_product']['content4']['sub_text'] }}</p>
                </div>

            </div>
            <div class="row mx-0 two-col feature3 content-feature py-5" data-aos="fade-up" data-aos-duration="1800"
                data-aos-delay="500" data-aos-once="true">

                <div class="col-xs-12 col-sm-12 px-0">

                    <img
                        src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section7']['feature_product']['content5']['cover']) }}"
                        alt="" class="img-section right-img">

                </div>

                <div class="col-xs-12 col-sm-12 mt-3">                    
                    <h4 class="fitur-title">{{ $text_lang[$default_lang]['section7']['feature_product']['content5']['main_text'] }}</h4>
                    <p class="fitur-desc">{{ $text_lang[$default_lang]['section7']['feature_product']['content5']['sub_text'] }}</p>
                </div>

            </div>

        </div>

    </section>
    {{-- end Section feature apps smart safety --}}





    {{-- section slider fitur --}}
    <section class="section-comments slider-fitur bg--reason wrap">

        <!-- 3 reason desktop -->
        <div class="desktop-show">

            <div class="row mx-0">                
                <div class="col-md-6 px-0">
                    <div class="slider-content">
                        @for ($fitur_slide_i = 1; $fitur_slide_i <= count($text_lang[$default_lang]['section17']['fiturs']); $fitur_slide_i++)                        
                        <div class="slider-image-area">
                            <img src="{{ asset('public/img/assets/omsetku/'.$text_lang[$default_lang]['section17']['fiturs']['fitur' . $fitur_slide_i]['picture']) }}" class="img-section" alt="">
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="fitur-content">
                        <h4 class="fitur-title font-inter" id="slider-fitur-title">
                            
                        </h4>
                        <p class="fitur-desc font-inter" id="slider-fitur-desc">
                            
                        </p>
                        <div class="fitur-list">
                            <span  class="slide-item-active" id="slide-item-active">{{ sprintf("%02d", 1) }}</span>
                            <span>/</span>
                            <span  class="slide-item-count" id="slide-item-count">{{ sprintf("%02d", count($text_lang[$default_lang]['section17']['fiturs'])) }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>

        <!-- 3 reason mobile -->
        <div class="container mobile-show">

            <div class="header text-center mb-5">

                <h3 class="my-3 font-w600"><?php echo $text_lang[$default_lang]['section8']['main_text']; ?></h3>

                <p class="px-sm-0"><?php echo $text_lang[$default_lang]['section8']['sub_text']; ?></p>

            </div>

            <div class="box-putih-res">
                <div class="row">
                    <div class="col-lg-2 col-xl-2">
                        <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section8']['why_product']['content1']['icon']) }}"
                            alt="" class="icon-inside">
                    </div>
                    <div class="col-lg-10 col-xl-10">
                        <p style="color: #143477; margin-left: 8px; font-weight: 800;">
                            {{ $text_lang[$default_lang]['section8']['why_product']['content1']['main_text'] }}</p>
                        <h6 style="color: #666666; margin-left: 8px; line-height: 20px;">
                            {{ $text_lang[$default_lang]['section8']['why_product']['content1']['sub_text'] }}</h6>
                    </div>
                </div>
            </div>

            <div class="box-putih-res">
                <div class="row">
                    <div class="col-lg-2 col-xl-2">
                        <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section8']['why_product']['content2']['icon']) }}"
                            alt="" class="icon-inside">
                    </div>
                    <div class="col-lg-10 col-xl-10">
                        <p style="color: #143477; margin-left: 8px; font-weight: 800;">
                            {{ $text_lang[$default_lang]['section8']['why_product']['content2']['main_text'] }}</p>
                        <h6 style="color: #666666; margin-left: 8px; line-height: 20px;">
                            {{ $text_lang[$default_lang]['section8']['why_product']['content2']['sub_text'] }}</h6>
                    </div>
                </div>
            </div>

            <div class="box-putih-res">
                <div class="row">
                    <div class="col-lg-2 col-xl-2">
                        <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section8']['why_product']['content3']['icon']) }}"
                            alt="" class="icon-inside">
                    </div>
                    <div class="col-lg-10 col-xl-10">
                        <p style="color: #143477; margin-left: 8px; font-weight: 800;">
                            {{ $text_lang[$default_lang]['section8']['why_product']['content3']['main_text'] }}</p>
                        <h6 style="color: #666666; margin-left: 8px; line-height: 20px;">
                            {{ $text_lang[$default_lang]['section8']['why_product']['content3']['sub_text'] }}</h6>
                    </div>
                </div>
            </div>



        </div>

    </section>    
    {{-- end section slider fitur --}}

    {{-- section 3 reason --}}
    <section class="section-comments why-reason bg--reason wrap">

        <!-- 3 reason desktop -->
        <div class="desktop-show">

            <div class="row mx-0">

                <div class="col-md-6 px-5 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            <?php echo $text_lang[$default_lang]['section8']['main_text']; ?>
                        </h4>
                        <p class="fitur-desc">
                            <?php echo $text_lang[$default_lang]['section8']['sub_text']; ?>
                        </p>
                        <div class="fitur-list">
                            <ul>
                                <li class="font-inter"><img src="{{ asset('public/img/assets/checklist-icon-green.svg') }}" class="icon-check" alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content1']['main_text'] }}</li>
                                <li class="font-inter"><img src="{{ asset('public/img/assets/checklist-icon-green.svg') }}" class="icon-check" alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content2']['main_text'] }}</li>
                                <li class="font-inter"><img src="{{ asset('public/img/assets/checklist-icon-green.svg') }}" class="icon-check" alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content3']['main_text'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-5 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section8']['img']) }}"
                        class="img-section" alt="">
                </div>

            </div>
        </div>

        </div>

        <!-- 3 reason mobile -->
        <div class="container mobile-show">
            <div class="row mx-0">
                <div class="col-xs-12 col-sm-12 py-fitur">
                    <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section8']['img']) }}"
                        class="img-section" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 py-fitur">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            <?php echo $text_lang[$default_lang]['section8']['main_text']; ?>
                        </h4>
                        <p class="fitur-desc">
                            <?php echo $text_lang[$default_lang]['section8']['sub_text']; ?>
                        </p>
                        <div class="fitur-list">
                            <ul>
                                <li class="font-inter"><img src="{{ asset('public/img/assets/checklist-icon-green.svg') }}" class="icon-check" alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content1']['main_text'] }}</li>
                                <li class="font-inter"><img src="{{ asset('public/img/assets/checklist-icon-green.svg') }}" class="icon-check" alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content2']['main_text'] }}</li>
                                <li class="font-inter"><img src="{{ asset('public/img/assets/checklist-icon-green.svg') }}" class="icon-check" alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content3']['main_text'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </section>    
    {{-- end section 3 reason --}}

    {{-- section faq --}}
    <section class="section-comments faq wrap">

        <!-- faq desktop -->
        <div class="desktop-show relative">
            <img src="{{ asset('public/img/assets/omsetku/elipse.png') }}" alt="" class="bg-elipse">
            <div class="fitur-content">
                <h4 class="fitur-title">
                    <?php echo $text_lang[$default_lang]['section16']['main_text']; ?>
                </h4>
                <p class="fitur-desc">
                    <?php echo $text_lang[$default_lang]['section16']['sub_text']; ?>
                </p>
            </div>
            <div class="row mx-0">

                <div class="col-md-6 px-5">
                    
                </div>

                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        @foreach ($text_lang[$default_lang]['section16']['faq'] as $k => $item)
                        @php
                            $iFaq = $k;
                        @endphp
                        <div class="card">
                            <div class="card-header" id="heading{{ $iFaq }}">
                                <h2 class="mb-0">
                                <button class="btn btn-link btn-header-faq btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $iFaq }}" aria-expanded="true" aria-controls="collapse{{ $iFaq }}">
                                    {{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['main_text'] }}
                                    <i class="toggle-icon fa {{ $iFaq == 0 ? 'fa-minus' : 'fa-plus' }} "></i>
                                </button>
                                </h2>
                            </div>
                        
                            <div id="collapse{{ $iFaq }}" class="collapse {{ $iFaq == 0 ? 'in' : '' }}" aria-labelledby="heading{{ $iFaq }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="font-inter">{{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['sub_text'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                </div>

            </div>
        </div>

        </div>

        <!-- faq mobile -->
        <div class="container mobile-show">            
           
            <div class="row mx-0">

                <div class="col-xs-12 col-sm-12">
                    <div class="fitur-content">
                        <h4 class="fitur-title">
                            <?php echo $text_lang[$default_lang]['section16']['main_text']; ?>
                        </h4>
                        <p class="fitur-desc">
                            <?php echo $text_lang[$default_lang]['section16']['sub_text']; ?>
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12">
                    <div class="accordion" id="accordionExampleMobile">
                        @foreach ($text_lang[$default_lang]['section16']['faq'] as $k => $item)
                        @php
                            $iFaq = $k;
                        @endphp
                        <div class="card">
                            <div class="card-header" id="headingMobile{{ $iFaq }}">
                                <h2 class="mb-0">
                                <button class="btn btn-link btn-header-faq btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseMobile{{ $iFaq }}" aria-expanded="true" aria-controls="collapseMobile{{ $iFaq }}">
                                    {{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['main_text'] }}
                                    <i class="toggle-icon fa {{ $iFaq == 0 ? 'fa-minus' : 'fa-plus' }} "></i>
                                </button>
                                </h2>
                            </div>
                        
                            <div id="collapseMobile{{ $iFaq }}" class="collapse {{ $iFaq == 0 ? 'in' : '' }}" aria-labelledby="headingMobile{{ $iFaq }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="font-inter">{{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['sub_text'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      </div>
                </div>

            </div>
        </div>

    </section>    
    {{-- end section faq --}}



    {{-- Section Make SO --}}
    <section class="integrasi feature-apps wrap  bg-putih" id="feature-apps">

        <!-- feature apps smart safety desktop -->
        <div class="container mx-auto d-block mb-sm-0 desktop-show">

            <div class="two-col bg-putih header-feature content-feature">

                <h4 class="font-inter"><?php echo $text_lang[$default_lang]['section15']['feature_product']['content1']['main_text']; ?></h4>

                <p class="font-inter"><?php echo $text_lang[$default_lang]['section15']['feature_product']['content1']['sub_text']; ?></p>
            </div>


            <div class="two-col bg-putih feature1 content-feature content-feature-list" data-aos="fade-up"
                data-aos-duration="1800" data-aos-delay="500" data-aos-once="true">


                <div class="box-biru">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['icon']) }}"
                                alt="" class="icon-inside">
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <p>{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['title'] !!}</p>
                        </div>
                    </div>
                </div>

                <div class="box-biru">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['icon']) }}"
                                alt="" class="icon-inside">
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <p>{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['title'] !!}</p>
                        </div>
                    </div>
                </div>

                <div class="box-biru">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['icon']) }}"
                                alt="" class="icon-inside">
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <p>{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['title'] !!}</p>
                        </div>
                    </div>
                </div>

                <div class="box-biru">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['icon']) }}"
                                alt="" class="icon-inside">
                        </div>
                        <div class="col-lg-10 col-xl-10">
                            <p>{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['title'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- feature apps smart safety mobile -->
        <div class="container mx-auto d-block mb-sm-0 mobile-show">

            <div class="two-col mt-5 feature1 content-feature text-center">

                <h4><?php echo $text_lang[$default_lang]['section15']['feature_product']['content1']['main_text']; ?></h4>

            </div>

            <p class="two-col feature1 content-feature text-center"><?php echo $text_lang[$default_lang]['section15']['feature_product']['content1']['sub_text']; ?></p>

            <div class="row two-col feature1 content-feature" data-aos="fade-up" data-aos-duration="1800"
                data-aos-delay="500" data-aos-once="true">

                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="box-biru-res">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['icon']) }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-lg-12">
                                <p>
                                    {!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['title'] !!}
                                </p>                               
                            </div>
                        </div>
                    </div>

                    <div class="box-biru-res">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['icon']) }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-lg-12">
                                <p>
                                    {!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['title'] !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="box-biru-res">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['icon']) }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-lg-12">
                                <p>
                                    {!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['title'] !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="box-biru-res">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <img src="{{ asset('public/img/assets/omsetku/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['icon']) }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-lg-12">
                                <p>
                                    {!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['title'] !!}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- end Section Make SO --}}



    {{-- Section Liputan --}}

    <section class="section-compannies liputan py-5 pt-tablet-0 pb-0" id="liputan">

        <div class="header text-center">

            <h4 class="mt-0 mb-2 desktop-show">{{ $text_lang[$default_lang]['section12']['title'] }}</h4>

            <h4 class="mb-4 mobile-show">{{ $text_lang[$default_lang]['section12']['title'] }}</h4>

        </div>

        <div class="container-custom">

            <div class="row list-diliput desktop-show">

                {{-- <div class="col-lg-12 col-md-12"> --}}

                <div class="col-lg-2 col-md-2 col-sm-4 ">
                    <a
                        href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                        {{-- <a href="https://www.liputan6.com/"> --}}
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Liputan-6-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    <a
                        href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                        {{-- <a href="https://www.bisnis.com/"> --}}
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    <a href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                        {{-- <a href="https://www.beritasatu.com/"> --}}
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Berita-satu-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    <a href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                        {{-- <a href="https://www.tempo.co/"> --}}
                        <img class="img-responsive" src="{{ asset('public/img/assets/home/diliput/Tempo-goodeva.png') }}"
                            alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                        {{-- <a href="https://kumparan.com/"> --}}
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Kumparan-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4">
                    <a
                        href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                        {{-- <a href="https://www.tribunnews.com/"> --}}
                        <img class="img-responsive desktop-show"
                            src="{{ asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png') }}"
                            alt="">
                    </a>
                </div>

                {{-- <img class="img-responsive hidden-xs hidden-sm" src="{{asset('public/img/assets/home/diliput-goodeva.png')}}" alt=""> --}}

                {{-- </div> --}}

            </div>

            <div class="row mx-0 mobile-show">

                {{-- <div class="col-lg-12 col-md-12"> --}}

                <div class=" col-xs-4 col-sm-4">
                    <a
                        href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                        {{-- <a href="https://www.liputan6.com/"> --}}
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Liputan-6-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    <a
                        href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                        {{-- <a href="https://www.bisnis.com/"> --}}
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    <a href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                        {{-- <a href="https://www.beritasatu.com/"> --}}
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Berita-satu-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                        {{-- <a href="https://kumparan.com/"> --}}
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/TirtoId-goodeva.png') }}" alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    <a href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                        {{-- <a href="https://www.tempo.co/"> --}}
                        <img class="img-responsive" src="{{ asset('public/img/assets/home/diliput/Tempo-goodeva.png') }}"
                            alt="">
                    </a>
                </div>

                <div class="col-xs-4 col-sm-4 ">
                    <a
                        href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                        {{-- <a href="https://www.tribunnews.com/"> --}}
                        <img class="img-responsive"
                            src="{{ asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png') }}"
                            alt="">
                    </a>
                </div>


                {{-- <img class="hidden-md hidden-lg" src="{{asset('public/img/assets/home/diliput-goodeva-mobile.png')}}" alt=""> --}}

                {{-- </div> --}}

            </div>

        </div>

    </section>

    {{-- Akhir Section Liputan --}}





    {{-- section are you ready --}}
    <section class="section-comments ninja bg--safety-trial py-3 pt-sm-5 desktop-show">

        <img src="{{ asset('public/img/assets/bg-ninja-goodeva.png') }}" alt="texture-bg-ninja" class="texture-bg-ninja">

        <img src="{{ asset('public/img/assets/ninja-goodeva-new.png') }}" class="ninja--img" alt="">

        <div class="container">

            <div class="row ninja-content" data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-aos-duration="1500">

                <div class="col-md-9 col-sm-6 text-left">

                    <div class="title--rekrut font-inter">{{ $text_lang[$default_lang]['section13']['title'] }}</div>

                    {{-- <p>{{ $text_lang[$default_lang]['section13']['text1'] }}</p> --}}

                    <div class="btn-group-ninja">
                        <a href="http://omsetku.id/" target="_blank" class="btn btn--trial">
    
                            <span>{{ $text_lang[$default_lang]['section13']['text_button1'] }} &nbsp;<i
                                    class="fa fa-arrow-right"></i></span>
    
                        </a>
    
                        <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
    
                            <span>{{ $text_lang[$default_lang]['section13']['text_button2'] }} &nbsp; <i
                                    class="fa fa-whatsapp"></i></span>
    
                        </a>
                    </div>


                </div>

                <div class="col-md-3 col-sm-6 ninja-area">

                    

                </div>

            </div>

        </div>

    </section>
    <!--./section comment -->

    <section class="section-comments bg--safety-trial ninja-mobile mobile-show">        

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-aos-duration="1500">

                <div class="col-md-12 text-center mt-5">

                    <div class="title--rekrut">{{ $text_lang[$default_lang]['section13']['title'] }}</div>                    

                </div>

                <div class="col-md-12 text-center col-sm-12">

                    <div class="btn-group-ninja">
                        <a href="http://omsetku.id/" target="_blank" class="btn btn--trial">
    
                            <span>{{ $text_lang[$default_lang]['section13']['text_button1'] }} &nbsp;<i
                                    class="fa fa-arrow-right"></i></span>
    
                        </a>
    
                        <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
    
                            <span>{{ $text_lang[$default_lang]['section13']['text_button2'] }} &nbsp; <i
                                    class="fa fa-whatsapp"></i></span>
    
                        </a>
                    </div>

                </div>

                <div class="col-md-12">

                    <img src="{{ asset('public/img/assets/ninja-goodeva-new.png') }}" class="ninja--img mt-5"
                        alt="">

                </div>


            </div>

        </div>

    </section>
    <!--./section comment -->
    {{-- section are you ready --}}

@endsection
