<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

   <!-- SINGLE STORE DESIGN -->
    <section class="breadcrumbs show-sm">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>></span></li>
                        <li><a href="/shopify-store-examples/">Shopify Store Examples</a></li>
                        <li><span>></span></li>
                        <li class="current"><?php the_title(); ?></li>
                    </ul>
                </div>
                <div class="col pad-xs-25 pad-left-right end-xs">
                   <button class="red" ><a href="/shopify-developers/">Get an Instant Quote</a></button>
                </div>
            </div>
        </div>
    </section>

    
    <section>
        <div class="wrapper">
            <div class="sp-10"></div>
            <div class="row between-xs pad-xs-10 pad-md-20 pad-top-bottom middle-xs">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <div class="row fullheight rounded-xl">
                        
                           
                           
                            <?php $image = get_field('single_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                        </div>
                    
                </div>
                <div class="col-xs-12 col-md-6 first-md">
                    <div class="sp-20"></div>
                    <h2><?php the_title(); ?></h2>
                    <div class="h5 tax"><?php $terms = get_the_terms( get_the_ID(), 'vertical' ); // Retrieve terms of the "vertical" taxonomy
                            if ( $terms && ! is_wp_error( $terms ) ) {
                                foreach ( $terms as $term ) {
                                    echo $term->name . ' '; // Display each term name
                                }
                            } ?></div>
                    <div class="sp-20"></div>
                    <p class="lightgrey-text"><?php the_field('description'); ?></p>
                    <div class="sp-20 show-sm"></div>
                    <div class="sp-20"></div>
                    <button><a href="#single-store-gallery">View the Design</a></button><span class="wd-20 sp-20"></span><button class="new"><a target=_blank" href="<?php the_field('launch_link'); ?>">Launch</a></button>
                    <div class="sp-20"></div>
                </div>
            </div>

            <?php if( get_field('testimonial') ): ?>
    

    


            <div class="row between-xs pad-xs-25">
                <div class="col-xs-12 pad-xs-0 pad-sm-40 pad-md-60 border rounded-xl testimonial">
                    <blockquote id="testimonial"></blockquote>
                    <script>
                        var i = 0;
                        var txt = '<?php the_field('testimonial'); ?>'; /* The text */
                        var speed = 40;

                        function typeWriter() {
                            if (i < txt.length) {
                                document.getElementById("testimonial").innerHTML += txt.charAt(i);
                                i++;
                                setTimeout(typeWriter, speed);
                            }
                        }
                        typeWriter();
                    </script>
                    <div class="sp-40"></div>

                    <div class="col-xs-12 pad-xs-0">
                        <div class="row middle-xs">
                            <div class="col-xs avatar pad-right">
                                <img class="round" src="<?php the_field('testimonial_image'); ?>">
                            </div>
                            <div class="col">
                                <p class="medium nomarginbottom"><?php the_field('testimonial_name'); ?></p>
                                <cite><?php the_field('testimonial_job'); ?></cite>
                            </div>
                        </div>
                    </div>
                       
                </div>
            </div>
            <?php endif; ?>
            <div class="sp-60"></div>
        </div>
    </section>
    <section class="cream">
        <div class="wrapper">
            <div class="row pad-xs-40 pad-top-bottom">
                   <div class="sp-40"></div>
                    <div class="col-xs-10 col-xs-offset-1 " id="single_work_desktop_grid">
                    <h2>Shopify user experience design experts</h2>
						<p>Swipe or drag left and right to see all shop page designs.</p>
                           <p>Ecommerce conversion best practices as standard. We build custom Shopify themes with intuitive, easy-to-use designs.</p>
                           <div class="sp-40"></div>
                   </div>
                <div class="col-xs-10 col-xs-offset-1 " id="single_work_desktop_grid">
                    <div class="carousel rounded-xl overflow" id="single-store-gallery">

                        <?php if( have_rows('images') ): ?>

                        <?php while ( have_rows('images') ) : the_row(); ?>

                             <div class="carousel-cell">
                                
                           
                            <?php $image = get_sub_field('image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                        </div>

                        <?php endwhile; ?>

                        <?php else : ?>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="sp-60 show-md"></div>
        </div>
    </section>

    <?php if( get_field('mobile') ): ?>

    <section class="lightgrey">
        <div class="wrapper">
            <div class="row pad-xs-40 pad-top-bottom">
                   <div class="sp-40"></div>
                   <div class="col-xs-10 col-xs-offset-1" id="single_work_mobile_grid">
                    <h2>Mobile optimized</h2>
                           <p>Our custom Shopify themes are mobile optimized with fast page load times.</p>
                           <div class="sp-40"></div>
                   </div>
                <div class="col-xs-8 col-xs-offset-2 " id="single_work_mobile_grid">
                           <div class="work_single_mobile_left" style="max-height:<?php the_field('mobile_image_one_height'); ?>px">

                            <?php $image = get_field('mobile_image_one'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                        </div>
                    <div class="work_single_mobile_right" style="max-height:<?php the_field('mobile_image_two_height'); ?>px">      
                           
                            <?php $image = get_field('mobile_image_two'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="sp-60 show-md"></div>
        </div>
    </section>

    <?php endif; ?>

    <section class="white">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h2>Shopify Store Examples</h2>
                    </div>
                    <div class="col text-right">
                        <a href="/shopify-store-examples/" class="all">All</a>
                    </div>
                </div>
            </div>

             <?php
                $args = array(
                  'post_type'   => 'work',
                  'post_status' => 'publish',
                  'post__not_in'           => array(get_the_ID()),
                 );
                 $testimonials = new WP_Query( $args ); if( $testimonials->have_posts() ) :
                 ?>

            <div class="carousel morecarousel" id="store-examples-3">

                   <?php while( $testimonials->have_posts() ) : $testimonials->the_post(); ?>

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
                            } ?></div>
                                <div class="sp-40"></div>
                            </a>
                        </div>
                    </div>
                    <div class="sp-30"></div>
                    <div class="sp-40 show-md"></div>
                </div>

                  <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                <?php else : endif; ?>   

               
            </div>
            <div class="sp-30"></div>
            <div class="sp-40 hide-sm"></div>
        </div>
    </section>

<?php get_footer(); ?>