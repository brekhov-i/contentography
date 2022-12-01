function btnsScroll() {
  const linksScroll = document.querySelectorAll(".linkScroll");

  if (linksScroll.length === 0) return;

  linksScroll.forEach((el) => {
    el.addEventListener("click", (e) => {
      e.preventDefault();
      const blockTop = document.querySelector(el.getAttribute("href")).getBoundingClientRect().top;

      window.parent.scrollTo({
        top: window.pageYOffset + blockTop,
        behavior: 'smooth'
      })
          
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  btnsScroll();
});
