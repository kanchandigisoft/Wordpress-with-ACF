<?php
/**
 *
 * Template name: 
 *
 * @package storefront
 */

get_header(); ?>

<?php if ( is_page( 'cart' ) ) { ?>

    <section class="breadcrumbs show-sm">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-25 pad-left-right">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>&gt;</span></li>
                        <li><a href="/ecommerce-marketing-services/">Marketing Services</a></li>
                        <li><span>&gt;</span></li>
                        <li class="current">Cart</li>
                    </ul>
                </div>
                <div class="col pad-xs-25 pad-left-right end-xs">
                  <!--  <p>Already working with Shopify Stores in <span class="medium" id="region"></span> <span class="icon globe" src="_/img/icon-globe.svg"></span></p>-->
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <h1>Shopping Cart</h1>
                    <p><strong>NB:</strong> To remove tax click proceed to checkout and change country option.</p>
                    <div class="hide-md sp-10"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <button class="large red fullwidth"><a href="/checkout/">Proceed to Checkout</a></button>
                </div>
            </div>
        </div>
    </section>

    <?php the_content(); ?>

    <section class="black white-text overflow" id="world">
        <div class="wrapper">
            <div class="row between-xs pad-xs-50 pad-sm-80 pad-top-bottom">
                <div class="col-xs-12 col-md-5 col-lg-5">
                    <h4>Why people choose Whole Design for their Shopify business growth</h4>
                    <div class="sp-20"></div>
                    <img class="clientlogo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-shopify-expert.svg" />
                    <div class="sp-40"></div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <ul class="ticks">
                        <li>Monthly cancel-anytime contracts, no long term commitments</li>
                        <li>Fully remote team with  savings passed on to you</li>
                        <li>Transparent pricing, no hidden fees or hourly rates</li>
                        <li>Value: Average ecom marketing manager salary 6.5k USD monthly</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php } else if ( is_account_page() ) { ?>

    <section class="breadcrumbs show-sm">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-20">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>></span></li>
                        <li class="current"><a href="#"><?php the_title(); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row center-xs text-left pad-md-20 pad-top-bottom">
                <div class="col-xs-12">
                    <div class="sp-60"></div>
                    <?php the_content(); ?>
                    <div class="sp-60"></div>
                </div>
            </div>
        </div>
    </section>

    <?php } else { ?>  

    <section class="breadcrumbs show-sm">
        <div class="wrapper">
            <div class="row middle-xs between-xs pad-xs-20 pad-top-bottom">
                <div class="col pad-xs-20">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>></span></li>
                        <li class="current"><a href="#"><?php the_title(); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row center-xs text-left pad-md-20 pad-top-bottom rte">
                <div class="col-xs-12 pad-xs-20">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>

<?php get_footer(); ?>

