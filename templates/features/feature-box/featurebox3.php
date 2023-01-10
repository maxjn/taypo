<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--feature start-->

<section class="bg-dark position-relative overflow-hidden z-index-1">
    <div class="container">

        <!-- Brand Slider -->
        <?php
        if (have_rows('carousel')) {

            $carousel_class = ($fields["title"] || have_rows('box')) ? 'mb-10' : '';

        ?>

        <div class="row <?= $carousel_class ?>">
            <div class="col-12">
                <div class="owl-carousel no-pb owl-loaded owl-drag" data-dots="false" data-items="5" data-md-items="4"
                    data-sm-items="3" data-xs-items="2" data-margin="30" data-autoplay="true">

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

        <!-- Title -->
        <div class="row justify-content-center text-center mb-6">
            <div class="col-12 col-lg-8">
                <div>
                    <h6 class="border-bottom border-light border-2 d-inline-block text-primary">
                        <?= $fields["sub_title"] ?></h6>
                    <h2 class="font-w-6 text-white"><?= $fields["title"] ?></h2>
                </div>
            </div>
        </div>
        <!-- Title### -->

        <!-- Boxes -->
        <div class="row gx-5">
            <?php
            if (have_rows('box')) {
                $i = 1;
                while (have_rows('box')) {
                    the_row();
                    $class = '';
                    if ($i % 2 == 0) {
                        $class = 'mt-6';
                    } elseif ($i % 3 == 0) {
                        $class = 'mt-6 mt-lg-0';
                    };

            ?>
            <div class="col-lg-4 col-md-6 <?= $class ?>">
                <div class="p-6 rounded-4 f-icon-hover border border-dark">
                    <div>
                        <h4 class="mb-3 text-white"><?= get_sub_field('title') ?></h4>
                        <p class="mb-4 text-light"><?= get_sub_field('description') ?></p>
                        <?php
                                if (get_sub_field('link')) {
                                ?>
                        <a class="btn-arrow" href="<?= get_sub_field('link')['url'] ?>"></a>
                        <?php
                                }
                                ?>
                    </div>
                    <div class="mt-6">
                        <?php
                                if (get_sub_field('image')) {
                                    $box_image = get_sub_field('image');
                                ?>
                        <img class="img-fluid" src="<?= $box_image['url'] ?>" alt="<?= $box_image['title'] ?>">
                        <?php } ?>
                    </div>
                </div>
            </div>

            <?php
                    $i++;
                }
            }
            ?>
        </div>
        <!-- Boxes### -->

    </div>
    <div class="position-absolute animation-1 w-100">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
    </div>
</section>

<!--feature end-->