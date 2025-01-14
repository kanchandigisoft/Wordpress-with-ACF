<?php
/**
 *
 *
 * @package storefront
 */
get_header(); ?>

   <section class="cream">
        <div class="wrapper">
            <div class="row middle-xs pad-xs-30 pad-top-bottom thirdheight">
                <div class="col-xs-12">
                    <h2 class="heavy">Search The Blog</h1>
                    <div class="sp-10"></div>
                    <form role="search" method="get" class="insetbutton" id="search" action="/">
                        <input type="search" class="search browser-default border" placeholder="e.g. more traffic" value="<?php the_search_query(); ?>" name="s">
                        <input type="submit" class="show-sm" />
                    </form>
                    </div>
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
    <section>
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="sp-20 show-md"></div>
            <div class="row">
                <div class="col-xs-12">
                    <p class="large">“<?php the_search_query(); ?>” – <?php $allsearch = new WP_Query("s=$s&showposts=0"); 
echo $allsearch ->found_posts.' results found.'; ?></p>
                    <div class="sp-20"></div>
                </div>
            </div>
            <div class="row between-xs">
                 <div class="col-xs-12 searchresults">


                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


 <article class="row between-xs">
                        <div class="col-xs-12 col-md-4 pad-xs-0 pad-md-25 no-pad-left">
                            <a href="#" class="searchresultimage" >
                                
                               <?php $image = get_field('post_thumbnail'); $size = 'full'; 
                                               if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                            </a>
                        </div>
                        <div class="sp-20 hide-sm"></div>
                        <div class="col-xs-12 col-md-8 pad-xs-0 pad-sm-40 pad-md-25">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
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

<?php endwhile; else : ?>
    <!-- code here -->
<?php endif; ?>
      
                </div>
            </div>


  <div class="row pad-xs-25 pad-md-40 pad-sm-60">
                <div class="col-xs-12 pad-xs-0 center-xs">

        

            
            <div class="row pad-xs-25 pad-md-40">
                <div class="col-xs-12 pad-xs-0 center-xs">
                    <ul class="pagination">
                        <li class="arrow prev disabled"><a href="#">&lt;</a></li>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="arrow next"><a href="#">&gt;</a></li>
                    </ul>            
                </div>
            </div>
            <div class="sp-40"></div>
        </div>
    </section>


<?php get_footer(); ?>