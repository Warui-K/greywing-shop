<?php

function gr_setup_theme()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'greywingshop')
    ));
    
    register_nav_menus(array(
        'footer_menu' => __('Footer Menu', 'greywingshop')
    ));

    //Support for HTML5
    add_theme_support('HTML5', array(
        'search-form', 'comment-list'
    ));

    //Support for Logo
    add_theme_support('custom-logo');
    //Support for RSS Feeds
    add_theme_support('automatic-feed-links');
    //Support for featured image
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');

    add_theme_support('post-formats', array('aside', 'gallery','link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    //Support for Title Tags
    add_theme_support('title-tag');
}

function gr_set_excerpt_length()
{
    return 15;
}
// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
    return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function gr_class_the_tags($html)
{
    $postid = get_the_ID();
    $html = str_replace('<a', '<a class="font-weight-normal text-gray-500 mr-3 mb-3"', $html);
    return $html;
}
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function posts_link_next_class($format){
    $format = str_replace('href=', 'class="btn btn-outline-info" href=', $format);
    return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
    $format = str_replace('href=', 'class="btn btn-outline-secondary" href=', $format);
    return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');

function wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
     <span id="mini-cart-count" class="number">
    <?php echo $items_count ? $items_count : '&nbsp;'; ?>
    </span>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
