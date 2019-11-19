<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5 col-xl-4">
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
                        <li><a href="/app/uploads/2019/10/privacyverklaring-warnsveldse-boys-2019.pdf" target="_blank" class="color-white text-decoration-none" title="Privacyverklaring">Privacyverklaring</a></li>
                        <li>Ontwikkeling: <a href="https://avnc.nl/" target="_blank" title="Avancé Communicatie" class="color-white text-decoration-none">Avancé Communicatie</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-second">
                    @include('partials.contact-details')
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-4">
                <div class="footer-third">
                    <div class="row">
                        <div class="col-lg-4 col-xl-6">
                            <p class="mb-0">Aanmelden</p>
                            @if (has_nav_menu('Footer_1'))
                                {!!
                                    wp_nav_menu([
                                        'theme_location' => 'Footer_1',
                                        'menu_class' => 'list-unstyled mb-4'
                                    ])
                                !!}
                            @endif
                        </div>
                        <div class="col-lg-4 col-xl-6">
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