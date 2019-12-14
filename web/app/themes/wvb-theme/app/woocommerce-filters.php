<?php
///**
// * Update cart totals in header when using AJAX.
// */
//add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
//    global $woocommerce;
//    ob_start();
//    ?>
<!--    <a href="--><?php //echo esc_url(wc_get_cart_url()); ?><!--" title="Bekijk uw bestelling" class="cart-totals-item">-->
<!--        --><?php
//            echo '<span class="badge badge-pill badge-danger badge-cart-counter">'. $woocommerce->cart->get_cart_contents_count().'</span>';
//        ?>
<!--        <i class="fal fa-shopping-cart mr-2 font-size-biggest vm"></i>-->
<!--        <span class="d-none d-lg-inline-block">Winkelwagen</span>-->
<!--    </a>-->
<!--    --><?php
//    $fragments['a.cart-totals-item'] = ob_get_clean();
//    return $fragments;
//});

///**
// * Change number of related products output
// */
//function woo_related_products_limit() {
//    global $product;
//
//    $args['posts_per_page'] = 6;
//    return $args;
//}
//add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
//function jk_related_products_args( $args ) {
//    $args['posts_per_page'] = 3; // 4 related products
//    $args['columns'] = 1; // arranged in 2 columns
//    return $args;
//}

// Woocommerce filters

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_state']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_state']);

    return $fields;
}