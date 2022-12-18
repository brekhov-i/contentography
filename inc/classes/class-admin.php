<?php

/**
 * 
 * File include settings admin part
 * 
 * @package contentography
 * 
 */

namespace CONTENTOGRAPHY_THEME\Inc;

use CONTENTOGRAPHY_THEME\Inc\Traits\Singleton;

class Admin
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
