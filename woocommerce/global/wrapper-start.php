<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-3">
	  <div class="row justify-content-center text-center">
        <h1 class="mb-0 text-white"><?php echo get_the_title( get_option( 'woocommerce_shop_page_id' ) );?></h1>

        </div>
      </section>
<div class="site-section">

<div class="container">
	