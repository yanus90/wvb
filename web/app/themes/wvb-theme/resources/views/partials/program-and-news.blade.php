<div class="section section-featured-news bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="nav nav-pills" id="programResults" role="tablist">
                    @if($results)
                        <li class="nav-item">
                            <a class="nav-link active font-size-lg-p20" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false"><i class="fal fa-futbol mr-2"></i>Uitslagen</a>
                        </li>
                    @endif
                    @if($program)
                        <li class="nav-item">
                            <a class="nav-link font-size-lg-p20" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="true"><i class="fal fa-calendar-alt mr-2"></i>Programma</a>
                        </li>
                    @endif
                </ul>
                <div class="tab-content" id="programResultsContent">
                    @if($results)
                        <div class="tab-pane fade show active" id="results" role="tabpanel" aria-labelledby="results-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Thuisteam</th>
                                        <th>Uitteam</th>
                                        <th>Uitslag</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($results as $r)
                                        <tr>
                                            <td>{!! $r['datumopgemaakt'] !!}</td>
                                            <td>{!! $r['thuisteam'] !!}</td>
                                            <td>{!! $r['uitteam'] !!}</td>
                                            <td>{!! $r['uitslag'] !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($program)
                        <div class="tab-pane fade" id="program" role="tabpanel" aria-labelledby="program-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Tijd</th>
                                        <th>Thuisteam</th>
                                        <th>Uitteam</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($program as $p)
                                        <tr>
                                            <td>{!! $p['datum'] !!}</td>
                                            <td>{!! $p['aanvangstijd'] !!}</td>
                                            <td>{!! $p['thuisteam'] !!}</td>
                                            <td>{!! $p['uitteam'] !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            @if ($latest_news_articles)
                <div class="col-lg-6">
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <span class="nav-link active font-size-lg-p20"><i class="fal fa-newspaper mr-2"></i>Nieuws</span>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
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
                            <p class="mb-0"><a href="/nieuws" class="btn btn-sm btn-outline-primary" title="Meer nieuws">Meer nieuws<i class="fal fa-angle-right ml-3"></i></a></p>
                        </div>
                    </div>
                </div>
            @endif
            {{--@if ($events)--}}
                {{--<div class="col-lg-4">--}}
                    {{--<h3 class="color-black mb-3 mb-md-4 h4">Agenda</h3>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-12">--}}
                            {{--<ul class="list-unstyled mb-3 mb-md-4">--}}
                                {{--@foreach($events as $event)--}}
                                    {{--<li class="mb-3">--}}
                                        {{--<a href="{!! get_permalink($event) !!}" title="{!! $event->post_title !!}" class="media text-decoration-none">--}}
                                            {{--<img src="{!! ($event->overzichtafbeelding ? wp_get_attachment_image_url($event->overzichtafbeelding, 'thumbnail') : '//placehold.it/150x150') !!}" class="mr-3 img-fluid rounded" alt="{!! $event->post_title !!}" width="60">--}}
                                            {{--<div class="media-body font-size-p16 line-height-regular">--}}
                                                {{--<h6 class="date small mb-1 color-black">{{ $event->datum }}</h6>--}}
                                                {{--<h5 class="h6">{!! $event->post_title !!}</h5>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                            {{--<p class="mb-0"><a href="/de-club/agenda/" class="btn btn-sm btn-outline-primary" title="Meer evenementen">Meer<i class="fal fa-angle-right ml-3"></i></a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endif--}}
        </div>
    </div>
</div>