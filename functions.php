<?php
//Setup
define('GR_DEV_MODE', true);

//Includes
include(get_theme_file_path( '/inc/enqueue.php' ));
include(get_theme_file_path( '/inc/setup.php' ));
include(get_theme_file_path( '/inc/woo-setup.php' ));



//Hooks
add_action( 'wp_enqueue_scripts', 'gr_enqueue' );
add_action( 'after_setup_theme', 'gr_setup_theme' );
add_action('customize_register', 'gr_customize_register');
add_filter( 'excerpt_length', 'gr_set_excerpt_length', 999);


//Woocommerce and woo-setup files
//add_action( 'after_setup_theme', 'gr_add_woocommerce_support' );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'gr_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'gr_wrapper_end', 10);
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_filter( 'woocommerce_add_to_cart_fragments', 'gr_wc_refresh_mini_cart_count');



