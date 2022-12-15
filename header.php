<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <!-- inject css start -->
    <?php wp_head(); ?>
    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <img src="<?= get_template_directory_uri() ?>/assets/libraries/images/loader.gif" alt="">
            </div>
        </div>

        <!-- preloader end -->
        <!--header start-->

        <header class="site-header">
            <div id="header-wrap">
                <div class="container">
                    <div class="row">
                        <!--menu start-->
                        <?php get_template_part('templates/header/nav') ?>
                        <!--menu end-->
                    </div>
                </div>
            </div>
        </header>

        <?php get_template_part('templates\sidebar\public-sidebar');  ?>


        <!--header end-->