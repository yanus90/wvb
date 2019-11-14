<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4">
                <div class="footer-first">
                    <div class="footer-logo">
                        <img src="{{ get_template_directory_uri() }}/assets/images/logo/logo.svg" class="logo" alt="{!! get_bloginfo('name', 'display') !!}" width="200">
                    </div>
                    <ul class="list-inline social-media-list">
                        @if (get_field('facebook_pagina', 'option'))
                            <li class="list-inline-item">
                                <a href="{{ get_field('facebook_pagina', 'option') }}" class="social-icon fb" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        @endif
                        @if (get_field('twitter_pagina', 'option'))
                            <li class="list-inline-item">
                                <a href="{{ get_field('twitter_pagina', 'option') }}" class="social-icon tw" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                        @endif
                        @if (get_field('youtube_pagina', 'option'))
                            <li class="list-inline-item">
                                <a href="{{ get_field('youtube_pagina', 'option') }}" class="social-icon yt" target="_blank"><i class="fab fa-youtube"></i></a>
                            </li>
                        @endif
                        @if (get_field('instagram_pagina', 'option'))
                            <li class="list-inline-item">
                                <a href="{{ get_field('instagram_pagina', 'option') }}" class="social-icon insta" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        @endif
                    </ul>
                    <ul class="list-unstyled small color-white mb-0">
                        <li>Copyright 2019</li>
                        <li>Privacyverklaring</li>
                        <li>Ontwikkeling: <a href="https://avnc.nl/" target="_blank" title="Avancé Communicatie" class="color-white">Avancé Communicatie</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-second">
                    <ul class="list-unstyled">
                        <li class="name">{!! get_field('naam', 'option') !!}</li>
                        <li>{!! get_field('sportpark', 'option') !!}</li>
                        <li>{!! get_field('adres', 'option') !!}</li>
                        <li>{!! get_field('postcode', 'option') !!} {!! get_field('woonplaats', 'option') !!}</li>
                    </ul>
                    <ul class="list-unstyled fa-ul">
                        <li><a href="tel:{!! get_field('telefoonnummer_link', 'option') !!}" title="Neem contact met ons op"><span class="fa-li"><i class="fal fa-phone"></i></span>{!! get_field('telefoonnummer', 'option') !!}</a></li>
                        <li><a href="mailto:{!! get_field('emailadres', 'option') !!}" title="Neem contact met ons op"><span class="fa-li"><i class="fal fa-envelope"></i></span>{!! get_field('emailadres', 'option') !!}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-third">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-0">Aanmelden</p>
                            @if (has_nav_menu('Footer_1'))
                                {!!
                                    wp_nav_menu([
                                        'theme_location' => 'Footer_1',
                                        'menu_class' => 'list-unstyled mb-0'
                                    ])
                                !!}
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-0">Handige links</p>
                            @if (has_nav_menu('Footer_2'))
                                {!!
                                    wp_nav_menu([
                                        'theme_location' => 'Footer_2',
                                        'menu_class' => 'list-unstyled mb-0'
                                    ])
                                !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>