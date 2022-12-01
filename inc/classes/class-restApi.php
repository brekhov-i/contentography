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

class RestApi
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
    }
}
