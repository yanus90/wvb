<div class="section section-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-8 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</div>
