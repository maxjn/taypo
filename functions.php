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
if (!defined('TAYPO_DIST_PATH')) {
    define('TAYPO_DIST_PATH', untrailingslashit(get_template_directory()) . '/assets/dist');
}

if (!defined('TAYPO_DIST_URI')) {
    define('TAYPO_DIST_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist');
}
if (!defined('TAYPO_DIST_JS_PATH')) {
    define('TAYPO_DIST_JS_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/js');
}

if (!defined('TAYPO_DIST_JS_URI')) {
    define('TAYPO_DIST_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist/js');
}
if (!defined('TAYPO_DIST_CSS_PATH')) {
    define('TAYPO_DIST_CSS_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/css');
}

if (!defined('TAYPO_DIST_CSS_URI')) {
    define('TAYPO_DIST_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist/css');
}


require_once TAYPO_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once TAYPO_DIR_PATH . '/inc/helpers/template-tags.php';

function taypo_get_theme_instance()
{
    \TAYPO_THEME\Inc\TAYPO_THEME::get_instance();
}

taypo_get_theme_instance();