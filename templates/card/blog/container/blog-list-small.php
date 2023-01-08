<?php
// WP_Query arguments
$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => '3', // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
);

// The Query
$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) : $query->the_post();
?>

<article>
    <div class="row align-items-center mt-4">
        <div class="col-sm-4">
            <?php
                    get_template_part('templates\card\blog\content\blog-card-thumbnail', null, ['class' => ' shadow']);
                    ?>
        </div>
        <?php
                get_template_part('templates\card\blog\content\blog-list-small-body');
                ?>
    </div>
</article>
<?php
    endwhile;
} else {
    get_template_part('templates\content-non');
}
wp_reset_query();
?>