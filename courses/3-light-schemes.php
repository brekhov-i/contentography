<?php
/*
Template Name: Инструкция 3 схемы света в студии для фотографов
Template Post Type: p
*/
?>

<?php get_header(); ?>

<div class="modalWindow callbackWindow fix-block modalWindow--withoutPadding">
    <div class="modalWindow-wrapper callbackModal__wrapper">
        <button class="modalWindow-close">
            <img src="<? echo get_template_directory_uri() ?>/public/img/icons/close-black.svg" alt="" />
        </button>
        <div class="modalWindow-form callbackModal__form">
            <!-- <script id="043515631ad43ec059a9ee6026ded3529a591c62" src="https://lk.senseischool.ru/pl/lite/widget/script?id=690104"></script> -->
        </div>
    </div>
</div>

<section class="heroSection">
    <div class="container">
        <div class="heroSection__wrapper">
            <div class="heroSection__content">
                <?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
                    <div class="heroSection__breadcrumbs">
                        <?php rank_math_the_breadcrumbs(); ?>
                    </div>
                <?php endif; ?>
                <div class="heroSection__frame">Гайд-инструкция</div>
                <h1 class="main-title heroSection__title">3 <span>нетипичных</span> схемы света</h1>
                <div class="heroSection__text">от 3 фотографов разного уровня</div>
                <button class="btn heroSection__btn btnOpenModalWindow" data-window="callbackWindow">Забрать бесплатно</button>
            </div>
            <div class="heroSection__image">
                <picture>
                    <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/courses/3-light-schemes/heroSectionImg--mobile.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses/3-light-schemes/heroSectionImg.png" alt="">
                </picture>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>