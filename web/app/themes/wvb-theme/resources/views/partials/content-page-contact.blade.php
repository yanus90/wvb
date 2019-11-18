<div class="section section-content">
    <div class="container">
        <div class="row justify-content-lg-center mb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 font-weight-medium line-height-md-big {{ ($persons ? 'col-lg-7 col-xl-8' : '') }}">
                        @php the_content() @endphp
                        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                        <div class="row mt-4 mt-lg-5">
                            <div class="col-12">
                                <hr class="mb-4 mb-lg-5">
                            </div>
                            <div class="col-12 col-xl-5">
                                <h4>Contactgegevens</h4>
                                @include('partials.contact-details')
                            </div>
                            <div class="col-12 col-xl-7 mt-4 mt-xl-0">
                                <a href="https://goo.gl/maps/DT3w1PrvZF453ybM7" title="Google Maps" target="_blank">
                                    <img src="@asset('images/kaart-google-maps-wvb.png')" alt="Warnsveldse Boys op Google Maps" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                    @if($persons)
                        <div class="col-12 col-lg-5 col-xl-4 mt-5 mt-lg-0">
                            @include('partials.persons-sidebar')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
