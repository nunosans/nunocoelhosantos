function switchDescription() {
			
	switch(imageNumber) {
    
    	case 1:
    		$('#photoTitle').html("&quot;I'm dead chuffed (with the picture) thanks&quot;");
    	break;
    	
    	case 2:
    		$('#photoTitle').html("&quot;I think my picture is just awful&quot;");
    	break;
    	
    	case 3:
    		$('#photoTitle').html("&quot;I'm a manager&quot;");
    	break;
    	
    	case 4:
    		$('#photoTitle').html("&quot;...&quot;");
    	break;
    	
    	case 5:
    		$('#photoTitle').html("&quot;It's my anniversary today&quot;");
    	break;
    	
    	case 6:
    		$('#photoTitle').html("&quot;You're welcome, anytime...&quot;");
    	break;
    	
    	case 7:
    		$('#photoTitle').html("&quot;...&quot;");
    	break;
    	
    	case 8:
    		$('#photoTitle').html("&quot;His name is Genghis&quot;");
    	break;
    	
    	case 9:
    		$('#photoTitle').html("&quot;I'm having an affair&quot;");
    	break;
    	
    	case 10:
    		$('#photoTitle').html("&quot;I'm on QVC in half an hour&quot;");
    	break;
    	
    	case 11:
    		$('#photoTitle').html("&quot;Can you photoshop my spots off&quot;");
    	break;
    	
    	case 12:
    		$('#photoTitle').html("&quot;I run a jewellery store, heres the web site&quot;");
    	break;
    	
    	case 13:
    		$('#photoTitle').html("&quot;You can't take a picture of us together, we're having an affair&quot;");
    	break;
    	
    	case 14:
    		$('#photoTitle').html("&quot;...&quot;");
    	break;
    
    }

};

$(document).ready(function() {

	switchDescription();
	
	$('#next').click(function() {
		$('#photoTitle').fadeOut(400, function() {
	    	
	    	switchDescription();
	    	$('#photoTitle').fadeIn(400);
	    
	    });
	});
	
	$('#previous').click(function() {
		$('#photoTitle').fadeOut(400, function() {
	    	
	    	switchDescription();
	    	$('#photoTitle').fadeIn(400);
	    
	    });
	});

});