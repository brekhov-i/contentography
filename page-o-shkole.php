<?php

/**
 * 
 * Шаблон страницы "О школе"
 * 
 * @package contentography
 */
?>

<?php get_header(); ?>

<?php get_template_part('/templates/pages/aboutUs/school-mission') ?>

<?php get_template_part('/templates/pages/aboutUs/new-name') ?>

<?php get_template_part('/templates/pages/aboutUs/counter') ?>

<?php get_template_part('/templates/pages/aboutUs/reviews') ?>

<?php get_template_part('/templates/pages/aboutUs/worksStudents') ?>

<?php get_template_part('/templates/modules/courses') ?>

<?php get_template_part('/templates/pages/aboutUs/startLearning') ?>

<?php get_template_part('/templates/pages/bonus') ?>

<?php get_footer(); ?>