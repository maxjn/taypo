<?php

/**
 *Customizing Comment_Form()
 * https://developer.wordpress.org/reference/functions/comment_form/
 *
 * @package Taypo
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

class Comment_Form
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
        add_filter('comment_form_fields', [$this, 'comment_fields_custom_order']);
        // Remove the logout link in comment form
        add_filter('comment_form_logged_in', '__return_empty_string');
    }

    /**
     * Comment Form Field Order.
     */
    public function comment_fields_custom_order($fields)
    {
        $comment_field = $fields['comment'];
        $author_field = $fields['author'];
        $email_field = $fields['email'];
        $cookies_field = $fields['cookies'];
        unset($fields['comment']);
        unset($fields['author']);
        unset($fields['email']);
        unset($fields['url']);
        unset($fields['cookies']);
        // the order of fields is the order below, change it as needed:
        $fields['author'] = $author_field;
        $fields['email'] = $email_field;
        $fields['comment'] = $comment_field;
        $fields['cookies'] = $cookies_field;
        // done ordering, now return the fields:
        return $fields;
    }

    public function comment_form_customization()
    {
        //Declare Vars
        $comment_send = 'Post Comment';
        $comment_reply = '  <div class="mb-4">
        <h2>' . __('Leave A Comment', 'taypo') . '</h2>
    </div>';
        $comment_reply_to = ' <div class="mb-4">
        <h2 class="d-flex">Leave A Reply to &nbsp;  %s</h2>
    </div>';

        $comment_author = 'Name';
        $comment_email = 'Email';
        $comment_body = 'Message';
        $comment_cookies_1 = 'By commenting you accept the';
        $comment_cookies_2 = ' Privacy Policy';


        $comment_cancel = 'Cancel Reply';

        //Array
        $comments_args = array(
            //Define Fields
            'fields' => array(
                //Author field
                'author' => '
                <div class="mb-3 col-md-6">
                                <input id="author" type="text" name="author" class="form-control" placeholder="' . __($comment_author, 'taypo') . '" required="required">
                             </div>',
                //Email Field
                'email' => ' <div class="mb-3 col-md-6">
                                 <input id="email" type="email" name="email" class="form-control" placeholder="' . __($comment_email, 'taypo') . '" required="required">
                            </div>',
                //Cookies
                'cookies' => '<div class="remember-checkbox d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check1" required>
                                    <label class="form-check-label" for="check1"> ' . __($comment_cookies_1, 'taypo') . '</label>
                                 </div>
                                 <a class="btn-link" href="' . get_privacy_policy_url() . '"> ' . __($comment_cookies_2, 'taypo') . '</a>
                             </div>',
            ),
            // Change the title of send button
            'label_submit' => __($comment_send, 'taypo'),
            // Change the title of the reply section
            'title_reply' => __($comment_reply, 'taypo'),
            // Change the title of the reply section
            'title_reply_to' => __($comment_reply_to, 'taypo'),
            //Cancel Reply Text
            'cancel_reply_link' => __($comment_cancel, 'taypo'),
            // Redefine your own textarea (the comment body).
            'comment_field' => '<div class="mb-3 col-md-12">
                                 <textarea id="comment" name="comment" class="form-control rounded-4 h-auto" placeholder="' . __($comment_body, 'taypo') . '" rows="3" required="required"></textarea>
                                </div>',
            //Message Before Comment
            'comment_notes_before' => '',
            // Remove "Text or HTML to be displayed after the set of comment fields".
            'comment_notes_after' => '',
            //Submit Button ID
            'id_submit' => __('comment-submit', 'taypo'),
            //Form Class
            'class_form' => 'row',
        );
        return $comments_args;
    }
}