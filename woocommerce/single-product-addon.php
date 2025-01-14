<?php
/**
 *
 */

get_header(); ?>

<!-- custom price name -->
<?php if(is_product() && get_the_id() == 9258) { ?>

        <section class="cream">
            <div class="wrapper">
                <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                    <div class="col-xs-12 col-md-6 ">
                        <h1><?php the_field('header_one'); ?></h1>
                        <div class="sp-10"></div>
                        <p class="large"><?php the_field('header_two'); ?></p>
                        <div class="sp-20"></div>
                        <span class="inlinelogo shopifyexperts">Shopify Experts</span>
                        <div class="sp-60"></div>
                    </div>
                    <div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">

                        <?php if( have_rows('tasks_bullets') ): ?>

                            <ul class="feature-list large">

                        <?php while ( have_rows('tasks_bullets') ) : the_row(); ?>

                            <li><?php the_sub_field('bullet'); ?></li>

                        <?php endwhile; ?>

                        <?php else : ?>

                            </ul>

                        <?php endif; ?>
                        
                        <div class="sp-30"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="5">
            <div class="wrapper">
        <div class="sp-30"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row bottom-xs">
                            <div class="sp-30"></div>
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
                        </div>
                        <div class="row pricing">
        
                            <?php if( have_rows('pricing_tasks') ): ?>
    
                                    <table>

                            <?php while ( have_rows('pricing_tasks') ) : the_row(); ?>

                                <tr><td><?php the_sub_field('tasks'); ?></td><td><span class="icon-tick">Yes</span></td></tr>

                            <?php endwhile; ?>

                            <?php else : ?>

                                </table>

                            <?php endif; ?>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="row middle-xs pad-md-25 pad-top-bottom">

                    <div class="col-xs-12 col-md-8 pad-xs-25">

                    </div>

                    <div class="col-xs-12 col-md-4 lite_plan pricing_footer active">
                       <?php  wc_get_template( 'single-product/add-to-cart/simple.php' );?>
                    </div>
                    <div class="col-xs-12 start-xs end-md">
                        <div class="sp-20 hide-sm"></div>
                        <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                        <div class="sp-20"></div>
                    </div>
                </div>
            </div>
        </section>


<?php } else { ?>

    <section class="cream">
            <div class="wrapper">
                <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
                    <div class="col-xs-12 col-md-6 ">
                        <h1><?php the_field('header_one'); ?></h1>
                        <div class="sp-10"></div>
                        <p class="large"><?php the_field('header_two'); ?></p>
                        <div class="sp-20"></div>
                        <span class="inlinelogo shopifyexperts">Shopify Experts</span>
                        <div class="sp-60"></div>
                    </div>
                    <div class="col-xs-12 col-md-6 pad-xs-25 pad-md-60 pad-left-right">

                        <?php if( have_rows('tasks_bullets') ): ?>

                            <ul class="feature-list large">

                        <?php while ( have_rows('tasks_bullets') ) : the_row(); ?>

                            <li><?php the_sub_field('bullet'); ?></li>

                        <?php endwhile; ?>

                        <?php else : ?>

                            </ul>

                        <?php endif; ?>
                        
                        <div class="sp-30"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="5">
            <div class="wrapper">
        <div class="sp-30"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row bottom-xs">
                            <div class="sp-30"></div>
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
                            <?php $product = wc_get_product( $post->ID ); ?>
                                <h5 class="nomarginbottom"><?php the_field('task_name'); ?></h5>
                                <div class="sp-5"></div>
                                <p class="white-text"><?php echo get_woocommerce_currency_symbol(); echo $product->get_regular_price();?></p>
                                <button class="fullwidth red small"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php the_field('product_id'); ?>">Add to Cart</a></button>
                            </div>
                        </div>
                        <div class="row pricing">
                        

                            <?php if( have_rows('pricing_tasks') ): ?>
    
                                    <table>

                            <?php while ( have_rows('pricing_tasks') ) : the_row(); ?>

                                <tr><td><?php the_sub_field('tasks'); ?></td><td><span class="icon-tick">Yes</span></td></tr>

                            <?php endwhile; ?>

                            <?php else : ?>

                                </table>

                            <?php endif; ?>

                            </table>
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

                    <div class="col-xs-12 col-md-4 lite_plan pricing_footer active">

                        <button class="large red fullwidth"><a href="<?php home_url(); ?>/cart/?add-to-cart=<?php the_field('product_id'); ?>">Add to Cart</a></button>
                    </div>
                    <div class="col-xs-12 start-xs end-md">
                        <div class="sp-20 hide-sm"></div>
                        <p class="xs black-text"><a href="/contact/">Message us with final questions</a> <span class="icon chat"></span></p>
                        <div class="sp-20"></div>
                    </div>
                </div>
            </div>
        </section>


        <?php the_field('convertkit'); ?>
<?php } ?> 

<?php get_footer(); ?>