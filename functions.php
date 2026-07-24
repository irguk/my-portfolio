<?php
/**
 * Theme-Funktionen und Einstellungen für das Portfolio
 */

// 1. Theme-Unterstützung und Menü-Registrierung
function my_portfolio_setup() {
    // Unterstützung für dynamische Seitentitel (SEO)
    add_theme_support('title-tag');

    // Unterstützung für Beitragsbilder (Featured Images)
    add_theme_support('post-thumbnails');

    // Registrierung des Hauptmenüs im Header
    register_nav_menus(array(
        'primary_menu' => 'Hauptmenü (Header)',
    ));
}
add_action('after_setup_theme', 'my_portfolio_setup');


// 2. Registrierung des Custom Post Types "Projekte"
function my_portfolio_register_project_cpt() {
    $labels = array(
        'name'                  => 'Projekte',
        'singular_name'         => 'Projekt',
        'menu_name'             => 'Projekte',
        'add_new'               => 'Neues Projekt',
        'add_new_item'          => 'Neues Projekt hinzufügen',
        'edit_item'             => 'Projekt bearbeiten',
        'new_item'              => 'Neues Projekt',
        'view_item'             => 'Projekt anzeigen',
        'search_items'          => 'Projekte suchen',
        'not_found'             => 'Keine Projekte gefunden',
        'not_found_in_trash'    => 'Keine Projekte im Papierkorb gefunden',
    );

    $args = array(
        'label'                 => 'Projekt',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'projects'),
        'show_in_rest'          => true, // Aktiviert den Gutenberg-Editor
    );

    register_post_type('project', $args);
}
add_action('init', 'my_portfolio_register_project_cpt');


// 3. Einbindung von Stylesheets und JavaScript-Dateien
function my_portfolio_scripts() {
    // Haupt-Style aus der Datei style.css
    wp_enqueue_style('theme-main-style', get_stylesheet_uri());

    // Benutzerdefinierte CSS-Datei aus assets/css/main.css
    wp_enqueue_style('theme-custom-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // Benutzerdefinierte JS-Datei aus assets/js/main.js
    wp_enqueue_script('theme-custom-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_portfolio_scripts');