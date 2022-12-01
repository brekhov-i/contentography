<?php
/*
Template Name: Эксперты
Template Post Type: page
*/

?>

<?php

require_once('inc/classes/petrovich-php/Petrovich.php');

use contentography\Inc\Getters;

$getPostClass = Getters::get_instance();

$authors = $getPostClass->get_all_author();

?>

<?php get_header(); ?>

<section class="section heroSection" style=" background:  center center / cover #171717 no-repeat url('<?php echo get_template_directory_uri(); ?>/assets/img/pages/experts/heroSectionImg.png');">
    <div class="container">
        <div class="heroSection__wrapper">
            <h1 class="heroSection__title">Эксперты школы contentography <span>топовые фотографы-практики</span></h1>
            <p class="heroSection__text">божественно снимают, любят обучать людей</p>
        </div>
    </div>
</section>

<?php if (!empty($authors) && is_array($authors)) : ?>
    <section class="experts">
        <?php foreach ($authors as $author) : ?>
            <?php
            $petrovich = new Petrovich(Petrovich::GENDER_MALE);

            $title = get_the_title($author->ID);
            $name = $petrovich->firstname(explode(" ", $title)[0], Petrovich::CASE_GENITIVE);
            $imgExpert = get_the_post_thumbnail($author->ID);
            $courses = $getPostClass->get_course_by_author($author->ID);
            $portfolio = get_field('portfolio', $author->ID);
            $authorImgCourse = get_field('img_for_cource', $author->ID);
            ?>
            <div class="cartExpert">
                <h2 class="section-title cartExpert__title"><?php echo $title; ?></h2>
                <div class="cartExpert__content">
                    <div class="content__image">
                        <?php echo $imgExpert; ?>"
                    </div>
                    <div class="content__textBlock">
                        <?php echo get_the_content(null, null, $author->ID); ?>
                    </div>
                    <?php if (!empty($courses) && is_array($courses) && count($courses) === 1) : ?>
                        <div class="content__course">
                            <div class="course__title"><?php echo get_the_title($courses[0]->ID); ?></div>
                            <div class="course__desc"><?php the_field('opisanie_kursa', $courses[0]->ID); ?></div>
                            <a href="<?php echo get_the_permalink($courses[0]->ID); ?>" class="course__link">
                                Посмотреть курс
                                <svg width="37" height="16" viewBox="0 0 37 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M35.8883 8.70711C36.2788 8.31658 36.2788 7.68342 35.8883 7.29289L29.5244 0.928932C29.1338 0.538408 28.5007 0.538408 28.1101 0.928932C27.7196 1.31946 27.7196 1.95262 28.1101 2.34315L33.767 8L28.1101 13.6569C27.7196 14.0474 27.7196 14.6805 28.1101 15.0711C28.5007 15.4616 29.1338 15.4616 29.5244 15.0711L35.8883 8.70711ZM0.980469 9H35.1812V7H0.980469V9Z" fill="#F57B51" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (!empty($courses) && is_array($courses) && count($courses) > 1) : ?>
                    <div class="cartExpert__courses">
                        <h3 class="section-title courses__title">Автор и эксперт курсов</h3>
                        <div class="courses__carts">
                            <?php foreach ($courses as $course) : ?>
                                <?php
                                $courseTitle = get_the_title($course->ID);
                                $courseCartImg = get_field('cartBgImg', $course->ID);
                                $courseCountPeople = (int) get_field('chelovek_na_kurse', $course->ID);
                                $courseDesc = get_field('opisanie_kursa', $course->ID);
                                ?>
                                <div class="courseCart">
                                    <div class="author courseCart__author">
                                        <div class="author__img">
                                            <img src="<?php echo $authorImgCourse['url'] ?>" alt="<?php echo $authorImgCourse['alt'] ?>">
                                        </div>
                                        <div class="author__content">
                                            <div class="author__name"><?php echo get_the_title($author->ID); ?></div>
                                            <div class="author__text">Эксперт курса</div>
                                        </div>
                                    </div>
                                    <a href="<?php echo get_the_permalink($course->ID) ?>" class="courseCart__image">
                                        <img src="<?php echo $courseCartImg['url']; ?>" alt="<?php echo $courseCartImg['alt']; ?>">
                                    </a>
                                    <div class="courseCart__countPeople">
                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.26705 5.62531C3.26705 3.42874 4.93831 1.64807 6.99992 1.64807C9.06153 1.64807 10.7328 3.42874 10.7328 5.62531C10.7328 7.82186 9.06156 9.60252 6.99998 9.60256C4.93837 9.60256 3.26705 7.82188 3.26705 5.62531ZM9.46151 10.016C10.8619 9.12283 11.7993 7.49072 11.7993 5.62531C11.7993 2.80115 9.65056 0.511719 6.99992 0.511719C4.34928 0.511719 2.20051 2.80115 2.20051 5.62531C2.20051 7.49073 3.13799 9.12285 4.53836 10.016C4.00524 10.1997 3.48953 10.4432 3.00024 10.7441C1.78408 11.492 0.774051 12.5676 0.0716101 13.8631C-0.0757212 14.1348 0.0115741 14.4823 0.26659 14.6393C0.521605 14.7963 0.847772 14.7033 0.995103 14.4315C1.60391 13.3088 2.47932 12.3765 3.53338 11.7283C4.58742 11.0801 5.78293 10.7389 6.99992 10.7389C8.21694 10.7389 9.41263 11.0802 10.4667 11.7284C11.5207 12.3766 12.3961 13.3089 13.0049 14.4317C13.1522 14.7034 13.4784 14.7964 13.7334 14.6394C13.9884 14.4825 14.0757 14.1349 13.9284 13.8632C13.226 12.5678 12.216 11.4921 10.9998 10.7442C10.5105 10.4433 9.9947 10.1997 9.46151 10.016Z" fill="white" />
                                        </svg>
                                        <strong><?php echo $courseCountPeople; ?>+</strong>
                                        учеников
                                    </div>
                                    <div class="courseCart__content">
                                        <div class="courseCart__title"><?php echo $courseTitle; ?></div>
                                        <div class="courseCart__desc"><?php echo $courseDesc; ?></div>
                                        <a href="<?php echo get_the_permalink($course->ID) ?>" class="courseCart__link">
                                            Посмотреть курс
                                            <svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7071 8.70711C33.0976 8.31658 33.0976 7.68342 32.7071 7.29289L26.3431 0.928932C25.9526 0.538408 25.3195 0.538408 24.9289 0.928932C24.5384 1.31946 24.5384 1.95262 24.9289 2.34315L30.5858 8L24.9289 13.6569C24.5384 14.0474 24.5384 14.6805 24.9289 15.0711C25.3195 15.4616 25.9526 15.4616 26.3431 15.0711L32.7071 8.70711ZM0 9H32V7H0V9Z" fill="#F57B51" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($portfolio) && is_array($portfolio)) : ?>
                    <div class="cartExpert__portfolio">
                        <h3 class="section-title portfolio__title">Работы <?php echo $name; ?></h3>
                        <div class="portfolio__images">
                            <?php foreach ($portfolio as $imageInfo) : ?>
                                <?php
                                $image = $imageInfo['image'];
                                $countRow = $imageInfo['count_row'];
                                $countCol = $imageInfo['count_col'];
                                ?>
                                <div class="images__cart" style="grid-column: span <?php echo $countCol; ?>; grid-row: span <?php echo $countRow; ?>;">
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>