<div class="section section-slider pb-md-4 pb-xl-5 {{ ($notifications ? 'pt-3' : 'pt-4 pt-xl-5') }}">
    <div class="container">
        <div class="row">
            @if (get_field('homepagina_slider'))
                <div class="col-lg-8 col-xl-9 col-xxl-9 mb-4 mb-xl-0">
                    <div id="carouselHome" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($slider as $key => $slide)
                                <li data-target="#carouselHome" data-slide-to="{{ $key }}" @if ($key < 1) class="active" @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($slider as $key => $slide)
                                @php
                                    $link = '';
                                    if($slide['soort_link'] == 'post_item') {
                                        $link = get_permalink($slide['nieuwsbericht']);
                                    } elseif($slide['soort_link'] == 'page') {
                                        $link = $slide['pagina'];
                                    } elseif($slide['soort_link'] == 'external_link') {
                                        $link = $slide['externe_url'];
                                    } else {
                                        $link = '#';
                                    }
                                @endphp
                                <a href="{!! $link !!}" class="carousel-item @if ($key < 1) active @endif" title="{!! $slide['titel'] !!}" target="{{ ($slide['nieuw_tabblad'] == '_blank' ? '_blank' : '_self') }}">
                                    <img src="{!! wp_get_attachment_image_url($slide['afbeelding']['ID'], 'slider_image_crop') !!}" class="d-block w-100" alt="{!! $slide['afbeelding']['alt'] !!}">
                                    <div class="carousel-caption">
                                        <h3 class="font-size-p20 font-size-sm-p22 font-size-md-p24 font-size-lg-p26 {{ ($slide['korte_intro'] ? 'mb-1' : '') }}">{!! $slide['titel'] !!}</h3>
                                        @if($slide['korte_intro'])
                                            <p class="mb-0 font-size-p14 font-size-md-p16">{!! $slide['korte_intro'] !!}</p>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-lg-4 col-xl-3 col-xxl-3">
                <div class="row">
                    @if($sponsor_of_the_month)
                        @foreach($sponsor_of_the_month as $sponsor)
                            <div class="col-sm-12 col-md-12 col-xl-12">
                                <a href="/sponsor-van-de-maand" class="card card-sponsor-featured mb-lg-4" title="Sponsor van de maand: {!! $sponsor->post_title !!}">
                                    <div class="card-body">
                                        <div class="row">
                                            @if($sponsor->afbeelding)
                                                <div class="col-4 col-sm-3 col-md-3 col-lg-12">
                                                    <img src="{!! wp_get_attachment_image_url($sponsor->afbeelding, 'sponsor_month_image') !!}" alt="{!! $sponsor->post_title !!}" class="img-fluid rounded mb-2">
                                                </div>
                                            @endif
                                            <div class="{{ ($sponsor->afbeelding ? 'col-8 col-sm-9 col-md-9 col-lg-12 pt-lg-2' : 'col-12 pt-lg-2') }}">
                                                <h5 class="card-title font-size-p16 mb-2">Sponsor van de maand</h5>
                                                <h5 class="card-title font-size-p18 font-size-xl-p18 font-size-xxl-p22 text-primary">{!! $sponsor->post_title !!}</h5>
                                                @if($sponsor->korte_omschrijving)
                                                    <p class="font-size-p14 color-black d-none d-xl-inline-block">
                                                        {!! $sponsor->korte_omschrijving !!}
                                                    </p>
                                                @endif
                                                <p class="mb-0"><span class="btn btn-sm btn-primary">Lees verder<i class="fal fa-angle-right ml-2"></i></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>