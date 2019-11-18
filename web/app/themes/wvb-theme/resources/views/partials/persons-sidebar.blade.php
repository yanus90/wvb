<h3 class="h4">Contactpersonen</h3>
<hr class="mb-4">
<div class="row">
    @foreach($persons as $person)
        <div class="col-12 col-md-6 col-lg-12">
            @php
                $image = get_field('profielfoto', $person);
                $functions = wp_get_post_terms($person->ID, 'functie');
            @endphp
            <div class="media mb-4">
                <img src="{!! ($image ? wp_get_attachment_image_url($image['id'], 'thumbnail') : '//placehold.it/100x100?text='.$person->post_title) !!}" class="mr-3 rounded-circle" width="100" alt="{!! $person->post_title !!}">
                <div class="media-body">
                    <h5 class="mt-0 mb-0 text-primary">{!! $person->post_title !!}</h5>
                    @if($functions)
                        <ul class="list-inline font-size-p14 mb-2">
                            @foreach($functions as $function)
                                <li class="list-inline-item">{!! $function->name !!}@if(! $loop->last), @endif</li>
                            @endforeach
                        </ul>
                    @endif
                    @if($person->telefoonnummer || $person->e_mailadres)
                        <ul class="fa-ul ml-4 font-size-p16">
                            @if($person->telefoonnummer)
                                <li><span class="fa-li"><i class="fal fa-phone text-primary"></i></span>{!! $person->telefoonnummer !!}</li>
                            @endif
                            @if($person->e_mailadres)
                                <li><a href="mailto:{!! $person->e_mailadres !!}" class="text-decoration-none text-dark"><span class="fa-li"><i class="fal fa-at text-primary"></i></span>{!! $person->e_mailadres !!}</a></li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>