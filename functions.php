<?php
function my_theme_scripts() {
    // Haupt-CSS-Datei
    wp_enqueue_style('my-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    
    // Haupt-JavaScript-Datei
    wp_enqueue_script('my-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');