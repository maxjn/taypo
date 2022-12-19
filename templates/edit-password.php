<!-- Template Name: Edit Password
Post Type: page
 -->
<?php
// Redirect to the home page if logged in
if (!is_user_logged_in()) {
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
                            <?php esc_html_e('Edit Password', 'taypo') ?>
                        </h2>
                        <div class="form-message"></div>
                        <form id="edit_password_form" method="post">
                            <div class="form-group">
                                <input id="currentPassword" type="password" name="currentPassword" class="form-control"
                                    placeholder="<?php esc_html_e('Current Password', 'taypo') ?>" required>
                            </div>
                            <div class="form-group">
                                <input id="newPassword" type="password" name="newPassword" class="form-control"
                                    placeholder="<?php esc_html_e('New Password', 'taypo') ?>" required>
                            </div>
                            <div class="form-group">
                                <input id="repeatPassword" type="password" name="repeatPassword" class="form-control"
                                    placeholder="<?php esc_html_e('New Password Conform', 'taypo') ?>" required>
                            </div>
                            <button class="btn btn-primary"
                                type="submit"><?php esc_html_e('Edit Password', 'taypo') ?></button>
                        </form>

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