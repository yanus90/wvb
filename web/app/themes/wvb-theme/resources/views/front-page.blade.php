{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.notifications')
    @include('partials.grote-club-actie')
    @include('partials.slider')
    @include('partials.sponsoren')
    @include('partials.news-home')
    @include('partials.program-and-news')
    @include('partials.bc-cta')
    @include('partials.about-wvb-home')
    @include('partials.follow-on-twitter')
@endsection