{{--
  Template Name: Template Weekbericht WvB1
--}}

@extends('layouts.first-team')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="section pt-4 header-first-team">
      <div class="container">
          <div class="row mb-5">
              <div class="col-12 font-size-p14 font-size-md-p16 font-weight-medium line-height-md-big">
                  @if($program)
                      @foreach($program as $week)
                          @foreach($week as $w)
                              @php $weeknr = date('W'); @endphp

                              @if($weeknr == $w['weeknr'])
                                  <div class="row mb-5">
                                      <div class="col-12">
                                          <h1 class="mb-4 font-size-p26 font-size-lg-p40">Programma en corvee week <span class="text-primary font-weight-bold">{{ $w['weeknr'] }}</span></h1>
                                          @if($w['dagen'])
                                              <div class="d-md-none">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          @foreach($w['dagen'] as $day)
                                                              @php
                                                                  $what = $day['wat'];
                                                                  if($what == 'training') {
                                                                    $what = 'Training';
                                                                  } elseif($what == 'match') {
                                                                    $what = 'Wedstrijd';
                                                                  }
                                                              @endphp
                                                              <ul class="list-group mb-4">
                                                                  <li class="list-group-item active">Dag {!! $day['wanneer'] !!}</li>
                                                                  <li class="list-group-item text-uppercase">{!! $what !!}</li>
                                                                  <li class="list-group-item">
                                                                      <div class="row">
                                                                          <div class="col">
                                                                              Aanwezig
                                                                          </div>
                                                                          <div class="col">
                                                                              {!! $day['aanwezig'] !!} uur
                                                                          </div>
                                                                      </div>
                                                                  </li>
                                                                  <li class="list-group-item">
                                                                      <div class="row">
                                                                          <div class="col">
                                                                              Aanvang
                                                                          </div>
                                                                          <div class="col">
                                                                              {!! $day['aanvang'] !!} uur
                                                                          </div>
                                                                      </div>
                                                                  </li>
                                                              </ul>
                                                          @endforeach
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="d-none d-md-block">
                                                  <h2 class="h4 text-primary">Programma</h2>
                                                  <div class="table-responsive mb-4">
                                                      <table class="table table-striped">
                                                          <thead>
                                                          <tr>
                                                              <th>Wanneer</th>
                                                              <th>Wat</th>
                                                              <th>Tijd aanwezig</th>
                                                              <th>Tijd aanvang</th>
                                                          </tr>
                                                          </thead>
                                                          @foreach($w['dagen'] as $day)
                                                              @php
                                                                  $what = $day['wat'];
                                                                  if($what == 'training') {
                                                                    $what = 'Training';
                                                                  } elseif($what == 'match') {
                                                                    $what = 'Wedstrijd';
                                                                  }
                                                              @endphp
                                                              <tr>
                                                                  <td>{!! $day['wanneer'] !!}</td>
                                                                  <td>{!! $what !!}</td>
                                                                  <td>{!! $day['aanwezig'] !!} uur</td>
                                                                  <td>{!! $day['aanvang'] !!} uur</td>
                                                              </tr>
                                                          @endforeach
                                                      </table>
                                                  </div>
                                              </div>
                                          @endif
                                          @if($w['corvee'])
                                              <h2 class="h4 text-primary d-none d-md-block">Corvee</h2>
                                              <div class="d-md-none">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          @foreach($w['corvee'] as $corvee)
                                                              <ul class="list-group secondary mb-4">
                                                                  <li class="list-group-item bg-dark text-white">Corvee</li>
                                                                  <li class="list-group-item">{!! $corvee['corvee_1'] !!}</li>
                                                                  <li class="list-group-item">{!! $corvee['corvee_2'] !!}</li>
                                                                  <li class="list-group-item">{!! $corvee['reserve'] !!} <span class="badge badge-secondary">R</span></li>
                                                              </ul>
                                                          @endforeach
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="d-none d-md-block">
                                                  <div class="table-responsive">
                                                      <table class="table table-striped">
                                                          <thead>
                                                              <tr>
                                                                  <th>Corvee 1</th>
                                                                  <th>Corvee 2</th>
                                                                  <th>Reserve <span class="badge badge-secondary">R</span></th>
                                                              </tr>
                                                          </thead>
                                                          @foreach($w['corvee'] as $corvee)
                                                              <tr>
                                                                  <td>{!! $corvee['corvee_1'] !!}</td>
                                                                  <td>{!! $corvee['corvee_2'] !!}</td>
                                                                  <td>{!! $corvee['reserve'] !!}</td>
                                                              </tr>
                                                          @endforeach
                                                      </table>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-12">

                                                  </div>
                                              </div>
                                          @endif
                                      </div>
                                  </div>
                              {{--@else--}}
                                  {{--<div class="row">--}}
                                      {{--<div class="col-12">--}}
                                          {{--<div class="alert alert-warning" role="alert">--}}
                                              {{--Er is momenteel geen data beschikbaar!--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              @endif
                          @endforeach
                      @endforeach
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-md-8">
                  <h3 class="text-primary mb-3">Stand competitie</h3>
                  <div class="table-responsive">
                      <table class="table table-striped">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Team</th>
                              <th>GW</th>
                              <th>W</th>
                              <th>G</th>
                              <th>V</th>
                              <th>P</th>
                          </tr>
                          </thead>
                          <tbody>
{{--                          {{ dd($ranking) }}--}}
                          @foreach($ranking as $rank)
                              <tr class="{{ ($rank['eigenteam'] == "true" ? 'bg-primary color-white' : '') }}">
                                  <td>{!! $rank['positie'] !!}</td>
                                  <td>{!! $rank['teamnaam'] !!}</td>
                                  <td>{!! $rank['gespeeldewedstrijden'] !!}</td>
                                  <td>{!! $rank['gewonnen'] !!}</td>
                                  <td>{!! $rank['gelijk'] !!}</td>
                                  <td>{!! $rank['verloren'] !!}</td>
                                  <td>{!! $rank['punten'] !!}</td>
                              </tr>
                          @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="col-12 col-md-4">
                  <h3 class="">Doelpuntenmakers</h3>
                  <div class="row">
                      <div class="col-12">

                      </div>
                  </div>
                  <h3 class="">Man of the match</h3>
                  <div class="row">
                      <div class="col-12">

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  @endwhile
@endsection
