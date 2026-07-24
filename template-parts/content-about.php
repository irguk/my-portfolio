<?php
/**
 * Template-Part: "Über mich"-Sektion für Wiederverwendung auf verschiedenen Seiten
 */
?>

<!-- ==========================================
     ABOUT ME BLOCK
=========================================== -->
<section class="about-block-section padding-y">
    <div class="container about-container">
        <div class="about-content">
            <h2 class="section-title">Über mich</h2>
            <p class="about-description">
                Fachinformatikerin für Anwendungsentwicklung mit Fokus auf moderne Webanwendungen, 
                maßgeschneiderte WordPress-Lösungen und barrierefreie Benutzeroberflächen.
            </p>
            <a href="#" class="btn btn-primary">Lebenslauf herunterladen</a>
        </div>
        
        <div class="about-image-wrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-portrait.png" alt="Iryna Gukova">
        </div>
    </div>
</section>