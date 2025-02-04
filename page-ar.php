<?php
/**
 * Template Name: Arabic Index
 * Description: Arabic front page template
 */
?>

<!doctype html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>المقرأة الألمانية</title>

    <?php wp_head(); ?>
    <!-- Ensure rtl.css is enqueued or you can reference it directly if not handled in functions.php -->
</head>

<body id="top">

<main>
    <!-- If your theme’s header has a nav, remove this block and just do get_header(). -->
    <?php /* get_header(); */ ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Home link to an Arabic front page or direct to home_url('/ar/') if you have a subpath -->
            <a class="navbar-brand" href="<?php echo home_url('index-ar'); ?>">
                <img class="bi-back" src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo.svg" alt="">
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo-txt.svg" alt="">
                </span>
            </a>

            <!-- Language Switch: link back to the main German version (index.php) or your actual WP page -->
            <div class="d-lg-none ms-auto me-4">
                <a href="<?php echo home_url(); ?>" class="navbar-icon">DE</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">تعلم القرآن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">ممارسة التلاوة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">الأسئلة الشائعة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">اتصل بنا</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           الصفحات
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light"
                            aria-labelledby="navbarLightDropdownMenuLink">
                            <!-- You can link to WP pages, e.g. home_url('topics-listing-ar') -->
                            <li>
                              <a class="dropdown-item" href="<?php echo home_url('topics-listing-ar'); ?>">
                                رعاية حافظ
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo home_url('contact-ar'); ?>">
                                تبرع لمشروعنا
                              </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Language Switch in large screens -->
                <div class="d-none d-lg-block">
                    <a href="<?php echo home_url(); ?>" class="navbar-icon">DE</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div id="animation-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/data.svg" alt="">
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center">اقرأ. رتل. تعلم</h1>
                    <h6 class="text-center">منصة للتعلم والفهم المشترك للقرآن الكريم</h6>
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
                        <a href="<?php echo home_url('topics-detail'); ?>">
                            <div class="d-flex">
                                <div>
                                    <h5 class="mb-2">إحصائيات</h5>
                                    <div class="Statistiken">
                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/schüler-schülerinnen.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="students-counter">0</span>
                                            <p class="mb-0">طلاب</p>
                                        </div>

                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/schüler.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="hafith-counter">0</span>
                                            <p class="mb-0">حافظ</p>
                                        </div>

                                        <div class="d-flex">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg" alt="">
                                            <span class="badge bg-design rounded-pill" id="scheick-counter">0</span>
                                            <p class="mb-0">شيخ</p>
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
                                 class="custom-block-image img-fluid"
                                 style="height: 450px;" alt="">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">معلومات عنا</h5>
                                    <p class="text-white">
                                        المقرأة الألمانية للقرآن الكريم 2025 هي منصة رقمية متخصصة في تعليم وتحفيظ كتاب الله عز وجل...
                                    </p>
                                    <a href="<?php echo home_url('topics-detail'); ?>"
                                       class="btn custom-btn mt-2 mt-lg-3">
                                       اقرأ المزيد
                                    </a>
                                </div>
                                <span class="badge bg-finance rounded-pill ms-auto">٢٥</span>
                            </div>

                            <div class="social-share d-flex">
                                <p class="text-white me-4">تابعنا:</p>
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
                    <h1 class="mb-4">اكتشف</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="design-tab" data-bs-toggle="tab"
                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                aria-controls="design-tab-pane" aria-selected="false">معلمون</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                aria-controls="marketing-tab-pane" aria-selected="false">القراءات</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="finance-tab" data-bs-toggle="tab"
                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                aria-controls="finance-tab-pane" aria-selected="true">التبرعات</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="music-tab" data-bs-toggle="tab"
                                data-bs-target="#music-tab-pane" type="button" role="tab"
                                aria-controls="music-tab-pane" aria-selected="false">القرآن</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                data-bs-target="#education-tab-pane" type="button" role="tab"
                                aria-controls="education-tab-pane" aria-selected="false">الدورات</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="design-tab-pane" role="tabpanel"
                                aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">الشيخ فرج العوامي</h5>
                                                        <p class="mb-0">خبرة أكثر من ٥ سنوات في قراءة قالون</p>
                                                    </div>
                                                    <span class="badge bg-design rounded-pill ms-auto">١٤</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">الشيخ أنس الورفلي</h5>
                                                        <p class="mb-0">خبرة أكثر من ٥ سنوات في قراءة قالون</p>
                                                    </div>
                                                    <span class="badge bg-design rounded-pill ms-auto">٧٥</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">الشيخ محمد الفاضل</h5>
                                                        <p class="mb-0">خبرة أكثر من ٢٠ سنة في قراءة قالون</p>
                                                    </div>
                                                    <span class="badge bg-design rounded-pill ms-auto">١٠٠</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Scheich.svg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                aria-labelledby="marketing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">قالون</h5>
                                                        <p class="mb-0">قراءة معتمدة مع شرح بسيط</p>
                                                    </div>
                                                    <span class="badge bg-advertising rounded-pill ms-auto">٣٠</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">حفص</h5>
                                                        <p class="mb-0">قراءة شائعة مع دروس تجويد</p>
                                                    </div>
                                                    <span class="badge bg-advertising rounded-pill ms-auto">٦٥</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">ورش</h5>
                                                        <p class="mb-0">تعلم قراءة ورش بإتقان</p>
                                                    </div>
                                                    <span class="badge bg-advertising rounded-pill ms-auto">٥٠</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/quran-01.svg"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="finance-tab-pane" role="tabpanel"
                                aria-labelledby="finance-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">المتبرعون</h5>
                                                        <p class="mb-0">ساهموا في دعم هذا المشروع المبارك</p>
                                                    </div>
                                                    <span class="badge bg-finance rounded-pill ms-auto">٣٠</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Spenden.svg" style="object-fit: none;"
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
                                                        <h5 class="text-white mb-2">ساعدونا</h5>
                                                        <p class="text-white">
                                                            دعمكم يساهم في استمرار نشر العلم وتصحيح التلاوة. تبرعوا معنا
                                                            لنشر الفائدة.
                                                        </p>
                                                        <a href="topics-detail.html"
                                                            class="btn custom-btn mt-2 mt-lg-3">تبرع</a>
                                                    </div>
                                                </div>

                                                <div class="social-share d-flex">
                                                    <p class="text-white me-4">شارك:</p>
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

                            <div class="tab-pane fade" id="music-tab-pane" role="tabpanel"
                                aria-labelledby="music-tab" tabindex="0">
                                <div class="row">
                                    <!-- You can translate these sections if needed or leave placeholder -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">تلاوة خاصة</h5>
                                                        <p class="mb-0">دروس متخصصة في تحبير التلاوة</p>
                                                    </div>
                                                    <span class="badge bg-music rounded-pill ms-auto">٤٥</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Compose_music_re_wpiw.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">التلاوة عبر الانترنت</h5>
                                                        <p class="mb-0">شارك في جلسات تعليمية مباشرة</p>
                                                    </div>
                                                    <span class="badge bg-music rounded-pill ms-auto">٤٥</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_happy_music_g6wc.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">بودكاست قرآني</h5>
                                                        <p class="mb-0">استمع لدروس وتلاوات متنوعة</p>
                                                    </div>
                                                    <span class="badge bg-music rounded-pill ms-auto">٢٠</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Podcast_audience_re_4i5q.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                                aria-labelledby="education-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">دروس التجويد</h5>
                                                        <p class="mb-0">تعلم أحكام التجويد بشكل مبسط</p>
                                                    </div>
                                                    <span class="badge bg-education rounded-pill ms-auto">٨٠</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Graduation_re_gthn.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="topics-detail.html">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">دروس اللغة العربية</h5>
                                                        <p class="mb-0">طور مهاراتك اللغوية لفهم القرآن</p>
                                                    </div>
                                                    <span class="badge bg-education rounded-pill ms-auto">٧٥</span>
                                                </div>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/topics/undraw_Educator_re_ju47.png"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">كيف يعمل؟</h2>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <div class="list-progress">
                                <div class="inner"></div>
                            </div>
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <li>
                                    <h4 class="text-white mb-3">ابحث عن الشيخ الذي تريده</h4>
                                    <p class="text-white">تصفح قائمة الشيوخ واختر الشيخ الذي يناسبك لبدء رحلة التعلم</p>
                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">احفظ وتعلم التلاوة مع شيخك</h4>
                                    <p class="text-white">
                                        تعلم القراءة الصحيحة واحفظ القرآن الكريم بالتوجيه الصحيح والمستمر
                                    </p>
                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">اختر الدورة التي تريدها وتعلم</h4>
                                    <p class="text-white">انضم للدورات المناسبة لمستواك واحتياجاتك وابدأ بالتعلم الآن</p>
                                    <div class="icon-holder">
                                        <i class="bi-book"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <p class="text-white">
                            هل أنت مهتم؟
                            <a href="#" class="btn custom-btn custom-border-btn ms-3" data-bs-toggle="modal"
                                data-bs-target="#anmeldeformularModal">قم بملء استمارة التسجيل</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="anmeldeformularModal" tabindex="-1" aria-labelledby="anmeldeformularModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="anmeldeformularModalLabel">استمارة التسجيل</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="إغلاق"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <h4>المعلومات الشخصية</h4>
                            <div class="mb-3">
                                <label for="vollstaendigerName" class="form-label">الاسم الكامل (بالعربية)</label>
                                <input type="text" class="form-control" id="vollstaendigerName" name="vollstaendigerName" required>
                            </div>

                            <div class="mb-3">
                                <label for="nachname" class="form-label">الاسم العائلي (بالألمانية)</label>
                                <input type="text" class="form-control" id="nachname" name="nachname" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">الجنس</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="geschlecht" id="maennlich" value="Männlich" required>
                                    <label class="form-check-label" for="maennlich">ذكر</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="geschlecht" id="weiblich" value="Weiblich">
                                    <label class="form-check-label" for="weiblich">أنثى</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="geburtsdatum" class="form-label">تاريخ الميلاد</label>
                                <input type="date" class="form-control" id="geburtsdatum" name="geburtsdatum" required>
                            </div>

                            <div class="mb-3">
                                <label for="staatsangehoerigkeit" class="form-label">الجنسية</label>
                                <input type="text" class="form-control" id="staatsangehoerigkeit" name="staatsangehoerigkeit" required>
                            </div>

                            <h4>بيانات الاتصال</h4>
                            <div class="mb-3">
                                <label for="telefonnummer" class="form-label">رقم الهاتف</label>
                                <input type="tel" class="form-control" id="telefonnummer" name="telefonnummer" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="strasse" class="form-label">الشارع</label>
                                <input type="text" class="form-control" id="strasse" name="strasse">
                            </div>

                            <div class="mb-3">
                                <label for="postleitzahl" class="form-label">الرمز البريدي</label>
                                <input type="text" class="form-control" id="postleitzahl" name="postleitzahl">
                            </div>

                            <div class="mb-3">
                                <label for="stadt" class="form-label">المدينة</label>
                                <input type="text" class="form-control" id="stadt" name="stadt">
                            </div>

                            <h4>معلومات التعلم</h4>
                            <div class="mb-3">
                                <label class="form-label">هل تستطيع القراءة بالعربية؟</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="arabischLesen" id="ja" value="Ja" required>
                                    <label class="form-check-label" for="ja">نعم</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="arabischLesen" id="nein" value="Nein">
                                    <label class="form-check-label" for="nein">لا</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="lernniveau" class="form-label">المستوى المطلوب</label>
                                <select class="form-select" id="lernniveau" name="lernniveau" required>
                                    <option value="">اختر المستوى</option>
                                    <option value="Anfänger">مبتدئ</option>
                                    <option value="Mittelstufe">متوسط</option>
                                    <option value="Fortgeschritten">متقدم</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">التلاوة المفضلة</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Hafs" id="hafs" name="rezitationen">
                                    <label class="form-check-label" for="hafs">حفص</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Warsh" id="warsh" name="rezitationen">
                                    <label class="form-check-label" for="warsh">ورش</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Qalun" id="qalun" name="rezitationen">
                                    <label class="form-check-label" for="qalun">قالون</label>
                                </div>
                                <div class="mb-3">
                                    <label for="andereRezitation" class="form-label">أخرى (يرجى التحديد):</label>
                                    <input type="text" class="form-control" id="andereRezitation" name="andereRezitation">
                                </div>
                            </div>

                            <h4>ملاحظات إضافية</h4>
                            <div class="mb-3">
                                <label for="anmerkungen" class="form-label">هل لديك ملاحظات أو احتياجات خاصة؟</label>
                                <textarea class="form-control" id="anmerkungen" name="anmerkungen" rows="4"></textarea>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="zustimmung" required>
                                <label class="form-check-label" for="zustimmung">
                                    أؤكد صحة المعلومات أعلاه وأوافق على الشروط وسياسة الخصوصية.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">الأسئلة الشائعة</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/faq_graphic.svg" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        كم التكلفة؟
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        هذه المنصة مجانية. <strong>لا يسمح بإعادة توزيع هذا القالب</strong> على مواقع أخرى دون إذن.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        متى يمكنني البدء؟
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        يمكنك البحث عبر الإنترنت عن المنصة باستخدام الكلمات الدلالية مثل "تعلم القرآن"،
                                        "تجويد"، "دروس قرآنية"، إلخ.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        هل هو آمن؟
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        يمكنك تعديل أي جزء من هذا القالب باستخدام CSS مخصص أو تجاوز المتغيرات الافتراضية.
                                        كما يمكنك إضافة أي محتوى HTML داخل
                                        <code>.accordion-body</code> حسب الحاجة.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">اتصل بنا</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88862.06704728892!2d7.034728011961646!3d50.703547838141915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bee19f7ccbda49%3A0x86dbf8c6685c9617!2sBonn!5e1!3m2!1sde!2sde!4v1733868893794!5m2!1sde!2sde"
                            width="100" height="250" style="width: 100%; border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                        <h4 class="mb-3">المقر الرئيسي</h4>
                        <p>اسم المقر<br> StraßeName. 1, 12345 Stadt</p>

                        <hr>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">هاتف</span>
                            <a href="tel:+4917680569797" class="site-footer-link">+49 176 80569797</a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">بريد</span>
                            <a href="mailto:mailto:info@deutschemaqraah.de" class="site-footer-link">mailto:info@deutschemaqraah.de</a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mx-auto">
                        <h4 class="mb-3">مدير المقرأة</h4>
                        <p>اسم المدير<br> </p>

                        <hr>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">هاتف</span>
                            <a href="tel:110-220-3400" class="site-footer-link">110-220-3400</a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">بريد</span>
                            <a href="mailto:info@company.com" class="site-footer-link">info@company.com</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </main>

<!-- If your theme’s footer includes the HTML below, remove it here and just do get_footer(). -->
<footer class="site-footer section-padding">
    <div class="container">
        <div class="row">
            <!-- Example of Arabic footer -->
            <div class="col-lg-3 col-12 mb-4 pb-2">
                <a class="navbar-brand mb-2"
                   href="<?php echo home_url('index-ar'); ?>">
                    <img class="bi-back"
                         src="<?php echo get_template_directory_uri(); ?>/images/topics/logo.svg"
                         style="width: 135px;" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <h6 class="site-footer-title mb-3">الموارد</h6>
                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="#section_1" class="site-footer-link">الصفحة الرئيسية</a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="#section_3" class="site-footer-link">كيف يعمل</a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="#section_4" class="site-footer-link">الأسئلة الشائعة</a>
                    </li>
                    <li class="site-footer-link-item">
                        <a href="#section_5" class="site-footer-link">اتصل بنا</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                <h6 class="site-footer-title mb-3">معلومات</h6>
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
                        العربية
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                          <button class="dropdown-item" type="button">
                            Deutsch
                          </button>
                        </li>
                    </ul>
                </div>
                <p class="copyright-text mt-lg-5 mt-4">
                    جميع الحقوق محفوظة © 2024 المقرأة الألمانية.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>