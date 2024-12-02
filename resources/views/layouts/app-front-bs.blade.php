<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodeva | @yield('title')</title>
    <meta name="description" content="@yield('meta_desc')">
    <meta name="keyword" content="@yield('meta_key')">
    <meta name="author" content="@yield('meta_auth')">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('public/assets_bootstrap/img/gdv-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('public/assets_bootstrap/img/gdv-icon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('public/assets_bootstrap/img/gdv-icon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,300,300italic,500italic,600,600italic,700,700italic,900'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- CSS BEFORE FRAMEWORK -->
    @yield('css_before')

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets_bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets_bootstrap/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets_bootstrap/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets_bootstrap/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets_bootstrap/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href='{{ asset('public/fonts/font-awesome.min.css') }}' rel='stylesheet' type='text/css'>
    <link href="{{ asset('public/css/smooth-scroll.css') }}" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="{{ asset('public/assets_bootstrap/css/main.css') }}" rel="stylesheet">

    <!-- CSS AFTER FRAMEWORK -->
    @yield('css_after')

    <!-- Google tag (gtag.js) -->
    <!-- UA-140427921-1 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HFFZ0LR894"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11366723147"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HFFZ0LR894');
        gtag('config', 'AW-11366723147');
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-11366723147/WQ3QCMO7q50ZEMvciawq'
        });
    </script>
    <style>
        /* GENERAL */
        /* Menyembunyikan elemen pada tampilan mobile */
        .desktop-show {
            display: none !important;
        }

        /* Menampilkan elemen pada tampilan desktop */
        @media (min-width: 768px) {
            .desktop-show {
                display: block !important;
                /* atau inline-block, tergantung kebutuhan Anda */
            }
        }

        /* Menyembunyikan elemen pada tampilan desktop */
        .mobile-show {
            display: none;
        }

        /* Menampilkan elemen pada tampilan mobile */
        @media (max-width: 767px) {
            .mobile-show {
                display: block;
                /* atau inline-block, tergantung kebutuhan Anda */
            }
        }

        @media (min-width: 1200px) {
            .container.header-container {
                width: 1170px !important;
            }

            .container.footer-container {
                width: 1170px !important;
            }
        }

        /* END GENERAL */
        /*  ONLY FONT */
        .font-inter {
            font-family: 'Inter', sans-serif !important;
        }

        /* END ONLY FONT */

        /* HEADER */
        .index-page.scrolled .header,
        .index-page .header {
            background-color: #f8f8f8 !important;
            box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
        }

        .index-page .header {
            padding: 2px 0;
        }

        .navmenu a,
        .navmenu a:focus {
            color: #020407;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 22.2px;
            text-align: left;
        }

        .navmenu li:hover>a,
        .navmenu .active,
        .navmenu .active:focus {
            color: #63A6B3;
        }

        .navmenu .dropdown ul,
        .navmenu .dropdown.bg-no-img ul {
            padding: 0;
            border-radius: 10px;
            background: #000000;
            min-width: 280px;
        }

        .navmenu .dropdown.bg-no-img ul {
            right: 14px;
            left: unset;
            ;
        }

        .navmenu .dropdown.bg-no-img ul {
            background: #ffffff;
        }

        .navmenu .dropdown ul li:nth-child(1),
        .navmenu .dropdown.bg-no-img ul li:nth-child(1) {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .navmenu .dropdown ul li:last-child,
        .navmenu .dropdown.bg-no-img ul li:last-child {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .navmenu .dropdown ul li {
            line-height: 45px;
            min-height: 45px;
            width: 100%;
        }

        .navmenu .dropdown ul li.nav-gss,
        .header .navbar-default .navbar-nav .dropdown-menu .bg-submenu.smart-safety {
            background: url('{{ asset('public/assets_bootstrap/img/navbar/bg-menu-smart-safety.png') }}');
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .navmenu .dropdown ul li.nav-gst,
        .header .navbar-default .navbar-nav .dropdown-menu .bg-submenu.sales-trace {
            background: url('{{ asset('public/assets_bootstrap/img/navbar/bg-menu-sales-automation.png') }}');
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .navmenu .dropdown ul li.nav-gse,
        .header .navbar-default .navbar-nav .dropdown-menu .bg-submenu.goodeva-enterprise {
            background: url('{{ asset('public/assets_bootstrap/img/navbar/bg-website-development.png') }}');
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .navmenu .dropdown ul li.nav-gdg,
        .header .navbar-default .navbar-nav .dropdown-menu .bg-submenu.digital-growth {
            background: url('{{ asset('public/assets_bootstrap/img/navbar/bg-menu-digital-growth.png') }}');
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .navmenu .dropdown ul li:hover {
            background-size: 115% !important;
            transition: background-size .55s;
        }

        .navmenu .dropdown ul li a:hover {
            color: #1D1D1D !important;
            background: #706f7082;
        }

        .navmenu .dropdown ul li:first-child a:hover,
        .navmenu .dropdown.bg-no-img ul li:first-child a:hover {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .navmenu .dropdown ul li:last-child a:hover,
        .navmenu .dropdown.bg-no-img ul li:last-child a:hover {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .navmenu .dropdown ul li a,
        .navmenu .dropdown ul li a:focus {
            flex-direction: column;
        }

        .header .navmenu .dropdown>li:hover a {
            border-radius: 10px;
        }

        .navmenu .dropdown ul li a span,
        .navmenu .dropdown.bg-no-img ul li a span {
            color: #ffffff;
            width: 100%;
            font-size: 16px;
        }

        .navmenu .dropdown.bg-no-img ul li a span {
            color: #1C1D1E;
        }

        .navmenu .dropdown ul li a span:nth-child(2),
        .navmenu .dropdown.bg-no-img ul li a span:nth-child(2) {
            color: #9C9E9E;
            margin-top: 1vh;
            font-size: 13px;
            font-weight: 400;
        }

        /* END HEADER */

        /* FOOTER */
        .footer .footer-logo {
            max-height: 50px;
        }

        .footer h4 {
            padding-bottom: 0px;
        }

        .footer .footer-content p.copy-right {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 19.36px;
            margin-bottom: 0;
            text-align: left;
            color: #2B2A35;
        }

        .footer .footer-content .part-of {
            margin-top: 5vh;
        }

        .footer .footer-content .part-of-img img {
            height: 50px;
        }

        .footer .footer-links h4,
        .footer .footer-links a,
        .footer .footer-links p {
            font-family: 'Inter', sans-serif !important;
        }

        .footer .footer-links .socmed {
            display: flex;
        }

        /* .footer .footer-links ul.socmed li:first-child {
            padding-top: 10px;
        } */

        .footer .footer-links ul.socmed li:first-child {
            margin-right: 10px;
        }

        .footer .footer-links ul.socmed li {
            padding-bottom: 0;
            padding-top: 0;
        }

        .footer .footer-links .socmed .btn-social-media {
            background: #E1E1E1;
            color: #A5A5A5;
            line-height: 26px;
            padding: 0 10px;
            border-radius: 5px;
        }

        .footer .footer-links .socmed .btn-social-media:hover {
            background: #2bbbad;
            color: #ffffff;
        }

        .footer .footer-links .socmed .btn-social-media i {
            color: #ffffff;
            margin-right: 0;
        }

        .footer .footer-links ul.socmed a {
            color: #1D1D1D;
        }

        .footer .footer-links ul.products {
            margin-top: 11px;
        }

        .footer .footer-links .office {
            color: #1D1D1D;
        }

        .footer .footer-links .office:last-child {
            margin-top: 3vh;
        }

        /* END FOOTER */

        /*WA BUTTON*/
        :root .wa-icon {
            width: 40px;
            text-align: center;
            /* margin: auto; */
        }

        .wa-icon {
            width: 30px;
            text-align: center;
            /* margin: auto; */
        }

        .back-to-top {
            position: fixed;
            visibility: visible;
            opacity: 1;
            right: 15px;
            bottom: 15px;
            z-index: 996;
            background: #25d366;
            width: 70px;
            height: 70px;
            border-radius: 100%;
            transition: all 0.4s;
        }

        .back-to-top i {
            font-size: 28px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #25d366;
            color: #fff !important;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }

        /*END WA BUTTON*/

        @media only screen and (max-width: 767px) {

            /* HEADER */
            .header .navbar.navbar-default {
                position: fixed !important;
                padding-bottom: 7px !important;
                padding-top: 11px !important;
                box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
                background: #ffffff !important;
                border: none !important;
                top: 0;
                right: 0;
                left: 0;
                z-index: 1030;
            }

            .header .container {
                display: block;
            }

            .header .l-burger {
                position: absolute;
                top: 12px;
                right: 20px;
                cursor: pointer;
            }

            .header .l-burger span {
                display: block;
                /* background: #d3531a; */
                border-radius: 9px;
                opacity: 1;
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: .25s ease-in-out;
                -moz-transition: .25s ease-in-out;
                -o-transition: .25s ease-in-out;
                transition: .25s ease-in-out;
                width: 30px;
                border-radius: 3px;
                background-color: #26A7B5;
                height: 5px;
                margin: 7px 0;
            }

            .header .l-burger span:nth-child(1) {
                width: 30px;
            }

            .header .l-burger span:nth-child(2) {
                width: 24px;
                margin: 7px 3px;
            }

            .header .l-burger.open span {
                height: 3px;
            }         

            .header .l-burger.open span:nth-child(2) {
                margin: 7px 0;
            }

            .header .l-burger.open span {
                width: 30px !important;
            }

            .header .l-burger.open span:first-child {
                display: block;
                transform: rotate(45deg) translate(9px, 7px);
                -webkit-transform: rotate(45deg) translate(9px, 7px);
                -moz-transform: rotate(45deg) translate(9px, 7px);
            }

            .header .l-burger.open span:last-child {
                display: block;
                transform: rotate(-45deg) translate(-1px, 2px);
                -webkit-transform: rotate(-45deg) translate(-1px, 2px);
                -moz-transform: rotate(-45deg) translate(-1px, 2px);
            }

            .header .navbar.navbar-default .right-nav-block {
                float: none !important;
                margin-top: 0px !important;
            }

            .header .navbar.navbar-default .right-nav-block .navbar-collapse .navbar-nav {
                float: none;
                width: auto;
                display: block;
                margin-top: 0;
                margin-bottom: 0;
                padding-left: 0;
                list-style-type: none;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .header .navbar.navbar-default .right-nav-block .navbar-collapse .navbar-nav li {
                float: none;
                display: block;
                position: relative;
            }

            .header .navbar.navbar-default .right-nav-block .navbar-collapse .wrap-inside-nav-mobile {
                margin-right: 15px;
            }

            .header .navbar.navbar-default .right-nav-block .navbar-collapse .navbar-nav li a {
                display: block;
                padding: 10px 0;
            }

            .header .navbar.navbar-default .dropdown-toggle::after {
                display: none !important;
            }

            .header .navbar.navbar-default .navbar-nav>li>a {
                color: #1D1D1D;
                font-weight: 500;
                font-size: 16px;
                margin: 0 11px;
                border-bottom: 1px solid transparent;
                line-height: 20px;
            }

            .header .navbar.navbar-default .navbar-nav a>.fa-chevron-down {
                font-size: 11px;
                font-size: 11px;
                color: #000000;
                margin-left: 3px;
                position: absolute;
                top: 14.5px;
                right: -13px;
            }

            .header .navbar.navbar-default .navbar-nav .show.dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            .header .navbar.navbar-default .right-nav-block .navbar-collapse .navbar-nav li {
                float: none;
                display: block;
            }

            .header .wrap-inside-nav-mobile .inside-nav li {
                width: 100%;
                line-height: 45px;
                min-height: 45px;
            }

            .header .wrap-inside-nav-mobile .e-nav--list_child_company li:nth-child(1),
            .header .wrap-inside-nav-mobile .e-nav--list_child_company li:nth-child(2),
            .header .wrap-inside-nav-mobile .e-nav--list_child_company li:nth-child(3) {
                border-bottom: 1px solid #E5E5E5;
            }

            .header .wrap-inside-nav-mobile .e-nav--list_child_company li.bg-submenu:nth-child(1),
            .header .wrap-inside-nav-mobile .e-nav--list_child_company li.bg-submenu:nth-child(2),
            .header .wrap-inside-nav-mobile .e-nav--list_child_company li.bg-submenu:nth-child(3) {
                border-bottom: none;
            }

            .bg-submenu.smart-safety:hover,
            .bg-submenu.sales-automation:hover,
            .bg-submenu.goodeva-enterprise:hover,
            .bg-submenu.digital-growth:hover {
                background-size: 115%;
                transition: background-size .25s;
                }

            .header .transition-content {
                transition: .25s;
            }

            .header .navbar.navbar-default .right-nav-block .navbar-collapse .navbar-nav li a {
                display: block;
                padding: 10px 0;
            }

            .header .navbar-nav .show.dropdown-menu>li>a {
                line-height: 20px;
                font-size: 1rem;
                transition: background-color .3s;
                color: #000000 !important;
            }

            .header .wrap-inside-nav-mobile .inside-nav li a>div span:nth-child(1) {
                color: #1C1D1E !important;
                font-size: 14px;
                font-weight: 500;
                line-height: 1;
            }

            .header .wrap-inside-nav-mobile .inside-nav li.bg-submenu a>div span:nth-child(1) {
                color: #ffffff !important;
                margin-left: 2vw;
            }

            .header .wrap-inside-nav-mobile .inside-nav li a>div span:nth-child(2) {
                margin-top: 0;
                display: block;
                color: #1C1D1E !important;
                opacity: 0.5;
                font-size: 12.5px;
                font-weight: normal;
                line-height: 20px;
            }

            .header .wrap-inside-nav-mobile .inside-nav li.bg-submenu a>div span:nth-child(2) {
                color: #ffffff !important;
                margin-left: 2vw;
            }

            /* /HEADER */

            /* FOOTER */

            .footer .footer-title {
                font-size: 17px;
                font-weight: 700;
                line-height: 17.2px;
                text-align: left;
            }

            .footer .footer-copyright {
                margin-bottom: 30px;
                font-size: 14px;
                line-height: 24px;
                color: #9b9b9c;
            }

            .footer .footer-info {
                margin-bottom: 30px;
            }

            .footer .footer-logo {
                width: 135px;
            }

            .footer .goodeva-part {
                height: 4vh;
            }

            .footer .footer-info ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .footer .footer-info ul i {
                padding-right: 2px;
                color: #3498db;
                font-size: 18px;
                line-height: 1;
            }

            .footer .footer-info ul li {
                padding: 10px 0;
                display: flex;
                align-items: center;
            }

            .footer .footer-info ul.socmed {
                margin-top: 30px;
            }

            .footer .footer-info ul.socmed li {
                padding: 0 !important;
            }

            .footer .footer-info ul li:first-child {
                padding-top: 0;
            }

            .footer .footer-links .socmed .btn-social-media {
                padding: 3px 10px;
            }

            .footer .footer-info ul a {
                color: #1d1d1d;
                transition: 0.3s;
                display: inline-block;
                line-height: 1;
            }

            .footer .footer-info ul a:hover {
                text-decoration: none;
                color: #3498db;
            }

            .footer .footer-info2 {
                max-width: 12rem;
            }

            .footer .footer-info,
            .footer .footer-contact {
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 19.5px;
                text-align: left;
            }

            .footer .footer-contact p {
                margin-bottom: 1rem;
            }

            .footer .footer-menu {
                display: flex;
                justify-content: space-between;
            }

            .footer .footer-menu .footer-title {
                color: #143477;
            }

            .footer .copyright {
                padding-top: 15px;
                padding-bottom: 15px;
                border-top: 0;
            }

            /* END FOOTER */
        }

        @media only screen and (max-width: 320px) {

            /* BUTTON WA */
            :root .wa-icon {
                width: 30px;
            }

            .back-to-top {
                width: 60px;
                height: 60px;
            }

            /* /BUTTON WA */

            /* FOOTER */
            .footer .footer-info ul li:first-child {
                margin-top: 13px;
            }

            .footer .footer-info ul.socmed li:first-child {
                margin-top: 0;
            }

            .footer .footer-info ul li {
                padding: 7px 0;
            }

            .footer .footer-info ul a {
                font-size: 10px;
            }

            /* /FOOTER */
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top desktop-show">
        <div class="container-fluid container header-container position-relative d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                @if (request()->segment(1) == 'solutions')
                    <img class="normal-logo logo-white" id="logo-utama"
                        src="{{ asset('public/img/assets/solution/goodeva logo white.png') }}" width="100"
                        alt="logo" />
                    <img class="normal-logo logo-blue" id="logo-utama-2"
                        src="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}" width="100"
                        alt="logo" style="display:none" />
                @else
                    <img class="normal-logo" id="logo-utama" onerror="this.style.display='none'"
                        data-swap="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}" width="100" />
                @endif
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li
                        class="dropdown {{ Request::is('goodeva-smart-safety', 'goodeva-sales-trace', 'goodeva-enterprise') ? 'current' : '' }}">
                        <a href="#"><span>Product</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="nav-gss">
                                <a href="{{ url('goodeva-smart-safety') }}">
                                    <span>Smart Safety</span>
                                    <span>Fatigue Solution</span>
                                </a>
                            </li>
                            <li class="nav-gst">
                                <a href="{{ url('goodeva-sales-trace') }}">
                                    <span>Salestrace</span>
                                    <span>CRM Solutions</span>
                                </a>
                            </li>
                            <li class="nav-gse">
                                <a href="{{ url('goodeva-enterprise') }}">
                                    <span>Goodeva Enterprise</span>
                                    <span>Solution Technology</span>
                                </a>
                            </li>
                            <li class="nav-gdg">
                                <a href="https://digideva.id">
                                    <span>Digital Growth</span>
                                    <span>Marketing Solutions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('solutions') ? 'active' : '' }}"><a
                            href="{{ url('solutions') }}">Solutions</a></li>
                    <li class="{{ Request::is('academy') ? 'active' : '' }}"><a
                            href="https://galaxy-code.goodeva.id/">Academy</a></li>
                    <li class="dropdown bg-no-img {{ Request::is('about', 'careers', 'contact') ? 'current' : '' }}">
                        <a href="#"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li>
                                <a href="{{ url('about') }}">
                                    <span>About</span>
                                    <span>Learn more about us</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('careers') }}">
                                    <span>Careers</span>
                                    <span>Explore our openings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">
                                    <span>Contact</span>
                                    <span>Keep in touch with us</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('evamedia') }}">
                                    <span>Goodeva Media</span>
                                    <span>Get our latest update</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex-lang">
                            English&nbsp;<img src="{{ url('public/asset-goodeva-lp/navbar/icon-language.png') }}"
                                alt="" style="width: 14px;">
                        </a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none d-lg-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <header class="header scrolling-header mobile-show">
        <nav id="nav" class="navbar navbar-default static-nav navbar-fixed-top" role="navigation">
            <div class="container clearfix">
                <!-- burger icon show when view in responsive -->
                <a class="toggle-button visible-xs-block" id="burger-i" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse">
                    <div class="l-burger">
                        <span class="burger-icon"></span>
                        <span class="burger-icon"></span>
                        {{-- <span class="burger-icon"></span> --}}
                    </div>
                </a>
                <!-- logo company - goodeva -->
                <a href="{{ url('/') }}">
                    @if (request()->segment(1) == 'solutions')
                        <img class="normal-logo logo-white" id="logo-utama-m"
                            src="{{ asset('public/img/assets/solution/goodeva logo white.png') }}" width="100"
                            alt="logo" />
                        <img class="normal-logo logo-blue" id="logo-utama-m-2"
                            src="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}" width="100"
                            alt="logo" style="display:none" />
                    @else
                        <img class="normal-logo " id="logo-utama-m" onerror="this.style.display='none'"
                            data-swap="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}"
                            width="100" />
                    @endif
                </a>
                <div class="right-nav-block pull-right clearfix">
                    <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <!-- list menu navbar -->
                        <ul class="nav navbar-nav clearfix pad-mobile-y-3 navbar-with-inside vcenter">
                            <!-- menu home -->
                            <li class="{{ Request::is('/') ? 'current' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <!-- menu product dan submenunya untuk tampilan mobile -->
                            <li class="dropdown e-nav--list_child wrap-inside-nav-mobile">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Product
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <!-- list submenu product -->
                                <ul class="dropdown-menu inside-nav px-3 e-nav--list_child_company">
                                    <!-- menu smart safety -->
                                    <li class="bg-submenu smart-safety transition-content">
                                        <a href="{{ url('goodeva-smart-safety') }}">
                                            <div>
                                                <span>Smart Safety</span>
                                                <span>Fatigue Solution</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- menu sales trace -->
                                    <li class="bg-submenu sales-trace transition-content">
                                        <a href="{{ url('goodeva-sales-trace') }}">
                                            <div>
                                                <span>Sales Salestrace</span>
                                                <span>CRM Solutions</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- menu goodeva enterprise -->
                                    <li class="bg-submenu goodeva-enterprise transition-content">
                                        <a href="{{ url('goodeva-enterprise') }}">
                                            <div>
                                                <span>Goodeva Enterprise</span>
                                                <span>Solution Technology</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- menu digital growth -->
                                    <li class="bg-submenu digital-growth transition-content" target="_blank">
                                        <a href="https://digideva.id" target="_blank">
                                            <div>
                                                <span>Digital Growth</span>
                                                <span>Marketing Solutions</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end menu product dan submenunya untuk tampilan mobile -->
                            <!-- menu solutions -->
                            <li class="{{ Request::is('solutions') ? 'current' : '' }}"><a
                                    href="{{ url('solutions') }}">Solutions</a></li>
                            <!-- menu academy -->
                            <li class="{{ Request::is('academy') ? 'current' : '' }}"><a
                                    href="https://galaxy-code.goodeva.id/" target="_blank">Academy</a></li>

                            <li
                                class="dropdown e-nav--list_child wrap-inside-nav-mobile  mr-15px mobile-show {{ Request::is('about') ? 'current' : '' }}">
                                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Company <i
                                        class="fa fa-chevron-down"></i></a>
                                <ul
                                    class="dropdown-menu inside-nav inside-nav mx-3 px-3 e-nav--list_child_company is-withicon">
                                    <li>
                                        <a href="{{ url('about') }}">
                                            <div>
                                                <span>About</span>
                                                <span>Learn more about us</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('careers') }}">
                                            <div>
                                                <span>Careers</span>
                                                <span>Explore our openings</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact') }}">
                                            <div>
                                                <span>Contact</span>
                                                <span>Keep in touch with us</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('evamedia') }}">
                                            <div>
                                                <span>Goodeva Media</span>
                                                <span>Get our latest update</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- pilih bahasa mobile -->
                            <li
                                class="dropdown e-nav--list_child wrap-inside-nav-mobile mobile-show {{ Request::is('#') ? 'current' : '' }}">
                                <a href="#" class="flex-lang">English
                                    <img src="{{ url('public/asset-goodeva-lp/navbar/icon-language.png') }}"
                                        alt="" style="width: 14px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>

    <main class="main">

        @yield('content')

    </main>


    <footer id="footer" class="footer">

        {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}
        <div class="desktop-show">
            <div class="container footer-container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="{{ url('/') }}" class="d-flex align-items-center">
                            <img class="footer-logo"
                                src="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}" alt="logo" />
                        </a>
                        <div class="footer-content pt-3">
                            <p class="copy-right">
                                © Copyright @php echo(date('Y')) @endphp Goodeva Technology
                                <br>
                                All right reserved
                            </p>
                            <p class="part-of"><strong> Goodeva Part Of:</strong></p>
                            <p class="part-of-img">
                                <img src="{{ asset('public/img/assets/home/Logo-Astra-Startup-Community-default.png') }}"
                                    alt="" class="goodeva-part">
                                <img src="{{ asset('public/img/assets/home/astra-startup.png') }}" alt=""
                                    class="goodeva-part">
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Products</h4>
                        <ul class="products">
                            <li><a href="{{ url('goodeva-smart-safety') }}">Goodeva Smart Safety</a></li>
                            <li><a href="{{ url('goodeva-sales-trace') }}">Goodeva Salestrace</a></li>
                            <li><a href="{{ url('goodeva-enterpise') }}">Goodeva Enterprise</a></li>
                            <li>
                                <div>
                                    <ul class="socmed">
                                        <li><a target="_blank"
                                                href="https://www.instagram.com/goodeva.id/?hl=en"><button
                                                    class="btn btn-social-media"><i
                                                        class="fa fa-instagram"></i></button></a></li>
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/Goodeva-technology-103031931477024"><button
                                                    class="btn btn-social-media btn-padding-facebook ml-2"><i
                                                        class="fa fa-facebook"></i></button></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 footer-links">
                        <div class="office">
                            <h4>Jakarta Office</h4>
                            <p>Gedung South Quarter, Tower A, Level-18, Jl. RA Kartini, Cilandak - Jakarta Selatan 12430
                            </p>
                        </div>
                        <div class="office">
                            <h4>Bekasi Office 1</h4>
                            <p>GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, Kota Bekasi</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-links">
                        <h4>Office Phone</h4>
                        <p>
                            (021) 8273-8692
                            <br>
                            Sales@goodeva.co.id
                            <br>
                            ignas@goodeva.co.id
                        </p>
                        <div class="office">
                            <h4>Bekasi Office 2</h4>
                            <p>GOODEVA CIT Division, Grand Galaxy Commercial RSK 6 No. 17, Kota Bekasi</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="mobile-show">
            <div class="container footer-container footer-top">
                <div class="footer-copyright">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}" alt="logo"
                            class="footer-logo" />
                    </a>
                    <div class="copyright">
                        Our flagship platform adopt artificial intelligence to serve
                        better experience and help your business go beyond innovation
                    </div>
                </div>
                <div class="footer-menu footer-links">
                    <div class="row">
                        <div class="col-xs-3 footer-info">
                            <h4 class="footer-title">Products</h4>
                            <ul>
                                <li><a href="{{ url('goodeva-smart-safety') }}">Goodeva Smart Safety</a></li>
                                <li><a href="{{ url('goodeva-sales-trace') }}">Goodeva Salestrace</a></li>
                                <li><a href="{{ url('goodeva-enterprise') }}">Goodeva Enterprise</a></li>
                            </ul>
                            <p class="footer-title pt-3">Goodeva Part of:</p>
                            <div class="credits pt-3">
                                <p class="part-of-img">
                                    <img src="{{ asset('public/img/assets/home/Logo-Astra-Startup-Community-default.png') }}"
                                        alt="" class="goodeva-part">
                                    <img src="{{ asset('public/img/assets/home/astra-startup.png') }}" alt=""
                                        class="goodeva-part">
                                </p>
                            </div>
                            <ul class="d-flex socmed">
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/goodeva.id/?hl=en">
                                        <button class="btn btn-social-media" type="button">
                                            <i class="fa fa-instagram"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank"
                                        href="https://www.facebook.com/Goodeva-technology-103031931477024">
                                        <button class="btn btn-social-media" type="button">
                                            <i class="fa fa-facebook"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 footer-info2">                            
                            <h4 class="footer-title">Jakarta Office</h4>
                            <p>
                                Gedung South Quarter, Tower A, Level-18, Jl. RA Kartini, Cilandak - Jakarta Selatan 12430
                            </p>
                            <h4 class="footer-title">Bekasi Office 1</h4>
                            <p>
                                GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15,
                                Kota Bekasi
                            </p>
                            <div class="footer-contact">
                                <h4 class="footer-title">Office Phone</h4>
                                <p>
                                    (021) 8273-8692 <br />
                                    sales@goodeva.co.id<br />
                                    ignias@goodeva.co.id<br />
                                </p>
                            </div>

                            <h4 class="footer-title">Bekasi Office 2</h4>
                            <p>
                                GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 17,
                                Kota Bekasi
                            </p>
                        </div>
                    </div>
                </div>


                {{-- <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="{{ url('/') }}" class="d-flex align-items-center">
                            <img class="footer-logo"
                                src="{{ asset('public/img/assets/Goodeva-technology-logo.png') }}" alt="logo" />
                        </a>
                        <div class="footer-content pt-3">
                            <p class="copy-right">
                                Our flagship platform adopt artificial intelligence to serve better experience and help
                                your business go beyond innovation
                            </p>
                        </div>
                    </div>
                    

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Products</h4>
                        <ul class="products">
                            <li><a href="{{ url('goodeva-smart-safety') }}">Goodeva Smart Safety</a></li>
                            <li><a href="{{ url('goodeva-sales-trace') }}">Goodeva Salestrace</a></li>
                            <li><a href="{{ url('goodeva-enterpise') }}">Goodeva Enterprise</a></li>
                        </ul>
                        <p class="part-of"><strong> Goodeva Part Of:</strong></p>
                            <p class="part-of-img">
                                <img src="{{ asset('public/img/assets/home/Logo-Astra-Startup-Community-default.png') }}"
                                    alt="" class="goodeva-part">
                                <img src="{{ asset('public/img/assets/home/astra-startup.png') }}" alt=""
                                    class="goodeva-part">
                            </p>
                        <ul>
                            <li>
                                <div>
                                    <ul class="socmed">
                                        <li><a target="_blank"
                                                href="https://www.instagram.com/goodeva.id/?hl=en"><button
                                                    class="btn btn-social-media"><i
                                                        class="fa fa-instagram"></i></button></a></li>
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/Goodeva-technology-103031931477024"><button
                                                    class="btn btn-social-media btn-padding-facebook ml-2"><i
                                                        class="fa fa-facebook"></i></button></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        
                    </div>

                    <div class="col-lg-3 col-md-3 footer-links">
                        <div class="office">
                            <h4>Jakarta Office</h4>
                            <p>Gedung South Quarter, Tower A, Level-18, Jl. RA Kartini, Cilandak - Jakarta Selatan 12430
                            </p>
                        </div>
                        <div class="office">
                            <h4>Bekasi Office 1</h4>
                            <p>GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, Kota Bekasi</p>
                        </div>

                        <div class="footer-links">
                            <h4>Office Phone</h4>
                            <p>
                                (021) 8273-8692
                                <br>
                                Sales@goodeva.co.id
                                <br>
                                ignas@goodeva.co.id
                            </p>
                            <div class="office">
                                <h4>Bekasi Office 2</h4>
                                <p>GOODEVA CIT Division, Grand Galaxy Commercial RSK 6 No. 17, Kota Bekasi</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>



        {{-- <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Goodeva</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div> --}}

    </footer>

    <!-- Scroll Top -->
    {{-- <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> --}}

    {{-- <!-- Preloader -->
    <div id="preloader"></div> --}}

    <!-- WHATSAPP BUTTON-->
    <a href="//wa.me/+6287778291924" class="back-to-top d-flex align-items-center justify-content-center"><img
            src="{{ asset('public/img/assets/wa-chat.png') }}" class="wa-icon"></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/assets_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets_bootstrap/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('public/assets_bootstrap/js/main.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('public/js/smooth-scrollbar.js') }}"></script>
    <script>
        AOS.init();
        Scrollbar.initAll();
    </script>
    @include('scripts.jquery')
    @yield('js_after')

    <script>
        $(document).ready(function() {

            //FUNGSI BURGER BUTTON
            $('.l-burger').click(function() {
                $(this).toggleClass('open');

                $('.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a,.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a .fa-chevron-down')
                    .toggleClass('text-black');

                var height = $(window).scrollTop();

                if (height > 75) {
                    $('.header .navbar').addClass('bg-white');
                    $('.burger-icon').removeClass('bg-white');

                    var _this = $('#logo-utama');
                    var _this = $('#logo-utama-m');
                    var current = _this.attr("src");
                    var swap = "{{ asset('public/img/assets/solution/goodeva logo white.png') }}";
                    _this.attr('src', "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}");
                } else {
                    var isExpanded = $('#burger-i').attr("aria-expanded");
                    if (isExpanded == 'true') {

                        var _this = $('#logo-utama');
                        var _this = $('#logo-utama-m');
                        var current = _this.attr("src");
                        var swap = "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}"
                        @if (
                            !in_array(request()->segment(1), [
                                '',
                                'contact',
                                'goodeva-smart-safety',
                                'goodeva-smart-erp',
                                'goodeva-smart-healthy',
                                'about',
                            ]))
                            $('.header .navbar').removeClass('bg-white');
                            $('.burger-icon').addClass('bg-white');
                            _this.attr('src',
                                "{{ asset('public/img/assets/solution/goodeva logo white.png') }}");
                        @endif

                        @if (in_array(request()->segment(1), ['solutions']))
                            $('#logo-utama').show();
                            $('#logo-utama-m').show();
                            $('#logo-utama-2').hide();
                            $('#logo-utama-m-2').hide();
                        @endif
                    } else {
                        $('.header .navbar').addClass('bg-white');
                        $('.burger-icon').removeClass('bg-white');

                        var _this = $('#logo-utama');
                        var _this = $('#logo-utama-m');
                        var current = _this.attr("src");
                        var swap = "{{ asset('public/img/assets/solution/goodeva logo white.png') }}";
                        _this.attr('src', "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}");

                        @if (in_array(request()->segment(1), ['solutions']))
                            $('#logo-utama').hide();
                            $('#logo-utama-m').hide();
                            $('#logo-utama-2').show();
                            $('#logo-utama-m-2').show();
                        @endif
                    }
                }
            });

            //END FUNGSI BURGER BUTTON

            //TRANSISI NAVBAR HEADER KETIKA MOBILE DAN DESKTOP DI BEBERAPA HALAMAN
            if ($(window).width() < 767) {
                @if (in_array(request()->segment(1), ['solutions']))
                    $('#logo-utama-m').attr('src',
                        "{{ asset('public/img/assets/solution/goodeva logo white.png') }}");
                    $('.burger-icon').addClass('bg-white');

                    var iScrollHeight = $("body").prop("scrollHeight");
                    $(window).scroll(function() {
                        var height = $(window).scrollTop();

                        if (height > 75) {
                            $('.header .navbar').addClass('bg-white');
                            $('.burger-icon').removeClass('bg-white');

                            var _this = $('#logo-utama-m');
                            var current = _this.attr("src");
                            var swap = "{{ asset('public/img/assets/solution/goodeva logo white.png') }}";
                            _this.attr('src',
                                "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}");
                        } else {
                            var isExpanded = $('#burger-i').attr("aria-expanded");
                            if (isExpanded == 'true') {

                            } else {
                                $('.header .navbar').removeClass('bg-white');
                                $('.burger-icon').addClass('bg-white');
                                var _this = $('#logo-utama-m');
                                var current = _this.attr("src");
                                var swap = "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}"
                                _this.attr('src',
                                    "{{ asset('public/img/assets/solution/goodeva logo white.png') }}");

                                @if (in_array(request()->segment(1), ['solutions']))
                                    $('#logo-utama-m').show();
                                    $('#logo-utama-m-2').hide();
                                @endif
                            }
                        }
                    });
                @else
                    $('.header .navbar').addClass('bg-white');
                    $('.burger-icon').removeClass('bg-white');
                    $('#logo-utama-m').attr('src', "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}");
                @endif
            } else {
                @if (in_array(request()->segment(1), ['']))
                    $('#logo-utama').attr('src', "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}");
                    $('.burger-icon').addClass('bg-white');
                @elseif (in_array(request()->segment(1), ['solutions']))
                    $('#logo-utama').attr('src',
                        "{{ asset('public/img/assets/solution/goodeva logo white.png') }}");
                    $('.burger-icon').addClass('bg-white');
                @else
                    $('#logo-utama').attr('src', "{{ asset('public/img/assets/Goodeva-technology-logo.png') }}");
                @endif
            }
            //END TRANSISI NAVBAR HEADER KETIKA MOBILE DAN DESKTOP DI BEBERAPA HALAMAN
        });
    </script>

</body>

</html>
