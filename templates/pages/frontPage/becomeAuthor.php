<?php

$urlPage = get_field('urlPageAuthor');

?>


<section class="becomeAuthor">
    <div class="container">
        <div class="becomeAuthor__wrapper">
            <div class="becomeAuthor__image">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/frontPage/becomeAuthor.png" alt="">
                </picture>
            </div>
            <div class="becomeAuthor__textBlock">
                <h2 class="section-title becomeAuthor__title">Станьте нашим автором</h2>
                <p class="becomeAuthor__text">Если вы интересно пишете, снимаете уникальные видео/рилсы/тиктоки о фотографии и уверены, что можете принести пользу - становитесь автором Contentography.</p>
                <a href="<?php echo $urlPage; ?>" class="btn becomeAuthor__btn">Узнать подробнее</a>
            </div>
        </div>
    </div>
</section>