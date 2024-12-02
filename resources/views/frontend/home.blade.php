@extends('layouts.app-frontend')

@section('title', 'Goodeva Technology Ai & iOT Enterprise')
{{-- Meta Section --}}

@section('meta_desc')
Wujudkan ide & mimpi dalam satu platform terintegrasi untuk membantu bisnis berkembang hebat bersama technology
@endsection

@section('meta_key')
Goodeva technology, goodeva software, goodeva, good evaluation, IT & digital solutions, jasa pembuatan aplikasi andorid, jasa pembuatan aplikasi ios, jasa pembuatan aplikasi website, smart safety, jasa penghubung api, perusahaan IT bekasi, perusahaan it jakarta
@endsection

@section('meta_auth')
goodeva
@endsection

{{-- End Meta Section --}}

@section('css_after')

<link rel="stylesheet" href="{{asset('public/css/materialize.min.css')}}">
<link rel="stylesheet" href="{{asset('public/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}">

<link href="{{ asset('public/css/lity.css') }}" rel="stylesheet">


<style>

    .info-card .card-erp img {
        width: 29%; 
    }

    .mt-5-custom{

    }
    
    .slick-prev:before, .slick-next:before{
        color: #4C8D9A !important;
        font-size: 25px !important;
    }

    
    .slick-prev::before {
        font-family: FontAwesome !important;
        content: "\f0d9";
        
    }  
    .slick-next::before {
        font-family: FontAwesome !important;
        content:  "\f0da";
         
    } 
    

    .btn-wa,.btn-details{
		background-color: #63A6B3;
		color: #fff !important;
		font-size: 15px !important;
		border-radius: 5px;
        display: inline !important;
	}

    .btn-wa:hover,.btn-details:hover{
		background-color: #487982;
	}

    .btn-wa-icon{
        font-size: 18px;
    }

    .btn-wa::before {
        content: '';
        width: 24px;
        height: 24px;
        display: inline-block;
        vertical-align: middle;
        margin-top: -5px;
        margin-right: 5px;
        background: url('public/img/assets/wa-icon-white.svg') no-repeat center;
        background-size: contain;
    }

    .fitur-desc,.fitur-title{
		font-family: 'Inter', sans-serif;

    }
    .fitur-desc{
		font-size: 20px;
		color: #636F73;
	}
		
	.fitur-title{
		font-weight: bold;
		font-size: 30px;
		color: #000000;
	}
		
	.img-section{
		height: auto !important;
		width: 95% !important;
	}

    .hslide-area .slid-content img {

        height: 696px;

        object-fit: cover;

    }

    .hslide-area .slid-content img.char--info-img {

        height: auto !important;

    }





    .hslide-area .slick-dots li.slick-active button:before {

        opacity: 1;

        color: white;

    }



    .hslide-area .slick-dots li button:before {

        font-size: 9px;

        top: -35px;

        color: white;

    }



    .hslide-area .slid-content {

        position: relative;

    }


    .mt-6rem {
        margin-top: 6rem !important;
    }

    .mt-10rem {
        margin-top: 10rem !important;
    }



    .txt-header-right,
    .txt-header-right-hp,
    .txt-header-left {

        position: absolute;

        /* top: 54%;

            left: 76%; */

        top: 50%;

        left: 77%;

        padding-right: 3rem;

        -webkit-transform: translate(-50%, -50%);

        transform: translate(-50%, -50%);

        color: white;

        font-size: 46px;

        -webkit-transition: all 300ms ease;

        transition: all 300ms ease;

    }



    #hslide-area-mobile .slid-content .txt-header-right-hp {
        position: absolute;

        /* top: 54%;

            left: 76%; */

        top: 10%;

        left: 5%;
    }

    #hslide-area-mobile .slick-track {
        min-height: 736px
    }





    .txt-header-right-hp {

        /* padding-right: 7.5rem; */

    }



    .txt-header-left {

        top: 47% !important;

        left: 38% !important;

        padding-right: 22%;

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

    .txt-header-right h2 {



        font-weight: 600;

    }

    .txt-header-right-hp h2 {

        font-weight: 600;
    }


    @media screen and (max-width: 1515px) {

        .txt-header-right h2 {

            font-size: 54px !important;
            line-height: 64px;
            font-weight: 600;

        }

        .txt-header-right-hp h2 {
            font-size: 54px !important;
            line-height: 64px;
        }

    }

    @media (min-width:767px) {
        .slick-dotted.slick-slider {
            margin-bottom: 0;
        }

        .mt-4rem{
            margin-top:4rem !important;
        }

        .fitur img{
            width: auto !important;
        }

        .pt-5rem{
            padding-top: 5rem !important;
        }

        .info-card .card-safety img {
            right: 82px;
        }

        .portofolio-slide .slick-list{
            padding-left: 10px;
            margin-left:30px;
        }

        .slick-prev{
            padding-left: 20px;
        }

        .content-title .btn-started span,.content-title .btn-wa span,.content-title .btn-details span{
            font-size: 16px !important;
        }

        .content-title .btn-started span{
            color: #37334D !important;
            letter-spacing: 0 !important;
        }

        .content-title .btn-wa>span,.content-title .btn-details>span{
            display: inherit;                
            line-height: 0;
            font-weight: 600;
        }
        .content-title .btn-wa{
            display: inline-block !important;
            padding: 0 20px;
        }

        .content-title .btn-wa{
            border: 1px solid #ffffff !important;
            background: transparent !important;
        }

        .content-title .btn-wa:hover{
            border: 1px solid #ffffff !important;
            background: #487982 !important;
        }
       
    }




    @media screen and (max-width: 767px) {

        .txt-header-right-hp h2 {

            font-size: 30px !important;


        }

        .header .navbar {

            background: transparent;

        }

        .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {
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

        .section-watch-video .header h5 {
            font-size: 22px;
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
            font-size: 28px;
        }

        .fitur .img-fitur{
            width: 100% !important; 
            height: auto !important;
        }

        .fitur img.icon-fitur{
            margin-top: -54px !important;
            box-shadow: 0px 3px 25px #0000002E;
            border-radius: 18px;
        }

        .pt-sm-1-5rem {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .section-compannies.liputan {
            padding-bottom: 1.5rem !important;
        }

        .w-100p {
            width: 100%;
        }

        .box-fitur{
            border-radius: 18px !important;
        }


        .content-title .btn-started,.content-title .btn-wa{
            width: 63%;
        }

        .content-title .btn-started span,.content-title .btn-wa span{
            font-size: 14px !important;
        }

        .content-title .btn-started span{
            color: #37334D !important;
            letter-spacing: 0 !important;
        }

        .content-title .btn-wa>span{
            display: inherit;                
            line-height: 0;
            font-weight: 600;
        }
        .content-title .btn-wa{
            display: inline-block !important;
            padding: 0 20px;
        }

        .btn-mobile-started{
            background: #ffffff !important;
        }

        .btn-mobile-started span, .btn-mobile-started i{
            color : #000000 !important;
        }

        .content-title .btn-wa{
            border: 1px solid #ffffff !important;
            background: transparent !important;
        }

        .content-title .btn-wa:hover{
            border: 1px solid #ffffff !important;
            background: #487982 !important;
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

        .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {

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



    .testimoni-h .slick-dots {

        background: transparent;

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
        background: #F5F5F5 !important;
        border-top-left-radius: 70px;
        border-top-right-radius: 70px;
    }

    /* Zoom 150% */

    @media screen and (min-width: 1000px) and (max-width: 1098px) {

        .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {

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



        /*.portfolio {

            padding-left: 20px !important;

        }*/



        .testimoni {

            padding: 8em 9em 6em 5em;

        }

    }



    /* Zoom 125% */

    @media screen and (min-width: 1098px) and (max-width: 1300px) {





        .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {

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



        .portfolio {

            padding-left: 20px !important;

        }

    }

    @media (min-width: 1098px) and (max-width:1100px) {
        .h-box-l {
            height: 242px;
        }

        .info-card .card-erp p {
            padding-right: 35%;
        }

        .info-card .card-erp img {
            width: 36%;
        }
    }

    @media(max-width: 990px) {
        .fitur {

            overflow: hidden;

        }
    }



    /* Zoom 110% */

    @media screen and (min-width: 1300px) and (max-width: 1410px) {

        .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {

            left: 22px !important;

        }



        .testimoni .max-img {

            right: -85px !important;

        }

    }



    /* Zoom 90% */

    @media screen and (min-width: 1556px) {

        .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {

            left: -115px !important;

        }



        .testimoni .max-img {

            right: 150px !important;

        }

    }



    /* All */



    .testimoni-h .slick-dots li button:before,.portofolio-slide .slick-dots li button:before,.portofolio-slide-m .slick-dots li button:before {

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

        border-radius: 7px;

        padding: 0 36px;

        padding-right: 20px !important;

        text-transform: none;

        background: transparent linear-gradient(1deg, #FFA234 0%, #FFDB50 100%) 0% 0% no-repeat padding-box;

    }



    .btn-lihat-detail:hover {

        background: transparent linear-gradient(1deg, #f98900 0%, #e5b707 100%) 0% 0% no-repeat padding-box;

    }



    .btn-lihat-detail span {

        color: #133A72 !important;

        font-size: 13.5px !important;

        font-weight: 700 !important;

        margin-right: 10px !important;

    }



    .btn-lihat-detail i {

        color: #133A72;

        font-size: 13px !important;

    }



    .fitur img {

        width: 50%;

        height: 80px;

        object-fit: contain;

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

    @media (max-width:450px) {
        .h-box-f {
            width: 350px !important;
        }
    }

    @media (max-width:400px) {
        .h-box-f {
            width: 300px !important;
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
        background: #f5f5f5 !important;
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }

    .info-card.mobile-show {
        background: #f5f5f5 !important;
        padding-top: 0rem !important;
        padding-bottom: 3rem !important;
    }

    .section-compannies.liputan {
        background: #f5f5f5 !important;
        padding-top: 1.5rem !important;
    }


    @media (max-width:767px) {

        .info-card .card-safety img.char--info-img.img-wellness-ads {
            right: 10%;
            width: 77%;
        }
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

        .my-fitur:nth-last-child(1) {
            margin-bottom: 3rem !important;
        }

        .section-watch-video .header p.mobile-show {
            padding-top: 5%;
        }
    }

    .h-box-f {
        width: 100%;
    }
</style>

@endsection



@section('content')

<section class="header" id="header">

    <div class="slider-area desktop-show mt-3">

        <div class="hslide-area d-none d-sm-block" id="hslide-area">

            <div class="slid-content">

                <img src="{{asset('public/img/assets/home/slider/Goodeva-b2b-integrated-health-safety-technology-1.jpg?v=1')}}" class="d-block w-100" alt="">

                <img src="{{asset('public/img/assets/home/slider/Goodeva-b2b-integrated-health-safety-technology-2.png')}}" class="img-left-worker" alt="">

                <div class="col-md-6 col-sm-6 txt-header-right">

                    <span>Goodeva Technology</span>

                    <h2>B2B Integrated Health & Safety Technology</h2>

                    <p>Goodeva For Better Indonesian Wellness</p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                </div>

            </div>

            <div class="slid-content">

                <img src="{{asset('public/img/assets/home/slider/Solusi-keselamatan-kerja-goodeva-technology-smart-safety-1.png?v=1')}}" class="d-block w-100" alt="">

                <img src="{{asset('public/img/assets/home/slider/Solusi-keselamatan-kerja-goodeva-technology-smart-safety-2.png')}}" class="img-left-worker" alt="">

                <div class="col-md-6 col-sm-6 txt-header-right">

                    <span>Goodeva Technology</span>

                    <h2>Cegah Kecelakaan Akibat Fatigue</h2>

                    <p>Dengan menggunakan Goodeva Smart Safety</p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                </div>

            </div>

            <div class="slid-content">

                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-integrasi-wearables-aplikasi-1.png')}}" class="d-block w-100" alt="">

                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-integrasi-wearables-aplikasi-2.png')}}" class="img-left-hp" alt="">

                <div class="col-md-6 col-sm-6 txt-header-right-hp">

                    <span>Goodeva Technology</span>

                    <h2>Integrasi Wearables dan Aplikasi</h2>

                    {{-- <p>Aplikasi pendeteksi fatigue terbaik di Indonenesia, Goodeva Smart Safety by Goodeva. dapat mencegah risiko kecelakaan kerja dikarenakan fatigue atau kelelahan, dan dapat meningkatkan produktivitas karyawan anda</p> --}}
                    <p>Aplikasi pendeteksi fatigue terbaik di Indonesia, Goodeva Smart Safety by Goodeva. </p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                </div>

            </div>

            <div class="slid-content">

                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise.png')}}" class="d-block w-100" alt="">

                <div class=" col-md-6 col-sm-8 txt-header-right">

                    <span>Goodeva Technology</span>

                    <h2>Partner yang Seperti Sahabat</h2>

                    <p>Customized, First Hand, On time & On Budget</p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>



                    </a>

                </div>

            </div>

        </div>

    </div>

    <div class="slider-area mobile-show mt-0">

        <div class="hslide-area d-none d-sm-block" id="hslide-area-mobile">



            <div class="slid-content">



                <img src="{{asset('public/img/assets/home/slider/Goodeva-b2b-integrated-health-safety-technology-mobile-1.jpg')}}" class="d-block w-100" alt="">

                <img src="{{asset('public/img/assets/home/slider/Goodeva-b2b-integrated-health-safety-technology-mobile-2.png')}}" class="img-left-worker" alt="">

                <div class="col-xs-12 txt-header-right-hp txt-header-right-worker">

                    <span>Goodeva Technology</span>

                    <h2>B2B Integrated Health & Safety Technology</h2>

                    <p>Goodeva For Better Indonesian Wellness</p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                </div>

            </div>

            <div class="slid-content">



                <img src="{{asset('public/img/assets/home/slider/Solusi-keselamatan-kerja-goodeva-technology-smart-safety-1-mobile.jpg')}}" class="d-block w-100" alt="">

                <img src="{{asset('public/img/assets/home/slider/Solusi-keselamatan-kerja-goodeva-technology-smart-safety-2.png')}}" class="img-left-worker" alt="">

                <div class="col-xs-12 txt-header-right-hp txt-header-right-worker">

                    <span>Goodeva Technology</span>

                    <h2>Cegah Kecelakaan akibat fatigue</h2>

                    <p>Dengan menggunakan Goodeva Smart Safety</p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                </div>

            </div>

            <div class="slid-content">


                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-integrasi-wearables-aplikasi-1-mobile.jpg')}}" class="d-block w-100" alt="">


                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-integrasi-wearables-aplikasi-2-mobile.png')}}" class="img-left-hp" alt="">

                <div class="col-xs-12 txt-header-right-hp">

                    <span>Goodeva Technology</span>

                    <h2>Integrasi Wearables dan Aplikasi</h2>

                    <p>Aplikasi pendeteksi fatigue terbaik di Indonenesia, Goodeva Smart Safety by Goodeva. </p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                </div>

            </div>

            <div class="slid-content">

                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise-bg.jpg')}}" class="d-block w-100" alt="">

                <img src="{{asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise-mobile.png')}}" class="img-left-hp" alt="">

                <div class=" col-xs-12 txt-header-right-hp">

                    <span>Goodeva Technology</span>

                    <h2>Partner yang Seperti Sahabat</h2>

                    <p>Customized, First Hand, On time & On Budget</p>

                    <a href="{{url('contact')}}" class="btn btn-started-header">

                        <span>Get Started</span>

                        <i class="fa fa-chevron-right"></i>

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

            <h5 class="mt-0 mb-0 mx-4 mt-5 mobile-show">Goodeva technology AI <br> & iOT enterprise</h5>
            <h3 class="mt-6rem mb-2 desktop-show">Goodeva technology Ai & iOT Enterprise</h3>

            <p class="desktop-show mb-0">Integrasi seluruh data dalam satu platform untuk membantu bisnis anda berkembang dengan hebat dengan technology</p>
            <p class="mobile-show">Integrasi seluruh data dalam satu platform untuk membantu bisnis anda berkembang dengan hebat dengan technology</p>

        </div>

        <div class="row desktop-show">

            <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="450" data-aos-once="true" data-aos-duration="1500" data-aos-easing="linear">

                <div class="control-button">

                    {{-- <a href="https://www.youtube.com/watch?v=MIjr9xjQpf4" data-lity class="fancybox-video"> --}}
                    <a href="https://youtu.be/v_oMbXlVSLg" data-lity>

                        {{-- <span class="icon icon-Play"></span> --}}

                        <img src="{{asset('public/img/assets/home/Video - Paly button.png')}}" alt="" class="play-btn">

                    </a>

                    <div class="clearfix"></div>

                    {{-- <span>watch the video</span> --}}

                </div>

                <div class="computer">

                    <img src="{{asset('public/img/assets/home/Mining-indusrty-technology-smart-safety.png')}}" alt="" />

                </div>

            </div>

        </div>

        <div class="row mx-0  mobile-show">

            <div class="col-lg-12 col-md-12" data-aos="zoom-in-up" data-aos-delay="450" data-aos-once="true" data-aos-duration="700" data-aos-easing="linear">

                <div class="control-button">

                    {{-- <a href="https://www.youtube.com/watch?v=MIjr9xjQpf4" class="fancybox-video"> --}}

                    <a href="https://youtu.be/v_oMbXlVSLg" data-lity>

                        {{-- <span class="icon icon-Play"></span> --}}

                        <img src="{{asset('public/img/assets/home/Video - Paly button.png')}}" alt="" class="play-btn">

                    </a>

                    <div class="clearfix"></div>

                    {{-- <span>watch the video</span> --}}

                </div>

                <div class="computer">

                    <img src="{{asset('public/img/assets/home/Mining-indusrty-technology-smart-safety.png')}}" alt="" />

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Akhir Video --}}



{{-- Fitur --}}

<section class="fitur mt-5 pt-5rem atas-rounded desktop-show" id="fitur">

    <div class="container">

        <div class="row mt-4rem">
				<div class="col-md-6 px-5 py-5">
					<img src="{{asset('public/img/assets/home/product-smart-safety.png')}}" class="img-section " alt="">
				</div> 
				<div class="col-md-6 px-5 py-5">
					<img src="{{asset('public/img/assets/home/updated_asset/smart-safety-goodeva.png')}}" class="img-responsive" alt="">
					<h4 class="fitur-title">Vaksin Digital Pencegah Kecelakaan Kerja</h4>
					<p class="fitur-desc">
						Software kelaikan kerja dan pencegah kecelakaan kerja otomatis dengan iOT.
					</p>
					<br>
					<a href="{{ url('goodeva-smart-safety') }}" class="btn-details px-3 py-2">
						Lihat Detail
					</a>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-md-6 px-5 py-5">
					<img src="{{asset('public/img/assets/home/updated_asset/smart-health-goodeva.png')}}" class="img-responsive" alt="">
					<h4 class="fitur-title">Solusi Kesehatan Karyawan Terlengkap & Terintegrasi</h4>
					<p class="fitur-desc">
						Software monitoring kesiapan kerja, kesehatan karyawan, dan chat dokter.
					</p>
					<br>
					<a href="{{ url('goodeva-smart-healthy') }}" class="btn-details px-3 py-2">
						Lihat Detail
					</a>
				</div>
				
				<div class="col-md-6 px-5 py-5">
					<img src="{{asset('public/img/assets/home/product-smart-health.png')}}" class="img-section " alt="">
				</div>
				
			</div>

    </div>

</section>

<section class="fitur mt-0 mb-0 atas-rounded mobile-show" id="fitur">

    <div class="container">

        <div class="row mx-0 my-4 px-3">

            <div class="col-md-4 box-fitur my-fitur mx-0" data-aos="fade-up"

                data-aos-duration="2000" data-aos-delay="1000" data-aos-once="true">

                    <img src="{{asset('public/img/assets/home/safety kotak@2x.png')}}" class="img-responsive icon-fitur" alt="">

                    <div class="title-fitur">
                        Smart <span class="txt-fitur-blue">Safety</span> 
                    </div>

                    <div class="by--goodeva">
                        by goodeva
                    </div>
					
					<div class="mt-5-custom">
						<img src="{{asset('public/img/assets/home/product-smart-safety.png')}}"  alt="image product smart safety" class="img-fitur">
					</div>
					
					
                    <p>Software kelaikan kerja dan pencegah kecelakaan kerja otomatis dengan iOT.</p>

                    <div class="mt-5 text-center">

                        <a href="{{ url('goodeva-smart-safety') }}" class="btn-details px-3 py-2">
							Lihat Detail
						</a>

                    </div>

                </div>
               
                <div class="col-md-4 box-fitur my-fitur mx-0" data-aos="fade-up"

                data-aos-duration="2000" data-aos-delay="500" data-aos-once="true">

                    <img src="{{asset('public/img/assets/home/health kotak@2x.png')}}" class="img-responsive icon-fitur" alt="">

                    <div class="title-fitur">
                        Smart <span class="txt-fitur-cyan">Health</span> 
                    </div>

                    <div class="by--goodeva">
                        by goodeva
                    </div>
					
					<div class="mt-5-custom">
						<img src="{{asset('public/img/assets/home/product-smart-health.png')}}"  alt="image product smart health" class="img-fitur">
					</div>
					
                    <p>Software monitoring kesiapan kerja, kesehatan karyawan, dan chat dokter.</p>

                     <div class="mt-5 text-center">

                        <a href="{{ url('goodeva-smart-healthy') }}" class="btn-details px-3 py-2">
							Lihat Detail
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

            <div class="col-lg-5 col-md-5 col-sm-6 col-md-offset-1">

                <div class="card-safety rounded-w-bg h-box-f text-center p-4">

                    <span class="text-judul">Smart Safety</span>

                    <p><strong>Vaksin</strong> Pencegah <strong>Kecelakan Kerja</strong> Dengan Technology</p>

                    <a href="{{url('goodeva-smart-safety')}}" class="btn btn-lihat-detail">

                        <span>Lihat Detail</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                    <img src="{{asset('public/img/assets/home/Solusi-keselamatan-kerja-smart-safety.png')}}" alt="" class="img-character">

                </div>

            </div>

            <div class="col-lg-5 col-md-5 col-sm-6">

                <div class="card-safety rounded-w-bg h-box-f text-center p-4">

                    <span class="text-judul">Smart Health</span>

                    <p><strong>Solusi</strong> Terbaik Untuk <strong>Mencegah</strong> Penyebaran COVID-19</p>

                    <a href="{{url('goodeva-smart-healthy')}}" class="btn btn-lihat-detail">

                        <span>Lihat Detail</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                    <img src="{{asset('public/img/assets/home/Solusi-kesehatan-smart-health.png')}}" alt="">

                </div>

            </div>

            <div class="col-md-10 col-lg-10 col-sm-12 col-md-offset-1 mt-5">

                <div class="card-erp rounded-w-bg h-box-l text-left p-4 pl-5">

                    <span class="text-judul">Employee Wellness 360</span>
                    <p>Satu <strong>Platform Terintegrasi</strong> Untuk <strong>Bisnis</strong> Berkembang Menjadi Lebih Baik</p>

                    <a href="{{'#'}}" class="btn btn-lihat-detail">

                        <span>Lihat Detail</span>

                        <i class="fa fa-chevron-right"></i>

                    </a>

                    <img src="{{asset('public/img/assets/home/ads-goodeva-wellness.png?v=1')}}" alt="">

                </div>

            </div>

        </div>

    </div>

</section>

<section class="info-card mobile-show" id="info-card">

    <div class="container">

        <div class="row">

            <div class="slider-area mobile-show mt-0">

                <div class="hslide-area d-none d-sm-block" id="infocard_slider">

                    <div class="slid-content">

                        <div class="card-safety rounded-w-bg h-box-f mx-2 mx-360p-2 text-center p-4">

                            <span class="text-judul">Smart Safety</span>

                            <p><strong>Vaksin</strong> Pencegah <strong>Kecelakan Kerja</strong> Dengan Technology</p>

                            <a href="{{url('goodeva-smart-safety')}}" class="btn btn-lihat-detail">

                                <span>Lihat Detail</span>

                                <i class="fa fa-chevron-right"></i>

                            </a>

                            <img src="{{asset('public/img/assets/home/Solusi-keselamatan-kerja-smart-safety.png')}}" class="char--info-img" alt="">

                        </div>

                    </div>

                    <div class="slid-content">

                        <div class="card-safety rounded-w-bg h-box-f mx-2 mx-360p-2 text-center p-4">

                            <span class="text-judul">Smart Health</span>

                            <p><strong>Solusi</strong> Terbaik Untuk <strong>Mencegah</strong> Penyebaran COVID-19</p>

                            <a href="{{url('goodeva-smart-healthy')}}" class="btn btn-lihat-detail">

                                <span>Lihat Detail</span>

                                <i class="fa fa-chevron-right"></i>

                            </a>

                            <img src="{{asset('public/img/assets/home/Solusi-kesehatan-smart-health.png')}}" class="char--info-img" alt="">

                        </div>

                    </div>

                    <div class="slid-content">

                        <div class="card-safety rounded-w-bg h-box-f mx-2 mx-360p-2 text-center p-4">

                            <span class="text-judul">Employee Wellness</span>

                            <p>Satu <strong>Platform Terintegrasi</strong> Untuk <strong>Bisnis</strong> Berkembang Menjadi Lebih Baik</p>

                            <a href="{{ '#' }}" class="btn btn-lihat-detail">

                                <span>Lihat Detail</span>

                                <i class="fa fa-chevron-right"></i>

                            </a>

                            <img src="{{asset('public/img/assets/home/ads-goodeva-wellness.png?v=1')}}" class="char--info-img img-wellness-ads" alt="">

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

    <div class="p-5px-mobile">

        <div class="header text-center">

            <h4 class="mt-0 mb-5">Portofolio & Client</h4>

        </div>

        <div class="container-custom">

            <div class="row mx-0">

                <div class="col-lg-12 col-md-12 text-center">
                    <div class="portofolio-slide desktop-show">
                        <div>
                            <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/goodeva-portfolio-client-1.png?v=1.2')}}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/goodeva-portfolio-client-2.png?v=1.2')}}" alt="">
                        </div>
                    </div>

                    <div class="portofolio-slide-m mobile-show">
                        <div>
                            <img class="img-responsive mobile-show" src="{{asset('public/img/assets/home/goodeva-portfolio-client-m-1.png?v=1.2')}}" alt="">
                        </div>
                        <div>
                            <img class="img-responsive mobile-show" src="{{asset('public/img/assets/home/goodeva-portfolio-client-m-2.png?v=1.2')}}" alt="">
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>

    {{-- Testimoni --}}

    <div class="testimoni-h desktop-show">

        <div>

            <div class="testimoni">

                <div class="row">

                    <div class="col-md-5 col-5 col-md-offset-1 lay">

                        <div class="box-box shadow">

                            <div class="col-md-12 img-customer">

                                <img class="img-fluid kpp-logo" src="{{asset('public/img/assets/home/goodeva-kpp-logo.png')}}" alt="">

                            </div>

                            <div class="col-md-12">

                                <h4>"Goodeva terbukti signifikan menurunkan jumlah insiden kecelakaan kerja dan produktivitas karyawan meningkat."</h4>

                                <span> Iwan Gunawan</span>


                                <p class="p-putih">PT. Kalimantan Prima Persada</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-4">

                        <img class="max-img hid" src="{{asset('public/img/assets/home/testimoni-goodeva-Iwan.png')}}" alt="">

                    </div>

                </div>

            </div>

        </div>

        <div>

            <div class="testimoni">

                <div class="row">

                    <div class="col-md-5 col-5 col-md-offset-1 lay">

                        <div class="box-box shadow">

                            <div class="col-md-12 img-customer">

                                <img class="img-fluid" style="width: 40px;" src="{{asset('public/img/assets/home/logo-pama-putih.png')}}" alt="">

                            </div>

                            <div class="col-md-12">

                                <h4>"Goodeva membantu kami dalam mewujudkan ide & cita-cita kami menjadi sebuah kenyataan."</h4>

                                <span>Satya</span>

                                <p class="p-putih">PT Pamapersada Nusantara</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-4">

                        <img class="max-img hid" style="/*filter: brightness(0.70);" src="{{asset('public/img/assets/home/testimoni-goodeva-satya.png')}}" alt="">

                    </div>



                </div>

            </div>

        </div>

        <div>

            <div class="testimoni">

                <div class="row">

                    <div class="col-md-5 col-5 col-md-offset-1 lay">

                        <div class="box-box shadow">

                            <div class="col-md-12 img-customer">

                                <img class="img-fluid kpp-logo" src="{{asset('public/img/assets/home/goodeva-kpp-logo.png')}}" alt="">

                            </div>

                            <div class="col-md-12">

                                <h4>"Dengan smart safety, sangat membantu kami menurunkan tingkat insiden karena fatigue."</h4>

                                <span>Angga Ardianto</span>

                                <p class="p-putih">PT. Kalimantan Prima Persada</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-4">

                        <img class="max-img hid" src="{{asset('public/img/assets/home/testimoni-goodeva-Angga.png')}}" alt="">

                    </div>

                </div>

            </div>

        </div>

        <div>

            <div class="testimoni">

                <div class="row">

                    <div class="col-md-5 col-5 col-md-offset-1 lay">

                        <div class="box-box shadow">

                            <div class="col-md-12 img-customer">

                                <img class="img-fluid kpp-logo" src="{{asset('public/img/assets/home/goodeva-kpp-logo.png')}}" alt="">

                            </div>

                            <div class="col-md-12">

                                <h4>"Kami senang bekerja sama dengan goodeva, sangat fleksibel dalam membantu kami."</h4>

                                <span>Oktavianto</span>

                                <p class="p-putih">PT. Kalimantan Prima Persada</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-4">

                        <img class="max-img hid" src="{{asset('public/img/assets/home/testimoni-goodeva-Oktavianto.png')}}" alt="">

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="testimoni-h mobile-show my-5">


        <div class="mx-2 testi-box">

            <div class="testimoni">

                <div class="row">

                    <div class="col-12 lay mx-3">

                        <div class="box-box shadow">



                            <div class="col-md-12">

                                <h4>"Goodeva terbukti signifikan menurunkan jumlah insiden kecelakaan kerja dan produktivitas karyawan meningkat."</h4>

                                <div class="row mx-0">
                                    <div class="col-xs-4 col-sm-4 pl-0">
                                        <img src="{{asset('public/img/assets/home/goodeva-kpp-logo.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-8 col-sm-8 px-0">
                                        <span>Iwan Gunawan</span>
                                        <br>
                                        <span class="p-putih">PT. Kalimantan Prima Persada</span>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="mx-2 testi-box">

            <div class="testimoni">

                <div class="row">

                    <div class="col-12 lay mx-3">

                        <div class="box-box shadow">

                            <div class="col-md-12">

                                <h4>"Goodeva membantu kami dalam mewujudkan ide & cita-cita kami menjadi sebuah kenyataan."</h4>

                                <div class="row mx-0">
                                    <div class="col-xs-4 col-sm-4 pl-0">
                                        <img src="{{asset('public/img/assets/home/logo-pama-putih.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-8 col-sm-8 px-0">
                                        <span>Satya</span>
                                        <br>
                                        <span class="p-putih">PT. Pamapersada Nusantara</span>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="mx-2 testi-box">

            <div class="testimoni">

                <div class="row">

                    <div class="col-12 lay mx-3">

                        <div class="box-box shadow">


                            <div class="col-md-12">

                                <h4>"Dengan smart safety, sangat membantu kami menurunkan tingkat insiden karena fatigue."</h4>

                                <div class="row mx-0">
                                    <div class="col-xs-4 col-sm-4 pl-0">
                                        <img src="{{asset('public/img/assets/home/goodeva-kpp-logo.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-8 col-sm-8 px-0">
                                        <span>Angga Ardianto</span>
                                        <br>
                                        <span class="p-putih">PT. Kalimantan Prima Persada</span>
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

        <div class="mx-2 testi-box">

            <div class="testimoni">

                <div class="row">

                    <div class="col-12 lay mx-3">

                        <div class="box-box shadow">



                            <div class="col-md-12">

                                <h4>"Kami senang bekerja sama dengan goodeva, sangat fleksibel dalam membantu kami."</h4>

                                <div class="row mx-0">
                                    <div class="col-xs-4 col-sm-4 pl-0">
                                        <img src="{{asset('public/img/assets/home/goodeva-kpp-logo.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-8 col-sm-8 px-0">
                                        <span>Oktavianto</span>
                                        <br>
                                        <span class="p-putih">PT. Kalimantan Prima Persada</span>
                                    </div>
                                </div>


                            </div>

                        </div>

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

        <h4 class="mt-5 desktop-show mb-2">Goodeva Diliput Oleh</h4>

        <h4 class="mt-2 mobile-show mb-2">Goodeva Diliput Oleh</h4>

    </div>

    <div class="container-custom">

        <div class="row desktop-show">

            <div class="col-lg-2 col-md-2 col-sm-4">
                {{-- <a href="https://www.liputan6.com/"> --}}
                <a href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                    <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Liputan-6-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4">
                {{-- <a href="https://www.bisnis.com/"> --}}
                <a href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                    <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4">
                {{-- <a href="https://www.beritasatu.com/"> --}}
                <a href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                    <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Berita-satu-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4">
                {{-- <a href="https://www.tempo.co/"> --}}
                <a href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                    <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Tempo-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4">
                {{-- <a href="https://kumparan.com/"> --}}
                <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                    <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/TirtoId-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4">
                {{-- <a href="https://www.tribunnews.com/"> --}}
                <a href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                    <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png')}}" alt="">
                </a>
            </div>

        </div>

        <div class="row mobile-show mx-0">

            <div class=" col-xs-6 col-sm-6">
                {{-- <a href="https://www.liputan6.com/"> --}}
                <a href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                    <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Liputan-6-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-xs-6 col-sm-6 ">
                {{-- <a href="https://www.bisnis.com/"> --}}
                <a href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                    <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-xs-6 col-sm-6 ">
                {{-- <a href="https://www.beritasatu.com/"> --}}
                <a href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                    <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Berita-satu-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-xs-6 col-sm-6 ">
                {{-- <a href="https://kumparan.com/"> --}}
                <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                    <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/TirtoId-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-xs-6 col-sm-6 ">
                {{-- <a href="https://www.tempo.co/"> --}}
                <a href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                    <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Tempo-goodeva.png')}}" alt="">
                </a>
            </div>

            <div class="col-xs-6 col-sm-6 ">
                {{-- <a href="https://www.tribunnews.com/"> --}}
                <a href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                    <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png')}}" alt="">
                </a>
            </div>

            {{-- <div class="col-lg-12 col-md-12 mx-3 text-center">

                    <img class="img-responsive mobile-show mt-5" src="{{asset('public/img/assets/home/diliput-goodeva-mobile.png')}}" alt="">

        </div> --}}

    </div>

    </div>

</section>

{{-- Akhir Section Liputan --}}



{{-- Get Started --}}

<section id="started" class="desktop-show">

    <div class="container-custom dark-content">

        <div class="row">

            <div class="col-md-12 text-center">

                <h2 class="content-title" data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-aos-duration="1500">

                    <img class="mb-2" src="{{asset('public/img/assets/solution/goodeva-logo-white-lights.png')}}" alt="">

                    <span>Buat Perusahaan Anda Lebih Maju <br> Bersama Goodeva</span>

                    <a href="{{ url('contact') }}" class="btn btn-started">
                        <span class="mb-2">Get Started</span>
                        <i class="fa fa-chevron-right pl-2"></i>
                    </a>
                    <a href="{{ url('#') }}" class="btn btn-wa">
                        <span class="mb-2">Whatsapp Kami</span>
                        
                    </a>

                </h2>

                <img class="pl-5" src="{{asset('public/img/assets/home/goodeva-group-team.png')}}" alt="">

            </div>

        </div>

    </div>

</section>

<section id="started-mobile" class="mobile-show">

    <div class="container-custom dark-content px-0">

        <div class="row mx-0">

            <div class="col-md-12 text-center px-0">

                <h2 class="content-title" data-aos="fade-up" data-aos-delay="150" data-aos-once="true" data-aos-duration="1500" data-aos-easing="linear">

                    <img class="mb-2" src="{{asset('public/img/assets/solution/goodeva-logo-white-lights.png')}}" alt="" style="width: 33%;">

                    <span class="desktop-show">Buat Perusahaan Anda Lebih Maju <br> Bersama Goodeva</span>
                    <span class="mobile-show">Buat Perusahaan Anda Lebih Maju Bersama Goodeva</span>

                    <a href="{{ url('contact') }}" class="btn btn-started desktop-show">

                        <span class="mb-2">Get Started</span>

                        <i class="fa fa-chevron-right pl-2"></i>

                    </a>

                    <a href="{{ url('contact') }}" class="btn btn-started btn-mobile-started mobile-show">

                        <span class="mb-2">Get Started</span>

                        <i class="fa fa-chevron-right pl-2"></i>

                    </a>

                     <a href="{{ url('#') }}" class="btn btn-wa mobile-show">
                        <span class="mb-2">Whatsapp Kami</span>
                        
                    </a>

                </h2>

                <img src="{{asset('public/img/assets/home/Footer@2x.png')}}" alt="" class="valign-middle w-100p">

            </div>

        </div>

    </div>

</section>

{{-- Akhir Get Started --}}

@endsection




@section('js_after')

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<script src="{{asset('public/js/slick.min.js')}}" charset="utf-8"></script>

{{-- <script src="vendor/jquery.js"></script> --}}
<script src="{{asset('public/js/lity.min.js')}}"></script>



<script type="text/javascript">
    $('#hslide-area,#hslide-area-mobile').slick({

        dots: true,

        infinite: true,

        adaptiveHeight: true,

        //   slidesToShow: 3,

        //   slidesToScroll: 1,

        autoplay: true,

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
</script>



<script type="text/javascript">
    $('.testimoni-h').slick({

        infinite: true,

        //  speed: 400,

        slidesToShow: 1,

        variableWidth: false,

        autoplay: false,

        pauseOnHover: false,

        //  autoplaySpeed: 3000,

        dots: true,

        arrows: false,

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

    $('.portofolio-slide').slick({

        infinite: true,

        //  speed: 400,

        slidesToShow: 1,

        variableWidth: false,

        autoplay: true,

        pauseOnHover: false,

        autoplaySpeed: 5000,

        dots: false,

        arrows: true,

        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",

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



@endsection