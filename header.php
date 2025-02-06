<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?><?php wp_title(' - '); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">

<?php
/**
 * إذا كنت تستخدم Elementor Pro وترغب في إمكانية استبدال هذا الهيدر
 * بشكل كامل من داخل Elementor Theme Builder، يمكنك إضافة هذا الشرط:
 */
if ( function_exists('elementor_theme_do_location') && elementor_theme_do_location('header') ) {
    // تم إنشاء هيدر مخصص عبر Elementor Theme Builder
} else {
    // خلاف ذلك، استخدم الكود الافتراضي أدناه
    ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- شعار ثابت (غير قابل للتخصيص) -->
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img class="bi-back" 
                     src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo.svg" 
                     alt="Logo">
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/topics/Miqraah-logo-txt.svg" alt="Logo Text">
                </span>
            </a>

            <div class="d-lg-none ms-auto me-4">
                <!-- رابط للنسخة العربية أو أي صفحة أخرى -->
                <a href="<?php echo home_url('ar'); ?>" class="navbar-icon">ع</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="<?php esc_attr_e( 'Toggle navigation', 'mytheme-textdomain' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                // استدعاء قائمة ووردبريس (Primary Menu)
                // تأكد من تسجيلها مسبقًا في functions.php عبر:
                //    register_nav_menus( array('primary_menu' => 'Primary Menu') );
                wp_nav_menu( array(
                    'theme_location' => 'primary_menu',    // يجب أن يطابق الاسم المسجل
                    'container'      => false,             // منع وضع الـ <div> حول <ul>
                    'menu_class'     => 'navbar-nav ms-lg-5 me-lg-auto',
                    'fallback_cb'    => false,             // عدم استخدام قائمة افتراضية
                ) );
                ?>

                <div class="d-none d-lg-block">
                    <a href="<?php echo home_url('ar'); ?>" class="navbar-icon">ع</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
} // نهاية else
?>