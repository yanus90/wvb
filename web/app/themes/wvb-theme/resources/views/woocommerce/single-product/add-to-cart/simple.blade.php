<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
    return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

@php

    $shipping_zones = WC_Shipping_Zones::get_zones();
    $shippingSettings = null;
    $shippingCosts = null;
    $shippingCostsAll = [];

    foreach ($shipping_zones as $shipping_zone) {

        foreach ($shipping_zone['shipping_methods'] as $method) {

            if ($method->instance_settings) {
                $shippingSettings = $method->instance_settings;

                if (isset($shippingSettings["class_cost_{$product->get_shipping_class_id()}"])) {
                    $shippingCosts = App\money($shippingSettings["class_cost_{$product->get_shipping_class_id()}"]);
                    $shippingCostsAll[] = $shippingSettings["class_cost_{$product->get_shipping_class_id()}"];
                }
            }
        }
    }

    if (isset($shippingSettings["class_cost_{$product->get_shipping_class_id()}"])) {
        $shippingCosts = App\money(min($shippingCostsAll));
    }

@endphp

<div class="d-none d-lg-block">

<p class="font-size-small color-secondary"><em>Verzendkosten vanaf: &euro; {{ $shippingCosts }}</em></p>

<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

    <?php
    do_action( 'woocommerce_before_add_to_cart_quantity' );

    do_action( 'woocommerce_after_add_to_cart_quantity' );
    ?>

    <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn-lg btn-success btn-block no-border"><?php echo esc_html( $product->single_add_to_cart_text() ); ?><i class="fal fa-cart-plus ml-3"></i></button>

    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

</div>

<?php endif; ?>