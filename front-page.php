<?php
// WP_Query argument For the last 3 posts
$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => '3', // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
);

// The Query
$query = new WP_Query($args);

get_header();
?>
<!--body content start-->

<div class="page-content">

    <?php
    $i = 0; //layout andis number
    //dynamic content
    if (have_rows('content_placement', 'options')) {
        while (have_rows('content_placement', 'options')) {
            the_row();

            // every layout and their fields
            $layout_fields = get_fields('options')['content_placement'];

            // Get the row layout.
            $layout = get_row_layout();

            // Content Placement
            get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\content-placement', null, ['layout' => [$layout, $i], 'layout_fields' => $layout_fields]);

            $i++;
        }
    } else {
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\card\blog\container\blog-card-small', null, ['query' => $query]);
    }
    //dynamic content ###


    ?>
</div>

<!--body content end-->
<?php
get_footer();
