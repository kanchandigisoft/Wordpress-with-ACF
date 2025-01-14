<?php get_header(); ?>

    <section class="cream">
        <div class="wrapper">
            <div class="row middle-xs center-xs pad-xs-30 pad-top-bottom thirdheight">
                <div class="col-xs-12">
                    <h1 class="heavy">Category: <?php single_cat_title(); ?></h1>
                    <div class="sp-30 show-sm"></div>
                </div>
            </div>
        </div>
        <div class="opaque">
            <div class="wrapper">
                <div class="sp-20 hide-md"></div>
                <div class="row middle-xs between-xs pad-xs-15 pad-top-bottom">
                    <div class="col-xs-12 col-sm-8 pad-xs-25 pad-left-right middle-sm">
                         <div class="row top-xs middle-sm">
                            <div class="col-xs-3 col-sm-2 pad-xs-0 consultationavatar">
                                <div id="consultation"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatar-giles.jpg" /></a></div>
                                <div class="sp-20 hide-sm"></div>
                            </div>
                            <div class="col-xs-9 col-sm-10 pad-xs-0">
                                <p>Get a <span class="medium">free 30 minute</span> marketing consultation with a Shopify growth expert</p>
                                <div class="sp-20 hide-sm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 pad-xs-25 pad-left-right end-xs">
                        <button class="fullwidthmobile"><a href="/contact/">Claim my Free 30 Minutes</a></button>
                    </div>
                </div>
                <div class="sp-20 hide-md"></div>
            </div>
        </div>
    </section>
    <section class="breadcrumbs show-sm">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>></span></li>
                        <li><a href="/shopify-blog/">Blog</a></li>
                        <li><span>></span></li>
                        <li class="current"><?php single_cat_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="sp-60"></div>
            <div class="row between-xs">
                <?php get_sidebar(); ?>
                <div class="col-xs-12 col-md-8 archive first-md">


                    <?php if(have_posts()): ?>
    <?php $count=0; ?>
    <?php while( have_posts() ): the_post(); ?>
        <?php $count++ ?>
        <?php if( $count==3 || $count==6 ): ?>


            
                    <article class="row rounded border ad">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-addon.jpg') no-repeat center center; background-size:cover;width: 500px;
height: auto;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/5-3.png" class="hide-lg">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 pad-xs-30 pad-sm-50 first-sm last-md first-lg white">
                            <h5>Grow Your Store</h5>
                            <h3 class="matter">Facebook &amp; Instagram Ads Management</h3>
                            <div class="sp-5"></div>
                            <p class="lightgrey-text">Get a landslide of targeted visitors &amp; sales for your store with Facebook &amp; Instagram ads.</p>
                            <div class="sp-20"></div>
                            <button class="red large fullwidth"><a href="/product/facebook-ad-management-services/">See Pricing &amp; Plans</a></button>
                        </div>
                    </article>


            <article <?php post_class('row border rounded') ?> id="post-<?php the_ID(); ?>" class="">
                        <div class="col-xs-12 pad-xs-0" ">
                            <a href="<?php the_permalink() ?>">
                               

                                  <?php $image = get_field('post_thumbnail'); $size = 'full'; 
                                               if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                            </a>
                        </div>
                        <div class="sp-20 hide-sm"></div>
                        <div class="col-xs-12 pad-xs-0 pad-sm-40">
                            <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                            <div class="sp-10"></div>
                            <p><?php the_excerpt(); ?></p>
                            <div class="sp-20"></div>
                            <div class="row between-xs middle-xs">
                                <div>
                        <div class="author"><div class="fill"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatar-giles.jpg" /><div class="details"><span>by Giles Thomas</span></div></div></div>
                    </div>
                                <div>
                                    <?php the_category(); ?>

                                </div>
                            </div>
                        </div>
                    </article>


                <?php else: ?>

            <article <?php post_class('row border rounded') ?> id="post-<?php the_ID(); ?>" class="">
                        <div class="col-xs-12 pad-xs-0" >
                            <a href="<?php the_permalink() ?>">
                                     <?php $image = get_field('post_thumbnail'); $size = 'full'; 
                                               if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                            </a>
                        </div>
                        <div class="sp-20 hide-sm"></div>
                        <div class="col-xs-12 pad-xs-0 pad-sm-40">
                            <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                            <div class="sp-10"></div>
                            <p><?php the_excerpt(); ?></p>
                            <div class="sp-20"></div>
                            <div class="row between-xs middle-xs">
                                <div>
                        <div class="author"><div class="fill"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatar-giles.jpg" /><div class="details"><span>by Giles Thomas</span></div></div></div>
                    </div>
                                <div>
                                    <?php the_category(); ?>

                                </div>
                            </div>
                        </div>
                    </article>


        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?> 



                          </div>
            </div>

                          <div class="row pad-xs-25 pad-md-40 pad-sm-60">
                <div class="col-xs-12 pad-xs-0 center-xs">
                   
<?php
/* ------------------------------------------------------------------*/
/* PAGINATION */
/* ------------------------------------------------------------------*/

//paste this where the pagination must appear

global $wp_query;
$total = $wp_query->max_num_pages;
// only bother with the rest if we have more than 1 page!
if ( $total > 1 )  {
     // get the current page
     if ( !$current_page = get_query_var('paged') )
          $current_page = 1;
     // structure of "format" depends on whether we're using pretty permalinks
     if( get_option('permalink_structure') ) {
         $format = 'page/%#%/';
     } else {
         $format = 'page/%#%/';
     }
     echo paginate_links(array(
          'base'     => get_pagenum_link(1) . '%_%',
          'format'   => $format,
          'current'  => $current_page,
          'total'    => $total,
          'mid_size' => 2,
          'type'     => 'list',
        'prev_text' => '&lt;', 'textdomain',
        'next_text' => '&gt;', 'textdomain'
     ));
}
?>


                    <!--<ul class="pagination">
                        <li class="arrow prev disabled"><a href="#">&lt;</a></li>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="arrow next"><a href="#">&gt;</a></li>
                    </ul-->            
                </div>
            </div>
            <div class="sp-40"></div>

                  
        </div>
    </section>

<?php get_footer(); ?>