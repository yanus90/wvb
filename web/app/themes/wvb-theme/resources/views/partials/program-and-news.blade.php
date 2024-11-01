<div class="section section-featured-news bg-news-home-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills" id="programResults" role="tablist">
                    @if($program_home)
                        <li class="nav-item">
                            <a class="nav-link active font-size-p14 font-size-md-p16 font-size-lg-p20" id="program-home-tab" data-toggle="tab" href="#programHome" role="tab" aria-controls="programHome" aria-selected="true"><i class="fal fa-calendar-alt mr-2"></i>
                                <span class="d-none d-md-inline-block">Programma</span> thuis
                            </a>
                        </li>
                    @endif
                    @if($program_away)
                        <li class="nav-item">
                            <a class="nav-link font-size-p14 font-size-md-p16 font-size-lg-p20" id="program-away-tab" data-toggle="tab" href="#programAway" role="tab" aria-controls="programAway" aria-selected="true"><i class="fal fa-calendar-alt mr-2"></i>
                                <span class="d-none d-md-inline-block">Programma</span> uit
                            </a>
                        </li>
                    @endif
                    @if($results)
                        <li class="nav-item">
                            <a class="nav-link font-size-p14 font-size-md-p16 font-size-lg-p20" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false"><i class="fal fa-futbol mr-2"></i>Uitslagen</a>
                        </li>
                    @endif
{{--                    @if($latest_news_articles)--}}
{{--                        <li class="nav-item d-lg-none">--}}
{{--                            <a class="nav-link font-size-p14 font-size-md-p16 font-size-lg-p20" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true"><i class="fal fa-newspaper mr-2"></i>Nieuws</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                    @if($events)--}}
{{--                        <li class="nav-item d-lg-none">--}}
{{--                            <a class="nav-link font-size-p14 font-size-md-p16 font-size-lg-p20" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="true"><i class="fal fa-calendar-alt mr-2"></i>Agenda</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                </ul>
                <div class="tab-content" id="programResultsContent">
                    @if($program_home)
                        <div class="tab-pane fade show active program" id="programHome" role="tabpanel" aria-labelledby="program-home-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Tijd</th>
                                        <th>Thuisteam</th>
                                        <th>Uitteam</th>
                                        <th class="d-none d-lg-block">Accommodatie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($program_home as $ph)
                                        <tr>
                                            <td>{!! $ph['datum'] !!}</td>
                                            <td>{!! $ph['aanvangstijd'] !!}</td>
                                            <td>{!! $ph['thuisteam'] !!}</td>
                                            <td>{!! $ph['uitteam'] !!}</td>
                                            <td class="d-none d-lg-block">{!! $ph['accommodatie'] !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($program_away)
                        <div class="tab-pane fade program" id="programAway" role="tabpanel" aria-labelledby="program-away-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Tijd</th>
                                        <th>Thuisteam</th>
                                        <th>Uitteam</th>
                                        <th class="d-none d-lg-block">Accommodatie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($program_away as $pa)
                                        <tr>
                                            <td>{!! $pa['datum'] !!}</td>
                                            <td>{!! $pa['aanvangstijd'] !!}</td>
                                            <td>{!! $pa['thuisteam'] !!}</td>
                                            <td>{!! $pa['uitteam'] !!}</td>
                                            <td class="d-none d-lg-block">{!! $pa['accommodatie'] !!}, {!! $pa['plaats'] !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if($results)
                        <div class="tab-pane fade results" id="results" role="tabpanel" aria-labelledby="results-tab">
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
{{--                    @if($latest_news_articles)--}}
{{--                        <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab">--}}
{{--                            @include('partials.featured-news')--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    @if($events)--}}
{{--                        <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">--}}
{{--                            @include('partials.upcoming-events')--}}
{{--                        </div>--}}
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
