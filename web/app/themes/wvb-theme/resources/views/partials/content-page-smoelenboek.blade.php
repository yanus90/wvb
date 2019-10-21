<div class="section section-persons">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

                @if($smoelenboek)
                    <div class="row">
                        @foreach($smoelenboek as $smoel)
{{--                            {{ dd($functies) }}--}}
                            @php $image = get_field('profielfoto', $smoel) @endphp
                            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                                <div class="card" title="{!! $smoel->post_title !!}">
                                    <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'person_image') : '//placehold.it/600x800?text='.$smoel->post_title) !!}" class="card-img" alt="{!! $smoel->post_title !!}">
                                    <div class="card-img-overlay d-flex flex-column">
                                        <div class="mt-auto">
                                            <h3 class="h5 color-white">{!! $smoel->post_title !!}</h3>
                                            <p class="mb-0 color-white"></p>
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
