@extends('layouts.app-front-bs')
@section('title', 'Goodeva Enterprise')
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
        $basePathPage = asset('public/img/goodeva-enterprise');
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
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #ffffff;
            position: relative;
            overflow: visible;
        }

        .hero-slider {
            padding-top: 20vh;
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
            margin-top: 0;
            font-size: 60px;
            font-weight: 700;
            line-height: 66px;
            text-align: left;
            color: #242424;
            margin-bottom: 3vh;
        }

        .text-hero-banner-hp h2 {
            font-weight: 600;
        }

        .text-hero-banner p {
            font-size: 22px;
            font-weight: 500;
            line-height: 27px;
            color: #878C91;
            margin-bottom: 3vh;
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

        /* END BANNER SLIDER */

        /* OTHER FEATURE */

        .other-feature {
            background: url('{{ $basePathGeneral . '/background-noise.png' }}');
            background-color: #ffffff;
            position: relative;
            overflow: visible;
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

        /* PROJECT */

        .project {
            background: #F1F5F9;
            position: relative;
            overflow: visible;
        }

        .project .project-header p.project-header-title {
            color: #242424;
            margin: 20px auto 30px;
            font-size: 60px;
            font-weight: 700 !important;
            line-height: 40px;
            letter-spacing: -0.02em;
            text-align: center;
        }

        .project .project-header p.project-header-title span.bold-header {
            color: #26A7B5;
        }

        .project .project-header p.project-header-desc {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: center;
            color: #7A7A7A;
            margin: 0 auto 3rem !important;
            display: block !important;
            width: 80%;
        }

        .project .project-area .nav-project {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 30px;
            list-style: none;
        }

        .project .project-area .nav-project .nav-link {
            display: block;
            padding: .5rem 1rem;
            color: #959595;
            font-weight: 400;
            font-family: 'Inter', sans-serif !important;
            font-size: 22px;
            line-height: 28px;
            text-decoration: none !important;
            border: 1px solid #B0B0B0;
            border-radius: 70px;
            margin: 0 10px;
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

            .other-feature {
                padding: 5rem 0 2rem;
            }

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
                margin-bottom: 0;
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

            .other-feature .other-feature-area .card-body .card-title {
                font-size: 22px;
            }

            .other-feature .other-feature-area .card-body p {
                font-family: "Inter", sans-serif;
                font-size: 18px;
                font-weight: 200;
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
                font-size: 28px;
                font-weight: 800;
                line-height: 41.6px;
                letter-spacing: -0.03em;
                text-align: left;
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
                font-size: 28px;
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
                margin: 0 auto 1rem;
            }

            .project .project-header p.project-header-title span.bold-header {
                color: #26A7B5;
            }

            .project .project-header p.project-header-desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 19px;
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

            /* other-feature */
            .other-feature .other-feature-area .card-body .card-title {
                font-size: 20px;
            }

            .other-feature .other-feature-area .card-body p {
                font-family: "Inter", sans-serif;
                font-size: 15px;                
                line-height: 21.74px;
                text-align: left;
                margin: 0;
            }

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

            .other-feature .other-feature-area .card-body p {
                font-family: "Inter", sans-serif;
                font-size: 13px;                
                line-height: 21.74px;
                text-align: left;
                margin: 0;
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
            .trial {
                height: 31rem;
            }

            .trial .trial-area .trial-content p.trial-title {
                margin-bottom: 1.5rem;
            }

            .trial .trial-btn-group .btn--fitur-lihat {
                padding: 0 10px;
            }

            .trial .trial-btn-group .btn--trial span,
            .trial .trial-btn-group .btn--fitur-lihat span {
                font-size: 14px;
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
                font-size: 60px !important;
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

@section('js_after')
    <script src="{{ asset('public/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('public/js/lity.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.nav-project').on('click', '.nav-link', function(e) {
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
                $('.add-project').fadeIn(300).css('display', 'flex');

                // Menyembunyikan tombol setelah diklik
                $(this).hide();
            });

            @if ($c != '')
                $('html, body').animate({
                    scrollTop: $('#project').offset().top
                }, 1000);
            @endif
        });

        const slider_contents = @json($text_lang[$default_lang]['section5']['fiturs']);

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
            $('#slider-feature-title' + parseInt(index + 1)).text(slider_contents['fitur' + (index + 1)]['title']);
            $('#slider-feature-desc' + parseInt(index + 1)).text(slider_contents['fitur' + (index + 1)]['desc']);
            // $('#slider-fitur-title-mobile').text(testimonies['state' + (index + 1)]['statement']);
            // $('#slider-fitur-desc-mobile').text(testimonies['state' + (index + 1)]['name']);
            $('#slide-item-active' + parseInt(index + 1)).text(String(index + 1).padStart(2, '0'));
        }

        // Perbarui konten saat slider berubah
        $('.slider-feature-content').on('afterChange', function(event, slick, currentSlide) {
            updateTestimonyContent(currentSlide);
        });

        // Inisialisasi konten dengan slide pertama
        updateTestimonyContent(0);
    </script>
@endsection


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
        <!-- versi desktop -->
        <div class="container">
            <div class="hero-slider-area desktop-show">
                <div class="hero-slider" id="hero-slider">
                    <div class="row mx-0">
                        <div class="col-lg-6 col-md-6 ">
                            <div class="text-hero-banner">
                                <h2 class="font-inter">
                                    {!! $text_lang[$default_lang]['section1']['title'] !!}
                                </h2>
                                <p class="font-inter">
                                    {{ $text_lang[$default_lang]['section1']['description'] }}
                                </p>
                                <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                                    {{ $text_lang[$default_lang]['section1']['text1'] }}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <img src="{{ $basePathPage . '/banner-item-goodeva-enterprise.png' }}" class="img-section"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- versi mobile -->
        <div class="hero-slider-area mobile-show mt-0">
            <div class="hero-slider" id="hero-slider-mobile">
                <div class="hero-slider" id="hero-slider">
                    <div class="row mx-0">
                        <div class="col-lg-6 col-md-6 ">
                            <img src="{{ $basePathPage . '/banner-item-goodeva-enterprise.png' }}" class="img-section"
                                alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <div class="text-hero-banner">
                                <h2 class="font-inter">
                                    {!! $text_lang[$default_lang]['section1']['title'] !!}
                                </h2>
                                <p class="font-inter">
                                    {{ $text_lang[$default_lang]['section1']['description'] }}
                                </p>
                                <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                                    {{ $text_lang[$default_lang]['section1']['text1'] }}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
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

    <!-- Other Feature Section -->
    <section id="other-feature" class="other-feature section light-background">
        <div class="container">
            <div class="other-feature-area desktop-show">
                <div class="card-group row mx-0 mb-3">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content1']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content1']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content1']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content2']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content2']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content2']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content3']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content3']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content3']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="other-feature-card">
                            <div class="col-lg-12 col-xl-12">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content4']['icon'] }}"
                                    alt="" class="icon-inside">
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <p class="other-feature-title">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content4']['title'] !!}</p>
                                <p class="other-feature-desc">{!! $text_lang[$default_lang]['section2']['feature_product']['fill']['content4']['sub_title'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- mobile --}}
            <div class="other-feature-area mobile-show">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content1']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title api">
                                    <span class="fw-bold">iOT with Artificial Intelligence</span>
                                </h5>
                                <p>
                                    Adopted new technology to integrate all data obtained from the
                                    connected device
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content2']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title monitoring">
                                    <span class="fw-bold">Android & iOS development</span>
                                </h5>
                                <p>
                                    Turn ideas into reality with a powerful and customized
                                    Android-iOS apps.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content3']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title notification">
                                    <span class="fw-bold">Robotic Process Automation</span>
                                </h5>
                                <p>
                                    Develop automation processes to improve your obsolete systems to
                                    be faster
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section2']['feature_product']['fill']['content4']['icon'] }}"
                                alt="" class="card-logo">
                            <div class="card-text">
                                <h5 class="card-title custom">
                                    <span class="fw-bold">Data <br> Management</span>
                                </h5>
                                <p>
                                    Manage data and make better decisions based on valid data result
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Other Feature Section -->

    <!-- Define Section -->
    <section id="define" class="define section light-background">
        <div class="container">
            <div class="define-header">
                <div class="row mx-0">
                    <div class="col-xl-4 col-md-4 col-sm-12">
                        <p class="font-inter define-header-title">{!! $text_lang[$default_lang]['section3']['title'] !!}</p>
                    </div>
                    <div class="col-xl-8 col-md-8 col-sm-12">
                        <p class="font-inter define-header-desc">{{ $text_lang[$default_lang]['section3']['text1'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Define Section -->

    <!-- Partner Section -->
    <section id="partner" class="partner section light-background">
        <div class="container">
            <div class="partner-header">
                <div class="desktop-show">
                    <p class="font-inter partner-header-title">{{ $text_lang[$default_lang]['section4']['title'] }}</p>
                    <p class="font-inter partner-header-desc">{{ $text_lang[$default_lang]['section4']['subtitle'] }}</p>
                </div>
                <div class="mobile-show">
                    <p class="font-inter partner-header-title">Portofolio & Valued Client</p>
                </div>
            </div>
        </div>
        <div class="container desktop-show">
            <div class="partner-area">
                <div class="card-group row mx-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="{{ $basePathPage . '/goodeva-enterprise-client.svg' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="partner-area">
                <div class="card-group row mx-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="{{ $basePathPage . '/goodeva-enterprise-client-m.svg' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /partner Section -->

    <!-- Slider Feature Section -->
    <section id="slider-feature" class="slider-feature section light-background">
        <div class="container">
            <!-- Versi Desktop-->
            <div class="desktop-show">
                {{-- WHY KANAN --}}
                <div class="row mx-0">
                    <div class="col-lg-12 col-md-12 px-0">
                        <div class="slider-feature-content">
                            @for ($fitur_slide_i = 1; $fitur_slide_i <= count($text_lang[$default_lang]['section5']['fiturs']); $fitur_slide_i++)
                                <div class="slider-feature-image-area">
                                    <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur' . $fitur_slide_i]['picture'] }}"
                                        class="img-section" alt="">
                                    <div class="slider-feature-content-text">
                                        <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur' . $fitur_slide_i]['logo'] }}"
                                            class="slider-feature-logo" alt="">
                                        <h4 class="slider-feature-title font-inter"
                                            id="slider-feature-title{{ $fitur_slide_i }}">

                                        </h4>
                                        <p class="slider-feature-desc font-inter"
                                            id="slider-feature-desc{{ $fitur_slide_i }}">

                                        </p>

                                        <a
                                            href="{{ url('detail-product/' . $text_lang[$default_lang]['section5']['fiturs']['fitur' . $fitur_slide_i]['slug']) }}">
                                            <button type="button" class="btn btn-slider-feature">
                                                See More <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </a>

                                        <div class="slider-feature-list">
                                            <span class="slide-item-active"
                                                id="slide-item-active{{ $fitur_slide_i }}">{{ sprintf('%02d', 1) }}</span>
                                            <span>/</span>
                                            <span class="slide-item-count"
                                                id="slide-item-count">{{ sprintf('%02d', count($text_lang[$default_lang]['section5']['fiturs'])) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-show">
                {{-- WHY KANAN --}}
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur1']['picture'] }}"
                                class="carousel-img d-block" alt="">
                            <div class="carousel-caption">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur1']['logo'] }}"
                                    class="carousel-logo" alt="">
                                <h2 class="carousel-title">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur1']['title'] }}</h2>
                                <p class="carousel-text">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur1']['desc'] }}
                                </p>
                                <a href="{{ url('detail-product/lkpp') }}" class="btn-see-more scrollto">
                                    <span>See More </span><i class="bi bi-arrow-right"></i></a>
                                <div class="benifit-nav">
                                    <a href="{{ url('detail-product/lkpp') }}" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>01</u>/06</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur2']['picture'] }}"
                                class="d-block carousel-img" alt="" />
                            <div class="carousel-caption">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur2']['logo'] }}"
                                    alt="" class="carousel-logo" />
                                <h2 class="carousel-title p-1 m-0">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur2']['title'] }}</h2>
                                <p class="carousel-text">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur2']['desc'] }}
                                </p>
                                <a href="{{ url('detail-product/b20') }}" class="btn-see-more scrollto">
                                    <span>See More </span><i class="bi bi-arrow-right"></i></a>
                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>02</u>/06</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur3']['picture'] }}"
                                class="d-block carousel-img" alt="" />
                            <div class="carousel-caption">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur3']['logo'] }}"
                                    alt="" class="carousel-logo" />
                                <h2 class="carousel-title">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur3']['title'] }}</h2>
                                <p class="carousel-text">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur3']['desc'] }}
                                </p>
                                <a href="{{ url('detail-product/asean') }}" class="btn-see-more scrollto">
                                    <span>See More </span><i class="bi bi-arrow-right"></i></a>
                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>03</u>/06</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur4']['picture'] }}"
                                class="d-block carousel-img" alt="" />
                            <div class="carousel-caption">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur4']['logo'] }}"
                                    alt="" class="carousel-logo" />
                                <h2 class="carousel-title">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur4']['title'] }}</h2>
                                <p class="carousel-text">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur4']['desc'] }}
                                </p>
                                <a href="{{ url('detail-product/pertanian') }}" class="btn-see-more scrollto">
                                    <span>See More </span><i class="bi bi-arrow-right"></i></a>
                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>04</u>/06</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur5']['picture'] }}"
                                class="d-block carousel-img" alt="" />
                            <div class="carousel-caption">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur5']['logo'] }}"
                                    alt="" class="carousel-logo kadin-logo" />
                                <h2 class="carousel-title">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur5']['title'] }}</h2>
                                <p class="carousel-text">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur5']['desc'] }}
                                </p>
                                <a href="{{ url('detail-product/kadin') }}" class="btn-see-more scrollto">
                                    <span>See More </span><i class="bi bi-arrow-right"></i></a>
                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>05</u>/06</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur6']['picture'] }}"
                                class="d-block carousel-img" alt="" />
                            <div class="carousel-caption">
                                <img src="{{ $basePathPage . '/' . $text_lang[$default_lang]['section5']['fiturs']['fitur6']['logo'] }}"
                                    alt="" class="carousel-logo" />
                                <h2 class="carousel-title">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur6']['title'] }}</h2>
                                <p class="carousel-text">
                                    {{ $text_lang[$default_lang]['section5']['fiturs']['fitur6']['desc'] }}
                                </p>
                                <a href="#" class="btn-see-more scrollto">
                                    <span>See More </span><i class="bi bi-arrow-right"></i></a>
                                <div class="benifit-nav">
                                    <a href="{{ url('detail-product/undp') }}" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>06</u>/06</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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

    <!-- Project Section -->
    <section id="project" class="project section light-background">

        <div class="container">
            <div class="project-header">
                <div class="desktop-show">
                    <p class="font-inter project-header-title">Explore The <span class="bold-header">Projects</span></p>
                    <p class="font-inter project-header-desc">Our culture would be great fit for those who share similar
                        values. If how we do things resonates with you, we welcome you to join us</p>
                </div>
                <div class="mobile-show">
                    <p class="font-inter project-header-title">Explore The <span class="bold-header">Projects</span></p>
                    <p class="font-inter project-header-desc">Our culture would be great fit for those who share similar
                        values. If how we do things resonates with you, we welcome you to join us</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 project-area">
                    <ul class="nav-project justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link {{ $c == '' ? 'active' : '' }}" href="#" data-tab="tabAll">All
                                Recent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $c == 'gov' ? 'active' : '' }}" href="#"
                                data-tab="tabGov">Government</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $c == 'cor' ? 'active' : '' }}" href="#"
                                data-tab="tabCor">Corporate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $c == 'int' ? 'active' : '' }}" href="#"
                                data-tab="tabInt">International</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tabAll" class="tab-pane {{ $c == '' ? 'active' : '' }}">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/lkpp') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/lkpp-goodeva-bg.png') }}"
                                                class="bg-card" alt="lkpp-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/lkpp-goodeva-logo.svg') }}"
                                                class="logo-card" alt="lkpp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">LKPP</h5>
                                                <p class="font-inter card-text">Integrated and web-based national inpassing
                                                    system for LKPP</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/b20') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/b20-goodeva-bg.png') }}"
                                                class="bg-card" alt="b20-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/b20-goodeva-logo.svg') }}"
                                                class="logo-card" alt="b20-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">B20 Council Platform</h5>
                                                <p class="font-inter card-text">The B20 is an international business forum
                                                    composed of representatives from the G20 business community, serving as
                                                    a platform for dialogue between global business leaders</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/asean') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/asean-goodeva-bg.png') }}"
                                                class="bg-card" alt="asean-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/asean-goodeva-logo.svg') }}"
                                                class="logo-card" alt="asean-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">ASEAN</h5>
                                                <p class="font-inter card-text">Develop and implement a standalone LMS that
                                                    can be accessed by all member countries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-group row mx-0 mt-4 add-project">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/pertanian') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kementan-goodeva-bg.png') }}"
                                                class="bg-card" alt="KementanRI-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kementan-goodeva-logo.svg') }}"
                                                class="logo-card" alt="KementanRI-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">Kementrian Pertanian</h5>
                                                <p class="font-inter card-text">Special web platform for palm oil
                                                    monitoring to integrate data from various sources so that it is easy to
                                                    access</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/kadin') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kadin-goodeva-bg.png') }}"
                                                class="bg-card" alt="kadin-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kadin-goodeva-logo.svg') }}"
                                                class="logo-card" alt="kadin-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">Kadin Indonesia</h5>
                                                <p class="font-inter card-text">Integrated vaccination management system
                                                    for Mutual Cooperation Vaccination needs</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/undp') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/undp-goodeva-bg.png') }}"
                                                class="bg-card" alt="undp-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/undp-goodeva-logo.svg') }}"
                                                class="logo-card" alt="undp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">UNDP</h5>
                                                <p class="font-inter card-text">This system will integrate data from
                                                    various sources into a platform that is easy to access and analyze</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center btn-more-area">
                                <a href="#" class="btn-more-project font-inter">Load More <br> <img
                                        src="{{ asset('public/img/goodeva-enterprise/btn-more.svg') }}"></a>
                            </div>
                        </div>
                        <div id="tabGov" class="tab-pane {{ $c == 'gov' ? 'active' : '' }}">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/lkpp') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/lkpp-goodeva-bg.png') }}"
                                                class="bg-card" alt="lkpp-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/lkpp-goodeva-logo.svg') }}"
                                                class="logo-card" alt="lkpp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">LKPP</h5>
                                                <p class="font-inter card-text">Integrated and web-based national inpassing
                                                    system for LKPP</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/pertanian') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kementan-goodeva-bg.png') }}"
                                                class="bg-card" alt="KementanRI-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kementan-goodeva-logo.svg') }}"
                                                class="logo-card" alt="KementanRI-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">Kementrian Pertanian</h5>
                                                <p class="font-inter card-text">Special web platform for palm oil
                                                    monitoring to integrate data from various sources so that it is easy to
                                                    access</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="tabCor" class="tab-pane {{ $c == 'cor' ? 'active' : '' }}">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/kadin') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kadin-goodeva-bg.png') }}"
                                                class="bg-card" alt="kadin-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/kadin-goodeva-logo.svg') }}"
                                                class="logo-card" alt="kadin-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">Kadin Indonesia</h5>
                                                <p class="font-inter card-text">Integrated vaccination management system
                                                    for Mutual Cooperation Vaccination needs</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="tabInt" class="tab-pane {{ $c == 'int' ? 'active' : '' }}">
                            <div class="card-group row mx-0">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/b20') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/b20-goodeva-bg.png') }}"
                                                class="bg-card" alt="b20-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/b20-goodeva-logo.svg') }}"
                                                class="logo-card" alt="b20-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">B20 Council Platform</h5>
                                                <p class="font-inter card-text">The B20 is an international business forum
                                                    composed of representatives from the G20 business community, serving as
                                                    a platform for dialogue between global business leaders</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/asean') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/asean-goodeva-bg.png') }}"
                                                class="bg-card" alt="asean-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/asean-goodeva-logo.svg') }}"
                                                class="logo-card" alt="asean-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">ASEAN</h5>
                                                <p class="font-inter card-text">Develop and implement a standalone LMS that
                                                    can be accessed by all member countries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="{{ url('detail-product/undp') }}">
                                        <div class="card">
                                            <img src="{{ asset('public/img/goodeva-enterprise/undp-goodeva-bg.png') }}"
                                                class="bg-card" alt="undp-goodeva-bg">
                                            <img src="{{ asset('public/img/goodeva-enterprise/undp-goodeva-logo.svg') }}"
                                                class="logo-card" alt="undp-goodeva-logo">
                                            <div class="card-body">
                                                <h5 class="font-inter card-title">UNDP</h5>
                                                <p class="font-inter card-text">This system will integrate data from
                                                    various sources into a platform that is easy to access and analyze</p>
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
    <!-- /Project Section -->

    <!-- Trial Section -->
    <section id="trial" class="trial section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="trial-area">
                    <div class="row mx-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 trial-content">
                            <p class="font-inter trial-title">
                                {{ $text_lang[$default_lang]['section7']['title'] }}</p>
                            <div class="trial-btn-group">
                                <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
                                    <span>{{ $text_lang[$default_lang]['section7']['text_button2'] }} &nbsp; <i
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
                                {{ $text_lang[$default_lang]['section7']['title'] }}</p>
                            <div class="trial-btn-group">
                                <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
                                    <span>{{ $text_lang[$default_lang]['section7']['text_button2'] }} &nbsp; <i
                                            class="fa fa-whatsapp"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ $basePathGeneral . '/bg-ninja-goodeva.png' }}" alt="trial-bg-texure" class="trial-bg-texture">

        <img src="{{ $basePathGeneral . '/ninja-goodeva-new.png' }}" class="trial-img-ninja" alt="">
    </section>
    <!-- /Trial Section -->

@endsection
