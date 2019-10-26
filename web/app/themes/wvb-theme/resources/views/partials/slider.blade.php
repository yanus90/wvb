<div class="section section-slider pt-5">
    <div class="container">
        <div class="row">
            @if (get_field('homepagina_slider'))
                <div class="col-xl-8 col-xxl-9 mb-4 mb-xl-0">
                    <div id="carouselHome" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($slider as $key => $slide)
                                <li data-target="#carouselHome" data-slide-to="{{ $key }}" @if ($key < 1) class="active" @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($slider as $key => $slide)
                                <a href="{{ $slide['link'] }}" class="carousel-item @if ($key < 1) active @endif" title="{!! $slide['titel'] !!}" target="{{ ($slide['nieuw_tabblad'] == '_blank' ? '_blank' : 'self') }}">
                                    <img src="{!! wp_get_attachment_image_url($slide['afbeelding']['ID'], 'slider_image_crop') !!}" class="d-block w-100" alt="{!! $slide['afbeelding']['alt'] !!}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>{!! $slide['titel'] !!}</h3>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-xl-4 col-xxl-3">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <a href="#" class="card card-sponsor-featured mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="//placehold.it/110x70" class="img-fluid">
                                    </div>
                                    <div class="col-12 pt-2">
                                        <h5 class="card-title mb-2">Sponsor van de maand</h5>
                                        <p class="mb-0">Lees verder ></p>
                                    </div>
                                </div>
                                {{--<h5 class="card-title color-white">Lid worden bij Warnsveldse Boys!</h5>--}}
                                {{--<p class="card-text mb-0 color-white">Altijd al willen voetballen? Meld je snel aan!</p>--}}
                            </div>
                        </a>
                    </div>
                    {{--<div class="col-12 col-sm-6 col-md-6 col-xl-12">--}}
                        {{--<a href="/wedstrijdverslagen" class="card mb-4" title="Wedstrijdverslagen">--}}
                            {{--<div class="row no-gutters">--}}
                                {{--<div class="d-none d-sm-block d-md-none d-lg-block col-sm-3 col-md-4">--}}
                                    {{--<img src="//placehold.it/160x117" class="card-img" alt="Wedstrijdverslagen">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-9 col-md-12 col-lg-8">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<h5 class="card-title mb-2">Wedstrijdverslagen</h5>--}}
                                        {{--<p class="card-text mb-0">Lees alle wedstrijdverslagen</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-12 col-sm-6 col-md-6 col-xl-12">--}}
                        {{--<a href="/evenementen" class="card" title="Wat staat er op de agenda?">--}}
                            {{--<div class="row no-gutters">--}}
                                {{--<div class="d-none d-lg-block col-md-4">--}}
                                    {{--<img src="//placehold.it/160x117" class="card-img" alt="...">--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-8">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<h5 class="card-title mb-2">Agenda</h5>--}}
                                        {{--<p class="card-text mb-0">Wat staat er op de agenda?</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>