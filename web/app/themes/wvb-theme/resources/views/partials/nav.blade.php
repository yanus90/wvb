<div class="nav-container">
    <nav class="navbar navbar-default navbar-static-top navbar-wvb">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <i class="fa fa-bars"></i> MENU
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
                @endif
            </div>
        </div>
    </nav>
</div>