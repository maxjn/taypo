<?php
$login_url = taypo_get_template_page_url('templates/login.php');
$profile_url = taypo_get_template_page_url('templates/profile.php');
$edit_pass_url = taypo_get_template_page_url('templates/edit-password.php');
$liked_posts_url = taypo_get_template_page_url('templates/liked-posts.php');
$saved_posts_url = taypo_get_template_page_url('templates/saved-posts.php');

?>
<?php
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

<ul class="profile-menu navbar-nav mx-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle user" data-bs-toggle="dropdown">
            <!-- User Info Start -->
            <div class="d-flex align-items-center">
                <div>
                    <img alt="Image" src="<?= get_avatar_url($user->ID, ['size' => '40'])  ?>"
                        class="img-fluid rounded-circle">
                </div>
                <div class="ms-3">
                    <span class="display-name font-w-6 mb-0"><?= $user->display_name ?></span>
                    <small class="text-muted fst-italic"><?= implode(', ', $user->roles)  ?></small>
                </div>
            </div>
        </a>
        <ul class="dropdown-menu">

            <?php
                if ($profile_url != null) { ?>
            <li>
                <a href="<?= $profile_url ?>" class="dropdown-item"><?php esc_html_e('Profile', 'taypo') ?></a>
            </li>
            <?php }
                if ($liked_posts_url != null) { ?>
            <li>
                <a href="<?= $liked_posts_url ?>" class="dropdown-item"><?php esc_html_e('Liked Posts', 'taypo') ?></a>
            </li>
            <?php }
                if ($saved_posts_url != null) { ?>
            <li>
                <a href="<?= $saved_posts_url ?>" class="dropdown-item"><?php esc_html_e('Saved Posts', 'taypo') ?></a>
            </li>
            <?php }
                if ($edit_pass_url != null) { ?>
            <li>
                <a href="<?= $edit_pass_url ?>" class="dropdown-item"><?php esc_html_e('Edit Password', 'taypo') ?></a>
            </li>
            <?php } ?>
            <li> <a class="dropdown-item"
                    href="<?php echo wp_logout_url(get_permalink()); ?>"><?php esc_html_e('LogOut', 'taypo') ?></a>
            </li>
        </ul>
        <!-- User Info End -->
    </li>
</ul>

<?php
}
?>