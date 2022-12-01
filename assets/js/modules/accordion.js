function accordion() {
  const accordions = document.querySelectorAll(".accordion");
  if (accordions.length === 0) return;

  if (!accordions[0].classList.contains("accordion--noOpenOne")) {
    const oneEl = accordions[0];

    const controlOneEl = oneEl.querySelector(".accordion__control");
    const contentOneEl = oneEl.querySelector(".accordion__content");

    oneEl.classList.add("open");

    if (oneEl.classList.contains("open")) {
      controlOneEl.setAttribute("aria-expanded", true);
      contentOneEl.setAttribute("aria-hidden", false);
      contentOneEl.style.maxHeight = contentOneEl.scrollHeight + "px";
    } else {
      controlOneEl.setAttribute("aria-expanded", false);
      contentOneEl.setAttribute("aria-hidden", true);
      contentOneEl.style.maxHeight = null;
    }
  }

  accordions.forEach((el) => {
    el.addEventListener("click", (e) => {
      const self = e.currentTarget;
      const control = self.querySelector(".accordion__control");
      const content = self.querySelector(".accordion__content");

      if (!self.classList.contains("open")) {
        accordions.forEach((el) => {
          if (el.classList.contains("open")) {
            const control = el.querySelector(".accordion__control");
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
