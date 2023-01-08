<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}

?>
<!--counter start-->
<section>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Count Box -->
            <div class="col-12 col-xl-5 col-lg-6 mb-8 mb-lg-0 position-relative">
                <div class="row gx-5 align-items-center text-center z-index-1">
                    <?php
                    $i = 1;
                    if (have_rows('count_box')) {
                        while (have_rows('count_box')) {

                            the_row();
                            if ($i % 2 == 1) {
                                echo '<div class="col-lg-6 col-md-6 mt-5">';
                            }
                    ?>

                    <div class="counter bg-white rounded-4 p-5 py-7 shadow mt-7">
                        <span class="number count text-dark d-inline"
                            data-count="<?= get_sub_field('count_box_value'); ?>"><?= get_sub_field('count_box_value'); ?></span>
                        <span class="text-dark d-inline">+</span>
                        <h6 class="mb-0 text-muted"><?= get_sub_field('count_box_lable'); ?></h6>
                    </div>


                    <?php
                            if ($i % 2 == 0) {
                                echo '</div>';
                            }
                            $i++;
                        }
                        if ($i % 2 == 0) {
                            echo '</div>';
                        }
                    }

                    ?>
                </div>

                <div class="position-absolute animation-1 opacity-1">
                    <lottie-player src="https://lottie.host/aaf17c17-a765-4ec7-b65e-26c3489ee543/yHrgKWUDiE.json"
                        background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                    </lottie-player>
                </div>
            </div>
            <!-- Count Box ### -->

            <div class="col-12 col-xl-6 col-lg-6">
                <!-- Title  -->
                <div>
                    <h2><?= $fields["title"] ?></h2>
                    <p class="lead mb-4"><?= $fields["description"] ?></p>
                </div>
                <!-- Title ###  -->
                <?php
                if (have_rows('list')) {
                    while (have_rows('list')) {
                        the_row();

                ?>
                <!-- List -->
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="bi bi-<?= get_sub_field('list_icon') ?> fs-2 text-primary"></i>
                    </div>
                    <div>
                        <h6 class="mb-2"><?= get_sub_field('list_title') ?></h6>
                        <p class="mb-0"><?= get_sub_field('list_description') ?></p>
                    </div>
                </div>
                <!-- List### -->
                <?php
                    }
                }


                ?>
            </div>
        </div>
    </div>
</section>

<!--counter end-->