<?php
/**
 * Boutique engine room
 *
 * @package boutique
 */

/**
 * Set the theme version number as a global variable
 */
$theme				= wp_get_theme( 'boutique' );
$boutique_version	= $theme['Version'];

$theme				= wp_get_theme( 'storefront' );
$storefront_version	= $theme['Version'];

add_action( 'init', 'update_my_custom_type', 99 );

// remove Order Notes from checkout field in Woocommerce
add_filter( 'woocommerce_checkout_fields' , 'alter_woocommerce_checkout_fields' );
function alter_woocommerce_checkout_fields( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}

/**
 * Custom single product page template
 */
add_filter( 'template_include', 'custom_single_product_template_include', 50, 1 );
function custom_single_product_template_include( $template ) {
    if ( is_singular('product') && (has_term( 'shopify-tasks', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/woocommerce/single-product-custom.php';
    } 
    return $template;
}
add_filter( 'template_include', 'custom_single_product_template_include_two', 50, 1 );
function custom_single_product_template_include_two( $template ) {
    if ( is_singular('product') && (has_term( 'shopify-add-on', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/woocommerce/single-product-addon.php';
    } 
    return $template;
}

add_filter( 'template_include', 'custom_single_product_template_include_three', 50, 1 );
function custom_single_product_template_include_three( $template ) {
  
    if ( is_singular('product') && $_GET['switch-subscription'] ) {
        $template = get_stylesheet_directory() . '/woocommerce/switch-subscription.php';
    } 
    return $template;
}


/**
 * Disable the default stylesheet
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function my_theme_remove_storefront_standard_functionality() {

//remove customizer inline styles from parent theme as I don't need it.
set_theme_mod('storefront_styles', '');
set_theme_mod('storefront_woocommerce_styles', '');  

}

add_action( 'init', 'my_theme_remove_storefront_standard_functionality' );

add_filter('storefront_customizer_css', '__return_false');

add_filter('storefront_customizer_woocommerce_css', '__return_false');


/**
Price shortcode
 */
function so_30165014_price_shortcode_callback( $atts ) {
    $atts = shortcode_atts( array(
        'id' => null,
    ), $atts, 'bartag' );

    $html = '';

    if( intval( $atts['id'] ) > 0 && function_exists( 'wc_get_product' ) ){
         $_product = wc_get_product( $atts['id'] );
         $html = "price = " . $_product->get_price();
    }
    return $html;
}
add_shortcode( 'woocommerce_price', 'so_30165014_price_shortcode_callback' );

/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute 
 */

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}

/**
 * Highlight search terms
 */
function wps_highlight_results($text){
     if(is_search()){
     $sr = get_query_var('s');
     $keys = explode(" ",$sr);
     $text = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-term">'.$sr.'</strong>', $text);
     }
     return $text;
}
add_filter('the_excerpt', 'wps_highlight_results');


/**
 * Create work custom post type
 */
add_action('init', 'work_register');
 
function work_register() {
 
	$labels = array(
		'name' => _x('Work', 'post type general name'),
		'singular_name' => _x('Work Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Work item'),
		'add_new_item' => __('Add New Work Item'),
		'edit_item' => __('Edit Work Item'),
		'new_item' => __('New Work Item'),
		'view_item' => __('View Work Item'),
		'search_items' => __('Search Work'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','attachments','post-formats'),
		'rewrite' => array( 'slug' => 'shopify-store-examples', 'with_front' => false )
	  ); 
 
	register_post_type( 'work' , $args );
}



/**
 * Create case study custom post type
 */
add_action('init', 'casestudies_register');
 
function casestudies_register() {
 
	$labels = array(
		'name' => _x('Case Studies', 'post type general name'),
		'singular_name' => _x('Case Study Item', 'post type singular name'),
		'add_new' => _x('Add New Case Study', 'Work item'),
		'add_new_item' => __('Add New Case Study Item'),
		'edit_item' => __('Edit Case Study Item'),
		'new_item' => __('New Case Study Item'),
		'view_item' => __('View Case Study Item'),
		'search_items' => __('Search Case Study'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','attachments','post-formats'),
		'rewrite' => array( 'slug' => 'shopify-case-study', 'with_front' => false )
	  ); 
 
	register_post_type( 'case-studies' , $args );
}


/**
 * Create the menu locations
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'footer-menu-two' => __( 'Footer Menu Two' ),
      'footer-menu-three' => __( 'Footer Menu Three' ),
      'footer-menu-four' => __( 'Footer Menu Four' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
* Remove Admin Bar
*/
	add_filter('show_admin_bar', '__return_false');


/**
 * Current year
 */
function currentYear( $atts ){
    return date('Y');
}
add_shortcode( 'year', 'currentYear' );

/**
 * Excerpt remove more
 */
 function custom_excerpt_more( $more ) {
    return '...';//you can change this to whatever you want
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

/**
 * Load the individual classes required by this theme
 */
require_once( 'inc/class-boutique.php' );
require_once( 'inc/class-boutique-customizer.php' );
require_once( 'inc/class-boutique-template.php' );
require_once( 'inc/class-boutique-integrations.php' );

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */

add_action( 'init', 'update_my_custom_type_work', 99 );

/**
 * Add theme support for post formats
 */

add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );

/**
 * Remove case studies from search
 */
function update_my_custom_type() {
    global $wp_post_types;

    if ( post_type_exists( 'case-studies' ) ) {

        // exclude from search results
        $wp_post_types['case-studies']->exclude_from_search = true;
    }
}

/**
 * Remove pages from search
 */
function remove_pages_from_search() {
    global $wp_post_types;
    $wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

/**
 * Remove work from search
 */
function update_my_custom_type_work() {
    global $wp_post_types;

    if ( post_type_exists( 'work' ) ) {

        // exclude from search results
        $wp_post_types['work']->exclude_from_search = true;
    }
}

/**
 * Remove WooCommerce product and WordPress page results from the search form widget
 *
 * @author   Golden Oak Web Design <info@goldenoakwebdesign.com>
 * @author   Joshua David Nelson <josh@joshuadnelson.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPLv2+
 */
function golden_oak_web_design_modify_search_query( $query ) {
  // Make sure this isn't the admin or is the main query
  if( is_admin() || ! $query->is_main_query() ) {
    return;
  }

  // Make sure this isn't the WooCommerce product search form
  if( isset($_GET['post_type']) && ($_GET['post_type'] == 'product') ) {
    return;
  }

  if( $query->is_search() ) {
    $in_search_post_types = get_post_types( array( 'exclude_from_search' => false ) );

    // The post types you're removing (example: 'product' and 'page')
    $post_types_to_remove = array( 'product', 'page' );

    foreach( $post_types_to_remove as $post_type_to_remove ) {
      if( is_array( $in_search_post_types ) && in_array( $post_type_to_remove, $in_search_post_types ) ) {
        unset( $in_search_post_types[ $post_type_to_remove ] );
        $query->set( 'post_type', $in_search_post_types );
      }
    }
  }

}
add_action( 'pre_get_posts', 'golden_oak_web_design_modify_search_query' );


function add_style_sheet(){

  $rand = rand();  
  wp_enqueue_style( 'hup', get_stylesheet_directory_uri().'/css/hup.css' );
  wp_enqueue_style( 'cro-sale', get_stylesheet_directory_uri() . '/css/cro-sales.css?ver=1.0');
  wp_enqueue_style( 'gdpr2', get_stylesheet_directory_uri() . '/css/gdpr2.css?ver=1.0');
  wp_enqueue_style( 'responsive-css', get_stylesheet_directory_uri() . '/css/responsive.css?ver=1.0');
  wp_enqueue_style( 'gdpr-responsive3', get_stylesheet_directory_uri() . '/css/gdpr-responsive3.css?ver=1.0');
  wp_enqueue_style( 'landing-product-template', get_stylesheet_directory_uri() . '/css/landing-product-template.css?ver='.$rand);
  //wp_enqueue_script( 'jquery.cookie', get_stylesheet_directory_uri() . '/js/jquery.cookie.js', array( 'jquery' ) );
  
}
add_action('wp_enqueue_scripts','add_style_sheet');


add_filter( 'default_checkout_billing_country', 'change_default_checkout_country' );
function change_default_checkout_country() {
  return 'US'; // country code for United States
}

/*function remove_admin_bar()
{
    return true;
}
add_filter('show_admin_bar', 'remove_admin_bar');*/
add_action ('wp_ajax_my_ajax_func', 'my_ajax_func') ;
add_action ('wp_ajax_nopriv_my_ajax_func', 'my_ajax_func') ;
function my_ajax_func(){
         $industry_id  = $_POST['industry_id'];
         $channel_id  = $_POST['channel_id']; 
         $args = array(
        'post_type' => 'case-studies', // if you want to further filter by post_type
        'tax_query' => array(
            'relation' => 'AND',
            array(
            'taxonomy' => 'industry',
            'field' => 'term_id',
            'terms' => $industry_id // you need to know the term_id of your term "example 1"
             ),
            array(
            'taxonomy' => 'channel',
            'field' => 'term_id',
            'terms' => $channel_id // you need to know the term_id of your term "example 1"
             )
          )
        );
       $indus = array(
      'post_type' => 'case-studies', // if you want to further filter by post_type
      'tax_query' => array(
          array(
          'taxonomy' => 'industry',
          'field' => 'term_id',
          'terms' => $industry_id // you need to know the term_id of your term "example 1"
           )
        )
      );
      $chann = array(
      'post_type' => 'case-studies', // if you want to further filter by post_type
      'tax_query' => array(
          array(
          'taxonomy' => 'channel',
          'field' => 'term_id',
          'terms' => $channel_id // you need to know the term_id of your term "example 1"
           )
        )
      );
        $query = new WP_Query( $args ); 
        $indus_query =  new WP_Query( $indus ); 
        $chann_query =  new WP_Query( $chann );
        $html = "";
        if (!empty($industry_id) && !empty($channel_id)) {
             if ($query->have_posts()) {
            while ( $query->have_posts() ):$query->the_post(); 
              $image = get_field('post_image'); $size = 'full';
              $html.='<div class="row between-xs">
              <div class="col-xs-12 col-md-5 col-lg-5 pad-xs-25">
                    <div class="row fullheight rounded-xl">
                        <div class="col-xs-12">
                            <a href="'.get_the_permalink().'">
                              '.wp_get_attachment_image( $image, $size ).'
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-7 pad-xs-25 pad-sm-40 pad-md-20">
                    <div class="h5 tax"><p> Industry: ';
                      $industries = get_the_terms($post->ID,'industry');
                      $industry_count = count($industries ); 
                      $industry_last =  $industry_count -1 ;
                     foreach ( $industries as $key => $industry ) { 
                      if ($key == $industry_last ) {
                             $html.=$industry->name;
                          }else{
                              $html.=$industry->name.',';
                          }
                    }
                    $html.='</p><p> Channel: ';
                    $channels = get_the_terms($post->ID,'channel');
                    $channel_count = count($channels);
                    $channel_last = $channel_count -1;
                     foreach ( $channels as $key => $channel ) { 
                      if ($key == $channel_last ) {
                          $html.=$channel->name;
                        }else{
                          $html.=$channel->name.',';
                        }
                    }

                    $html.='</p></div>
                    <div class="sp-20"></div>
                    <a href="'.get_the_permalink().'"><h4 class="h3">'.get_field("preview_title").'</h4></a>
                    <p class="lightgrey-text">
                        '.get_field("preview_description").'
                    </p>
                    <div class="sp-20"></div>
                    <img class="clientlogo" src="'.get_field("logo").'" />
                </div>
                </div>'; 
              endwhile;
                wp_reset_query();
              }else{
                $html.='<div class="hup_no_result">No Result found.</div>';
              }
        }else{
            if (!empty($industry_id)) {
                if ($indus_query->have_posts()) {
                while ( $indus_query->have_posts() ):$indus_query->the_post(); 
                  $image = get_field('post_image'); $size = 'full';
                  $html.='<div class="row between-xs">
                  <div class="col-xs-12 col-md-5 col-lg-5 pad-xs-25">
                        <div class="row fullheight rounded-xl">
                            <div class="col-xs-12">
                                <a href="'.get_the_permalink().'">
                                  '.wp_get_attachment_image( $image, $size ).'
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-7 col-lg-7 pad-xs-25 pad-sm-40 pad-md-20">
                        <div class="h5 tax"><p> Industry: ';
                          $industries = get_the_terms($post->ID,'industry');
                          $industry_count = count($industries ); 
                          $industry_last =  $industry_count -1 ;
                         foreach ( $industries as $key => $industry ) { 
                          if ($key == $industry_last ) {
                                 $html.=$industry->name;
                              }else{
                                  $html.=$industry->name.',';
                              }
                        }
                        $html.='</p><p> Channel: ';
                        $channels = get_the_terms($post->ID,'channel');
                        $channel_count = count($channels);
                        $channel_last = $channel_count -1;
                         foreach ( $channels as $key => $channel ) { 
                          if ($key == $channel_last ) {
                              $html.=$channel->name;
                            }else{
                              $html.=$channel->name.',';
                            }
                        }

                        $html.='</p></div>
                        <div class="sp-20"></div>
                        <a href="'.get_the_permalink().'"><h4 class="h3">'.get_field("preview_title").'</h4></a>
                        <p class="lightgrey-text">
                            '.get_field("preview_description").'
                        </p>
                        <div class="sp-20"></div>
                        <img class="clientlogo" src="'.get_field("logo").'" />
                    </div>
                    </div>'; 
              endwhile;
                wp_reset_query();
              }
            }
            if (!empty($channel_id)) {
                if ($chann_query->have_posts()) {
                 while ( $chann_query->have_posts() ):$chann_query->the_post(); 
                  $image = get_field('post_image'); $size = 'full';
                  $html.='<div class="row between-xs">
                  <div class="col-xs-12 col-md-5 col-lg-5 pad-xs-25">
                        <div class="row fullheight rounded-xl">
                            <div class="col-xs-12">
                                <a href="'.get_the_permalink().'">
                                  '.wp_get_attachment_image( $image, $size ).'
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-7 col-lg-7 pad-xs-25 pad-sm-40 pad-md-20">
                        <div class="h5 tax"><p> Industry: ';
                          $industries = get_the_terms($post->ID,'industry');
                          $industry_count = count($industries ); 
                          $industry_last =  $industry_count -1 ;
                         foreach ( $industries as $key => $industry ) { 
                          if ($key == $industry_last ) {
                                 $html.=$industry->name;
                              }else{
                                  $html.=$industry->name.',';
                              }
                        }
                        $html.='</p><p> Channel: ';
                        $channels = get_the_terms($post->ID,'channel');
                        $channel_count = count($channels);
                        $channel_last = $channel_count -1;
                         foreach ( $channels as $key => $channel ) { 
                          if ($key == $channel_last ) {
                              $html.=$channel->name;
                            }else{
                              $html.=$channel->name.',';
                            }
                        }

                        $html.='</p></div>
                        <div class="sp-20"></div>
                        <a href="'.get_the_permalink().'"><h4 class="h3">'.get_field("preview_title").'</h4></a>
                        <p class="lightgrey-text">
                            '.get_field("preview_description").'
                        </p>
                        <div class="sp-20"></div>
                        <img class="clientlogo" src="'.get_field("logo").'" />
                    </div>
                    </div>'; 
              endwhile;
                wp_reset_query();
              }
            }
        }
       
        echo $html;
        wp_die();
}

define( 'DISALLOW_FILE_EDIT' , true );


add_action( 'wp_ajax_bookCall', 'bookCall',20 );
add_action( 'wp_ajax_nopriv_bookCall', 'bookCall',20 );
function bookCall()
{
    global $wpdb, $user;
    $email = $_POST['email'];
    $details = $_POST['details'];  
    $finalResult = array();
    $to = 'hello@wholedesignstudios.com';
    $subject = "Book a call request from Shopify Developer Page";
    $body = 'List of shopify developer listed below <br>'.$details;
    $headers = array('Content-Type: text/html; charset=UTF-8','From: <'.$email.'>');
    $mail = wp_mail( $to, $subject, $body, $headers ); 
    if($mail)
    {
        $finalResult['status']='success';
    }  
    else
    {
       $finalResult['status']='failed';     
    }

    echo json_encode($finalResult);
    exit;
}