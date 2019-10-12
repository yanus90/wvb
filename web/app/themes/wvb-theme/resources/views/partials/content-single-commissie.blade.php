@include('partials.page-header')

<div class="section-single-post section">
  <div class="container">
    <div class="row">
      <div class="col-12 font-weight-medium line-height-md-big">
        <div class="row">
          <div class="col-lg-8">
              {!! wpautop($post->post_content) !!}
          </div>
          @php $image = get_field('afbeelding', $post) @endphp
          @if($image)
              <div class="col-lg-4">
                  <a href="{!! wp_get_attachment_image_url($image['id'], 'commission_image') !!}" data-fancybox="big-commission-image" title="Vergroot {!! $post->post_title !!}">
                      <img src="{!! wp_get_attachment_image_url($image['id'], 'commission_image') !!}" class="card-img" alt="{!! $post->post_title !!}">
                  </a>
                  @if($post->tekst_onder_afbeelding)
                      <div class="mt-4 font-size-smaller">
                          {!! $post->tekst_onder_afbeelding !!}
                      </div>
                  @endif
              </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>