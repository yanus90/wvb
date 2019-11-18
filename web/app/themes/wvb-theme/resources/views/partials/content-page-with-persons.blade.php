<div class="section section-content">
    <div class="container">
        <div class="row justify-content-lg-center mb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 font-weight-medium line-height-md-big {{ ($persons ? 'col-lg-7 col-xl-8' : '') }}">
                        @php the_content() @endphp
                        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
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
