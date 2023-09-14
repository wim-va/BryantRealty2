<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EstateAgency Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('trying/img/favicon.png') }}" rel="icon">
    <link href="{{ url('trying/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('trying/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('trying/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('trying/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('trying/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('trying/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>

    @include('partials.strange')
    @include('partials.navbar')
    @include('partials.caroussel')

    @yield('content')

    {{-- 
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-cart"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Lifestyle</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent
                                    sapien massa,
                                    convallis a pellentesque
                                    nec, egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="#" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-calendar4-week"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Loans</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.
                                    Mauris blandit
                                    aliquet elit, eget tincidunt
                                    nibh pulvinar a.
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="#" class="link-c link-icon">Read more
                                    <span class="bi bi-calendar4-week"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-card-checklist"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Sell</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent
                                    sapien massa,
                                    convallis a pellentesque
                                    nec, egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="#" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="property-grid.html">All Property
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="trying/img/property-6.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">206 Mount
                                                    <br /> Olive Road Two</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | $ 12.000</span>
                                            </div>
                                            <a href="#" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="trying/img/property-3.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">157 West
                                                    <br /> Central Park</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | $ 12.000</span>
                                            </div>
                                            <a href="property-single.html" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="trying/img/property-7.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">245 Azabu
                                                    <br /> Nishi Park let</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | $ 12.000</span>
                                            </div>
                                            <a href="property-single.html" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    <img src="trying/img/property-10.jpg" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">204 Montal
                                                    <br /> South Bela Two</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | $ 12.000</span>
                                            </div>
                                            <a href="property-single.html" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m
                                                        <sup>2</sup>
                                                    </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>

            </div>
        </section>
        <!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
        <section class="section-agents section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Best Agents</h2>
                            </div>
                            <div class="title-link">
                                <a href="agents-grid.html">All Agents
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="trying/img/agent-4.jpg" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="agent-single.html" class="link-two">Margaret Sotillo
                                                <br> Escala</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="trying/img/agent-1.jpg" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="agent-single.html" class="link-two">Stiven Spilver
                                                <br> Darw</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-d">
                            <div class="card-img-d">
                                <img src="trying/img/agent-5.jpg" alt="" class="img-d img-fluid">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="agent-single.html" class="link-two">Emma Toledo
                                                <br> Cascada</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <p class="content-d color-text-a">
                                        Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong> +54 356 945234
                                        </p>
                                        <p>
                                            <strong>Email: </strong> agents@example.com
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Agents Section -->

        <!-- ======= Latest News Section ======= -->
        <section class="section-news section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest News</h2>
                            </div>
                            <div class="title-link">
                                <a href="blog-grid.html">All News
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="news-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="trying/img/post-2.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">House</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">House is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="trying/img/post-5.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Travel</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">Travel is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="trying/img/post-7.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Park</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">Park is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="trying/img/post-3.jpg" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Travel</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="#">Travel is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                    </div>
                </div>

                <div class="news-carousel-pagination carousel-pagination"></div>
            </div>
        </section>
        <!-- End Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
        <section class="section-testimonials section-t8 nav-arrow-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Testimonials</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="testimonial-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-img">
                                            <img src="trying/img/testimonial-1.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-ico">
                                            <i class="bi bi-chat-quote-fill"></i>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                                                cupiditate ea nam praesentium
                                                debitis hic ber quibusdam
                                                voluptatibus officia expedita corpori.
                                            </p>
                                        </div>
                                        <div class="testimonial-author-box">
                                            <img src="trying/img/mini-testimonial-1.jpg" alt=""
                                                class="testimonial-avatar">
                                            <h5 class="testimonial-author">Albert & Erika</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-img">
                                            <img src="trying/img/testimonial-2.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="testimonial-ico">
                                            <i class="bi bi-chat-quote-fill"></i>
                                        </div>
                                        <div class="testimonials-content">
                                            <p class="testimonial-text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                                                cupiditate ea nam praesentium
                                                debitis hic ber quibusdam
                                                voluptatibus officia expedita corpori.
                                            </p>
                                        </div>
                                        <div class="testimonial-author-box">
                                            <img src="trying/img/mini-testimonial-2.jpg" alt=""
                                                class="testimonial-avatar">
                                            <h5 class="testimonial-author">Pablo & Emma</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                    </div>
                </div>
                <div class="testimonial-carousel-pagination carousel-pagination"></div>

            </div>
        </section>
        <!-- End Testimonials Section -->

    </main>
    <!-- End #main -->
 --}}
    @include('partials.footer')

    {{-- <div id="preloader"></div> --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('trying/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('trying/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('trying/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('trying/js/main.js') }}"></script>

</body>

</html>
