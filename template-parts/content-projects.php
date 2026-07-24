<?php
/**
 * Template-Part: Dynamische Projekte-Sektion mit WP_Query
 */
?>

<!-- ==========================================
     PROJECTS SECTION (Dynamische Projektliste)
=========================================== -->
<section id="projects" class="projects-section">
    <div class="container">
        <h2 class="section-title">Projekte</h2>

        <div class="projects-list">
            <?php
            // WP_Query Parameter für den Custom Post Type "project"
            $args = array(
                'post_type'      => 'project',
                'posts_per_page' => -1, // Alle Projekte anzeigen
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $projects_query = new WP_Query($args);

            if ($projects_query->have_posts()) :
                $counter = 0;
                while ($projects_query->have_posts()) : $projects_query->the_post();
                    $counter++;
                    // Abwechselndes Layout (Bild links/rechts) über CSS-Klasse
                    $reverse_class = ($counter % 2 === 0) ? 'project-card--reverse' : '';
                    
                    // Auslesen von benutzerdefinierten Feldern (Custom Fields)
                    $project_link = get_post_meta(get_the_ID(), 'project_url', true);
                    $button_label = get_post_meta(get_the_ID(), 'button_label', true) ?: 'Details ansehen';
                    ?>

                    <article class="project-card <?php echo esc_attr($reverse_class); ?>">
                        <div class="project-content">
                            <h3 class="project-title"><?php the_title(); ?></h3>
                            <div class="project-text">
                                <?php the_content(); ?>
                            </div>

                            <?php if ($project_link) : ?>
                                <a href="<?php echo esc_url($project_link); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                                    <?php echo esc_html($button_label); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                                    <?php echo esc_html($button_label); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="project-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img_/box-1.png" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                    </article>

                <?php 
                endwhile;
                wp_reset_postdata(); // Setzt globale Beitragsdaten zurück
            else : 
            ?>
                <p class="no-projects-found">Derzeit wurden noch keine Projekte hinzugefügt.</p>
            <?php endif; ?>
        </div>
    </div>
</section>