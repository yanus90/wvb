@if ($latest_news_articles)
    <div class="section section-featured-news bg-dark-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center color-black mb-5">Laatste nieuws</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row mb-5 justify-content-lg-center">
                        @foreach ($latest_news_articles as $article)
                            @if ($article->overzichtafbeelding)
                                <div class="col-sm-6 col-xl-3 mb-4 mb-lg-0">
                                    <a href="{!! get_permalink($article) !!}" class="card" title="{{ $article->post_title }}">
                                        <img src="{!! wp_get_attachment_image_url($article->overzichtafbeelding, 'post_thumb') !!}" class="card-img" alt="{!! get_post_meta($article->overzichtafbeelding, '_wp_attachment_image_alt', TRUE); !!}">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="mt-auto">
                                                <h6 class="date small">{{ get_the_date('', $article) }}</h6>
                                                <h5 class="card-title">{{ $article->post_title }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col text-center">
                    <a href="/nieuws" class="btn btn-lg btn-primary" title="Nieuwsoverzicht">Nieuwsoverzicht<i class="fal fa-angle-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
@endif