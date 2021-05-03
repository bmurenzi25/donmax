<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ config('app.name') ?? 'Don Max Creative' }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/base.css')  }}">
    <link rel="stylesheet" href="{{ URL::asset('css/vendor.css')  }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')  }}">

    <!-- script
    ================================================== -->
    <script src="{{ URL::asset('js/modernizr.js')  }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>


<body id="top">

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-jump">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- header
================================================== -->
<header class="s-header">

    <div class="header-logo">
        <a class="site-logo" href="{{ url('/') }}">
            <img src="{{ URL::asset('images/logo.svg') }}" alt="Homepage">
        </a>
    </div> <!-- end header-logo -->

    <nav class="header-nav">

        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

        <h3>Navigate to</h3>

        <div class="header-nav__content">

            <ul class="header-nav__list">
                <li><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">About US</a></li>
                <li><a class="smoothscroll"  href="#services" title="services">Our Services</a></li>
                <li><a class="smoothscroll"  href="#clients" title="contact">Our Clients</a></li>
                <li><a class="smoothscroll"  href="#team" title="contact">Meet our Team</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contact US</a></li>
            </ul>

            <ul class="header-nav__social">
                <li>
                    <a href="#0" target="_blank"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/don_max_creative/" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>

        </div> <!-- end header-nav__content -->

    </nav> <!-- end header-nav -->

    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-icon"></span>
    </a>

</header> <!-- end s-header -->


<!-- home
================================================== -->
<section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

    <div class="grid-overlay">
        <div></div>
    </div>

    <div class="home-content">

        <div class="row home-content__main">

            <h1>
                DON MAX
            </h1>
            <h1>
                CREATIVE
            </h1>


            <h3>
                We make impact through Art and Design.
            </h3>

            <div class="home-content__button">
                <a href="#about" class="smoothscroll btn btn--primary btn--large">
                    Our Story
                </a>
                <a href="#contact" class="smoothscroll btn btn--large">
                    Get in Touch With Us
                </a>
            </div>

        </div> <!-- end home-content__main -->

    </div> <!-- end home-content -->

    <ul class="home-social">
        <li>
            <a href="#0" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="https://www.instagram.com/don_max_creative/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
        </li>
    </ul> <!-- end home-social -->

</section> <!-- end s-home -->


<!-- about
================================================== -->
<section id="about" class="s-about target-section">

    <div class="row section-header bit-narrow" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">This is Us</h3>
            <h1 class="display-1">
                We are Don Max Creative, We aim to make an Impact through Art and Design.
            </h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row bit-narrow" data-aos="fade-up">
        <div class="col-full">
            <p class="lead">
                At Don Max creative, We help companies,institutions and brand to be visible in this
                new digital world and connect with their audience through Branding, design,digital marketing and website
                developing.
                “Briefly we help businesses to grow sales and visibility through branding strategies and digital marketing“
            </p>
            <p class="lead">
                “Doing business without advertising is like winking at a girl in the dark.”
                Don Max Creative is your way to accelerate your business towards success.
            </p>
        </div>
    </div> <!-- end about-desc -->

</section> <!-- end s-about -->


<!-- services
================================================== -->
<section id='services' class="s-services target-section darker">

    <div class="row section-header bit-narrow" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">What we do</h3>
            <h1 class="display-1">
                We take pride in what we do. Our services are designed to help
                your business stand out and turn your ideas into digital realities.
            </h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row bit-narrow services block-1-2 block-tab-full">
        <div class="container">
            @if(count($services) > 0)
                @foreach($services as $service)

                        <div class="item-service__text mr-2" data-aos="fade-up">
                            <a href="{{ url('/service',$service->id) }}">
                                <h3 class="item-title">{{ $service->name }}</h3>
                            </a>
                            <a class="service__link" href="{{ url('/service',$service->id) }}">
                                <div class="service__img-container" style="margin-right: 40px">
                                    <span class="preloader"></span>
                                    <figure class="service__img" style="margin: 1em 0px;">
                                        <img class="absolute-bg img-fluid" src="{{ URL::asset(Voyager::image($service->image)) }}" alt="" />
                                        @foreach($service->projects as $project)
                                            <img class="absolute-bg img-fluid" src="{{ URL::asset(Voyager::image($project->image)) }}" alt="" />
                                        @endforeach
                                    </figure>
                                </div>
                            </a>
                        </div>

                @endforeach
            @endif
        </div>
    </div> <!-- end services -->


</section> <!-- end s-services -->

<!-- testimonies
================================================== -->
<section class="s-testimonials">

    <div class="testimonials__icon" data-aos="fade-up"></div>

    <div class="row testimonials narrow">

        <div class="col-full testimonials__slider" data-aos="fade-up">
            @if(count($testimonials))
                @foreach($testimonials as $testimony)

                    <div class="testimonials__slide">
                        <p>
                            {{ $testimony->message ?? 'To be verified before sharing' }}
                        </p>
                        <div class="testimonials__author">
                            {{ $testimony->name ?? 'Anonymous' }}
                            <span>{{ $testimony->position ?? 'No Position shared' }}</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                @endforeach
            @endif

        </div> <!-- end testimonials__slider -->

    </div> <!-- end testimonials -->

</section> <!-- end s-testimonials -->


<!-- clients
================================================== -->
<section id="clients" class="s-clients target-section darker">

    <div class="grid-overlay">
        <div></div>
    </div>

    <div class="row section-header text-center narrow" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Our Clients</h3>
            <h1 class="display-1">Who we have worked with</h1>
        </div>
    </div> <!-- end section-header -->

    <section class="customer-logos slider">

        @if(count($clients))
            @foreach($clients as $client)
                <div class="slide"><img src="{{ URL::asset(Voyager::image($client->logo)) }}"></div>
            @endforeach
        @endif

    </section>

</section> <!-- end s-clients -->

<!-- Section: Team -->
<section class="team-section text-center my-5" id="team">
    <div class="row section-header text-center narrow" data-aos="fade-up">
        <div class="col-full" style="margin-top: 30px">
            <h3 class="subhead mt-3">Our TEAM</h3>
            <h1 class="display-1">The Brains Behind our creativity!</h1>
        </div>
    </div> <!-- end section-header -->

    <!-- Grid row -->
    <div class="row text-center">
        <div class="team-slide">

            @if(count($team_members))
                @foreach($team_members as $team_member)

                    <div class="col-md-4 mb-md-0 mb-5 slide">
                        <div class="avatar mx-auto">
                            <img src="{{ URL::asset(Voyager::image($team_member->photo)) }}" class="rounded z-depth-1-half" alt="Sample avatar">
                        </div>
                        <h4 class="font-weight-bold dark-grey-text my-4">{{ $team_member->name ?? 'Anonymous' }}</h4>
                        <h6 class="text-uppercase grey-text mb-3"><strong>{{ $team_member->role ?? 'Member' }}</strong></h6>
                        <!-- Facebook-->
                        <a type="button" href="#" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                @endforeach
            @endif
        </div>

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Team -->

<section id="contact" class="s-styles">

    <div class="row">

        <div class="col-six tab-full">

            <h3> Leave US a Message </h3>

            <form>
                <div>
                    <label for="sampleInput">Your email</label>
                    <input class="full-width" type="email" placeholder="test@gmail.com" id="sampleInput">
                </div>

                <label for="exampleMessage">Type your Message</label>
                <textarea class="full-width" placeholder="Your message" id="exampleMessage"></textarea>

                <input class="btn--primary full-width" type="submit" value="Submit">

            </form>

        </div>

        <div class="col-six tab-full">

            <h3>Map Directions</h3>

            <div style="width: 100%">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=kk%20720%20st%2022+(Don%20Max%20Creative)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>

        </div>

    </div> <!-- end row -->

</section> <!-- end styles -->

<!-- footer
================================================== -->
<footer>
    <div class="row">
        <div class="col-full ss-copyright">
            <span>© {{ config('app.name') }}</span>
            <span>Design by <a href="#">B. El</a></span>
        </div>
    </div>

</footer>


<!-- photoswipe background
================================================== -->
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                "Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
            "Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->


<!-- Java Script
================================================== -->
<script src="{{ URL::asset('js/jquery-3.2.1.min.js')  }}"></script>
<script src="{{ URL::asset('js/plugins.js')  }}"></script>
<script src="{{ URL::asset('js/main.js')  }}"></script>
<script>
    const ImageLoop = (() => {
        let s;

        return {
            settings() {
                return {
                    image: document.querySelectorAll('.service__img'),
                    link: document.querySelectorAll('.service__link'),
                    intervalTime: 1000
                };
            },

            init() {
                s = this.settings();
                this.bindEvents();
            },

            bindEvents() {
                this.hideImg();
                this.hoverImg();
            },

            hideImg() {
                [].forEach.call(s.image, img => {
                    [].forEach.call(img.children, (moreImg, idx) => {
                        if (idx !== 0) {
                            moreImg.style.display = 'none';
                        }
                    });
                });
            },

            hoverImg() {
                [].forEach.call(s.link, link => {
                    let interval;
                    let count = 0;

                    link.addEventListener('mouseenter', e => {
                        const target = e.target.children[0];
                        // Idx 1 because of the span tag/preloader
                        const img = target.children[1].children;
                        const length = img.length;

                        interval = setInterval(() => {
                            img[count].style.display = 'none';

                            if (count === length - 1) {
                                count = 0;
                            } else {
                                count++;
                            }

                            img[count].style.display = 'block';
                        }, s.intervalTime);
                    });

                    link.addEventListener('mouseleave', () => {
                        clearInterval(interval);
                    });
                });
            }
        };
    })();

    ImageLoop.init();

</script>

<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.team-slide').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>

</body>
