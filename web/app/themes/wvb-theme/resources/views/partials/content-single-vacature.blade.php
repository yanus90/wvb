<div class="section-single-post section">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-10 font-weight-medium line-height-md-big">
                @if($post->post_content)
                    {!! $post->post_content !!}
                @endif
                <p class="mb-0"><a href="/solliciteren/?vacature={!! urlencode($post->post_title) !!}" class="btn btn-md btn-primary mt-3" title="Ik meld me graag aan als vrijwilliger">Ik meld me graag aan als vrijwilliger<i class="fal fa-angle-right ml-2"></i></a></p>
            </div>
        </div>
    </div>
</div>