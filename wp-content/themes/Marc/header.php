<?php
/**
 * Theme Header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body <?php body_class(); ?> >
    <!-- Top Bar -->
    <div class="top-bar bg-light py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
            <span class="fw-bold small d-flex gap-2">
                <i class="bi bi-geo-alt-fill" style="color:#A2AD0E"></i> 
                <?php echo get_theme_mod('top_bar_text', 'Find local service'); ?>
            </span>
            </div>
            <div class="d-flex">
            <a href="<?php echo esc_url(get_theme_mod('top_bar_quote_link', '#')); ?>" class="btn btn-Mein text-dark fw-bold me-2">
                <?php echo get_theme_mod('top_bar_quote_text', 'Get a free quote'); ?>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('top_bar_franchise_link', '#')); ?>" class="btn btn-Mein text-dark fw-bold">
                <?php echo get_theme_mod('top_bar_franchise_text', 'Franchise'); ?>
            </a>
            </div>
            <style>
                .btn.btn-Mein{
gap: 10px;
border-width: 1.6px;
border-radius: 24px;
padding-top: 12px;
padding-right: 24px;
padding-bottom: 12px;
padding-left: 24px;
background: #EBE715;
border: 1.6px solid #000000;
color:#000;

                }
                .bg-success2
{
    background: #79946E;
}
                </style>
        </div>
    </div>

    <!-- Main Navigation -->
    <header class="bg-success2 py-1">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo and Branding -->
                <a class="navbar-brand d-flex align-items-center gap-3" href="<?php echo esc_url(home_url('/')); ?>">
                <?php 
    if ( has_custom_logo() ) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the full-size logo URL
        if ($logo) {
            $custom_logo_height = esc_attr(get_theme_mod('custom_logo_height', '80px')); // Get custom height or default to 80px
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="custom-logo-img" style="height:' . $custom_logo_height . '; width:auto;">';
        }
    } else {
        echo '<span class="fw-bold text-white">Add <span class="text-warning">Logo!</span></span>';
    }
    
?>
<span class="fw-bold text-white ml-3">
    Protect <span class="fw-normal text-white">
        <?php echo esc_html(get_theme_mod('logo_tagline', '')); ?> 
        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/MainLogo.png'; ?>" alt="Logo">
    </span>
</span>

</a>


                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header_menu',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0 small fw-bold',
                            'fallback_cb'    => '__return_false',
                            'depth'          => 2,
                            'walker'         => new WP_Bootstrap_Navwalker(), 
                        )
                    );
                    ?>
                    <style>
                        .btn.btn-outline-light1{
                    gap: 10px;
                    border-width: 1.6px;
                    border-radius: 24px;
                    padding-top: 12px;
                    padding-right: 24px;
                    padding-bottom: 12px;
                    padding-left: 24px;
                    border: 1.6px solid #FFFFFF;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 150%;
                    letter-spacing: 2%;
                    color: #FFFFFF;

                        }
                        .meinlink span{
font-weight: 500 !important;
font-size: 16px !important;
line-height: 150% !important;
color:  #FFFFFF;
;
}
                        </style>
                    <!-- Phone Number -->
                    <a href="tel:<?php echo esc_attr(get_theme_mod('header_phone', '226-526-4711')); ?>" class="btn btn-outline-light1 ms-3">
    <?php echo esc_html(get_theme_mod('header_phone', '226-526-4711')); ?>
</a>
                </div>
            </div>
        </nav>
    </header>
