<?php

use CONTENTOGRAPHY_THEME\Inc\Getters;

$gettersClass = Getters::get_instance();
$getTime1 = $gettersClass->compareDate('2022-12-19 00:00:00');
?>

<div class="baner intensivCRD intensivCRD--new">
    <div class="intensivCRD__bg">
        <picture>
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-bg--mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-bg--mobile.png">
            <source srcset="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-bg.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-bg.png" alt="">
        </picture>
    </div>
    <div class="intensivCRD__textBlock">

        <div class="intensivCRD__date">Интенсив <strong>19-21 декабря</strong></div>
        <div class="intensivCRD__title">«Цвет, ретушь, деньги»</div>
        <?php if ($getTime1) : ?>
            <div class="intensivCRD__text">🚀 Стартуем завтра</div>
        <?php elseif (!$getTime1) : ?>
            <div class="intensivCRD__text"> 🚀 Старт сегодня. Не пропусти! 🚀</div>
        <?php endif; ?>
    </div>
    <a href="https://contentography.com/mini-kursy/marafon_crd/" class="btn intensivCRD__btn">Зарегистрироваться бесплатно</a>
    <div class="intensivCRD__image">
        <picture>
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-img--mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-img--mobile.png">
            <source srcset="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/public/img/banners/intensivCRD/intensivCRD-img.png" alt="">
        </picture>
    </div>
</div>