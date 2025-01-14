<?php
/**
 *
 * Template name: Shopify Designers
 *
 * @package storefront
 */

get_header(); ?>

    <section class="cream">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                <div class="col-xs-12 col-md-6 ">
                    <h1>Shopify designers with 12 years experience in ecommerce UX</h1>
                    <div class="sp-10"></div>
                    <p class="large">Custom Shopify theme design & development services for ecommerce brands</p>
                    <div class="sp-20"></div>
                    <button class=""><a href="/shopify-developers/">Get An Instant Quote</a></button><span class="wd-20 sp-20"></span>
                    
                    <div class="sp-60"></div>
                </div>
                <div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">
                    <ul class="feature-list large">
                        <li>Custom theme design</li>
                        <li>Ecommerce UX design best practices</li>
                        <li>Optimized for high conversion rates </li>
                        <li>SEO Ready</li>
                        <li>Fast page load times and site speed</li>
                        <li>Mobile-first design</li>
                        <li>Responsive design for all devices and screen sizes</li>
                        <li>Ongoing marketing and design support  </li>
                    </ul>
                    <div class="sp-30"></div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="wrapper">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row between-xs bordertop">
                            <div class="col pad-xs-20 pad-top-bottom">
                                <p class="small">⚡ &nbsp;Best Shopify web designers & developers, founded in London, UK</p>
                            </div>
                            <div class="col pad-xs-20 pad-top-bottom end-xs">
                                <p class="small"><span class="inlinelogo shopify">Shopify</span>&nbsp; + &nbsp;<span class="inlinelogo shopifyplus">Shopifyplus</span></p><div class="sp-10 hide-sm"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="submenucontainer show-md sticky-toc">
        <div class="submenu white">
            <div class="wrapper breadcrumbs">
                <div class="row middle-xs between-xs pad-xs-10 pad-top-bottom">
                    <div class="col pad-xs-25 pad-left-right">
                        <ul>
                            <li><a href="#1">Examples</a></li>
                            <li><a href="#2">Project Types</a></li>
                            
                            <li><a href="#3">How it Works</a></li>
                            <li><a href="#4">Process</a></li>
                            <li><a href="#5">About</a></li>
                        </ul>
                    </div>
                    <div class="col pad-xs-25 pad-left-right end-xs">
                        <button class="red"><a href="/shopify-developers/">See Packages & Pricing</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
            
          <section class="lightgrey" id="1">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="col-xs-12 pad-sm-30">
                <div class="row between-xs middle-xs">
                    <div class="col">
                        <h2>Shopify Store Examples</h2>
                    </div>
                    <div class="col text-right">
                        <a class="all" href="/shopify-store-examples/">All</a>
                    </div>
                </div>
            </div>

            <?php
                $args = array(
                  'post_type'   => 'work',
                  'post_status' => 'publish',
                 );
                 $works = new WP_Query( $args ); if( $works->have_posts() ) :
                 ?>

                 <div class="carousel morecarousel" id="store-examples-1">

              <?php while( $works->have_posts() ) : $works->the_post(); ?>


                <div class="col-xs-12 col-md-6 carousel-cell">
                    <div class="sp-10"></div>
                    <div class="row store white">
                        <div class="col-xs-12 pad-xs-0" >
                            <a href="<?php the_permalink(); ?>">
                                
                                <?php $image = get_field('single_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                            </a>
                        </div>
                        <div class="col-xs-12 pad-xs-30 pad-sm-40 pad-left-right">
                            <div class="sp-25"></div>
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                                <div class="h5 tax"><?php $terms = get_the_terms( get_the_ID(), 'vertical' ); // Retrieve terms of the "vertical" taxonomy
                            if ( $terms && ! is_wp_error( $terms ) ) {
                                foreach ( $terms as $term ) {
                                    echo $term->name . ' '; // Display each term name
                                }
                            } ?></div>
                                <div class="sp-40"></div>
                            </a>
                        </div>
                    </div>
                    <div class="sp-30"></div>
                    <div class="sp-40 show-md"></div>
                </div>


                  <?php endwhile; wp_reset_postdata(); ?>

                <?php else : endif; ?>   

                
            </div>
            <div class="sp-30"></div>
            <div class="sp-40 hide-sm"></div>
        </div>

    </section>

    <section id="2">
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="sp-30 show-sm"></div>
            <div class="row pad-xs-0 pad-top-bottom">
                <div class="col-xs-12">
                    <h3>Experienced in all project types</h3>
                    <div class="sp-10 show-sm"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <h6>Replatform</h6>
                    <p class="xs">If you’re looking to move from a legacy ecommerce platform to Shopify, we can help! We’ve migrated stores from Magento, Woocommerce, Bigcommerce and more. We’ll even help tackle SEO migration.</p>
                    <p class="xs"><a href="/shopify-developers/">Get An Instant Quote</a></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <h6>Redesign</h6>
                    <p class="xs">If you need to redesign and optimize your Shopify store, we’ll help you build in all the ecommerce best practices needed to increase conversion rates and profits.</p>
                    <p class="xs"><a href="/shopify-developers/">Get An Instant Quote</a></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <h6>New brand</h6>
                    <p class="xs">As a new brand on Shopify, we’ve got packages to help you get started with an affordable custom theme. Keeping Shopify app costs to a minimum while you scale up. </p>
                    <p class="xs"><a href="/shopify-developers/">Get An Instant Quote</a></p>
                </div>
            </div>
            <div class="row show-sm">
                <div class="col-xs-12">
                    <hr>
                </div>
            </div>
            <div class="row pad-xs-0 pad-top-bottom middle-xs">
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25 center-xs show-sm">
                    <span class="inlinelogo shopifyplus"></span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 pad-xs-25">
                    <h6>Shopify Plus</h6>
                    <p class="xs">If you need help with Shopify plus, we’re experienced in replatforming, data migration, custom features and app development. Warehouse and ERP integration, multi-store synching, multi-currency and multi-language. Google analytics, tag manager and data studio setup. Including full PCI and GDPR compliance.</p>
                    <p class="xs"><a href="/shopify-developers/">Get An Instant Quote</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="fullwidth large"><a href="/shopify-developers/">Get An Instant Quote</a></button>
                </div>
            </div>
            <div class="sp-30 show-sm"></div>
            <div class="sp-40"></div>
        </div>
    </section>
    <section class="lightgrey" id="3">
        <div class="wrapper">
            <div class="sp-70"></div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h3>How it Works</h3>
                    <div class="sp-20"></div>
                </div>
                <div class="col-xs-12 col-md-8">
                    <ol class="numbered">
                        <li>Select your project type, feature add-ons and Shopify apps</li>
                        <li>Hand over assets to us and book your kick-off call</li>
                        <li>Get regular updates and feedback with your account manager as we design and launch your site</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h4>How long does a project take?</h4>
                </div>
                <div class="col-xs-12 col-md-8">
                    <p>Our theme launch process is split up into 3 phases. Design, development & quality assurance. Typically a new brand with our Foundation package will take around 4 weeks for design, 4 weeks for development and 2-4 weeks for quality assurance. So 3 months in total. If you are replatforming, adding complex custom features or launching a Shopify Plus store; project times will be longer and more varied.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-4">
                    <h4>What do we need to get started?</h4>
                </div>
                <div class="col-xs-12 col-md-8">
                    <p>Once we’ve scoped out the project with you, you’ll hand over copy and design assets. To start we need at least a draft of your copy and lifestyle image assets. If we’re writing your copy or sourcing imagery for you, then we simply get started.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="fullwidth large"><a href="/shopify-developers/">Get An Instant Quote</a></button>
                </div>
            </div>
            <div class="sp-30 show-sm"></div>
            <div class="sp-40"></div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="sp-40"></div>
            <div class="sp-30 show-sm"></div>
            <div class="row pad-xs-0 pad-top-bottom">
                <div class="col-xs-12">
                    <h3>Benefits of working with Whole.</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-13.svg" class="wd-80">
                    <div class="sp-30"></div>
                    <h6>Everything Managed For You</h6>
                    <p class="xs">You want to improve your website conversion rates and sales, but you’re busy running your business. We take care of your Shopify design & development project so you can focus on growth.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-14.svg" class="wd-80">
                    <div class="sp-30"></div>
                    <h6>Clear timelines and deliverables</h6>
                    <p class="xs">Your project will have clear milestones for delivery. If there is scope creep, we’ll clearly communicate new timelines for when your store will launch.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-15.svg" class="wd-80">
                    <div class="sp-30"></div>
                    <h6>Account manager feedback & updates</h6>
                    <p class="xs">Work with a dedicated account manager as a single point of contact for your project. Ensuring peace of mind and clear communication throughout the design & development process.</p>
                </div>
            </div>
            <div class="row show-sm">
                <div class="col-xs-12">
                    <hr>
                </div>
            </div>
            <div class="row pad-xs-0 pad-top-bottom">
                <div class="col-xs-12 col-sm-6 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-16.svg" class="wd-80">
                    <div class="sp-30"></div>
                    <h6>Ecommerce best practices as standard</h6>
                    <p class="xs">We’ve spent the last 12 years A/B testing high traffic & transaction volume ecommerce stores. So we know what works when it comes to ecommerce design best practices. We’ll build in all the elements you need for each page template to ensure high conversion rates. Getting more people to buy is our #1 priority in your Shopify theme project.</p>
                </div>
                <div class="col-xs-12 col-sm-6 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-17.svg" class="wd-80">
                    <div class="sp-30"></div>
                    <h6>Transparent Pricing</h6>
                    <p class="xs">Most Shopify expert partners and agencies don’t show their pricing on their website. This is so they can test higher pricing on larger businesses. We have all our pricing transparent and upfront, no hidden fees, hourly rates or unexpected bills. Get a clear picture of cost and deliverables from day #1.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="fullwidth large"><a href="/shopify-developers/">Get An Instant Quote</a></button>
                </div>
            </div>
            <div class="sp-30 show-sm"></div>
            <div class="sp-40"></div>
        </div>
    </section>
    <section class="lightgrey" id="4">
        <div class="wrapper">
            <div class="sp-70"></div>
            <div class="row pad-xs-20 center-sm pad-top-bottom">
                <div class="col-xs-12 col-md-9 col-lg-10">
                    <h3 class="large">Our Shopify Theme Design & Development Process</h3>
                    <div class="sp-10"></div>
                    <p>The first step is to understand your project type and scope. Once we plan all your features it’s time to get started. Learn more about our design and development process below.</p>
                </div>
            </div>
            <div class="sp-30"></div>
            <div class="row pad-xs-0 pad-top-bottom center-sm">
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-06.png" class="wd-80">
                    <div class="sp-20"></div>
                    <h6>Designed in Sketch</h6>
                    <p class="xs">We create your website designs in Sketch. Widely considered the leading design tool in <?php echo do_shortcode('[year]'); ?>. We create designs for desktop, tablet and mobile devices. So you can see and understand the user experience across devices types and screen sizes before we commence development work. We include all the ecommerce best practices needed to ensure high conversion rates.</p>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-07.svg" class="wd-80">
                    <div class="sp-20"></div>
                    <h6>Design feedback with Invision</h6>
                    <p class="xs">For design feedback and iteration we use Invision. Invision is the leading tool for design commenting and collaboration. No messy emails or time-consuming annotations, just click and collaborate.</p>
                   
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-08.svg" class="wd-80">
                    <div class="sp-20"></div>
                    <h6>Save 20% of development fees with Zeplin</h6>
                    <p class="xs">When handing over design files to our development team we use Zeplin. This saves around 20% in development time and costs which are handed over to you in our pricing. Zeplin allows the developer access to machine written CSS for all design elements. Meaning a lot of time efficiency when writing your CSS.</p>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-09.svg" class="wd-80">
                    <div class="sp-20"></div>
                    <h6>Robust browser & device testing</h6>
                    <p class="xs">We take responsive design seriously and test your code base in all the modern browsers across common device types. We use BrowserStack for robust remote browser testing and device emulation.</p>
                   
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-10.svg" class="wd-80">
                    <div class="sp-20"></div>
                    <h6>Fast page load times as standard</h6>
                    <p class="xs">Because we know page load times are really important. Fast loading themes come as standard. If you use a lot of apps or are a Shopify plus store, you can also sign up to our <a href="/shopify-speed-optimization/">Shopify speed optimization service</a>. For those looking for perfection in page load times.</p>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-11.svg" class="wd-80">
                    <div class="sp-20"></div>
                    <h6>SEO Ready</h6>
                    <p class="xs">Our themes development process includes coding up all the meta tags as needed for on-page SEO best practices. We can also include rich snippets for reviews and other metadata as needed.</p>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 pad-xs-25">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/designers-12.svg" class="wd-200">
                    <div class="sp-20"></div>
                    <h6>Internal & External Quality Assurance Process</h6>
                    <p class="xs">We have a 4 step quality assurance process for all Shopify themes. Two internal rounds of quality assurance for bug fixes and preparation for handover. Then two rounds of external quality assurance with you to ensure you’re ready to use and happy to launch. We use Trello kanbans for development bug ticketing.</p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button class="fullwidth large"><a href="/shopify-developers/">Get An Instant Quote</a></button>
                </div>
            </div>
            <div class="sp-30 show-sm"></div>
            <div class="sp-40"></div>
        </div>
    </section>
    
   <section class="black white-text overflow" id="5">
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
    
 <section class="white">
    <div class="wrapper">
        <div class="sp-40"></div>
        <div class="col-xs-12 pad-sm-30">
            <div class="row between-xs middle-xs">
                <div class="col">
                    <h2>Customer Testimonials</h2>
                </div>
                <div class="col text-right">
                    <a class="all" href="/whole-design-studios-reviews/">All</a>
                </div>
            </div>
        </div>

        <?php if( have_rows('client_testimonials', 'option') ): ?>

          <div class="carousel morecarousel" id="testimonial-carousel-4">

            <?php while( have_rows('client_testimonials', 'option') ): the_row(); ?>

                <div class="col-xs-12 carousel-cell">
                <div class="row">
                    <div class="col-xs-12 pad-xs-0 pad-sm-40 pad-md-60 border rounded-xl testimonial">
                        <blockquote><?php the_sub_field('client_testimonials_job_testimonial'); ?></blockquote>
                        <div class="sp-40"></div>
                        <div class="col-xs-12 pad-xs-0">
                            <div class="row middle-xs">
                                <div class="col-xs avatar round pad-right">
                                    
                                    <?php $image = get_sub_field('client_testimonials_image'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                                </div>
                                <div class="col">
                                    <p class="medium nomarginbottom"><?php the_sub_field('client_testimonials_name'); ?></p>
                                    <cite><a href="<?php the_sub_field('client_testimonials_link'); ?>" target="_blank" ><?php the_sub_field('client_testimonials_job'); ?> <span class="icon newwindow"></span></a></cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

           
            <?php endwhile; ?>

            </div>

        <?php endif; ?>

        </div>
        <div class="sp-40"></div>
        <div class="sp-30"></div>
    </div>
</section>

    <section class="cream">
        <div class="wrapper">
            <div class="row middle-xs center-xs pad-xs-60 pad-sm-80 pad-top-bottom">
                <div class="col-xs-12">
                    <h2>Get an instant quote</h2>
                    <div class="sp-10"></div>
                    <p class="large">Use our custom Shopify theme quote builder to get an instant quote.</p>
                    <div class="sp-20"></div>
                    <button class="large"><a href="/shopify-developers/">Start Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <script async data-uid="7d76f283bb" src="https://f.convertkit.com/7d76f283bb/bb465deb6f.js"></script>

<?php get_footer(); ?>

<script>
    window.onscroll = function() { stickyFunction() };

    var toc = document.querySelector(".sticky-toc");
    var sticky = toc.offsetTop;

    function stickyFunction() {
        if (window.pageYOffset >= sticky) {
            toc.classList.add("sticky-navbar");
        } else {
            toc.classList.remove("sticky-navbar");
        }
    } 
</script>