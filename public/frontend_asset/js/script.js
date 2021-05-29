$(document).ready(function(){
    "use strict";

    //  Fixed Header
    $(window).on('scroll',function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 110) {
            $(".header").addClass("header--fixed");
        } else {
            $(".header").removeClass("header--fixed");
        }
    });
    
    //  Banner Slider
    $(".banner__slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 6000,
      fade: true,
      cssEase: 'linear',
      speed: 1000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      pauseOnFocus: false,
      infinite: true,
    });

    //  Video Gallery Main Slider
    $(".video-gallery__main-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear',
        speed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        asNavFor: '.video-gallery__nav-slider',
    });

    //  Video Gallery Nav Slider
    $(".video-gallery__nav-slider").slick({
        asNavFor: '.video-gallery__main-slider',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1000,
        arrows: true,
        prevArrow:'<button class="slick__arrows border-0 primary-btn p-0 overflow-hidden slick__arrows--left"><i class="fas fa-chevron-left position-relative"></i></button>',
        nextArrow:'<button class="slick__arrows border-0 primary-btn p-0 overflow-hidden slick__arrows--right"><i class="fas fa-chevron-right position-relative"></i></button>',
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        centerMode: true,
        focusOnSelect: true,
        infinite: true,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                centerPadding: '0px',
              }
            },
            {
              breakpoint: 768,
              settings: {
                centerPadding: '0px',
                arrows: false,
                dots: true,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
                centerPadding: '0px',
                arrows: false,
                dots: true,
              }
            }
          ]
    });

    //  Blogs Slider
    $(".blogs__slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1000,
        arrows: true,
        prevArrow:'<button class="slick__arrows border-0 primary-btn p-0 overflow-hidden slick__arrows--left"><i class="fas fa-chevron-left position-relative"></i></button>',
        nextArrow:'<button class="slick__arrows border-0 primary-btn p-0 overflow-hidden slick__arrows--right"><i class="fas fa-chevron-right position-relative"></i></button>',
        dots: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                arrows: false,
                dots: true,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true,
              }
            }
          ]
    });

    //  Testimonial Slider
    $(".testimonial__slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        speed: 1000,
        arrows: true,
        prevArrow:'<button class="slick__arrows border-0 primary-btn p-0 overflow-hidden slick__arrows--left"><i class="fas fa-chevron-left position-relative"></i></button>',
        nextArrow:'<button class="slick__arrows border-0 primary-btn p-0 overflow-hidden slick__arrows--right"><i class="fas fa-chevron-right position-relative"></i></button>',
        dots: false,
        centerMode: true,
        centerPadding: '0px',
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true,
              }
            }
          ]
    });

    // veno box
    $('.venobox').venobox({
        bgcolor    : '#1a1b1c',
        spinner    : 'cube-grid',
        border     : '5px',
    });

    // scroll top
    $(".scroll-top").on('click',function () {
        $("html,body").animate({
            scrollTop: 0,
        }, 500);
    });
    $(window).on('scroll',function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 200) {
            $(".scroll-top").fadeIn();
        } else {
            $(".scroll-top").fadeOut();
        }
    });

    // Closes responsive menu when a scroll link is clicked
    $('.nav-link').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });
    $('.navbar-toggler').on('click', function () {
        $('body').toggleClass('overflow-hidden');
    });

});

// Google Translate Init
function googleTranslateElementInit() {
  new google.translate.TranslateElement({ 
      pageLanguage: 'en',
      includedLanguages : 'en,de,fr,ka,ru',
      multilanguagePage: true,
      autoDisplay: false,
  }, 'translate_element');
  setTimeout(() => {
    changeLangToEN();
  }, 1);
}
// Default Google Translate Languale Set: Engliah
function changeLangToEN(){
  let getTranslateElementSelect = document.querySelector("#translate_element .goog-te-combo");
  getTranslateElementSelect.selectedIndex = 0;
  getTranslateElementSelect.dispatchEvent(new Event("change"));
}