<?php

/**
 * 
 * Main file in classes
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;

class contentography
{

    use Singleton;

    protected function __construct()
    {
        Admin::get_instance();
        Assets::get_instance();
        Blocks::get_instance();
        RestApi::get_instance();
        Getters::get_instance();
        CustomPostType::get_instance();
        Menus::get_instance();

        $this->set_hooks();
    }

    protected function set_hooks()
    {
        add_action('after_setup_theme', [$this, 'after_setup_theme_action']);
        add_action('admin_init', [$this, 'article_gamification_sync_acf_fields']);
        add_filter('acf/settings/save_json', [$this, 'set_acf_json_save_folder']);
        add_filter('acf/settings/load_json', [$this, 'add_acf_json_load_folder']);
    }


    final function set_acf_json_save_folder($path)
    {
        $path = get_stylesheet_directory() . '/inc/plugins/acf-json';
        return $path;
    }

    final function add_acf_json_load_folder($paths)
    {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/inc/plugins/acf-json';
        return $paths;
    }

    final function after_setup_theme_action()
    {
        // Поддержка миниатюр записи
        add_theme_support('post-thumbnails');

        // Добавим ссылки на RSS постов и комметариев в head часть
        add_theme_support('automatic-feed-links');

        // включаем меню в админке
        add_theme_support('menus');

        // создание метатега <title> через хук
        add_theme_support('title-tag');

        //Включает поддержку html5 разметки
        add_theme_support('html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'script',
            'style',
        ));

        //Добавляет возможность загрузить картинку логотипа в настройках темы в админке.
        add_theme_support('custom-logo', [
            'height'      => 190,
            'width'       => 190,
            'flex-width'  => true,
            'flex-height' => true,
            'header-text' => '',
            'unlink-homepage-logo' => true,
        ]);

        //Включает поддержку «Selective Refresh» (выборочное обновление) для виджетов
        add_theme_support('customize-selective-refresh-widgets');

        //Включает поддержку широкого выравнивания для картинок у блоков Гутенберга
        add_theme_support('align-wide');

        // файл стилей для редактора блоков
        add_theme_support('editor-styles'); // включает поддержку
        add_theme_support('dark-editor-style');
        add_editor_style();

        add_theme_support('wp-block-styles');

        add_theme_support('responsive-embeds');

        // Включение поддержки хлебных крошек
        add_theme_support('rank-math-breadcrumbs');

        add_filter('rank_math/frontend/breadcrumb/args', function ($args) {
            $args = array(
                'delimiter'   => '&nbsp;/&nbsp;',
                'wrap_before' => '<nav class="rank-math-breadcrumb breadcrumbs"><span class="breadcrumbs__seporator">' . esc_html("<") . '</span>',
                'wrap_after'  => '</nav>',
                'before'      => '',
                'after'       => '',
            );
            return $args;
        });

        add_filter('rank_math/frontend/breadcrumb/html', function ($html, $crumbs, $class) {

            if (get_post_type(get_the_ID()) === "post") {
                $html = '<nav class="rank-math-breadcrumb breadcrumbs"><span class="separator"> / </span><a href="https://contentography.com/uchitsya-besplatno/" class="breadcrumbs__link">Учиться бесплатно</a><span class="separator"> / </span><p class="breadcrumbs__thisPage">' . get_the_title() . '</p></nav>';
            } elseif (get_post_type(get_the_ID()) === 'p') {
                $html = '<nav class="rank-math-breadcrumb breadcrumbs"><span class="separator"> / </span><a href="https://contentography.com/kursy/" class="breadcrumbs__link">Курсы</a><span class="separator"> / </span><p class="breadcrumbs__thisPage">' . get_the_title() . '</p></nav>';
            } else {
                $html = str_replace(
                    '<a href="' . get_post_type_archive_link(get_post_type(get_the_ID())) . '">',
                    '<a href="' . get_post_type_archive_link(get_post_type(get_the_ID())) . '" class="breadcrumbs__link">',
                    $html
                );
                $html = str_replace(
                    '<span class="last">' . get_the_title() . '</span>',
                    '<span class="breadcrumbs__thisPage">' . get_the_title() . '</span>',
                    $html
                );
            }

            $html = str_replace(
                '<span class="separator"> / </span>',
                '<span class="separator">' . esc_html("<") . '</span>',
                $html
            );
            return $html;
        }, 10, 3);

        // Включение страницы настроек
        if (function_exists('acf_add_options_page')) {

            $parent = acf_add_options_page(array(
                'page_title'    => 'Курсы',
                'menu_title'    => 'Настройки темы',
                'menu_slug'     => 'theme-settings',
                'capability'    => 'edit_posts',
                'redirect'    => true,
            ));

            $childCourse = acf_add_options_page(array(
                'page_title'  => __('Настройки курсов'),
                'menu_title'  => __('Настройки курсов'),
                'parent_slug' => $parent['menu_slug'],
            ));
            $childContacts = acf_add_options_page(array(
                'page_title'  => __('Контакты'),
                'menu_title'  => __('Контакты'),
                'parent_slug' => $parent['menu_slug'],
            ));
        }

        // Сделаем тему доступной для перевода
        // Файлы перевода должны находиться в каталоге /languages/
        load_theme_textdomain('contentography', get_template_directory() . '/languages');

        $locale = get_locale();
        $locale_file = get_template_directory() . "/languages/$locale.php";
        if (is_readable($locale_file))
            require_once($locale_file);
    }

    //При активации темы будут созданы поля ACF из бэкапов ACF
    final function article_gamification_sync_acf_fields()
    {
        // vars
        $groups = acf_get_field_groups();
        $sync   = array();
        // bail early if no field groups
        if (empty($groups))
            return;
        // find JSON field groups which have not yet been imported
        foreach ($groups as $group) {

            // vars
            $local      = acf_maybe_get($group, 'local', false);
            $modified   = acf_maybe_get($group, 'modified', 0);
            $private    = acf_maybe_get($group, 'private', false);
            // ignore DB / PHP / private field groups
            if ($local !== 'json' || $private) {

                // do nothing

            } elseif (!$group['ID']) {

                $sync[$group['key']] = $group;
            } elseif ($modified && $modified > get_post_modified_time('U', true, $group['ID'], true)) {

                $sync[$group['key']]  = $group;
            }
        }
        // bail if no sync needed
        if (empty($sync))
            return;
        if (!empty($sync)) { //if( ! empty( $keys ) ) {

            // vars
            $new_ids = array();

            foreach ($sync as $key => $v) { //foreach( $keys as $key ) {

                // append fields
                if (acf_have_local_fields($key)) {

                    $sync[$key]['fields'] = acf_get_local_fields($key);
                }
                // import
                $field_group = acf_import_field_group($sync[$key]);
            }
        }
    }
}
