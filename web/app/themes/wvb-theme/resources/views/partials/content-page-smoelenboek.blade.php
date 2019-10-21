<div class="section section-persons">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                @if($smoelenboek)
                    <div class="row">
                        @foreach($smoelenboek as $smoel)
                            @php
                                $image = get_field('profielfoto', $smoel);
                                $functions = wp_get_post_terms($smoel->ID, 'functie');
                            @endphp
                            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                                <div class="card" title="{!! $smoel->post_title !!}">
                                    <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'person_image') : '//placehold.it/600x800?text='.$smoel->post_title) !!}" class="card-img" alt="{!! $smoel->post_title !!}">
                                    <div class="card-img-overlay d-flex flex-column">
                                        <div class="mt-auto">
                                            <h3 class="h5 color-white mb-0 font-weight-semi-bold">{!! $smoel->post_title !!}</h3>
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
                @endif
            </div>
        </div>
    </div>
</div>
