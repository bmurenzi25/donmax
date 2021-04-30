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

<!-- works
================================================== -->
<section id="works" class="s-works target-section">

    <div class="row section-header has-bottom-sep narrow target-section" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">{{ \App\Service::find($service_id)->name }}</h3>
            <h1 class="display-1">
                {{ \App\Service::find($service_id)->description ?? 'We are good in everything we do, Browse our projects down below!' }}
            </h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row masonry-wrap">

        <div class="masonry">
            @foreach(\App\Service::find($service_id)->projects as $project)
                <div class="masonry__brick" data-aos="fade-up">
                <div class="item-folio">
                    <div class="item-folio__thumb">
                        <a href="{{ URL::asset(Voyager::image($project->image)) }}" class="thumb-link" title="Shutterbug" data-size="1050x700">
                            <img src="{{ URL::asset(Voyager::image($project->image)) }}"
                                 srcset="{{ URL::asset(Voyager::image($project->image)) }} 1x, {{ URL::asset(Voyager::image($project->image)) }} 2x" alt="">
                        </a>
                    </div>

                    <div class="item-folio__text">
                        <h3 class="item-folio__title">
                            {{ $project->name }}
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
            @endforeach

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
