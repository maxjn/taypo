<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--feature start-->

<section class="px-lg-7 px-2">
    <div class="bg-dark py-10 px-3 px-lg-8 rounded-4 position-relative overflow-hidden z-index-1">
        <div class="container z-index-1">

            <!-- Brand Slider -->
            <?php
            if (have_rows('carousel')) {

                $carousel_class = ($fields["title"] || have_rows('box')) ? 'mb-10' : '';

            ?>

            <div class="row <?= $carousel_class ?>">
                <div class="col-12">
                    <div class="owl-carousel no-pb owl-loaded owl-drag" data-dots="false" data-items="5"
                        data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30" data-autoplay="true">

                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2121px, 0px, 0px); transition: all 0.25s ease 0s; width: 4244px;">
                                <?php
                                    while (have_rows('carousel')) {
                                        the_row();
                                        $carousel_image = get_sub_field('carousel_image');
                                    ?>
                                <!-- Carousel Item -->
                                <div class="owl-item cloned active" style="width: 235.2px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="clients-logo">
                                            <img class="img-fluid" src="<?= $carousel_image['url'] ?>"
                                                alt="<?= $carousel_image['alt'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel Item### -->
                                <?php
                                    } //end while (have_rows('carousel
                                    ?>

                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev">
                                <span class="bi bi-arrow-left-short"><span></span></span>'
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <span class="bi bi-arrow-right-short"></span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
            <?php
            } //end if (have_rows('
            ?>
            <!-- Brand Slider### -->

            <!-- Title -->
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
            <!-- Title### -->

            <!-- Boxes -->
            <div class="row gx-5">
                <?php
                if (have_rows('box')) {
                    while (have_rows('box')) {
                        the_row()
                ?>
                <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
                    <div class="border border-dark bg-dark p-6 rounded-4 f-icon-hover">
                        <div class="mb-4 rounded f-icon-shape-sm"
                            data-bg-color="<?= get_sub_field('box_icon_background_color') ?>">
                            <i class="bi bi-<?= get_sub_field('box_icon') ?> fs-1 text-dark"></i>
                        </div>
                        <div>
                            <h5 class="mb-3 text-white"><?= get_sub_field('box_title') ?></h5>
                            <p class="mb-4 text-light"><?= get_sub_field('box_description') ?></p>
                            <?php
                                    if (get_sub_field('box_link')) {
                                    ?>
                            <a class="btn-arrow" href="<?= get_sub_field('box_link')['url'] ?>"></a>
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
            <!-- Boxes### -->

        </div>
        <div class="position-absolute animation-1 w-100">
            <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
            </lottie-player>
        </div>
    </div>
</section>

<!--feature end-->