<?php
/*
Template Name: Цвет, ретушь, деньги
Template Post Type: post
*/
?>

<?php get_header('blog'); ?>

<div class="modalWindow windowRegister fix-block">
  <div class="modalWindow-wrapper callbackModal__wrapper">
    <button class="modalWindow-close">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.8869 11.9254L20.7174 4.64784L19.2776 3.09863L11.4471 10.3762L12.1675 11.1513L12.8869 11.9254Z" fill="#171717" />
        <path d="M9.89771 11.8159L2.06603 19.0945L3.50584 20.6437L11.3375 13.3651L10.6182 12.5911L9.89771 11.8159Z" fill="#171717" />
        <path d="M11.447 10.3764L4.16943 2.5459L2.62023 3.98571L9.89774 11.8162L10.6718 11.0968L11.447 10.3764Z" fill="#171717" />
        <path d="M20.1656 19.757L12.887 11.9253L12.1118 12.6457L11.3378 13.3651L18.6164 21.1968L20.1656 19.757Z" fill="#171717" />
      </svg>
    </button>
    <div class="modalWindow-form callbackModal__form">
      <script id="835e5da94d50d3857f5e231070a6cd4d2bea175c" src="https://lk.senseischool.ru/pl/lite/widget/script?id=724356&rand=11"></script>
    </div>
  </div>
</div>

<section class="heroSection">
  <div class="heroSection__bg">
    <picture>
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionBG--mobile.webp" type="image/webp">
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionBG--mobile.png">
      <source srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionBG.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionBG.png" alt="">
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
        <div class="heroSection__subheader">Бесплатный интенсив Лены Драгиной 12 декабря</div>
        <h1 class="main-title heroSection__title">Цвет, ретушь, деньги</h1>
        <div class="heroSection__text">Получи топовые инструменты обработки и узнай больше о профессии ретушера</div>
        <button class="btn heroSection__btn btnOpenModalWindow" data-window="windowRegister">Зарегистрироваться бесплатно</button>
      </div>

      <div class="heroSection__image">
        <picture>
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionImg--mobile.webp" type="image/webp">
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionImg--mobile.png">
          <source srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionImg.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/heroSectionImg.png" alt="">
        </picture>
      </div>
      <div class="heroSection__carts">
        <div class="cart">
          <div class="cart__title"><span>1 день.</span> Как добиться любого цвета на фотографиях</div>
          <div class="cart__text">Повторить референс или создать свой пресет</div>
        </div>
        <div class="cart">
          <div class="cart__title"><span>2 день.</span> Как создать эффектные трендовые кадры</div>
          <div class="cart__text">Приемы ретуши, быстрая обработка, работа с кожей и макияжем</div>
        </div>
        <div class="cart">
          <div class="cart__title"><span>3 день.</span> Как обработка помогает фотографу зарабатывать больше</div>
          <div class="cart__text">Разбираем с позиции фотографа и с позиции ретушера</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="spiker" id="spiker">
  <div class="spiker__wrapper">
    <h2 class="section-title spiker__title">Эксперт интенсива</h2>
    <div class="spiker__cart">
      <div class="cart__content">
        <div class="cart__image">
          <picture>
            <source src="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/authorImg1.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/authorImg1.png" alt="">
          </picture>
        </div>
        <div class="cart__textBlock">
          <h3 class="cart__title">Лена Драгина</h3>
          <ul class="cart__list">
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Специализируется <strong>на beauty, предметном фото и видео, работе с артистами, продюсировании и арт-дирекшне для проектов по всему миру</strong></div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Снимала для Сбербанк, L’Oreal Paris, NYX, Cinecitta make up, Insight, СP-1 и др</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Съемки для журналов Жара Magazine, Аэрофлот Mag, Домашний очаг и др</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Музыкальные лейблы Raava Music, Warner Music, Sony Music Entertainment</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Более 50 брендов одежды, косметики, ухода за лицом и телом, парфюмерии, салоны красоты, магазины чая и кофе, производители мотоциклов, мебели доверили Лене визуал своих брендов</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <h2 class="section-title spiker__title">Работы Лены</h2>
    <div class="spickerGallery__content">
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work1.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work1.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work2.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work2.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work3.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work3.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work4.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work4.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work5.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work5.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>//public/img/minicourse/cvetretush/works/work6.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work6.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work7.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work7.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work8.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work8.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work9.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work9.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work10.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work10.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work11.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work11.png" alt="" />
      </picture>
      <picture>
        <source type="image/webp" srcset="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work12.webp" />
        <img src="<?= get_template_directory_uri() ?>/public/img/minicourse/cvetretush/works/work12.png" alt="" />
      </picture>
</section>

<section class="result">
  <div class="container">
    <div class="result__wrapper">
      <h2 class="section-title result__title">Результат марафона</h2>
      <ul class="result__list">
        <li class="list__item">
          <div class="item__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="12" fill="#6EA349" />
              <path d="M18.8596 6.19734L9.6477 15.4631C9.58577 15.5256 9.51217 15.5752 9.43112 15.6091C9.35007 15.643 9.26317 15.6604 9.17541 15.6604C9.08765 15.6604 9.00075 15.643 8.9197 15.6091C8.83866 15.5752 8.76505 15.5256 8.70312 15.4631L5.14076 11.8763C5.07883 11.8137 5.00522 11.7641 4.92418 11.7302C4.84313 11.6964 4.75623 11.6789 4.66847 11.6789C4.58071 11.6789 4.49381 11.6964 4.41276 11.7302C4.33171 11.7641 4.25811 11.8137 4.19618 11.8763C4.134 11.9386 4.08466 12.0126 4.05099 12.0941C4.01733 12.1757 4 12.2631 4 12.3513C4 12.4396 4.01733 12.527 4.05099 12.6086C4.08466 12.6901 4.134 12.7641 4.19618 12.8264L7.75987 16.4106C8.1358 16.788 8.64526 17 9.17641 17C9.70757 17 10.217 16.788 10.593 16.4106L19.8042 7.14684C19.8662 7.08455 19.9155 7.01056 19.9491 6.92909C19.9827 6.84763 20 6.76029 20 6.67209C20 6.58389 19.9827 6.49655 19.9491 6.41509C19.9155 6.33362 19.8662 6.25963 19.8042 6.19734C19.7422 6.13479 19.6686 6.08516 19.5876 6.0513C19.5065 6.01743 19.4196 6 19.3319 6C19.2441 6 19.1572 6.01743 19.0762 6.0513C18.9951 6.08516 18.9215 6.13479 18.8596 6.19734Z" fill="white" />
            </svg>
          </div>
          <div class="item__text">Увидите, как какие приемы использует профессиональный фотограф и ретушер в работе</div>
        </li>
        <li class="list__item">
          <div class="item__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="12" fill="#6EA349" />
              <path d="M18.8596 6.19734L9.6477 15.4631C9.58577 15.5256 9.51217 15.5752 9.43112 15.6091C9.35007 15.643 9.26317 15.6604 9.17541 15.6604C9.08765 15.6604 9.00075 15.643 8.9197 15.6091C8.83866 15.5752 8.76505 15.5256 8.70312 15.4631L5.14076 11.8763C5.07883 11.8137 5.00522 11.7641 4.92418 11.7302C4.84313 11.6964 4.75623 11.6789 4.66847 11.6789C4.58071 11.6789 4.49381 11.6964 4.41276 11.7302C4.33171 11.7641 4.25811 11.8137 4.19618 11.8763C4.134 11.9386 4.08466 12.0126 4.05099 12.0941C4.01733 12.1757 4 12.2631 4 12.3513C4 12.4396 4.01733 12.527 4.05099 12.6086C4.08466 12.6901 4.134 12.7641 4.19618 12.8264L7.75987 16.4106C8.1358 16.788 8.64526 17 9.17641 17C9.70757 17 10.217 16.788 10.593 16.4106L19.8042 7.14684C19.8662 7.08455 19.9155 7.01056 19.9491 6.92909C19.9827 6.84763 20 6.76029 20 6.67209C20 6.58389 19.9827 6.49655 19.9491 6.41509C19.9155 6.33362 19.8662 6.25963 19.8042 6.19734C19.7422 6.13479 19.6686 6.08516 19.5876 6.0513C19.5065 6.01743 19.4196 6 19.3319 6C19.2441 6 19.1572 6.01743 19.0762 6.0513C18.9951 6.08516 18.9215 6.13479 18.8596 6.19734Z" fill="white" />
            </svg>
          </div>
          <div class="item__text">Узнаете, как добиться любого цвета на снимках</div>
        </li>
        <li class="list__item">
          <div class="item__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="12" fill="#6EA349" />
              <path d="M18.8596 6.19734L9.6477 15.4631C9.58577 15.5256 9.51217 15.5752 9.43112 15.6091C9.35007 15.643 9.26317 15.6604 9.17541 15.6604C9.08765 15.6604 9.00075 15.643 8.9197 15.6091C8.83866 15.5752 8.76505 15.5256 8.70312 15.4631L5.14076 11.8763C5.07883 11.8137 5.00522 11.7641 4.92418 11.7302C4.84313 11.6964 4.75623 11.6789 4.66847 11.6789C4.58071 11.6789 4.49381 11.6964 4.41276 11.7302C4.33171 11.7641 4.25811 11.8137 4.19618 11.8763C4.134 11.9386 4.08466 12.0126 4.05099 12.0941C4.01733 12.1757 4 12.2631 4 12.3513C4 12.4396 4.01733 12.527 4.05099 12.6086C4.08466 12.6901 4.134 12.7641 4.19618 12.8264L7.75987 16.4106C8.1358 16.788 8.64526 17 9.17641 17C9.70757 17 10.217 16.788 10.593 16.4106L19.8042 7.14684C19.8662 7.08455 19.9155 7.01056 19.9491 6.92909C19.9827 6.84763 20 6.76029 20 6.67209C20 6.58389 19.9827 6.49655 19.9491 6.41509C19.9155 6.33362 19.8662 6.25963 19.8042 6.19734C19.7422 6.13479 19.6686 6.08516 19.5876 6.0513C19.5065 6.01743 19.4196 6 19.3319 6C19.2441 6 19.1572 6.01743 19.0762 6.0513C18.9951 6.08516 18.9215 6.13479 18.8596 6.19734Z" fill="white" />
            </svg>
          </div>
          <div class="item__text">Научитесь применять проф. инструменты ретуши для создания идеальных кадров</div>
        </li>
        <li class="list__item">
          <div class="item__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="12" fill="#6EA349" />
              <path d="M18.8596 6.19734L9.6477 15.4631C9.58577 15.5256 9.51217 15.5752 9.43112 15.6091C9.35007 15.643 9.26317 15.6604 9.17541 15.6604C9.08765 15.6604 9.00075 15.643 8.9197 15.6091C8.83866 15.5752 8.76505 15.5256 8.70312 15.4631L5.14076 11.8763C5.07883 11.8137 5.00522 11.7641 4.92418 11.7302C4.84313 11.6964 4.75623 11.6789 4.66847 11.6789C4.58071 11.6789 4.49381 11.6964 4.41276 11.7302C4.33171 11.7641 4.25811 11.8137 4.19618 11.8763C4.134 11.9386 4.08466 12.0126 4.05099 12.0941C4.01733 12.1757 4 12.2631 4 12.3513C4 12.4396 4.01733 12.527 4.05099 12.6086C4.08466 12.6901 4.134 12.7641 4.19618 12.8264L7.75987 16.4106C8.1358 16.788 8.64526 17 9.17641 17C9.70757 17 10.217 16.788 10.593 16.4106L19.8042 7.14684C19.8662 7.08455 19.9155 7.01056 19.9491 6.92909C19.9827 6.84763 20 6.76029 20 6.67209C20 6.58389 19.9827 6.49655 19.9491 6.41509C19.9155 6.33362 19.8662 6.25963 19.8042 6.19734C19.7422 6.13479 19.6686 6.08516 19.5876 6.0513C19.5065 6.01743 19.4196 6 19.3319 6C19.2441 6 19.1572 6.01743 19.0762 6.0513C18.9951 6.08516 18.9215 6.13479 18.8596 6.19734Z" fill="white" />
            </svg>
          </div>
          <div class="item__text">Поймете, как влияет навык обработки на заработок фотографа</div>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="callback" style="background-image: url('<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/callbackBg.png');">
  <div class="container">
    <div class="callback__wrapper">
      <div class="callback__content">
        <h2 class="callback__title">Встречаемся <span>12 декабря в 19:00 по Москве</span></h2>
        <div class="callback__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/callback.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/minicourse/cvetretush/callback.png" alt="">
          </picture>
        </div>
      </div>
      <div class="callback__form">
      <script id="835e5da94d50d3857f5e231070a6cd4d2bea175c" src="https://lk.senseischool.ru/pl/lite/widget/script?id=724356&rand=12"></script>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>