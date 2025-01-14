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