<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--feature start-->

<section class="px-lg-7 px-2">
    <div class="bg-dark py-10 px-3 px-lg-8 rounded-4 position-relative overflow-hidden z-index-1">
        <div class="container z-index-1">
            <div class="row align-items-end justify-content-between mb-6">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div>
                        <h2 class=" text-white"><?= $fields["title"] ?></h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 ms-auto mt-5 mt-lg-0">
                    <p class="lead text-white"><?= $fields["description_text"] ?></p>
                </div>
            </div>
            <div class="row gx-5">
                <?php
                if (have_rows('box')) {
                    while (have_rows('box')) {
                        the_row()
                ?>
                <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
                    <div class="border border-dark bg-dark p-6 rounded-4 f-icon-hover">
                        <div class="mb-4 rounded f-icon-shape-sm" data-bg-color="#faedff">
                            <i class="bi bi-<?= get_sub_field('box_icon') ?> fs-1 text-dark"></i>
                        </div>
                        <div>
                            <h5 class="mb-3 text-white"><?= get_sub_field('box_title') ?></h5>
                            <p class="mb-4 text-light"><?= get_sub_field('box_description') ?></p>
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
        <div class="position-absolute animation-1 w-100">
            <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
            </lottie-player>
        </div>
    </div>
</section>

<!--feature end-->