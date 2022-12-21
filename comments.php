    <?php
    /**
     * Comments
     *
     * @package Taypo
     */

    $comment_form_class     = \Taypo_Theme\Inc\Comment_Form::get_instance();
    $comment_form_args = $comment_form_class->comment_form_customization();

    if (have_comments()) { ?>
    <!-- single post comments start-->
    <div class="my-6 border border-light rounded-4 p-5">

        <!-- title start -->
        <div class="mb-4">
            <h2 class="comments-title">
                <?php esc_html_e('Recent Comments', 'taypo') ?>
            </h2>
        </div>
        <!-- title End -->


        <!-- comments start -->
        <ol class="commentlist">
            <?php
                wp_list_comments(array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                    'callback' => 'taypo_comments'
                ));
                ?>
        </ol><!-- .comment-list -->
        <!-- comments End -->

        <!-- Comments Pagination Start -->
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav class="navigation comment-navigation" role="navigation">

            <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'twentythirteen'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentythirteen')); ?>
            </div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentythirteen')); ?></div>
        </nav><!-- .comment-navigation -->
        <!-- Comments Pagination End -->


        <?php endif; // Check for comment navigation
            ?>

    </div>
    <!-- single post comments end-->
    <?php

    } // have_comments() End
    else {
        if (!get_comments_number() && comments_open()) { ?>
    <p class="no-comments  fs-3">
        <?php _e('No comments yet. Leave the first comment.', 'taypo'); ?></p>
    <?php }
    }

    // Comments were closed
    if (!comments_open()) {
        //Npthing will happen
    } else
    // Comments were Opened
    {
        ?>
    <!-- comment form start-->
    <div class="post-comments mt-5">
        <?php
            ob_start();
            comment_form($comment_form_args);
            echo str_replace('class="submit"', 'class="submit btn btn-primary"', ob_get_clean());
            ?>
    </div>
    <!-- comment form End-->
    <?php }
    ?>