<?php
/*
Theme Name: Han Wang's itc210 Demo
Author: Han Wang of itc210 Class
Author URI: http://han0919.com/
Description: This is my demo theme for the itc210 WordPress class.
Version: 1.0
*/


//Register Nav Menus
/*register_nav_menus(array('main-menu'=>__('Main Menu')));

register_nav_menus(array('maintwo-menu'=>__('Maintwo Menu'))); */
// Register My Menus
register_nav_menus(
    array(
        'Main1' => 'Main1',
         'Main2' => 'Main2',
        
    )
);
//






add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'your-script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/javascript.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}


/*
if (function_exists("register_sidebar")) {
register_sidebar();
}

function wpb_widgets_init() {
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'          => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'wpb_widgets_init' );
*/


add_theme_support('post-thumbnails');


?>