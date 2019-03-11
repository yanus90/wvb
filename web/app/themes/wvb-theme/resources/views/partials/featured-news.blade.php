@if ($latest_news_articles)
    <div class="section section-featured-news bg-dark-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center color-black mb-4">Laatste nieuws</h3>
                </div>
            </div>
            <div class="row mb-5">
                @foreach ($latest_news_articles as $article)
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <a href="{!! get_permalink($article) !!}" class="card" title="{{ $article->post_title }}">
                            <img src="{!! get_the_post_thumbnail_url($article) !!}" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto">
                                    <h6 class="date small">{{ App\getDutchDate($article->post_date) }}</h6>
                                    <h5 class="card-title">{{ $article->post_title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="/nieuws" class="btn btn-lg btn-primary" title="Nieuwsoverzicht">Nieuwsoverzicht<i class="fal fa-angle-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
@endif