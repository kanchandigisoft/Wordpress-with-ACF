<?php
/**
 *
 * Template name: Landing Page V2
 *
 * @package storefront
 */

get_header(); ?>

    <section class="borderbottom">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                <div class="col-xs-12 col-md-6 ">
                    <h1><?php the_title(); ?></h1>
                    <div class="sp-10"></div>
                    <?php the_content(); ?>
                    <div class="sp-20"></div>
                    <button><a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a></button>
                    <div class="sp-60"></div>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">

                   <img class="my_class" <?php awesome_acf_responsive_image(get_field( 'header_image' ),'thumb-640','640px'); ?>  alt="text" /> 

                </div>
            </div>
        </div>
        <div class="">
            <div class="wrapper">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row between-xs bordertop">
                            <div class="col pad-xs-20 pad-top-bottom">
                                <p class="small">⚡ &nbsp;<?php the_field('header_small'); ?></p>
                            </div>
                            <div class="col pad-xs-20 pad-top-bottom end-xs">
                                <p class="small"><span class="inlinelogo shopify">Shopify</span>&nbsp; + &nbsp;<span class="inlinelogo shopifyexperts">Shopify Experts</span></p><div class="sp-10 hide-sm"></div>
                            </div>
                        </div>
                    </div>
                    
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

    <section>
        <div class="wrapper">
            <div class="sp-30"></div>
            <div class="sp-40 show-sm"></div>
            <div class="row pad-xs-20 pad-sm-0 pad-top-bottom middle-xs">
                <div class="col-xs-12 col-sm-8">
                    <h3><?php the_field('section_header'); ?></h3>
                </div>
                <div class="col-xs-12 col-sm-4 start-xs end-sm">
                    <button><a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a></button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>

            <?php if( have_rows('info') ): ?>

            <?php while ( have_rows('info') ) : the_row(); ?>

                <div class="row pad-xs-20 pad-top-bottom">
                    <div class="col-xs-12 col-md-4">
                        <h4><?php the_sub_field('title'); ?></h4>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>

            <?php else : ?>

            <?php endif; ?>

            <div class="sp-40"></div>
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
                                <div class="h5 tax"><?php the_taxonomies(array('template' => '% %l')); ?></div>
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

    <section class="black white-text">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-50 pad-sm-80 pad-md-60 pad-top-bottom">
                <div class="col-xs-12 col-md-6">
                    <div class="rounded-xl" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/footer-map.png') no-repeat center center;background-size:cover;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/5-3.png" />
                    </div>
                    <div class="sp-40 hide-md"></div>
                </div>
                <div class="col-xs-12 col-md-5 first-md">
                    <h4><?php the_field('footer_section_header'); ?></h4>
                    <p><?php the_field('footer_section_description'); ?></p>
                    <div class="sp-25"></div>
                    <button><a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a></button> <div class="wd-20"></div><div class="sp-30 hide-sm"></div><span class="inlinelogo shopifyexpertswhite">Shopify Experts</span>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>