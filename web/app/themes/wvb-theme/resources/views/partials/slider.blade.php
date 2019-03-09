<div class="section section-slider pt-5">
    <div class="container">
        <div class="row">
            @if (get_field('homepagina_slider'))
                <div class="col-xl-7 col-xxl-8 mb-4 mb-xl-0">
                    <div id="carouselHome" class="carousel slide" data-ride="carousel">
                        @if ( count(get_field('homepagina_slider')) > 1 )
                            <ol class="carousel-indicators">
                                @php $i = 0; @endphp
                                @foreach (get_field('homepagina_slider') as $slide)
                                    <li data-target="#carouselHome" data-slide-to="{{ $i }}" class="{{ ($i == 0 ? 'active' : '') }}"></li>
                                    @php $i++ @endphp
                                @endforeach
                            </ol>
                        @endif
                        <div class="carousel-inner">
                            @php $i = 0; @endphp
    {{--                        {{ dd(get_field('homepagina_slider')) }}--}}
                            @foreach (get_field('homepagina_slider') as $slide)
                                <a href="{{ $slide['link'] }}" class="carousel-item {{ ($i == 0 ? 'active' : '') }}" title="{!! $slide['titel'] !!}" target="{{ ($slide['nieuw_tabblad'] == '_blank' ? '_blank' : 'self') }}">
                                    <img src="{{ $slide['afbeelding'][$i]['url'] }}" class="d-block w-100" alt="{!! $slide['afbeelding'][$i]['alt'] !!}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>{!! $slide['titel'] !!}</h3>
                                    </div>
                                </a>
                                @php $i++ @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-xl-5 col-xxl-4">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <a href="#" class="card card-join bg-primary mb-4">
                            <div class="card-body">
                                <h5 class="card-title color-white">Lid worden bij Warnsveldse Boys!</h5>
                                <p class="card-text mb-0 color-white">Altijd al willen voetballen? Meld je snel aan!</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-xl-12">
                        <a href="#" class="card mb-4">
                            <div class="row no-gutters">
                                <div class="d-none d-sm-block d-md-none d-lg-block col-sm-3 col-md-4">
                                    <img src="//placehold.it/160x117" class="card-img" alt="...">
                                </div>
                                <div class="col-sm-9 col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Wedstrijdverslagen</h5>
                                        <p class="card-text mb-0">Lees alle wedstrijdverslagen</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-12">
                        <a href="#" class="card mb-4">
                            <div class="row no-gutters">
                                <div class="d-none d-lg-block col-md-4">
                                    <img src="//placehold.it/160x117" class="card-img" alt="...">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Programma en<br>uitslagen</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-12">
                        <a href="#" class="card">
                            <div class="row no-gutters">
                                <div class="d-none d-lg-block col-md-4">
                                    <img src="//placehold.it/160x117" class="card-img" alt="...">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Agenda</h5>
                                        <p class="card-text mb-0">Wat staat er op de agenda?</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>