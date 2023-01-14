<?php
get_header();
$positions = get_the_terms(get_the_ID(), 'team_member_position'); //arry of term objects

// Breadcrumbs
if (get_field('breadcrumb')) {
    get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\header\breadcrumb');
}
// Breadcrumbs ### -->

?>
<!--body content start-->
<div class="page-content">
    <!--team details start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="shadow p-4 bg-white rounded-4">
                        <img class="img-fluid w-100 rounded-4" src="<?php the_post_thumbnail_url() ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mt-5 mt-lg-0 ps-lg-6">
                    <div class="team-description">
                        <h2 class="mb-3 d-flex"> <?= get_the_title() ?> <span class="text-primary">-
                                <?php  //Positions
                                foreach ($positions as $position) {
                                ?><?= $position->name ?>
                                <?php } //end foreach
                                //Positions ###
                            ?>
                        </h2>
                        <?= get_the_content(); ?>

                        <!-- Contact Info -->
                        <div class="team-cntct d-flex justify-content-between">
                            <!-- Phone & Email -->
                            <ul class="media-icon list-unstyled font-w-5">
                                <?php
                                if (have_rows('email')) {
                                    while (have_rows('email')) {
                                        the_row();
                                ?>
                                <li class="mb-2 d-flex align-items-center">
                                    <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
                                    <a class="btn-link"
                                        href="mailto:<?= get_sub_field('address') ?>"><?= get_sub_field('address') ?></a>
                                </li>
                                <?php

                                    } //end while (have_rows('
                                } //end if

                                if (have_rows('phone')) {
                                    while (have_rows('phone')) {
                                        the_row();
                                    ?>

                                <li class="mb-2 d-flex align-items-center">
                                    <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
                                    <a class="btn-link"
                                        href="tel:<?= get_sub_field('number') ?>"><?= get_sub_field('number') ?></a>
                                </li>
                                <?php
                                    } //end while (have_rows('
                                } // if (have_rows('
                                ?>
                            </ul>
                            <!-- Phone & Email### -->

                            <!-- Social Media-->

                            <div>
                                <h6><?php _e('Follow Us:', 'taypo') ?></h6>
                                <ul class="list-inline mb-0">
                                    <?php
                                    if (have_rows('social_media')) {
                                        while (have_rows('social_media')) {
                                            the_row();
                                    ?>
                                    <li class="list-inline-item">
                                        <a class="border rounded px-2 py-1 text-dark"
                                            href="<?= get_sub_field('link') ?>">
                                            <i class="bi bi-<?= get_sub_field('icon') ?>"></i>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div>
                            <!-- Social Media###-->

                        </div>
                        <!-- Contact Info ### -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--team details end-->

    <?php
    if (have_rows('team')) {
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\team\container\team-feature', null, ['single_fields' => get_field('team')]);
    }
    ?>
    <!--team Feature start-->

    <!--team Feature end-->
</div>
<!--body content end-->

<?php
get_footer();