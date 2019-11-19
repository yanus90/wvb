@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="section section-content">
    <div class="container">
      <div class="row justify-content-lg-center mb-5">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="row">
            <div class="col-12 font-weight-medium line-height-md-big">
              <div class="news-list">
                @while (have_posts()) @php the_post() @endphp
                  @include('partials.content-'.get_post_type())
                @endwhile
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
