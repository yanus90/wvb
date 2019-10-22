<div class="section-single-post section">
  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-lg-10">
        <div class="row">
          <div class="col-12 font-weight-medium line-height-md-big">
            <div class="row">
              @if($post->post_content)
                <div class="col-lg-8">
                  {!! $post->post_content !!}
                </div>
              @endif
              @php $image = get_field('profielfoto', $post) @endphp
              @if($image)
                <div class="col-lg-4">
                  <a href="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" data-fancybox="big-person-image" title="Vergroot {!! $post->post_title !!}">
                    <img src="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" class="card-img" alt="{!! $post->post_title !!}">
                  </a>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>