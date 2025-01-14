<?php
/**
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<!-- HOME -->
    <section class="cream">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                <div class="col-xs-12 col-md-6 ">
                    
                    <h1 class="large">Optimize & Grow Your Shopify Business</h1>

                    <div class="sp-10 show-sm"></div>
                    <p>With our team of <span class="inlinelogo shopify">Shopify</span> design & marketing experts</p>
                    <div class="sp-10"></div>
                    <div class="sp-20 show-sm"></div>
                    <button class="large"><a href="/ecommerce-marketing-services/">Browse Our Services</a></button>
                    <div class="sp-40"></div>
                </div>
                <div class="col-xs-12 col-md-6 end-xs" id="home-header-image">
                    
                    <?php $image = get_field('header_image_one'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    <div class="sp-30 show-sm"></div>
                </div>
            </div>
        </div>
        <div class="opaque">
            <div class="wrapper">
                <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                    <div class="col pad-xs-25 pad-left-right">
                        <p class="small">⚡ Your Shopify ecommerce experts, founded in London, UK</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row middle-xs center-sm start-md between-md pad-xs-60 pad-sm-80 pad-lg-80 pad-top-bottom">
                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-5 end-xs">
                    <?php $image = get_field('header_image_two'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    <div class="sp-30 hide-md"></div>
                    <div class="sp-30 show-sm hide-md"></div>
                </div>
                <div class="col-xs-12 first-md col-md-5 col-lg-5">
                    <h2>Your Shopify Marketing Experts</h2>
                    <div class="sp-10"></div>
                    <p>Hire the best Shopify marketing experts. We'll grow your traffic & sales on Shopify or Shopify Plus. We specialize in <a href="/ecommerce-marketing-services/" class="hup_montly_note">monthly marketing services</a> for ecommerce businesses on the Shopify platform.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="cream">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h2>Shopify Marketing Services</h2>
                    </div>
                    <div class="col text-right">
                        <a href="/ecommerce-marketing-services/" class="all">All</a>
                    </div>
                </div>
            </div>



            <?php



                $args = array(
                  'post_type'   => 'product',
                  'post_status' => 'publish',
                  'product_cat' => 'shopify-services',
                 );
                 $products = new WP_Query( $args ); if( $products->have_posts() ) :
                 ?>

                    <div class="carousel morecarousel" id="marketing-services">
                  
                 <?php while( $products->have_posts() ) : $products->the_post(); ?>

                     <div class="col-xs-12 col-sm-6 col-lg-4 service-container carousel-cell">
                            <div class="service white rounded-xl fullheight">
                                <div class="row fullheight column">
                                    <div style="">
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
            <div class="sp-40 hide-sm"></div>
            <div class="sp-30"></div>
        </div>
    </section>

    <section class="lightgrey">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h2>Marketing Case Studies</h2>
                    </div>
                    <div class="col text-right">
                        <a href="/shopify-case-study/" class="all">All</a>
                    </div>
                </div>
            </div>

     <?php
                $args = array(
                  'post_type'   => 'case-studies',
                  'post_status' => 'publish',
                  'posts_per_page' => 10
                 );
                 $testimonials = new WP_Query( $args ); if( $testimonials->have_posts() ) :
                 ?>

              <div class="carousel morecarousel" id="case-studies-1">

              <?php while( $testimonials->have_posts() ) : $testimonials->the_post(); ?>

                <div class="col-xs-12 col-sm-6 carousel-cell">
                    <div class="sp-10"></div>
                    <div class="row study">
                        <div class="show-md col-xs-12 col-md-10 pad-xs-0 absolute fullwidth fullheight right">
                            <?php

                            $image_id = get_field('post_thumbnail');

                            $image_size = 'large';

                            $image_array = wp_get_attachment_image_src($image_id, $image_size);

                            $image_url = $image_array[0];
                            
                            ?>
                            <div class="absolute fullwidth fullheight rounded-xl right" style="background:url('<?php echo $image_url; ?>') no-repeat center center; background-size:cover;">
                            </div>





                        </div>
                        <div class="col-xs-12 col-md-10 pad-xs-0 rounded-xl zindex">
                            <div class="sp-120 show-md"></div>
                            <div class="pad-xs-40 rounded-xl white">
                                <div class="h5 tax">
                                <?php 
                                $args = array(
                                    //default to current post
                                    'post' => 0,
                                    'before' => '',
                                    //this is the default
                                    'sep' => ', ',
                                    'after' => '',
                                    //this is the default
                                    'template' => '%s: %s'
                                );

						   // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
                                ?></div>
                                <div class="sp-20"></div>
                                <a href="<?php the_permalink(); ?>"><h4 class="h3"><?php the_field('preview_title'); ?></h4></a>
                                <p><?php the_field('preview_description'); ?></p>
                                <div class="sp-20"></div>
                                <img class="clientlogo" src="<?php the_field('logo'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="sp-30 hide-sm"></div>
                </div>


                <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                <?php else : endif; ?>   

            </div>
            <div class="sp-40"></div>
            <div class="sp-30"></div>
        </div>
    </section>

    <section id="logos_wrapper">
    <div class="wrapper">
        <div class="row">
            <div class="sp-30"></div>
            <div class="col-xs-12">

                <?php if( have_rows('client_logos','option') ): ?>

                <div class="carousel overflow" id="client-carousel-3">

                        <?php while ( have_rows('client_logos','option') ) : the_row(); ?>

                            <div class="carousel-cell col-xs-6 col-sm-4 col-md-3 col-lg-5th pad-xs-10">
                                
                                    <?php $image = get_sub_field('client_logo'); $size = 'full'; 
                                     if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                               
                            </div>

                        <?php endwhile; ?>

                    <?php else : ?>

                    </div>

                    <?php endif; ?>

            </div>
            <div class="sp-30"></div>
        </div>
    </div>
</section>
    
    <section class="overflow">
        <div class="wrapper">
            <div class="row middle-xs center-sm start-md between-md pad-xs-60 pad-sm-80 pad-lg-80 pad-top-bottom">
                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-5 end-xs">

                    <div class="img_oversized"><?php $image = get_field('header_image_three'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?></div>

                    <div class="sp-30 hide-md"></div>
                    <div class="sp-30 show-sm hide-md"></div>
                </div>
                <div class="col-xs-12 first-md col-md-5 col-lg-5">
                    <h2>Shopify Design & Development Experts</h2>
                    <div class="sp-10"></div>
                    <p>Since 2012 we’ve been helping ecommerce brands with Shopify web development. Including custom theme design, theme redesign & replatforming to Shopify. With 500+ website projects completed over 7 years we’re truly Shopify ecommerce experts.</p>
                    <div class="sp-20"></div>
                    <button class="large red"><a href="/shopify-designers/">Get An Instant Quote</a></button>
                </div>
            </div>
        </div>
    </section>

     <section class="lightgrey">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h2>Shopify Store Examples</h2>
                    </div>
                    <div class="col text-right">
                        <a class="all" href="/shopify-store-examples/">All</a>
                    </div>
                </div>
            </div>

            <?php
                $args = array(
                  'post_type'   => 'work',
                  'post_status' => 'publish',
                 );
                 $works = new WP_Query( $args ); if( $works->have_posts() ) :
                 ?>

                 <div class="carousel morecarousel" id="store-examples-1">

              <?php while( $works->have_posts() ) : $works->the_post(); ?>


                <div class="col-xs-12 col-md-6 carousel-cell">
                    <div class="sp-10"></div>
                    <div class="row store white">
                        <div class="col-xs-12 pad-xs-0" >
                            <a href="<?php the_permalink(); ?>">
                                
                                <?php $image = get_field('single_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                            </a>
                        </div>
                        <div class="col-xs-12 pad-xs-30 pad-sm-40 pad-left-right">
                            <div class="sp-25"></div>
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>

                                <div class="h5 tax"><?php $terms = get_the_terms( get_the_ID(), 'vertical' ); // Retrieve terms of the "vertical" taxonomy
                            if ( $terms && ! is_wp_error( $terms ) ) {
                                foreach ( $terms as $term ) {
                                    echo $term->name . ' '; // Display each term name
                                }
                            }?></div>
                                <div class="sp-40"></div>
                            </a>
                        </div>
                    </div>
                    <div class="sp-30"></div>
                    <div class="sp-40 show-md"></div>
                </div>


                  <?php endwhile; wp_reset_postdata(); ?>

                <?php else : endif; ?>   

                
            </div>
            <div class="sp-30"></div>
            <div class="sp-40 hide-sm"></div>
        </div>

    </section>

    <section class="white">
    <div class="wrapper">
        <div class="sp-40"></div>
        <div class="col-xs-12 pad-sm-30">
            <div class="row between-xs middle-xs">
                <div class="col">
                    <h2>Customer Testimonials</h2>
                </div>
                <div class="col text-right">
                    <a class="all" href="/whole-design-studios-reviews/">All</a>
                </div>
            </div>
        </div>

        <?php if( have_rows('client_testimonials', 'option') ): ?>

          <div class="carousel morecarousel" id="testimonial-carousel-4">

            <?php while( have_rows('client_testimonials', 'option') ): the_row(); ?>

                <div class="col-xs-12 carousel-cell">
                <div class="row">
                    <div class="col-xs-12 pad-xs-0 pad-sm-40 pad-md-60 border rounded-xl testimonial">
                        <blockquote><?php the_sub_field('client_testimonials_job_testimonial'); ?></blockquote>
                        <div class="sp-40"></div>
                        <div class="col-xs-12 pad-xs-0">
                            <div class="row middle-xs">
                                <div class="col-xs avatar round pad-right">
                                    
                                    <?php $image = get_sub_field('client_testimonials_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                                </div>
                                <div class="col">
                                    <p class="medium nomarginbottom"><?php the_sub_field('client_testimonials_name'); ?></p>
                                    <cite><a href="<?php the_sub_field('client_testimonials_link'); ?>" target="_blank" ><?php the_sub_field('client_testimonials_job'); ?> <span class="icon newwindow"></span></a></cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

           
            <?php endwhile; ?>

            </div>

        <?php endif; ?>

        </div>
        <div class="sp-40"></div>
        <div class="sp-30"></div>
    </div>
</section>


<?php get_footer(); ?>
