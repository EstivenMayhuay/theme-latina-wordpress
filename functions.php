<?php

    /* Hooks  */
    function add_assets () {
        wp_enqueue_style('style-latina-theme', get_stylesheet_uri());
    }

    function add_features () {
        add_theme_support('post-thumbnails');

        add_image_size('my-post-thumbnail', 700, 350, true );
    }

    add_action('after_setup_theme', 'add_features');
    add_action('wp_enqueue_scripts', 'add_assets');
?>