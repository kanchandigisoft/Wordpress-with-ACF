<?php
/**
 *
 * Template name: Shopify Developers
 *
 * @package storefront
 */
 
get_header(); ?>

<section class="cream">
        <div class="wrapper">
            <div class="row pad-xs-20 pad-sm-80 pad-top-bottom">
                <div class="col-xs-12 pad-xs-0">
                    <div class="row center-xs">
                        <div class="col-xs-12 col-md-10 col-lg-8">
                            <h1>Get an instant quote for your Shopify theme project</h1>
                            <div class="sp-10"></div>
                        </div>
                    </div>
                    <div class="row center-xs">
                        <div class="col-xs-12 col-md-7 col-lg-5">
                            <p class="large">Custom Shopify theme design & development service with packages & pricing</p>
                            <div class="sp-10"></div>
                            <div class="sp-20 show-sm"></div>
                            <button class="large hup_shopify_developer_scroll"><a href="javascript:void(0)">Start my quote</a></button>
                            <div class="sp-20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row center-xs">
                <div class="col-xs-12 col-md-8 pad-left-right">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-quote.svg" class="block"/>
                </div>
            </div>
        </div>
        <a href="#quote" class="scrolldownarrow"></a>
    </section>
    <section class="pad-xs-60 pad-top-bottom" id="quote">
        <div class="wrapper">
            <div class="row">
                <div class="col-xs-12 pad-xs-0 pad-sm-25">
                    <div class="row option-group expanded active preselected">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <h4>Choose your <i>Foundation</i> package</h4>
                                    <p id="base_project_p" class="white-text underlined"><a target="_blank" href="/foundation/">Learn what our Foundation packages include</a></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_project" name="project" value="new_store" type="radio" checked />
                                                <span><h4>New Store</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Kickstart your Shopify store with a custom theme design. Perfect for new brands or retail / wholesale brands growing direct to consumer channels.</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="hup_shopify_developer_price" >$4999 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_project" name="project"  value="redesign" type="radio"  />
                                                <span><h4>Redesign</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Redesign your Shopify store with a custom theme design. Great for growing or larger businesses looking to increase conversion rates.</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="hup_shopify_developer_price">$4999 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_project" name="project"  value="replatform" type="radio"  />
                                                <span><h4>Replatform</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Migrate your store to Shopify or Shopify plus from alternative platforms like Magento, Woocommerce, Bigcommerce & more.</p>
                                            <div class="input-field">
                                                <select>
                                                    <option value="" disabled selected>Select existing platform...</option>
                                                    <option value="1">Magento</option>
                                                    <option value="2">Woocommerce</option>
                                                    <option value="3">Bigcommerce</option>
                                                    <option value="4">Other</option>
                                                </select>
                                            </div>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="hup_shopify_developer_price" >$4999 USD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row option-group expanded active preselected hup_choose_shopify_pricing_plan">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <h4>Choose your Shopify pricing plan</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="plan" type="radio" checked />
                                                <span><h4>Basic Shopify</h4></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="plan" type="radio"  />
                                                <span><h4>Shopify</h4></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="plan" type="radio"  />
                                                <span><h4>Advanced</h4></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="plan" type="radio"  />
                                                <span><h4>Shopify Plus</h4></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row option-group expanded hup_domain_name_setup hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="domain_name_setup" class="filled-in hup_outer_checkbox"/>
                                        <span><h4>Domain name set up</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="domain" type="radio" checked />
                                                <span><h4>Setup your domain name & point to Shopify nameservers, set up your emails</h4></span>
                                            </label>
                                            <div class="sp-10"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price" >$99 USD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_replatforming_data_migration hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="replatforming_data_migration" class="filled-in hup_outer_checkbox" />
                                        <span><h4>Replatforming data migration</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="replatforming" type="radio" checked />
                                                <span><h4>Migrate the data from my existing store</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs indent">Quoting on data migration projects takes time, please send log in access to your legacy ecommerce platform to the email <a href="mailto:hello@wholedesignstudios.com">hello@wholedesignstudios.com</a> and we’ll manually send this part of the quote to you.</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price">POA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="seo_migration" class="filled-in hup_outer_checkbox" />
                                        <span><h4>SEO Migration</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="migrate" type="radio" checked />
                                                <span><h4>Migrate the SEO data from my existing store</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs indent">Quoting on SEO migration projects takes time, please send log in access to your legacy ecommerce platform to the email <a href="mailto:hello@wholedesignstudios.com">hello@wholedesignstudios.com</a> and we’ll manually send this part of the quote to you.</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price">POA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox"  name="branding_and_logo_packaging"class="filled-in hup_outer_checkbox" />
                                        <span><h4>Branding & logo packages</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="branding" type="radio" checked />
                                                <span><h4>Brand package</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Craft your unique Shopify brand with our team of experts, you’ll get:</p>
                                            <p class="xs">•  1 Hour Brand workshop video call<br/>•  Brand guidelines booklet<br/>•  Logo including vector files<br/>•  Logo exported for social media.<br/><br/><a href="<?php echo get_field('branding_&_logo_packages_brand_package','option')?>" target="_blank" class="hup_montly_note">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="hup_shopify_developer_price">$1399 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="branding" type="radio"  />
                                                <span><h4>Logo package</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Design or redesign your Shopify brand logo with our team, you’ll get:</p>
                                            <p class="xs">•  Logo including vector files<br/>•  Logo exported for social media.<br/><br/><a class="hup_montly_note" href="<?php echo get_field('branding_&_logo_packages_logo_package','option')?>" target="_blank">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price hup_shopify_developer_price">$699 USD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="copywriting_packages" class="filled-in hup_outer_checkbox" />
                                        <span><h4>Copywriting packages</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="copy" type="radio" checked />
                                                <span><h4>Copy</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Craft your home and about page copy based on guidelines completed by you.</p>
                                            <p class="xs">• Brand voice guidelines worksheet<br/>• Homepage copy<br/>• About page copy</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="copy" type="radio"  />
                                                <span><h4>Copy plus</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Craft your home and about page copy based on guidelines completed by you. Create your value proposition.</p>
                                            <p class="xs">• Brand voice guidelines worksheet<br/>• Value proposition<br/>• Homepage copy<br/>• About page copy</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div class="row">
                                            <p class="price hup_shopify_developer_price">$349 USD</p>
                                        </div>
                                    </div>
                                </div>
                               <!--  <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="copy" type="radio"  />
                                                <span><h4>Custom</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">How many unique pages of approximately 1k words of content do you need creating?</p>
                                            
                                        </div>
                                        <div class="sp-20"></div>
                                        <div class="quantity border rounded">
                                                <div>–</div>
                                                <input id="copy_quantity" type="text" value="1" />
                                                <div>+</div>
                                            </div>
                                            <div class="sp-20"></div>
                                        <div class="bordertop sp-20"></div>
                                        <div class="row between-xs ">
                                            <div><p class="price">Total</p></div>
                                            <div><p class="price hup_shopify_developer_price">$175 USD</p></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="seo_packages" class="filled-in hup_outer_checkbox" />
                                        <span><h4>SEO packages</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="seo" type="radio" checked />
                                                <span><h4>SEO lite</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">• <b>9-12 months</b> to see results<br/>• Typical for <b>200k</b> USD annual revenue </p>
                                            <div class="sp-20"></div>
                                        </div>
                                        <div class="row between-xs">
                                            <div><p class="price hup_shopify_developer_price">$699 USD</p></div>
                                            <div><p class="xs">per month</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="seo" type="radio"  />
                                                <span><h4>SEO grow</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">• <b>6 months</b> to see results<br/>• Typical for <b>500k</b> USD annual revenue </p>
                                            <div class="sp-20"></div>
                                        </div>
                                        <div class="row between-xs">
                                            <div><p class="price hup_shopify_developer_price">$1499 USD</p></div>
                                            <div><p class="xs">per month</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="seo" type="radio"  />
                                                <span><h4>SEO pro</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">• <b>3 months</b> to see results<br/>• Typical for <b>1m</b> USD annual revenue </p>
                                            <div class="sp-20"></div>
                                        </div>
                                        <div class="row between-xs">
                                            <div><p class="price hup_shopify_developer_price">$3999 USD</p></div>
                                            <div><p class="xs">per month</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="legal_templates" class="filled-in hup_outer_checkbox" />
                                        <span><h4>Legal templates</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="legal" type="radio" checked />
                                                <span><h4>Privacy policy, terms of service,  shipping & returns policy*</h4></span>
                                            </label>
                                            <div class="sp-10"></div>
                                            <p class="xs indent">*works for e-commerce businesses with both domestic and international delivery and drop shipping</p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price">$199 USD one time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="addon_page_templates_and_features" class="filled-in hup_outer_checkbox" />
                                        <span><h4>Add-on page templates & features</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Blog design</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Archive and single blog post template.<br/><br/><a class="hup_montly_note" href="<?php echo get_field('add-on_page_templates_&_features_blog_design','option')?>" target="_blank">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price hup_shopify_developer_price">$749 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Size guide</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Size guide design and pop up.<br/><br/><a class="hup_montly_note" href="<?php echo get_field('add-on_page_templates_&_features_size_guide','option')?>" target="_blank">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price hup_shopify_developer_price">$349 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Account pages</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Addresses, orders, login/sign up, password reset.<br/><br/><a class="hup_montly_note" href="<?php echo get_field('add-on_page_templates_&_features__account_pages','option')?>" target="_blank">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price hup_shopify_developer_price">$899 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Searchanize</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Advanced collection page filtering and site search functionality.<br/><br/><a class="hup_montly_note" href="<?php echo get_field('add-on_page_templates_&_features__searchanize','option')?>" target="_blank">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price hup_shopify_developer_price">$669 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Two step email opt-in</h4></span>
                                            </label>
                                            <div class="sp-20"></div>
                                            <p class="xs">Improve your visitor to lead conversion rates<br/><br/><a class="hup_montly_note" href="<?php echo get_field('add-on_page_templates_&_features_two_step_email_opt-in','option')?>" target="_blank">See examples</a></p>
                                            <div class="sp-0"></div>
                                        </div>
                                        <div>
                                            <p class="price hup_shopify_developer_price">$509 USD</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="shopify_app_integration" class="filled-in hup_outer_checkbox" />
                                        <span><h4>Shopify app integrations</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row joined">
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input  type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Review app</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="http://stamped.io/signup?r=wholedesignstudios" target="_blank">Stamped.io or Shopify reviews</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">From free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$239 USD</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Back in stock</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://backinstock.org" target="_blank">backinstock.org</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">$19/month</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$269 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Returns</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="http://affiliate.boldapps.net/apps/returns-manager?ref=wholedesignstudioss" target="_blank">Bold Returns Mananger</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">From free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Loyalty</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://smile.grsm.io/wds" target="_blank">Smile.io</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">From free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Shipping tracking</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://www.aftership.com/" target="_blank">Aftership</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">From free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Gift cards</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://apps.shopify.com/rise-ai?utm_source=affiliate&gw_p=jqMiyAz0B" target="_blank">Rise.ai</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">$19.99/month</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Custom Lookbook</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="" target="_blank">Custom</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">From free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$529 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Live chat</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://gorgias.grsm.io/GilesThomas" target="_blank">Gorgias</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">$60/month</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">Free</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Currency</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="http://affiliate.boldapps.net/apps?ref=wholedesignstudios" target="_blank">Bold multi currency</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">Free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Multi language</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://dashboard.weglot.com/register?fp_ref=giles98" target="_blank">Weglot</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">From free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$269 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Subscriptions</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="http://shopifysubscriptions.com/affiliate/2262" target="_blank">Recharge</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">$39.99/month</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$219 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Wishlist</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://apps.shopify.com/swym-relay" target="_blank">Wishlist Plus</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">Free free</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$349 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-10 no-column middle-xs">
                                        <div class="col-xs-12 col-sm-6 col-md-4 pad-xs-10">
                                            <label>
                                                <input type="checkbox" class="filled-in hup_inner_checkbox" />
                                                <span><h4>Pre order</h4></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4 start-xs end-sm start-md pad-xs-10">
                                            <p class="xs"><a href="https://apps.shopify.com/pre-order" target="_blank">Spur it</a></p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 start-xs end-md">
                                            <p class="xs">$24.95/month</p>
                                        </div>
                                        <div class="col-xs-6 col-md-2 pad-xs-10 end-xs">
                                            <p class="price hup_shopify_developer_price">$175 USD</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="post_launch_support" class="filled-in hup_outer_checkbox" />
                                        <span><h4>Post-launch support</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="support" type="radio" checked />
                                                <span><h4>Get 2 weeks of post launch development support for bugs missed in the 4 rounds of quality assurance</h4></span>
                                            </label>
                                            <div class="sp-15"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price">$499 USD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                    <div class="row option-group expanded hup_common_checkbox">
                        <div class="col-xs-12 pad-xs-10">
                            <div class="row">
                                <div class="col-xs-12 pad-xs-10 option-head">
                                    <label>
                                        <input type="checkbox" name="google_analytics_and_google_tag_manager"class="filled-in hup_outer_checkbox" />
                                        <span><h4>Google Analytics & Google Tag Manager</h4></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="ga" type="radio" checked />
                                                <span><h4>Google Analytics setup</h4></span>
                                            </label>
                                            <div class="sp-15"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price">$99 USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 pad-xs-10 option">
                                    <div class="row pad-xs-25">
                                        <div>
                                            <label>
                                                <input class="with-gap hup_inner_radio" name="ga" type="radio"  />
                                                <span><h4>Google Analytics & Tag Manager setup</h4></span>
                                            </label>
                                            <div class="sp-15"></div>
                                        </div>
                                        <div>
                                            <p class="price indent hup_shopify_developer_price">$198 USD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="accordion-toggle"></button>
                    </div>
                </div>
            </div>
            <div class="sp-20"></div>
        </div>
        <div id="quote-cart" class="blue white-text fullwidth active">
            <div class="wrapper">
                <div class="row middle-xs">
                    <div class="col-xs-12 col-md-6 pad-xs-0 relative">
                        <div class="row" id="quote-cart-content">
                            <div id="quote-cart-close" class="fullwidth outline"><img class="hup_shopify_downarrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-downarrow.svg" /></div>
                            <table class="hup_store_developer_details_list">
                                <tbody class="hup_tbody">
                                   <tr class="hup_store_value">
                                        <td class="lightgrey-text hup_td hup_project_type">Base project type: New Store</td>
                                        <td class="lightgrey-text hup_td" >$4999</td>
                                        
                                    </tr>
                                    <!-- <tr class="hup_store_developer_item">
                                        <td class="hup_store_developer_item_name">Domain name set up</td>
                                        <td class="hup_shopify_developer_price">$99</td>
                                        <td>—</td>
                                    </tr> -->
                            
                                 
                                </tbody>
                            </table>
                        </div>
                        <div class="row pad-xs-25 middle-xs between-xs blue">
                            <div>
                                <p class="show-md nomarginbottom">Your Custom Shopify Theme Quote</p>
                                <p class="hide-md nomarginbottom">Total - $5098</p>
                            </div>
                            <div>
                                <p><a href="javascript:void(0);" class="no-underline" id="quote-cart-show-hide"><span class="cart-show">Show</span><span class="cart-hide">Hide</span> items</a></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-xs-12 col-md-6 blue">
                        <div class="row middle-xs between-xs pad-xs-25 pad-md-0 pad-top-bottom">
                            <div class="show-md">
                                <p>Total - $<span class="hup_price">4999</span></p>
                            </div>
                            <div class="col-xs-12 col-md-8 pad-xs-0 end-xs">
                                <a href="javascript:void(0)" class="large outline hup_shopify_developer_form_button">Book a Call</a>
                                <div class="wd-10"></div>
                                <div class="hup_shopify_developer_convertkit_form" style="display: none;">
                                </div>
                                <!-- <button class="red large">Add to Cart</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div id="hup_shopover_dialog" class="hup_shop_dialog hup_shop_dialog_open">
	<div class="hup_shop_dialog_overlay"></div>
	<form class="hup_shop_dialog_content_form" method="post">
		<div class="hup_shop_dialog_close">
			<span>✕</span>
		</div>
		<div class="hup_shop_dialog_content">
			<div class="hup_shop_dialog_heder">
				<img src="https://wholedesignstudios.com/wp-content/uploads/2019/07/seo-services-for-shopify.jpg">
			</div>

			<div class="hup_shop_dialog_body">
				<div class="hup_shop_action_div">
					<h2>Save your quote and book a call, enter your email to proceed</h2>
				    <div class="formkit-field">
                        <span class="hup_email_error" style="display: none;">Please Enter Valid Email</span>
				    	<input type="text" class="formkit-input hup_shopify_developer_email" placeholder="Your Email Address" name="hup_shopify_developer_email" >
                        <input type="hidden" name="hup_shopify_developer_hidden" class="hup_shopify_developer_hidden">
				    </div>
				    <div class="formkit-submit formkit-submit">
				 		<input type="submit"  value="Submit" class="formkit-input-submit" />
				    </div>
				</div>
			</div>
			
		</div>
	</form>
</div>
    
    <script async data-uid="7d76f283bb" src="https://f.convertkit.com/7d76f283bb/bb465deb6f.js"></script>


<?php get_footer(); ?>
