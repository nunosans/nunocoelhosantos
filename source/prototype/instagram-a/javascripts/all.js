$(document).ready(function() {

  /**
   * Swipe Gestures on Instagrams.
   */

  var instagrams = $('.instagram img');

  instagrams.swipeleft(function() {
    var el = $(this);
    if( el.hasClass('right') ) {
      instagrams.removeClass('left right');
    } else {
      instagrams.removeClass('left right');
      el.addClass('left');
    };
  });

  instagrams.swiperight(function() {
    var el = $(this);
    if( el.hasClass('left') ) {
      instagrams.removeClass('left right');
    } else {
      instagrams.removeClass('left right');
      el.addClass('right');
    };
  });

  instagrams.click(function() {
    $(this).removeClass('left right');
  });

  /**
   * View flip.
   */

  var mapIcon = $('header .flip .front');
  var feedIcon = $('header .flip .back');
  var body = $('body');

  mapIcon.click(function() {
    body.addClass('flipped');
  });

  feedIcon.click(function() {
    body.removeClass('flipped');
  });

});
