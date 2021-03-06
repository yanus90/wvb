<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('style-default style-rounded') @endphp>
    @include('partials.search-overlay')
    @php do_action('get_header') @endphp
    @include('partials.header')

    <main class="main oh" id="main">

        @yield('content')

        @if (App\display_sidebar())
          <aside class="sidebar">
            {{--@include('partials.sidebar')--}}
          </aside>
        @endif

        @php do_action('get_footer') @endphp
        @include('partials.footer')
    </main>

    @include('partials.cookie')
    @php wp_footer() @endphp
    <div class="navbar-overlay" onclick="toggleMenu()"></div>
  </body>
</html>
