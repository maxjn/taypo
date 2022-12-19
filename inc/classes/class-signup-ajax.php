<?php

/**
 * Sign Up Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class SignUp_Ajax
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
        add_action('wp_ajax_nopriv_signup_ajax', [$this, 'signup_ajax']);
    }

    /**
     * Sign Up script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to Login Form ).
     *
     */
    public function signup_ajax(bool $initial_request = false)
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
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordRepeat = $_POST['passwordRepeat'];
        $error = false;
        $message = '';
        $user_data = array(
            'user_login' => $userName,
            'user_email' => $email,
            'first_name' => $name,
            'last_name' => $lastName,
            'display_name' => $name . ' ' . $lastName,
            'user_pass' => $password,
        );

        if (empty($name) || empty($lastName) || empty($userName) || empty($password) || empty($email) || empty($passwordRepeat)) {
            $error = true;
            $message .= '<p>' . __('Please fill out the fields', 'Taypo') . '</p>';
        } else if ($password != $passwordRepeat) {
            $error = true;
            $message .= '<p>' . __('Password and its conform are not the same.', 'Taypo') . '</p>';
        } else {
            $user = wp_insert_user($user_data);
            if (is_wp_error($user)) {
                $message .= $user->get_error_message();
                $error = true;
            } else {
                $info = array(
                    'user_login'    => $userName,
                    'user_password' => $password,
                    'remember'      => false
                );

                wp_signon($info);
                $message .= '<p>' . __('Signed up & Logged in successfuly', 'Taypo') . '</p>';
            }
        }

        wp_send_json(
            [
                'error' => $error,
                'message' => $message,
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