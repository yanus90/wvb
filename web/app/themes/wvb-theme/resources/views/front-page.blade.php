{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
    @include('partials.slider')
    @include('partials.sponsoren')
    @include('partials.featured-news')
    @include('partials.upcoming-events')
    @include('partials.bc-cta')
    @include('partials.about-wvb-home')
    @include('partials.follow-on-twitter')
@endsection