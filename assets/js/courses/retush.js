import Swiper, { Autoplay, Navigation } from "swiper";
//review
const reviewSlider = new Swiper(".reviews__slider", {
  modules: [Navigation, Autoplay],
  navigation: {
    prevEl: ".reviews__slider--btnPrev",
    nextEl: ".reviews__slider--btnNext",
    enabled: true,
  },
  autoplay: {
    delay: 2000
  },
  simulateTouch: true, 
  grabCursor: true,  
  slidesPerView: "auto",
  spaceBetween: 40,
  loop: true,
  breakpoints: {
    // when window width is >= 320px
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    576: {
      slidesPerView: "auto",
      spaceBetween: 40,
    },
  },
});
