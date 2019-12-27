@include('partials.page-header')

<div class="section-single-post section section-persons">
  <div class="container">
    <div class="row">
      <div class="col-12 font-weight-medium line-height-md-big">
        @php
          $team_image = get_field('afbeelding');
          $rows = get_field('rijen_met_namen');
          $sponsors = get_field('sponsoren');
          $news = get_field('nieuws_categorie');
          $social_media = get_field('sociale_media');
        //dd($social_media)
        @endphp
        <div class="row">
          <div class="col-lg-8 col-xl-9">
            <div class="team-image mb-4">
              <a href="{!! wp_get_attachment_image_url($team_image['ID'], 'large') !!}" data-fancybox="big-team-image" title="Vergroot teamfoto van {!! $post->post_title !!}">
                <img src="{!! wp_get_attachment_image_url($team_image['ID'], 'team_image') !!}" alt="{!! get_post_meta( $team_image['ID'], '_wp_attachment_image_alt', true ); !!}" class="img-fluid rounded">
              </a>
            </div>
            <div class="team-information">
              @php the_content() @endphp
              @if($post->post_content) <hr> @endif

              @if($rows)
                <div class="team-names mb-lg-5">
                  @foreach($rows as $row)
                    <p class="font-size-p14 mb-1 color-primary"><em>{!! $row['titel'] !!}</em></p>
                    <p>{!! $row['rij'] !!}</p>
                  @endforeach
                </div>
              @endif
                @include('partials.team.team-data')
                @include('partials.team.team-staff-players')
            </div>
          </div>
          <div class="col-lg-4 col-xl-3">
              <div class="row">
                  <div class="col-12 col-sm-6 col-lg-12">
                      @if($sponsors)
                          <h3 class="color-black text-uppercase h5 mb-3">Sponsor</h3>
                          <ul class="list-unstyled sponsors mb-5">
                              @foreach($sponsors as $post)
                                  @php $logo_id = $post['sponsor']->logo @endphp
                                  <li class="card">
                                      <a href="{!! $post['sponsor']->website_url !!}" class="card-body" target="_blank" title="{!! $post['sponsor']->post_title !!}">
                                          <img src="{!! wp_get_attachment_image_url($logo_id, 'medium') !!}" alt="{!! $post['sponsor']->post_title !!}" class="img-fluid">
                                      </a>
                                  </li>
                              @endforeach
                          </ul>
                      @endif
                  </div>
                  <div class="col-12 col-sm-6 col-lg-12">
                      @if($news)
                          @php
                              $args = [
                                'numberposts'      => 5,
                                'category'         => $news,
                                'orderby'          => 'date',
                                'order'            => 'DESC',
                                'include'          => [],
                                'exclude'          => [],
                                'meta_key'         => '',
                                'meta_value'       => '',
                                'post_type'        => 'news-article',
                                'suppress_filters' => true,
                              ];

                              $articles = get_posts($args);
                          @endphp
                          <h3 class="color-black text-uppercase h5 mb-1">Laatste nieuws</h3>
                          <hr class="mt-0 mb-4">
                          <ul class="list-unstyled mb-5">
                              @foreach($articles as $article)
                                  <li class="mb-3">
                                      <a href="{!! get_permalink($article) !!}" title="{!! $article->post_title !!}" class="media text-decoration-none">
                                          <img src="{!! wp_get_attachment_image_url($article->overzichtafbeelding, 'thumbnail') !!}" class="mr-3 img-fluid rounded" alt="{!! $article->post_title !!}" width="60">
                                          <div class="media-body font-size-p16 line-height-regular">
                                              {!! $article->post_title !!}
                                          </div>
                                      </a>
                                  </li>
                              @endforeach
                          </ul>
                      @endif
                      @if($social_media)
                          <h3 class="color-black text-uppercase h5 mb-1">Sociale media</h3>
                          <hr class="mt-0 mb-4">
                          <ul class="list-inline social-media-list">
                              @foreach($social_media as $medium)
                                  @foreach($medium as $m)
                                      @php
                                          $icon = $m['social_medium'];
                                          if($icon == 'facebook') {
                                              $icon = 'facebook-f';
                                          } elseif($icon == 'linkedin') {
                                            $icon = 'linkedin-in';
                                          }
                                      @endphp
                                      <li class="list-inline-item">
                                          <a href="{!! $m['link'] !!}" title="Volg ons op {{ ucfirst($m['social_medium']) }}" target="_blank" class="icon s {{ $m['social_medium'] }} text-center"><i class="fab fa-{{ $icon }} font-size-regular line-height-bigger"></i></a>
                                      </li>
                                  @endforeach
                              @endforeach
                          </ul>
                      @endif
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>