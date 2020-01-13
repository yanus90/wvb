<?php
/**
 * Update cart totals in header when using AJAX.
 */
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    global $woocommerce;
    ob_start();
    ?>
    <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="Bekijk je bestelling" class="cart-totals-item mr-3">
        <?php
        echo '<span class="badge badge-pill badge-danger badge-cart-counter">'. $woocommerce->cart->get_cart_contents_count().'</span>';
        ?>
        <i class="fal fa-shopping-cart"></i>
    </a>
    <?php
    $fragments['a.cart-totals-item'] = ob_get_clean();
    return $fragments;
});

// Woocommerce filters
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_state']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_state']);

    return $fields;
}

// Add shipping address in email
add_filter( 'woocommerce_order_needs_shipping_address', '__return_true' );

// Remove Woocommerce Hooked

remove_action('init', 'woocommerce_breadcrumb', 20 );
remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20 );
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);

// Add own Woocommerce hooks

add_action('print_notices', 'woocommerce_output_all_notices', 10);
