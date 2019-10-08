<div class="team-tabs">
    <ul class="nav nav-pills" id="team-data" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="ranking" data-toggle="tab" href="#ranking" role="tab" aria-controls="ranking" aria-selected="false"><i class="fal fa-list-ol mr-2"></i>Stand</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="program" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="false"><i class="fal fa-calendar-alt mr-2"></i>Programma</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="results" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false"><i class="fas fa-futbol mr-2"></i>Uitslagen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cup" data-toggle="tab" href="#cup" role="tab" aria-controls="cup" aria-selected="false"><i class="fal fa-trophy-alt mr-2"></i>Beker</a>
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

                    </tbody>
                </table>
            </div>
        </div>
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
    </div>
</div>