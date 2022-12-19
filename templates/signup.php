<!-- Template Name: SignUp
 -->
<?php
// Redirect to the home page if logged in
if (is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
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
                        <h2 class="mb-5 text-center"><?php esc_html_e('Fill Your Details', 'taypo') ?></h2>
                        <form id="signup_form" method="post">
                            <div class="form-message"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" type="text" name="name" class="form-control"
                                            placeholder="<?= __('First name', 'taypo') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="lastName" type="text" name="" class="form-control"
                                            placeholder="<?= __('Last name', 'taypo') ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" type="email" name="email" class="form-control"
                                            placeholder="<?= __('Email', 'taypo') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="userName" type="text" name="userName" class="form-control"
                                            placeholder="<?= __('UserName', 'taypo') ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="password" type="password" name="password" class="form-control"
                                            placeholder="<?= __('Password', 'taypo') ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="passwordRepeat" type="password" name="passwordRepeat"
                                            class="form-control" placeholder="<?= __('Conform Password', 'taypo') ?>"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center mt-4">
                                <div class="col-md-12">
                                    <div class="remember-checkbox clearfix mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input float-none"
                                                id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"> <?= __('I agree to the term of
                                                use and privacy policy', 'taypo') ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col"> <button
                                        class="btn btn-primary"><?= __('Create Account', 'taypo') ?></button>
                                    <?php
                                    $login_url = taypo_get_template_page_url('templates/login.php');

                                    if (!is_user_logged_in() && $login_url != null) { ?>
                                    <span class="mt-4 d-block"><?= __('Have An Account ?', 'taypo') ?> <a
                                            href="<?= $login_url ?>"><i><?= __('Sign In!', 'taypo') ?></i></a></span>

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