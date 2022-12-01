<?php

$reviews = get_field('otzyvy');

?>

<section class="reviews">
    <div class="reviews__content">
        <h2 class="section-title reviews__title">Отзывы о нашей фотошколе <span>Contentography school</span></h2>
        <p class="reviews__text">Мы собираем и обрабатываем все отзывы о курсах, экспертах, процессе обучения и школе в целом. Отзывы помогают нам становиться лучше, и создавать продукты под ваши цели. <strong>Читайте отзывы от наших студентов:</strong></p>
        <div class="reviews__sliderBtns">
            <button class="slider-btn btn__prev">
                <svg width="40" height="18" viewBox="0 0 40 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 9L15 17.6603L15 0.339746L0 9ZM40 7.5L13.5 7.5V10.5L40 10.5V7.5Z" fill="white" />
                </svg>
            </button>
            <button class="slider-btn btn__next">
                <svg width="40" height="18" viewBox="0 0 40 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40 9L25 0.339746L25 17.6603L40 9ZM0 10.5L26.5 10.5V7.5L0 7.5L0 10.5Z" fill="white" />
                </svg>
            </button>
        </div>
    </div>

    <?php if (!empty($reviews) && is_array($reviews)) : ?>
        <div class="swiper reviewsSlider reviews__slider">
            <div class="swiper-wrapper">
                <?php foreach ($reviews as $review) : ?>
                    <div class="swiper-slide slide">
                        <div class="slide__text">
                            <?php echo $review['tekst_otzyva']; ?>
                        </div>
                        <div class="slide__author">
                            <div class="author__avatar">
                                <img src=" <?php echo $review['izobrazhenie_avtora']['url']; ?>" alt=" <?php echo $review['izobrazhenie_avtora']['alt']; ?>">
                            </div>
                            <div class="author__title"> <?php echo $review['imya']; ?></div>
                            <div class="author__text"> <?php echo $review['okonchennyj_kurs']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="reviewsSlider__viewMore">
                Все отзывы
                <svg width="41" height="16" viewBox="0 0 41 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40.7071 8.70711C41.0976 8.31658 41.0976 7.68342 40.7071 7.29289L34.3431 0.928932C33.9526 0.538408 33.3195 0.538408 32.9289 0.928932C32.5384 1.31946 32.5384 1.95262 32.9289 2.34315L38.5858 8L32.9289 13.6569C32.5384 14.0474 32.5384 14.6805 32.9289 15.0711C33.3195 15.4616 33.9526 15.4616 34.3431 15.0711L40.7071 8.70711ZM0 9H40V7H0V9Z" fill="#F57B51" />
                </svg>
            </button>
        </div>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</section>