function modalWindow() {
  const btnsOpenModalWindow = document.querySelectorAll(".btnOpenModalWindow");
  const fixBlocks = document.querySelectorAll(".fix-block");
  const body = document.body;
  const allWindow = document.querySelectorAll(".modalWindow");

  if (btnsOpenModalWindow === 0) return;

  btnsOpenModalWindow.forEach((btn) => {
    btn.addEventListener("click", () => {
      allWindow.forEach((el) => {
        if (el.classList.contains("open")) {
          enableScroll();
          el.classList.remove("open");
        }
      });

      const window = document.querySelector(
        "." + btn.getAttribute("data-window")
      );

      disableScroll();

      if (!window) return;

      let i = 0;

      window.addEventListener("click", (e) => {
        if (e.target == window && i === 0) {
          e.target.classList.remove("open");
          enableScroll();
          i++;
        }
      });

      const closeBtn = window.querySelector(".modalWindow-close");

      if (!window.classList.contains("open")) {
        window.classList.add("open");
      }

      if (!closeBtn) return;

      closeBtn.addEventListener("click", () => {
        if (window.classList.contains("open")) {
          window.classList.remove("open");
          enableScroll();
        }
      });
    });
  });

  let disableScroll = function () {
    let paddingOffset = window.innerWidth - document.body.offsetWidth + "px";
    let pagePosition = window.scrollY;
    if (fixBlocks.length > 0) {
      fixBlocks.forEach((el) => {
        el.style.paddingRight = paddingOffset;
      });
    }
    body.style.paddingRight = paddingOffset;
    body.classList.add("disable-scroll");
    body.dataset.position = pagePosition;
    body.style.top = -pagePosition + "px";
  };

  let enableScroll = function () {
    let pagePosition = parseInt(document.body.dataset.position, 10);
    body.style.top = "auto";
    body.classList.remove("disable-scroll");
    fixBlocks.forEach((el) => {
      el.style.paddingRight = "0px";
    });
    body.style.paddingRight = "0px";
    window.scroll({ top: pagePosition, left: 0 });
    body.removeAttribute("data-position");
  };
}

document.addEventListener("DOMContentLoaded", () => {
  modalWindow();
  metaBox();
});

function metaBox() {
  setTimeout(function () {
    const cookie = document.cookie.split(";");

    let fbp = cookie.find((el) => el.indexOf("_fbp") !== -1);

    document
      .getElementsByName("formParams[userCustomFields][780680]")
      .forEach((el) => {
        if (fbp) {
          el.value = fbp.split("=")[1];
        } else {
          el.value = null;
        }
      });

    let fbc = cookie.find((el) => el.indexOf("_fbc") !== -1);
    document
      .getElementsByName("formParams[userCustomFields][780681]")
      .forEach((el) => {
        if (fbc) {
          el.value = fbc.split("=")[1];
        } else {
          el.value = null;
        }
      });

    //поиск в cookies ga
    let ga = cookie.find((el) => el.indexOf("_ga") !== -1);
    document
      .getElementsByName("formParams[userCustomFields][549371]")
      .forEach((el) => {
        if (ga) {
          el.value = ga.split("=")[1];
        } else {
          el.value = null;
        }
      });

    //определяем useragent
    let useragent = navigator.userAgent;
    document
      .getElementsByName("formParams[userCustomFields][790136]")
      .forEach((el) => {
        el.value = useragent;
      });

    //получение ip
    let ip = null;
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "https://jsonip.com/", true);
    xhr.send();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          ip = JSON.parse(xhr.response).ip;
          document
            .getElementsByName("formParams[userCustomFields][788369]")
            .forEach((el) => {
              el.value = ip;
            });
        } else {
          console.log(xhr.status);
        }
      }
    };

    // получение строки url
    let locationhref = document.location.href;
    document
      .getElementsByName("formParams[userCustomFields][788568]")
      .forEach((el) => {
        el.value = locationhref;
      });

    //utm-medium
    let utmMedium = getParameterByName("utm_medium");
    document
      .getElementsByName("formParams[userCustomFields][917952]")
      .forEach((el) => {
        el.value = utmMedium;
      });
    document
      .getElementsByName("formParams[dealCustomFields][857501]")
      .forEach((el) => {
        el.value = utmMedium;
      });
    //utm-source
    let utmSource = getParameterByName("utm_source");
    document
      .getElementsByName("formParams[userCustomFields][917951]")
      .forEach((el) => {
        el.value = utmSource;
      });
    document
      .getElementsByName("formParams[dealCustomFields][857500]")
      .forEach((el) => {
        el.value = utmSource;
      });
    //utm-campaign
    let utmCampaign = getParameterByName("utm_campaign");
    document
      .getElementsByName("formParams[userCustomFields][917953]")
      .forEach((el) => {
        el.value = utmCampaign;
      });
    document
      .getElementsByName("formParams[dealCustomFields][857502]")
      .forEach((el) => {
        el.value = utmCampaign;
      });
    //utm-content
    let utmContent = getParameterByName("utm_content");
    document
      .getElementsByName("formParams[userCustomFields][917954]")
      .forEach((el) => {
        el.value = utmContent;
      });
    document
      .getElementsByName("formParams[dealCustomFields][857503]")
      .forEach((el) => {
        el.value = utmContent;
      });
    //utm-term
    let utmTerm = getParameterByName("utm_term");
    document
      .getElementsByName("formParams[userCustomFields][917955]")
      .forEach((el) => {
        el.value = utmTerm;
      });
    document
      .getElementsByName("formParams[dealCustomFields][857504]")
      .forEach((el) => {
        el.value = utmTerm;
      });

    getPageOrder();
  }, 3000);
}

// Функция для получения страницы создания заказа на GetCourse
const getPageOrder = (inputSelector) => {
  const inputs = document.getElementsByName(
    "formParams[dealCustomFields][917965]"
  );
  if (inputs.length === 0) return;
  let searchParams = decodeURIComponent(
    decodeURIComponent(
      window.parent.location.hostname + window.parent.location.pathname
    )
  );
  if (searchParams.indexOf("?") > -1) {
    const stringTo = searchParams.indexOf("?");
    searchParams = searchParams.slice(0, stringTo);
  }
  inputs.forEach((input) => {
    input.value = searchParams;
  });
};

function getParameterByName(name) {
  var name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
  var results = regex.exec(location.search);
  return results === null
    ? ""
    : decodeURIComponent(results[1].replace(/\+/g, " "));
}

window.addEventListener("DOMContentLoaded", () => {
  // Включаем (значение 1) или выключаем (значение 0) захват UTM-меток в ЗАКАЗЫ
  const UTMSDealFunction = 1;
  // Включаем (значение 1) или выключаем (значение 0) захват UTM-меток в ПОЛЬЗОВАТЕЛЯ
  const UTMSUserFunction = 1;
  // Включаем (значение 1) или выключаем (значение 0) захват страницы создания заказа на GetCourse
  const getPageFunction = 1;
  // Прописываем только ID наших созданных полей по ЗАКАЗАМ
  const UTMSDeal = [
    ["utm_source", 'input[name="formParams[dealCustomFields][857500]'],
    ["utm_medium", 'input[name="formParams[dealCustomFields][857501]'],
    ["utm_campaign", 'input[name="formParams[dealCustomFields][857502]'],
    ["utm_content", 'input[name="formParams[dealCustomFields][857503]'],
    ["utm_term", 'input[name="formParams[dealCustomFields][857504]'],
  ];
  // Прописываем только ID наших созданных полей по ПОЛЬЗОВАТЕЛЯМ
  const UTMSUser = [
    ["utm_source", 'input[name="formParams[userCustomFields][917951]'],
    ["utm_medium", 'input[name="formParams[userCustomFields][917952]'],
    ["utm_campaign", 'input[name="formParams[userCustomFields][917953]'],
    ["utm_content", 'input[name="formParams[userCustomFields][917954]'],
    ["utm_term", 'input[name="formParams[userCustomFields][917955]'],
  ];
  // Прописываем только ID нашего созданного поля по ЗАКАЗАМ
  const pageOrderInput = 'input[name="formParams[dealCustomFields][917965]';
  // Функция для получения параметров UTM
  const getUTM = (name, inputSelector) => {
    const inputs = document.querySelectorAll(inputSelector);
    if (inputs.length === 0) return;
    // Записываем в переменную полное значение ссылки в поисковой строке и преобразовываем ее в нормальный вид
    const searchParams = decodeURIComponent(
      decodeURIComponent(window.location.href)
    );
    // В переменную записываем итог регулярного выражения
    const result = searchParams.match(new RegExp(name + "=([^&=#]+)"));
    // Если нашлось соответствие, то записываем в input значение
    if (result && result !== null) {
      inputs.forEach((input) => {
        input.value = decodeURI(result[1]);
      });
    }
  };
  // Функция для получения страницы создания заказа на GetCourse
  const getPageOrder = (inputSelector) => {
    const inputs = document.querySelectorAll(inputSelector);
    if (inputs.length === 0) return;
    let searchParams = decodeURIComponent(
      decodeURIComponent(
        window.parent.location.hostname + window.parent.location.pathname
      )
    );
    if (searchParams.indexOf("?") > -1) {
      const stringTo = searchParams.indexOf("?");
      searchParams = searchParams.slice(0, stringTo);
    }
    inputs.forEach((input) => {
      input.value = searchParams;
    });
  };
  const setOrderSettings = () => {
    // Задаем интервал для проверки появления input на странице раз в 0.5 миллисекунд
    setInterval(() => {
      // Запускаем наш код для захвата UTM-меток в заказ
      if (UTMSDealFunction === 1) {
        UTMSDeal.forEach(([utm, fieldId]) => getUTM(utm, fieldId));
      }
      // Запускаем наш код для захвата UTM-меток по пользователю
      if (UTMSUserFunction === 1) {
        UTMSUser.forEach(([utm, fieldId]) => getUTM(utm, fieldId));
      }
      // Запускаем наш код для захвата создания страницы по заказу
      if (getPageFunction === 1) {
        getPageOrder(pageOrderInput);
      }
    }, 500);
  };
  setOrderSettings();
});
