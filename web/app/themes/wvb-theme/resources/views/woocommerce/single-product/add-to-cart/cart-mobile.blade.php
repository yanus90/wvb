<div class="add-to-cart-mobile d-lg-none">
    @php
        $product_thumb_mobile = get_field('product_overzicht_afbeelding');
        global $product;
    @endphp

    <div class="product-image-content">
        <div class="product-image mr-3 d-none d-sm-block">
            <img src="{!! $product_thumb_mobile['sizes']['thumbnail'] !!}" class="img-fluid" alt="{!! $product_thumb_mobile['alt'] !!}">
        </div>
        <div class="product-content">
            <p class="mb-0 font-size-small font-size-md-regular font-weight-semi-bold color-primary-dark title">{!! $product->get_name() !!}</p>
            <p class="mb-0">
                @if(get_post_meta( $product->get_id(), '_sale_price', true ))
                    <span class="font-size-small">van {!! wc_price( get_post_meta( $product->get_id(), '_regular_price', true ) ) !!}</span>
                    <span class="indication font-weight-medium">Nu</span>
                    <span class="reg-price font-weight-medium">{!! wc_price( get_post_meta( $product->get_id(), '_sale_price', true ) ) !!}</span>
                @else
                    <span class="reg-price">{!! wc_price( get_post_meta( $product->get_id(), '_regular_price', true ) ) !!}</span>
                @endif
            </p>
        </div>
    </div>
    <div class="product-cart">
        @include('woocommerce.loop.add-to-cart', ['product' => $product, 'args' => ['class' => 'btn btn-sm btn-success no-border']])
    </div>
</div>