<?php
//Woocommerce

function gr_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


function gr_wrapper_start() {
    echo '<section class="py-12">
    <div class="container">';
}

function gr_wrapper_end() {
    echo '</div></section>';
}

function gr_wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
 <span id="mini-cart-count" class="number"><?php echo $items_count ? $items_count : '&nbsp;'; ?></span>
<?php
    $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}
