@extends('layouts.evamedia-front-bs')
@section('title', 'Goodeva Sales Automation - Sales Automation Membantu Resi Penjualan')
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

@section('css_after')
    @php
        $basePathPage = asset('public/img/evamedia');
        $basePathGeneral = asset('public/img/evamedia');
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
            font-family: 'Roboto', sans-serif !important;
        }

        /* HERO  SLIDER */
        .hero {
            padding: 0;
            display: block;
            background: url('{{ $basePathGeneral . '/hero-banner.svg' }}');
            background-color: #ffffff;
            background-size: cover;
            width: 100%;
            position: relative;
            overflow: visible;
        }

        .hero-slider {
            padding-top: 25vh;
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

        .hero-slider img.img-section {
            width: 100%;
            height: 100%;
        }

        .text-hero-banner h2 {
            font-family: 'Georgia', serif !important;
            font-size: 106px !important;
            font-weight: 400;
            line-height: normal !important;
            letter-spacing: -5.3px;
            text-align: left;
            color: #fff;
            margin-bottom: 3vh;
            margin-top: 0;
        }

        .text-hero-banner-hp h2 {
            font-weight: 600;
        }

        .text-hero-banner p {
            font-size: 23.63px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            color: #fff;
            margin-bottom: 3vh;
            width: 35% !important;
        }

        .btn-started-header-new {
            color: #26A7B5;
            border: 1px solid #fff;
            border-radius: 70px;
            padding: 10px 59px !important;
            text-transform: none;
            background: #fff;
            display: flex;
            width: fit-content !important;
            font-family: Inter;
            font-size: 20px !important;
            font-weight: 500;
            line-height: 24.2px;
            text-align: center;
            justify-content: space-between;
            align-items: center;
        }

        .btn-started-header-new:hover {
            border: 1px solid #26A7B5;
            background: #26A7B5;
            color: #fff;
        }

        /* END BANNER SLIDER */

        /* OTHER FEATURE */

        .other-feature {
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #ffffff;
            position: relative;
            overflow: visible;
        }

        .other-feature-area .other-feature-header {
            margin-top: 3rem;
            margin-bottom: 2rem;
        }

        .other-feature-area .other-feature-header p.other-feature-header-title {
            font-size: 15.5px;
            font-weight: 500;
            line-height: 20px;
            text-align: left;
            color: #242424;
            margin: 0 !important;
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
            border-top-right-radius: 35px;
            border-bottom-left-radius: 35px;
            margin-bottom: 15px;
            width: 100%;
            height: 35vh;
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

        /* trending */

        .other-feature-area .other-feature-card {
            margin-bottom: 1rem;
        }

        * span.odd {
            color: #6B6B6B;
        }

        .other-feature-area .other-feature-card .trending-number {
            color: #F2F2F2;
            font-size: 29.25px;
            font-weight: 500;
            line-height: 38px;
            letter-spacing: -0.4480000138282776px;
            text-align: left;
        }

        .other-feature-area .other-feature-card .trending-post-profile p.tranding-name {
            font-family: Roboto;
            font-size: 12.49px;
            font-weight: 500;
            line-height: 16px;
            text-align: left;
            color: #242424;
        }

        .other-feature-area .other-feature-card .trending-title {
            font-size: 15.25px;
            font-weight: 700;
            line-height: 20px;
            text-align: left;
            color: #242424;
        }

        .other-feature-area .other-feature-card .trending-desc {
            font-family: Roboto;
            font-size: 15.25px;
            font-weight: 700;
            line-height: 20px;
            text-align: left;

        }

        .other-feature-area .other-feature-card .trending-date {
            font-size: 12.9px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            color: #6B6B6B;
        }

        /* end trending */


        /* DEFINE */

        .define {
            background: #F1F5F9;
            position: relative;
            overflow: visible;
        }

        .define .stream-icon {
            position: absolute;
            right: 10%;
            top: -8%;
        }

        .define .define-header p.define-header-title {
            font-size: 40px;
            font-weight: 700;
            line-height: 52px;
            letter-spacing: -0.03em;
            text-align: left;

        }

        .define .define-header p.define-header-desc {
            color: #878C91;
            font-size: 22px;
            font-weight: 400;
            line-height: 33px;
            text-align: left;
            margin-left: 10vw;
        }

        /* /DEFINE */

        /* PARTNER */

        .partner {
            background-color: #ffffff;
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

        /* SLIDER FEATURE */

        .slider-feature {
            background: #ffffff;
        }

        .slider-feature img.img-section {
            height: 90vh !important;
            width: 100% !important;

        }

        .slider-feature .slider-feature-content .slider-feature-image-area {
            width: 100%;
            height: 80vh;
            position: relative
        }

        .slider-feature .slider-feature-content .slider-feature-image-area img.img-section {
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
            border-radius: 27px;
        }

        .slider-feature .slider-feature-image-area .img-section {
            height: 80vh !important;
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
            bottom: 5vh;
            left: 3vw;
        }

        .slider-feature .custom-next-arrow {
            bottom: 5vh;
            left: 17vw;
        }

        .slider-feature .custom-prev-arrow:hover,
        .slider-feature .custom-next-arrow:hover {
            background: #ffffff;
            color: #000000;
            border: 1px solid #ffffff;
        }

        .slider-feature .slider-feature-content-text {
            padding: 2vw 3vw;
            height: 100% !important;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            position: absolute;
            width: 100%;
        }

        .slider-feature .slider-feature-content-text .slider-feature-title {
            color: #ffffff;
            font-weight: 600;
            font-size: 50px;
            line-height: 65px;
            display: block;
            letter-spacing: -0.03em;
        }

        .slider-feature .slider-feature-content-text .slider-feature-desc {
            color: #ffffff;
            font-weight: 400;
            line-height: 37px;
            font-size: 22px;
            padding-right: 0;
            display: block;
            margin-top: 0;
            margin-bottom: 26px;
            width: 70%;
        }

        .slider-feature .slider-feature-image-area .slider-feature-logo {
            position: absolute;
            top: 3vw;
            left: 3vw;
            height: 8vh;
        }

        .slider-feature .slider-feature-image-area .btn-slider-feature {
            border: 1px solid #ffffff;
            color: #ffffff;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 13vw;
            border-radius: 70px;
            padding: 12px 32px;
            gap: 5px;
        }

        .slider-feature .slider-feature-image-area .btn-slider-feature:hover {
            border: 1px solid #ffffff;
            color: #000000;
            background: #ffffff;
        }

        .slider-feature .slider-feature-content-text .slider-feature-list {
            font-size: 22px;
            font-weight: 600;
            line-height: 43px;
            text-align: left;
            position: absolute;
            left: 10vw;
            bottom: 6vh;
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

        /* trending */

        .trending {
            background: #fff;
            position: relative;
            overflow: visible;
        }

        .trending .trending-header p.trending-header-title {
            color: #242424;
            margin: 20px auto 30px;
            font-size: 60px;
            font-weight: 700 !important;
            line-height: 40px;
            letter-spacing: -0.02em;
            text-align: center;
        }

        .trending .trending-header p.trending-header-title span.bold-header {
            color: #26A7B5;
        }

        .trending .trending-header p.trending-header-desc {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #7A7A7A;
            margin: 0 auto 3rem !important;
            display: block !important;
            width: 80%;
        }

        .trending .trending-area .nav-trending {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 30px;
            list-style: none;
            gap: 1rem;
        }

        .trending .trending-area .nav-trending .nav-link {
            display: block;
            padding: .2rem 1rem;
            color: #000;
            background-color: #dddddd;
            font-weight: 400;
            font-family: 'Inter', sans-serif !important;
            font-size: 14px !important;
            line-height: 28px;
            text-decoration: none !important;
            border: 1px solid #dddddd;
            border-radius: 70px;
            margin: unset;
        }

        .trending .trending-area .nav-trending .nav-link:hover {
            border: 1px solid #000;
            color: #000;
        }

        .trending .trending-area .nav-trending .nav-link.active,
        .trending .trending-area .nav-trending .show>.nav-link {
            border: 1px solid #000;
            /* background: #26A7B5; */
            color: #000;
            font-weight: 600;
        }

        .trending .trending-area .tab-content {
            margin-top: 20px;
            text-align: center;
        }

        .trending .trending-area .tab-content .tab-pane {
            display: none;
        }

        .trending-area .tab-content .tab-pane.active {
            display: block;
        }

        .trending-area .tab-content .tab-pane .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            justify-content: center;
            flex-wrap: wrap;
        }

        .trending-area .card {
            height: 250px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .trending-area .card img.bg-card {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .trending-area .card:hover img.bg-card {
            transform: scale(1.1);
        }

        .trending-area .card img.logo-card {
            color: #ffffff !important;
            position: absolute;
            top: 15px;
            text-align: left;
            left: 15px;
        }

        .trending-area .card .card-body {
            color: #ffffff !important;
            position: absolute;
            bottom: 20px;
            text-align: left;
            left: 0;
            margin: 0 5%;
            width: 90%;
            padding: 0;
        }

        .trending .trending-post-profile p.trending-name {
            font-size: 12.7px;
            font-weight: 500;
            line-height: 16px;
            text-align: left;
        }

        .trending-area .card .card-body .card-title {
            font-weight: 600;
        }

        .trending .trending-profile-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            object-fit: contain;
        }

        .trending-area .card .card-body p.card-text {
            margin-bottom: 0;
            color: #ffffff !important;
            font-size: 12px;
            line-height: 14.52px;
        }

        .trending-area .btn-more-area {
            margin-top: 20px;
        }

        .trending-area .btn-more-area .btn-more-trending {
            color: #000000;
            font-family: Inter;
            font-size: 22px;
            font-weight: 600;
            line-height: 28px;
            text-align: center;
        }

        .trending-area .btn-more-area .btn-more-trending:hover {
            text-decoration: none;
        }

        .trending-area .tab-content .tab-pane .card-group.add-trending {
            display: none;
            /* Sembunyikan elemen pada awalnya */
        }

        /* /trending */

        /* evamedia-content */

        .evamedia-content {
            margin-top: 5rem;
        }

        .evamedia-content .category-header .category-title {
            font-size: 15.25px;
            font-weight: 500;
            line-height: 20px;
            text-align: left;
            color: #242424;
            margin-left: 1rem;
        }

        .evamedia-content .card {
            border: none;
            position: relative;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .evamedia-content .img-card {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .evamedia-content .card-profile {
            margin-bottom: 1rem;
        }

        .evamedia-content .card .card-profile-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            object-fit: contain;
        }

        .evamedia-content .card .card-profile p.card-profile-name {
            font-size: 12.29px;
            font-weight: 500;
            line-height: 16px;
            text-align: left;
        }

        .evamedia-content .card h5.card-title {
            font-size: 19.06px;
            font-weight: 700;
            line-height: 24px;
            text-align: left;
            color: #242424;
        }

        .evamedia-content .card p.card-text {
            font-size: 15.75px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            color: #6B6B6B
        }

        .evamedia-content .card .card-info {
            font-size: 11.98px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            color: #6B6B6B;
        }

        .evamedia-content .card .card-info .card-category {
            background: #F2F2F2;
            border: 1px solid #F2F2F2;
            padding: 3px 9px;
            border-radius: 100px;
        }

        .evamedia-content .nav-trending {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 30px;
            list-style: none;
            gap: 1rem;
        }

        .evamedia-content .nav-trending .nav-link {
            display: block;
            padding: .2rem 1rem;
            color: #000;
            background-color: #dddddd;
            font-weight: 400;
            font-family: 'Inter', sans-serif !important;
            font-size: 14px !important;
            line-height: 28px;
            text-decoration: none !important;
            border: 1px solid #dddddd;
            border-radius: 70px;
            margin: unset;
        }

        .evamedia-content .nav-trending .nav-link:hover {
            border: 1px solid #000;
            color: #000;
        }

        .evamedia-content .nav-trending .nav-link.active,
        .evamedia-content .nav-trending .show>.nav-link {
            border: 1px solid #000;
            /* background: #26A7B5; */
            color: #000;
            font-weight: 600;
        }

        .evamedia-content .tab-content {
            margin-top: 20px;
            text-align: center;
        }

        .evamedia-content .tab-content .tab-pane {
            display: none;
        }

        .evamedia-content .tab-content .tab-pane.active {
            display: block;
        }

        .evamedia-content hr.category-hr {
            margin-left: 1rem;
        }

        /* end evamedia-content */

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


        /* MOBILE RESPONSIVE */
        @media only screen and (max-width: 430px) {

            section,
            .section {
                padding: 2rem 0;
            }

            /* mobile nav */
            .mobile-nav-toggle {
                color: #26A7B5;
            }

            /* HERO  SLIDER */
            .hero {
                padding: 0;
                display: block;
                background: none;
                background-color: #ffffff;
                position: relative;
                overflow: visible;
                min-height: 0 !important;
            }

            .hero-slider {
                padding-top: 4vh;
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

            .hero-slider img.img-section {
                width: 100%;
                height: 100%;
            }

            .text-hero-banner h2 {
                font-size: 28px;
                font-weight: 800;
                line-height: 35.2px;
                text-align: left;
                color: #242424;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .text-hero-banner p {
                font-size: 14px;
                font-weight: 400;
                line-height: 25.2px;
                text-align: left;
                color: #878C91;
                margin-bottom: 1rem;
            }

            .btn-started-header-new {
                color: #fff;
                border: 1px solid #26A7B5;
                border-radius: 70px;
                padding: 12px 32px;
                text-transform: none;
                background: #26A7B5;
                display: flex;
                width: 100%;
                font-size: 16px;
                letter-spacing: -2%;
                font-weight: 700;
                justify-content: center;
                align-items: center;
                gap: 2rem;
            }

            .btn-started-header-new:hover {
                border: 1px solid #26A7B5;
                background: #ffffff;
                color: #26A7B5;
            }

            /* END BANNER SLIDER */

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
                font-size: 18px;
                font-weight: 400;
                line-height: 26.63px;
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
                height: 10rem;
                border-radius: 1rem;
                transition: transform 0.5s;
            }

            .other-feature .other-feature-area .card-deck {
                gap: 1rem;
                margin-bottom: 2rem;
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                align-items: center;
                justify-content: center;
                align-content: center;
            }

            .other-feature .other-feature-area .card-body {
                font-family: "inter", sans-serif;
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

            .other-feature .other-feature-area .card-body p {
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 21.74px;
                text-align: left;
                margin: 0;
            }

            /* /other feature */

            /* DEFINE */

            .define {
                background: #F1F5F9;
                position: relative;
                overflow: visible;
            }

            .define .stream-icon {
                position: absolute;
                right: 10%;
                top: -8%;
            }

            .define .define-header p.define-header-title {
                font-size: 32px;
                font-weight: 800;
                line-height: 41.6px;
                letter-spacing: -0.03em;
                text-align: left;
                padding-top: 1rem
            }

            .define .define-header p.define-header-desc {
                color: #878C91;
                font-size: 14px;
                font-weight: 500;
                line-height: 21px;
                text-align: left;
                margin: 0;
            }

            /* /DEFINE */

            /* PARTNER */

            .partner {
                background-color: #ffffff;
                position: relative;
                overflow: visible;
                padding: 0;
            }

            .partner .partner-header p.partner-header-title {
                font-size: 32px;
                font-weight: 700;
                line-height: 38.73px;
                text-align: center;
                color: #15191C;
                margin: 20px auto;
                width: 70%;
            }

            .partner .partner-header p.partner-header-desc {
                display: none !important;
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

            /* PROJECT */

            .project {
                background: #F1F5F9;
                position: relative;
                overflow: visible;
            }

            .project .project-header p.project-header-title {
                font-size: 32px;
                font-weight: 900;
                line-height: 38.73px;
                letter-spacing: -0.02em;
                text-align: center;
                color: #242424;
                margin: 2rem auto;
            }

            .project .project-header p.project-header-title span.bold-header {
                color: #26A7B5;
            }

            .project .project-header p.project-header-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 27px;
                text-align: center;
                color: #7A7A7A;
                margin: 0 auto 3rem !important;
                display: block !important;
                width: 100%;
            }

            .project .project-area .nav-project {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: nowrap;
                padding-left: 0;
                margin-bottom: 30px;
                list-style: none;
                flex-direction: row;
                align-content: center;
                justify-content: center;
                align-items: center;
            }

            .project .project-area .nav-project .nav-link {
                display: block;
                padding: 6px 10px;
                color: #959595;
                font-weight: 400;
                font-family: 'Inter', sans-serif !important;
                font-size: 10px;
                line-height: 20px;
                text-decoration: none !important;
                border: 1px solid #B0B0B0;
                border-radius: 70px;
                margin: 0 6px;
            }

            .project .project-area .nav-project .nav-link:hover {
                color: #fff;
                background: #26A7B5;
                cursor: pointer;
            }


            .project .project-area .nav-project .nav-link.active,
            .project .project-area .nav-project .show>.nav-link {
                border: 1px solid #26A7B5;
                background: #26A7B5;
                color: #ffffff;
                font-weight: 600;
            }

            .project .project-area .tab-content {
                margin-top: 20px;
                text-align: center;
            }

            .project .project-area .tab-content .tab-pane {
                display: none;
            }

            .project-area .tab-content .tab-pane.active {
                display: block;
            }

            .project-area .tab-content .tab-pane .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                justify-content: center;
                flex-wrap: wrap;
                gap: 1rem;
            }

            .project-area .card {
                height: 215.85px;
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
                bottom: 20px;
                text-align: left;
                left: 0;
                margin: 0 5%;
                width: 90%;
                padding: 0;
            }

            .project-area .card .card-body .card-title {
                font-weight: 600;
            }

            .project-area .card .card-body p.card-text {
                margin-bottom: 0;
                color: #ffffff !important;
                font-size: 12px;
                line-height: 14.52px;
            }

            .project-area .btn-more-area {
                margin-top: 20px;
            }

            .project-area .btn-more-area .btn-more-project {
                color: #000000;
                font-family: Inter;
                font-size: 22px;
                font-weight: 600;
                line-height: 28px;
                text-align: center;
            }

            .project-area .btn-more-area .btn-more-project:hover {
                text-decoration: none;
            }

            .project-area .tab-content .tab-pane .card-group.add-project {
                display: none;
                /* Sembunyikan elemen pada awalnya */
            }

            /* /PROJECT */

            /* Slider Feature */

            .carousel-item:not(.carousel-item.active) {
                margin-left: 15px;
            }

            .slider-feature .carousel {
                width: 100%;
                height: auto;
                border-radius: 1rem;
            }

            .slider-feature .carousel-inner .carousel-item .carousel-img {
                width: 100%;
                height: 230px;
                object-fit: cover;
                border-radius: 1rem;
            }

            .slider-feature .carousel-item .carousel-caption {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                top: 0;
                padding: 1rem;
                color: white !important;
                text-align: left;
                background-color: #00000076;
                border-radius: 1rem;
            }

            .slider-feature .carousel-item .carousel-caption .carousel-logo {
                width: 4rem;
                height: auto;
            }

            .slider-feature .carousel-item .carousel-caption .kadin-logo {
                width: 2rem;
                height: auto;
            }

            .slider-feature .carousel-item .carousel-caption .carousel-title {
                padding-top: 2rem;
                font-family: "Inter", sans-serif;
                font-size: 24px;
                font-weight: 600;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: left;
                color: #fff
            }

            .slider-feature .carousel-item .carousel-caption .carousel-text {
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 21px;
                text-align: left;
                color: #fff;
            }

            .slider-feature .carousel-item .carousel-caption .btn-see-more {
                font-family: "Inter", sans-serif;
                font-size: 10px;
                font-weight: 700;
                line-height: 14px;
                letter-spacing: -0.02em;
                text-align: left;

                display: inline-block;
                padding: 6px 20px;
                border-radius: 30px;
                transition: ease-in-out 0.3s;
                color: #fff;
                background: transparent;
                border: 2px solid #fff;
            }

            .slider-feature .carousel-item .carousel-caption .btn-see-more:hover {
                background: #fff;
                color: #000;
            }

            .slider-feature .carousel-item .carousel-caption .btn-see-more span {
                padding-right: 20px;
            }

            .slider-feature .benifit-nav {
                display: flex !important;
                align-items: center !important;
                transform: translate(44%, -88%);
            }

            .slider-feature .corousel-nav {
                display: flex !important;
                padding: 1px 15px;
                border-radius: 30px;
                transition: ease-in-out 0.3s;
                color: #fff;
                border: #fff 1px solid;
                text-align: center;
                align-items: center;
                margin-top: 0;
            }

            .slider-feature .corousel-nav:hover {
                background: #fff;
                color: #000;
            }

            .slider-feature .corousel-nav span {
                font-size: 15px;
                text-align: center;
            }

            .slider-feature .benifit-nav p {
                margin-top: 1rem;
                margin-right: 1rem;
                margin-left: 1rem;
                color: #9c9c9c;
                font-size: 10px;
            }

            .slider-feature .benifit-nav p u {
                color: #fff;
            }

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
                height: 50%;
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
                font-size: 28px;
                font-weight: 700;
                line-height: 33.89px;
                text-align: center;
                color: #ffffff;
                margin-bottom: 3rem;
            }

            .trial .trial-btn-group {
                margin-top: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
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

        }

        @media only screen and (max-width: 400px) {

            /* slider feature */
            .slider-feature .carousel-item .carousel-caption .carousel-title {
                padding-top: 2rem;
                font-family: "Inter", sans-serif;
                font-size: 24px;
                font-weight: 600;
                line-height: 20.2px;
                letter-spacing: -0.03em;
                text-align: left;
                color: #fff;
            }

            /* project */
            .project .project-area .nav-project .nav-link {
                display: block;
                padding: 6px 8px;
                color: #959595;
                font-weight: 400;
                font-family: 'Inter', sans-serif !important;
                font-size: 10px;
                line-height: 20px;
                text-decoration: none !important;
                border: 1px solid #B0B0B0;
                border-radius: 70px;
                margin: 0 6px;
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

            section,
            .section {
                padding: 2rem 0;
            }

            /* HERO */
            .hero-slider {
                padding-top: 1rem;
            }

            .text-hero-banner h2 {
                font-size: 25px;
            }

            .btn-started-header-new {
                margin-bottom: 1rem;
                padding: 8px 1rem;
            }

            /* END HERO */

            /* DEFINE */
            .define .define-header p.define-header-title {
                font-size: 22px;
                font-weight: 800;
                line-height: 31.6px;
                letter-spacing: -0.03em;
                text-align: left;
                padding-top: 1rem;
            }

            /* END DEFINE */

            /* partner */
            .partner .partner-header p.partner-header-title {
                font-size: 22px;
                margin: 0 !important;
                line-height: 28px;
                width: 100%;
            }

            /* END partner */

            /* SLIDER-FEATURE */
            .slider-feature .carousel-item .carousel-caption .btn-see-more {
                padding: 6px 10px;
            }

            .slider-feature .corousel-nav {
                padding: 1px 12px;
            }

            /* END SLIDER-FEATURE */

            /* REGION */
            .region .location .increas-list ul {
                font-size: 12px;
            }

            /* END REGION */

            /* OTHER-FEATURE */
            .other-feature {
                padding-bottom: 0 !important;
            }

            .other-feature .card-title {
                font-size: 1rem
            }

            /* END OTHER-FEATURE */

            /* PROJECT */
            .project .project-header p.project-header-title {
                font-size: 30px;
                margin: 0 auto 1rem;
            }

            .project .project-header p.project-header-desc {
                font-size: 13px;
                line-height: 18px;
            }

            .project .project-area .nav-project .nav-link {
                padding: 6px 8px;
                font-size: 8px;
            }

            /* END PROJECT */

            /* TRIAL */
            .trial .trial-btn-group .btn--fitur-lihat {
                padding: 0 10px;
            }

            .trial .trial-img-ninja {
                height: 40%;
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
            .text-hero-banner h2 {
                line-height: 58px;
                font-size: 48px;
            }

            .text-hero-banner p {
                line-height: 24px;
                font-size: 18px;
            }

            .btn-started-header-new {
                padding: 8px 20px;
                font-size: 14px;
            }

            /* /BANNER SLIDER */

            /* OTHER FEATURE */

            .other-feature {
                padding-top: 0;
            }

            .other-feature .other-feature-area .other-feature-card {
                padding: 16px;
            }

            .other-feature .other-feature-area .other-feature-card {
                height: 31vh;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                width: 100%;
                font-size: 14px;
                line-height: 21px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
                font-size: 12px;
                line-height: 16px;
                width: 100%;
            }

            /* END OTHER FEATURE */

            /* DEFINE */
            .define .define-header p.define-header-title {
                font-size: 32px;
                line-height: 42px;
            }

            .define .define-header p.define-header-desc {
                font-size: 18px;
                line-height: 28px;
            }

            /* /DEFINE */

            /* PARTNER */

            .partner .partner-header p.partner-header-title {
                font-size: 36px;
            }

            .partner .partner-header p.partner-header-desc {
                font-size: 18px;
            }

            /* END PARTNER */

            /* SLIDER FEATURE */
            .slider-feature .custom-prev-arrow,
            .slider-feature .custom-next-arrow {
                padding: 6px 24px;
            }

            .slider-feature .custom-prev-arrow {
                bottom: 5vh;
                left: 3vw;
            }

            .slider-feature .custom-next-arrow {
                bottom: 5vh;
                left: 22vw;
            }

            .slider-feature .slider-feature-content-text .slider-feature-title {
                font-size: 36px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-desc {
                font-size: 18px;
                line-height: 28px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 12vw;
                bottom: 4.5vh;
            }

            .slider-feature .slider-feature-image-area .btn-slider-feature {
                width: 17vw;
                padding: 10px 25px;
            }

            /* /SLIDER FEATURE */


            /* PROJECT */
            .project .project-area .nav-project .nav-link {
                font-size: 18px;
            }

            /* /PROJECT */

            /* TRIAL */
            .trial .trial-img-ninja {
                right: 1%;
                height: 130%;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 30px;
                line-height: 42px;
            }

            /* END TRIAL */
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {

            /* HERO  SLIDER */
            .text-hero-banner h2 {
                line-height: 64px;
                font-size: 52px;
            }

            .text-hero-banner p {
                line-height: 26px;
                font-size: 20px;
            }

            .btn-started-header-new {
                padding: 12px 32px;
                font-size: 16px;
            }

            /* END BANNER SLIDER */

            /* OTHER FEATURE */

            .other-feature {
                padding-top: 30px;
            }

            .other-feature .other-feature-area .other-feature-card {
                padding: 18px;
            }

            .other-feature .other-feature-area .other-feature-card {
                height: 35vh;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                width: 100%;
                font-size: 18px;
                line-height: 24px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
                font-size: 14px;
                line-height: 18px;
                width: 100%;
            }


            /* END OTHER FEATURE */


            /* DEFINE */
            .define .define-header p.define-header-title {
                font-size: 40px;
                line-height: 52px;
            }

            .define .define-header p.define-header-desc {
                font-size: 22px;
                line-height: 36px;
            }

            /* /DEFINE */

            /* PARTNER */

            .partner .partner-header p.partner-header-title {
                font-size: 40px;
            }

            .partner .partner-header p.partner-header-desc {
                font-size: 22px;
            }

            /* END PARTNER */

            /* SLIDER FEATURE */

            .slider-feature .custom-prev-arrow,
            .slider-feature .custom-next-arrow {
                padding: 12px 28px;
            }

            .slider-feature .custom-prev-arrow {
                bottom: 5vh;
                left: 3vw;
            }

            .slider-feature .custom-next-arrow {
                bottom: 5vh;
                left: 22vw;
            }

            .slider-feature .slider-feature-content-text .slider-feature-title {
                font-size: 40px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-desc {
                font-size: 20px;
                line-height: 32px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 24%;
                bottom: 20vh;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 12vw;
                bottom: 5.5vh;
            }

            .slider-feature .slider-feature-image-area .btn-slider-feature {
                width: 15vw;
                padding: 10px 25px;
            }

            /* /SLIDER FEATURE */

            /* TRIAL */
            .trial .trial-img-ninja {
                right: 5%;
                height: 135%;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 36px;
                line-height: 52px;
            }

            /* END TRIAL */


        }

        @media screen and (min-width: 1366px) {

            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 33vh;
            }

            /* /OTHER FEATURE */

            /* SLIDER FEATURE */
            .slider-feature .slider-feature-image-area .btn-slider-feature {
                width: 13vw;
                padding: 10px 32px;
            }

            /* /SLIDER FEATURE */
        }

        /* DESKTOP 15 INCH */
        @media screen and (min-width: 1490px) {

            /* HERO SLIDER */

            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 583px;
            }

            .text-hero-banner,
            .text-hero-banner-hp {
                color: #242424;
                font-size: 46px;
                -webkit-transition: all 300ms ease;
                transition: all 300ms ease;
            }

            .text-hero-banner h2 {
                font-size: 60px;
                line-height: 66px;
            }

            .text-hero-banner-hp h2 {
                font-size: 54px !important;
                line-height: 64px;
            }

            .text-hero-banner p {
                font-size: 22px;
                line-height: 27px;
            }

            .btn-started-header-new {
                width: 33%;
            }

            /* /HERO SLIDER */

            /* DEFINE */
            .define .define-header .card-black {
                width: 50%;
            }

            /* /DEFINE */

            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                width: 90%;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-title {
                font-size: 18px;
                line-height: 26px;
            }

            .other-feature .other-feature-area .other-feature-card p.other-feature-desc {
                font-size: 15px;
                line-height: 19px;
                width: 100%;
            }



            /* END OTHER FEATURE */

            /* SLIDER FEATURE */

            .slider-feature .custom-prev-arrow,
            .slider-feature .custom-next-arrow {
                padding: 15px 30px;
            }

            .slider-feature .custom-prev-arrow {
                bottom: 5vh;
                left: 3vw;
            }

            .slider-feature .custom-next-arrow {
                bottom: 5vh;
                left: 17vw;
            }

            .slider-feature .slider-feature-content-text .slider-feature-title {
                font-size: 40px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-desc {
                font-size: 22px;
            }

            .slider-feature .slider-feature-content-text .slider-feature-list {
                left: 10vw;
                bottom: 6vh;
            }

            /* ENDSLIDER FEATURE */

            /* TRIAL */
            .trial .trial-img-ninja {
                right: 5%;
                height: 135%;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 46px;
                line-height: 61px;
            }

            /* END TRIAL */

        }

        /* END DESKTOP 15 INCH */

        /* DESKTOP 2K */
        @media screen and (min-width: 1600px) {

            /* HERO SLIDER*/
            .hero {
                min-height: 65vh;
            }

            /* /HERO  SLIDER*/


            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 25vh;
            }

            /* /OTHER FEATURE */

            /* TRIAL */
            .trial .trial-content {
                width: 50vw;
            }

            .trial .trial-area .trial-content p.trial-title {
                font-size: 40px;
                line-height: 55px;
            }

            /* /TRIAL */

        }

        /* END DESKTOP 2K */


        /* DESKTOP 16 INCH */
        @media screen and (min-width: 2550px) {

            /* HERO SLIDER*/
            .hero {
                min-height: 65vh;
            }

            /* /HERO  SLIDER*/

            /* OTHER FEATURE */
            .other-feature .other-feature-area .other-feature-card {
                height: 25vh;
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

        /* END DESKTOP 16 INCH */
    </style>
@endsection


@section('content')

    {{-- evamedia content search --}}
    <section id="evamedia-content" class="evamedia-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-3 evamedia-content-area" id="evamedia-content-area">
                    @if (count($results) > 0)

                        @foreach ($results as $post)
                            <a href="{{ url('evamedia/read', $post->slug) }}">
                                <div class="card py-0 mt-0">
                                    <div class="card-body row py-0">
                                        <div class="col-lg-8">
                                            <div class="card-profile d-flex gap-2 align-items-center">
                                                <img class="card-profile-icon"
                                                    src="{{ asset('public/storage/evamediaAPI/avatar/' . $post->authors->avatar) }}"
                                                    alt="profile-icon">
                                                <p class="card-profile-name m-0">{{ $post->authors->name }} in
                                                    {{ $post->publisher }}</p>
                                            </div>
                                            <h5 class="card-title">
                                                {{ $post->title }}
                                            </h5>
                                            <p class="card-text">
                                                {!! $post->news_content !!}
                                            </p>
                                            <div class="card-info d-flex gap-4">
                                                <p class="card-date">
                                                    {{ $post->date }} • {{ $post->timediff }}
                                                </p>
                                                <p class="card-category">
                                                    {{ $post->category->category }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="{{ asset('public/storage/evamediaAPI/' . $post->image) }}"
                                                class="img-card" alt="card-img">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <h1 class="text-center">Post not found🤔</h1>
                    @endif

                </div>
            </div>
        </div>
    </section>
    {{-- /evemedia content --}}


@endsection

@section('js_after')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        })
    </script>

@endsection
