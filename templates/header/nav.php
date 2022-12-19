<?php

/**
 * Header Navigation template.
 *
 * @package Taypo
 */

$menu_class     = \Taypo_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('taypo-header-menu');
$header_menus   = wp_get_nav_menu_items($header_menu_id);

?>

<div class="col">
    <nav class="navbar navbar-expand-lg p-4 shadow bg-white">
        <!-- menu logo start -->
        <a class="navbar-brand logo" href="<?= home_url() ?>">
            <?php
            get_template_part('templates\header\logo');
            ?>
        </a>
        <!-- menu logo end -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Header Menu Start -->

        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            if (!empty($header_menus) && is_array($header_menus)) {
            ?>
            <!-- Menu UL Start -->
            <ul class="navbar-nav mx-auto">
                <?php
                    foreach ($header_menus as $menu_item) {
                        if (!$menu_item->menu_item_parent) {

                            $child_menu_items   = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                            $has_children       = !empty($child_menu_items) && is_array($child_menu_items);
                            $has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';
                            $link_target        = !empty($menu_item->target) && '_blank' === $menu_item->target ? '_blank' : '_self';
                            if (!$has_children) {
                    ?>
                <!-- Menu Item Start-->
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"
                        title="<?php echo esc_attr($menu_item->title); ?>">
                        <?php echo esc_html($menu_item->title); ?>
                    </a>
                </li>
                <!-- Menu Item End-->

                <?php
                            } else {
                            ?>
                <!-- Menu dropdown Item  Start-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        href="<?php echo esc_url($menu_item->url); ?>" target="<?php echo esc_attr($link_target); ?>"
                        title="<?php echo esc_attr($menu_item->title); ?>">
                        <?php echo esc_html($menu_item->title); ?>
                    </a>
                    <!-- Dropdown Menu start -->
                    <ul class="dropdown-menu">
                        <?php
                                        foreach ($child_menu_items as $child_menu_item) {
                                            $link_target = !empty($child_menu_item->target) && '_blank' === $child_menu_item->target ? '_blank' : '_self';
                                        ?>

                        <!-- Dropdown Item start -->
                        <li>
                            <a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>"
                                target="<?php echo esc_attr($link_target); ?>"
                                title="<?php echo esc_attr($child_menu_item->title); ?>">
                                <?php echo esc_html($child_menu_item->title); ?>
                            </a>
                        </li>
                        <!-- Dropdown Item End -->
                        <?php
                                        }
                                        ?>

                    </ul>
                    <!-- Dropdown Menu END -->

                </li>
                <!-- Menu dropdown Item End -->

                <?php
                            }
                            ?>

                <?php
                        }
                    }

                    ?>
            </ul>
            <!-- Menu UL End -->

            <?php
            }
            ?>
        </div>
        <!-- Header Menu End -->

        <div class="d-flex align-items-center">

            <?php
            $login_url = taypo_get_template_page_url('templates/login.php');

            if (!is_user_logged_in() && $login_url != null) { ?>
            <!-- Login btn Start -->
            <a class="login-btn btn-link" href="<?= $login_url ?>">
                <i class="bi bi-person me-2 fs-3 align-middle"></i><?= esc_html_e('Login', 'taypo') ?>
            </a>
            <!-- Login btn End -->

            <?php }

            if (is_user_logged_in()) {
                $user = wp_get_current_user();
            ?>

            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle user" data-bs-toggle="dropdown">
                        <!-- User Info Start -->
                        <div class="d-flex align-items-center">
                            <div>
                                <img alt="Image" src="<?= get_avatar_url($user->ID, ['size' => '40'])  ?>"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="ms-3">
                                <span class="font-w-6 text-dark mb-0"><?= $user->display_name ?></span>
                                <small class="text-muted fst-italic"><?= implode(', ', $user->roles)  ?></small>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="" class="dropdown-item">Profile</a>
                        </li>
                        <li> <a class="dropdown-item"
                                href="<?php echo wp_logout_url(home_url()); ?>"><?php esc_html_e('LogOut', 'taypo') ?></a>
                        </li>
                    </ul>
                    <!-- User Info End -->
                </li>
            </ul>
            <?php
            }
            ?>

            <!-- toggle btn start -->
            <div class=" right-menu ms-4">
                <button class="navbar-toggler d-block border-0 p-3 bg-white shadow" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="bi bi-list-nested fs-3 text-dark"></i>
                </button>
            </div>
            <!-- toggle btn end -->
        </div>
    </nav>
</div>