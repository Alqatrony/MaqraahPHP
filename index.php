<?php
/*
 * If this is your main front-page, you could name this file 'index.php' or 'front-page.php'
 * in your theme folder, adjusting references as needed.
 *
 * For demonstration, we’re calling it 'index.php' and referencing your .php pages.
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Deutsche Maqra'ah</title>

    <?php wp_head(); ?>
</head>

<body id="top">

<main>
    <!-- Load WordPress header.php -->
    <?php get_header(); ?>

    <!-- HERO SECTION -->
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div id="animation-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/data.svg" alt="">
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center">Lesen. Rezitieren. Lernen</h1>
                    <h6 class="text-center">Plattform für gemeinsames Lernen und Verstehen des Korans</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED SECTION -->
    <section class="featured-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="statistiken-box col-lg-4 col-12 mb-4 mb-lg-0" style="contain: layout;">
                    <div class="custom-block bg-white shadow-lg">
                        <!-- Points to 'statistiken.php' instead of 'statistiken.html' -->
                        <a href="<?php echo home_url('statistiken'); ?>">
                            <div class="d-flex">
                                <div>
                                    <h5 class="mb-2">Statistiken</h5>

                                    <div class="Statistiken">
                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/schüler-schülerinnen.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="students-counter">0</span>
                                            <p class="mb-0">schüer/schülerinnen</p>
                                        </div>

                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/schüler.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="hafith-counter">0</span>
                                            <p class="mb-0">Hafith</p>
                                        </div>

                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="scheick-counter">0</span>
                                            <p class="mb-0">Scheick</p>
                                        </div>

                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="chatma-counter">0</span>
                                            <p class="mb-0">عدد الختمات المنجزة</p>
                                        </div>

                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="khatma-counter">0</span>
                                            <p class="mb-0">عدد الختمات المنجزة</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100" style="justify-content: center;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran.svg"
                                 class="custom-block-image img-fluid" style="height: 450px;" alt="">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">Über uns</h5>
                                    <p class="text-white">
                                        Die Deutsche Maqra’ah für den Edlen Quran 2025 ist eine digitale Plattform, die das
                                        Auswendiglernen und die korrekte Rezitation des edlen Quran auf eine moderne und
                                        zugängliche Weise ermöglicht.
                                    </p>

                                    <!-- Instead of 'ueberuns.html', link to 'aboutUs.php' -->
                                    <a href="<?php echo home_url('uberuns'); ?>" class="btn custom-btn mt-2 mt-lg-3">
                                        Mehr Erfahren
                                    </a>
                                </div>

                                <span class="badge bg-finance rounded-pill ms-auto">25</span>
                            </div>

                            <div class="social-share d-flex">
                                <p class="text-white me-4">Folgen:</p>

                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-youtube"></a>
                                    </li>
                                </ul>

                                <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                            </div>

                            <div class="section-overlay"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- EXPLORE SECTION -->
    <section class="explore-section section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="mb-4">Entdecken Sie</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="design-tab" data-bs-toggle="tab"
                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                aria-controls="design-tab-pane" aria-selected="false">Lehrer
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                aria-controls="marketing-tab-pane" aria-selected="false">Lesearten
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="finance-tab" data-bs-toggle="tab"
                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                aria-controls="finance-tab-pane" aria-selected="true">Spenden
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                data-bs-target="#music-tab-pane" type="button" role="tab"
                                aria-controls="music-tab-pane" aria-selected="false">Quran
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                data-bs-target="#education-tab-pane" type="button" role="tab"
                                aria-controls="education-tab-pane" aria-selected="false">Kurse
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- TAB CONTENT -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">

                        <!-- TEACHERS (Design Tab) -->
                        <div class="tab-pane fade" id="design-tab-pane" role="tabpanel"
                             aria-labelledby="design-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <!-- 'topics-detail.php' instead of 'topics-detail.html' -->
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Scheich Farag Al-Awami</h5>
                                                    <p class="mb-0">Mit Erfahrung mehr als 5 Jahren in Qaloon Leseart</p>
                                                </div>
                                                <span class="badge bg-design rounded-pill ms-auto">14</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Scheich Anas Elwarfalli</h5>
                                                    <p class="mb-0">Mit Erfahrung mehr als 5 Jahren in Qaloon Leseart</p>
                                                </div>
                                                <span class="badge bg-design rounded-pill ms-auto">75</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Scheich Mohammed Elfadil</h5>
                                                    <p class="mb-0">Mit Erfahrung mehr als 20 Jahren in Qaloon Leseart</p>
                                                </div>
                                                <span class="badge bg-design rounded-pill ms-auto">100</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lesearten (Marketing Tab) -->
                        <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                             aria-labelledby="marketing-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Qaloon</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Hafis</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Warsh</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Spenden (Finance Tab) -->
                        <div class="tab-pane fade show active" id="finance-tab-pane" role="tabpanel"
                             aria-labelledby="finance-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Unser Spender</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Spenden.svg"
                                                 style="object-fit: none;"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-block custom-block-overlay">
                                        <div class="d-flex flex-column h-100">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg"
                                                 class="custom-block-image img-fluid" alt="">

                                            <div class="custom-block-overlay-text d-flex">
                                                <div>
                                                    <h5 class="text-white mb-2">Helfen Sie uns</h5>
                                                    <p class="text-white">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi 
                                                        necessitatibus aperiam repudiandae nam omnis
                                                    </p>
                                                    <a href="<?php echo home_url('topic-details'); ?>" class="btn custom-btn mt-2 mt-lg-3">
                                                        Spenden
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="social-share d-flex">
                                                <p class="text-white me-4">Teilen:</p>
                                                <ul class="social-icon">
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                                    </li>
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-instagram"></a>
                                                    </li>
                                                    <li class="social-icon-item">
                                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                                    </li>
                                                </ul>
                                                <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                            </div>

                                            <div class="section-overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Music Tab -->
                        <div class="tab-pane fade" id="music-tab-pane" role="tabpanel"
                             aria-labelledby="music-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Composing Song</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-music rounded-pill ms-auto">45</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Compose_music_re_wpiw.png"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Online Music</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-music rounded-pill ms-auto">45</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_happy_music_g6wc.png"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Podcast</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-music rounded-pill ms-auto">20</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Podcast_audience_re_4i5q.png"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Education Tab -->
                        <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                             aria-labelledby="education-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Tajweed-Unterricht</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-education rounded-pill ms-auto">80</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Graduation_re_gthn.png"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="<?php echo home_url('topic-details'); ?>">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Arabisch-unterricht</h5>
                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>
                                                <span class="badge bg-education rounded-pill ms-auto">75</span>
                                            </div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Educator_re_ju47.png"
                                                 class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /tab-content -->
                </div>
            </div>
        </div>
    </section>

    <!-- TIMELINE SECTION -->
    <section class="timeline-section section-padding" id="section_3">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Wie funktioniert es?</h2>
                </div>

                <div class="col-lg-10 col-12 mx-auto">
                    <div class="timeline-container">
                        <div class="list-progress"><div class="inner"></div></div>
                        <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                            <li>
                                <h4 class="text-white mb-3">Suchen Sie Ihren beliebigen Scheich</h4>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Reiciendis, cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse 
                                    ad dignissimos libero sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?
                                </p>
                                <div class="icon-holder">
                                    <i class="bi-search"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-3">Auswindig lernen &amp; mit deinem Scheich Rezitieren</h4>
                                <p class="text-white">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Sint animi necessitatibus aperiam repudiandae nam omnis est vel quo, nihil repellat
                                    quia velit error modi earum similique odit labore. Doloremque, repudiandae?
                                </p>
                                <div class="icon-holder">
                                    <i class="bi-bookmark"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-3">Ihre beliebigen Kurs auswählen &amp; Lernen</h4>
                                <p class="text-white">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic 
                                    eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?
                                </p>
                                <div class="icon-holder">
                                    <i class="bi-book"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <p class="text-white">
                        Interessiert Sie sich?
                        <a href="#" class="btn custom-btn custom-border-btn ms-3"
                           data-bs-toggle="modal" data-bs-target="#anmeldeformularModal">
                            füllen Sie das Anmeldeformular aus
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div class="modal fade" id="anmeldeformularModal" tabindex="-1"
         aria-labelledby="anmeldeformularModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="anmeldeformularModalLabel">Anmeldeformular</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Schließen"></button>
                </div>
                <div class="modal-body">
                    <!-- Your form content goes here -->
                    <form>
                        <!-- Persönliche Angaben -->
                        <h4>Persönliche Angaben</h4>
                        <div class="mb-3">
                            <label for="vollstaendigerName" class="form-label">Vollständiger Name (auf Arabisch)</label>
                            <input type="text" class="form-control"
                                   id="vollstaendigerName" name="vollstaendigerName" required>
                        </div>

                        <div class="mb-3">
                            <label for="nachname" class="form-label">Nachname (auf Deutsch)</label>
                            <input type="text" class="form-control"
                                   id="nachname" name="nachname" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Geschlecht</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"
                                       name="geschlecht" id="maennlich" value="Männlich" required>
                                <label class="form-check-label" for="maennlich">Männlich</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"
                                       name="geschlecht" id="weiblich" value="Weiblich">
                                <label class="form-check-label" for="weiblich">Weiblich</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="geburtsdatum" class="form-label">Geburtsdatum</label>
                            <input type="date" class="form-control"
                                   id="geburtsdatum" name="geburtsdatum" required>
                        </div>

                        <div class="mb-3">
                            <label for="staatsangehoerigkeit" class="form-label">Staatsangehörigkeit</label>
                            <input type="text" class="form-control"
                                   id="staatsangehoerigkeit" name="staatsangehoerigkeit" required>
                        </div>

                        <!-- Kontaktdaten -->
                        <h4>Kontaktdaten</h4>
                        <div class="mb-3">
                            <label for="telefonnummer" class="form-label">Telefonnummer</label>
                            <input type="tel" class="form-control"
                                   id="telefonnummer" name="telefonnummer" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail-Adresse</label>
                            <input type="email" class="form-control"
                                   id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="strasse" class="form-label">Straße</label>
                            <input type="text" class="form-control"
                                   id="strasse" name="strasse">
                        </div>

                        <div class="mb-3">
                            <label for="postleitzahl" class="form-label">Postleitzahl</label>
                            <input type="text" class="form-control"
                                   id="postleitzahl" name="postleitzahl">
                        </div>

                        <div class="mb-3">
                            <label for="stadt" class="form-label">Stadt</label>
                            <input type="text" class="form-control"
                                   id="stadt" name="stadt">
                        </div>

                        <!-- Lerninformationen -->
                        <h4>Lerninformationen</h4>
                        <div class="mb-3">
                            <label class="form-label">Können Sie auf Arabisch lesen?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"
                                       name="arabischLesen" id="ja" value="Ja" required>
                                <label class="form-check-label" for="ja">Ja</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"
                                       name="arabischLesen" id="nein" value="Nein">
                                <label class="form-check-label" for="nein">Nein</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="lernniveau" class="form-label">Gewünschtes Lernniveau</label>
                            <select class="form-select" id="lernniveau" name="lernniveau" required>
                                <option value="">Bitte auswählen</option>
                                <option value="Anfänger">Anfänger</option>
                                <option value="Mittelstufe">Mittelstufe</option>
                                <option value="Fortgeschritten">Fortgeschritten</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bevorzugte Quran-Rezitation</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       value="Hafs" id="hafs" name="rezitationen">
                                <label class="form-check-label" for="hafs">Hafs</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       value="Warsh" id="warsh" name="rezitationen">
                                <label class="form-check-label" for="warsh">Warsh</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       value="Qalun" id="qalun" name="rezitationen">
                                <label class="form-check-label" for="qalun">Qalun</label>
                            </div>
                            <div class="mb-3">
                                <label for="andereRezitation" class="form-label">Andere (bitte angeben):</label>
                                <input type="text" class="form-control"
                                       id="andereRezitation" name="andereRezitation">
                            </div>
                        </div>

                        <!-- Zusätzliche Hinweise -->
                        <h4>Zusätzliche Hinweise</h4>
                        <div class="mb-3">
                            <label for="anmerkungen" class="form-label">
                                Haben Sie Anmerkungen oder besondere Bedürfnisse?
                            </label>
                            <textarea class="form-control" id="anmerkungen" name="anmerkungen" rows="4"></textarea>
                        </div>

                        <!-- Zustimmung -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="zustimmung" required>
                            <label class="form-check-label" for="zustimmung">
                                Ich bestätige, dass alle oben genannten Angaben korrekt sind, und stimme 
                                den Nutzungsbedingungen und der Datenschutzrichtlinie zu.
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Absenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ SECTION -->
    <section class="faq-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Häufig gestellte Fragen</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-5 col-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/faq_graphic.svg"
                         class="img-fluid" alt="FAQs">
                </div>

                <div class="col-lg-6 col-12 m-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    wie vieln kostet es?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Topic Listing is free Bootstrap 5 CSS template.
                                    <strong>You are not allowed to redistribute</strong> this template
                                    on any other template collection website without our permission.
                                    Please contact TemplateMo for more detail. Thank you.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    wann kann ich anfangen?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can search on Google with <strong>keywords</strong> such as
                                    templatemo portfolio, templatemo one-page layouts, photography,
                                    digital marketing, etc.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                    es ist sicher?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can modify any of this with custom CSS or overriding our 
                                    default variables. It's also worth noting that just about any 
                                    HTML can go within the <code>.accordion-body</code>, though 
                                    the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Kontaktieren Sie uns</h2>
                </div>

                <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                    <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18..."
                            width="100" height="250" style="width: 100%; border:0;"
                            allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                    <h4 class="mb-3">Hauptgeschäftsstelle</h4>
                    <p>Al-Muhajirin Moschee <br> StraßeName. 1, 12345 Stadt</p>
                    <hr>
                    <p class="d-flex align-items-center mb-1">
                        <span class="me-2">Phone</span>
                        <a href="tel:+4917680569797" class="site-footer-link">+49 176 80569797</a>
                    </p>
                    <p class="d-flex align-items-center">
                        <span class="me-2">Email</span>
                        <a href="mailto:info@deutschemaqraah.de" class="site-footer-link">
                            info@deutschemaqraah.de
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mx-auto">
                    <h4 class="mb-3">Leiter der Maqra'ah</h4>
                    <p>Leiter Name</p>
                    <hr>
                    <p class="d-flex align-items-center mb-1">
                        <span class="me-2">Phone</span>
                        <a href="tel:110-220-3400" class="site-footer-link">
                            110-220-3400
                        </a>
                    </p>
                    <p class="d-flex align-items-center">
                        <span class="me-2">Email</span>
                        <a href="mailto:info@company.com" class="site-footer-link">
                            info@company.com
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- Load WordPress footer.php -->
<?php get_footer(); ?>