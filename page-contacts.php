<?php
/**
 * Template Name: Contacts Page
 * Description: Seitenvorlage für die Kontaktseite basierend auf dem Figma-Layout
 */

get_header(); 
?>

<!-- ==========================================
     KONTAKT SEKTION
=========================================== -->
<main class="site-main">
    <section class="contact-page-section padding-y">
        <div class="container">
            <h1 class="page-title text-center">Kontakt aufnehmen</h1>
            <p class="page-description text-center">
                Haben Sie Fragen oder möchten Sie ein gemeinsames Projekt besprechen? Senden Sie mir gerne eine Nachricht.
            </p>

            <!-- Einbindung des Kontaktformulars aus den Template-Parts -->
            <?php get_template_part('template-parts/content', 'contact'); ?>
        </div>
    </section>
</main>

<?php 
get_footer(); 
?>