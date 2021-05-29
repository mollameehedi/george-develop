<div class="col-md-8 mx-auto">
    <div class="video-gallery__main-slider">

        @foreach ($galleries as $gallery)


        <div class="video-gallery__main-slide d-flex align-items-center justify-content-center position-relative overflow-hidden">
            <div class="video-gallery__image-overlay position-relative w-100 h-100">
                <img src="{{ asset('uploads/gallery_thumbnail') }}/{{ $gallery->video_thumbnail }}" alt="video-gallery" class="w-100 h-100">
            </div>
            <a href="{{ $gallery->youtube_link }}" data-gall="video-gallery" class="video-gallery__icon venobox position-absolute transition" data-autoplay="true" data-vbtype="video">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        @endforeach
    </div>
</div>
<div class="col-md-9 mx-auto mt-5 mb-5 mb-md-0">
    <div class="video-gallery__nav-slider">
        @foreach ($galleries as $gallery)
        <div class="video-gallery__nav-slide d-flex align-items-center justify-content-center position-relative overflow-hidden">
            <div class="video-gallery__image-overlay position-relative w-100 h-100">
                <img src="{{ asset('uploads/gallery_thumbnail') }}/{{ $gallery->video_thumbnail }}" alt="video-gallery" class="w-100 h-100">
            </div>
            <a href="{{ $gallery->youtube_link }}" class="video-gallery__icon position-absolute transition">
                <i class="fas fa-play-circle"></i>
            </a>
        </div>
        @endforeach
    </div>
</div>
