<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
?>
<!--feature start-->

<section class="bg-dark position-relative overflow-hidden z-index-1">
    <div class="container">
        <div class="row justify-content-center text-center mb-6">
            <div class="col-12 col-lg-8">
                <div>
                    <h6 class="border-bottom border-light border-2 d-inline-block text-primary">
                        <?= $fields["sub_title"] ?></h6>
                    <h2 class="font-w-6 text-white"><?= $fields["title"] ?></h2>
                </div>
            </div>
        </div>
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
                        <h4 class="mb-3 text-white"><?= get_sub_field('box_title') ?></h4>
                        <p class="mb-4 text-light"><?= get_sub_field('box_description') ?></p>
                        <?php
                                if (get_sub_field('box_link')) {
                                ?>
                        <a class="btn-arrow" href="<?= get_sub_field('box_link') ?>"></a>
                        <?php
                                }
                                ?>
                    </div>
                    <div class="mt-6">
                        <?php
                                if (get_sub_field('box_image')) {
                                    $box_image = get_sub_field('box_image');
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
    </div>
    <div class="position-absolute animation-1 w-100">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
    </div>
</section>

<!--feature end-->