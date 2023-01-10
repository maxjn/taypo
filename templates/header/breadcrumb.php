<?php
if (!is_author()) {
    if (is_archive()) {
        $title = __('Archive', 'taypo');
    } elseif (is_home()) {
        $title = __('Blog', 'taypo');
    } else {
        $title = get_the_title();
    }
}
?>
<!--Breadcrumb start-->
<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3"><?= $title ?></h1>
                <nav aria-label="breadcrumb" class="bg-white shadow d-inline-block px-4 py-2 rounded-4">
                    <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
                </nav>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json" background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
        </lottie-player>
    </div>

</section>

<!--Breadcrumb end-->
