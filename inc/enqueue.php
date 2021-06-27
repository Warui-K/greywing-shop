<?php
function gr_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = GR_DEV_MODE ? time() : false;


    //Register the stylesheet
    wp_register_style('gr_style_header', $uri . '/style.css', [], $ver);
    wp_register_style('gr_icomoon', $uri . '/assets/fonts/icomoon/style.css', [], $ver);
    
    wp_register_style('gr_bootstrap', $uri . '/assets/css/bootstrap.min.css', [], $ver);
    wp_register_style('gr_bootstrap_icons', $uri . '/assets/fonts/bootstrap-icons@1.4.1/font/bootstrap-icons.css', [], $ver);
    

    wp_register_style('gr_mg_pop', $uri . '/assets/css/magnific-popup.css', [], $ver);
    wp_register_style('gr_jq_ui', $uri . '/assets/css/jquery-ui.css', [], $ver);
    wp_register_style('gr_owl_c', $uri . '/assets/css/owl.carousel.min.css', [], $ver);
    wp_register_style('gr_owl_t', $uri . '/assets/css/owl.theme.default.min.css', [], $ver);
    wp_register_style('gr_aos', $uri . '/assets/css/aos.css', [], $ver);
    wp_register_style('gr_style', $uri . '/assets/css/style.css', [], $ver);
    wp_register_style('gr_woo_style', $uri . '/assets/css/woocommerce.css', [], $ver);




    //Enqueue the stylesheer
    wp_enqueue_style('gr_style_header');
    wp_enqueue_style('gr_icomoon');
    wp_enqueue_style('gr_bootstrap');
    wp_enqueue_style('gr_bootstrap_icons');

    wp_enqueue_style('gr_mg_pop');
    wp_enqueue_style('gr_jq_ui');
    wp_enqueue_style('gr_owl_c');
    wp_enqueue_style('gr_owl_t');
    wp_enqueue_style('gr_aos');
    wp_enqueue_style('gr_style');
    wp_enqueue_style('gr_woo_style');



    //Register the script files
    wp_register_script('gr_jq_js', $uri . '/assets/js/jquery-3.3.1.min.js', [], $ver, true);
    wp_register_script('gr_aos_js', $uri . '/assets/js/aos.js', [], $ver, true);
    wp_register_script('gr_jq_ui_js', $uri . '/assets/js/jquery-ui.js', [], $ver, true);
    wp_register_script('gr_jq_mg_pop_js', $uri . '/assets/js/jquery.magnific-popup.min.js', [], $ver, true);
    wp_register_script('gr_bootstrap_js', $uri . '/assets/js/bootstrap.min.js', [], $ver, true);
    wp_register_script('gr_main_js', $uri . '/assets/js/main.js', [], $ver, true);
    wp_register_script('gr_owl_c_js', $uri . '/assets/js/owl.carousel.min.js', [], $ver, true);
    wp_register_script('gr_popper_js', $uri . '/assets/js/popper.min.js', [], $ver, true);
    wp_register_script('gr_masonry_js', $uri . '/assets/js/masonry.pkgd.min.js', [], $ver, true);



    //Enqueue the script files
    wp_enqueue_script('gr_jq_js');
    wp_enqueue_script('gr_aos_js');
    wp_enqueue_script('gr_jq_ui_js');
    wp_enqueue_script('gr_jq_mg_pop_js');
    wp_enqueue_script('gr_bootstrap_js');
    wp_enqueue_script('gr_main_js');
    wp_enqueue_script('gr_owl_c_js');
    wp_enqueue_script('gr_popper_js');
    wp_enqueue_script('gr_masonry_js');
}
