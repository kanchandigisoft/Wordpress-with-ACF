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
                                <tr><td>Lazy load images</td><td><span class="">No</span></td></tr>
                            <tr><td>Server & javascript error analysis, conditional loading</td><td><span class="">No</span></td></tr>
                            
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