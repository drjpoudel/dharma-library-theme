<?php
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['primary' => 'Main Navigation']);
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('dharma-library-style', get_stylesheet_uri());
});
