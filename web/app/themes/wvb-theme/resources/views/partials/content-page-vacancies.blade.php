<div class="section section-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-6 col-xl-7 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                @if($vacancies)
                    <h4 class="text-primary mb-3">Openstaande vacatures</h4>
                    <div class="list-group font-weight-medium line-height-md-big">
                        @foreach($vacancies as $job)
                            <a href="{!! get_permalink($job) !!}" class="list-group-item list-group-item-action" title="{!! $job->post_title !!}"><i class="fal fa-file-alt mr-2 text-primary"></i>{!! $job->post_title !!}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
