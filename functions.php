<?php

function wpdocs_deutscheMaqraah_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap' );
    wp_enqueue_style( 'preconnect', 'https://fonts.gstatic.com', array(), null );
    wp_enqueue_style( 'preconnectFonts', 'https://fonts.googleapis.com', array(), null );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri().'/css/bootstrap-icons.css', array('bootstrap-css') );
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/templatemo-topic-listing.css' );
    if (is_page_template('page-ar.php')) {
        wp_enqueue_style( 'rtl', get_template_directory_uri().'/css/rtl.css' );
    }

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery', 'jquery-sticky' ), '1.0', true );
    wp_enqueue_script( 'click-scroll', get_template_directory_uri() . '/js/click-scroll.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js', array(), '5.7.5', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_deutscheMaqraah_scripts' );
?>