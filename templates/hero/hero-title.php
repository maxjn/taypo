<?php
$title = '';
$page = '';
if (is_archive()) {
    $title = get_the_archive_title();
    $page = 'Archive';
}
?>

<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3"><?php wp_title(null) ?></h1>
                <nav aria-label="breadcrumb" class="bg-white shadow d-inline-block px-4 py-2 rounded-4">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item"><?= $page ?></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">
                            <?= $title ?></li>
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