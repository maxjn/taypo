<?php

/**
 * Theme Sidebars.
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

/**
 * Class Assets
 */
class Sidebars
{

    use Singleton;

    /**
     * Construct method.
     */
    protected function __construct()
    {
        $this->setup_hooks();
    }

    /**
     * To register action/filter.
     *
     * @return void
     */
    protected function setup_hooks()
    {

        /**
         * Actions
         */
        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);
    }

    /**
     * Register widgets.
     *
     * @action widgets_init
     */
    public function register_sidebars()
    {

        register_sidebar(
            [
                'name'          => esc_html__('Blog Sidebar', 'taypo'),
                'id'            => 'sidebar-1',
                'description'   => 'in blog',
                'before_widget' => '<div class="mb-5 border-bottom border-light pb-5">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="mb-3">',
                'after_title'   => '</h4>',
            ]
        );

        register_sidebar(
            [
                'name'          => esc_html__('Public Sidebar', 'taypo'),
                'id'            => 'sidebar-2',
                'description'   => 'in toggle nav',
                'before_widget' => '<div class="border-top border-dark pt-6 mt-6">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="text-white border-bottom border-white d-inline-block">',
                'after_title'   => '</h4>',
            ]
        );
        register_sidebar(
            [
                'name'          => esc_html__('Footer', 'taypo'),
                'id'            => 'sidebar-3',
                'description'   => 'in footer',
                'before_widget' => '<div class="col-md-8 col-lg-4 mt-6 mt-lg-0">',
                'after_widget'  => '</div>',
                'before_title'  => ' <h5 class="mb-4"',
                'after_title'   => '</h4>',
            ]
        );
    }

    public function register_clock_widget()
    {
        register_widget('TAYPO_THEME\Inc\Clock_Widget');
    }
}