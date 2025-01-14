<?php
/**

 * Template name: Ecommerce Marketing Services
 */

get_header(); ?>

<section class="cream">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="sp-30 show-sm"></div>
            <div class="col-xs-12">
                <h2>Ecommerce Marketing Service for Shopify</h2>
            </div>
            <div class="sp-30"></div>
            <div class="sp-20 show-sm"></div>
            <div class="row">



             <?php
 
$args = array(
     'post_type'   => 'product',
     'tag_id' => '54'
);
 
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        the_title();
 
    }
 
}
 
// Restore original post data.
wp_reset_postdata();
  
?>
                
            </div>
            <div class="sp-30"></div>
        </div>
    </section>



<?php get_footer(); ?>