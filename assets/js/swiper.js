let swiper = new Swiper(".heroSwiper", {
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
});

document.addEventListener("DOMContentLoaded", function (event) {
  window.addEventListener(
    "load",
    function (e) {
      swiper.on("slideChange", function () {
        gsap.to(this.slides[this.activeIndex], { scale: 1, opacity: 1 });
        gsap.to(this.slides[this.previousIndex], { opacity: 0.3, scale: 0.8 });
        this.slides[this.previousIndex].animation.pause(0);
        this.slides[this.activeIndex].animation.restart();
      });

      swiper.slides.forEach((slide, index) => {
        let letter = slide.querySelector("#hero_text");
        let tl = gsap.timeline({ paused: true });
        tl.from(letter, { scale: 0, opacity: 0, ease: "back", duration: 1 });
        slide.animation = tl;
      });

      swiper.slides[0].animation.play();
    },
    false
  );
});
