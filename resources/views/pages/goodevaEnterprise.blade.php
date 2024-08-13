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

    <section id="goodeva-hero" class="goodeva-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-product">
                    <h3>Your Enteprise Solution</h3>
                    <p class="mb-4">
                        Goodeva Enteprise is a professional and creative <br />
                        graphic design partner, providing the best visual <br />
                        solution to improve your brand identity.
                    </p>
                    <a href="#" class="btn-get-started scrollto">
                        <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/goodeva-enterprise/goodeva-hero.png"
                        alt="SalesTrace" />
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <img src="/assets/img/news/lkpp.png" class="card-img-top api" alt="api" />
                    <div class="card-body">
                        <img class="card-logo api" src="/assets/img/goodeva-enterprise/capa_1.png" alt="" />
                        <h5 class="card-title api">
                            <span class="fw-bold">iOT with Artificial Intelligence</span>
                        </h5>
                        <p>
                            Adopted new technology to integrate all data obtained from the
                            connected device
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/news/b20-indonesia.png" class="card-img-top monitoring" alt="monitoring" />
                    <div class="card-body">
                        <img class="card-logo monitoring" src="/assets/img/goodeva-enterprise/capa_2.png" alt="" />
                        <h5 class="card-title monitoring">
                            <span class="fw-bold">Android & iOS development</span>
                        </h5>
                        <p>
                            Turn ideas into reality with a powerful and customized
                            Android-iOS apps.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/news/asean.png" class="card-img-top notification" alt="notification" />
                    <div class="card-body">
                        <img class="card-logo notification" src="/assets/img/goodeva-enterprise/capa_3.png"
                            alt="" />
                        <h5 class="card-title notification">
                            <span class="fw-bold">Robotic Process Automation</span>
                        </h5>
                        <p>
                            Develop automation processes to improve your obsolete systems to
                            be faster
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="/assets/img/news/asean.png" class="card-img-top custom" alt="custom" />
                    <div class="card-body">
                        <img class="card-logo custom" src="/assets/img/goodeva-enterprise/capa_4.png" alt="" />
                        <h5 class="card-title custom">
                            <span class="fw-bold">Data Management</span>
                        </h5>
                        <p>
                            Manage data and make better decisions based on valid data result
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <section id="goodeva-finished-project" class="goodeva-finished-project">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-product">
                    <h3>
                        The Our Finished <br />
                        Project For Client
                    </h3>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <p>
                        Explore our project portfolios. We are proud to present our work
                        results that reflect the dedication of innovative designs and
                        Proffesional quality
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- portofolio client -->
    <section id="goodeva-valued-client" class="goodeva-valued-client">
        <div class="container">
            <div class="title-valued-client text-center fw-bold pt-5">
                <h2>Portofolio & Valued Client</h2>
                <p>Join with 24 Company Local Indonesia & International</p>
            </div>

            <div class="row justify-content-center align-items-center pb-5 pt-3">
                <div class="logo-valued-client">
                    <img src="../assets/img/goodeva-enterprise/valued-client.png" alt="all" />
                </div>
            </div>
        </div>
    </section>

    <!-- goodeva corousel -->
    <section id="goodeva-carousel" class="goodeva-carousel">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/img/goodeva-enterprise/goodeva-corousel1.png" class="d-block carousel-img"
                            alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/goodeva-enterprise/mandiri-logo.png" alt=""
                                class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>01</u>/07</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/news/asean.png" class="d-block carousel-img" alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/news/asean-goodeva.png" alt="" class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>02</u>/07</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/news/b20-indonesia.png" class="d-block carousel-img" alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/goodeva-enterprise/mandiri-logo.png" alt=""
                                class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>03</u>/07</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/news/lkpp.png" class="d-block carousel-img" alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/news/Logo_LKPP 1.png" alt="" class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>04</u>/07</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/news/pertanian.png" class="d-block carousel-img" alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/news/logo-pertanian.png" alt="" class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>05</u>/07</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/news/vaccination.png" class="d-block carousel-img" alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/goodeva-enterprise/mandiri-logo.png" alt=""
                                class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>06</u>/07</p>

                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                    <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/news/undp.png" class="d-block carousel-img" alt="" />
                        <div class="carousel-caption">
                            <img src="../assets/img/goodeva-enterprise/mandiri-logo.png" alt=""
                                class="carousel-logo" />
                            <h2 class="carousel-title">Bank Mandiri</h2>
                            <p class="carousel-text">
                                Use of SDWAN connectivity network for 4000 Bank <br />
                                branches in Indonesia
                            </p>
                            <a href="#" class="btn-see-more scrollto">
                                <span>See More </span><i class="bi bi-arrow-right"></i></a>
                            <div class="benifit-nav">
                                <a href="#" class="corousel-nav scrollto" data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                    <span><i class="bi bi-arrow-left"></i></span>
                                </a>

                                <p><u>07</u>/07</p>

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

    <!-- ======= news Section ======= -->
    <section class="goodeva-news-section" id="goodeva-news-section">
        <div class="container">
            <div class="section-title">
                <h2>Explore The <span>Projects</span></h2>
                <p>
                    Our culture would be great fit for those who share similar values.
                    If how we do <br />
                    things resonates with you, we welcome you to join us
                </p>
            </div>

            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" href="#">All Recent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Government</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Corporate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">International</a>
                </li>
            </ul>

            <!-- <div class="row">
                                    <div class="col-lg-12">
                                      <ul id="card-filters">
                                        <li data-filter="*" class="filter-active">All Recent</li>
                                        <li data-filter=".filter-government">Government</li>
                                        <li data-filter=".filter-corporate">Corporate</li>
                                        <li data-filter=".filter-international">International</li>
                                      </ul>
                                    </div>
                                  </div> -->


            <div class="card-deck">
                {{-- <div class="card @if ($post->category == 'government') filter-government @endif @if ($post->category == 'corporate') filter-corporate @endif @if ($post->category == 'international') filter-international @endif"> --}}
                @foreach ($data_post as $post)
                    <div class="card">
                        <img src="{{ $post['post_img'] }}" class="card-img-top {{ $post['post_class'] }}"
                            alt="{{ $post['post_class'] }}" />
                        <div class="card-body">
                            <img class="card-logo {{ $post['post_class'] }}" src="{{ $post['post_logo'] }}"
                                alt="{{ $post['post_class'] }}" />
                            <div class="card-info">
                                <h5 class="card-title {{ $post['post_class'] }}">{{ $post['title'] }}</h5>
                                <p class="card-text">
                                    {{ $post['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="load-more text-center">
                <a href="#" class="btn fw-bold pt-3 pb-3">Load More <br />
                    <i class="bi bi-arrow-down"></i></a>
            </div>
        </div>
    </section>

    <!-- improve section -->
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

    <!-- improve section mobile -->
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
