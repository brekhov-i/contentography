document.addEventListener("DOMContentLoaded", () => {
  const headerMobileBlock = document.querySelector('.header__mobileBlock')
  const navMenu = document.querySelector(".header__nav");
  const btnOpenMenu = document.querySelector(".header__btnMenu");

  const itemCourse = navMenu.querySelector(".item--courses");
  const dropdown = itemCourse.querySelector(".dropdown");
  const dropdownItems = dropdown.querySelectorAll(".dropdown__item");
  const itemWithDropdown = navMenu.querySelector(".list__item--withDropdown");
  const dropdown2 = itemWithDropdown.querySelector(".dropdown");

  const count = window.innerWidth > 576 ? dropdownItems.length < 10 ? dropdownItems.length : 10 : 6;

  btnOpenMenu.addEventListener("click", () => {
    navMenu.classList.toggle("open");
    btnOpenMenu.classList.toggle("active");
    if (navMenu.classList.contains("open")) {
      document.body.style.overflow = "hidden";
      headerMobileBlock.classList.add('absolute')
    } else {
      document.body.style.overflow = "visible";
      headerMobileBlock.classList.remove('absolute')
    }
  });

  itemCourse.addEventListener("click", () => {
    itemCourse.classList.toggle("active");

    let maxHeight = 0;
    

    for (let i = 0; i < count; i++) {
      maxHeight = maxHeight + dropdownItems[i].scrollHeight;
    }

    maxHeight = maxHeight + 16 * (count - 1);

    if (itemCourse.classList.contains("active")) {
      dropdown.style.maxHeight = maxHeight + "px";
    } else {
      dropdown.style.maxHeight = 0 + "px";
    }
  });
  if (window.innerWidth < 576) {
    itemWithDropdown.addEventListener("click", () => {
      if (itemWithDropdown.classList.contains("active")) {
        itemWithDropdown.classList.remove("active");
        dropdown2.style.maxHeight = 0 + "px";
      } else {
        itemWithDropdown.classList.add("active");
        dropdown2.style.maxHeight = dropdown2.scrollHeight + "px";
      }
    });
  } else {
    itemWithDropdown.addEventListener("mouseover", () => {
      itemWithDropdown.classList.add("active");
    });
    itemWithDropdown.addEventListener("mouseout", () => {
      itemWithDropdown.classList.remove("active");
    });
  }

  window.addEventListener("click", (e) => {
    const item = e.path.find((el) => el === itemCourse);
    const item2 = e.path.find((el) => el === itemWithDropdown);
    if (!item && itemCourse.classList.contains("active")) {
      itemCourse.classList.remove("active");
      dropdown.style.maxHeight = 0 + "px";
    }
    if (!item2 && itemWithDropdown.classList.contains("active")) {
      itemWithDropdown.classList.remove("active");
      dropdown2.style.maxHeight = 0 + "px";
    }
  });
});
