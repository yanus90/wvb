{{--
  Template Name: Template elftallen
--}}

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
                @foreach($categories as $category)
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                        @php $image = get_field('afbeelding', 'term_'.$category->term_id) @endphp
                        <a href="/elftallen/{!! $category->slug !!}" class="card">
                            <img src="{!! wp_get_attachment_image_url($image['id'], 'team_thumb') !!}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="btn-group mt-auto" role="group" aria-label="{{ $category->name }}">
                                    <span class="btn btn-light btn-md no-border">{{ $category->name }}</span>
                                    <span class="btn btn-primary btn-md no-border btn-i"><i class="far fa-angle-right"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endwhile
@endsection
