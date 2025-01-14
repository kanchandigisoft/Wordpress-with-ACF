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