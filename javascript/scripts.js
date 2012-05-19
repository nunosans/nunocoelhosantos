var replay;

try{Typekit.load();}catch(e){};

$(function() {
    $(".dev").remove();
});

function nextSlide() {
    replay.flexAnimate(0); replay.resume();
};

$(document).ready(function() {
	
	// Slider
	$(window).load(function() {
		$('.slider').flexslider({
			animation: "slide",
			slideshowSpeed: 8000,
			animationDuration: 500,
			directionNav: false,
			keyboardNav: false,
			pauseOnAction: false,
			pauseOnHover: true,
			animationLoop: false,
			slideToStart: 0,
			// Return to the first slide on the end of the animation
			end: function(slider){
				replay = slider;
				var timer=setTimeout("nextSlide()",8000);
			}
		});
	});
	
    // Grid Toggles
    $("#columns").css('display', 'none');
    $("#columns-on").css('display', 'inline');
    $("#columns-off").css('display', 'none');
    
    $("#columns-on").click(function() {
    	$("#columns").css('display', 'block');
    	$("#columns-on").css('display', 'none');
    	$("#columns-off").css('display', 'inline');
    });
    
    $("#columns-off").click(function() {
    	$("#columns").css('display', 'none');
    	$("#columns-on").css('display', 'inline');
    	$("#columns-off").css('display', 'none');
    });

    
    // Hover effects
    $('.work div a img').after('<span class="cover"></span>');
    $('.cover').fadeTo(0, 0.0);
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

    $("img, .slider").fadeTo(0, 0);
});

$(window).load(function() {

    $("img, .slider").fadeTo(500, 1);

});

