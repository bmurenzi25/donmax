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
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">--}}
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
                <li><a class="smoothscroll"  href="#contact" title="contact">Contact US</a></li>
            </ul>

            <ul class="header-nav__social">
                <li>
                    <a href="#0"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-instagram"></i></a>
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
                    More About Us
                </a>
                <a href="#contact" class="smoothscroll btn btn--large">
                    Let's Talk
                </a>
            </div>

        </div> <!-- end home-content__main -->

    </div> <!-- end home-content -->

    <ul class="home-social">
        <li>
            <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="https://www.instagram.com/don_max_creative/"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
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
                Don Max Creative is your way to accelerate your business towards success.
            </p>
        </div>
    </div> <!-- end about-desc -->

    <div class="row bit-narrow">

        <div class="about-process process block-1-2 block-tab-full">

            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h4 class="item-title">OUR HISTORY</h4>
                    <p>
                        We started in 2018 as a design and Illustration studio but as our clients were meeting different problems that we believe pour skills could help;
                        We stepped out for help by offering problem-solving services.
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h4 class="item-title">ABOUT US</h4>
                    <p>
                        We help companies, institutions, organizations and brand to communicate to their audience through different ways like Branding, Graphic Design, UI/UX Design,
                        Website developing, Illustrations and Animations.
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h4 class="item-title">OBJECTIVE</h4>
                    <p>
                        Our main objective is to offer you services that fit your budget and always focusing on helping you shape a strong brand identity that can take your business to the next level.
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h4 class="item-title">OBJECTIVE</h4>
                    <p>
                        We started in 2018 as a design and Illustration studio but as our clients were meeting different problems that we believe pour skills could help; We stepped out for help by offering problem-solving services.
                    </p>
                </div>
            </div>

        </div> <!-- end process -->

    </div> <!-- end row -->

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

    {{--    <div class="row bit-narrow services block-1-2 block-tab-full">--}}
    {{--        <div class="row">--}}
    {{--            @foreach($services as $service)--}}
    {{--                <div class="col">--}}
    {{--                    <div class="item-service__text">--}}
    {{--                        <h3 class="item-title">{{ $service->name }}</h3>--}}
    {{--                        <p>--}}
    {{--                            <img src="{{ URL::asset(Voyager::image($service->image)) }}" class="img-thumbnail img-fluid" alt="Image Loading .... Please Wait!" style="height: 200px">--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    </div> <!-- end services -->--}}

    <div class="row bit-narrow services block-1-2 block-tab-full">
        @if(count($services) > 0)
            @foreach($services as $service)
                <div class="item-service__text" data-aos="fade-up">
                    <h3 class="item-title">{{ $service->name }}</h3>
                    <a class="service__link" href="https://www.linkedin.com/in/thomasvaeth/">
                        <div class="service__img-container">
                            <span class="preloader"></span>
                            <figure class="service__img" style="margin: 1em 0px;">
                                @php
                                    $projects = App\Project::where('service',$service->id)->get();
                                @endphp
                                <p>
                                    <img class="absolute-bg" src="{{ URL::asset(Voyager::image($service->image)) }}" alt="" style="width: 100%; height: 550px;"/>
                                </p> <img class="absolute-bg" src="https://source.unsplash.com/Z8XMAHDpjyU/1600x1600" alt=""/>
                                <img class="absolute-bg" src="https://source.unsplash.com/_FoHMYYlatI/1600x1600" alt=""/>
                                <img class="absolute-bg" src="https://source.unsplash.com/Shuj-9LqHwk/1600x1600" alt=""/>
                                <img class="absolute-bg" src="https://source.unsplash.com/sseiVD2XsOk/1600x1600" alt=""/>
                                <img class="absolute-bg" src="https://source.unsplash.com/2Ts5HnA67k8/1600x1600" alt=""/>
                                <img class="absolute-bg" src="https://source.unsplash.com/Ku-pKAfBPFU/1600x1600" alt=""/>
                            </figure>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div> <!-- end services -->


</section> <!-- end s-services -->

<!-- works
================================================== -->
<section id="works" class="s-works target-section">

    <div class="row section-header has-bottom-sep narrow target-section" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Our Works</h3>
            <h1 class="display-1">
                We create brands, products, and experiences that people love. Check out our recent works.
            </h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row masonry-wrap">

        <div class="masonry">

            <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">

                    <div class="item-folio__thumb">
                        <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                            <img src="images/portfolio/lady-shutterbug.jpg"
                                 srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            Shutterbug
                        </h3>
                        <p class="item-folio__cat">
                            Branding
                        </p>
                    </div>

                    <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                    <div class="item-folio__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>

                </div>
            </div> <!-- end masonry__brick -->

            <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">

                    <div class="item-folio__thumb">
                        <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                            <img src="images/portfolio/woodcraft.jpg"
                                 srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            Woodcraft
                        </h3>
                        <p class="item-folio__cat">
                            Web Design
                        </p>
                    </div>

                    <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                    <div class="item-folio__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>

                </div>
            </div> <!-- end masonry__brick -->

            <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">

                    <div class="item-folio__thumb">
                        <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                            <img src="images/portfolio/the-beetle.jpg"
                                 srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            The Beetle
                        </h3>
                        <p class="item-folio__cat">
                            Web Development
                        </p>
                    </div>

                    <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                    <div class="item-folio__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>

                </div>
            </div> <!-- end masonry__brick -->

            <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">

                    <div class="item-folio__thumb">
                        <a href="images/portfolio/gallery/g-salad.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                            <img src="images/portfolio/salad.jpg"
                                 srcset="images/portfolio/salad.jpg 1x, images/portfolio/salad@2x.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            Salad
                        </h3>
                        <p class="item-folio__cat">
                            Branding
                        </p>
                    </div>

                    <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                    <div class="item-folio__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>

                </div>
            </div> <!-- end masonry__brick -->

            <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">

                    <div class="item-folio__thumb">
                        <a href="images/portfolio/gallery/g-lamp.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                            <img src="images/portfolio/lamp.jpg"
                                 srcset="images/portfolio/lamp.jpg 1x, images/portfolio/lamp@2x.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            Lamp
                        </h3>
                        <p class="item-folio__cat">
                            Web Design
                        </p>
                    </div>

                    <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                    <div class="item-folio__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>

                </div>
            </div> <!-- end masonry__brick -->

            <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">

                    <div class="item-folio__thumb">
                        <a href="images/portfolio/gallery/g-fuji.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                            <img src="images/portfolio/fuji.jpg"
                                 srcset="images/portfolio/fuji.jpg 1x, images/portfolio/fuji@2x.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            Fuji
                        </h3>
                        <p class="item-folio__cat">
                            Web Design
                        </p>
                    </div>

                    <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        <i class="icon-link"></i>
                    </a>

                    <div class="item-folio__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>

                </div>
            </div> <!-- end masonry__brick -->

        </div> <!-- end masonry -->

    </div> <!-- end masonry-wrap -->

</section> <!-- end s-works -->


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

</section> <!-- end s-clients -->

<section class="customer-logos slider">
    <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
    <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
    <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
</section>

{{--Testimonies goes here--}}

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
                    intervalTime: 500
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

</body>
