// Перевод числа месяца в название

const calendar = [
  {
    en: 0,
    ru: "января",
  },
  {
    en: 1,
    ru: "февраля",
  },
  {
    en: 2,
    ru: "марта",
  },
  {
    en: 3,
    ru: "апреля",
  },
  {
    en: 4,
    ru: "мая",
  },
  {
    en: 5,
    ru: "июня",
  },
  {
    en: 6,
    ru: "июля",
  },
  {
    en: 7,
    ru: "августа",
  },
  {
    en: 8,
    ru: "сентября",
  },
  {
    en: 9,
    ru: "октября",
  },
  {
    en: 10,
    ru: "ноября",
  },
  {
    en: 11,
    ru: "декабря",
  },
];

/**
 *
 * @param {String} id ID таймера, который нужно запустить. Обязательный параметр
 * @param {Date} date Дата, до которой будет отсчет. Обязательный параметр
 * @param {Boolean} seconds Нужно ли отображение секунд на экране. По-умолчанию false - отключено
 * @param {Number} intervalUpdate Интервал обновлений таймера. По-умолчанию 1000мс = 1сек
 * @param {Boolean} updateAuto Автоматическое продление таймера. По-умолчанию true - включено
 * @param {Number} plusDay На сколько дней продливать таймер. Нужно указывать если параметр "updateAuto" в зачении true. По умолчанию каждые 7 дней
 * @param {Boolean} mounthString Выводить месяц словом или цифрой. По-умолчанию false - отключено;
 */

function startTimer(
  id,
  date,
  seconds = false,
  intervalUpdate = 1000,
  updateAuto = true,
  plusDay = 8,
  mounthString = false
) {
  const timer = document.querySelector(id);

  if (!timer) {
    console.warn(`Таймер с id="${id}" не найден`);
    return;
  }

  // Получаем обертки для чисел, чтобы в дальнейшем вешать класс для отключения
  const daysWrapper = timer.querySelector(".days");
  const hoursWrapper = timer.querySelector(".hours");
  const minutesWrapper = timer.querySelector(".minutes");
  if (seconds) {
    var secondsWrapper = timer.querySelector(".seconds");
    if (secondsWrapper) {
      var secondsNumber = secondsWrapper.querySelector(".number");
    }
  }

  const titleWrapper = timer.querySelector(".timer__date");

  if (daysWrapper) {
    var daysNumber = daysWrapper.querySelector(".number");
  }
  if (hoursWrapper) {
    var hoursNumber = hoursWrapper.querySelector(".number");
  }
  if (minutesWrapper) {
    var minutesNumber = minutesWrapper.querySelector(".number");
  }
  if (titleWrapper) {
    var titleNumber = titleWrapper.querySelector(".number");
  }

  if (seconds) {
    updateClock(
      daysWrapper,
      daysNumber,
      hoursWrapper,
      hoursNumber,
      minutesWrapper,
      minutesNumber,
      secondsWrapper,
      secondsNumber,
      titleNumber
    );
    var timeinterval = setInterval(
      () =>
        updateClock(
          daysWrapper,
          daysNumber,
          hoursWrapper,
          hoursNumber,
          minutesWrapper,
          minutesNumber,
          secondsWrapper,
          secondsNumber,
          titleNumber
        ),
      intervalUpdate
    );
  } else {
    updateClock(
      daysWrapper,
      daysNumber,
      hoursWrapper,
      hoursNumber,
      minutesWrapper,
      minutesNumber,
      titleNumber
    );

    var timeinterval = setInterval(
      () =>
        updateClock(
          daysWrapper,
          daysNumber,
          hoursWrapper,
          hoursNumber,
          minutesWrapper,
          minutesNumber,
          titleNumber
        ),
      intervalUpdate
    );
  }

  function updateClock(
    daysEl,
    daysSpan,
    hoursEl,
    hoursSpan,
    minutesEl,
    minutesSpan,
    secondsEl,
    secondsSpan,
    title
  ) {
    var t = getTimeRemaining(date, updateAuto, plusDay);

    if (t.total <= 0) {
      t.days = 0;
      t.hours = 0;
      t.minutes = 0;
      t.seconds = 0;
    }
    if (t.days === 0 && daysEl) {
      daysEl.classList.add("disabled");
    }
    if (t.hours === 0 && t.days === 0 && hoursEl) {
      hoursEl.classList.add("disabled");
    }
    if (t.minutes === 0 && t.hours === 0 && t.days === 0 && minutesEl) {
      minutesEl.classList.add("disabled");
    }
    if (seconds && secondsEl) {
      if (t.seconds === 0 && t.minutes === 0 && t.hours === 0 && t.days === 0) {
        secondsEl.classList.add("disabled");
      }
    }
    if (daysSpan) {
      daysSpan.innerHTML = t.days + ".";
    }
    if (hoursSpan) {
      hoursSpan.innerHTML = ("0" + t.hours).slice(-2) + ".";
    }
    if (minutesSpan) {
      minutesSpan.innerHTML = secondsSpan
        ? ("0" + t.minutes).slice(-2) + "."
        : ("0" + t.minutes).slice(-2);
    }

    if (seconds && secondsSpan) {
      secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
    }
    if (title) {
      if (mounthString) {
        const mounth = calendar.find(
          (el) => el.en === t.viewDate.getMonth()
        ).ru;
        title.innerHTML = `${t.viewDate.getDate()} ${mounth}`;
      } else {
        const mounth =
          t.viewDate.getMonth() + 1 > 9
            ? `${t.viewDate.getMonth() + 1}`
            : `0${t.viewDate.getMonth() + 1}`;
        title.innerHTML = `${t.viewDate.getDate()}.${mounth}`;
      }
    }
    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }
}

function getTimeRemaining(endtime, updateAuto, plusDay) {
  let date = endtime;
  var t = Date.parse(date) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  let viewDate = new Date(date);
  viewDate.setDate(viewDate.getDate() - 1);
  if (updateAuto) {
    if (seconds <= 0 && minutes <= 0 && hours <= 0 && days <= 0) {
      while (seconds <= 0 && minutes <= 0 && hours <= 0 && days <= 0) {
        date.setDate(date.getDate() + plusDay);
        t = Date.parse(date) - Date.parse(new Date());
        seconds = Math.floor((t / 1000) % 60);
        minutes = Math.floor((t / 1000 / 60) % 60);
        hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        days = Math.floor(t / (1000 * 60 * 60 * 24));
      }
      viewDate = new Date(date);
      viewDate.setDate(viewDate.getDate() - 1);
    }
  }

  return {
    viewDate,
    total: t,
    days,
    hours,
    minutes,
    seconds,
  };
}

document.addEventListener("DOMContentLoaded", () => {
  const date = new Date();
  date.setDate(date.getDate() + 1);
  startTimer(
    "#timerLabSvet",
    new Date(2022, 4, 24, 0, 0, 0, 0),
    true,
    1000,
    true
  );
  startTimer(
    "#timerPerfomans",
    new Date(2022, 4, 28, 0, 0, 0, 0),
    true,
    1000,
    false
  );
  startTimer(
    "#timer404",
    new Date(2022, 5, 9, 0, 0, 0, 0),
    true,
    1000,
    true,
    8,
    true
  );
  startTimer(
    "#timerSpecialPage",
    new Date(2022, 8, 30, 0, 0, 0, 0),
    true,
    1000,
    false
  );
  startTimer("#timerSS", date, true, 1000, false, 8, false);
});

/**
 *
 * @param {String} id ID таймера, который нужно запустить. Обязательный параметр
 * @param {Date} date Дата, до которой будет отсчет. Обязательный параметр //- Если нужно указать определенную даты использовать new Date(2022 (год), 8 (месяц, начиная с 0), 30 (день), 0 (час), 0 (минуты), 0 (секунды), 0 (милисекунды)),
 * @param {Boolean} seconds Нужно ли отображение секунд на экране. По-умолчанию false - отключено
 * @param {Number} intervalUpdate Интервал обновлений таймера. По-умолчанию 1000мс = 1сек
 * @param {Boolean} updateAuto Автоматическое продление таймера. По-умолчанию true - включено
 * @param {Number} plusDay На сколько дней продливать таймер. Нужно указывать если параметр "updateAuto" в зачении true. По умолчанию каждые 7 дней
 * @param {Boolean} mounthString Выводить месяц словом или цифрой. По-умолчанию false - отключено;
 */
