// jquery-click-scroll
// by syamsul'isul' Arifin
(function ($) {
    "use strict";
  
    $(document).ready(function () {
      // 1) Define your sections
      var sectionArray = [1, 2, 3, 4, 5];
  
      // 2) Assign "inactive"/"active" classes based on scroll position
      $.each(sectionArray, function (index, value) {
        // On scroll, highlight nav item for the current section
        $(document).scroll(function () {
          var offsetSection = $('#section_' + value).offset().top - 75;
          var docScroll = $(document).scrollTop();
          var docScroll1 = docScroll + 1;
  
          if (docScroll1 >= offsetSection) {
            // Remove active from all nav items, add inactive
            $('.navbar-nav .nav-item .nav-link').removeClass('active')
              .addClass('inactive');
  
            // Activate the correct nav item
            $('.navbar-nav .nav-item .nav-link')
              .eq(index)
              .addClass('active')
              .removeClass('inactive');
          }
        });
  
        // 3) Smooth click scroll
        $('.click-scroll').eq(index).click(function (e) {
          e.preventDefault();
          var offsetClick = $('#section_' + value).offset().top - 75;
  
          $('html, body').animate({
            scrollTop: offsetClick
          }, 300);
        });
      });
  
      // 4) Initial nav state: first item active, rest inactive
      $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');
      $('.navbar-nav .nav-item .nav-link').eq(0).addClass('active');
      $('.navbar-nav .nav-item .nav-link:link').eq(0).removeClass('inactive');
    });
  
  })(jQuery);  