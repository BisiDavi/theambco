let blogSwiper = new Swiper(".blogSwiper", {
  slidesPerView: 4,
  spaceBetween: 10,
  loop: true,
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
    760: {
      slidesPerView: 2,
      spaceBetween: 20,
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
