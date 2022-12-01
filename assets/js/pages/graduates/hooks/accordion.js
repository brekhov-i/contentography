function accordion() {
  const accordions = document.querySelectorAll(".filters__accordion");
  if( accordions.length === 0 ) return

  accordions.forEach((el) => {
    el.addEventListener("click", (e) => {
      const self = e.currentTarget;
      const control = self.querySelector(".accordion__head");
      const content = self.querySelector(".accordion__content");

      if (!self.classList.contains("open")) {
        accordions.forEach((el) => {
          if (el.classList.contains("open")) {
            const control = el.querySelector(".accordion__head");
            const content = el.querySelector(".accordion__content");
            el.classList.toggle("open");
            control.setAttribute("aria-expanded", false);
            content.setAttribute("aria-hidden", true);
            content.style.maxHeight = null;
          }
        });
      }

      self.classList.toggle("open");

      // если открыт аккордеон
      if (self.classList.contains("open")) {
        control.setAttribute("aria-expanded", true);
        content.setAttribute("aria-hidden", false);
        content.style.maxHeight = content.scrollHeight + "px";
      } else {
        control.setAttribute("aria-expanded", false);
        content.setAttribute("aria-hidden", true);
        content.style.maxHeight = null;
      }
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  accordion();
});
