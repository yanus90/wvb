<div class="section section-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 font-weight-medium line-height-md-big">
                        @php the_content() @endphp
                        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                        <div class="program-tabs">
                            <ul class="nav nav-pills mb-3" id="program-data" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#program-home"><i class="fal fa-calendar-alt mr-2"></i>Programma thuis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#program-away"><i class="fal fa-calendar-alt mr-2"></i>Programma uit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#results"><i class="fas fa-futbol mr-2"></i>Uitslagen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#cup"><i class="fas fa-trophy mr-2"></i>Beker</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="program-data-content">
                                <div class="tab-pane fade show active" id="program-home" role="tabpanel" aria-labelledby="program-home-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Datum</th>
                                                <th>Tijd</th>
                                                <th>Wedstrijd</th>
                                                <th>&nbsp;</th>
                                                <th>Scheidsrechter</th>
                                                <th>Veld</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($program_home as $item)
                                                <tr>
                                                    <td>{!! $item['datum'] !!}</td>
                                                    <td>{!! $item['aanvangstijd'] !!}</td>
                                                    <td>{!! $item['thuisteam'] !!}</td>
                                                    <td>{!! $item['uitteam'] !!}</td>
                                                    <td>{!! $item['scheidsrechter'] !!}</td>
                                                    <td>{!! $item['veld'] !!}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="program-away" role="tabpanel" aria-labelledby="program-away-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Datum</th>
                                                <th>Tijd</th>
                                                <th>Wedstrijd</th>
                                                <th>&nbsp;</th>
                                                <th>Scheidsrechter</th>
                                                <th>Veld</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($program_away as $item)
                                                <tr>
                                                    <td>{!! $item['datum'] !!}</td>
                                                    <td>{!! $item['aanvangstijd'] !!}</td>
                                                    <td>{!! $item['thuisteam'] !!}</td>
                                                    <td>{!! $item['uitteam'] !!}</td>
                                                    <td>{!! $item['scheidsrechter'] !!}</td>
                                                    <td>{!! $item['veld'] !!}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Datum</th>
                                                <th>Tijd</th>
                                                <th>Wedstrijd</th>
                                                <th>&nbsp;</th>
                                                <th>Uitslag</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($results as $result)
                                                <tr>
                                                    <td>{!! $result['datumopgemaakt'] !!}</td>
                                                    <td>{!! $result['aanvangstijd'] !!}</td>
                                                    <td>{!! $result['thuisteam'] !!}</td>
                                                    <td>{!! $result['uitteam'] !!}</td>
                                                    <td>{!! $result['uitslag'] !!}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cup" role="tabpanel" aria-labelledby="cup-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Datum</th>
                                                <th>Tijd</th>
                                                <th>Wedstrijd</th>
                                                <th>&nbsp;</th>
                                                <th>Scheidsrechter</th>
                                                <th>Veld</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cup as $item)
                                                <tr>
                                                    <td>{!! $item['datum'] !!}</td>
                                                    <td>{!! $item['aanvangstijd'] !!}</td>
                                                    <td>{!! $item['thuisteam'] !!}</td>
                                                    <td>{!! $item['uitteam'] !!}</td>
                                                    <td>{!! $item['scheidsrechter'] !!}</td>
                                                    <td>{!! $item['veld'] !!}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
