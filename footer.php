<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

$url = get_home_url().'/wp-admin/admin-ajax.php';
?>
<input type="hidden" id="adminurl" value="<?php echo $url; ?>">
<style type="text/css">
    /*loading icon start*/
.ApWait {
  display: none;
  width: 100%;
  height: 100%;
  border: 0 solid black;
  position: fixed;
  top: 0;
  left: 0;
  padding: 2px;
  box-shadow: inset 0 0 0 8000px rgba(0, 0, 0, 0.3);
  z-index: 99999;
}
.loader_child {
  position: absolute;
  top: 50%;
  left: 50%;
  padding: 15px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
#loading-bar-spinner.spinner {
  left: 50%;
  margin-left: -20px;
  top: 50%;
  margin-top: -20px;
  position: absolute;
  animation: loading-bar-spinner 500ms linear infinite;
}
#loading-bar-spinner.spinner .spinner-icon {
  width: 40px;
  height: 40px;
  border: solid 4px transparent;
  border-top-color: #2695ff;
  border-left-color: #2695ff;
  border-radius: 50%;
  -webkit-animation: initial;
  animation: initial;
}
@keyframes loading-bar-spinner {
  0% {
    transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
/*loading icon end*/
</style>
<div class="ApWait" style="display: none;">
  <div class="loader_child">
    <div id="loading-bar-spinner" class="spinner">
      <div class="spinner-icon"></div>
    </div>
  </div>
</div> 
<?php if(!isset($_GET['switch-subscription'])) :?>
  <section class="lightgrey hup_mobile_view" id="footer_top_optin">
        <div class="wrapper">
            <div class="sp-20"></div>
            <div class="sp-20 hide-md"></div>
            <div class="row middle-xs between-xs">
                <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                    <div class="row middle-xs">
                        <div class="col round avatar">
                            <?php $image = get_field('avatar_giles','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                        </div>
                        <div class="col">
                            <p class="nomarginbottom">Giles Thomas</p>
                            <cite>CEO</cite>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 pad-xs-0">
                    <div class="row middle-xs">
                        <div class="col-xs-12 col-md-7 pad-xs-25">
                            <p class="small">Optimize your Shopify conversion rates. 5 lesson course, learn 51 ecommerce best practices to get more visitors to buy.</p>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <button class="large red fullwidth "><a data-formkit-toggle="77089ea9d1" href="https://pages.convertkit.com/77089ea9d1/b5f3be0d91">Begin lesson #1</a></button>
                            <!--<div class="footersubscribe">
                                <div class="input-field inline">
                                    <input id="email_inline" type="email" class="validate">
                                    <label for="email_inline">Email Address</label>
                                    <button>Download</button>
                                </div>
                                
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="sp-20"></div>
            <div class="sp-20 hide-md"></div>
        </div>
    </section>
  <?php endif;?> 
	<footer class="darkgrey overflow" id="footer">
        <div class="wrapper white-text">
            <div class="row between-xs">
                <div class="col-xs-12 show-md col-md-3" id="info">
                    <div class="sp-40"></div>
                    <div class="sp-30"></div>
                    <nav>
                        <?php wp_nav_menu( array(  'menu_class' => 'menu-main','theme_location' => 'footer-menu','container' => '' ) ); ?>     
                    </nav>
                </div>
                <div class="col-xs-12 col-md-9 col-lg-8 pad-md-0">
                    <div class="sp-70"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-lg-5 pad-xs-0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 hide-md pad-xs-0">
                                    <nav>
                                              <?php wp_nav_menu( array(  'menu_class' => 'menu-main','theme_location' => 'footer-menu','container' => '' ) ); ?>    
                                    </nav>
                                    <div class="sp-40"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12 pad-xs-0 pad-md-25 pad-lg-0 pad-left-right">
                                    <nav>
                                        <?php wp_nav_menu( array(  'menu_class' => 'menu-main','theme_location' => 'footer-menu-two','container' => '' ) ); ?>      
                                    </nav>
                                    <div class="sp-40"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-0 pad-md-25 pad-lg-0 pad-left-right">
                            <nav>
                                   <?php wp_nav_menu( array(  'menu_class' => 'menu-main','theme_location' => 'footer-menu-three','container' => '' ) ); ?>      
                            </nav>
                            <div class="sp-40"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 pad-xs-0 pad-md-25 pad-lg-0 pad-left-right">
                            <nav>
                                <?php wp_nav_menu( array(  'menu_class' => '','theme_location' => 'footer-menu-four','container' => '' ) ); ?>       
                            </nav>
                            <div class="sp-40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="row between-xs bottom-xs">
                <div class="sp-40"></div>
                <div class="col-xs-9 col-sm-9">
                    <p class="copyright midgrey-text">© 2012 - <?php echo do_shortcode('[year]'); ?> Whole Design Studios Ltd.</p>
                </div>
                <div class="col-xs-3 col-sm-3 end-xs">
                    <a href="#header" id="top" class="green"></a>
                </div>
                <div class="sp-50"></div>
            </div>
        </div>

      <?php if( is_page() ){ ?>
  	<div class="hup_exit_intent_popup" style="display: none;">
	  <?php
      $exit_intent_form =get_field('exit_intent_form_for_pages'); 
    	echo do_shortcode($exit_intent_form);?>
	</div>
    <?php }
    	if ( is_single() ) { ?>
    <div class="hup_exit_intent_popup" style="display: none;">
	  <?php
      $exit_intent_form =get_field('exit_intent_form_for_posts'); 
    	echo do_shortcode($exit_intent_form);?>
	</div>
    <?php }
    if ( is_product() ) { ?>
    <div class="hup_exit_intent_popup" style="display: none;">
	  <?php
      $exit_intent_form =get_field('exit_intent_form_for_products'); 
    	echo do_shortcode($exit_intent_form);?>
	</div>
    <?php } ?>
    </footer>

    <?php if ( !is_checkout() ) : ?>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script> 
        <script>if( !window.jQuery ) document.write('<script src="_/js/jquery-3.0.0.min.js"><\/script>');</script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/flickity.pkgd.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mainv2.js?v=1.2"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/materialize.min.js"></script>
    <?php endif;?>


<script type="text/javascript">
jQuery(document).ready(function(){
        jQuery('div#currency span.woocommerce-currency-selector-wrap .select-wrapper').removeClass("disabled");
        jQuery('div#currency span.woocommerce-currency-selector-wrap .select-wrapper input.select-dropdown.dropdown-trigger').removeAttr("disabled");

        jQuery('div#currency span.woocommerce-currency-selector-wrap .select-wrapper input.select-dropdown.dropdown-trigger').click(function(){
            jQuery('div#currency span.woocommerce-currency-selector-wrap .select-wrapper .dropdown-content').css({
                            'display': 'block',
                            'width': '100px',
                            'left': '8.19995px',
                            'top': '4.2px',
                            'height': '280px',
                            'opacity': '1'
                            // Add more properties as needed
                        });
        })


		if(jQuery(".dropdown-content li").hasClass("selected")){
			var dropdown_value = jQuery(".dropdown-content li.selected").text();
	  		var radio_value = jQuery('input[name=currency]:checked').val(); 
	  		if(dropdown_value != radio_value ){
	  			   jQuery('input[name=currency][value="' + dropdown_value + '"]').prop('checked', true);
	  		}
		}
});
jQuery('input[type=radio][name=currency]').change(function() {
  var radio_value1 = jQuery(this).val();
    jQuery('.dropdown-content.select-dropdown li span').each(function() {
        var data = jQuery(this).text(); 
       if(data == radio_value1 ){
      jQuery(this).parent().click();
       }  
    });
  });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery(".hup_shopify_developer_scroll").click(function() {
		    jQuery('html, body').animate({
		        scrollTop: jQuery("#quote").offset().top
		    }, 2000);
		});
	

  
	jQuery(".hup_footer_form").on('click',function() {
	  jQuery(".hup_add").show();
	  jQuery('.hup_add .seva-overlay.formkit-overlay').attr('data-active','true');
	  jQuery('.hup_add .seva-overlay.formkit-overlay').attr('style','display:flex');
	  jQuery('.hup_add .seva-overlay.formkit-overlay .seva-modal.formkit-modal').attr('data-active','true');
	});

	jQuery('.hup_shopify_form').on('click',function(){
	  	jQuery('.shopify_form_popup').show();
	  	jQuery('.shopify_form_popup .seva-overlay.formkit-overlay').attr('data-active','true');
	  	jQuery('.shopify_form_popup .seva-overlay.formkit-overlay').attr('style','display:flex');
	  	jQuery('.shopify_form_popup .seva-modal .formkit-modal').attr('data-active','true');
	  	
	});
});
</script>
<?php if(is_product()) { ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
  <?php
  if( have_rows('faq') ):
		while ( have_rows('faq') ) : the_row(); ?>
  {
  "@type": "Question",
    "name": "<?php echo get_sub_field('question');?>",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "<?php echo get_sub_field('answer');?>"
    }
  }, 
   <?php  endwhile;
		else :
	endif;

	?>
	<?php
  if( have_rows('faq_two') ):
  		
  		$count = 0;
		$conter = get_field('faq_two');
		if (is_array($conter)) {
		  $count = count($conter);
		}

		$row_count= 0;
		while ( have_rows('faq_two') ) : the_row(); 
			$row_count++;
			if($count == $row_count){ ?>
				{
				  "@type": "Question",
				    "name": "<?php echo get_sub_field('question');?>",
				    "acceptedAnswer": {
				      "@type": "Answer",
				      "text": "<?php echo get_sub_field('answer');?>"
				    }
				  } 

			<? } else{ ?>
				{
				  "@type": "Question",
				    "name": "<?php echo get_sub_field('question');?>",
				    "acceptedAnswer": {
				      "@type": "Answer",
				      "text": "<?php echo get_sub_field('answer');?>"
				    }
				  },
			<?php }

			?>


   
   <?php  endwhile; 
   		 else :
	endif;

	?>
  ]
  }
</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".hup_price_button_scroll").click(function() {
        jQuery('html, body').animate({
		        scrollTop: jQuery("#5").offset().top
		    }, 2000);
		});
		
	});
</script>
<?php } ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/js/jquery.cookie.js'; ?>"></script>
<script type="text/javascript">

	jQuery(document).ready(function(){
    function createCookie(name, value, days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires="+date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
  }
  function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
  }
  var x = getCookie('hup_cookie');
  jQuery(document).mouseleave(function(){
  if (!x)
    {
         jQuery('.hup_exit_intent_popup').attr('style','display:block');
        jQuery('.hup_exit_intent_popup .seva-overlay.formkit-overlay').attr('data-active','true');
        jQuery('.hup_exit_intent_popup .seva-overlay.formkit-overlay').attr('style','display:flex');
        jQuery('.hup_exit_intent_popup .seva-overlay.formkit-overlay .seva-modal.formkit-modal').attr('data-active','true');
        createCookie('hup_cookie', true, 15);
        x = getCookie('hup_cookie');
    }
  });
  });
	

</script>

<script type="text/javascript">
  <?php
        $product_free_audit_form = get_field('popup_form_shortcode'); 
  if(!empty($product_free_audit_form)){
          ?>
           jQuery(".hup_ppc_audit_form_button").on('click',function() {
                  jQuery(".hup_ppc_audit_form_popup").show();
                  jQuery('.hup_ppc_audit_form_popup .seva-overlay.formkit-overlay').attr('data-active','true');
                  jQuery('.hup_ppc_audit_form_popup .seva-overlay.formkit-overlay').attr('style','display:flex');
                  jQuery('.hup_ppc_audit_form_popup .seva-overlay.formkit-overlay .seva-modal.formkit-modal').attr('data-active','true');
            });


          
      <?php  }?>
</script>

<!-- js for sticky pageheader inside products starts -->
<script type="text/javascript">
jQuery(document).ready(function() {
  //js for sticky pageheader starts
  if (jQuery('body').hasClass('single-product')) {
    if (window.matchMedia('(min-width: 1024px)').matches) {

      if (jQuery('section').hasClass('productpagemenu')) {

      var product_menu = jQuery('.productpagemenu').offset().top + 5;
      jQuery(window).scroll(function(){
          var currentScroll = jQuery(window).scrollTop();
          if (currentScroll >= product_menu) {
            jQuery('.productpagemenu').addClass('fix_sticky_pageheader');
          }
          else{
            jQuery('.productpagemenu').removeClass('fix_sticky_pageheader');    
          }
      });

    }

    }
  }
  //js for sticky pageheader nds
});
</script>
<!--  js for sticky pageheader inside products ends -->

<!-- js for sticky sidebar in blog starts -->
<script type="text/javascript">
jQuery(window).on('load',function(){
  if (jQuery('body').hasClass('single-post')) {
    if (window.matchMedia('(min-width: 1024px)').matches) {
      // var header_height = jQuery('#header').height();
      // var breadcrum_height = jQuery('.breadcrumbs').height();
      // var blog_sidebar_content = header_height + breadcrum_height;
      var parent_width_blog = jQuery('.chapterbox').width();
      jQuery('.chapterbox').width(parent_width_blog);
      var height = 0;
      jQuery("section").each(function( index ) {
        if(jQuery(this).hasClass('breadcrumbs') || jQuery(this).hasClass('lightgrey')){
          height = height + 0;
        }
        else{
          height = jQuery(this).height() + height;
        }
      });
      jQuery('.show-md.sticky').attr('style','height:'+height+'px');
    }
  }
});
</script>
<!-- js for sticky sidebar in blog ends -->

<script type="text/javascript">
  <?php
    if (is_product()) { ?>
      jQuery('input[type=radio][name=budget]').change(function() {
          var plan_swicther = jQuery(this).val();
           if (plan_swicther == "lite_plan" ) {
            jQuery(".lite_plan").addClass("active");
            jQuery(".grow_plan").removeClass("active");
            jQuery(".pro_plan").removeClass("active");
            jQuery(".business_plan").removeClass("active");
           }
           if (plan_swicther == "grow_plan"){
            
            jQuery(".grow_plan").addClass("active");
            jQuery(".lite_plan").removeClass("active");
            jQuery(".pro_plan").removeClass("active");
            jQuery(".business_plan").removeClass("active");
            
           }
           if(plan_swicther == "pro_plan"){
             
              jQuery(".pro_plan").addClass("active");
               jQuery(".lite_plan").removeClass("active");
               jQuery(".grow_plan").removeClass("active");
               jQuery(".business_plan").removeClass("active");
           }
           if (plan_swicther == "business_plan") {
              
              jQuery(".business_plan").addClass("active");
              jQuery(".lite_plan").removeClass("active");
              jQuery(".grow_plan").removeClass("active");
              jQuery(".pro_plan").removeClass("active");
           }

           
      });
       
     

     <?php } 
  ?>
</script>
<script type="text/javascript">
  <?php if(is_product()) { ?>
    jQuery(document).ready(function() {
            jQuery(".hup_lite_plan").show();
            jQuery(".hup_grow_plan").hide();
            jQuery(".hup_pro_plan").hide();
            jQuery(".hup_business_plan").hide();


      //jQuery("input[type=radio][name=budget]").change(function() {
      jQuery( 'input[type=radio][name=budget],.price-box' ).on('change', function(e) {
          var budget = jQuery(this).val();
          changePlan(budget); 
      });

      jQuery( '.price-box' ).on('click', function(e) {
        var budget = jQuery(this).attr('id');
        changePlan(budget); 
      });


      function changePlan(budget) {
        if (budget == "lite_plan") {
            jQuery(".hup_lite_plan").show();
            jQuery(".hup_grow_plan").hide();
            jQuery(".hup_pro_plan").hide();
            jQuery(".hup_business_plan").hide();
          }
          if ( budget == "grow_plan") {
              jQuery(".hup_lite_plan").hide();
              jQuery(".hup_grow_plan").show();
              jQuery(".hup_pro_plan").hide();
              jQuery(".hup_business_plan").hide();
          }
          if ( budget == "pro_plan") {
              jQuery(".hup_lite_plan").hide();
              jQuery(".hup_grow_plan").hide();
              jQuery(".hup_pro_plan").show();
              jQuery(".hup_business_plan").hide();
          }
          if ( budget == "business_plan") {
              jQuery(".hup_lite_plan").hide();
              jQuery(".hup_grow_plan").hide();
              jQuery(".hup_pro_plan").hide();
              jQuery(".hup_business_plan").show();
          }
      }
  });
  <?php }?>
</script>
<script type="text/javascript">
  <?php if (is_page(5067)) { ?>
 
  			if(jQuery('input[type=radio][name=project]:checked').val() == 'new_store'){
		        jQuery(".hup_replatforming_data_migration").hide();
		         /* var hup_project_type = jQuery('input[type=radio][name=project]:checked').siblings().children('h4').html();
		          jQuery(".hup_project_type").html("Base project type: "+hup_project_type+"");*/
			}

  		
        
          /*jQuery('input[type=radio][name=project]').change(function(){
              if (this.value == 'new_store') {
                 jQuery(".hup_domain_name_setup").show();
                 jQuery(".hup_replatforming_data_migration").hide();
                 var hup_project_type = jQuery(this).siblings().children('h4').html();
                 jQuery(".hup_project_type").html("Base project type: "+hup_project_type+"");
              }
              if (this.value == 'redesign') {
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").hide();
                  var hup_project_type = jQuery(this).siblings().children('h4').html();
                  jQuery(".hup_project_type").html("Base project type: "+hup_project_type+"");
              }
              if(this.value == 'replatform'){
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").show();
                  var hup_project_type = jQuery(this).siblings().children('h4').html();
                  jQuery(".hup_project_type").html("Base project type: "+hup_project_type+"");
              }
          });*/
 var my_html = jQuery('.hup_tbody').html();     
/*jQuery(".hup-option").click(function(){
	jQuery(this).find('input[type=radio]').prop("checked", true);
	  
	


}); */   
      
     
jQuery(".option").click(function(){
		jQuery(this).find('input[type=radio]').prop("checked", true);
		if (jQuery(this).find('.hup_inner_checkbox').is(":checked")) {
			jQuery(this).find('.hup_inner_checkbox').attr("checked", false);
		}
		else {
		    jQuery(this).find('.hup_inner_checkbox').prop("checked", true);
		}
		var price = 4999;
       var i = 0;
       jQuery('.hup_tbody').html(my_html);

   jQuery(".option").each(function(){
     var hup_project = jQuery(this).find('input[type=radio][name=project]:checked').val();
		if (hup_project == 'new_store') {
                 jQuery(".hup_domain_name_setup").show();
                 jQuery(".hup_replatforming_data_migration").hide();
                 var hup_project_type =jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                 jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
                
              }
              if (hup_project == 'redesign') {
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").hide();
                  var hup_project_type = jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                   jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
                
              }
              if(hup_project == 'replatform'){
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").show();
                  var hup_project_type = jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                   jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
              }
      }); 
     jQuery('.hup_outer_checkbox').each(function(){
     		if (jQuery(this).is(":checked")) {
     	 	var parent = jQuery(this).closest('.option-head').parent().parent();
     	 	var price_value = 0;
           	var regx = "/[^0-9]/g";
              
              price_value = parent.find('input[type=radio]:checked').parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
             if(parent.find('input[type=radio]:checked').length > 0){
              var item_radio_name =parent.find('input[type=radio]:checked').siblings().children('h4').html();
              var item_name = jQuery(this).siblings().children('h4').html();
              jQuery('.hup_tbody').append('<tr class="hup_store_value_'+i+'"></tr>');
               
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td"><span>'+item_radio_name+'</span>:'+ item_name +'</td>');
            
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td">'+ price_value +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td hup-remove-row"></td>');
              i++;
             if(price_value){
                price_value = price_value.replace(eval(regx),'');
                price = price + (parseInt(price_value) || 0);
              }
            
            }
            if(parent.find('.hup_inner_checkbox:checked').length > 0){
              parent.find('.hup_inner_checkbox:checked').each(function(){
                price_value = jQuery(this).parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
                var item_check_name =jQuery(this).siblings().children('h4').html();
              var item_name = jQuery(parent).find('.option-head').children('label').children('span').children('h4').html();
              jQuery('.hup_tbody').append('<tr class="hup_store_value_'+i+'"></tr>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td"> <span>'+item_check_name+'</span>:'+ item_name +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td">'+ price_value +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td hup-remove-row"></td>');
              i++;
                if(price_value)
                {
                  price_value = price_value.replace(eval(regx),'');
                  price = price + (parseInt(price_value) || 0);
                } 
			});
          }
        }
          else{
           jQuery(this).closest('.hup_common_checkbox').removeClass('active');
          }
        });
        jQuery('.hup_price').html(price);
});

jQuery(".option-head").click(function(){
	
	if (jQuery(this).find('.hup_outer_checkbox').is(":checked")) {
		jQuery(this).find('.hup_outer_checkbox').attr("checked", false);
		 jQuery(this).closest('.hup_common_checkbox').removeClass('active');
	}
	else {
	    jQuery(this).find('.hup_outer_checkbox').prop("checked", true);
	     jQuery(this).closest('.hup_common_checkbox').addClass('active');
	}	
	var price = 4999;
       var i = 0;
       jQuery('.hup_tbody').html(my_html);
       jQuery(".option").each(function(){
     var hup_project = jQuery(this).find('input[type=radio][name=project]:checked').val();
		if (hup_project == 'new_store') {
                 jQuery(".hup_domain_name_setup").show();
                 jQuery(".hup_replatforming_data_migration").hide();
                 var hup_project_type =jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                 jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
                
              }
              if (hup_project == 'redesign') {
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").hide();
                  var hup_project_type = jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                   jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
                
              }
              if(hup_project == 'replatform'){
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").show();
                  var hup_project_type = jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                   jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
              }
      }); 
     jQuery('.hup_outer_checkbox').each(function(){
     		if (jQuery(this).is(":checked")) {
     	 	var parent = jQuery(this).closest('.option-head').parent().parent();
     	 	var price_value = 0;
           	var regx = "/[^0-9]/g";
              
              price_value = parent.find('input[type=radio]:checked').parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
             if(parent.find('input[type=radio]:checked').length > 0){
              var item_radio_name =parent.find('input[type=radio]:checked').siblings().children('h4').html();
              var item_name = jQuery(this).siblings().children('h4').html();
              jQuery('.hup_tbody').append('<tr class="hup_store_value_'+i+'"></tr>');
               
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td"><span>'+item_radio_name+'</span>:'+ item_name +'</td>');
            
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td">'+ price_value +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td hup-remove-row"></td>');
              i++;
             if(price_value){
                price_value = price_value.replace(eval(regx),'');
                price = price + (parseInt(price_value) || 0);
              }
            
            }
            if(parent.find('.hup_inner_checkbox:checked').length > 0){
              parent.find('.hup_inner_checkbox:checked').each(function(){
                price_value = jQuery(this).parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
                var item_check_name =jQuery(this).siblings().children('h4').html();
              var item_name = jQuery(parent).find('.option-head').children('label').children('span').children('h4').html();
              jQuery('.hup_tbody').append('<tr class="hup_store_value_'+i+'"></tr>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td"> <span>'+item_check_name+'</span>:'+ item_name +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td">'+ price_value +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td hup-remove-row"></td>');
              i++;
                if(price_value)
                {
                  price_value = price_value.replace(eval(regx),'');
                  price = price + (parseInt(price_value) || 0);
                } 
              });
          }
        }
          else{
           jQuery(this).closest('.hup_common_checkbox').removeClass('active');
          }
        });
        jQuery('.hup_price').html(price);
}); 
	jQuery('.hup_outer_checkbox, .hup_inner_radio, .hup_inner_checkbox').change(function(){ 
       var price = 4999;
       var i = 0;
       jQuery('.hup_tbody').html(my_html);
   jQuery(".option").each(function(){
     var hup_project = jQuery(this).find('input[type=radio][name=project]:checked').val();
		if (hup_project == 'new_store') {
                 jQuery(".hup_domain_name_setup").show();
                 jQuery(".hup_replatforming_data_migration").hide();
                 var hup_project_type =jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                 jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
                
              }
              if (hup_project == 'redesign') {
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").hide();
                  var hup_project_type = jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                   jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
                
              }
              if(hup_project == 'replatform'){
                  jQuery(".hup_domain_name_setup").hide();
                  jQuery(".hup_replatforming_data_migration").show();
                  var hup_project_type = jQuery(this).find('input[type=radio][name=project]:checked').siblings().children('h4').html();
                   jQuery(".hup_project_type").html("");
                jQuery(".hup_project_type").append("Base project type: "+hup_project_type+"");
              }
      }); 
       
     jQuery('.hup_outer_checkbox').each(function(){
     	 	if (jQuery(this).is(":checked")) {

              jQuery(this).closest('.hup_common_checkbox').addClass('active');
            var price_value = 0;
            var parent = jQuery(this).closest('.option-head').parent().parent();
              var regx = "/[^0-9]/g";
              
              price_value = parent.find('input[type=radio]:checked').parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
             if(parent.find('input[type=radio]:checked').length > 0){
              var item_radio_name =parent.find('input[type=radio]:checked').siblings().children('h4').html();
              var item_name = jQuery(this).siblings().children('h4').html();
              jQuery('.hup_tbody').append('<tr class="hup_store_value_'+i+'"></tr>');
               
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td"><span>'+item_radio_name+'</span>:'+ item_name +'</td>');
            
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td">'+ price_value +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td hup-remove-row"></td>');
              i++;
             if(price_value){
                price_value = price_value.replace(eval(regx),'');
                price = price + (parseInt(price_value) || 0);
              }
            
            }
            if(parent.find('.hup_inner_checkbox:checked').length > 0){
              parent.find('.hup_inner_checkbox:checked').each(function(){
                price_value = jQuery(this).parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
                var item_check_name =jQuery(this).siblings().children('h4').html();
              var item_name = jQuery(parent).find('.option-head').children('label').children('span').children('h4').html();
              jQuery('.hup_tbody').append('<tr class="hup_store_value_'+i+'"></tr>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td"> <span>'+item_check_name+'</span>:'+ item_name +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td">'+ price_value +'</td>');
              jQuery('.hup_store_value_'+i).append('<td class="lightgrey-text hup_td hup-remove-row"></td>');
              i++;
                if(price_value)
                {
                  price_value = price_value.replace(eval(regx),'');
                  price = price + (parseInt(price_value) || 0);
                } 
              });
          }
        }
          else{
            jQuery(this).closest('.hup_common_checkbox').removeClass('active');
          }
        });
        jQuery('.hup_price').html(price);
      });      

   jQuery('.hup_project').change(function(){
      var hup_value = jQuery('.hup_project:checked').val();
      if(hup_value != 'new_store'){
        jQuery('.hup_domain_name_setup').find('.hup_outer_checkbox').prop("checked", false);
      }
   });


   jQuery(document).on('click', '.hup-remove-row', function(e){
        var table_data = jQuery(this).closest('tr').children('td:first-child').children('span').html();
        var price =  jQuery('.hup_price').html();
        var regx = "/[^0-9]/g";
        jQuery(".hup_outer_checkbox").each(function(){
          if (jQuery(this).is(":checked")) {
            var price_value = 0;
            var parent = jQuery(this).closest('.option-head').parent().parent();
            var item_radio_name =parent.find('input[type=radio]:checked').siblings().children('h4').html();
            if( table_data == item_radio_name){
                price_value = parent.find('input[type=radio]:checked').parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
                jQuery(this). prop("checked", false);
                jQuery(this).closest('.hup_common_checkbox').removeClass('active');
                if(price_value){
                  price_value = price_value.replace(eval(regx),'');
                  price = price - (parseInt(price_value) || 0);
                }
             }
            parent.find('.hup_inner_checkbox:checked').each(function(){
                var item_check_name = parent.find(this).siblings().children('h4').html();
                 if( table_data == item_check_name){
                    price_value = jQuery(this).parent().parent().parent().parent().find('.hup_shopify_developer_price').html();
                    jQuery(this).prop("checked", false);
                    if(price_value){
                      price_value = price_value.replace(eval(regx),'');
                      price = price - (parseInt(price_value) || 0);
                    }

                 }
              if(parent.find('.hup_inner_checkbox:checked').length == 0){
           		parent.find('.hup_outer_checkbox:checked').attr("checked", false)
           		jQuery(this).closest('.hup_common_checkbox').removeClass('active');
           	  }
           });
           
          }

        });

        jQuery('.hup_price').html(price);
        jQuery(this).closest('tr').remove();
   });
 
   
   
    

    jQuery(".hup_shop_dialog_close").click(function(){
    	jQuery(".hup_shop_dialog_open").hide();
    });
    jQuery(".hup_shopify_developer_form_button").click(function(){
    	jQuery(".hup_shop_dialog_open").css("display", "flex");
    });


   jQuery(".formkit-input-submit").on('click',function(e){
   	e.preventDefault();
		
		var email = jQuery('.hup_shopify_developer_email').val();
   		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if (!testEmail.test(email)) {
    		jQuery(".hup_email_error").show();
    		return false;
    	}

        var adminUrl = jQuery('#adminurl').val();
    	var shopify_developers_list_details = jQuery(".hup_store_developer_details_list").html();
    	

    	/*jQuery.ajax({
			    type: "POST",
			    url: adminUrl,
			    data:{
			    	'email' : email,
			    	'details' : shopify_developers_list_details
			    },
			    success: function(data) {
			    	window.location.href = "https://wholedesignstudios.com/custom-theme-thank-you/";
                }

		});*/
        jQuery('.ApWait').show();
        var form_data = new FormData();
        form_data.append('action', 'bookCall');
        form_data.append('email', email);
        form_data.append('details', shopify_developers_list_details);

        jQuery.ajax({
                url: adminUrl,
                method: 'POST',
                data: form_data,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function() {
                    jQuery('.ApWait').show();
                },
                success: function(results) {
                    jQuery('.ApWait').hide();
                    if (results.status == 'success') { 
                       window.location.href = "https://wholedesignstudios.com/custom-theme-thank-you/"; 
                    } else {
                       alert('Email not triggered successfully..');
                    }

                },
                error: function(error) {
                    jQuery('.ApWait').hide();
                    console.log('Something went wrong');
                }
        });
			  
	});

  
  <?php } ?>
  jQuery(document).ready(function(){
  	// 	jQuery(".woocommerce-checkout .showlogin").click(function(){
  	// 		jQuery(".woocommerce-checkout .woocommerce-form.woocommerce-form-login.login").toggle();
  	// });

      jQuery('.woocommerce-checkout .showlogin').on("click", function() {
          if(jQuery('.woocommerce-form.woocommerce-form-login.login').is(':visible')){
            jQuery('.woocommerce-form.woocommerce-form-login.login').slideUp(500);
          }
          else{
            jQuery('.woocommerce-form.woocommerce-form-login.login').slideDown(500);
          }
        return false;
      });

      // if(jQuery('button.large').children('a')){
      //   jQuery('button.large').addClass('hup_button_largepadding_remover');
      // }
      // if(jQuery('button.small').children('a')){
      //   jQuery('button.small').addClass('hup_button_smallpadding_remover');
      // }
      // if(jQuery('button.red').children('a')){
      //   jQuery('button.red').addClass('hup_button_smallpadding_remover');
      // }
      // if(jQuery('button').find('a')){
      //   jQuery('button').addClass('hup_button_smallpadding_remover');
      // }
       jQuery("button.large:has(a)").addClass('hup_button_largepadding_remover');
       jQuery("button.small:has(a)").addClass('hup_button_smallpadding_remover');
       jQuery("button.red:has(a)").addClass('hup_button_smallpadding_remover');
       jQuery("button:has(a)").addClass('hup_button_smallpadding_remover');
  });
  	
</script>

<script type="text/javascript">
  var currentCurrency = '<?php echo get_woocommerce_currency();?>';
  <?php if(is_product() &&  get_the_id() == 4664 || get_the_id() == 5574 || get_the_id() == 8352 || get_the_id() == 5589 ){ ?>
    jQuery(document).ready(function(){
      
      jQuery(".hup_currency_as_radio").html("$ 349");
      /*if(currentCurrency == 'USD'){
        jQuery(".hup_currency_as_radio").html("<?php //echo get_woocommerce_currency_symbol();?> 349");
      }
      if(currentCurrency == 'GBP'){
      jQuery(".hup_currency_as_radio").html("<?php //echo get_woocommerce_currency_symbol();?> 152 ");
      }
      if(currentCurrency == 'AUD'){
      jQuery(".hup_currency_as_radio").html("<?php //echo get_woocommerce_currency_symbol();?> 291 ");
      }
      if(currentCurrency == 'EUR'){
      jQuery(".hup_currency_as_radio").html("<?php //echo get_woocommerce_currency_symbol();?> 181 ");
      }
      if(currentCurrency == 'CAD'){
        jQuery(".hup_currency_as_radio").html("<?php //echo get_woocommerce_currency_symbol();?> 263 ");
      }*/
    });
<?php } ?>

</script>

<!-- begin olark code -->
<script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('9712-824-10-5334');</script>
<!-- end olark code -->

<!-- Hotjar Tracking Code for my site -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3743365,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>





<?php wp_footer(); ?>



</body>
</html>
