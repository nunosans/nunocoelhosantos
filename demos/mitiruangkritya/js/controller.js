$(document).ready(function() {

	$('#count').html(imageNumber);
	   
	$('#next').click(function(){
	   	
	   	if(imageNumber != totalImages) {
	   
	   		imageNumber++;
	   	
	   	} else {
	   	
	   		imageNumber = 1;
	   	
	   	}
	   	
	   	resize();
	   	
	   	$('#count').html(imageNumber);
	   	
	});
	   
	$('#previous').click(function(){
	   	
	   	if(imageNumber != 1) {
	   
	   		imageNumber--;
	   	
	   	} else {
	   	
	   		imageNumber = totalImages;
	   	
	   	}
	   	
	   	resize();
	   	
	   	$('#count').html(imageNumber);
	   	
	});

});