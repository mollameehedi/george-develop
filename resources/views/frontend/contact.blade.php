@extends('layouts.frontend_app')
@section('title')
    Contact | George Music
@endsection
@section('contact')
    active
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
	<section class="sub-banner" style="background-image: url({{ asset('uploads') }}/allbannerbg/{{ $banners->banner_bg }});">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">Contact</h1>
					<nav aria-label="breadcrumb">
						<ul class="breadcrumb justify-content-center mb-0 bg-transparent">
						  <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
						  <li class="breadcrumb-item active" aria-current="contact">Contact</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Form Section -->
	<section class="contact section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center mb-4 mb-lg-5">
					<h3 class="section-header__sub-title text-uppercase">Form</h3>
					<h1 class="section-header__title text-uppercase">Send me a message</h1>
				</div>
				<div class="col-lg-8 mx-auto">
					<form class="contact__form needs-validation" method="post" action="{{ route('contact.messges.store') }}" novalidate>
                        @csrf
                        @if (session('message_succe'))
                            <div class="alert alert-success">
                            <li>{{ session('message_succe') }}</li>
                            </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
						<div class="row">
						  <div class="col-md-6 mb-4">
							<input type="text" class="form-control bg-transparent rounded-0" name="name" placeholder="Name*" required>
							<div class="invalid-feedback px-3 py-2 rounded">
								Please provide your name.
							</div>
						  </div>
						  <div class="col-md-6 mb-4">
							<input type="email" class="form-control bg-transparent rounded-0" name="email" placeholder="Email*" required>
							<div class="invalid-feedback px-3 py-2 rounded">
								Please provide your email.
							</div>
						  </div>
						  <div class="col-md-6 mb-4">
							<input type="tel" class="form-control bg-transparent rounded-0" name="phone" placeholder="Phone*" required>
							<div class="invalid-feedback px-3 py-2 rounded">
								Please provide your phone number.
							</div>
						  </div>
						  <div class="col-md-6 mb-4">
							<input type="text" class="form-control bg-transparent rounded-0" name="subject" placeholder="Subject">
						  </div>
						  <div class="col-12 mb-4">
							<textarea class="form-control bg-transparent rounded-0" name="message" placeholder="Message" rows="7"></textarea>
						  </div>
						  <div class="col-12 text-center">
							<button type="submit" class="primary-btn transition border-0 text-uppercase position-relative overflow-hidden"><span class="position-relative">Submit</span></button>
						  </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Map Section -->
	<section class="map">
		<div class="map__overlay position-relative">
			<iframe class="map__iframe position-absolute w-100 h-100 border-0" src="{{ $map->map }}" allowfullscreen="" frameborder="0"></iframe>
		</div>
	</section>
@endsection
