<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('style-default style-rounded') @endphp>
    @php do_action('get_header') @endphp

    <main class="main oh" id="main">

        @yield('content')

        @php do_action('get_footer') @endphp
    </main>

    @php wp_footer() @endphp
  </body>
</html>
