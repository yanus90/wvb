{{--
  Template Name: Template vertrouwenspersoon
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page-confidant')
  @endwhile
@endsection
