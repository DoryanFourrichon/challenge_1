<?php

/**
 *  Theme standard - Retro-compatibility > 5.2
 */
if ( !function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

function register_assets(){
    wp_enqueue_script('sliderJs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js',array(),'4.0.7',true);

    wp_enqueue_style('splideJsCss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js');

    wp_enqueue_style('splideJsCssCore', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide-core.min.css', array());

    wp_enqueue_style('splideJsCssTheme', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/themes/splide-default.min.css', array());
}

add_action('wp_enqueue_scripts','register_assets');
/**
 *  Includes
 */
require_once get_stylesheet_directory() . '/includes/class-project.php';
