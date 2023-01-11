<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// WP_Query argument For all the portfolio posts
$args = array(
    'post_type'              => array('portfolio'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => 6, // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
    'paged' => $paged,
);

// The Query
$query = new WP_Query($args);
?>
<!--portfolio start-->

<section>
    <div class="container">

        <!-- Portfolio Header -->
        <div class="row align-items-end mb-8">
            <?php
            get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\title', null, ['fields' => $fields]);
            get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\categories');
            ?>
        </div>
        <!-- Portfolio Header### -->

        <?php
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\portfolio-posts', null, ['query' => $query]);
        ?>

    </div>

</section>

<!--portfolio end-->