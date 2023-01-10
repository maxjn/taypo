<?php
// WP_Query argument For the last 3 posts
$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => '3', // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
);

// The Query
$query = new WP_Query($args);

get_header();
?>
<!--body content start-->

<div class="page-content">

    <?php
    $i = 0; //layout andis number
    //dynamic content
    if (have_rows('content_placement', 'options')) {
        while (have_rows('content_placement', 'options')) {
            the_row();

            // every layout and their fields
            $layout_fields = get_fields('options')['content_placement'];

            // Get the row layout.
            $layout = get_row_layout();

            switch ($layout) {
                case 'hero_secction_1':
                    get_template_part(TAYPO_DIR_Template_PATH . '\hero\hero1', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'hero_secction_2':
                    get_template_part(TAYPO_DIR_Template_PATH . '\hero\hero2', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'hero_secction_3':
                    get_template_part(TAYPO_DIR_Template_PATH . '\hero\hero3', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'feature_box_1':
                    get_template_part(TAYPO_DIR_Template_PATH . '\feature-box\featurebox1', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'feature_box_2':
                    get_template_part(TAYPO_DIR_Template_PATH . '\feature-box\featurebox2', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'feature_box_3':
                    get_template_part(TAYPO_DIR_Template_PATH . '\feature-box\featurebox3', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'feature_box_4':
                    get_template_part(TAYPO_DIR_Template_PATH . '\feature-box\featurebox4', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'accordion_1':
                    get_template_part(TAYPO_DIR_Template_PATH . '\accordian\accordian1', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'accordion_2':
                    get_template_part(TAYPO_DIR_Template_PATH . '\accordian\accordian2', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'banner':
                    get_template_part(TAYPO_DIR_Template_PATH . '\banner\banner', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'counter':
                    get_template_part(TAYPO_DIR_Template_PATH . '\counter\counter', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'latest_posts_1':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\blog\container\blog-card-small', null, ['query' => $query]);
                    break;
                case 'latest_posts_2':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\blog\container\blog-list-big', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'price_table_1':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\price-card\price1', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'price_table_2':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\price-card\price2', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'price_table_3':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\price-card\price3', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'testimonial_1':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\testimonial\testimonial1', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'testimonial_2':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\testimonial\testimonial2', null, ['fields' => $layout_fields[$i]]);
                    break;
                case 'testimonial_3':
                    get_template_part(TAYPO_DIR_Template_PATH . '\card\testimonial\testimonial3', null, ['fields' => $layout_fields[$i]]);
                    break;
            }



            $i++;
        }
    } else {
        get_template_part(TAYPO_DIR_Template_PATH . '\card\blog\container\blog-card-small', null, ['query' => $query]);
    }
    //dynamic content ###


    ?>
</div>

<!--body content end-->
<?php
get_footer();
