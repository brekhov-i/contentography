<?php
$authorId = get_field("author_course");
$authorContent = get_field("opisanie_dlya_kursov", $authorId);
$authorWorks = get_field("work_author_for_course", $authorId);
if (!is_array($authorWorks) && count($authorWorks) === 0) {
  $authorWorks = get_field("portfolio", $authorId);
}
?>
<section class="expert" id="expert">
  <h2 class="section-title expert__title">Эксперт курса</h2>
  <div class="expert__cart">
    <div class="cart__border"></div>
    <div class="cart__content">
      <div class="cart__image">
        <?php echo get_the_post_thumbnail($authorId); ?>
      </div>
      <div class="cart__textBlock">
        <div class="cart__title"><?php echo get_the_title($authorId); ?></div>
        <?php echo $authorContent; ?>
      </div>
    </div>
  </div>
  <?php if (!empty($authorWorks) && is_array($authorWorks)) : ?>
    <h2 class="section-title expert__title">Работы Лены</h2>
    <div class="openAllCarts expert__gallery">
      <div class="openAllCarts__wrapper gallery__carts" data-colCartView="9" data-colCartViewMobile="10" data-inRowCountMobile="2" data-inRowCount="4" data-cartMarginMobile="4" data-cartMargin="8">
        <?php foreach ($authorWorks as $work) : ?>
          <div class="cart" style="grid-column: span <?php echo $work['count_col']; ?>; grid-row: span <?php echo $work['count_row']; ?>">
            <img src="<?php echo $work['image']['url'] ?>" alt="<?php echo $work['image']['alt'] ?>">
          </div>
        <?php endforeach; ?>
      </div>
      <button class="gallery__btnMore openAllCarts__btn" data-textOpen="Свернуть все работы">
        <span>Показать все работы</span>
        <svg width="70" height="12" viewBox="0 0 70 12" xmlns="http://www.w3.org/2000/svg">
          <path d="M70 6L60 0.226497V11.7735L70 6ZM0 7H61V5H0V7Z" />
        </svg>
      </button>
    </div>
  <?php endif; ?>
</section>