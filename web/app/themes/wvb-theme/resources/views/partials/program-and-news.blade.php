<div class="section section-featured-news bg-dark-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-7 col-xxl-8">
                <ul class="nav nav-pills" id="programResults" role="tablist">
                    @if($results)
                        <li class="nav-item">
                            <a class="nav-link active font-size-p14 font-size-md-p16 font-size-lg-p20" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false"><i class="fal fa-futbol mr-2"></i>Uitslagen</a>
                        </li>
                    @endif
                    @if($program)
                        <li class="nav-item">
                            <a class="nav-link font-size-p14 font-size-md-p16 font-size-lg-p20" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="true"><i class="fal fa-calendar-alt mr-2"></i>Programma</a>
                        </li>
                    @endif
                    @if($latest_news_articles)
                        <li class="nav-item d-lg-none">
                            <a class="nav-link font-size-p14 font-size-md-p16 font-size-lg-p20" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true"><i class="fal fa-newspaper mr-2"></i>Nieuws</a>
                        </li>
                    @endif
                </ul>
                <div class="tab-content" id="programResultsContent">
                    @if($results)
                        <div class="tab-pane fade show active results" id="results" role="tabpanel" aria-labelledby="results-tab">
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
                        <div class="tab-pane fade program" id="program" role="tabpanel" aria-labelledby="program-tab">
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
                    @if($latest_news_articles)
                        <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">
                            @include('partials.featured-news')
                        </div>
                    @endif
                </div>
            </div>
            @if ($latest_news_articles)
                <div class="d-none d-lg-inline-block col-lg-4 col-xl-5 col-xxl-4">
                    <ul class="nav nav-pills mb-2">
                        <li class="nav-item">
                            <span class="nav-link active font-size-lg-p20"><i class="fal fa-newspaper mr-2"></i>Nieuws</span>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-12">
                            @include('partials.featured-news')
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>