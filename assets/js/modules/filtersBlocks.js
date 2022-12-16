document.addEventListener("DOMContentLoaded", () => {
  const blocks = document.querySelectorAll(".filters__block");

  if (blocks.length === 0) return;

  blocks.forEach((el) => {
    const itemsWrapper = el.querySelector(".block__items");
    const items = el.querySelectorAll(".checkboxBlock");
    const btnMore = el.querySelector(".btnMore");

    if (items.length < 6) return;

    let height = 0;

    console.log(btnMore);

    for (let i = 0; i < 5; i++) {
      if (i !== 4) {
        height = height + items[i].scrollHeight + 16;
      } else {
        height = height + items[i].scrollHeight;
      }
    }

    itemsWrapper.style.maxHeight = height + "px";

    btnMore.addEventListener("click", () => {
      btnMore.classList.toggle("active");
      if (btnMore.classList.contains("active")) {
        itemsWrapper.style.maxHeight = "none";
        btnMore.innerHTML =
          'Свернуть <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.227806 0.234315C0.531547 -0.0781049 1.02401 -0.0781049 1.32775 0.234315L7 6.06863L12.6723 0.234315C12.976 -0.0781049 13.4685 -0.0781049 13.7722 0.234315C14.0759 0.546734 14.0759 1.05327 13.7722 1.36569L7.54997 7.76569C7.24623 8.0781 6.75377 8.0781 6.45003 7.76569L0.227806 1.36569C-0.0759353 1.05327 -0.0759353 0.546734 0.227806 0.234315Z" fill="#171717" /> </svg>';
      } else {
        itemsWrapper.style.maxHeight = height + "px";
        btnMore.innerHTML =
          'Развернуть <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.227806 0.234315C0.531547 -0.0781049 1.02401 -0.0781049 1.32775 0.234315L7 6.06863L12.6723 0.234315C12.976 -0.0781049 13.4685 -0.0781049 13.7722 0.234315C14.0759 0.546734 14.0759 1.05327 13.7722 1.36569L7.54997 7.76569C7.24623 8.0781 6.75377 8.0781 6.45003 7.76569L0.227806 1.36569C-0.0759353 1.05327 -0.0759353 0.546734 0.227806 0.234315Z" fill="#171717" /> </svg>';
      }
    });
  });
});
