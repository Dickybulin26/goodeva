<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Goodeva Website</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}



        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">



        @yield('css_before')

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,300,300italic,500italic,600,600italic,700,700italic,900'

                rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic' rel='stylesheet'

                type='text/css'>

        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet'

                type='text/css'>

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link href="{{asset('public/fonts/style.css')}}" rel="stylesheet" type="text/css"/>

        <link href='{{asset('public/fonts/font-awesome.min.css')}}' rel='stylesheet' type='text/css'>



        <!-- components -->

        <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>



        <link href="{{asset('public/css/main-front.css?v=1.14')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/style-custom.css?v=1.71')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/style.css?v=1.64')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/bootstrap-add.css?v=1.0')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/style-mobile.css?v=3.18')}}" rel="stylesheet" type="text/css"/>

        {{-- Effect Fade Scrolling --}}

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>

            .mr-15px {

                margin-right: 15px;

            }

           

           
            #infocard_slider .slick-active{
                opacity: 1 !important;
            }

            #infocard_slider .slick-slide{
                opacity: 0.6;
            }
            


            .header .navbar.navbar-default.navbar-scrolling .navbar-nav > li:hover > a > i, .header .navbar .navbar-nav > li:hover a, .header .navbar .navbar-nav > li:hover a > i {

                color: #63A6B3 !important;

            }

            .text-black{
                color:#000000 !important
            }

            .wrap-inside-nav .inside-col .inside-nav li {

                width: 100%;

            } 

            .wrap-inside-nav-mobile  .inside-nav li {

            width: 100%;

            } 



            .header .navbar {

                /* Ini buat ada effectnya */

                /* padding-top: 20px;

                padding-bottom: 15px; */

                padding-top: 15px;

                padding-bottom: 6px;

            }



            .header .navbar .navbar-nav > li > a {

                font-family: 'Inter', sans-serif; 

                color: #1D1D1D;

                font-weight: 600;

                font-size: 16px;

                margin: 0 11px;

            }

            .footer .footer-social .footer-title{font-family: 'Inter',sans-serif}

            #nav {

                /* -webkit-box-shadow: none !important; */

            }



            .header .navbar .navbar-nav > .current > a {

                color: #1D1D1D;

                font-weight: 900;

            }



            .wrap-inside-nav .inside-col .inside-nav li a > div span:nth-child(2){

                margin-top: -9px;

                /* margin-bottom: 12px; */

                display: block;

            }

            .wrap-inside-nav-mobile .inside-nav li a > div span:nth-child(2) {
                margin-top: 10px;
                display: block;
            }



            .wrap-inside-nav .inside-col .inside-nav li a,.wrap-inside-nav-mobile .inside-nav li a  {

                padding-bottom: 12px;

            }



            .wrap-inside-nav .inside-col .inside-nav li a:hover {

                padding-bottom: 12px;

            }

            .wrap-inside-nav .inside-col .inside-nav li a > div span:nth-child(2) {

                margin-top: -9px;

                /* margin-bottom: 12px; */

                display: block;

                }



                .wrap-inside-nav .inside-col .inside-nav li a,.wrap-inside-nav-mobile .inside-nav li a   {

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



            .header.scrolling-header .navbar.navbar-default.navbar-scrolling, .header.scrolling-header .navbar.navbar-default.navbar-scrolling-fixing {

                padding-bottom: 6px;

                box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;

            }

            .header .navbar {
                box-shadow: 0 3px 5px 0 rgb(0 0 0 / 13%) !important;
            }
            @media (max-width:767px){
                .header .navbar {
                    box-shadow: none !important;
                }

                .header .navbar.bg-white{
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



            .e-footer__nav-list > li > div > ul li {

                margin-bottom: 1rem;

            }



            .e-footer__nav-list > li > div > ul li a {

                font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) 17px/49px Open Sans;

            }



            .footer .footer-contact ul li {

                font-family: 'Open Sans';

                letter-spacing: 0.06px;

                line-height: 22px;

                font-size: 14.5px;

            }

            .l-burger{
                top: 12px;
            }
            
            .l-burger span:nth-child(1)
            {
                width: 30px;
            }

            .l-burger span:nth-child(2)
            {
                width: 24px;
            }

            .l-burger span:nth-child(3)
            {
                width: 18px;
            }

            .l-burger.open span{
                width: 30px !important;
            }
            
            .navbar-collapse.in {
                max-height: 100vh !important;
            }

        </style>

        @yield('css_after')



    </head>

    <body data-scrolling-animations="true">



        {{-- <div id="page-preloader"><span class="spinner"></span></div> --}}



        <!-- Navigation -->

        <header class="header scrolling-header">

            <nav id="nav" class="navbar navbar-default static-nav navbar-fixed-top" role="navigation">

                <div class="container clearfix">

                    <a class="toggle-button visible-xs-block" id="burger-i" data-toggle="collapse" data-target="#navbar-collapse">

                        {{-- <i class="fa fa-navicon" id="nav-button-hamburger"></i> --}}

                        <div class="l-burger">
                            <span class="burger-icon"></span>
                            <span class="burger-icon"></span>
                            <span class="burger-icon"></span>
                        </div>

                        {{-- <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div> --}}

                    </a>

                    <a href="{{url('/')}}">

                        @if (request()->segment(1) == "solutions" )

                            <img class="normal-logo logo-white" id="logo-utama" src="{{asset('public/img/assets/solution/goodeva logo white.png')}}" width="100" alt="logo"/>

                            <img class="normal-logo logo-blue" id="logo-utama-2"  src="{{asset('public/img/assets/logo-goodeva.png')}}" width="100" alt="logo" style="display:none"/>

                        @else

                            <img class="normal-logo " id="logo-utama" onerror="this.style.display='none'"  data-swap="{{asset('public/img/assets/logo-goodeva.png')}}" width="100" />

                        @endif

                    </a>

                    <a class="navbar-brand scroll" href="index.html">

                    </a>

                    <div class="right-nav-block pull-right clearfix">

                        <div class="navbar-collapse collapse floated" id="navbar-collapse">

                            <ul class="nav navbar-nav clearfix pad-mobile-y-3 navbar-with-inside vcenter">

                                <li class="{{ Request::is('/') ? 'current' : '' }}">

                                    <a href="{{ url('/') }}">Home</a>

                                </li>

                                <li class="e-nav--list_child mr-15px desktop-show {{ Request::is('goodeva-smart-safety','goodeva-smart-healthy','goodeva-smart-erp') ? 'current' : '' }}">

                                    <a href="#">Product <i class="fa fa-chevron-down"></i></a>

                                    <div class="wrap-inside-nav left">

                                        <div class="inside-col">

                                            <ul class="inside-nav e-nav--list_child is-withicon">

                                                <li>

                                                    <a href="{{ url('goodeva-smart-safety') }}">

                                                        <div>

                                                            <span>Goodeva Smart Safety</span>

                                                            <span>Advance Safety and Fatigue Solution

                                                            </span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="{{ url('goodeva-smart-healthy') }}">

                                                        <div>

                                                            <span>Goodeva Smart Health</span>

                                                            <span>Simple Automation Health Monitor</span>

                                                        </div>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="{{ url('goodeva-smart-erp') }}">

                                                        <div>

                                                            <span>Goodeva Smart ERP</span>

                                                            <span>Integrated Business Enterprise</span>

                                                        </div>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </li>

                                <li class="dropdown e-nav--list_child wrap-inside-nav-mobile  mr-15px mobile-show">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product
                                        {{-- <span class="caret"></span> --}}
                                        <i class="fa fa-chevron-down"></i>
                                    </a>

                                        {{-- <div class="wrap-inside-nav-mobile"> --}}
                                            <ul class="dropdown-menu inside-nav mx-3 px-3 e-nav--list_child_company">
                                                <li>
                                                    <a href="{{ url('goodeva-smart-safety') }}">

                                                        <div>

                                                            <span>Goodeva Smart Safety</span>

                                                            <span>Advance Safety and Fatigue Solution

                                                            </span>

                                                        </div>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('goodeva-smart-healthy') }}">

                                                        <div>

                                                            <span>Goodeva Smart Health</span>

                                                            <span>Simple Automation Health Monitor</span>

                                                        </div>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('goodeva-smart-erp') }}">

                                                        <div>

                                                            <span>Goodeva Smart ERP</span>

                                                            <span>Integrated Business Enterprise</span>

                                                        </div>

                                                    </a>
                                                </li>
                                            </ul>
                                        {{-- </div>  --}}
                                </li>
                                <li class="{{ Request::is('solutions') ? 'current' : '' }}"><a href="{{ url('solutions') }}">Solutions</a></li>

                                <li class="{{ Request::is('academy') ? 'current' : '' }}"><a href="https://galaxy-code.goodeva.id/" target="_blank">Academy</a></li>

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

                                                    <a href="javascript:void(0)">

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

                                                    <a href="javascript:void(0)">

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

                                                    <a href="javascript:void(0)">

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

                                                    <a href="javascript:void(0)">

                                                        <div>

                                                            <span>Goodeva Media</span>

                                                            <span>Get our latest update</span>

                                                        </div>

                                                    </a>

                                                </li>

                                            </ul>


                                </li>

                                {{-- <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>

                                <li class="social-icon"><a href="#"><i class="fa fa-behance"></i></a></li>

                                <li class="social-icon"><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}

                            </ul>

                        </div>

                    </div>

                </div>

        </header><!--./navigation -->



        @yield('content')



        <!-- Footer -->

        <footer class="footer ">

            <div class="container desktop-show">

                <div class="row footer-nav">

                    <div class="col-md-5">

                        <div class="footer-navigation">

                            <img class="normal-logo mb-20" src="{{asset('public/img/assets/logo-goodeva.png')}}" width="135" alt="logo"/>

                            <br>

                            <p>

                                © Copyright @php echo(date('Y')) @endphp Goodeva Technology

                                <br>

                                All right reserved

                            </p>

                            <div class="mt-5" style="margin-left: -9px;">

                                <ul>

                                    <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-instagram"></i></button></a></li>

                                    <li><a href="#"><button class="btn btn-social-media btn-padding-facebook"><i class="fa fa-facebook"></i></button></a></li>

                                    <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-twitter"></i></button></a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-7">

                        {{-- <div class="footer-nav"> --}}

                            <ul class="e-footer__nav-list">

                                <li>

                                    <div class="footer-social">

                                        <div class="footer-title">Products</div>

                                        <ul>

                                            <li><a href="{{url('goodeva-smart-safety')}}">Goodeva Smart Safety</a></li>

                                            <li class="mb-3"><a href="{{url('goodeva-smart-healthy')}}">Goodeva Smart Health</a></li>

                                            <li class="mb-3"><a href="{{url('goodeva-smart-erp')}}">Goodeva ERP</a></li>

                                        </ul>

                                    </div>



                                </li>

                                <li>

                                    <div class="footer-social">

                                        <div class="footer-title">Company</div>

                                        <ul>

                                            <li><a href="{{url('about')}}">About</a></li>

                                            <li><a href="#">Careers</a></li>

                                            <li><a href="{{ url('contact') }}">Contact</a></li>

                                            <li><a href="#">Cerita Techno</a></li>

                                        </ul>

                                    </div>

                                </li>

                                <li>

                                    <div class="footer-social footer-contact">

                                        <div class="footer-title">Contact Us</div>

                                        <ul>

                                            <li>Grand Galaxy Commercial, Blok RSK 6/15 Jalan Boulevar Raya Timur, Kota Bekasi.</li>

                                        </ul>

                                    </div>

                                </li>

                            </ul>

                        {{-- </div> --}}

                    </div>

            </div>

        </div>

    {{-- </footer>

    <footer class="footer"> --}}

        <div class="container  mobile-show">

            <div class="row footer-nav">

              

                <div class="col-md-12">

                    {{-- <div class="footer-nav"> --}}
                        <div class="row mx-0">

                            <div class="col-xs-7 col-sm-7">

                                <ul class="e-footer__nav-list">

                                    <li>
        
                                        <div class="footer-social">
        
                                            <div class="footer-title">Products</div>
        
                                            <ul>
        
                                                <li><a href="{{url('goodeva-smart-safety')}}">Goodeva Smart Safety</a></li>
        
                                                <li class="mb-3"><a href="{{url('goodeva-smart-healthy')}}">Goodeva Smart Health</a></li>
        
                                                <li class="mb-3"><a href="{{url('goodeva-smart-erp')}}">Goodeva ERP</a></li>
        
                                            </ul>
        
                                        </div>
        
        
        
                                    </li>
                                </ul>
        

                            </div>

                            <div class="col-xs-5 col-sm-5">

                                <ul class="e-footer__nav-list">

                                    <li>
        
                                        <div class="footer-social">
        
                                            <div class="footer-title">Company</div>
        
                                            <ul>
        
                                                <li><a href="{{url('about')}}">About</a></li>
        
                                                <li><a href="#">Careers</a></li>
        
                                                {{-- <li><a href="{{ url('contact') }}">Contact</a></li> --}}
        
                                                <li><a href="#">Cerita Techno</a></li>
        
                                            </ul>
        
                                        </div>
        
                                    </li>
        
                                </ul>
                                
                            </div>

                            <div class="col-xs-12 col-sm-12 mt-5">

                                <ul class="e-footer__nav-list">

                                    <li>
            
                                        <div class="footer-social footer-contact">
        
                                            <div class="footer-title">Contact Us</div>
        
                                            <ul>
        
                                                <li>Grand Galaxy Commercial, Blok RSK 6/15 Jalan Boulevar Raya Timur, Kota Bekasi.</li>
        
                                            </ul>
        
                                        </div>
        
                                    </li>

                                </ul>

                            </div>

                            <div class="col-xs-12 col-sm-12 mt-3">

                                <div class="footer-navigation">

                                    <div>

                                        <ul class="text-left">
            
                                            <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-instagram"></i></button></a></li>
            
                                            <li><a href="#"><button class="btn btn-social-media btn-padding-facebook"><i class="fa fa-facebook"></i></button></a></li>
            
                                            <li><a href="#"><button class="btn btn-social-media"><i class="fa fa-twitter"></i></button></a></li>
            
                                        </ul>

                                    </div>
        
                                </div>

                            </div>

                        </div>
                     
                       

                    {{-- </div> --}}

                </div>

                <div class="col-md-12 col-xs-12">

                    <div class="footer-navigation">

                        <div class="col-xs-12 col-sm-12 text-center mt-5">

                            <img class="normal-logo mb-20" src="{{asset('public/img/assets/logo-goodeva.png')}}" width="135" alt="logo"/>

                            <br>

                            <p>

                                © Copyright @php echo(date('Y')) @endphp Goodeva Technology

                                <br>

                                All right reserved

                            </p>

                        </div>

                    </div>

                </div>

        </div>

    </div>

</footer>



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



        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <!-- custom scripts -->

        <script src="{{asset('public/js/map.js')}}"></script>

        <script src="{{asset('public/js/custom.js')}}"></script>

        {{-- Effect Fade Scrolling --}}

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>

            AOS.init();

        </script>

        @yield('js_after')

        <script>
            $(document).ready(function(){
                $('.l-burger').click(function(){
                    $(this).toggleClass('open');

                    $('.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a,.header .navbar.navbar-default.navbar-fixed-top .navbar-nav li a .fa-chevron-down').toggleClass('text-black');

                    var height = $(window).scrollTop();

                            if(height  > 75) {
                                $('.header .navbar').addClass('bg-white');
                                $('.burger-icon').removeClass('bg-white');

                                var _this =  $('#logo-utama');
                                var current = _this.attr("src");
                                var swap = "{{asset('public/img/assets/solution/goodeva logo white.png')}}";     
                                _this.attr('src', "{{asset('public/img/assets/logo-goodeva.png')}}");
                            }
                            else
                            {
                                var isExpanded = $('#burger-i').attr("aria-expanded");
                                if(isExpanded == 'true'){
                                    
                                    var _this =  $('#logo-utama');
                                    var current = _this.attr("src");
                                    var swap = "{{asset('public/img/assets/logo-goodeva.png')}}"     
                                    @if (!in_array(request()->segment(1),['contact','goodeva-smart-safety','goodeva-smart-erp','goodeva-smart-healthy','about']))
                                    $('.header .navbar').removeClass('bg-white');
                                    $('.burger-icon').addClass('bg-white');
                                    _this.attr('src', "{{asset('public/img/assets/solution/goodeva logo white.png')}}");
                                    @endif

                                    @if (in_array(request()->segment(1),['solutions']))
                                    $('#logo-utama').show();
                                    $('#logo-utama-2').hide();
                                    @endif
                                }
                                else{
                                    $('.header .navbar').addClass('bg-white');
                                    $('.burger-icon').removeClass('bg-white');

                                    var _this =  $('#logo-utama');
                                    var current = _this.attr("src");
                                    var swap = "{{asset('public/img/assets/solution/goodeva logo white.png')}}";     
                                    _this.attr('src', "{{asset('public/img/assets/logo-goodeva.png')}}");

                                    @if (in_array(request()->segment(1),['solutions']))
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

                if($(window).width() < 767)
                {
                    @if (in_array(request()->segment(1),['','solutions']))
                        $('#logo-utama').attr('src',"{{asset('public/img/assets/solution/goodeva logo white.png')}}");
                        $('.burger-icon').addClass('bg-white');

                        var iScrollHeight = $("body").prop("scrollHeight");
                         $(window).scroll(function() {
                            var height = $(window).scrollTop();

                            if(height  > 75) {
                                $('.header .navbar').addClass('bg-white');
                                $('.burger-icon').removeClass('bg-white');

                                var _this =  $('#logo-utama');
                                var current = _this.attr("src");
                                var swap = "{{asset('public/img/assets/solution/goodeva logo white.png')}}";     
                                _this.attr('src', "{{asset('public/img/assets/logo-goodeva.png')}}");
                            }
                            else
                            {
                                var isExpanded = $('#burger-i').attr("aria-expanded");
                                if(isExpanded == 'true'){

                                }
                                else{
                                    $('.header .navbar').removeClass('bg-white');
                                    $('.burger-icon').addClass('bg-white');
                                    var _this =  $('#logo-utama');
                                    var current = _this.attr("src");
                                    var swap = "{{asset('public/img/assets/logo-goodeva.png')}}"     
                                    _this.attr('src', "{{asset('public/img/assets/solution/goodeva logo white.png')}}");

                                    @if (in_array(request()->segment(1),['solutions']))
                                    $('#logo-utama').show();
                                    $('#logo-utama-2').hide();
                                    @endif
                                }
                                

                               
                            }
                        });
                    @else

                    $('#logo-utama').attr('src',"{{asset('public/img/assets/logo-goodeva.png')}}");
                    @endif
                }
                else
                {
                    @if (in_array(request()->segment(1),['']))
                        $('#logo-utama').attr('src',"{{asset('public/img/assets/logo-goodeva.png')}}");
                        $('.burger-icon').addClass('bg-white');
                    @elseif (in_array(request()->segment(1),['solutions']))
                    $('#logo-utama').attr('src',"{{asset('public/img/assets/solution/goodeva logo white.png')}}");
                    $('.burger-icon').addClass('bg-white');
                    @else
                    $('#logo-utama').attr('src',"{{asset('public/img/assets/logo-goodeva.png')}}");
                    
                    @endif
                }
            });
        </script>

    </body>

</html>

