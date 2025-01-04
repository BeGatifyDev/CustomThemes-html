<?php
// Enqueue styles
function custom_theme_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');

// Add theme support for title and featured images
function custom_theme_setup() {
    add_theme_support('post-thumbnails'); // Featured images
    add_theme_support('title-tag'); // Dynamic title
}
add_action('after_setup_theme', 'custom_theme_setup');
?>

<?php
// Add support for custom background
function custom_theme_custom_background() {
    add_theme_support('custom-background');
}
add_action('after_setup_theme', 'custom_theme_custom_background');
?>
