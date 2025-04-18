@include('partials.page-header')

@php
    $image_id = $post->overzichtafbeelding;
    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
@endphp

<div class="section-single-post section">
    <div class="container">
        @php
            $images = get_field('galerij', $post);
            $categories = wp_get_post_categories($post->ID);
        @endphp
        <div class="row mb-4">
            <div class="col-12 col-lg-7 col-xl-8">
                @if($categories)
                    <div class="row mb-4 mb-lg-5 justify-content-md-center">
                        <div class="col-12">
                            <ul class="list-inline">
                                @foreach($categories as $c)
                                    @php
                                        $cat = get_category($c);
                                        $cat_id = get_cat_ID($cat->name);
                                    @endphp
                                    @if($cat->name != 'Geen categorie')
                                        <li class="list-inline-item">
                                            <a href="{!! get_category_link($cat_id) !!}" title="{!! $cat->name !!}"><span class="badge badge-secondary font-weight-medium px-2 py-1">{!! $cat->name !!}</span></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @if($post->fotos_externe_link)
                    <div class="row justify-content-md-center d-lg-none">
                        <div class="col-12">
                            <p><a href="{!! $post->fotos_externe_link !!}" title="Bekijk hier de foto's" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-camera-retro mr-2"></i>Bekijk hier de foto's</a></p>
                        </div>
                    </div>
                @endif

                <div class="row mb-2 justify-content-md-center">
                    <div class="col-12 font-size-md-regular line-height-big font-weight-medium mb-4">
                        {!! apply_filters('the_content', $post->post_content) !!}
                    </div>
                </div>

                @if($post->youtube_video)
                    <div class="row mb-5 justify-content-md-center">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{ \App\embedVideoUrl($post->youtube_video) }}" class="embed-responsive-item" allow="fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                @endif

                @if($post->vimeo_video)
                    <div class="row mb-5 justify-content-md-center">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{ \App\embedVideoUrl($post->vimeo_video) }}" class="embed-responsive-item" allow="fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                @endif

                @if($post->fotos_externe_link)
                    <div class="row justify-content-md-center">
                        <div class="col-12">
                            <p><a href="{!! $post->fotos_externe_link !!}" title="Bekijk hier de foto's" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-camera-retro mr-2"></i>Bekijk hier de foto's</a></p>
                        </div>
                    </div>
                @endif
            </div>

            @if($image_id)
                <div class="col-12 col-lg-5 col-xl-4">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ wp_get_attachment_image_url($image_id, 'large') }}"
                               data-fancybox="galerij-news"
                               data-caption="{{ get_post_meta($image_id, '_wp_attachment_image_alt', true) }}"
                               class="position-relative">
                                <span class="position-absolute bg-white text-black pl-2 pr-2 pt-1 pb-1">
                                    <i class="fa-regular fa-search-plus font-size-p16 font-size-xxl-p18"></i>
                                </span>
                                <img src="{{ wp_get_attachment_image_url($image_id, 'post_image') }}" class="img-fluid w-100 rounded" alt="{{ get_post_meta($image_id, '_wp_attachment_image_alt', true) }}">
                            </a>
                        </div>
                    </div>

                    @if(! empty($images))
                        <div class="row mt-4">
                            @foreach($images as $img)
                                @if(! empty($img['ID']))
                                    <div class="col-3 col-lg-4 mb-4 col-xxl-3">
                                        <a href="{{ wp_get_attachment_image_url($img['ID'], 'large') }}" data-fancybox="galerij-news" data-caption="{{ get_post_meta($img['ID'], '_wp_attachment_image_alt', true) }}">
                                            <img src="{!! wp_get_attachment_image_url($img['ID'], 'thumbnail') !!}" class="img-fluid w-100 rounded" alt="{{ get_post_meta($img['ID'], '_wp_attachment_image_alt', true) }}">
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <div class="row justify-content-md-center">
            <div class="col-12">
                <hr>
                <div class="row font-size-smaller text-primary">
                    <div class="col-12 col-sm-6 text-left mb-3 mb-sm-0 pt-2 font-weight-semi-bold">
                        <time class="updated" datetime="{{ get_post_time('c', true) }}"><i class="fal fa-calendar-alt mr-2"></i>{{ get_the_date() }}</time>
                    </div>
                    <div class="col-12 col-sm-6 text-sm-right">
                        <ul class="list-inline social-media-list mb-0">
                            <li class="list-inline-item font-weight-semi-bold">
                                <i class="fal fa-share-alt mr-2"></i>Delen
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/share?text={{ urlencode(App::title()) }}&amp;url={{ urlencode(\App\currentUrl()) }}" target="_blank" class="icon s twitter text-center" title="Deel op Twitter"><i class="fab fa-twitter font-size-regular line-height-bigger"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(\App\currentUrl()) }}" target="_blank" class="icon s facebook text-center" title="Deel op Facebook"><i class="fab fa-facebook-f font-size-regular line-height-bigger"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(\App\currentUrl()) }}" target="_blank" class="icon s linkedin text-center" title="Deel op LinkedIn"><i class="fab fa-linkedin-in font-size-regular line-height-bigger"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://wa.me/?text={{ urlencode(\App\currentUrl()) }}" target="_blank" class="icon s whatsapp text-center" title="Deel via Whatsapp"><i class="fab fa-whatsapp font-size-regular line-height-bigger"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="mailto:?subject={{ App::title() }}&amp;body={{ urlencode(\App\currentUrl()) }}" target="_blank" class="icon s mail text-center" title="Deel per e-mail"><i class="fal fa-envelope font-size-regular line-height-bigger"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
