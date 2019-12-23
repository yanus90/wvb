<?php

namespace App;

// Update cart qty with ajax to prevent caching issue.
add_action('wp_ajax_nopriv_get_cart_qty', __NAMESPACE__.'\\get_cart_qty');
add_action('wp_ajax_get_cart_qty', __NAMESPACE__.'\\get_cart_qty');
function get_cart_qty()
{
    wp_send_json(['qty' => WC()->cart->get_cart_contents_count()]);
    wp_die();
}
