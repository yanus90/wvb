@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="section section-content">
    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          @if (!have_posts())
            <div class="alert alert-warning">
              Sorry, de pagina die je zocht is recent verwijderd of bestaat niet meer.
            </div>
            <p><a href="/" title="Terug naar homepagina" class="btn btn-md btn-primary">Terug naar homepagina<i class="fal fa-home ml-2"></i></a></p>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
