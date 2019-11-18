import CookieNotice from '../util/CookieNotice';

export default {
  init() {
    // JavaScript to be fired on all pages
    $(window).on('scroll', function() {
      let scrollPosition = $(this).scrollTop();
      if (scrollPosition >= 35) {
        $('body').addClass('fixed-navbar');
      } else {
        $('body').removeClass('fixed-navbar');
      }
    });

    window.toggleMenu = function () {
      $('#navbar-right-container').toggleClass('open');
      $('body').toggleClass('navbar-is-open');
    };

    $(document).ready(function () {
      $('.navbar-right-list > li.menu-item-has-children > a').click(function(){
        if ($(this).attr('class') != 'active'){
          $('.navbar-right-list li ul').slideUp();
          $(this).next().slideToggle();
          $('.navbar-right-list li a').removeClass('active');
          $(this).addClass('active');
        } else {
          $('.navbar-right-list li ul').slideUp();
          $('.navbar-right-list li.menu-item-has-children a').removeClass('active');
        }
      });
    });

    $('.close-btn').click(() => {
      $('.overlay-search').fadeOut();
    });

    $('.navbar-search').click(() => {
      $('.overlay-search').fadeIn();
      $('.search-text').focus();
    });

    CookieNotice.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
