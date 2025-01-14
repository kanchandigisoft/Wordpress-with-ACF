<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

get_header(); ?>
<section class="cream">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                <div class="col-xs-12 col-md-6 ">
                    <h1><?php the_field('header_one'); ?></h1>
                    <div class="sp-10"></div>
                    <p class="large"><?php the_field('header_two'); ?></p>
                    <div class="sp-20"></div>
                    <button SP7 class="large hup_price_button_scroll"><a href="#pricing">See Plans & Pricing</a></button> <div class="wd-20"></div><div class="sp-30 hide-sm"></div><?if(is_single(12164) || is_single(12223)){ echo '<span class="dropBlog">in partnership with<br><img src="/wp-content/uploads/2023/03/DropBlog.png"></span>'; }else{?><span class="inlinelogo shopifyexperts">Shopify Experts</span><?php } ?>
                    <div class="sp-60"></div>
                </div>
                

                    <!-- SITE SPEED -->
                    <?php if(is_product() && get_the_id() == 5647) { ?>
<div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">
                    <ul class="feature-list large">

                        <li>Smaller page size MB</li>
                        <li>Fewer file requests</li>
                        <li>Leverage browser caching</li>
                        <li>Lazy load images</li>
                        <li>Minify CSS & javascript</li>
                        <li>Optimize image sizes</li>
                        <li>App analysis and errors</li>
                    </ul>
                    <div class="sp-30"></div>

                    <?php } else if(is_product() && get_the_id() == 4664) { ?>
                  <div class="col-xs-12 col-md-6 pad-xs-25 pad-left-right">
                  <iframe src="https://www.videoask.com/f11ekil8t" allow="camera *; microphone *; autoplay *; encrypted-media *; fullscreen *; display-capture *;" width="100%" height="423px" style="border: none; border-radius: 24px"></iframe>
                  
                   <?php } else  { ?>
<div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">
                    <?php $image = get_field('header_image'); $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="">
            <div class="wrapper">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row between-xs bordertop">
                            <div class="col pad-xs-20 pad-top-bottom">
                                <p class="small">⚡ &nbsp;<?php the_field('header_small'); ?></p>
                            </div>
                            <div class="col pad-xs-20 pad-top-bottom end-xs">
                                <!-- INSTAGRAM -->
                                <?php if(is_product() && get_the_id() == 5509) { ?>
                                    <p class="small"><span class="inlinelogo instagram">Instagram</span></p><div class="sp-10 hide-sm"></div>
                                <?php } ?>
                                <!-- FACEBOOK ADS -->
                                <?php if(is_product() && get_the_id() == 4664) { ?>
                                    <p class="small"><span class="inlinelogo facebook">Facebook</span>&nbsp; + &nbsp;<span class="inlinelogo instagram">Instagram</span></p><div class="sp-10 hide-sm"></div>
                                <?php } ?>

                                <!-- SEO -->
                                <?php if(is_product() && get_the_id() == 5532) { ?>
                                    <p class="small"><span class="inlinelogo ahrefs">Ahrefs</span></p><div class="sp-10 hide-sm"></div>
                                </div>
                                <?php } ?>
                                <!-- Google Ads -->
                                <?php if(is_product() && get_the_id() == 5574) { ?>
                                    <p class="small"><span class="inlinelogo google">Google</span></p><div class="sp-10 hide-sm"></div>
                                </div>
                                <?php } ?>
                                <!-- Google Shopping -->
                                <?php if(is_product() && get_the_id() == 5589 || is_product() && get_the_id() == 8352) { ?>
                                    <p class="small"><span class="inlinelogo googleshopping">Google Shopping</span></p><div class="sp-10 hide-sm"></div>
                                </div>
                                <?php } ?>
                                <!-- Email -->
                                <?php if(is_product() && get_the_id() == 5595) { ?>
                                    <img src="https://wholedesignstudios.com/wp-content/uploads/2024/10/klaviyo-master-platinum-badge.webp" style="max-width: 139px;">
                                </div>
                                <?php } ?>
                                <!-- Sendfox -->
                                <?php if(is_product() && get_the_id() == 7327) { ?>
                                    <p class="small"><span class="inlinelogo sendfox">Sendfox</span></p><div class="sp-10 hide-sm"></div>
                                </div>
                                <?php } ?>
                                <!-- CRO -->
                                <?php if(is_product() && get_the_id() == 5623) { ?>
                                    <p class="small"><span class="inlinelogo googleopt">Google Optimize</span></p><div class="sp-10 hide-sm"></div>
                                </div>
                                <?php } ?>
                                <!-- SITE SPEED -->
                                <?php if(is_product() && get_the_id() == 5647) { ?>
                                    <p class="small"><span class="inlinelogo gtmetrix">Shopify site speed optimization service</span></p><div class="sp-10 hide-sm"></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="submenucontainer productpagemenu show-md" id="sticker">
        <div class="submenu white">
            <div class="wrapper breadcrumbs">
                <div class="row middle-xs between-xs pad-xs-10 pad-top-bottom">
                    <div class="col pad-xs-25 pad-left-right">

						<?php if( have_rows('page_nav') ): ?>

							<ul>

						<?php while ( have_rows('page_nav') ) : the_row(); ?>

							<li class=""><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>

						<?php endwhile; ?>

						<?php else : ?>

							</ul>

						<?php endif; ?>

                    </div>
                    <div class="col pad-xs-25 pad-left-right end-xs">
                    <div class="hup_ppc_audit_form_popup" style="display: none;">
                        <?php
                            //$ppc_form= get_field('popup_form_shortcode');
                            //echo do_shortcode($ppc_form);
                        ?>
                    </div>

                    <?php if( get_field('cta_header') || get_field('cta_header_link') ):?>
                        <button class="red hup_ppc_audit_form_button">
                            <?php
                                $cta_header_link = get_field('cta_header_link');
                                if(!empty($cta_header_link)){ ?>
                                    <a aa href="<?php echo get_field('cta_header_link');?>" ><?php the_field('cta_header'); ?>
                                <?php } else { ?>
                                    <!--a bb href="javascript:void(0)" ><?php //the_field('cta_header'); ?> </a-->
                                    <?php //echo do_shortcode('[convertkit_formtrigger form="1036458" text="Free Audit" background_color="#ef525b" text_color="#ffffff"]'); 
                                    if(is_product() && get_the_id() == 4664)
                                    {
                                    ?>   
                                    <a data-formkit-toggle="d61b5b0547" href="https://wds.ck.page/9a7b663062">Free Audit</a> 
                                    <?php }
                                    else
                                    {
                                    ?>
                                    <a data-formkit-toggle="d61b5b0547" href="https://wds.ck.page/d61b5b0547">Free Audit</a>
                                <?php }
                                 }
                            ?>
                        </button>
                    <?php endif;?>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative" id="1">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-top center-sm">
                <div class="col-xs-12 col-md-9 pad-md-40">
                    <h3 class="h2 letterspacing"><?php the_field('overview_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p><?php the_field('overview_description'); ?></p>
                </div>
            </div>
        </div>
       <!-- UGC --> 
                <?php if(is_product() && get_the_id() == 13274) { ?>
                    <div class="wrapper">

 <div class="row pad-xs-80 pad-bottom center-sm" style="padding: 0 80px 80px 80px;"> 

  <div class="col-xs-12 col-md-12 pad-xs-25">
                     

                <img src="https://wholedesignstudios.com/wp-content/uploads/2024/10/ugc-ex.jpg" />

</div>
 </div>


            <div class="row pad-xs-80 pad-bottom center-sm" style="padding: 0 80px 80px 80px;"> 




                   <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                     
   <script src="https://fast.wistia.com/embed/medias/9frwgcjxzu.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_embed wistia_async_9frwgcjxzu seo=true videoFoam=false" style="height:569px;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/9frwgcjxzu/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div>


                </div>
              
               <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">

                <script src="https://fast.wistia.com/embed/medias/bn4h5jg16t.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_embed wistia_async_bn4h5jg16t seo=true videoFoam=false" style="height:569px;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/bn4h5jg16t/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div>

                </div>
               <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">

  <script src="https://fast.wistia.com/embed/medias/7cggdw4q8k.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_embed wistia_async_7cggdw4q8k seo=true videoFoam=false" style="height:569px;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/7cggdw4q8k/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div>

                </div>
              <p><a target="_blank" style="text-decoration:underline" href="https://wholedesignstudios.com/user-generated-content-examples-for-shopify-ugc/">See More UGC Examples Here</a></p>
             </div> 
        </div>
                <?php } ?>
      
        <a href="#3" class="scrolldownarrow"></a>
    </section>
    <section class="green white-text">
        <div class="wrapper">
            <div class="row pad-xs-25 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-md-9 pad-xs-25 pad-md-40">
                    <h6 class="nomarginbottom"><?php the_field('overview_pitch'); ?></h6>
                </div>
            </div>
        </div>
    </section>
    <?php if(is_product() && get_the_id() == 5623) { ?>


    <section class="relative" id="2">
        <div class="wrapper">
            <div class="row pad-xs-30 pad-sm-60 pad-top-bottom center-sm">
                <div class="col-xs-12 col-md-9 col-lg-8 pad-xs-25 pad-md-40">
                    <h3><?php the_field('how_it_work_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p><?php the_field('how_it_work_description'); ?></p>
                </div>
            </div>
            <div class="row pad-xs-0 pad-top-bottom center-xs">
                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>1. Business Objectives</strong></p>
                    <p>We understand what your business looks like now and where you want to be in 3 months from now.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>2. Data Creation & Collection</strong></p>
                    <p>We collect data from a number of different sources including qualitative and quantitative data. We create missing data.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>3. Data Analysis</strong></p>
                    <p>We analyse the data and look for patterns between data sources. The data collected informs ideas for website changes to A/B test.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>4. Hypothesis Creation</strong></p>
                    <p>We develop hypotheses for A/B tests and prioritize them based on their cost, time and difficulty to implement.</p>
                </div>
            </div>
            <div class="row pad-xs-0 pad-top-bottom center-xs">
                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>5. Design</strong></p>
                    <p>For grow plans we create wireframes and finally UI designs, you get 5 hours design time per test included.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>6. Development</strong></p>
                    <p>For grow plans we code the test variation into your theme, you get 5 hours development time per test included.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>7. A/B Testing</strong></p>
                    <p>We plan and implement the test and software. We run the test until statistical significance is reached.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-25">
                    <p><strong>8. Learning & Improving</strong></p>
                    <p>We gain new learning from the test and develop or iterate on value proposition. We then move back to step 2.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
    <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
        </div>
        </section>
    <section class="relative" id="2">
        <div class="wrapper">
            <div class="row pad-xs-30 pad-sm-60 pad-top-bottom center-sm">
                <div class="col-xs-12 col-md-9 col-lg-8 pad-xs-25 pad-md-40">
                    <h3>Your 3-Month Service Plan</h3>
                    <p>CRO is a 3-month minimum engagement. Within the first quarter we run 2 A/B tests.</p>
                </div>
            </div>
            <div class="row pad-xs-0 pad-top-bottom center-xs">
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <p><strong>Month 1</strong></p>
                    <p>Week 1: Google Analytics Audit<br/>
                    Week 2: Data Collection<br/>
                    Week 3: Data Analysis<br/>
                    Week 4: Conversion Report & Roadmap</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <p><strong>Month 2</strong></p>
                    <p>Build A/B Test #1<br/>
                    Quality Assurance A/B Test #1<br/>
                    Run A/B Test #1<br/>
                    Reporting A/B Test #1</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <p><strong>Month 3</strong></p>
                    <p>Build A/B Test #2<br/>
                    Quality Assurance A/B Test #2<br/>
                    Run A/B Test #2<br/>
                    Reporting A/B Test #2</p>
                </div>
            </div>

    <?php } else { ?>


    <section class="relative" id="2">
        <div class="wrapper">
            <div class="row pad-xs-30 pad-sm-60 pad-top-bottom center-sm">
                <div class="col-xs-12 col-md-9 col-lg-8 pad-xs-25 pad-md-40">
                    <h3><?php the_field('how_it_work_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p><?php the_field('how_it_work_description'); ?></p>
                </div>
            </div>
            <div class="row pad-xs-0 pad-top-bottom center-xs">
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">


                    <?php $image = get_field('how_it_works_images_1'); $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    <div class="sp-30"></div>
                    <p><?php the_field('how_it_works_image_text_1'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">


                    <?php $image = get_field('how_it_works_images_2'); $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    <div class="sp-30"></div>
                    <p><?php the_field('how_it_works_image_text_2'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">


                    <?php $image = get_field('how_it_works_images_3'); $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>


                    <div class="sp-30"></div>
                    <p><?php the_field('how_it_works_image_text_3'); ?></p>
                </div>
            </div>

            <?php if( get_field('how_it_works_image_text_4') ): ?>
            <div class="row pad-xs-0 pad-top-bottom center-xs">
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img class="image_border" src="<?php the_field('how_it_works_images_4'); ?>" />
                    <div class="sp-30"></div>
                    <p><?php the_field('how_it_works_image_text_4'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img class="image_border" src="<?php the_field('how_it_works_images_5'); ?>" />
                    <div class="sp-30"></div>
                    <p><?php the_field('how_it_works_image_text_5'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img class="image_border" src="<?php the_field('how_it_works_images_6'); ?>" />
                    <div class="sp-30"></div>
                    <p><?php the_field('how_it_works_image_text_6'); ?></p>
                </div>
            </div>
            <?php endif; ?>

        <?php } ?>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <?php if( get_field('how_it_works_sub_header_1') || get_field('how_it_works_sub_para_1')): ?>
                
                <div class="row pad-xs-20 pad-top-bottom">
                    <div class="col-xs-12 col-md-4">
                        <h3><?php the_field('how_it_works_sub_header_1'); ?></h3>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="rte"><?php the_field('how_it_works_sub_para_1'); ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr/>
                    </div>
                </div>
            <?php endif;?>

            <?php if( get_field('how_it_works_sub_header_2') || get_field('how_it_works_sub_para_2')): ?>
                <div class="row pad-xs-20 pad-top-bottom">
                    <div class="col-xs-12 col-md-4">
                        <h3><?php the_field('how_it_works_sub_header_2'); ?></h3>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="rte"><?php the_field('how_it_works_sub_para_2'); ?></div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-xs-12">
                        <hr/>
                    </div>
                </div>
            <?php endif;?>

            <?php if( get_field('how_it_works_sub_header_3') ): ?>
                <div class="row pad-xs-20 pad-top-bottom">
                    <div class="col-xs-12 col-md-4">
                        <h3><?php the_field('how_it_works_sub_header_3'); ?></h3>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="rte"><?php the_field('how_it_works_sub_para_3'); ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr/>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="row pad-xs-20 pad-top-bottom" id="3">
                <div class="col-xs-12">
                    <h3><?php the_field('how_it_works_section_2'); ?></h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-01.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_1'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_1'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-02.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_2'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_2'); ?></p>
                </div>
     
                <?php if(is_product() && get_the_id() == 8917 || get_the_id() == 12164 || get_the_id() == 12223 ) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>

                <!-- INSTAGRAM -->
                <?php if(is_product() && get_the_id() == 5509) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
                <!-- FACEBOOK ADS -->
                <?php if(is_product() && get_the_id() == 4664) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-s.png" id="two_week"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
              <!-- UGC --> 
                <?php if(is_product() && get_the_id() == 13274) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="https://wholedesignstudios.com/wp-content/uploads/2024/01/ugc-4-weeks.png" id="two_week"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
                <!-- SEO -->
                <?php if(is_product() && get_the_id() == 5532) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
                <!-- Google Ads -->
                <?php if(is_product() && get_the_id() == 5574) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-s.png" id="two_week" />
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
                <!-- Google Shopping -->
                <?php if(is_product() && get_the_id() == 5589 || is_product() && get_the_id() == 8352 ) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-s.png" id="two_week" />
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
                <!-- Email -->
                <?php if(is_product() && get_the_id() == 5595) { ?>
                     <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
                <!-- CRO -->
                <?php if(is_product() && get_the_id() == 5623) { ?>
                     <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
              
                <?php } ?>
               <!-- IG GROWTH -->
                <?php if(is_product() && get_the_id() == 10716) { ?>
                     <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
              
            
              
                <!-- SITE SPEED -->
                <?php if(is_product() && get_the_id() == 5647) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                    <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                </div>
                <?php } ?>
	            <?php if(is_product() && get_the_id() == 8518) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                        <div class="sp-30"></div>
                        <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                        <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                    </div>
	            <?php } ?>
                <?php if(is_product() && get_the_id() == 9296) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                        <div class="sp-30"></div>
                        <h6><?php the_field('how_it_works_section_2_sub_header_3'); ?></h6>
                        <p class="xs"><?php the_field('how_it_works_section_2_sub_para_3'); ?></p>
                    </div>
	            <?php } ?>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-sm-6 pad-xs-25">
                    <h6><?php the_field('question_1'); ?></h6>
                    <p class="xs"><?php the_field('answer_1'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 pad-xs-25">
                    <h6><?php the_field('question_2'); ?></h6>
                    <p class="xs"><?php the_field('answer_2'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 pad-xs-25">
                    <h6><?php the_field('question_3'); ?></h6>
                    <p class="xs"><?php the_field('answer_3'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 pad-xs-25">
                    <h6><?php the_field('question_4'); ?></h6>
                    <p class="xs"><?php the_field('answer_4'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12">
                    <h3>Benefits of working with Whole.</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-03.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6>Everything Managed For You</h6>
                    <p class="xs"><?php the_field('benefit_1'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-04.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6>Weekly Updates & Monthly Reports</h6>
                    <p class="xs"><?php the_field('benefit_2'); ?></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-05.svg" class="wd-80"/>
                    <div class="sp-30"></div>
                    <h6>Transparent Pricing</h6>
                    <p class="xs"><?php the_field('benefit_3'); ?></p>
                </div>
                <div class="sp-20"></div>
            </div>
        </div>
    </section>


        <!-- INSTAGRAM -->
        <?php if(is_product() && get_the_id() == 5509) { ?>

        <section class="lightgrey" id="4">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify Instagram Marketing Case Studies</h2>
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
            'terms'    => 'instagram',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


        <?php } ?>
        <!-- FACEBOOK ADS -->
        <?php if(is_product() && get_the_id() == 4664) { ?>

        <section id="4" class="lightgrey">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify Facebook Ads Case Studies</h2>
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
            'terms'    => 'facebook-ads',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


        <?php } ?>
        <!-- SEO -->
        <?php if(is_product() && get_the_id() == 5532 || get_the_id() == 12164) { ?>

        <section class="lightgrey" id="4">
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


    <?php } ?>
    <!-- Google Ads -->
    
    <?php if(is_product() && get_the_id() == 5574) { ?>

       <section class="lightgrey" id="4">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify Google Ads Case Studies</h2>
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
                    'terms'    => 'google-ads',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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
    <?php } ?>

    <!-- black friday -->
    <?php if(is_product() && get_the_id() == 9296 && false) { // hide for now ?>
        <section class="lightgrey" id="4">
            <div class="wrapper">
                <div class="sp-40"></div>
                <div class="col-xs-12 pad-sm-30">
                    <div class="row between-xs middle-xs">
                        <div class="col">
                            <h2>BFCM Case Studies</h2>
                        </div>
                        <div class="col text-right">
                            <a href="/black-friday/" class="all">All</a>
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
                        'terms'    => 'black-friday',
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
                                    // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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
        <?php } ?>




        <!-- Google Shopping -->
        <?php if(is_product() && get_the_id() == 5589) { ?>

            <section  id="4" class="lightgrey">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify Google Ads Case Studies</h2>
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
            'terms'    => 'google-ads',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


        <?php } ?>
        <!-- Email -->
        <?php if(is_product() && get_the_id() == 5595) { ?>

        <section class="lightgrey" id="4">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify Email Marketing Case Studies</h2>
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
            'terms'    => 'email',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


        <?php } ?>
        <!-- CRO -->
        <?php if(is_product() && get_the_id() == 5623) { ?>

           <section class="lightgrey" id="4">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                               <h2>Shopify CRO Case Studies</h2>
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
            'terms'    => 'cro',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


        <?php } ?>
     <!-- SITE SPEED -->
        <?php if(is_product() && get_the_id() == 5647) { ?>

   <section class="lightgrey" id="4">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                          <h2>Shopify Speed Optimization Case Studies</h2>
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
              'terms'    => 'speed-optimization',
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
                                // Retrieve terms of the "industry" taxonomy
                            $industry_terms = get_the_terms( get_the_ID(), 'industry' ); 
                            if ( $industry_terms && ! is_wp_error( $industry_terms ) ) {
                                $industry_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $industry_terms );
                                echo implode( ', ', $industry_values );
                            }

                            // Retrieve terms of the "channel" taxonomy
                            $channel_terms = get_the_terms( get_the_ID(), 'channel' ); 
                            if ( $channel_terms && ! is_wp_error( $channel_terms ) ) {
                                $channel_values = array_map( function( $term ) {
                                    return $term->name;
                                }, $channel_terms );
                                if ( ! empty( $industry_values ) ) {
                                    echo ', ';
                                }
                                echo implode( ', ', $channel_values );
                            }
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


        <?php } ?>


    <section id="logos_wrapper">
    <div class="wrapper">
        <div class="row">
            <div class="sp-30"></div>
            <div class="col-xs-12">

                <?php if( have_rows('client_logos','option') ): ?>

                <div class="carousel overflow" id="client-carousel-3">

                        <?php while ( have_rows('client_logos','option') ) : the_row(); ?>

                            <div class="carousel-cell col-xs-6 col-sm-4 col-md-3 col-lg-5th pad-xs-10">

                                    <?php $image = get_sub_field('client_logo'); $size = 'full';
                                     if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                            </div>

                        <?php endwhile; ?>

                    <?php else : ?>

                    </div>

                    <?php endif; ?>

            </div>
            <div class="sp-30"></div>
        </div>
    </div>
</section>

    <?php if(is_product() && get_the_id() == 5623) { ?>

    <section class="lightgrey">
        <div class="wrapper">
            <div class="sp-20"></div>
            <div class="sp-40 show-sm"></div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25 show-md">
                    <h6>What is a good ecommerce conversion rate?</h6>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6 class="hide-md">How long will it take to be profitable?</h6>
                    <p class="xs">The truth is there is no real rule of thumb. It depends on location, industry, traffic source and quality just to begin with. Every business is different. We shoot to improve your conversion rate 10% month over month, compounding. So if you are sitting at 2% right now, after a 3 months engagement we want to get you to 2.5% to 3%.</p>
                </div>
            </div>
        </div>
    </section>

    <?php } else { ?>

    <!-- SITE SPEED -->
    <?php if(is_product() && get_the_id() == 5647) { ?>

    <?php } else { ?>

    <?php if(get_field('profit_description')) : ?>
        <section class="lightgrey">
            <div class="wrapper">
                <div class="sp-20"></div>
                <div class="sp-40 show-sm"></div>
                <div class="row pad-xs-20 pad-top-bottom">
                    <div class="col-xs-12 col-md-6 pad-xs-25 show-md">
                        <h6>How long will it take to be profitable?</h6>
                    </div>
                    <div class="col-xs-12 col-md-6 pad-xs-25">
                        <h6 class="hide-md">How long will it take to be profitable?</h6>
                        <p class="xs"><?php the_field('profit_description'); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr/>
                    </div>
                </div>
                <div class="row pad-xs-20 pad-top-bottom">
                    <div class="col-xs-12 col-sm-6 pad-xs-25">
                        <h6>i. <?php the_field('profit_sub_header_1'); ?></h6>
                        <p class="xs"><?php the_field('profit_sub_para_1'); ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 pad-xs-25">
                        <h6>ii. <?php the_field('profit_sub_header_2'); ?></h6>
                        <p class="xs"><?php the_field('profit_sub_para_2'); ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 pad-xs-25">
                        <h6>iii. <?php the_field('profit_sub_header_3'); ?></h6>
                        <p class="xs"><?php the_field('profit_sub_para_3'); ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 pad-xs-25">
                        <h6>iv. <?php the_field('profit_sub_header_4'); ?></h6>
                        <p class="xs"><?php the_field('profit_sub_para_4'); ?>.</p>
                    </div>
                </div>
                <div class="sp-20"></div>
                <div class="sp-40 show-sm"></div>
            </div>
        </section>
    <?php endif;?>

      <?php } ?>

    <?php } ?>


 <section class="black white-text overflow">
        <div class="wrapper">
            <div class="sp-30"></div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>About Whole Design Studios</h6>
                    <?php if(is_product() && get_the_id() == 12223) {  ?>
                    <p>Founded in 2012, Whole Design Studios is a design & marketing agency focused on growing online businesses. We work with over 100 brands monthly. Our team of 35+ designers & marketers are experts in SEO, traffic, and revenue growth.</p>
                    <?php } else { ?>    
                    <p>Founded in 2012 Whole Design Studios is a Shopify design & marketing agency. Focused on growing ecommerce businesses. We work with 100+ brands monthly. Our team of 35+ designers & marketers are experts in Shopify growth.</p>
                    <?php } ?>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <div class="sp-50 show-md"></div>
                    <ul class="feature-list">
                        <li>Productized services</li>
                        <li>Monthly cancel anytime, transparent pricing</li>
                        <li>Scalable plan tiers to grow with you</li>
                        <li>No hidden fees or hourly rates</li>
                        <li>Modern tooling and robust standard operating procedures</li>
                    </ul>
                </div>
            </div>
            <div class="sp-30"></div>




                  <?php if( have_rows('team_image', 'option') ): ?>

         <div class="carousel overflowvisible" id="about-carousel-3">

            <?php while( have_rows('team_image', 'option') ): the_row(); ?>

                <div class="carousel-cell col-xs-3 col-md-2 col-lg-9th pad-xs-0">

                    <div class="about-profile" >

                        <?php $image = get_sub_field('image','option'); $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    </div>

                   <div class="about-profile" >

                        <?php $image = get_sub_field('image_two','option'); $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    </div>


                </div>


              <?php endwhile; ?>

            </div>

        <?php endif; ?>


            <div class="sp-30"></div>
            <div class="row pad-xs-20 pad-top-bottom middle-xs">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-map.svg"/>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>Your global agency</h6>
                    <p>We are a fully remote business founded in London, UK. We work with brands from the US, Australia, UK, EU and more. Our team works from 10+ countries across the world and originates from the US, UK & EU.</p>
                </div>
            </div>
             <div class="sp-30"></div>
        </div>
    </section>

      <!-- SITE SPEED -->
    <?php if(is_product() && get_the_id() == 5647) { ?>

    <?php } elseif( get_the_id() != 9296 ) { ?>

	<section class="green white-text relative">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 col-lg-8 pad-md-60">
                    <h3 class="h2 letterspacing">ROI is at the root of the decisions and advice we present</h3>
                    <div class="sp-10"></div>
                    <?php if(get_the_id() == 12223) { ?>
                    <p>As a business owner or marketer, you have to choose which sales channels or processes to invest in, and at what time. If you are unsure of what to focus on for your business, talk with our CEO, Giles to get a personalized recommendation and free consultation.</p>
                    <?php } else { ?>
                        <p>As an e-commerce business owner or marketer, you have to choose which sales channels or processes to invest in, and at what time. If you are unsure of what to focus on for your business, talk with our CEO, Giles to get a personalized recommendation and free consultation.</p>
                    <?php } ?>    
                </div>
            </div>
        </div>
         <a href="#5" class="scrolldownarrow"></a>
    </section>

   <?php } ?>

    <!-- INSTAGRAM -->
    <?php if(is_product() && get_the_id() == 5509) { ?>

      <section id="pricing">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row bottom-xs pad-md-25 pad-top-bottom center-xs">
                <div class="sp-40"></div>
                <div class="sp-40 hide-md"></div>
                <div class="col-xs-12 col-sm-8 pad-xs-30">
                    <div class="row between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">
                            <?php
                        			$variable_product= new WC_Product_Variation(5511);
                        			$lite_plan= $variable_product ->regular_price;
                        	?>
                        	<?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">
                            <?php
                        			$variable_product= new WC_Product_Variation(5512);
                        			$grow_plan= $variable_product ->regular_price;
                        	?>
                        	 <?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap"  value ="pro_plan" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Pro Plan</h5><p class="white-text">
                            	    <?php
                        			$variable_product= new WC_Product_Variation(5513);
                        			$pro_plan= $variable_product ->regular_price;
                        	?>

                            <?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                             <label>
                                <input class="with-gap" value="USD" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap"  value="GBP" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" value="AUD" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" value="EUR" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                            <label>
                                <input class="with-gap" value="CAD" name="currency" type="radio"  />
                                <span>CAD</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <?php
                        			$variable_product= new WC_Product_Variation(5511);
                        			$lite_plan= $variable_product ->regular_price;
                        	?>
                            <p class="white-text"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5511">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <?php
                        			$variable_product= new WC_Product_Variation(5512);
                        			$grow_plan= $variable_product ->regular_price;
                        	?>
                            <p class="white-text"> <?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5512">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header pro_plan">
                            <h5 class="nomarginbottom">Pro Plan</h5>
                            <div class="sp-5"></div>
                            <?php
                        			$variable_product= new WC_Product_Variation(5513);
                        			$pro_plan= $variable_product ->regular_price;
                        	?>
                            <p class="white-text"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5513">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing hup_pricing_table">
                        <div class="hup_lite_plan">
                            <table>
                                <tr><td>Manual liking</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual view stories</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual comment responses</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual follow & unfollow</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Find influencers with Caro app</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Schedule & post your content</td><td><span class="icon-cross">No</span></td></tr>


                                <tr><td>We write your captions</td><td><span class="icon-cross">No</span></td></tr>

                                <tr><td>Google Analytics set up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly growth reports</td><td><span class="icon-tick">Yes</span></td></tr>

                                <tr><td>Email support</td><td><span class="">1 time per week</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="icon-cross">No</span></td></tr>
                            </table>
                        </div>

                        <div class="hup_grow_plan">
                            <table>
                                <tr><td>Manual liking</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual view stories</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual comment responses</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual follow & unfollow</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Find influencers with Caro app</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Schedule & post your content</td><td><span class="icon-tick">Yes</span></td></tr>


                                <tr><td>We write your captions</td><td><span class="icon-cross">No</span></td></tr>

                                <tr><td>Google Analytics set up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly growth reports</td><td><span class="icon-tick">Yes</span></td></tr>

                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="icon-cross">No</span></td></tr>
                            </table>
                        </div>

                        <div class="hup_pro_plan">
                            <table>
                                <tr><td>Manual liking</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual view stories</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual comment responses</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Manual follow & unfollow</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Find influencers with Caro app</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Schedule & post your content</td><td><span class="icon-tick">Yes</span></td></tr>


                                <tr><td>We write your captions</td><td><span class="icon-tick">Yes</span></td></tr>

                                <tr><td>Google Analytics set up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly growth reports</td><td><span class="icon-tick">Yes</span></td></tr>

                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="icon-cross">No</span></td></tr>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row middle-xs pad-md-25 pad-top-bottom">
                <div class="col-xs-12 col-md-8 pad-xs-25">
                    <p class="xs black-text">
                        <span class="perk">
                            <span class="icon-tick"></span> No hourly rates
                        </span>
                        <span class="perk">
                            <span class="icon-tick"></span> No hidden fees
                        </span>
                        <span class="perk">
                            <span class="icon-tick"></span> Cancel anytime
                        </span>
                    </p>
                </div>
                <div class="col-xs-12 col-md-4 lite_plan pricing_footer lite_plan active">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5511">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5512">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 pro_plan pricing_footer pro_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5513">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h3>Make Instagram shoppable</h3>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="rte">

                        <p>We all know that more followers on Instagram doesn’t = sales. That’s why we recommend to use a shoppable gallery app like FourSixty or Snapppt or native product tagging.</p>

<p>This allows you to make your Instagram shoppable. We create a new page on your Shopify store called ‘Shop Instagram’ and link to this from your Instagram profile. Or with native tagging, connect your product feed from Facebook to Instagram and start tagging.</p>

<p>This is an optional add-on service, <a target="_blank" href="/instagram-product-tagging-service/">learn more here.</a></p>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <?php } ?>
    <!-- FACEBOOK facebook-ad-management-service -->
    <?php if(is_product() && get_the_id() == 4664) { ?>

        <section id="pricing" class="price-table" >
            <div class="wrapper">
                <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                    <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                        <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                        <div class="sp-10"></div>
                        <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                    </div>
                </div>
                <div class="row center-xs">
                    <div class="col-sm-2 col-xs-4"></div>
                    <div class="col-sm-8 col-xs-4">
                        <div class="between-xs" id="budget-slider">
                           
                         
                            <label>
                                <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                                <div class="item">Pro</div>
                            </label>
                            <label>
                                <input class="with-gap" value="business_plan" name="budget" type="radio"  />
                                <div class="item">Business</div>
                            </label>
                             <label>
                                <input class="with-gap" value="enterprise_plan" name="budget" type="radio"  />
                                <div class="item ">Enterprise</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-4 right pad-xs-0">
                        <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                    </div>
                </div>

                <div class="row no-gutters mt-50">
           

                    <?php
                        $variable_product= new WC_Product_Variation(7545);
                        $pro_plan= $variable_product ->regular_price;
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="price-box" id="pro_plan">
                            <h4 class="plan-title">Pro Plan</h4>
                            <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                            <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                            <h5 class="nomarginbottom">Monthly ad spend</h5>
                            <div class="ads-spend">2000-5000</div>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7545">Add to Cart</a></button>
                        </div>
                    </div>

                    <?php
                        $variable_product= new WC_Product_Variation(7546);
                        $business_plan= $variable_product ->regular_price;
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="price-box" id="business_plan">
                            <h4 class="plan-title">Business Plan</h4>
                            <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                            <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                            <h5 class="nomarginbottom">Monthly ad spend</h5>
                            <div class="ads-spend">5000-10000</div>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7546">Add to Cart</a></button>
                        </div>
                    </div>

                    <?php
                        $variable_product= new WC_Product_Variation(10505);
                        $business_plan= $variable_product ->regular_price;
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="price-box" id="enterprise_plan">
                            <h4 class="plan-title">Enterprise Plan</h4>
                            <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                            <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                            <h5 class="nomarginbottom">Monthly ad spend</h5>
                            <div class="ads-spend">10000-25000</div>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10505">Add to Cart</a></button>
                        </div>
                    </div>


                </div>

                <div class="row no-gutters mt-30 align-items-center">
                    <div class="col-md-8 col-xs-12">
                        <div class="note"> <span class="icon-tick">Yes</span>Google Shopping, Search & Display Ad Management Included as Standard</div>
                    </div>
                    <div class="col-md-4 col-xs-12 right">
                        <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                    </div>
                </div>

                <div class="row pricing hup_pricing_table">
                    <div class="hup_lite_plan">
                        <table>

                            <tr><td>One time set up fee</td><td><span class="hup_currency_as_radio"></span></td></tr>
                            <tr><td>Google shopping & search ads management included</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Account set up in Facebook ads manager</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Export customer email list to build custom audience</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Plan campaigns and agree on ROAS goal & projected profits</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Create, design, set up & optimize campaigns & creatives</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Set up dynamic product retargeting ads</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Basic Google Analytics audit & set up</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Install Facebook tracking pixel</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Ad design for first campaigns</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>30-Minute video calls</td><td><span class="">One per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>

                        <div class="hup_grow_plan">
                        <table>
                            <tr><td>One time set up fee</td><td><span class="hup_currency_as_radio"></span></td></tr>
                            <tr><td>Google shopping & search ads management included</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Account set up in Facebook ads manager</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Export customer email list to build custom audience</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Plan campaigns and agree on ROAS goal & projected profits</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Create, design, set up & optimize campaigns & creatives</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Set up dynamic product retargeting ads</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Basic Google Analytics audit & set up</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Install Facebook tracking pixel</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Ad design for first campaigns</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>

                        <div class="hup_pro_plan">
                        <table>
                            <tr><td>One time set up fee</td><td><span class="hup_currency_as_radio"></span></td></tr>
                            <tr><td>Google shopping & search ads management included</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Account set up in Facebook ads manager</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Export customer email list to build custom audience</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Plan campaigns and agree on ROAS goal & projected profits</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Create, design, set up & optimize campaigns & creatives</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Set up dynamic product retargeting ads</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Basic Google Analytics audit & set up</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Install Facebook tracking pixel</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Ad design for first campaigns</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>

                    <div class="hup_business_plan">
                        <table>

                            <tr><td>One time set up fee</td><td><span class="hup_currency_as_radio"></span></td></tr>
                            <tr><td>Google shopping & search ads management included</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Account set up in Facebook ads manager</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Export customer email list to build custom audience</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Plan campaigns and agree on ROAS goal & projected profits</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Create, design, set up & optimize campaigns & creatives</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Set up dynamic product retargeting ads</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Basic Google Analytics audit & set up</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Install Facebook tracking pixel</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Ad design for first campaigns</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>
                </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

	<?php } ?>
 <!-- UGC -->
    <?php if(is_product() && get_the_id() == 13274) { ?>

        <section id="pricing" class="price-table" >
            <div class="wrapper">
                <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                    <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                        <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                        <div class="sp-10"></div>
                        <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                    </div>
                </div>
                <div class="row center-xs">
                    <div class="col-sm-2 col-xs-4"></div>
                    <div class="col-sm-8 col-xs-4">
                        <div class="between-xs" id="budget-slider">
                           
                            <label>
                                <input class="with-gap " value="grow_plan" name="budget" type="radio" checked />
                                <div class="item active">Grow</div>
                            </label>
                            <label>
                                <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                                <div class="item">Pro</div>
                            </label>
                            <label>
                                <input class="with-gap" value="business_plan" name="budget" type="radio"  />
                                <div class="item">Business</div>
                            </label>
                          
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-4 right pad-xs-0">
                        <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                    </div>
                </div>

                <div class="row no-gutters mt-50">
          

                    <?php
                        $variable_product= new WC_Product_Variation(13280);
                        $grow_plan= $variable_product ->regular_price;
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="price-box active" id="grow_plan">
                            <h4 class="plan-title">Grow Plan</h4>
                            <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><!--<span class="plan-price-period">/ month</span>--></p>
                           
                            <h5 class="nomarginbottom">UGC PER MONTH</h5>
                              <div class="ads-spend">3 Creators X 3 Hooks = 9 Videos <br>
                              3 creators X 2 shoots = 6 photos</div>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=13280">Add to Cart</a></button>
                        </div>
                    </div>

                    <?php
                        $variable_product= new WC_Product_Variation(13281);
                        $pro_plan= $variable_product ->regular_price;
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="price-box" id="pro_plan">
                            <h4 class="plan-title">Pro Plan</h4>
                            <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><!--<span class="plan-price-period">/ month</span>--></p>
                          
                            <h5 class="nomarginbottom">UGC PER MONTH</h5>
                              <div class="ads-spend">6 Creators X 3 Hooks = 18 Videos<br>
                              3 creators X 2 shoots = 6 photos</div>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=13281">Add to Cart</a></button>
                        </div>
                    </div>

                    <?php
                        $variable_product= new WC_Product_Variation(13282);
                        $business_plan= $variable_product ->regular_price;
                    ?>
                    <div class="col-md-3 col-xs-12">
                        <div class="price-box" id="business_plan">
                            <h4 class="plan-title">Business Plan</h4>
                            <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><!--<span class="plan-price-period">/ month</span>--></p>
                         
                            <h5 class="nomarginbottom">UGC PER MONTH</h5>
                            <div class="ads-spend">9 Creators X 3 Hooks = 27 Videos
                            3 creators X 2 shoots = 6 photos</div>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=13282">Add to Cart</a></button>
                        </div>
                    </div>

                   


                </div>

                <div class="row no-gutters mt-30 align-items-center">
                    <div class="col-md-8 col-xs-12">
                        <div class="note"> <span class="icon-tick">Yes</span>UGC Brief Creation, Creator Sourcing & Video Editing Included</div>
                    </div>
                    <div class="col-md-4 col-xs-12 right">
                        <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                    </div>
                </div>

                <div class="row pricing hup_pricing_table">
                    <div class="hup_lite_plan">
                        <table>
                          <tr><td>UGC Brief Ideation & Writing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Creator Sourcing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Video Editing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>All Creator Fees</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>30-Minute video calls</td><td><span class="">2 per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>

                        <div class="hup_grow_plan">
                      <table>
                          <tr><td>UGC Brief Ideation & Writing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Creator Sourcing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Video Editing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>All Creator Fees</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>30-Minute video calls</td><td><span class="">2 per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>

                        <div class="hup_pro_plan">
                      <table>
                          <tr><td>UGC Brief Ideation & Writing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Creator Sourcing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Video Editing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>All Creator Fees</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>30-Minute video calls</td><td><span class="">2 per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>

                    <div class="hup_business_plan">
                       <table>
                          <tr><td>UGC Brief Ideation & Writing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Creator Sourcing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>Video Editing</td><td><span class="icon-tick">Yes</span></td></tr>
                            <tr><td>All Creator Fees</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                          <tr><td>30-Minute video calls</td><td><span class="">2 per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                    </div>
                </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

	<?php } ?>
    <!-- SEO shopify-seo-services -->
    <?php if(is_product() && get_the_id() == 5532 || get_the_id() == 12164 || get_the_id() == 12223) { ?>

    <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <?php if(get_the_id() == 12164 || get_the_id() == 12223){ ?>
                    <h3 class="h2 letterspacing dropBlogHead"><span><?php the_field('pricing_header'); ?></span><img src="/wp-content/uploads/2023/03/DropBlog.png"></h3>
                    <?php } else { ?>
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <?php } ?>    
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <div class="item active">Lite</div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <div class="item">Grow</div>
                        </label>
                        <label>
                            <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                            <div class="item">Pro</div>
                        </label>
                        <label>
                            <input class="with-gap"  value="business_plan" name="budget" type="radio"  />
                            <div class="item">Business</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
                <?php
                if(get_the_id() == 12164 || get_the_id() == 12223)
                  {
                    $variable_product= new WC_Product_Variation(12165);
                    $lite_plan= $variable_product ->regular_price;
                    $lite_sale_price  = $variable_product ->sale_price;
                    $liteCartId = 12165;
                  }
                  else
                  {
                    $variable_product= new WC_Product_Variation(5549);
                    $lite_plan= $variable_product ->regular_price;
                    $liteCartId = 5549;
                  }
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">Lite Plan</h4>
                        <?php if($lite_sale_price && $lite_plan){ ?>
                            <p class="setup_fee plan-price"><span class="plan-price-number"><strike style="color:#cccccc;"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?></strike><br> <?php echo get_woocommerce_currency_symbol(); echo $lite_sale_price; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } else { ?> 
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                         <?php } ?>
        
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php echo $liteCartId; ?>">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                if(get_the_id() == 12164 || get_the_id() == 12223)
                  {
                    $variable_product= new WC_Product_Variation(12166);
                    $grow_plan= $variable_product ->regular_price;
                    $gro_sale_price  = $variable_product ->sale_price;
                    $growCartId = 12166;
                  }
                  else
                  {
                    $variable_product= new WC_Product_Variation(5550);
                    $grow_plan= $variable_product ->regular_price;
                    $growCartId = 5550;
                  }  
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="grow_plan">
                        <h4 class="plan-title">Grow Plan</h4>
                        <?php if($gro_sale_price && $grow_plan){ ?>
                            <p class="setup_fee plan-price"><span class="plan-price-number"><strike style="color:#cccccc;"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?></strike><br> <?php echo get_woocommerce_currency_symbol(); echo $gro_sale_price; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } else { ?> 
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } ?>
                     
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php echo $growCartId; ?>">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                if(get_the_id() == 12164 || get_the_id() == 12223)
                  {
                    $variable_product= new WC_Product_Variation(12168);
                    $pro_plan= $variable_product ->regular_price;
                    $pro_sale_price  = $variable_product ->sale_price;
                    $proCartId = 12168;
                  }
                  else
                  {
                    $variable_product= new WC_Product_Variation(5551);
                    $pro_plan= $variable_product ->regular_price;
                    $proCartId = 5551;
                  }
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="pro_plan">
                        <h4 class="plan-title">Pro Plan</h4>
                        <?php if($pro_sale_price && $pro_plan){ ?>
                            <p class="setup_fee plan-price"><span class="plan-price-number"><strike style="color:#cccccc;"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?></strike><br> <?php echo get_woocommerce_currency_symbol(); echo $pro_sale_price; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } else { ?>  
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } ?>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php echo $proCartId; ?>">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                  if(get_the_id() == 12164 || get_the_id() == 12223)
                  {
                    $variable_product= new WC_Product_Variation(12169);
                    $business_plan = $variable_product ->regular_price;
                    $business_sale_price  = $variable_product ->sale_price;
                    $busineddCartId = 12169;
                  }
                  else
                  {
                    $variable_product= new WC_Product_Variation(10099);
                    $business_plan= $variable_product ->regular_price;
                    $busineddCartId = 10099;
                  }
                    
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="business_plan">
                        <h4 class="plan-title">Business Plan</h4>
                        <?php if($business_sale_price && $business_plan){ ?>
                            <p class="setup_fee plan-price"><span class="plan-price-number"><strike style="color:#cccccc;"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?></strike><br> <?php echo get_woocommerce_currency_symbol(); echo $business_sale_price; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } else { ?>    
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <?php } ?>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php echo $busineddCartId; ?>">Add to Cart</a></button>
                    </div>
                </div>
            </div>

            <div class="mt-30 right">
                <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
            </div>

            <div class="row pricing hup_pricing_table">
                    <div class="hup_lite_plan">
                        <table>
                        <tr><td>Time to ROI</td><td><span class="">12 months</span></td></tr>
                        <tr><td>Typical investment for stores with at least</td><td><span class="">$200k USD revenue per year</span></td></tr>
                        <tr><td>Articles per month</td><td><span class="">2 X 1500 word articles</span></td></tr>
<tr><td>Backlinks building included?</td><td><span class="">No</span></td></tr> 
                        <tr><td>Keyword research & on-page SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Custom images for articles</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Basic Google Analytics audit and tracking set up</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Reporting</td><td><span class="">Monthly</span></td></tr>
                        <tr><td>30-Minute video calls</td><td><span class="">One 30-minute call monthly</span></td></tr>
                        <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>
                        </table>
                    </div>

                    <div class="hup_grow_plan">
                        <table>
                        <tr><td>Time to ROI</td><td><span class="">6 months</span></td></tr>
                        <tr><td>Typical investment for stores with at least</td><td><span class="">$500k USD revenue per year</span></td></tr>
                         <tr><td>Articles per month</td><td><span class="">4 X 1500 word articles</span></td></tr>
<tr><td>Backlinks building included?</td><td><span class="">No</span></td></tr>
                        <tr><td>Keyword research & on-page SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Custom images for articles</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Basic Google Analytics audit and tracking set up</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Reporting</td><td><span class="">Monthly</span></td></tr>
                        <tr><td>30-Minute video calls</td><td><span class="">Two 30-minute calls monthly</span></td></tr>
                        <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>
                        </table>
                    </div>

                    <div class="hup_pro_plan">
                        <table>
                        <tr><td>Time to ROI</td><td><span class="">3 months</span></td></tr>
                        <tr><td>Typical investment for stores with at least</td><td><span class="">$1.5m USD revenue per year</span></td></tr>
                       <tr><td>Articles per month</td><td><span class="">8 X 1500 word articles</span></td></tr>
<tr><td>Backlinks building included?</td><td><span class="">No</span></td></tr>
                        <tr><td>Keyword research & on-page SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Custom images for articles</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Basic Google Analytics audit and tracking set up</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Reporting</td><td><span class="">Monthly</span></td></tr>
                        <tr><td>30-Minute video calls</td><td><span class="">Two 30-minute calls monthly</span></td></tr>
                        <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>
                        </table>
                    </div>

                    <div class="hup_business_plan">
                        <table>
                        <tr><td>Time to ROI</td><td><span class="">3 months</span></td></tr>
                        <tr><td>Typical investment for stores with at least</td><td><span class="">$3M USD revenue per year</span></td></tr>
                        <tr><td>Articles per month</td><td><span class="">16 X 1500 word articles</span></td></tr>
                        <tr><td>Backlinks building included?</td><td><span class="">No</span></td></tr>
                        <tr><td>Keyword research & on-page SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Custom images for articles</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Basic Google Analytics audit and tracking set up</td><td><span class="icon-tick">Yes</span></td></tr>
                        <tr><td>Reporting</td><td><span class="">Monthly</span></td></tr>
                        <tr><td>4 x 30-Minute video calls</td><td><span class="">4 x 30-minute calls monthly</span></td></tr>
                        <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>
                        </table>
                    </div>
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    <!-- GOOGLE SHOPPING  google-shopping-shopify/ -->
    <?php if(is_product() && get_the_id() == 5589 ) { ?>

      <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                       
                        <label>
                            <input class="with-gap"  value="pro_plan" name="budget" type="radio" checked />
                            <div class="item">Pro</div>
                        </label>
                        <label>
                            <input class="with-gap" value="business_plan" name="budget" type="radio"  />
                            <div class="item">Business</div>
                        </label>
                        <label>
                            <input class="with-gap" value="enterprise_plan" name="budget" type="radio"  />
                            <div class="item">Enterprise</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
            

                <?php
                    $variable_product= new WC_Product_Variation(7545);
                    $pro_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="pro_plan">
                        <h4 class="plan-title">Pro Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">2000-5000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7545">Add to Cart</a></button>
                    </div>
                </div>

                <?php

                    $variable_product= new WC_Product_Variation(7546);
                    $business_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="business_plan">
                        <h4 class="plan-title">Business Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">5000-10000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7546">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(10503);
                    $business_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="enterprise_plan">
                        <h4 class="plan-title">Enterprise Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">10000-25000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10503">Add to Cart</a></button>
                    </div>
                </div>

            </div>

            <div class="row no-gutters mt-30 align-items-center">
                <div class="col-md-8 col-xs-12">
                    <div class="note"> <span class="icon-tick">Yes</span>Facebook & Instagram ads, Search & Display Ad Management Included as Standard</div>
                </div>
                <div class="col-md-4 col-xs-12 right">
                    <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                </div>
            </div>
        
            <div class="row pricing hup_pricing_table">

                <div class="hup_lite_plan">
                    <table>
                        <tr>
                            <td>Google search & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">One per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                    </table>
                </div>
                <div class="hup_grow_plan">
                    <table>
                        <tr>
                            <td>Google search & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">2 per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                    </table>
                </div>
                <div class="hup_pro_plan">
                    <table>
                        <tr>
                            <td>Google search & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">2 per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                    </table>
                </div>
                <div class="hup_business_plan">
                    <table>
                        <tr>
                            <td>Google search & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">2 per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    <!-- GOOGLE SHOPPING -->

 <!-- INSTAGRAM GROWTH /shopify-instagram-growth-services/ -->
    <?php if(is_product() && get_the_id() == 10716 ) { ?>

      <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                      
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <div class="item active">Grow</div>
                        </label>
               
                       
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
          
          

              

                <?php
                    $variable_product= new WC_Product_Variation(12486);
                    $grow_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box active" id="grow_plan">
                        <h4 class="plan-title">Grow Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                    
                       <h5 class="nomarginbottom">Monthly Instagram Growth</h5>
                        <div class="ads-spend">1,000 – 10,000+ Followers per Month</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=12486">Add to Cart</a></button>
                    </div>
                </div>

             

            </div>

            <div class="row no-gutters mt-30 align-items-center">
                <div class="col-md-8 col-xs-12">
                    <div class="note"> <span class="icon-tick">Yes</span>Minimum 3 Month Engagement</div>
                </div>
                <div class="col-md-4 col-xs-12 right">
                    <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                </div>
            </div>
        
            <div class="row pricing hup_pricing_table">

                <div class="hup_lite_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Language and location targeted followers</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
                <div class="hup_grow_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Guaranteed monthly growth</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Mostly USA based followers</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
                <div class="hup_pro_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Guaranteed monthly growth</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Mostly USA based followers</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
                <div class="hup_business_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Guaranteed monthly growth</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Mostly USA based followers</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
                 
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    <!-- INSTAGRAM GROWTH -->
 
 <!-- INSTAGRAM ENGAGMENT /shopify-instagram-engagement-services/ -->
    <?php if(is_product() && get_the_id() == 10724 ) { ?>

      <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <div class="item active">5 Posts</div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <div class="item ">10 Posts</div>
                        </label>
                        <label>
                            <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                            <div class="item">15 Posts</div>
                        </label>

                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
          
          

                 <?php
                    $variable_product= new WC_Product_Variation(10726);
                    $five_posts_option_one= $variable_product ->regular_price;

                     $variable_product= new WC_Product_Variation(10727);
                    $five_posts_option_two= $variable_product ->regular_price;

                     $variable_product= new WC_Product_Variation(10728);
                    $five_posts_option_three= $variable_product ->regular_price;

                     $variable_product= new WC_Product_Variation(10729);
                    $five_posts_option_four= $variable_product ->regular_price;
                ?>
                <div class="col-md-4 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">5 Posts Per Month</h4>

                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $five_posts_option_one; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">100 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10726">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $five_posts_option_two; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">250 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10727">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $five_posts_option_three; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">500 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10728">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $five_posts_option_four; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">1,000 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10729">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(10730);
                    $ten_posts_option_one= $variable_product ->regular_price;

                    $variable_product= new WC_Product_Variation(10731);
                    $ten_posts_option_two= $variable_product ->regular_price;

                    $variable_product= new WC_Product_Variation(10732);
                    $ten_posts_option_three= $variable_product ->regular_price;

                    $variable_product= new WC_Product_Variation(10733);
                    $ten_posts_option_four= $variable_product ->regular_price;
                ?>
                <div class="col-md-4 col-xs-12">
                    <div class="price-box " id="grow_plan">
                        <h4 class="plan-title">10 Posts Per Month</h4>
                        
                           <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $ten_posts_option_one; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">100 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10730">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $ten_posts_option_two; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">250 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10731">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $ten_posts_option_three; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">500 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10732">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $ten_posts_option_four; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">1,000 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10733">Add to Cart</a></button>

                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(10734);
                    $fifteen_posts_option_one= $variable_product ->regular_price;

                    $variable_product= new WC_Product_Variation(10735);
                    $fifteen_posts_option_two= $variable_product ->regular_price;

                    $variable_product= new WC_Product_Variation(10736);
                    $fifteen_posts_option_three= $variable_product ->regular_price;

                    $variable_product= new WC_Product_Variation(10737);
                    $fifteen_posts_option_four= $variable_product ->regular_price;
                ?>
                <div class="col-md-4 col-xs-12">
                    <div class="price-box" id="pro_plan">
                        <h4 class="plan-title">15 Posts Per Month</h4>
                       
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $fifteen_posts_option_one; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">100 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10734">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $fifteen_posts_option_two; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">250 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10735">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $fifteen_posts_option_three; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">500 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10736">Add to Cart</a></button>


                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $fifteen_posts_option_four; ?> </span><span class="plan-price-period">/ month</span></p>
                        <h5 class="nomarginbottom">Instagram Engagment</h5>
                        <div class="ads-spend">1,000 likes & 10 Comments</div>
                        <button style="float:left;margin-bottom:40px;" class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10737">Add to Cart</a></button>

                    </div>
                </div>

               
               

            </div>

            <div class="row no-gutters mt-30 align-items-center">
                <div class="col-md-8 col-xs-12">
                    <div class="note"> <span class="icon-tick">Yes</span>Guaranteed Monthly Engagement</div>
                </div>
                <div class="col-md-4 col-xs-12 right">
                    <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                </div>
            </div>
        
            <div class="row pricing hup_pricing_table">

                <div class="hup_lite_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Guaranteed monthly engagement</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Mostly USA based engagement</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
                <div class="hup_grow_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Guaranteed monthly engagement</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Mostly USA based engagement</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
                <div class="hup_pro_plan">
                    <table>
                        <tr>
                            <td>100% compliant with Instagram</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Never ask for your Instagram account password</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Never use bots or fake accounts</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Phone and email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Guaranteed monthly engagement</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Dedicated account manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Mostly USA based engagement</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                     

                    </table>
                </div>
             
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    <!-- INSTAGRAM ENGAGMENT -->

    <!-- INSTAGRAM LOOP -->
<?php if(is_product() && get_the_id() == 8352) { ?>

  <section id="pricing">
    <div class="wrapper">
        <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
            <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                <div class="sp-10"></div>
                <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <style type="text/css">
                    .hup_align_center_insta_loop{
                        justify-content: center;
                    }
                </style>
                <div class="row bottom-xs hup_align_center_insta_loop">
                    <div class="hup_convertkit_insta_loop">
                        <script async data-uid="07fb3ec74d" src="https://wds.ck.page/07fb3ec74d/index.js"></script>
                     </div>
                </div>
            </div>

        <div class="row middle-xs pad-md-25 pad-top-bottom">

            <div class="col-xs-12 col-md-8 pad-xs-25">
	            <?php if(!is_page_template('shopify_fixed.php') && !has_term( 'shopify-add-on', 'product_cat' )){ ?>
                <p class="xs black-text">
                    <span class="perk">
                        <span class="icon-tick"></span> No hourly rates
                    </span>
                    <span class="perk">
                        <span class="icon-tick"></span> No hidden fees
                    </span>
                    <span class="perk">
                        <span class="icon-tick"></span> Cancel anytime
                    </span>
                </p>
	            <?php } ?>
            </div>

            <div class="col-xs-12 start-xs end-md col-md-4 pad-xs-25">
                <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr/>
            </div>
        </div>



    </div>
</section>

<?php } ?>
    <!-- google-adwords-shopify -->
    <?php if(is_product() && get_the_id() == 5574) { ?>

    <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio" checked />
                            <div class="item active">Grow</div>
                        </label>
                        <label>
                            <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                            <div class="item">Pro</div>
                        </label>
                        <label>
                            <input class="with-gap" value="business_plan" name="budget" type="radio"  />
                            <div class="item">Business</div>
                        </label>
                        <label>
                            <input class="with-gap" value="enterprise_plan" name="budget" type="radio"  />
                            <div class="item ">Enterprise</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
            
                <!--
                <?php
                    $variable_product= new WC_Product_Variation(7543);
                    $lite_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">Lite Plan</h4>
                        <div class="row no-gutters">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                                <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 align-sm-end">
                                <h5 class="nomarginbottom">Monthly ad spend</h5>
                                <div class="ads-spend">0-500</div>
                            </div>
                        </div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7543">Add to Cart</a></button>
                    </div>
                </div>-->

                <?php
                    $variable_product= new WC_Product_Variation(7544);
                    $grow_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box active" id="grow_plan">
                        <h4 class="plan-title">Grow Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">500-2000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7544">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(7545);
                    $pro_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="pro_plan">
                        <h4 class="plan-title">Pro Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">2000-5000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7545">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(7546);
                    $business_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="business_plan">
                        <h4 class="plan-title">Business Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">5000-10000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=7546">Add to Cart</a></button>
                    </div>
                </div>

                 <?php
                    $variable_product= new WC_Product_Variation(10504);
                    $business_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-3 col-xs-12">
                    <div class="price-box" id="enterpise_plan">
                        <h4 class="plan-title">Enterprise Plan</h4>
                        <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $business_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <div class="setup_fee"><span class="hup_currency_as_radio"></span> Setup fee</div>
                        <h5 class="nomarginbottom">Monthly ad spend</h5>
                        <div class="ads-spend">10000-25000</div>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10504">Add to Cart</a></button>
                    </div>
                </div>
            </div>

            <div class="row no-gutters mt-30 align-items-center">
                <div class="col-md-8 col-xs-12">
                    <div class="note"> <span class="icon-tick">Yes</span>Facebook & Instagram ads, Shopping & Display Ad Management Included as Standard</div>
                </div>
                <div class="col-md-4 col-xs-12 right">
                    <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                </div>
            </div>
                <div class="row pricing hup_pricing_table">

                    <div class="hup_lite_plan">
                    <table>
                        <tr>
                            <td>Google shopping & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">One per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                    </table>
                    </div>
                        <div class="hup_grow_plan">
                    <table>
                        <tr>
                            <td>Google shopping & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">Two per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                    </table>
                    </div>
                        <div class="hup_pro_plan">
                    <table>
                        <tr>
                            <td>Google shopping & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">Two per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                    </table>
                    </div>
                        <div class="hup_business_plan">
                    <table>
                        <tr>
                            <td>Google shopping & Facebook/Instagram ads management included</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Account set up in Facebook ads manager</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Export customer email list to build custom audience</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Plan campaigns and agree on ROAS goal & projected profits</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Create, design, set up & optimize campaigns & creatives</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Set up dynamic product retargeting ads</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Basic Google Analytics audit & set up</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Install Facebook tracking pixel</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Ad design for first campaigns</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Weekly updates</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Monthly reports</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute video calls</td>
                            <td><span class="">Two per month</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    <!-- EMAIL klaviyo-experts -->
    <?php if(is_product() && get_the_id() == 5595) { ?>

       <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <div class="item active">Newsletters</div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <div class="item">Automations (Flows)</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
                <?php
                    $variable_product= new WC_Product_Variation(5632);
                    $grow_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">Newsletters</h4>
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5632">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(5633);
                    $pro_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="price-box" id="grow_plan">
                        <h4 class="plan-title">Automations (Flows)</h4>
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">One time</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=11338">Add to Cart</a></button>
                    </div>
                </div>
            </div>

                <div class="mt-30 right">
                    <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                </div>

                <div class="row pricing hup_pricing_table">

                    <div class="hup_lite_plan">
                        <table>
                            <tr>
                                <td>Email work</td>
                                <td><span class="">4 X Newsletters per month (weekly campaigns)</span></td>
                            </tr>
                            <tr>
                                <td>Set up your email software & integrate with Shopify</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Google analytics set up</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Weekly updates</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Monthly reports</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>30-Minute video calls</td>
                                <td><span class="">Two per month</span></td>
                            </tr>
                            <tr>
                                <td>Email support</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="hup_grow_plan">
                        <table>
                            <tr>
                                <td>Email work</td>
                                <td><span class="">Klaviyo set up, 5 X flows, pop ups, discounts, email template</span></td>
                            </tr>
                            <tr>
                                <td>Set up your email software & integrate with Shopify</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Google analytics set up</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Weekly updates</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Monthly reports</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>30-Minute video calls</td>
                                <td><span class="">Two per month</span></td>
                            </tr>
                            <tr>
                                <td>Email support</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                    </table>
                </div>
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    
    <!-- EMAIL omnisend-experts -->
    <?php if(is_product() && get_the_id() == 11814) { ?>

       <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <div class="item active">Newsletters</div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <div class="item">Automations (Flows)</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
                <?php
                    $variable_product= new WC_Product_Variation(11816);
                    $grow_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">Newsletters</h4>
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5632">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(11817);
                    $pro_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="price-box" id="grow_plan">
                        <h4 class="plan-title">Automations (Flows)</h4>
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">One time</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=11338">Add to Cart</a></button>
                    </div>
                </div>
            </div>

                <div class="mt-30 right">
                    <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
                </div>

                <div class="row pricing hup_pricing_table">

                    <div class="hup_lite_plan">
                        <table>
                            <tr>
                                <td>Email work</td>
                                <td><span class="">4 X Newsletters per month (weekly campaigns)</span></td>
                            </tr>
                            <tr>
                                <td>Set up your email software & integrate with Shopify</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Google analytics set up</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Weekly updates</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Monthly reports</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>30-Minute video calls</td>
                                <td><span class="">Two per month</span></td>
                            </tr>
                            <tr>
                                <td>Email support</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="hup_grow_plan">
                        <table>
                            <tr>
                                <td>Email work</td>
                                <td><span class="">Omnisend set up, 5 X flows, pop ups, discounts, email template</span></td>
                            </tr>
                            <tr>
                                <td>Set up your email software & integrate with Shopify</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Google analytics set up</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Weekly updates</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Monthly reports</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>30-Minute video calls</td>
                                <td><span class="">Two per month</span></td>
                            </tr>
                            <tr>
                                <td>Email support</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                    </table>
                </div>
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

    <?php } ?>
    
    <!-- CRO conversion-rate-optimization-services-->
    <?php if(is_product() && get_the_id() == 5623) { ?>

    <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <div class="item active">Lite</div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <div class="item">Grow</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>


            <div class="row no-gutters mt-50">
                <?php
                    $variable_product= new WC_Product_Variation(5638);
                    $lite_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">Lite Plan</h4>
                        <p class="setup_fee plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5638">Add to Cart</a></button>
                    </div>
                </div>

                <?php
                    $variable_product= new WC_Product_Variation(5639);
                    $grow_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-6 col-xs-12">
                    <div class="price-box" id="grow_plan">
                        <h4 class="plan-title">Grow Plan</h4>
                        <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5639">Add to Cart</a></button>
                    </div>
                </div>

            </div>

            <div class="mt-302 right">
                <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
            </div>
          
                <div class="row pricing hup_pricing_table">

                    <div class="hup_lite_plan">
                        <table>
                            <tr>
                                <td>Google Analytics audit & set-up</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Data collection</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Data analysis</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Conversion report & A/B test roadmap</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>A/B test planning & wireframes</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>A/B test tool implementation & QA</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>A/B test reporting</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>10 Hours design & development time per test</td>
                                <td><span class="icon-cross">No</span></td>
                            </tr>
                            <tr>
                                <td>30-Minute video calls</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Email support</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="hup_grow_plan">
                        <table>
                            <tr>
                                <td>Google Analytics audit & set-up</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Data collection</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Data analysis</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Conversion report & A/B test roadmap</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>A/B test planning & wireframes</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>A/B test tool implementation & QA</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>A/B test reporting</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>10 Hours design & development time per test</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>30-Minute video calls</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                            <tr>
                                <td>Email support</td>
                                <td><span class="icon-tick">Yes</span></td>
                            </tr>
                        
                    </table>
                </div>
            </div>
            <div class="pad-md-25"></div>
       
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h3>Add-on Service: Customer Development Interviews</h3>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="rte">

                        <p>If you want to take your CRO to the next level. We can recruit and conduct customer development interviews to inform your CRO report and A/B testing roadmap. <a target="_blank" href="/customer-development-interview-service/">Learn more here.</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>


<!-- SITE SPEED shopify-speed-optimization -->
<?php if ( is_product() && get_the_id() == 5647 ) { ?>

    <section id="pricing" class="price-table" >
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-sm-2 col-xs-4"></div>
                <div class="col-sm-8 col-xs-4">
                    <div class="between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <div class="item active">Lite</div>
                        </label>
                      <!--  <label>
                            <input class="with-gap" value="pro_plan" name="budget" type="radio"  />
                            <div class="item">Pro</div>
                        </label> -->
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 right pad-xs-0">
                    <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
                 </div>
            </div>

            <div class="row no-gutters mt-50">
            
                <?php
                    $variable_product= new WC_Product_Variation(5648);
                    $lite_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-offset-4 col-md-4 col-xs-12">
                    <div class="price-box active" id="lite_plan">
                        <h4 class="plan-title">Lite Plan</h4>
                        <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> </span><span class="plan-price-period">/ one-time</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5648">Add to Cart</a></button>
                    </div>
                </div>
<!-- 
                <?php
                    $variable_product= new WC_Product_Variation(5649);
                    $pro_plan= $variable_product ->regular_price;
                ?>
                <div class="col-md-4 col-xs-12">
                    <div class="price-box" id="pro_plan">
                        <h4 class="plan-title">Pro Plan</h4>
                        <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ one-time</span></p>
                        <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5649">Add to Cart</a></button>
                    </div>
                </div>
-->

            </div>

            <div class="mt-30 row ">
              <div class="right">
                <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
            </div>
                                                                                                 </div>
   
            <div class="row pricing hup_pricing_table">

                <div class="hup_lite_plan">
                    <table>
                        <tr>
                            <td>Works for:</td>
                            <td><span class="">All Shopify Plan Tiers</span></td>
                        </tr>

                        <tr>
                            <td>Image compression, file type usage & server scaled images</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Minify CSS & Js</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Shopify app analysis & errors</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Leverage browser caching</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Reduce file requests</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Decrease page size MB</td>
                            <td><span class="icon-tick">Yes</span></td>
                        <tr>
                            <td>Lazy load images</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Server & javascript error analysis, conditional loading</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>

                        <tr>
                            <td>Project Speed Report</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                      
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>PluginSpeed 1 month free trial for post-launch monitoring</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                    </table>
                </div>

<!--
                <div class="hup_pro_plan">
                    <table>
                        <tr>
                            <td>Works for:</td>
                            <td><span class="">Shopify Plus</span></td>
                        </tr>

                        <tr>
                            <td>Image compression, file type usage & server scaled images</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Minify CSS & Js</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Shopify app analysis & errors</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Leverage browser caching</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Reduce file requests</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Decrease page size MB</td>
                            <td><span class="icon-tick">Yes</span></td>
                        <tr>
                            <td>Lazy load images</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Server & javascript error analysis, conditional loading</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Project Speed Report</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>30-Minute Calls Or Video Chat Consultation/Support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>Email support</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>
                        <tr>
                            <td>PluginSpeed 1 month free trial for post-launch monitoring</td>
                            <td><span class="icon-tick">Yes</span></td>
                        </tr>-->
                    </table>
                </div>
            </div>
            <div class="pad-md-25"></div>
        </div>
    </section>

<?php } ?>

<!-- SITE SPEED shopify-social-m…arketing-service -->
<?php if ( is_product() && get_the_id() == 8917 ) { ?>

<section id="pricing" class="price-table" >
    <div class="wrapper">
        <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
            <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                <div class="sp-10"></div>
                <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
            </div>
        </div>
        <div class="row center-xs">
            <div class="col-sm-2 col-xs-4"></div>
            <div class="col-sm-8 col-xs-4">
                <div class="between-xs" id="budget-slider">
                    <label>
                        <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                        <div class="item active">Lite</div>
                    </label>
                    <label>
                        <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                        <div class="item">Grow</div>
                    </label>
                    <label>
                        <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                        <div class="item">Pro</div>
                    </label>
                </div>
            </div>
            <div class="col-sm-2 col-xs-4 right pad-xs-0">
                <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
             </div>
        </div>

        <div class="row no-gutters mt-50">
            <?php
                $variable_product= new WC_Product_Variation(9382);
                $lite_plan= $variable_product ->regular_price;
            ?>
            <div class="col-md-4 col-xs-12">
                <div class="price-box active" id="lite_plan">
                    <h4 class="plan-title">Lite Plan</h4>
                    <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                    <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=9382">Add to Cart</a></button>
                </div>
            </div>

            <?php
                $variable_product= new WC_Product_Variation(9383);
                $grow_plan= $variable_product ->regular_price;
            ?>
            <div class="col-md-4 col-xs-12">
                <div class="price-box" id="grow_plan">
                    <h4 class="plan-title">Grow Plan</h4>
                    <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                    <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=9383">Add to Cart</a></button>
                </div>
            </div>

            <?php
                $variable_product= new WC_Product_Variation(9384);
                $pro_plan= $variable_product ->regular_price;
            ?>
            <div class="col-md-4 col-xs-12">
                <div class="price-box" id="pro_plan">
                    <h4 class="plan-title">Pro Plan</h4>
                    <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ month</span></p>
                    <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=9384">Add to Cart</a></button>
                </div>
            </div>
        </div>

        <div class="mt-30 right">
            <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
        </div>

        <div class="row pricing hup_pricing_table">

            <div class="hup_lite_plan">
                <table>
                    <tr>
                        <td>Design, write captions & post</td>
                        <td><span class="">15 posts or 5 reels</span></td>
                    </tr>
                    <tr>
                        <td>Design & post</td>
                        <td>20 stories</td>
                    </tr>
                    <tr>
                        <td>Design story</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Boost post from $100 USD</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>30-Minute Calls or Video Chat Consultation/Support</td>
                        <td>No calls</td>
                    </tr>
                    <tr>
                        <td>Reporting</td>
                        <td>Monthly</td>
                    </tr>
                    <tr>
                        <td>Email Support</td>
                        <td>Unlimited</td>
                    </tr>
                </table>
            </div>

            <div class="hup_grow_plan">
                <table>
                    <tr>
                        <td>Design, write captions & post</td>
                        <td><span class="">20 posts or 7 reels</span></td>
                    </tr>
                    <tr>
                        <td>Design & post</td>
                        <td>30 stories</td>
                    </tr>
                    <tr>
                        <td>Design story</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Boost post from $100 USD</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>30-Minute Calls or Video Chat Consultation/Support</td>
                        <td>One call per month</td>
                    </tr>
                    <tr>
                        <td>Reporting</td>
                        <td>Monthly</td>
                    </tr>
                    <tr>
                        <td>Email Support</td>
                        <td>Unlimited</td>
                    </tr>
                </table>
            </div>

            <div class="hup_pro_plan">
                <table>
                    <tr>
                        <td>Design, write captions & post</td>
                        <td><span class="">30 posts or 10 reels</span></td>
                    </tr>
                    <tr>
                        <td>Design & post</td>
                        <td>40 stories</td>
                    </tr>
                    <tr>
                        <td>Design story</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Boost post from $100 USD</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>30-Minute Calls or Video Chat Consultation/Support</td>
                        <td>One call per month</td>
                    </tr>
                    <tr>
                        <td>Reporting</td>
                        <td>Monthly</td>
                    </tr>
                    <tr>
                        <td>Email Support</td>
                        <td>Unlimited</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="pad-md-25"></div>
    </div>
</section>

<?php } ?>

<!-- SMS -->
<?php if(is_product() && get_the_id() == 8518) { ?>

    <section id="pricing">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
            </div>
            <div class="row bottom-xs pad-md-25 pad-top-bottom center-xs">
                <div class="sp-40"></div>
                <div class="sp-40 hide-md"></div>
                <div class="col-xs-12 col-sm-8 pad-xs-30">
                    <div class="row between-xs" id="budget-slider">
                        <label>
                            <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">
	                        <?php
	                        $variable_product= new WC_Product_Variation(8528);
	                        $lite_plan= $variable_product->regular_price;
	                        ?>
                            <?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">
		                            <?php
		                            $variable_product= new WC_Product_Variation(8529);
		                            $grow_plan= $variable_product->regular_price;
		                            ?>
		                            <?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" value="USD" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                            <label>
                                <input class="with-gap" value="GBP" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                            <label>
                                <input class="with-gap" value="AUD" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                            <label>
                                <input class="with-gap" value="EUR" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
	                        <?php
	                        $variable_product= new WC_Product_Variation(8528);
	                        $lite_plan= $variable_product->regular_price;
	                        ?>
                            <p class="white-text"> <?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=8528">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan ">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
	                        <?php
	                        $variable_product= new WC_Product_Variation(8529);
	                        $lite_plan= $variable_product->regular_price;
	                        ?>
                            <p class="white-text"> <?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=8529">Add to Cart</a></button>

                        </div>
                    </div>
                    <div class="row pricing hup_pricing_table">
                        <div class="lite_plan hup_lite_plan">
                        <table>
                                <tr><td>SMS work</td><td><span class="">1 automation OR 4 SMS campaigns sent weekly</span></td></tr>
                                <tr><td>Set up your SMS software & integrate with Shopify</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Google analytics set up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                            </div>

                            <div class="hup_grow_plan">
                                <table>
                                <tr><td>SMS work</td><td><span class="">2 automations AND 4 SMS campaigns sent weekly</span></td></tr>
                                <tr><td>Set up your email software & integrate with Shopify</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Google analytics set up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                        </table>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row middle-xs pad-md-25 pad-top-bottom">
                <div class="col-xs-12 col-md-8 pad-xs-25">
                    <p class="xs black-text">
                        <span class="perk">
                            <span class="icon-tick"></span> No hourly rates
                        </span>
                        <span class="perk">
                            <span class="icon-tick"></span> No hidden fees
                        </span>
                        <span class="perk">
                            <span class="icon-tick"></span> Cancel anytime
                        </span>
                    </p>
                </div>

                <div class="col-xs-12 col-md-4 lite_plan pricing_footer lite_plan active">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=8528">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=8529">Add to Cart</a></button>
                </div>

                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h3></h3>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="rte">

                        <p> <a href="">learn more here.</a></p>

                    </div>
                </div>
            </div> -->


        </div>
    </section>
<?php } ?>

<!-- Blck friday SPEED black-friday-marketing-services -->
<?php if ( is_product() && get_the_id() == 9296 ) { ?>

<section id="pricing" class="price-table" >
    <div class="wrapper">
        <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
            <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                <div class="sp-10"></div>
                <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
            </div>
        </div>
        <div class="row center-xs">
            <div class="col-sm-2 col-xs-4"></div>
            <div class="col-sm-8 col-xs-4">
                <div class="between-xs" id="budget-slider">
                    <label>
                        <input class="with-gap" value="lite_plan" name="budget" type="radio" checked />
                        <div class="item active">Lite</div>
                    </label>
                    <label>
                        <input class="with-gap" value="grow_plan" name="budget" type="radio"  />
                        <div class="item">Grow</div>
                    </label>
                    <label>
                        <input class="with-gap"  value="pro_plan" name="budget" type="radio"  />
                        <div class="item">Pro</div>
                    </label>
                </div>
            </div>
            <div class="col-sm-2 col-xs-4 right pad-xs-0">
                <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
             </div>
        </div>

        <div class="row no-gutters mt-50">
            <?php
                $variable_product= new WC_Product_Variation(9303);
                $lite_plan= $variable_product ->regular_price;
            ?>
            <div class="col-md-4 col-xs-12">
                <div class="price-box active" id="lite_plan">
                    <h4 class="plan-title">Lite Plan</h4>
                    <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $lite_plan; ?> </span><span class="plan-price-period">/ one-time</span></p>
                    <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=9303">Add to Cart</a></button>
                </div>
            </div>

            <?php
                $variable_product= new WC_Product_Variation(9304);
                $grow_plan= $variable_product ->regular_price;
            ?>
            <div class="col-md-4 col-xs-12">
                <div class="price-box" id="grow_plan">
                    <h4 class="plan-title">Grow Plan</h4>
                    <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $grow_plan; ?> </span><span class="plan-price-period">/ one-time</span></p>
                    <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=9304">Add to Cart</a></button>
                </div>
            </div>

            <?php
                $variable_product= new WC_Product_Variation(9305);
                $pro_plan= $variable_product ->regular_price;
            ?>
            <div class="col-md-4 col-xs-12">
                <div class="price-box" id="pro_plan">
                    <h4 class="plan-title">Pro Plan</h4>
                    <p class="plan-price setup_fee"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol(); echo $pro_plan; ?> </span><span class="plan-price-period">/ one-time</span></p>
                    <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=9305">Add to Cart</a></button>
                </div>
            </div>
        </div>

        <div class="mt-30 right">
            <a href="/contact/">Message us with final questions</a> <span class="icon chat"></span>
        </div>

        <div class="row pricing hup_pricing_table">

            <div class="hup_lite_plan">
                <table>
                    <tr>
                        <td>Black Week presale</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Black Friday Week campaign</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Facebook & Instagram ads design</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>FB, IG, Messenger story ads</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Newsletter</td>
                        <td>2x</td>
                    </tr>
                </table>
            </div>

            <div class="hup_grow_plan">
                <table>
                    <tr>
                        <td>Black Week presale</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Black Friday Week campaign</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Facebook & Instagram ads design</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>FB, IG, Messenger story ads</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Newsletter</td>
                        <td>4x</td>
                    </tr>
                    <tr>
                        <td>Website banner for BF week campaign</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                </table>
            </div>

            <div class="hup_pro_plan">
                <table>
                    <tr>
                        <td>Black Week presale</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Black Friday Week campaign</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Post Sale campaign</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Facebook & Instagram ads design</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>FB, IG, Messenger story ads</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                    <tr>
                        <td>Newsletter</td>
                        <td>6x</td>
                    </tr>
                    <tr>
                        <td>Website banner for pre-sale, Black Friday & post sale</td>
                        <td><span class="icon-tick">Yes</span></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="pad-md-25"></div>
    </div>
</section>

<!-- custom price name -->
<?php } elseif(is_product() && get_the_id() == 9258) { ?>

    <section id="pricing" class="price-table" >
        <div class="wrapper ">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 pad-md-60">
                    <h3 class="h2 letterspacing"><?php the_field('pricing_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p class="lightgrey-text"><?php the_field('pricing_description'); ?></p>
                </div>
                <?php
                wc_get_template( 'single-product/add-to-cart/simple.php' );
            ?>
            </div>
            
        </div>
    </section>

<?php } ?>






    <section class="black white-text">
        <div class="wrapper">
            <div class="row pad-xs-40 pad-md-60 pad-top-bottom">
                <?php if(is_product() && get_the_id() == 5623) { ?>



              <?php } else { ?>

                    <!-- SITE SPEED -->
                    <?php if(is_product() && get_the_id() == 5647) { ?>

                         <?php } else { ?>

                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>Should I improve my conversion rates first?</h6>
                    <p class="xs">If you want to improve your conversion rates and Shopify theme UX design before you start investing in more traffic, we’ve got you covered. We have a $99 website optimization review service for small businesses and monthly CRO services for stores with more than 1k transactions per month.</p>
                    <p class="xs"><a href="/shopify-optimization-service/">Learn more here</a></p>
                </div>

  <?php } ?>

                   <?php } ?>


                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>More questions?</h6>
                    <p class="xs">Want to sign up to multiple monthly services or simply to chat first? Email us at <a href="mailto:hello@wholedesignstudios.com">hello@wholedesignstudios.com</a> and we’ll get back to you within 24 hours.</p>
                    <p class="xs"><a href="/contact/">Send us a message</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row pad-xs-60 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-left-right">

                    <?php if( have_rows('faq') ): ?>

                        <ul class="faq">

                    <?php while ( have_rows('faq') ) : the_row(); ?>

                           <li class=""><h6><?php the_sub_field('question'); ?></h6><p class="xs"><?php the_sub_field('answer'); ?></p></li>

                    <?php endwhile; ?>

                        </ul>

                    <?php else : ?>

                    <?php endif; ?>

                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-left-right">

                    <?php if( have_rows('faq_two') ): ?>

                        <ul class="faq">

                    <?php while ( have_rows('faq_two') ) : the_row(); ?>

                           <li class=""><h6><?php the_sub_field('question'); ?></h6><p class="xs"><?php the_sub_field('answer'); ?></p></li>

                    <?php endwhile; ?>

                        </ul>

                    <?php else : ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>


    <?php the_field('convertkit'); ?>


<script>
    jQuery( document ).ready(function() {
        setTimeout(() => { 

        jQuery('section#pricing input.select-dropdown.dropdown-trigger').removeAttr('disabled');
        jQuery('section#pricing.price-table .select-wrapper').on('click', function() {
            jQuery('section#pricing .dropdown-content.select-dropdown').css('display','block');
            jQuery('section#pricing .dropdown-content.select-dropdown').css('opacity','1');
        });
    }, "1000");
    });
    </script>

<?php get_footer(); ?>
