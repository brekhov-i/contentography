<section class="heroSection">
    <div class="container">
        <div class="heroSection__wrapper">
            <div class="heroSection__content">
                <?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
                    <div class="heroSection__breadcrumbs">
                        <?php rank_math_the_breadcrumbs(); ?>
                    </div>
                <?php endif; ?>
                <div class="heroSection__frame">Мастер-класс Макса Баева</div>
                <h1 class="main-title heroSection__title">Студийный свет за&#160;2 часа</h1>
                <p class="heroSection__text">Научитесь профессионально владеть тремя видами света за два часа: отраженный, жесткий, цветной</p>
                <ul class="heroSection__list">
                    <li class="list__item">
                        <div class="item__dot"></div>
                        <div class="item__text">Какая техника пригодится для работ со светом в студии</div>
                    </li>
                    <li class="list__item">
                        <div class="item__dot"></div>
                        <div class="item__text">Съемка в ноутбук и ошибки работы с циклорамой</div>
                    </li>
                    <li class="list__item">
                        <div class="item__dot"></div>
                        <div class="item__text">11 приемов работы с несколькими вспышками и флагами</div>
                    </li>
                </ul>
                <button class="btn heroSection__btn linkScroll" href="#tariff">Участвую!</button>
            </div>
            <div class="heroSection__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/courses/mk_baev_ss/heroSectionImg.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/mk_baev_ss/heroSectionImg.png" alt="">
                </picture>
            </div>
        </div>
    </div>
</section>