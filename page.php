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

    <!--single post start-->




    <?php
    $i = 0; //layout andis number
    //dynamic content
    if (have_rows('content_placement')) {
        while (have_rows('content_placement')) {
            the_row();
            // every layout and their fields
            $layout_fields = get_fields()['content_placement'];

            // Get the row layout.
            $layout = get_row_layout();

            // Content & Comments Open
            if ($layout == 'comment_section' || $layout == 'content_section') {
    ?>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php
                        }

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

                        // Latests Posts 1 Section
                        if ($layout == 'latest_posts_1') {


                            get_template_part('templates\card\blog\container\blog-card-small', null, ['query' => $query]);
                        } // Latests Posts 1 Section ###

                        // Latests Posts2 Section
                        if ($layout == 'latest_posts_2') {

                            get_template_part('templates\card\blog\container\blog-list-big', null, ['fields' => $layout_fields[$i]]);
                        } // Latests Posts2 Section ###

                        // Content Section
                        if ($layout == 'content_section') {

                            the_content();
                        } // Content Section ###

                        // Comment Section
                        if ($layout == 'comment_section') {

                            comments_template('');
                        } // Comment Section ###

                        // Content & Comments Close Tags
                        if ($layout == 'comment_section' || $layout == 'content_section') {
                            ?>
                </div>
            </div>
        </div>
    </section>
    <?php
                        }
                        $i++;
                    }
                }
                //dynamic content ###
                else {

        ?>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php

                        the_content();

                        comments_template('');

                        ?>
                </div>
            </div>
        </div>
    </section>
    <?php
                }
    ?>


    <!--single end-->

</div>

<!--body content end-->

<?php
get_footer()
?>