<?php
get_header();



?>
<!--body content start-->

<div class="page-content">
    <?php

    if (is_author()) {
        // Author Info
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\archive\author-info');
        // Author Info ### -->
    } else {
        // Breadcrumbs
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\header\breadcrumb');
        // Breadcrumbs ### -->
    }
    ///*Posts
    get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\card\blog\container\blog-card-small');
    ?>
</div>

<!--body content end-->
<?php
get_footer();
