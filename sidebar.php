<div class="col-xs-12 col-md-4" id="sidebar">

    <h4>Categories</h4>

    <ul class="post-categories">
        <?php wp_list_categories( array(
        'title_li' => ''
        ) ); ?>
    </ul>

    <div class="sp-40"></div>

    <form id="sidebar_form" role="search" method="get" class="search-form" action="/">
        <input type="search" class="search browser-default border" placeholder="e.g. more traffic" value="" name="s">
    </form>

    <div class="sp-50"></div>

    <?php if (in_category('seo')) { ?>

        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/shopify-seo-services/">
                    <?php $image = get_field('sidebar_seo','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>SEO: Search Engine Optimization</h4>
                <p class="xs">Get higher Google rankings and more organic traffic with monthly SEO services.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/shopify-seo-services/">See Pricing & Plans</a></button>
            </div>
        </div>

        
    <?php } ?> 

    <?php if (in_category('instagram-marketing')) { ?>

        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/instagram-marketing-service/">
                    <?php $image = get_field('sidebar_instagram','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>Organic Instagram growth & management</h4>
                <p class="xs">Grow your Instagram followers, traffic & ecommerce sales monthly. Engage influencers & track ROI.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/instagram-marketing-service/">See Pricing & Plans</a></button>
            </div>
        </div>

        

    <?php } ?> 

    <?php if (in_category('google-shopping')) { ?>

        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/google-shopping-shopify/">
                    <?php $image = get_field('sidebar_google_shopping_ads','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>Google Shopping ads management</h4>
                <p class="xs">Grow your sales with Google Shopping ads and Facebook & Instagram retargeting.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/google-shopping-shopify/">See Pricing & Plans</a></button>
            </div>
        </div>

    <?php } ?> 

    <?php if (in_category('google-ads')) { ?>

        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/google-adwords-shopify/">
                    <?php $image = get_field('sidebar_google_ads','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>Google Search ads management</h4>
                <p class="xs">Grow your traffic with Google search and Facebook & Instagram retargeting ads.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/google-adwords-shopify/">See Pricing & Plans</a></button>
            </div>
        </div>
    
    <?php } ?> 

    <?php if (in_category('conversion-rate-optimization')) { ?>
           
        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/conversion-rate-optimization-services/">
                    <?php $image = get_field('sidebar_cro','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>Conversion rate optimization services</h4>
                <p class="xs">Increase your conversion rates and get more visitors to buy with professional A/B testing.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/conversion-rate-optimization-services/">See Pricing & Plans</a></button>
            </div>
        </div>
    
    <?php } ?> 

    <?php if (in_category('email-marketing')) { ?>

        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/klaviyo-experts/">
                    <?php $image = get_field('sidebar_email','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>Monthly email marketing with Klaviyo</h4>
                <p class="xs">Grow your email list and ecommerce sales. Increase your automation revenue.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/klaviyo-experts/">See Pricing & Plans</a></button>
            </div>
        </div>
    
    <?php } ?>    

    <?php if (in_category('facebook-ads')) { ?>

        <div class="row rounded border ad show-md">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="/product/facebook-ad-management-services/">
                    <?php $image = get_field('sidebar_facebook_ads','option'); $size = 'full'; 
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Grow Your Store</h5>
                <h4>Facebook & Instagram Ads Management</h4>
                <p class="xs">Get a landslide of targeted visitors & sales for your store with Facebook & Instagram ads.</p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="/product/facebook-ad-management-services/  ">See Pricing & Plans</a></button>
            </div>
        </div>
    
    <?php } ?> 

    <div class="row rounded border ad show-md"">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="<?php the_field('email_partner_sidebar_button_link','option'); ?>">
                    <img src="<?php the_field('email_partner_sidebar_image','option'); ?>" class=""/>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Preferred Partners</h5>
                <h4><?php the_field('email_partner_sidebar_title','option'); ?></h4>
                <p class="xs"><?php the_field('email_partner_sidebar_description','option'); ?></p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="<?php the_field('email_partner_sidebar_button_link','option'); ?>"><?php the_field('email_partner_sidebar_button_text','option'); ?></a></button>
            </div>
        </div>

    <div class="row rounded border ad show-md"">
            <div class="col-xs-12 pad-xs-0" >
                 <a href="<?php the_field('partner_sidebar_button_link','option'); ?>">
                    <img src="<?php the_field('partner_sidebar_image','option'); ?>" class=""/>
                </a>
            </div>
            <div class="col-xs-12 pad-xs-25">
                <h5>Preferred Partners</h5>
                <h4><?php the_field('partner_sidebar_title','option'); ?></h4>
                <p class="xs"><?php the_field('partner_sidebar_description','option'); ?></p>
                <div class="sp-10"></div>
                <button class="large fullwidth"><a href="<?php the_field('partner_sidebar_button_link','option'); ?>"><?php the_field('partner_sidebar_button_text','option'); ?></a></button>
            </div>
        </div>
    


    

</div>