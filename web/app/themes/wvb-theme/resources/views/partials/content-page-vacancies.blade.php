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
                    <div class="accordion" id="accordionVacancies">
                        @foreach($vacancies as $job)
                            <div class="card">
                                <div class="card-header" id="heading-job-{!! $job->ID !!}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-decoration-none font-weight-medium font-size-p18 p-0 color-black @if(!$loop->first) collapsed @endif" type="button" data-toggle="collapse" data-target="#collapse-job-{!! $job->ID !!}" aria-expanded="true" aria-controls="collapse-job-{!! $job->ID !!}">
                                            {!! $job->post_title !!}
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse-job-{!! $job->ID !!}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading-job-{!! $job->ID !!}" data-parent="#accordionVacancies">
                                    <div class="card-body font-size-p16 line-height-md-big">
                                        {!! $job->post_content !!}
                                        <p class="mb-0"><a href="/vacatures/aanmelden" class="btn btn-sm btn-primary mt-3" title="Ik meld me graag aan" target="_blank">Ik meld me graag aan<i class="fal fa-angle-right ml-2"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
