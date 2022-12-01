<?php

$images = get_field('fotografii');
$urlPage = get_field('urlPage')

?>

<section class="studentPortfolio">
    <h2 class="section-title studentPortfolio__title">Работы учеников</h2>
    <p class="studentPortfolio__text">Уровень обучения и экспертов лучше всего отражают работы студентов.</p>
    <?php if (!empty($images) && is_array($images)) : ?>
        <div class="studentPortfolio__images">
            <?php foreach ($images as $image) : ?>
                <div class="img">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <a href="<?php echo $urlPage; ?>" class="btn studentPortfolio__link">
        Смотреть выпускников
        <svg width="33" height="15" viewBox="0 0 33 15" xmlns="http://www.w3.org/2000/svg">
            <path d="M32.7071 8.20711C33.0976 7.81658 33.0976 7.18342 32.7071 6.79289L26.3431 0.428932C25.9526 0.0384078 25.3195 0.0384078 24.9289 0.428932C24.5384 0.819457 24.5384 1.45262 24.9289 1.84315L30.5858 7.5L24.9289 13.1569C24.5384 13.5474 24.5384 14.1805 24.9289 14.5711C25.3195 14.9616 25.9526 14.9616 26.3431 14.5711L32.7071 8.20711ZM0 8.5H32V6.5H0V8.5Z" />
        </svg>
    </a>
</section>