<?php
$author = get_field('avtor', get_the_id());
?>

<section class="spikers">
  <div class="container">
    <div class="spikers__wrapper">
      <h2 class="section-title spikers__title">Преподаватели курса</h2>
      <div class="spikers__cart">
        <div class="cart__image">
          <?php echo get_the_post_thumbnail($author); ?>
        </div>
        <div class="cart__textBlock">
          <div class="cart__text">
            <span>Макс Баев</span> — один из лидеров мнений в индустрии, профессионал мирового масштаба, прошедший путь самостоятельного менеджмента и упаковавший его в курс, чтобы ты мог повторить его по прямой, не спотыкаясь и не останавливаясь.
          </div>
          <div class="cart__logos">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img1.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img2.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img3.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img4.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img5.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img6.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img7.svg" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/logos/img8.svg" alt="">
          </div>
        </div>
      </div>
      <div class="spikers__otherSpikers">
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img1--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img1--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img1.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Дмитрий Гущин</div>
            <div class="cart__text">Основатель и директор рекламного агентства FDM Agency</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img2--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img2--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img2.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Ксения Васильева</div>
            <div class="cart__text">Редактора журнала, экс-редактор Elle</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img3--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img3--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img3.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Светлана Седых</div>
            <div class="cart__text">Сет-дизайнер</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img4--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img4--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img4.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img4.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Марк Леманов</div>
            <div class="cart__text">Co-founder & CBDO mayak_studios</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img5--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img5--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img5.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img5.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Katrin White</div>
            <div class="cart__text">Аrt direction & Fashion Styling</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img6--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img6--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img6.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img6.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Ярослав Мирошник</div>
            <div class="cart__text">Основатель школы contentography, маркетолог</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img7--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img7--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img7.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img7.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Сергей Негинский</div>
            <div class="cart__text">Основатель школы effektodika, маркетолог</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img8--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img8--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img8.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img8.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Андрей Абрамов</div>
            <div class="cart__text">Редактор, контент-продюсер РБК Тренды</div>
          </div>
        </div>
        <div class="cart">
          <div class="cart__image">
            <picture>
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img9--mobile.webp" type="image/webp">
              <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img9--mobile.png">
              <source srcset="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img9.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri() ?>/public/img/courses/name/spikers/otherSpikers/img9.png" alt="">
            </picture>
          </div>
          <div class="cart__content">
            <div class="cart__title">Аркадий Хофманн</div>
            <div class="cart__text">Консультант по авторским правам</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>