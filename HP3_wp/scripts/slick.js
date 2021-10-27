
$(function() {
  $('.slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    arrows: true,
    
    prevArrow: '<div class="slider-arrow slider_prev fa fa-angle-left"></div>',
    nextArrow: '<div class="slider-arrow slider_next fa fa-angle-right"></div>',
    autoplaySpeed: 5000,
    dots: true,

    responsive: [
      {
        breakpoint: 1025, // 768~1023px以下のサイズに適用
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 769, // 480〜767px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

