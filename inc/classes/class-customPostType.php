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
            'supports'            => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
        ]);
    }
}
