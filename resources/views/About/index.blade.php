@extends('layouts.app')
@section('title', 'About Us')
@section('content')

    <!DOCTYPE html>
    <html>

    <head>
        <title>About us - AKAD - Creative Digital Agency HTML Template</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <meta name="author" content="Amine Akhouad">
        <meta name="description" content="AKAD is a creative and modern template for digital agencies">

        <!-- STYLES -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/animsition.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <style>
            /* Basic styling for the slider */
            .swiper-container {
                width: 100%;
                height: 75vh;
                /* Fullscreen height */
                position: relative;
                overflow: hidden;
            }

            .hero-slide {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            .page-title {
                color: #777;
                text-align: center;
                position: relative;
                z-index: 10;
                padding: 10px 20px;
                border-radius: 8px;
            }

            .big-title {
                font-size: 3rem;
                margin-bottom: 10px;
            }

            .small-title {
                font-size: 1.2rem;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .big-title {
                    font-size: 2rem;
                }

                .small-title {
                    font-size: 1rem;
                }
            }
        </style>
    </head>

    <body class="animsition">
        <!-- HERO SECTION  -->
        <div>
            <div class="swiper-container hero-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="hero-slide" style="background-image: url('file/about/site-hero2.jpg');">
                            <div class="page-title">
                                <div class="big-title montserrat-text uppercase">About Us</div>
                                <div class="small-title montserrat-text uppercase">Home / About</div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="hero-slide" style="background-image: url('file/about/site-hero2.jpg');">
                            <div class="page-title">
                                <div class="big-title montserrat-text uppercase">Our Mission</div>
                                <div class="small-title montserrat-text uppercase">Home / Mission</div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="hero-slide" style="background-image: url('file/about/site-hero2.jpg');">
                            <div class="page-title">
                                <div class="big-title montserrat-text uppercase">Our Vision</div>
                                <div class="small-title montserrat-text uppercase">Home / Vision</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination and Navigation -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <section class="about-section">
            @foreach ([$about1, $about2] as $about)
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <span>{{ $about->judul }}</span>
                            <p>{{ $about->isi }}</p>
                            @if ($about->image_url)
                                <img src="{{ asset('file/about/' . $about->image_url) }}" alt="About Image" class="img-fluid">
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <span>{{ $about2->judul }}</span>
                        <p>{{ $about1->isi }}</p>
                        @if ($about1->image_url)
                        <img src="{{ asset('file/about/' . $about1->image_url) }}" alt="About 1 Image"
                            class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- SCRIPTS -->
        <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="assets/js/smoothScroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                new WOW().init();
                $(".testimonials").flexslider({
                    directionNav: false,
                    controlNav: false,
                    smoothHeight: true,
                });
            });
        </script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper
            document.addEventListener("DOMContentLoaded", function() {
                const swiper = new Swiper('.swiper-container', {
                    loop: true, // Enables infinite loop
                    autoplay: {
                        delay: 5000, // Auto-slide delay in ms
                        disableOnInteraction: false, // Continue autoplay after interaction
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            });
        </script>
    </body>

    </html>
@endsection
