<?php

/**
 * 
 * Шаблон страницы "Вопросы о школе"
 * 
 * @package contentography
 */
?>

<?php
$questionsRepeater = get_field('questions_repeater');
?>

<?php get_header(); ?>

<section class="faq">
  <div class="container">
    <div class="faq__wrapper">
      <h1 class="faq__title">Вопросы о школе</h1>
      <p class="faq__text">Почему стоит учиться именно у нас, что будет после курса, что делать, если нет возможности оплатить сразу — скорее всего, ответ на ваш вопрос есть в одном из пунктов ниже.</p>
      <div class="faq__accordion">
        <ul class="accordion__list">
          <?php if (!empty($questionsRepeater) && is_array($questionsRepeater)) { ?>
            <?php foreach ($questionsRepeater as $quest) { ?>
              <li class="accordion">
                <button class="accordion__control" aria-expanded="false">
                  <span class="accordion__title"><?php echo $quest["question"]; ?>
                  </span>
                  <div class="accordion__icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.7989 18.1984V0H18.1985V18.1984H20.0001H21.7989Z" fill="#F57B51" />
                      <path d="M18.1985 21.7988V40H21.7989V21.7988H20.0001H18.1985Z" fill="#F57B51" />
                      <path d="M18.1984 18.1982H0V21.7987H18.1984V19.9998V18.1982Z" fill="#F57B51" />
                      <path d="M40 18.1982H21.7988V19.9998V21.7987H40V18.1982Z" fill="#F57B51" />
                    </svg>
                  </div>
                </button>
                <div class="accordion__content" aria-hidden="true">
                  <?php echo $quest["answer"]; ?>
                </div>
              </li>
            <?php } ?>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>