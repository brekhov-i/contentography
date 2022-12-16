<?php
date_default_timezone_set('Europe/Moscow');

$dateStart = date("");
$date2 = DateTime::createFromFormat('d.m.Y', "18.11.2022"); // Преобразовываем дату в необходимый формат
$date1 = new DateTime(); // Сейчас
$dayDiff = (int) $date2->diff($date1)->format('%a');
$dateEnd = date('Y-m-d H:i:s', strtotime("2022-11-21 00:00:00"));
$dayAdd = "+" . (string) 3 * intdiv($dayDiff, 3) . "day";

$viewDate = date('Y-m-d H:i:s', strtotime($dayAdd, strtotime($dateEnd)));
$viewDate = strftime("%d.%m", strtotime($viewDate));

?>

<section class="tariff" id="tariff">
    <div class="container">
        <div class="tariff__wrapper">
            <h2 class="section-title tariff__title">Забирайте по лучшей цене до <?php echo $viewDate; ?></h2>
            <div class="tariff__content">
                <div class="tariff__cart">
                    <div class="cart__title">МК Баева «Практика работы со сложным светом»</div>
                    <ul class="cart__list">
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">Старт сразу после покупки</div>
                        </li>
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">Доступ на 6 месяцев</div>
                        </li>
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">11 приемов работы с одной, двумя, тремя вспышками и флагами</div>
                        </li>
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">Отраженный свет</div>
                        </li>
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">Жесткий свет</div>
                        </li>
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">Цветной свет</div>
                        </li>
                        <li class="list__item">
                            <div class="item__dot"></div>
                            <div class="item__text">Отбор и ретушь</div>
                        </li>
                    </ul>
                    <div class="cart__frame">
                        <div class="frame__icon">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="14" fill="#F57B51" />
                                <path d="M10.048 14.528C11.968 14.528 13.28 13.216 13.28 11.296C13.28 9.392 11.968 8.08 10.048 8.08C8.128 8.08 6.816 9.392 6.816 11.296C6.816 13.216 8.128 14.528 10.048 14.528ZM9.2 20H10.832L19.072 8.24H17.456L9.2 20ZM10.048 13.168C8.944 13.168 8.176 12.416 8.176 11.296C8.176 10.192 8.944 9.44 10.048 9.44C11.168 9.44 11.904 10.192 11.904 11.296C11.904 12.416 11.168 13.168 10.048 13.168ZM18.224 20.16C20.144 20.16 21.456 18.848 21.456 16.928C21.456 15.024 20.144 13.696 18.224 13.696C16.32 13.696 15.008 15.024 15.008 16.928C15.008 18.848 16.32 20.16 18.224 20.16ZM18.224 18.784C17.136 18.784 16.368 18.032 16.368 16.928C16.368 15.824 17.136 15.056 18.224 15.056C19.344 15.056 20.096 15.824 20.096 16.928C20.096 18.032 19.344 18.784 18.224 18.784Z" fill="white" />
                            </svg>
                        </div>
                        <div class="frame__text">Скидка на большой курс по свету <a href="https://contentography.com/p/slozhnyj-svet/">“Сложный свет”</a></div>
                    </div>
                    <div class="cart__priceBlock">
                        <div class="cart__installment">
                            <div class="installment__title">рассрочка на 12 месяцев</div>
                            <div class="installment__number">От 492₽/месяц</div>
                        </div>
                        <div class="cart__path">
                            <div class="path__title">4 платежа по</div>
                            <div class="path__number">1 475₽</div>
                        </div>
                        <div class="cart__prices">
                            <div class="cart__newPrice">5 900₽</div>
                            <div class="cart__oldPrice">15 000₽</div>
                        </div>
                    </div>
                    <button class="btn cart__btn btnOpenModalWindow" data-window="tariffModal">Купить</button>
                </div>
                <div class="tariff__image">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/courses/mk_baev_ss/tariffImg.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/courses/mk_baev_ss/tariffImg.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>