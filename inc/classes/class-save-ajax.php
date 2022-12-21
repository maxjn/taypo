<?php

/**
 * save Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class Save_Ajax
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
         * Sign Up script ajax hooks
         */
        add_action('wp_ajax_nopriv_save_ajax', [$this, 'save_ajax']);
        add_action('wp_ajax_save_ajax', [$this, 'save_ajax']);
    }

    /**
     * Sign Up script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to save Form ).
     *
     */
    public function save_ajax(bool $initial_request = false)
    {

        if (!$initial_request && !check_ajax_referer('myajax_nonces', 'ajax_nonce', false)) {
            wp_send_json_error(__('Invalid security token sent.', 'text-domain'));
            wp_die('0', 400);
        }

        // Check if it's an ajax call.
        $is_ajax_request = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
        /**
         * Get Fields
         * check if all fields are filled in
         * Perform AJAX request
         */

        $post_id = $_POST['post_id'];
        $save_val = get_post_meta($post_id, 'save', true);

        $old_saves = isset($_COOKIE['old_saves']) ? $_COOKIE['old_saves'] : null;
        $old_saves = explode(',', $old_saves);
        if (in_array($post_id, $old_saves)) {
            $type = 'unsave';
            $save_val--;
            if (($key = array_search($post_id, $old_saves)) !== false) {
                unset($old_saves[$key]);
            }
        } else {
            $type = 'save';
            $save_val++;
            $old_saves[] = $post_id;
        }

        update_post_meta($post_id, 'save', $save_val);
        $old_saves = implode(',', $old_saves);
        setcookie('old_saves', $old_saves, time() + (99 * 31536000), '/');
        wp_send_json([
            'type' => $type,
            'value' => $save_val,
        ]);

        /**
         * Check if its an ajax call, and not initial request
         *
         * @see https://wordpress.stackexchange.com/questions/116759/why-does-wordpress-add-0-zero-to-an-ajax-response
         */
        if ($is_ajax_request && !$initial_request) {
            wp_die();
        }
    }
}