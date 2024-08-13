@extends('layouts.main')

@section('container')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <a href="#"><img src="https://goodeva.co.id/public/img/assets/Goodeva-technology-logo.png" alt="logo-nav"
                        class="img-fluid" /></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto fw-bold" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item smart-safety dropdown-item-with-image">
                                <a href="#">
                                    <span class="">Smart Safety</span>
                                    <span class="sub-link">Fatigue Solution</span>
                                </a>
                            </li>
                            <li class="dropdown-item sales-automation dropdown-item-with-image">
                                <a href="#">
                                    <span class="">Sales Automation</span>
                                    <span class="sub-link">CRM Solutions</span>
                                </a>
                            </li>
                            <li class="dropdown-item goodeva-enterprise dropdown-item-with-image">
                                <a href="#">
                                    <span class="">Goodeva Enterprise</span>
                                    <span class="sub-link">Solusi Technology</span>
                                </a>
                            </li>
                            <li class="dropdown-item digital-growth dropdown-item-with-image">
                                <a href="#">
                                    <span>Digital Growth</span>
                                    <span class="sub-link">Marketing Solutions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#">Solutions</a></li>
                    <li><a class="nav-link scrollto" href="#">Academy</a></li>
                    <li class="dropdown dropdown-company">
                        <a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="#">
                                    <span>About</span>
                                    <span class="sub-link">Learn more about us</span>
                                </a>
                            </li>
                            <hr class="dropdown-divider" />
                            <li class="dropdown-item">
                                <a href="#">
                                    <span>Careers</span>
                                    <span class="sub-link">Explore our openings</span>
                                </a>
                            </li>
                            <hr class="dropdown-divider" />
                            <li class="dropdown-item">
                                <a href="#">
                                    <span>Contact</span>
                                    <span class="sub-link">Keep in touch with us</span>
                                </a>
                            </li>
                            <hr class="dropdown-divider" />
                            <li class="dropdown-item">
                                <a href="#">
                                    <span>Goodeva Media</span>
                                    <span class="sub-link">Get our latest update</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto bahasa" href="#">English <i class="bi bi-globe2"></i></a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="smartsafety-hero" class="smartsafety-hero mt-lg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="bg-hero img-fluid" src="../assets/img/smartsafety/smartsafety-hero.png" alt="" />
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <h3>Goodeva</h3>
                    <h2>Smartsafety</h2>

                    <a href="#" class="btn-get-started scrollto">
                        <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Banner section ======= -->
    <section id="banner-section" class="banner-section">
        <div class="container">
            <div class="title-banner text-center fw-bold pt-5">
                <h2>
                    Worker Fatigue Monitoring to Improve <br />
                    Safety & Productivity
                </h2>
                <p>
                    Goodeva is pioneer of fatigue management systems in Indonesia. Our
                    system is powered by <br />
                    advanced technology including artificial intelligence & iOT
                    wearables Automation.
                </p>
            </div>

            <img src="../assets/img/smartsafety/smartsafety-banner.png" alt="" />
        </div>
    </section>

    <!-- portofolio client -->
    <section id="smartsafety-valued-client" class="smartsafety-valued-client">
        <div class="container">
            <div class="title-valued-client text-center fw-bold pt-5">
                <h2>Portofolio & Valued Client</h2>
                <p>Implemented on more than 15 sites throughout Indonesia</p>
            </div>

            <div class="row justify-content-center align-items-center pb-5 pt-3">
                <div class="logo-valued-client">
                    <img src="../assets/img/smartsafety/all-valued-client.png" alt="all" />
                </div>
            </div>
        </div>
    </section>

    <!-- benifit card -->
    <section class="smartsafety-card-benifit" id="smartsafety-card-benifit">
        <div class="container">
            <div class="title-service text-center fw-bold pt-5">
                <div class="row">
                    <div class="col-md-7">
                        <h2>
                            Goodeva Smart Safety Realize Zero Incident Fatigue With iOT &
                            Ai Goodeva
                        </h2>
                    </div>

                    <div class="col-md-5">
                        <div class="card explenation-card">
                            <p>
                                The future technology for the integration of work worthiness
                                data for all employees obtained from iOT wearables is then
                                processed with Ai
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card first-card">
                    <img src="../assets/img/smartsafety/benefit-card1.png" class="card-img-top main-card" alt="api" />
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <img src="../assets/img/smartsafety/benefit-card2.png" class="card-img-top" alt="monitoring" />
                    <div class="card-body"></div>
                </div>
                <div class="card">
                    <img src="../assets/img/smartsafety/benefit-card3.png" class="card-img-top" alt="notification" />
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- section salestrace feature -->
    <section id="salestrace-feature1" class="salestrace-feature1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-product">
                    <h3>Fatigue Management in Realtime From Mobile & Dashboard</h3>
                    <p class="mb-4">
                        Future fatigue management with an integrated <br />
                        platform between applications and dashboards to <br />
                        help optimize operational activities.
                    </p>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/smartsafety/product-feature1.png"
                        alt="SalesTrace" />
                </div>
            </div>
        </div>
    </section>

    <!-- section salestrace feature -->
    <section id="salestrace-feature2" class="salestrace-feature2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="product-img img-fluid" src="/assets/img/smartsafety/product-feature2.png"
                        alt="" />
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <h3>
                        Predict Fatigue. Intervene <br />
                        Get a 360º View of Fatigue Risk.
                    </h3>
                    <p class="mb-4">
                        Supervisors and operators get warnings of impending <br />
                        fatigue for crew members, and can easily view heatmaps of
                        impending risks.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="salestrace-feature3" class="salestrace-feature3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-product">
                    <h3>Open API, Customized, & Integrated Third-Party</h3>
                    <p class="mb-4">
                        Increase efficiency, productivity and business performance by
                        integrating goodeva products <br />
                        according to your business needs.
                    </p>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/smartsafety/product-feature3.png"
                        alt="SalesTrace" />
                </div>
            </div>
        </div>
    </section>

    <!-- ====== benifit corousel ======= -->
    <section id="salestrace-benifit" class="d-flex flex-column justify-content-center align-items-center">
        <div class="bg-salestrace-benifit">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-lg-6 col-sm-10">
                            <img src="../assets/img/smartsafety/carousel-benifit2.png" class="d-block" alt="" />
                        </div>
                        <div class="col-lg-10 col-sm-10 text-salestrace-benifit">
                            <div class="corusel-caption container text-start text-md-right justify-content-right w-50">
                                <h1>Targeting Sales</h1>
                                <h2>
                                    Setup a target for a group of sales, and you can <br />
                                    track selling achievement in realtime in the apps.
                                </h2>

                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>01</u>/03</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-6 col-sm-10">
                            <img src="../assets/img/smartsafety/carousel-benifit1.png" class="d-block" alt="" />
                        </div>
                        <div class="corusel-caption container text-start text-md-right justify-content-right w-50">
                            <span class="company-name">Goodeva Technology</span>
                            <h1>Targeting Sales</h1>
                            <h2>
                                Setup a target for a group of sales, and you can <br />
                                track selling achievement in realtime in the apps.
                            </h2>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>02</u>/03</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-6 col-sm-10">
                            <img src="../assets/img/smartsafety/carousel-benifit3.png" class="d-block" alt="" />
                        </div>
                        <div class="corusel-caption container text-start text-md-right justify-content-right w-50">
                            <span class="company-name">Goodeva Technology</span>
                            <h1>Targeting Sales</h1>
                            <h2>
                                Setup a target for a group of sales, and you can <br />
                                track selling achievement in realtime in the apps.
                            </h2>

                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>03</u>/03</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== benifit corousel mobile ======= -->
    <section id="salestrace-benifit-mobile" class="d-flex flex-column justify-content-center align-items-center">
        <div class="bg-salestrace-benifit">
            <div id="carouselBenifitMobile" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-lg-6 col-sm-10">
                            <img src="../assets/img/smartsafety/carousel-benifit2.png" class="d-block" alt="" />
                        </div>
                        <div class="col-lg-10 col-sm-10 text-salestrace-benifit">
                            <div class="corusel-caption container">
                                <h1>Targeting Sales</h1>
                                <h2>
                                    Setup a target for a group of sales, and you can <br />
                                    track selling achievement in realtime in the apps.
                                </h2>

                                <div class="benifit-nav">
                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselBenifitMobile" data-bs-slide="prev">
                                        <span><i class="bi bi-arrow-left"></i></span>
                                    </a>

                                    <p><u>01</u>/03</p>

                                    <a href="#" class="corousel-nav scrollto"
                                        data-bs-target="#carouselBenifitMobile" data-bs-slide="next">
                                        <span><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-6 col-sm-10">
                            <img src="../assets/img/smartsafety/carousel-benifit1.png" class="d-block" alt="" />
                        </div>
                        <div class="corusel-caption container">
                            <h1>Targeting Sales</h1>
                            <h2>
                                Setup a target for a group of sales, and you can <br />
                                track selling achievement in realtime in the apps.
                            </h2>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselBenifitMobile"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>02</u>/03</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselBenifitMobile"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-6 col-sm-10">
                            <img src="../assets/img/smartsafety/carousel-benifit3.png" class="d-block" alt="" />
                        </div>
                        <div class="corusel-caption container">
                            <h1>Targeting Sales</h1>
                            <h2>
                                Setup a target for a group of sales, and you can <br />
                                track selling achievement in realtime in the apps.
                            </h2>

                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselBenifitMobile"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>03</u>/03</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselBenifitMobile"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why | increas section -->
    <section id="increase-feature" class="increase-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-product">
                    <h3>
                        5 Reasons Goodeva Smartsafety Technology is the Best Fatigue
                        Prevention
                    </h3>
                    <p class="mb-4">
                        Ensure that all employees are spared from <br />
                        fatigue and are ready to work with an <br />
                        integrated system.
                    </p>
                    <div class="increas-list">
                        <ul>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Proven to reduce fatigue
                                incident
                            </li>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Fatigue all operator
                                early detection
                            </li>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Have data history in the
                                event of an
                                incident
                            </li>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Complete features &
                                integrated one platform
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/smartsafety/increase-section.png"
                        alt="SalesTrace" />
                </div>
            </div>
        </div>
    </section>

    <!-- why | increas section mobile -->
    <section id="increase-feature-mobile" class="increase-feature-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-product">
                    <h3>
                        5 Reasons Goodeva Smartsafety Technology is the Best Fatigue
                        Prevention
                    </h3>
                    <p class="mb-4">
                        Ensure that all employees are spared from <br />
                        fatigue and are ready to work with an <br />
                        integrated system.
                    </p>
                    <div class="increas-list">
                        <ul>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Proven to reduce fatigue
                                incident
                            </li>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Fatigue all operator
                                early detection
                            </li>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Have data history in the
                                event of an
                                incident
                            </li>
                            <li>
                                <img src="/assets/img/salestrace/check.png" alt="check" />Complete features &
                                integrated one platform
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/smartsafety/increase-section.png"
                        alt="SalesTrace" />
                </div>
            </div>
        </div>
    </section>

    <!-- Region section -->
    <section id="region-section" class="region-section">
        <div class="container">
            <div class="title-banner text-center fw-bold pt-5">
                <h2>Has Been Implemented In The Mining Region Of Indonesia</h2>
                <p>
                    Smartsafety has been proven in various regions in Indonesia to
                    help companies prevent <br />
                    work accidents towards zero incidents with the help of technology.
                </p>
            </div>

            <div id="chartdiv"></div>


            <div class="location">
                <div class="increas-list">
                    <ul>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Palangkaraya
                        </li>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Barito Utara
                        </li>
                    </ul>
                </div>

                <div class="increas-list">
                    <ul>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Samarinda
                        </li>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Barunang
                        </li>
                    </ul>
                </div>

                <div class="increas-list">
                    <ul>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />
                            Banjarmasin
                        </li>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Tenggarong
                        </li>
                    </ul>
                </div>

                <div class="increas-list">
                    <ul>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />
                            Kutai
                        </li>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Lahat
                        </li>
                    </ul>
                </div>

                <div class="increas-list">
                    <ul>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />
                            Sangata
                        </li>
                        <li>
                            <img src="/assets/img/salestrace/check.png" alt="check" />Rantau
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ section -->
    <section id="faq-section" class="faq-section">
        <img class="bg-text-product" src="/assets/img/salestrace/Ellipse-faq.png" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-product">
                    <h3>
                        Use Smartsafety to reduce <br />
                        fatigue in your workplace
                    </h3>
                    <p class="mb-4">
                        Smartsafety has been proven in <br />
                        various regions in Indonesia.
                    </p>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <div class="faq-lists">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        What is Smartsafety?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        The future technology for the integration of
                                        work-worthiness data for all employees obtained from iOT
                                        wearables is then processed with Ai and displayed on an
                                        integrated platform to prevent work accidents.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        How Smartsafety works?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        The future technology for the integration of
                                        work-worthiness data for all employees obtained from iOT
                                        wearables is then processed with Ai and displayed on an
                                        integrated platform to prevent work accidents.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        What are the benefits of using Smartsafety for
                                        companies?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        The future technology for the integration of
                                        work-worthiness data for all employees obtained from iOT
                                        wearables is then processed with Ai and displayed on an
                                        integrated platform to prevent work accidents.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Can Smartsafety be integrated with the company's system?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        The future technology for the integration of
                                        work-worthiness data for all employees obtained from iOT
                                        wearables is then processed with Ai and displayed on an
                                        integrated platform to prevent work accidents.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        How to install Smartsafety in a work environment?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        The future technology for the integration of
                                        work-worthiness data for all employees obtained from iOT
                                        wearables is then processed with Ai and displayed on an
                                        integrated platform to prevent work accidents.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        How to order Smartsafety service?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        The future technology for the integration of
                                        work-worthiness data for all employees obtained from iOT
                                        wearables is then processed with Ai and displayed on an
                                        integrated platform to prevent work accidents.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card services section -->
    <section class="smartsafety-card-service" id="smartsafety-card-service">
        <div class="title-service text-center fw-bold pt-5">
            <h2>
                Integrated Fatigue Prevention Technology <br />
                With Complete Features
            </h2>
            <p>
                In addition to the features above, Smartsafety also has many safety
                features and other advantages <br />
                that make your company more advanced, modern & secure.
            </p>
        </div>

        <div class="card-deck">
            <div class="card">
                <img src="/assets/img/news/lkpp.png" class="card-img-top api" alt="api" />
                <div class="card-body">
                    <img class="card-logo api" src="/assets/img/smartsafety/Capa_1.png" alt="" />
                    <h5 class="card-title api">
                        Open API & <span class="fw-bold">Integrated</span> Dashboard
                    </h5>
                    <p>Apps & Dashboard is already integrated and Open API</p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/b20-indonesia.png" class="card-img-top monitoring" alt="monitoring" />
                <div class="card-body">
                    <img class="card-logo monitoring" src="/assets/img/smartsafety/Capa_2.png" alt="" />
                    <h5 class="card-title monitoring">
                        <span class="fw-bold">Historical</span> Fatigue Data
                    </h5>
                    <p>Easier & faster investigation with Historical fatigue data.</p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top notification" alt="notification" />
                <div class="card-body">
                    <img class="card-logo notification" src="/assets/img/smartsafety/Capa_3.png" alt="" />
                    <h5 class="card-title notification">
                        KPI <span class="fw-bold">Performance</span> Rating
                    </h5>
                    <p>Rating data on the operator has the highest performance.</p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top custom" alt="custom" />
                <div class="card-body">
                    <img class="card-logo custom" src="/assets/img/smartsafety/Capa_4.png" alt="" />
                    <h5 class="card-title custom">
                        <span class="fw-bold">Custom Apps</span> & Dashboard
                    </h5>
                    <p>
                        Custom smart health apps theme according to company identity.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top custom" alt="custom" />
                <div class="card-body">
                    <img class="card-logo custom" src="/assets/img/smartsafety/Capa_5.png" alt="" />
                    <h5 class="card-title custom">
                        <span class="fw-bold">Historical</span> Data Export
                    </h5>
                    <p>
                        Manage employee eligibility data easily with the export excel
                        feature.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top custom" alt="custom" />
                <div class="card-body">
                    <img class="card-logo custom" src="/assets/img/smartsafety/Capa_6.png" alt="" />
                    <h5 class="card-title custom">
                        <span class="fw-bold">Fatigue</span><br />
                        Alert
                    </h5>
                    <p>Displays employee data automatically indicating fatigue</p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top custom" alt="custom" />
                <div class="card-body">
                    <img class="card-logo custom" src="/assets/img/smartsafety/Capa_7.png" alt="" />
                    <h5 class="card-title custom">
                        <span class="fw-bold">Integrated</span> with wearables
                    </h5>
                    <p>Displays employee data automatically indicating fatigue.</p>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top custom" alt="custom" />
                <div class="card-body">
                    <img class="card-logo custom" src="/assets/img/smartsafety/Capa_8.png" alt="" />
                    <h5 class="card-title custom">
                        <span class="fw-bold">Whitelabel</span> Services
                    </h5>
                    <p>Dashboard & Report can be customized as desired.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section liputan -->
    <section id="liputan" class="liputan">
        <div class="container">
            <div class="title-liputan text-center fw-bold pt-3">
                <h2>Goodeva Has Been Covered by the Media</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Tempo-goodeva.png"
                            alt="logo media" />
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Liputan-6-goodeva.png"
                            alt="logo media" />
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/TirtoId-goodeva.png"
                            alt="logo media" />
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Tribunnews-com-goodeva.png"
                            alt="logo media" />
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Bisnis-com-goodeva.png"
                            alt="logo media" />
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Berita-satu-goodeva.png"
                            alt="logo media" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- improve -->
    <section id="improve" class="improve">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-product">
                    <h3>Improve Sales Performance, <br />Boost Profit.</h3>
                    <button class="btn-improve scrollto">
                        Trial Now <i class="bi bi-arrow-right"></i>
                    </button>
                    <button class="btn-improve scrollto">
                        WhatsApp Us <i class="bi bi-whatsapp"></i>
                    </button>
                </div>
                <div class="col-md-5 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/salestrace/ninja-improve.png" alt="SalesTrace" />
                </div>
            </div>
        </div>
    </section>

    <section id="improve-mobile" class="improve-mobile">
        <div class="container">
            <div class="text-product">
                <h3>
                    Improve sales performance, boost profit.
                </h3>
                <div class="improve-bottom">
                    <button class="btn-improve-mobile scrollto">
                        Trial Now <i class="bi bi-arrow-right"></i>
                    </button>
                    <button class="btn-improve-mobile scrollto">
                        WhatsApp Us <i class="bi bi-whatsapp"></i>
                    </button>
                    <img class="product-img" src="../assets/img/ninja-mobile.png" alt="ninja" />
                </div>
            </div>
        </div>
    </section>
@endsection
