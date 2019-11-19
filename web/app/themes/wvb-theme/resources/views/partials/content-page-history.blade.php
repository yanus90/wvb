<div class="section section-content">
    <div class="container">
        <div class="row justify-content-lg-center mb-5">
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-12 font-weight-medium line-height-md-big">
                        @php the_content() @endphp
                        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                        @if($history)
                            @foreach($history as $h)
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="font-size-p36 font-size-md-p46 history-title">{!! $h->post_title . ($h->subtitel ? ' <span class="font-size-md-p40">- ' . $h->subtitel . '</span>' : '') !!}</h2>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-12 testimonial-wrapper">
                                        <div class="testimonial border-primary w-100">
                                            <div class="testimonial-content w-100">
                                                {!! apply_filters('the_content', $h->post_content) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
