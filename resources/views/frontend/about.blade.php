@extends('layouts.frontend_app')
@section('title')
    Abouts | George Music
@endsection
@section('about')
    active
@endsection
@section('frontend_content')
        <!-- Sub Banner Section -->
	<section class="sub-banner" style="background-image: url({{ asset('uploads') }}/allbannerbg/{{ $banners->banner_bg }});">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">About Me</h1>
					<nav aria-label="breadcrumb">
						<ul class="breadcrumb justify-content-center mb-0 bg-transparent">
						  <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
						  <li class="breadcrumb-item active" aria-current="contact">About</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- About Details Section -->
	<section class="about-details section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 mx-auto">
					<figure class="about-details__container mb-0">
						<div class="image-cover-frame position-relative">
							<img src="{{ asset('uploads') }}/about_photo/{{ $about_detail->about_photo }}" alt="about-details" class="about-details__image w-100">
						</div>
						<div class="about-details__content">
							<figcaption class="text-center mt-3 mt-sm-0">
								<h1 class="about__title"><span class="first-word d-inline-block">I'm</span><span class="about__title-main pl-3">{{ $about_detail->about_title }}</span></h1>
								<h3 class="about__sub-title my-4 text-white">{{ $about_detail->about_subtitle }}</h3>
							</figcaption>
							<p class="about-details__text">{{ $about_detail->about_desctiption }}</p>
							{{-- <blockquote class="blockquote my-4">
								<p class="blockquote__text font-italic">{{ $about_detail->quotes }}</p>
								<footer class="blockquote-footer"><cite title="George">{{ $about_detail->quotes_by }}</cite></footer>
							</blockquote> --}}
							<p class="about-details__text">{{ $about_detail->quotes_desctiption }}</p>
                            @foreach ($ab_extras as $extra)


							<p class="about-details__text">{{ $extra->desctiption }}</p>
                            @endforeach
							<blockquote class="blockquote blockquote--right text-right pl-0 mt-4">
								<p class="blockquote__text font-italic">Singing that comes from soul</p>
								<footer class="blockquote-footer"><cite title="George">George</cite></footer>
							</blockquote>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Section -->
    @include('frontend.includes.testimonial')
@endsection
