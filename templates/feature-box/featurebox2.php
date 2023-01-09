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
            <!-- Brand Slider -->
            <?php
            if (have_rows('carousel')) {
            ?>

            <div class="row mb-10">
                <div class="col-12">
                    <div class="owl-carousel no-pb owl-loaded owl-drag" data-dots="false" data-items="5"
                        data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30" data-autoplay="true">

                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2121px, 0px, 0px); transition: all 0.25s ease 0s; width: 4244px;">
                                <?php
                                    while (have_rows('carousel')) {
                                        the_row();
                                        $carousel_image = get_sub_field('image');
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
                        <i class="bi bi-<?= get_sub_field('icon') ?> fs-3 text-primary"></i>
                    </div>
                    <div>
                        <h5 class="mb-2"><?= get_sub_field('title') ?></h5>
                        <p class="mb-0"><?= get_sub_field('description') ?></p>
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