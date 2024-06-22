<?php
function ark_packaging_enterprise_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

     // Enqueue swiper CSS
     wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    
    // Enqueue theme's main stylesheet
    wp_enqueue_style('ark-packaging-enterprise-style', get_stylesheet_uri());
    
    // Enqueue custom CSS
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');

    // Enqueue jQuery (required by Bootstrap)
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue Bootstrap JS
    wp_enqueue_script('swiper-bundle-min', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);

    // Enqueue GSAP JS
    wp_enqueue_script('gsap-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), null, true);
    
    // Enqueue custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ark_packaging_enterprise_enqueue_styles');

function ark_packaging_enterprise_setup() {
    // Add menu support
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ark-packaging-enterprise'),
        'footer'  => __('Footer Menu', 'ark-packaging-enterprise')
    ));
    
    // Add WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'ark_packaging_enterprise_setup');


function ark_packaging_enterprise_widgets_init() {
    register_sidebar(array(
        'name' => __('Shop Sidebar', 'ark_packaging_enterprise'),
        'id' => 'shop-sidebar',
        'description' => __('Widgets in this area will be shown on the shop pages.', 'ark_packaging_enterprise'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'ark_packaging_enterprise_widgets_init');
