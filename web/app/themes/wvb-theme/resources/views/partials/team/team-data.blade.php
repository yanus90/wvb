<div class="team-tabs">
    <ul class="nav nav-pills mb-3" id="team-data" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#ranking"><i class="fal fa-list-ol mr-2"></i>Stand</a>
        </li>
        @if($post->post_name == 'warnsveldse-boys-1')
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#period"><i class="fal fa-list-ol mr-2"></i>Periode</a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#program"><i class="fal fa-calendar-alt mr-2"></i>Programma</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#results"><i class="fas fa-futbol mr-2"></i>Uitslagen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cup"><i class="fal fa-trophy-alt mr-2"></i>Beker</a>
        </li>
    </ul>
    <div class="tab-content" id="team-data-content">
        <div class="tab-pane fade show active" id="ranking" role="tabpanel" aria-labelledby="ranking-tab">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Team</th>
                            <th>GW</th>
                            <th>W</th>
                            <th>G</th>
                            <th>V</th>
                            <th>DV</th>
                            <th>DT</th>
                            <th>S</th>
                            <th>P</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ranking as $rank)
                            <tr class="{{ ($rank['eigenteam'] == "true" ? 'bg-primary color-white' : '') }}">
                                <td>{!! $rank['positie'] !!}</td>
                                <td>{!! $rank['teamnaam'] !!}</td>
                                <td>{!! $rank['gespeeldewedstrijden'] !!}</td>
                                <td>{!! $rank['gewonnen'] !!}</td>
                                <td>{!! $rank['gelijk'] !!}</td>
                                <td>{!! $rank['verloren'] !!}</td>
                                <td>{!! $rank['doelpuntenvoor'] !!}</td>
                                <td>{!! $rank['doelpuntentegen'] !!}</td>
                                <td>{!! $rank['doelsaldo'] !!}</td>
                                <td>{!! $rank['punten'] !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if($post->post_name == 'warnsveldse-boys-1')
            <div class="tab-pane fade" id="period" role="tabpanel" aria-labelledby="period-tab">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Team</th>
                            <th>GW</th>
                            <th>W</th>
                            <th>G</th>
                            <th>V</th>
                            <th>DV</th>
                            <th>DT</th>
                            <th>S</th>
                            <th>P</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($period as $period_item)
                            <tr class="{{ ($period_item['eigenteam'] == "true" ? 'bg-primary color-white' : '') }}">
                                <td>{!! $period_item['positie'] !!}</td>
                                <td>{!! $period_item['teamnaam'] !!}</td>
                                <td>{!! $period_item['aantalwedstrijden'] !!}</td>
                                <td>{!! $period_item['gewonnen'] !!}</td>
                                <td>{!! $period_item['gelijkspel'] !!}</td>
                                <td>{!! $period_item['verloren'] !!}</td>
                                <td>{!! $period_item['doelpuntenvoor'] !!}</td>
                                <td>{!! $period_item['tegendoelpunten'] !!}</td>
                                <td>{!! $period_item['doelsaldo'] !!}</td>
                                <td>{!! $period_item['totaalpunten'] !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        <div class="tab-pane fade" id="program" role="tabpanel" aria-labelledby="program-tab">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Tijd</th>
                        <th>Wedstrijd</th>
                        <th>Scheidsrechter</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($program as $item)
                        <tr>
                            <td>{!! $item['datum'] !!}</td>
                            <td>{!! $item['aanvangstijd'] !!}</td>
                            <td>{!! $item['wedstrijd'] !!}</td>
                            <td>{!! $item['scheidsrechter'] !!}</td>
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
                        <th>Uitslag</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{!! $result['datumopgemaakt'] !!}</td>
                            <td>{!! $result['aanvangstijd'] !!}</td>
                            <td>{!! $result['wedstrijd'] !!}</td>
                            <td>{!! $result['uitslag'] !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="cup" role="tabpanel" aria-labelledby="cup-tab">
            Beker
        </div>
    </div>
</div>