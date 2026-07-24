<!-- ==========================================
     FOOTER (Fußzeile)
=========================================== -->
<footer class="site-footer">
    <div class="container footer-container">
        <!-- Social-Media-Links -->
        <div class="footer-socials">
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="mailto:igukova@gmail.com" aria-label="E-Mail">
                <i class="fas fa-envelope"></i>
            </a>
        </div>

        <!-- Copyright -->
        <p class="footer-copy">
            &copy; <?php echo date('Y'); ?> Iryna Gukova. Alle Rechte vorbehalten.
        </p>
    </div>
</footer>

<?php 
// Lädt JavaScript-Dateien und Footer-Skripte von WordPress
wp_footer(); 
?>
</body>
</html>