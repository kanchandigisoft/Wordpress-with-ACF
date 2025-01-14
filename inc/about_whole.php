<section class="black white-text overflow">
        <div class="wrapper">
            <div class="sp-30"></div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>About Whole Design Studios</h6>
                    <p>Founded in 2012 Whole Design Studios is a Shopify design & marketing agency. Focused on growing ecommerce businesses. We work with 100+ ecommerce brands monthly. Our team of 35+ designers & marketers are experts in Shopify growth.</p>
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