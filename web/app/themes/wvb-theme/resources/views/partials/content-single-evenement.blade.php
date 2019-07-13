<div class="section section-single-event">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-1"></div>
      <div class="col-12 col-lg-10">
        <div class="row">
          <div class="col-12 col-lg-6 font-weight-medium line-height-md-big">
            @if ($post->post_content)
              <div class="single-event-content mb-4">
                @php the_content() @endphp
              </div>
            @endif
            @php $dagen = get_field('programmaoverzicht') @endphp
            @if ($dagen)
              @foreach($dagen as $dag)
                <div class="single-event-table mb-5">
                  <div class="table-header">
                    <h4 class="mb-0">{!! $dag['programmaoverzicht_titel'] !!}</h4>
                  </div>
                  @foreach($dag['programmalijst'] as $item)
                    <div class="table-row">
                      <div class="row">
                        <div class="col-12 col-sm-5 col-md-4 col-lg-4">
                          <p class="time">{!! $item['tijd'] !!}</p>
                        </div>
                        <div class="col-12 col-sm-7 col-md-8 col-lg-8">
                          <p class="subject">{!! $item['onderwerp'] !!}</p>
                          @if($item['items_per_tijdstip'])
                            <hr class="mt-2 mb-2">
                            <ul class="list-unstyled mb-0 font-size-small line-height-big">
                              @foreach($item['items_per_tijdstip'] as $row)
                                <li>{!! $row['naam'] !!}@if($row['link_tekst'] && $row['link']) - <a href="{!! $row['link'] !!}" target="{{ $row['nieuw_tabblad'] }}" title="{!! $row['link_tekst'] !!}">{!! $row['link_tekst'] !!}</a> @endif</li>
                              @endforeach
                            </ul>
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              @endforeach
            @endif
            @if ($post->tekst_onder_programmaoverzicht)
              <div class="single-event-content mb-4">
                {!! wpautop($post->tekst_onder_programmaoverzicht) !!}
              </div>
            @endif
            @if ($post->extra_button_naam || $post->extra_button_link)
              <p><a href="{!! $post->extra_button_link !!}" title="{!! $post->extra_button_naam !!}" class="btn btn-sm btn-primary">{!! $post->extra_button_naam !!}<i class="fal fa-angle-right ml-2"></i></a></p>
            @endif
          </div>
          @include('partials.event-gallery')
        </div>
      </div>
    </div>
  </div>
</div>