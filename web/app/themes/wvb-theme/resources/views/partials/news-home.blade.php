<div class="section section-featured-news bg-dark-light d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @if ($latest_news_articles)
                        <div class="d-none d-lg-inline-block col-lg-8">
                            <h3 class="mb-4 mb-lg-5"><i class="fal fa-newspaper mr-2 text-primary"></i>Laatste nieuws</h3>
                            <div class="row">
                                @foreach(array_chunk($latest_news_articles, 3) as $chunk)
                                    <div class="d-none d-lg-inline-block col-lg-6">
                                        <ul class="list-unstyled mb-3 mb-md-4">
                                            @foreach($chunk as $article)
                                                <li class="mb-3">
                                                    <a href="{!! get_permalink($article) !!}" title="{!! $article->post_title !!}" class="media text-decoration-none">
                                                        <img src="{!! ($article->overzichtafbeelding ? wp_get_attachment_image_url($article->overzichtafbeelding, 'thumbnail') : '//placehold.it/150x150') !!}" class="mr-3 img-fluid rounded" alt="{!! $article->post_title !!}" width="80">
                                                        <div class="media-body font-size-p16 line-height-regular">
                                                            <h6 class="date small mb-1 color-black">{{ get_the_date('', $article) }}</h6>
                                                            <h5 class="">{!! $article->post_title !!}</h5>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                <div class="col-12">
                                    <p class="mb-2"><a href="/nieuws" class="btn btn-sm btn-outline-primary" title="Meer nieuws">Meer nieuws<i class="fal fa-angle-right ml-3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($events)
                        <div class="d-none d-lg-inline-block col-lg-4">
                            <h3 class="mb-4 mb-lg-5"><i class="fal fa-calendar-alt mr-2 text-primary"></i>Agenda</h3>
                            <div class="row">
                                <div class="d-none d-lg-inline-block col-lg-12">
                                    <ul class="list-unstyled mb-3 mb-md-4">
                                        @foreach($events as $event)
                                            <li class="mb-3">
                                                <a href="{!! get_permalink($event) !!}" title="{!! $event->post_title !!}" class="media text-decoration-none">
                                                    <img src="{!! ($event->overzichtafbeelding ? wp_get_attachment_image_url($event->overzichtafbeelding, 'thumbnail') : '//placehold.it/150x150') !!}" class="mr-3 img-fluid rounded" alt="{!! $event->post_title !!}" width="80">
                                                    <div class="media-body font-size-p16 line-height-regular">
                                                        <h6 class="date small mb-1 color-black">{{ $event->datum }}</h6>
                                                        <h5 class="">{!! $event->post_title !!}</h5>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <p class="mb-0"><a href="/de-club/agenda" class="btn btn-sm btn-outline-primary" title="Volledig overzicht">Volledig overzicht<i class="fal fa-angle-right ml-3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>