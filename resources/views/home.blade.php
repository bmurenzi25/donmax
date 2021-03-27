<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href=" {{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href=" {{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href=" {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('css/set.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('css/component.css') }}" rel="stylesheet">
  <link href=" {{ URL::asset('css/normalize.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=" {{ URL::asset('css/style.css') }}" rel="stylesheet">

</head>

<body id="page-top" style="background: url('../img/bg/home.png') no-repeat, rgb(127, 183, 220);">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">{{ config('app.name') }}</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#clients">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2  data-aos="zoom-in" data-aos-delay="150">We are Don Max Creative!</h2>
          <h1>We make to make an Impact through Art and Design.</h1>
          <!-- <div><a href="#portfolio" class="btn-get-started scrollto">Our Portfolio</a></div> -->
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{ asset('img/bg/homeman.png') }}" class="img-fluid animated" alt=""  data-aos="zoom-in" data-aos-delay="150">
        </div>
      </div>
    </div>
    <div class="social-icon d-md-block d-sm-none d-xs-none d-xs-block d-sm-block" style="position: absolute; padding-left: 15px; padding-right: 20px; bottom: 30%;">
      <ul style="list-style: none;" class=" navbar-nav pull-right">
        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
      </ul>
    </div>
  </section>

  <main id="main">

    <section id="about" class="box-shadow-full about-mf sect-pt4 route">
      <div class="container">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                About us
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
          <div class="col-sm-12"  data-aos="zoom-in" data-aos-delay="150">
            <h4>Our History</h4>
            <h5 class="text-i">
              We started in 2018 as a design and Illustration studio but as our clients were meeting different problems that we believe pour skills could help; We steped out for help by offering problem-solving 
              services.
            </h5>
          </div>
          <div class="col-sm-12"  data-aos="zoom-in" data-aos-delay="150">
            <h4>About Us</h4>
            <h5 class="text-i">
              We help companies, institutions, organizations and brand to communicate to their audience through different ways like Branding, Graphic Design, UI/UX Design, Website developing, Illustrations and 
              Animations.
            </h5>
          </div>
          <div class="col-sm-12">
            <h4>Objective</h4>
            <h5 class="text-i">
              Our main objective is to offer you services that fit your budget and always focusing on helping you shape a strong brand identity that can take your business to the next level.
            </h5>
          </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container box-shadow-full"  data-aos="fade-up">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"  data-aos="fade-up">
            <div class="work-box">
              <a href="{{ URL::asset('img/artworks/1.png') }}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{ URL::asset('img/artworks/1.png') }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title text-center">UI / UX Design</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"  data-aos="fade-up">
            <div class="work-box">
              <a href="{{ route('serviced') }}" data-gall="portfolioGal=lery" class="venbox">
                <div class="work-img">
                  <img src="{{ URL::asset('img/artworks/2.png') }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title text-center">UI / UX Design</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ URL::asset('img/artworks/3.png') }}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{ URL::asset('img/artworks/3.png') }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title text-center">UI / UX Design</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ URL::asset('img/artworks/4.png') }}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{ URL::asset('img/artworks/4.png') }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title text-center">UI / UX Design</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ URL::asset('img/artworks/5.png') }}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{ URL::asset('img/artworks/5.png') }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title text-center">UI / UX Design</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ URL::asset('img/artworks/6.png') }}" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="{{ URL::asset('img/artworks/6.png') }}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title text-center">UI / UX Design</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
    <section id="work" class="clients sect-pt4 route">
      <div class="container box-shadow-full" style="background-color: #fff">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a" style="color: #000">
                Clients
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/1.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/2.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/3.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/4.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/5.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/6.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/7.png') }}" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 7px">
                <div class="client-logo"> <img src="{{ URL::asset('img/clients/8.png') }}" class="img-fluid" alt=""> </div>
            </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <section id="team">
      <div class="container  box-shadow-full">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Team
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col-md-4">
                <img src="{{ URL::asset('img/team/3.jpg') }}" class="img-team" height="250">
              </div>
              <div class="col-md-8 info">
                <h5 class="t_name">Don Max EL</h5>
                <p class="t_title">Creative Director</p>
                <p class="mt-1">
                  We’re a creative agency based in Kigali - Rwanda driven by the passion of helping Governmental or non governmental institutions to communicate to their audience thro.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col-md-4">
                <img src="{{ URL::asset('img/team/3.jpg') }}" class="img-team" height="250">
              </div>
              <div class="col-md-8 info">
                <h5 class="t_name">Don Max EL</h5>
                <p class="t_title">Creative Director</p>
                <p class="mt-1">
                  We’re a creative agency based in Kigali - Rwanda driven by the passion of helping Governmental or non governmental institutions to communicate to their audience thro.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 40px">
          <div class="col">
            <div class="row">
              <div class="col-md-4">
                <img src="{{ URL::asset('img/team/3.jpg') }}" class="img-team" height="250">
              </div>
              <div class="col-md-8 info">
                <h5 class="t_name">Don Max EL</h5>
                <p class="t_title">Creative Director</p>
                <p class="mt-1">
                  We’re a creative agency based in Kigali - Rwanda driven by the passion of helping Governmental or non governmental institutions to communicate to their audience thro.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col-md-4">
                <img src="{{ URL::asset('img/team/3.jpg') }}" class="img-team" height="250">
              </div>
              <div class="col-md-8 info">
                <h5 class="t_name">Don Max EL</h5>
                <p class="t_title">Creative Director</p>
                <p class="mt-1">
                  We’re a creative agency based in Kigali - Rwanda driven by the passion of helping Governmental or non governmental institutions to communicate to their audience thro.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url('{{ URL::asset('img/bg/contact.jpg') }}')">
      <div class="overlay-mf"></div>
      <div class="container box-shadw-full-inv">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Contact US
              </h3>
              <div class="line-mf"></div>
            </div>
            <div class="contact-mf">
              <div id="contact">
                <div class="row">
                  <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=kk%20720%20st%2022+(Don%20Max%20Creative)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm">Driving Route Planner</a></div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Leave a Message
                      </h5>
                    </div>
                    <div>
                      <form action="#" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead text-white">
                        <b>We’re a creative agency based in Kigali - Rwanda driven by the passion of helping Governmental or non governmental institutions to communicate to their audience through different creative ways like : Graphic design, UI&UX design, illustrations and animation.</b>
                      </p>
                      <div class="row address-sec">
                        <div class="col">
                          <a href="tel:(+250) 788 997 825" class="btn btn-primary btn-block btn-lg">Call Our Line 1</a href="tel:">
                        </div>
                        <div class="col">
                          <a href="tel:(+250) 787 191 444" class="btn btn-primary btn-block btn-lg">Call Our Line 2</a>
                        </div>
                      </div>
                      <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                      </ul>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>{{ config('app.name') }}</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="#">B. El</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src=" {{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
  <script src=" {{ URL::asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/counterup/jquery.counterup.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/typed.js/typed.min.js') }}"></script>
  <script src=" {{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src=" {{ URL::asset('js/masonry.pkgd.min.js') }}"></script>
  <script src=" {{ URL::asset('js/modernizr.custom.js') }}"></script>
  <script src=" {{ URL::asset('js/imagesloaded.js') }}"></script>
  <script src=" {{ URL::asset('js/classie.js') }}"></script>
  <script src=" {{ URL::asset('js/aos.js') }}"></script>
  <script type="text/javascript">
    alert('Hello');
  </script>

  <!-- Template Main JS File -->
  <script src=" {{ URL::asset('js/main.js') }}"></script>

</body>

</html>