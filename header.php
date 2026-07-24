<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    // Lädt Skripte, Styles und Meta-Tags von WordPress
    wp_head(); 
    ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ==========================================
     HEADER (Kopfzeile)
=========================================== -->
<header class="site-header">
    <div class="container header-container">
        <!-- Logo / Name -->
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
            Iryna Gukova
        </a>

        <!-- Hauptnavigation -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>
    </div>
</header>