<?php
/*
Template Name: Практика работы со сложным светом от Макса Баева
Template Post Type: p
*/
?>

<?php get_header(); ?>

<div class="modalWindow tariffModal fix-block modalWindow--withoutPadding">
    <div class="modalWindow-wrapper callbackModal__wrapper">
        <button class="modalWindow-close">
            <img src="<? echo get_template_directory_uri() ?>/public/img/icons/close-black.svg" alt="" />
        </button>
        <div class="modalWindow-form callbackModal__form">
            <script id="22cd5082d580afbd97a148887ed2fa8dd0943e15" src="https://lk.senseischool.ru/pl/lite/widget/script?id=784168"></script>
        </div>
    </div>
</div>

<?php get_template_part('courses/templates/mk_baev_ss/heroSection') ?>
<?php get_template_part('courses/templates/mk_baev_ss/forWhom') ?>
<?php get_template_part('courses/templates/mk_baev_ss/aboutCadr') ?>
<?php get_template_part('courses/templates/mk_baev_ss/courseThemes') ?>
<?php get_template_part('courses/templates/mk_baev_ss/finaly') ?>
<?php get_template_part('courses/templates/mk_baev_ss/tariff') ?>
<?php get_template_part('courses/templates/mk_baev_ss/faq') ?>

<?php get_footer(); ?>