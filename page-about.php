<?php
/**
 * Template Name: About Me Page
 * Description: Seitenvorlage für die "Über mich"-Seite basierend auf dem Figma-Layout
 */

get_header(); 
?>

<!-- ==========================================
     ABOUT ME SECTION
=========================================== -->
<section class="about-section padding-y">
    <div class="container about-container">
        <!-- Linker Inhaltsbereich -->
        <div class="about-content">
            <h1 class="page-title">Über mich</h1>
            <p class="about-description">
                Fachinformatikerin für Anwendungsentwicklung mit Fokus auf moderne Webanwendungen, 
                maßgeschneiderte WordPress-Lösungen und barrierefreie Benutzeroberflächen.
            </p>
            <a href="#" class="btn btn-primary">Lebenslauf ansehen</a>
        </div>

        <!-- Rechter Bildbereich mit rundem gelbem Hintergrund -->
        <div class="about-image-wrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-portrait.png" alt="Iryna Gukova Portrait">
        </div>
    </div>
</section>

<!-- Einbindung des Kontaktformulars aus den Template-Parts -->
<?php get_template_part('template-parts/content', 'contact'); ?>

<?php 
get_footer(); 
?>