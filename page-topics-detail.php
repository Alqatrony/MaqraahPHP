<?php
/**
 * Template Name: Topics Detail
 * Description: Custom template for "Über uns" or any single topic details
 */

get_header(); 
?>

<main id="top">
    <!-- HEADER SECTION -->
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 mb-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- Link back to your home -->
                            <li class="breadcrumb-item">
                                <a href="<?php echo home_url('/'); ?>">Startseite</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Über uns</li>
                        </ol>
                    </nav>

                    <h2 class="text-white">Über die Deutsche Maqra'ah</h2>

                    <div class="d-flex align-items-center mt-5">
                        <!-- If #ueberuns-detail is on same page, we can do a hash link, else a full URL -->
                        <a href="#ueberuns-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">
                            Mehr erfahren
                        </a>
                        <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="topics-detail-block bg-white shadow-lg">
                        <!-- Example: use get_template_directory_uri() for images -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/topics/logo.svg"
                             class="topics-detail-block-image-basic img-fluid" 
                             alt="Über uns">
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ABOUT US DETAIL SECTION -->
    <section class="topics-detail-section section-padding" id="ueberuns-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 m-auto">
                    <h3 class="mb-4">Unsere Vision und Mission</h3>

                    <p>
                        Die Deutsche Maqra'ah ist eine Plattform, die das gemeinsame Lesen, Rezitieren und 
                        Lernen des Korans fördert. Unser Ziel ist es, Menschen unterschiedlicher Hintergründe 
                        zusammenzubringen, um den Koran auf authentische Weise zu verstehen und zu verinnerlichen.
                    </p>

                    <p>
                        <strong>Warum Deutsche Maqra'ah?</strong> Wir bieten eine vielfältige Auswahl an Lesearten, 
                        erfahrene Scheiche und qualifizierte Lehrer, um Sie bei Ihrer Reise mit dem Koran zu begleiten.
                    </p>

                    <blockquote>
                        "Die Deutsche Maqra'ah ist ein Ort der Gemeinschaft, des Austauschs und des gemeinsamen 
                        Wachsens am Wort des Allmächtigen."
                    </blockquote>

                    <div class="row my-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/businesswoman-using-tablet-analysis.jpg"
                                 class="topics-detail-block-image img-fluid" alt="Lernen mit Technologie">
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/colleagues-working-cozy-office-medium-shot.jpg"
                                 class="topics-detail-block-image img-fluid" alt="Gemeinschaftliches Lernen">
                        </div>
                    </div>

                    <p>
                        Unsere Plattform bietet regelmäßige Lektionen, Einzel- und Gruppenstunden sowie spezielle 
                        Workshops. Durch moderne Technologien und erfahrene Lehrer schaffen wir ein Umfeld, in dem 
                        das Lernen des Korans angenehm und bereichernd ist. Unser Fokus liegt darauf, jedem Lernenden 
                        die Möglichkeit zu geben, auf seinem individuellen Weg Fortschritte zu machen.
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
                         class="newsletter-image img-fluid" alt="Newsletter Anmeldung">
                </div>

                <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                    <form class="custom-form subscribe-form" action="#" method="post">
                        <h4 class="mb-4 pb-2">Newsletter abonnieren</h4>

                        <input type="email" 
                               name="subscribe-email" 
                               id="subscribe-email" 
                               pattern="[^ @]*@[^ @]*" 
                               class="form-control" 
                               placeholder="E-Mail-Adresse" 
                               required="">

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">Abonnieren</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>