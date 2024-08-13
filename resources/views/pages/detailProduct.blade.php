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
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= banner section ======= -->
    <section id="banner-detail-product" class="banner-detail-product">
        <div class="container">
            <div class="card bg-dark text-white">
                <img src="../assets/img/news/b20-indonesia.png" class="card-img" alt="" />
                <div class="card-img-overlay card-body">
                    <img src="../assets/img/news/logo-b20.png" alt="" class="card-logo" />
                    <h2 class="card-title">B20 Council Platform</h2>
                    <p class="card-text">
                        The B20 is an international business forum composed of
                        representatives from the G20 business community, serving as a
                        platform for dialogue between global business leaders
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section class="product-detail-content" id="product-detail-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="side-content">
                        <div class="client-side mb-2">
                            <h4>Client</h4>
                            <img src="../assets/img/logo-b20_2.png" alt="B20 Logo" />
                        </div>
                        <div class="field-side mb-2">
                            <h4>Field</h4>
                            <p>Global Organization</p>
                        </div>
                        <div class="scale-enterprise mb-2">
                            <h4>Scale Enterprises</h4>
                            <p>> 100.000 Employee</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xs-12 content">
                    <div class="content-title">
                        <h2>
                            Goodeva Enterprise offers a conference portal creation
                            solution custom-made, designed specifically to meet B20 unique
                            needs.
                        </h2>
                        <div class="btn-paragraph">
                            <button class="btn-product-detail-content scrollto">
                                Problem
                            </button>
                            <button class="btn-product-detail-content scrollto">
                                Solution
                            </button>
                        </div>
                    </div>
                    <hr />
                    <div class="problem-text">
                        <h3>Problem</h3>
                        <p>
                            The B20 is an international business forum composed of
                            representatives from the G20 business community, serving as a
                            platform for dialogue between global business leaders and
                            governments. With members spread across various countries, the
                            B20 faces challenges in coordinating and holding effective and
                            efficient meetings. In this context, the need for online
                            conference portals becomes increasingly urgent to maintain
                            continuity of communication and collaboration.
                        </p>
                        <p>
                            The main challenge B20 faced was the need to create a platform
                            that was able to accommodate multiple languages, time zones,
                            and ensure interactive participation from all its members. B20
                            members from diverse backgrounds and countries require easy
                            and intuitive access to the platform, with the ability to
                            participate in video conferences, share important documents,
                            and collaborate through discussion forums. This diversity of
                            members also demands solid multi-lingual support to ensure all
                            participants can participate without language barriers.
                        </p>
                    </div>
                    <div class="solution-text">
                        <h3>Solution</h3>
                        <p>
                            Goodeva Enterprise offers custom-made conference portal
                            creation solutions, designed specifically to meet B20's unique
                            needs. The first step was to conduct an in-depth needs
                            analysis involving the Goodeva technical team and B20
                            representatives.
                        </p>
                        <p>
                            Through a series of workshops and discussions, Goodeva
                            identified the key features needed, such as a secure document
                            management system, and interactive discussion forums. The
                            platform is also designed with an intuitive user interface to
                            ensure easy access for all members, regardless of their
                            technical background.
                        </p>

                        <img class="content-img" src="../assets/img/detail-product.png" alt="" />

                        <p>
                            Implementation of this solution ensures that the B20 can carry
                            out its functions more effectively and efficiently,
                            facilitating smooth communication and collaboration among its
                            members in various countries.
                        </p>
                        <div class="row">
                            <div class="col-md-2">
                                <img class="client-img" src="../assets/img/logo-b20_2.png" alt="" />
                            </div>
                            <div class="col-md-10">
                                <p>
                                    Council Platform Untuk B20 <br />
                                    An advanced digital solution designed to optimize
                                    collaboration and communication between B20 members.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-detail-content-mobile" id="product-detail-content-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-title">
                        <h2>
                            Goodeva Enterprise offers a conference portal creation
                            solution custom-made, designed specifically to meet B20 unique
                            needs.
                        </h2>
                        <div class="btn-paragraph">
                            <button class="btn-product-detail-content-mobile scrollto">
                                Problem
                            </button>
                            <button class="btn-product-detail-content-mobile scrollto">
                                Solution
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="side-content">
                        <div class="client-side mb-2">
                            <h4>Client</h4>
                            <img src="../assets/img/logo-b20_2.png" alt="B20 Logo" />
                        </div>
                        <div class="field-side mb-2">
                            <h4>Field</h4>
                            <p>Global Organization</p>
                        </div>
                        <div class="scale-enterprise mb-2">
                            <h4>Scale Enterprises</h4>
                            <p>> 100.000 Employee</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xs-12 content">
                    <hr />
                    <div class="problem-text">
                        <h3>Problem</h3>
                        <p>
                            The B20 is an international business forum composed of
                            representatives from the G20 business community, serving as a
                            platform for dialogue between global business leaders and
                            governments. With members spread across various countries, the
                            B20 faces challenges in coordinating and holding effective and
                            efficient meetings. In this context, the need for online
                            conference portals becomes increasingly urgent to maintain
                            continuity of communication and collaboration.
                        </p>
                        <p>
                            The main challenge B20 faced was the need to create a platform
                            that was able to accommodate multiple languages, time zones,
                            and ensure interactive participation from all its members. B20
                            members from diverse backgrounds and countries require easy
                            and intuitive access to the platform, with the ability to
                            participate in video conferences, share important documents,
                            and collaborate through discussion forums. This diversity of
                            members also demands solid multi-lingual support to ensure all
                            participants can participate without language barriers.
                        </p>
                    </div>
                    <div class="solution-text">
                        <h3>Solution</h3>
                        <p>
                            Goodeva Enterprise offers custom-made conference portal
                            creation solutions, designed specifically to meet B20's unique
                            needs. The first step was to conduct an in-depth needs
                            analysis involving the Goodeva technical team and B20
                            representatives.
                        </p>
                        <p>
                            Through a series of workshops and discussions, Goodeva
                            identified the key features needed, such as a secure document
                            management system, and interactive discussion forums. The
                            platform is also designed with an intuitive user interface to
                            ensure easy access for all members, regardless of their
                            technical background.
                        </p>

                        <img class="content-img" src="../assets/img/detail-product.png" alt="" />

                        <p>
                            Implementation of this solution ensures that the B20 can carry
                            out its functions more effectively and efficiently,
                            facilitating smooth communication and collaboration among its
                            members in various countries.
                        </p>
                        <div class="product-detail-content-footer-mobile">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="client-img" src="../assets/img/logo-b20_2.png" alt="" />
                                </div>
                                <div class="col-md-10 col-xs-5">
                                    <p>
                                        <span>Council Platform Untuk B20 </span><br />
                                        An advanced digital solution designed to optimize
                                        collaboration and communication between B20 members.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product-detail-improve" class="product-detail-improve">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-product">
                    <h3>
                        Enabling business transformation. <br />
                        Accelerate now with Goodeva.
                    </h3>
                    <button class="btn-product-detail-improve scrollto">
                        WhatsApp Us <i class="bi bi-whatsapp"></i>
                    </button>
                </div>
                <div class="col-md-5 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="../assets/img/salestrace/ninja-improve.png"
                        alt="SalesTrace" />
                </div>
            </div>
        </div>
    </section>

    <section id="product-detail-improve-mobile" class="product-detail-improve-mobile">
        <div class="container">
            <div class="text-product">
                <h3>
                    Enabling business transformation. <br />
                    Accelerate now with Goodeva.
                </h3>
                <button class="btn-product-detail-improve-mobile scrollto">
                    WhatsApp Us <i class="bi bi-whatsapp"></i>
                </button>
                <img class="product-img" src="../assets/img/ninja-mobile.png" alt="ninja" />
            </div>
        </div>
    </section>
@endsection
