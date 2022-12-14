<div class="heroSection">
  <div class="heroSection__wrapper wrapper--withContainer">
    <div class="heroSection__head">
      <?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
        <div class="heroSection__breadcrumbs">
          <?php rank_math_the_breadcrumbs(); ?>
        </div>
      <?php endif; ?>

      <ul class="navLinks heroSection__navLinks">
        <li class="navLinks__item">
          <a href="#program" class="navLinks__link linkScroll">Программа</a>
        </li>
        <li class="navLinks__item">
          <a href="#expert" class="navLinks__link linkScroll">Спикер</a>
        </li>
        <li class="navLinks__item">
          <a href="#tariff" class="navLinks__link linkScroll">Тарифы</a>
        </li>
      </ul>
    </div>
    <div class="heroSection__content">
      <div class="heroSection__frame">Онлайн-курс Лены Драгиной</div>
      <h1 class="main-title heroSection__title">Полный курс по обработке, цветокору и ретуши</h1>
      <p class="heroSection__text">С нуля до pro: нескучная база для начинающих и новые открытия для профессионалов</p>
      <button class="btn heroSection__btn linkScroll" href="#tariff">Выбрать тариф</button>
    </div>
    <div class="heroSection__image">
      <div class="image__frame">
        <div class="content">
          Старт <strong>23 января</strong>
        </div>
      </div>
      <picture>
        <source media="(max-width: 576px)" data-srcset="<?php echo get_template_directory_uri()  ?>/public/img/courses/retush/heroSectionImg--mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" data-srcset="<?php echo get_template_directory_uri()  ?>/public/img/courses/retush/heroSectionImg--mobile.png">
        <source srcset="<?php echo get_template_directory_uri()  ?>/public/img/courses/retush/heroSectionImg.webp" type="image/webp">
        <img class="lazy" data-src="<?php echo get_template_directory_uri()  ?>/public/img/courses/retush/heroSectionImg.png" alt="">
      </picture>
    </div>
    <div class="heroSection__footer">
      <ul class="heroSection__list">
        <li class="list__item">
          <div class="item__title">🍒 Углубленное обучение</div>
          <div class="item__text">Работаем в трех главных программах Ps, Lr, C1, изучаем механику работы с цветом</div>
        </li>
        <li class="list__item">
          <div class="item__title">💎 Авторские приемы</div>
          <div class="item__text">Топ-обработка для обложек, брендов, личных аккаунтов, глянца в разных стилях</div>
        </li>
        <li class="list__item">
          <div class="item__title">📈 Структурированность</div>
          <div class="item__text">Добиваемся осознанности и понимания каждого шага в обработке</div>
        </li>
      </ul>
    </div>
  </div>
</div>