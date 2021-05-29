<section class="testimonial overflow-hidden section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header text-center mb-5">
                <h3 class="section-header__sub-title text-uppercase">testimonial</h3>
                <h1 class="section-header__title text-uppercase">What People Say</h1>
            </div>
            <div class="col-12">
                <div class="testimonial__slider">
                    @foreach ($testimonials as $testimonial)


                    <div class="testimonial__slide position-relative overflow-hidden">
                        <div class="testimonial__slide__top d-flex align-items-center justify-content-between flex-wrap mb-4">
                            <div class="testimonial__slide__user mb-2 d-flex align-items-center">
                                <div class="testimonial__slide__user-image rounded-circle overflow-hidden mr-4">
                                    <img src="{{ asset('uploads/client_photo') }}/{{ $testimonial->client_photo }}" alt="testimonial" class="w-100 h-100">
                                </div>
                                <div class="testimonial__slide__user-details">
                                    <h4 class="testimonial__slide__user-name text-white">{{ $testimonial->client_name }}</h4>
                                    <h5 class="testimonial__slide__user-profession">{{ $testimonial->service_name }}</h5>
                                </div>
                            </div>
                            <ul class="testimonial__slide__review mb-0 list-inline">
                                @for ($i = 0; $i < $testimonial->ster; $i++)


                                <li class="testimonial__slide__review-icon list-inline-item"><i class="fas fa-star"></i></li>
                                @endfor
                            </ul>
                        </div>
                        <p class="testimonial__slide__text">{{ $testimonial->what_client_say }}</p>
                        <span class="testimonial__slide-meta font-italic d-block">{{ $testimonial->created_at->format('M d,  Y') }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
