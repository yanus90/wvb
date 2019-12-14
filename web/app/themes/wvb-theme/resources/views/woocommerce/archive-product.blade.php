{{--
The Template for displaying product archives, including the main shop page which is a post type archive

This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.

HOWEVER, on occasion WooCommerce will need to update template files and you
(the theme developer) will need to copy the new files to your theme to
maintain compatibility. We try to do this as little as possible, but it does
happen. When this occurs the version of the template file will be bumped and
the readme will list any important changes.

@see https://docs.woocommerce.com/document/template-structure/
@package WooCommerce/Templates
@version 3.4.0
--}}

@extends('layouts.app')

@section('content')
    @php
        do_action('get_header', 'shop');
        do_action('woocommerce_before_main_content');
    @endphp
    
    <div class="container">
        <div class="pt-4 pb-5 section-category">
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-xxl-4">
                    @include('partials.sidebar.products-filter')
                </div>
                <div class="col-lg-8 col-xl-9 col-xxl-8">
                    @if($queried_category->afbeelding_overzichtpagina)
                        <div class="category-header mb-4 mb-xl-5">
                            <img src="{!! wp_get_attachment_image_url($queried_category->afbeelding_overzichtpagina['ID'], 'image_cat_crop') !!}" alt="{!! $queried_category->name !!}" class="img-fluid rounded">
                        </div>
                    @endif
                    <div class="category-content">
                        @if(apply_filters('woocommerce_show_page_title', true))
                            <h1 class="woocommerce-products-header__title page-title color-primary-dark">@php woocommerce_page_title() @endphp</h1>
                        @endif
                        @php
                            do_action('woocommerce_archive_description');
                        @endphp
                    </div>
                    <hr class="hr-light mb-5 mt-4">
                    <div class="category-products">
                        <div class="row">
                            <div class="col">
                                @if(woocommerce_product_loop())
                                    @php
                                        do_action('woocommerce_before_shop_loop');
                                        woocommerce_product_loop_start();
                                    @endphp
                                    
                                    @if(wc_get_loop_prop('total'))
                                        @while (have_posts())
                                            @php
                                                the_post();
                                                do_action('woocommerce_shop_loop');
                                                wc_get_template_part('content', 'product');
                                            @endphp
                                        @endwhile
                                    @endif
                                    
                                    @php
                                        woocommerce_product_loop_end();
                                        do_action('woocommerce_after_shop_loop');
                                    @endphp
                                @else
                                    @php
                                        do_action('woocommerce_no_products_found');
                                    @endphp
                                @endif
                                
                                @if($queried_category->beschrijving_onder_overzichtspagina)
                                    <hr>
                                    {!! $queried_category->beschrijving_onder_overzichtspagina !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @php
        do_action('woocommerce_after_main_content');
        do_action('get_sidebar', 'shop');
        do_action('get_footer', 'shop');
    @endphp
@endsection
