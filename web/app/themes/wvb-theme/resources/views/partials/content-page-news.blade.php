@if($articles)
  <div class="section section-content">
    <div class="container">
      <div class="row justify-content-lg-center mb-5">
        <div class="col-12">
          <div class="row">
            <div class="col-12 font-weight-medium line-height-md-big">
              @php the_content() @endphp
              {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

              <div class="row">
                @foreach($articles as $article)
                  <div class="mb-4 col-12 col-sm-6 col-lg-4 col-xxl-3">
                    <a href="{!! get_permalink($article) !!}" title="{!! $article->post_title !!}" class="text-decoration-none">
                      <img src="{!! ($article->overzichtafbeelding ? wp_get_attachment_image_url($article->overzichtafbeelding, 'post_image') : '//via.placeholder.com/900x600') !!}" class="mb-3 rounded img-fluid" alt="{!! $article->post_title !!}">
                      <div class="media-body font-size-p16 line-height-regular">
                        <h6 class="mb-1 date small color-black">{{ get_the_date('', $article) }}</h6>
                        <h5 class="">{!! $article->post_title !!}</h5>
                      </div>
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              @include('partials.pagination-news')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
