<?php
/**
 * Template Name: Kontakt Page
 * Description: Displays custom kontakt pages
 */
 wp_head();

get_header(); 
?>

<main class="topics-listing-page" id="top">

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
                            <li class="breadcrumb-item active" aria-current="page">Kontaktformular</li>
                        </ol>
                    </nav>
                    <h2 class="text-white">Kontaktformular</h2>
                </div>
            </div>
        </div>
    </header>


    <!-- CONTACT FORM SECTION -->
    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h3 class="mb-4 pb-2">Kontaktieren Sie uns</h3>
                </div>

                <div class="col-lg-6 col-12">
                    <!-- Replace the action="#" with an actual form handler or use a WP contact form plugin -->
                    <form action="#" method="post" class="custom-form contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <label for="nameInput">Name</label>
                                    <input type="text" name="name" id="nameInput" 
                                           class="form-control" placeholder="Ihr Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12"> 
                                <div class="form-floating">
                                    <label for="emailInput">E-Mail-Adresse</label>
                                    <input type="email" name="email" id="emailInput" pattern="[^ @]*@[^ @]*"
                                           class="form-control" placeholder="name@example.com" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <label for="subjectInput">Betreff</label>
                                    <input type="text" name="subject" id="subjectInput"
                                           class="form-control" placeholder="Betreff" required>
                                </div>
                                <div class="form-floating">
                                    <label for="messageTextarea">Ihre Nachricht</label>
                                    <textarea class="form-control" id="messageTextarea" 
                                              name="message" placeholder="Ihre Nachricht an uns"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Absenden</button>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                    <!-- Google Maps Iframe -->
                    <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18..."
                            width="100" height="250"
                            style="width: 100%; border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <h5 class="mt-4 mb-2">Hauptgeschäftsstelle</h5>
                    <p>Al-Muhajirin Moschee <br> StraßeName. 1, 12345 Stadt</p>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER (pulled in from your theme) -->
<?php get_footer(); ?>
