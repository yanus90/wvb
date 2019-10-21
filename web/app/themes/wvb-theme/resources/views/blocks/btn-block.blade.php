{{--
  Title: Knop WvB
  Description: Button in stijl van Warnsveldse Boys
  Category: formatting
  Icon: admin-links
  Keywords: knop
  Mode: edit
  Align: left
  ClassName: btn-block
  SupportsAlign: left right center
  SupportsMode: true
  SupportsMultiple: true
--}}

@php
    $btnName = get_field('naam');
    $btnLink = get_field('link');
    $btnColor = get_field('kleur');
    $btnSize = get_field('grootte');
    $btnArrow = get_field('met_pijl');
    $btnTarget = get_field('target');
@endphp

@if($btnName)
    <p><a href="{!! $btnLink !!}" title="{!! $btnName !!}" target="{!! $btnTarget !!}" class="btn btn-rounded pl-4 pr-4 {{ $btnSize }} {{ $btnColor }}" id="{{ $block['id'] }}">{!! $btnName !!}@if($btnArrow)<i class="fal fa-angle-right ml-2"></i>@endif</a></p>
@endif