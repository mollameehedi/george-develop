
<!DOCTYPE html>
<html class="translated-ltr" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title','George Music')</title>
	<!-- Favicon Link -->
	<link rel="icon" type="image/x-icon" href="{{ asset('frontend_asset') }}/images/favicon.ico">
	<!-- All CSS -->
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/slick-slider/css/slick.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/plugins/venobox/css/venobox.min.css">
	<link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.css">
</head>
<body>
	<!-- Header Section -->
	<header class="header w-100">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="{{ route('/') }}">
					<img src="{{ asset('uploads') }}/logo/{{ $logo->logo }}" alt="logo" class=" unic-logo img-fluid">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="navbar-toggler--open fas fa-bars"></i>
					<i class="navbar-toggler--close fas fa-times"></i>
				</button>

				<div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
				  <ul class="navbar-nav align-items-center ml-auto text-capitalize">
					<li class="nav-item">
					  <a class="nav-link position-relative transition @yield('/')" href="{{ route('/') }}">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link position-relative transition @yield('music')" href="{{ route('music') }}">Music</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link position-relative transition @yield('about')" href="{{ route('about') }}">About</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link position-relative transition @yield('events')" href="{{ route('events') }}">Events</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link position-relative transition @yield('blogs')" href="{{ route('blogs') }}">Blogs</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link position-relative transition @yield('contact')" href="{{ route('contact') }}">Contact</a>
					</li>
					<li class="nav-item d-inline-flex align-items-center justify-content-center m-0">
						<div id="translate_element"></div>
					</li>
				  </ul>
				</div>
			</div>
		</nav>
	</header>


    @yield('frontend_content')


    <!-- Footer Section -->
	<footer class="footer section-gap pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center mb-5">
					<h3 class="section-header__sub-title text-uppercase">Contact</h3>
					<h1 class="section-header__title text-uppercase">GET IN TOUCH</h1>
					<p class="footer__text mx-auto mt-4">{{ $getinfo->details }}</p>
				</div>
				<div class="col-md-4 col-sm-6 mb-4 mb-md-0">
					<div class="footer__block d-flex">
						<div class="footer__block__icon mr-4">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="footer__block__content">
							<h4 class="footer__block__title text-white mb-4">Address</h4>
							<address class="footer__block__text mb-0">
								{{ $address->details }}
							</address>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 mb-4 mb-md-0">
					<div class="footer__block d-flex">
						<div class="footer__block__icon mr-4">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="footer__block__content">
							<h4 class="footer__block__title text-white mb-4">Mobile</h4>
							<a href="tel:+8801992409030" class="footer__block__link d-block transition mb-2">{{ $first_number->details }}</a>
							<a href="tel:+8801992409030" class="footer__block__link d-block transition">{{ $second_number->details }}</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer__block d-flex">
						<div class="footer__block__icon mr-4">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="footer__block__content">
							<h4 class="footer__block__title text-white mb-4">Email</h4>
							<a href="mailto:coderexpertzahid@gmail.com" class="footer__block__link d-block transition mb-2">
								{{ $first_email->details }}
							</a>
							<a href="mailto:tohorabhasan@gmail.com" class="footer__block__link d-block transition mb-2">
								{{ $second_email->details }}
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row footer__social mt-5">
				<a href="{{ $facebook->details }}" target="_blank" class="footer__social-link footer__social-link--facebook col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-white">
					<i class="footer__social-icon fab fa-facebook-f"></i>
					<span class="footer__social-text pl-3 text-capitalize">facebook</span>
				</a>
				<a href="{{ $youtube->details }}" target="_blank" class="footer__social-link footer__social-link--youtube col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-white">
					<i class="footer__social-icon fab fa-youtube"></i>
					<span class="footer__social-text pl-3 text-capitalize">youtube</span>
				</a>
				<a href="{{ $soudcloud->details }}" target="_blank" class="footer__social-link footer__social-link--soundcloud col-md-4 col-sm-6 d-flex align-items-center justify-content-center text-white">
					<i class="footer__social-icon fab fa-soundcloud"></i>
					<span class="footer__social-text pl-3 text-capitalize">soundcloud</span>
				</a>
				<div class="col-12 py-4">
					<p class="mb-0 text-center footer__copyright-text w-100">© 2021, All Right Reserved - Designed & Developed by <a href="https://futureinltd.com/" target="_blank" class="footer__copyright-link transition">Future Innovation LTD.</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Back To Top Button -->
	<div class="scroll-top position-fixed">
		<div class="scroll-top__btn transition d-inline-flex align-items-center justify-content-center" title="Back To Top">
			<i class="fas fa-chevron-up"></i>
		</div>
	</div>

	<!-- All Scripts -->
	<script src="{{ asset('frontend_asset') }}/js/jquery-1.12.4.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/plugins/fontawesome/js/all.min.js"></script>
	<script src="{{ asset('frontend_asset') }}/plugins/slick-slider/js/slick.js"></script>
	<script src="{{ asset('frontend_asset') }}/plugins/venobox/js/venobox.min.js"></script>
	<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="{{ asset('frontend_asset') }}/js/script.js"></script>
</body>
</html>
