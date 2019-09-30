<div class="section section-teams">
    <div class="container">
        <div class="row">
            @foreach ($elftallen as $key => $elftal)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                    @php $image = get_field('afbeelding', $elftal->ID) @endphp
                    <a href="{{ get_permalink($elftal) }}" class="card" title="{!! $elftal->post_title !!}">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'team_thumb') !!}" class="card-img" alt="{{ $elftal->post_title }}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h3 class="text-white h5">{!! $elftal->post_title !!}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
