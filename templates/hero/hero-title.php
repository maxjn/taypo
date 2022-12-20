<?php
if (!is_author()) {
    if (is_archive()) {
        $title = 'Blog';
        $title2 = wp_title(null, false);
    } elseif (is_home()) {
        $title2 = $title = wp_title(null, false);
    }
}
?>
<!--hero section start-->
<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3"><?= $title ?></h1>
                <nav aria-label="breadcrumb" class="bg-white shadow d-inline-block px-4 py-2 rounded-4">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a>
                        </li>
                        <?php
                        if (!is_home()) { ?>

                        <li class="breadcrumb-item"><a href="<?= '' ?>" class="bread-crumb-link"><?= $title ?></a></li>

                        <?php } ?>
                        <li class="breadcrumb-item active text-primary" aria-current="page">
                            <?= $title2 ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
        </lottie-player>
    </div>

</section>

<!--hero section end-->