<?php
/**
 * Created by PhpStorm.
 * User: 777
 * Date: 25.08.2017
 * Time: 20:07
 */

/*
 * used scripts and styles
 */
function load_style_script() {
    wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
    wp_enqueue_script('jqFancyTransitions.1.8', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/*
 * loading scripts and styles
 */

add_action('wp_enqueue_scripts', 'load_style_script');


/*
 * Поддержка миниатюр Thumbnails
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180, 180);

/*
 * adding widgets
 */
//$args = array(
//    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
//    'id'            => 'unique-sidebar-id',
//    'description'   => '',
//    'class'         => '',
//    'before_widget' => '<li id="%1$s" class="widget %2$s">',
//    'after_widget'  => '</li>',
//    'before_title'  => '<h2 class="widgettitle">',
//    'after_title'   => '</h2>' );
register_sidebar(array(
    'name'=>'Menu',
    'id'=>'menu_header',
    'before_widget' =>'',
    'before_widget' => ''));

//$args = array(
//    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
//    'id'            => 'unique-sidebar-id',
//    'description'   => '',
//    'class'         => '',
//    'before_widget' => '<li id="%1$s" class="widget %2$s">',
//    'after_widget'  => '</li>',
//    'before_title'  => '<h2 class="widgettitle">',
//    'after_title'   => '</h2>' );
register_sidebar(array(
    'name'=>'sidebar',
    'id'=>'sidebar',
    'before_widget' => '<div class="sidebar-vidget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

//$args = array(
//    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
//    'id'            => 'unique-sidebar-id',
//    'description'   => '',
//    'class'         => '',
//    'before_widget' => '<li id="%1$s" class="widget %2$s">',
//    'after_widget'  => '</li>',
//    'before_title'  => '<h2 class="widgettitle">',
//    'after_title'   => '</h2>' );
register_sidebar(array(
    'name'=>'footer',
    'id'=>'footer',
    'before_widget' => '<div class="footer-info %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

