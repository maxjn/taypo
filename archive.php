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

    if (is_post_type_archive('post') || is_category() || is_tag()) {
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\card\blog\container\blog-card-small');
    } elseif (is_tax('portfolio_category')) {
    ?>
    <section>
        <div class="container">
            <?php
                // Portfolio Card
                get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\portfolio-posts');
                ?>
        </div>
    </section>
    <?php
    } elseif (is_tax('team_member_position')) {
    ?>
    <section>
        <div class="container">
            <?php
                // Portfolio Card
                get_template_part(TAYPO_DIR_FEATURE_PATH . '\team\content\team-posts');
                ?>
        </div>
    </section>
    <?php
    }
    ?>
</div>

<!--body content end-->
<?php
get_footer();