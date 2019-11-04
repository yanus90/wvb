{{--
  Template Name: Template met contactpersonen
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page-with-persons')
  @endwhile
@endsection
