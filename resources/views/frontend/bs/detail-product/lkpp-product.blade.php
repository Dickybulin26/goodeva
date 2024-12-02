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
    @php
        $basePathPage = asset('public/img/detail-products/lkpp');
        $basePathGeneral = asset('public/img/assets');
    @endphp
    <link rel="stylesheet" href="{{ asset('public/assets_bootstrap/css/additional.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/lity.css') }}">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .fa {
            font-family: 'FontAwesome' !important;
        }

        * {
            font-family: 'Inter', sans-serif !important;
        }

        /* HERO */

        .hero {
            margin-top: 0;
            margin-bottom: 0;
            background: #ffffff;
        }

        .hero .card {
            width: 100%;
            height: auto !important;
            border-radius: 26px;
        }

        .hero .card .card-img {
            width: 100%;
            height: 375px;
            object-fit: cover;
            border-radius: 26px;
        }

        .hero .card-body {
            padding-top: 2rem;
            background-color: #00000076;
            border-radius: 26px;
            padding-left: 3rem;
        }

        .hero .card-body .card-logo {
            width: 12rem;
            height: auto;
            margin-left: unset;
        }

        .hero .card-body .card-title {
            font-family: "Inter", sans-serif;
            padding-top: 3rem;
            font-size: 46.98px;
            font-weight: 600;
            line-height: 61.08px;
            letter-spacing: -0.03em;
            text-align: left;
        }

        .hero .card-body .card-text {
            font-family: "Inter", sans-serif;
            font-size: 20px;
            font-weight: 400;
            line-height: 36px;
            text-align: left;
            text-wrap: break-word;
            color: #ffffff;
        }

        /* /HERO */

        /* CONTENT */
        .product-content {
            margin-top: 0;
            margin-bottom: 3rem;
            font-family: "inter", sans-serif;
            background: #ffffff;
            color: #9c9c9c;
        }

        .product-content .side-content img {
            width: 7rem;
            height: auto;
        }

        .product-content .client-img {
            width: 100%;
            height: auto;
        }

        .product-content .content .content-img {
            width: 100%;
            height: 443px;
            padding-top: 1rem;
            padding-bottom: 1rem;
            object-fit: cover
        }

        .product-content .side-content h4 {
            font-size: 20px;
            font-weight: 600;
            line-height: 36px;
            text-align: left;
            color: #878C91;
        }

        .product-content .content .content-title h2 {
            font-size: 30px;
            font-weight: 400;
            line-height: 45px;
            letter-spacing: -0.03em;
            text-align: left;
            color: #010205;
        }

        .product-content .content .topic-paragraph h3 {
            font-size: 20px;
            font-weight: 600;
            line-height: 36px;
            text-align: left;
            color: #878C91;
        }

        .product-content .content {
            font-size: 20px;
            font-weight: 400;
            line-height: 36px;
            text-align: left;
        }

        .product-content .btn-product-detail-content {
            color: #1d1d11;
            border: 2px solid #878c9186;
            border-radius: 48px;
            padding: 1px 32px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 3 !important;
            margin-bottom: 1rem;
            margin-top: 1rem;
            margin-right: 1rem;
            background-color: transparent !important;
            background-size: 300% auto;
            transition: 0.5s;
        }

        .product-content .btn-product-detail-content:hover {
            background: linear-gradient(135deg, #373f46, #15191c);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border: none !important;
            color: #fff;
        }

        /* /CONTENT */

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


        /* mobile responsive */
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

            /* HERO */

            .hero {
                margin-top: 2rem;
                margin-bottom: 0;
                background: #ffffff;
                min-height: auto !important;
            }

            .hero .card {
                width: 100%;
                height: auto !important;
                border-radius: 26px;
            }

            .hero .card .card-img {
                width: 100%;
                height: 230px;
                object-fit: cover;
                border-radius: 26px;
            }

            .hero .card-body {
                padding-top: 1rem;
                background-color: #00000076;
                border-radius: 26px;
                padding-left: 1rem;
            }

            .hero .card-body .card-logo {
                width: 8rem;
                height: auto;
                margin-left: unset;
            }

            .hero .card-body .card-title {
                font-family: "Inter", sans-serif;
                padding-top: 1rem;
                font-size: 24px;
                font-weight: 700;
                line-height: 31.2px;
                letter-spacing: -0.03em;
                text-align: left;
            }

            .hero .card-body .card-text {
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 21px;
                text-align: left;
                text-wrap: break-word;
                color: #ffffff;
            }

            /* /HERO */
            .product-content {
                color: #878C91;
            }

            .product-content .side-content img {
                width: 10rem;
                height: auto;
            }

            .product-content .client-img {
                width: 122px;
                height: auto;
            }

            .product-content .content .content-img {
                width: 100%;
                height: auto;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .product-content .side-content h4 {
                font-size: 20px;
                font-weight: 600;
                line-height: 36px;
                text-align: left;
            }

            .product-content .content .content-title h2 {
                font-family: "inter", sans-serif;
                font-size: 18px;
                font-weight: 400;
                line-height: 27px;
                letter-spacing: -0.03em;
                text-align: left;
                color: #010205;
            }

            .product-content .content h3 {
                font-size: 20px;
                font-weight: 600;
                line-height: 36px;
                text-align: left;
            }

            .product-content .content {
                font-size: 16px;
                font-weight: 400;
                line-height: 36px;
                text-align: justify;
            }

            .product-content .content p {
                font-size: 16px;
                font-weight: 400;
                line-height: 23px;
                text-align: justify;
            }

            .product-content .btn-paragraph {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 1rem;
            }

            .product-content .btn-product-detail-content {
                color: #1d1d11;
                border: 2px solid #878c9186;
                border-radius: 48px;
                padding: 8px 1rem;
                font-size: 16px;
                font-weight: 300;
                line-height: 19.36px;
                cursor: pointer;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
                z-index: 3 !important;
                margin-bottom: 1rem;
                margin-top: 1rem;
                margin-right: unset;
                background-color: transparent !important;
                background-size: 300% auto;
                transition: 0.5s;
                width: 100%;
            }

            .product-content .btn-product-detail-content-mobile:hover {
                background: linear-gradient(135deg, #373f46, #15191c);
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                border: none !important;
                color: #fff;
            }

            .product-content .product-detail-content-footer-mobile {
                font-family: "Inter", sans-serif;
                font-size: 16px;
                font-weight: 400;
                line-height: 24px;
                text-align: left;
            }

            .product-content span {
                font-size: 21px;
                font-weight: 700;
                line-height: 37.8px;
                text-align: left;
            }

            /* /CONTENT */

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

            /* TRIAL */
            .trial .trial-area .trial-content p.trial-title {
                font-size: 28px;
                line-height: 36px;
            }

            .trial .trial-btn-group .btn--fitur-lihat {
                padding: 0 10px;
            }

            .trial .trial-img-ninja {
                right: 0;
                bottom: 0;
                margin-top: 0 !important;
                height: 45%;
                width: auto !important;
                position: absolute;
            }

            /* END TRIAL */
        }


        @media only screen and (max-width: 320px) {

            /* PRODUCT CONTENT */
            .product-content .btn-product-detail-content {
                font-size: 14px;
                padding: 8px 10px;
            }

            /* /PRODUCT CONTENT */
            /* TRIAL */
            .trial .trial-img-ninja {
                right: 0;
                bottom: 0;
                margin-top: 0 !important;
                height: 40%;
                width: auto !important;
                position: absolute;
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

        /* DESKTOP 15 INCH */
        @media screen and (min-width: 1490px) {

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

        /* DESKTOP 16 INCH */
        @media screen and (min-width: 1600px) {

            /* HERO SLIDER */
            .hero {
                min-height: auto;

            }

            /* /HERO SLIDER */


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


        /* DESKTOP 2K */
        @media screen and (min-width: 2550px) {

            /* HERO SLIDER */
            .hero {
                min-height: 55vh;
            }

            /* /HERO SLIDER */


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

        /* END DESKTOP 2K */
    </style>
@endsection

@section('js_after')
    <script src="{{ asset('public/js/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('public/js/lity.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.btn-scroll-paragraph', function() {
                var headerHeight = $('#header').outerHeight(); // Mendapatkan tinggi header
                var targetSection = $($(this).data('target')).offset().top -
                    headerHeight; // Menghitung posisi target dengan offset

                $('html, body').animate({
                    scrollTop: targetSection
                }, 600); // Durasi animasi 600ms (sesuaikan sesuai kebutuhan)
            });
        })
    </script>
@endsection


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
        <!-- versi desktop -->
        <div class="container">
            <div class="desktop-show">
                <div class="card bg-dark text-white">
                    <img src="{{ $basePathPage . '/lkpp.png' }}" class="card-img" alt="" />
                    <div class="card-img-overlay card-body">
                        <img src="{{ $basePathPage . '/logo-lkpp2.png' }}" alt="" class="card-logo" />
                        <h2 class="font-inter card-title">LKPP</h2>
                        <p class="font-inter card-text">
                            A national integrated and web-based inpassing system for LKPP.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mobile-show">
                <div class="card bg-dark text-white">
                    <img src="{{ $basePathPage . '/lkpp.png' }}" class="card-img" alt="" />
                    <div class="card-img-overlay card-body">
                        <img src="{{ $basePathPage . '/logo-lkpp2.png' }}" alt="" class="card-logo" />
                        <h2 class="font-inter card-title">LKPP</h2>
                        <p class="font-inter card-text">
                            A national integrated and web-based inpassing system for LKPP.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <hr>

    <!-- Content-Product Section -->
    <section id="product-content" class="product-content section light-background">
        <div class="container">
            <div class="desktop-show">
                <div class="row">
                    <div class="col-md-3">
                        <div class="side-content">
                            <div class="client-side mb-2">
                                <h4 class="font-inter">Client</h4>
                                <img src="{{ $basePathPage . '/logo-lkpp1.png' }}" alt="B20 Logo" />
                            </div>
                            <div class="field-side mb-2">
                                <h4 class="font-inter">Field</h4>
                                <p>Global Organization</p>
                            </div>
                            <div class="scale-enterprise mb-2">
                                <h4 class="font-inter">Scale Enterprises</h4>
                                <p>> 1000 Employee</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 col-xs-12 content">
                        <div class="content-title">
                            <h2 class="font-inter">
                                Goodeva Enterprise has developed a national inpassing system for LKPP
                            </h2>
                            <div class="btn-paragraph">
                                <a href="#problemParagraph">
                                    <button class="btn-product-detail-content btn-scroll-paragraph" type="button"
                                        data-target="#problemParagraph">
                                        Problem
                                    </button>
                                </a>
                                <a href="#solutionParagraph">
                                    <button class="btn-product-detail-content btn-scroll-paragraph" type="button"
                                        data-target="#solutionParagraph">
                                        Solution
                                    </button>
                                </a>
                                <a href="#productParagraph">
                                    <button class="btn-product-detail-content btn-scroll-paragraph" type="button"
                                        data-target="#productParagraph">
                                        Product
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr />
                        <div class="topic-paragraph problem-text" id="problemParagraph">
                            <h3 class="font-inter">Problem</h3>
                            <p>
                                The Government Goods/Services Procurement Policy Agency (LKPP) faces
                                significant challenges in managing the national inpassing or position adjustment
                                process. The manual inpassing process, which is spread across various regions,
                                often results in data errors, delays, and a lack of transparency.
                            </p>
                            <p>
                                Data collection from various agencies and the preparation of accurate reports is
                                a time-consuming task that is prone to errors. In addition, coordination between
                                departments and agencies is often inefficient, resulting in frustration among
                                employees who are directly affected by the inpassing process.
                            </p>
                        </div>
                        <div class="topic-paragraph solution-text" id="solutionParagraph">
                            <h3 class="font-inter">Solution</h3>
                            <p>
                                Goodeva Enterprise is developing an integrated national inpassing system based on the web
                                for LKPP. This system is designed to automate and simplify the entire inpassing process,
                                from
                                registration to verification and reporting. Key features include easy-to-fill digital forms,
                                automatic verification tools for data validation, and a communication portal to facilitate
                                coordination between various agencies. With a user-friendly interface, employees can easily
                                access and manage their own information, while administrators can monitor and manage the
                                entire process with greater efficiency.

                            </p>

                            <img class="content-img" src="{{ $basePathPage . '/lkpp-content.png' }}" alt="" />

                            <p>
                                The implementation of the national inpassing system by Goodeva Enterprise successfully
                                addressed existing issues and significantly improved process efficiency. Data errors and
                                delays
                                have drastically decreased thanks to automated verification and an integrated notification
                                system. Transparency has increased as employees can see the status of their applications in
                                real-time, reducing uncertainty and enhancing employee satisfaction.
                            </p>
                            <p>
                                In addition, reports that previously took a long time to compile can now be produced quickly
                                and accurately, allowing the LKPP to make better and more timely decisions. This system not
                                only enhances the operational efficiency of the LKPP but also strengthens the trust of
                                employees and related agencies in the national inpassing process.
                            </p>
                            <h3>Product</h3>
                            <div class="row" id="productParagraph">
                                <div class="col-md-2">
                                    <img class="client-img" src="{{ $basePathPage . '/logo-lkpp1.png' }}" alt="" />
                                </div>
                                <div class="col-md-10">
                                    <h3 class="m-0">National Inpassing System</h3>
                                    <p>
                                        Automating and simplifying the job adjustment process across Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-show">
                <div class="row">

                    <div class="col-md-9 col-xs-12 content">
                        <div class="content-title">
                            <h2 class="font-inter">
                                Goodeva Enterprise has developed a national inpassing system for LKPP
                            </h2>
                            <div class="btn-paragraph">
                                <a href="#problemParagraphMobile">
                                    <button class="btn-product-detail-content btn-scroll-paragraph" type="button"
                                        data-target="#problemParagraphMobile">
                                        Problem
                                    </button>
                                </a>
                                <a href="#solutionParagraphMobile">
                                    <button class="btn-product-detail-content btn-scroll-paragraph" type="button"
                                        data-target="#solutionParagraphMobile">
                                        Solution
                                    </button>
                                </a>
                                <a href="#productParagraphMobile">
                                    <button class="btn-product-detail-content btn-scroll-paragraph" type="button"
                                        data-target="#productParagraphMobile">
                                        Product
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="side-content">
                                <div class="client-side mb-2">
                                    <h4 class="font-inter">Client</h4>
                                    <img src="{{ $basePathPage . '/logo-lkpp1.png' }}" alt="B20 Logo" />
                                </div>
                                <div class="field-side mb-2">
                                    <h4 class="font-inter">Field</h4>
                                    <p>Global Organization</p>
                                </div>
                                <div class="scale-enterprise mb-2">
                                    <h4 class="font-inter">Scale Enterprises</h4>
                                    <p>> 1000 Employee</p>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="topic-paragraph problem-text" id="problemParagraphMobile">
                            <h3 class="font-inter">Problem</h3>
                            <p>
                                The Government Goods/Services Procurement Policy Agency (LKPP) faces
                                significant challenges in managing the national inpassing or position adjustment
                                process. The manual inpassing process, which is spread across various regions,
                                often results in data errors, delays, and a lack of transparency.
                            </p>
                            <p>
                                Data collection from various agencies and the preparation of accurate reports is
                                a time-consuming task that is prone to errors. In addition, coordination between
                                departments and agencies is often inefficient, resulting in frustration among
                                employees who are directly affected by the inpassing process.
                            </p>
                        </div>
                        <div class="topic-paragraph solution-text" id="solutionParagraphMobile">
                            <h3 class="font-inter">Solution</h3>
                            <p>
                                Goodeva Enterprise is developing an integrated national inpassing system based on the web
                                for LKPP. This system is designed to automate and simplify the entire inpassing process,
                                from registration to verification and reporting. Key features include easy-to-fill digital forms,
                                automatic verification tools for data validation, and a communication portal to facilitate
                                coordination between various agencies. With a user-friendly interface, employees can easily
                                access and manage their own information, while administrators can monitor and manage the
                                entire process with greater efficiency.

                            </p>

                            <img class="content-img" src="{{ $basePathPage . '/lkpp-content.png' }}" alt="" />

                            <p>
                                The implementation of the national inpassing system by Goodeva Enterprise successfully
                                addressed existing issues and significantly improved process efficiency. Data errors and
                                delays
                                have drastically decreased thanks to automated verification and an integrated notification
                                system. Transparency has increased as employees can see the status of their applications in
                                real-time, reducing uncertainty and enhancing employee satisfaction.
                            </p>
                            <p>
                                In addition, reports that previously took a long time to compile can now be produced quickly
                                and accurately, allowing the LKPP to make better and more timely decisions. This system not
                                only enhances the operational efficiency of the LKPP but also strengthens the trust of
                                employees and related agencies in the national inpassing process.
                            </p>
                            <h3>Product</h3>
                            <div class="row" id="productParagraphMobile">
                                <div class="col-md-2">
                                    <img class="client-img" src="{{ $basePathPage . '/logo-lkpp1.png' }}"
                                        alt="" />
                                </div>
                                <div class="col-md-10">
                                    <h3 class="m-0">National Inpassing System</h3>
                                    <p>
                                        Automating and simplifying the job adjustment process across Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Content-Product Section -->

    <!-- Trial Section -->
    <section id="trial" class="trial section light-background">
        <div class="desktop-show">
            <div class="container">
                <div class="trial-area">
                    <div class="row mx-0">
                        <div class="col-lg-9 col-md-9 col-sm-12 trial-content">
                            <p class="font-inter trial-title">
                                Enabling business transformation. Accelerate now with Goodeva.</p>
                            <div class="trial-btn-group">
                                <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
                                    <span>WhatsApp Us &nbsp; <i class="fa fa-whatsapp"></i></span>
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
                                Enabling business transformation. Accelerate now with Goodeva.</p>
                            <div class="trial-btn-group">
                                <a href="//wa.me/+6287778291924" class="btn btn--fitur-lihat">
                                    <span>WhatsApp Us &nbsp; <i class="fa fa-whatsapp"></i></span>
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
