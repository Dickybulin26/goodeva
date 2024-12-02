@extends('layouts.app-front-bs')
@section('title', 'Goodeva Smart Safety - Cegah Kecelakaan Kerja Akibat Fatigue Dengan Technology & iOT')
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

@section('css_after')
    @php
        $basePathPage = asset('public/img/smartsafety');
        $basePathGeneral = asset('public/img/assets');
    @endphp
    <link rel="stylesheet" href="{{ asset('public/assets_bootstrap/css/additional.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/lity.css') }}">

    <style>
        .fa {
            font-family: 'FontAwesome' !important;
        }

        * {
            font-family: 'Inter', sans-serif !important;
        }

        /* HERO  SLIDER */
        .hero {
            padding: 0;
            display: block;
        }

        .hero-slider .hero-slider-content img.main-image {
            height: 100vh;
            object-fit: cover;
        }

        .hero-slider .hero-slider-content img.char--info-img {
            height: auto !important;
        }

        .hero-slider .slick-dots li.slick-active button:before {
            opacity: 1;
            color: #ffffff;
        }

        .hero-slider .slick-dots li button:before {
            font-size: 9px;
            top: -35px;
            color: #ffffff;
        }

        .hero-slider .hero-slider-content {
            position: relative;
        }

        .hero-slider .hero-slider-content img.left-slider-item {
            position: absolute;
            left: 0;
            bottom: 0;
            top: 10vh;
            height: 455px;
            margin: auto 0;
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .hero p {
            color: #ffffff;
            font-weight: normal;
        }

        .text-hero-banner,
        .text-hero-banner-hp {
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

        .text-hero-banner span {
            font-size: 28px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: 'justify';

        }

        .text-hero-banner h2 {
            margin-top: 0;
            line-height: 121.02px;
            font-weight: 600;
            font-size: 100px;
            margin-bottom: 2rem;
            letter-spacing: 1.3px;
            color: #ffffff;
        }

        .text-hero-banner-hp h2 {
            font-weight: 600;
        }

        .text-hero-banner p {
            font-size: 22px;
            line-height: 30.63px;
        }

        .btn-started-header-new {
            color: #fff;
            border: 1px solid #26A7B5;
            border-radius: 70px;
            padding: 12px 32px;
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

        .btn-started-header-new:hover {
            border: 1px solid #26A7B5;
            background: #ffffff;
            color: #26A7B5;
        }

        #hero-slider-mobile .hero-slider-content .text-hero-banner-hp {
            position: absolute;
            top: 10%;
            left: 5%;
            width: 90%;
        }

        /* /BANNER SLIDER */

        /* HEADLINE */

        .headline {
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #ffffff;
            position: relative;
            overflow: visible;
        }

        .headline .stream-icon {
            position: absolute;
            right: 10%;
            top: -4%;
        }

        .headline .headline-header p.headline-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 10px;
            width: 65%;
        }

        .headline .headline-header p.headline-header-desc {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #7A7A7A;
            margin: 0 auto 3rem !important;
            display: block !important;
            width: 80%;
        }

        .headline .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .headline .headline-area img {
            width: 100%
        }

        /* /HEADLINE */

        /* PARTNER */

        .partner {
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #d0e5fb;
            position: relative;
            overflow: visible;
        }

        .partner .partner-header p.partner-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 10px;
        }

        .partner .partner-header p.partner-header-desc {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #7A7A7A;
            margin-top: 0 !important;
            margin-bottom: 3rem !important;
            display: block !important;
        }

        .partner .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .partner .partner-area img {
            width: 100%
        }

        /* /PARTNER */

        /* DEFINE */

        .define {
            background: #ffffff;
            padding-bottom: 12rem;
        }

        .define .container {
            position: relative;
        }

        .define .define-header p.define-header-title {
            font-weight: 400 !important;
            font-size: 50px;
            color: #15191C;
            line-height: 60px;
            letter-spacing: 0.03px;
            text-align: left;
        }

        .define .define-header p.define-header-desc {
            color: #ffffff;
            font-size: 22px;
            font-weight: 400;
            line-height: 37.5px;
            text-align: left;
        }

        .define .define-header .card-black {
            background: linear-gradient(180deg, #15191C 0%, #15191C 100%);
            background-image: linear-gradient(to bottom right, #4a4a4a, #000000);
            border-radius: 24px;
            width: 50%;
            height: 100%;
            padding: 15px;
            padding-top: 5vh;
            padding-bottom: 30vh;
        }

        .define .define-area {
            margin-top: -150px;
            position: absolute;
            width: 100%;
            z-index: 1;
        }

        .define .define-area .define-frame-image {
            width: 100%;
            height: 280px;
            border-radius: 28px;
        }

        .define .define-area .define-frame-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 28px;
        }

        .define .define-area .col-lg-8.col-md-8 img {
            box-shadow: 30.25px 22.69px 90.76px 0px #00000040;
        }

        /* /DEFINE */

        /* MAIN FEATURE */

        .main-feature {
            background: #ffffff;
            padding-bottom: 0;
        }

        .main-feature .main-feature-odd {
            background: #F1F5F9;
        }

        .main-feature img {
            height: 80px;
            object-fit: contain;
        }

        .main-feature img.img-section {
            height: 85vh !important;
            width: 100% !important;
        }

        .main-feature img.img-section.pos-right {
            object-position: right;
        }

        .main-feature img.img-section.pos-left {
            object-position: left;
        }

        .main-feature-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 85vh;
        }

        .main-feature .main-feature-title {
            color: #15191C;
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
        }

        .main-feature .main-feature-desc {
            color: #15191C;
            font-weight: 400;
            line-height: 42px;
            font-size: 22px;
            letter-spacing: -0.03rem;
            padding-right: 0;
            display: block;
            margin-top: 0;
        }

        .py-main-feature {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        /* /MAIN FEATURE */


        /* WHY */

        .why {
            background: #ffffff;
            padding-bottom: 0;
        }

        .why img.img-section {
            height: 85vh !important;
            width: 100% !important;

        }

        .why-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 85vh;
        }

        .why .why-title {
            color: #15191C;
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            display: block;
            margin: 15px auto;
        }

        .why .why-desc {
            color: #737373;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px;
            padding-right: 0;
            display: block;
            margin-top: 0;
        }

        .why .why-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .why .why-list ul li {
            vertical-align: middle;
        }

        .why .why-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 400;
            line-height: 37.5px;
            text-align: left;
            color: #737373;
        }

        .why img.icon-check {
            height: 3vh;
            margin-right: 10px;
            vertical-align: middle;
        }

        .py-why {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        /* /WHY */

        /* REGION */

        .region {
            background-color: #F1F5F9;
            position: relative;
            overflow: visible;
        }

        .region .region-header p.region-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 10px;
            width: 65%;
        }

        .region .region-header p.region-header-desc {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #7A7A7A;
            margin: 0 auto 3rem !important;
            display: block !important;
            width: 80%;
        }

        .region .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .region .location {
            gap: 3.4rem;
            display: flex;
            justify-content: space-between;
        }

        .region .location .increas-list ul {
            list-style-type: none;
            padding-left: 0;
            color: #737373;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .region .location .increas-list ul li {
            padding-top: 1rem;
        }

        .region .location .increas-list ul li img {
            margin-right: 0.5rem;
            width: 1.5rem;
            height: auto;
        }

        .mapsDiv {
            width: 100%;
            height: 60vh;
        }

        /* /REGION */


        /* SLIDER FEATURE */

        .slider-feature {
            background: #000000;
            padding-top: 0;
            padding-bottom: 0;
        }

        .slider-feature img.img-section {
            height: 90vh !important;
            width: 100% !important;

        }

        .slider-feature .slider-feature-content .slider-image-area {
            width: 100%;
            height: 90vh;
            position: relative
        }

        .slider-feature .slider-feature-content .slider-image-area img {
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

        .slider-feature .slider-image-area .img-section {
            height: 90vh !important;
        }

        .slider-feature .custom-prev-arrow,
        .slider-feature .custom-next-arrow {
            position: absolute;
            background: transparent;
            border: 1px solid #ffffff;
            color: #ffffff;
            border-radius: 70px;
            padding: 15px 30px;
            color: #ffffff;
            z-index: 1;

        }

        .slider-feature .custom-prev-arrow {
            bottom: 25vh;
            right: -16%;
        }

        .slider-feature .custom-next-arrow {
            bottom: 25vh;
            right: -45%;
        }

        .slider-feature .custom-prev-arrow:hover,
        .slider-feature .custom-next-arrow:hover {
            background: #ffffff;
            color: #000000;
            border: 1px solid #ffffff;
        }

        .slider-feature .slider-feature-content-text {
            background: #000000;
            padding: 2vw 3vw;
            height: 90vh !important;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            position: relative;
        }

        .slider-feature .slider-feature-content-text .slider-feature-title {
            color: #ffffff;
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            display: block;
        }

        .slider-feature .slider-feature-content-text .slider-feature-desc {
            color: #ffffff;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px;
            padding-right: 0;
            display: block;
            margin-top: 0;
        }

        .slider-feature .slider-feature-content-text .slider-feature-list {
            font-size: 22px;
            font-weight: 600;
            line-height: 43px;
            text-align: left;
            position: absolute;
            bottom: 26vh;
            left: 20%;
        }

        .slider-feature .slider-feature-content-text .slider-feature-list span {
            color: #ffffff;
        }

        .slider-feature .slider-feature-content-text .slider-feature-list .slide-item-active {
            text-decoration: none !important;
        }

        .slider-feature .slider-feature-content-text .slider-feature-list .slide-item-count {
            color: #737577;
        }

        /* /SLIDER FEATURE */

        /* FAQ */

        .faq {
            background: #ffffff;
            overflow: visible;
            height: 100%;
        }

        .faq .relative {
            position: relative;
        }


        .faq .bg-elipse {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 100%;
        }

        .faq .accordion {
            width: 42vw;
        }

        .faq .faq-content {
            width: 40%;
            height: auto;
            position: absolute;
            left: 3vw;
            top: 50%;
            transform: translateY(-50%);
        }

        .faq .faq-title {
            color: #15191C;
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
            margin: 15px auto;
            width: 40vw;
        }

        .faq .faq-desc {
            color: #000000;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px;
            padding-right: 0;
            display: block;
            margin-top: 0;
        }

        .faq .card {
            border: none !important;
            border-bottom: 1px solid #EDEDED !important;
        }

        .faq .card .card-header {
            background: transparent !important;
            border: none !important;
            padding: 0;
        }

        .faq .btn-header-faq {
            font-family: 'Inter', sans-serif !important;
            font-size: 22px;
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
            text-decoration: none !important;
            background: transparent !important;
            border: none !important;
            width: 100%;
        }

        .faq .btn-header-faq:active,
        .faq .btn-header-faq:focus {
            text-decoration: none !important;
            color: #1D1E25;
        }

        .faq .btn-header-faq:hover {
            text-decoration: none !important;
            color: #3C9EA9;
        }

        .faq .btn-header-faq i {
            background: #F5F5F5;
            color: #1D1E25;
            padding: 10px;
            border-radius: 50%;
            font-size: 13px;
        }

        .faq .accordion .card {
            border-bottom: 1px solid #EDEDED;
            padding-top: 1vh;
            padding-bottom: 1vh;
        }

        .faq .card .card-body {
            padding: 0;
        }

        .faq .accordion .card .card-body p,
        .faq .accordion .card .card-body ul {
            font-size: 18px;
            font-weight: 400;
            line-height: 32px;
            text-align: left;
            color: #7E8492;

        }

        /* /FAQ */

        /* OTHER FEATURE */

        .other-feature {
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #ffffff;
            position: relative;
            overflow: visible;
        }

        .other-feature .other-feature-header p.other-feature-header-title {
            font-weight: 700 !important;
            font-size: 36px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 10px;
            width: 70%;
        }

        .other-feature .other-feature-header p.other-feature-header-desc {
            font-size: 18px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #000000;
            display: block !important;
            margin: 0 auto 3rem !important;
            width: 60%;
        }

        .other-feature .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .other-feature .other-feature-area img {
            width: 100%
        }

        .other-feature .other-feature-area .other-feature-card {
            background: #020609;
            border-radius: 25px;
            margin-bottom: 15px;
            width: 100%;
            height: 30vh;
            padding: 25px;
            margin: 0 10px;
        }

        .other-feature .other-feature-area .other-feature-card .icon-inside {
            width: 20%;
        }

        .other-feature .other-feature-area .other-feature-card p.other-feature-title {
            color: #ffffff;
            font-size: 18px;
            font-weight: 400;
            line-height: 26px;
            text-align: left;
            margin-top: 10px;
            margin-bottom: 0;
            width: 90%;
        }

        .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            margin-top: 10px;
            margin-bottom: 0;
            width: 90%;
        }

        .other-feature .other-feature-area .other-feature-card p.other-feature-title span {
            font-weight: 700;
        }

        /* /OTHER FEATURE */

        /* MEDIA HIGHLIGHT */

        .media-highlight {
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #d0e5fb;
        }

        .media-highlight .media-highlight-header p.media-highlight-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 50px;
            width: 90%;
        }

        .media-highlight .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .media-highlight .card-group img.img-liput {
            width: 100%;
        }

        /* /MEDIA HIGHLIGHT */


        /* TRIAL */

        .trial {
            background: url('{{ $basePathGeneral . '/texture-bg-ninja-goodeva.png' }}') no-repeat;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            position: relative;
            overflow: visible;
        }

        .trial .trial-bg-texture {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            vertical-align: baseline;
        }

        .trial .trial-img-ninja {
            right: 5%;
            bottom: 0;
            margin-top: 0 !important;
            height: 135%;
            width: auto !important;
            position: absolute;
        }

        .trial .trial-area {
            padding-top: 45px;
            padding-bottom: 45px;
            position: relative;
            z-index: 1;
        }

        .trial .trial-content {
            width: 55vw;
        }

        .trial .trial-area .trial-content p.trial-title {
            font-size: 46px;
            color: #ffffff;
            line-height: 60.51px;
            font-weight: 700;
        }

        .trial .trial-btn-group {
            margin-top: 20px;
        }

        .trial .btn {
            line-height: 41px;
        }

        .trial .trial-btn-group .btn--trial {
            background: linear-gradient(102.11deg, #FFFFFF 0.98%, #249FAC 225.08%);
            color: #010205;
            border: 1px solid #F3F3F3;
            height: auto !important;
            border-radius: 70px;
            padding: 0 33px;
        }

        .trial .trial-btn-group .btn--trial i {
            font-size: 13px !important;
        }

        .trial .trial-btn-group .btn--fitur-lihat {
            background: #ffffff;
            border: 1px solid #ffffff;
            color: #010205;
            margin-left: 10px;
            height: auto !important;
            border-radius: 70px;
            padding: 0 33px;
        }

        .trial .trial-btn-group .btn--trial span,
        .trial .trial-btn-group .btn--fitur-lihat span {
            font-size: 18px;
            font-weight: 700;
            line-height: 25.2px;
            letter-spacing: -0.02em;
            text-align: left;
        }

        .trial .trial-btn-group .btn--fitur-lihat i {
            color: #65BD46 !important;
            font-size: 18px !important;
        }

        /* /TRIAL */

        @media only screen and (max-width: 430px) {

            section,
            .section {
                padding: 2rem 0;
            }

            /* mobile nav */
            .mobile-nav-toggle {
                color: #26A7B5;
            }

            /* HERO mobile*/
            /* HERO  SLIDER */
            .hero {
                padding: 0;
                display: block;
            }

            .hero-slider .hero-slider-content img.main-image {
                height: 100vh;
                object-fit: cover;
            }

            .hero-slider .hero-slider-content img.char--info-img {
                height: auto !important;
            }

            .hero-slider .slick-dots li.slick-active button:before {
                opacity: 1;
                color: #ffffff;
            }

            .hero-slider .slick-dots li button:before {
                font-size: 9px;
                top: -35px;
                color: #ffffff;
            }

            .hero-slider .hero-slider-content {
                position: relative;
            }

            .hero-slider .hero-slider-content img.left-slider-item {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -73%);
                height: auto !important;
                margin: auto 0;
                -webkit-transition: all 300ms ease;
                transition: all 300ms ease;
                bottom: unset;
                width: 88%;
            }

            .hero p {
                color: #ffffff;
                font-weight: normal;
            }

            .text-hero-banner,
            .text-hero-banner-hp {
                width: 100%;
                position: absolute;
                top: 75%;
                left: 0;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(0, -50%);
                color: #ffffff;
                font-size: 15px;
                -webkit-transition: all 300ms ease;
                transition: all 300ms ease;
                text-align: center;
            }

            .text-hero-banner span {
                font-size: 22px;
                font-weight: 400;
                line-height: 26.63px;
                text-align: center;
                margin: 1rem auto;
            }

            .text-hero-banner h2 {
                font-size: 40px;
                font-weight: 600;
                line-height: 38.73px;
                letter-spacing: -0.02em;
                text-align: center;
                margin-bottom: 1rem;
                margin-top: 0;
                color: #ffffff;
                text-align: center;
                margin: 1rem auto;
            }

            .text-hero-banner-hp h2 {
                font-weight: 600;
                text-align: center;
            }

            .text-hero-banner p {
                font-size: 22px;
                line-height: 30.63px;
                text-align: center;
            }

            .btn-started-header-new {
                color: #fff;
                border: 1px solid #26A7B5;
                border-radius: 70px;
                padding: 10px 29px;
                text-transform: none;
                background: #26A7B5;
                display: flex;
                width: 50%;
                font-size: 16px;
                letter-spacing: -2%;
                font-weight: 700;
                justify-content: space-between;
                align-items: center;
                flex-wrap: nowrap;
                transform: translate(50%, 0);
                margin-top: 2rem;
            }

            .btn-started-header-new:hover {
                border: 1px solid #26A7B5;
                background: #ffffff;
                color: #26A7B5;
            }

            #hero-slider-mobile .hero-slider-content .text-hero-banner-hp {
                position: absolute;
                top: 10%;
                left: 5%;
                width: 90%;
            }

            /* END BANNER SLIDER */

            /* HEADLINE */
            .headline .headline-header p.headline-header-title {
                font-size: 28px;
                font-weight: 700;
                line-height: 36.6px;
                letter-spacing: -0.03em;
                text-align: center;
                color: #15191C;
                margin: 20px auto;
                width: 100%;
            }

            .headline .headline-header p.headline-header-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 21px;
                text-align: center;
                color: #7A7A7A;
                margin: 0 auto 2rem !important;
                display: block !important;
                width: 100%;
            }

            /* END HEADLINE */

            /* PARTNER */

            .partner {
                background: url('{{ $basePathGeneral . '/background-noise.png' }}');
                background-color: #d0e5fb;
                position: relative;
                overflow: visible;
            }

            .partner .stream-icon {
                position: absolute;
                right: 10%;
                top: -8%;
            }

            .partner .partner-header p.partner-header-title {
                font-size: 28px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: center;
                color: #15191C;
                margin: 0 0 1rem;
            }

            .partner .partner-header p.partner-header-desc {
                font-size: 16px;
                font-weight: 400;
                line-height: 24.63px;
                text-align: center;
                color: #7A7A7A;
                margin-top: 0 !important;
                margin-bottom: 3rem !important;
                display: block !important;
            }

            .partner .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }

            .partner .partner-area img {
                width: 100%
            }

            /* /PARTNER */

            /* DEFINE mobile */
            /** card-benifit */
            .define {
                background-color: #f8f8f8;
                padding: 1rem 0;
            }

            .define .title-service h2 {
                font-family: "Inter", sans-serif;
                font-size: 18px;
                font-weight: 400;
                line-height: 27px;
                text-align: left;
                padding: 0;
                color: #000;
                transform: none;
                position: relative;
            }

            .define .title-service p {
                font-family: "Inter", sans-serif;
                color: #fff;
                font-size: 15px;
                font-weight: 400;
                line-height: 24px;
                text-align: center;
            }

            .define .card-hp {
                width: 100%;
                height: auto;
                border-radius: 1rem;
                transition: transform 0.5s;
                border: none !important;
                margin-bottom: 2rem;
                position: relative;
            }

            .define .card-hp .card-img-top {
                width: 100%;
                height: 18rem;
                object-fit: cover;
                border-radius: 1rem;
                object-position: 100% 45px;
            }

            .define .card-body {
                position: absolute;
                color: #fff;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 1rem;
                font-size: 12px;
                top: 0;
                /* border-radius: 1rem; */
                background-image: linear-gradient(to bottom right, #4a4a4a, #000000);
                height: 6rem;
                border-radius: 1rem 1rem 0 0;
                margin: 0;
            }

            .define .card-title {
                padding-top: 1rem;
                font-family: "Inter", sans-serif;
                font-size: 16px;
                font-weight: 400;
                line-height: 24px;
                text-align: left;
            }

            /* END DEFINE */

            /* Main Feature */
            .main-feature {
                background-color: #F5F6FA;
            }

            /* .main-feature .slick-slide {
                margin: 0 10px;
            } )

            /* .main-feature .slick-list {
                margin: 0 -10px;
            } */

            .main-feature .slick-dots {
                display: flex;
                justify-content: center;

                margin: 0;
                padding: 1rem 0;

                list-style-type: none;

                li {
                    margin: 0 0.25rem;
                }

                button {
                    display: block;
                    width: 1rem;
                    height: 1rem;
                    padding: 0;

                    border: none;
                    border-radius: 100%;
                    background-color: #d9d9d9;
                    text-indent: -9999px;
                }

                li.slick-active button {
                    background-color: #249FAC;
                }

            }

            .main-feature img.img-section {
                height: 255px !important;
                width: 100% !important;
            }

            .main-feature .card-feature-area {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }

            .main-feature-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: auto;
            }

            .main-feature .card {
                width: 94vw !important;
                height: auto;
                border-radius: 1rem;
                transition: transform 0.5s;
                border: none !important;
                margin-bottom: 2rem;
                position: relative;
                padding: 0;
                margin-left: 3vw !important;
                margin-right: 3vw !important;
            }

            .main-feature .card .main-feature-title {
                font-size: 18px;
                font-weight: 600;
                line-height: 23.4px;
                letter-spacing: -0.03em;
                text-align: center;
                color: #15191C;
                display: block;
            }

            /* .main-feature .card a p {
                            font-size: 14px;
                            font-weight: 400;
                            line-height: 24.46px;
                            letter-spacing: -0.03em;
                            text-align: center;
                            color: #15191C;
                            display: block;
                            margin-top: 0;
                        } */

            .main-feature .main-feature-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 22px;
                letter-spacing: -0.03em;
                text-align: justify;
                color: #15191C;
                padding-right: 0;
                display: block;
                margin-top: 0;
            }

            .main-feature .modal.show .modal-dialog {
                transform: translate(0%, 25%);
            }

            .main-feature .modal .main-feature-title {
                font-size: 20px;
                font-weight: 600;
                line-height: 30px;
                letter-spacing: -0.03em;
                text-align: left;
                color: #15191C;
                display: block;
            }

            /* END Main Feature */

            /* MEDIA HIGHLIGHT */

            .media-highlight .media-highlight-header p.media-highlight-header-title {
                font-size: 24px;
                font-weight: 600;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: center;
                color: #15191C;
                margin: 0 auto 20px;
                width: 90%;
            }

            /* END MEDIA HIGHLIGHT */

            /* WHY mobile */
            .why img.img-section {
                height: auto !important;
                width: 100% !important;
            }

            .why-content {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                height: auto;
            }

            .why .why-title {
                font-weight: 700;
                font-size: 24px;
                line-height: 28.8px;
                color: #15191C;
                display: block;
                margin: 15px auto;
            }

            .why .why-desc {
                color: #737373;
                font-weight: 400;
                line-height: 24.46px;
                font-size: 14px;
                padding-right: 0;
                display: block;
                margin-top: 0;
            }

            .why .why-list li {
                font-size: 14px;
                font-weight: 400;
                line-height: 21px;
                text-align: left;
                margin-bottom: 10px;
                color: #737373;
                align-items: center;
                display: flex;
            }

            /* END WHY mobile */

            /* FAQ */

            .faq {
                background: #ffffff;
                overflow: visible;
                height: 100%;
            }

            .faq .relative {
                position: relative;
            }

            .faq .bg-elipse {
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                height: 100%;
            }

            .faq .accordion {
                width: 100%;
            }

            .faq .faq-content {
                width: 100%;
                height: auto;
                position: relative;
                left: auto;
                top: 0;
                transform: none !important;
            }

            .faq .faq-title {
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.02em;
                text-align: left;
                display: block;
                color: #15191C;
                margin: 15px auto;
                width: 100%;
            }

            .faq .faq-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 24.46px;
                text-align: left;
                padding-right: 0;
                display: block;
                color: #000000;
                margin-top: 0;
            }

            .faq .card {
                border: none !important;
                border-bottom: 1px solid #EDEDED !important;
            }

            .faq .card .card-header {
                background: transparent !important;
                border: none !important;
                padding: 0;
            }

            .faq .btn-header-faq {
                font-family: 'Inter', sans-serif !important;
                font-size: 16px;
                font-weight: 600;
                line-height: 24.46px;
                text-align: left;
                color: #1D1E25;
                padding: 20px 0;
                white-space: normal;
                position: relative;
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 3vw;
                text-decoration: none !important;
                background: transparent !important;
                border: none !important;
                width: 100%;
            }

            .faq .btn-header-faq:active,
            .faq .btn-header-faq:focus {
                text-decoration: none !important;
                color: #1D1E25;
            }

            .faq .btn-header-faq:hover {
                text-decoration: none !important;
                color: #3C9EA9;
            }

            .faq .btn-header-faq i {
                background: #F5F5F5;
                color: #1D1E25;
                padding: 10px;
                border-radius: 50%;
                font-size: 13px;
            }

            .faq .accordion .card {
                border-bottom: 1px solid #EDEDED;
                padding-top: 1vh;
                padding-bottom: 1vh;
            }

            .faq .card .card-body {
                padding: 0;
            }

            .faq .accordion .card .card-body p {
                font-size: 14px;
                font-weight: 400;
                line-height: 21px;
                text-align: left;
                color: #7E8492;
            }

            /* END FAQ */

            /* REGION */

            .region {
                background-color: #F1F5F9;
                position: relative;
                overflow: visible;
            }

            .region .region-header p.region-header-title {
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: center;
                color: #15191C;
                margin: 20px auto;
                width: 100%;
            }

            .region .region-header p.region-header-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 24.46px;
                letter-spacing: -0.03em;
                text-align: center;
                color: #15191C;
                margin-bottom: 1rem;
                display: block !important;
                width: 100%;
            }

            .region .location {
                gap: 3.4rem;
                display: flex;
                justify-content: space-between;
            }

            .region .location .increas-list ul {
                list-style-type: none;
                padding-left: 0;
                color: #737373;
                margin-top: 2rem;
                margin-bottom: 2rem;
            }

            .region .location .increas-list ul li {
                padding-top: 1rem;
            }

            .region .location .increas-list ul li img {
                margin-right: 0.5rem;
                width: 1.5rem;
                height: auto;
            }

            .mapsDiv {
                width: 100%;
                height: 200px;
            }

            /* /REGION */

            /* OTHER FEATURE */

            .other-feature .other-feature-area .row .col {
                padding: 0;
            }

            .other-feature .other-feature-header p.other-feature-header-title {
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.02em;
                text-align: center;
                color: #15191C;
                margin: 20px auto;
                width: 100%;
            }

            .other-feature .other-feature-header p.other-feature-header-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 20.63px;
                text-align: center;
                color: #000000;
                display: block !important;
                margin: 0 auto 3rem !important;
                width: 100%;
            }

            /* /OTHER FEATURE */
            /* other feature mobile */
            .other-feature .other-feature-area .title-service h2 {
                font-family: "Inter", sans-serif;
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.02em;
                text-align: center;
                color: #000;
                padding-right: 0;
                padding-left: 0;
            }

            .other-feature .other-feature-area .title-service p {
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 24.46px;
                text-align: center;
                color: #000;
                margin-top: 1rem;
                padding-left: 3rem;
                padding-right: 3rem;
            }

            .other-feature .other-feature-area .card {
                width: 100%;
                height: 9rem;
                border-radius: 1rem;
                transition: transform 0.5s;
            }

            .other-feature .other-feature-area .card-deck {
                gap: 1rem;
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                align-items: center;
                justify-content: center;
                align-content: center;
            }

            .other-feature .other-feature-area .card-body {
                position: absolute;
                color: #fff;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 1rem;
                background: #111c25;
                font-size: 12px;
                top: 0;
                border-radius: 1rem;
                display: flex;
                gap: 1rem;
                align-items: start;
            }

            .other-feature .other-feature-area .card-deck .card-logo {
                width: 4rem;
                object-fit: contain;
            }

            .other-feature .other-feature-area .card-body .card-title {
                width: 73%;
            }

            .other-feature .other-feature-area .card-body p {
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 21.74px;
                text-align: left;
            }

            /* /other feature */

            /* slider feature */
            .slider-feature {
                padding: 0 !important;
            }

            .slider-feature .mobile-show {
                background-color: #15191c;
            }

            .slider-feature .mobile-show img {
                width: 100%;
                height: 30vh;
                background-size: cover;
                position: relative;
                padding: 0;
                color: #fff;
                object-fit: cover;
            }

            .slider-feature .mobile-show .container {
                z-index: 5 !important;
                padding-top: 2rem;
            }

            .slider-feature .mobile-show h1 {
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: left;
                color: #fff;
            }

            .slider-feature .mobile-show .company-name {
                font-size: 18px;
                font-weight: 1;
                letter-spacing: 3px;
                color: #fff;
            }

            .slider-feature .mobile-show h2 {
                color: #fff;
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 500;
                line-height: 21px;
                text-align: left;
                padding-right: 3rem;
            }

            .slider-feature .mobile-show .benifit-nav {
                display: flex !important;
                align-items: center !important;
                margin-bottom: 2rem;
                justify-content: center;
            }

            .slider-feature .mobile-show .corousel-nav {
                display: flex !important;
                text-align: center;
                align-items: center;
                padding: 5px 28px;
                border-radius: 30px;
                transition: ease-in-out 0.3s;
                color: #fff;
                border: #fff 1px solid;
                margin-left: 1rem;
                margin-right: 1rem;
                margin-top: 2rem;
            }

            .slider-feature .mobile-show .corousel-nav:hover {
                background: #fff;
                color: #000;
            }

            .slider-feature .mobile-show .corousel-nav span {
                font-size: 20px;
                text-align: center;
            }

            .slider-feature .mobile-show .benifit-nav p {
                margin-top: auto;
                margin-right: 1rem;
                margin-left: 1rem;
            }

            .slider-feature .mobile-show .benifit-nav p u {
                color: #fff;
            }

            .slider-feature .mobile-show .text-salestrace-benifit {
                display: flex;
            }

            /* END Slider Feature */

            /* TRIAL */

            .trial {
                background: url('{{ $basePathGeneral . '/texture-bg-ninja-goodeva.png' }}') no-repeat;
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                position: relative;
                overflow: visible;
                height: 40rem;
            }

            .trial .trial-bg-texture {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                vertical-align: baseline;
            }

            .trial .trial-img-ninja {
                right: 0;
                bottom: 0;
                margin-top: 0 !important;
                height: 51%;
                width: auto !important;
                position: absolute;
            }

            .trial .trial-area {
                padding-top: 45px;
                padding-bottom: 45px;
                position: relative;
                z-index: 1;
            }

            .trial .trial-content {
                width: 100%;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 36px;
                font-weight: 700;
                line-height: 43.57px;
                text-align: center;
                color: #ffffff;
            }

            .trial .trial-btn-group {
                margin-top: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 1rem;
            }

            .trial .btn {
                line-height: 41px;
            }

            .trial .trial-btn-group .btn--trial {
                background: linear-gradient(102.11deg, #FFFFFF 0.98%, #249FAC 225.08%);
                color: #010205;
                border: 1px solid #F3F3F3;
                height: auto !important;
                border-radius: 70px;
                padding: 0 20px;
                width: 100%;
            }

            .trial .trial-btn-group .btn--trial i {
                font-size: 13px !important;
                margin-left: 1rem !important;
            }

            .trial .trial-btn-group .btn--fitur-lihat {
                background: #ffffff;
                border: 1px solid #ffffff;
                color: #010205;
                height: auto !important;
                border-radius: 70px;
                padding: 0px 20px;
                width: 100%;
                margin: unset;
            }

            .trial .trial-btn-group .btn--trial span,
            .trial .trial-btn-group .btn--fitur-lihat span {
                font-size: 12px;
                font-weight: 700;
                line-height: 25.2px;
                letter-spacing: -0.02em;
                text-align: left;
            }

            .trial .trial-btn-group .btn--fitur-lihat i {
                color: #65BD46 !important;
                font-size: 15px !important;
            }

            /* /TRIAL */

        }

        @media only screen and (max-width: 400px) {

            /* other-feature */
            .other-feature .other-feature-area .card-body .card-title {
                width: 90%;
            }

            /* END other-feature */

            /* define */
            .define .title-service h2 {
                font-family: "Inter", sans-serif;
                font-size: 16px;
                font-weight: 400;
                line-height: 24px;
                text-align: left;
                padding: 0;
                color: #000;
                transform: none;
                position: relative;
            }

            .define .title-service p {
                font-family: "Inter", sans-serif;
                color: #fff;
                font-size: 13px;
                font-weight: 400;
                line-height: 21px;
                text-align: center;
            }

            /* end define */

            /* trial */
            .trial .trial-area .trial-content p.trial-title {
                font-size: 36px;
                font-weight: 700;
                line-height: 43.57px;
                text-align: center;
                color: #ffffff;
                margin-bottom: 3rem;
            }

            .trial .trial-img-ninja {
                right: 0;
                bottom: 0;
                margin-top: 0 !important;
                height: 45%;
                width: auto !important;
                position: absolute;
            }
        }


        @media only screen and (max-width: 320px) {

            /* HERO */

            .hero-slider .hero-slider-content img.left-slider-item {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -73%);
                height: auto !important;
                margin: auto 0;
                -webkit-transition: all 300ms ease;
                transition: all 300ms ease;
                bottom: unset;
                width: 80%;
            }


            .text-hero-banner span {
                font-size: 18px;
                font-weight: 400;
                line-height: 26.63px;
                text-align: center;
                margin: 1rem auto;
            }


            .text-hero-banner,
            .text-hero-banner-hp {
                width: 100%;
                position: absolute;
                top: 80%;
                left: 0;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(0, -50%);
                color: #ffffff;
                font-size: 15px;
                -webkit-transition: all 300ms ease;
                transition: all 300ms ease;
                text-align: center;
            }


            .text-hero-banner h2 {
                font-size: 33px;
                font-weight: 600;
                line-height: 38.73px;
                letter-spacing: -0.02em;
                text-align: center;
                margin-bottom: 1rem;
                margin-top: 0;
                color: #ffffff;
                text-align: center;
                margin: 1rem auto;
            }


            .btn-started-header-new {
                color: #fff;
                border: 1px solid #26A7B5;
                border-radius: 70px;
                padding: 10px 16px;
                text-transform: none;
                background: #26A7B5;
                display: flex;
                width: 50%;
                font-size: 14px;
                letter-spacing: -2%;
                font-weight: 700;
                justify-content: space-between;
                align-items: center;
                flex-wrap: nowrap;
                transform: translate(50%, 0);
                margin-top: 1rem;
            }

            /* END HERO */

            /* HEADLINE */
            .headline .headline-header p.headline-header-title {
                font-size: 21px;
                line-height: 25px;
            }

            .headline .headline-header p.headline-header-desc {
                font-size: 12px;
                line-height: 21px;
            }

            /* END HEADLINE */

            /* partner */
            .partner .partner-header p.partner-header-title {
                font-size: 25px;
            }

            .partner .partner-header p.partner-header-desc {
                font-size: 1rem;
            }

            /* END partner */

            /* Define */
            .define .title-service p {
                font-size: 12px;
            }

            .define .card-body {
                height: 7rem;
            }

            /* END Define */

            /* SLIDER-FEATURE */
            .slider-feature .mobile-show img {
                height: 40vh;
            }

            /* END SLIDER-FEATURE */

            /* REGION */
            .region .location .increas-list ul {
                font-size: 12px;
            }

            /* END REGION */

            /* OTHER-FEATURE */
            .other-feature {
                padding: 1px 0;
            }

            .other-feature .card-title {
                font-size: 1rem
            }

            /* END OTHER-FEATURE */

            /* MEDIA-HIGHLIGHT */
            .media-highlight .media-highlight-header p.media-highlight-header-title {
                margin-top: 0 !important;
            }

            /* END MEDIA-HIGHLIGHT */

            /* TRIAL */
            .trial {
                height: 31rem;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 28px;
                line-height: 36px;
            }

            .trial .trial-btn-group .btn--fitur-lihat {
                padding: 0 10px;
            }

            .trial .trial-img-ninja {
                height: 50%;
            }

            /* END TRIAL */
        }


        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {}

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .mobile-nav-toggle {
                color: #26A7B5;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {}

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {

            /* HERO  SLIDER */
            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 473px;
            }

            .text-hero-banner,
            .text-hero-banner-hp {
                width: 41%;
                top: 50%;
                left: 78%;
            }

            .text-hero-banner span {
                font-size: 22px;
            }

            .text-hero-banner h2 {
                line-height: 65px;
                font-size: 61px;
            }

            .btn-started-header-new {
                padding: 8px 20px;
                font-size: 14px;
            }

            /* /BANNER SLIDER */

            /* HEADLINE */
            .headline .headline-header p.headline-header-title {
                width: 75%;
                font-size: 36px;
            }

            .headline .headline-header p.headline-header-desc {
                font-size: 16px;
            }

            /* /HEADLINE*/
            /* PARTNER */

            .partner .partner-header p.partner-header-title {
                font-size: 36px;
            }

            .partner .partner-header p.partner-header-desc {
                font-size: 18px;
            }

            /* /PARTNER */

            /* DEFINE */
            .define .define-header p.define-header-title {
                font-size: 42px;
                line-height: 51px;
            }

            .define .define-header .card-black {
                width: 70%;
            }

            .define .define-header p.define-header-desc {
                font-size: 20px;
            }

            /* /DEFINE */

            /* MAIN FEATURE */

            .main-feature .main-feature-title {
                font-size: 36px;
                line-height: 42px;
            }

            .main-feature .main-feature-desc {
                font-size: 18px;
            }

            .py-main-feature {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }

            /* /MAIN FEATURE */

            /* SLIDER FEATURE */
            .slider-feature .custom-prev-arrow,
            .slider-feature .custom-next-arrow {
                padding: 6px 24px;
            }

            .slider-feature .custom-prev-arrow {
                bottom: 16vh;
                right: -19%;
            }

            .slider-feature .custom-next-arrow {
                bottom: 16vh;
                right: -56%;
            }

            .slider-feature .slider-feature-content-text .slider-feature-title {
                font-size: 36px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-desc {
                font-size: 18px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 24%;
                bottom: 16vh;
            }

            /* /SLIDER FEATURE */

            /* WHY */

            .why-content {
                height: 70vh;
            }

            .why img.img-section {
                height: 70vh !important;
            }

            .why .why-title {
                font-size: 36px;
                line-height: 42px;
            }

            .why .why-desc {
                font-size: 18px;
            }

            .why .why-list li {
                font-size: 16px;
            }

            /* /WHY */

            /* REGION */
            .region .region-header p.region-header-title {
                width: 75%;
                font-size: 36px;
            }

            .region .region-header p.region-header-desc {
                font-size: 16px;
            }

            /* /REGION*/

            /* FAQ */

            .faq .faq-title {
                font-size: 36px;
            }

            .faq .faq-desc {
                font-size: 18px;
                line-height: 31px;
            }

            .faq .btn-header-faq {
                font-size: 18px;
                padding: 12px 0;
                line-height: 24px;
            }

            .faq .accordion .card .card-body p {
                font-size: 15px;
                line-height: 22px;
            }

            /* /FAQ */

            /* OTHER FEATURE */

            .other-feature .other-feature-area .other-feature-card {
                height: 35vh;
            }

            .other-feature .other-feature-header p.other-feature-header-title {
                font-size: 32px;
            }

            .other-feature .other-feature-header p.other-feature-header-desc {
                font-size: 16px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                width: 100%;
                font-size: 14px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
                width: 100%;
                font-size: 12px;
            }

            /* /OTHER FEATURE */

            /* MEDIA HIGHLIGHT */
            .media-highlight .media-highlight-header p.media-highlight-header-title {
                font-size: 36px;
                margin: 0px auto 15px;
            }

            /* /MEDIA HIGHLIGHT */

            /* TRIAL */
            .trial .trial-img-ninja {
                right: 1%;
                height: 130%;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 40px;
            }

            /* /TRIAL */
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {

            /* HERO  SLIDER */
            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 510px;
            }

            .text-hero-banner,
            .text-hero-banner-hp {
                width: 43%;
                top: 50%;
                left: 75%;
            }

            .text-hero-banner span {
                font-size: 28px;
            }

            .text-hero-banner h2 {
                line-height: 82px;
                font-size: 78px;
            }

            .btn-started-header-new {
                padding: 12px 32px;
                font-size: 16px;
            }

            /* /BANNER SLIDER */

            /* HEADLINE */

            .headline .headline-header p.headline-header-title {
                width: 75%;
                font-size: 40px;
            }

            .headline .headline-header p.headline-header-desc {
                font-size: 18px;
            }

            /* /HEADLINE */

            /* PARTNER */

            .partner .partner-header p.partner-header-title {
                font-size: 40px;
            }

            .partner .partner-header p.partner-header-desc {
                font-size: 22px;
            }

            /* /PARTNER */

            /* DEFINE */
            .define .define-header p.define-header-title {
                font-size: 50px;
                line-height: 60px;
            }

            .define .define-header .card-black {
                width: 57%;
            }

            .define .define-header p.define-header-desc {
                font-size: 22px;
            }

            /* /DEFINE */

            /* MAIN FEATURE */

            .main-feature .main-feature-title {
                font-size: 40px;
                line-height: 52px;
            }

            .main-feature .main-feature-desc {
                font-size: 22px;
            }

            .py-main-feature {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            /* /MAIN FEATURE */

            /* SLIDER FEATURE */

            .slider-feature .custom-prev-arrow,
            .slider-feature .custom-next-arrow {
                padding: 12px 28px;
            }

            .slider-feature .custom-prev-arrow {
                bottom: 19vh;
                right: -19%;
            }

            .slider-feature .custom-next-arrow {
                bottom: 19vh;
                right: -54%;
            }

            .slider-feature .slider-feature-content-text .slider-feature-title {
                font-size: 40px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-desc {
                font-size: 22px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 24%;
                bottom: 20vh;
            }

            /* /SLIDER FEATURE */

            /* WHY */

            .why-content {
                height: 85vh;
            }

            .why img.img-section {
                height: 85vh !important;
            }

            .why .why-title {
                font-size: 40px;
                line-height: 52px;
            }

            .why .why-desc {
                font-size: 22px;
            }

            .why .why-list li {
                font-size: 20px;
            }

            /* /WHY */

            /* REGION */

            .region .region-header p.region-header-title {
                width: 75%;
                font-size: 40px;
            }

            .region .region-header p.region-header-desc {
                font-size: 18px;
            }

            /* /REGION */

            /* FAQ */
            .faq .faq-title {
                font-size: 40px;
            }

            .faq .faq-desc {
                font-size: 22px;
                line-height: 37px;
            }

            .faq .btn-header-faq {
                font-size: 22px;
                padding: 20px 0;
                line-height: 34px;
            }

            .faq .accordion .card .card-body p {
                font-size: 18px;
                line-height: 32px;
            }

            /* /FAQ */

            /* OTHER FEATURE */

            .other-feature .other-feature-area .other-feature-card {
                height: 36vh;
            }

            .other-feature .other-feature-header p.other-feature-header-title {
                font-size: 36px;
            }

            .other-feature .other-feature-header p.other-feature-header-desc {
                font-size: 18px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                width: 100%;
                font-size: 18px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
                width: 100%;
                font-size: 14px;
            }

            /* /OTHER FEATURE */

            /* MEDIA HIGHLIGHT */
            .media-highlight .media-highlight-header p.media-highlight-header-title {
                font-size: 40px;
                margin: 0 auto 30px;
            }

            /* /MEDIA HIGHLIGHT */

            /* TRIAL */
            .trial .trial-img-ninja {
                right: 5%;
                height: 135%;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 46px;
            }

            /* /TRIAL */


        }

        @media screen and (min-width: 1280px) {

            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 34vh;
            }

            /* /OTHER FEATURE */
        }

        @media screen and (min-width: 1366px) {

            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 32vh;
            }

            /* /OTHER FEATURE */
        }

        /* DESKTOP 15 INCH */
        @media screen and (min-width: 1490px) {

            /* HERO SLIDER */

            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 583px;
            }

            .text-hero-banner,
            .text-hero-banner-hp {
                width: 43%;
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

            .text-hero-banner h2 {
                font-size: 100px !important;
                line-height: 121.02px;
            }

            .text-hero-banner-hp h2 {
                font-size: 54px !important;
                line-height: 64px;
            }

            .text-hero-banner span {
                font-size: 32px;
            }

            .btn-started-header-new {
                width: 33%;
            }

            /* /HERO SLIDER */

            /* HEADLINE */
            .headline .headline-header p.headline-header-title {
                width: 65%;
                font-size: 40px;
            }

            .headline .headline-header p.headline-header-desc {
                font-size: 20px;
            }

            /* /HEADLINE */

            /* REGION */
            .region .region-header p.region-header-title {
                width: 65%;
                font-size: 40px;
            }

            .region .region-header p.region-header-desc {
                font-size: 20px;
            }

            /* /REGION */

            /* DEFINE */
            .define .define-header .card-black {
                width: 50%;
            }

            /* /DEFINE */

            /* MAIN FEATURE */
            .py-main-feature {
                padding-top: 3.5rem;
                padding-bottom: 3.5rem;
            }

            /* /MAIN FEATURE */

            /* SLIDER FEATURE */

            .slider-feature .custom-prev-arrow,
            .slider-feature .custom-next-arrow {
                padding: 15px 30px;
            }

            .slider-feature .custom-prev-arrow {
                bottom: 25vh;
                right: -16%;
            }

            .slider-feature .custom-next-arrow {
                bottom: 25vh;
                right: -45%;
            }

            .slider-feature .slider-feature-content-text .slider-feature-title {
                font-size: 40px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-desc {
                font-size: 22px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 20%;
                bottom: 26vh;
            }

            /* ENDSLIDER FEATURE */

            /* WHY */
            .why .why-list li {
                font-size: 22px;
            }

            /* /WHY */

            /* OTHER FEATURE */

            .other-feature .other-feature-area .other-feature-card {
                height: 30vh;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                width: 90%;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
                width: 90%;
            }

            /* /OTHER FEATURE */

        }

        /* /DESKTOP 15 INCH */

        /* DESKTOP 16 INCH */
        @media screen and (min-width: 1600px) {

            /* HERO SLIDER */
            .hero-slider .hero-slider-content img.left-slider-item {
                height: 655px;
            }

            /* /HERO SLIDER */

            /* DEFINE */
            .define .define-header .card-black {
                width: 65%;
                padding-bottom: 23vh;
            }

            /* /DEFINE */

            /* MAIN FEATURE */
            .pr-xl-main-feature {
                padding-right: 14vw !important;
            }

            .pl-xl-main-feature {
                padding-left: 14vw !important;
            }

            .main-feature img.img-section {
                height: 60vh !important;
            }

            .main-feature-content {
                height: 60vh;
            }

            /* /MAIN FEATURE */

            /* SLIDER FEATURE */

            .slider-feature img.img-section {
                height: 70vh !important;
            }

            .slider-feature .slider-feature-content .slider-image-area {
                height: 70vh;
            }

            .slider-feature .slider-feature-content-text {
                height: 70vh !important;
            }

            /* /SLIDER FEATURE */

            /* WHY */

            .pl-xl-why {
                padding-left: 14vw !important;
            }

            .why img.img-section {
                height: 56vh !important;
            }

            .why-content {
                height: 56vh;
            }

            /* /WHY */



            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 20vh;
            }

            /* /OTHER FEATURE */

            /* TRIAL */
            .trial .trial-content {
                width: 38vw;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 40px;
                line-height: 55px;
            }

            /* /TRIAL */

        }

        /* END DESKTOP 16 INCH */

        /* DESKTOP 2k */
        @media screen and (min-width: 2550px) {

            /* HERO SLIDER */
            .hero-slider .hero-slider-content img.left-slider-item {
                height: 655px;
            }

            /* /HERO SLIDER */

            /* MAIN FEATURE */
            .pr-xl-main-feature {
                padding-right: 25vw !important;
            }

            .pl-xl-main-feature {
                padding-left: 25vw !important;
            }

            .main-feature img.img-section {
                height: 60vh !important;
            }

            .main-feature-content {
                height: 60vh;
            }

            /* /MAIN FEATURE */

            /* SLIDER FEATURE */

            .slider-feature img.img-section {
                height: 70vh !important;
            }

            .slider-feature .slider-feature-content .slider-image-area {
                height: 70vh;
            }

            .slider-feature .slider-feature-content-text {
                height: 70vh !important;
            }

            /* /SLIDER FEATURE */

            /* WHY */

            .pl-xl-why {
                padding-left: 25vw !important;
            }

            /* /WHY */



            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 17vh;
            }

            /* /OTHER FEATURE */

            /* TRIAL */
            .trial .trial-content {
                width: 30vw;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 40px;
                line-height: 55px;
            }

            /* /TRIAL */

        }

        /* END DESKTOP 2k */
    </style>
@endsection

@section('js_after')
    <script src="{{ asset('public/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('public/js/lity.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/maps.js"></script>
    <script src="https://www.amcharts.com/lib/4/geodata/worldHigh.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <script>
        $(document).ready(function() {
            getMapsIndo();
        })
        $(document).on('click', '.btn-header-faq', function() {
            const icon = $(this).find('.toggle-icon');

            // Toggle icon classes
            if (icon.hasClass('fa-plus')) {
                icon.removeClass('fa-plus').addClass('fa-minus');
            } else {
                icon.removeClass('fa-minus').addClass('fa-plus');
            }
        });

        const slider_contents = @json($text_lang[$default_lang]['section17']['fiturs']);

        $('.slider-feature-content').slick({

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
            $('#slider-feature-title').text(slider_contents['fitur' + (index + 1)]['title']);
            $('#slider-feature-desc').text(slider_contents['fitur' + (index + 1)]['desc']);
            // $('#slider-fitur-title-mobile').text(testimonies['state' + (index + 1)]['statement']);
            // $('#slider-fitur-desc-mobile').text(testimonies['state' + (index + 1)]['name']);
            $('#slide-item-active').text(String(index + 1).padStart(2, '0'));
        }

        // Perbarui konten saat slider berubah
        $('.slider-feature-content').on('afterChange', function(event, slick, currentSlide) {
            updateTestimonyContent(currentSlide);
        });

        // Inisialisasi konten dengan slide pertama
        updateTestimonyContent(0);

        function getMapsIndo() {
            /**
             * ---------------------------------------
             * This demo was created using amCharts 4.
             *
             * For more information visit:
             * https://www.amcharts.com/
             *
             * Documentation is available at:
             * https://www.amcharts.com/docs/v4/
             * ---------------------------------------
             */

            am4core.useTheme(am4themes_animated);

            // Create map instance
            let chart = am4core.create("mapsDiv", am4maps.MapChart);

            // Set map definition
            chart.geodata = am4geodata_worldHigh;

            // Set projection
            chart.projection = new am4maps.projections.Miller();

            // Create map polygon series
            let polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

            // Exclude Antartica
            polygonSeries.exclude = ["AQ"];

            // Make map load polygon (like country names) data from GeoJSON
            polygonSeries.useGeodata = true;

            chart.background.fill = am4core.color("#F1F5F9"); // Ganti dengan warna yang diinginkan
            chart.background.fillOpacity = 1; // Mengatur tingkat opasitas (0-1)

            let zoomLevel = 9; // Default zoom level
            // disable zoom
            chart.maxZoomLevel = 9;
            chart.minZoomLevel = 9;
            chart.seriesContainer.draggable = false;
            chart.seriesContainer.resizable = false;

            if (window.innerWidth >= 1490) {
                let zoomLevel = 12; // Default zoom level
            } else if (window.innerWidth >= 1200) {
                zoomLevel = 8;
            } else if (window.innerWidth >= 992) {
                zoomLevel = 7;
            }

            // Use series data to set custom zoom points for countries
            polygonSeries.data = [{
                "id": "ID",
                "zoomLevel": zoomLevel,
                "zoomGeoPoint": {
                    "latitude": -1.0997529321751927,
                    "longitude": 120.37037959811757,
                }
            }];

            polygonSeries.dataFields.zoomLevel = "zoomLevel";
            polygonSeries.dataFields.zoomGeoPoint = "zoomGeoPoint";

            // Configure series
            let polygonTemplate = polygonSeries.mapPolygons.template;
            polygonTemplate.tooltipText = "{name}";
            polygonTemplate.fill = am4core.color("#74B266");

            // Create hover state and set alternative fill color
            let hs = polygonTemplate.states.create("hover");
            hs.properties.fill = am4core.color("#367B25");

            // Create active state
            let as = polygonTemplate.states.create("active");
            as.properties.fill = am4core.color("#249FAC");

            chart.events.on("ready", function(ev) {
                let target = polygonSeries.getPolygonById("ID");

                // Pre-zoom
                chart.zoomToMapObject(target);

                // Set active state
                setTimeout(function() {
                    target.isActive = true;
                }, 1000);
            });

            // Bind "fill" property to "fill" key in data
            polygonTemplate.propertyFields.fill = "fill";

            // Create image series
            let imageSeries = chart.series.push(new am4maps.MapImageSeries());

            // Create a circle image in image series template so it gets replicated to all new images
            let imageSeriesTemplate = imageSeries.mapImages.template;
            let circle = imageSeriesTemplate.createChild(am4core.Circle);
            circle.radius = 4;
            circle.fill = am4core.color("#FFB14A");
            circle.stroke = am4core.color("#FCCC8E");
            circle.strokeWidth = 2;
            circle.nonScaling = true;
            circle.tooltipText = "{title}";

            // Set property fields
            imageSeriesTemplate.propertyFields.latitude = "latitude";
            imageSeriesTemplate.propertyFields.longitude = "longitude";

            // Add data for the three cities
            imageSeries.data = [{
                    "latitude": -3.316694,
                    "longitude": 114.590111,
                    "title": "Banjarmasin"
                },
                {
                    "latitude": -2.22666700,
                    "longitude": 113.94416700,
                    "title": "Palangkaraya"
                },
                {
                    "latitude": -0.93333,
                    "longitude": 115.06667,
                    "title": "Barito Utara"
                },
                {
                    "latitude": -1.002254,
                    "longitude": 114.365795,
                    "title": "Barunang"
                },
                {
                    "latitude": -0.502106,
                    "longitude": 117.153709,
                    "title": "Samarinda"
                },
                {
                    "latitude": -0.4301913463000565,
                    "longitude": 116.9830857515619,
                    "title": "Tenggarong"
                },
                {
                    "latitude": 0.08644992660983603,
                    "longitude": 116.27164492140341,
                    "title": "Kutai"
                },
                {
                    "latitude": -3.784358037878243,
                    "longitude": 103.53649635679186,
                    "title": "Lahat"
                },
                {
                    "latitude": 0.5671731485819859,
                    "longitude": 117.57153372606953,
                    "title": "Sangata"
                },
                {
                    "latitude": -2.9373576076802403,
                    "longitude": 115.14399692194426,
                    "title": "Rantau"
                },
            ];
        }

        // card feature slider
        $(document).ready(function() {
            $('#card-feature-area').slick({
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
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                        centerMode: true,
                        // slidesToShow: 1,
                        centerPadding: '0',
                    }
                }]
            });
        });
    </script>
@endsection


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
        <!-- versi desktop -->
        <div class="hero-slider-area desktop-show">
            <div class="hero-slider" id="hero-slider">
                <div class="hero-slider-content">
                    <img src="{{ $basePathPage . '/background-hero.png' }}" class="d-block w-100 main-image"
                        alt="">
                    <img src="{{ $basePathPage . '/banner-item-smart-safety.png' }}" class="left-slider-item"
                        alt="">
                    <div class="text-hero-banner">
                        <span class="font-inter">{{ $text_lang[$default_lang]['section1']['name_product'] }}</span>
                        <h2 class="font-inter">
                            {!! $text_lang[$default_lang]['section1']['title'] !!}
                        </h2>
                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                            {{ $text_lang[$default_lang]['section1']['text1'] }}
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- versi mobile -->
        <div class="hero-slider-area mobile-show mt-0">
            <div class="hero-slider" id="hero-slider-mobile">
                <div class="hero-slider-content">
                    <img src="{{ $basePathPage . '/background-hero.png' }}" class="d-block w-100 main-image"
                        alt="">
                    <img src="{{ $basePathPage . '/banner-item-smart-safety-m.png' }}" class="left-slider-item"
                        alt="">
                    <div class="text-hero-banner">
                        <span class="font-inter">{{ $text_lang[$default_lang]['section1']['name_product'] }}</span>
                        <h2 class="font-inter">
                            {!! $text_lang[$default_lang]['section1']['title'] !!}
                        </h2>
                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                            {{ $text_lang[$default_lang]['section1']['text1'] }}
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        {{-- <div class="container">
          <div class="row gy-4">
            
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('public/assets_bootstrap/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <h1>Better Solutions For Your Business</h1>
                <p>We are team of talented designers making websites with Bootstrap</p>
                <div class="d-flex">
                  <a href="#about" class="btn-get-started">Get Started</a>
                  <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
              </div>
          </div>
        </div> --}}

    </section>
    <!-- /Hero Section -->

    <!-- Headline  Section -->
    <section id="headline" class="headline section light-background">
        {{-- <img src="{{ $basePathGeneral . '/stream-icon.svg' }}" alt="stream-goodeva" class="stream-icon hidden-xs"> --}}
        <div class="container">
            <div class="headline-header">
                <p class="font-inter headline-header-title">Worker Fatigue Monitoring to Improve Safety & Productivity
                </p>
                <p class="font-inter headline-header-desc">Goodeva is pioneer of fatigue management systems in
                    Indonesia. Our system is powered by advanced technology including artificial intelligence & iOT
                    wearables Automation.</p>
            </div>
            <div class="headline-area">
                <div class="card-group row mx-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0">
                        <img class="desktop-show" src="{{ $basePathPage . '/headline.svg' }}" alt="">
                        <img class="mobile-show" src="{{ $basePathPage . '/headline-m.svg' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Headline Section -->

    <!-- Partner Section -->
    <section id="partner" class="partner section light-background">
        <div class="container">
            <div class="partner-header">
                <div class="desktop-show">
                    <p class="font-inter partner-header-title">{{ $text_lang[$default_lang]['section2']['title'] }}</p>
                    <p class="font-inter partner-header-desc">{{ $text_lang[$default_lang]['section2']['subtitle'] }}</p>
                </div>
                <div class="mobile-show">
                    <p class="font-inter partner-header-title">{{ $text_lang[$default_lang]['section2']['title'] }}</p>
                    <p class="font-inter partner-header-desc">{{ $text_lang[$default_lang]['section2']['subtitle'] }}</p>
                </div>
            </div>
            <div class="partner-area">
                <div class="card-group row mx-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img class="desktop-show" src="{{ $basePathPage . '/smart-safety-client.svg' }}" alt="">
                        <img class="mobile-show" src="{{ $basePathPage . '/smart-safety-client-m.svg' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /partner Section -->

    <!-- Define Section -->
    <section id="define" class="define section light-background">
        <div class="container">
            <div class="desktop-show">
                <div class="define-header">
                    <div class="row mx-0">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <p class="font-inter define-header-title">{!! $text_lang[$default_lang]['section3']['title'] !!}</p>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card-black">
                                <p class="font-inter define-header-desc">
                                    {{ $text_lang[$default_lang]['section3']['text1'] }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="define-area">
                    <div class="row mx-0">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="define-frame-image">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section3']['image1'] }}"
                                    alt="manage-marketing-1">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="define-frame-image">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section3']['image2'] }}"
                                    alt="manage-marketing-2">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="define-frame-image">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section3']['image3'] }}"
                                    alt="manage-marketing-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-show">
                <div class="title-service text-center fw-bold pt-2">
                    <div class="row">
                        <div class="col-md-7">
                            <h2>
                                {!! $text_lang[$default_lang]['section3']['title'] !!}
                            </h2>
                        </div>
                    </div>
                    <!-- card black -->
                    <div class="card-hp w-100">
                        <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section3']['image4'] }}"
                            alt="manage-marketing-1" class="card-img-top mobile">
                        <div class="card-body">
                            <p class="card-text">
                                {{ $text_lang[$default_lang]['section3']['text1'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Define Section -->

    <!-- Main Feature Section -->
    <section id="main-feature" class="main-feature section light-background">
        <!-- Versi Desktop-->
        <div class="desktop-show">
            {{-- MAIN FEATURE KANAN --}}
            <div class="row mx-0">
                <div class="col-md-6 pl-xl-main-feature px-5 py-main-feature">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}
                        </p>
                    </div>
                </div>
                {{-- MENTOK KANAN GAMBAR --}}
                <div class="col-md-6 pl-5 pr-0 py-main-feature">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content1']['cover'] }}"
                        class="img-section pos-right" alt="">
                </div>
            </div>

            {{-- MAIN FEATURE KIRI --}}
            <div class="row mx-0 main-feature-odd">
                {{-- MENTOK KIRI GAMBAR --}}
                <div class="col-md-6 pr-5 pl-0 py-main-feature">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content2']['cover'] }}"
                        class="img-section pos-left" alt="">
                </div>
                <div class="col-md-6 pr-xl-main-feature px-5 py-main-feature">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- MAIN FEATURE KANAN --}}
            <div class="row mx-0">
                <div class="col-md-6 pl-xl-main-feature px-5 py-main-feature">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}
                        </p>
                    </div>
                </div>
                {{-- MENTOK KANAN GAMBAR --}}
                <div class="col-md-6 pl-5 pr-0 py-main-feature">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content3']['cover'] }}"
                        class="img-section pos-right" alt="">
                </div>
            </div>
        </div>
        <div class="mobile-show">

            <div class="card-feature-area" id="card-feature-area">

                <div class="card">
                    <div class="card-body">
                        <div class="main-feature-content">
                            <h4 class="main-feature-title">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}
                            </h4>
                            <a href="#" class="read-more" type="button" data-bs-toggle="modal"
                                data-bs-target="#Modal1">Read More>></a>
                        </div>
                    </div>
                    <img class="card-img-bottom img-section"
                        src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content1']['cover_m'] }}"
                        alt="Card img">
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="main-feature-content">
                            <h4 class="main-feature-title">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}
                            </h4>
                            <a href="#" class="read-more" type="button" data-bs-toggle="modal"
                                data-bs-target="#Modal2">Read More>></a>
                        </div>
                    </div>
                    <img class="card-img-bottom img-section"
                        src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content2']['cover_m'] }}"
                        alt="Card img">
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <div class="main-feature-content">
                            <h4 class="main-feature-title">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}
                            </h4>
                            <a href="#" class="read-more" type="button" data-bs-toggle="modal"
                                data-bs-target="#Modal3">Read More>></a>
                        </div>
                    </div>
                    <img class="card-img-bottom img-section"
                        src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content3']['cover_m'] }}"
                        alt="Card img">
                </div>


            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="main-feature-title">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}
                            </h4>
                            <p class="main-feature-desc">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}
                            </p>
                            <img class="card-img-bottom img-section"
                                src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content1']['cover_m'] }}"
                                alt="Card img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="main-feature-title">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}
                            </h4>
                            <p class="main-feature-desc">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}
                            </p>
                            <img class="card-img-bottom img-section"
                                src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content2']['cover_m'] }}"
                                alt="Card img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="main-feature-title">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}
                            </h4>
                            <p class="main-feature-desc">
                                {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}
                            </p>
                            <img class="card-img-bottom img-section"
                                src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content3']['cover_m'] }}"
                                alt="Card img">
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="row mx-0">
                <div class="col-md-6 pl-5 pr-0 py-main-feature">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content1']['cover'] }}"
                        class="img-section pos-right" alt="">
                </div>
                <div class="col-md-6 pl-xl-main-feature py-5">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content1']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row mx-0 main-feature-odd">
                <div class="col-md-6 pr-5 pl-0 py-main-feature my-5">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content2']['cover'] }}"
                        class="img-section pos-left" alt="">
                </div>
                <div class="col-md-6 pr-xl-main-feature mb-5">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row mx-0">
                <div class="col-md-6 pl-5 pr-0 py-main-feature my-5">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content3']['cover'] }}"
                        class="img-section pos-right" alt="">
                </div>
                <div class="col-md-6 pl-xl-main-feature mb-5">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content3']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row mx-0 main-feature-odd">
                <div class="col-md-6 pr-5 pl-0 py-main-feature my-5">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content4']['cover'] }}"
                        class="img-section pos-left" alt="">
                </div>
                <div class="col-md-6 pr-xl-main-feature mb-5">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content2']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row mx-0">
                <div class="col-md-6 pl-5 pr-0 py-main-feature my-5">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section7']['feature_product']['content5']['cover'] }}"
                        class="img-section pos-right" alt="">
                </div>
                <div class="col-md-6 pl-xl-main-feature mb-5">
                    <div class="main-feature-content">
                        <h4 class="main-feature-title font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content5']['main_text'] }}</h4>
                        <p class="main-feature-desc font-inter">
                            {{ $text_lang[$default_lang]['section7']['feature_product']['content5']['sub_text'] }}
                        </p>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- /Main Feature Section -->

    <!-- Slider Feature Section -->
    <section id="slider-feature" class="slider-feature section light-background">
        <!-- Versi Desktop-->
        <div class="desktop-show">
            <div class="row mx-0">
                <div class="col-lg-6 col-md-6 px-0">
                    <div class="slider-feature-content">
                        @for ($fitur_slide_i = 1; $fitur_slide_i <= count($text_lang[$default_lang]['section17']['fiturs']); $fitur_slide_i++)
                            <div class="slider-feature-image-area">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section17']['fiturs']['fitur' . $fitur_slide_i]['picture'] }}"
                                    class="img-section" alt="">
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 px-0">
                    <div class="slider-feature-content-text">
                        <h4 class="slider-feature-title font-inter" id="slider-feature-title">

                        </h4>
                        <p class="slider-feature-desc font-inter" id="slider-feature-desc">

                        </p>
                        <div class="slider-feature-list">
                            <span class="slide-item-active" id="slide-item-active">{{ sprintf('%02d', 1) }}</span>
                            <span>/</span>
                            <span class="slide-item-count"
                                id="slide-item-count">{{ sprintf('%02d', count($text_lang[$default_lang]['section17']['fiturs'])) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="bg-salestrace-benifit">
                <div id="salestraceCarouselMobile" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-img">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section17']['fiturs']['fitur1']['picture'] }}"
                                    class="d-block" alt="" />
                            </div>
                            <div class="text-salestrace-benifit">
                                <div class="corusel-caption container">
                                    <h1>{{ $text_lang[$default_lang]['section17']['fiturs']['fitur1']['title'] }}</h1>
                                    <h2>
                                        {{ $text_lang[$default_lang]['section17']['fiturs']['fitur1']['desc'] }}
                                    </h2>

                                    <div class="benifit-nav">
                                        <a href="#" class="corousel-nav scrollto"
                                            data-bs-target="#salestraceCarouselMobile" data-bs-slide="prev">
                                            <span><i class="bi bi-arrow-left"></i></span>
                                        </a>

                                        <p><u>01</u>/03</p>

                                        <a href="#" class="corousel-nav scrollto"
                                            data-bs-target="#salestraceCarouselMobile" data-bs-slide="next">
                                            <span><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-6 col-sm-10">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section17']['fiturs']['fitur2']['picture'] }}"
                                    class="d-block" alt="" />

                            </div>
                            <div class="corusel-caption container">
                                <h1>{{ $text_lang[$default_lang]['section17']['fiturs']['fitur2']['title'] }}</h1>
                                <h2>
                                    {{ $text_lang[$default_lang]['section17']['fiturs']['fitur2']['desc'] }}
                                </h2>
                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#salestraceCarouselMobile" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>02</u>/03</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#salestraceCarouselMobile" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-6 col-sm-10">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section17']['fiturs']['fitur3']['picture'] }}"
                                    class="d-block" alt="" />
                            </div>
                            <div class="corusel-caption container">
                                <h1>{{ $text_lang[$default_lang]['section17']['fiturs']['fitur3']['title'] }}</h1>
                                <h2>
                                    {{ $text_lang[$default_lang]['section17']['fiturs']['fitur3']['desc'] }}
                                </h2>

                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#salestraceCarouselMobile" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>03</u>/03</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#salestraceCarouselMobile" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Slider Feature Section -->


    <!-- Why Section -->
    <section id="why" class="why section light-background">
        <!-- Versi Desktop-->
        <div class="desktop-show">
            {{-- WHY KANAN --}}
            <div class="row mx-0">
                <div class="col-lg-6 col-md-6 pl-xl-why px-5 py-why">
                    <div class="why-content">
                        <h4 class="why-title font-inter">
                            {{ $text_lang[$default_lang]['section8']['main_text'] }}</h4>
                        <p class="why-desc font-inter">
                            {{ $text_lang[$default_lang]['section8']['sub_text'] }}
                        </p>
                        <div class="why-list">
                            <ul>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content1']['main_text'] }}
                                </li>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content2']['main_text'] }}
                                </li>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content3']['main_text'] }}
                                </li>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content4']['main_text'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 px-5 py-why">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section8']['img'] }}"
                        class="img-section" alt="">
                </div>
            </div>
        </div>
        <div class="mobile-show">
            {{-- WHY KANAN --}}
            <div class="row mx-0">
                <div class="col-lg-6 col-md-6">
                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section8']['img'] }}"
                        class="img-section" alt="">
                </div>
                <div class="col-lg-6 col-md-6 pl-xl-why">
                    <div class="why-content">
                        <h4 class="why-title font-inter">
                            {{ $text_lang[$default_lang]['section8']['main_text'] }}</h4>
                        <p class="why-desc font-inter">
                            {{ $text_lang[$default_lang]['section8']['sub_text'] }}
                        </p>
                        <div class="why-list">
                            <ul>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content1']['main_text'] }}
                                </li>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content2']['main_text'] }}
                                </li>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content3']['main_text'] }}
                                </li>
                                <li class="font-inter"><img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                        class="icon-check"
                                        alt="">{{ $text_lang[$default_lang]['section8']['why_product']['content4']['main_text'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Why Section -->

    <!-- Region  Section -->
    <section id="region" class="region section light-background">
        <div class="container">
            <div class="region-header">
                <div class="desktop-show">
                    <p class="font-inter region-header-title">Has Been Implemented In The Mining Region Of Indonesia
                    </p>
                    <p class="font-inter region-header-desc">Smartsafety has been proven in various regions in Indonesia to
                        help companies prevent work accidents towards zero incidents with the help of technology.</p>
                </div>
                <div class="mobile-show">
                    <p class="font-inter region-header-title">Has Been Implemented In The Mining Region Of Indonesia
                    </p>
                    <p class="font-inter region-header-desc">Smartsafety has been proven in various regions in Indonesia to
                        help companies prevent work accidents towards zero incidents with the help of technology.</p>
                </div>

            </div>
            <div class="region-area">
                <div id="mapsDiv" class="mapsDiv"></div>
                <div class="desktop-show">
                    <div class="card-group row mx-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="location">
                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Palangkaraya
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Barito Utara
                                        </li>
                                    </ul>
                                </div>

                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Samarinda
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Barunang
                                        </li>
                                    </ul>
                                </div>

                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Banjarmasin
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Tenggarong
                                        </li>
                                    </ul>
                                </div>

                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Kutai
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Lahat
                                        </li>
                                    </ul>
                                </div>

                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Sangata
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Rantau
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile-show">
                    <div class="card-group row mx-0">
                        <div class="location">
                            <div class="col-xs-3">
                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Palangkaraya
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Barito Utara
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Samarinda
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Barunang
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Banjarmasin
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="increas-list">
                                    <ul>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Tenggarong
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Kutai
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Lahat
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Sangata
                                        </li>
                                        <li>
                                            <img src="{{ $basePathGeneral . '/checklist-icon-green.svg' }}"
                                                class="icon-check" alt="">Rantau
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Region Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">
        <!-- Versi Desktop-->
        <div class="desktop-show relative">
            <img src="{{ $basePathGeneral . '/elipse.png' }}" alt="" class="bg-elipse">
            <div class="faq-content">
                <h4 class="faq-title font-inter">
                    <?php echo $text_lang[$default_lang]['section16']['main_text']; ?>
                </h4>
                <p class="faq-desc font-inter">
                    <?php echo $text_lang[$default_lang]['section16']['sub_text']; ?>
                </p>
            </div>
            <div class="row mx-0">
                <div class="col-lg-6 col-md-6"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="accordion" id="accordionExample">
                        @foreach ($text_lang[$default_lang]['section16']['faq'] as $k => $item)
                            @php
                                $iFaq = $k;
                            @endphp
                            <div class="card">
                                <div class="card-header" id="heading{{ $iFaq }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-header-faq btn-block text-left" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $iFaq }}"
                                            aria-expanded="true" aria-controls="collapse{{ $iFaq }}">
                                            {{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['main_text'] }}
                                            <i class="toggle-icon fa {{ $iFaq == 0 ? 'fa-minus' : 'fa-plus' }} "></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse{{ $iFaq }}" class="collapse {{ $iFaq == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $iFaq }}" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="font-inter">
                                            {!! $text_lang[$default_lang]['section16']['faq'][$iFaq]['sub_text'] !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show relative">
            <div class="container">
                <div class="faq-content">
                    <h4 class="faq-title font-inter">
                        <?php echo $text_lang[$default_lang]['section16']['main_text']; ?>
                    </h4>
                    <p class="faq-desc font-inter">
                        <?php echo $text_lang[$default_lang]['section16']['sub_text']; ?>
                    </p>
                </div>
                <div class="row mx-0">
                    <div class="col-lg-6 col-md-6"></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="accordion" id="accordionExample">
                            @foreach ($text_lang[$default_lang]['section16']['faq'] as $k => $item)
                                @php
                                    $iFaq = $k;
                                @endphp
                                <div class="card">
                                    <div class="card-header" id="heading{{ $iFaq }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-header-faq btn-block text-left" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $iFaq }}"
                                                aria-expanded="true" aria-controls="collapse{{ $iFaq }}">
                                                {{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['main_text'] }}
                                                <i class="toggle-icon fa {{ $iFaq == 0 ? 'fa-minus' : 'fa-plus' }} "></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse{{ $iFaq }}"
                                        class="collapse {{ $iFaq == 0 ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $iFaq }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="font-inter">
                                                {{ $text_lang[$default_lang]['section16']['faq'][$iFaq]['sub_text'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Faq Section -->

    <!-- Other Feature Section -->
    <section id="other-feature" class="other-feature section light-background">
        <div class="container">
            <div class="other-feature-header">
                <div class="desktop-show">
                    <p class="font-inter other-feature-header-title">
                        {{ $text_lang[$default_lang]['section15']['feature_product']['content1']['main_text'] }}</p>
                    <p class="font-inter other-feature-header-desc">
                        {{ $text_lang[$default_lang]['section15']['feature_product']['content1']['sub_text'] }}</p>
                </div>
                <div class="mobile-show">
                    <p class="font-inter other-feature-header-title">
                        {{ $text_lang[$default_lang]['section15']['feature_product']['content1']['main_text'] }}</p>
                    <p class="font-inter other-feature-header-desc">
                        {{ $text_lang[$default_lang]['section15']['feature_product']['content1']['sub_text'] }}</p>
                </div>
            </div>
            <div class="other-feature-area desktop-show">
                <div class="card-group row mx-0 mb-3">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group row mx-0">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- versi mobile --}}
            <div class="other-feature-area mobile-show">
                {{-- <div class="card-group row mx-0 mb-3">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- versi dicky --}}
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content1']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title api">
                                    Open API & <span class="fw-bold">Integrated</span> Dashboard
                                </h5>
                                <p>Apps & Dashboard is already integrated and Open API</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content2']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title monitoring">
                                    <span class="fw-bold">Historical</span> Fatigue Data
                                </h5>
                                <p>Easier & faster investigation with Historical fatigue data.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content3']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title notification">
                                    KPI <span class="fw-bold">Performance</span> Rating
                                </h5>
                                <p>Rating data on the operator has the highest performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content4']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title custom">
                                    <span class="fw-bold">Custom Apps</span> & Dashboard
                                </h5>
                                <p>
                                    Custom smart health apps theme according to company identity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content5']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title custom">
                                    <span class="fw-bold">Historical</span> Data Export
                                </h5>
                                <p>
                                    Manage employee eligibility data easily with the export excel
                                    feature.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content6']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title custom">
                                    <span class="fw-bold">Fatigue</span> Alert
                                </h5>
                                <p>Displays employee data automatically indicating fatigue</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content7']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title custom">
                                    <span class="fw-bold">Integrated</span> with wearables
                                </h5>
                                <p>Displays employee data automatically indicating fatigue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section15']['feature_product']['fill']['content8']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title custom">
                                    <span class="fw-bold">Whitelabel</span> Services
                                </h5>
                                <p>Dashboard & Report can be customized as desired.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Other Feature Section -->

    <!-- Media Highlight Section -->
    <section id="media-highlight" class="media-highlight section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="media-highlight-header">
                    <p class="font-inter media-highlight-header-title">
                        {{ $text_lang[$default_lang]['section12']['title'] }}</p>
                </div>
                <div class="media-highlight-area">
                    <div class="card-group row mx-0">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                                <img class="img-liput"
                                    src="{{ $basePathGeneral . '/home/diliput/Liputan-6-goodeva.png' }}"
                                    alt="liputan-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                                <img class="img-liput"
                                    src="{{ $basePathGeneral . '/home/diliput/Bisnis-com-goodeva.png' }}"
                                    alt="bisnis-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                                <img class="img-liput"
                                    src="{{ $basePathGeneral . '/home/diliput/Berita-satu-goodeva.png' }}"
                                    alt="beritasatu-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                                <img class="img-liput"
                                    src="{{ $basePathGeneral . '/home/diliput/Kumparan-goodeva.png' }}"
                                    alt="kumparan-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                                <img class="img-liput" src="{{ $basePathGeneral . '/home/diliput/Tempo-goodeva.png' }}"
                                    alt="tempo-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                                <img class="img-liput"
                                    src="{{ $basePathGeneral . '/home/diliput/Tribunnews-com-goodeva.png' }}"
                                    alt="tribunnew-goodeva">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="container">
                <div class="media-highlight-header">
                    <p class="font-inter media-highlight-header-title">
                        {{ $text_lang[$default_lang]['section12']['title'] }}
                    </p>
                </div>
                <div class="media-highlight-area">
                    <div class="card-group row mx-0">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                            <a
                                href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Liputan-6-goodeva.png') }}"
                                    alt="liputan-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                            <a
                                href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png') }}"
                                    alt="bisnis-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                            <a
                                href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Berita-satu-goodeva.png') }}"
                                    alt="beritasatu-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                            <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Kumparan-goodeva.png') }}"
                                    alt="kumparan-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                            <a
                                href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Tempo-goodeva.png') }}"
                                    alt="tempo-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                            <a
                                href="https://jakarta.tribunnews.com/2021/11/19/startup-lokal-ciptakan-teknologi-pantau-kesehatan-dan-turunkan-insiden-kecelakaan-kerja">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Tribunnews-com-goodeva.png') }}"
                                    alt="tribunnew-goodeva">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Media Highlight Section -->

    <!-- Trial Section -->
    <section id="trial" class="trial section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="trial-area">
                    <div class="row mx-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 trial-content">
                            <p class="font-inter trial-title">
                                {{ $text_lang[$default_lang]['section13']['title'] }}</p>
                            <div class="trial-btn-group">
                                <a href="{{ url('contact') }}" target="_blank" class="btn btn--trial">
                                    <span>{{ $text_lang[$default_lang]['section13']['text_button1'] }} &nbsp;<i
                                            class="fa fa-arrow-right"></i></span>
                                </a>
                                <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
                                    <span>{{ $text_lang[$default_lang]['section13']['text_button2'] }} &nbsp; <i
                                            class="fa fa-whatsapp"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="container">
                <div class="trial-area">
                    <div class="row mx-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 trial-content">
                            <p class="font-inter trial-title">
                                {{ $text_lang[$default_lang]['section13']['title'] }}</p>
                            <div class="trial-btn-group">
                                <a href="{{ url('contact') }}" target="_blank" class="btn btn--trial">
                                    <span>{{ $text_lang[$default_lang]['section13']['text_button1'] }} &nbsp;<i
                                            class="fa fa-arrow-right"></i></span>
                                </a>
                                <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
                                    <span>{{ $text_lang[$default_lang]['section13']['text_button2'] }} &nbsp; <i
                                            class="fa fa-whatsapp"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ $basePathGeneral . '/bg-ninja-goodeva.png' }}" alt="trial-bg-texure" class="trial-bg-texture">

        <img src="{{ $basePathGeneral . '/ninja-goodeva-new.png' }}" class="trial-img-ninja" al="">
    </section>
    <!-- /Trial Section -->

@endsection
