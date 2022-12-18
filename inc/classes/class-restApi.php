<?php

/**
 * 
 * File include settings custom path REST API
 * 
 * @package contentography
 * 
 */

namespace CONTENTOGRAPHY_THEME\Inc;

use CONTENTOGRAPHY_THEME\Inc\Traits\Singleton;
use CONTENTOGRAPHY_THEME\RestApi\Comments;
use CONTENTOGRAPHY_THEME\RestApi\Courses;
use CONTENTOGRAPHY_THEME\RestApi\Experts;
use CONTENTOGRAPHY_THEME\RestApi\Vipuskniky;

class RestApi
{

    use Singleton;

    protected function __construct()
    {
        Courses::get_instance();
        Vipuskniky::get_instance();
        Comments::get_instance();
        Experts::get_instance();
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        add_action('rest_api_init', [$this, 'restApi']);
    }

    public function restApi()
    {
    }
}
