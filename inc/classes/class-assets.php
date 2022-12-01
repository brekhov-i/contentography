<?php

/**
 * 
 * File in which connect file's styles
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;

class Assets
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'add_style_theme']);
        add_action('admin_enqueue_scripts', [$this, 'add_style_admin']);
    }

    final function add_style_theme()
    {
        wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), filemtime(DIR_PATH . '/style.css'), 'all');

        wp_enqueue_style('main-css', BUILD_CSS_URI . '/main.css', array('theme-style'), filemtime(BUILD_CSS_PATH . '/main.css'), 'all');
        wp_enqueue_script('main-js', BUILD_JS_URI . '/main.js', array(), filemtime(BUILD_JS_PATH . '/main.js'), true);

        wp_add_inline_script('main-js', '
        setInterval(() => {
            var MoscowH = new Date(new Date().getTime() + 3 * 3600 * 1000)
              .toUTCString()
              .replace(/ GMT$/, "");
            var VebDate = new Date(MoscowH).getTime();
            var DateSravn = new Date(new Date(MoscowH).setHours(12, 42, 2)).getTime();
            var DateSravn1 = new Date(new Date(MoscowH).setHours(12, 42, 4)).getTime();

            if(VebDate > DateSravn && VebDate < DateSravn1) {
                location.reload(true);
            }
          }, 1000);
        ');

        //============ Pages ===============
        if (is_front_page()) {
            wp_enqueue_style('frontPage-css', BUILD_CSS_URI . '/pages/frontPage.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/frontPage.css'), 'all');
            wp_enqueue_script('frontPage-js', BUILD_JS_URI . '/pages/frontPage.js', array('main-js'), filemtime(BUILD_JS_PATH . '/pages/frontPage.js'), true);
        }
        if (is_post_type_archive('p')) {
            wp_enqueue_style('archive-p-css', BUILD_CSS_URI . '/pages/archive-p.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/archive-p.css'), 'all');
        }
        if (is_home()) {
            wp_enqueue_style('home-css', BUILD_CSS_URI . '/pages/home.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/home.css'), 'all');
        }
        if (is_404()) {
            wp_enqueue_style('404-css', BUILD_CSS_URI . '/pages/404.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/404.css'), 'all');
        }
        if (is_page('graduates')) {
            wp_enqueue_style('graduates-css', BUILD_CSS_URI . '/pages/graduates.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/graduates.css'), 'all');
            wp_enqueue_script('graduates-js', BUILD_JS_URI . '/pages/graduates.js', array('main-js'), filemtime(BUILD_JS_PATH . '/pages/graduates.js'), true);
        }
        if (is_page('o-shkole')) {
            wp_enqueue_style('aboutUs-css', BUILD_CSS_URI . '/pages/aboutUs.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/aboutUs.css'), 'all');
        }
        if (is_page('kontakty')) {
            wp_enqueue_style('contacts-css', BUILD_CSS_URI . '/pages/contacts.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/contacts.css'), 'all');
        }
        if (is_page('faq')) {
            wp_enqueue_style('faq-css', BUILD_CSS_URI . '/pages/faq.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/faq.css'), 'all');
        }
        if (is_page('eksperty')) {
            wp_enqueue_style('experts-css', BUILD_CSS_URI . '/pages/experts.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/experts.css'), 'all');
        }
        if (is_page('stan-avtorom')) {
            wp_enqueue_style('stanAvtorom-css', BUILD_CSS_URI . '/pages/stanAvtorom.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/stanAvtorom.css'), 'all');
        }
        if (is_page('thanks_email')) {
            wp_enqueue_style('thanksEmail-css', BUILD_CSS_URI . '/pages/thanksEmail.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/pages/thanksEmail.css'), 'all');
        }

        //============ Courses ============
        if (is_page_template('courses/3-light-schemes.php')) {
            wp_enqueue_style('3-light-schemes-css', BUILD_CSS_URI . '/courses/3-light-schemes.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/courses/3-light-schemes.css'), 'all');
        }
        if (is_page_template('courses/mk_baev_ss.php')) {
            wp_enqueue_style('mkBaevSs-css', BUILD_CSS_URI . '/courses/mkBaevSs.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/courses/mkBaevSs.css'), 'all');
        }
        if (is_page_template('courses/stan-feshn-fotografom.php')) {
            wp_enqueue_style('stanFeshnFotografom-css', BUILD_CSS_URI . '/courses/stanFeshnFotografom.css', array('theme-style', 'main-css'), filemtime(BUILD_CSS_PATH . '/courses/stanFeshnFotografom.css'), 'all');
        }
    }

    final function add_style_admin()
    {
    }
}
