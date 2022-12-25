<!-- Template Name: Coming Soon
Post Type: page
 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- inject css start -->
    <?php
    wp_head();
    ?>
    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <img src="<?= TAYPO_DIR_IMG_URI ?>/loader.gif" alt="">
            </div>
        </div>

        <!-- preloader end -->


        <!--body content start-->

        <div class="page-content">

            <!--coming soon start-->

            <section class="vh-100 p-0">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-7">
                            <lottie-player
                                src="https://lottie.host/f5023cd7-e21f-486a-9234-9eb8f530c5bb/kGdlD7yW5h.json"
                                background="transparent.html" speed="1" style="width: auto; height: auto;" loop
                                autoplay></lottie-player>
                            <div class="coming-soon">
                                <ul class="countdown list-inline d-flex justify-content-between mt-8 mb-0"
                                    data-countdown="<?= get_field('unvieling_date') ?>"></ul>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-auto">
                            <!-- logo start -->
                            <a class="navbar-brand logo" href="<?= home_url() ?>">
                                <?php
                                get_template_part('templates\header\logo');
                                ?>
                            </a>
                            <!-- logo end -->
                            <div class="mt-5">
                                <?php
                                if (get_field('subscribe_action')) {
                                ?>
                                <h4 class="mb-4"><?php esc_html_e('Subscribe to get notified!', 'taypo'); ?></h4>
                                <!-- Subscribe form start -->

                                <div class="subscribe-form">
                                    <form id="mc-form" class="group" action="<?= get_field('subscribe_action') ?>">
                                        <input value="" name="EMAIL" class="email form-control" id="mc-email"
                                            placeholder="<?php _e('Email Address', 'taypo') ?>" required=""
                                            type="email">
                                        <input class="btn btn-primary btn-block mt-3 mb-2" name="subscribe"
                                            value="Subscribe Now" type="submit">
                                    </form>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- Subscribe form end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--coming soon end-->

        </div>

        <!--body content end-->

    </div>

    <!-- inject js start -->

    <?php
    wp_footer();
    ?>
    <!-- inject js end -->

</body>

</html>