<header class="header">
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="d-none d-sm-block col">
                    @if (has_nav_menu('top_navigation'))
                        {!!
                            wp_nav_menu([
                                'theme_location' => 'top_navigation',
                                'menu_class' => 'list-inline mb-0'
                            ])
                        !!}
                    @endif
                </div>

                <div class="col d-flex justify-content-end">
                    <ul class="list-inline mb-0 font-size-p16 font-size-xl-p18">
                        @if(! empty(get_field('facebook_pagina', 'option')))
                            <li class="list-inline-item">
                                <a href="{{ get_field('facebook_pagina', 'option') }}" title="Facebook" class="text-black" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        @endif
                        @if(! empty(get_field('twitter_pagina', 'option')))
                            <li class="list-inline-item">
                                <a href="{{ get_field('twitter_pagina', 'option') }}" title="X" class="text-black" target="_blank"><i class="fab fa-x-twitter"></i></a>
                            </li>
                        @endif
                        @if(! empty(get_field('youtube_pagina', 'option')))
                            <li class="list-inline-item">
                                <a href="{{ get_field('youtube_pagina', 'option') }}" title="YouTube" class="text-black" target="_blank"><i class="fab fa-youtube"></i></a>
                            </li>
                        @endif
                        @if(! empty(get_field('instagram_pagina', 'option')))
                            <li class="list-inline-item">
                                <a href="{{ get_field('instagram_pagina', 'option') }}" title="Instagram" class="text-black" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-wrapper">
        <div class="nav-container">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
                    <div class="navbar-brand-bg"></div>
                    <a class="navbar-brand" href="{{ home_url() }}" title="{!! get_bloginfo('name', 'display') !!}">
                        <img src="@asset('images/logo/logo.svg')" class="logo" alt="{!! get_bloginfo('name', 'display') !!}">
                    </a>
                    <div class="cart-search-btns d-xl-none ml-auto">
                        <a href="{{ esc_url(wc_get_cart_url()) }}" title="Bekijk je bestelling" class="cart-totals-item mr-3">
                            <span class="badge badge-pill badge-danger badge-cart-counter"></span>
                            <i class="fal fa-shopping-cart"></i>
                        </a>
                        <button class="navbar-search mr-3"><i class="fal fa-search"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" onclick="toggleMenu()">
                        <span class="text-uppercase">Menu<i class="fal fa-align-right ml-2"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @if (has_nav_menu('primary_navigation'))
                            {!!
                                wp_nav_menu([
                                    'theme_location' => 'primary_navigation',
                                    'menu_class' => 'navbar-nav mr-auto',
                                    'container_class' => 'mr-auto',
                                    'fallback_cb' => 'bs4navwalker::fallback',
                                    'walker' => new bs4Navwalker()
                                ])
                            !!}
                        @endif
                        <span class="d-none d-lg-inline-block">
                            <a href="{{ esc_url(wc_get_cart_url()) }}" title="Bekijk je bestelling" class="cart-totals-item mr-3">
                                <span class="badge badge-pill badge-danger badge-cart-counter"></span>
                                <i class="fal fa-shopping-cart"></i>
                            </a>
                            <button class="navbar-search mr-3"><i class="fal fa-search"></i></button>
{{--                            <button class="btn navbar-more" onclick="toggleMenu()">Meer <i class="fal fa-align-right ml-2"></i></button>--}}
                        </span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
{{--@include('partials.navbar-right')--}}
