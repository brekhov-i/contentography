<?php

/**
 * 
 * File include create custom post type
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;

class CustomPostType
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        add_action('init', [$this, 'register_post_types']);
    }
    public function register_post_types()
    {
        register_post_type('p', [
            'label'  => null,
            'labels' => [
                'name'               => 'Курсы', // основное название для типа записи
                'singular_name'      => 'Курс', // название для одной записи этого типа
                'add_new'            => 'Добавить курс', // для добавления новой записи
                'add_new_item'       => 'Добавление курса', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование курса', // для редактирования типа записи
                'new_item'           => 'Новый курс', // текст новой записи
                'view_item'          => 'Смотреть курс', // для просмотра записи этого типа.
                'search_items'       => 'Искать курс', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Курсы', // название меню
            ],
            'description'         => '',
            'public'              => true,
            'publicly_queryable'  => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'show_in_rest'        => true,
            'rest_base'           => 'p',
            'menu_position'       => 5,
            'menu_icon'           => '',
            'hierarchical'        => false,
            'supports'            => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => "kursy",
            'rewrite'             => ['slug' => 'p', 'with_front' => false, 'pages' => false],
            'query_var'           => true,
            'can_export'          => true,
        ]);
        register_post_type('experts', [
            'label'  => null,
            'labels' => [
                'name'               => 'Эксперты', // основное название для типа записи
                'singular_name'      => 'Эксперт', // название для одной записи этого типа
                'add_new'            => 'Добавить эксперта', // для добавления новой записи
                'add_new_item'       => 'Добавление эксперта', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование эксперта', // для редактирования типа записи
                'new_item'           => 'Новый эксперт', // текст новой записи
                'view_item'          => 'Смотреть страницу эксперта', // для просмотра записи этого типа.
                'search_items'       => 'Искать эксперта', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Эксперты', // название меню
            ],
            'description'         => '',
            'public'              => true,
            'show_in_rest'        => true,
            'menu_position'       => 5,
            'hierarchical'        => false,
            'supports'            => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
        ]);

        register_taxonomy('categoryCourse', ['p'], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => __('Категории', "sensei-school"),
                'singular_name'     => __('Категория', "sensei-school"),
                'search_items'      => __('Поиск категории', "sensei-school"),
                'all_items'         => __('Все категории', "sensei-school"),
                'view_item '        => __('Посмотреть категории', "sensei-school"),
                'parent_item'       => '',
                'parent_item_colon' => '',
                'edit_item'         => __('Редактировать категорию', "sensei-school"),
                'update_item'       => __('Обновить', "sensei-school"),
                'add_new_item'      => __('Добавить новую категорию', "sensei-school"),
                'new_item_name'     => __('Новое название категории', "sensei-school"),
                'menu_name'         => __('Категории', "sensei-school"),
                'back_to_items'     => __('← Вернуться обратно', "sensei-school"),
            ],
            'description'           => 'Категории продуктов, которые распределяют их на курты и интенсивы', // описание таксономии
            'public'                => true,
            'rewrite'               => true,
            "hierarchical"          => true,
            'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            'show_in_rest'          => true,
            "show_admin_column"     => true
        ]);
        register_taxonomy('mark', ['p'], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => __('Метка', "sensei-school"),
                'singular_name'     => __('Метка', "sensei-school"),
                'search_items'      => __('Поиск метки', "sensei-school"),
                'all_items'         => __('Все метки', "sensei-school"),
                'view_item '        => __('Посмотреть метки', "sensei-school"),
                'parent_item'       => '',
                'parent_item_colon' => '',
                'edit_item'         => __('Редактировать метку', "sensei-school"),
                'update_item'       => __('Обновить', "sensei-school"),
                'add_new_item'      => __('Добавить новую метку', "sensei-school"),
                'new_item_name'     => __('Новое название метки', "sensei-school"),
                'menu_name'         => __('Метки', "sensei-school"),
                'back_to_items'     => __('← Вернуться обратно', "sensei-school"),
            ],
            'description'           => 'Метки продуктов, которые распределяют их на курты и интенсивы', // описание таксономии
            'public'                => true,
            'rewrite'               => true,
            "hierarchical"          => true,
            'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            'show_in_rest'          => true,
            "show_admin_column"     => true
        ]);
        register_taxonomy('country', ['vypuskniky'], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => __('Страны', "sensei-school"),
                'singular_name'     => __('Страна', "sensei-school"),
                'search_items'      => __('Поиск страны', "sensei-school"),
                'all_items'         => __('Все страны', "sensei-school"),
                'view_item '        => __('Посмотреть страну', "sensei-school"),
                'parent_item'       => '',
                'parent_item_colon' => '',
                'edit_item'         => __('Редактировать страну', "sensei-school"),
                'update_item'       => __('Обновить', "sensei-school"),
                'add_new_item'      => __('Добавить новую страну', "sensei-school"),
                'new_item_name'     => __('Новое название страны', "sensei-school"),
                'menu_name'         => __('Страны', "sensei-school"),
                'back_to_items'     => __('← Вернуться обратно', "sensei-school"),
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            'show_in_menu'          => true, // показывать ли в меню адмнки
            'show_in_rest'          => true, // добавить в REST API. C WP 4.7
            'rest_base'             => null, // $post_type. C WP 4.7
            'menu_position'         => null,
            'menu_icon'             => null,
            'rewrite'               => true,
            "hierarchical"          => true,
            'supports'              => ['title', 'editor', 'thumbnail', 'page-attributes'],
            'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            'show_in_rest'          => true,
            "show_admin_column"     => true,
            "rest_base"             => 'country'
        ]);
        register_taxonomy('city', ['vypuskniky'], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => __('Города', "sensei-school"),
                'singular_name'     => __('Город', "sensei-school"),
                'search_items'      => __('Поиск города', "sensei-school"),
                'all_items'         => __('Все города', "sensei-school"),
                'view_item '        => __('Посмотреть город', "sensei-school"),
                'parent_item'       => '',
                'parent_item_colon' => '',
                'edit_item'         => __('Редактировать город', "sensei-school"),
                'update_item'       => __('Обновить', "sensei-school"),
                'add_new_item'      => __('Добавить новый город', "sensei-school"),
                'new_item_name'     => __('Новое название города', "sensei-school"),
                'menu_name'         => __('Города', "sensei-school"),
                'back_to_items'     => __('← Вернуться обратно', "sensei-school"),
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            'rewrite'               => true,
            "hierarchical"          => true,
            'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            "show_admin_column"     => true,
            'show_in_rest' => true, // add support for Gutenberg editor
            'publicly_queryable' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true,
            'rewrite' => true,
            'query_var' => true,

        ]);
    }
}
