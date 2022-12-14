<?php

/**
 * Template for entry content.
 *
 * To be used in sidebar and post single where tags are nedded.
 *
 * @package Taypo
 *
 * @param string $show
 */

if (isset($args['show'])) { // if there was a $show->
    $show = $args['show'];
}

if ($show == 'all') {
    // *All Tags
    $tags = get_tags();
    $html = '<div>';
    foreach ($tags as $tag) {
        $tag_link = get_tag_link($tag->term_id);

        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1'>";
        $html .= "{$tag->name}</a>";
    }
    $html .= '</div>';
    echo $html;
} else {
    // *Post Tags
    $before = '<ul class="list-inline mb-0 widget-tags">
              <li class="list-inline-item btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3">';
    $sep = '</li><li class="list-inline-item btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3">';
    $after = '</li></ul>';
    the_tags($before, $sep, $after);
}