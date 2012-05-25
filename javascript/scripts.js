var replay;

try{Typekit.load();}catch(e){};

$(function() {
    $(".dev").remove();
});

$(document).ready(function() {

	// Resize the Featured Project 
	function resizeFeaturedProject() {
        // Define variables
        var windowHeight = $(window).height();
        var margin = $("#header").outerHeight(true);
        var container = $('.featured');
        var containerHeight = windowHeight - margin;
        var containerWidth = $('.featured').width();
        var image = $('.featured img');
        var imageRatio = 0.55;
        
        container.height(containerHeight);
        
        // Resize the image to fill the container
        if ((containerHeight / containerWidth) > imageRatio){
            image.height(containerHeight - imageRatio + 1);
            image.width(containerHeight / imageRatio + 1);
        } else {
            image.width(containerWidth - imageRatio + 1);
            image.height(containerWidth * imageRatio + 1); 
        };
        
        image.css('position', 'relative');
        image.css('left', (containerWidth - image.width()) / 2);
        image.css('top', (containerHeight - image.height()) / 2);

    };
	resizeFeaturedProject();

    $('.featured').click(function() {

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

    // Resize elements with window
    $(window).resize(function() {
        resizeFeaturedProject();
    });

    // Get elements ready to fade-in
    $("img, .featured div").fadeTo(0, 0);
});


$(window).load(function() {
    // Fade elements in
    $("img, .featured div").fadeTo(500, 1);
});

