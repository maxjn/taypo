<?php
get_header();
?>
<!--body content start-->

<div class="page-content">

    <?php
    $i = 0; //layout index number
    //dynamic content
    if (have_rows('content_placement', 'options')) {
        while (have_rows('content_placement', 'options')) {
            the_row();

            // every layout and their fields
            $layout_fields = get_fields('options')['content_placement'];

            // Get the row layout.
            $layout = get_row_layout();

            // Content Placement
            get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\content-placement', null, ['layout' => [$layout, $i], 'layout_fields' => $layout_fields]);

            $i++;
        }
    } else {
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\card\blog\container\blog-card-small', null, ['query' => $query]);
    }
    //dynamic content ###


    ?>
</div>

<!--body content end-->
<?php
get_footer();