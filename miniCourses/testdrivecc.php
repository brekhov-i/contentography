<?php
/*
Template Name: Цветной, рваный
Template Post Type: post
*/
?>

<?php get_header('blog'); ?>

<div class="modalWindow windowRegister fix-block">
  <div class="modalWindow-wrapper callbackModal__wrapper">
    <button class="modalWindow-close">
      <img src="<? echo get_template_directory_uri() ?>/assets/img/icons/close-black.svg" alt="" />
    </button>
    <div class="modalWindow-form callbackModal__form">
      <script id="5b7239e35e4eef27ea2aa33ce0a034fd22c4a32f" src="https://lk.senseischool.ru/pl/lite/widget/script?id=688737"></script>
    </div>
  </div>
</div>

<section class="heroSection">
  <div class="container">
    <div class="heroSection__wrapper">
      <div class="heroSection__header">
        <?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
          <div class="heroSection__breadcrumbs">
            <?php rank_math_the_breadcrumbs(); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="heroSection__content">
        <div class="heroSection__frame"><span>Бесплатный тест-драйв</span> флагманского курса Макса Баева по сложному свету</div>
        <h1 class="main-title heroSection__title">Цветной, рваный, геометричный</h1>
        <div class="heroSection__text">Три избранных урока с трендовыми техниками света, применимыми в любом жанре</div>
        <ul class="heroSection__list">
          <li class="list__item">
            <div class="item__dot"></div>
            <div class="item__text">Бесплатное обучение на базе курса-бестселлера</div>
          </li>
          <li class="list__item">
            <div class="item__dot"></div>
            <div class="item__text">Домашние задания, которые сделают портфолио привлекательнее</div>
          </li>
          <li class="list__item">
            <div class="item__dot"></div>
            <div class="item__text">Возможность попасть на разбор к экспертам</div>
          </li>
        </ul>
        <button class="btn heroSection__btn btnOpenModalWindow" data-window="windowRegister">Зарегистрироваться на тест-драйв</button>
      </div>
      <div class="heroSection__image">
        <picture>
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/heroSectionImg-mobile.webp" type="image/webp">
          <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/heroSectionImg-mobile.png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/heroSectionImg.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/heroSectionImg.png" alt="">
        </picture>
        <div class="image__block">Старт 28 июня</div>
      </div>
    </div>
  </div>
</section>

<section class="blockWithVideo">
  <div class="container">
    <div class="blockWithVideo__wrapper">
      <h2 class="section-title blockWithVideo__title">
        Тест-драйв для&nbsp;фотографов <span>любого&nbsp;уровня</span>
      </h2>
      <div class="blockWithVideo__content">
        <div class="video blockWithVideo__video" data-videoSrc="<?php echo get_template_directory_uri(); ?>/assets/video/testdrivecc.mp4">
          <div class="video__poster">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/trailer.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/trailer.png">
            </picture>
            <button class="video__play">
              <svg width="30" height="32" viewbox="0 0 30 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.2624 12.5493C29.898 14.0947 29.898 17.9049 27.2624 19.4504L6.9465 31.363C4.27992 32.9266 0.923195 31.0037 0.923195 27.9125L0.923195 4.08716C0.923195 0.995967 4.27992 -0.92699 6.9465 0.636614L27.2624 12.5493Z"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="blockWithVideo__textBlock">
          <div class="blockWithVideo__subtitle">Первый большой тест-драйв для фотографов, которые хотят освоить трендовые техники от топового гуру света Макса Баева.</div>
          <div class="blockWithVideo__text">Макс Баев - арт и фэшн-фотограф, сотрудничающий с крупными брендами и мировым глянцем более 11 лет. Его курс по сложному свету - настоящий флагман школы Contentography, курс прошли более 3 000 студентов, увеличив чек за работы и приток клиентов. И прямо сейчас у вас есть возможность бесплатно пройти избранные уроки из курса!</div>
        </div>
      </div>
    </div>
</section>

<section class="about">
  <div class="about__bg">
    <picture>
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/testdrivecc/about1-mobile.webp" type="image/webp">
      <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/testdrivecc/about1-mobile.png">
      <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/testdrivecc/about1.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/minicourse/testdrivecc/about1.png" alt="">
    </picture>
  </div>
  <div class="container">
    <div class="about__wrapper">
      <h2 class="section-title about__title">Распаковка тест&nbsp;-&nbsp;драйва:</h2>
      <div class="about__carts">
        <div class="carts__col">
          <div class="cart">
            <div class="cart__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/icons/rocket.svg" alt="">
            </div>
            <div class="cart__textBlock">
              <div class="cart__title">Можно не ждать начала, а действовать сразу</div>
              <div class="cart__text">Старт 28 июня, а нулевой урок открывается сразу после регистрации</div>
            </div>
          </div>
          <div class="cart">
            <div class="cart__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/icons/settings.svg" alt="">
            </div>
            <div class="cart__textBlock">
              <div class="cart__title">Можно не ждать начала, а действовать сразу</div>
              <div class="cart__text">Старт 28 июня, а нулевой урок открывается сразу после регистрации</div>
            </div>
          </div>
        </div>
        <div class="carts__col">
          <div class="cart">
            <div class="cart__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/icons/people.svg" alt="">
            </div>
            <div class="cart__textBlock">
              <div class="cart__title">Фототусовка внутри</div>
              <div class="cart__text">После регистрации вы попадете в закрытый чат участников тест-драйва</div>
            </div>
          </div>
          <div class="cart">
            <div class="cart__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/icons/diamond.svg" alt="">
            </div>
            <div class="cart__textBlock">
              <div class="cart__title">Цветной, рваный, геометричный: что еще?</div>
              <div class="cart__text">В тест-драйве доступен любимый урок студентов по световым эффектам</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="interesting">
  <div class="container">
    <div class="interesting__wrapper">
      <div class="interesting__textBlock">
        <h2 class="section-title interesting__title">Интересно?</h2>
        <div class="interesting__text">
          <strong>Тогда регистрируйся сейчас и расскажи друзьям,</strong> которым может быть интересно разнообразить свои съемки на фотоаппарат или смартфон.
        </div>
        <button class="btn interesting__btn btnOpenModalWindow" data-window="windowRegister">Зарегистрироваться на тест-драйв</button>
      </div>
      <div class="interesting__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/interesting.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/minicourse/testdrivecc/interesting.png" alt="">
        </picture>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>