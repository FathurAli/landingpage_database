@extends('layouts.app')
@section('title', 'Single-Project-2')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Single project - AKAD - Creative Digital Agency HTML Template</title>
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
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<style>
		/* Basic styling for the slider */
		 .swiper-container {
        width: 100%;
        height: 75vh; /* Fullscreen height */
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
							<div class="big-title montserrat-text uppercase">Project Title</div>
							<div class="small-title montserrat-text uppercase">home / portfolio / single_project</div>
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
			<div class="section-title">
				<span>{{ $portfolio13->judul }}</span>
				<p>{{ $portfolio14->isi }}.</p>
			</div>
			<div class="row">
				<div class="col-md-8">
					<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" class="wow fadeInUp" style="margin-bottom:30px" />
					<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" class="wow fadeInUp" style="margin-bottom:30px" />
					<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" class="wow fadeInUp" style="margin-bottom:30px" />
				</div>
				<div class="col-md-4">
					<p>
						{{ $portfolio16->isi }}
					</p>
					<ul class="list" style="margin:30px 0">
						<li>{{ $portfolio7->kategori}}</li>
						<li>{{ $portfolio8->kategori}}</li>
						<li>{{ $portfolio9->kategori}}</li>
						<li>{{ $portfolio10->kategori}}</li>
					</ul>
					<h5 class="uppercase montserrat-text">{{ $portfolio11->subjudul }}</h5>
					<ul class="social-icons" style="margin-top:20px;">
						<li><a href="javasript:void(0);" data-social="fb"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="javasript:void(0);" data-social="tw"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="javasript:void(0);" data-social="ln"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="javasript:void(0);" data-social="pt"><i class="icon ion-social-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="pages_pagination">
			<a href="portfolio-1.html" class="all"><i class="icon ion-grid"></i></a>
			<a href="" class="prev"><i class="icon ion-arrow-left-c"></i></a>
			<a href="" class="next"><i class="icon ion-arrow-right-c"></i></a>
		</div>

		<h5 class="montserrat-text uppercase" style="margin-bottom:50px">{{ $portfolio12->subjudul }}</h5>
		<div class="row">
			<div class="related_projects">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="" class="portfolio_item wow fadeInUp">
						<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" alt="Image">
						<div class="portfolio_item_hover">
							<div class="item_info">
								<span>Brave man</span>
								<em>photography</em>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="" class="portfolio_item wow fadeInUp" data-wow-delay=".1s">
						<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" alt="Image">
						<div class="portfolio_item_hover">
							<div class="item_info">
								<span>spider man</span>
								<em>fashion</em>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="" class="portfolio_item wow fadeInUp" data-wow-delay=".2s">
						<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" alt="Image">
						<div class="portfolio_item_hover">
							<div class="item_info">
								<span>bat man</span>
								<em>web design</em>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="" class="portfolio_item wow fadeInUp" data-wow-delay=".3s">
						<img src="{{ asset('file/portfolio/' . $portfolio1->image) }}" alt="Image">
						<div class="portfolio_item_hover">
							<div class="item_info">
								<span>iron man</span>
								<em>graphic</em>
							</div>
						</div>
					</a>
				</div>
			</div><!-- end related projects -->
		</div><!-- end row -->
	</div><!-- end container -->


	<!-- light gray section -->
	<div class="container">
		<div class="light-gray-section wow fadeInUp" style="padding:15px 30px">
			<div class="row">
				<p class="italic" style="float:left;line-height:50px;margin:0">
					{{ $portfolio14->isi }}
				</p>
				<a href="" class="btn green" style="float:right"><span>read more</span></a>
			</div>
		</div>
	</div>



	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						{{ $portfolio14->judul }}
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">{{ $portfolio15->judul }}</span>
						<p>
							{{ $portfolio14->isi}}
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.social-buttons.min.js"></script>
	<script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			new WOW().init();
			// initialize flexslider
			$('.project_images').flexslider({
				directionNav : false,
				controlNav : false
			});

			// initialize social buttons
			$("[data-social]").socialButtons();
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
@endsection