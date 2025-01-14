<?php
/**
 * 
*/
 get_header(); 


 ?>

 
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
                        <button class="red fullwidthmobile"><a href="/contact/">Book Free 30 min Consultation</a></button>
                    </div>
                </div>
                <div class="sp-20 hide-md"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">

        <style type="text/css">
        	ul.taxonomy_filter {
			    background-repeat: no-repeat;
                background-position: 98% 15px;
                background-size: 9px;
                border-bottom: 1px solid #929292;
                background-color: #fdfdfd;
                z-index: 1;
                position: absolute;
                width: calc(100% - 60px);
			}
            ul#hup_industry_list {
                z-index: 3;
            }
            ul#hup_channel_list {
                z-index: 1;
            }
			ul.taxonomy_filter li {
			    padding: 5px 10px;
			    z-index: 2;
			    list-style: none;
			}
			ul.taxonomy_filter li:not(.init) {
			    float: left;
			    width: 100%;
			    display: none;
			    background: #f7f5f1;
                border-bottom: 1px solid #cecece;
			}
			ul.taxonomy_filter li:not(.init):hover,
			ul.taxonomy_filter li.selected:not(.init) { 
			    background: #50c6aa;
                cursor: pointer;
                color: #fff;
			}
			ul.taxonomy_filter li.init {
			    cursor: pointer;
			}
            .hup-custom-filter {
                width: 100%;
               /* display: block;*/
                display: flex;
                flex-wrap: wrap;
                padding: 0 0 1.5rem;
            }
            .hup-custom-filter .hup-row {
                /*width: 40%;
                float: left;*/
                flex: 1 0 0;
                padding: 0 30px;
                margin: 10px 0;
                position: relative;
                height: 48px;
            }
            .hup-show-result {
                padding: 0 30px;
            }
            .hup-custom-filter .hup_filter_clear {
                float: left;
                margin: 10px 30px 10px 30px;
                position: relative;
                padding: 10px 8px;
                border-radius: 6px;
                text-align: center;
                background: #ef525b;
                font-weight: 400;
                font-size: 14px;
                transition: all 0.2s ease;
                color: #fff;
                text-transform: uppercase;
                cursor: pointer;
                max-width: 150px;
                width: 20%;
            }
            .hup_filter_clear:hover {
                transition: all 0.2s ease;
                background: #50c6aa;
            }
            .taxonomy_filter::before {
                width: 0;
                height: 0;
                margin-left: 2px;
                vertical-align: middle;
                border-top: 6px dashed;
                border-top: 6px solid\9;
                border-right: 6px solid transparent;
                border-left: 6px solid transparent;
                content: '';
                position: absolute;
                right: 15px;
                top: 50%;
                z-index: -1;
                transform: translateX(-50%);
            }
            .taxonomy_filter {
                line-height: 2.3rem;
                background-repeat: no-repeat;
                background-position: 98% 15px;
                background-size: 9px;
                border-bottom: 1px solid #929292;
                background-color: #fdfdfd;
            }
			.hup-loading-spinner {
				z-index:1000;
				margin:0px;
				padding:0px;
				width:100%;
				height:100%;
				top:0px;
				left:0px;
				background-color:rgb(255, 255, 255);
				opacity:0.8;
				cursor:wait;
				position:absolute
			}
			.hup-loading-spinner::before,
			.hup-loading-spinner::after {
				display:block;
				content:'';
				position:absolute;
				top:50%;
				left:50%;
				height:2.4rem;
				width:2.4rem;
				margin:-1.2rem 0 0 -1.2rem;
				border-radius:50%;
				border:2px solid
			}
			.hup-loading-spinner::before {
				opacity:.2
			}
			.hup-loading-spinner::after {
				border-color:transparent;
				border-top-color:transparent;
				border-top-color:inherit;
				-webkit-animation:rotation 0.8s infinite cubic-bezier(.6,.3,.3,.6);
				animation:rotation 0.8s infinite cubic-bezier(.6,.3,.3,.6)
			}
            @media screen and (max-width: 899px) {
                .hup-custom-filter .hup-row{
                    flex: 1 0 100%;
                }
                .hup-custom-filter .hup_filter_clear{
                    margin: 10px 0px 10px 30px;
                }
            }
			@-webkit-keyframes rotation {
    			0% {
    				-webkit-transform:rotate(0deg)
    				}
    			100% {
    				-webkit-transform:rotate(360deg)
    			}
			}
			@keyframes rotation {
				0% {
				    transform:rotate(0deg)
				}
				100% {
				    transform:rotate(360deg)
				}
			}
			
        </style>
        <script type="text/javascript">

        	jQuery(document).ready(function() {

	        	jQuery('#hup_channel_list').on("click", ".init", function() {
				    jQuery(this).closest('#hup_channel_list').children('li:not(.init)').toggle();
				});

				var allOptions1 = jQuery('#hup_channel_list').children('li:not(.init)');
				jQuery('#hup_channel_list').on("click", "li:not(.init)", function() {
				    allOptions1.removeClass('selected');
				    jQuery(this).addClass('selected');
				    jQuery('#hup_channel_list').children('.init').html(jQuery(this).html());
				    allOptions1.toggle();
				});

				jQuery('#hup_industry_list').on("click", ".init", function() {
				    jQuery(this).closest('#hup_industry_list').children('li:not(.init)').toggle();
				});

				var allOptions = jQuery('#hup_industry_list').children('li:not(.init)');
				jQuery('#hup_industry_list').on("click", "li:not(.init)", function() {
				    allOptions.removeClass('selected');
				    jQuery(this).addClass('selected');
				    jQuery('#hup_industry_list').children('.init').html(jQuery(this).html());
				    allOptions.toggle();
				});


			});
        </script>

    <div class="row pad-xs-20 pad-top-bottom ">
                <div class="sp-30"></div>
                <div class="hup-custom-filter">
                <div class="hup-row">
				<?php $industries = get_terms( 'industry' ); ?>
				
               <ul class="taxonomy_filter" id="hup_industry_list">
				  <li class="init default-filter">All Industries</li>
				 <?php foreach ( $industries as $industry ) { ?>
				 	<li value="<?php echo $industry->term_id; ?>"><?php echo $industry->name; ?></li>
				 <?php } ?>
				</ul>
                </div>
                <div class="hup-row">
                <?php $channels = get_terms( 'channel' ); ?>
               <ul class="taxonomy_filter" id="hup_channel_list">
                  <li class="init default-filter">All Channels</li>
                 <?php foreach ( $channels as $channel ) { ?>
                    <li value="<?php echo $channel->term_id; ?>"><?php echo $channel->name; ?></li>
                 <?php } ?>
                </ul>
                </div>
                <div class="hup_filter_clear" style="display: none;">clear</div>
			</div>
            <div class="hup-spin"></div>
            	<div class="hup-show-result"></div>
            
            <?php if(have_posts()): ?>
            <?php while( have_posts() ): the_post(); ?>

            <div class="row between-xs load_blogs">
                <div class="col-xs-12 col-md-5 col-lg-5 pad-xs-25">
                    <div class="row fullheight rounded-xl">
                        <div class="col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                 <?php $image = get_field('post_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-7 pad-xs-25 pad-sm-40 pad-md-20">
                    <div class="h5 tax">
                    	<p> Industry: 
                    	<?php
                    	$industries_category = get_the_terms($post->ID,'industry');
		                $industry_count = count($industries_category ); 
		                $industry_last =  $industry_count -1 ;
		                foreach ( $industries_category as $key => $industry_category ) { 
		                  if ($key == $industry_last ) {
		                      echo $industry_category->name;
		                      }else{
		                      echo $industry_category->name.',';
		                      }
		                }
                    	?>
                    	</p>
                    	<p> Channel: 
                    	<?php 
                    		$channels_category = get_the_terms($post->ID,'channel');
			                $channel_count = count($channels_category);
			                $channel_last = $channel_count -1;
			                 foreach ( $channels_category as $key => $channel_category ) { 
			                  if ($key == $channel_last ) {
			                     echo $channel_category->name;
			                    }else{
			                     echo $channel_category->name.',';
			                    }
			                }
			            ?>
                    	</p>
                    </div>
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
  <!--
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
-->

        </div>
    </section>
    <script type="text/javascript">



    	jQuery(document).ready(function(){
    			var default_industry = jQuery("#hup_industry_list .default-filter").text();
    			var default_channel = jQuery("#hup_channel_list .default-filter").text();
    		jQuery('.taxonomy_filter').on("click", "li:not(.init)", function() {
    			
		        var industry_id = jQuery('#hup_industry_list li.selected').attr("value");
		        var channel_id = jQuery('#hup_channel_list .selected').attr("value");
		        jQuery(".hup-spin").addClass("hup-loading-spinner");
		        jQuery(".hup-show-result").hide();
		    	jQuery(".load_blogs").hide();
    			var str = {
					'action': 'my_ajax_func',
					'industry_id': industry_id,
					'channel_id' : channel_id
				};
				
    			jQuery.ajax({
                    url:"<?php echo admin_url("admin-ajax.php"); ?>",
                    type:"POST",
                	data: str, 
                	success: function(data){
                		jQuery(".hup-spin").removeClass("hup-loading-spinner");
                		jQuery(".hup-show-result").show();
                		jQuery(".hup-show-result").html(data);
                		jQuery(".hup_filter_clear").show();
                		jQuery(".hup_filter_clear").click(function(){
                			jQuery(".hup-show-result").hide();
                			jQuery(".load_blogs").show();
                			 jQuery("#hup_industry_list .init").text(default_industry);
                			 jQuery("#hup_channel_list .init").text(default_channel);
                			 jQuery(".hup_filter_clear").hide();
						});
			  		}

				});
			});

    	});

    	
    </script>

<?php get_footer(); ?>