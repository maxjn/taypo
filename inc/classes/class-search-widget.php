<?php

/**
 * Search Widget
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use WP_Widget;

use TAYPO_THEME\Inc\Traits\Singleton;

class Search_Widget extends WP_Widget
{

    use Singleton;

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'search_form', // Base ID
            'Search Form (Taypo)', // Name
            ['description' => __('Search Form', 'taypo'),] // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @param array $args     Widget arguments /information about the sidebar.
     * @param array $instance Saved values from database.
     *
     * @see WP_Widget::widget()
     *
     */
    public function widget($args, $instance)
    {
        extract($args);

        echo $before_widget;


        get_template_part('templates\widget\container\search-form'); //Widget Itself

        echo $after_widget;
    }
}