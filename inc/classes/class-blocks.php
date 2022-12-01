<?php

/**
 * 
 * File add custom blocks in editor gutenberg
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;

class Blocks
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        add_action('init',  [$this, 'load_blocks'], 5);
        add_filter('acf/settings/load_json', [$this, 'load_acf_field_group']);
        add_filter('block_categories_all',  [$this, 'block_categories']);
    }

    public function get_blocks()
    {
        $theme   = wp_get_theme();
        $blocks  = get_option('wp_blocks');
        $version = get_option('wp_blocks_version');



        if (
            !empty($blocks) ||
            version_compare($theme->get('Version'), $version) ||
            (function_exists('wp_get_environment_type') && 'production' !== wp_get_environment_type())
        ) {
            $blocks = scandir(DIR_PATH . '/templates/gutenberg-blocks/posts/');

            if (!$blocks) return;

            $blocks = array_values(array_diff($blocks, array('..', '.', '.DS_Store', '_base-block')));

            update_option('wp_blocks', $blocks);
            update_option('wp_blocks_version', $theme->get('Version'));
        }


        return $blocks;
    }

    public function load_blocks()
    {
        $theme  = wp_get_theme();
        $blocks = Blocks::get_blocks();
        foreach ($blocks as $block) {
            if (file_exists(DIR_PATH . '/templates/gutenberg-blocks/posts/' . $block . '/block.json')) {
                register_block_type(DIR_PATH . '/templates/gutenberg-blocks/posts/' . $block . '/block.json');
                if (file_exists(DIR_PATH . '/public/css/gutenberg-blocks/posts/' . $block . '/style.css')) {
                    wp_register_style('block-' . $block, DIR_PATH . '/public/css/gutenberg-blocks/posts/' . $block . '/style.css', null, $theme->get('Version'));
                }

                if (file_exists(DIR_PATH . '/templates/gutenberg-blocks/posts/' . $block . '/index.php')) {
                    include_once DIR_PATH . '/templates/gutenberg-blocks/posts/' . $block . '/index.php';
                }
            }
        }
    }

    final function load_acf_field_group($paths)
    {
        $blocks = Blocks::get_blocks();

        foreach ($blocks as $block) {
            $paths[] = DIR_PATH . '/templates/gutenberg-blocks/blocks/' . $block;
        }
        return $paths;
    }



    /**
     * Block categories
     *
     * @since 1.0.0
     */
    final function block_categories($categories)
    {

        $include = true;
        foreach ($categories as $category) {
            if ('cultivatewp' === $category['slug']) {
                $include = false;
            }
        }

        if ($include) {
            $categories = array_merge(
                $categories,
                [
                    [
                        'slug'  => 'custom-category',
                        'title' => __('CultivateWP', 'cultivate_textdomain'),
                        'icon'  => "",
                    ],
                ]
            );
        }

        return $categories;
    }
}
