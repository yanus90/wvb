@include('partials.page-header')
@php
  $thumbnail_id = get_post_thumbnail_id( $post->ID );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
@endphp

<div class="section-single-post">
  <div class="container">
    <article @php post_class() @endphp>
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col">
              <div class="post-image">
                <img src="{!! get_the_post_thumbnail_url() !!}" alt="{!! $alt !!}" class="img-fluid">
              </div>
              <div class="post-meta">
                <div class="row">
                  <div class="col-sm-6">
                    Door:<a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="ml-2">
                      <i class="fal fa-user mr-2"></i>{{ get_the_author() }}
                    </a>
                  </div>
                  <div class="col-sm-6 text-right">
                    <i class="fal fa-calendar-alt mr-2"></i><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
                  </div>
                </div>
              </div>
              @php the_content() @endphp
            </div>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </article>
  </div>
</div>