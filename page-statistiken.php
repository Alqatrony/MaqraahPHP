<?php
/**
 * Template Name: Statistiken Page
 * Description: Displays custom stat pages
 */
 wp_head();

get_header();
?>

<main class="topics-listing-page" id="top">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img class="bi-back" src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo.svg" alt="">
                <span><img src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo-txt.svg" alt=""></span>
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
                        <a class="nav-link click-scroll" href="<?php echo home_url('/'); ?>#section_1">Startseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="<?php echo home_url('/'); ?>#section_2">Koran Lernen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="<?php echo home_url('/'); ?>#section_3">Rezitationspraxis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="<?php echo home_url('/'); ?>#section_4">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="<?php echo home_url('/'); ?>#section_5">Kontakt</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Seiten</a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo home_url('/topics-listing/'); ?>">Hafiz-Patenschaft übernehmen</a></li>
                            <li><a class="dropdown-item" href="<?php echo home_url('/contact/'); ?>">Spende für unser Projekt</a></li>
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
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo home_url('/'); ?>">Startseite</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Statistiken</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Statistiken</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN STATS SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h3 class="mb-4">Übersicht unserer Statistiken</h3>
                    <p>Hier finden Sie eine Übersicht über die Anzahl unserer Schüler/Schülerinnen, Hafithe, Scheiche sowie
                       die Anzahl der abgeschlossenen Khatmas. Diese Statistiken bieten einen Einblick in unser Engagement 
                       und Wachstum.</p>
                </div>

                <div class="col-lg-8 col-12 mt-3 mx-auto">
                    <!-- Schüler/Schülerinnen -->
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/schüler-schülerinnen.svg"
                                 class="custom-block-image img-fluid" alt="Schüler/Schülerinnen">
                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Schüler/Schülerinnen</h5>
                                    <p class="mb-0">Anzahl der Lernenden, die aktiv am Programm teilnehmen.</p>
                                </div>
                                <span class="badge bg-design rounded-pill ms-auto" id="students-counter-statistik">0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Hafith -->
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/schüler.svg"
                                 class="custom-block-image img-fluid" alt="Hafith">
                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Hafith</h5>
                                    <p class="mb-0">Anzahl der Personen, die den Koran komplett auswendig gelernt haben.</p>
                                </div>
                                <span class="badge bg-design rounded-pill ms-auto" id="hafith-counter-statistik">0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Scheich -->
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                 class="custom-block-image img-fluid" alt="Scheich">
                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Scheich</h5>
                                    <p class="mb-0">Anzahl unserer qualifizierten Scheiche, die den Unterricht leiten.</p>
                                </div>
                                <span class="badge bg-design rounded-pill ms-auto" id="scheick-counter-statistik">0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Abgeschlossene Khatmas -->
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                 class="custom-block-image img-fluid" alt="Abgeschlossene Khatmas">
                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">Abgeschlossene Khatmas</h5>
                                    <p class="mb-0">Anzahl der vollständig gelesenen und beendeten Koranrezitationen (Khatma).</p>
                                </div>
                                <span class="badge bg-design rounded-pill ms-auto" id="khatma-counter-statistik">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Example of pagination, if needed
                <div class="col-lg-12 col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Vorherige">
                                    <span aria-hidden="true">Vorherige</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Nächste</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                -->
            </div>
        </div>
    </section>

    <!-- ADDITIONAL INFO -->
    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h3 class="mb-4">Weitere Informationen</h3>
                    <p>
                        Die oben aufgeführten Statistiken geben einen Einblick in unsere Fortschritte. Durch stetiges Lernen, 
                        regelmäßige Rezitationen und engagierte Lehrer und Schüler wachsen wir gemeinsam als Gemeinschaft.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER (pulled in from your theme) -->
<?php get_footer(); ?>