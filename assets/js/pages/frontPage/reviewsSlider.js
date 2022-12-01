// JS Code Slider

import Swiper, { Navigation, Keyboard } from "swiper";

const btnPrev = document.querySelector(".reviews").querySelector(".btn__prev");
const btnNext = document.querySelector(".reviews").querySelector(".btn__next");
const btnViewMore = document.querySelector(".reviewsSlider__viewMore");

const reviewsSlider = new Swiper(".reviewsSlider", {
  modules: [Navigation, Keyboard],
  speed: 500,
  slidesPerView: "auto",
  spaceBetween: 40,
  //   loop: true,
  navigation: {
    nextEl: btnNext,
    prevEl: btnPrev,
  },
  keyboard: {
    enabled: true,
  },
  on: {
    click: function (swiper, event) {
      swiper.slideTo(swiper.clickedIndex, 500);
    },
  },
});

if (window.screen.availWidth < 576) {
  reviewsSlider.disable();
  changeStyle();
}

window.addEventListener("resize", () => {
  if (window.screen.availWidth < 576) {
    reviewsSlider.disable();
    changeStyle();
  } else {
    reviewsSlider.enable();
    reviewsSlider.wrapperEl.maxHeight = "max-content";
  }
});

function changeStyle() {
  const wrapper = reviewsSlider.wrapperEl;
  if (!wrapper) return;
  const allCarts = wrapper.querySelectorAll(".slide");
  if (allCarts.length === 0) return;
  let maxHeight = 0;
  const countView = allCarts.length > 2 ? 2 : allCarts.length;
  const margin = 32;

  for (let i = 0; i < countView; i++) {
    if (i === countView - 1) {
      maxHeight = maxHeight + allCarts[i].scrollHeight;
    } else {
      maxHeight = maxHeight + allCarts[i].scrollHeight + margin;
    }
  }

  wrapper.style.maxHeight = `${maxHeight}px`;

  btnViewMore.addEventListener("click", () => {
    wrapper.style.maxHeight = "max-content";
    btnViewMore.style.display = "none";
  });
}
