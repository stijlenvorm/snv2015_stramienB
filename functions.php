<?php

// these are the sizes for when an image is selected as header image, loaded responsivly (change according design);
add_image_size('header-image-large-home', '1900', '400', true);
add_image_size('header-image-medium-home', '768', '162', true);
add_image_size('header-image-small-home', '480', '300', true);

function snvChildEnqueueScriptStyles()
{
    
    wp_dequeue_style('theme');
    wp_deregister_style('theme');
    wp_enqueue_style('child-theme', get_stylesheet_directory_uri() . '/css/style.css', array('bootstrap'), '1.0', 'all');
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'script'), '1.0', true);
    wp_enqueue_style('font-google', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'snvChildEnqueueScriptStyles', 50);

function registerMyMenus()
{
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ));
}
add_action('init', 'registerMyMenus');

add_action('admin_init',  'actionsToAdd');
function actionsToAdd()
{
   register_setting('contact-settings-group', 'footer_slogan');
   register_setting('contact-settings-group', 'footer_background');
}

add_action('templateChildInformationOptions',  'templateOptionsInformation');
function templateOptionsInformation()
{
    echo get_template_part('admin/informationOptionsTemplate');
}

add_action('templateChildThemeOptions',  'templateOptionsTheme');
function templateOptionsTheme()
{
    echo get_template_part('admin/themesOptionsTemplate');
}