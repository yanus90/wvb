@php $gallery = get_field('galerij') @endphp
@if ($gallery)
    <div class="col-12 col-lg-6 mt-4 mt-lg-0">
        <div id="eventSlider" class="carousel slide event-slider" data-ride="carousel">
            <div class="carousel-inner mb-4">
                @foreach ($gallery as $key => $item)
                    <div class="carousel-item @if ($key < 1) active @endif" data-slide-number="0">
                        <img src="{!! wp_get_attachment_image_url($item['foto']['ID'], 'event_thumb_small') !!}" alt="{{ $item['foto']['alt'] }}" class="img-fluid rounded w-100">
                    </div>
                @endforeach
            </div>
            @if(count($gallery) > 1)
                <a class="slidecontrol prev" href="#eventSlider" role="button" data-slide="prev">
                    <i class="far fa-chevron-left"></i>
                </a>
                <a class="slidecontrol next" href="#eventSlider" role="button" data-slide="next">
                    <i class="far fa-chevron-right"></i>
                </a>
                <div class="row">
                    @foreach ($gallery as $key => $item)
                        <div data-target="#eventSlider" data-slide-to="{{ $key }}" class="col-4 col-sm-3 col-lg-4 col-xl-3 mb-3 mb-sm-4 @if ($key < 1) active @endif">
                            <img src="{!! wp_get_attachment_image_url($item['foto']['ID'], 'event_thumb_small') !!}" alt="{{ $item['foto']['alt'] }}" class="img-fluid rounded">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endif