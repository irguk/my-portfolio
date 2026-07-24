<?php
/**
 * Template-Part: Kontakt-Sektion mit Wellen-Element
 */
?>

<!-- ==========================================
     KONTAKT SECTION & FOOTER WAVE
=========================================== -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title text-center">Kontakt</h2>
        
        <!-- Einbindung des Contact Form 7 Shortcodes -->
        <div class="contact-form-wrapper">
            <?php 
            echo do_shortcode('[contact-form-7 id="123" title="Kontaktformular"]'); 
            ?>
        </div>
    </div>

    <!-- Gelbes Wellen-Dekorelement am Seitenende -->
    <div class="footer-wave">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wave.svg" alt="Gelbe Dekorationswelle">
    </div>
</section>