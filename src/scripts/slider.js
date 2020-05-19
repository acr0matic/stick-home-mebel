/* global Swiper */

let gallerySlider = new Swiper ('.gallery-slider', {

  spaceBetween: 30,

  pagination: {
    el: '.gallery-slider__pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.gallery-slider__next',
    prevEl: '.gallery-slider__prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },
})

gallerySlider.init();