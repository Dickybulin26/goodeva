@extends('layouts.evamedia-front-bs')
@section('title', 'Goodeva Evamedia - ' . $post->title)
{{-- Meta Section --}}
@section('meta_desc', $post->description)

@section('meta_key', $post->tags)

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
            /* background: url('{{ $basePathGeneral . '/hero-banner.svg' }}'); */
            background-color: #ffffff;
            /* background-size: cover; */
            /* width: 100%; */
            min-height: 50vh;
            position: relative;
            overflow: visible;
        }

        .news-head-content {
            padding-top: 20vh;
        }

        .hero .news-head-content .news-head-title {
            font-size: 41.18px;
            font-weight: 500;
            line-height: 52px;
            letter-spacing: -0.4620000123977661px;
            text-align: left;
            color: #242424;
            margin-bottom: 3vh;
            margin-top: 0;
        }

        .hero .news-head-content .news-head-desc {
            font-size: 21.48px;
            font-weight: 400;
            line-height: 28px;
            text-align: left;
            margin-bottom: 3vh;
            color: #6b6b6b;
        }

        .hero .news-head-content .news-head-author {
            font-size: 15.5px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            color: #242424;
        }

        .hero .news-head-content .news-head-date {
            font-size: 13.89px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            color: #6b6b6b;
        }

        .hero .news-head-content .news-head-date span.news-head-publisher {
            color: #242424;
            font-style: bold;
        }

        .hero .nav-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #B0B0B0;
            border-bottom: 1px solid #B0B0B0;
        }

        .hero .nav-head .like-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero .nav-head .like-icon .like-count {
            font-size: 12.9px;
            font-weight: 400;
            line-height: 15.12px;
            text-align: left;
            color: #6b6b6b;
        }

        /* END HERO */

        /* EVAMEDIA NEWS DETAIL CONTENT */

        .evamedia-news-content {
            /* padding-top: 5rem;
                    padding-bottom: 5rem; */
        }

        .evamedia-news-content .news-image-content {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* object-position: center; */
        }

        /* END EVAMEDIA NEWS */

        /* RECOMENDATION SECTION */
        .recomendation-section {
            background-color: #f9f9f9;
        }

        .recomendation-section .section-title {
            text-align: left;
            padding-bottom: 2rem;
            position: relative;
        }

        .recomendation-section .section-title h3 {
            font-size: 23.06px;
            font-weight: 500;
            line-height: 30px;
            letter-spacing: -0.3840000033378601px;
            text-align: left;
        }

        .recomendation-section .recomendation-area {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 2rem;
            align-items: center;
            align-content: center;
            flex-direction: row;
        }

        .recomendation-section .card {
            border: none;
            border-radius: 0 !important;
            background-color: transparent;
            margin-bottom: 2rem;
        }

        .recomendation-section .card .card-img-top {
            border-radius: 0 !important;
            width: 100% !important;
            height: 180px !important;
            object-fit: cover;
            object-position: center;
        }

        .recomendation-section .card .card-profile-icon {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            object-fit: contain;
        }

        .recomendation-section .card .card-profile-name {
            font-size: 12.39px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
        }

        .recomendation-section .card .card-title {
            font-size: 19.53px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            color: #242424;
        }

        .recomendation-section .card .card-desc {
            font-size: 15.38px;
            font-weight: 400;
            line-height: 20px;
            text-align: left;
            color: #686868
        }

        .recomendation-section .button-bottom a.button-see-more {
            padding: 9px 1rem;
            background-color: transparent;
            color: #242424;
            border: 1px solid #242424;
            border-radius: 10rem;
            transform: translate(100%, 0);

            font-size: 13.89px;
            font-weight: 400;
            line-height: 20px;
            text-align: center;
        }

        .recomendation-section .button-bottom a.button-see-more:hover {
            background-color: #242424;
            color: #fff;
        }

        .recomendation-section .offset-3 {
            margin-left: 28% !important;
        }

        /* END RECOMENDATION */

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
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
        <!-- versi desktop -->
        <div class="container">
            <div class="news-head-content desktop-show">
                <div class="row">
                    <div class="col-md-7 offset-md-3" id="hero-content-area">
                        <div class="news-head-info" id="news-head-info">
                            <div class="nav-head">
                                <div class="like-icon">
                                    <img src="{{ asset('/public/img/evamedia/Like-icon.svg') }}" alt="like"
                                        class="like-icon">
                                    <p class="like-count">2K</p>
                                </div>
                                <img src="{{ asset('/public/img/evamedia/share-icon.svg') }}" alt="share">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->


    <!-- evamedia news-content section -->
    <section class="evamedia-news-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-3">
                    <div class="evamedia-news-content-area" id="evamedia-news-content-area">

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end evamedia news-content section --}}

    {{-- recomendation-section --}}
    <section class="recomendation-section">
        <div class="container col-6 offset-3">
            <div class="section-title">
                <h3 class="fw-bold" style="color: #242424">Recommended from Eva Media</h3>
            </div>
            <div class="recomendation-area" id="recomendation-area">
            
            </div>
            <div class="button-bottom">
                <a href="#" class="button-see-more text-center" type="button">
                    See more recommendations
                </a>
            </div>

        </div>
    </section>
    {{-- end-recomendation-section --}}

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

        // detail post
        $(document).ready(function() {
            const slug = window.location.pathname.split('/')[2]; // Extract slug from URL

            $.ajax({
                type: "GET",
                url: '{{ route('post.detailPost', ['slug' => $slug]) }}',
                data: {},
                success: function(data) {
                    let newsHead = $('#news-head-info');
                    let newsContent = $('#evamedia-news-content-area');
                    newsHead.empty();
                    newsContent.empty();

                    // Populate template with data
                    newsHead.html(
                        `<h1 class="news-head-title">${data.title}</h1>
                            <h3 class="news-head-desc">${data.description}</h3>
                            <h3 class="news-head-author">${data.authors.name}</h3>
                            <p class="news-head-date">
                                published in <span class="news-head-publisher">${data.publisher}</span> • ${data.date} • ${data.timediff}
                            </p>`
                    );

                    newsContent.html(`
                    <img class="img-fluid news-image-content mb-5" src="{{ asset('public/storage/evamediaAPI') }}/${data.image}" alt="img-content">
                    <div class="news-content">${data.news_content}</div>`);
                },
                cache: false,
                error: function(data) {
                    console.error('Error:', data);
                }
            });
        });


        // ajax untuk mengambil data post rekomendasi
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('post.recomendation', ['slug' => $slug]) }}",
                data: {},
                success: function(data) {
                    let cardGroup = $('#recomendation-area');
                    cardGroup.empty();
                    console.log(data);

                    data.data.forEach(post => {
                        let cardHtml = $('#card-template-recomendation').html();

                        cardHtml = cardHtml.replace('${id}', post.id);
                        cardHtml = cardHtml.replace('${slug}', post.slug);
                        cardHtml = cardHtml.replace('${author}', post.authors.name);
                        cardHtml = cardHtml.replace('${publisher}', `in ${post.publisher}`);
                        cardHtml = cardHtml.replace('${avatarRecomendation}', post.authors
                            .avatar);
                        cardHtml = cardHtml.replace('${title}', post.title);
                        cardHtml = cardHtml.replace('${news_content}', post.news_content);
                        cardHtml = cardHtml.replace('${image}', post.image);
                        cardHtml = cardHtml.replace('${timediff}', post.timediff);
                        cardHtml = cardHtml.replace('${date}', post.date);
                        cardHtml = cardHtml.replace('${category}', post.category.category);

                        cardGroup.append(cardHtml);
                    });
                },
                cache: false,
                error: function(data) {
                    console.log('Error:', data);
                }
            })
        })

        // load more posts
    </script>

    {{-- recomendation post templet --}}
    <script id="card-template-recomendation" type="text/template">
            <a href="{{ url('evamedia/read') }}/${slug}" class="recomendation-item">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top card-thumbnail"
                        src="{{ asset('public/storage/evamediaAPI' ) }}/${image}" alt="Card img">
                    <div class="card-body">
                        <div class="card-profile d-flex gap-2 align-items-center mb-4">
                            <img class="card-profile-icon"
                                src="{{ asset('public/storage/evamediaAPI/avatar')}}/${avatarRecomendation}"
                                alt="profile-icon">
                            <p class="card-profile-name m-0"> ${author} ${publisher}</p>
                        </div>
                        <h3 class="card-title">
                            ${title}
                        </h3>
                        <p class="card-desc">
                            ${news_content}
                        </p>
                        <p class="date">
                            ${timediff} • ${date}
                        </p>
                        <div class="like-info">
                            <img class="like-icon" src="{{ asset('public/img/evamedia/Like-icon.svg') }}"
                                alt="like-icon">
                            <p class="like-count">523</p>
                        </div>
                    </div>
                </div>
            </a>
    </script>
@endsection
