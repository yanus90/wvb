<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="section-page-header bg-primary-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-header">
                    @php the_title( '<h1 class="font-size-p26 font-size-sm-p30 font-size-md-p36 font-size-xl-p40 mb-0">', '</h1>' ); @endphp
                </div>
            </div>
        </div>
    </div>
</div>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
    <div class="section-single-post section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-8">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );

                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     * @hooked woocommerce_output_related_products - 20
                     */
                    do_action( 'woocommerce_after_single_product_summary' );
                    ?>
                </div>
                <div class="col-lg-4 col-xl-5 col-xxl-4">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action( 'woocommerce_single_product_summary' );
                    ?>
                    @if($payment_methods)
                        <div class="row pt-2 pb-2 mb-4">
                            <div class="col">
                                <p class="font-size-small">Beschikbare betaalmethoden:</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img src="{{ get_template_directory_uri() }}/assets/images/payment-methods/ideal.svg" alt="iDeal" class="payment-logo">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('woocommerce.single-product.add-to-cart.cart-mobile')
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
