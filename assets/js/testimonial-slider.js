let testimonialSlider = new Swiper(".testimonialSlider", {
  slidesPerView: 8,
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: ".testimonialButtonNext",
    prevEl: ".testimonialButtonPrev",
  },
  pagination: {
    el: ".testimonialPagination",
    type: "bullets",
  },
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    350: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    760: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
    1000: {
      slidesPerView: 6,
      spaceBetween: 15,
    },
    1440: {
      slidesPerView: 8,
      spaceBetween: 20,
    },
  },
});
