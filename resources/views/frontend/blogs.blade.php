@extends('layouts.frontend_app')
@section('title')
    Blogs | George Music
@endsection
@section('blogs')
    active
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
	<section class="sub-banner" style="background-image: url({{ asset('uploads') }}/allbannerbg/{{ $banners->banner_bg }});">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">Blogs</h1>
					<nav aria-label="breadcrumb">
						<ul class="breadcrumb justify-content-center mb-0 bg-transparent">
						  <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
						  <li class="breadcrumb-item active" aria-current="contact">Blogs</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Blogs Details Section -->
	<section class="blogs-details section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
                    @foreach ($blogs as $blog)


					<figure class="blogs-details__container mb-5">
						<img src="{{ asset('uploads') }}/blog_photo/{{ $blog->blog_photo }}" alt="blogs-details-1" class="blogs-details__image w-100 h-100">
						<div class="blogs-details__content">
							<figcaption>
								<h1 class="blogs-details__title text-white">{{ $blog->blog_name }}</h1>
							</figcaption>
							<ul class="blogs-details__meta d-flex flex-wrap my-4">
								<li class="blogs-details__meta-list blogs-details__meta-author mb-3 mb-md-0">
									<span class="blogs-details__meta-list__title">Posted By:</span>
									<a href="#" target="_blank" class="blogs-details__meta-list__link">{{ user_name($blog->user_id) }}</a>
								</li>
								<li class="blogs-details__meta-list mb-3 mb-md-0">
									<span class="blogs-details__meta-list__title pr-2">Date:</span>{{ $blog->created_at->format('d-m-y') }}
								</li>
								<li class="blogs-details__meta-list mr-0">
									<span class="blogs-details__meta-list__title pr-2">Category:</span>
									<a class="blogs-details__meta-list__link transition">{{ $blog->blog_category->blog_category }}</a>
								</li>
							</ul>
							<p class="blogs-details__text">{{ $blog->blog_desctiption }}</p>
							<blockquote class="blockquote my-4">
								<p class="blockquote__text font-italic">{{ $blog->quotes }}</p>
								<footer class="blockquote-footer"><cite title="Hasin Haider">{{ $blog->quotes_by }}</cite></footer>
							</blockquote>
							<p class="blogs-details__text">{{ $blog->quotes_desctiption }}</p>
						</div>
					</figure>
                    @endforeach
			</div>
		</div>
	</section>
	<!-- Upcoming Events Section -->
	<section class="events section-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-11 mx-auto">
					<div class="section-header text-center mb-4">
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
@endsection
