<?php
        // add imag
        add_theme_support('post-thumbnails');

    function abo_eissa_styles() {
        wp_enqueue_style('my-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('my-fontawesome-css', get_template_directory_uri() . '/css/all.min.css');
        wp_enqueue_style('min-css', get_template_directory_uri() . '/css/min.css');

    }

    function abo_eissa_scripts() {
        wp_enqueue_script('my-jquery-js', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), 'false', 'ture');
        wp_enqueue_script('my-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'false', 'ture');
        wp_enqueue_script('my-fontawesome-js', get_template_directory_uri() . '/js/all.min.js', array(), 'false', 'ture');
        wp_enqueue_script('my-min-js', get_template_directory_uri() . '/js/min.js', array(), 'false', 'ture');
        wp_enqueue_script('respond',  get_template_directory_uri() . '/js/respond.min.js');
        wp_script_add_data('respond','conditional','It IE 9');
        wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js');
        wp_script_add_data('html5shiv','conditional','It IE 9');
    }

    function abo_eissa_custom_menu() {
        register_nav_menus(array(
            'bootstrap-menu'  =>  'Navigation Bar',
            'footer_menu'     =>  'Footer Menu',
        ));
    }

    function bootstrap_menu() {
        wp_nav_menu(array(
            'theme_location' => 'bootstrap-menu',
            'menu_class'     => 'nav navbar-nav navbar-right',
        ));
        
    }

    

    add_action('wp_enqueue_scripts', 'abo_eissa_styles');
    add_action('wp_enqueue_scripts', 'abo_eissa_scripts');
    add_action('init', 'abo_eissa_custom_menu');
    include 'functions\post-type.php';




    