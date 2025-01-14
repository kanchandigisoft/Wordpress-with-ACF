<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<button class="large red fullwidth"><a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">Proceed to Checkout</a></button>
<div class="sp-20"></div>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/powered_by_stripe.svg" alt="" class="stripe"/>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc/1.svg" alt="" class="cc"/>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc/2.svg" alt="" class="cc"/>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc/3.svg" alt="" class="cc"/>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc/4.svg" alt="" class="cc"/>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc/5.svg" alt="" class="cc"/>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc/6.svg" alt="" class="cc"/>

<div class="sp-60"></div>