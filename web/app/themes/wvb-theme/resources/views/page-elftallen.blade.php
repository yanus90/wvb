@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @if ($post->post_content)
        @include('partials.content-page')
    @endif
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline mb-4">
                        <li class="list-inline-item"><a href="/elftallen" title="Alle elftallen" class="btn btn-sm btn-primary border-b-4-primary-dark">Alles</a></li>
                        @foreach($categories as $category)
                            <li class="list-inline-item"><a href="/elftallen/{{ $category->slug }}" class="btn btn-sm btn-secondary border-b-4-secondary-dark">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                    @foreach($categories as $category)
                        @foreach ($elftallen as $elftal)
                            <a href="{{ get_permalink($category) }}" class="card">
                                <img src="{!! get_the_post_thumbnail_url($elftal) !!}" class="card-img" alt="{{ $elftal->post_title }}">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="btn-group mt-auto" role="group" aria-label="{{ $category->post_title }}">
                                        <span class="btn btn-light btn-md no-border">{{ $category->post_title }}</span>
                                        <span class="btn btn-primary btn-md no-border btn-i"><i class="far fa-angle-right"></i></span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endwhile
@endsection
