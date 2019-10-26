<div class="section pt-0 pb-5 section-sponsoren-home">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="color-black mb-4">Hoofdsponsoren <span class="text-primary">Warnsveldse Boys</span></h3>
            </div>
        </div>
        <div class="row">
            @foreach($sponsoren as $sponsor)
                @if($loop->first)
                    <div class="col-12 col-md-3 col-lg-3 col-xl-2 col-xxl-2">
                        <a href="{!! $sponsor->website_url !!}" title="{!! $sponsor->post_title !!}" target="_blank" class="card card-sponsor main-sponsor align-self-center">
                            <div class="my-auto text-center">
                                <img src="{!! wp_get_attachment_image_url($sponsor->logo, 'large') !!}" class="img-fluid" alt="{!! $sponsor->post_title !!}">
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
            <div class="col-12 col-md-9 col-lg-9 col-xl-10 col-xxl-10">
                <div class="row">
                    @foreach($sponsoren as $sponsor)
                        @if(! $loop->first)
                            <div class="col-12 col-md-3 col-lg-3 col-xl-2 col-xxl-2 mb-md-2 mb-lg-4">
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
        {{--<div class="row mb-4">--}}
            {{--<div class="col text-center">--}}
                {{--<a href="/sponsoren/" class="btn btn-lg btn-primary" title="Sponsoren">Bekijk alle sponsoren<i class="fal fa-angle-right ml-3"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>