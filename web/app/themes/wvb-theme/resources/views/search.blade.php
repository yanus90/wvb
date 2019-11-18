@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="section section-content">
    <div class="container">
      <div class="row justify-content-lg-center mb-5">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="row">
            <div class="col-12 font-weight-medium line-height-md-big">
              @if (!have_posts())
                <div class="alert alert-warning">
                  Sorry, de pagina die u zocht is recentelijk verwijderd of bestaat niet.
                </div>
                {!! get_search_form(false) !!}
              @endif

              @while(have_posts()) @php the_post() @endphp
              @include('partials.content-search')
              @endwhile
            </div>
            {!! get_the_posts_navigation() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
