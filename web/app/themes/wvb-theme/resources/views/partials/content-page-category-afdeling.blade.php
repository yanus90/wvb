<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-inline mb-4">
                    <li class="list-inline-item"><a href="/projecten" title="Alle projecten" class="btn btn-sm btn-secondary border-b-4-secondary-dark">Alles</a></li>
                    @foreach($categories as $category)
                        <li class="list-inline-item"><a href="/projecten/{{ $category->slug }}" class="btn btn-sm @if ($category->slug === get_queried_object()->slug) btn-primary border-b-4-primary-dark @else btn-secondary border-b-4-secondary-dark @endif">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                @foreach ($kozijnen as $kozijn)
                    <a href="{{ get_permalink($kozijn) }}" class="card">
                        <img src="{!! get_the_post_thumbnail_url($kozijn) !!}" class="card-img" alt="{{ $kozijn->post_title }}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="btn-group mt-auto" role="group" aria-label="{{ $kozijn->post_title }}">
                                <span class="btn btn-light btn-md no-border">{{ $kozijn->post_title }}</span>
                                <span class="btn btn-primary btn-md no-border btn-i"><i class="far fa-angle-right"></i></span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
