<?php

/**
 * Login Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class Login_Ajax
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
        add_action('wp_ajax_nopriv_login_ajax', [$this, 'login_ajax']);
    }

    /**
     * Login script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to Login Form ).
     *
     */
    public function login_ajax(bool $initial_request = false)
    {

        if (!$initial_request && !check_ajax_referer('login_signup_nonces', 'ajax_nonce', false)) {
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

        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $remember = $_POST['remember'];
        $error = false;
        $message = '';

        if (empty($userName) || empty($password)) {
            $error = true;
            $message .= '<p>' . __('Please fill out the fields', 'Taypo') . '</p>';
        } else {
            /**
             * Perform automatic login.
             */
            $info = array(
                'user_login'    => $userName,
                'user_password' => $password,
                'remember'      => $remember
            );

            $user = wp_signon($info);

            if (is_wp_error($user)) {
                $message .= $user->get_error_message();
                $error = true;
            } else {
                $message .= '<p>' . __('You Logged in successfuly', 'Taypo') . '</p>';
            }
        }

        wp_send_json(
            [
                'error' => $error,
                'message' => $message
            ]
        );

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