<?php
get_header();
?>



<!--body content start-->

<div class="page-content">

    <!--single post start-->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <?php
                    get_template_part('templates\single\hero-single');

                    the_content();

                    get_template_part('templates\single\single-meta');
                    // Related Posts -->
                    $related_posts = get_field('related_posts');
                    if ($related_posts) {
                        // WP_Query arguments
                        $args = array(
                            'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
                            'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
                            'order'                  => 'DESC', // Also support: ASC
                            'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
                            'post__in' => $related_posts,
                        );

                        // The Query
                        $query = new WP_Query($args);
                        get_template_part('templates\card\blog\container\blog-card-medium', null, ['query' => $query]);
                    }
                    // Related Posts ### -->



                    comments_template('');

                    ?>

                </div>
            </div>
        </div>
    </section>

    <!--single end-->

</div>

<!--body content end-->

<?php
get_footer()
?>