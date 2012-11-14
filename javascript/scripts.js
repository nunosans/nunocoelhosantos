// Copyright 2012 Nuno Coelho Santos™. All Rights Reserved.

/**
 * @fileoverview Scripts for the Nuno Coelho Santos personal website.
 * @author nuno@nunocoelhosantos.com (Nuno Coelho Santos).
 */

// Resize the Featured Project.
function resizeFeaturedProject() {
  // Declare variables.
  var windowHeight = $(window).height();
  var windowWidth = $(window).width();
  var margin = $('#header').outerHeight(true);
  var container = $('.featured');
  var containerHeight = windowHeight - margin;
  var containerWidth = $('.featured').width();
  var image = container.find('img, video');
  var imageRatio = 0.5;

  image.css('position', 'relative');

  if (windowHeight > windowWidth || windowHeight < 240) {
    var containerHeight = containerWidth * 0.9;
    container.height(containerHeight);
    image.height(containerHeight);
    image.width(containerHeight / imageRatio);
    image.css('left', (containerWidth - image.width()) / 2);
  } else {
    container.height(containerHeight);
    // Resize the image to fill the container.
    if ((containerHeight / containerWidth) > imageRatio){
      image.height(containerHeight - imageRatio + 1);
      image.width(containerHeight / imageRatio + 1);
    } else {
      image.width(containerWidth - imageRatio + 1);
      image.height(containerWidth * imageRatio + 1);
    };
    image.css('left', (containerWidth - image.width()) / 2);
    image.css('top', (containerHeight - image.height()) / 2);
  };
};

// Create Grid On/Off Toggle.
function gridToggles() {
  var columns = $('#columns');
  var columnButtonOn = $('#columns-on');
  var columnButtonOff = $('#columns-off');
  columns.hide();
  columnButtonOn.show();
  columnButtonOff.hide();

  columnButtonOn.click(function() {
    columns.show();
    columnButtonOn.hide();
    columnButtonOff.show();
  });

  columnButtonOff.click(function() {
    columns.hide();
    columnButtonOn.show();
    columnButtonOff.hide();
  });
};

// Get Typekit Fonts.
try{Typekit.load();}catch(e){};

$(document).ready(function() {

  resizeFeaturedProject();
  gridToggles();

  // Apply localScroll to the nav.
  $('#nav').localScroll({
      lock: stop,
      target:'body',
      duration: 350
  });

  // Hover effects.
  $('.work div a img').after('<span class="cover"></span>');
  $('.cover').fadeTo(0, 0);
  $('.work div a').hover(
    function(){
      $(this).children('.cover').stop(true, false).fadeTo(0, 0.7);
      $(this).siblings('h4').children('a').addClass('active');
    },
    function(){
      $(this).children('.cover').stop(true, false).fadeTo(500, 0.0);
      $(this).siblings('h4').children('a').removeClass('active');
    }
  );

  // Add mobile or desktop class.
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    $('body').addClass('mobile-os');
  } else {
    $('body').addClass('desktop-os');
  };


  // Resize elements with window
  $(window).resize(function() {
    resizeFeaturedProject();
  });

});


$(window).load(function() {
  $('body').addClass('ready');
  $('.project').fadeIn('slow');

  // Make the bar of the featured project clickable
  $('.featured > div > *').click(function() {
    var featuredProjectUrl = $('.featured > div > h2 > a').attr('href');
    window.location.href = featuredProjectUrl;
  });
});
