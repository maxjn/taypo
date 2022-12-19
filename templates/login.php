<!-- Template Name: Login
Post Type: page
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

    <!--Login start-->

    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12">
                    <!-- Image -->
                    <lottie-player src="https://lottie.host/cbbc0c83-044c-4cf0-ba2e-54438fcbafd8/6M8MI7snvI.json"
                        background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                    </lottie-player>
                </div>
                <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                    <div class="border border-light rounded-4 p-5">
                        <h2 class="mb-5">
                            <?php esc_html_e('Login Your Account', 'taypo') ?>
                        </h2>
                        <div class="form-message"></div>
                        <form id="login_form" method="post">
                            <div class="messages"></div>
                            <div class="form-group">
                                <input id="userName" type="text" name="userName" class="form-control"
                                    placeholder="<?php esc_html_e('User name', 'taypo') ?>" required>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control"
                                    placeholder="<?php esc_html_e('Password', 'taypo') ?>" required>
                            </div>
                            <div class="mt-4 mb-5">
                                <div class="remember-checkbox d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember"
                                            name="remember">
                                        <label class="form-check-label"
                                            for="remember"><?php esc_html_e('Remember me', 'taypo') ?></label>
                                    </div>
                                    <?php
                                    $forgot_url = taypo_get_template_page_url('templates/forgot-password.php');
                                    if ($forgot_url != null) {
                                    ?>
                                    <a class="btn-link"
                                        href="<?= $forgot_url ?>"><?php esc_html_e('Forgot Password?', 'taypo') ?></a>
                                    <?php } ?>
                                </div>
                            </div> <button class="btn btn-primary"
                                type="submit"><?php esc_html_e('Login Now', 'taypo') ?></button>
                        </form>

                        <?php
                        $signup_url = taypo_get_template_page_url('templates/signup.php');
                        if ($signup_url != null) {
                        ?>
                        <div class="d-flex align-items-center mt-4"> <span
                                class="text-muted me-1"><?php esc_html_e('Don\'t have an account?', 'taypo') ?></span>
                            <a href="<?= $signup_url ?>"><?php esc_html_e('Sign up', 'taypo') ?></a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Login end-->
</div>


<?php
get_footer()

?>