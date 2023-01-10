<!-- Template Name: Saved Posts
Post Type: page
 -->
<?php
$old_saves = isset($_COOKIE['old_saves']) ? $_COOKIE['old_saves'] : '';
$old_saves = explode(',', $old_saves);

get_header();

///*Title
?>
<?php
    // Breadcrumbs
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\header\breadcrumb');
    // Breadcrumbs ### -->
    ?>
<!--body content start-->

<div class="page-content">
    <?php
    // WP_Query arguments
    $args = array(
        'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
        'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
        'order'                  => 'DESC', // Also support: ASC
        'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
        'post__in' => $old_saves,
    );

    // The Query
    $query = new WP_Query($args);

    ///*Posts
    get_template_part('templates\card\blog\container\blog-card-small', null, ['query' => $query]);


    ?>
</div>

<!--body content end-->
<?php
get_footer();
