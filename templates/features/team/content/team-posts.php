<div class="row">
    <?php
    if (isset($args['query'])) { // if there was a $query->
        $query = $args['query'];
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part(TAYPO_DIR_FEATURE_PATH . '\team\content\card');
            }
            if (is_archive()) {
                get_template_part('templates\archive\pagination');
            } else {
    ?>
    <div class="text-center">
        <a class="btn btn-primary" href=".\team_members\"><?php _e('See More', 'taypo') ?></a>
    </div>
    <?php
            }
        }
    } elseif (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part(TAYPO_DIR_FEATURE_PATH . '\team\content\card');
        }
        get_template_part('templates\archive\pagination');
    } // end else
    else {
        get_template_part('templates\content-non');
    }
    ?>
</div>