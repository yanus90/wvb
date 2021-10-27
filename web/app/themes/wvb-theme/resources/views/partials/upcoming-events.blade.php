<ul class="list-unstyled mb-3 mb-md-4">
    @foreach($events as $event)
        <li class="mb-3">
            <a href="{!! get_permalink($event) !!}" title="{!! $event->post_title !!}" class="media text-decoration-none">
                <img src="{!! ($event->overzichtafbeelding ? wp_get_attachment_image_url($event->overzichtafbeelding, 'thumbnail') : '//via.placeholder.com/150x150') !!}" class="mr-3 img-fluid rounded" alt="{!! $event->post_title !!}" width="70">
                <div class="media-body font-size-p16 line-height-regular">
                    <h6 class="date small mb-1 color-black">{{ $event->datum }}</h6>
                    <h5 class="">{!! $event->post_title !!}</h5>
                </div>
            </a>
        </li>
    @endforeach
</ul>
<p class="mb-0"><a href="/de-club/agenda" class="btn btn-sm btn-outline-primary" title="Volledig overzicht">Volledig overzicht<i class="fal fa-angle-right ml-3"></i></a></p>