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
    <div class="row mt-5">
    @foreach($persons as $person)
        @php
            $persoon = $person['persoon'];
            $image = get_field('profielfoto', $persoon);
            $functions = wp_get_post_terms($persoon->ID, 'functie');
        @endphp
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card" title="{!! $persoon->post_title !!}">
                <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'person_image') : '//placehold.it/600x800?text='.$persoon->post_title) !!}" class="card-img" alt="{!! $persoon->post_title !!}">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="mt-auto">
                        <h3 class="h5 color-white font-weight-semi-bold">{!! $persoon->post_title !!}</h3>
                        <p class="mb-0"><a href="{!! get_permalink($persoon) !!}" class="btn btn-sm btn-primary">Informatie</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endif