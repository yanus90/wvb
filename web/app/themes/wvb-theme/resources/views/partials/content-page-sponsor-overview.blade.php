<div class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
            </div>
        </div>
    </div>
</div>
@if($sponsoren)
    @foreach($sponsoren as $soort => $items)
        @php
            $cols = '';
            $kind = '';
            if($soort == 'Hoofdsponsor') {
                $cols = 'col-6 col-sm-6 col-lg-4';
                $kind = 'big';
            } else {
                $cols = 'col-6 col-sm-4 col-md-4 col-lg-3';
                $kind = 'small';
            }
        @endphp
        <div class="section section-sponsoring {{ ($soort == 'Hoofdsponsor' ? 'pt-0' : '') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12 font-weight-medium line-height-md-big">
                        <div class="sponsor-items">
                            <h2 class="h4 mb-3 mb-md-4 text-uppercase">{!! $soort !!}</h2>
                            <div class="row">
                                @foreach($items as $item)
                                    <div class="{{ $cols }} mb-4">
                                        @if($item->website_url)
                                            <a href="{!! $item->website_url !!}" title="{!! $item->post_title !!}" target="_blank" class="card card-sponsor {{ $kind }} align-self-center">
                                        @else
                                            <div class="card card-sponsor {{ $kind }} align-self-center">
                                        @endif
                                            <div class="my-auto text-center">
                                                <img src="{!! wp_get_attachment_image_url($item->logo, 'large') !!}" class="img-fluid" alt="{!! $item->post_title !!}">
                                            </div>
                                        @if($item->website_url)
                                            </a>
                                        @else
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
<div class="section"></div>