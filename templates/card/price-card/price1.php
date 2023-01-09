<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--pricing start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div
            class="row justify-content-center text-center <?= ($fields['title'] || $fields['description']) ? 'mb-6' : ''; ?>">
            <div class="col-12 col-lg-8">
                <div>
                    <h2><?= $fields['title'] ?></h2>
                    <p class="lead"><?= $fields['description'] ?></p>
                </div>
            </div>
        </div>

        <!-- PriceCards row -->
        <?php
        if (have_rows('price_card')) {
            $row_count = count($fields['price_card']);
        ?>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row align-items-center">
                    <?php

                        while (have_rows('price_card')) {
                            the_row();
                            $dark_theme = get_sub_field('theme') == 'Light' ? false : true;
                        ?>
                    <!-- Price Card -->
                    <div class="col-12  col-lg-4 mb-8 <?= ($row_count > 3) ? '' : 'mb-lg-0'; ?>">
                        <!-- Card -->
                        <div class="card <?= $dark_theme ? 'bg-dark border-0' : ''; ?>  rounded-4">
                            <!-- Body -->
                            <div class="card-body py-8 px-6">
                                <div class="mb-2 d-flex align-items-center">
                                    <i class="bi bi-<?= get_sub_field('icon') ?> fs-1 text-primary me-2"></i>
                                    <h5 class="mb-0 <?= $dark_theme ? 'text-white' : ''; ?>">
                                        <?= get_sub_field('title') ?>
                                    </h5>
                                </div>
                                <p class="<?= $dark_theme ? 'text-light' : ''; ?> mb-4">
                                    <?= get_sub_field('description') ?></p>
                                <!-- Price -->
                                <div
                                    class="d-flex <?= $dark_theme ? ' text-white border-dark ' : 'text-dark border-light'; ?> border-bottom pb-4 mb-4">
                                    <span
                                        class="h6 <?= $dark_theme ? 'text-white' : ''; ?> mb-0 mt-2"><?= get_sub_field('currency') ?></span>
                                    <span
                                        class="price display-2 fw-bold <?= $dark_theme ? 'text-white' : ''; ?>"><?= get_sub_field('price') ?></span>
                                    <span
                                        class="h6 align-self-end mb-1 <?= $dark_theme ? 'text-white' : ''; ?>"><?= get_sub_field('time') ?></span>
                                </div>
                                <!-- Card Features -->
                                <?php
                                        if (get_sub_field('features')) {
                                            foreach (get_sub_field('features') as $key => $list_item) {
                                        ?>
                                <div class="d-flex align-items-center mb-3">
                                    <!-- Check -->
                                    <div class="me-2">
                                        <i class="bi bi-<?= $list_item['icon'] ?> text-primary"></i>
                                    </div>
                                    <!-- Text -->
                                    <p class="mb-0 <?= $dark_theme ? 'text-light' : ''; ?> "><?= $list_item['text'] ?>
                                    </p>
                                </div>
                                <?php
                                            }
                                        }
                                        ?>

                                <!-- Card Features### -->

                                <?php
                                        if (isset(get_sub_field('button_link')['url'])) {
                                        ?>
                                <!-- Button -->

                                <a href="<?= get_sub_field('button_link')['url'] ?>"
                                    class="btn btn-block btn-outline-<?= $dark_theme ? 'light' : 'dark'; ?> mt-5"><?= get_sub_field('button_text') ?></a>
                                <!-- Button ###-->
                                <?php
                                        } // end
                                        ?>
                            </div>
                        </div>
                    </div>
                    <!-- Price Card### -->
                    <?php
                        } //end while(have_rows...
                        ?>
                </div>
            </div>
        </div>

        <?php
        } // end if(have_rows...
        ?>

        <!-- PriceCards row ### -->
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/b3b9dd01-8da3-408d-bf97-301eb5efd93c/fmsV6COvHR.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
    </div>
</section>

<!--pricing end-->