<?php
get_header();


get_template_part('templates\hero\hero1')
?>
<!--body content start-->

<div class="page-content">

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

    get_template_part('templates\card\blog\container\blog-card-small', null, ['query' => $query]);
    get_template_part('templates\card\blog\container\blog-list-big');
    ?>
</div>

<!--body content end-->
<?php
get_footer();