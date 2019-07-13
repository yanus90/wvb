@if ($events)
    <div class="section section-upcoming-events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center color-primary mb-5">Aankomende activiteiten</h3>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($events as $event)
                    @if ($event->overzichtafbeelding)
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <a href="{{ get_permalink($event) }}" class="card" title="{!! $event->post_title !!}">
                                <img src="{!! wp_get_attachment_image_url($event->overzichtafbeelding, 'post_thumb') !!}" class="card-img" alt="{!! get_post_meta($event->overzichtafbeelding, '_wp_attachment_image_alt', TRUE); !!}">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="mt-auto">
                                        <h6 class="date small">{{ $event->datum }}</h6>
                                        <h5 class="card-title">{!! $event->post_title !!}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <a href="/evenementen/" class="btn btn-lg btn-primary" title="Agendaoverzicht">Agendaoverzicht<i class="fal fa-angle-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
@endif