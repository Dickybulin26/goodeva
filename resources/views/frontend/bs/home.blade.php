@extends('layouts.app-front-bs')
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

@section('css_after')
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

        .hero-slider .hero-slider-content img.left-slider-item-bottom {
            position: absolute;
            left: 20px;
            bottom: 0;
            height: 583px;
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
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: 'justify';

        }

        .text-hero-banner h2 {
            margin-top: 0;
            line-height: 73px;
            font-weight: 600;
            font-size: 60px;
            margin-bottom: 2rem;
            letter-spacing: 1.3px;
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

        /* END BANNER SLIDER */

        /* WATCH VIDEO */
        .watch-video {
            background: #192535;
            margin-top: -2.5%;
            padding-bottom: 60px;
        }

        .watch-video .watch-video-header p.watch-video-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #ffffff;
            line-height: 45px;
            letter-spacing: 0.04px;
            text-align: center;
        }

        .watch-video .watch-video-header p.watch-video-header-desc {
            font-weight: 300;
            color: #ffffff;
            padding-right: 20%;
            padding-left: 20%;
            font-size: 18px;
            line-height: 27px;
            letter-spacing: 0.08px;
            text-align: center;
        }

        .watch-video .computer {
            text-align: center;
        }

        .watch-video .computer img {
            max-width: 100%;
            vertical-align: middle;
        }

        .watch-video .control-button {
            top: 55%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /* END WATCH VIDEO */

        /* PRODUCT */

        .product {
            background: #ffffff;
            padding-bottom: 0;
        }

        .product .space-height {
            height: 120px;
        }

        .product.top-rounded {
            margin-top: -215px !important;
            border-top-left-radius: 70px;
            border-top-right-radius: 70px;
        }

        .product .product-odd {
            background: #f5f5f5;
        }

        .product img {
            height: 80px;
            object-fit: contain;
        }

        .product img.img-section {
            height: 85vh !important;
            width: 100% !important;

        }

        .product .smart-safety-logo {
            height: 100px;
        }

        .product .btn-product {
            border-radius: 66px !important;
            background: #26A7B5 !important;
            color: #fff !important;
            display: block !important;
            font-size: 22px !important;
            border: 1px solid #26A7B5;
            padding: 5px 20px;
            margin-top: 30px;
            text-align: center;
            letter-spacing: 0px;
        }

        .product .btn-product:hover {
            border: 1px solid #26A7B5 !important;
            background: #ffffff !important;
            color: #26A7B5 !important;
        }

        .product-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 85vh;
        }

        .product .product-title {
            color: #15191C;
            font-weight: 700;
            font-size: 40px;
            line-height: 52px;
            letter-spacing: -2px;
            display: block;
            margin: 15px 0;
        }

        .product .product-desc {
            color: #15191C;
            font-weight: 400;
            line-height: 27px;
            font-size: 22px;
            letter-spacing: -1px;
            padding-right: 0;
            display: block;
            margin-top: 0;
        }

        .py-product {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        /* END PRODUCT */

        /* PROJECT */

        .project {
            background: #f5f5f5;
        }

        .project .project-header p.project-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 0 auto 50px;
            width: 50%;
        }

        .project .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .project .project-area .card {
            height: 250px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .project .project-area .card img.bg-card {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .project .project-area .card:hover img.bg-card {
            transform: scale(1.1);
        }

        .project .project-area .card .card-body {
            color: #ffffff !important;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            margin: 0 auto;
            width: 85%;
            border-top-right-radius: 26px;
            border-top-left-radius: 26px;
            padding: 20px;
            background: #249FAC;
        }

        .project .project-area .card .card-title {
            font-weight: 600;
            margin-bottom: 0;
        }

        .project .project-area .card p.card-text {
            margin-bottom: 0;
            color: #ffffff !important;
            font-size: 12px;
            line-height: 14.52px;
        }

        /* /PROJECT */

        /* PORTFOLIO */

        .portfolio {
            background: #f5f5f5;
        }

        .portfolio .portfolio-header p.portfolio-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 50px;
            width: 50%;
        }

        .portfolio .card-group {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .portfolio .card-group img.img-client {
            width: 100%;
        }

        /* /PORTFOLIO */

        /* TESTIMONI */
        .testimoni {
            background: #f5f5f5;
        }

        .testimoni .slick-slide {
            transition: filter 0.3s ease, transform 0.3s ease;
        }

        .testimoni .slick-slide:not(.slick-current) {
            filter: grayscale(100%);
            transform: scale(0.8);
        }

        .testimoni .slick-slide .testimoni-image-area img {
            transition: height 0.3s ease;
        }

        .testimoni .slick-slide:not(.slick-current) .testimoni-image-area img {
            height: 80%;
            display: flex;
            align-items: center;
        }

        .testimoni .slick-dots {
            background: transparent;
        }

        .testimoni .custom-prev-arrow,
        .testimoni .custom-next-arrow {
            position: absolute;
            background: #249FAC;
            border-radius: 89px;
            padding: 15px 30px;
            color: #ffffff;
            border: none;
        }

        .testimoni .custom-prev-arrow {
            bottom: 3%;
            left: -85%;
        }

        .testimoni .custom-next-arrow {
            bottom: 3%;
            left: -65%;
        }

        .testimoni .custom-prev-arrow:hover,
        .testimoni .custom-next-arrow:hover {
            background: #0F7C89;
        }

        .testimoni .testimoni-content {
            padding-left: 20%;
        }

        .testimoni .testimoni-image-area {
            width: 100%;
            height: 380px;
            position: relative;
            width: 25vw;
            margin-right: 15px;
        }

        .testimoni .testimoni-image-area img {
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

        .testimoni .testimoni-title {
            font-size: 40px;
            font-weight: 700;
            line-height: 60px;
            text-align: left;
            width: 80%;
            color: #000000;
        }

        .testimoni .testimoni-statement {
            font-size: 18px;
            font-weight: 400;
            line-height: 35px;
            text-align: left;
            color: #606264;
        }

        .testimoni .testimoni-name {
            font-size: 22px;
            font-weight: 700;
            line-height: 26.63px;
            text-align: left;
            color: #000000;
        }

        .testimoni .testimoni-client {
            font-size: 22px;
            font-weight: 400;
            line-height: 26.63px;
            text-align: left;
            color: #000000;
        }

        .testimoni .slick-dots li.slick-active button:before {
            opacity: 1;
            color: #63A6B3;
        }

        /* /TESTIMONI */

        /* MEDIA HIGHLIGHT */

        .media-highlight {
            background: #f5f5f5;
        }

        .media-highlight .media-highlight-header p.media-highlight-header-title {
            font-weight: 700 !important;
            font-size: 40px;
            color: #15191C;
            line-height: 52px;
            letter-spacing: 0.03px;
            text-align: center;
            margin: 20px auto 50px;
            width: 50%;
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

        /* GET STARTED */
        .get-started {
            padding: 0;
            position: relative;
        }

        .get-started img.full-bg-started {
            margin: 0;
            width: 100%;
            height: 150vh;
            object-fit: cover;
        }

        .get-started img.bottom-asset-started {
            margin: 0 !important;
            padding: 0 !important;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            position: absolute;
            text-align: center;
        }

        .get-started .get-started-area {
            margin: 0 !important;
            padding: 0 !important;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            text-align: center;
        }

        .get-started .get-started-area img.logo-started {
            margin: 0;
        }

        .get-started .get-started-area .title-started {
            color: #fff;
            text-transform: none;
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            font-size: 44px;
            line-height: 47px;
            letter-spacing: .5px;
            margin-top: 0px;
            margin-bottom: 25px;
            display: block;
        }

        .get-started-mobile .mobile-show .content-started {
            width: 90%;
        }

        .get-started .btn-started {
            border-radius: 58px !important;
            padding: 0px 30px;
            background: #fff;
            border-radius: 7px;
            text-transform: none;
            font-family: 'Inter', sans-serif;
            color: #000;
            box-shadow: none !important;
            font-size: 12px;
            font-weight: 600;
            line-height: 41px;
        }

        /* END GET STARTED */


        /* Mobile Responsive */
        @media only screen and (max-width: 600px) {}

        @media only screen and (max-width: 430px) {

            section,
            .section {
                padding: 2rem 0;
            }

            .mobile-nav-toggle {
                color: #26A7B5;
            }

            /* hero section */
            .hero {
                padding: 0;
                display: block;
            }

            .hero-slider .hero-slider-content img.main-image {
                height: 90vh;
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

            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                position: absolute;
                left: 20px;
                bottom: 0;
                height: 583px;
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
                font-size: 20px;
                -webkit-transition: all 300ms ease;
                transition: all 300ms ease;
                transform: translate(0, 0);
            }

            .text-hero-banner span,
            .text-hero-banner-hp span {
                font-size: 14px;
                font-weight: 400;
                line-height: 26.63px;
                text-align: justify;

            }

            .text-hero-banner-hp h2 {
                font-weight: 600;
                font-family: 'Inter', sans-serif;
                font-size: 32px;
                font-weight: 600;
                line-height: 42px;
                text-align: left;
                color: #fff
            }

            .text-hero-banner-hp p {
                font-size: 14px;
                line-height: 20px;
            }

            .btn-started-header-new {
                color: #fff;
                border: 1px solid #26A7B5;
                border-radius: 70px;
                padding: 7px 20px;
                text-transform: none;
                background: #26A7B5;
                display: flex;
                width: 45%;
                font-size: 14px;
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
                top: 8%;
                left: 5%;
                width: 90%;
                margin-left: 0;
            }


            /* end hero section */

            /* WATCH VIDEO */
            .watch-video {
                background: #192535;
                margin-top: -2.5%;
                padding-bottom: 125px;
            }

            .watch-video .watch-video-header p.watch-video-header-title {
                color: #ffffff;
                font-size: 28px;
                font-weight: 700;
                line-height: 38.73px;
                text-align: center;
                width: 78%;
                margin: 0 auto 15px;
            }

            .watch-video .watch-video-header p.watch-video-header-desc {
                color: #ffffff;
                padding-right: 0;
                padding-left: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 16.94px;
                text-align: center;
            }

            .watch-video .computer {
                text-align: center;
                padding-bottom: 2rem;
            }

            .watch-video .computer img {
                max-width: 100%;
                /* vertical-align: middle; */
            }

            .watch-video .control-button {
                top: 40%;
                position: absolute;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .watch-video .control-button img {
                width: 30%;
            }

            /* END WATCH VIDEO */

            /* PRDUCTS */
            /* PRODUCT */

            .product {
                background: #ffffff;
                padding-bottom: 0;
                padding-top: 5rem;
            }

            .product .space-height {
                height: 120px;
            }

            .product.top-rounded {
                margin-top: -215px !important;
                border-top-left-radius: 40px;
                border-top-right-radius: 40px;
            }

            .product .product-odd {
                background: #f5f5f5;
            }

            .product img {
                height: 50px !important;
                object-fit: contain;
            }

            .product img.img-section {
                height: auto !important;
                width: 100% !important;
            }

            .product .smart-safety-logo {
                height: 55px !important;
            }

            .product .btn-product {
                border-radius: 66px !important;
                background: #26A7B5 !important;
                color: #fff !important;
                display: block !important;
                font-size: 14px !important;
                border: 1px solid #26A7B5;
                padding: 5px 10px;
                margin-top: 5px;
                text-align: center;
                letter-spacing: 0px;
                margin-bottom: 2rem;
            }

            .product .btn-product:hover {
                border: 1px solid #26A7B5 !important;
                background: #ffffff !important;
                color: #26A7B5 !important;
            }

            .product-content {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                height: auto !important;
            }

            .product .product-title {
                color: #15191C;
                font-size: 24px;
                font-weight: 800;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: left;
                margin: 15px 0;
                display: block;
            }

            .product .product-desc {
                color: #15191C;
                font-size: 14px;
                font-weight: 400;
                line-height: 24.46px;
                letter-spacing: -0.03em;
                text-align: left;
                padding-right: 0;
                display: block;
                margin-top: 0;
            }

            .py-product {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }

            /* END PRODUCT */
            /* PROJECT */

            .project {
                background: #f5f5f5;
            }

            .project .project-header p.project-header-title {
                font-size: 27.12px;
                font-weight: 700;
                line-height: 35.25px;
                letter-spacing: -0.03em;
                text-align: center;
                margin: 0 0 2rem;
                color: #15191C;
                width: 100%;
            }

            .project .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                gap: 1rem;
            }

            .project .project-area .card {
                height: 250px;
                border-radius: 15px;
                overflow: hidden;
                transition: transform 0.3s ease;
            }

            .project .project-area .card img.bg-card {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 15px;
                transition: transform 0.3s ease;
            }

            .project .project-area .card:hover img.bg-card {
                transform: scale(1.1);
            }

            .project .project-area .card .card-body {
                color: #ffffff !important;
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                text-align: center;
                margin: 0 auto;
                width: 65%;
                border-top-right-radius: 26px;
                border-top-left-radius: 26px;
                padding: 15px;
                background: #249FAC;
            }

            .project .project-area .card .card-title {
                font-weight: 600;
                margin-bottom: 0;
            }

            .project .project-area .card p.card-text {
                margin-bottom: 0;
                color: #ffffff !important;
                font-size: 12px;
                line-height: 14.52px;
            }

            /* /PROJECT */
            /* PORTFOLIO */

            .portfolio {
                background: #f5f5f5;
                padding: 1rem !important;
            }

            .portfolio .portfolio-header p.portfolio-header-title {
                font-size: 28px;
                font-weight: 700;
                line-height: 38.73px;
                text-align: center;
                margin: 0 auto 20px;
                color: #15191C;
                width: 100%;
            }


            .portfolio .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }

            .portfolio .card-group img.img-client {
                width: 100%;
            }

            /* /PORTFOLIO */

            /* TESTIMONI */
            .testimoni{
                padding: 4rem 0;
            }
            .testimoni .testimoni-content {
                padding-left: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .testimoni .testimoni-title {
                font-size: 28px;
                font-weight: 700;
                line-height: 42px;
                text-align: center;
                width: 75%;
                margin-bottom: 2rem;
            }

            .testimoni .testimoni-slider-item {
                width: 60vw;
            }

            .testimoni .testimoni-image-area {
                width: 100%;
                height: 280px;
                position: relative;
            }

            .testimoni .testimoni-statement {
                font-size: 14px;
                font-weight: 400;
                line-height: 16.94px;
                text-align: center;
                margin-bottom: 15px;
                margin-top: 25px;
            }

            .testimoni .testimoni-name,
            .testimoni .testimoni-client {
                font-size: 14px;
                font-weight: 700;
                line-height: 16.94px;
                text-align: center;
            }

            .testimoni .testimoni-client{
                font-weight: 400;
            }

            .testimoni .custom-prev-arrow {
                bottom: -67%;
                left: 32%;
            }

            .testimoni .custom-next-arrow {
                bottom: -67%;
                left: 52%;
            }

            .testimoni .custom-prev-arrow,
            .testimoni .custom-next-arrow {
                padding: 9px 23px;
            }

            /* /TESTIMONI */

            /* MEDIA HIGHLIGHT */

            .media-highlight {
                background: #f5f5f5;
            }

            .media-highlight .media-highlight-header p.media-highlight-header-title {
                font-size: 28px;
                font-weight: 700;
                line-height: 38.73px;
                text-align: center;
                color: #15191C;
                margin: 20px auto;
                width: 100%;
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

            /* GET STARTED */
            .get-started {
                padding: 0;
                position: relative;
                overflow: hidden;
            }

            .get-started img.full-bg-started {
                margin: 0;
                width: 100%;
                height: 100vh;
                object-fit: cover;
            }

            .get-started img.bottom-asset-started {
                margin: 0 !important;
                padding: 0 !important;
                bottom: 0;
                left: 52%;
                transform: translateX(-50%);
                position: absolute;
                text-align: center;
                width: 50rem !important;
            }

            .get-started .get-started-area {
                margin: 0 !important;
                padding: 0 !important;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                position: absolute;
                text-align: center;
                width: 100%;
            }

            .get-started .get-started-area img.logo-started {
                margin: 0;
                height: 23vh;
            }

            .get-started .get-started-area .title-started {
                font-family: 'Inter', sans-serif;
                font-size: 22px;
                font-weight: 400;
                line-height: 29.05px;
                text-align: center;
                color: #fff;
                text-transform: none;
                margin-top: 0px;
                margin-bottom: 25px;
                display: block;
            }

            .get-started-mobile .mobile-show .content-started {
                width: 90%;
            }

            .get-started .btn-started {
                border-radius: 58px !important;
                padding: 0px 3rem;
                background: #fff;
                border-radius: 7px;
                text-transform: none;
                font-family: 'Inter', sans-serif;
                color: #000;
                box-shadow: none !important;
                font-size: 12px;
                font-weight: 600;
                line-height: 41px;
            }

            /* END GET STARTED */
        }


        @media only screen and (max-width: 320px) {

            /* hero */
            #hero-slider-mobile .hero-slider-content .text-hero-banner-hp {
                position: absolute;
                top: 11%;
                left: 5%;
                width: 90%;
                margin-left: 0;
            }

            .hero-slider .hero-slider-content img.main-image {
                height: 100vh;
                object-fit: cover;
            }


            .text-hero-banner,
            .text-hero-banner-hp {
                font-size: 13px;
            }


            .text-hero-banner-hp h2 {
                font-weight: 600;
                font-family: 'Inter', sans-serif;
                font-size: 20px;
                font-weight: 600;
                line-height: 26px;
                text-align: left;
                color: #fff;
            }


            .hero p {
                font-size: 12px;
                line-height: 17px;
                margin-bottom: 0.5rem;
            }


            .btn-started-header-new {
                color: #fff;
                border: 1px solid #26A7B5;
                border-radius: 70px;
                padding: 3px 15px;
                text-transform: none;
                background: #26A7B5;
                display: flex;
                width: 45%;
                font-size: 10px;
                letter-spacing: -2%;
                font-weight: 700;
                justify-content: space-between;
                align-items: center;
            }

            .text-hero-banner-hp .btn-started-header-new span {
                font-size: 12px;
            }

            /* END HERO */

            /* watch-video */
            .watch-video .watch-video-header p.watch-video-header-title {
                color: #ffffff;
                font-size: 28px;
                font-weight: 700;
                line-height: 38.73px;
                text-align: center;
                padding-right: 0;
                padding-left: 0;
            }

            /* END WATCH VIDEO */
            
            /* TESTIMONI */
            .testimoni .testimoni-title{
                width: 85%;
            }
            .testimoni .custom-prev-arrow{
                bottom: -72%;
                left: 25%;
            }
            .testimoni .custom-next-arrow{
                bottom: -72%;
                left: 53%;
            }
            /* /TESTIMONI */

            /* trial */
            .get-started .get-started-area {
                margin: 0 !important;
                padding: 0 !important;
                top: 27%;
                left: 50%;
                transform: translate(-50%, -50%);
                position: absolute;
                text-align: center;
                width: 100%;
            }


            .get-started .get-started-area img.logo-started {
                margin: 0;
                width: 7rem;
            }


            .get-started .get-started-area .title-started {
                font-family: 'Inter', sans-serif;
                font-size: 18px;
                font-weight: 400;
                line-height: 29.05px;
                text-align: center;
                color: #fff;
                text-transform: none;
                margin-top: 0px;
                margin-bottom: 25px;
                display: block;
                margin: 0 2rem 25px 2rem;
            }


            .get-started .btn-started {
                border-radius: 58px !important;
                padding: 0px 2rem;
                background: #fff;
                border-radius: 7px;
                text-transform: none;
                font-family: 'Inter', sans-serif;
                color: #000;
                box-shadow: none !important;
                font-size: 12px;
                font-weight: 600;
                line-height: 30px;
            }


            .get-started img.bottom-asset-started {
                margin: 0 !important;
                padding: 0 !important;
                bottom: 0;
                left: 52%;
                transform: translateX(-50%);
                position: absolute;
                text-align: center;
                width: 34rem !important;
            }


            .get-started img.full-bg-started {
                margin: 0;
                width: 100%;
                height: 130vh;
                object-fit: cover;
            }

            /* END TRIAL */
        }

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
                width: 40%;
                top: 50%;
                left: 75%;
            }

            .text-hero-banner span {
                font-size: 20px;
            }

            .text-hero-banner h2 {
                line-height: 50px;
                font-size: 42px;
            }

            .text-hero-banner p {
                font-size: 17px;
            }

            .btn-started-header-new {
                padding: 8px 20px;
                font-size: 14px;
            }

            /* END BANNER SLIDER */

            /* WATCH VIDEO */


            .watch-video {
                margin-top: -3.5%;
            }

            .watch-video .watch-video-header p.watch-video-header-title {
                font-size: 36px;
            }

            .watch-video .watch-video-header p.watch-video-header-desc {
                font-size: 16px;
            }

            .watch-video .control-button .play-btn {
                width: 70%;
            }

            /* END WATCH VIDEO */

            /* PRODUCT */

            .product img {
                height: 57px;
            }

            .product .smart-safety-logo {
                height: 65px;
            }

            .product .product-title {
                font-size: 36px;
                line-height: 42px;
            }

            .product .product-desc {
                font-size: 18px;
            }

            .product .btn-product {
                margin-top: 10px;
                padding: 5px 16px;
                font-size: 18px !important;
            }

            .py-product {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }

            /* END PRODUCT */

            /* PROJECT */
            .project .project-header p.project-header-title {
                font-size: 36px;
            }

            /* /PROJECT */

            /* PORTFOLIO */
            .portfolio .portfolio-header p.portfolio-header-title {
                font-size: 36px;
            }

            /* /PORTFOLIO */

            /* TESTIMONI */
            .testimoni .custom-prev-arrow,
            .testimoni .custom-next-arrow {
                position: absolute;
                background: #249FAC;
                border-radius: 89px;
                padding: 8px 25px;
                color: #ffffff;
                border: none;
            }

            .testimoni .custom-prev-arrow {
                bottom: 5%;
                left: -85%;
            }

            .testimoni .custom-next-arrow {
                bottom: 5%;
                left: -65%;
            }

            .testimoni .testimoni-image-area {
                width: 28vw;
                height: 353px;
            }

            .testimoni .testimoni-title {
                font-size: 32px;
                line-height: 42px;
                margin-bottom: 20px;
            }

            .testimoni .testimoni-statement {
                font-size: 16px;
                line-height: 30px;
            }

            .testimoni .testimoni-name {
                font-size: 16px;
            }

            .testimoni .testimoni-client {
                font-size: 14px;
            }

            /* /TESTIMONI */

            /* MEDIA HIGHLIGHT */
            .media-highlight .media-highlight-header p.media-highlight-header-title {
                font-size: 36px;
                margin: 20px auto;
            }

            /* /MEDIA HIGHLIGHT */

            /* GET STARTED */
            .get-started .get-started-area {
                top: 31%;
                width: 60%;
            }

            .get-started img.full-bg-started {
                height: 130vh;
            }

            .get-started .get-started-area img.logo-started {
                height: 30vh;
            }

            .get-started .get-started-area .title-started {
                font-size: 33px;
                line-height: 40px;
            }

            .get-started img.bottom-asset-started {
                height: 64vh;
            }

            /* END GET STARTED */
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {

            /* HERO  SLIDER */
            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 510px;
            }

            .text-hero-banner,
            .text-hero-banner-hp {
                width: 40%;
                top: 50%;
                left: 75%;

            }

            .text-hero-banner span {
                font-size: 21px;

            }

            .text-hero-banner h2 {
                line-height: 58px;
                font-size: 48px;
            }

            .text-hero-banner p {
                font-size: 21px;
            }

            .btn-started-header-new {
                padding: 12px 32px;
                font-size: 16px;
            }

            /* END BANNER SLIDER */

            /* WATCH VIDEO */
            .watch-video {
                margin-top: -2.5%;
            }

            .watch-video .watch-video-header p.watch-video-header-title {
                font-size: 40px;
            }

            .watch-video .watch-video-header p.watch-video-header-desc {
                font-size: 18px;
            }

            .watch-video .control-button .play-btn {
                width: 85%;
            }

            /* END WATCH VIDEO */

            /* PRODUCT */

            .product img {
                height: 76px;
            }

            .product .smart-safety-logo {
                height: 100px;
            }

            .product .product-title {
                font-size: 40px;
                line-height: 52px;
            }

            .product .product-desc {
                font-size: 22px;
            }

            .product .btn-product {
                margin-top: 30px;
                font-size: 22px !important;
                padding: 5px 20px;
            }

            .py-product {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            /* END PRODUCT */

            /* PROJECT */
            .project .project-header p.project-header-title {
                font-size: 40px;
            }

            /* /PROJECT */

            /* PORTFOLIO */
            .portfolio .portfolio-header p.portfolio-header-title {
                font-size: 40px;
            }

            /* /PORTFOLIO */

            /* TESTIMONI */
            .testimoni .custom-prev-arrow,
            .testimoni .custom-next-arrow {
                position: absolute;
                background: #249FAC;
                border-radius: 89px;
                padding: 8px 25px;
                color: #ffffff;
                border: none;
            }

            .testimoni .custom-prev-arrow {
                bottom: 5%;
                left: -85%;
            }

            .testimoni .custom-next-arrow {
                bottom: 5%;
                left: -65%;
            }

            .testimoni .testimoni-title {
                font-size: 40px;
                line-height: 60px;
            }

            .testimoni .testimoni-image-area {
                width: 25vw;
                height: 380px;
            }

            .testimoni .testimoni-statement {
                font-size: 18px;
                line-height: 35px;
            }

            .testimoni .testimoni-name {
                font-size: 18px;
            }

            .testimoni .testimoni-client {
                font-size: 16px;
            }

            /* /TESTIMONI */

            /* MEDIA HIGHLIGHT */
            .media-highlight .media-highlight-header p.media-highlight-header-title {
                font-size: 40px;
                margin: 20px auto 30px;
            }

            /* /MEDIA HIGHLIGHT */

            /* GET STARTED */
            .get-started .get-started-area {
                top: 30%;
                width: 60%;
            }

            .get-started img.full-bg-started {
                height: 130vh;
            }

            .get-started .get-started-area .title-started {
                font-size: 44px;
                line-height: 47px;
            }

            .get-started .get-started-area img.logo-started {
                height: 100%;
            }

            .get-started img.bottom-asset-started {
                height: 64vh;

            }

            /* END GET STARTED */
        }

        /* DESKTOP 15 INCH */
        @media screen and (min-width: 1490px) {

            /* HERO SLIDER */

            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 583px;
            }


            .text-hero-banner,
            .text-hero-banner-hp {
                width: 38%;
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
                font-size: 48px !important;
                line-height: 64px;
            }

            .text-hero-banner-hp h2 {
                font-size: 54px !important;
                line-height: 64px;
            }

            /* /HERO SLIDER */


            /* PRODUCT */
            .product .smart-safety-logo {
                height: 88px;
            }

            .py-product {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }

            /* /PRODUCT */


            /* TESTIMONI */

            .testimoni .custom-prev-arrow {
                bottom: 5%;
                left: -85%;
            }

            .testimoni .custom-next-arrow {
                bottom: 5%;
                left: -70%;
            }

            /* /TESTIMONI */
        }

        /* END DESKTOP 15 INCH */

        /* DESKTOP 16 INCH */
        @media screen and (min-width: 1600px) {

            /* HERO SLIDER */

            .text-hero-banner,
            .text-hero-banner-hp {
                left: 73%;
            }

            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 783px;
            }

            /* PRODUCT */
            .pr-xl-product {
                padding-right: 12vw !important;
            }

            .pl-xl-product {
                padding-left: 12vw !important;
            }

            .product img.img-section {
                height: 65vh !important;
            }

            .product-content {
                height: 65vh;
            }

            /* /PRODUCT */

            /* /PROJECT */
            .project {
                padding-top: 0;
            }

            /* /PROJECT */

        }

        /* END DESKTOP 16 INCH */

        /* DESKTOP 2 K */
        @media screen and (min-width: 2560px) {

            /* HERO SLIDER */

            .hero-slider .hero-slider-content img.left-slider-item-bottom {
                height: 783px;
            }

            /* PRODUCT */
            .pr-xl-product {
                padding-right: 25vw !important;
            }

            .pl-xl-product {
                padding-left: 25vw !important;
            }

            .product img.img-section {
                height: 60vh !important;
            }

            .product-content {
                height: 60vh;
            }

            /* /PRODUCT */

        }

        /* END DESKTOP 16 INCH */
    </style>
@endsection

@section('js_after')
    <script src="{{ asset('public/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('public/js/lity.min.js') }}"></script>
    <script>
        // HERO SLIDER
        $('#hero-slider,#hero-slider-mobile').slick({
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
                    dots: false,
                    adaptiveHeight: true,
                }
            }]
        });

        //TESTIMONI SLIDER
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


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <!-- versi desktop -->
        <div class="hero-slider-area desktop-show">
            <div class="hero-slider" id="hero-slider">
                <!-- slide pertama -->
                @for ($i_slider = 1; $i_slider <= count($text_lang[$default_lang]['section1']['list_slider']); $i_slider++)
                    <!-- comment separator -->
                    <!-- Tanpa Asset di sebelah kiri -->
                    @if ($i_slider > 3)
                        <!-- comment separator -->
                        <div class="hero-slider-content">
                            <img src="{{ asset('public/img/home/hero/' . $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['img_first']) }}"
                                class="d-block {{ $i_slider != 2 ? 'w-100' : '' }} main-image" alt="">
                            <div class="text-hero-banner">
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
                        <div class="hero-slider-content">
                            <img src="{{ asset('public/img/home/hero/' . $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['img_first']) }}"
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
                                    $classAssetLeft = 'left-slider-item-bottom';
                                    $classAssetLeft .= ' ' . $codeItem;
                                }
                            @endphp
                            <img src="{{ asset('public/img/home/hero/' . $text_lang[$default_lang]['section1']['list_slider']['slider' . $i_slider]['img_second']) }}"
                                class="{{ $classAssetLeft }}" alt="">
                            <div class="text-hero-banner">
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
                    @endif
                @endfor
            </div>
        </div>
        <!-- versi mobile -->
        <div class="hero-slider-area mobile-show mt-0">
            <div class="hero-slider" id="hero-slider-mobile">
                <div class="hero-slider-content">
                    <img src="{{ asset('public/img/assets/home/slider/transforming-global-technology-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">
                    <div class="text-hero-banner-hp text-hero-banner-worker">
                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text1'] }}</span>
                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text2'] }}</h2>
                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text3'] }}</p>
                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider1']['text_button'] }}</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="hero-slider-content">
                    <img src="{{ asset('public/img/assets/home/slider/wearables-and-apps-integration-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">
                    <div class="text-hero-banner-hp text-hero-banner-worker">
                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text1'] }}</span>
                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text2'] }}</h2>
                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text3'] }}</p>
                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider2']['text_button'] }}</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="hero-slider-content">
                    <img src="{{ asset('public/img/assets/home/slider/prevent-accidents-due-to-fatigue-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">
                    <div class="text-hero-banner-hp">
                        <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text1'] }}</span>
                        <h2>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text2'] }}</h2>
                        <p>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text3'] }}</p>
                        <a href="{{ url('contact') }}" class="btn btn-started-header-new">
                            <span>{{ $text_lang[$default_lang]['section1']['list_slider']['slider3']['text_button'] }}</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="hero-slider-content">
                    <img src="{{ asset('public/img/assets/home/slider/goodeva-technology-iot-enterprise-mobile-1.png') }}"
                        class="d-block w-100 main-image" alt="">
                    <div class="text-hero-banner-hp">
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

    <!-- Watch Video Section -->
    <section id="watch-video" class="watch-video section light-background">
        <div class="container" data-aos="zoom-in">
            <div class="watch-video-header" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                <div class="desktop-show">
                    <p class="font-inter watch-video-header-title">{{ $text_lang[$default_lang]['section2']['title'] }}</p>
                    <p class="font-inter watch-video-header-desc">{{ $text_lang[$default_lang]['section2']['text1'] }}</p>

                </div>
                <div class="mobile-show">
                    <p class="font-inter watch-video-header-title">{{ $text_lang[$default_lang]['section2']['title'] }}</p>
                    <p class="font-inter watch-video-header-desc">{{ $text_lang[$default_lang]['section2']['text1'] }}</p>
                </div>
            </div>
            <div class="watch-video-content">
                <div class="row mx-0 desktop-show">
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
                <div class="row mx-0 mobile-show">
                    <div class="col-lg-12 col-md-12 px-0" data-aos="zoom-in-up" data-aos-delay="450" data-aos-once="true"
                        data-aos-duration="700" data-aos-easing="linear">
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
            </div>
        </div>
    </section>
    <!-- /Watch Video Section -->

    <!-- Product Section -->
    <section id="product" class="product top-rounded section light-background">
        <!-- Versi Desktop-->
        <div class="desktop-show">
            <div class="row mx-0">
                <div class="col-md-12 space-height">
                </div>
            </div>
            {{-- PRODUCT KIRI --}}
            <div class="row mx-0 product-odd">
                {{-- MENTOK KIRI GAMBAR --}}
                <div class="col-md-6 pr-5 pl-0 py-product">
                    <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content1']['cover']) }}"
                        class="img-section" alt="">
                </div>
                <div class="col-md-6 pr-xl-product px-5 py-product">
                    <div class="product-content">
                        <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content1']['logo']) }}"
                            class="img-responsive smart-safety-logo" alt="">
                        <h4 class="product-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['main_text'] }}</h4>
                        <p class="product-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-smart-safety') }}" class="btn-product">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['button_text'] }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- PRODUCT KANAN --}}
            <div class="row mx-0">
                <div class="col-md-6 pl-xl-product px-5 py-product">
                    <div class="product-content">
                        <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content2']['logo']) }}"
                            class="img-responsive sales-trace-logo" alt="">
                        <h4 class="product-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['main_text'] }}</h4>
                        <p class="product-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-sales-trace') }}" class="btn-product">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['button_text'] }}
                        </a>
                    </div>
                </div>
                {{-- MENTOK KANAN GAMBAR --}}
                <div class="col-md-6 pl-5 pr-0 py-product">
                    <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content2']['cover']) }}"
                        class="img-section" alt="">
                </div>
            </div>

            {{-- PRODUCT KANAN --}}
            <div class="row mx-0 product-odd">
                {{-- MENTOK KIRI GAMBAR --}}
                <div class="col-md-6 pr-5 pl-0 py-product">
                    <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content3']['cover']) }}"
                        class="img-section" alt="">
                </div>
                <div class="col-md-6 pr-xl-product px-5 py-product">
                    <div class="product-content">
                        <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content3']['logo']) }}"
                            class="img-responsive goodeva-enterprise-logo" alt="">
                        <h4 class="product-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['main_text'] }}</h4>
                        <p class="product-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-enterprise') }}" class="btn-product">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['button_text'] }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Versi Mobile-->
        <div class="mobile-show">
            <div class="row mx-0 product-odd">
                <div class="col-xs-12 col-sm-12">
                    <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content1']['cover']) }}"
                        class="img-section py-product" alt="">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="product-content">
                        <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content1']['logo']) }}"
                            class="img-responsive smart-safety-logo" alt="">
                        <h4 class="product-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['main_text'] }}</h4>
                        <p class="product-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-smart-safety') }}" class="btn-product">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content1']['button_text'] }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-xs-12 col-sm-12 ">
                    <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content2']['cover']) }}"
                        class="img-section py-product" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 ">
                    <div class="product-content">
                        <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content2']['logo']) }}"
                            class="img-responsive sales-trace-logo" alt="">
                        <h4 class="product-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['main_text'] }}</h4>
                        <p class="product-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-sales-trace') }}" class="btn-product">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content2']['button_text'] }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mx-0 product-odd">
                <div class="col-xs-12 col-sm-12">
                    <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content3']['cover_mobile']) }}"
                        class="img-section py-product" alt="">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="product-content">
                        <img src="{{ asset('public/img/assets/home/products/' . $text_lang[$default_lang]['section2']['about_product']['content3']['logo']) }}"
                            class="img-responsive goodeva-enterprise-logo" alt="">
                        <h4 class="product-title font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['main_text'] }}</h4>
                        <p class="product-desc font-inter">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['sub_text'] }}
                        </p>
                        <a href="{{ url('goodeva-enterprise') }}" class="btn-product">
                            {{ $text_lang[$default_lang]['section2']['about_product']['content3']['button_text'] }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Product Section -->

    <!-- Project Section -->
    <section id="project" class="project section light-background">
        <div class="container">
            <div class="project-header">
                <div class="desktop-show">
                    <p class="font-inter project-header-title">Improving business aspect with Goodeva</p>
                </div>
                <div class="mobile-show">
                    <p class="font-inter project-header-title">Improving business aspect with Goodeva</p>
                </div>
            </div>
            <div class="project-area">
                <div class="card-group row mx-0">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a href="{{ url('goodeva-enterprise?c=gov') }}">
                            <div class="card">
                                <img src="{{ asset('public/img/assets/home/projects/government-goodeva.png') }}"
                                    class="bg-card" alt="b20-goodeva-bg">
                                <div class="card-body">
                                    <h5 class="card-title font-inter">Government</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a href="{{ url('goodeva-enterprise?c=cor') }}">
                            <div class="card">
                                <img src="{{ asset('public/img/assets/home/projects/corporate-goodeva.png') }}"
                                    class="bg-card" alt="lkpp-goodeva-bg">
                                <div class="card-body">
                                    <h5 class="card-title font-inter">Corporate</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a href="{{ url('goodeva-enterprise?c=int') }}">
                            <div class="card">
                                <img src="{{ asset('public/img/assets/home/projects/international-goodeva.png') }}"
                                    class="bg-card" alt="asean-goodeva-bg">
                                <div class="card-body">
                                    <h5 class="card-title font-inter">International</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Project Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="portfolio-header">
                    <p class="font-inter portfolio-header-title">{{ $text_lang[$default_lang]['section3']['title'] }}</p>
                </div>
                <div class="portfolio-area">
                    <div class="card-group row mx-0">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img class="img-client"
                                src="{{ asset('public/img/assets/home/goodeva-portfolio-client-1.svg') }}"
                                alt="portfolio-client-goodeva">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="container">
                <div class="portfolio-header">
                    <p class="font-inter portfolio-header-title">{{ $text_lang[$default_lang]['section3']['title'] }}</p>
                </div>
                <div class="portfolio-area">
                    <div class="card-group row mx-0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img class="img-client"
                                src="{{ asset('public/img/assets/home/goodeva-portfolio-client-m-1.png') }}"
                                alt="portfolio-client-goodeva">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Portfolio Section -->

    <!-- Testimonial Section -->
    <section id="testimoni" class="testimoni section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="testimoni-content">
                            <h3 class="testimoni-title font-inter">What Our Client
                                Are Saying </h3>
                            <h4 class="testimoni-statement font-inter" id="testimoni-statement">
                                {{ $text_lang[$default_lang]['section3']['state_klien']['state' . 1]['statement'] }}
                            </h4>

                            <span class="testimoni-name font-inter" id="testimoni-name">
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
                                <div class="testimoni-image-area">
                                    <img class="max-img hid"
                                        src="{{ asset('public/img/assets/home/' . $text_lang[$default_lang]['section3']['state_klien']['state' . $i_klien]['picture']) }}"
                                        alt="Client Testimoni Goodeva Image">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="testimoni-content">
                            <h3 class="testimoni-title font-inter">What Our Client
                                Are Saying </h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="testimoni-slider">
                            @for ($i_klien = 1; $i_klien <= count($text_lang[$default_lang]['section3']['state_klien']); $i_klien++)
                                <div class="testimoni-slider-item">
                                    <div class="testimoni-image-area">
                                        <img class="max-img hid"
                                            src="{{ asset('public/img/assets/home/' . $text_lang[$default_lang]['section3']['state_klien']['state' . $i_klien]['picture']) }}"
                                            alt="Client Testimoni Goodeva Image">
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
                            <span class="testimoni-name font-inter" id="testimoni-name-mobile">
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
    </section>
    <!-- /Testimonial Section -->


    <!-- Media Highlight Section -->
    <section id="media-highlight" class="media-highlight section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="media-highlight-header">
                    <p class="font-inter media-highlight-header-title">
                        {{ $text_lang[$default_lang]['section4']['title'] }}</p>
                </div>
                <div class="media-highlight-area">
                    <div class="card-group row mx-0">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://www.liputan6.com/lifestyle/read/4709443/aplikasi-pemantau-kesehatan-dan-keselamatan-kerja-untuk-menghadapi-new-normal">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Liputan-6-goodeva.png') }}"
                                    alt="liputan-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://lifestyle.bisnis.com/read/20211117/106/1467292/startup-buatan-lokal-bisa-untuk-pantau-kondisi-kesehatan">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Bisnis-com-goodeva.png') }}"
                                    alt="bisnis-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://www.beritasatu.com/digital/855201/startup-ini-minimalkan-insiden-kecelakaan-kerja">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Berita-satu-goodeva.png') }}"
                                    alt="beritasatu-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a href="https://tirto.id/goodeva-berhasil-ciptakan-teknologi-untuk-pantau-kesehatan-glxv">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Kumparan-goodeva.png') }}"
                                    alt="kumparan-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <a
                                href="https://inforial.tempo.co/info/1005927/goodeva-pemantau-kesehatan-dan-keselamatan-pekerja">
                                <img class="img-liput"
                                    src="{{ asset('public/img/assets/home/diliput/Tempo-goodeva.png') }}"
                                    alt="tempo-goodeva">
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
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
        <div class="mobile-show">
            <div class="container">
                <div class="media-highlight-header">
                    <p class="font-inter media-highlight-header-title">
                        {{ $text_lang[$default_lang]['section4']['title'] }}</p>
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

    <!-- Get Started Section -->
    <section id="get-started" class="get-started section light-background">
        <div class="desktop-show">
            <img src="{{ asset('public/img/assets/home/goodeva-started.png') }}" alt="bg-started-goodeva"
                class="full-bg-started">
            <img src="{{ asset('public/img/assets/home/goodeva-started-plus.png') }}" alt="bg-started-goodeva"
                class="bottom-asset-started">
            <div class="get-started-area">
                <img src="{{ asset('public/img/assets/solution/goodeva-logo-white-lights.png') }}"
                    alt="logo-goodeva-white" class="logo-started">
                <span class="title-started"><?php echo $text_lang[$default_lang]['section5']['title']; ?></span>
                <a href="{{ url('contact') }}" class="btn btn-started">
                    {{ $text_lang[$default_lang]['section5']['button_text'] }} <i class="fa fa-chevron-right pl-2"></i>
                </a>
            </div>
        </div>
        <div class="mobile-show">
            <img src="{{ asset('public/img/assets/home/goodeva-started.png') }}" alt="bg-started-goodeva"
                class="full-bg-started">
            <img src="{{ asset('public/img/assets/home/goodeva-started-plus.png') }}" alt="bg-started-goodeva"
                class="bottom-asset-started">
            <div class="get-started-area">
                <img src="{{ asset('public/img/assets/solution/goodeva-logo-white-lights.png') }}"
                    alt="logo-goodeva-white" class="logo-started">
                <span class="title-started"><?php echo $text_lang[$default_lang]['section5']['title']; ?></span>
                <a href="{{ url('contact') }}" class="btn btn-started">
                    {{ $text_lang[$default_lang]['section5']['button_text'] }} <i class="fa fa-chevron-right pl-2"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- /Get Started Section -->


@endsection
