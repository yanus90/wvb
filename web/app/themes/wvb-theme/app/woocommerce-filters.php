<?php
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
