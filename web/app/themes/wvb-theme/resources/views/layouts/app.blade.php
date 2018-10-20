<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('bg-light style-default style-rounded') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.sidenav')

    <main class="main oh" id="main">
        @include('partials.topheader')
        @include('partials.header')

        @yield('content')

        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif

        @php do_action('get_footer') @endphp
        @include('partials.footer')
    </main>

    @php wp_footer() @endphp
  </body>
</html>
