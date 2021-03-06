<div class="section section-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 font-weight-medium line-height-md-big">
                        @php the_content() @endphp
                        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                        @if($events)
                            <div class="event-list mt-5">
                                @foreach($events as $event)
                                    <a href="{!! get_permalink($event) !!}" title="{!! $event->post_title !!}" class="event-item text-decoration-none">
                                        <div class="row no-gutters">
                                            @if($event->overzichtafbeelding)
                                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
                                                    <div class="event-item-image">
                                                        <img src="{!! wp_get_attachment_image_url($event->overzichtafbeelding, 'post_thumb') !!}" alt="{{ get_post_meta($event->overzichtafbeelding, '_wp_attachment_image_alt', true) }}" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="{{ ($event->overzichtafbeelding ? 'col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-9' : 'col-12') }}">
                                                <div class="event-item-content">
                                                    <p class="font-size-small mb-0">{{ $event->datum }}</p>
                                                    <hr>
                                                    <div class="mb-3">
                                                        <h3 class="font-size-p26">{!! $event->post_title !!}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="pagination">
                            {!!
                                paginate_links([
                                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                    'format' => '/page/%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $events_query->max_num_pages,
                                    'prev_text' => '«',
                                    'next_text' => '»',
                                ])
                            !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
