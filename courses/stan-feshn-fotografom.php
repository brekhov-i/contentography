<?php
/*
Template Name: Онлайн-интенсив «Перестань снимать знакомых и стань фешн-фотографом»
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

<?php get_template_part('courses/templates/stan-feshn-fotografom/heroSection') ?>
<?php get_template_part('courses/templates/stan-feshn-fotografom/forWhom') ?>
<?php get_template_part('courses/templates/stan-feshn-fotografom/courseThemes') ?>
<?php get_template_part('courses/templates/stan-feshn-fotografom/tariff') ?>
<?php get_template_part('courses/templates/stan-feshn-fotografom/author') ?>
<?php get_template_part('templates/modules/callbackHelp') ?>

<?php get_footer(); ?>