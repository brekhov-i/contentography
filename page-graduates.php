<?php get_header(); ?>

<section class="heroSection">
    <div class="container">
        <div class="heroSection__wrapper">
            <div class="heroSection__textBlock">
                <h1 class="main-title heroSection__title">Выпускники <strong>Contentography school</strong></h1>
                <p class="heroSection__text"><strong>Мы гордимся нашими учениками, которых у нас уже больше 3000.</strong> <br>
                    Здесь мы собрали их работы и контактные данные — вы можете связаться с ними, чтобы заказать съемку, спросить отзыв про наше обучение или создать совместный творческий проект.</p>
            </div>
            <div class="heroSection__image">
                <picture>
                    <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/graduates/heroSectionImg--mobile.webp" type="image/webp">
                    <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/graduates/heroSectionImg--mobile.png">
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/graduates/heroSectionImg.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pages/graduates/heroSectionImg.png" alt="">
                </picture>
            </div>
        </div>
    </div>
</section>

<div class="vipuskniky">
    <div class="container">
        <div class="vipuskniky__carts">
            <div id="app">
                <!-- Вставляется блок из JS -->
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>