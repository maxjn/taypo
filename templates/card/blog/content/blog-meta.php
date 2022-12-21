<?php

/**
 * Template for entry content.
 *
 * To be used inside a blog container.
 *
 * @package Taypo
 */

$liked_posts_url = taypo_get_template_page_url('templates/liked-posts.php');
$saved_posts_url = taypo_get_template_page_url('templates/saved-posts.php');

//save Status
$old_saves = isset($_COOKIE['old_saves']) ? $_COOKIE['old_saves'] : '';
$old_saves = explode(',', $old_saves);

$save_class = in_array(get_the_ID(), $old_saves) ?  'bi-bookmark-fill' : 'bi-bookmark';

//Like Value
$like = get_post_meta(get_the_ID(), 'like', true);
$like = $like ? $like  : 0;


//Like Status
$old_likes = isset($_COOKIE['old_likes']) ? $_COOKIE['old_likes'] : '';
$old_likes = explode(',', $old_likes);

$like_class = in_array(get_the_ID(), $old_likes) ?  'bi-heart-fill' : 'bi-heart';

//save Value

$author_id = $post->post_author;
$author_display_name = get_the_author_meta('display_name', $author_id);
$like_save_meta_class = is_single() ? " like-save-meta" : "card-like-save-meta like-save-meta";
?>
<!-- Meta Start -->
<div class="d-flex justify-content-between align-items-center">
    <!-- Main Meta Start -->
    <div class="main-meta">
        <!-- Author Start -->
        <?php if (is_single()) { ?>
        <a class="d-inline-block bg-light text-center px-2 py-1 rounded me-2"
            href="<?= get_author_posts_url($author_id) ?>">
            <i class="bi bi-pencil text-dark me-1"></i>
            <?= $author_display_name ?>
        </a>
        <?php } ?>
        <!-- Author End -->

        <!-- Time Start -->
        <div class="d-inline-block bg-light text-center px-2 py-1 rounded me-2">
            <i class="bi bi-calendar3 text-dark me-1"></i><?php the_time('F j, Y'); ?>
        </div>
        <!-- Time End -->


        <!-- Category Start -->
        <?php
        foreach ((get_the_category()) as $category) {
            $category_name = $category->cat_name;
            $cat_id = get_cat_ID($category_name);
            $category_link = get_category_link($cat_id);
        ?>
        <a class="d-inline-block btn-link" href="<?= $category_link ?>">
            <?php
                echo $category_name . ' ' . ' ';
                ?></a>
        <?php
        }
        ?>
        <!-- Category end -->

    </div>
    <!-- Main Meta End -->

    <!-- Save Like Meta Start -->
    <div class="<?= $like_save_meta_class ?>">
        <!-- Save Start -->
        <?php if ($saved_posts_url != null) { ?>
        <span class="post-save d-inline-block bg-light text-center px-2 py-1 rounded me-2 bi <?= $save_class ?>  me-1"
            post_id="<?= get_the_ID() ?>">
        </span>
        <?php } ?>
        <!-- Save End -->

        <!-- Like Start -->
        <?php if ($liked_posts_url != null) { ?>
        <span class="post-like d-inline-block bg-light text-center px-2 py-1 rounded me-2 bi <?= $like_class ?>  me-1"
            post_id="<?= get_the_ID() ?>">
            <?= $like ?>
        </span>
        <?php } ?>
        <!-- Like End -->

    </div>
    <!-- Save Like Meta End -->


</div>
<!-- Meta End -->