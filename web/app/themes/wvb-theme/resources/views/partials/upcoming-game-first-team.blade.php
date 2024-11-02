@if($upcoming_game_first_team[0])
    <div class="section pt-0 pb-5 bg-white">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col text-left">
                    <h4 class="color-black mb-4">Eerstvolgende wedstrijd <br><span class="text-primary">Warnsveldse Boys 1</span></h4>
                </div>
                <div class="col text-center d-flex justify-content-between align-items-center">
                    <div>
                        <img src="{{ $upcoming_game_first_team[0]['thuisteamlogo'] }}"
                             class=""
                             height="90"
                             alt="{{ $upcoming_game_first_team[0]["thuisteam"] }}">
                    </div>
                    <div class="bg-primary text-white text-uppercase font-size-p14 pl-3 pr-3 pt-2 pb-2">
                        vs
                    </div>
                    <div>
                        <img src="{{ $upcoming_game_first_team[0]['uitteamlogo'] }}"
                             class=""
                             height="90"
                             alt="{{ $upcoming_game_first_team[0]["uitteam"] }}">
                    </div>
                </div>
                <div class="col d-flex flex-column align-items-end">
                    @if(! empty($upcoming_game_first_team[0]['klasse']))
                        <div class="bg-primary text-white pl-3 pr-3 pt-2 pb-2 mb-2 text-uppercase">
                            {!! $upcoming_game_first_team[0]['klasse'] !!}
                        </div>
                    @endif
                    <div class="d-flex font-size-p16 font-weight-medium text-uppercase">
                        @if(! empty($upcoming_game_first_team[0]['datum']))
                            <span>{!! $upcoming_game_first_team[0]['datum'] !!}</span>&nbsp;
                        @endif

                        @if(! empty($upcoming_game_first_team[0]['aanvangstijd']))
                            <span>{!! $upcoming_game_first_team[0]['aanvangstijd'] !!} uur</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
