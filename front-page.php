<?php
/**
 * Haupttemplate für die Startseite (Portfolio Layout)
 * Template Name: Front Page
 */

get_header(); 
?>

<main class="site-main">

    <!-- Einbindung der Hero-Sektion -->
    <?php get_template_part('template-parts/content', 'hero'); ?>

    <!-- Einbindung der Projekte-Sektion -->
    <?php get_template_part('template-parts/content', 'projects'); ?>

    <!-- Einbindung der "Über mich"-Sektion -->
    <?php get_template_part('template-parts/content', 'about'); ?>

    <!-- Einbindung der Kontakt-Sektion -->
    <?php get_template_part('template-parts/content', 'contact'); ?>

</main>

<?php 
get_footer(); 
?>