@php
    /**
     * My Account navigation
     *
     * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
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
     * @version 2.6.0
     */
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }
    do_action( 'woocommerce_before_account_navigation' );
@endphp

<nav class="woocommerce-MyAccount-navigation mb-5">
    <ul class="list-group">
        @foreach( wc_get_account_menu_items() as $endpoint => $label )
            <a href="{!! esc_url( wc_get_account_endpoint_url( $endpoint ) ) !!}" class="list-group-item list-group-item-action" title="{!! esc_html( $label ) !!}">
                {!! esc_html( $label ) !!}
            </a>
        @endforeach
    </ul>
</nav>

@php do_action( 'woocommerce_after_account_navigation' ) @endphp