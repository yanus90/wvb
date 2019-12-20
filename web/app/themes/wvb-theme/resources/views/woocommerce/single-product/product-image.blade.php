<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
    return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

$product_detail_image = get_field('product_overzicht_afbeelding');

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
    'woocommerce-product-gallery',
    'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
    'woocommerce-product-gallery--columns-' . absint( $columns ),
    'images',
) );
?>

@if($product_detail_image)
    <div class="row">
        <div class="col">
            <figure class="image-product-detail">
                <a href="{!! $product_detail_image['url'] !!}" data-fancybox="product-gallery">
                    <span class="zoom-image">
                        <i class="fal fa-search-plus"></i>
                    </span>
                    <img src="{!! $product_detail_image['sizes']['product_image_crop'] !!}" alt="{!! $product_detail_image['alt'] !!}" class="img-fluid rounded w-100">
                </a>
            </figure>
        </div>
    </div>
@endif
<div class="row">
    @if($attachment_ids)
        @foreach($attachment_ids as $attachment_id)
            <div class="col-4 col-sm-3 col-xl-2 mb-3">
                <a href="{!! wp_get_attachment_image_url( $attachment_id, 'large' ) !!}" data-fancybox="product-gallery" class="image-product-thumb" title="{{ get_post_meta($attachment_id, '_wp_attachment_image_alt', true) }}">
                    <img src="{!! wp_get_attachment_image_url( $attachment_id, 'thumbnail' ) !!}" alt="{{ get_post_meta($attachment_id, '_wp_attachment_image_alt', true) }}" class="img-fluid">
                </a>
            </div>
        @endforeach
    @endif
</div>