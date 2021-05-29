@extends('layouts.frontend_app')
@section('title')
    Events | George Music
@endsection
@section('events')
    active
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
	<section class="sub-banner" style="background-image: url({{ asset('uploads') }}/allbannerbg/{{ $banners->banner_bg }});">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">All Events</h1>
					<nav aria-label="breadcrumb">
						<ul class="breadcrumb justify-content-center mb-0 bg-transparent">
						  <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
						  <li class="breadcrumb-item active" aria-current="contact">Events</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Events Details Section -->
	<section class="events-details section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
                    @foreach ($events as $event)


					<figure class="events-details__container row mb-5">
						<div class="col-md-5 pr-md-0">
							<img src="{{ asset('uploads') }}/event_photo/{{ $event->event_photo }}" alt="video-gallery" class="events-details__image w-100 h-100">
						</div>
						<div class="col-md-7 pl-md-0">
							<div class="events-details__content">
								<figcaption class="mb-3">
									<h1 class="events-details__title text-white">{{ $event->event_name }}</h1>
								</figcaption>
								<ul class="events-details__meta">
									<li class="events-details__meta-text">
										<time datetime="27-06-2020">
											<i class="events-details__meta-icon far fa-calendar-alt mr-2"></i>Starts from: {{ $event->start_from }}
										</time>
									</li>
									<li class="events-details__meta-text">
										<i class="events-details__meta-icon far fa-clock mr-2"></i>Door Opens @ {{ $event->door_open }}
									</li>
									<li class="events-details__meta-text">
										<i class="events-details__meta-icon far fa-play-circle mr-2"></i>Show Starts {{ $event->show_start }}
									</li>
									<li class="events-details__meta-text">
										<i class="events-details__meta-icon fas fa-map-marker-alt mr-2"></i>{{ $event->event_location }}
									</li>
								</ul>
								<hr class="events-details__line">
								<p class="events-details__text">{{ $event->event_desctiption }}</p>
								<ul class="events-details__action d-flex align-items-center flex-wrap mb-0">
									<li class="mr-5 mt-4">
										<span class="ticket-price text-white">tickets from:<strong class="ticket-price__num ml-2">${{ $event->ticket_price }}</strong></span>
									</li>
								</ul>
							</div>
						</div>
					</figure>
                    @endforeach
				</div>
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
				</div>
			</div>
		</div>
	</section>
@endsection
