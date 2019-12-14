<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$archive_image = get_field('product_overzicht_afbeelding');
?>
<!--<div <?php //wc_product_class('col-12 col-sm-6 col-md-4 col-lg-3'); ?>>-->
<div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-5 d-flex">
	<div class="card single-product-grid">
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
		do_action( 'woocommerce_before_shop_loop_item' );

		/**
		 * Hook: woocommerce_before_shop_loop_item_title.
		 *
		 * @hooked woocommerce_show_product_loop_sale_flash - 10
		 * @hooked woocommerce_template_loop_product_thumbnail - 10
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );

		if (get_post_meta( $product->get_id(), '_sale_price', true )) {
			echo '<span class="badge badge-sm badge-sale">Aanbieding</span>';
		}

		echo '<a href="'. esc_url(get_permalink($product->get_id())) .'" title="'. $product->get_name() .'" class="card-image-container">';
		echo '<img src="'. ($archive_image['sizes']['medium'] ?? get_template_directory_uri() . '/assets/images/no-thumb-product.jpg') .'" class="card-img" alt="'. $product->get_name() .'"">';
		echo '</a>';

		echo '<div class="card-body d-flex flex-column">';
		echo '<h5 class="card-title">'. $product->get_name() .'</h5>';
		/**
		 * Hook: woocommerce_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_product_title - 10
		 */
		do_action( 'woocommerce_shop_loop_item_title' );

		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' );

		echo '<div class="prices">';
			echo '<p class="card-text mb-2">';
				if (get_post_meta( $product->get_id(), '_sale_price', true )) {
					echo '<span class="sale">van '. wc_price( get_post_meta( $product->get_id(), '_regular_price', true ) ) .'</span>';
					echo '<span class="indication"> Nu voor </span>';
					echo '<span class="reg-price">'. wc_price( get_post_meta( $product->get_id(), '_sale_price', true ) ) .'</span>';
				} else {
					echo '<span class="reg-price">'. wc_price( get_post_meta( $product->get_id(), '_regular_price', true ) ) .'</span>';
				}

//				if($product->get_short_description()) {
//					echo '<br><span class="subtext">'. $product->get_short_description() .'</span>';
//				}
			echo '</p>';
		echo '</div>';

		echo '<div class="mt-auto">';
		?>
			@include('woocommerce.loop.add-to-cart', ['product' => $product, 'args' => ['class' => 'btn btn-md btn-success no-border arrow-right']])
		<?php
			echo '<a href="'. esc_url(get_permalink($product->get_id())) .'" class="btn btn-md btn-primary no-border arrow-right" title="'. $product->get_name() .'">Meer info</a>';
		echo '</div>';

		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item' );

		echo '</div>';
		?>
	</div>
</div>
