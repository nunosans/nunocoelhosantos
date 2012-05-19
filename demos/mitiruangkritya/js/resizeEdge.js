function resize() {

    var image = $('#photos');
    
    //Gather browser and current image size
    var browserwidth = $(window).width();
    var browserheight = $(window).height();
    
    //Resize image to proper ratio
    if ((browserheight/browserwidth) > ratio){
    
        image.height(browserheight-ratio + 1);
        image.width(browserheight / ratio + 1);
        
    } else {
    
        image.width(browserwidth-ratio + 1);
        image.height(browserwidth * ratio + 1);
        
    }
    
    image.css('left', (browserwidth - image.width())/2);
    image.css('top', (browserheight - image.height())/2);
    
    $('#photos img').css("width","100%");
    $('#photos img').css("height","100%");

};