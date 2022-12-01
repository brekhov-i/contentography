<?php

/**
 * 
 * Файл страницы, на которой выводятся посты
 * 
 * @package contentography
 */
?>

<?php

use contentography\Inc\Getters;

$getClass = Getters::get_instance();

$posts = $getClass->get_posts_post(-1, 'view_cart_or_no')

?>

<?php get_header('blog'); ?>

<section class="posts">
    <div class="container">
        <div class="posts__wrapper">
            <h1 class="main-title posts__title">Бесплатные курсы, статьи, вебинары для фотографов</h1>
            <div class="posts__carts">
                <?php if (!empty($posts) && is_array($posts)) : ?>
                    <?php foreach ($posts as $post) : ?>
                        <?php
                        $postBG = get_field('background_color_preview', $post->ID);
                        $postImg = get_field('image_preview', $post->ID);
                        $tags = get_the_category($post->ID);
                        $cardType = get_field("vid_kartochki", $post->ID);
                        ?>
                        <?php if (!empty($cardType) && $cardType === 'big') : ?>
                            <div class="cartPost cartPost--big">
                                <?php if (current_user_can('edit_posts')) : ?>
                                    <div class="cartPost__linkEditWrapper">
                                        <a href="<?php echo get_edit_post_link($post->ID); ?>" target="_blank" class="cartPost__linkEdit">Редактировать пост</a>
                                    </div>
                                <?php endif; ?>
                                <a href="<?php echo get_permalink($post->ID); ?>" class="cartPost__content" <?php if (!empty($postBG)) : echo 'style="background-color:' . $postBG . '"';
                                                                                                            endif; ?>>
                                    <div class="cartPost__info">
                                        <?php if (!empty($tags) && is_array($tags)) : ?>
                                            <div class="cartPost__tags">
                                                <?php foreach ($tags as $tag) : ?>
                                                    <div class="tag">
                                                        <?php echo $tag->name; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="cartPost__view">
                                            <svg width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8806 5.454C15.2952 4.174 12.9999 0 7.99992 0C2.99991 0 0.704581 4.174 0.119248 5.454C0.040673 5.62553 0 5.81199 0 6.00067C0 6.18934 0.040673 6.3758 0.119248 6.54733C0.704581 7.826 2.99991 12 7.99992 12C12.9999 12 15.2952 7.826 15.8806 6.546C15.959 6.37466 15.9996 6.18843 15.9996 6C15.9996 5.81157 15.959 5.62534 15.8806 5.454ZM7.99992 10.6667C3.79525 10.6667 1.83325 7.08933 1.33325 6.00733C1.83325 4.91067 3.79525 1.33333 7.99992 1.33333C12.1946 1.33333 14.1572 4.89533 14.6666 6C14.1572 7.10467 12.1946 10.6667 7.99992 10.6667Z" />
                                                <path d="M7.99984 2.66699C7.34057 2.66699 6.6961 2.86249 6.14794 3.22876C5.59977 3.59503 5.17253 4.11563 4.92024 4.72471C4.66795 5.3338 4.60194 6.00402 4.73055 6.65063C4.85917 7.29723 5.17664 7.89117 5.64282 8.35735C6.10899 8.82352 6.70293 9.14099 7.34954 9.26961C7.99614 9.39823 8.66636 9.33222 9.27545 9.07993C9.88454 8.82763 10.4051 8.40039 10.7714 7.85223C11.1377 7.30406 11.3332 6.6596 11.3332 6.00033C11.3321 5.1166 10.9806 4.26936 10.3557 3.64447C9.7308 3.01958 8.88357 2.66805 7.99984 2.66699ZM7.99984 8.00033C7.60428 8.00033 7.2176 7.88303 6.8887 7.66327C6.5598 7.4435 6.30345 7.13115 6.15208 6.76569C6.0007 6.40024 5.9611 5.99811 6.03827 5.61015C6.11544 5.22218 6.30592 4.86582 6.58562 4.58611C6.86533 4.30641 7.2217 4.11593 7.60966 4.03875C7.99762 3.96158 8.39975 4.00119 8.76521 4.15257C9.13066 4.30394 9.44302 4.56029 9.66278 4.88919C9.88254 5.21808 9.99984 5.60476 9.99984 6.00033C9.99984 6.53076 9.78913 7.03947 9.41405 7.41454C9.03898 7.78961 8.53027 8.00033 7.99984 8.00033Z" />
                                            </svg>
                                            <?php echo do_shortcode('[post-views]') ?>
                                        </div>
                                    </div>
                                    <?php if (!empty($postImg) && is_array($postImg)) : ?>
                                        <div class="cartPost__image">
                                            <img src="<?php echo $postImg['url']; ?>" alt="<?php echo $postImg['alt']; ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="cartPost__title" style="color: <?php echo $getClass->contrast_color($postBG); ?>">
                                        <?php echo get_the_title($post->ID); ?>
                                    </div>
                                </a>
                            </div>
                        <?php else : ?>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="cartPost">
                                <div class="cartPost__image" <?php if (!empty($postBG)) : echo 'style="background-color:' . $postBG . '"';
                                                                endif; ?>>
                                    <?php if (!empty($postImg) && is_array($postImg)) : ?>
                                        <img src="<?php echo $postImg['url']; ?>" alt="<?php echo $postImg['alt']; ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="cartPost__info">
                                    <?php if (!empty($tags) && is_array($tags)) : ?>
                                        <div class="cartPost__tags">
                                            <?php foreach ($tags as $tag) : ?>
                                                <div class="tag">
                                                    <?php echo $tag->name; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="cartPost__view">
                                        <svg width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.8806 5.454C15.2952 4.174 12.9999 0 7.99992 0C2.99991 0 0.704581 4.174 0.119248 5.454C0.040673 5.62553 0 5.81199 0 6.00067C0 6.18934 0.040673 6.3758 0.119248 6.54733C0.704581 7.826 2.99991 12 7.99992 12C12.9999 12 15.2952 7.826 15.8806 6.546C15.959 6.37466 15.9996 6.18843 15.9996 6C15.9996 5.81157 15.959 5.62534 15.8806 5.454ZM7.99992 10.6667C3.79525 10.6667 1.83325 7.08933 1.33325 6.00733C1.83325 4.91067 3.79525 1.33333 7.99992 1.33333C12.1946 1.33333 14.1572 4.89533 14.6666 6C14.1572 7.10467 12.1946 10.6667 7.99992 10.6667Z" />
                                            <path d="M7.99984 2.66699C7.34057 2.66699 6.6961 2.86249 6.14794 3.22876C5.59977 3.59503 5.17253 4.11563 4.92024 4.72471C4.66795 5.3338 4.60194 6.00402 4.73055 6.65063C4.85917 7.29723 5.17664 7.89117 5.64282 8.35735C6.10899 8.82352 6.70293 9.14099 7.34954 9.26961C7.99614 9.39823 8.66636 9.33222 9.27545 9.07993C9.88454 8.82763 10.4051 8.40039 10.7714 7.85223C11.1377 7.30406 11.3332 6.6596 11.3332 6.00033C11.3321 5.1166 10.9806 4.26936 10.3557 3.64447C9.7308 3.01958 8.88357 2.66805 7.99984 2.66699ZM7.99984 8.00033C7.60428 8.00033 7.2176 7.88303 6.8887 7.66327C6.5598 7.4435 6.30345 7.13115 6.15208 6.76569C6.0007 6.40024 5.9611 5.99811 6.03827 5.61015C6.11544 5.22218 6.30592 4.86582 6.58562 4.58611C6.86533 4.30641 7.2217 4.11593 7.60966 4.03875C7.99762 3.96158 8.39975 4.00119 8.76521 4.15257C9.13066 4.30394 9.44302 4.56029 9.66278 4.88919C9.88254 5.21808 9.99984 5.60476 9.99984 6.00033C9.99984 6.53076 9.78913 7.03947 9.41405 7.41454C9.03898 7.78961 8.53027 8.00033 7.99984 8.00033Z" />
                                        </svg>
                                        <?php echo do_shortcode('[post-views]') ?>
                                    </div>
                                </div>
                                <div class="cartPost__title">
                                    <?php echo get_the_title($post->ID); ?>
                                </div>
                            </a>
                        <?php endif; ?>
                    <? endforeach; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>