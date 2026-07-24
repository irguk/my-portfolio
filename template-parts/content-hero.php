<?php
/**
 * Template-Part: Hero-Sektion für die Startseite (Front Page)
 */
?>

<!-- ==========================================
     HERO SECTION
=========================================== -->
<section class="hero-section padding-y">
    <div class="container hero-container">
        <!-- Linke Spalte: Text & Buttons -->
        <div class="hero-content">
            <span class="hero-subtitle">UI/UX DESIGNER & DEVELOPER</span>
            <h1 class="hero-title">Hallo, ich heiße Iryna Gukova</h1>
            <p class="hero-description">
                Kurzer Beschreibungstext über Kenntnisse, Projekterfahrungen und berufliche Ziele im Bereich der Anwendungsentwicklung.
            </p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">Projekte</a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline">LinkedIn</a>
            </div>
        </div>

        <!-- Rechte Spalte: Gelbe Hintergrundform mit Bild -->
        <div class="hero-image-wrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-portrait.png" alt="Iryna Gukova Portrait">
        </div>
    </div>
</section>