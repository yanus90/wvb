{{--
  Template Name: Template commissies
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @if ($post->post_content)
        @include('partials.content-page')
    @endif
    <div class="section section-commissies">
        <div class="container">
            <div class="row">
                @foreach($commissies as $commissie)
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                        @php $image = get_field('afbeelding', $commissie) @endphp
                        <a href="{!! get_permalink($commissie) !!}" class="card" title="{!! $commissie->post_title !!}">
                            <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'commission_image') : '//placehold.it/850x550?text='.$commissie->post_title) !!}" class="card-img" alt="{!! $commissie->post_title !!}">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto">
                                    <h3 class="h5 color-white">{!! $commissie->post_title !!}</h3>
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
