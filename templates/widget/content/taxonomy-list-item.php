<?php

/**
 * Template for entry content.
 *
 * To be used inside a widget container.
 *
 * @package Taypo
 */
$arg = [
    'show_option_all'    => '',
    'show_option_none'   => __('No categories'),
    'orderby'            => 'count',
    'order'              => 'DESC',
    'style'              => 'none',
    'show_count'         => 1,
    'hide_empty'         => 1,
    'use_desc_for_title' => 1,
    'number'             => 8,
    'echo'               => 1,
    'taxonomy'           => isset($args['taxonomy']) ? $args['taxonomy'] : 'category',
    'walker'             => 'Walker_Category',
    'hide_title_if_empty' => false,
];

$taxonomies = get_terms($arg);


foreach ($taxonomies as $taxonomy) {
?>
<li class="mb-3">
    <a class="btn-link d-flex justify-content-between align-items-center"
        href="<?= get_term_link($taxonomy->term_id) ?> ">
        <?= $taxonomy->name   ?> <span class="small bg-light-2 p-2 rounded text-dark"><?= $taxonomy->count ?></span>
    </a>
</li>
<?php
}
?>