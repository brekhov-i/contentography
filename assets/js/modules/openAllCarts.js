document.addEventListener("DOMContentLoaded", () => {
  const openAllCartsBlock = document.querySelectorAll(".openAllCarts");

  if (openAllCartsBlock.length === 0) return;

  openAllCartsBlock.forEach((block) => {
    const wrapper = block.querySelector(".openAllCarts__wrapper");
    const btn = block.querySelector(".openAllCarts__btn");

    if (!wrapper || !btn) return;

    const allCarts = wrapper.querySelectorAll(".cart");
    const inRowCount =
      window.innerWidth < 576
        ? wrapper.getAttribute("data-inRowCountMobile")
          ? Number(wrapper.getAttribute("data-inRowCountMobile"))
          : 1
        : wrapper.getAttribute("data-inRowCount")
        ? Number(wrapper.getAttribute("data-inRowCount"))
        : 1;
    const colViewCart =
      window.innerWidth < 576
        ? Number(wrapper.getAttribute("data-colCartViewMobile"))
        : Number(wrapper.getAttribute("data-colCartView"));
    const margin =
      window.innerWidth < 576
        ? Number(wrapper.getAttribute("data-cartMarginMobile"))
        : Number(wrapper.getAttribute("data-cartMargin"));

    if (allCarts.length === 0) return;

    if (colViewCart >= allCarts.length) {
      btn.style.display = "none";
      wrapper.style.maxHeight = "none";
      return;
    }

    let height = 0;
    let openHeight = 0;

    console.log(block);
    console.log(allCarts[1].scrollHeight);

    if (colViewCart > 1) {
      let i = 0;
      while (i < colViewCart) {
        console.log(i < colViewCart);
        if (i < colViewCart - 1) {
          height = height + allCarts[i].clientHeight;
        } else {
          height = height + allCarts[i].clientHeight + margin;
        }
        i = i + inRowCount;
      }
    } else {
      height = allCarts[0].scrollHeight;
    }
    // let i = 0;
    // while (i < allCarts.length) {
    //   openHeight = openHeight + allCarts[i].scrollHeight + margin;
    //   i = i + inRowCount;
    // }

    console.log(height);

    wrapper.style.maxHeight = height + "px";

    const textBtn = btn.querySelector("span").innerText;
    const textBtnActive = btn.getAttribute("data-textOpen");

    console.log(textBtn);

    btn.addEventListener("click", () => {
      block.classList.toggle("openAllCarts--open");

      if (block.classList.contains("openAllCarts--open")) {
        btn.querySelector("span").innerText = textBtnActive;
        wrapper.style.maxHeight = "none";
      } else {
        btn.querySelector("span").innerText = textBtn;
        wrapper.style.maxHeight = height + "px";
        const blockTop = block.getBoundingClientRect().top;
        window.parent.scrollTo({
          top: window.pageYOffset + blockTop - 100,
          behavior: "smooth",
        });
      }
    });
  });
});
