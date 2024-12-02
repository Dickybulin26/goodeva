@extends('layouts.app-front-goodeva-lp')

@section('title', 'Goodeva Smart Safety - Cegah Kecelakaan Kerja Akibat Fatigue Dengan Technology & iOT')
{{-- Meta Section --}}

@section('meta_desc')
Aplikasi pendeteksi fatigue terbaik pertama di Indonesia, Goodeva Smart Safety dapat mencegah risiko kecelakaan kerja yang utama
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

{{-- <link rel="stylesheet" href="{{asset('public/css/materialize.min.css')}}"> --}}

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<link rel="stylesheet" href="{{asset('public/css/slick.css')}}">



<link rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}">



<!-- Compiled and minified CSS -->

<style>
  html {
    scroll-behavior: smooth;
  }

  body {
    background: #f5f5f5;
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

  .btn--uji {
    color: #2F3859;
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
      font-size: 30px !important;
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

  @media screen and (min-width: 1098px) and (max-width: 1300px) {

    .section-custom-sliders {

      min-height: 463px !important;

      padding-top: 0 !important;

      overflow: hidden !important;

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
      font-size: 36px !important;
    }

    .header-safety span {
      font-size: 16px !important;
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
      font-size: 32px !important;
    }

    .ninja--img {
      margin-top: -22% !important;
    }

    .btn--uji {
      padding: 0 11px;
    }

  }

  @media (min-width: 1100px) and (max-width:1195px) {
    .card--custom {
      width: 48.9rem !important;
      margin-left: 5rem !important;
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



  /* Mobile */

  /* @media (max-width:1000px){
            .py-150px{
                padding-bottom: 0 !important;
            }
        } */
  @media(min-width: 900px) and (max-width:1000px) {
    .header-safety img {
      max-width: 110% !important;
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

    .partner span {

      margin-bottom: 2rem !important;

      margin-top: 2rem !important;

    }

    .integrasi .header span {
      font-size: 14px;
    }

    .integrasi .header h3 {
      font-size: 20px;
      margin-top: .5rem !important;
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





    .integrasi .two-col span {

      font-size: 15px;

    }



    .integrasi .two-col h4 {

      margin-bottom: 14px;

      line-height: 2.2rem;

      font-size: 25px;

    }



    .integrasi .two-col p {

      font-family: 'Open Sans', sans-serif !important;

      font-size: 14px;

      line-height: 25px;

      font-weight: 500;

    }



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

      background: url('../public/img/assets/smart_safety/footer-goodeva-background.png') no-repeat;

      background-repeat: no-repeat;

      background-size: auto 680px;

      /* padding-bottom: 4rem !important; */

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

    .integrasi .two-col p {
      font-size: 16px !important;
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

  }

  .ml-10pxmin {
    margin-left: -10px;
  }

  .mt-center-header {

    margin-top: 25%;

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

  .header-safety {
    background: url("../public/img/assets/smart_safety/background/background-banner-gss.webp") !important;
  }

  .header-safety span {
    color: #133A72;
  }

  .header-safety .sub-header p {
    color: #ffffff;
  }

  .partner {
    background: #eeeeee;
    overflow: hidden;
  }

  .integrasi {
    background: #f5f5f5;
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
    width: 90%;
  }

  .list-diliput {
    margin-bottom: 4rem;
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

  .realize-zero {
    background: url("../public/img/assets/smart_safety/background/background-realize-zero.webp");
    background-size: cover;
  }

  .predict-fatigue {
    background: #33344A;
  }

  .section-relative {
    position: relative;
    top: 55px;
  }

  .dashboard-smart-safety,
  .section-comments.five-reason {
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

  .img-w75 {
    width: 75%;
  }

  .header-safety .sub-header span {
    background: #E59E24 !important;
    border-radius: 7px !important;
    color: #1E2836;
  }

  .pl-9 {
    padding-left: 9rem;
  }

  .content-feature {
    display: flex;
    align-items: center;
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

  .header-safety {
    padding-top: 4% !important;
    /* padding-left: 5%; */
    /* padding-bottom: 40px; */
  }
</style>

@endsection



@section('js_after')
<!-- to using google maps api -> add the key api -->
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyM6ibmjCcEwkL5T2w8Wvc8rHbj_q0rfg&callback=initMap"></script>

<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
<!-- for use marker clusterer google maps api -->
<script src="{{ asset('public/js/markerclusterer.js') }}"></script>





<script>
  function populateProject(locations) {
    for (var i = 0; i < locations.length; i++) {
      var divToAppend = "<div class='_projectItem'><div class='_pi-img'><img src='" +
        locations[i].circle + "'></div><div class='_pi-txt'><a onclick='markerLabeling(" + i + ")'>" + locations[i].title + "</a></div>";
      $(".mapInfo-body").append(divToAppend);
    }
  }


  function markerLabeling(param) {

    window.map.setCenter(markers[param].position);
    window.map.setZoom(10);
    google.maps.event.trigger(markers[param], 'click');

    // appendDetail(locations, param);
  }

  function createInfoWindow(locations, marker) {

    window.map.setCenter(marker.position);
    window.map.setZoom(7);
    var contentString = "<div class='map_infowindow'>" +
      "<a onclick='appendDetail(" + locations + "," + marker.id + ")'>" +
      marker.title +
      "</a></div>";

    window.infowindow.setContent(contentString);
    window.infowindow.open(map, marker);
    appendDetail(locations, marker.id)
  }

  function getProject(locations, param) {
    return locations[param];
  }

  function appendDetail(locations, param) {

    var data = getProject(locations, param);

    $(".mapInfo-detail").addClass("active");
    $("#mid-program").empty();
    $("#mid-informasi").empty();
    $("#mid_title").text(data.title);

    // data.program.forEach(function(objx, idx) {
    //   for (var akey in objx) {
    //     $("#mid-program").append('<div class="_midp"><label>' + akey + '</label><span id="_midpJudul">' + objx[akey] + '</span></div>');
    //   }
    // });

    // data.informasi.forEach(function(objx, idx) {
    //   for (var akey in objx) {
    //     $("#mid-informasi").append('<div class="_midp"><label>' + akey + '</label><span id="_midpJudul">' + objx[akey] + '</span></div>');
    //   }
    // });




    var windowWidth = $(window).width();

    if (windowWidth <= 585) {
      $("#map-info").slideDown();
    } else {

    }
  }

  /// inisiasi variabel untuk menampung data marker
  var markers = [];
  // var google;

  //// function to show maps
  function initMap(locations) {

    const indonesia = {
      lat: -4.440820,
      lng: 122.195056,
    };


    if ($(window).width() <= 420) {

      // window.map = new google.maps.Map(document.getElementById('map'), {
      window.map = new google.maps.Map(document.getElementById('map-m'), {
        zoom: 4,
        center: indonesia
      });

    } else {

      window.map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: indonesia
      });
    }

    window.infowindow = new google.maps.InfoWindow();

    // console.log(locations);

    let countLocations = 0;
    if (locations) {
      //   console.log('error location length in: '+ locations);
      let countLocations = locations.length;
      for (let i = 0; i < countLocations; i++) {

        // const element = array[i];
        var imageMarker = new google.maps.MarkerImage(locations[i].circle, null, null, null, new google.maps.Size(20, 20));

        // The marker, positioned at Indonesia
        var marker = new google.maps.Marker({
          id: i,
          position: locations[i].location,
          // icon: locations[i].circle,
          icon: imageMarker,
          title: locations[i].title,
          // position: locations,
          map: map,
        });

        marker.addListener('click', function() {
          createInfoWindow(locations, this);
        })

        markers.push(marker);

      }

      // var markerCluster = new MarkerClusterer(map, markers);
      populateProject(locations);
    }

  }

  $(window).load(function () {  
    var data_implement = <?php echo json_encode($text_lang[$default_lang]['section10']['markers']) ?>;
    var locations = data_implement;
    initMap(locations)

    console.log('ready to load');
  });



  $(document).ready(function() {

    
    // console.log(locations);


    // setTimeout(initMap(locations), 5000);




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



<script src="{{asset('public/js/slick.min.js')}}" charset="utf-8"></script>

<script type="text/javascript">
  $('.hslide-area').slick({

    dots: false,

    infinite: true,

    adaptiveHeight: true,



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

  <div class="container-custom wrap"></div>

  <div class="row mx-0 sub-header safety-produk">

    <div class="col-md-5 col-sm-6 col-xs-12  px-tablet-3rem mx-tablet-0 box header-text" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

      <div class="mt-center-header mt-m-10p">
        <span>{{ $text_lang[$default_lang]['section1']['name_product'] }}</span>
      </div>


      <h3 class="my-3 text-white"><?php echo $text_lang[$default_lang]['section1']['title'] ?></h3>

      <p class="text-white"><?php echo $text_lang[$default_lang]['section1']['description'] ?></p>

      <div class="row mb-m-10p">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <a href="{{url('contact')}}" class="btn btn--uji transition-content">
            {{ $text_lang[$default_lang]['section1']['text1'] }}
            <i class="fa fa-chevron-right"></i>
          </a>
          <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat transition-content">
            {{ $text_lang[$default_lang]['section1']['text2'] }}
            <i class="fa fa-whatsapp" style="font-size: 18px !important;"></i>
          </a>
        </div>
      </div>


    </div>

    <div class="col-md-7 col-sm-6 col-xs-12 px-tablet-0  mr-0 box">

      <img class="img-fluid" src="{{ asset('public/img/assets/smart_safety/Goodeva-smart-safety.jpg') }}" alt="">

    </div>

  </div>



  {{-- Section Partner --}}

  {{-- Akhir Section Partner --}}

</section>

<section class="partner pb-4rem" id="partner">

  <div class="container text-center">

    <span>{{ $text_lang[$default_lang]['section2']['title'] }}</span>

    <img class="ml-7percentmin hidden-xs" src="{{asset('public/img/assets/program/healthy/Logo Partner@2x.png')}}" alt="">

    <img class="hidden-md hidden-lg hidden-sm" src="{{asset('public/img/assets/smart_erp/Logo Partner - Responsive@2x.png')}}" alt="">

    <div id="feature-section"></div>

  </div>

</section>

{{-- Akhir Header --}}





{{-- Section realize zero --}}
<section class="realize-zero wrap" id="realize-zero">

  <!-- content desktop -->
  <div class="container mx-auto d-block mb-sm-0 desktop-show">

    <div class="header text-center py-5">

      <span class="text-white">{{ $text_lang[$default_lang]['section3']['name_product'] }}</span>

      <h3 class="text-white pt-2 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section3']['title'] ?></h3>

      <p class="text-white px-sm-0"><?php echo $text_lang[$default_lang]['section3']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-cover" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section3']['image']) }}" alt="">

  </div>


  <!-- content mobile -->
  <div class="container mx-auto d-block mb-sm-0 mobile-show">

    <div class="header text-start py-5">

      <span class="text-white">{{ $text_lang[$default_lang]['section3']['name_product'] }}</span>

      <h3 class="text-white pt-2 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section3']['title'] ?></h3>

      <p class="text-white px-sm-0"><?php echo $text_lang[$default_lang]['section3']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-cover" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section3']['image']) }}" alt="">

  </div>
</section>
{{-- end Section realize zero --}}





{{-- Section fatigue management --}}
<section class="fatigue-management section-relative wrap" id="fatigue-management">

  <!-- fatigue management desktop -->
  <div class="container mx-auto d-block mb-sm-0 desktop-show">

    <div class="header text-center mb-5">

      <h3 class="text-dark pt-2 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section4']['title'] ?></h3>

      <p class="text-dark px-sm-0"><?php echo $text_lang[$default_lang]['section4']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-cover" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section4']['image']) }}" alt="">

  </div>

  <!-- fatigue management mobile -->
  <div class="container mx-auto d-block mb-sm-0 mobile-show">

    <div class="header text-start mb-3">

      <h3 class="text-dark pt-2 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section4']['title'] ?></h3>

      <p class="text-dark px-sm-0"><?php echo $text_lang[$default_lang]['section4']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-cover" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section4']['image']) }}" alt="">

  </div>
</section>
{{-- end Section fatigue management --}}





{{-- Section predict fatigue --}}
<section class="predict-fatigue wrap" id="predict-fatigue">

  <!-- predict fatigue desktop -->
  <div class="container mx-auto d-block mb-sm-0 pt-5 pb-5 desktop-show">

    <div class="header text-center mb-3">

      <h3 class="text-white pt-5 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section5']['title'] ?></h3>

      <p class="text-white px-sm-0"><?php echo $text_lang[$default_lang]['section5']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-cover" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section5']['image']) }}" alt="">

  </div>

  <!-- predict fatigue mobile -->
  <div class="container mx-auto d-block mb-sm-0 pt-5 pb-5 mobile-show">

    <div class="header text-start mb-3">

      <h3 class="text-white pt-4 font-w600 mb-3"><?php echo $text_lang[$default_lang]['section5']['title'] ?></h3>

      <p class="text-white px-sm-0"><?php echo $text_lang[$default_lang]['section5']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-cover" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section5']['image']) }}" alt="">

  </div>
</section>
{{-- end Section predict fatigue --}}





{{-- Section dashboard smart safety --}}

<section class="dashboard-smart-safety wrap pt-3 desktop-show" id="dashboard-smart-safety">

  <!-- dashboard smart safety mobile -->
  <div class="container mx-auto d-block mb-sm-0 section-relative">

    <div class="header text-center mb-5">

      <span>{{ $text_lang[$default_lang]['section6']['name_product'] }}</span>

      <h3 class="mb-3 font-w600"><?php echo $text_lang[$default_lang]['section6']['title'] ?></h3>

      <p class="px-sm-0"><?php echo $text_lang[$default_lang]['section6']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-w75" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section6']['image']) }}" alt="">

  </div>

</section>

<!-- dashboard smart safety mobile -->
<section class="dashboard-smart-safety wrap py-5 mobile-show" id="dashboard-smart-safety">

  <!-- dashboard smart safety mobile -->
  <div class="container mx-auto d-block mb-sm-0">

    <div class="header text-start mb-5">

      <span>{{ $text_lang[$default_lang]['section6']['name_product'] }}</span>

      <h3 class="my-3 font-w600"><?php echo $text_lang[$default_lang]['section6']['title'] ?></h3>

      <p class="px-sm-0"><?php echo $text_lang[$default_lang]['section6']['text1'] ?></p>

    </div>

    <img class="mx-auto d-block img-w75" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section6']['image']) }}" alt="">

  </div>

</section>
{{-- Akhir Section dashboard smart safety --}}





{{-- Section feature apps smart safety --}}
<section class="integrasi feature-apps wrap py-5 bg-sm-abu" id="feature-apps">

  <!-- feature apps smart safety desktop -->
  <div class="container mx-auto d-block mb-sm-0 desktop-show">

    <div class="row two-col bg-sm-abu mt-5 feature1 content-feature" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="500" data-aos-once="true">
      <div class="col-md-6 col-sm-6 col-xs-12 pl-9">


        <span class="">{{ $text_lang[$default_lang]['section7']['text1'] }}</span>

        <h4>{{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}</p>

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 text-center">

        <img src="{{ asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section7']['feature_product']['content1']['cover']) }}" alt="" class="img-w75">

      </div>

    </div>

    <div class="row two-col bg-sm-abu mt-5 feature2 content-feature" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="300" data-aos-once="true">

      <div class="col-md-6 col-sm-6 col-xs-12 text-center">

        <img src="{{ asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section7']['feature_product']['content2']['cover']) }}" alt="" class="img-w75">

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">


        <span class="">{{ $text_lang[$default_lang]['section7']['text1'] }}</span>

        <h4>{{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}</p>

      </div>

    </div>

    <div class="row two-col bg-sm-abu mt-5 feature3 content-feature" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="500" data-aos-once="true">
      <div class="col-md-6 col-sm-6 col-xs-12 pl-9">


        <span class="">{{ $text_lang[$default_lang]['section7']['text1'] }}</span>

        <h4>{{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}</p>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 text-center">

        <img src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section7']['feature_product']['content3']['cover'])}}" alt="" class="img-w75">

      </div>

    </div>

  </div>

  <!-- feature apps smart safety mobile -->
  <div class="container mx-auto d-block mb-sm-0 mobile-show">

    <div class="row two-col feature1 content-feature pb-5" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="500" data-aos-once="true">

      <div class="col-md-12 col-sm-12 col-xs-12 text-center">

        <img src="{{ asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section7']['feature_product']['content1']['cover']) }}" alt="" class="img-w75">

      </div>

      <div class="col-xs-12 col-sm-12 mt-3">
        <span class="">{{ $text_lang[$default_lang]['section7']['text1'] }}</span>

        <h4>{{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}</p>

      </div>

    </div>

    <div class="row two-col feature2 content-feature pb-5" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="300" data-aos-once="true">

      <div class="col-xs-12 col-sm-12 text-center">

        <img src="{{ asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section7']['feature_product']['content2']['cover']) }}" alt="" class="img-w75">

      </div>

      <div class="col-xs-12 col-sm-12 mt-3">


        <span class="">{{ $text_lang[$default_lang]['section7']['text1'] }}</span>

        <h4>{{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}</p>

      </div>

    </div>

    <div class="row two-col feature3 content-feature" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="500" data-aos-once="true">

      <div class="col-xs-12 col-sm-12 text-center">

        <img src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section7']['feature_product']['content3']['cover'])}}" alt="" class="img-w75">

      </div>

      <div class="col-xs-12 col-sm-12 mt-3">

        <span class="">{{ $text_lang[$default_lang]['section7']['text1'] }}</span>

        <h4>{{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}</h4>

        <p>{{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}</p>
      </div>

    </div>

  </div>

</section>
{{-- end Section feature apps smart safety --}}





{{-- section 5 reason --}}
<section class="section-comments five-reason bg--reason-erp py-5 wrap">

  <!-- 5 reason mobile -->
  <div class="desktop-show">

    <div class="row mx-0">

      <div class="col-md-6 col-sm-12 box">

        <div class="row mt-5 mt-sm-0">

          <div class="col-md-12 col-sm-12 text-center pl-sm-0 flow-hide">

            <img src="{{ asset('public/img/assets/smart_safety/5_alasan/image-5-reason-smart-safety.png') }}" alt="" id="img-reason">

          </div>

        </div>

      </div>

      <div class="col-md-6 col-sm-12 box">

        <div class="row pr-5 px-sm-3rem pl-sm-20">

          <div class="col-md-12 pr-5 pr-0 pl-sm-0 pr-sm-2rem">

            <div class="heading-menuname">

              <p>{{ $text_lang[$default_lang]['section8']['title'] }}</p>

            </div>

            <div class="reason--title mb-3">{{ $text_lang[$default_lang]['section8']['main_text'] }}</div>

            <p class="pr-sm-7 mb-2rem mb-sm-0">{{ $text_lang[$default_lang]['section8']['sub_text'] }}</p>


          </div>

          <div class="col-md-12 col-sm-12 pl-sm-0">

            <div class="row mx-3 my-3 mx-sm-0" id="list-reason">

              @for($i_reason = 0; $i_reason < count($text_lang[$default_lang]['section8']['list_reason']); $i_reason++) <!-- comment separator -->
                <div class="col-md-12 col-sm-12 px-3 py-0 list--reason">

                  <button class="btn--transparent reason-1  px-0 text-active text-non-active" data-img="{{ asset('public/img/assets/smart_safety/5_alasan/'.$text_lang[$default_lang]['section8']['list_cover'][$i_reason]) }}">

                    <div class="row mx-0">

                      <div class="col-md-1 col-sm-2 pl-sm-0">
                        <i class="fa fa-circle bg--point-circle-compt active"></i>
                      </div>

                      <div class="col-md-10 col-sm-10 pl-sm-0 pr-0 txt-reason">

                        {{ ucwords($text_lang[$default_lang]['section8']['list_reason'][$i_reason]) }}

                      </div>

                    </div>

                  </button>

                </div>
                @endfor

            </div>

          </div>

        </div>

      </div>
    </div>
  </div>

  <!-- 5 reason mobile -->
  <div class="mobile-show">

    <div class="row mx-0">

      <div class="col-xs-12 col-sm-12 box">

        <div class="row pr-5 px-sm-3rem pl-sm-20">

          <div class="col-md-12 pr-5 pr-0 pl-sm-0 pr-sm-2rem">

            <div class="heading-menuname">

              <p>{{ $text_lang[$default_lang]['section8']['title'] }}</p>

            </div>

            <div class="reason--title mb-3">{{ $text_lang[$default_lang]['section8']['main_text'] }}</div>

            <p class="pr-sm-7 mb-2rem mb-sm-0">{{ $text_lang[$default_lang]['section8']['sub_text'] }}</p>

          </div>

          <div class="col-md-12 col-sm-12 pl-sm-0">

            <div class="row mx-3 my-3 mx-sm-0" id="list-reason">

              @for($i_reason = 0; $i_reason < count($text_lang[$default_lang]['section8']['list_reason']); $i_reason++) <!-- comment separator -->
                <div class="col-md-12 col-sm-12 px-3 py-0 list--reason">

                  <button class="btn--transparent reason-1  px-0 text-active text-non-active" data-img="{{ asset('public/img/assets/smart_safety/5_alasan/'.$text_lang[$default_lang]['section8']['list_cover'][$i_reason]) }}">

                    <div class="row mx-0">

                      <div class="col-md-1 col-sm-2 pl-sm-0">
                        <i class="fa fa-circle bg--point-circle-compt active"></i>
                      </div>

                      <div class="col-md-10 col-sm-10 pl-sm-0 pr-0 txt-reason">

                        {{ ucwords($text_lang[$default_lang]['section8']['list_reason'][$i_reason]) }}

                      </div>

                    </div>

                  </button>

                </div>
                @endfor

            </div>

          </div>

        </div>

      </div>

      <div class="col-xs-12 col-sm-12 box">

        <div class="row mt-5 mt-sm-0">

          <div class="col-xs-12 col-sm-12 text-center flow-hide">

            <img src="{{ asset('public/img/assets/smart_safety/5_alasan/image-5-reason-smart-safety-mobile.png') }}" alt="" id="img-reason">

          </div>

        </div>

      </div>
    </div>

</section>
<!--./section comment -->
{{-- end section 5 reason --}}





{{-- Section why smart safety --}}

<section class="why-smart-safety bg-greyf9 wrap py-5" id="why-smart-safety">

  <!-- why smart safety desktop -->
  <div class="container mx-auto d-block mb-sm-0 desktop-show">

    <div class="header text-center mb-5">

      <h3 class="mb-3 font-w600"><?php echo $text_lang[$default_lang]['section9']['title'] ?></h3>

    </div>

    <img class="mx-auto d-block img-w75" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section9']['image']) }}" alt="">

  </div>

  <!-- why smart safety mobile -->
  <div class="container mx-auto d-block mb-sm-0 mobile-show">

    <div class="header text-center mb-5">

      <h3 class="my-3 font-w600"><?php echo $text_lang[$default_lang]['section9']['title'] ?></h3>

    </div>

    <img class="mx-auto d-block img-w75" src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section9']['image_m']) }}" alt="">

  </div>

</section>
{{-- Akhir Section why smart safety --}}





{{-- Section Info Card --}}

<section class="info-card py-5" id="info-card" style="overflow: hidden">

  <div class="header-fitur-safety px-3 text-center">

    <h4 class="mb-2">{{ $text_lang[$default_lang]['section10']['title'] }}</h4>

    <p class="mb-3"><?php echo $text_lang[$default_lang]['section10']['text1'] ?></p>

  </div>

  <div class="container">

    <div class="row">

      <!-- maps implemented desktop -->
      <div class="col-lg-10col-md-10col-md-offset-1 col-sm-12 desktop-show">

        <div class="card card--custom">

          <!-- to show maps using google maps api -->
          <div id="map"></div>

          {{--<div class="hslide-area" style="display: none;">--}}
          {{----}}
          {{--<div class="slid-content">--}}
          {{----}}
          {{--<img src="{{asset('public/img/assets/smart_safety/Goodeva-smart-safety-mining-fatigue-solution.png')}}" class="card-img-top" alt="...">--}}
          {{----}}
          {{--</div>--}}
          {{----}}
          {{--<div class="slid-content">--}}
          {{----}}
          {{--<img src="{{asset('public/img/assets/smart_safety/Goodeva-smart-safety-mining-technology.png')}}" class="card-img-top" alt="...">--}}
          {{----}}
          {{--</div>--}}
          {{----}}
          {{--</div>--}}

          <div class="card-body p-4 px-tablet-2rem">
            {{-- <svg style="bottom: 53px;left: 1px;position: absolute;border-radius: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#133a72" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,176C640,160,800,96,960,85.3C1120,75,1280,117,1360,138.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg> --}}

            <!-- <div class="container"> -->

            <div class="row">

              @for($i_implement = 1; $i_implement <= count($text_lang[$default_lang]['section10']['list_implement']); $i_implement++) <!-- comment separator when format document -->
                @if($i_implement==1 || ($i_implement % 6)==0)
                <div class="col-md-12 col-lg-12 flex-content flex-justify-content-space-evenly">
                  @endif
                  <div class="content-region flex-content">
                    <img src="{{ url('public/asset-goodeva-lp/marker/'.$text_lang[$default_lang]['section10']['list_implement']['location'.$i_implement]['marker']) }}" alt="marker region" srcset="" style="width: 10%;">
                    &nbsp;
                    <span>
                      {{ $text_lang[$default_lang]['section10']['list_implement']['location'.$i_implement]['regencies'] }}
                    </span>
                  </div>
                  @if(($i_implement % 5) == 0 || $i_implement == count($text_lang[$default_lang]['section10']['list_implement']))
                </div>
                @endif
                @endfor
            </div>



          </div>

        </div>

      </div>


      <!-- maps implemented mobile -->
      <div class="col-sm-12 px-0 mobile-show">

        <div class="card card--custom">

          <!-- to show maps using google maps api -->
          <div id="map-m"></div>

          <div class="card-body p-4 px-tablet-2rem">


            <div class="row">

              @for($i_implement = 1; $i_implement <= count($text_lang[$default_lang]['section10']['list_implement']); $i_implement++) <!-- comment separator when format document -->
                {{--@if($i_implement == 1 || ($i_implement % 3) == 0)--}}
                {{--@endif--}}
                <div class="col-xs-6 col-sm-6 flex-content flex-justify-content-space-evenly">
                  <div class="content-region flex-content">
                    <img src="{{ url('public/asset-goodeva-lp/marker/'.$text_lang[$default_lang]['section10']['list_implement']['location'.$i_implement]['marker']) }}" alt="marker region" srcset="" style="width: 10%;">
                    &nbsp;
                    <span>
                      {{ $text_lang[$default_lang]['section10']['list_implement']['location'.$i_implement]['regencies'] }}
                    </span>
                  </div>
                </div>
                {{--@if(($i_implement % 2) == 0 || $i_implement == count($text_lang[$default_lang]['section10']['list_implement']))--}}
                {{--@endif--}}
                @endfor
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

{{-- Akhir Section Card --}}



{{-- Section Fitur --}}

<section class="fitur-heatlhy py-5" id="fitur-heatlhy">

  <div class="header-fitur text-center px-3">

    <h4 class="mt-0 mb-3 desktop-show">{{ $text_lang[$default_lang]['section11']['title'] }}</h4>

    <h4 class="mt-0 mb-3 mobile-show">{{ $text_lang[$default_lang]['section11']['title'] }}</h4>

    <p><?php echo $text_lang[$default_lang]['section11']['text1'] ?></p>

  </div>

  <div class="container-custom mt-3 desktop-show">

    @for($i_integrate = 1; $i_integrate <= count($text_lang[$default_lang]['section11']['list_integrate']); $i_integrate++) <!-- comment separator -->
      @if($i_integrate==1 || ($i_integrate % 5)==0)
      <div class="row py-3">
        @endif

        <div class="col-md-3 col-sm-6">

          <img src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section11']['list_integrate']['content'.$i_integrate]['image'])}}" alt="">

          <p class="title">{{ $text_lang[$default_lang]['section11']['list_integrate']['content'.$i_integrate]['main_text'] }}</p>

          <p class="desc">{{ $text_lang[$default_lang]['section11']['list_integrate']['content'.$i_integrate]['sub_text'] }}</p>

        </div>
        @if(($i_integrate % 4) == 0 || $i_integrate == count($text_lang[$default_lang]['section11']['list_integrate']))
      </div>
      @endif
      @endfor

  </div>

  <div class="container-custom mt-5 mobile-show">

    <div class="row">
      @for($i_integrate = 1; $i_integrate <= count($text_lang[$default_lang]['section11']['list_integrate']); $i_integrate++) <!-- comment separator -->
        <div class="col-xs-12 col-sm-12">

          <div class="card box px-3">
            <div class="row">
              <div class="col-xs-2 col-sm-2">
                <img src="{{asset('public/img/assets/smart_safety/'.$text_lang[$default_lang]['section11']['list_integrate']['content'.$i_integrate]['image'])}}" alt="" class="img-w25">
              </div>
              <div class="col-xs-10 col-sm-10 pl-0">
                <p class="title">{{ $text_lang[$default_lang]['section11']['list_integrate']['content'.$i_integrate]['main_text'] }}</p>

                <p class="desc">{{ $text_lang[$default_lang]['section11']['list_integrate']['content'.$i_integrate]['sub_text'] }}</p>
              </div>
            </div>
          </div>

        </div>
        @endfor
    </div>

  </div>

</section>

{{-- Akhir Section Fitur --}}





{{-- Section Liputan --}}

<section class="section-compannies liputan py-5 pt-tablet-0 pb-0 bg-greyf9" id="liputan" style="overflow: hidden">

  <div class="header text-center">

    <h4 class="mt-0 mb-2 desktop-show">{{ $text_lang[$default_lang]['section12']['title'] }}</h4>

    <h4 class="mt-0 mb-2 mobile-show">{{ $text_lang[$default_lang]['section12']['title'] }}</h4>

  </div>

  <div class="container-custom">

    <div class="row list-diliput desktop-show">

      {{-- <div class="col-lg-12 col-md-12"> --}}

      <div class="col-lg-2 col-md-2 col-sm-4 ">
        <a href="#">
          {{-- <a href="https://www.liputan6.com/"> --}}
          <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Liputan-6-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-4">
        <a href="#">
          {{-- <a href="https://www.bisnis.com/"> --}}
          <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-4">
        <a href="#">
          {{-- <a href="https://www.beritasatu.com/"> --}}
          <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Berita-satu-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-4">
        <a href="#">
          {{-- <a href="https://www.tempo.co/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Tempo-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-4">
        <a href="#">
          {{-- <a href="https://kumparan.com/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Kumparan-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-4">
        <a href="#">
          {{-- <a href="https://www.tribunnews.com/"> --}}
          <img class="img-responsive desktop-show" src="{{asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png')}}" alt="">
        </a>
      </div>

      {{-- <img class="img-responsive hidden-xs hidden-sm" src="{{asset('public/img/assets/home/diliput-goodeva.png')}}" alt=""> --}}

      {{-- </div> --}}

    </div>

    <div class="row mx-0 mb-4 mobile-show">

      {{-- <div class="col-lg-12 col-md-12"> --}}

      <div class=" col-xs-6 col-sm-6">
        <a href="#">
          {{-- <a href="https://www.liputan6.com/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Liputan-6-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-xs-6 col-sm-6 ">
        <a href="#">
          {{-- <a href="https://www.bisnis.com/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-xs-6 col-sm-6 ">
        <a href="#">
          {{-- <a href="https://www.beritasatu.com/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Berita-satu-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-xs-6 col-sm-6 ">
        <a href="#">
          {{-- <a href="https://kumparan.com/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Kumparan-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-xs-6 col-sm-6 ">
        <a href="#">
          {{-- <a href="https://www.tempo.co/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Tempo-goodeva.png')}}" alt="">
        </a>
      </div>

      <div class="col-xs-6 col-sm-6 ">
        <a href="#">
          {{-- <a href="https://www.tribunnews.com/"> --}}
          <img class="img-responsive" src="{{asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png')}}" alt="">
        </a>
      </div>


      {{-- <img class="hidden-md hidden-lg" src="{{asset('public/img/assets/home/diliput-goodeva-mobile.png')}}" alt=""> --}}

      {{-- </div> --}}

    </div>

  </div>

</section>

{{-- Akhir Section Liputan --}}





{{-- section are you ready --}}
<section class="section-comments bg--safety-trial py-3 pt-sm-5 desktop-show">

  <div class="container my-3">

    <div class="row" data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-aos-duration="1500">

      <div class="col-md-9 col-sm-6 text-left">

        <div class="title--rekrut">{{ $text_lang[$default_lang]['section13']['title'] }}</div>

        <p>{{ $text_lang[$default_lang]['section13']['text1'] }}</p>

        <a href="{{url('contact')}}" class="btn btn--trial">

          <span>{{ $text_lang[$default_lang]['section13']['text_button1'] }} <i class="fa fa-chevron-right"></i></span>

        </a>

        <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">

          <span>{{ $text_lang[$default_lang]['section13']['text_button2'] }} <i class="fa fa-whatsapp"></i></span>

        </a>

      </div>

      <div class="col-md-3 col-sm-6">

        <img src="{{ asset('public/img/assets/Ninja-goodeva.png') }}" class="ninja--img" alt="">

      </div>

    </div>

  </div>

</section>
<!--./section comment -->

<section class="section-comments bg--safety-trial pt-sm-5 mobile-show" style="overflow: hidden">

  <div class="container mt-3">

    <div class="row" data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-aos-duration="1500">

      <div class="col-md-12 text-center">

        <div class="title--rekrut">{{ $text_lang[$default_lang]['section13']['title'] }}</div>

        <p>{{ $text_lang[$default_lang]['section13']['text1'] }}</p>

      </div>

      <div class="col-md-12 text-center col-sm-12">

        <a href="{{url('contact')}}" class="btn btn--trial">

          <span>{{ $text_lang[$default_lang]['section13']['text_button1'] }} <i class="fa fa-chevron-right"></i></span>

        </a>

        <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">

          <span>{{ $text_lang[$default_lang]['section13']['text_button2'] }} <i class="fa fa-whatsapp"></i></span>

        </a>

      </div>

      <div class="col-md-12">

        <img src="{{ asset('public/img/assets/Ninja-goodeva.png') }}" class="ninja--img mt-5" alt="">

      </div>


    </div>

  </div>

</section>
<!--./section comment -->
{{-- section are you ready --}}

@endsection