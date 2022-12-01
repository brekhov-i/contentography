import Swiper, { Autoplay, FreeMode } from "swiper";

document.addEventListener("DOMContentLoaded", () => {
  const slider1 = new Swiper(".slider__frameBlackFriday--top", {
    modules: [Autoplay, FreeMode],
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 24,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
      waitForTransition: false,
    },
    speed: 4000,
    freeMode: {
      enabled: true,
      momentum: false,
      momentumBounce: false,
    },
  });
  const slider2 = new Swiper(".slider__frameBlackFriday--bottom", {
    modules: [Autoplay, FreeMode],
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 24,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
      waitForTransition: false,
    },
    speed: 4000,
    freeMode: {
      enabled: true,
      momentum: false,
      momentumBounce: false,
    },
  });
});
