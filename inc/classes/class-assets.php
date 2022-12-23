<?php

/**
 * Enqueue theme assets
 *
 * @package Aquila
 */

namespace TAYPO_THEME\Inc;

use TAYPO_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {

        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {

        // Register styles.
        wp_register_style('style', get_stylesheet_uri());

        wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap', array());
        wp_register_style('swipe-style-livrary', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array('font'));
        wp_register_style('style-main', TAYPO_DIST_CSS_URI . '/style.css', array('swipe-style-livrary'));



        // Enqueue Styles.
        wp_enqueue_style('atyle');
        wp_enqueue_style('font');
        wp_enqueue_style('style-main');
    }

    public function register_scripts()
    {
        // Register scripts.
        wp_register_script('my-jquery', TAYPO_DIST_JS_URI . '/jquery.min.js', false, 1.1, true);
        wp_register_script('bootstrap', TAYPO_DIST_JS_URI . '/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
        wp_register_script('modernizr', TAYPO_DIST_JS_URI . '/modernizr.min.js', array('bootstrap'), 1.1, true);
        wp_register_script('jquery-appear', TAYPO_DIST_JS_URI . '/jquery-appear.js', array('modernizr'), 1.1, true);
        wp_register_script('lottie-player', TAYPO_DIST_JS_URI . '/lottie-player.js', array('jquery-appear'), 1.1, true);
        wp_register_script('owl-carousel', TAYPO_DIST_JS_URI . '/owl.carousel.min.js', array('lottie-player'), 1.1, true);
        wp_register_script('isotope.pkgd.min', TAYPO_DIST_JS_URI . '/isotope.pkgd.min.js', array('owl-carousel'), 1.1, true);
        wp_register_script('magnific-popup', TAYPO_DIST_JS_URI . '/jquery.magnific-popup.min.js', array('isotope.pkgd.min'), 1.1, true);
        wp_register_script('odometer', TAYPO_DIST_JS_URI . '/odometer.min.js', array('magnific-popup'), 1.1, true);
        wp_register_script('countdown', TAYPO_DIST_JS_URI . '/jquery.countdown.min.js', array('odometer'), 1.1, true);
        wp_register_script('typer', TAYPO_DIST_JS_URI . '/typer.js', array('countdown'), 1.1, true);
        wp_register_script('theme-script', TAYPO_DIST_JS_URI . '/theme-script.js', array('typer'), 1.1, true);
        wp_register_script('swiper-library', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('theme-script'), 1.1, true);
        wp_register_script('swiper-script', TAYPO_DIST_JS_URI . '/swiper-script.js', array('swiper-library'), 1.1, true);
        wp_register_script('main', TAYPO_DIST_JS_URI . '/main.js',  array('swiper-script'), 1.1, true);

        wp_localize_script('main', 'ajax_object', [
            'ajax_url'    => admin_url('admin-ajax.php'),
            'ajax_nonce' => wp_create_nonce('myajax_nonces'),
        ]);

        // Enqueue Scripts.
        wp_enqueue_script('my-jquery');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('modernizr');
        wp_enqueue_script('jquery-appear');
        wp_enqueue_script('lottie-player');
        wp_enqueue_script('owl-carousel');
        wp_enqueue_script('isotope.pkgd.min');
        wp_enqueue_script('magnific-popup');
        wp_enqueue_script('odometer');
        wp_enqueue_script('countdown');
        wp_enqueue_script('typer');
        wp_enqueue_script('theme-script');
        wp_enqueue_script('main');
    }
}