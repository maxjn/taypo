<!-- Template Name: Forgot Password
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

    <!--forgot password start-->

    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <div>
                        <div class="mb-5">
                            <h2><?php esc_html_e('Forgot your password?', 'taypo') ?></h2>
                            <p><?php esc_html_e('Enter your email to reset your password', 'taypo') ?>.</p>
                        </div>
                        <form class="px-sm-10" id="contact-form" method="post"
                            action="https://themeht.com/taypo/html/php/contact.php">
                            <div class="messages"></div>
                            <div class="mb-3">
                                <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="<?php esc_html_e('Email', 'taypo') ?>" required>
                            </div> <button
                                class="btn btn-primary btn-block"><?php esc_html_e('Submit', 'taypo') ?></button>
                        </form>
                        <?php
                        $login_url = taypo_get_template_page_url('templates/login.php');
                        if ($login_url != null) {
                        ?>
                        <div class="mt-4"> <a class="btn-link"
                                href="<?= $login_url ?>"><?php esc_html_e('Back to sign in', 'taypo') ?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--forgot password end-->

</div>


<?php
get_footer()
?>