<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>Greywing &mdash; A Healing Environment</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
    <div class="site-wrap">
        <div class="site-navbar py-2">
            <?php get_search_form(); ?>
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a class="navbar-brand" class="d-inline-block align-top">
                                <?php
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                ?>
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" class="d-inline-block align-top">
                                        <?php bloginfo('name'); ?></a>
                                <?php
                                }
                                ?>

                            </a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">

                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'menu_class'        => 'site-menu js-clone-nav d-none d-lg-block',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                            ?>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="bi bi-search"></span></a>
                        <a href="<?php echo wc_get_cart_url() ?>" title="<?php _e('View your shopping cart'); ?>" class="icons-btn d-inline-block bag">
                            <span class="bi bi-cart4"></span>
                            <?php //$items_count = WC()->cart->get_cart_contents_count();
                            ?>

                            <span id="mini-cart-count" class="number">
                                <?php //echo $items_count ? $items_count : '&nbsp;'; ?>
                            </span>
                        </a>

                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="bi bi-filter-left"></span></a>
                        
                    </div>
                </div>
            </div>
        </div>