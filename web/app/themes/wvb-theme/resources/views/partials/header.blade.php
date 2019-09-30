<header class="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                @if (get_field('slogan', 'option'))
                    <div class="col-12 col-sm-7 col-md-6 col-lg-8 col-xl-9 col-xxl-10 text-center">
                        <p class="mb-0">{!! get_field('slogan', 'option') !!}</p>
                    </div>
                @endif
                <div class="d-none d-sm-block col-sm-5 col-md-6 col-lg-4 col-xl-3 col-xxl-2">
                    @if (has_nav_menu('top_navigation'))
                        {!!
                            wp_nav_menu([
                                'theme_location' => 'top_navigation',
                                'menu_class' => 'list-inline mb-0 text-right'
                            ])
                        !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="nav-wrapper">
        <div class="nav-container">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
                    <div class="navbar-brand-bg"></div>
                    <a class="navbar-brand" href="{{ home_url('/') }}" title="{!! get_bloginfo('name', 'display') !!}">
                        <img src="{{ get_template_directory_uri() }}/assets/images/logo/logo.svg" class="logo" alt="{!! get_bloginfo('name', 'display') !!}">
                    </a>
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
                            <button class="btn navbar-more" onclick="toggleMenu()">Meer <i class="fal fa-align-right ml-2"></i></button>
                        </span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
@include('partials.navbar-right')