<footer class="site-footer section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-12 mb-4 pb-2">
                <!-- Link to home -->
                <a class="navbar-brand mb-2" href="<?php echo home_url('/'); ?>">
                    <img class="bi-back" 
                         src="<?php echo get_template_directory_uri(); ?>/images/topics/logo.svg" 
                         style="width: 135px;" alt="Footer Logo">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <h6 class="site-footer-title mb-3">Ressourcen</h6>
                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="#section_1" class="site-footer-link">Startseite</a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="#section_3" class="site-footer-link">Wie es funktioniert</a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="#section_4" class="site-footer-link">Häufige Fragen</a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="#section_5" class="site-footer-link">Kontakt</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                <h6 class="site-footer-title mb-3">Informationen</h6>
                <p class="text-white d-flex mb-1">
                    <a href="tel:305-240-9671" class="site-footer-link">
                        305-240-9671
                    </a>
                </p>
                <p class="text-white d-flex">
                    <a href="mailto:info@company.com" class="site-footer-link">
                        info@company.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Deutsch
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button">العربية</button></li>
                    </ul>
                </div>

                <p class="copyright-text mt-lg-5 mt-4">
                    Copyright © 
                    <?php echo date('Y'); ?> Deutsche Maqra'ah. 
                    Alle Rechte vorbehalten.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>