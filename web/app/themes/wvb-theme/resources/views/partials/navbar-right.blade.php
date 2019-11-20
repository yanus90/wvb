<nav class="navbar-right" id="navbar-right-container">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <button class="btn btn-md btn-outline-primary" onclick="toggleMenu()">Sluiten<i class="fal fa-times ml-2"></i></button>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <a href="{{ home_url('/') }}" title="{!! get_bloginfo('name', 'display') !!}" class="text-center d-block">
                    <img src="{{ get_template_directory_uri() }}/assets/images/logo/logo.svg" class="logo">
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                @if (has_nav_menu('primary_navigation'))
                    {!!
                        wp_nav_menu([
                            'theme_location' => 'primary_navigation',
                            'menu_class' => 'list-unstyled navbar-right-list extra-mobile mb-0',
                            'container_class' => 'mr-auto'
                        ])
                    !!}
                @endif
                @if (has_nav_menu('right_navigation'))
                    {!!
                        wp_nav_menu([
                            'theme_location' => 'right_navigation',
                            'menu_class' => 'list-unstyled navbar-right-list',
                            'container_class' => 'mr-auto'
                        ])
                    !!}
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <ul class="list-inline contact-details">
                    <li class="font-weight-medium color-black">{{ get_field('naam', 'option') }}</li>
                    <li>{{ get_field('sportpark', 'option') }}</li>
                    <li>{{ get_field('adres', 'option') }}</li>
                    <li>{{ get_field('postcode', 'option') }} {{ get_field('woonplaats', 'option') }}</li>
                    <li>&nbsp;</li>
                    @if (get_field('telefoonnummer', 'option'))
                        <li><i class="fal fa-phone mr-2 fa-flip-horizontal"></i><a href="tel:{{ get_field('telefoonnummer_link', 'option') }}" class="text-decoration-none" title="Neem contact met ons op">{{ get_field('telefoonnummer', 'option') }}</a></li>
                    @endif
                    @if (get_field('emailadres', 'option'))
                        <li><i class="fal fa-envelope mr-2"></i><a href="mailto:{{ get_field('emailadres', 'option') }}" class="text-decoration-none" title="Neem contact met ons op">{{ get_field('emailadres', 'option') }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="list-inline social-links">
                    @if (get_field('facebook_pagina', 'option'))
                        <li class="list-inline-item icon"><a href="{{ get_field('facebook_pagina', 'option') }}"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if (get_field('twitter_pagina', 'option'))
                        <li class="list-inline-item icon"><a href="{{ get_field('twitter_pagina', 'option') }}"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if (get_field('instagram_pagina', 'option'))
                        <li class="list-inline-item icon"><a href="{{ get_field('instagram_pagina', 'option') }}"><i class="fab fa-instagram"></i></a></li>
                    @endif
                    @if (get_field('linkedin_pagina', 'option'))
                        <li class="list-inline-item icon"><a href="{{ get_field('linkedin_pagina', 'option') }}"><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
