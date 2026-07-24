<?php
/**
 * Template-Part: Projekte-Sektion für die Startseite
 */
?>

<!-- ==========================================
     PROJECTS SECTION (Projektliste)
=========================================== -->
<section id="projects" class="projects-section">
    <div class="container">
        <h2 class="section-title">Projekte</h2>

        <div class="projects-list">
            
            <!-- Projekt 1: Druckkosten-Rechner (Bild rechts) -->
            <article class="project-card">
                <div class="project-content">
                    <h3 class="project-title">WordPress Druckkosten-Rechner Plugin</h3>
                    <p class="project-text">
                        Ein maßgeschneidertes WordPress-Plugin zur Echtzeit-Berechnung von Druckpreisen. 
                        Inklusive relationaler MySQL-Datenbankstruktur, asynchronen Preisupdates via AJAX/JavaScript und vollständiger Anbindung an das Backend.
                    </p>
                    <a href="#" class="btn btn-outline">Details ansehen</a>
                </div>
                <div class="project-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img_/box-1.png" alt="Druckkosten-Rechner Vorschau">
                </div>
            </article>

            <!-- Projekt 2: Accessibility & Layout Refactoring (Bild links) -->
            <article class="project-card project-card--reverse">
                <div class="project-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img_/box-3.png" alt="Barrierefreie Webentwicklung Vorschau">
                </div>
                <div class="project-content">
                    <h3 class="project-title">Web Accessibility & Performance Audit</h3>
                    <p class="project-text">
                        Umfassende Optimierung von Webstrukturen nach WCAG-Richtlinien. 
                        Korrektur von Überschriften-Hierarchien, Bereinigung von redundanten Attributen und CSS-Grid-Refactoring im Divi Framework für maximale Barrierefreiheit (WAVE-geprüft).
                    </p>
                    <a href="#" class="btn btn-outline">Details ansehen</a>
                </div>
            </article>

            <!-- Projekt 3: Interactive JS Web Application (Bild rechts) -->
            <article class="project-card">
                <div class="project-content">
                    <h3 class="project-title">Interaktive JavaScript Anwendung</h3>
                    <p class="project-text">
                        Eine dynamische Frontend-Anwendung, entwickelt mit modernem Vanilla JavaScript (ES6+), HTML5 und CSS3. 
                        Fokus auf saubere Objektorientierung, responsive UI/UX-Komponenten und CI/CD-Deployment via GitHub Pages.
                    </p>
                    <a href="#" class="btn btn-outline">Code auf GitHub</a>
                </div>
                <div class="project-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img_/box-2.png" alt="JavaScript Anwendung Vorschau">
                </div>
            </article>

        </div>
    </div>
</section>