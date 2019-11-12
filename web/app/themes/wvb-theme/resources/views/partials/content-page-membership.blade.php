<div class="section section-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-7 col-xl-8 font-weight-medium line-height-md-big">
                @php the_content() @endphp
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
            </div>
            <div class="col-12 col-lg-5 col-xl-4 font-weight-medium line-height-md-big">
                <h4 class="mb-3 text-primary">Afmelden als lid</h4>
                <p>Het lidmaatschap van Warnsveldse Boys moet vóór 1 juli worden opgezegd. Indien het lidmaatschap na 1 juli wordt opgezegd, is contributie van 6 maanden verschuldigd (dus juli tot en met december). Afmeldingen bij leider of trainer worden niet geaccepteerd. Dit om elk misverstand over opzegging en doorlopende contributieverplichtingen te voorkomen.</p>
                <p>Afmelden moet via <a href="mailto:ledenadministratie@warnsveldseboys.nl">ledenadministratie@warnsveldseboys.nl</a> gedaan worden.</p>
                <div class="list-group font-weight-medium line-height-md-big">
                    <a href="#" class="list-group-item list-group-item-action" title="Titel"><i class="fal fa-arrow-right mr-2 text-primary"></i>Titel</a>
                </div>
            </div>
        </div>
    </div>
</div>
