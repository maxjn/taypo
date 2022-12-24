<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
$feature_image = $fields['feature_image'];
?>
<!--feature start-->

<section class="py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-8 mb-lg-0 order-lg-1">
                <?php if ($feature_image) {
                ?>
                <img class="hero-image" src="<?= $feature_image["url"] ?>" alt="<?= $feature_image["title"] ?>">
                <?php
                } else { ?>
                <!-- Image -->
                <lottie-player src="https://lottie.host/59b582ff-e14a-46cc-bdcf-26c9113d5578/vAWK9sbfhe.json"
                    background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                </lottie-player>
                <?php } ?>

            </div>
            <div class="col-12 col-lg-6">
                <div>
                    <h2 class="mb-5"><?= $fields["title"] ?></h2>
                </div>
                <?php
                if (have_rows('box')) {
                    while (have_rows('box')) {
                        the_row()
                ?>
                <div class="d-flex align-items-start mb-4">
                    <div class="me-3">
                        <i class="bi bi-<?= get_sub_field('box_icon') ?> fs-3 text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-2"><?= get_sub_field('box_title') ?></h5>
                        <p class="mb-0"><?= get_sub_field('box_description') ?></p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!--feature end-->