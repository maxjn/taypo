<?php

/**
 * Custom template tags for the theme.
 *
 * @package Taypo
 */

/**
 * Get the url of the page that uses the spisific template.
 *
 * If 'null' was returned it means that the template has not been used.
 *
 * @param string $TEMPLATE_NAME template name / relative path
 *
 * @return null|string
 */
function taypo_get_template_page_url($TEMPLATE_NAME)
{
    $url = null;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $TEMPLATE_NAME
    ));
    if (isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}

/**
 * Get the trimmed version of post excerpt.
 *
 * This is for modifing manually entered excerpts,
 * NOT automatic ones WordPress will grab from the content.
 *
 * It will display the first given characters ( e.g. 100 ) characters of a manually entered excerpt,
 * but instead of ending on the nth( e.g. 100th ) character,
 * it will truncate after the closest word.
 *
 * @param int $trim_character_count Charter count to be trimmed
 *
 * @return bool|string
 */
function taypo_the_excerpt($trim_character_count = 0)
{
    $post_ID = get_the_ID();

    if (empty($post_ID)) {
        return null;
    }

    if (has_excerpt() || 0 === $trim_character_count) {
        the_excerpt();

        return;
    }

    $excerpt = wp_html_excerpt(get_the_excerpt($post_ID), $trim_character_count, '[...]');


    echo $excerpt;
}