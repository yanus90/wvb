@if($notifications)
    <div class="section section-notifications pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @foreach($notifications as $note)
                        <div class="alert alert-{{ $note->soort_melding }}" role="alert">
                            <div class="row">
                                <div class="col-12 {{ ($note->link ? 'col-md-7 col-lg-8' : '') }}">
                                    <h4 class="h5 alert-heading">{!! $note->post_title !!}</h4>
                                    @if($note->subtekst)
                                        <p class="mb-0">{!! $note->subtekst !!}</p>
                                    @endif
                                </div>
                                @if($note->link)
                                    <div class="col-12 col-md-5 col-lg-4">
                                        <p class="mb-0 text-md-right mt-3 mt-md-0"><a href="{!! $note->link !!}" title="{!! $note->post_title !!}" class="btn btn-md font-size-p14 btn-{{ $note->soort_melding }}">Lees verder</a></p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif