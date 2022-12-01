<?php

/**
 * 
 * File include create menu
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;

class Menus
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        add_action('after_setup_theme',  [$this, 'register_custom_menu']);
    }

    final function register_custom_menu()
    {
        register_nav_menus([
            'header_menu' => 'Меню в шапке',
            'footer_menu' => 'Меню в подвале'
        ]);
    }

    final function get_menu_id($location)
    {

        $locations = get_nav_menu_locations();

        $menu_id = $locations[$location];

        return !empty($menu_id) ? $menu_id : '';
    }

    final function get_child_menu_items($menu_array, $parent_id)
    {

        $child_menus = [];

        if (!empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $menu) {
                if (intval($menu->menu_item_parent) === $parent_id) {
                    array_push($child_menus, $menu);
                }
            }
        }

        return $child_menus;
    }
}
