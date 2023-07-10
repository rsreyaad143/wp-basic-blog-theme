<?php

    function basictheme_function(){
        add_theme_support('title-tag');
        add_theme_support('custom-header', array(
            'default-image' => get_template_directory_uri().'/images/header.jpg'
        ));
        add_theme_support('custom-background', array(
            'default-image' => get_template_directory_uri().'/images/header.jpg'
        ));
        add_theme_support('post-thumbnails');

        load_theme_textdomain('mrsbasictheme', get_template_directory().'/language');

        register_nav_menu('main-menu', __('Main Menu', 'mrsbasictheme'));
        register_nav_menu('footer-menu', __('Footer Menu', 'mrsbasictheme'));
    }

    add_action('after_setup_theme', 'basictheme_function');

    function basictheme_styles(){
        wp_enqueue_style('css-style', get_stylesheet_uri());
        wp_register_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.5', 'all');        
        wp_register_style('custom-css-style', get_template_directory_uri().'/css/custom.css', array(), '1.0', 'all');
        wp_enqueue_style('bootstrap-style');
        wp_enqueue_style('custom-css-style');


        // Scripts

        wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '1.11.3', 'true');
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.5', 'true');
        wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.min.js', array(), '1.3', 'true');
        wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array(), '1.0', 'true');


        

    }
    add_action('wp_enqueue_scripts', 'basictheme_styles');

?>