<?php
/**
 * Template Name: Single Project View
 * Description: Einzelseiten-Vorlage für die detaillierte Darstellung eines einzelnen Portfolio-Projekts
 */

get_header(); 
?>

<main class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- ==========================================
             PROJEKT DETAILS SEKTION
        =========================================== -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('project-detail-section padding-y'); ?>>
            <div class="container">
                
                <!-- Projekt-Titel -->
                <h1 class="project-title"><?php the_title(); ?></h1>
                
                <!-- Projekt-Kategorie / Kurzbeschreibung -->
                <div class="project-meta">
                    <span class="project-category"><?php echo esc_html( get_post_meta( get_the_ID(), 'project_category', true ) ); ?></span>
                </div>

                <!-- Projekt-Beitragsbild (Featured Image) -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="project-featured-image">
                        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                    </div>
                <?php endif; ?>

                <!-- Hauptinhalt des Projekts -->
                <div class="project-description-content">
                    <?php the_content(); ?>
                </div>

                <!-- Button-Verlinkung zum Live-Projekt oder GitHub -->
                <div class="project-actions">
                    <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'project_url', true ) ); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                        Projekt ansehen
                    </a>
                    <a href="<?php echo esc_url( home_url('/projects') ); ?>" class="btn btn-secondary">
                        Zurück zur Übersicht
                    </a>
                </div>

            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php 
get_footer(); 
?>