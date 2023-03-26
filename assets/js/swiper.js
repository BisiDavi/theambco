let swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  loop: true,
  animating: true,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  navigation: {
    nextEl: ".swiperButtonNext",
    prevEl: ".swiperButtonPrev",
  },
  on: {
    slideChange: () => {
      const heroText = document.getElementById("hero_text");
      heroText.classList.add("animate__fadeIn");
    },
    slideNextTransitionEnd: () => {
      const heroText = document.getElementById("hero_text");
      heroText.classList.remove("animate__fadeIn");
      heroText.classList.add("animate__fadeOut");
    },
  },
});
