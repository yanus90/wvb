@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @php
        $commission = get_queried_object();
        $image = get_field('afbeelding', $commission->taxonomy . '_' . $commission->term_id);
        $extra_text = get_field('tekst_onder_afbeelding', $commission->taxonomy . '_' . $commission->term_id);
    @endphp
    <div class="section-single-post section {{ ($persons ? 'pb-4' : '') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 font-weight-medium line-height-md-big">
                    <div class="row">
                        <div class="col-lg-8">
                            {!! wpautop($commission->description) !!}
                        </div>
                        @if($image)
                            <div class="col-lg-4">
                                <a href="{!! wp_get_attachment_image_url($image['id'], 'commission_image') !!}" data-fancybox="big-commission-image" title="Vergroot {!! $commission->name !!}">
                                    <img src="{!! wp_get_attachment_image_url($image['id'], 'commission_image') !!}" class="card-img" alt="{!! $commission->name !!}">
                                </a>
                                @if($extra_text)
                                    <div class="mt-4 font-size-smaller">
                                        {!! $extra_text !!}
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($persons)
        <div class="section section-persons pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <hr class="pt-5 mb-0">
                        <h3 class="h4 text-primary mb-4">Leden {!! strtolower($commission->name) !!}</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach($persons as $person)
                        @php
                            $image = get_field('profielfoto', $person);
                            $functions = wp_get_post_terms($person->ID, 'commissie');
                        @endphp
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xxl-3 mb-4">
                            <div class="card" title="{!! $person->post_title !!}">
                                <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'person_image') : '//placehold.it/600x800?text='.$person->post_title) !!}" class="card-img" alt="{!! $person->post_title !!}">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="mt-auto">
                                        <h3 class="h5 color-white mb-0 font-weight-semi-bold">{!! $person->post_title !!}</h3>
                                        <ul class="list-inline mb-0 color-white">
                                            @foreach($functions as $function)
                                                <li class="list-inline-item font-size-p14">{!! $function->name !!}@if(! $loop->last), @endif</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
