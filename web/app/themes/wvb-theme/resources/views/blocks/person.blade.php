{{--
  Title: Persoon
  Description: Het tonen van 1 persoon
  Category: formatting
  Icon: editor-textcolor
  Keywords: titel
  Mode: edit
  Align: left
  ClassName: person
  SupportsAlign: left right center
  SupportsMode: true
  SupportsMultiple: true
--}}

@php

$persons = get_field('personen');

@endphp

@if($persons)
    <div class="row">
    @foreach($persons as $person)
        @php
            $persoon = $person['persoon'];
            $image = get_field('profielfoto', $persoon);
            $functions = wp_get_post_terms($persoon->ID, 'functie');
        @endphp
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 mb-4">
            <div class="card" title="{!! $persoon->post_title !!}">
                <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'person_image') : '//placehold.it/600x800?text='.$persoon->post_title) !!}" class="card-img" alt="{!! $persoon->post_title !!}">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="mt-auto">
                        <h3 class="h5 color-white mb-0 font-weight-semi-bold">{!! $persoon->post_title !!}</h3>
                        {{--<ul class="list-inline mb-0 color-white">--}}
                            {{--@foreach($functions as $function)--}}
                                {{--<li class="list-inline-item font-size-p14">{!! $function->name !!}@if(! $loop->last), @endif</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endif