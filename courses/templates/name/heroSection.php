<section class="heroSection">
  <div class="heroSection__wrapper">
    <div class="heroSection__header">
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
          <a href="#student" class="navLinks__link linkScroll">Результаты учеников</a>
        </li>
        <li class="navLinks__item">
          <a href="#tariff" class="navLinks__link linkScroll">Тарифы</a>
        </li>
      </ul>
    </div>
    <div class="heroSection__content">
      <div class="heroSection__frame">Онлайн-курс Макса Баева</div>
      <ul class="navLinks heroSection__navLinks navLinks--mobile">
        <li class="navLinks__item">
          <a href="#program" class="navLinks__link linkScroll">Программа</a>
        </li>
        <li class="navLinks__item">
          <a href="#student" class="navLinks__link linkScroll">Ученики</a>
        </li>
        <li class="navLinks__item">
          <a href="#tariff" class="navLinks__link linkScroll">Тарифы</a>
        </li>
      </ul>
      <h1 class="main-title heroSection__title">Как сделать имя в мире фотографии в 2023, <span>v3</span></h1>
      <div class="heroSection__text">Выстроить личный бренд в новых условиях, увеличить чек за услуги, найти свой стиль и покорить индустрию</div>
      <button class=" btn heroSection__btn linkScroll" href="#tariff">Записаться на курс</button>
    </div>
    <div class="heroSection__image">
      <div class="image__block image__block1">
        <div class="content">Старт 9 января 2023</div>
      </div>
      <picture>
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/heroSectionImg--mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/heroSectionImg--mobile.png">
        <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/heroSectionImg.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/heroSectionImg.png" alt="">
      </picture>
    </div>
    <div class="heroSection__footer">
      <ul class="heroSection__list">
        <li class="list__item">
          <div class="item__title">100+ часов уроков</div>
          <div class="item__text">вебинары, видео, инструкции, подкасты</div>
        </li>
        <li class="list__item">
          <div class="item__title">130 допматериалов:</div>
          <div class="item__text">никакой воды для объёма, только избранные продукты</div>
        </li>
        <li class="list__item">
          <div class="item__title">8 приглашенных экспертов:</div>
          <div class="item__text">от стилистов и редакторов до маркетологов и юристов</div>
        </li>
      </ul>
    </div>
  </div>
</section>