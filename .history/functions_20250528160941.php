<?php
// Theme setup
function skeleton_theme_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');
    
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'skeleton'),
        'footer' => __('Footer Menu', 'skeleton'),
    ));
}
add_action('after_setup_theme', 'skeleton_theme_setup');

// Gather modular components here from inc/components/
foreach (glob(__DIR__ . '/inc/components/*.php') as $file) {
    require_once $file;
}

// Enqueue styles and scripts
function skeleton_enqueue_assets() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/main.css', array(), null);
}
add_action('wp_enqueue_scripts', 'skeleton_enqueue_assets');

/**
 * Enqueue theme styles and scripts
 */
function dwm_tenetly_enqueue_scripts() {
    // Enqueue main CSS file
    wp_enqueue_style(
        'dwm-tenetly-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
}
add_action('wp_enqueue_scripts', 'dwm_tenetly_enqueue_scripts');
