<?php
$categories = get_categories(array(
  'orderby'      => 'name', // сортировка по названию
  'order'        => 'ASC', // сортировка от меньшего к большему
  'hide_empty'   => 1, // скрыть пустые рубрики
  'taxonomy'     => 'category', // название таксономии
));

?>

<?php if (!empty($categories) && is_array($categories)) : ?>
  <div class="categories">
    <div class="container">
      <div class="categories__wrapper">
        <ul class="categories__list">
          <li class="list__item <? if (is_home()) echo 'item--active' ?>">
            <a class="item__link" href="<?php echo get_page_link(get_option('page_for_posts')); ?>">Все</a>
          </li>
          <?php foreach ($categories as $cat) :
            if (is_home()) {
              $id = get_option('page_for_posts');
            } else {
              $id = get_the_ID();
            }
          ?>
            <?php if (is_category()) : ?>
              <li class="list__item <? if (is_category($cat->cat_ID)) echo 'item--active';  ?>">
                <a class="item__link" href="<?php echo get_category_link($cat->cat_ID) ?>"><?php echo $cat->name; ?></a>
              </li>
            <?php else : ?>
              <li class="list__item <? if (is_category($cat->cat_ID)  || in_category($cat->cat_ID, $id)) echo 'item--active';  ?>">
                <a class="item__link" href="<?php echo get_category_link($cat->cat_ID) ?>"><?php echo $cat->name; ?></a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

<?php endif; ?>