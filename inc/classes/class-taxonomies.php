<?php

/**
 * Register Post Types
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

class Taxonomies
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
        // hook into the init action and call create_book_taxonomies when it fires
        add_action('init', [$this, 'portfolio_taxonomies'], 0);
    }

    /**
     * Create two taxonomies, Categories and Tags for the post type "portfolio".
     *
     * @see register_post_type() for registering custom post types.
     */
    function portfolio_taxonomies()
    {
        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x('Categories', 'taxonomy general name', 'taypo'),
            'singular_name'     => _x('Category', 'taxonomy singular name', 'taypo'),
            'search_items'      => __('Search Categories', 'taypo'),
            'all_items'         => __('All Categories', 'taypo'),
            'parent_item'       => __('Parent Category', 'taypo'),
            'parent_item_colon' => __('Parent Category:', 'taypo'),
            'edit_item'         => __('Edit Category', 'taypo'),
            'update_item'       => __('Update Category', 'taypo'),
            'add_new_item'      => __('Add New Category', 'taypo'),
            'new_item_name'     => __('New Category Name', 'taypo'),
            'menu_name'         => __('Categories', 'taypo'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'      => false
        );

        register_taxonomy('portfolio_category', array('portfolio'), $args);

        unset($args);
        unset($labels);
    }
}