<?php

/**
 * Custom template tags for the theme.
 *
 * @package Taypo
 */

/**
 * Get the url of the page that uses the spisific template.
 *
 * If 'null' was returned it means that the template has not been used.
 *
 * @param string $TEMPLATE_NAME template name / relative path
 *
 * @return null|string
 */
function taypo_get_template_page_url($TEMPLATE_NAME)
{
    $url = null;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $TEMPLATE_NAME
    ));
    if (isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}

/**
 * Get the trimmed version of post excerpt.
 *
 * This is for modifing manually entered excerpts,
 * NOT automatic ones WordPress will grab from the content.
 *
 * It will display the first given characters ( e.g. 100 ) characters of a manually entered excerpt,
 * but instead of ending on the nth( e.g. 100th ) character,
 * it will truncate after the closest word.
 *
 * @param int $trim_character_count Charter count to be trimmed
 *
 * @return bool|string
 */
function taypo_the_excerpt($trim_character_count = 0)
{
    $post_ID = get_the_ID();

    if (empty($post_ID)) {
        return null;
    }

    if (has_excerpt() || 0 === $trim_character_count) {
        the_excerpt();

        return;
    }

    $excerpt = wp_html_excerpt(get_the_excerpt($post_ID), $trim_character_count, '[...]');


    echo $excerpt;
}

/**
 * CallBack for comments template
 * Customizes comments structure
 *
 * @param object $comment
 *
 * @param object  $args
 *
 * @param object $depth
 *
 * @return html|string
 */
//http://man.hubwiz.com/docset/WordPress.docset/Contents/Resources/Documents/codex.wordpress.org/Function_Reference/wp_list_comments.html
function taypo_comments($comment, $args, $depth)
{
    if ('div' === $args['style']) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    } ?>

<<?php echo $tag; ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>
    id="comment-<?php comment_ID() ?>">

    <?php
        if ('div' != $args['style']) { ?>
    <!-- Comment Start -->
    <div id="div-comment-<?php comment_ID() ?>"
        class="d-block d-md-flex align-items-center border-bottom border-light pb-5 mb-5">
        <?php
        } ?>
        <!-- Wrapper Start -->
        <div class="comment-wrapper d-block d-md-flex me-5">
            <!-- Avatar Start -->
            <div class="me-md-4 mb-4 mb-md-0 flex-shrink-0">
                <img class="img-fluid rounded" alt="image" src="<?= get_avatar_url($comment, ['size' => '50'])  ?>">
            </div>
            <!-- Avatar End -->

            <!-- Conten & Meta Start -->
            <div class="flex-grow-1">
                <!-- Meta Start -->
                <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                    <div class="mb-3">
                        <h5 class="mb-0 d-inline-block me-1 align-middle"><?= get_comment_author() ?></h5>
                        <small class="text-muted">- <?= get_comment_date() ?></small>
                    </div>
                </a>
                <!-- Meta End -->

                <!-- Comment Approval Message Start -->
                <?php
                    if ($comment->comment_approved == '0') { ?>
                <em
                    class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></em><?php } ?>
                <!-- Comment Approval Message End -->

                <!-- Content Start -->
                <p class="mb-md-0"><?php comment_text(); ?></p>
                <!-- Content End -->

                <?php edit_comment_link(__('(Edit)'), '  ', ''); ?>


            </div>
            <!-- Conten & Meta End -->
        </div>
        <!-- Wrapper End -->

        <!-- Replay Start -->
        <div class="reply btn-link fs-3"><?=
                                                get_comment_reply_link(
                                                    array_merge(
                                                        $args,
                                                        array(
                                                            'add_below' => $add_below,
                                                            'depth'     => $depth,
                                                            'max_depth' => $args['max_depth'],
                                                            'reply_text'    => '<i class="bi bi-box-arrow-up-right"></i>',

                                                        )
                                                    )
                                                ); ?>
        </div>
        <!-- Replay End -->

    </div>
    <!-- Comment End -->


    <?php
            if ('div' != $args['style']) : ?>


    <?php
            endif;
        }