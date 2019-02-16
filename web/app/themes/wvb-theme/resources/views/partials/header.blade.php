<header class="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="mb-0">Voetballen doe je bij Warnsveldse Boys</p>
                </div>
                <div class="col">
                    <ul class="list-inline mb-0 text-right">
                        <li class="list-inline-item"><a href="#" title="Home">Home</a></li>
                        <li class="list-inline-item"><a href="#" title="Lid worden">Lid worden</a></li>
                        <li class="list-inline-item"><a href="#" title="Route">Route</a></li>
                        <li class="list-inline-item"><a href="#" title="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-wrapper">
        <div class="nav-container">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
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
                        <span class="d-none d-lg-inline-block mr-3">
                            <button class="btn navbar-more" onclick="toggleMenu()">Meer <i class="fal fa-align-right ml-2"></i></button>
                        </span>
                        <form class="form-inline my-2 my-lg-0 mr-lg-3 d-none d-lg-block" action="/" method="GET">
                            <input name="s" class="form-control input-search" type="search" placeholder="Waar ben je naar op zoek?" aria-label="Zoeken">
                        </form>
                        <ul class="list-inline mb-0 social-links-header">
                            <li class="list-inline-item">
                                <a href="#" class="social-header-icon"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a href="#" class="social-header-icon"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
@include('partials.navbar-right')