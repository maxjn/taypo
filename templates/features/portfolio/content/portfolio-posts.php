<?php
if (isset($args['query'])) { // if there was a $query->
    $query = $args['query'];
    if ($query->have_posts()) {
?>
<!-- Posts Row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row popup-gallery">
            <div class="grid-sizer"></div>
            <?php if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            // Portfolio Card
                            get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\card');
                        } //end while($query->...
                    } //end if ($query...
                    else {
                        get_template_part('templates\content-non');
                    } //end else
                    wp_reset_query();
                    ?>

        </div>
        <?php
                if (is_archive()) {
                    get_template_part('templates\archive\pagination');
                } else {
                ?>
        <div class="text-center">
            <a class="btn btn-primary" href=".\portfolio\"><?php _e('See More', 'taypo') ?></a>
        </div>
        <?php
                }
                ?>

    </div>
</div>
<!-- Posts Row### -->
<?php
    } //end if ($query->have_posts())
} // end if (isset($args['
else {
    ?>
<!-- Posts Row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row popup-gallery">
            <div class="grid-sizer"></div>
            <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        // Portfolio Card
                        get_template_part(TAYPO_DIR_FEATURE_PATH . '\portfolio\content\card');
                    } //end while($query->...
                } //end if ($query...
                else {
                    get_template_part('templates\content-non');
                } //end else

                ?>


        </div>
        <?php // *Pagination
            get_template_part('templates\archive\pagination');
            ?>
    </div>
</div>
<!-- Posts Row### -->
<?php
}
?>