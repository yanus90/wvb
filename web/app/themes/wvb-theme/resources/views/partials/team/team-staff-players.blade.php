@php
    $staff = get_field('staf', $post);
    $keepers = get_field('keepers', $post);
    $defenders = get_field('verdedigers', $post);
    $midfielders = get_field('middenvelders', $post);
    $forward_players = get_field('aanvallers', $post)
@endphp

@if($staff)
    <h2 class="h4 text-primary text-uppercase mt-5 mb-4">Staf</h2>
    <div class="team-players">
        <div class="row">
            @foreach($staff as $name)
                @php
                    $item = $name['staf_naam'];
                    $positions = wp_get_post_terms($item->ID, 'positie');
                    $image = get_field('profielfoto', $item);
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" title="{!! $item->post_title !!}">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" class="card-img" alt="{!! $item->post_title !!}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h3 class="h5 color-white font-weight-semi-bold">{!! $item->post_title !!}</h3>
                                @if($positions)
                                    <ul class="list-inline mb-0 color-white">
                                        @foreach($positions as $position)
                                            <li class="list-inline-item font-size-p14">{!! $position->name !!}@if(! $loop->last), @endif</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if($keepers)
    <h2 class="h4 text-primary text-uppercase mt-5 mb-4">Keepers</h2>
    <div class="team-players">
        <div class="row">
            @foreach($keepers as $keeper)
                @php
                    $item = $keeper['keeper'];
                    $positions = wp_get_post_terms($item->ID, 'positie');
                    $image = get_field('profielfoto', $item);
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" title="{!! $item->post_title !!}">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" class="card-img" alt="{!! $item->post_title !!}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h3 class="h5 color-white font-weight-semi-bold">{!! $item->post_title !!}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if($defenders)
    <h2 class="h4 text-primary text-uppercase mt-5 mb-4">Verdedigers</h2>
    <div class="team-players">
        <div class="row">
            @foreach($defenders as $defender)
                @php
                    $item = $defender['verdediger'];
                    $image = get_field('profielfoto', $item);
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" title="{!! $item->post_title !!}">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" class="card-img" alt="{!! $item->post_title !!}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h3 class="h5 color-white font-weight-semi-bold">{!! $item->post_title !!}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if($midfielders)
    <h2 class="h4 text-primary text-uppercase mt-5 mb-4">Middenvelders</h2>
    <div class="team-players">
        <div class="row">
            @foreach($midfielders as $midfielder)
                @php
                    $item = $midfielder['middenvelder'];
                    $image = get_field('profielfoto', $item);
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" title="{!! $item->post_title !!}">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" class="card-img" alt="{!! $item->post_title !!}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h3 class="h5 color-white font-weight-semi-bold">{!! $item->post_title !!}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

@if($forward_players)
    <h2 class="h4 text-primary text-uppercase mt-5 mb-4">Aanvallers</h2>
    <div class="team-players">
        <div class="row">
            @foreach($forward_players as $forward_player)
                @php
                    $item = $forward_player['aanvaller'];
                    $image = get_field('profielfoto', $item);
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" title="{!! $item->post_title !!}">
                        <img src="{!! wp_get_attachment_image_url($image['id'], 'person_image') !!}" class="card-img" alt="{!! $item->post_title !!}">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h3 class="h5 color-white font-weight-semi-bold">{!! $item->post_title !!}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif