<div class="section section-sponsoren">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center color-primary mb-5">Sponsoren Warnsveldse Boys</h3>
            </div>
        </div>
        <div class="row mb-4">
            @foreach($sponsoren as $sponsor)
                @if($loop->first)
                    <div class="col-12 col-xl-4">
                        <div class="main-sponsor-label">Hoofdsponsor</div>
                        <a href="{!! $sponsor->website_url !!}" title="{!! $sponsor->post_title !!}" target="_blank" class="card card-sponsor main-sponsor align-self-center">
                            <div class="my-auto text-center">
                                <img src="{!! wp_get_attachment_image_url($sponsor->logo, 'large') !!}" class="img-fluid" alt="{!! $sponsor->post_title !!}">
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
            <div class="col-12 col-xl-8">
                <div class="row">
                    @foreach($sponsoren as $sponsor)
                        @if(! $loop->first)
                            <div class="col-xl-3 mb-4">
                                @if($sponsor->website_url)
                                    <a href="{!! $sponsor->website_url !!}" title="{!! $sponsor->post_title !!}" target="_blank" class="card card-sponsor small align-self-center">
                                @else
                                    <div class="card card-sponsor align-self-center">
                                @endif
                                    <div class="my-auto text-center">
                                        <img src="{!! wp_get_attachment_image_url($sponsor->logo, 'large') !!}" class="img-fluid img-grayscale" alt="{!! $sponsor->post_title !!}">
                                    </div>
                                @if($sponsor->website_url)
                                    </a>
                                @else
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col text-center">
                <a href="/sponsoren/" class="btn btn-lg btn-primary" title="Sponsoren">Bekijk alle sponsoren<i class="fal fa-angle-right ml-3"></i></a>
            </div>
        </div>
    </div>
</div>