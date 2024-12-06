@extends('layouts.app')
@section('title', 'SERVICES')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Services - AKAD - Creative Digital Agency HTML Template</title>
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
							<div class="big-title montserrat-text uppercase">Our Services</div>
							<div class="small-title montserrat-text uppercase">Home / Services</div>
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


	<!-- WHAT WE DO -->
	<section>
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>{{ $services1->judul}}</span>
					<p>{{ $services1->isi}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 wow fadeInUp">
					<p style="margin-bottom:30px">
						{{ $services2->isi}}
					</p>
					<div class="col-md-6">
						<div class="row">
							<ul class="list">
								<li>{{ $services1->kategori}}</li>
								<li>{{ $services2->kategori}}</li>
								<li>{{ $services3->kategori}}</li>
								<li>{{ $services4->kategori}}</li>
								<li>{{ $services5->kategori}}</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<ul class="list">
								<li>{{ $services6->kategori}}</li>
								<li>{{ $services7->kategori}}</li>
								<li>{{ $services8->kategori}}</li>
								<li>{{ $services9->kategori}}</li>
								<li>{{ $services1->kategori}}</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
					<img src="{{ asset('file/services/' . $services1->image) }}" alt="Services 1 Image"
					class="img-fluid">
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
					<div class="benefits_1_single">
						<i class="icon ion-ios-pulse"></i>
						<div class="title montserrat-text uppercase">{{ $services3->judul}}</div>
						<p>
							{{ $services3->isi}}
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
					<div class="benefits_1_single">
						<i class="icon ion-ios-infinite-outline"></i>
						<div class="title montserrat-text uppercase">{{ $services4->judul}}</div>
						<p>
							{{ $services4->isi}}
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
					<div class="benefits_1_single">
						<i class="icon ion-ios-lightbulb-outline"></i>
						<div class="title montserrat-text uppercase">{{ $services5->judul}}</div>
						<p>
							{{ $services5->isi}}
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".3s">
					<div class="benefits_1_single">
						<i class="icon ion-ios-settings"></i>
						<div class="title montserrat-text uppercase">{{ $services6->judul}}</div>
						<p>
							{{ $services6->isi}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="pricing_plans">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>{{ $services2->judul}}</span>
					<p>{{ $services2->isi}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
					<div class="pricing_plan">
						<div class="plan_title montserrat-text uppercase">{{ $services7->judul}}</div>
						<div class="plan_price montserrat-text uppercase">{{ $services9->harga}}</div>
						<ul class="list">
								<li>{{ $services1->kategori}}</li>
								<li>{{ $services2->kategori}}</li>
								<li>{{ $services3->kategori}}</li>
								<li>{{ $services4->kategori}}</li>
								<li>{{ $services5->kategori}}</li>
						</ul>
						<a href="" class="btn green"><span>get started</span></a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
					<div class="pricing_plan">
						<div class="plan_title montserrat-text uppercase">{{ $services8->judul}}</div>
						<div class="plan_price montserrat-text uppercase">{{ $services10->harga}}</div>
						<ul class="list">
								<li>{{ $services1->kategori}}</li>
								<li>{{ $services2->kategori}}</li>
								<li>{{ $services3->kategori}}</li>
								<li>{{ $services4->kategori}}</li>
								<li>{{ $services5->kategori}}</li>
						</ul>
						<a href="" class="btn green"><span>get started</span></a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
					<div class="pricing_plan">
						<div class="plan_title montserrat-text uppercase">{{ $services9->judul}}</div>
						<div class="plan_price montserrat-text uppercase">{{ $services11->harga}}</div>
						<ul class="list">
								<li>{{ $services1->kategori}}</li>
								<li>{{ $services2->kategori}}</li>
								<li>{{ $services3->kategori}}</li>
								<li>{{ $services4->kategori}}</li>
								<li>{{ $services5->kategori}}</li>
						</ul>
						<a href="" class="btn green"><span>get started</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						{{ $services10->judul}}
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">{{ $services11->judul}}</span>
						<p>
							{{ $services11->isi}}
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
	<script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
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
@endsection