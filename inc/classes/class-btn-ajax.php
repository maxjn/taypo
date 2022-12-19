<?php

/**
 * Login Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class Btn_Ajax
{

    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Login script ajax hooks
         */
        add_action('wp_ajax_hello_ajax', [$this, 'hello_ajax']);
        add_action('wp_ajax_nopriv_hello_ajax', [$this, 'hello_ajax']);
    }

    /**
     * Login script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to Login Form ).
     *
     */
    public function hello_ajax()
    {
        if (is_user_logged_in()) {
            $user = wp_get_current_user();
            echo 'Welcome' . $user->user_nicename;
        } else {
            echo 'Welcome Guest';
        }
        wp_die();
    }
}