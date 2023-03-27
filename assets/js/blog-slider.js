let blogSwiper = new Swiper(".blogSwiper", {
  slidesPerView: 4,
  spaceBetween: 10,
  navigation: {
    nextEl: ".blogSwiperButtonNext",
    prevEl: ".blogSwiperButtonPrev",
  },
  pagination: {
    el: ".blogSwiperPagination",
    type: "bullets",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    350: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    1000: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
  },
});
