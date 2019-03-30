// Copyright 2014 Nuno Coelho Santos (nuno@nunocoelhosantos.com).
// All Rights Reserved.

/**
 * @fileoverview Scripts for the Nuno Coelho Santos personal website.
 * @author nuno@nunocoelhosantos.com (Nuno Coelho Santos).
 */

// Global Variables.
var mobileDevice = false;

// Function to resize the Featured Project image and video.
function resizeFeaturedProject() {

  // Constant variables.
  var margin = $('#header').outerHeight(true);
  var container = $('.featured');
  var elementRatio = 0.5;

  if (mobileDevice) {
    var element = container.find('img');
    container.find('video').remove();
  } else {
    var element = container.find('video');
    container.find('img').remove();
  }

  // Apply required styles.
  element.css('position', 'relative').show();

  // Resize the right element.
  function resizeElement() {
    // Declare variables.
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();
    var containerHeight = windowHeight - margin;
    var containerWidth = container.width();

    if (windowHeight > windowWidth || windowHeight < 240) {
      var containerHeight = containerWidth * 0.9;
      container.height(containerHeight);
      element.height(containerHeight)
        .width(containerHeight / elementRatio)
        .css('left', (containerWidth - element.width()) / 2);
    } else {
      container.height(containerHeight);
      if ((containerHeight / containerWidth) > elementRatio){
        element.height(containerHeight - elementRatio + 1)
          .width(containerHeight / elementRatio + 1)
          .css('left', (containerWidth - element.width()) / 2)
          .css('top', (containerHeight - element.height()) / 2);
      } else {
        element.height(containerWidth * elementRatio + 1)
          .width(containerWidth - elementRatio + 1)
          .css('left', (containerWidth - element.width()) / 2)
          .css('top', (containerHeight - element.height()) / 2);
      };
    };
  };

  resizeElement();

  $(window).resize(function() {
    resizeElement();
  });

};

// Create Grid On/Off Toggle.
function gridToggles() {
  // Declare variables.
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

// Hover effects.
function hoverEffects() {
  // Declare variables.
  var projects = $('.work div a');
  var images = projects.find('img');

  images.after('<span class="cover"></span>');
  projects.find('.cover').fadeTo(0, 0);

  projects.hover(
    function(){
      $(this).children('.cover').stop(true, false).fadeTo(0, 0.7);
      $(this).siblings('h4').children('a').addClass('active');
    },
    function(){
      $(this).children('.cover').stop(true, false).fadeTo(500, 0.0);
      $(this).siblings('h4').children('a').removeClass('active');
    }
  );
};

$(document).ready(function() {

  // Add mobile or desktop class.
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    mobileDevice = true;
  } else {
    mobileDevice = false;
  }

  // Apply localScroll to the nav.
  $('#nav').localScroll({
    target:  'body',
    duration: 350
  });

  gridToggles();
  hoverEffects();
  resizeFeaturedProject();

  // Add classes once the body is ready.
  $(window).load(function() {

    // Make the bar of the featured project clickable
    $('.featured > div > *').click(function() {
      var featuredProjectUrl = $('.featured > div > h2 > a').attr('href');
      window.location.href = featuredProjectUrl;
    });
  });


});
