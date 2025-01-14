<?php
/**
 *
 */

get_header(); ?>

<?php
    $subscription = wcs_get_subscription( $_GET['switch-subscription'] );
    $line_item    = wcs_get_order_item( $_GET['item'], $subscription );
    $product_id = $line_item->get_product_id();

    $product = wc_get_product( $product_id );
    $available_variations = $product->get_available_variations();
?>

<section class="cream">
    <div class="wrapper">
        <div class="row middle-xs between-xs pad-xs-30 pad-top-bottom">
            <div class="col-xs-12 col-md-6 ">
                <h1>Switch your service plan tier</h1>
                <?php echo $product->get_title();?>
            </div>
        </div>
    </div>
</section>


<section id="pricing" class="price-table mt-50 pb-50">
    <div class="wrapper">
        <div class="row center-xs">
            <div class="col-sm-2 col-xs-4"></div>
            <div class="col-sm-8 col-xs-4">
                <div class="between-xs" id="budget-slider">
                     <?php foreach($available_variations as $key => $variation_data) :
                           $variation_id = $variation_data['variation_id'];
                           $product_variation = new WC_Product_Variation($variation_id);
                    ?>
                    <label>
                        <input class="with-gap" value="plan_<?php echo $variation_id;?>" name="budget" type="radio" <?php echo $line_item->get_variation_id() == $variation_id ? 'checked' : ''?>  />
                        <div class="item <?php echo $line_item->get_variation_id() == $variation_id ? 'active' : ''?>"><?php echo implode(', ', $variation_data['attributes']);?></div>
                    </label>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-sm-2 col-xs-4 right pad-xs-0">
                <?php echo do_shortcode( '[woocommerce-currency-selector format="{{code}}"]' ); ?>
            </div>
        </div>

        <div class="row no-gutters mt-50 mb-50">
            <?php foreach($available_variations as $key => $variation_data) :
                $variation_id = $variation_data['variation_id'];
                $product_variation = new WC_Product_Variation($variation_id);
                $url = home_url().'/cart/?add-to-cart='.$variation_data['variation_id'];
            ?>
            <div class="col-md-3 col-xs-12">
                <div class="price-box <?php echo $line_item->get_variation_id() == $variation_id ? 'active' : ''?>" id="plan_<?php echo $variation_id;?>">
                    <h4 class="plan-title"><?php echo implode(', ', $variation_data['attributes']);?> plan</h4>
                    <p class="plan-price"><span class="plan-price-number"><?php echo get_woocommerce_currency_symbol().''.$product_variation->regular_price;?> </span><span class="plan-price-period">/ month</span></p>
                    <button class="fullwidth red small hup_button_smallpadding_remover"><a href="<?php echo $url;?>">Add to Cart</a></button>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    
</section>

<?php get_footer(); ?>