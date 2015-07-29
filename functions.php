<?php


add_image_size('header-image-large-home', '1900', '800', true);
add_image_size('header-image-medium-home', '768', '480', true);
add_image_size('header-image-small-home', '480', '300', true);

add_image_size('home-term-thumbs', '400', '200', true);
add_image_size('product-thumbs', '320px', '320px', true);


function snv_child_enqueue_script_styles()
{
    wp_enqueue_style('theme_child', get_stylesheet_directory_uri().'/css/style.css', array('bootstrap', 'theme'), '1.0', 'all');
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'script'), '1.0', true );
    wp_enqueue_style( 'font-Ruda', 'http://fonts.googleapis.com/css?family=Ruda:400,700,900', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'snv_child_enqueue_script_styles');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu'  => __('Footer Menu')
            )
    );
}
add_action('init', 'register_my_menus');
