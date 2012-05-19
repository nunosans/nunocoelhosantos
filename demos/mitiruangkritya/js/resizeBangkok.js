function resize() {
		
	var image = $('#photos');
    
    //Gather browser and current image size
    var browserwidth = $(window).width();
    var browserheight = $(window).height();
    
    image.height(browserheight - reduce);
    image.width((browserheight - reduce) / ratio);
    $('#descriptions').width(((browserheight - reduce) / ratio) + 10);
    $('#photoTitle').width(((browserheight - reduce) / ratio));
    $('#descriptionsBangkok').width(((browserheight - reduce) / ratio) + 10);
    $('#photoTitle1').width(((browserheight - reduce) / ratio));
    
    $('#photos img').css("left", "-50%");
    $('.imagePhoto').css("left", "-50%");
        
    image.css('left', left);
    image.css('top', 50);
    
    $('#photos img').css("width","100%");
    $('#photos img').css("height","100%");
    $('.imagePhoto').css("width","100%");
    $('.imagePhoto').css("height","100%");

};