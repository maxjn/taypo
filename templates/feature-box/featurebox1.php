<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--feature start-->

<section class="px-lg-7 px-2 pb-0">
    <div class="bg-light py-10 px-3 px-lg-8 rounded-4 position-relative overflow-hidden">
        <div class="container z-index-1">
            <div class="row align-items-end justify-content-between mb-6">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div>
                        <h2><?= $fields["title"] ?></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 ms-auto mt-5 mt-lg-0">
                    <p class="lead"><?= $fields["description_text"] ?></p>
                </div>
            </div>
            <div class="row gx-5">
                <?php
                if (have_rows('box', 'options')) {
                    while (have_rows('box', 'options')) {
                        the_row()
                ?>
                <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
                    <div class="bg-white p-6 rounded-4 f-icon-hover">
                        <div class="mb-4 rounded f-icon-shape-sm" data-bg-color="#faedff">
                            <i class="bi bi-<?= get_sub_field('box_icon') ?> fs-1 text-dark"></i>
                        </div>
                        <div>
                            <h5 class="mb-3"><?= get_sub_field('box_title') ?></h5>
                            <p class="mb-4"><?= get_sub_field('box_description') ?></p>
                            <?php
                                    if (get_sub_field('box_link')) {
                                    ?>
                            <a class="btn-arrow" href="<?= get_sub_field('box_link') ?>"></a>
                            <?php
                                    }
                                    ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="position-absolute animation-2">
            <lottie-player src="https://lottie.host/07242462-1734-4c98-95e6-25d242832636/EPSY6EuqM7.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
            </lottie-player>
        </div>
    </div>
</section>

<!--feature end-->