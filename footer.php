<?php

use contentography\Inc\Getters;

$getPostClass = Getters::get_instance();
$courses = $getPostClass->get_posts_p(-1, 'viewCart', true);
$posts = $getPostClass->get_posts_post(6, 'view_cart_or_no', true, 'rand');

?>

<footer class="footer">
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__contactInfo">
        <div class="footer__logo">
          <?php echo get_custom_logo() ?>
        </div>
        <div class="footer__contacts">
          <a href="mailto:support@contentography.ru" class="footer__email">support@contentography.ru</a>
          <a href="tel:+79993531568" class="footer__phone">+7 999 353-15-68</a>
          <div class="footer__address">Россия, г. Москва, Б. Грузинская 63</div>
          <div class="footer__socLinks">
            <a href="#" class="socLink">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.3282 5.9944C11.3027 5.99446 10.2967 6.2738 9.41802 6.80244C8.53935 7.33108 7.82125 8.08905 7.34083 8.99497C6.8604 9.9009 6.63578 10.9206 6.69108 11.9445C6.74638 12.9684 7.07952 13.958 7.65473 14.8069L7.10306 16.9353L9.32123 16.4177C10.0618 16.8837 10.9005 17.1711 11.7712 17.2574C12.6419 17.3437 13.5207 17.2263 14.3383 16.9147C15.1559 16.6031 15.8899 16.1057 16.4823 15.4618C17.0747 14.8179 17.5093 14.0451 17.7518 13.2044C17.9943 12.3637 18.0381 11.4782 17.8797 10.6177C17.7213 9.75717 17.3651 8.94527 16.8391 8.24605C16.3131 7.54683 15.6318 6.97945 14.8489 6.58868C14.0661 6.19792 13.2031 5.99447 12.3282 5.9944ZM15.1041 14.7219C14.3145 15.0922 12.666 14.899 10.9292 13.4126C9.19242 11.9263 8.74692 10.3273 8.99067 9.49006C9.23442 8.65277 10.1921 8.49809 10.3727 8.53807C10.5534 8.57806 11.4568 10.0102 11.3337 10.1773C11.2106 10.3444 10.616 10.939 10.616 10.939C10.616 10.939 10.5909 11.5474 11.7074 12.5029C12.8239 13.4584 13.4212 13.3397 13.4212 13.3397C13.4212 13.3397 13.9168 12.66 14.0628 12.5129C14.2088 12.3657 15.7635 13.037 15.8309 13.2093C15.8983 13.3816 15.8934 14.3517 15.1039 14.7219H15.1041Z" />
                <path d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM12.3281 18.4665C11.2017 18.4681 10.0925 18.1897 9.10031 17.6564L5.47031 18.5625L6.38977 15.0094C5.64886 13.7042 5.35866 12.1912 5.56404 10.7045C5.76942 9.21779 6.45894 7.84017 7.52596 6.78472C8.59298 5.72928 9.97803 5.05481 11.4669 4.86565C12.9558 4.67649 14.4655 4.98317 15.7625 5.73826C17.0596 6.49335 18.0717 7.65477 18.6423 9.04289C19.2129 10.431 19.3103 11.9685 18.9193 13.4175C18.5283 14.8665 17.6708 16.1463 16.4794 17.059C15.2879 17.9716 13.829 18.4663 12.3281 18.4665Z" />
              </svg>
            </a>
            <a href="#" class="socLink">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM18.2371 7.59075L16.1058 17.7656C16.08 17.8887 16.0237 18.0033 15.9421 18.0989C15.8605 18.1946 15.7561 18.2681 15.6386 18.3129C15.5211 18.3577 15.3942 18.3722 15.2697 18.3551C15.1451 18.3381 15.0268 18.29 14.9257 18.2153L11.8255 15.9249L9.94734 17.6968C9.92276 17.72 9.8938 17.7381 9.86216 17.75C9.83051 17.7618 9.79682 17.7673 9.76305 17.766C9.72927 17.7647 9.69609 17.7567 9.66544 17.7425C9.63479 17.7282 9.60729 17.708 9.58453 17.683L9.54417 17.6387L9.87052 14.4805L15.7526 9.10622C15.7817 9.07969 15.7998 9.04321 15.8033 9.004C15.8068 8.96478 15.7955 8.92567 15.7716 8.89438C15.7477 8.86309 15.7129 8.8419 15.6742 8.83497C15.6354 8.82805 15.5955 8.8359 15.5622 8.85699L8.03977 13.6181L4.8 12.53C4.71386 12.5011 4.63878 12.4462 4.58506 12.3729C4.53135 12.2996 4.50163 12.2115 4.49999 12.1206C4.49835 12.0297 4.52486 11.9406 4.57588 11.8654C4.62691 11.7902 4.69996 11.7326 4.785 11.7006L17.4609 6.9255C17.5587 6.8887 17.6646 6.87885 17.7675 6.89697C17.8704 6.91509 17.9665 6.96052 18.0458 7.02851C18.1252 7.0965 18.1848 7.18455 18.2184 7.28345C18.2521 7.38236 18.2585 7.48849 18.2371 7.59075Z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="menuCol footer__courseMenu">
        <div class="menuCol-title courseMenu__title">Курсы</div>
        <?php if (!empty($courses) && is_array($courses)) { ?>
          <ul class="menuCol-list courseMenu__list">
            <?php foreach ($courses as $key => $course) { ?>
              <?php if ($key < 6) { ?>
                <li class="list__item">
                  <a href="<?php echo get_permalink($course->ID) ?>" class="item__link"><?php echo $course->post_title; ?></a>
                </li>
              <?php } else if ($key === 6) { ?>
                <li class="list__item">
                  <a href="<?php echo get_post_type_archive_link('p') ?>" class="item__link allView">
                    <strong>Смотреть все курсы</strong>
                    <svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32.7071 8.70711C33.0976 8.31658 33.0976 7.68342 32.7071 7.29289L26.3431 0.928932C25.9526 0.538408 25.3195 0.538408 24.9289 0.928932C24.5384 1.31946 24.5384 1.95262 24.9289 2.34315L30.5858 8L24.9289 13.6569C24.5384 14.0474 24.5384 14.6805 24.9289 15.0711C25.3195 15.4616 25.9526 15.4616 26.3431 15.0711L32.7071 8.70711ZM0 9H32V7H0V9Z" fill="#F57B51" />
                    </svg>
                  </a>
                </li>
              <?php } else {
                break;
              } ?>
            <?php } ?>
          </ul>
        <?php } else { ?>
          <p class="menuCol-text">Курсов нет</p>
        <?php } ?>
      </div>
      <div class="menuCol footer__studyFreeMenu">
        <div class="menuCol-title studyFreeMenu__title">Учиться бесплатно</div>
        <?php if (!empty($posts) && is_array($posts)) { ?>
          <ul class="menuCol-list studyFreeMenu__list">
            <?php foreach ($posts as $key => $post) { ?>
              <?php if ($key < 6) { ?>
                <li class="list__item">
                  <a href="<?php echo get_permalink($post->ID) ?>" class="item__link"><?php echo $post->post_title; ?></a>
                </li>
              <?php } else if ($key === 6) { ?>
                <li class="list__item">

                  <a href="<?php echo get_post_type_archive_link('post') ?>" class="item__link allView">
                    <strong>Смотреть все статьи</strong>
                    <svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M32.7071 8.70711C33.0976 8.31658 33.0976 7.68342 32.7071 7.29289L26.3431 0.928932C25.9526 0.538408 25.3195 0.538408 24.9289 0.928932C24.5384 1.31946 24.5384 1.95262 24.9289 2.34315L30.5858 8L24.9289 13.6569C24.5384 14.0474 24.5384 14.6805 24.9289 15.0711C25.3195 15.4616 25.9526 15.4616 26.3431 15.0711L32.7071 8.70711ZM0 9H32V7H0V9Z" fill="#F57B51" />
                    </svg>
                  </a>
                </li>
              <?php } else {
                break;
              } ?>
            <?php } ?>
          </ul>
        <?php } else { ?>
          <p class="menuCol-text">Постов нет</p>
        <?php } ?>
      </div>
      <div class="menuCol footer__aboutUsMenu">
        <div class="menuCol-title aboutUsMenu__title">О школе</div>
        <ul class="menuCol-list aboutUsMenu__list">
          <li class="list__item">
            <a href="#" class="item__link">Эксперты</a>
          </li>
        </ul>
      </div>
      <div class="footer__line"></div>
      <div class="footer__infoCompany">
        <p class="info">ИП Мирошник Ярослав Александрович <br>
          ИНН 771002248443</p>
      </div>
      <a href="#" class="footer__soglasy">Пользовательское соглашение</a>
      <a href="#" class="footer__policy">Политика конфиденциальности</a>
      <a href="#" class="footer__oferta">Оферта</a>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>