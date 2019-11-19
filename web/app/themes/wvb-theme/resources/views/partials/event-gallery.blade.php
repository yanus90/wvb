@php $gallery = get_field('galerij') @endphp
@if ($gallery)
    <div class="row">
        @foreach($gallery as $item)
            <div class="col-4 col-sm-3 col-xl-2 mb-4">
                <a href="{!! wp_get_attachment_image_url($item['ID'], 'large') !!}" data-fancybox="gallery" title="{{ get_post_meta($item['ID'], '_wp_attachment_image_alt', true) }}">
                    <img src="{!! wp_get_attachment_image_url($item['ID'], 'thumbnail') !!}" class="img-fluid w-100 rounded" alt="{{ get_post_meta($item['ID'], '_wp_attachment_image_alt', true) }}">
                </a>
            </div>
        @endforeach
    </div>
@endif
