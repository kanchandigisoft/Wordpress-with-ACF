<section class="lightgrey" id="#4">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify SEO Case Studies</h2>
                    </div>
                    <div class="col text-right">
                        <a href="/shopify-case-study/" class="all">All</a>
                    </div>
                </div>
            </div>

     <?php
     $args = array(
        'post_type' => 'case-studies',
        'post_status' => 'publish',
        'tax_query' => array(
        array(
            'taxonomy' => 'channel',
            'field'    => 'slug',
            'terms'    => 'seo',
        ),
        ),
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
                                the_taxonomies( $args ); 
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
