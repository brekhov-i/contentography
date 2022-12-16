<?php

/**
 * 
 * File include settings custom path REST API
 * 
 * @package contentography
 * 
 */

namespace contentography\Inc;

use contentography\Inc\Traits\Singleton;
use contentography\RestApi\Comments;
use contentography\RestApi\Courses;
use contentography\RestApi\Experts;
use contentography\RestApi\Vipuskniky;

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
