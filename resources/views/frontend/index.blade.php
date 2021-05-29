
    @extends('layouts.frontend_app')
@section('title')
    Home | George Music
@endsection
@section('/')
    active
@endsection
    @section('frontend_content')

	<!-- Banner Section -->
	<section class="banner">
		<div class="banner__slider">
            @foreach ($banners as $banner)


			<div class="banner__slide" style="background-image: url({{ asset('uploads') }}/banner_bg/{{ $banner->banner_bg }});">
				<div class="container">
					<div class="row">
						<div class="col-12 col-12 banner__block d-flex flex-column align-items-start justify-content-center h-100">
							<h1 class="banner__title appear_in appear_in--top mb-5">{{ $banner->heading }}</h1>
							<a href="{{ route('events') }}" class="primary-btn appear_in appear_in--bottom position-relative d-inline-block overflow-hidden"><span class="position-relative">Check all events</span></a>
						</div>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</section>
	<!-- Video Gallery Section -->
	<section class="video-gallery section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center mb-4">
					<h3 class="section-header__sub-title text-uppercase">Music</h3>
					<h1 class="section-header__title text-uppercase">Music Gallery</h1>
				</div>
                @include('frontend.includes.music')
			</div>
		</div>
	</section>
	<!-- About Section -->
	<section class="about section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center mb-4 mb-md-5">
					<h3 class="section-header__sub-title text-uppercase">About</h3>
					<h1 class="section-header__title text-uppercase">Who Am I</h1>
				</div>
				<div class="col-md-6 text-center text-md-right pt-md-4 mb-4 mb-md-0">
					<h2 class="about__title"><span class="first-word d-inline-block">I'm</span><span class="about__title-main pl-3">{{ $about_detail->about_title }}</span></h2>
					<h3 class="about__sub-title my-4 text-white">{{ $about_detail->about_subtitle }}</h3>
					<p class="about__text">{{ Str::limit($about_detail->about_desctiption, 600) }}</p>
					<a href="{{ route('about') }}" class="primary-btn transition position-relative d-inline-block overflow-hidden"><span class="position-relative">Read More</span></a>
				</div>
				<div class="col-md-6">
					<div class="about__image image-cover-frame position-relative h-100">
						<img src="{{ asset('uploads/abouteventphoto') }}/{{ $about_photo->about_photo }}" alt="about" class="w-100 h-100">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Upcoming Events Section -->
	<section class="events section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-none d-lg-block">
					<div class="events__image image-cover-frame position-relative">
						<img src="{{ asset('uploads/abouteventphoto') }}/{{ $event_photo->event_photo }}" alt="events" class="w-100 h-100">
					</div>
				</div>
				<div class="col-lg-6 col-md-11 mx-auto">
					<div class="section-header text-center text-lg-left mb-4 my-lg-5">
						<h3 class="section-header__sub-title text-uppercase">EVENTS</h3>
						<h1 class="section-header__title text-uppercase">UPCOMING EVENTS</h1>
					</div>
					@include('frontend.includes.upcoming')
					<div class="col-12 text-center mt-5">
						<a href="{{ route('events') }}" class="primary-btn transition position-relative d-inline-block overflow-hidden"><span class="position-relative">All Events</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Section -->
	@include('frontend.includes.testimonial')
	<!-- Blogs Section -->
	<section class="blogs overflow-hidden section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center mb-5">
					<h3 class="section-header__sub-title text-uppercase">Blogs</h3>
					<h1 class="section-header__title text-uppercase">News & updates</h1>
				</div>
				<div class="col-12">
					<div class="blogs__slider">
                        @foreach ($blogs as $blog)
						<div class="blogs__slide">
							<a href="{{ route('blogs') }}" class="blogs__slide__image d-inline-block position-relative w-100 h-100">
								<div class="blogs__slide__image-overlay position-absolute w-100 h-100 overflow-hidden">
									<img src="{{ asset('uploads') }}/blog_photo/{{ $blog->blog_photo }}" alt="blogs" class="position-absolute w-100 h-100 transition">
								</div>
								<span class="blogs__slide__meta d-inline-block position-absolute bg-white p-2 shadow-sm">{{ $blog->created_at->format('d.m.y') }}</span>
							</a>
							<div class="blogs__slide__content text-center px-1 px-xl-2 py-3">
								<h3 class="blogs__slide__title">
									<a href="{{ route('blogs') }}" class="blogs__slide__title-link transition">{{ $blog->blog_name }}</a>
								</h3>
								<p class="blogs__slide__text">{{ Str::limit($blog->blog_desctiption,  150) }} <a href="{{ route('blogs') }}" class="blogs__slide__link transition">Read More</a></p>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection
