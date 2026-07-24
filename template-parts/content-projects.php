<?php
/**
 * Template-Part: Übersicht der Portfolio-Projekte
 */
?>

<!-- ==========================================
     PROJECTS SECTION
=========================================== -->
<section id="projects" class="projects-section padding-y">
    <div class="container">
        <h2 class="section-title text-center">Projekte</h2>

        <div class="projects-grid">
            <!-- Beispielhafter statischer Projekt-Block (oder WP_Query Schleife) -->
            <article class="project-card">
                <div class="project-card-content">
                    <h3 class="project-card-title">Projektname</h3>
                    <p class="project-card-text">
                        Beschreibung des erstellten Projekts, z. B. Funktionalitäten, verwendete Technologien und Ergebnisse.
                    </p>
                    <a href="#" class="btn btn-secondary">Projekt ansehen</a>
                </div>
                <div class="project-card-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project-sample.jpg" alt="Projekt Vorschau">
                </div>
            </article>
        </div>
    </div>
</section>