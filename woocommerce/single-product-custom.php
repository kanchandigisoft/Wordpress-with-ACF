<?php
/**
 *
 */

get_header(); ?>

<section class="cream">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                <div class="col-xs-12 col-md-6 ">
                    <h1><?php the_field('header_one'); ?></h1>
                    <div class="sp-10"></div>
                    <p class="large"><?php the_field('header_two'); ?></p>
                    <div class="sp-20"></div>
                    <button class="large hup_price_button_scroll"><a href="javascript:void(0)">See Pricing</a></button> <div class="wd-20"></div><div class="sp-30 hide-sm"></div><span class="inlinelogo shopifyexperts">Shopify Experts</span>
                    <div class="sp-60"></div>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">

                	<?php if( have_rows('tasks_bullets') ): ?>

                		<ul class="feature-list large">

					<?php while ( have_rows('tasks_bullets') ) : the_row(); ?>

						<li><?php the_sub_field('bullet'); ?></li>

					<?php endwhile; ?>

					<?php else : ?>

						</ul>

					<?php endif; ?>
                    
                    <div class="sp-30"></div>


                </div>
            </div>
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


<section class=" " >
        <div class="wrapper">
            <div class="sp-30"></div>
		<div class="row pad-xs-20 pad-top-bottom" id="3">
                <div class="col-xs-12">
                    <h3><?php the_field('how_it_works_section_2'); ?></h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-01.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_1'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_1'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_2'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_2'); ?></p>
                </div>
           
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-02.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>   
            </div>
        </div>
    </section>
    
<?php if(is_product() && get_the_id() == 6552) { ?>

               
  <section class="" >
        <div class="wrapper">
    		        
     		 <div class="row">
                <div class="col-xs-12">
                  
                  <h3>Photography Examples</h3>

               </div>
                 <div class="col-xs-12">
    		        
     	<?php if( have_rows('ecom_photos_repeaters','option') ): ?>

    <?php while ( have_rows('ecom_photos_repeaters','option') ) : the_row(); ?>
<a href="<?php the_sub_field('ecom_photos','option'); ?>" target="_blank">
        <img style="max-width:100%; width: 18%; float: left; padding-right: 2%; padding-bottom: 20px;" src="<?php the_sub_field('ecom_photos','option'); ?>"/>
                   </a>
    <?php endwhile; ?>
     
<?php else : ?>
 
<?php endif; ?>

       
                   
                </div>
            </div>
           

           </div>
          </section>
      
                        

                                <?php } else { ?>
    <section class="" >
        <div class="wrapper">
    		        
     		 <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h3><?php the_field('how_it_works_sub_header_1'); ?></h3>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="rte"><?php the_field('how_it_works_sub_para_1'); ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h3><?php the_field('how_it_works_sub_header_2'); ?></h3>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="rte"><?php the_field('how_it_works_sub_para_2'); ?></div>
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
                                    'template' => '% %l'
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

     <?php } ?>

	<section class="black white-text overflow">
        <div class="wrapper">
            <div class="sp-30"></div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>About Whole Design Studios</h6>
                    <p>Founded in 2012 Whole Design Studios is a Shopify design & marketing agency. Focused on growing ecommerce businesses. We work with 100+ brands monthly. Our team of 35+ designers & marketers are experts in Shopify growth.</p>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <div class="sp-50 show-md"></div>
                    <ul class="feature-list">
                        <li>Productized services</li>
                        <li>Monthly cancel anytime, transparent pricing</li>
                        <li>Scalable plan tiers to grow with you</li>
                        <li>No hidden fees or hourly rates</li>
                        <li>Modern tooling and robust standard operating procedures</li>
                    </ul>
                </div>
            </div>
            <div class="sp-30"></div>
           



                  <?php if( have_rows('team_image', 'option') ): ?>

         <div class="carousel overflowvisible" id="about-carousel-3">

            <?php while( have_rows('team_image', 'option') ): the_row(); ?>

                <div class="carousel-cell col-xs-3 col-md-2 col-lg-9th pad-xs-0">

                    <div class="about-profile" >
                        
                        <?php $image = get_sub_field('image','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    </div>

                   <div class="about-profile" >
                        
                        <?php $image = get_sub_field('image_two','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    </div>


                </div>

              
              <?php endwhile; ?>

            </div>

        <?php endif; ?>


            <div class="sp-30"></div>
            <div class="row pad-xs-20 pad-top-bottom middle-xs">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-map.svg"/>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>Your global agency</h6>
                    <p>We are a fully remote business founded in London, UK. We work with brands from the US, Australia, UK, EU and more. Our team works from 10+ countries across the world and originates from the US, UK & EU.</p>
                </div>
            </div>
             <div class="sp-30"></div>
        </div>
    </section>


    <?php if(is_product() && get_the_id() == 6552) { ?>

<section id="5">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        
                    </div>
                    <div class="row pricing">
                       
<table>
<tbody>

    <tr>
        <th>Type</th>
        <th>Number of photos </th>
        <th>Price per product (micro size)</th>
        <th>Price per product (small size)</th>
        <th>Price per product (medium size)</th>
        <th>Price per product (large size)</th>
    </tr>


    <tr>
        <td>White background</td>
        <td>1 </td>
        <td>$12.50 USD </td>
        <td>$5 USD </td>
          <td>$7.50 USD </td>
          <td>$7.50 USD </td>
    </tr>

     <tr>
         <td>Transparent background</td>
            <td>1 </td>
              <td>$17.50 USD </td>
          
        <td>$7.5 USD </td>
                  <td>$12.50 USD </td>
                  <td>$12.50 USD </td>
    </tr>

     <tr>
         <td>On model (not including model)</td>
            <td>1 </td>
              <td>$25 USD </td>
             
        <td>$5 USD </td>
                  <td>$7.50 USD </td>
                  <td>$7.50 USD </td>
    </tr>

     <tr>
         <td>360° White background</td>
            <td>24 </td>
              <td>$120 USD </td>
                 
              <td>$90 USD </td>
                 <td>$90 USD </td>
                    <td>$90 USD </td>
    </tr>

     <tr>
         <td>360° Transparent background</td>
            <td>24 </td>
            <td>$175 USD </td>
        
              <td>$135 USD </td>
                 <td>$135 USD </td>
                    <td>$135 USD </td>
    </tr>


</tbody>
</table>
 <style>.pricing th:last-child, .pricing td:last-child {
    width: inherit;
}</style>
                    </div>
                </div>
            </div>
            <div class="row middle-xs pad-md-25 pad-top-bottom">
                <div class="col-xs-12 col-md-8 pad-xs-25">
	                <?php if(!is_page_template('shopify_fixed.php') && !has_term( 'shopify-add-on', 'product_cat' )){ ?>
                  <ul>
                    <li>Prices include basic retouching</li>
                    
               
                  <li>     Micro sized: jewelry and products with reflections</li>
                 <li>     Small sized: size of a shoe</li>
<li>Middle sized: size of a jacket</li>
<li> Large sized: size of jumpsuit</li>
<li>Transport & duties are not included</li>
                      </ul>
                   
                    <?php } ?>
                </div>
                <div class="col-xs-12 col-md-4 lite_plan pricing_footer active">

                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/contact/">Contact Us For A Quote</a></button>
                </div>
                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
        </div>
    </section>
                                    
                                <?php } else { ?>

    <section id="5">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" value="USD" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap"  value="GBP" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" value="AUD" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" value="EUR" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                            <label>
                                <input class="with-gap" value="CAD" name="currency" type="radio"  />
                                <span>CAD</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom"><?php the_field('task_name'); ?></h5>
                            <div class="sp-5"></div>
                             <?php $product = wc_get_product( $post->ID ); ?>
                            <p class="white-text"><?php echo get_woocommerce_currency_symbol(); echo $product->get_regular_price();?></p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php the_field('product_id'); ?>">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                       

	                     <?php if( have_rows('pricing_tasks') ): ?>
 
 								<table>

						<?php while ( have_rows('pricing_tasks') ) : the_row(); ?>

							<tr><td><?php the_sub_field('tasks'); ?></td><td><span class="icon-tick">Yes</span></td></tr>

						<?php endwhile; ?>

						<?php else : ?>

							</table>

						<?php endif; ?>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row middle-xs pad-md-25 pad-top-bottom">
                <div class="col-xs-12 col-md-8 pad-xs-25">
	                <?php if(!is_page_template('shopify_fixed.php') && !has_term( 'shopify-add-on', 'product_cat' )){ ?>
                    <p class="xs black-text">
                        <span class="perk">
                            <span class="icon-tick"></span> No hourly rates
                        </span>
                        <span class="perk">
                            <span class="icon-tick"></span> No hidden fees 
                        </span>
                        <span class="perk">
                            <span class="icon-tick"></span> Cancel anytime
                        </span>
                    </p>
                    <?php } ?>
                </div>
                <div class="col-xs-12 col-md-4 lite_plan pricing_footer active">

                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php the_field('product_id'); ?>">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
        </div>
    </section>

      <?php } ?>

      <section class="black white-text">
        <div class="wrapper">
            <div class="row pad-xs-40 pad-md-60 pad-top-bottom">



                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>More questions?</h6>
                    <p class="xs">Want to sign up to multiple monthly services or simply to chat first? Email us at <a href="mailto:hello@wholedesignstudios.com">hello@wholedesignstudios.com</a> and we’ll get back to you within 24 hours.</p>
                    <p class="xs"><a href="/contact/">Send us a message</a></p>
                </div>
            </div>
        </div>
    </section>

 <?php if(is_product() && get_the_id() == 6552) { ?>
                                    
                                <?php } else { ?>

    <section>
        <div class="wrapper">
            <div class="row pad-xs-60 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-left-right">

                    <?php if( have_rows('faq') ): ?>

                        <ul class="faq">

                    <?php while ( have_rows('faq') ) : the_row(); ?>

                           <li class=""><h6><?php the_sub_field('question'); ?></h6><p class="xs"><?php the_sub_field('answer'); ?></p></li>

                    <?php endwhile; ?> 

                        </ul>

                    <?php else : ?>

                    <?php endif; ?>

                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-left-right">
                   
                    <?php if( have_rows('faq_two') ): ?>

                        <ul class="faq">

                    <?php while ( have_rows('faq_two') ) : the_row(); ?>

                           <li class=""><h6><?php the_sub_field('question'); ?></h6><p class="xs"><?php the_sub_field('answer'); ?></p></li>

                    <?php endwhile; ?> 

                        </ul>

                    <?php else : ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

          <?php } ?>

          
    <?php the_field('convertkit'); ?>

<?php get_footer(); ?>
