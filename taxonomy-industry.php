<?php
/**
 */
 get_header(); ?>
 
 	<section class="cream">
        <div class="wrapper">
            <div class="row middle-xs center-xs pad-xs-30 pad-top-bottom thirdheight">
                <div class="col-xs-12">
                    <h1 class="heavy">Case Studies</h1>
                    <div class="sp-30 show-sm"></div>
                </div>
            </div>
        </div>
        <div class="opaque">
            <div class="wrapper">
                <div class="sp-20 hide-md"></div>
                <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
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
                        <button class="fullwidthmobile"><a href="/contact/">Book Free 30 min Consultation</a></button>
                    </div>
                </div>
                <div class="sp-20 hide-md"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="sp-30"></div>
                <div class="col-xs-12">

                <?php 	$terms = get_terms( 'industry' );
 
				echo '<ul class="filters">';

                 echo '<li class="current"><a class="h5" href="/shopify-case-studies/">ALL</a></li>';
				 
				foreach ( $terms as $term ) {
				 
				    // The $term is an object, so we don't need to specify the $taxonomy.
				    $term_link = get_term_link( $term );
				    
				    // If there was an error, continue to the next term.
				    if ( is_wp_error( $term_link ) ) {
				        continue;
				    }
				 
				    // We successfully got a link. Print it out.
				    echo '<li><a class="h5" href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
				}
				 
				echo '</ul>'; ?>
          
                </div>
            </div>

            <?php if(have_posts()): ?>
            <?php while( have_posts() ): the_post(); ?>

            <div class="row between-xs">
                <div class="col-xs-12 col-md-7 col-lg-7 pad-xs-25">
                    <div class="row fullheight rounded-xl">
                        <div class="col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="slide" style="background:url('<?php the_field('post_image_hover'); ?>') no-repeat center center; background-size:cover;"></div>
                                <div class="slide two" style="background:url('<?php the_field('post_image'); ?>') no-repeat center center; background-size:cover;"></div>
                                <img src="<?php the_field('post_image'); ?>" class=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-lg-5 pad-xs-25 pad-sm-40 pad-md-40">
                    <div class="h5 underline"><?php the_taxonomies(array('template' => '% %l')); ?></div>
                    <div class="sp-20"></div>
                    <a href="<?php the_permalink(); ?>"><h4 class="h3"><?php the_field('preview_title'); ?></h4></a>
                    <p class="lightgrey-text"><?php the_field('preview_description'); ?></p>
                    <div class="sp-20"></div>
                    <img class="clientlogo" src="<?php the_field('logo'); ?>" />
                </div>
                <div class="sp-20"></div>
            </div>

 
 
    <?php endwhile; ?>
<?php endif; ?> 

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
            
            <div class="row pad-xs-25 pad-md-40 pad-top-bottom">
                <div class="col-xs-12 pad-xs-0 center-xs">
                    <ul class="pagination">
                        <li class="arrow prev disabled"><a href="#"><</a></li>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="arrow next"><a href="#">></a></li>
                    </ul>            
                </div>
                <div class="sp-40"></div>
            </div>


        </div>
    </section>

<?php get_footer(); ?>