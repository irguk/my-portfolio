<?php
function my_theme_scripts() {
    // Haupt-CSS-Datei
    wp_enqueue_style('my-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    
    // Haupt-JavaScript-Datei
    wp_enqueue_script('my-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

<?php
/**
 * Theme Funktionen und Einstellungen
 */

function my_portfolio_setup() {
    // Unterstüzung für dynamischen Seitentitel
    add_theme_support('title-tag');

    // Menü-Registrierung
    register_nav_menus(array(
        'primary_menu' => 'Hauptmenü (Header)',
    ));
}
add_action('after_setup_theme', 'my_portfolio_setup');

function my_portfolio_scripts() {
    // Haupt-Style einbinden
    wp_enqueue_style('my-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'my_portfolio_scripts');

<?php
/**
 * Theme-Funktionen und Einbindung von Skripten/Styles
 */

function my_portfolio_enqueue_scripts() {
    // 1. Haupt-Style aus der Datei style.css einbinden
    wp_enqueue_style('theme-main-style', get_stylesheet_uri());

    // 2. Benutzerdefinierte Styles aus assets/css/main.css einbinden
    wp_enqueue_style('theme-custom-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_scripts');