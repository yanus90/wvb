@include('partials.page-header')

@php
  $image_id = $post->afbeelding_bericht;
  $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
@endphp

<div class="section-single-post section">
  <div class="container">
    @php
      $images = get_field('galerij');
      $categories = wp_get_post_categories($post->ID);
    @endphp
    <div class="row mb-5">
      <div class="col-xl-1"></div>
      <div class="col-12 col-xl-10">
        @if($post->afbeelding_bericht)
          <div class="row mb-4 justify-content-md-center {{ ($categories ? 'mb-lg-3' : 'mb-lg-5') }}">
            <div class="col-12 col-md-10 col-lg-10 col-xl-9">
              <img src="{!! wp_get_attachment_image_url($post->afbeelding_bericht, 'post_image') !!}" class="img-fluid w-100 rounded" alt="{{ get_post_meta($post->afbeelding_bericht, '_wp_attachment_image_alt', true) }}">
            </div>
          </div>
        @endif
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
            <div class="col-12 col-md-10">
              <p><a href="{!! $post->fotos_externe_link !!}" title="Bekijk hier de foto's" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-camera-retro mr-2"></i>Bekijk hier de foto's</a></p>
            </div>
          </div>
        @endif
        <div class="row mb-4 justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 font-size-md-regular line-height-big font-weight-medium mb-4">
            {!! apply_filters('the_content', $post->post_content) !!}
          </div>
        </div>
        @if($images)
          <div class="row mb-3 justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-10 col-xl-9">
              <div class="row">
                @foreach($images as $img)
                  <div class="col-4 col-md-3 col-lg-3 col-xl-3 mb-4">
                    <a href="{!! $img['sizes']['large'] !!}" data-fancybox="galerij-news" data-caption="{!! $img['alt'] !!}">
                      <img src="{!! wp_get_attachment_image_url($img['ID'], 'thumbnail') !!}" class="img-fluid w-100 rounded" alt="{!! $img['alt'] !!}">
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endif
        @if($post->youtube_video)
            <div class="row mb-5 justify-content-md-center">
              <div class="col-12 col-md-10 col-lg-10 col-xl-9">
                <div class="embed-responsive embed-responsive-16by9">
                  @php echo \App\convertYoutube($post->youtube_video) @endphp
                </div>
              </div>
            </div>
        @endif
        @if($post->vimeo_video)
          <div class="row mb-5 justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-10 col-xl-9">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/{!! $post->vimeo_video !!}" class="embed-responsive-item" allow="fullscreen" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        @endif
        @if($post->fotos_externe_link)
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-10 col-xl-9">
              <p><a href="{!! $post->fotos_externe_link !!}" title="Bekijk hier de foto's" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-camera-retro mr-2"></i>Bekijk hier de foto's</a></p>
            </div>
          </div>
        @endif
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9">
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
  </div>
</div>