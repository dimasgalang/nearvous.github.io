<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/png">
    {{-- title field --}}
    @if (isset($title))
    <title>{{ $title }}</title>
    @else
    <title>Nearvous</title>
    @endif
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>

    <!--================ Start Header Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ URL::asset('img/logo.png') }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/#about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/#service') }}">Service</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/#portfolio') }}">Portfolio</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Social Media</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/dg_resist"
                                            target=”_blank”>Instagram</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://www.linkedin.com/in/dimas-galang-ramadhan-35aa611a4"
                                            target=”_blank”>LinkedIn</a>
                                    <li class="nav-item"><a class="nav-link" href="https://github.com/dimasgalang"
                                            target=”_blank”>GitHub</a></li>
                            </li>
                        </ul>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h3 class="text-uppercase">Hello</h3>
                            <h1 class="text-uppercase">I am Dimas</h1>
                            <h5 class="text-uppercase">as Software Developer</h5>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="#"><span>Hire Me</span></a>
                                <a class="primary_btn tr-bg" href="#"><span>Get CV</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img">
                            <img class="" src="img/banner/home-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section id="about" class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="img/about-us.png" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>let’s <br>
                            Introduce about <br>
                            myself</h2>
                        <p>
                            I'm Dimas Galang Ramadhan, I'm a bachelor's degree in informatics and computer engineering
                            education.
                        </p>
                        <p>
                            I have an interest in programming, currently trying to build a business with friends in the
                            field of digital agents and IT consultants called Root Labs Indonesia. Took a position as a
                            Mobile Developer and has developed many mobile applications and contributed to several web
                            application projects.
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    <section id="brand" class="brand_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ URL::asset('img/brands/rootlabs.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ URL::asset('img/brands/emp.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="{{ URL::asset('img/brands/id.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="offset-lg-2 col-lg-4 col-md-6">
                    <div class="client-info">
                        <div class="d-flex mb-50">
                            <span class="lage">1</span>
                            <span class="smll">Years Experience Working</span>
                        </div>
                        <div class="call-now d-flex">
                            <div>
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="ml-15">
                                <p>call us now</p>
                                <h3>(+62)-815-7578-7381</h3>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================ End Brand Area =================-->

    <!--================ Start Features Area =================-->
    <section id="service" class=" features_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>service offers </h2>
                        <p>
                            Is give may shall likeness made yielding spirit a itself togeth created
                            after sea <br> is in beast beginning signs open god you're gathering ithe
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ URL::asset('img/services/mobile-development.png') }}" alt="" style="width: 68px; width: 68px">
                        <h4>Mobile Development</h4>
                        <p>Develop mobile applications according to the application design provided by the client.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ URL::asset('img/services/interactive.png') }}" alt="" style="width: 68px; width: 68px">
                        <h4>Interactive Learning Media</h4>
                        <p>Develop interactive learning media for junior high and high school.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ URL::asset('img/services/web-development.png') }}" alt="" style="width: 68px; width: 68px">
                        <h4>Website Development</h4>
                        <p>Develop personal website, company portfolio, product catalog, etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ URL::asset('img/services/game-development.png') }}" alt="" style="width: 68px; width: 68px">
                        <h4>Game Development</h4>
                        <p>Develop games that contain the material needed in learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->

    <!--================Start Portfolio Area =================-->
    <section id="portfolio" class="portfolio_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2>quality work <br>
                            Recently project </h2>
                            <p>Some projects that have been completed and are currently working on.</p>
                    </div>
                </div>
            </div>
            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <li data-filter=".mobile">mobile</li>
                    <li data-filter=".web"> web</li>
                    <li data-filter=".interactive">interactive media</li>
                    <li data-filter=".games">games</li>
                    <li data-filter=".ongoing">ongoing</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid justify-content-center">
                    <!-- Mobile Development -->
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/qurankidz.jpg') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/qurankidz.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Quran Kid'z</a></h4>
                                <p>Quran Kid'z is an educational game application that serves to improve the skills of
                                    memorizing the Qur'an for Raudatul Athfal children.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/muslimheir.jpg') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/muslimheir.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">MuslimHeir</a></h4>
                                <p>The Muslimheir application is an e-learning application for the distribution of
                                    inheritance according to Islamic law based on games.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ URL::asset('img/portfolio/project/cobile.jpg') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/cobile.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">CoBile</a></h4>
                                <p>A connecting book on mobile application that contains synchronous and asynchronous
                                    communication between teachers and parents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/chemical.jpg') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/chemical.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Chemical Apps</a></h4>
                                <p>This application is a mobile learning media to support class XI Chemistry learning on
                                    the Periodic Table material.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/hydrochem.jpg') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/hydrochem.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Hydrolisys Apps</a></h4>
                                <p>This application is a mobile learning media to support class XI Chemistry learning on
                                    Salt Hydrolysis material.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ URL::asset('img/portfolio/project/eibadah.jpg') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/eibadah.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">E-Ibadah</a></h4>
                                <p>The E-worship application is an android-based application to help children learn to
                                    recognize the complete sequence of prayer movements and their readings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/indonesiadirect.jpg') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/indonesiadirect.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Indonesia Direct E-Learning</a></h4>
                                <p>Course application for domestic industry players to strengthen exports through their
                                    brands.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Interactive Media -->
                    <div class="col-lg-4 col-md-6 all interactive">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/askingfor.png') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/askingfor.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Asking For and Giving Opinions</a></h4>
                                <p>Interactive learning media in English books with material asking for and giving
                                    opinions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all interactive">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/kladogram.png') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/kladogram.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Membuat Kladogram</a></h4>
                                <p>Interactive learning media compose cladograms based on the principles of
                                    classification of living things.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all interactive">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ URL::asset('img/portfolio/project/spltv.png') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/spltv.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Metode Penyelesaian SPLTV</a></h4>
                                <p>Interactive learning media compose a system of three-variable linear equations from
                                    contextual problems.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Website Development -->
                    <div class="col-lg-4 col-md-6 all web">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ URL::asset('img/portfolio/project/idw.png') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/idw.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">IDW</a></h4>
                                <p>Interactive Digital Worksheets (IDW) is an interactive digital worksheet platform
                                    that facilitates students to do practical work.</p>
                            </div>
                        </div>
                    </div>

                    <!-- OnGoing -->
                    <div class="col-lg-4 col-md-6 all ongoing mobile">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/equalchem.jpg') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/equalchem.jpg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">EqualChems</a></h4>
                                <p>Equal'chems is a mobile learning media application to support the learning process of
                                    chemistry class XI MIPA on chemical equilibrium material.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all ongoing web">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ URL::asset('img/portfolio/project/guarder.png') }}"
                                    alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/guarder.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Guarder</a></h4>
                                <p>Guarder is a catalog website for floor cleaning products, hand sanitizers, and hand
                                    soap.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all ongoing games">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100"
                                    src="{{ URL::asset('img/portfolio/project/landcovering.png') }}" alt="">
                                <div class="overlay"></div>
                                <a href="{{ URL::asset('img/portfolio/project/landcovering.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Land Covering</a></h4>
                                <p>Land Covering is an educational game with a discussion on the impact of land use.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Portfolio Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>Experience</h2>
                        <p>Some of his current work experience in the field of information technology.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testi_slider owl-carousel">
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('img/experiences/development.png') }}" alt="" style="width: 130px; height: 130px">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Mobile Developer</h4>
                                    <h5>August 2021 - Now</h5>
                                    <p>Develop a variety of mobile applications for research or student
                                        competitions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('img/experiences/animation.png') }}" alt="" style="width: 130px; height: 130px">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Animator</h4>
                                    <h5>March 2022 - Now</h5>
                                    <p>Developing interactive multimedia as a companion media for junior and senior high
                                        school student textbooks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('img/experiences/freelance.png') }}" alt="" style="width: 130px; height: 130px">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Freelancer</h4>
                                    <h5>June 2020 - Now</h5>
                                    <p>Developing websites, flash-based interactive media, games.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('img/experiences/development.png') }}" alt="" style="width: 130px; height: 130px">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Mobile Developer</h4>
                                    <h5>August 2021 - Now</h5>
                                    <p>Develop a variety of mobile applications for research or student
                                        competitions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('img/experiences/animation.png') }}" alt="" style="width: 130px; height: 130px">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Animator</h4>
                                    <h5>March 2022 - Now</h5>
                                    <p>Developing interactive multimedia as a companion media for junior and senior high
                                        school student textbooks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('img/experiences/freelance.png') }}" alt="" style="width: 130px; height: 130px">
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Freelancer</h4>
                                    <h5>June 2020 - Now</h5>
                                    <p>Developing websites, flash-based interactive media, games.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ URL::asset('img/logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="footer_social">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>