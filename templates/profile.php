<!-- Template Name: User Profile
Post Type: page
 -->
<?php
// Redirect to the home page if not logged in
if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
} else {
    $user = wp_get_current_user();
}

get_header();
?>

<!--body content start-->

<div class="page-content">

    <!--SignUp start-->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="border border-light rounded-4 p-5">
                        <h2 class="mb-5 text-center"><?php esc_html_e('Your Profile', 'taypo') ?></h2>
                        <form id="profile_form" method="post">
                            <div class="d-flex justify-content-center mb-10">
                                <div>
                                    <img alt="Image" src="<?= get_avatar_url($user->ID, ['size' => '150'])  ?>"
                                        class="img-fluid rounded-circle">
                                </div>
                            </div>
                            <div class="form-message"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" type="email" name="email" class="form-control"
                                            placeholder="<?= __('Email', 'taypo') ?>" required
                                            value="<?= $user->user_email ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="userName" type="text" name="userName" class="form-control"
                                            placeholder="<?= __('UserName', 'taypo') ?>" disabled
                                            value="<?= $user->user_login ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="name" type="text" name="name" class="form-control"
                                            placeholder="<?= __('First name', 'taypo') ?>" required
                                            value="<?= $user->first_name ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="lastName" type="text" name="lastName" class="form-control"
                                            placeholder="<?= __('Last name', 'taypo') ?>" required
                                            value="<?= $user->last_name ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="displayName" type="text" name="displayName" class="form-control"
                                            placeholder="<?= __('Last name', 'taypo') ?>" required
                                            value="<?= $user->display_name ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="row text-center">
                                <div class="col"> <button
                                        class="btn btn-primary"><?= __('Edit Profile', 'taypo') ?></button>
                                    <?php
                                    $edit_pass_url = taypo_get_template_page_url('templates/edit-password.php');

                                    if (is_user_logged_in() && $edit_pass_url != null) { ?>
                                    <span class="mt-4 d-block"><?= __('ٌWeak Password ?', 'taypo') ?> <a
                                            href="<?= $edit_pass_url ?>"><i><?= __('Edit Passeord!', 'taypo') ?></i></a></span>

                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SignUp end-->
</div>


<?php
get_footer()
?>