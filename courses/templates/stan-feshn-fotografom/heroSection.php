<section class="heroSection">
    <div class="container">
        <div class="heroSection__wrapper">
            <div class="heroSection__content">
                <?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
                    <div class="heroSection__breadcrumbs">
                        <?php rank_math_the_breadcrumbs(); ?>
                    </div>
                <?php endif; ?>
                <div class="heroSection__frame">Интенсив Макса Баева</div>
                <h1 class="main-title heroSection__title">Как построить личный бренд фэшн-фотографа</h1>
                <p class="heroSection__text">Как войти в востребованный жанр, избежав распространенных ошибок и подводных камней</p>
                <ul class="heroSection__list">
                    <li class="list__item">
                        <div class="item__dot"></div>
                        <div class="item__text">Покорить индустрию и снимать для брендов в любой стране</div>
                    </li>
                    <li class="list__item">
                        <div class="item__dot"></div>
                        <div class="item__text">Начать работать только с теми, с кем давно хотелось</div>
                    </li>
                    <li class="list__item">
                        <div class="item__dot"></div>
                        <div class="item__text">Полное погружение в фэшн-фотографию за 3 дня</div>
                    </li>
                </ul>
                <button class="btn heroSection__btn linkScroll" href="#tariff">Участвовать за 1500 вместо <del>5990</del></button>
            </div>
            <div class="heroSection__image">
                <div class="image__frame">28-30 ноября</div>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/heroSectionImg.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/heroSectionImg.png" alt="">
                </picture>
            </div>
        </div>
    </div>
</section>