{{--
  Template Name: Template Sportlink
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
      <div class="section section-content">
          <div class="container">
              <div class="row justify-content-lg-center mb-5">
                  <div class="col-12 col-lg-10 col-xl-8">
                      <div class="row">
                          <div class="col-12 font-weight-medium line-height-md-big">

                              @php
                                  $json = file_get_contents('https://data.sportlink.com/teams?clientId=X5wbJgu0J7');
                                  $data = json_decode($json, true);
                              @endphp

{{--                              {{ var_dump($data) }}--}}
                                  @foreach($data as $d)
                                      <strong>{!! $d['teamnaam'] !!}</strong><br>
                                      <ul class="mb-5">
                                          <li>Competitiesoort: {!! strtoupper($d['competitiesoort']) !!}</li>
                                          <li>Competitienaam: {!! $d['competitienaam'] !!}</li>
                                          <li>Teamcode: {!! $d['teamcode'] !!}</li>
                                          <li>Poulecode: {!! $d['poulecode'] !!}</li>
                                      </ul>
                                  @endforeach

                              @php the_content() @endphp
                              {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endwhile
@endsection
