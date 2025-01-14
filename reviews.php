<?php
/**
 *
 * Template name: Reviews
 *
 */
get_header(); ?>

  <section class="breadcrumbs show-md">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>></span></li>
                        <li><a href="/ecommerce-marketing-services/">Marketing Services</a></li>
                        <li><span>></span></li>
                        <li class="current">Reviews</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="white">
    <div class="wrapper">
        <div class="sp-40"></div>
        <div class="col-xs-12 pad-sm-30">
            <div class="row between-xs middle-xs">
                <div class="col">
                    <h1 class="h2"><?php the_title(); ?></h1>
                </div>
                <div class="col text-right">
                    <a class="all" target="_blank" href="https://experts.shopify.com/whole-design-studios">Open In Shopify</a>
                </div>
            </div>
        </div>

        <?php if( have_rows('client_testimonials', 'option') ): ?>

          <div class="carousel morecarousel" id="review_blockquote">

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
                                    <cite><?php the_sub_field('client_testimonials_job'); ?></cite>
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