@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="bg-hero">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active first-hero">
                        <div class="col-md-6">
                            <img src="/assets/img/hero-hompage-asset-revisi2.png" alt="">
                        </div>
                        <div class="col-md-6 col-sm-10 text-hero">
                            <div class="corusel-caption container text-start text-md-right justify-content-right w-50">
                                <span class="company-name">Goodeva Technology</span>
                                <h1>Wearables and <br>Apps Integration</h1>
                                <h2>The best fatigue detection application in Indonesia,<br> Goodeva Smart Safety by
                                    Goodeva.</h2>

                                <a href="#" class="btn-get-started scrollto">
                                    <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item second-hero">
                        <div class="col-md-6">
                            <img src="/assets/img/hero-homepage-asset2-revisi2.png" alt="">
                        </div>
                        <div class="corusel-caption container text-start text-md-right justify-content-right w-50">
                            <span class="company-name">Goodeva Technology</span>
                            <h1>Prevent Accidents <br> Due to Fatigue</h1>
                            <h2>By using Goodeva Smart Safety</h2>

                            <a href="#" class="btn-get-started scrollto">
                                <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="carousel-item third-hero">
                        <div class="col-md-6">
                            <img src="/assets/img/hero-homepage-asset3-revisi2-mobile.png" alt="">
                        </div>
                        <div class="corusel-caption container text-start text-md-right justify-content-right w-50">
                            <span class="company-name">Goodeva Technology</span>
                            <h1>Transforming <br> Global Technology</h1>
                            <h2>Global Innovation Partner Technology</h2>

                            <a href="#" class="btn-get-started scrollto">
                                <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Hero Section Mobile ======= -->
    <section id="hero-mobile" class="d-flex flex-column justify-content-center align-items-center">
        <div class="bg-hero">
            <div id="carouselHeroMobile" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHeroMobile" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselHeroMobile" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselHeroMobile" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active first-hero">

                        <div class="corusel-caption container text-start">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 text-hero">
                                    <span class="company-name">Goodeva Technology</span>
                                    <h1>Wearables and <br>Apps Integration</h1>
                                    <h2>The best fatigue detection application in Indonesia,<br> Goodeva Smart Safety by
                                        Goodeva.</h2>

                                    <a href="#" class="btn-get-started scrollto">
                                        <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="asset-img">
                                <img src="/assets/img/hero-hompage-asset-revisi2.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item second-hero">
                        <div class="corusel-caption container text-start">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 text-hero">
                                    <span class="company-name">Goodeva Technology</span>
                                    <h1>Prevent Accidents <br> Due to Fatigue</h1>
                                    <h2>By using Goodeva Smart Safety</h2>

                                    <a href="#" class="btn-get-started scrollto">
                                        <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="asset-img2">
                                <img src="/assets/img/hero-homepage-asset2-revisi2-mobile.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item third-hero">
                        <div class="corusel-caption container text-start">
                            <div class="row">
                                <div class="col-md-6 col-xs-12 text-hero">
                                    <span class="company-name">Goodeva Technology</span>
                                    <h1>Transforming <br> Global Technology</h1>
                                    <h2>Global Innovation Partner Technology</h2>

                                    <a href="#" class="btn-get-started scrollto">
                                        <span>Get Started </span><i class="bi bi-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="asset-img2">
                                <img src="/assets/img/hero-homepage-asset3-revisi2-mobile.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ======= Watch Video Section ======= -->
    <section id="watch-video" class="watch-video">
        <div class="container justify-content-center text-center aos-init aos-animate" data-aos="fade-up"
            data-aos-duration="1500" data-aos-once="true">

            <div class="section-title">
                <h2>Goodeva technology Ai & iOT Enterprise</h2>
                <p>Our flagship platform adopt artificial intelligence to serve better experience and help your
                    business go
                    beyond innovation</p>
            </div>

            <div class="row">
                <img class="img-fluid" src="/assets/img/img-video-section.png" alt="img-video">

                <a href="https://youtu.be/v_oMbXlVSLg" data-lity class="glightbox btn-watch-video">
                    <img src="/assets/img/video-play-button.png" alt="bnt-play">
                </a>
            </div>
        </div>
    </section>
    <!-- End watch Video Section -->


    <!-- ======= product Section ======= -->
    <section id="product-smart-safety" class="product-smart-safety">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <img class="product-img" src="/assets/img/product-assets.png" alt="">
                </div>
                <div class="col-md-6 text-container">
                    <img src="/assets/img/logo-smartsafety.png" alt="smart-safety">
                    <h3>Digital Vaccines to Prevent Work Accidents</h3>
                    <p class="mb-4">
                        Platform for safety + fatigue monitoring, Empowering artificial intelligence to Improve
                        Safety, Efficiency
                        and avoid accidents
                    </p>
                    <a href="#" class="btn-learn-more scrollto">Learn More</a>
                </div>
            </div>

        </div>
    </section>

    <!-- product smart safety mobile -->
    <section id="product-smart-safety-mobile" class="product-smart-safety-mobile">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <img class="product-img img-fluid" src="/assets/img/product-assets-mobile.png" alt="">
                </div>
                <div class="col-md-3 text-container">
                    <img src="/assets/img/logo-smartsafety.png" alt="smart-safety">
                    <h3>Digital Vaccines to Prevent Work Accidents</h3>
                    <p class="mb-4">
                        Platform for safety + fatigue monitoring, Empowering artificial intelligence to Improve
                        Safety, Efficiency
                        and avoid accidents
                    </p>
                    <a href="#" class="btn-learn-more scrollto">Learn More</a>
                </div>
            </div>

        </div>
    </section>


    <section id="product-sales-trace" class="product-sales-trace">
        <div class="container">

            <div class="row">
                <div class="col-md-6 text-product">
                    <img src="/assets/img/logo-salestrace.svg" alt="SalesTrace">
                    <h3>Sales Automation to Boost Your Business Profit</h3>
                    <p class="mb-4">
                        Salestrace helps business increase their sales performance by adopting AI to drive sales
                        growth and cost
                        savings
                    </p>
                    <a href="#" class="btn-learn-more scrollto">Learn More</a>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img class="product-img img-fluid" src="/assets/img/product-assets2.svg" alt="SalesTrace">
                </div>
            </div>

        </div>
    </section>

    <!-- product-sales-trace-mobile -->
    <section id="product-sales-trace-mobile" class="product-sales-trace-mobile">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <img class="product-img img-fluid" src="/assets/img/product-assets2-mobile.png" alt="">
                </div>
                <div class="col-md-3 text-container">
                    <img src="/assets/img/logo-salestrace.png" alt="sales-trace">
                    <h3>Sales Automation to Boost Your Business Profit</h3>
                    <p class="mb-4">
                        Salestrace helps business increase their sales performance by adopting AI to drive sales
                        growth and cost
                        savings
                    </p>
                    <a href="#" class="btn-learn-more scrollto">Learn More</a>
                </div>
            </div>

        </div>
    </section>


    <section id="product-goodeva-enterprise" class="product-goodeva-enterprise">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <img class="product-img img-fluid" src="/assets/img/product-assets3.svg" alt="">
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 text-container">
                    <img src="/assets/img/logo-goodeva.svg" alt="goodeva-logo">
                    <h3>The solution improving business processes</h3>
                    <p class="mb-4">
                        Handcraft Technology development services. optimize business process, systems and solutions
                        for enterprise
                        client.
                    </p>
                    <a href="#" class="btn-learn-more scrollto">Learn More</a>
                </div>
            </div>

        </div>
    </section>

    <!-- product-goodeva-enterprise-mobile -->
    <section id="product-goodeva-enterprise-mobile" class="product-goodeva-enterprise-mobile">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <img class="product-img img-fluid" src="/assets/img/product-assets3-mobile.png" alt="">
                </div>
                <div class="col-md-3 text-container">
                    <img src="/assets/img/logo-goodeva.svg" alt="sales-trace">
                    <h3>The solution improving business processes</h3>
                    <p class="mb-4">
                        Handcraft Technology development services. optimize business process, systems and solutions
                        for enterprise
                        client.
                    </p>
                    <a href="#" class="btn-learn-more scrollto">Learn More</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= news Section ======= -->
    <section class="news-section" id="news-section">
        <div class="container">
            <div class="section-title">
                <h2>Improving business aspect with Goodeva</h2>
            </div>
        </div>

        <div class="card-deck">
            <div class="card">
                <img src="/assets/img/news/b20-indonesia.png" class="card-img-top lkpp" alt="LKPP">
                <div class="card-body">
                    <div class="card-info">
                        <h5 class="card-title lkpp">Government</h5>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/corporate.png" class="card-img-top b20" alt="B20">
                <div class="card-body">
                    <div class="card-info">
                        <h5 class="card-title b20">Corporate</h5>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top asean" alt="ASEAN">
                <div class="card-body">
                    <div class="card-info">
                        <h5 class="card-title asean">International</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- news Section Mobile -->
    <section class="news-section-mobile" id="news-section-mobile">
        <div class="container">
            <div class="section-title">
                <h2>Improving business aspect with Goodeva</h2>
            </div>
        </div>

        <div class="card-deck">
            <div class="card">
                <img src="/assets/img/news/b20-indonesia.png" class="card-img-top lkpp" alt="LKPP">
                <div class="card-body">
                    <div class="card-info">
                        <h5 class="card-title lkpp">Government</h5>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/corporate.png" class="card-img-top b20" alt="B20">
                <div class="card-body">
                    <div class="card-info">
                        <h5 class="card-title b20">Corporate</h5>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="/assets/img/news/asean.png" class="card-img-top asean" alt="ASEAN">
                <div class="card-body">
                    <div class="card-info">
                        <h5 class="card-title asean">International</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======= Portofolio Client Section ======= -->
    <section class="portofolio-client" id="portofolio-client">
        <div class="container">
            <div class="section-title text-center pt-3">
                <h1>Portfolio & Valued Client</h1>
            </div>
            <div class="valued-client mt-5">
                <img src="assets/img/valued-client.png" class="img-fluid" alt="client">
            </div>
    </section>

    <!-- ======= Portofolio Client Section Mobile ======= -->
    <section class="portofolio-client-mobile" id="portofolio-client-mobile">
        <div class="container">
            <div class="section-title text-center pt-3">
                <h1>Portfolio & Valued Client</h1>
            </div>
            <div class="valued-client mt-5">
                <img src="assets/img/valued-client-mobile.png" class="img-fluid" alt="client">
            </div>
    </section>

    <!-- ======= Client Feedback Section ======= -->
    <section id="client-feedback" class="client-feedback">
        <div class="container">

            <div class="row">
                <div class="col-md-6 text-feedback">
                    <h3>What Our Client <br> Are Saying</h3>
                    <p class="client-testimoni mb-4">
                        "Salestrace helps business increase their sales performance by adopting AI to drive sales
                        growth and cost
                        savings"
                    </p>
                    <span class="client-name">Iwan Gunawan</span>
                    <span class="client-company">PT Kalimantan Prima Persada</span>
                    <div class="button-client-feedback">
                        <a href="#" class="btn-learn-more scrollto"><i class="bi bi-arrow-left"></i></a>
                        <a href="#" class="btn-learn-more scrollto"><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 pt-4 pt-lg-0 client-img">
                    <img class="client-img img-fluid" src="/assets/img/client-feedback.png" alt="client">
                </div>
            </div>
        </div>

        </div>
    </section>

    <!-- ======= Client Feedback Section Mobile ======= -->
    <section id="client-feedback-mobile" class="client-feedback-mobile">
        <div class="container">
            <div class="section-title">
                <h3>What Our Client Are Saying</h3>
            </div>
            <div class="col-md-6 col-xs-12 client-img">
                <img class="client-img img-fluid" src="/assets/img/client-feedback.png" alt="client">
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12  text-feedback">
                    <p class="client-testimoni mb-4">
                        "Goodeva has been proven to significantly reduce the number of workplace accidents and
                        increase employee
                        productivity."
                    </p>
                    <span class="client-name">Iwan Gunawan</span>
                    <span class="client-company">PT Kalimantan Prima Persada</span>
                    <div class="button-client-feedback-mobile">
                        <a href="#" class="btn-learn-more scrollto"><i class="bi bi-arrow-left"></i></a>
                        <a href="#" class="btn-learn-more scrollto"><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>

        </div>
    </section>


    <!-- ======= Liputan Section ======= -->
    <section id="liputan" class="liputan">
        <div class="container">
            <div class="title-liputan text-center fw-bold pt-3">
                <h2>Media Highlight</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Liputan-6-goodeva.png"
                            alt="logo media">
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Bisnis-com-goodeva.png"
                            alt="logo media">
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Berita-satu-goodeva.png"
                            alt="logo media">
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Tempo-goodeva.png" alt="logo media">
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 ">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/TirtoId-goodeva.png"
                            alt="logo media">
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-4 d-flex align-items-center mb-3 d-md-block">
                    <div class="logo-liputan">
                        <img class="img-fluid"
                            src="https://goodeva.co.id/public/img/assets/home/diliput/Tribunnews-com-goodeva.png"
                            alt="logo media">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ======= get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">

        <div class="container">
            <div class="get-started-content">
                <img src="/assets/img/goodeva-logo-lighted.png" alt="">
                <div class="section-title">
                    <h2>Enabling business transformation. <br>Accelerate now with <strong>Goodeva</strong>.</h2>
                    <button class="btn-get-started scrollto"> Get Started <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <img class="get-started-char" src="/assets/img/get-started2-part.png" alt="">
    </section><!-- End get-started Section -->
@endsection
