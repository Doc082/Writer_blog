<?php

use function FakerPress\register;

    require_once('bs4navwalker.php');
    add_theme_support('menus');

    function writer_style(){
        wp_enqueue_style('writ_animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
        wp_enqueue_style('writ_font', '//fonts.googleapis.com/css?family=Asap|Raleway:400,700');
        wp_enqueue_style('writ_style', get_stylesheet_uri(), NULL, microtime());
        wp_enqueue_style('writ_bs', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    }

    function writer_scripts(){
        wp_enqueue_script('writ_fa', '//kit.fontawesome.com/8185bbc652.js');
        //wp_enqueue_script('writ_popper', get_template_directory_uri().'/js/popper.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('writ_bsjs', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
        //wp_enqueue_script('writ_wow', get_template_directory_uri().'/js/wow.js', array('jquery'), '1.0.0', false);
    }
    add_action('wp_enqueue_scripts', 'writer_style');
    add_action('wp_enqueue_scripts', 'writer_scripts');

    register_nav_menus(array(
        'main_menu' => __('Main Menu'),
        //'footer_left_menu' => __('Footer Left'),
        //'footer_right_menu' => __('Footer Right')
    ));