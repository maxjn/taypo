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
            // Hero Layout 1
            if ($layout == 'hero_secction_1') {
                get_template_part('templates\hero\hero1', null, ['fields' => $layout_fields[$i]]);
            } // Hero Layout 1 ###

            // Hero Layout 2
            if ($layout == 'hero_secction_2') {
                get_template_part('templates\hero\hero2', null, ['fields' => $layout_fields[$i]]);
            } // Hero Layout 2 ###

            // Hero Layout 3
            if ($layout == 'hero_secction_3') {
                get_template_part('templates\hero\hero3', null, ['fields' => $layout_fields[$i]]);
            } // Hero Layout 3 ###

            // Feature Box 1
            if ($layout == 'feature_box_1') {
                get_template_part('templates\feature-box\featurebox1', null, ['fields' => $layout_fields[$i]]);
            } // Feature Box 1 ###

            // Feature Box 2
            if ($layout == 'feature_box_2') {
                get_template_part('templates\feature-box\featurebox2', null, ['fields' => $layout_fields[$i]]);
            } // Feature Box 2 ###

            // Feature Box 3
            if ($layout == 'feature_box_3') {
                get_template_part('templates\feature-box\featurebox3', null, ['fields' => $layout_fields[$i]]);
            } // Feature Box 3 ###

            // Feature Box 4
            if ($layout == 'feature_box_4') {
                get_template_part('templates\feature-box\featurebox4', null, ['fields' => $layout_fields[$i]]);
            } // Feature Box 4 ###

            // Accordion 1
            if ($layout == 'accordion_1') {
                get_template_part('templates\accordian\accordian1', null, ['fields' => $layout_fields[$i]]);
            } // Accordion 1 ###

            // Accordion 2
            if ($layout == 'accordion_2') {
                get_template_part('templates\accordian\accordian2', null, ['fields' => $layout_fields[$i]]);
            } // Accordion 2 ###

            // Banner 1
            if ($layout == 'banner') {
                get_template_part('templates\banner\banner', null, ['fields' => $layout_fields[$i]]);
            } // Banner 1 ###

            // Counter
            if ($layout == 'counter') {
                get_template_part('templates\counter\counter', null, ['fields' => $layout_fields[$i]]);
            } // Counter  ###

            // Latest Posts 1
            if ($layout == 'latest_posts_1') {


                get_template_part('templates\card\blog\container\blog-card-small', null, ['query' => $query]);
            } // Latest Posts 1 ###

            // Latest Posts 2
            if ($layout == 'latest_posts_2') {
                get_template_part('templates\card\blog\container\blog-list-big', null, ['fields' => $layout_fields[$i]]);
            } // Latest Posts 2 ###

            $i++;
        }
    }
    //dynamic content ###


    ?>
</div>

<!--body content end-->
<?php
get_footer();