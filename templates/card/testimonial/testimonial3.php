<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--testimonial start-->

<section class="px-lg-7 px-2">
    <div class="bg-light-2 py-10 px-3 px-lg-8 rounded-4">
        <div class="container">
            <!-- Title -->
            <div class="row justify-content-center text-center mb-6">
                <div class="col-12 col-lg-8">
                    <div>
                        <h6 class="border-bottom border-dark border-2 d-inline-block"><?= $fields['sub_title'] ?></h6>
                        <h2><?= $fields['title'] ?></h2>
                    </div>
                </div>
            </div>
            <!-- Title### -->
            <!-- Testimonial Row -->
            <?php if (have_rows('testimonial')) { ?>

            <div class="row mx-lg-n10">
                <div class="col">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-items="3"
                        data-md-items="2" data-sm-items="1" data-margin="30">
                        <!-- Tistimonal Items -->
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1446px, 0px, 0px); transition: all 0.25s ease 0s; width: 4820px;">
                                <?php while (have_rows('testimonial')) { the_row();?>

                                <div class="owl-item" style="width: 452px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                            <div class="card-body p-0">
                                                <p class="font-w-5 lead mb-3"><?= get_sub_field('comment') ?></p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <?php if( get_sub_field('image')){?>
                                                            <img alt="Image" src="<?= get_sub_field('image')['url'] ?>"
                                                                class="img-fluid rounded-circle">
                                                            <?php } //ecn if ?>
                                                        </div>
                                                        <div class="ms-3 d-flex">
                                                            <span
                                                                class="font-w-6 text-dark mb-0"><?= get_sub_field('name') ?></span>
                                                            <small
                                                                class="text-muted fst-italic"><?= get_sub_field('type') ?></small>
                                                        </div>
                                                    </div>
                                                    <i class="bi bi-quote fs-1 text-dark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } //end while(have_rows...
                                    ?>
                            </div>
                        </div>
                        <!-- Tistimonal Items### -->

                        <!-- Testimonial Buttons -->
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <span class="bi bi-arrow-left-short"><span></span></span>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <span class="bi bi-arrow-right-short"></span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                        <!-- Testimonial Buttons ###-->

                    </div>
                </div>
            </div>
            <?php } //end if(have_rows...
        ?>
            <!-- Testimonial Row ### -->

        </div>
    </div>
</section>

<!--testimonial end-->
