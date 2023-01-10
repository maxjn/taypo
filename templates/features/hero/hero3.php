<?php
if (isset($args['fields'])) {
    $fields = $args['fields'];
}
$hero_img = $fields["hero_image"];
?>
<!--hero section start-->

<section class="overflow-hidden position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 order-lg-1 ms-auto mb-8 mb-lg-0">
                <?php
                if ($hero_img) {
                ?>
                <img class="hero-image" src="<?= $hero_img["url"] ?>" alt="<?= $hero_img["title"] ?>">
                <?php
                } else { ?>
                <!-- Image -->
                <lottie-player src="https://lottie.host/c0af2a8e-be32-464f-acc2-644da3f6834a/xlsvxusXcE.json"
                    background="transparent.html" speed="1" style="width: auto; height: auto;" loop="" autoplay="">
                </lottie-player>
                <?php } ?>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="font-w-4"><?= $fields["title"] ?></h1>
                <h1 class="font-w-4">
                    <span class="typer text-primary"
                        data-words="<?= $fields["typer_text"] ?>"><?= $fields["typer_fixed_part"] ?> &nbsp; </span><span
                        class="typed-cursor">|</span>
                </h1>
                <!-- Text -->
                <p class="lead my-5 text-dark"><?= $fields["description_text"] ?></p>
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
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/0de28702-1a29-48d3-892d-16f278889351/i4201FkTJi.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop="" autoplay="">
        </lottie-player>
    </div>
</section>
<!--hero section end-->