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
                @foreach($commissions as $commission)
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
                        @php $image = get_field('afbeelding', $commission->taxonomy . '_' . $commission->term_id) @endphp
                        <a href="{!! get_term_link($commission) !!}" class="card" title="{!! $commission->name !!}">
                            <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'commission_image') : '//placehold.it/850x550?text='.$commission->name) !!}" class="card-img" alt="{!! $commission->name !!}">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="mt-auto">
                                    <h3 class="h5 color-white">{!! $commission->name !!}</h3>
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
