<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-primary pb-5 footer-first">
                    <div class="footer-logo">
                        <img src="{{ get_template_directory_uri() }}/assets/images/logo/logo.svg" class="logo" alt="{!! get_bloginfo('name', 'display') !!}" width="200">
                    </div>
                    <ul class="list-inline">
                        @if (get_field('facebook_pagina', 'option'))
                            <li class="list-inline-item">
                                <a href="{{ get_field('facebook_pagina', 'option') }}" class="social-header-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        @endif
                        @if (get_field('twitter_pagina', 'option'))
                            <li class="list-inline-item mr-0">
                                <a href="{{ get_field('twitter_pagina', 'option') }}" class="social-header-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                        @endif
                    </ul>
                    <ul class="list-unstyled small color-white">
                        <li>Copyright 2019</li>
                        <li>Privacyverklaring</li>
                        <li>Ontwikkeling: <a href="https://avnc.nl/" target="_blank" title="Avancé Communicatie" class="color-white">Avancé Communicatie</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</footer>