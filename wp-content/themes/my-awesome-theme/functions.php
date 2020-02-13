<?php

require_once('include/myFunctions.php');

function register_navwalker(){
    require_once get_template_directory() . '/include/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

// ACTIONS
add_action('wp_enqueue_scripts', 'my_scripts');

//
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'header' => 'Custom Primary Menu',
) );
add_action( 'widgets_init', 'my_widgets_init' );
