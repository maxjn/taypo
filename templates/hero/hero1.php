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
                <lottie-player src="https://lottie.host/3ddc0e30-a9f7-48e1-9b8d-a0ead2fa5ee4/JrQpGMHV6n.json"
                    background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                </lottie-player>
                <?php } ?>
            </div>
            <div class="col-12 col-lg-5">
                <h1 class="font-w-4"> <?= $fields["title_firs_part"] ?> <span
                        class="title-bg text-primary position-relative font-w-7 d-inline-block"><?= $fields["title_main_part"] ?></span>
                    <br class="d-md-block d-none"> <?= $fields["title_last_part"] ?>
                </h1>
                <!-- Text -->
                <p class="lead text-dark"><?= $fields["description_text"] ?></p>
                <?php
                if ($fields["from_action"] !== '') { ?>

                <!-- Form -->
                <form id="mc-form1" class="group" action="<?= $fields["from_action"] ?>">
                    <div class="input-group form-group bg-light p-3 rounded mb-0">
                        <input type="email" value="" name="EMAIL" class="email form-control border-0" id="mc-email1"
                            placeholder="Email Address" required="">
                        <input class="btn btn-dark" type="submit" name="subscribe"
                            value="<?= $fields["form_button_text"] ?>">
                    </div>
                </form>
                <!-- Form### -->

                <?php } ?>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/0de28702-1a29-48d3-892d-16f278889351/i4201FkTJi.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
    </div>
</section>

<!--hero section end-->