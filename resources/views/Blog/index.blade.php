@extends('layouts.app')
@section('title', 'Blog-1')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Blog - AKAD - Creative Digital Agency HTML Template</title>
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
                            <div class="hero-slide" style="background-image: url('assets/img/site-hero2.jpg');">
                                <div class="page-title">
                                    <div class="big-title montserrat-text uppercase">Blog Posts</div>
                                    <div class="small-title montserrat-text uppercase">Home / Blog</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="hero-slide" style="background-image: url('assets/img/site-hero2.jpg');">
                                <div class="page-title">
                                    <div class="big-title montserrat-text uppercase">Our Mission</div>
                                    <div class="small-title montserrat-text uppercase">Home / Mission</div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="hero-slide" style="background-image: url('assets/img/site-hero2.jpg');">
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

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <!-- blog post -->
                            <div class="blog_post">
                                <div class="post_media">
                                    <img src="{{ asset('file/blog/' . $blog1->image) }}" alt="post image">
                                </div>
                                <div class="post_info">
                                    <div class="post_date montserrat-text uppercase">{{ $blog1->tanggal}}</div>
                                    <i class="icon ion-chatbox-working"></i>
                                    <span>8</span>
                                    <i class="icon ion-ios-heart"></i>
                                    <span>15</span>
                                </div>
                                <p>
                                    {{ $blog1->isi}}
                                </p>
                                <a href="single-post.html" class="link montserrat-text uppercase">continue reading <i
                                        class="icon ion-arrow-right-c"></i></a>
                            </div>
                            <!-- blog post -->
                            <div class="blog_post wow fadeInUp">
                                <div class="post_media">
                                    <iframe height="500"
                                        src="https://www.youtube.com/embed/1mO_QMYV-QE?list=PLXWu0OP8--WQZcdnx1OuIwQ2MEMT2ee8O"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="post_info">
                                    <div class="post_date montserrat-text uppercase">{{ $blog1->tanggal}}</div>
                                    <i class="icon ion-chatbox-working"></i>
                                    <span>8</span>
                                    <i class="icon ion-ios-heart"></i>
                                    <span>15</span>
                                </div>
                                <p>
                                    {{ $blog2->isi}}
                                </p>
                                <a href="single-post.html" class="link montserrat-text uppercase">continue reading <i
                                        class="icon ion-arrow-right-c"></i></a>
                            </div>
                            <!-- blog post -->
                            <div class="blog_post wow fadeInUp">
                                <div class="post_media">
                                    <iframe
                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/51057943&amp;amp;color=ff5500&amp;amp;auto_play=false&amp;amp;hide_related=false&amp;amp;show_comments=true&amp;amp;show_user=true&amp;amp;show_reposts=false"
                                        frameborder="0"></iframe>
                                </div>
                                <div class="post_info">
                                    <div class="post_date montserrat-text uppercase">{{ $blog1->tanggal}}</div>
                                    <i class="icon ion-chatbox-working"></i>
                                    <span>8</span>
                                    <i class="icon ion-ios-heart"></i>
                                    <span>15</span>
                                </div>
                                <p>
                                    {{ $blog1->isi}}
                                </p>
                                <a href="single-post.html" class="link montserrat-text uppercase">continue reading <i
                                        class="icon ion-arrow-right-c"></i></a>
                            </div>

                            <!-- pagination -->
                            <div class="blog_pagination wow fadeInUp">
                                <a href="" class="page">
                                    <i class="icon ion-arrow-left-c prev"></i>
                                    <span>previous</span>
                                </a>
                                <span class="divisor">/</span>
                                <a href="" class="page">
                                    <span>next</span>
                                    <i class="icon ion-arrow-right-c next"></i>
                                </a>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="sidebar">
                                <div class="widget">
                                    <div class="input_2">
                                        <input type="text" placeholder="search...">
                                        <button type="submit"><i class="icon ion-search"></i></button>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="widget_title">{{ $blog1->subjudul}}</div>
                                    <div class="tab">
                                        <nav>
                                            <a href="">{{ $blog5->judul}}</a>
                                            <a href="">{{ $blog16->subjudul}}</a>
                                            <div class="bottom-line"></div>
                                        </nav>
                                        <div class="tab_single shown">
                                            <div class="related_post">
                                                <div class="thumb"><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="image"></div>
                                                <a href="" class="post_title montserrat-text uppercase">{{ $blog16->judul}}</a>
                                                <div class="post_date">{{ $blog16->tanggal}}</div>
                                            </div>
                                            <div class="related_post">
                                                <div class="thumb"><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="image"></div>
                                                <a href="" class="post_title montserrat-text uppercase">{{ $blog16->judul}}</a>
                                                <div class="post_date">{{ $blog16->tanggal}}</div>
                                            </div>
                                            <div class="related_post">
                                                <div class="thumb"><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="image"></div>
                                                <a href="" class="post_title montserrat-text uppercase">{{ $blog16->judul}}</a>
                                                <div class="post_date">{{ $blog16->tanggal}}</div>
                                            </div>
                                        </div>
                                        <div class="tab_single">
                                            <div class="related_post">
                                                <div class="thumb"><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="image"></div>
                                                <a href="" class="post_title montserrat-text uppercase">{{ $blog16->judul}}</a>
                                                <div class="post_date">{{ $blog16->tanggal}}</div>
                                            </div>
                                            <div class="related_post">
                                                <div class="thumb"><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="image"></div>
                                                <a href="" class="post_title montserrat-text uppercase">{{ $blog16->judul}}</a>
                                                <div class="post_date">{{ $blog16->tanggal}}</div>
                                            </div>
                                            <div class="related_post">
                                                <div class="thumb"><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="image"></div>
                                                <a href="" class="post_title montserrat-text uppercase">{{ $blog16->judul}}</a>
                                                <div class="post_date">{{ $blog16->tanggal}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget wow fadeInUp">
                                    <div class="widget_title">{{ $blog2->subjudul}}</div>
                                    <ul class="list_2">
                                        <li><a href="">{{ $blog1->kategory}} <span>15</span></a></li>
                                        <li><a href="">{{ $blog2->kategory}} <span>22</span></a></li>
                                        <li><a href="">{{ $blog3->kategory}} <span>27</span></a></li>
                                        <li><a href="">{{ $blog4->kategory}} <span>30</span></a></li>
                                    </ul>
                                </div>

                                <div class="widget wow fadeInUp">
                                    <div class="widget_title">{{ $blog3->subjudul}}</div>
                                    <ul class="tags">
                                        <li><a href="">{{ $blog1->archives}}</a></li>
                                        <li><a href="">{{ $blog2->archives}}</a></li>
                                        <li><a href="">{{ $blog3->archives}}</a></li>
                                        <li><a href="">{{ $blog4->archives}}</a></li>
                                        <li><a href="">{{ $blog5->archives}}</a></li>
                                        <li><a href="">{{ $blog16->archives}}</a></li>
                                    </ul>
                                </div>

                                <div class="widget wow fadeInUp">
                                    <div class="widget_title">{{ $blog4->subjudul}}</div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                    <div class="thumb" style="margin-bottom:15px">
                                        <a href=""><img src="{{ asset('file/blog/' . $blog2->image) }}" alt="thumb"></a>
                                    </div>
                                </div>

                                <div class="widget wow fadeInUp">
                                    <div class="widget_title">{{ $blog5->subjudul}}</div>
                                    <ul class="list_2">
                                        <li><a href="">{{ $blog2->tanggal}} <span>15</span></a></li>
                                        <li><a href="">{{ $blog3->tanggal}} <span>22</span></a></li>
                                        <li><a href="">{{ $blog4->tanggal}} <span>27</span></a></li>
                                        <li><a href="">{{ $blog5->tanggal}} <span>30</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </section>


            <!-- newsletter -->
            <section class="green-section wow fadeInUp" style="padding:50px 0">
                <div class="container">
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
                                {{ $blog1->judul}}
                            </span>
                            <a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="white-section" style="padding:20px">
                                <span class="montserrat-text uppercase" style="font-size:24px">{{ $blog2->judul}}</span>
                                <p>
                                    {{ $blog1->isi}}
                                </p>
                                <form action="#" method="post">
                                    <div class="input_1">
                                        <input type="text" name="email">
                                        <span>your email</span>
                                    </div>
                                    <button type="submit" class="btn green"
                                        style="margin-top:20px"><span>send</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SCRIPTS -->
            <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript" src="assets/js/smoothScroll.js"></script>
            <script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
            <script type="text/javascript" src="assets/js/wow.min.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
            <script type="text/javascript">
                $(window).load(function() {
                    new WOW().init();
                });
            </script>
			<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
			<script>
			  // Initialize Swiper
			  document.addEventListener("DOMContentLoaded", function () {
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
