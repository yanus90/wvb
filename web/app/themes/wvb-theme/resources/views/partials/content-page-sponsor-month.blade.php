<div class="section section-content">
    <div class="container">
        <div class="row justify-content-lg-center mb-5">
            <div class="col-12 col-lg-10">
                <div class="row">
                    @if($sponsor_of_the_month)
                        @foreach($sponsor_of_the_month as $sponsor)
                            <div class="col-12 col-md-7 col-lg-8 font-weight-medium line-height-md-big">
                                <h2 class="font-weight-semi-bold text-primary mb-3">{!! $sponsor->post_title !!}</h2>
                                @if($sponsor->afbeelding)
                                    <img src="{!! wp_get_attachment_image_url($sponsor->afbeelding, 'sponsor_month_image') !!}" alt="{!! $sponsor->post_title !!}" class="img-fluid mb-3 mb-md-4 rounded">
                                @endif
                                @php the_content() @endphp
                                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
                            </div>
                            <div class="col-12 col-md-5 col-lg-4 font-weight-medium line-height-md-big">
                                @if($sponsor->logo)
                                    <img src="{!! wp_get_attachment_image_url($sponsor->logo, 'large') !!}" alt="{!! $sponsor->post_title !!}" class="img-fluid mb-3 mb-md-4" width="220">
                                @endif
                                <h3 class="h5 text-primary">Contactgegevens</h3>
                                <ul class="list-unstyled">
                                    @if($sponsor->adres_en_nummer)<li>{!! $sponsor->adres_en_nummer !!}</li>@endif
                                    @if($sponsor->postcode || $sponsor->plaats)<li>{!! $sponsor->postcode .' '. $sponsor->plaats !!}</li>@endif
                                    @if($sponsor->telefoonnummer)<li><i class="fal fa-phone text-primary mr-2"></i>{!! $sponsor->telefoonnummer !!}</li>@endif
                                    @if($sponsor->website_url)<li><i class="fal fa-globe mr-2 text-primary"></i><a href="{!! $sponsor->website_url !!}" title="Bezoek de website" target="_blank" class="text-decoration-none">Bezoek de website</a></li>@endif
                                </ul>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
