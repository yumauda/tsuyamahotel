"use strict";

const slider2 = new Swiper(".slider2", {
  slidesPerView: 1.6,
  centeredSlides: true,
  loop: false,
  spaceBetween: 52,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
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
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
const slider3 = new Swiper(".slider3", {
  slidesPerView: 1.2,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

 
});

// ピックアップタブスライダー
const sliderPickup = new Swiper(".slider-pickup", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
    },
  },
  navigation: {
    nextEl: ".slider-pickup ~ .swiper-button-next, .slider-pickup .swiper-button-next",
    prevEl: ".slider-pickup ~ .swiper-button-prev, .slider-pickup .swiper-button-prev",
  },
});

const sliderStay = new Swiper(".slider-stay", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
    },
  },
  navigation: {
    nextEl: ".slider-stay ~ .swiper-button-next, .slider-stay .swiper-button-next",
    prevEl: ".slider-stay ~ .swiper-button-prev, .slider-stay .swiper-button-prev",
  },
});

const sliderFood = new Swiper(".slider-food", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
    },
  },
  navigation: {
    nextEl: ".slider-food ~ .swiper-button-next, .slider-food .swiper-button-next",
    prevEl: ".slider-food ~ .swiper-button-prev, .slider-food .swiper-button-prev",
  },
});

const sliderRestaurant = new Swiper(".slider-restaurant", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
    },
  },
  navigation: {
    nextEl: ".slider-restaurant ~ .swiper-button-next, .slider-restaurant .swiper-button-next",
    prevEl: ".slider-restaurant ~ .swiper-button-prev, .slider-restaurant .swiper-button-prev",
  },
});

const sliderNews = new Swiper(".slider-news", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 3,
      centeredSlides: false,
    },
  },
  navigation: {
    nextEl: ".slider-news ~ .swiper-button-next, .slider-news .swiper-button-next",
    prevEl: ".slider-news ~ .swiper-button-prev, .slider-news .swiper-button-prev",
  },
});

const slider4 = new Swiper(".slider4", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  spaceBetween: 10,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 2.2,
      spaceBetween: 10,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  
});
const slider5 = new Swiper(".slider5", {
  slidesPerView: 1.1,
  centeredSlides: true,
  loop: true,
  initialSlide: 0,
  breakpoints: {
    768: {
      effect: "slide",
      slidesPerView: 1.8,
      spaceBetween: 10,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
