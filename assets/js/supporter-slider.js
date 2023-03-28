let sliderSwiper = new Swiper(".sliderSwiper", {
  slidesPerView: 5,
  spaceBetween: 10,
  loop: true,
  animating: true,
  pagination: {
    el: ".sliderSwiperPagination",
    type: "bullets",
  },
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: ".swiperButtonNext",
    prevEl: ".swiperButtonPrev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    350: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    760: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1000: {
      slidesPerView: 4,
      spaceBetween: 15,
    },
    1440: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
  },
});
