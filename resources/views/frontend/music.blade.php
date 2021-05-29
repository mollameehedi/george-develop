@extends('layouts.frontend_app')
@section('title')
    Music | George Music
@endsection
@section('music')
    active
@endsection
@section('frontend_content')
<section class="sub-banner" style="background-image: url({{ asset('uploads') }}/allbannerbg/{{ $banners->banner_bg }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="sub-banner__title text-uppercase">Music</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb justify-content-center mb-0 bg-transparent">
                      <li class="breadcrumb-item"><a href="{{ route('/') }}" class="breadcrumb-link">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="contact">Music</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Video Gallery Section -->
<section class="video-gallery section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header text-center mb-4">
                <h3 class="section-header__sub-title text-uppercase">Video Song</h3>
                <h1 class="section-header__title text-uppercase">Music gallery</h1>
            </div>
            @include('frontend.includes.music')
        </div>
    </div>
</section>
<!-- Music Items Section -->
<section class="music section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header text-center mb-4">
                <h3 class="section-header__sub-title text-uppercase">All Song</h3>
                <h1 class="section-header__title text-uppercase">Music Items</h1>
            </div>
            @foreach ($galleries as $gallery)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="music__items position-relative d-flex align-items-center justify-content-center">
                    <div class="video-gallery__image-overlay position-absolute w-100 h-100">
                        <img src="{{ asset('uploads/gallery_thumbnail') }}/{{ $gallery->video_thumbnail }}" alt="blogs-1" class="w-100 h-100">
                    </div>
                    <a href="{{ $gallery->youtube_link }}" data-gall="music-items" class="video-gallery__icon venobox position-absolute transition" data-autoplay="true" data-vbtype="video">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
