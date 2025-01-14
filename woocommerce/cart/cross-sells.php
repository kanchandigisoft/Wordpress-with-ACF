<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $cross_sells ) : ?>

	<div class="cross-sells">

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $cross_sells as $cross_sell ) : ?>

				<?php $post_object = get_post( $cross_sell->get_id() ); ?>

				<?php setup_postdata( $GLOBALS['post'] =& $post_object ); ?>

				<section class="blue">
			        <div class="wrapper">
			            <div class="row middle-xs between-xs pad-xs-40 pad-top-bottom">
			                <div class="col-xs-12">
			                    <div class="row white-text">
			                        <div class="col-xs-12 col-sm-6 pad-xs-0">
			                            <p class="medium"><span class="icon info"></span>Shopify Stores also typically choose</p>
			                            <div class="sp-5 hide-md"></div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 pad-xs-0 end-sm show-sm">
			                            <p><a href="<?php the_permalink(); ?>">Find out more</a></p>
			                        </div>
			                    </div>
			                    <div class="sp-20"></div>
			                </div>
			                <div class="col-xs-12">
			                    <div class="row rounded">
			                        <div class="col-xs-12 col-sm-6 col-lg-4 pad-xs-30 pad-sm-40 white">
			                            <a href="#"><h3 class="matter"><?php the_title(); ?></h3></a>
			                            <p class="lightgrey-text"><?php the_excerpt(); ?></p>
			                            <div class="sp-10"></div>
			                            <button class="large red fullwidth"><a href="<?php the_permalink(); ?>">Learn More</a></button>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-lg-8" style="background:url('<?php the_post_thumbnail_url(); ?>') no-repeat center center; background-size:cover;">
			                            <img src="<?php the_post_thumbnail_url(); ?>" class="hide-md">
			                        </div>
			                    </div>
			                </div>
			                <div class="sp-10"></div>
			            </div>
			        </div>
			    </section>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
