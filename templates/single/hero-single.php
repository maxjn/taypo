<?php
$author_id = $post->post_author;
$author_display_name = get_the_author_meta('display_name', $author_id);
?>
<!-- single post hero start -->
<div class="card post-card rounded border-0 shadow-none">
    <?php get_template_part('templates\card\blog\content\blog-card-thumbnail') ?>
    <div class="card-body pt-4 pb-0 px-0">
        <div>
            <a class="d-inline-block bg-light text-center px-2 py-1 rounded me-2"
                href="<?= get_author_posts_url($author_id) ?>">
                <i class="bi bi-pencil text-dark me-1"></i>
                <?= $author_display_name ?>
            </a>
            <div class="d-inline-block bg-light text-center px-2 py-1 rounded me-2">
                <i class="bi bi-calendar3 text-dark me-1"></i><?php the_time('F j, Y'); ?>
            </div>
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
        <h2> <?php the_title(); ?> </h2>
    </div>
</div>
<!-- single post hero end -->