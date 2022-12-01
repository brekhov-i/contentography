<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<? bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>
</head>

<body>

  <header class="header">
    <div class="header__mobileBlock">
      <div class="header__logo"><? the_custom_logo(); ?></div>
      <button class="header__btnMenu">
        <div></div>
        <div></div>
        <div></div>
      </button>
    </div>
    <?php get_template_part('templates/components/nav'); ?>
  </header>

  <?php get_template_part('/templates/sections/slider-categories') ?>