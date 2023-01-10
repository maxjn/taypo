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
    // Breadcrumbs
    if (get_field('breadcrumb')) {
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\header\breadcrumb');
    }
    // Breadcrumbs ### -->
    ?>
    <!--single Page start-->
    <?php
    $i = 0; //layout index number
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

                        // Content Placement
                        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\content-placement', null, ['layout' => [$layout, $i], 'layout_fields' => $layout_fields]);


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
