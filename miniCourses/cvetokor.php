<?php
/*
Template Name: Цветокор
Template Post Type: post
*/
?>

<?php get_header('blog'); ?>

<section class="heroSection">
  <div class="heroSection__bg">
    <picture>
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionBg--mobile.webp" type="image/webp">
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionBg--mobile.png">
      <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionBg.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionBg.png" alt="">
    </picture>
  </div>
  <div class="container">
    <div class="heroSection__wrapper">
      <div class="heroSection__head">
        <?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
          <div class="heroSection__breadcrumbs">
            <?php rank_math_the_breadcrumbs(); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="heroSection__content">
        <h1 class="main-title heroSection__title">Идеальный <span>цветокор</span> за 3 минуты</h1>
        <div class="heroSection__text">Бесплатный урок по обработке в Photoshop для создания собственных пресетов </div>
      </div>
      <div class="heroSection__image">
        <picture>
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionImg--mobile.webp" type="image/webp">
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionImg--mobile.png">
          <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionImg.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/heroSectionImg.png" alt="">
        </picture>
      </div>
      <div class="heroSection__carts">
        <div class="cart">
          <div class="cart__title">Автоматизация процесса обработки до нескольких кликов</div>
          <div class="cart__text">Пошаговая демонстрация с объяснением каждого этапа</div>
        </div>
        <div class="cart">
          <div class="cart__title">Доступ навсегда</div>
          <div class="cart__text">Забирайте урок себе и возвращайтесь к просмотру в любое время</div>
        </div>
        <div class="cart">
          <div class="cart__title">Формат “повторяй за мной”</div>
          <div class="cart__text">Секретная функция фотошопа, о которой не знают 90% фотографов</div>
        </div>
      </div>
      <div class="heroSection__footer">
        <div class="heroSection__form">
          <script id="2d7254c20ab15b748f77767e4b4823f6c9af4e13" src="https://lk.senseischool.ru/pl/lite/widget/script?id=694527"></script>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sectionWithVideo">
  <div class="container">
    <div class="sectionWithVideo__wrapper">
      <h2 class="section-title sectionWithVideo__title">Трейлер урока на 15 секунд</h2>
      <div class="video sectionWithVideo__video" data-videoSrc="<?= get_template_directory_uri() ?>/assets/video/cvetokor.mp4">
        <div class="video__poster">
          <picture>
            <source media="(max-width: 576px)" srcset="<?= get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/trailer--mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/trailer--mobile.png">
            <source srcset="<?= get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/trailer.webp" type="image/webp" />
            <img src="<?= get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/trailer.png" alt="" />
          </picture>
          <button class="video__play">
            <svg width="30" height="32" viewbox="0 0 30 32" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.2624 12.5493C29.898 14.0947 29.898 17.9049 27.2624 19.4504L6.9465 31.363C4.27992 32.9266 0.923195 31.0037 0.923195 27.9125L0.923195 4.08716C0.923195 0.995967 4.27992 -0.92699 6.9465 0.636614L27.2624 12.5493Z"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="callback">
  <div class="callback__bg">
    <picture>
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackBg--mobile.webp" type="image/webp">
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackBg--mobile.png">
      <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackBg.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackBg.png" alt="">
    </picture>
  </div>
  <div class="container">
    <div class="callback__wrapper">
      <div class="callback__image">
        <picture>
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackImg--mobile.webp" type="image/webp">
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackImg--mobile.png">
          <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackImg.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/cvetokor/callBackImg.png" alt="">
        </picture>
      </div>
      <div class="callback__form">
        <script id="b2b0d2258ce44b38a41b1e06547f819a4a4b513b" src="https://lk.senseischool.ru/pl/lite/widget/script?id=694530"></script>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>