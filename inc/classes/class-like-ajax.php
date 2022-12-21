<?php

/**
 * like Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class Like_Ajax
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
        add_action('wp_ajax_nopriv_like_ajax', [$this, 'like_ajax']);
        add_action('wp_ajax_like_ajax', [$this, 'like_ajax']);
    }

    /**
     * Sign Up script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to Like Form ).
     *
     */
    public function like_ajax(bool $initial_request = false)
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
        $like_val = get_post_meta($post_id, 'like', true);

        $old_likes = isset($_COOKIE['old_likes']) ? $_COOKIE['old_likes'] : null;
        $old_likes = explode(',', $old_likes);
        if (in_array($post_id, $old_likes)) {
            $type = 'unlike';
            $like_val--;
            if (($key = array_search($post_id, $old_likes)) !== false) {
                unset($old_likes[$key]);
            }
        } else {
            $type = 'like';
            $like_val++;
            $old_likes[] = $post_id;
        }

        update_post_meta($post_id, 'like', $like_val);
        $old_likes = implode(',', $old_likes);
        setcookie('old_likes', $old_likes, time() + (99 * 31536000), '/');
        wp_send_json([
            'type' => $type,
            'value' => $like_val,
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