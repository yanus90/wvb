<section class="section tab-post mb-16">
    <div class="title-wrap title-wrap--line">
        <h3 class="section-title">{{ __('Laatste nieuws') }}</h3>
    </div>
    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
        <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
            <div class="row card-row">
                @while(have_posts()) @php the_post() @endphp
                    @if($recent_posts)
                        @foreach($recent_posts as $post)
                            @include('partials.latest-post-single-item')
                        @endforeach
                    @endif
                @endwhile
            </div>
        </div>
    </div>
</section>