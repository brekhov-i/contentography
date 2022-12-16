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
use contentography\RestApi\Courses;

class RestApi
{

    use Singleton;

    protected function __construct()
    {
        Courses::get_instance();
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
