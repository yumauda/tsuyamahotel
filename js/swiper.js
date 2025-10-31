"use strict";

const slider2 = new Swiper ('.slider2', {
  
  slidesPerView: 1.6,
  centeredSlides: true,
  loop:false,
  spaceBetween: 52,
  initialSlide: 0, 
  breakpoints: {
    768: {
      effect: 'slide',
  slidesPerView: 2,
  spaceBetween: 32,
  centeredSlides: false,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },
});