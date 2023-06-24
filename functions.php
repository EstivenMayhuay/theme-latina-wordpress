<?php
    function add_assets () {
        wp_enqueue_style('style-latina-theme', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'add_assets');
?>