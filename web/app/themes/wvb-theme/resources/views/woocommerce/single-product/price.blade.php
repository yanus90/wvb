<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="row">
    <div class="col-12 col-md-6 d-none d-lg-block">
        <p class="price"><?php echo $product->get_price_html(); ?></p>
    </div>
    @if($product->is_on_sale())
        @php
            $regular_price = $product->get_regular_price();
            $sale_price = $product->get_sale_price();
            $discount = ($regular_price - $sale_price) * 1;
            $discount_total = $discount;
        @endphp
        <div class="col-12 col-md-6 d-none d-lg-block text-right">
            <span class="badge badge-primary font-weight-normal p-2 no-border font-size-small">&euro; {{ App\money($discount_total) }} korting</span>
        </div>
    @endif
</div>