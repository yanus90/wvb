<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.nav')



    @yield('content')

    @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
    @endif

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            slidesPerView: 6,
            spaceBetween: 20,
            autoplay: 3500,
            autoplayDisableOnInteraction: false,
            breakpoints: {
                1200: {
                    slidesPerView: 6,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery(".tweets-container").flexslider({
                animation: "fade",
                slideshow: true,
                slideshowSpeed: 9000,
                animationDuration: 600,
                smoothHeight : true,
                controlNav: false,
                directionNav: false,
                start: function(slider) {
                    jQuery(".tweets-container").fadeIn();
                }
            });
        });
    </script>
    @php wp_footer() @endphp
  </body>
</html>
