<!DOCTYPE html>

<html lang="en">

<head>

  <title>Goodeva | @yield('title')</title>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}

  <meta name="description" content="@yield('meta_desc')">
  <meta name="keyword" content="@yield('meta_key')">
  <meta name="author" content="@yield('meta_auth')">

  <link rel="icon" href="{{asset('public/img/assets/gdv-icon.png')}}" type="image/x-icon">

  <link rel="shortcut icon" href="{{asset('public/img/assets/gdv-icon.png')}}" type="image/x-icon">



  @yield('css_before')

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,300,300italic,500italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="{{asset('public/fonts/style.css')}}" rel="stylesheet" type="text/css" />

  <link href='{{asset('public/fonts/font-awesome.min.css')}}' rel='stylesheet' type='text/css'>



  <!-- components -->

  <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- <link href="{{asset('public/css/bootstrap.min.css.map')}}" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="{{asset('public/css/bootstrap.css.map')}}" rel="stylesheet" type="text/css" /> -->

  <link href="{{asset('public/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('public/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />



  <link href="{{asset('public/css/main-front.css?v=1.23')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('public/css/style-custom.css?v=2.42')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('public/css/style.css?v=1.78')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('public/css/bootstrap-add.css?v=1.1')}}" rel="stylesheet" type="text/css" />

  <link href="{{asset('public/css/style-mobile.css?v=3.38')}}" rel="stylesheet" type="text/css" />

  {{-- Effect Fade Scrolling --}}

  <link rel="stylesheet" href="{{asset('public/css/smooth-scroll.css')}}">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <!-- UA-140427921-1 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HFFZ0LR894"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HFFZ0LR894');
  </script>

  <style>
    .txt-blue {
      color: #088A98 !important;
    }

    .txt-header-footer-alamat {
      font-weight: 600;
      color: #143477;
    }

    .img-bagian {
      width: 10%;
      margin-left: 10px;
    }

    .mr-15px {

      margin-right: 15px;

    }

    .b-radius10px {
      border-radius: 10px !important;
    }

    .pb-4rem {
      padding-bottom: 4rem !important;
    }

    .mt-4rem {
      margin-top: 4rem !important;
    }

    .mb-6rem {
      margin-bottom: 6rem !important;
    }

    .pt-6rem {
      padding-top: 6rem !important;
    }

    .pb-6rem {
      padding-bottom: 6rem !important;
    }

    .e-footer__nav-list>li>div>ul li{
      margin-bottom: 0.5rem;
    }

    .footer .footer-social .footer-title,
    .txt-header-footer-alamat{
      margin-bottom: 10px;
    }

    .e-footer__nav-list > li:nth-child(1){
      width: 11vw;
    }

    .e-footer__nav-list>li:nth-child(3) {
      width: 10vw;
    }

    .e-footer__nav-list>li:nth-child(2) {
      width: 13vw;
    }

    @media(max-width:767px) {
      .wrap-inside-nav.left {
        background: #000000;
      }

      .mt-sm-0 {
        margin-top: 0 !important;
      }

      .mb-sm-0 {
        margin-bottom: 0 !important;
      }

      .footer .footer-nav{
        padding-top: 20px;
      }

      .footer-navigation{
        margin-bottom: 0;
      }
      .footer-navigation p{        
        font-size: 12.68px;
        font-weight: 400;
        line-height: 21.74px;
        text-align: left;
        color: #9B9B9C !important;

      }

      .e-footer__nav-list > li:nth-child(1){
        width: auto;
      }

      .e-footer__nav-list > li{
        margin-right: 0;
        margin-left: 0;
      }
    }

    @media(min-width:767px) and (max-width:992px) {
      .footer-tablet:nth-child(1) {
        order: 2;
      }

      .footer .desktop-show .row {
        display: flex;
        flex-wrap: wrap;
      }

      .footer-tablet:nth-child(2) {
        order: 1;
      }

      .part-footer:nth-child(1) {
        order: 2;
      }

      .part-footer:nth-child(2)>div {
        margin-bottom: 3rem !important;
        margin-top: .5rem !important;
      }


      .part-footer:nth-child(2) {
        order: 1;
      }

      .footer .footer-tablet:nth-child(1) {
        text-align: center;
      }

      .footer-navigation {
        margin-top: 30px;
      }

      .footer .footer-nav {
        padding-bottom: 20px;
      }
    }

    @media(max-width:767px) {
      .footer-tablet:nth-child(1) {
        order: 2;
      }

      .footer .desktop-show .row {
        display: flex;
        flex-wrap: wrap;
      }

      .footer-tablet:nth-child(2) {
        order: 1;
      }

      .part-footer:nth-child(1) {
        order: 2;
      }

      .part-footer:nth-child(2)>div {
        margin-bottom: 3rem !important;
        margin-top: .5rem !important;
      }


      .part-footer:nth-child(2) {
        order: 1;
      }

      .footer .footer-tablet:nth-child(1) {
        text-align: center;
      }

      .footer .footer-nav {
        padding-bottom: 20px;
      }
    }

    .bg-blue-header {
      background: #192535;
    }

    .bg-cyan-header {
      background: #068391;
    }

    .bg-purple-header {
      background: #33344A;
    }

    #infocard_slider .slick-active {
      opacity: 1 !important;
    }

    #infocard_slider .slick-slide {
      opacity: 0.6;
    }



    .header .navbar.navbar-default.navbar-scrolling .navbar-nav>li:hover>a>i,
    .header .navbar .navbar-nav>li:hover a,
    .header .navbar .navbar-nav>li:hover a>i {

      color: #63A6B3 !important;

    }

    .header .navbar .navbar-nav>li:hover a {
      border-radius: 10px;
    }

    .text-black {
      color: #000000 !important
    }

    .wrap-inside-nav .inside-col .inside-nav li {

      width: 100%;

    }

    .wrap-inside-nav-mobile .inside-nav li {

      width: 100%;

    }



    .header .navbar {

      /* Ini buat ada effectnya */

      /* padding-top: 20px;

                padding-bottom: 15px; */

      padding-top: 15px;

      padding-bottom: 6px;

      background: #f5f5f5
    }



    .header .navbar .navbar-nav>li>a {

      font-family: 'Inter', sans-serif;

      color: #1D1D1D;

      font-weight: 500;

      font-size: 16px;

      margin: 0 11px;

    }

    .footer .footer-social .footer-title {
      font-family: 'Inter', sans-serif
    }

    #nav {

      /* -webkit-box-shadow: none !important; */

    }



    .header .navbar .navbar-nav>.current>a {

      color: #1D1D1D;

      font-weight: 600;

    }



    .wrap-inside-nav .inside-col .inside-nav li a>div span:nth-child(2) {

      margin-top: -9px;

      /* margin-bottom: 12px; */

      display: block;

    }

    .wrap-inside-nav-mobile .inside-nav li a>div span:nth-child(2) {
      margin-top: 10px;
      display: block;
    }



    .wrap-inside-nav .inside-col .inside-nav li a,
    .wrap-inside-nav-mobile .inside-nav li a {

      padding-bottom: 12px;

    }



    .wrap-inside-nav .inside-col .inside-nav li a:hover {

      padding-bottom: 12px;

    }

    .wrap-inside-nav .inside-col .inside-nav li a>div span:nth-child(2) {

      margin-top: -9px;

      /* margin-bottom: 12px; */

      display: block;

    }



    .wrap-inside-nav .inside-col .inside-nav li a,
    .wrap-inside-nav-mobile .inside-nav li a {

      padding-bottom: 12px;

    }



    .wrap-inside-nav .inside-col .inside-nav li a:hover {

      padding-bottom: 12px;

    }



    .fa-chevron-down {

      font-size: 11px;

      /* color: #535161;

                margin-left: 3px; */

      font-size: 11px;

      color: #666477;

      margin-left: 3px;

      position: absolute;

      top: 14.5px;

      right: -13px;

    }



    .header.scrolling-header .navbar.navbar-default.navbar-scrolling,
    .header.scrolling-header .navbar.navbar-default.navbar-scrolling-fixing {

      padding-bottom: 6px;

      box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;

    }

    .header .navbar {
      box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
    }

    @media (max-width:767px) {

      .bg-submenu.smart-safety {
        background: transparent !important;
      }

      .bg-submenu.sales-automation {
        background: transparent !important;
      }

      .bg-submenu.goodeva-enterprise {
        background: transparent !important;
      }

      .bg-submenu.digital-growth {
        background: transparent !important;
      }

      .header .navbar {
        box-shadow: none !important;
      }

      .header .navbar.bg-white {
        box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
      }
    }






    /* Footer */

    .footer p {

      letter-spacing: 0.08px;

      font-family: 'Open Sans' !important;

      font-size: 14.5px;

      font-weight: 500;

    }

    .e-footer__nav-list>li>div>ul li a {

      font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) 17px/49px Open Sans;

    }



    .footer .footer-contact ul li {

      font-family: 'Open Sans';

      letter-spacing: 0.06px;

      line-height: 22px;

      font-size: 14.5px;

    }

    .l-burger {
      top: 12px;
    }

    .l-burger span{
      background-color: #26A7B5;
      height: 5px;
    }

    .l-burger.open span{
      height: 3px;
    }

    .l-burger span:nth-child(1) {
      width: 30px;
    }

    .l-burger span:nth-child(2) {
      width: 24px;
      margin: 7px 3px;
    }
    
    .l-burger.open span:nth-child(2) {
      margin: 7px 0;
    }

    .l-burger span:nth-child(3) {
      width: 18px;
    }

    .l-burger.open span {
      width: 30px !important;
    }

    .navbar-collapse.in {
      max-height: 100vh !important;
    }

    #data_scrollbar {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
    }

    

    .bg-submenu.smart-safety {
      background: url('{{ asset("public/asset-goodeva-lp/navbar/bg-menu-smart-safety.png") }}');
    }
    
    .bg-submenu.goodeva-enterprise {
      background: url('{{ asset("public/asset-goodeva-lp/navbar/bg-website-development.png") }}');
    }

    .bg-submenu.sales-automation {
      background: url('{{ asset("public/asset-goodeva-lp/navbar/bg-menu-sales-automation.png") }}');
    }

    .bg-submenu.digital-growth {
      background: url('{{ asset("public/asset-goodeva-lp/navbar/bg-menu-digital-growth.png") }}');
    }

    .wrap-inside-nav.left {
      background: #000000;
    }

    .bg-submenu.smart-safety:hover,
    .bg-submenu.sales-automation:hover,
    .bg-submenu.goodeva-enterprise:hover,
    .bg-submenu.digital-growth:hover {
      background-size: 115%;
      transition: background-size .25s;
    }


    .wrap-inside-nav .inside-col .inside-nav li.bg-submenu a>div span:nth-child(1),
    .wrap-inside-nav .inside-col .inside-nav li.bg-submenu a>div span:nth-child(2) {
      color: #ffff !important;
    }

    .wrap-inside-nav .inside-col .inside-nav li:nth-child(1) a:hover {
      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
    }

    .wrap-inside-nav .inside-col .inside-nav li a:hover,
    .wrap-inside-nav .inside-col .inside-nav li a:active:hover,
    .wrap-inside-nav .inside-col .inside-nav li a:visited:hover,
    .wrap-inside-nav .inside-col .inside-nav li a:focus:hover {
      color: #1D1D1D !important;
      background: #706f7082;
    }

    .wrap-inside-nav .inside-col .e-nav--list_child li:nth-child(1) {
      /* border-bottom: 1px solid #E5E5E5; */
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .wrap-inside-nav .inside-col .e-nav--list_child li:nth-child(1),
    .wrap-inside-nav .inside-col .e-nav--list_child li:nth-child(2) {
      border-bottom: 0px solid #E5E5E5 !important;
    }

    .wrap-inside-nav .inside-col .e-nav--list_child li:nth-child(3),
    .wrap-inside-nav .inside-col .inside-nav li:nth-last-child(1) a:hover {
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .part-footer img.goodeva-part {
      margin: 5px;
    }

    nav i,
    nav [class^="mdi-"],
    nav [class*="mdi-"],
    nav i.material-icons {
      height: 0px;
    }

    .flex-lang {
      display: flex !important;
      align-items: center;
      justify-content: space-between;
    }

    .transition-content {
      transition: .25s;
    }

    .img-w75 {
      width: 75%;
    }

    .img-w15 {
      width: 15% !important;
    }

    _::-webkit-full-page-media,
      _:future,
      :root .wa-icon{
        width: 40px;
        text-align: center;
        /* margin: auto; */
        margin-left: 15px;
        margin-top: 12px;
      }

      .wa-icon{
        width: 30px;
    text-align: center;
    /* margin: auto; */
    margin-left: 21px;
    margin-top: 19px;
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

    .datepicker-dropdown {
        padding: 20px !important;
    }

  </style>

  @yield('css_after')



</head>

<body data-scrolling-animations="true">

  <section>

    <!-- Navigation -->
    <header class="header scrolling-header">

      <nav id="nav" class="navbar navbar-default static-nav navbar-fixed-top" role="navigation">

        <div class="container clearfix">

          <!-- burger icon show when view in responsive -->
          <a class="toggle-button visible-xs-block" id="burger-i" data-toggle="collapse" data-target="#navbar-collapse">

            <div class="l-burger">
              <span class="burger-icon"></span>
              <span class="burger-icon"></span>
              {{-- <span class="burger-icon"></span> --}}
            </div>

          </a>

          <!-- logo company - goodeva -->
          <a href="{{url('/')}}">

            @if (request()->segment(1) == "solutions")

            <img class="normal-logo logo-white" id="logo-utama" src="{{asset('public/img/assets/solution/goodeva logo white.png')}}" width="100" alt="logo" />

            <img class="normal-logo logo-blue" id="logo-utama-2" src="{{asset('public/img/assets/Goodeva-technology-logo.png')}}" width="100" alt="logo" style="display:none" />

            @else

            <img class="normal-logo " id="logo-utama" onerror="this.style.display='none'" data-swap="{{asset('public/img/assets/Goodeva-technology-logo.png')}}" width="100" />

            @endif

          </a>

          <a class="navbar-brand scroll" href="index.html">

          </a>

          <div class="right-nav-block pull-right clearfix">

            <div class="navbar-collapse collapse floated" id="navbar-collapse">

              <!-- list menu navbar -->
              <ul class="nav navbar-nav clearfix pad-mobile-y-3 navbar-with-inside vcenter">

                <!-- menu home -->
                <li class="{{ Request::is('/') ? 'current' : '' }}">
                  <a href="{{ url('/') }}">Home</a>
                </li>

                <!-- menu product dan submenunya untuk tampilan desktop -->
                <li class="e-nav--list_child mr-15px desktop-show {{ Request::is('goodeva-smart-safety','goodeva-omsetku','goodeva-smart-erp') ? 'current' : '' }}">

                  <a href="#">Product <i class="fa fa-chevron-down"></i></a>

                  <div class="wrap-inside-nav left">

                    <div class="inside-col">

                      <!-- list submenu product -->
                      <ul class="inside-nav e-nav--list_child is-withicon">

                        <!-- menu smart safety -->
                        <li class="bg-submenu smart-safety transition-content">

                          <a href="{{ url('goodeva-smart-safety') }}">

                            <div>

                              <span>Smart Safety</span>

                              <span>Fatigue Solution</span>

                            </div>

                          </a>

                        </li>

                        <!-- menu sales automation -->
                        <li class="bg-submenu sales-automation transition-content">

                          {{--<a href="https://omsetku.id" target="_blank">--}}
                          <a href="{{ url('goodeva-sales-trace') }}">

                            <div>

                              <span>Sales Automation</span>

                              <span>CRM Solutions</span>

                            </div>

                          </a>

                        </li>

                        <!-- menu goodeva enterprise -->
                        <li class="bg-submenu goodeva-enterprise transition-content">

                          <a href="{{ url('goodeva-enterprise') }}">

                            <div>

                              <span>Goodeva Enterprise</span>
                              <span>Solusi Technology</span>

                            </div>

                          </a>

                        </li>

                        <!-- menu digital growth -->
                        <li class="bg-submenu digital-growth transition-content">

                          <a href="https://digideva.id" target="_blank">

                            <div>

                              <span>Digital Growth</span>
                              <span>Marketing Solutions</span>

                            </div>

                          </a>

                        </li>

                      </ul>

                    </div>

                  </div>

                </li>
                <!-- end menu product dan submenunya untuk tampilan desktop -->

                <!-- menu product dan submenunya untuk tampilan mobile -->
                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile  mr-15px mobile-show">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product
                    <i class="fa fa-chevron-down"></i>
                  </a>

                  <!-- list submenu product -->
                  <ul class="dropdown-menu inside-nav mx-3 px-3 e-nav--list_child_company">

                    <!-- menu smart safety -->
                    <li class="bg-submenu smart-safety transition-content">
                      <a href="{{ url('goodeva-smart-safety') }}">

                        <div>

                          <span>Smart Safety</span>
                          <span>Fatigue Solution</span>

                        </div>

                      </a>
                    </li>

                    <!-- menu sales automation -->
                    <li class="bg-submenu sales-automation transition-content">
                      {{--<a href="https://omsetku.id" target="_blank">--}}
                      <a href="{{ url('goodeva-sales-trace') }}">

                        <div>

                          <span>Sales Automation</span>
                          <span>CRM Solutions</span>

                        </div>

                      </a>
                    </li>

                     <!-- menu goodeva enterprise -->
                     <li class="bg-submenu goodeva-enterprise transition-content">

                      <a href="{{ url('goodeva-enterprise') }}">

                        <div>

                          <span>Goodeva Enterprise</span>
                          <span>Solusi Technology</span>

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
                <li class="{{ Request::is('solutions') ? 'current' : '' }}"><a href="{{ url('solutions') }}">Solutions</a></li>

                <!-- menu academy -->
                <li class="{{ Request::is('academy') ? 'current' : '' }}"><a href="https://galaxy-code.goodeva.id/" target="_blank">Academy</a></li>

                <!-- menu academy untuk tampilan desktop -->
                <li class="e-nav--list_child mr-15px desktop-show {{ Request::is('about') ? 'current' : '' }}">

                  <a href="#">Company <i class="fa fa-chevron-down"></i></a>

                  <div class="wrap-inside-nav right ">

                    <div class="inside-col">

                      <ul class="inside-nav e-nav--list_child_company is-withicon">

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

                    </div>

                  </div>

                </li>

                <!-- menu academy untuk tampilan mobile -->
                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile  mr-15px mobile-show {{ Request::is('about') ? 'current' : '' }}">

                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Company <i class="fa fa-chevron-down"></i></a>

                  <ul class="dropdown-menu inside-nav inside-nav mx-3 px-3 e-nav--list_child_company is-withicon">

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

                <!-- pilih bahasa desktop -->
                <li class="e-nav--list_child mr-15px desktop-show {{ Request::is('#') ? 'current' : '' }}">

                  <a href="#" class="flex-lang">English
                    <!-- <i class="fa fa-globe"></i> -->
                    &nbsp;
                    <img src="{{ url('public/asset-goodeva-lp/navbar/icon-language.png') }}" alt="" style="width: 14px;">
                  </a>

                  <!-- <div class="wrap-inside-nav right "> -->
                  <!--  -->
                  <!-- <div class="inside-col"> -->
                  <!--  -->
                  <!-- <ul class="inside-nav e-nav--list_child_company is-withicon"> -->
                  <!--  -->
                  <!-- <li> -->
                  <!--  -->
                  <!-- <a href="{{ url('#') }}"> -->
                  <!--  -->
                  <!-- <div> -->
                  <!--  -->
                  <!-- <span>Indonesia</span> -->
                  <!--  -->
                  <!-- </div> -->
                  <!--  -->
                  <!-- </a> -->
                  <!--  -->
                  <!-- </li> -->
                  <!--  -->
                  <!-- <li> -->
                  <!--  -->
                  <!-- <a href="#"> -->
                  <!--  -->
                  <!-- <div> -->
                  <!--  -->
                  <!-- <span>English</span> -->
                  <!--  -->
                  <!-- </div> -->
                  <!--  -->
                  <!-- </a> -->
                  <!--  -->
                  <!-- </li> -->
                  <!--  -->
                  <!--  -->
                  <!-- </ul> -->
                  <!--  -->
                  <!-- </div> -->
                  <!--  -->
                  <!-- </div> -->

                </li>

                <!-- pilih bahasa mobile -->
                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile mobile-show {{ Request::is('#') ? 'current' : '' }}">

                  <a href="#" class="flex-lang">English 
                    <img src="{{ url('public/asset-goodeva-lp/navbar/icon-language.png') }}" alt="" style="width: 14px;">
                  </a>

                </li>

              </ul>

            </div>

          </div>

        </div>

    </header>
    <!--./navigation -->





    @yield('content')



    <!-- Footer -->

    <footer class="footer ">

      <!---- footer desktop ---->
      <div class="container desktop-show">

        <div class="row footer-nav">

          <div class="col-md-4 col-sm-12 footer-tablet">


            <div class="footer-navigation">

              <div class="row">

                <div class="col-md-12 col-sm-12 part-footer">

                  <img class="normal-logo mb-20" src="{{asset('public/img/assets/Goodeva-technology-logo.png')}}" width="135" alt="logo" />

                  <br>

                  <p>

                    © Copyright @php echo(date('Y')) @endphp Goodeva Technology

                    <br>

                    All right reserved

                  </p>

                </div>

                <div class="col-md-12 col-sm-12 part-footer mt-2" style="display: flex; align-items:center;">
                  <div class="row">
                    <div class="col-md-12 col-lg-12">
                      <p>Goodeva part of :</p>
                    </div>
                    <div class="col-md-12 col-lg-12">
                      <img src="{{asset('public/img/assets/home/Logo-Astra-Startup-Community-default.png')}}" width="125" alt="" class="goodeva-part">
                      <img src="{{asset('public/img/assets/home/astra-startup.png')}}" width="50" alt="" class="goodeva-part">
                    </div>
                  </div>


                </div>

              </div>
            </div>

          </div>


          <div class="col-md-8 col-sm-12 footer-tablet">
            <ul class="e-footer__nav-list">

              <li>

                <div class="footer-social">

                  <div class="footer-title">Products</div>

                  <ul>

                    <li><a href="{{url('goodeva-smart-safety')}}">Goodeva Smart Safety</a></li>

                    {{--<li class="mb-3"><a href="https://omsetku.id/" target="_blank">Goodeva Omsetku</a></li>--}}
                    <li><a href="{{ url('goodeva-sales-trace') }}">Goodeva Salestrace</a></li>

                    <li><a href="{{ url('goodeva-enterpise') }}">Goodeva Enterprise</a></li>                    

                    <li>
                      <div class="mt-1 part-footer">

                        <ul style="display:flex; ">

                          <li><a target="_blank" href="https://www.instagram.com/goodeva.id/?hl=en"><button class="btn btn-social-media"><i class="fa fa-instagram"></i></button></a></li>

                          <li><a target="_blank" href="https://www.facebook.com/Goodeva-technology-103031931477024"><button class="btn btn-social-media btn-padding-facebook ml-2"><i class="fa fa-facebook"></i></button></a></li>

                          {{-- <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-twitter"></i></button></a></li> --}}

                        </ul>

                      </div>
                    </li>

                  </ul>

                </div>

              </li>

              {{-- <li>

                <div class="txt-header-footer-alamat">Jakarta Office</div>
                <p>Gedung South Quarter, Tower A, Level-18, Jl. RA Kartini, Cilandak - Jakarta Selatan 12430</p>

                <div class="txt-header-footer-alamat mt-4">Bekasi Office 1</div>
                <p>
                  GOODEVA CBD Division,
                  <br>
                  Grand Galaxy Commercial
                  <br>
                  RSK 6 No. 15, Kota Bekasi
                </p>

              </li>

              <li>

                <div class="txt-header-footer-alamat">Office Phone</div>
                <p>
                  (021) 8273-8692
                  <br>
                  Sales@goodeva.co.id
                  <br>
                  ignas@goodeva.co.id

                </p>

                <div class="txt-header-footer-alamat mt-4">Bekasi Office 2</div>
                <p>
                  GOODEVA CIT Division,
                  <br>
                  Grand Galaxy Commercial
                  <br>
                  RSK 6 No. 17, Kota Bekasi
                </p>

              </li> --}}
              <li>

                <div class="txt-header-footer-alamat">Bekasi Office 1</div>
                <p>GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, Kota Bekasi</p>

                <div class="txt-header-footer-alamat mt-3">Bekasi Office 2</div>
                <p>
                  GOODEVA CIT Division, Grand Galaxy Commercial RSK 6 No. 17, Kota Bekasi
                </p>

              </li>

              <li>

                <div class="txt-header-footer-alamat">Office Phone</div>
                <p>
                  (021) 8273-8692
                  <br>
                  Sales@goodeva.co.id
                  <br>
                  ignas@goodeva.co.id

                </p>

              </li>

            </ul>


          </div>

        </div>

      </div>


      <!---- footer mobile ---->
      <div class="container  mobile-show">

        <div class="row footer-nav">

          <div class="col-md-12">

            {{-- <div class="footer-nav"> --}}
            <div class="row mx-0">

              <div class="col-md-12 col-xs-12 px-0">

                <div class="footer-navigation mb-3">                      
    
                    <img class="normal-logo mb-20" src="{{asset('public/img/assets/Goodeva-technology-logo.png')}}" width="135" alt="logo" />                        
    
                    <p class="font-inter">
    
                      Our flagship platform adopt artificial intelligence to serve better experience and help your business go beyond innovation
    
                    </p>                      
    
                </div>
    
              </div>

              <div class="col-xs-6 col-sm-6 px-0">

                <ul class="e-footer__nav-list">

                  <li>

                    <div class="footer-social">

                      <div class="footer-title">Products</div>

                      <ul>

                        <li class="mb-2"><a href="{{url('goodeva-smart-safety')}}">Goodeva Smart Safety</a></li>

                        {{--<li class="mb-3"><a href="https://omsetku.id/" target="_blank">Goodeva Omsetku</a></li>--}}
                        <li class="mb-2"><a href="{{ url('goodeva-sales-trace') }}">Goodeva Salestrace</a></li>
                        <li class="mb-2"><a href="{{ url('goodeva-enterprise') }}">Goodeva Enterprise</a></li>                        

                      </ul>

                    </div>

                  </li>
                </ul>
                <div class="footer-social mt-3">

                  <div class="footer-title">Goodeva's part of :</div>
                  <!-- {{--<img src="{{asset('public/img/assets/home/astra-startup.png')}}" class="mr-2" width="60" alt="">--}} -->
                  <img src="{{asset('public/img/assets/home/astra-startup.png')}}" width="40" alt="" class="goodeva-part">
                  <img src="{{asset('public/img/assets/home/Logo-Astra-Startup-Community-default.png')}}" width="85" alt="" class="goodeva-part">
                </div>

                <div class="mt-4 part-footer">

                  <ul style="display:flex; ">

                    <li><a target="_blank" href="https://www.instagram.com/goodeva.id/?hl=en"><button class="btn btn-social-media"><i class="fa fa-instagram"></i></button></a></li>

                    <li><a target="_blank" href="https://www.facebook.com/Goodeva-technology-103031931477024"><button class="btn btn-social-media btn-padding-facebook ml-2"><i class="fa fa-facebook"></i></button></a></li>

                    {{-- <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-twitter"></i></button></a></li> --}}

                  </ul>

                </div>

              </div>

              <div class="col-xs-6 col-sm-6 px-0">

                <div class="footer-social footer-contact">

                  <div class="footer-title">Bekasi Office 1</div>
                  <p class="mb-3">GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, Kota Bekasi</p>


                </div>

                <div class="footer-social footer-contact">
                  <div class="footer-title">Office phone</div>
                  <ul class="mb-3">
                    <li>(021) 8273-8692</li>
                    <li>Sales@goodeva.co.id </li>
                    <li>ignas@goodeva.co.id</li>
                  </ul>
                </div>

                <div class="footer-social footer-contact">

                  <div class="footer-title">Bekasi Office 2</div>
                  <p>GOODEVA CIT Division, Grand Galaxy Commercial RSK 6 No. 17, Kota Bekasi</p>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>

    </footer>

  </section>

  <!-- <a href="//wa.me/+6281296901880" class="back-to-top d-flex align-items-center justify-content-center"><img src="{{ asset('public/img/assets/wa-chat.png')}}" class="wa-icon"></a> -->
  <a href="//wa.me/+6287778291924" class="back-to-top d-flex align-items-center justify-content-center"><img src="{{ asset('public/img/assets/wa-chat.png')}}" class="wa-icon"></a>

  <!-- Scripts -->



  <!-- components -->

  <script src="{{asset('public/js/jquery.min.js')}}"></script>

  <script src="{{asset('public/js/scrollreveal.js')}}"></script>

  <script src="{{asset('public/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>

  <script src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>

  <script src="{{asset('public/js/wow.min.js')}}"></script>

  <script src="{{asset('public/js/isotope.pkgd.min.js')}}"></script>

  <script src="{{asset('public/js/masonry.pkgd.min.js')}}"></script>

  <script src="{{asset('public/js/modernizr.js')}}"></script>

  <script src="{{asset('public/js/jquery.scrollme.min.js')}}"></script>

  <script src="{{asset('public/js/jquery.spincrement.min.js')}}"></script>

  <script src="{{asset('public/js/jqBootstrapValidation.js')}}"></script>

  {{-- <script src="{{asset('public/js/contact_me.js')}}"></script> --}}



  <!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->

  <!-- custom scripts -->

  <script src="{{asset('public/js/map.js')}}"></script>

  <script src="{{asset('public/js/custom.js')}}"></script>

  {{-- Effect Fade Scrolling --}}

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>


  <script src="{{asset('public/js/smooth-scrollbar.js')}}"></script>

  <script>
    Scrollbar.initAll();
  </script>


  @yield('js_after')

  <script>
    $(document).ready(function() {
      $('.l-burger').click(function() {
        $(this).toggleClass('open');

        $('.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a,.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a .fa-chevron-down').toggleClass('text-black');

        var height = $(window).scrollTop();

        if (height > 75) {
          $('.header .navbar').addClass('bg-white');
          $('.burger-icon').removeClass('bg-white');

          var _this = $('#logo-utama');
          var current = _this.attr("src");
          var swap = "{{asset('public/img/assets/solution/goodeva logo white.png')}}";
          _this.attr('src', "{{asset('public/img/assets/Goodeva-technology-logo.png')}}");
        } else {
          var isExpanded = $('#burger-i').attr("aria-expanded");
          if (isExpanded == 'true') {

            var _this = $('#logo-utama');
            var current = _this.attr("src");
            var swap = "{{asset('public/img/assets/Goodeva-technology-logo.png')}}"
            @if(!in_array(request() -> segment(1), ['','contact', 'goodeva-smart-safety', 'goodeva-smart-erp', 'goodeva-smart-healthy', 'about']))
            $('.header .navbar').removeClass('bg-white');
            $('.burger-icon').addClass('bg-white');
            _this.attr('src', "{{asset('public/img/assets/solution/goodeva logo white.png')}}");
            @endif

            @if(in_array(request() -> segment(1), ['solutions']))
            $('#logo-utama').show();
            $('#logo-utama-2').hide();
            @endif
          } else {
            $('.header .navbar').addClass('bg-white');
            $('.burger-icon').removeClass('bg-white');

            var _this = $('#logo-utama');
            var current = _this.attr("src");
            var swap = "{{asset('public/img/assets/solution/goodeva logo white.png')}}";
            _this.attr('src', "{{asset('public/img/assets/Goodeva-technology-logo.png')}}");

            @if(in_array(request() -> segment(1), ['solutions']))
            $('#logo-utama').hide();
            $('#logo-utama-2').show();
            @endif

          }



        }


        // $('.header .navbar').toggleClass('bg-white');
        // $('.burger-icon').toggleClass('bg-white');

        // var _this =  $('#logo-utama');
        // var current = _this.attr("src");
        // var swap = _this.attr('data-swap');     
        // _this.attr('src', swap).attr("data-swap",current);

      });

      if ($(window).width() < 767) {
        @if(in_array(request() -> segment(1), ['solutions']))
        $('#logo-utama').attr('src', "{{asset('public/img/assets/solution/goodeva logo white.png')}}");
        $('.burger-icon').addClass('bg-white');

        var iScrollHeight = $("body").prop("scrollHeight");
        $(window).scroll(function() {
          var height = $(window).scrollTop();

          if (height > 75) {
            $('.header .navbar').addClass('bg-white');
            $('.burger-icon').removeClass('bg-white');

            var _this = $('#logo-utama');
            var current = _this.attr("src");
            var swap = "{{asset('public/img/assets/solution/goodeva logo white.png')}}";
            _this.attr('src', "{{asset('public/img/assets/Goodeva-technology-logo.png')}}");
          } else {
            var isExpanded = $('#burger-i').attr("aria-expanded");
            if (isExpanded == 'true') {

            } else {
              $('.header .navbar').removeClass('bg-white');
              $('.burger-icon').addClass('bg-white');
              var _this = $('#logo-utama');
              var current = _this.attr("src");
              var swap = "{{asset('public/img/assets/Goodeva-technology-logo.png')}}"
              _this.attr('src', "{{asset('public/img/assets/solution/goodeva logo white.png')}}");

              @if(in_array(request() -> segment(1), ['solutions']))
              $('#logo-utama').show();
              $('#logo-utama-2').hide();
              @endif
            }



          }
        });
        @else
        $('.header .navbar').addClass('bg-white');
        $('.burger-icon').removeClass('bg-white');
        $('#logo-utama').attr('src', "{{asset('public/img/assets/Goodeva-technology-logo.png')}}");
        @endif
      } else {
        @if(in_array(request() -> segment(1), ['']))
        $('#logo-utama').attr('src', "{{asset('public/img/assets/Goodeva-technology-logo.png')}}");
        $('.burger-icon').addClass('bg-white');
        @elseif(in_array(request() -> segment(1), ['solutions']))
        $('#logo-utama').attr('src', "{{asset('public/img/assets/solution/goodeva logo white.png')}}");
        $('.burger-icon').addClass('bg-white');
        @else
        $('#logo-utama').attr('src', "{{asset('public/img/assets/Goodeva-technology-logo.png')}}");

        @endif
      }
    });
  </script>

</body>

</html>