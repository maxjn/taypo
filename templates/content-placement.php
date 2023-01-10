<?php
if (isset($args['layout']) && isset($args['layout_fields'])) {
    $layout = $args['layout'][0];
    $i = $args['layout'][1];
    $layout_fields = $args['layout_fields'];
}
switch ($layout) {
    case 'hero_secction_1':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\hero\hero1', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'hero_secction_2':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\hero\hero2', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'hero_secction_3':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\hero\hero3', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'feature_box_1':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\feature-box\featurebox1', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'feature_box_2':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\feature-box\featurebox2', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'feature_box_3':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\feature-box\featurebox3', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'feature_box_4':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\feature-box\featurebox4', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'accordion_1':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\accordian\accordian1', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'accordion_2':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\accordian\accordian2', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'banner':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\banner\banner', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'counter':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\counter\counter', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'latest_posts_1':
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\card\blog\container\blog-card-small', null, ['query' => $query]);
        break;
    case 'latest_posts_2':
        get_template_part(TAYPO_DIR_TEMPLATE_PATH . '\card\blog\container\blog-list-big', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'price_table_1':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\price-card\price1', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'price_table_2':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\price-card\price2', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'price_table_3':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\price-card\price3', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'testimonial_1':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\testimonial\testimonial1', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'testimonial_2':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\testimonial\testimonial2', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'testimonial_3':
        get_template_part(TAYPO_DIR_FEATURE_PATH . '\testimonial\testimonial3', null, ['fields' => $layout_fields[$i]]);
        break;
    case 'comment_section':
        if (!is_front_page()) {
            comments_template('');
        }
        break;
    case 'content_section':
        if (!is_front_page()) {
            the_content();
        }
        break;
}
