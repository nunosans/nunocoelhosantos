$(document).ready(function() {
	
	$('#photos img').click(function(e) {
		
		image = $('#photos');
		
		if(big == 0) {
			
			big = 1;
			
			$('#photos').width(imageWidth);
			$('#photos').height(imageHeight);
			
			var divWidth = $(window).width();
			var divHeight = $(window).height() - 30;
			
			var leftPan = ((e.pageX - 0) * (divWidth - imageWidth) / (divWidth)) + (imageWidth/2);
			var topPan = ((e.pageY - cut) * (divHeight - imageHeight) / (divHeight));
			
			image.css('left', leftPan);
    		image.css('top', topPan);	
			
			$('#photos img').bind( 'mousemove', function(e){
			
				var divWidth = $(window).width();
			    var divHeight = $(window).height() - 30;
			    
			    var leftPan = ((e.pageX - 0) * (divWidth - imageWidth) / (divWidth)) + (imageWidth/2);
			    var topPan = ((e.pageY - cut) * (divHeight - imageHeight) / (divHeight));
			    
			    image.css('left', leftPan);
    		    image.css('top', topPan);	
				
			});
		
		} else if (big == 1) {
		
			big = 0;
			
			$('#photos img').unbind('mousemove');
			
			resize();
		
		}
			
	});
	
	$('#next').click(function(){
	   	
	   	big = 0;
			
		$('#photos img').unbind('mousemove');
	   	
	});
	
	$('#previous').click(function(){
	   	
	   	big = 0;
			
		$('#photos img').unbind('mousemove');
	   	
	});
	
	

});