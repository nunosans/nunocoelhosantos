function resizeFeaturedProject(){var h=$(window).height();var c=$(window).width();var f=$("#header").outerHeight(true);var a=$(".featured");var e=h-f;var d=$(".featured").width();var g=a.find("img, video");var b=0.5;g.css("position","relative");if(h>c||h<240){var e=d*0.9;a.height(e);g.height(e);g.width(e/b);g.css("left",(d-g.width())/2)}else{a.height(e);if((e/d)>b){g.height(e-b+1);g.width(e/b+1)}else{g.width(d-b+1);g.height(d*b+1)}g.css("left",(d-g.width())/2);g.css("top",(e-g.height())/2)}}function gridToggles(){var b=$("#columns");var c=$("#columns-on");var a=$("#columns-off");b.hide();c.show();a.hide();c.click(function(){b.show();c.hide();a.show()});a.click(function(){b.hide();c.show();a.hide()})}function hoverEffects(){var b=$(".work div a");var a=b.find("img");a.after('<span class="cover"></span>');b.find(".cover").fadeTo(0,0);b.hover(function(){$(this).children(".cover").stop(true,false).fadeTo(0,0.7);$(this).siblings("h4").children("a").addClass("active")},function(){$(this).children(".cover").stop(true,false).fadeTo(500,0);$(this).siblings("h4").children("a").removeClass("active")})}$(document).ready(function(){resizeFeaturedProject();gridToggles();hoverEffects();$("#nav").localScroll({lock:stop,target:"body",duration:350});if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){$("body").addClass("mobile-os")}else{$("body").addClass("desktop-os")}$(window).resize(function(){resizeFeaturedProject()})});$(window).load(function(){$("body").addClass("ready");$(".project").fadeIn("slow");$(".featured > div > *").click(function(){var a=$(".featured > div > h2 > a").attr("href");window.location.href=a})});