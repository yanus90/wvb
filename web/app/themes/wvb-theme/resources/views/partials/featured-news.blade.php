<div class="section section-featured-news bg-dark-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center color-black mb-4">Laatste nieuws</h3>
            </div>
        </div>
        <div class="row mb-5">

            @php
                $args = array('post_type' => 'post', 'posts_per_page' => 4);
                $loop = new WP_Query($args);
            @endphp

            @while ($loop->have_posts()) @php $loop->the_post() @endphp
                @if (has_post_thumbnail())
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <a href="{{ get_the_permalink() }}" class="card" title="{{ get_the_title() }}">
                            <img src="{!! get_the_post_thumbnail_url() !!}" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto">
                                    <h5 class="card-title">{{ get_the_title() }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endwhile
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="/nieuws" class="btn btn-lg btn-primary" title="Nieuwsoverzicht">Nieuwsoverzicht<i class="fal fa-angle-right ml-3"></i></a>
            </div>
        </div>
    </div>
</div>