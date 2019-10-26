<ul class="list-unstyled mb-3 mb-md-4">
    @foreach($latest_news_articles as $article)
        <li class="mb-3">
            <a href="{!! get_permalink($article) !!}" title="{!! $article->post_title !!}" class="media text-decoration-none">
                <img src="{!! ($article->overzichtafbeelding ? wp_get_attachment_image_url($article->overzichtafbeelding, 'thumbnail') : '//placehold.it/150x150') !!}" class="mr-3 img-fluid rounded" alt="{!! $article->post_title !!}" width="70">
                <div class="media-body font-size-p16 line-height-regular">
                    <h6 class="date small mb-1 color-black">{{ get_the_date('', $article) }}</h6>
                    <h5 class="">{!! $article->post_title !!}</h5>
                </div>
            </a>
        </li>
    @endforeach
</ul>
<p class="mb-2"><a href="/nieuws" class="btn btn-sm btn-outline-primary" title="Meer nieuws">Meer nieuws<i class="fal fa-angle-right ml-3"></i></a></p>