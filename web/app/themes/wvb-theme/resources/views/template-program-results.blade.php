{{--
  Template Name: Template programma/resultaten
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page-program-results')
  @endwhile
@endsection
