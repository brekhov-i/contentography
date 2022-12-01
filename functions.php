<?php

/**
 * 
 * File include all finction theme
 * 
 * @package contentography
 * 
 */

if (!defined('DIR_PATH')) {
    define('DIR_PATH', untrailingslashit(get_template_directory()));
}
if (!defined('DIR_URI')) {
    define('DIR_URI', untrailingslashit(get_template_directory_uri()));
}
if (!defined('BUILD_PATH')) {
    define('BUILD_PATH', untrailingslashit(get_template_directory()) . '/public');
}
if (!defined('BUILD_URI')) {
    define('BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/public');
}
if (!defined('BUILD_JS_PATH')) {
    define('BUILD_JS_PATH', untrailingslashit(get_template_directory()) . '/public/js');
}
if (!defined('BUILD_JS_URI')) {
    define('BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/public/js');
}
if (!defined('BUILD_CSS_PATH')) {
    define('BUILD_CSS_PATH', untrailingslashit(get_template_directory()) . '/public/css');
}
if (!defined('BUILD_CSS_URI')) {
    define('BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/public/css');
}
if (!defined('BUILD_IMG_URI')) {
    define('BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/public/img');
}
if (!defined('BUILD_VIDEO_URI')) {
    define('BUILD_VIDEO_URI', untrailingslashit(get_template_directory_uri()) . '/public/video');
}

require_once DIR_PATH . '/inc/helpers/autoloader.php';

function contentography_get_theme_instance()
{
    \contentography\Inc\contentography::get_instance();
}

contentography_get_theme_instance();
