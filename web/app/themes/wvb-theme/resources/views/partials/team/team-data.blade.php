<div class="team-tabs">
    <ul class="nav nav-pills" id="team-data" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="ranking" data-toggle="tab" href="#ranking" role="tab" aria-controls="ranking" aria-selected="true"><i class="fal fa-list-ol mr-2"></i>Stand</a>
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
        <div class="tab-pane fade show active" id="ranking">
            <div
                id="poulestand"
                data-article="poulestand"
                data-param-poulecode="{!! $post->sportlink_poulecode !!}"
                data-param-gebruiklokaleteamgegevens="NEE"
                data-label-positie="#"
                data-label-gespeeldewedstrijden="GW"
                data-label-gewonnen="W"
                data-label-gelijk="G"
                data-label-verloren="V"
                data-label-doelpuntenvoor="DV"
                data-label-doelpuntentegen="DT"
                data-label-doelsaldo="S"
                data-label-punten="P"
                data-fields="positie,teamnaam,gespeeldewedstrijden,gewonnen,gelijk,verloren,doelpuntenvoor,doelpuntentegen,doelsaldo,punten"
            ></div>
        </div>
        <div class="tab-pane fade" id="program" role="tabpanel" aria-labelledby="program-tab">
            <div id="sportlink-programma"
                 data-article="programma"
                 data-param-teamcode="{!! $post->sportlink_api_id !!}"
                 data-param-gebruiklokaleteamgegevens="NEE"
                 data-param-eigenwedstrijden="JA"
                 data-param-thuis="JA"
                 data-param-uit="JA"
                 data-label-aanvangstijd="Tijd"
                 data-fields="datum,aanvangstijd,wedstrijd,scheidsrechter"
            ></div>
        </div>
    </div>
</div>