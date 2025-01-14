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