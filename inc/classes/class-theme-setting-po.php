<?php

/**
 * Initiallize Theme Settings Page Options
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

class Theme_Setting_PO
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
         * Actions.
         */
        add_action('acf/init', [$this, 'theme_setting_op_init']);
    }

    /**
     * Add Theme Setting Page Options
     *
     *
     */
    function theme_setting_op_init()
    {
        // Check function exists.
        if (function_exists('acf_add_options_page')) {

            // Add parent.
            $parent = acf_add_options_page(array(
                'page_title'  => __('Theme General Settings'),
                'menu_title'  => __('Theme Settings'),
                'menu_slug' => 'theme-settings',
                'redirect'    => false,
            ));

            // Add sub page.
            $child = acf_add_options_page(array(
                'page_title'  => __('Front Page Settings'),
                'menu_title'  => __('Front Page'),
                'menu_slug' => 'front-page-settings',
                'parent_slug' => $parent['menu_slug'],
            ));
        }
    }
}