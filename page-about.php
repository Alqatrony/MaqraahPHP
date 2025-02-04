<?php
/**
 * Template Name: Über uns (About Page)
 * Description: A custom page template for the “Über uns” page
 */

get_header(); 
?>

<main id="top">
    <!-- NAVBAR -->
    <!-- 
      If your theme’s header.php already includes a navbar, 
      you can remove the <nav> below. Otherwise, keep it here 
      if you want a special navigation just for this page.
    -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Link to your WP home -->
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img class="bi-back" 
                     src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo.svg" 
                     alt="">
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo-txt.svg" 
                         alt="">
                </span>
            </a>

            <div class="d-lg-none ms-auto me-4">
                <a href="#top" class="navbar-icon smoothscroll">ع</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Navigation umschalten">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    <li class="nav-item">
                        <!-- If #section_1 is on the home page, link to home_url('/#section_1'). 
                             Here is a simple example: -->
                        <a class="nav-link click-scroll" 
                           href="<?php echo home_url('/'); ?>#section_1">Startseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" 
                           href="<?php echo home_url('/'); ?>#section_2">Koran Lernen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" 
                           href="<?php echo home_url('/'); ?>#section_3">Rezitationspraxis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" 
                           href="<?php echo home_url('/'); ?>#section_4">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" 
                           href="<?php echo home_url('/'); ?>#section_5">Kontakt</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" 
                           id="navbarLightDropdownMenuLink"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Seiten
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light"
                            aria-labelledby="navbarLightDropdownMenuLink">
                            <li>
                              <a class="dropdown-item" 
                                 href="<?php echo home_url('/topics-listing/'); ?>">
                                 Hafiz-Patenschaft übernehmen
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" 
                                 href="<?php echo home_url('/contact/'); ?>">
                                 Spende für unser Projekt
                              </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="#top" class="navbar-icon smoothscroll">ع</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HEADER SECTION -->
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 mb-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo home_url('/'); ?>">Startseite</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Über uns</li>
                        </ol>
                    </nav>

                    <h2 class="text-white">Über die Deutsche Maqra'ah</h2>

                    <div class="d-flex align-items-center mt-5">
                        <a href="#ueberuns-detail" 
                           class="btn custom-btn custom-border-btn smoothscroll me-4">
                           Mehr erfahren
                        </a>
                        <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="topics-detail-block bg-white shadow-lg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/topics/logo.svg" 
                             class="topics-detail-block-image-basic img-fluid" 
                             alt="Über uns">
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- MAIN CONTENT SECTION -->
    <section class="topics-detail-section section-padding" id="ueberuns-detail">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 m-auto">
                    <h3 class="mb-4">Unsere Vision und Mission</h3>

                    <p>
                        Die Deutsche Maqra'ah ist eine Plattform, die das gemeinsame Lesen, 
                        Rezitieren und Lernen des Korans fördert. Unser Ziel ist es, Menschen 
                        unterschiedlicher Hintergründe zusammenzubringen ...
                    </p>

                    <p>
                        <strong>Warum Deutsche Maqra'ah?</strong> 
                        Wir bieten eine vielfältige Auswahl an Lesearten, erfahrene Scheiche ...
                    </p>

                    <blockquote>
                        "Die Deutsche Maqra'ah ist ein Ort der Gemeinschaft, des Austauschs 
                        und des gemeinsamen Wachsens am Wort des Allmächtigen."
                    </blockquote>

                    <div class="row my-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/businesswoman-using-tablet-analysis.jpg" 
                                 class="topics-detail-block-image img-fluid" 
                                 alt="Lernen mit Technologie">
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/colleagues-working-cozy-office-medium-shot.jpg"
                                 class="topics-detail-block-image img-fluid" 
                                 alt="Gemeinschaftliches Lernen">
                        </div>
                    </div>

                    <p>
                        Unsere Plattform bietet regelmäßige Lektionen, Einzel- und Gruppenstunden 
                        sowie spezielle Workshops. Durch moderne Technologien ...
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- NEWSLETTER SECTION -->
    <section class="section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rear-view-young-college-student.jpg" 
                         class="newsletter-image img-fluid" 
                         alt="Newsletter Anmeldung">
                </div>

                <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                    <form class="custom-form subscribe-form" action="#" method="post">
                        <h4 class="mb-4 pb-2">Newsletter abonnieren</h4>

                        <input type="email" name="subscribe-email" id="subscribe-email" 
                               pattern="[^ @]*@[^ @]*" class="form-control" 
                               placeholder="E-Mail-Adresse" required="">

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">Abonnieren</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- FOOTER -->
<!-- 
  If your theme’s footer.php already includes the HTML shown below, 
  remove it here and just do get_footer().
-->
<footer class="site-footer section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-12 mb-4 pb-2">
                <a class="navbar-brand mb-2" href="<?php echo home_url('/'); ?>">
                    <img class="bi-back" 
                         src="<?php echo get_template_directory_uri(); ?>/images/topics/logo.svg" 
                         style="width: 135px;" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <h6 class="site-footer-title mb-3">Ressourcen</h6>

                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="<?php echo home_url('/'); ?>#section_1" class="site-footer-link">
                            Startseite
                        </a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="<?php echo home_url('/'); ?>#section_3" class="site-footer-link">
                            Wie es funktioniert
                        </a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="<?php echo home_url('/'); ?>#section_4" class="site-footer-link">
                            Häufige Fragen
                        </a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="<?php echo home_url('/'); ?>#section_5" class="site-footer-link">
                            Kontakt
                        </a>
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
                        <li>
                          <button class="dropdown-item" type="button">العربية</button>
                        </li>
                    </ul>
                </div>

                <p class="copyright-text mt-lg-5 mt-4">
                    Copyright © 
                    2024 Deutsche Maqra'ah.
                    Alle Rechte vorbehalten.
                </p>
            </div>

        </div>
    </div>
</footer>

<!-- If your theme or WP enqueues scripts, you can remove these or let WP handle them -->
<?php wp_footer(); ?>
</body>
</html>