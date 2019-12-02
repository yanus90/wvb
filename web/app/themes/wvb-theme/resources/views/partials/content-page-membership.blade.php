<div class="section section-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-7 col-xl-8 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
            </div>
            <div class="col-12 col-lg-5 col-xl-4 font-weight-medium line-height-md-big">
                <div class="list-group font-weight-medium line-height-md-big mb-4 mb-md-5">
                    <a href="/lidmaatschap/wijzigingen/" class="list-group-item list-group-item-action" title="Wijziging doorgeven"><i class="fal fa-arrow-right mr-2 text-primary"></i>Wijziging doorgeven</a>
                    <a href="/lidmaatschap/wijzigingen-bankrekeningnummer-incasso/" class="list-group-item list-group-item-action" title="Wijzigen bankrekeningnummer"><i class="fal fa-arrow-right mr-2 text-primary"></i>Wijzigen bankrekeningnummer</a>
                </div>
                <div class="card mb-3">
                    <div class="card-header">Afmelden als lid</div>
                    <div class="card-body">
                        <p>Het lidmaatschap van Warnsveldse Boys moet vóór 1 juli worden opgezegd. Indien het lidmaatschap na 1 juli wordt opgezegd, is contributie van 6 maanden verschuldigd (dus juli tot en met december). Afmeldingen bij leider of trainer worden niet geaccepteerd. Dit om elk misverstand over opzegging en doorlopende contributieverplichtingen te voorkomen.</p>
                        <p><a href="/lidmaatschap/afmelden/" title="Afmelden" class="btn btn-outline-dark">Klik hier om je af te melden<i class="fal fa-arrow-right ml-2 text-dark"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
