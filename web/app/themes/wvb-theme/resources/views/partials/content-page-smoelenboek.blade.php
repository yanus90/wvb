<div class="section section-persons">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                @if($smoelenboek)
                    @foreach($smoelenboek as $commission => $items)
                        <div class="row mb-4 mb-lg-5">
                            <div class="col-12 font-weight-medium line-height-md-big">
                                <div class="persons">
                                    <h2 class="h4 mb-3 mb-md-4 text-uppercase text-primary">{!! $commission !!}</h2>
                                    <div class="row">
                                        @foreach($items as $item)
                                            @php
                                                $image = get_field('profielfoto', $item);
                                                $functions = wp_get_post_terms($item->ID, 'functie');
                                            @endphp
                                            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                                                <div class="card" title="{!! $item->post_title !!}">
                                                    <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'person_image') : '//placehold.it/600x800?text='.$item->post_title) !!}" class="card-img" alt="{!! $item->post_title !!}">
                                                    <div class="card-img-overlay d-flex flex-column">
                                                        <div class="mt-auto">
                                                            <h3 class="h5 color-white mb-0 font-weight-semi-bold">{!! $item->post_title !!}</h3>
                                                            <ul class="list-inline mb-0 color-white">
                                                                @foreach($functions as $function)
                                                                    <li class="list-inline-item font-size-p14">{!! $function->name !!}@if(! $loop->last), @endif</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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