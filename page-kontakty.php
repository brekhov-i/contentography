<?php

/**
 * 
 * Шаблон страницы "Контакты"
 * 
 * @package contentography
 */
?>

<?php
$telegram = get_field('url_telegram', 'option');
$phone = get_field('phone_number', 'option');
$emailForQuestion = get_field('email_for_questions', 'option');
$emailForResume = get_field('email_for_resume', 'option');
$emailForExperts = get_field('email_for_experts', 'option');
?>

<?php get_header(); ?>

<section class="contacts">
    <div class="main">
        <div class="main__title">
            <h1> Контакты школы <span>Contentography</span></h1>
        </div>
        <div class="main__blocks">
            <div class="left-block">
                <div class="left-block__title">
                    <span>По вопросам обучения, выбора программы или оплаты</span>
                </div>
                <div class="left-block__info">
                    <div class="telegram">
                        <a class="btnOpenModalWindow" data-window="telegramModal">Телеграм-бот
                            <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8113 1.41521C10.7663 1.14276 10.509 0.958387 10.2365 1.0034L5.79672 1.73698C5.52427 1.782 5.3399 2.03936 5.38491 2.3118C5.42993 2.58425 5.68729 2.76862 5.95973 2.72361L9.90623 2.07153L10.5583 6.01803C10.6033 6.29048 10.8607 6.47485 11.1331 6.42983C11.4056 6.38481 11.5899 6.12746 11.5449 5.85501L10.8113 1.41521ZM1.40646 14.7946L10.7245 1.7879L9.91157 1.20553L0.593541 14.2122L1.40646 14.7946Z" fill="#F57B51" />
                            </svg>
                        </a>
                    </div>
                    <div class="phone">
                        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        <span>(звонок бесплатный)</span>
                    </div>
                    <div class="email">
                        <a href="mailto:<?php echo $emailForQuestion; ?>"><?php echo $emailForQuestion; ?></a>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <div class="right-block__resume">
                    <span>Отправить резюме и попасть в команду</span>
                    <a href="mailto:<?php echo $emailForResume; ?>"><?php echo $emailForResume; ?></a>
                </div>
                <div class="right-block__expert">
                    <span>Если вы эксперт в фото или видео и хотите запустить курс с нами</span>
                    <a href="mailto:<?php echo $emailForExperts; ?>"><?php echo $emailForExperts; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>