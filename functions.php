<?php
/**
 * Theme Funktionen und Einstellungen
 */

// 1. Theme-Unterstützung und Menü-Registrierung
function my_portfolio_setup() {
    // Unterstützung für dynamischen Seitentitel
    add_theme_support('title-tag');

    // Menü-Registrierung für das Hauptmenü
    register_nav_menus(array(
        'primary_menu' => 'Hauptmenü (Header)',
    ));
}
add_action('after_setup_theme', 'my_portfolio_setup');

// 2. Einbindung von Stylesheets und Scripts
function my_portfolio_scripts() {
    // Haupt-Style aus style.css (im Hauptverzeichnis)
    wp_enqueue_style('theme-main-style', get_stylesheet_uri());

    // Custom CSS aus assets/css/main.css
    wp_enqueue_style('theme-custom-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // Custom JavaScript aus assets/js/main.js (falls vorhanden)
    wp_enqueue_script('theme-custom-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_portfolio_scripts');