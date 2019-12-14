<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
        <div class="row mb-3">
            <div class="col">
		        <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>
            </div>
        </div>
	<?php endif; ?>

    <?php if ( wc_get_product_category_list($product->get_id()) ) { ?>
        <div class="row <?php if ( wc_get_product_tag_list($product->get_id()) ) { echo 'mb-3'; } ?>">
            <div class="col">
                <?php echo wc_get_product_category_list( $product->get_id(), '', '<span class="posted_in">' . _n( '<span class="cat font-size-small">Categorie:</span>', '<span class="cat font-size-small">Categorie&euml;n:</span>', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
            </div>
        </div>
    <?php } ?>

    <?php if ( wc_get_product_tag_list($product->get_id()) ) { ?>
        <div class="row">
            <div class="col">
	            <?php echo wc_get_product_tag_list( $product->get_id(), ' ', '<span class="posted_in">' . _n( '<span class="cat font-size-small">Tag:</span>', '<span class="cat font-size-small">Tags:</span>', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
            </div>
        </div>
    <?php } ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
