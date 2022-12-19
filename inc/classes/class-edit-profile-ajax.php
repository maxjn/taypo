<?php

/**
 * Edit Progile Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class Edit_Profile_Ajax
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
         * Edit Progile script ajax hooks
         */
        add_action('wp_ajax_edit_profile_ajax', [$this, 'edit_profile_ajax']);
    }

    /**
     * Edit Progile script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to Login Form ).
     *
     */
    public function edit_profile_ajax(bool $initial_request = false)
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
        $user_id = get_current_user_id();
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $displyName = $_POST['displayName'];
        $email = $_POST['email'];
        $error = false;
        $message = '';
        $user_data = array(
            'ID' => $user_id,
            'user_email' => $email,
            'first_name' => $name,
            'last_name' => $lastName,
            'display_name' => $displyName,
        );

        if (empty($name) || empty($lastName) || empty($displyName) || empty($email)) {
            $error = true;
            $message .= '<p>' . __('Please fill out the fields', 'Taypo') . '</p>';
        } else {
            $user = wp_update_user($user_data);
            if (is_wp_error($user)) {
                $message .= $user->get_error_message();
                $error = true;
            } else {

                $message .= '<p>' . __('Profile updated successfuly', 'Taypo') . '</p>';
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