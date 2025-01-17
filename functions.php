<?php
function mon_theme_setup() {
    // Support des miniatures de publication
    add_theme_support('post-thumbnails');

    // Enregistrement des menus
    register_nav_menus(array(
        'header_menu' => 'Menu principal'
    ));
}
add_action('after_setup_theme', 'mon_theme_setup');

// Enregistrement des scripts et styles
function mon_theme_enqueue_styles() {
    wp_enqueue_style('mon-theme-style', get_stylesheet_uri());
    wp_enqueue_script('mon-theme-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
include('custom-shortcodes.php');
?>

