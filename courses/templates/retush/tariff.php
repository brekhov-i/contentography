<?php

use contentography\Inc\Getters;

$gettersClass = Getters::get_instance();
$view = $gettersClass->compareDate("15-12-2022 00:00:00");
if ($view) {
  $priceNew = "25 000";
} else {
  $priceNew = "19 990";
}
$priceOld = "25 000";
$pricePath = $gettersClass->getPathPrice((int) str_replace(' ', '', $priceNew));
$priceInstallment = $gettersClass->getInstallmentPrice((int) str_replace(' ', '', $priceNew), 6);
if ($view) {
  $priceAuthorNew = "50 000";
} else {
  $priceAuthorNew = "29 990";
}
$priceAuthorOld = "50 000";
$priceAuthorPath = $gettersClass->getPathPrice((int) str_replace(' ', '', $priceAuthorNew));
$priceAuthorInstallment = $gettersClass->getInstallmentPrice((int) str_replace(' ', '', $priceAuthorNew), 6);
?>


<section class="tariff" id="tariff">
  <div class="container">
    <div class="tariff__wrapper">
      <h2 class="section-title tariff__title">Тариф</h2>
      <div class="tariff__content">
        <div class="tariff__cart">
          <div class="cart__title">С куратором</div>
          <ul class="cart__list cart__list--withIcon">
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M8.268 17.753C9.104 18.152 10.054 18.342 11.118 18.342C12.201 18.342 13.17 18.152 14.006 17.734C14.842 17.335 15.507 16.765 15.982 16.043C16.457 15.321 16.704 14.466 16.704 13.516C16.704 12.68 16.514 11.92 16.134 11.255C15.754 10.59 15.222 10.077 14.557 9.697C13.873 9.336 13.113 9.146 12.277 9.146C11.821 9.146 11.403 9.222 11.023 9.336L14.614 4.472H11.118L7.033 10.115C6.083 11.407 5.627 12.585 5.627 13.687C5.627 14.599 5.855 15.397 6.33 16.1C6.786 16.803 7.432 17.354 8.268 17.753ZM12.885 15.169C12.448 15.587 11.897 15.815 11.213 15.815C10.491 15.815 9.921 15.606 9.465 15.188C9.009 14.77 8.8 14.2 8.8 13.497C8.8 12.851 9.009 12.3 9.465 11.882C9.902 11.464 10.472 11.255 11.175 11.255C11.859 11.255 12.41 11.464 12.866 11.882C13.303 12.3 13.531 12.832 13.531 13.497C13.531 14.181 13.303 14.751 12.885 15.169Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">Доступ <strong>6 месяцев</strong> с возможностью продления</div>
            </li>
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M19.0714 14.5709C18.9719 14.5709 18.8738 14.5478 18.7847 14.5034L17.499 13.8605C17.3464 13.7843 17.2303 13.6506 17.1763 13.4888C17.1223 13.327 17.1348 13.1504 17.211 12.9978C17.2872 12.8452 17.4209 12.7291 17.5827 12.6751C17.7445 12.6211 17.9211 12.6336 18.0737 12.7098L19.3594 13.3527C19.4892 13.4173 19.5933 13.524 19.6548 13.6553C19.7163 13.7866 19.7316 13.9348 19.6983 14.0759C19.6649 14.217 19.5848 14.3427 19.471 14.4326C19.3572 14.5224 19.2164 14.5712 19.0714 14.5709ZM18.0731 8.72087L19.3588 8.07801C19.5114 8.0018 19.6274 7.86809 19.6815 7.7063C19.7355 7.54451 19.723 7.36789 19.6468 7.2153C19.5706 7.06271 19.4369 6.94664 19.2751 6.89263C19.1133 6.83861 18.9367 6.85109 18.7841 6.9273L17.4983 7.57016C17.3458 7.64637 17.2297 7.78008 17.1757 7.94187C17.1217 8.10366 17.1341 8.28028 17.2103 8.43287C17.2866 8.58546 17.4203 8.70153 17.5821 8.75554C17.7438 8.80955 17.9205 8.79708 18.0731 8.72087ZM19.7143 10.7137C19.7143 10.5432 19.6465 10.3797 19.526 10.2592C19.4054 10.1386 19.2419 10.0709 19.0714 10.0709H17.7857C17.6152 10.0709 17.4517 10.1386 17.3311 10.2592C17.2106 10.3797 17.1428 10.5432 17.1428 10.7137C17.1428 10.8842 17.2106 11.0477 17.3311 11.1683C17.4517 11.2889 17.6152 11.3566 17.7857 11.3566H19.0714C19.2419 11.3566 19.4054 11.2889 19.526 11.1683C19.6465 11.0477 19.7143 10.8842 19.7143 10.7137ZM15.8571 16.4994V4.92801C15.8571 4.75752 15.7894 4.594 15.6688 4.47344C15.5483 4.35289 15.3848 4.28516 15.2143 4.28516C15.0438 4.28516 14.8803 4.35289 14.7597 4.47344C14.6391 4.594 14.5714 4.75752 14.5714 4.92801C14.5714 6.8238 12.9109 7.49944 11.3571 7.49944H6.85713C6.17515 7.49944 5.5211 7.77036 5.03886 8.2526C4.55662 8.73483 4.28571 9.38889 4.28571 10.0709L4.28571 11.3566C4.28571 12.0386 4.55662 12.6926 5.03886 13.1749C5.5211 13.6571 6.17515 13.928 6.85713 13.928H11.3571C12.9109 13.928 14.5714 14.6037 14.5714 16.4994C14.5714 16.6699 14.6391 16.8335 14.7597 16.954C14.8803 17.0746 15.0438 17.1423 15.2143 17.1423C15.3848 17.1423 15.5483 17.0746 15.6688 16.954C15.7894 16.8335 15.8571 16.6699 15.8571 16.4994ZM9.54813 15.2137H6.85713C6.55783 15.2125 6.25968 15.1765 5.96871 15.1064L7.57585 18.6948C7.71082 18.9981 7.93082 19.2558 8.20922 19.4366C8.48761 19.6174 8.81245 19.7137 9.14442 19.7137C9.40854 19.7134 9.66837 19.6469 9.90024 19.5204C10.1321 19.394 10.3286 19.2115 10.4719 18.9896C10.6152 18.7677 10.7007 18.5135 10.7205 18.2501C10.7404 17.9868 10.6941 17.7226 10.5857 17.4817L9.54813 15.2137Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">6 модулей, 54 урока </div>
            </li>
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M10.9286 11.9994C13.0589 11.9994 14.7858 10.2725 14.7858 8.1423C14.7858 6.01206 13.0589 4.28516 10.9286 4.28516C8.79837 4.28516 7.07147 6.01206 7.07147 8.1423C7.07147 10.2725 8.79837 11.9994 10.9286 11.9994Z" fill="white" />
                  <path d="M10.9286 13.2852C9.3947 13.287 7.92417 13.8972 6.83955 14.9818C5.75492 16.0664 5.14475 17.537 5.14288 19.0709C5.14288 19.2413 5.21061 19.4049 5.33117 19.5254C5.45173 19.646 5.61524 19.7137 5.78574 19.7137H16.0715C16.2419 19.7137 16.4055 19.646 16.526 19.5254C16.6466 19.4049 16.7143 19.2413 16.7143 19.0709C16.7124 17.537 16.1023 16.0664 15.0176 14.9818C13.933 13.8972 12.4625 13.287 10.9286 13.2852Z" fill="white" />
                  <path d="M19.2856 9.34766C18.9279 9.36548 18.5918 9.52429 18.3508 9.78934C18.1098 10.0544 17.9837 10.4041 17.9999 10.7619C18.0162 10.4041 17.89 10.0544 17.6491 9.78934C17.4081 9.52429 17.072 9.36548 16.7142 9.34766C16.3565 9.36548 16.0203 9.52429 15.7794 9.78934C15.5384 10.0544 15.4123 10.4041 15.4285 10.7619C15.4285 11.8741 16.8788 13.1772 17.6014 13.757C17.7145 13.8476 17.855 13.8969 17.9999 13.8969C18.1448 13.8969 18.2854 13.8476 18.3985 13.757C19.1211 13.1784 20.5714 11.8741 20.5714 10.7619C20.5876 10.4041 20.4615 10.0544 20.2205 9.78934C19.9795 9.52429 19.6434 9.36548 19.2856 9.34766Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">10 домашек</div>
            </li>
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M13.1943 15.1429H13.7143C17.5103 15.1429 18.8572 13.1429 18.8572 11.4286C18.8566 10.964 18.6943 10.5141 18.3982 10.1562C18.1021 9.79819 17.6906 9.55449 17.2343 9.46688C17.3257 9.28222 17.4038 9.09125 17.468 8.89545C17.5678 8.56113 17.5874 8.20802 17.5252 7.86472C17.4631 7.52142 17.3209 7.19758 17.1103 6.91945C16.8978 6.63284 16.6208 6.40027 16.3018 6.24055C15.9827 6.08082 15.6305 5.99843 15.2737 6.00002H8.72631C8.36937 5.99863 8.01711 6.08129 7.69805 6.24131C7.37898 6.40134 7.10208 6.63424 6.88974 6.92117C6.67912 7.1993 6.53697 7.52313 6.47482 7.86643C6.41268 8.20973 6.43227 8.56285 6.53203 8.89717C6.59621 9.09297 6.67431 9.28393 6.76574 9.46859C6.30978 9.55614 5.89849 9.7996 5.60239 10.1572C5.3063 10.5148 5.14384 10.9643 5.14288 11.4286C5.14288 13.1429 6.48974 15.1429 10.2857 15.1429H10.8057C10.839 15.3164 10.8562 15.4925 10.8572 15.6692V17.4286C10.867 17.5812 10.8442 17.7342 10.7902 17.8773C10.7362 18.0204 10.6524 18.1504 10.5442 18.2585C10.4361 18.3667 10.3061 18.4505 10.163 18.5045C10.0199 18.5584 9.86694 18.5813 9.71431 18.5715H8.57146C8.4199 18.5715 8.27456 18.6317 8.16739 18.7388C8.06023 18.846 8.00003 18.9913 8.00003 19.1429C8.00003 19.2944 8.06023 19.4398 8.16739 19.5469C8.27456 19.6541 8.4199 19.7143 8.57146 19.7143H15.4286C15.5802 19.7143 15.7255 19.6541 15.8327 19.5469C15.9398 19.4398 16 19.2944 16 19.1429C16 18.9913 15.9398 18.846 15.8327 18.7388C15.7255 18.6317 15.5802 18.5715 15.4286 18.5715H14.2892C14.1363 18.5816 13.983 18.559 13.8396 18.5052C13.6962 18.4514 13.5658 18.3676 13.4574 18.2595C13.3489 18.1513 13.2647 18.0212 13.2105 17.878C13.1562 17.7347 13.1332 17.5815 13.1429 17.4286V15.6686C13.1438 15.4921 13.1611 15.3162 13.1943 15.1429ZM14.1292 13.5137C15.1083 12.6463 15.9553 11.6405 16.6435 10.528C16.7112 10.5561 16.7838 10.5708 16.8572 10.5715C17.0845 10.5715 17.3025 10.6618 17.4633 10.8225C17.624 10.9832 17.7143 11.2013 17.7143 11.4286C17.7143 12.672 16.6635 14 13.7143 14H13.6823C13.8112 13.8205 13.9612 13.6573 14.1292 13.5137ZM10.2857 14C7.3366 14 6.28574 12.672 6.28574 11.4286C6.28574 11.2013 6.37605 10.9832 6.53679 10.8225C6.69754 10.6618 6.91556 10.5715 7.14288 10.5715C7.21644 10.5709 7.2892 10.5562 7.35717 10.528C8.04528 11.6405 8.89233 12.6463 9.87145 13.5137C10.0392 13.6573 10.1891 13.8206 10.3177 14H10.2857Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">Более 60 часов практики</div>
            </li>
          </ul>
          <ul class="cart__list cart__list--withDot">
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Обратная связь по домашкам от профессиональных фотографов и ретушеров скринкастами, аудио и текстом</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Прямые эфиры с Леной Драгиной</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Сертификат о прохождении курса</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Комьюнити с общим чатом курса</div>
            </li>
          </ul>
          <div class="cart__priceBlock">
            <div class="cart__path">
              <div class="path__title">При оплате 4 долями</div>
              <div class="path__number">от <?php echo $pricePath; ?>₽</div>
            </div>
            <div class="cart__onetime">
              <div class="onetime__title">При единовременной оплате</div>
              <div class="onetime__new"><?php echo $priceNew; ?>₽</div>
              <?php if (!$view) : ?>
                <div class="onetime__old"><?php echo $priceOld; ?>₽</div>
              <?php endif; ?>
            </div>
            <div class="cart__installment ">
              <div class="installment__title">Рассрочка на 6 месяцев</div>
              <div class="installment__number">от <?php echo $priceInstallment; ?>₽/мес</div>
            </div>
          </div>
          <button class="btn cart__btn btnOpenModalWindow" data-window="tariffKuratorModal">Записаться</button>
        </div>
        <div class="tariff__cart">
          <div class="cart__title">С Леной Драгиной</div>
          <ul class="cart__list cart__list--withIcon">
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M6.118 8.622V18H9.034V5.184H6.532L3.004 7.83V10.782L5.92 8.622H6.118ZM11.0967 16.344V18H20.5827V15.732H15.3627V15.552L18.3327 12.978C19.1787 12.258 19.8087 11.574 20.2407 10.944C20.6547 10.332 20.8707 9.648 20.8707 8.928C20.8707 8.154 20.6547 7.452 20.2587 6.84C19.8447 6.228 19.2867 5.742 18.5667 5.382C17.8467 5.022 17.0367 4.842 16.1367 4.842C15.1647 4.842 14.2827 5.058 13.5087 5.49C12.7347 5.922 12.1407 6.534 11.7267 7.29C11.2947 8.046 11.0967 8.91 11.1327 9.846H13.7967C13.8147 9.072 14.0487 8.442 14.4807 7.974C14.9127 7.506 15.4527 7.254 16.1007 7.254C16.6587 7.254 17.1267 7.452 17.5227 7.812C17.9007 8.172 18.0987 8.64 18.0987 9.18C18.0987 9.486 18.0267 9.774 17.8827 10.026C17.7387 10.278 17.5767 10.512 17.3607 10.728C17.1447 10.944 16.8387 11.232 16.4247 11.61L11.0967 16.344Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">Доступ <strong>12 месяцев</strong> с возможностью продления</div>
            </li>
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M19.0714 14.5709C18.9719 14.5709 18.8738 14.5478 18.7847 14.5034L17.499 13.8605C17.3464 13.7843 17.2303 13.6506 17.1763 13.4888C17.1223 13.327 17.1348 13.1504 17.211 12.9978C17.2872 12.8452 17.4209 12.7291 17.5827 12.6751C17.7445 12.6211 17.9211 12.6336 18.0737 12.7098L19.3594 13.3527C19.4892 13.4173 19.5933 13.524 19.6548 13.6553C19.7163 13.7866 19.7316 13.9348 19.6983 14.0759C19.6649 14.217 19.5848 14.3427 19.471 14.4326C19.3572 14.5224 19.2164 14.5712 19.0714 14.5709ZM18.0731 8.72087L19.3588 8.07801C19.5114 8.0018 19.6274 7.86809 19.6815 7.7063C19.7355 7.54451 19.723 7.36789 19.6468 7.2153C19.5706 7.06271 19.4369 6.94664 19.2751 6.89263C19.1133 6.83861 18.9367 6.85109 18.7841 6.9273L17.4983 7.57016C17.3458 7.64637 17.2297 7.78008 17.1757 7.94187C17.1217 8.10366 17.1341 8.28028 17.2103 8.43287C17.2866 8.58546 17.4203 8.70153 17.5821 8.75554C17.7438 8.80955 17.9205 8.79708 18.0731 8.72087ZM19.7143 10.7137C19.7143 10.5432 19.6465 10.3797 19.526 10.2592C19.4054 10.1386 19.2419 10.0709 19.0714 10.0709H17.7857C17.6152 10.0709 17.4517 10.1386 17.3311 10.2592C17.2106 10.3797 17.1428 10.5432 17.1428 10.7137C17.1428 10.8842 17.2106 11.0477 17.3311 11.1683C17.4517 11.2889 17.6152 11.3566 17.7857 11.3566H19.0714C19.2419 11.3566 19.4054 11.2889 19.526 11.1683C19.6465 11.0477 19.7143 10.8842 19.7143 10.7137ZM15.8571 16.4994V4.92801C15.8571 4.75752 15.7894 4.594 15.6688 4.47344C15.5483 4.35289 15.3848 4.28516 15.2143 4.28516C15.0438 4.28516 14.8803 4.35289 14.7597 4.47344C14.6391 4.594 14.5714 4.75752 14.5714 4.92801C14.5714 6.8238 12.9109 7.49944 11.3571 7.49944H6.85713C6.17515 7.49944 5.5211 7.77036 5.03886 8.2526C4.55662 8.73483 4.28571 9.38889 4.28571 10.0709L4.28571 11.3566C4.28571 12.0386 4.55662 12.6926 5.03886 13.1749C5.5211 13.6571 6.17515 13.928 6.85713 13.928H11.3571C12.9109 13.928 14.5714 14.6037 14.5714 16.4994C14.5714 16.6699 14.6391 16.8335 14.7597 16.954C14.8803 17.0746 15.0438 17.1423 15.2143 17.1423C15.3848 17.1423 15.5483 17.0746 15.6688 16.954C15.7894 16.8335 15.8571 16.6699 15.8571 16.4994ZM9.54813 15.2137H6.85713C6.55783 15.2125 6.25968 15.1765 5.96871 15.1064L7.57585 18.6948C7.71082 18.9981 7.93082 19.2558 8.20922 19.4366C8.48761 19.6174 8.81245 19.7137 9.14442 19.7137C9.40854 19.7134 9.66837 19.6469 9.90024 19.5204C10.1321 19.394 10.3286 19.2115 10.4719 18.9896C10.6152 18.7677 10.7007 18.5135 10.7205 18.2501C10.7404 17.9868 10.6941 17.7226 10.5857 17.4817L9.54813 15.2137Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">6 модулей, 54 урока </div>
            </li>
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M10.9286 11.9994C13.0589 11.9994 14.7858 10.2725 14.7858 8.1423C14.7858 6.01206 13.0589 4.28516 10.9286 4.28516C8.79837 4.28516 7.07147 6.01206 7.07147 8.1423C7.07147 10.2725 8.79837 11.9994 10.9286 11.9994Z" fill="white" />
                  <path d="M10.9286 13.2852C9.3947 13.287 7.92417 13.8972 6.83955 14.9818C5.75492 16.0664 5.14475 17.537 5.14288 19.0709C5.14288 19.2413 5.21061 19.4049 5.33117 19.5254C5.45173 19.646 5.61524 19.7137 5.78574 19.7137H16.0715C16.2419 19.7137 16.4055 19.646 16.526 19.5254C16.6466 19.4049 16.7143 19.2413 16.7143 19.0709C16.7124 17.537 16.1023 16.0664 15.0176 14.9818C13.933 13.8972 12.4625 13.287 10.9286 13.2852Z" fill="white" />
                  <path d="M19.2856 9.34766C18.9279 9.36548 18.5918 9.52429 18.3508 9.78934C18.1098 10.0544 17.9837 10.4041 17.9999 10.7619C18.0162 10.4041 17.89 10.0544 17.6491 9.78934C17.4081 9.52429 17.072 9.36548 16.7142 9.34766C16.3565 9.36548 16.0203 9.52429 15.7794 9.78934C15.5384 10.0544 15.4123 10.4041 15.4285 10.7619C15.4285 11.8741 16.8788 13.1772 17.6014 13.757C17.7145 13.8476 17.855 13.8969 17.9999 13.8969C18.1448 13.8969 18.2854 13.8476 18.3985 13.757C19.1211 13.1784 20.5714 11.8741 20.5714 10.7619C20.5876 10.4041 20.4615 10.0544 20.2205 9.78934C19.9795 9.52429 19.6434 9.36548 19.2856 9.34766Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">10 домашек</div>
            </li>
            <li class="list__item">
              <div class="item__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12" cy="12" r="12" fill="#171717" />
                  <path d="M13.1943 15.1429H13.7143C17.5103 15.1429 18.8572 13.1429 18.8572 11.4286C18.8566 10.964 18.6943 10.5141 18.3982 10.1562C18.1021 9.79819 17.6906 9.55449 17.2343 9.46688C17.3257 9.28222 17.4038 9.09125 17.468 8.89545C17.5678 8.56113 17.5874 8.20802 17.5252 7.86472C17.4631 7.52142 17.3209 7.19758 17.1103 6.91945C16.8978 6.63284 16.6208 6.40027 16.3018 6.24055C15.9827 6.08082 15.6305 5.99843 15.2737 6.00002H8.72631C8.36937 5.99863 8.01711 6.08129 7.69805 6.24131C7.37898 6.40134 7.10208 6.63424 6.88974 6.92117C6.67912 7.1993 6.53697 7.52313 6.47482 7.86643C6.41268 8.20973 6.43227 8.56285 6.53203 8.89717C6.59621 9.09297 6.67431 9.28393 6.76574 9.46859C6.30978 9.55614 5.89849 9.7996 5.60239 10.1572C5.3063 10.5148 5.14384 10.9643 5.14288 11.4286C5.14288 13.1429 6.48974 15.1429 10.2857 15.1429H10.8057C10.839 15.3164 10.8562 15.4925 10.8572 15.6692V17.4286C10.867 17.5812 10.8442 17.7342 10.7902 17.8773C10.7362 18.0204 10.6524 18.1504 10.5442 18.2585C10.4361 18.3667 10.3061 18.4505 10.163 18.5045C10.0199 18.5584 9.86694 18.5813 9.71431 18.5715H8.57146C8.4199 18.5715 8.27456 18.6317 8.16739 18.7388C8.06023 18.846 8.00003 18.9913 8.00003 19.1429C8.00003 19.2944 8.06023 19.4398 8.16739 19.5469C8.27456 19.6541 8.4199 19.7143 8.57146 19.7143H15.4286C15.5802 19.7143 15.7255 19.6541 15.8327 19.5469C15.9398 19.4398 16 19.2944 16 19.1429C16 18.9913 15.9398 18.846 15.8327 18.7388C15.7255 18.6317 15.5802 18.5715 15.4286 18.5715H14.2892C14.1363 18.5816 13.983 18.559 13.8396 18.5052C13.6962 18.4514 13.5658 18.3676 13.4574 18.2595C13.3489 18.1513 13.2647 18.0212 13.2105 17.878C13.1562 17.7347 13.1332 17.5815 13.1429 17.4286V15.6686C13.1438 15.4921 13.1611 15.3162 13.1943 15.1429ZM14.1292 13.5137C15.1083 12.6463 15.9553 11.6405 16.6435 10.528C16.7112 10.5561 16.7838 10.5708 16.8572 10.5715C17.0845 10.5715 17.3025 10.6618 17.4633 10.8225C17.624 10.9832 17.7143 11.2013 17.7143 11.4286C17.7143 12.672 16.6635 14 13.7143 14H13.6823C13.8112 13.8205 13.9612 13.6573 14.1292 13.5137ZM10.2857 14C7.3366 14 6.28574 12.672 6.28574 11.4286C6.28574 11.2013 6.37605 10.9832 6.53679 10.8225C6.69754 10.6618 6.91556 10.5715 7.14288 10.5715C7.21644 10.5709 7.2892 10.5562 7.35717 10.528C8.04528 11.6405 8.89233 12.6463 9.87145 13.5137C10.0392 13.6573 10.1891 13.8206 10.3177 14H10.2857Z" fill="white" />
                </svg>
              </div>
              <div class="item__text">Более 60 часов практики</div>
            </li>
          </ul>
          <ul class="cart__list cart__list--withDot">
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Обратная связь по домашкам от Лены со скринкастами, аудио и текстом</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Прямые эфиры с Леной Драгиной</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Сертификат о прохождении курса</div>
            </li>
            <li class="list__item">
              <div class="item__dot"></div>
              <div class="item__text">Чат-комьюнити <strong>с Леной</strong></div>
            </li>
          </ul>
          <div class="cart__priceBlock">
            <div class="cart__path">
              <div class="path__title">При оплате 4 долями</div>
              <div class="path__number">от <?php echo $priceAuthorPath; ?>₽</div>
            </div>
            <div class="cart__onetime">
              <div class="onetime__title">При единовременной оплате</div>
              <div class="onetime__new"><?php echo $priceAuthorNew; ?>₽</div>
              <?php if (!$view) : ?>
                <div class="onetime__old"><?php echo $priceAuthorOld; ?>₽</div>
              <?php endif ?>
            </div>
            <div class="cart__installment ">
              <div class="installment__title">Рассрочка на 6 месяцев</div>
              <div class="installment__number">от <?php echo $priceAuthorInstallment; ?>₽/мес</div>
            </div>
          </div>
          <button class="btn cart__btn btnOpenModalWindow" data-window="tariffAuthorModal">Записаться</button>
        </div>
      </div>
    </div>
  </div>
</section>