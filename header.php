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

        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close bg-transparent fs-1 ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="bi bi-x-octagon"></i>
                    </button>
                </div>
                <div class="offcanvas-body px-md-10 px-4 py-8">
                    <img class="img-fluid side-logo mb-3"
                        src="<?= get_template_directory_uri() ?>/assets/libraries/images/logo-white.png" alt="">
                    <p class="mb-0 text-white lead">Taypo - Multipurpose Bootstrap5 Template is Most PowerFull template
                        2022 For Everyone, Start working with an company that provide everything you need to generate
                        awareness.</p>
                    <div class="form-info border-top border-dark pt-6 mt-6">
                        <h5 class="text-white border-bottom border-white d-inline-block">Contact info</h5>
                        <ul class="contact-info list-unstyled mt-4">
                            <li class="mb-4 h6 text-light">
                                <i class="text-primary fs-4 align-middle bi bi-geo-alt me-2"></i> 423B, Road Wordwide
                                Country, USA
                            </li>
                            <li class="mb-4 h6">
                                <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
                                <a class="text-light" href="tel:+912345678900">+91-234-567-8900</a>
                            </li>
                            <li class="h6">
                                <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
                                <a class="text-light" href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="border-top border-dark pt-6 mt-6">
                        <h5 class="text-white border-bottom border-white d-inline-block">Follow Us:</h5>
                        <ul class="list-inline mt-4">
                            <li class="list-inline-item me-3">
                                <a class="text-light fs-4" href="#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a class="text-light fs-4" href="#">
                                    <i class="bi bi-dribbble"></i>
                                </a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a class="text-light fs-4" href="#">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a class="text-light fs-4" href="#">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-light fs-4" href="#">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!--header end-->