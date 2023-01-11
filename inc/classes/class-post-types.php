<?php

/**
 * Register Post Types
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

class Post_Types
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
        add_action('init', [$this, 'portfolio_post_type']);
    }

    /**
     * Register a custom post type called "portfolio".
     *
     * @see get_post_type_labels() for label keys.
     */
    function portfolio_post_type()
    {
        $labels = array(
            'name'                  => _x('portfolios', 'Post type general name', 'taypo'),
            'singular_name'         => _x('portfolio', 'Post type singular name', 'taypo'),
            'menu_name'             => _x('portfolios', 'Admin Menu text', 'taypo'),
            'name_admin_bar'        => _x('portfolio', 'Add New on Toolbar', 'taypo'),
            'add_new'               => __('Add New', 'taypo'),
            'add_new_item'          => __('Add New portfolio', 'taypo'),
            'new_item'              => __('New portfolio', 'taypo'),
            'edit_item'             => __('Edit portfolio', 'taypo'),
            'view_item'             => __('View portfolio', 'taypo'),
            'all_items'             => __('All portfolios', 'taypo'),
            'search_items'          => __('Search portfolios', 'taypo'),
            'parent_item_colon'     => __('Parent portfolios:', 'taypo'),
            'not_found'             => __('No portfolios found.', 'taypo'),
            'not_found_in_trash'    => __('No portfolios found in Trash.', 'taypo'),
            'featured_image'        => _x('portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'taypo'),
            'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'taypo'),
            'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'taypo'),
            'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'taypo'),
            'archives'              => _x('portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'taypo'),
            'insert_into_item'      => _x('Insert into portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'taypo'),
            'uploaded_to_this_item' => _x('Uploaded to this portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'taypo'),
            'filter_items_list'     => _x('Filter portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'taypo'),
            'items_list_navigation' => _x('portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'taypo'),
            'items_list'            => _x('portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'taypo'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'portfolio'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'supports'           => array('title', 'editor', 'thumbnail'),
            'taxonomies'         => array('portfolio_category'),
            'menu_icon'   => 'dashicons-portfolio',
        );

        register_post_type('portfolio', $args);
    }
}