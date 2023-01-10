<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--testimonial start-->

<section>
    <div class="container">
        <!-- Testimonial Title -->
        <div class="row justify-content-center text-center mb-6">
            <div class="col-12 col-lg-8">
                <div>
                    <h6 class="border-bottom border-dark border-2 d-inline-block"><?= $fields['sub_title'] ?></h6>
                    <h2 class="font-w-6"><?= $fields['title'] ?></h2>
                </div>
            </div>
        </div>
        <!-- Testimonial Title ###-->

        <!-- Testimonial Row -->
        <?php if (have_rows('testimonial')) { ?>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-items="3" data-md-items="2" data-sm-items="1" data-margin="30">

                        <!-- Testimonial Items -->
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1326px, 0px, 0px); transition: all 0s ease 0s; width: 4420px;">
                                <?php while (have_rows('testimonial')) {
                                    the_row();
                                    $row_index = get_row_index(); ?>
                                    <!-- Item -->
                                    <div class="owl-item" style="width: 412px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="card p-3 p-md-5 my-3  <?= ($row_index % 2 == 0) ? 'border-0 shadow' : ''; ?>  bg-white rounded-4">
                                                <div class="card-body p-0">
                                                    <div class="bg-dark mb-4 px-2 rounded-4 d-inline-block"><i class="bi bi-quote fs-3 text-white"></i></div>
                                                    <p class="font-w-5 lead mb-4"><?= get_sub_field('comment') ?></p>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <?php if (get_sub_field('image')) { ?>
                                                                <img alt="Image" src="<?= get_sub_field('image')['url'] ?>" class="img-fluid rounded-circle">
                                                            <?php } //ecn if
                                                            ?>
                                                        </div>
                                                        <div class="ms-3 d-flex">
                                                            <span class="font-w-6 text-dark mb-0"><?= get_sub_field('name') ?></span>
                                                            <small class="text-muted fst-italic"><?= get_sub_field('type') ?></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                <?php } //end while(have_rows...
                                ?>
                            </div>
                        </div>
                        <!-- Testimonial Items ### -->

                        <!-- Testimonial Buttons -->
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <span class="bi bi-arrow-left-short"><span></span></span>
                            </button>
                            <button type="button" role="presentation" class="owl-next"><span class="bi bi-arrow-right-short"></span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                        <!-- Testimonial Buttons### -->

                    </div>
                </div>
            </div>
        <?php } //end if(have_rows...
        ?>
        <!-- Testimonial Row -->

    </div>
</section>

<!--testimonial end-->
