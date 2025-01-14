<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *

 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
<meta name="facebook-domain-verification" content="vqcsyexfem66rs2fh69z0kunevts7o" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38584664-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-38584664-1');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1264287010255796');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1264287010255796&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>


<header class="cream" id="header">
    <div class="wrapper">
        <div class="row pad-xs-20 pad-top-bottom">
            <div class="col-xs-12">
                <div class="row between-xs middle-xs">
                    <div class="hup-logo-size">
                        <div id="logo">
                            <a href="/">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-logo.svg" alt="Whole Design Studios" class="logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="end-md <?php if(is_page(array(12521, 12744, 12742, 12754))) { echo 'header_timer_main'; } ?> ">

                        <?php if(is_page(array(12521, 12744, 12742, 12754))) { ?>
                        <div class="header_timer">
                           🚨 <span class="off_text" style="padding-left: 8px;"><?php echo get_field('off_percent'); ?></span>
                           <div id="the-final-countdown"><p></p>🚨</div> 
                        </div>
                        
                        <script>
                        setInterval(function time(){
                          var d = new Date();
                          var hours = 23 - d.getHours();
                          var min = 60 - d.getMinutes();
                          if((min + '').length == 1){
                            min = '0' + min;
                          }
                          var sec = 60 - d.getSeconds();
                          if((sec + '').length == 1){
                                sec = '0' + sec;
                          }

                          jQuery('#the-final-countdown p').html(hours+' Hours '+min+' Minutes Left')
                        }, 1000);
                        </script>
                        <?php } ?>

                        <?php if(is_page(array(12814)))  { ?>
                            <div class="header_timer gdprPage">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-images/alarm.png" alt=""> <span class="off_text" style="padding-left: 8px;"><?php echo get_field('off_percent'); ?> </span>
                             <div id="the-final"> until the end of October 2023 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-images/alarm.png" alt=""></div> 
                             </div>

                        <?php } ?>


                        <div class="row middle-xs" id="navigation">
                            <div class="col show-md">
                                <nav>
                            	   <?php wp_nav_menu( array(  'menu_class' => 'menu-main','theme_location' => 'header-menu','container' => '' ) ); ?>
                                </nav>
                            </div>
                            <div class="col">
                                <div class="row middle-xs" id="controls">
                                    <div class="col">
                                        <div class="select" id="currency">
                                            <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                               <?php if (WC()->cart->get_cart_contents_count() == 0) {?>
                                 <style type="text/css">
                                 #cart span::after {
                                    background: transparent;
                                }
                                 </style>  
                               <?php }?>
                                <a id="cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><span class=""><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>

                            </div>
                            <div class="col show-sm">
                                <div class="col"> 

                                    <div id="instagramstory"><a href="https://event.webinarjam.com/channel/acquireconvert-seo"><?php $image = get_field('avatar_giles','option');
                    if( $image ) { echo wp_get_attachment_image( $image, array('46', '46') ); } ?></a></div>


                                    <!-- Calendly link widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/gilesadamthomas/30min'});return false;"></a>
<!-- Calendly link widget end -->
                                </div>  
                            </div>
                            <div class="col hide-md">
                                <a id="hamburger" href="#footer">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



