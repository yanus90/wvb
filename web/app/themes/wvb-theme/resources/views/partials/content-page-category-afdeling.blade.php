<div class="section">
    <div class="container">
        <div class="row">
            @foreach ($elftallen as $elftal)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                    @php $image = get_field('afbeelding', $elftal->ID) @endphp
                    <a href="{{ get_permalink($elftal) }}" class="card">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'team_thumb') !!}" class="card-img" alt="{{ $elftal->post_title }}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="btn-group mt-auto" role="group" aria-label="{{ $elftal->post_title }}">
                                <span class="btn btn-light btn-md no-border">{{ $elftal->post_title }}</span>
                                <span class="btn btn-primary btn-md no-border btn-i"><i class="far fa-angle-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
