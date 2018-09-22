{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.slider')
    @while(have_posts()) @php the_post() @endphp
    @if($recent_posts)
        @include('partials.latest-posts')
    @endif
    @endwhile
@endsection