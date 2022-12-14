<?php

/**
 * Theme Functions.
 *
 * @package Taypo
 */


if (!defined('TAYPO_DIR_PATH')) {
    define('TAYPO_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('TAYPO_DIR_URI')) {
    define('TAYPO_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


require_once TAYPO_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once TAYPO_DIR_PATH . '/inc/helpers/template-tags.php';

function taypo_get_theme_instance()
{
    \TAYPO_THEME\Inc\TAYPO_THEME::get_instance();
}

taypo_get_theme_instance();