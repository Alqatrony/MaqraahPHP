<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?><?php wp_title(' - '); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Update link to WordPress home URL -->
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img class="bi-back" 
                     src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo.svg" 
                     alt="Logo">
                <span>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo-txt.svg" alt="">
                </span>
            </a>

            <div class="d-lg-none ms-auto me-4">
                <!-- If you have an Arabic version, link to an actual WP page or another .php in your theme -->
                <a href="<?php echo home_url('ar'); ?>" class="navbar-icon">ع</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NAV Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    <li class="nav-item">
                        <!-- If #section_1 is part of the same page, this can be a hash link,
                             or link to home with a hash, e.g. home_url('/#section_1') -->
                        <a class="nav-link click-scroll" href="#section_1">Startseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Koran Lernen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Rezitationspraxis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">Kontakt</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" 
                           id="navbarLightDropdownMenuLink" 
                           role="button" data-bs-toggle="dropdown" 
                           aria-expanded="false">
                           Seiten
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <!-- Adjust these .php links to WordPress pages if you want to use WP routing -->
                            <li>
                              <a class="dropdown-item" href="<?php echo home_url('topics-listing'); ?>">
                                Hafiz-Patenschaft übernehmen
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo home_url('kontakt'); ?>">
                                Spende für unser Projekt
                              </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <!-- Arabic link again, or some other page -->
                    <a href="<?php echo home_url('ar'); ?>" class="navbar-icon">ع</a>
                </div>
            </div>
        </div>
    </nav>