@if($latest_news_articles)
    <div class="section section-featured-news bg-dark-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4 mb-lg-5"><i class="mr-2 fal fa-newspaper text-primary"></i>Laatste nieuws</h3>
                    <div class="row">
                        @foreach($latest_news_articles as $article)
                            <div class="mb-4 col-12 col-sm-6 col-md-4 col-xxl-3">
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
                    <p class="text-center">
                        <a href="{{ home_url('nieuws') }}" class="btn btn-md btn-outline-primary" title="Meer nieuws">
                            <span>Meer nieuws</span>
                            <i class="fal fa-angle-right ml-2"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
