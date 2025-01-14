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
                    <button class="large"><a href="#pricing">See Plans & Pricing</a></button> <div class="wd-20"></div><div class="sp-30 hide-sm"></div><span class="inlinelogo shopifyexperts">Shopify Experts</span>
                    <div class="sp-60"></div>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">

                    <!-- SITE SPEED -->
                    <?php if(is_product() && get_the_id() == 5647) { ?>
                    
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

                    <?php } else { ?>

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
                                <?php if(is_product() && get_the_id() == 5589) { ?>
                                    <p class="small"><span class="inlinelogo googleshopping">Google Shopping</span></p><div class="sp-10 hide-sm"></div>   
                                </div>
                                <?php } ?>
                                <!-- Email -->
                                <?php if(is_product() && get_the_id() == 5595) { ?>
                                    <p class="small"><span class="inlinelogo klaviyo">Klaviyo</span></p><div class="sp-10 hide-sm"></div>   
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
                        <button class="red"><a <?php the_field('cta_header_link'); ?> ><?php the_field('cta_header'); ?></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative" id="1">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-top-bottom center-sm">
                <div class="col-xs-12 col-md-9 pad-md-40">
                    <h3 class="h2 letterspacing"><?php the_field('overview_header'); ?></h3>
                    <div class="sp-10"></div>
                    <p><?php the_field('overview_description'); ?></p>
                </div>
            </div>
        </div>
        <a href="#how-it-works" class="scrolldownarrow"></a>
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-s.png" id="two_week"/>
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
                <?php if(is_product() && get_the_id() == 5589) { ?>
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
                <!-- SITE SPEED -->
                <?php if(is_product() && get_the_id() == 5647) { ?>
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
                                the_taxonomies( $args ); 
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
        
            <section class="lightgrey">
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
                                the_taxonomies( $args ); 
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
        <?php if(is_product() && get_the_id() == 5532) { ?>
            
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
                                the_taxonomies( $args ); 
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
                                the_taxonomies( $args ); 
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
            
            <section class="lightgrey">
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
                                the_taxonomies( $args ); 
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
                                the_taxonomies( $args ); 
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
                                the_taxonomies( $args ); 
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
                                the_taxonomies( $args ); 
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

      <?php } ?> 
 
    <?php } ?> 


 <section class="black white-text overflow">
        <div class="wrapper">
            <div class="sp-30"></div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-6 pad-xs-25">
                    <h6>About Whole Design Studios</h6>
                    <p>Founded in 2012 Whole Design Studios is a Shopify design & marketing agency. Focused on growing ecommerce businesses. We work with 100+ brands monthly. Our team of 35+ designers & marketers are experts in Shopify growth.</p>
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

                         <?php } else { ?>

	<section class="green white-text relative">
        <div class="wrapper">
            <div class="row pad-xs-80 pad-md-40 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-10 col-md-9 col-lg-8 pad-md-60">
                    <h3 class="h2 letterspacing">ROI is at the route of the decisions and advice we present</h3>
                    <div class="sp-10"></div>
                    <p>As an ecommerce business owner or marketer. You have to choose which sales channels or processes to invest in and at which time. If you are unsure which sales channel to focus on for your business talk with our CEO Giles to get a personalized recommendation and free consultation for your store.</p>
                </div>
            </div>
        </div>
         <a href="#5" class="scrolldownarrow"></a>
    </section>

   <?php } ?> 

    <!-- INSTAGRAM -->
    <?php if(is_product() && get_the_id() == 5509) { ?>

      <section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">$149 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">$299 USD per month</p></div> 
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Pro Plan</h5><p class="white-text">$349 USD per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$149 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5511">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$299 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5512">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header pro_plan">
                            <h5 class="nomarginbottom">Pro Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$349 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5513">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>
                            <tr>
                                <td class="lightgrey">Plan Type</td>
                                <td class="lightgrey"><span class="show-sm">Monthly cancel-anytime plan</span><span class="hide-sm">Monthly</span></td>
                            </tr>

                            <div class="lite_plan">
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
                            </div>

                            <div class="grow_plan">
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
                            </div>

                            <div class="pro_plan">
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
                            </div>

                        </table>
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


    <!-- INSTAGRAM LOOP -->
    <?php if(is_product() && get_the_id() == 8352) { ?>

      <section id="5">
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
                    <div class="row bottom-xs">
                      

<script async data-uid="07fb3ec74d" src="https://wds.ck.page/07fb3ec74d/index.js"></script>

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
            

            
        </div>
    </section>
    
    <?php } ?>



    <!-- FACEBOOK -->
    <?php if(is_product() && get_the_id() == 4664) { ?>

    	<section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Monthly Ad Spend</h5><p class="white-text">$500 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$2k USD per month</p></div> 
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$5k USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$10k USD per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$499 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5570">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$749 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5571">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header pro_plan">
                            <h5 class="nomarginbottom">Pro Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1249 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5572">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header business_plan">
                            <h5 class="nomarginbottom">Business Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1749 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5573">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>

                            <tr><td>One time set up fee</td><td>$200 a</td></tr>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5570">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5571">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 pro_plan pricing_footer pro_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5572">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 business_plan pricing_footer business_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5573">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
        </div>
    </section>
    
	<?php } ?>
    <!-- SEO -->
    <?php if(is_product() && get_the_id() == 5532) { ?>

       <section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">$699 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">$1499 USD per month</p></div> 
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Pro Plan</h5><p class="white-text">$3999 USD per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>

                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$699 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5549">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1499 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5550">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header pro_plan">    
                            <h5 class="nomarginbottom">Pro Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$2999 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5551">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>
                            <tr>
                                <td class="lightgrey">Plan Type</td>
                                <td class="lightgrey"><span class="show-sm">Monthly cancel-anytime plan</span><span class="hide-sm">Monthly</span></td>
                            </tr>

                            <div class="lite_plan">
                                <tr><td>Time to ROI</td><td><span class="">12 months</span></td></tr>
                                <tr><td>Typical investment for stores with at least</td><td><span class="">$200k USD revenue per year</span></td></tr>
                                <tr><td>Monthly action items </td><td><span class="">7</span></td></tr>
                                <tr><td>Review Your Web Presence, Analytics (Including KPIs), And SEO Results.</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Rate Your Web Presence On Each Of The Pillars Of Modern SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Basic Google Analytics Audit And Tracking Set Up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Reporting</td><td><span class="">Bi-monthly</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">One 30-Minute call bi-monthly</span></td></tr>
                                <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>

                            </div>

                        <!--    <div class="grow_plan">
                                <tr><td>Time to ROI</td><td><span class="">6 months</span></td></tr>
                                <tr><td>Typical investment for stores with at least</td><td><span class="">$500k USD revenue per year</span></td></tr>
                                <tr><td>Monthly action items </td><td><span class="">14</span></td></tr>
                                <tr><td>Review Your Web Presence, Analytics (Including KPIs), And SEO Results.</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Rate Your Web Presence On Each Of The Pillars Of Modern SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Basic Google Analytics Audit And Tracking Set Up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Reporting</td><td><span class="">Monthly</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two 30-Minute calls monthly</span></td></tr>
                                <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>
                            </div>

                            <div class="pro_plan">
                                <tr><td>Time to ROI</td><td><span class="">3 months</span></td></tr>
                                <tr><td>Typical investment for stores with at least</td><td><span class="">$1.5m USD revenue per year</span></td></tr>
                                <tr><td>Monthly action items </td><td><span class="">50</span></td></tr>
                                <tr><td>Review Your Web Presence, Analytics (Including KPIs), And SEO Results.</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Rate Your Web Presence On Each Of The Pillars Of Modern SEO</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Basic Google Analytics Audit And Tracking Set Up</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Reporting</td><td><span class="">Monthly</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two 30-Minute calls monthly</span></td></tr>
                                <tr><td>Email support</td><td><span class="">Unlimited, 1 day response time</span></td></tr>    
                            </div>-->

                        </table>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5549">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5550">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 pro_plan pricing_footer pro_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5551">Add to Cart</a></button>
                </div>

                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
        </div>
    </section>
    
    <?php } ?>
    <!-- GOOGLE SHOPPING -->
    <?php if(is_product() && get_the_id() == 5589) { ?>

      <section id="5">
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
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$2k USD per month</p></div> 
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$5k USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$10k USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$25k USD per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$499 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5628">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$749 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5629">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header pro_plan">
                            <h5 class="nomarginbottom">Pro Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1249 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5630">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header business_plan">
                            <h5 class="nomarginbottom">Business Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1749 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5631">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Enterprise Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$2249 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=10503">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>

                            <tr><td>One time set up fee</td><td>$200 b</td></tr>
                            <tr><td>Google search & Facebook/Instagram ads management included</td><td><span class="icon-tick">Yes</span></td></tr>
                            
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
                            <tr><td>30-Minute video calls</td><td><span class="">2 per month</span></td></tr>
                            <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>

                        </table>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5628">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5629">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 pro_plan pricing_footer pro_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5630">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 business_plan pricing_footer business_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5631">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
        </div>
    </section>
    
    <?php } ?>
    <!-- GOOGLE SHOPPING -->
    <?php if(is_product() && get_the_id() == 5574) { ?>

       <section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Monthly Ad Spend</h5><p class="white-text">$500 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$2k USD per month</p></div> 
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$5k USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>
                            <div class="tooltip"><h5>Monthly Ad Spend</h5><p class="white-text">$10k USD per month</p></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$499 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5634">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$749 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5635">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header pro_plan">
                            <h5 class="nomarginbottom">Pro Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1249 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5636">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header business_plan">
                            <h5 class="nomarginbottom">Business Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1749 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5637">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>

                            <tr><td>One time set up fee</td><td>$200 c</td></tr>
                            <tr><td>Google shopping & Facebook/Instagram ads management included</td><td><span class="icon-tick">Yes</span></td></tr>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5634">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5635">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 pro_plan pricing_footer pro_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5636">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 business_plan pricing_footer business_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5637">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 start-xs end-md">
                    <div class="sp-20 hide-sm"></div>
                    <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                    <div class="sp-20"></div>
                </div>
            </div>
        </div>
    </section>
    
    <?php } ?>
  <!-- SMS -->
    <?php if(is_product() && get_the_id() == 8518) { ?>

<section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">$399 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">$899 USD per month</p></div> 
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                                <h5 class="nomarginbottom">Lite Plan</h5>
                                <div class="sp-5"></div>
                                <p class="white-text">$399 USD per month</p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=8528">Add to Cart</a></button>
                            </div>
                             <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan ">
                                <h5 class="nomarginbottom">Grow Plan</h5>
                                <div class="sp-5"></div>
                                <p class="white-text">$899 USD per month</p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=8529">Add to Cart</a></button>
                            
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>
                   

                            <div class="lite_plan">
                                <tr><td>SMS work</td><td><span class="">1 automation OR 4 SMS campaigns sent weekly</span></td></tr> 
                                <tr><td>Set up your SMS software & integrate with Shopify</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Google analytics set up</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                            <div class="grow_plan">
                                <tr><td>SMS work</td><td><span class="">2 automations AND 4 SMS campaigns sent weekly</span></td></tr> 
                                <tr><td>Set up your email software & integrate with Shopify</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Google analytics set up</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                        </table>
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

    <!-- EMAIL -->
    <?php if(is_product() && get_the_id() == 5595) { ?>

       <section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">$399 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">$899 USD per month</p></div> 
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                                <h5 class="nomarginbottom">Lite Plan</h5>
                                <div class="sp-5"></div>
                                <p class="white-text">$399 USD per month</p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5632">Add to Cart</a></button>
                            </div>
                             <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan ">
                                <h5 class="nomarginbottom">Grow Plan</h5>
                                <div class="sp-5"></div>
                                <p class="white-text">$899 USD per month</p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5633">Add to Cart</a></button>
                            
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>
                   

                            <div class="lite_plan">
                                <tr><td>Email work</td><td><span class="">1 automation (4 emails) OR 4 weekly newsletters</span></td></tr> 
                                <tr><td>Set up your email software & integrate with Shopify</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Google analytics set up</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                            <div class="grow_plan">
                                <tr><td>Email work</td><td><span class="">2 email automation series (8 emails) AND 4 weekly newsletters</span></td></tr> 
                                <tr><td>Set up your email software & integrate with Shopify</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Google analytics set up</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Weekly updates</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Monthly reports</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="">Two per month</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                        </table>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5632">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5633">Add to Cart</a></button>
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
    <!-- CRO -->
    <?php if(is_product() && get_the_id() == 5623) { ?>

  <section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">$1999 USD per month</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">$2999 USD per month</p></div> 
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                            <h5 class="nomarginbottom">Lite Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$1999 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5638">Add to Cart</a></button>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan">
                            <h5 class="nomarginbottom">Grow Plan</h5>
                            <div class="sp-5"></div>
                            <p class="white-text">$2999 USD per month</p>
                            <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5639">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>
                   

                            <div class="lie_plan">
                                <tr><td>Google Analytics audit & set-up</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Data collection</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Data analysis</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Conversion report & A/B test roadmap</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>A/B test planning & wireframes</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>A/B test tool implementation & QA</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>A/B test reporting</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>10 Hours design & development time per test</td><td><span class="icon-cross">No</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                            <div class="grow_plan">
                                <tr><td>Google Analytics audit & set-up</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Data collection</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Data analysis</td><td><span class="icon-tick">Yes</span></td></tr> 
                                <tr><td>Conversion report & A/B test roadmap</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>A/B test planning & wireframes</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>A/B test tool implementation & QA</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>A/B test reporting</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>10 Hours design & development time per test</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute video calls</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                        </table>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5638">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5639">Add to Cart</a></button>
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
        <!-- SITE SPEED -->
        <?php if(is_product() && get_the_id() == 5647) { ?>
       
     <section id="5">
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
                            <input class="with-gap" name="budget" type="radio" checked />
                            <span></span>
                            <div class="tooltip active"><h5>Lite Plan</h5><p class="white-text">$749 USD one-time</p></div>
                        </label>
                        <label>
                            <input class="with-gap" name="budget" type="radio"  />
                            <span></span>   
                            <div class="tooltip"><h5>Grow Plan</h5><p class="white-text">$1499 USD one-time</p></div> 
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row bottom-xs">
                        <div class="col-xs-12 center-xs start-sm col-sm-8 pad-xs-30 pad-top-bottom currency-radio-buttons">
                            <label>
                                <input class="with-gap" name="currency" type="radio" checked />
                                <span>USD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>GBP</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>AUD</span>
                            </label>
                             <label>
                                <input class="with-gap" name="currency" type="radio"  />
                                <span>EUR</span>
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header lite_plan active">
                                <h5 class="nomarginbottom">Lite Plan</h5>
                                <div class="sp-5"></div>
                                <p class="white-text">$749 USD one-time</p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5648">Add to Cart</a></button>
                            </div>
                             <div class="col-xs-12 col-sm-4 center-xs pad-xs-25 black rounded-top pricing-header grow_plan ">
                                <h5 class="nomarginbottom">Grow Plan</h5>
                                <div class="sp-5"></div>
                                <p class="white-text">$1499 USD one-time</p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=5649">Add to Cart</a></button>
                            
                        </div>
                    </div>
                    <div class="row pricing">
                        <table>
                    
                            <div class="lite_plan">
                                <tr><td>Works for:</td><td><span class="">Basic Shopify, Shopify, Advanced Shopify</span></td></tr>
                                <tr><td>Image compression, file type usage & server scaled images</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Minify CSS & Js</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Shopify app analysis & errors</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Leverage browser caching</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Reduce file requests</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Decrease page size MB</td><td><span class="icon-tick">Yes</span></td>
                                    <tr><td>Lazy load images</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Server & javascript error analysis, conditional loading</td><td><span class="icon-tick">Yes</span></td></tr>
                                
                                <tr><td>Project Speed Report</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute Calls Or Video Chat Consultation/Support</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>PluginSpeed 1 month free trial for post-launch monitoring</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                            <div class="grow_plan">
                                <tr><td>Works for:</td><td><span class="">Advanced Shopify & Shopify Plus</span></td></tr>
                                <tr><td>Image compression, file type usage & server scaled images</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Minify CSS & Js</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Shopify app analysis & errors</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Leverage browser caching</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Reduce file requests</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Decrease page size MB</td><td><span class="icon-tick">Yes</span></td>
                                <tr><td>Lazy load images</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Server & javascript error analysis, conditional loading</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Project Speed Report</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>30-Minute Calls Or Video Chat Consultation/Support</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>Email support</td><td><span class="icon-tick">Yes</span></td></tr>
                                <tr><td>PluginSpeed 1 month free trial for post-launch monitoring</td><td><span class="icon-tick">Yes</span></td></tr>
                            </div>

                        </table>
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
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5648">Add to Cart</a></button>
                </div>
                <div class="col-xs-12 col-md-4 grow_plan pricing_footer grow_plan">
                    <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=5649">Add to Cart</a></button>
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

<?php get_footer(); ?>