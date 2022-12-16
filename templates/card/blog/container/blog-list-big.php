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
?>
<!--blog start-->
<section>
    <div class="container">
        <div class="row align-items-end mb-6">
            <div class="col-12 col-md-12 col-lg-6">
                <div>
                    <h6 class="border-bottom border-dark border-2 d-inline-block">Blogs</h6>
                    <h2 class="font-w-6">From Our Blog List Latest News & Article</h2>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 ms-auto">
                <p class="lead mb-0">Advanced cameras combined with a large display, fast performance, and highly
                    calibrated sensors have always made uniquely capable.</p>
            </div>
        </div>
        <!-- / .row -->
        <div class="row align-items-center">
            <?php
            if ($query->have_posts()) {
                $item = 3
            ?>
            <?php



                while ($query->have_posts()) : $query->the_post();


                    if ($item % 3 == 0) {
                        // *Firs Blog Post
                ?>
            <div class="col-md-12 col-lg-5 mb-5 mb-lg-0">
                <article class="card p-4 border-0 shadow rounded-4">
                    <?php
                                get_template_part('templates\card\blog\content\blog-card-thumbnail');
                                get_template_part('templates\card\blog\content\blog-card-body');
                                ?>
                </article>
            </div>
            <?php
                    } else {
                        // *List Blog Posts
                        $class = "mb-4";
                        if ($item % 2 == 0) {
                        ?>
            <div class="col-md-12 col-lg-7 mb-5 mb-lg-0">
                <?php
                        }
                            ?>

                <article class="card p-4 border-0 shadow rounded-4   <?php
                                                                                    if ($item % 2 == 0) {
                                                                                        echo $class;
                                                                                    }
                                                                                    ?>">
                    <div class="row">
                        <div class="col-md-5">
                            <?php
                                        get_template_part('templates\card\blog\content\blog-card-thumbnail', null, ['class' => 'h-100']);
                                        ?>
                        </div>
                        <div class="col-md-7">
                            <?php
                                        get_template_part('templates\card\blog\content\blog-card-body');
                                        ?>
                        </div>
                    </div>
                </article>
                <?php
                            if ($item == 1) {
                            ?>
            </div> <?php
                                }
                            }
                            $item--;
                        endwhile;
                    }
                                    ?>
        </div>
    </div>
</section>

<!--blog end-->