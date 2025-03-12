<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function register_theme_menus() {
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'your-theme-textdomain')
        )
    );
}
add_action('after_setup_theme', 'register_theme_menus');


function theme_custom_logo() {
    add_theme_support('custom-logo', array(
        'height'      => 200, // Set the default height (adjustable)
        'width'       => 200, // Set the default width (adjustable)
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_custom_logo');


function theme_customize_register($wp_customize) {
    

    
    
    // Section for Top Bar Settings
    $wp_customize->add_section('top_bar_section', array(
        'title'    => __('Top Bar Settings', 'theme_textdomain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('custom_logo_height', array(
        'default'   => '80px',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('custom_logo_height_control', array(
        'label'    => __('Logo Height', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'custom_logo_height',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('logo_tagline', array(
        'default'   => 'Protect your yard',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('logo_tagline_control', array(
        'label'    => __('Logo Tagline', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'logo_tagline',
        'type'     => 'text',
    ));

    // Find local service text
    $wp_customize->add_setting('top_bar_text', array(
        'default'   => 'Find local service',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('top_bar_text_control', array(
        'label'    => __('Top Bar Text', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'top_bar_text',
        'type'     => 'text',
    ));

    // Get a free quote button text
    $wp_customize->add_setting('top_bar_quote_text', array(
        'default'   => 'Get a free quote',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('top_bar_quote_control', array(
        'label'    => __('Quote Button Text', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'top_bar_quote_text',
        'type'     => 'text',
    ));

    // Get a free quote button link
    $wp_customize->add_setting('top_bar_quote_link', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('top_bar_quote_link_control', array(
        'label'    => __('Quote Button Link', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'top_bar_quote_link',
        'type'     => 'url',
    ));

    // Franchise button text
    $wp_customize->add_setting('top_bar_franchise_text', array(
        'default'   => 'Franchise',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('top_bar_franchise_control', array(
        'label'    => __('Franchise Button Text', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'top_bar_franchise_text',
        'type'     => 'text',
    ));

    // Franchise button link
    $wp_customize->add_setting('top_bar_franchise_link', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('top_bar_franchise_link_control', array(
        'label'    => __('Franchise Button Link', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'top_bar_franchise_link',
        'type'     => 'url',
    ));

    // Phone Number
    $wp_customize->add_setting('header_phone', array(
        'default'   => '226-526-4711',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('header_phone_control', array(
        'label'    => __('Header Phone Number', 'theme_textdomain'),
        'section'  => 'top_bar_section',
        'settings' => 'header_phone',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'theme_customize_register');



function custom_footer_settings($wp_customize) {
    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Settings', 'yourtheme'),
        'priority' => 130,
    ));

    // Contact Info
    $wp_customize->add_setting('footer_phone', array('default' => '226-526-4711'));
    $wp_customize->add_setting('footer_email', array('default' => 'info@mosquitoman.ca'));
    $wp_customize->add_setting('footer_address', array('default' => 'Headquarters 2401-224 King St W, Toronto, ON M5J 0A6, Canada'));

    // Social Media Links
    $wp_customize->add_setting('footer_facebook', array('default' => '#'));
    $wp_customize->add_setting('footer_instagram', array('default' => '#'));

    // Footer Navigation
    $wp_customize->add_setting('footer_menu_1', array('default' => 'Home'));
    $wp_customize->add_setting('footer_menu_1_link', array('default' => home_url('/')));
    $wp_customize->add_setting('footer_menu_2', array('default' => 'Franchise'));
    $wp_customize->add_setting('footer_menu_3', array('default' => 'Our Services'));
    $wp_customize->add_setting('footer_menu_4', array('default' => 'Blog'));
    $wp_customize->add_setting('footer_menu_5', array('default' => 'Contact Us'));

    // CTA Button
    $wp_customize->add_setting('footer_cta_text', array('default' => 'Have a question?'));
    $wp_customize->add_setting('footer_cta_link', array('default' => '#'));

    // Add controls
    $wp_customize->add_control('footer_phone', array('label' => 'Phone Number', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_email', array('label' => 'Email', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_address', array('label' => 'Address', 'section' => 'footer_section', 'type' => 'textarea'));

    $wp_customize->add_control('footer_facebook', array('label' => 'Facebook Link', 'section' => 'footer_section', 'type' => 'url'));
    $wp_customize->add_control('footer_instagram', array('label' => 'Instagram Link', 'section' => 'footer_section', 'type' => 'url'));

    $wp_customize->add_control('footer_menu_1', array('label' => 'Menu Item 1', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_menu_1_link', array('label' => 'Menu Item 1 Link', 'section' => 'footer_section', 'type' => 'url'));
    $wp_customize->add_control('footer_menu_2', array('label' => 'Menu Item 2', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_menu_3', array('label' => 'Menu Item 3', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_menu_4', array('label' => 'Menu Item 4', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_menu_5', array('label' => 'Menu Item 5', 'section' => 'footer_section', 'type' => 'text'));

    $wp_customize->add_control('footer_cta_text', array('label' => 'CTA Button Text', 'section' => 'footer_section', 'type' => 'text'));
    $wp_customize->add_control('footer_cta_link', array('label' => 'CTA Button Link', 'section' => 'footer_section', 'type' => 'url'));
}

add_action('customize_register', 'custom_footer_settings');


?>