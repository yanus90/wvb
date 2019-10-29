<div class="section-about-wvb">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @if(get_field('over_wvb_afbeelding'))
                <div class="col-lg-6 bg-primary">
                    <div class="about-image">
                        <img src="{!! wp_get_attachment_image_url(get_field('over_wvb_afbeelding')['ID'], 'about_wvb_home_image') !!}" class="img-fluid w-100" alt="{!! get_post_meta(get_field('over_wvb_afbeelding')['ID'], '_wp_attachment_image_alt', TRUE); !!}">
                    </div>
                </div>
            @endif
            <div class="col-lg-6 bg-primary content-about-home">
                <div class="row no-gutters h-100">
                    <div class="col-xl-11 col-xxl-9 my-auto">
                        <div class="p-3 p-md-4 p-lg-5">
                            <h1 class="color-white font-size-p26 font-size-lg-p30 font-size-xl-p40 mb-lg-4">Over Warnsveldse Boys</h1>
                            @if(get_field('over_wvb'))
                                <div class="color-white font-size-p14 font-size-md-p16 font-size-lg-p18 font-weight-medium line-height-big">
                                    {!! get_field('over_wvb') !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>