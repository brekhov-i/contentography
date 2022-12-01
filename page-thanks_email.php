<?php

/**
 * 
 * Шаблон страницы "Спасибо за подписку!"
 * 
 * @package contentography
 */
?>

<?php get_header(); ?>

<section class="heroSection">
    <div class="heroSection__wrapper">
        <div class="heroSection__textBlock">
            <h1 class="main-title heroSection__title">Спасибо <br> за подписку!</h1>
            <p class="heroSection__text">Обещаем, что наши рассылки будут нести пользу и только пользу 🧡</p>
        </div>
        <div class="heroSection__image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/heroSectionImage.svg" alt="">
        </div>
    </div>
    <button class="heroSection__btnScroll linkScroll" href="#aboutUs">
        <svg width="18" height="39" viewBox="0 0 18 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 39L17.6603 24L0.339747 24L9 39ZM7.5 6.55671e-08L7.5 25.5L10.5 25.5L10.5 -6.55671e-08L7.5 6.55671e-08Z" fill="#F57B51" />
        </svg>
    </button>
</section>

<section class="aboutUs" id="aboutUs">
    <div class="container">
        <div class="aboutUs__wrapper">
            <div class="aboutUs__frame">
                <div class="frame__content">
                    <div class="frame__text">
                        А чтобы <span>прямо сейчас</span> начать получать самый интересный контент из мира фотографии, подписывайся на наш ТГ-канал
                    </div>
                    <div class="frame__btns">
                        <button class="btn frame__btnTg btnOpenModalWindow" data-window="telegramModal">
                            <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.850701 9.15094L5.4488 10.8655L7.24126 16.6326C7.3192 17.0222 7.7868 17.1002 8.09854 16.8664L10.6703 14.7622C10.9041 14.5284 11.2938 14.5284 11.6055 14.7622L16.2036 18.1133C16.5154 18.3471 16.983 18.1912 17.0609 17.8016L20.49 1.43551C20.5679 1.04584 20.1782 0.656179 19.7886 0.812046L0.850701 8.1378C0.3831 8.29367 0.3831 8.99507 0.850701 9.15094ZM7.00747 10.0082L16.0477 4.47492C16.2036 4.39699 16.3595 4.63079 16.2036 4.70872L8.79993 11.6448C8.56613 11.8786 8.33233 12.1903 8.33233 12.58L8.09854 14.4504C8.09854 14.6842 7.70886 14.7622 7.63093 14.4504L6.69572 11.0213C6.46192 10.6317 6.6178 10.1641 7.00747 10.0082Z" fill="white" />
                            </svg>
                            Подписаться
                        </button>
                        <a class="frame__btn" href="https://contentography.com/uchitsya-besplatno/">Я уже с вами 🧡</a>
                    </div>
                </div>
                <div class="frame__image">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/frameImg.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/frameImg.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="aboutUs__carts">
                <h2 class="carts__title">Вот, например, что особенно нравится нашим подписчикам:</h2>
                <a href="https://t.me/photozone_contentography/2090" class="cart">
                    <div class="cart__title">🫰 Сколько стоит час вашего времени</div>
                    <div class="cart__image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img1.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img1.png" alt="">
                        </picture>
                    </div>
                </a>
                <a href="https://t.me/photozone_contentography/2133" class="cart">
                    <div class="cart__title">«Расчесываем» модель в Photoshop 💇‍♀️</div>
                    <div class="cart__image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img2.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img2.png" alt="">
                        </picture>
                    </div>
                </a>
                <a href="https://t.me/photozone_contentography/3009" class="cart">
                    <div class="cart__title">Как сделать портфолио фотографа</div>
                    <div class="cart__image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img3.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img3.png" alt="">
                        </picture>
                    </div>
                </a>
                <a href="https://t.me/photozone_contentography/2143" class="cart">
                    <div class="cart__title">📌 Памятка по работе в студии для новичков</div>
                    <div class="cart__image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img4.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img4.png" alt="">
                        </picture>
                    </div>
                </a>
                <a href="https://t.me/photozone_contentography/2180" class="cart">
                    <div class="cart__title">💴 Способы привлечения клиентов для фотографа</div>
                    <div class="cart__image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img5.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/thanksEmail/carts/img5.png" alt="">
                        </picture>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>