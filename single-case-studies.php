<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

   <section class="breadcrumbs show-sm">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>></span></li>
                        <li><a href="/shopify-case-study/">Case Studies</a></li>
                        <li><span>></span></li>
                        <li class="current"><?php the_title(); ?></li>
                    </ul>
                </div>
                <div class="col pad-xs-25 pad-left-right end-xs">
                   <button class="red"><a href="/contact/">Book Free 30 Min Consultation</a></button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="sp-10"></div>
            <div class="row between-xs pad-xs-10 pad-md-20 pad-top-bottom top-xs">
                <div class="col-xs-12 col-md-5 pad-xs-25">
                    <div class="row fullheight rounded-xl">
                      
                                <?php $image = get_field('post_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                          
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 first-md">
                    <div class="sp-20"></div>
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
                    <?php the_content(); ?>
                    <div class="sp-40"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h3>The Results</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <div class="stat <?php if( get_field('results_arrow_1') ): ?>
<?php echo "down"; ?>
<?php endif; ?> rounded-xl green center-xs white-text pad-xs-25">
                        <h3 class="white-text"><?php the_field('results_stat_1'); ?></h3>
                        <p><?php the_field('results_text_1'); ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <div class="stat <?php if( get_field('results_arrow_2') ): ?>
<?php echo "down"; ?>
<?php endif; ?> rounded-xl green center-xs white-text pad-xs-25">
                        <h3 class="white-text"><?php the_field('results_stat_2'); ?></h3>
                        <p><?php the_field('results_text_2'); ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <div class="stat <?php if( get_field('results_arrow_3') ): ?>
<?php echo "down"; ?>
<?php endif; ?> rounded-xl green center-xs white-text pad-xs-25">
                        <h3 class="white-text"><?php the_field('results_stat_3'); ?></h3>
                        <p><?php the_field('results_text_3'); ?></p>
                    </div>
                </div>
                <div class="sp-40"></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row rounded-xl lightgrey">
                        <div class="col-xs-12 col-sm-12 col-md-6 pad-xs-40 pad-md-60">
                            <h3>How We Did it:</h3>
                            <div class="sp-10"></div>

                            <?php if( have_rows('how_we_did_it_content') ): ?>

                                <ul class="feature-list large">

                            <?php while ( have_rows('how_we_did_it_content') ) : the_row(); ?>

                                <li><?php the_sub_field('how'); ?></li>

                            <?php endwhile; ?>

                                </ul>

                            <?php else : ?>

                            <?php endif; ?>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 pad-xs-40 pad-md-60 center-xs end-md">
                            <img src="<?php the_field('post_image_stats'); ?>" class="inline shadow" style="max-width:382px"/>
                        </div>
                    </div>
                </div>
                <div class="sp-20"></div>
                <div class="sp-20 show-md"></div>
            </div>
             <?php if( get_field('testimonial') ): ?>
            <div class="row between-xs pad-xs-25">
                <div class="col-xs-12 pad-xs-0 pad-sm-40 pad-md-60 border rounded-xl testimonial">
                    <blockquote><?php the_field('testimonial'); ?>”</blockquote>
                    <div class="sp-40"></div>
                    <div class="col-xs-12 pad-xs-0">
                        <div class="row middle-xs">
                            <div class="col-xs avatar pad-right round">
                               

                                 <?php $image = get_field('testimonial_image'); $size = 'full'; 
                                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>


                            </div>
                            <div class="col">
                                <p class="medium nomarginbottom"><?php the_field('testimonial_name'); ?></p>
                                <cite><?php the_field('testimonial_job'); ?></cite>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp-80"></div>
                
            </div>
              <?php endif; ?>
        </div>
    </section>
    
    <section class="lightgrey">
        <div class="wrapper">
            <div class="sp-80"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h2>More Case Studies</h2>
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
                  'post__not_in'           => array(get_the_ID()),
                 );
                 $testimonials = new WP_Query( $args ); if( $testimonials->have_posts() ) :
                 ?>

     

              <div class="carousel morecarousel" id="case-studies-1">

              <?php while( $testimonials->have_posts() ) : $testimonials->the_post(); ?>

                <div class="col-xs-12 col-sm-6 carousel-cell">
                    <div class="sp-10"></div>
                    <div class="row study">
                        <div class="show-md col-xs-12 col-md-10 pad-xs-0 absolute fullwidth fullheight right">
                            

                             <a href="<?php the_permalink(); ?>">
                                 <?php $image = get_field('post_thumbnail'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-10 pad-xs-0 rounded-xl zindex">
                            <div class="sp-120 show-md"></div>
                            <div class="pad-xs-40 rounded-xl white">
                                <div class="h5 tax"><?php 
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

<?php get_footer(); ?>