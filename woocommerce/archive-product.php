<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

get_header(); ?>
<style type="text/css">
    .hup-7542{
        display: none !important;
    }
</style>
<section class="cream">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="sp-30 show-sm"></div>
            <div class="col-xs-12">
                <h1 class="hup_ecom-h1">Ecommerce Marketing Service for Shopify</h1>
            </div>
            <div class="sp-30"></div>

            <div class="row">
                <div class="col-xs-12 col-sm-6  service-container hup-5655">
                    <div class="service white rounded-xl fullheight">
                        <div class="row fullheight column">
                            
                            <div class="row flexfill column between-xs pad-xs-30 pad-sm-40">
                                <div>
                                    <a href="https://wholedesignstudios.com/ecommerce-marketing-services/shopify-optimization-service/">
                                        <h4 class="matter blue-text">Shopify Conversion Optimization Report</h4>
                                        <p></p><p>Get more visitors to sign up &amp; buy with our best practices review.</p>
                                    <p></p>
                                        <div class="sp-20"></div>
                                    </a>
                                </div>
                                <div>
                                    <button class="large fullwidth red hup_button_largepadding_remover hup_button_smallpadding_remover"><a href="https://wholedesignstudios.com/ecommerce-marketing-services/shopify-optimization-service/">Learn More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6  service-container hup-5655">
                    <div class="service white rounded-xl fullheight">
                        <div class="row fullheight column">
                            
                            <div class="row flexfill column between-xs pad-xs-30 pad-sm-40">
                                <div>
                                    <a href="https://wholedesignstudios.com/shopify-consultant/">
                                        <h4 class="matter blue-text">Shopify Consulting Services</h4>
                                        <p></p>    <p>Monthly strategy & consulting services for direct to consumer brands on Shopify.</p>
                                        <p></p>
                                        <div class="sp-20"></div>
                                    </a>
                                </div>
                                <div>
                                    <button class="large fullwidth red hup_button_largepadding_remover hup_button_smallpadding_remover"><a href="https://wholedesignstudios.com/shopify-consultant/">Learn More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sp-20 show-sm"></div>
            <div class="row" id="servicesgrid">

                <?php
                $args = array(
                  'post_type'   => 'product',
                  'post_status' => 'publish',
                  'product_cat' => 'shopify-services',
                 );
                 $products = new WP_Query( $args ); if( $products->have_posts() ) :
                 ?>

                 <?php while( $products->have_posts() ) : $products->the_post(); ?>

                <div class="col-xs-12 col-sm-6 col-lg-4 service-container">
                    <div class="service white rounded-xl fullheight">
                        <div class="row fullheight column">
                            <div >
                                <a href="<?php the_permalink(); ?>">
                                    <?php $image = get_field('thumbnail_image'); $size = 'full'; 
                                               if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                                </a>
                            </div>
                            <div class="row flexfill column between-xs pad-xs-30 pad-sm-40">
                               <div>
                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="matter blue-text"><?php the_title(); ?></h4>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="sp-20"></div>
                                    </a>
                                </div>
                                <div>
                                    <button class="large fullwidth red"><a href="<?php the_permalink(); ?>">Learn More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>

                <?php else : endif; ?>    
                
            </div>
            <div class="sp-30"></div>
        </div>
    </section>


    <section class="cream">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="sp-30 show-sm"></div>
            <div class="col-xs-12">
                <h2>Shopify Tasks</h2>
            </div>
            <div class="sp-30"></div>
            <div class="sp-20 show-sm"></div>
            <div class="row">



                <?php
                $args = array(
                  'post_type'   => 'product',
                  'post_status' => 'publish',
                  'product_cat' => 'shopify-tasks',
                 );
                 $products = new WP_Query( $args ); if( $products->have_posts() ) :
                 ?>

                 <?php while( $products->have_posts() ) : $products->the_post(); ?>

                    <?php if(get_the_ID() != 5655 ) :?>
                        <div class="col-xs-12 col-sm-6 col-lg-4 service-container hup-<?php echo get_the_ID(); ?>">
                            <div class="service white rounded-xl fullheight">
                                <div class="row fullheight column">
                                    
                                    <div class="row flexfill column between-xs pad-xs-30 pad-sm-40">
                                        <div>
                                            <a href="<?php the_permalink(); ?>">
                                                <h4 class="matter blue-text"><?php the_title(); ?></h4>
                                                <p><?php the_excerpt(); ?></p>
                                                <div class="sp-20"></div>
                                            </a>
                                        </div>
                                        <div>
                                            <button class="large fullwidth red"><a href="<?php the_permalink(); ?>">Learn More</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>

                <?php endwhile; wp_reset_postdata(); ?>

                <?php else : endif; ?>    
                
            </div>
            <div class="sp-30"></div>
        </div>
    </section> 
<style>
  /*#servicesgrid.row .service-container:first-child {
    display: none;
  }*/
</style>

<?php get_footer(); ?>
