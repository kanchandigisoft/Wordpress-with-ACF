<?php
/*
 * Template Name: Instagram-loop
 Template Post Type: product
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
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/instagram.svg" width="106" height="31" title="Instagram" alt="Instagram">  <span class="mx-3">+</span>  <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/icon-shopifyexperts.svg" width="158" height="27"  title="Shopify experts" alt="Shopify experts">
                    </div>
                    <div class="sp-60"></div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/stars.svg" class="mb-2"> 
                    <div class=""><strong>4.8 star review</strong> on Shopify Experts</div>
                    
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-left-right">
                    <script src="https://fast.wistia.com/embed/medias/kgarysfr9x.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_kgarysfr9x videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/kgarysfr9x/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
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
                            $ppc_form= get_field('popup_form_shortcode');
                            echo do_shortcode($ppc_form);
                        ?>
                    </div>

                    
                        <button class="dark-green btn-lg hup_ppc_audit_form_button"> 
                            <a href="#signup">See Current Campaigns</a>
                        </button>
                
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper" id="how-it-works">
        <div class="how-it-works">
            <div class="pad-xs-80 pad-top-bottom">
                <h3>How it works</h3>
                <div class="d-row">
                    <div class="col-label"><span class="bold">STEP 1</span></div>
                    <div class="col-bullet"><span class="bullet-step"></span></div>
                    <div class="col-text"> We find you influencers and celebrities with <strong>1M+ followers</strong>.</div>
                </div>
                
                <div class="d-row">
                    <div class="col-label"><span class="bold">STEP 2</span></div>
                    <div class="col-bullet"><span class="bullet-step"></span></div>
                    <div class="col-text">
                        The <strong>influencer publishes</strong> a post on their account with a giveaway.
                        We giveaway cash and luxury prizes like Gucci products worth 10 to 20 thousands dollars.
                    </div>
                </div>
            
                <div class="d-row">
                    <div class="col-label"><span class="bold">STEP 3</span></div>
                    <div class="col-bullet"><span class="bullet-step"></span></div>
                    <div class="col-text">
                        For people to enter the giveaway they have to <strong>follow a list of 50 accounts.</strong>
                        Your account is on that list.
                    </div>
                </div>

                <div class="d-row">
                    <div class="col-label"><span class="bold">STEP 4</span></div>
                    <div class="col-bullet"><span class="bullet-step"></span></div>
                    <div class="col-text">
                        Watch your account grow anywhere from <strong>1 to 10 thousand followers</strong> depending on your 
                        chosen package in <strong>just one or two days.</strong>

                        With active, real followers from your country that are targeted for your brand.

                    </div>
                </div>
            </div>
        </div> 
    </section>

    <?php if( have_rows('client_logos','option') ): ?>
        <section class="border-top" id="logos_wrappe">
            <div class="wrapper">
                <div class="sp-40"></div>
                <div class="carousel overflow" id="client-carousel-3">
                    <?php while ( have_rows('client_logos','option') ) : the_row(); ?>
                        <div class="carousel-cell col-xs-6 col-sm-4 col-md-3 col-lg-5th pad-xs-10">
                            <?php $image = get_sub_field('client_logo'); 
                            if( $image ) { echo wp_get_attachment_image( $image, 'full' ); } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="sp-40"></div>
            </div>
        </section>
    <?php endif; ?>


    <section class="bg-dark-green" id="results-expect">
        <div class="wrapper">
            <div class="sp-60"></div>
            <div class="d-row align-items-center col-xs-12">
                <div class="col-md-8 color-white t-display-32 ">
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/chart.svg" class="mr-2">
                        <span class="t-display-20 ">Results to expect</span>
                    </div>

                    <div class="sp-30"></div>

                    From <strong>1k-10k</strong> followers per promotion<br/>
                    <strong>Instant credibility</strong> in your brands niche<br/>
                    <strong>Real followers</strong> that engage with you<br/>
                    <strong>70%-90%</strong> retention rate of followers<br/>
                    <span style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/icon/bg-underline.png) no-repeat; background-position: center bottom; background-size: contain; padding-bottom: 20px;"><strong>Guaranteed</strong> results</span>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/content/result-image.jpg">
                    <div class="sp-20"></div>
                    <span class="color-white">by Charlotte · 15k new followers in 2 weeks</span>
                </div>
            </div>
            <div class="sp-60"></div>
        </div>
    </section>
   
    <?php if( have_rows('client_testimonials', 'option') ): ?>
        <section class="bg-gray testimonials" id="testimonials">
            <div class="sp-40"></div>
            <div class="wrapper ">
              
                <h3 class="center pad-sm-40">Customer Testimonials</h3>

                <div class="carousel morecarousel" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "prevNextButtons": false, "adaptiveHeight": true, "imagesLoaded": true }'>
                    <?php while( have_rows('client_testimonials', 'option') ): the_row(); ?>
                        <div class="carousel-cell">
                            <div class="pad-xs-0 pad-sm-40 pad-md-60 border rounded-xl testimonial">
                                <blockquote><?php the_sub_field('client_testimonials_job_testimonial'); ?></blockquote>
                                <div class="sp-40"></div>
                                <div class="row middle-xs">
                                    <div class="blockquote-img">
                                        <?php if($image = get_sub_field('client_testimonials_image')) 
                                            echo wp_get_attachment_image( $image, 'full' ); 
                                        ?>
                                    </div>

                                    <div class="col">
                                        <p class="medium nomarginbottom"><?php the_sub_field('client_testimonials_name'); ?></p>
                                        <cite><a href="<?php the_sub_field('client_testimonials_link'); ?>" target="_blank" ><?php the_sub_field('client_testimonials_job'); ?> <span class="icon newwindow"></span></a></cite>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="sp-40"></div>
        </section>
    <?php endif; ?>

    <?php
    $testimonials = new WP_Query( 
        array(
            'post_type' => 'case-studies',
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'channel',
                    'field'    => 'slug',
                    'terms'    => 'instagram',
                    ),
                ),
            )
        ); 
    ?>

    <?php if( $testimonials->have_posts() ) : ?>
        <section class="bg-gray case-studies" id="case-studies">
            <div class="sp-40"></div>
            <div class="wrapper">
                <h3 class="center pad-sm-40">Instagram Growth Case Studies</h3>
                <div class="sp-10"></div>

                <div class="carousel morecarousel" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "prevNextButtons": false }'>

                    <?php while( $testimonials->have_posts() ) : $testimonials->the_post(); 
                     
                        $image_id = get_field('post_thumbnail');

                       $image_array = wp_get_attachment_image_src($image_id, 'large');
                    ?>
               
                            <div class="case-studie-item">
                    
                                <div class="case-studie-item-image">
                                    <img src="<?php echo $image_array[0]; ?>" />
                                </div>
              
                                <div class="case-studie-item-content">
                                    <div class="h5">
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
                                    <a href="<?php echo get_permalink(); ?>"><h4 class="h3"><?php the_field('preview_title'); ?></h4></a>
                                    <p class="lightgrey-text"><?php the_field('preview_description'); ?></p>
                                    <img class="clientlogo" src="<?php the_field('logo'); ?>">
                                </div>
                            </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="sp-40"></div>
            </div>
        </section>
    <?php endif; ?>


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

    <section class="bg-gray case-studies" id="pricing">
        <div class="sp-40"></div>
        <div class="wrapper">
            <h3 class="center pad-sm-40">Pricing + Current Loops</h3>
            <div class="sp-10"></div>
            
            <div class="row">
                <div class="col-md-5 col-xs-12">
                
                    <div class="d-flex mb-3">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/pricing-incon-1.svg" class="mr-4 align-self-start">
                        <div>
                            <h4 class="bold">ACCOUNT SAFETY</h4>
                            <p>We don’t ask for your Instagram password, your account cannot get shadowbanned or blocked. Ourservice is compliant with the Instagram terms of service.</p>
                        </div>
                    </div>

                    <div class="sp-20"></div>

                    <div class="d-flex mb-3">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/pricing-incon-2.svg" class="mr-4 align-self-start">
                        <div>
                            <h4 class="bold">GUARANTEED RESULTS</h4>
                            <p>We guarantee the growth package you pay. If you don’t get the new followers promised, we’ll add you to another campaign for free.</p>
                        </div>
                    </div>

                    <div class="sp-20"></div>

                    <div class="d-flex mb-3">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon/pricing-incon-3.svg" class="mr-4 align-self-start">
                        <div>
                            <h4 class="bold">ACCOUNT MANAGER</h4>
                            <p>Service and communication is what our clients love, that’s why we will provide you with a dedicated account manager no matter what size package you buy.</p>        
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 ml-auto">
                    <table class="table-pricing">
                        <thead>
                            <tr>
                                <th>New Followers</th>
                                <th class="d-flex">
                                    <span>One-time Price</span>
                                </th>
                            </tr>
                        </thed>
                        <tbody>





                            <tr>
                                <td>1k</td>
                                <td>$449</td>
                            </tr>
                            <tr>
                                <td>2k</td>
                                <td>$699</td>
                            </tr>
                            <tr>
                                <td>3k</td>
                                <td>$975</td>
                            </tr>
                            <tr>
                                <td>4k</td>
                                <td>$1,049</td>
                            </tr>
                            <tr>
                                <td>5k</td>
                                <td>$1,199</td>
                            </tr>
                            <tr>
                                <td>6k</td>
                                <td>$1,349</td>
                            </tr>
                            <tr>
                                <td>7k</td>
                                <td>$1,499</td>
                            </tr>
                            <tr>
                                <td>8k</td>
                                <td>$1,649</td>
                            </tr>
                            <tr>
                                <td>9k</td>
                                <td>$1,849</td>
                            </tr>
                            <tr>
                                <td>10k</td>
                                <td>$1,949</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
      <section id="signup" class="border-top">
        <div class="sp-60"></div>
        <div class="wrapper center">



           
            <div class="row pad-xs-20 pad-top-bottom">
           


            <h2 class="t-display-56 bold color-black">Access Current IG Loop Campaigns</h2>
            <p class="t-display-20">Sign up below and we'll send you access to our current campaigns and discounts.</p>
            <script async data-uid="07fb3ec74d" src="https://wds.ck.page/07fb3ec74d/index.js"></script>

        </div>

        </div>
        <div class="sp-60"></div>
    </section>

    <section id="faq">
        <div class="wrapper">

            <div class="pad-xs-60 pad-top-bottom">
                <h3 class="col-xs-12">FAQ</h3>
                <div class="row ">
                    <div class="col-xs-12 col-md-6 ">
                        
                    
                        <?php if( have_rows('faq') ): ?>

                            <ul class="faq">

                        <?php while ( have_rows('faq') ) : the_row(); ?>

                            <li class=""><h6><?php the_sub_field('question'); ?></h6><p class="xs"><?php the_sub_field('answer'); ?></p></li>

                        <?php endwhile; ?>

                            </ul>

                        <?php else : ?>

                        <?php endif; ?>

                    </div>
                    <div class="col-xs-12 col-md-6 ">

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
        </div>
    </section>




<?php the_field('convertkit'); ?>

<?php get_footer(); ?>
