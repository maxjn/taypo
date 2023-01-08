<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
$hero_img = $fields["hero_image"];
?>

<!--hero section start-->

<section class="px-lg-10 pb-0 pt-5">
    <div class="overflow-hidden position-relative bg-light-3 z-index-1 rounded-4 py-10">
        <div class="container z-index-1">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                    <?php
                    if ($hero_img) {
                    ?>
                    <img class="hero-image" src="<?= $hero_img["url"] ?>" alt="<?= $hero_img["title"] ?>">
                    <?php
                    } else { ?>
                    <!-- Image -->
                    <lottie-player src="https://lottie.host/b14a820f-04dd-421a-8a4e-5ec6e1213216/wKVIQvfzPQ.json"
                        background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                    </lottie-player>
                    <?php } ?>

                </div>
                <div class="col-12 col-lg-6 ps-lg-8">
                    <h1 class="font-w-6 mb-5"><?= $fields["title"] ?> </h1>
                    <!-- Text -->
                    <p class="lead mb-6"><?= $fields["description_text"] ?></p>
                    <div>
                        <?php if ($fields["button_link"]) { ?>
                        <a class="btn btn-dark me-3"
                            href="<?= $fields["button_link"]['url'] ?>"><?= $fields["button_text"] ?></a>
                        <?php }
                        if ($fields["video_button_link"]) {
                        ?>
                        <a href="<?= $fields["video_button_link"] ?>"
                            class="popup-youtube btn-link bg-white d-inline-block px-3 py-1 rounded-4 shadow">
                            <i
                                class="bi bi-play-circle-fill text-primary me-2 fs-3 align-middle"></i><?= $fields["video_button_text"] ?></a>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <div class="position-absolute animation-1 w-100">
            <lottie-player src="https://lottie.host/0de28702-1a29-48d3-892d-16f278889351/i4201FkTJi.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
            </lottie-player>
        </div>
    </div>
    <!-- / .container -->
</section>

<!--hero section end-->