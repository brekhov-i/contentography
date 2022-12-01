<?php

/**
 * 
 * Шаблон архивной страницы постов "Курсы"
 * 
 * @package contentography
 */
?>

<?php get_header(); ?>

<div class="wrapper-courses">

    <?php get_template_part('/templates/pages/archive-p/heroSection') ?>

    <?php get_template_part('/templates/modules/courses') ?>

    <?php get_template_part('/templates/pages/archive-p/callbackHelp') ?>

</div>

<?php get_footer(); ?>