<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>{{ config('app.name') }}</title>

    <!-- =========================
       Meta Information
    ============================== -->
    <meta name="description" content="KreFolio - Startup Agency Landing Page Template">
    <meta name="keywords" content="KreFolio, KreFolio html template, Free Bootstrap template, Responsive onepage template">
    <meta name="author" content="Zahidul Hossain @choyan">

    <!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/typography.css') }}">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/nivo-lightbox-default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.circliful.css') }}">

    <!-- ***** Custom Stylesheet ***** -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">

    <!-- Header scripts -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ URL::asset('js/queryloader2.min.js') }}"></script>

    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#e74c3c",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- =========================
       Fullscreen menu
    ============================== -->
    <div class="mobilenav">
        <ul>
            <li data-rel="#header">
                <span class="nav-label">Home</span>
            </li>
            <li data-rel="#about-us">
                <span class="nav-label">About Us</span>
            </li>
            <li data-rel="#why-choose-us">
                <span class="nav-label">Why Choose Us</span>
            </li>
            <li data-rel="#our-team">
                <span class="nav-label">Our Team</span>
            </li>
            <li data-rel="#testimonial">
                <span class="nav-label">Testimonial</span>
            </li>
            <li data-rel="#portfolio">
                <span class="nav-label">Portfolio</span>
            </li>
            <li data-rel="#map">
                <span class="nav-label">Contact Us</span>
            </li>
        </ul>
    </div>  <!-- *** end Full Screen Menu *** -->

    <!-- *****  hamburger icon ***** -->
    <a href="javascript:void(0)" class="menu-trigger">
       <div class="hamburger">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
       </div>
    </a>


    <!-- =========================
       Header
    ============================== -->
    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <!-- *****  Logo ***** -->
                <div class="logo-container">
                    <a href="#">
                        <!-- <img src="img/logo-header.png" height="37" width="197" alt=""> -->
                        <h4 class="logo-text">DonMaxCreative</h4>
                    </a>
                </div>

                <!-- =========================
                   Header item 1
                ============================== -->
                <div class="item active">

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-4.jpg');">
                    </div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">Kreative</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 2
                ============================== -->
                <div class="item">

                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-1.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">Kreative</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 3
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-2.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">Kreative</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 4
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-3.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">Kreative</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>

                <!-- =========================
                   Header item 5
                ============================== -->
                <div class="item">

                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('img/slider/slider-4.jpg');"></div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">This is <strong class="bold-text">Kreative</strong></h1>
                        <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
                        <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Our Work</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div> <!-- *** end wrapper *** -->

            <!-- Carousel Controls -->
            <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
                <span class="icon-prev icon-arrow-left"></span>
            </a>
            <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
                <span class="icon-next icon-arrow-right"></span>
            </a>
        </div>
    </header> <!-- *** end Header *** -->

    <!-- =========================
       About Us
    ============================== -->
    <section id="about-us" class="about-us">
        <div class="overlay">
            <div class="container padding-top-large">
                <h2>
                    <strong class="bold-text">About</strong>
                    <span class="light-text main-color">US</span>
                </h2>
                <div class="line main-bg"></div>
                <div class="row margin-bottom-medium">
                    <div class="col-md-7">
                        <div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
                            KreFolio, A Full <strong class="bold-text">Service Digital Agency</strong>
                            That Help Our Clients Expand Their Digital Reach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-side-side.png" alt="About Us Big Image" class="center-block img-responsive">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="margin-bottom-medium wow slideInUp">
                    We’re a creative agency based in Kigali - Rwanda driven by the passion of helping Governmental or non governmental institutions to communicate to their audience through different creative ways like : Graphic design, UI&UX design, illustrations and animation.
                </p>
            </div>
        </div>
    </section> <!-- *** end About Us *** -->


    <!----------   Why Coose Us
    ============================== -->
    <section id="why-choose-us" class="why-choose-us">
        <div class="container margin-top-large">
            <h2>
                <strong class="bold-text text-blue">Services we</strong>
                <span class="light-text text-dark">Provide</span>
            </h2>
            <div class="line main-bg margin-bottom-large"></div>

            <div class="row text-center">
                <div class="col-md-4 slideInUp">
                    <div class="card mt-1" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title text-blue">Card title</h5>
                        <h4 class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
                        <a href="#" class="card-link"> View Artworks</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 slideInUp">
                    <div class="card mt-1" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title text-blue">Card title</h5>
                        <h4 class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
                        <a href="#" class="card-link"> View Artworks</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 slideInUp">
                    <div class="card mt-1" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title text-blue">Card title</h5>
                        <h4 class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
                        <a href="#" class="card-link"> View Artworks</a>
                      </div>
                    </div>
                </div>
            </div>
        </div> <!-- *** end container *** -->
    </section> <!-- *** end Why Choose Us *** -->

    <section id="clients">
      <div class="container margin-top-large">
            <div class="pull-right">
                <h2 class="mr-2">
                    <strong class="bold-text text-dark">Our</strong>
                    <span class="light-text text-blue">Clients</span>
                </h2>
            </div>

        <div class="owl-carousel clients-carousel">

          <img src="{{ URL::asset('img/clients/hoza.png') }}" alt="">
          <img src="{{ URL::asset('img/clients/hoza.png') }}" alt="">

          <img src="{{ URL::asset('img/clients/hoza.png') }}" alt="">

          <img src="{{ URL::asset('img/clients/hoza.png') }}" alt="">

          <img src="{{ URL::asset('img/clients/hoza.png') }}" alt="">
          <img src="{{ URL::asset('img/clients/hoza.png') }}" alt="">
        </div>

      </div>
    </section>

    <!-- =============================
        Contact Us
    ============================== -->

    <section id="contact">
        <div class="container margin-top-large">
            <h2>
                <strong class="bold-text text-blue">Contact</strong>
                <span class="light-text text-dark">Us</span>
            </h2>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>

    <!-- ===============================
       Footer
    ============================== -->
    <footer id="footer" class="footer">
        <div class="container padding-large text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <!-- =========================
                       Social icons
                    ============================== -->
                    <ul class="social margin-bottom-medium">
                        <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="g-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li class="dribbble hvr-pulse"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <h4 class="copyright text-blue">
                        &copy; {{ config('app.name') }} - All Rights reserved
                    </h4>
                </div>
            </div>
        </div>
    </footer> <!-- *** end Footer *** -->


    <!-- =========================
     JavaScripts
    ============================== -->
    <script src="{{ URL::asset('js/vendor/jquery-1.11.1.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
    <script src="{{ URL::asset('js/twitterFetcher_min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('js/appear.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.circliful.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/nivo-lightbox.min.js') }}"></script>
    <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>
