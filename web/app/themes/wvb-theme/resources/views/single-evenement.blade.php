@extends('layouts.app')

@section('content')
    @include('partials.page-header')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
