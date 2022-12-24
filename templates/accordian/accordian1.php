<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
$img = $fields["image"];

?>
<!--faq start-->

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bg-light-2 p-lg-8 p-4 rounded-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                            <div>
                                <h6 class="border-bottom border-dark border-2 d-inline-block">
                                    <?= $fields["sub_title"] ?></h6>
                                <h2 class="font-w-6"><?= $fields["title"] ?></h2>
                            </div>
                            <?php
                            if ($img) {
                            ?>
                            <img class="hero-image" src="<?= $img["url"] ?>" alt="<?= $img["title"] ?>">
                            <?php
                            } else { ?>
                            <!-- Image -->
                            <lottie-player
                                src="https://lottie.host/f57c02a8-9265-4873-b44a-f00a5a068318/eDbndF0d2e.json"
                                background="transparent.html" speed="1" style="width: auto; height: auto;" loop
                                autoplay></lottie-player>
                            <?php } ?>

                        </div>
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div class="accordion" id="accordion">
                                <?php

                                if (have_rows('questions',)) {
                                    $counter = 1;
                                    while (have_rows('questions',)) {
                                        the_row()
                                ?>
                                <div class="accordion-item border-0 py-3 rounded-4 mb-4">
                                    <h3 class="accordion-header" id="heading<?= $counter ?>">
                                        <button
                                            class="accordion-button py-0 font-w-6 shadow-none border-0 mb-0 bg-transparent rounded text-dark collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?= $counter ?>" aria-expanded="false"
                                            aria-controls="collapse<?= $counter ?>"> <?= get_sub_field('question') ?>
                                        </button>
                                    </h3>
                                    <div id="collapse<?= $counter ?>" class="accordion-collapse border-0 collapse"
                                        aria-labelledby="heading<?= $counter ?>" data-bs-parent="#accordion">
                                        <div class="accordion-body pt-0 text-muted"><?= get_sub_field('answer') ?></div>
                                    </div>
                                </div>
                                <?php
                                        $counter++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--faq end-->