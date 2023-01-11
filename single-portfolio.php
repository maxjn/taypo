<?php
get_header();
?>
<!--body content start-->

<?php
// Breadcrumbs
if (get_field('breadcrumb')) {
    get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\header\breadcrumb');
}
// Breadcrumbs ### -->
?>

<div class="page-content">

    <!--portfolio start-->

    <section>
        <div class="container">
            <div class="row">
                <!-- Start Part -->
                <div class="col-lg-8 col-12 pe-lg-10">
                    <img class="img-fluid w-100 rounded-4 mb-5" src="<?php the_post_thumbnail_url() ?>" alt="">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
                <!-- Start Part ###-->
                <!-- Portfolio Sidebar -->
                <?php if (have_rows('feature')) { ?>
                <div class="col-lg-4 col-12">
                    <div class="bg-white shadow p-5 rounded-4">
                        <h4 class="mb-4"><?= get_field('title') ?></h4>

                        <ul class="cases-meta list-unstyled text-muted">
                            <?php while (have_rows('feature')) {
                                    the_row(); ?>

                            <li class="mb-3 border-bottom border-light pb-3 d-flex">
                                <span class="text-dark font-w-6"> <?= get_sub_field('title') ?>: </span>
                                <?= get_sub_field('description') ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>

                <!-- Portfolio Sidebar ### -->

            </div>
        </div>
    </section>

    <!--portfolio end-->

</div>

<!--body content end-->
<?php
get_footer();
?>
