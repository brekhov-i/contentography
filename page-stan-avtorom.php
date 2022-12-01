<?php

/**
 * 
 * Шаблон страницы "Как стать автором"
 * 
 * @package contentography
 */
?>

<?php get_header(); ?>

<div class="modalWindow contactFormAvtor fix-block modalWindow--withoutPadding">
  <div class="modalWindow-wrapper callbackModal__wrapper" style="padding: 0;">
    <button class="modalWindow-close">
      <img src="<? echo get_template_directory_uri() ?>/public/img/icons/close-black.svg" alt="" />
    </button>
    <div class="modalWindow-form callbackModal__form" style="padding: 0;">
      <script id="a61062083d71e84017767ac839fe7d8139de4849" src="https://lk.senseischool.ru/pl/lite/widget/script?id=690450"></script>
    </div>
  </div>
</div>

<?php get_template_part('templates/pages/stanAvtorom/heroSection') ?>

<?php get_template_part('templates/pages/stanAvtorom/whatDo') ?>

<?php get_template_part('templates/pages/stanAvtorom/whyWithUs') ?>

<?php get_template_part('templates/pages/stanAvtorom/example') ?>

<?php get_template_part('templates/pages/stanAvtorom/howWrite') ?>

<?php get_footer(); ?>