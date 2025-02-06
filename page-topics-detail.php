<?php
/**
 * Template Name: Topics Detail
 * Description: Custom template for single-topic details with partially editable content
 */

// استدعاء رأس الموقع
get_header(); 
?>

<main id="top">
    <?php 
    /**
     * HERO SECTION (Hardcoded)
     * يمكنك تركه كما هو (لا يتم تحريره من لوحة التحكم)
     */
    ?>
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
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php the_title(); ?>
                            </li>
                        </ol>
                    </nav>

                    <h2 class="text-white"><?php the_title(); ?></h2>

                    <div class="d-flex align-items-center mt-5">
                        <!-- مثال: زر Scroll إلى قسم معين في نفس الصفحة -->
                        <a href="#ueberuns-detail" 
                           class="btn custom-btn custom-border-btn smoothscroll me-4">
                           Mehr erfahren
                        </a>
                        <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="topics-detail-block bg-white shadow-lg">
                        <!-- صورة ثابتة (Hardcoded) -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/topics/logo.svg"
                             class="topics-detail-block-image-basic img-fluid" 
                             alt="Über uns">
                    </div>
                </div>

            </div>
        </div>
    </header>

    <?php 
    /**
     * MAIN CONTENT SECTION
     * هنا نعرض محتوى الصفحة الديناميكي من محرر WP (أو Elementor)
     */
    ?>
    <section class="topics-detail-section section-padding" id="ueberuns-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 m-auto">

                    <?php
                    // بدء الحلقة لجلب محتوى الصفحة من قاعدة البيانات
                    while ( have_posts() ) :
                        the_post();
                        // عرض محتوى المحرر (يمكنك تحريره من داخل WP أو Elementor)
                        the_content();
                    endwhile;
                    ?>
                    
                    <?php if ( function_exists('elementor_theme_do_location') && elementor_theme_do_location('single') ) : ?>
    <?php elementor_theme_do_location('single'); ?>
<?php else : ?>

<?php endif; ?>


                </div>
            </div>
        </div>
    </section>

    <?php 
    /**
     * NEWSLETTER SECTION (Hardcoded) 
     * يمكنك جعله ثابتًا أو تحويله إلى حقول مخصصة/Shortcode إن أردت تحريره مستقبلًا
     */
    ?>
    <section class="section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rear-view-young-college-student.jpg"
                         class="newsletter-image img-fluid" alt="Newsletter Anmeldung">
                </div>

                <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                    <form class="custom-form subscribe-form" 
                          action="#" method="post">
                        <h4 class="mb-4 pb-2">Newsletter abonnieren</h4>

                        <input type="email" 
                               name="subscribe-email" 
                               id="subscribe-email" 
                               pattern="[^ @]*@[^ @]*" 
                               class="form-control" 
                               placeholder="E-Mail-Adresse" 
                               required="">

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">
                                Abonnieren
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<?php 
// استدعاء ذيل الموقع
get_footer();