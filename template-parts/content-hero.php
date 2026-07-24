<?php
/**
 * Template-Part: Hero-Sektion für die Startseite (Front Page)
 */
?>

<!-- ==========================================
     HERO SECTION (Hauptbereich)
=========================================== -->
<section class="hero-section">
    <div class="container hero-container">
        <!-- Linker Bereich: Text & Buttons -->
        <div class="hero-content">
            <span class="subtitle">FULL-STACK & WEB DEVELOPER</span>
            <h1 class="hero-title">Hallo, ich bin<br>Iryna Gukova</h1>
            <p class="hero-text">
                Fachinformatikerin für Anwendungsentwicklung. Ich entwickele moderne Webanwendungen, 
                maßgeschneiderte WordPress-Lösungen und optimiere digitale Produkte für maximale Performance und Barrierefreiheit.
            </p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">Projekte ansehen</a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline">LinkedIn</a>
                <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline">GitHub</a>
            </div>
        </div>

        <!-- Rechter Bereich: Hero-Bild mit Hintergrund -->
        <div class="hero-image-wrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img_/image.png" alt="Iryna Gukova Portrait" class="hero-img">
        </div>
    </div>
</section>