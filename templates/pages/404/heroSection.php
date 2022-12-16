<section class="main">
    <picture class="main__bg">
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/404/img1-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/404/img1-mobile.png">
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/pages/404/img1.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/404/pages/img1.png" alt="">
    </picture>
    <div class="container">
        <div class="main__content">
            <h1 class="main-title main__title">404</h1>
            <div class="main__text">этой страницы не существует, как и нефотогеничных людей</div>
            <nav class="main__nav">
                <ul class="nav__list">
                    <li class="list__item"><a href="<?php echo get_home_url(null, '/') ?>" class="item__link">Главная</a></li>
                    <li class="list__item"><a href="<?php echo get_post_type_archive_link('p'); ?>" class="item__link">Курсы</a></li>
                    <li class="list__item"><a href="<?php echo get_home_url(null, '/uchitsya-besplatno'); ?>" class="item__link">Учиться бесплатно</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>