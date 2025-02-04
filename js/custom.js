(function ($) {
  "use strict";

  // 1) MENU COLLAPSE ON ITEM CLICK
  $('.navbar-collapse a').on('click', function () {
    $(".navbar-collapse").collapse('hide');
  });

  // 2) SMOOTH SCROLL LINK
  $('.smoothscroll').click(function () {
    var el = $(this).attr('href');
    var elWrapped = $(el);
    var header_height = $('.navbar').height();

    scrollToDiv(elWrapped, header_height);
    return false;

    function scrollToDiv(element, navheight) {
      var offset = element.offset();
      var offsetTop = offset.top;
      var totalScroll = offsetTop - navheight;

      $('body,html').animate({ scrollTop: totalScroll }, 300);
    }
  });

  // 3) TIMELINE SCROLL
  $(window).on('scroll', function () {
    function isScrollIntoView(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(window).height() * 0.5;

      // Toggle 'active' class if element is in view
      if (elemBottom <= docViewBottom && elemTop >= docViewTop) {
        $(elem).addClass('active');
      } else {
        $(elem).removeClass('active');
      }

      // Update timeline progress bar height
      var MainTimelineContainer = $('#vertical-scrollable-timeline')[0];
      var MainTimelineContainerBottom =
        MainTimelineContainer.getBoundingClientRect().bottom -
        $(window).height() * 0.5;

      $('.list-progress .inner').css('height', MainTimelineContainerBottom + 'px');
    }

    var timeline = $('#vertical-scrollable-timeline li');
    timeline.each(function (index, elem) {
      isScrollIntoView(elem);
    });
  });

  // 4) LANGUAGE DROPDOWN SELECTION
  $('.dropdown-item').on('click', function () {
    const selectedLang = $(this).text().toLowerCase();
    if (selectedLang.includes('العربية')) {
      switchLanguage('ar');
    } else if (selectedLang.includes('deutsch')) {
      switchLanguage('de');
    }
  });

})(jQuery);

// 5) ANIMATE COUNTERS ON DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  function animateCounter(id, end, duration) {
    const obj = document.getElementById(id);
    if (!obj) return;

    let start = 0;
    const range = end - start;
    const increment = (end > start) ? 1 : -1;
    const stepTime = Math.abs(Math.floor(duration / range));

    let current = start;
    const timer = setInterval(() => {
      current += increment;
      obj.textContent = current;
      if (current === end) {
        clearInterval(timer);
      }
    }, stepTime);
  }

  // Only run counter animations if the elements exist
  animateCounter('students-counter', 100, 2000);
  animateCounter('hafith-counter', 50, 2000);
  animateCounter('scheick-counter', 25, 2000);
});