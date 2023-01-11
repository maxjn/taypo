<?php
// WP_Query argument For all the portfolio posts
$posts_number = (is_front_page()) ? 6 : -1;
$args = array(
    'post_type'              => array('portfolio'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => $posts_number, // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
);

// The Query
$query = new WP_Query($args);
?>
<!-- Posts Row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row popup-gallery">
            <div class="grid-sizer"></div>
            <?php if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $post_id = get_the_ID();
                    $categories = get_the_terms($post_id, 'portfolio_category'); //arry of term objects
            ?>
            <!-- Post Item -->

            <div class="grid-item col-lg-4 col-md-6 mb-5
            <?php //categories
                    foreach ($categories as $category) {
                        echo $category->slug;
                    } //end foreach
            ?>
            ">

                <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                    <img class="img-fluid w-100 rounded-4" src="<?php the_post_thumbnail_url() ?>"
                        alt="<?= get_the_title() ?>">
                    <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <?php  //categories
                                    foreach ($categories as $category) {
                                    ?>
                            <small class="mb-2"> <?= $category->name ?></small>
                            <?php } //end foreach
                                    //categories ###
                                    ?>

                            <h6 class="mb-0">
                                <a class="btn-link" href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                            </h6>
                        </div>
                        <a class="popup-img btn-link" href="<?php the_post_thumbnail_url() ?>">
                            <i class="bi bi-patch-plus fs-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Post Item### -->
            <?php } //end while($query->...
            } //end if ($query...
            else {
                get_template_part('templates\content-non');
            } //end else
            wp_reset_query();
            ?>

        </div>
    </div>
</div>
<!-- Posts Row### -->