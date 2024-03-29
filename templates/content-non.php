<?php

/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package taypo
 */
if (is_home() || is_front_page()) {
?>
<div class="col-12 col-lg-7 mb-6 mb-lg-0 ">
    <?php
}
    ?>
    <div class="no-result not-found d-flex flex-column align-items-center ">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('Nothing Found', 'taypo'); ?></h1>
        </header>

        <div class="page-content">
            <?php
            if ((is_home() || is_front_page() || is_archive()) || is_page() && current_user_can('publish_posts')) {
            ?>
            <p>
                <?php
                    printf(
                        wp_kses(
                            __('Ready to publish your first post? <a href="%s">Get started here</a>', 'taypo'),
                            [
                                'a' => [
                                    'href' => []
                                ]
                            ]
                        ),
                        esc_url(admin_url('post-new.php'))
                    )
                    ?>
            </p>
            <?php
            } elseif (is_search()) {
            ?>
            <p><?php esc_html_e('Sorry but nothing matched your search item. Please try again with some different keywords', 'taypo'); ?>
            </p>
            <?php
                get_template_part('templates\widget\container\search-form');
            } elseif (is_page_template('templates/saved-posts.php')) {
            ?>
            <p><?php esc_html_e('You haven\'t saved anything yet.', 'taypo'); ?>
            </p>
            <?php
            } elseif (is_page_template('templates/liked-posts.php')) {
            ?>
            <p><?php esc_html_e('You haven\'t liked anything yet.', 'taypo'); ?>
            </p>
            <?php
            } else {
            ?>
            <p><?php esc_html_e('It seems that we cannot find what you are looking for . Perhaps search can help', 'taypo'); ?>
            </p>
            <?php
                get_template_part('templates\widget\container\search-form');
            }
            ?>
        </div>
    </div>
    <?php
    if (is_home() || is_front_page()) {
    ?>
</div>
<?php
    }