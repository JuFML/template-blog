<?php

add_action('wp_enqueue_scripts', 'jt_theme_styles');
function jt_theme_styles() {
    wp_enqueue_style('boostrap_css', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.css');
    wp_enqueue_style('theme_style_owl', get_template_directory_uri().'/assets/css/owl.css');
    wp_enqueue_style('templatemo', get_template_directory_uri().'/assets/css/templatemo-stand-blog.css');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
    wp_enqueue_style('templatemo', get_template_directory_uri().'/assets/css/style.css');
    
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js');
    wp_enqueue_script('theme_script_accordions', get_template_directory_uri().'/assets/js/accordions.js', array('jquery'), '1.0', true);
    wp_enqueue_script('theme_script_custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0', true);
    wp_enqueue_script('theme_script_isotope', get_template_directory_uri().'/assets/js/isotope.js', array('jquery'), '1.0', true);
    wp_enqueue_script('theme_script_owl', get_template_directory_uri().'/assets/js/owl.js', array('jquery'), '1.0', true);
    wp_enqueue_script('theme_script_slick', get_template_directory_uri().'/assets/js/slick.js', array('jquery'), '1.0', true);
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true);
};

add_action('after_setup_theme', 'jt_after_setup');
function jt_after_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('primary', 'templateblog'));
};

add_action('widgets_init', 'jt_widgets');
function jt_widgets() {
    register_sidebar(array(
        'name' => __('Sidebar', 'templateblog'),
        'id' => 'jt-sidebar',
        'class' => 'list-unstyled',
        'description' => __('Sidebar', 'templateblog')
    ));
};

