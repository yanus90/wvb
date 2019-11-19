{{--<article @php post_class() @endphp>--}}
    {{--<header>--}}
        {{--<h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>--}}
        {{--@include('partials/entry-meta')--}}
    {{--</header>--}}
    {{--<div class="entry-summary">--}}
        {{--@php the_excerpt() @endphp--}}
    {{--</div>--}}
{{--</article>--}}


<a href="{!! get_permalink($post) !!}" title="{!! $post->post_title !!}" class="news-item text-decoration-none">
    <div class="row no-gutters">
        @if($post->overzichtafbeelding)
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
                <div class="news-item-image">
                    <img src="{!! wp_get_attachment_image_url($post->overzichtafbeelding, 'post_thumb') !!}" alt="{{ get_post_meta($post->overzichtafbeelding, '_wp_attachment_image_alt', true) }}" class="img-fluid w-100">
                </div>
            </div>
        @endif
        <div class="{{ ($post->overzichtafbeelding ? 'col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-9' : 'col-12') }}">
            <div class="news-item-content">
                <p class="font-size-small mb-0">{{ get_the_date('', $post) }}</p>
                <hr>
                <div class="mb-3">
                    <h3 class="font-size-big line-height-regular font-size-md-p26">{!! $post->post_title !!}</h3>
                </div>
            </div>
        </div>
    </div>
</a>