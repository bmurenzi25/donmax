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
                <li><a class="smoothscroll" href="{{ url('/') }}" title="home">Home</a></li>
            </ul>

            <ul class="header-nav__social">
                <li>
                    <a href="#0"><i class="fab fa-facebook"></i></a>
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

<img src="{{ URL::asset(Voyager::image($project->image)) }}" alt="">
<!-- works
================================================== -->
<section id="works" class="s-works target-section">

    <div class="row section-header has-bottom-sep narrow target-section" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">{{ $project->name ?? 'No Name'}}</h3>
            <h1 class="display-1">
                {{ $project->description ?? 'We are good in everything we do, Browse our projects down below!' }}
            </h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row masonry-wrap">

        <div class="masonry">

            @foreach(json_decode($project->files) as $file)
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ URL::asset(Voyager::image($file)) }}" class="thumb-link"
                               title="{{ $project->name ?? 'No Name Project'}}" data-size="1050x700">
                                <img src="{{ URL::asset(Voyager::image($file)) }}"
                                     srcset="{{ URL::asset(Voyager::image($file)) }} 1x, {{ URL::asset(Voyager::image($file)) }} 2x"
                                     alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                {{ $project->name ?? 'No Name Project'}}
                            </h3>
                            {{--                                <p class="item-folio__cat">--}}
                            {{--                                    {{ $project>service->name }}--}}
                            {{--                                </p>--}}
                        </div>
                    </div>
                </div> <!-- end masonry__brick -->
            @endforeach

        </div> <!-- end masonry -->

    </div> <!-- end masonry-wrap -->

</section> <!-- end s-works -->

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
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title=
                "Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title=
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
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title=
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
    $(document).ready(function () {
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
