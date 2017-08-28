<?php

function wptuts_styles_with_the_lot ()
{
    //Register the style like this for a plugin
//    wp_register_style('custom-style', plugins_url('/css/custom-style.css', __FILE__), array(), '1', 'all');
    //or
    ////Register the style like this for a theme
    wp_register_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '1', 'all');
    //for either plugin or a theme, you can then enqueue the style
    wp_enqueue_style('font-awesome');
    wp_register_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1', 'all');
    //for either plugin or a theme, you can then enqueue the style
    wp_enqueue_style('bootstrap');
    wp_register_style('style', get_template_directory_uri() . '/css/agency.min.css', array(), '1', 'all');
    //for either plugin or a theme, you can then enqueue the style
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'wptuts_styles_with_the_lot');