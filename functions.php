<?php

function yoyomoi_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('menu-style', get_bloginfo( 'stylesheet_directory' ) . '/menu.css'); 
}

add_action('wp_enqueue_scripts', 'yoyomoi_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu')
));