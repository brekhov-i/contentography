<?php

$authorID = get_field('author_course');
$authorPortfolio = get_field('portfolio', $authorID);

?>

<section class="author">
    <h2 class="section-title author__title">Автор интенсива</h2>
    <div class="author__cart">
        <div class="cart__content">
            <div class="cart__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/img1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/img1.png" alt="">
                </picture>
            </div>
            <div class="cart__textBlock">
                <div class="cart__title"><?php echo get_the_title($authorID); ?></div>
                <div class="cart__subtitle">Арт- и фэшн-фотограф, преподаватель курсов Contentography «Креативные съемки: от идеи до результата» и «Как сделать имя в мире фотографии».</div>
                <div class="cart__text">
                    Работает в направлениях творческий fashion, арт, рекламная фотография, ню.
                    <br><br>
                    Опыт — 11 лет. Снимал для крупных компаний и публиковался в мировых модных журналах
                </div>
                <div class="cart__logos">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img1.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img2.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img3.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img4.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img5.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img6.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img7.svg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/stan-feshn-fotografom/author/logos/img8.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <h2 class="section-title author__title">Работы Макса</h2>
    <div class="author__portfolio">
        <?php foreach ($authorPortfolio as $imageInfo) : ?>
            <?php
            $image = $imageInfo['image'];
            $countRow = $imageInfo['count_row'];
            $countCol = $imageInfo['count_col'];
            ?>
            <div class="portfolio__image" style="grid-column: span <?php echo $countCol; ?>; grid-row: span <?php echo $countRow; ?>;">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
            </div>

        <?php endforeach; ?>
    </div>
</section>