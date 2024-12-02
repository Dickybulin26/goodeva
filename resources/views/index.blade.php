<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Goodeva Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,400italic,300,300italic,500italic,600,600italic,700,700italic,900'
                rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic' rel='stylesheet'
                type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet'
                type='text/css'>
        <link href="{{asset('public/fonts/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href='{{asset('public/fonts/font-awesome.min.css')}}' rel='stylesheet' type='text/css'>

        <!-- components -->
        <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>

        <link href="{{asset('public/css/main-front.css')}}" rel="stylesheet" type="text/css"/>

    </head>
    <body data-scrolling-animations="true">

        <div id="page-preloader"><span class="spinner"></span></div>

        <!-- Navigation -->
        <header class="header scrolling-header">
            <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container clearfix">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="index.html">
                        <img class="normal-logo " src="{{asset('public/img/logo.png')}}" alt="logo"/>
                    </a>
                    <div class="right-nav-block pull-right clearfix">
                        <div class="navbar-collapse collapse floated" id="navbar-collapse">
                            <ul class="nav navbar-nav clearfix navbar-with-inside vcenter">
                                <li>
                                    <a href="#">Home</a>
                                    <div class="wrap-inside-nav">
                                        <div class="inside-col">
                                            <ul class="inside-nav">
                                                <li><a href="home.html">Home 1</a></li>
                                                <li><a href="home-2.html">Home 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Works</a>
                                    <div class="wrap-inside-nav">
                                        <div class="inside-col">
                                            <ul class="inside-nav">
                                                <li><a href="work-1.html">Work 1</a></li>
                                                <li><a href="work-2.html">Work 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li>
                                    <a href="#">Blog</a>
                                    <div class="wrap-inside-nav">
                                        <div class="inside-col">
                                            <ul class="inside-nav">
                                                <li><a href="blog.html">Blog 1</a></li>
                                                <li><a href="blog-2.html">Blog 2</a></li>
                                                <li><a href="blog-single.html">Blog single</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                                <li><a href="#" class="toggle-menu-button">
                                    <div class="toggle-menu-button-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="wrap-fixed-menu" id="fixedMenu">
                <div class="top-items">
                    <a href="blog.html" class="top-menu-item menu-item">
                        <span class="subtitle">All The Latest</span>
                        <span class="title">Blog</span>
                    </a>
                    <a href="work-1.html" class="top-menu-item menu-item">
                        <span class="subtitle">Awesome</span>
                        <span class="title">Portfolio</span>
                    </a>
                </div>
                <div class="bottom-items">
                    <a href="contacts.html" class="bottom-menu-item menu-item">
                        <span class="subtitle">We Are Designers</span>
                        <span class="title">Contacts</span>
                    </a>
                    <div class="bottom-menu-item menu-item contact-info">
                        <div class="row">
                            <div class="col-md-12">
                                <i class="fa fa-home"></i>
                                <label>ADDRESS</label>
                                <p class="vcenter">746 Roberts Road Findlay, OH 45840</p>
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-phone"></i>
                                <label>PHONE</label>
                                <p class="vcenter">+201 126 216 88</p>
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-envelope"></i>
                                <label>EMAIL</label>
                                <p class="vcenter">support@rettic.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--./navigation -->

        <!-- Top header -->
        <section class="header-section home-header half-effect">
            <div class="container dark-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="content-title">
                            <span class="top">big dreams.</span>
                            <span class="bottom">bigger ideas.</span>
                        </h2>
                        <div class="contnet-under-title">. committed . creative . digital .</div>
                        <a href="#" class="btn btn-primary">read more</a>
                    </div>
                </div>
            </div>
            <a href="#" class="scroll-to"></a>
        </section><!--./top header -->

        <!-- Welcome section -->
        <section class="welcome-section right-color half-color blue-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-12">
                                <div class="welcome-heading">. welcome to aklas digital .</div>
                                <div class="welcome-text">
                                    <p>
                                        Eorem ipsum dolor sit amet consecter adipsicing elit sed usm dui tempor
                                        incididunt ute labore et dolore magna aliqua ut enima minim lora beniaps
                                        quis nostrual exercitationullamco laboris aliqu sed.
                                    </p>
                                    <p>
                                        Bcea aliqlorem ipsumdolor sit amet lorem ipsum dolor sit amet ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <blockquote>
                                        “ A creative agency that follows intelligent
                                        methodology to deliver solutions.”
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center blue-col">
                        <div class="row">
                            <div class="welcome-feature">
                                <div class="feature-icon">
                                    <span class="icon icon-Carioca"></span>
                                </div>
                                <div class="feature-name">Clean &amp; Modern</div>
                                <div class="feature-text">Design For You!</div>
                            </div>
                            <div class="welcome-feature active">
                                <div class="feature-icon">
                                    <span class="icon icon-Notebook"></span>
                                </div>
                                <div class="feature-name">its responsive</div>
                                <div class="feature-text">Multipurpose</div>
                            </div>
                            <div class="welcome-feature">
                                <div class="feature-icon">
                                    <span class="icon icon-Tools"></span>
                                </div>
                                <div class="feature-name">Multipurpose</div>
                                <div class="feature-text">Suits Everyone!</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="controls">
                                    <div class="control-item active"></div>
                                    <div class="control-item"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./welcome section -->

        <!-- Special info section -->
        <section class="section-special-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="special-info-item right-space fadeInSR">
                            <div class="item-icon"><span class="icon icon-FileBox"></span></div>
                            <div class="item-content">
                                <div class="item-name">. <span class="spincrement">850</span>+</div>
                                <div class="item-description">Finished Web Design & Development Projects</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="special-info-item left-space fadeInSR">
                            <div class="item-icon"><span class="icon icon-TeaMug"></span></div>
                            <div class="item-content">
                                <div class="item-name">. <span class="spincrement">3200</span>+</div>
                                <div class="item-description">Cups of Green Tea & Coffee Ordered</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="special-info-item right-space active fadeInSR">
                            <div class="item-icon"><span class="icon icon-DiamondRing"></span></div>
                            <div class="item-content">
                                <div class="item-name">. <span class="spincrement">135</span>+</div>
                                <div class="item-description">Awards We Have Won So far</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="special-info-item left-space fadeInSR">
                            <div class="item-icon"><span class="icon icon-Users"></span></div>
                            <div class="item-content">
                                <div class="item-name">. <span class="spincrement">940</span>+</div>
                                <div class="item-description">We Have Satisfied Clients Worldwide</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./special info section -->

        <!-- What we do section -->
        <section class="section-whaat-we-do half-color left-color blue-color">
            <div class="container-fluid">
                <div class="row inline-row">
                    <div class="col-md-6 col-sm-12 blue-col">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-12">
                                <div class="what-we-do-content">
                                    <div class="section-title fadeInSR">. what we do .</div>
                                    <div class="arrow-bottom fadeInSR"></div>
                                    <div class="doing-tabs ">
                                        <ul class="nav nav-tabs fadeInSR" role="tablist">
                                            <li role="presentation"><a href="#mouse" role="tab" data-toggle="tab"><span
                                                    class="icon icon-Mouse"></span></a></li>
                                            <li role="presentation"><a href="#earth" role="tab" data-toggle="tab"><span
                                                    class="icon icon-WorldWide"></span></a></li>
                                            <li role="presentation" class="active"><a href="#webdev" role="tab"
                                                    data-toggle="tab"><span
                                                    class="icon icon-Notebook"></span></a></li>
                                            <li role="presentation"><a href="#camera" role="tab" data-toggle="tab"><span
                                                    class="icon icon-DSLRCamera"></span></a></li>
                                            <li role="presentation">
                                                <a href="#megaphone" role="tab" data-toggle="tab"><span
                                                        class="icon icon-Megaphone"></span></a></li>
                                        </ul>

                                        <div class="tab-content fadeInSR">
                                            <div role="tabpanel" class="tab-pane fade" id="mouse">
                                                <div class="tab-heading">Web development</div>
                                                <div class="tab-text">
                                                    Incididunt ute labore et dolore magna aliqua ut enima beniaps quis nostrual
                                                    exercitationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                    incididunt
                                                    labore et dolore magna ebarois ced lorem aliqua.
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="earth">
                                                <div class="tab-heading">Web development</div>
                                                <div class="tab-text">
                                                    Incididunt ute labore et dolore magna aliqua ut enima beniaps quis nostrual
                                                    exercitationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                    incididunt
                                                    labore et dolore magna ebarois ced lorem aliqua.
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade in active" id="webdev">
                                                <div class="tab-heading">Web development</div>
                                                <div class="tab-text">
                                                    Incididunt ute labore et dolore magna aliqua ut enima beniaps quis nostrual
                                                    exercitationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                    incididunt
                                                    labore et dolore magna ebarois ced lorem aliqua.
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="camera">
                                                <div class="tab-heading">Web development</div>
                                                <div class="tab-text">
                                                    Incididunt ute labore et dolore magna aliqua ut enima beniaps quis nostrual
                                                    exercitationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                    incididunt
                                                    labore et dolore magna ebarois ced lorem aliqua.
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="megaphone">
                                                <div class="tab-heading">Web development</div>
                                                <div class="tab-text">
                                                    Incididunt ute labore et dolore magna aliqua ut enima beniaps quis nostrual
                                                    exercitationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                    incididunt
                                                    labore et dolore magna ebarois ced lorem aliqua.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="what-we-do-image scrollme animateme"
                                data-when="enter"
                                data-from="0.5"
                                data-to="0"
                                data-opacity="0"
                                data-translatex="200"
                                data-rotatez="0">
                            <img src="{{asset('public/img/what-we-do-image.png')}}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./what we do section -->

        <!-- Working line section -->
        <section class="section-working-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-heading">
                            <div class="heading-title">. welcome to aklas digital .</div>
                            <div class="heading-text">
                                <p>
                                    Eorem ipsum dolor sit amet consecter adipsicing elit sed usm dui tempor
                                    incididunt ute labore wet dolore magna aliqua enima sedu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="working-line">
                            <div class="line">
                                <div class="working-item first-item fadeInSR">
                                    <div class="item-icon"><i class="icon icon-Glasses"></i></div>
                                    <div class="item-dot"></div>
                                    <div class="item-description">
                                        <div class="title">research & planning</div>
                                        <div class="text">We start with research & plan the project</div>
                                    </div>
                                </div>
                                <div class="working-item second-item fadeInSR">
                                    <div class="item-description">
                                        <div class="title">sketching the ideas</div>
                                        <div class="text">Then we do wireframing & sketching</div>
                                    </div>
                                    <div class="item-dot"></div>
                                    <div class="item-icon"><i class="icon icon-Pencil"></i></div>
                                </div>
                                <div class="working-item third-item fadeInSR">
                                    <div class="item-icon"><i class="icon icon-DesktopMonitor"></i></div>
                                    <div class="item-dot"></div>
                                    <div class="item-description">
                                        <div class="title">building project</div>
                                        <div class="text">Design & Development of project started</div>
                                    </div>
                                </div>
                                <div class="working-item fourth-item fadeInSR">
                                    <div class="item-icon"><i class="icon icon-Starship"></i></div>
                                    <div class="item-dot"></div>
                                    <div class="item-description">
                                        <div class="title">And finally we <br> launch the project</div>
                                        <div class="text">After some testing we publish <br> the project of client</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./working line section -->

        <!-- Recent project section -->
        <section class="section-recent-project">
            <div class="white-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="text-uppercase bold">. recent projects .</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blue-section gallery-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs projects-tabs" id="filters">
                                <li role="presentation" class="active">
                                    <a data-filter=".all-projects" href="#" role="tab" data-toggle="tab">all projects</a>
                                </li>
                                <li role="presentation">
                                    <a data-filter=".web-design" href="#" role="tab" data-toggle="tab">web design</a>
                                </li>
                                <li role="presentation">
                                    <a data-filter=".branding" href="#" role="tab" data-toggle="tab">branding</a>
                                </li>
                                <li role="presentation">
                                    <a data-filter=".mockups" href="#" role="tab" data-toggle="tab">mockups</a>
                                </li>
                                <li role="presentation">
                                    <a data-filter=".photography" href="#" role="tab" data-toggle="tab">photography</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="gallery-items">
                        <div class="gallery-item all-projects web-design double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img1.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img1.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects photography web-design branding double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img2.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img2.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects mockups double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img3.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img3.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects photography branding photography double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img4.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img4.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects mockups double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img5.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img5.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects photography mockups web-design double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img6.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img6.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects web-design double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img7.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img7.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                        <div class="gallery-item all-projects photography branding double">
                            <div class="image">
                                <img src="{{asset('public/img/gallery/img8.jpg')}}" alt=""/>
                            </div>
                            <div class="item-content">
                                <a href="{{asset('public/img/gallery/img8.jpg')}}" class="fancybox">
                                    <div class="view-icon"><span class="icon icon-Search"></span></div>
                                    <div class="title">view from window</div>
                                    <div class="category">Photography</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./recent project section -->

        <!-- Hire us section -->
        <section class="section-hire-us green-section dotted-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 text-center">
                        <a href="#" class="logo">
                            <img src="{{asset('public/img/logo-white.png')}}" alt=""/>
                        </a>
                        <div class="under-logo">Creative Agency</div>
                    </div>
                    <div class="col-md-7">
                        <h4 class="bold text-uppercase">We are honest & hard working team</h4>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt anim</p>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="#" class="btn btn-default btn-transparent">hire us for a project</a>
                    </div>
                </div>
            </div>
        </section><!--./hire us section -->

        <!-- Why choose us section -->
        <section class="section-why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="why-choose-us-image">
                            <img src="{{asset('public/img/why-choose-us-img.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="section-heading">
                            <div class="heading-title">. why choose us .</div>
                            <div class="heading-text">
                                <p>
                                    Eorem ipsum dolor sit amet consecter adipsicing elit sed usm dui tempor incididunt ute
                                    labore
                                    et dolore magna aliqua ut enima minim lora beniaps quis nostrual.
                                </p>
                            </div>
                        </div>
                        <div class="choose-list">
                            <div class="choose-item fadeInSR">
                                <div class="media-left">
                                    <div class="item-icon">
                                        <span class="icon icon-Plaine"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="item-body">
                                        <div class="item-heading">powerful solutions</div>
                                        <p>
                                            Reprehenderit in voluptate velit esse cillum dolorg erou fugiat nullam
                                            pariatur excepteur sint occaecat cupidatat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="choose-item active fadeInSR">
                                <div class="media-left">
                                    <div class="item-icon">
                                        <span class="icon icon-Picture"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="item-body">
                                        <div class="item-heading">modern & clean design</div>
                                        <p>
                                            Laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium totam aperiam.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="choose-item fadeInSR">
                                <div class="media-left">
                                    <div class="item-icon">
                                        <span class="icon icon-Umbrella"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="item-body">
                                        <div class="item-heading">lifetime support</div>
                                        <p>
                                            Quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                            sunt explicabo nemo enim ipsam voluptatem quia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./why choose us section -->

        <!-- Skills section -->
        <section class="section-skills">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-block">
                            <div class="info-image">
                                <img src="{{asset('public/img/plant.png')}}" alt=""/>
                            </div>
                            <div class="info-heading">. we make things perfect! .</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute
                                irure dolor in reprehenderit in voluptate velit esse.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="skills">
                            <li data-percent="80" class="skills-animated">
                                <span>Web Design</span>
                                <div class="progress" style="">
                                    <div class="progress-percent"><span class="progress-bar-tooltip">80</span>%</div>
                                </div>
                            </li>
                            <li data-percent="60" class="skills-animated">
                                <span>Programming</span>
                                <div class="progress" style="">
                                    <div class="progress-percent"><span class="progress-bar-tooltip">60</span>%</div>
                                </div>
                            </li>
                            <li data-percent="90" class="skills-animated">
                                <span>App development</span>
                                <div class="progress" style="">
                                    <div class="progress-percent"><span class="progress-bar-tooltip">90</span>%</div>
                                </div>
                            </li>
                            <li data-percent="70" class="skills-animated">
                                <span>Intrnet marketing</span>
                                <div class="progress" style="">
                                    <div class="progress-percent"><span class="progress-bar-tooltip">70</span>%</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--./skills section -->

        <!-- Section team -->
        <section class="section-our-team">
            <div class="white-section">
                <div class="container">
                    <h3 class="text-uppercase bold">. meet the talents .</h3>
                </div>
            </div>
            <div class="blue-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 col-md-12">
                            <div class="team-controls">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#person-1" role="tab" data-toggle="tab">
                                            <img src="{{asset('public/img/our-team/thumb-1.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#person-2" role="tab" data-toggle="tab">
                                            <img src="{{asset('public/img/our-team/thumb-2.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#person-3" role="tab" data-toggle="tab">
                                            <img src="{{asset('public/img/our-team/thumb-3.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#person-4" role="tab" data-toggle="tab">
                                            <img src="{{asset('public/img/our-team/thumb-4.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1 col-md-12">
                            <div class="our-team-tabs">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="person-1">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="name">kevin clarkson</div>
                                                <div class="position">Creative Director . CEO</div>
                                                <div class="description">
                                                    <p>
                                                        Incididunt ute labore et dolore magna aliqua ut enima sed beniaps quis
                                                        nostrual exercit
                                                        ationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                        incididunt labore et dolore
                                                        magna ebarois ced lorem aliqua voluptate velit esse.
                                                    </p>
                                                </div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="team-image">
                                                    <img src="{{asset('public/img/our-team/team-img1.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="person-2">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="name">Ana Mes</div>
                                                <div class="position">Product Manager</div>
                                                <div class="description">
                                                    <p>
                                                        Incididunt ute labore et dolore magna aliqua ut enima sed beniaps quis
                                                        nostrual exercit
                                                        Ialiqu lsed obcea vlorem eipsum Ydolor osit uamet, Nincididunt abre set
                                                        tdore yeto anm
                                                        magna ebarois ced lorem aliqua voluptate velit esse laboris aliqu sed
                                                        bcea lorem ipsum dolor.
                                                    </p>
                                                </div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="team-image">
                                                    <img src="{{asset('public/img/our-team/team-img1.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="person-3">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="name">kevin clarkson</div>
                                                <div class="position">Creative Director . CEO</div>
                                                <div class="description">
                                                    <p>
                                                        Incididunt ute labore et dolore magna aliqua ut enima sed beniaps quis
                                                        nostrual exercit
                                                        ationullamco laboris aliqu sed labore et dolore
                                                        magna ebarois ced lorem aliqua voluptate velit esse.
                                                    </p>
                                                </div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="team-image">
                                                    <img src="{{asset('public/img/our-team/team-img1.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="person-4">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="name">kevin clarkson</div>
                                                <div class="position">Creative Director . CEO</div>
                                                <div class="description">
                                                    <p>
                                                        Incididunt ute labore et dolore magna aliqua ut enima sed beniaps quis
                                                        nostrual exercit
                                                        ationullamco laboris aliqu sed bcea lorem ipsum dolor sit amet
                                                        incididunt labore et dolore.
                                                    </p>
                                                </div>
                                                <div class="socials">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="team-image">
                                                    <img src="{{asset('public/img/our-team/team-img1.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./our team section -->

        <!-- Section comment -->
        <section class="section-comments">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <div class="heading-title">. what people say .</div>
                            <div class="heading-text">
                                <p>
                                    Read what our satisfied clients have to say about our services !
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1 col-md-12">
                        <div class="comments-carousel owl-carousel enable-owl-carousel" data-items="1" data-single-item="true"
                                data-nav="true" data-dots="false">
                            <div class="carousel-item">
                                <blockquote class="text">
                                    “ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                    labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco
                                    laboris
                                    nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.”
                                </blockquote>
                                <div class="avatar">
                                    <img src="{{asset('public/img/avatars/img1.png')}}" alt=""/>
                                </div>
                                <div class="author">
                                    <span class="name">Abdrea Hall,</span> Mea Tech
                                </div>
                            </div>
                            <div class="carousel-item">
                                <blockquote class="text">
                                    “ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                    labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco
                                    laboris
                                    nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit.”
                                </blockquote>
                                <div class="author">
                                    <div class="avatar">
                                        <img src="{{asset('public/img/avatars/img1.png')}}" alt=""/>
                                    </div>
                                    <span class="name">Abdrea Hall,</span> Mea Tech
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./section comment -->

        <!-- Section watch video -->
        <section class="section-watch-video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12">
                        <div class="control-button">
                            <a href="https://www.youtube.com/watch?v=MFQ1CBz4sv4&amp;autoplay=1" class="fancybox-video"><span
                                    class="icon icon-Play"></span></a>
                            <div class="clearfix"></div>
                            <span>watch the video</span>
                        </div>
                        <div class="computer">
                            <img src="{{asset('public/img/video-section.png')}}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./watch video section -->

        <!-- Section video action -->
        <section class="section-video-action green-section dotted-pattern">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12 text-center">
                        <h3 class="bold">
                            . Are you inspired from the video & <br/>
                            WANTed TO JOIN OUR TEAM? .
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-md-offset-1">
                        <div class="section-heading">
                            <div class="heading-text">
                                <p>
                                    Vorem ipsum dolor sit amet consecter adipsicing elit sed usm dui tempor incididunt ute
                                    labore magna
                                    aliqua ut enima minim lora beniaps quis exercitationullamco laboris aliqu sed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="#" class="btn btn-default btn-transparent">send us your Cv</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest news -->
        <section class="section-latest-news">
            <div class="container text-center">
                <h3 class="text-uppercase bold">. latest news .</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12">
                        <div class="row newsline-row fadeInSR">
                            <div class="col-md-6">
                                <div class="news-image left-image">
                                    <img src="{{asset('public/img/news/img1.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-item right-item">
                                    <div class="author">Written by: John Smith</div>
                                    <div class="title">
                                        Lorem ipsum dolor sit amet consectet adipisicing
                                        elit sed eiusmod tempor incididunt
                                    </div>
                                    <div class="comments"><span>25</span> Comments</div>
                                    <a href="#" class="share">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="row newsline-row fadeInSR">
                            <div class="col-md-6">
                                <div class="news-item left-item">
                                    <div class="author">Written by: John Smith</div>
                                    <div class="title">
                                        laboris nisi ut aliquip exa commodo consequat
                                        Duis aute irure dolor reprehenderit
                                    </div>
                                    <div class="comments"><span>25</span> Comments</div>
                                    <a href="#" class="share">Share</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-image right-image">
                                    <img src="{{asset('public/img/news/img2.jpg')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row newsline-row fadeInSR">
                            <div class="col-md-6">
                                <div class="news-image left-image">
                                    <img src="{{asset('public/img/news/img3.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="news-item right-item">
                                    <div class="author">Written by: John Smith</div>
                                    <div class="title">
                                        esse cillum dolore eu fugiat nulla pariatur sint
                                        occaecat cupidatat non proident
                                    </div>
                                    <div class="comments"><span>25</span> Comments</div>
                                    <a href="#" class="share">Share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-primary">read full blog</a>
                    </div>
                </div>
            </div>
        </section><!--./Latest news -->

        <!-- Companies section -->
        <section class="section-compannies">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img1.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img2.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img3.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img4.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img5.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img6.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img7.jpg')}}" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 fadeInSR text-center">
                                <div class="company-item">
                                    <img src="{{asset('public/img/companies/img8.jpg')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./companies section -->

        <!-- Map section -->
        <section class="section-map">
            <div class="container-fluid">
                <div class="row map-row">
                    <div class="col-md-5 custom-map">
                        <div class="" id="customMap" style="height: 200px;"></div>
                    </div>
                    <div class="col-md-7 text-center contact-info clearfix">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mini-section-heading text-center">
                                    <h4 class="bold text-uppercase">. get in touch .</h4>
                                    <p>
                                        Exercitation laboris aliqu sed bcea rem ipsum dolor amet incididunt
                                        labore et dolore magna ebarois ced lorem aliqua.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="welcome-feature active">
                                    <div class="feature-icon">
                                        <span class="icon icon-Pointer"></span>
                                    </div>
                                    <div class="feature-name">address</div>
                                    <div class="feature-text">2 Landriver St, NY 22036</div>
                                </div>
                                <div class="welcome-feature active">
                                    <div class="feature-icon">
                                        <span class="icon icon-Phone2"></span>
                                    </div>
                                    <div class="feature-name">phone</div>
                                    <div class="feature-text">1.800.123.4567</div>
                                </div>
                                <div class="welcome-feature active">
                                    <div class="feature-icon">
                                        <span class="icon icon-Mail"></span>
                                    </div>
                                    <div class="feature-name">email</div>
                                    <div class="feature-text">projects [at] domain.com</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="controls">
                                        <div class="control-item active"></div>
                                        <div class="control-item"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./map section -->

        <!-- Contact section -->
        <section class="section-contact">
            <div class="section-image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-heading">
                            <div class="heading-title">. send us a message .</div>
                            <div class="heading-text">
                                <p>
                                    Eorem ipsum dolor sit amet consecter adipsicing elit sed
                                    tempor incididunt ue labore et dolore magna aliqua lorem
                                    ipsum dolor sit amet elit sed dora eiusmod.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Full Name"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Email"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user-phone" id="user-phone" placeholder="Phone No."/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="user-message" required placeholder="Detailed Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--./contact section -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-navigation">
                            <ul>
                                <li><a href="#">features</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">Works</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social">
                            <div class="footer-title">. © aklas digital agency .</div>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <a href="#" class="scroll-top scrollTo scrollTop"></a>
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
        <script src="{{asset('public/js/contact_me.js')}}"></script>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- custom scripts -->
        <script src="{{asset('public/js/map.js')}}"></script>
        <script src="{{asset('public/js/custom.js')}}"></script>

    </body>
</html>
