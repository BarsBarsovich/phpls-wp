<?php
add_action('wp_enqueue_scripts', 'load');

function load()
{
    wp_enqueue_style('lib.min', get_stylesheet_directory_uri() . '/css/libs.min.css', array(), time());
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), time());
    wp_enqueue_style('media', get_stylesheet_directory_uri() . '/css/media.css', array(), time());

    wp_enqueue_script('jquery');
    wp_enqueue_script('mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), time(), true);

}

register_nav_menus(
    array(
        'topmenu' => 'Header menu',
        'bottommenu' => 'Footer menu',    
        'aside' => 'aside'
    )
);

add_theme_support('post-thumbnails');
