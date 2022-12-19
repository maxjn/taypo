<?php

/**
 * Edit Password Ajax Request
 *
 * @package Taypo
 */

namespace Taypo_THEME\Inc;

use Taypo_THEME\Inc\Traits\Singleton;

class Edit_Password_Ajax
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
         * Edit Password script ajax hooks
         */
        add_action('wp_ajax_edit_password_ajax', [$this, 'edit_password_ajax']);
    }

    /**
     * Edit Password script call back
     *
     * @param bool $initial_request Initial Request( non-ajax request to Edit Password Form ).
     *
     */
    public function edit_password_ajax(bool $initial_request = false)
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
        $user = wp_get_current_user();
        $user_password = $user->user_pass;
        $user_id = $user->ID;
        $currentPassword = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $repeatPassword = $_POST['repeatPassword'];

        $error = false;
        $message = '';

        if (empty($currentPassword) || empty($newPassword) || empty($repeatPassword)) {
            $error = true;
            $message .= '<p>' . __('Please fill out the fields', 'Taypo') . '</p>';
        } elseif (!empty($newPassword) === empty($repeatPassword)) {
            $error = true;
            $message .= '<p>' . __('New Password and its conform don\'t match', 'Taypo') . '</p>';
        } elseif (!wp_check_password($currentPassword, $user_password, $user_id)) {
            /**
             * Perform password authorization.
             */
            $error = true;
            $message .= '<p>' . __('Current password is wrong', 'Taypo') . '</p>';
        } else {

            $result = reset_password($user, $newPassword);
            if (is_wp_error($result)) {
                $message .= $result->get_error_message();
                $error = true;
            } else {

                $message .= '<p>' . __('Password Updated Successfuly', 'Taypo') . '</p>';
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