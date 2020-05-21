/* global Swiper */

let gallerySliderContainer = document.querySelector(".gallery-slider");

if (gallerySliderContainer) {
  let gallerySlider = new Swiper(gallerySliderContainer, {
    spaceBetween: 30,

    pagination: {
      el: ".gallery-slider__pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".gallery-slider__next",
      prevEl: ".gallery-slider__prev",
    },

    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });

  gallerySlider.init();
  CheckContollers(gallerySlider);
}

function CheckContollers(slider) {
  let slideCount = slider.slides.length;

  let leftArrow = document.querySelector(".swiper-button-prev");
  let rightArrow = document.querySelector(".swiper-button-next");
  let pagination = document.querySelector(".swiper-pagination");

  if (slideCount == 1) {
    leftArrow.style.display = "none";
    rightArrow.style.display = "none";
    pagination.style.display = "none";
  }
}
