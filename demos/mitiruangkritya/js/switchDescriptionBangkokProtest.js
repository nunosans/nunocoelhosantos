function switchDescription() {
	
	switch(imageNumber){
    
    	case 1:
    		$('#photoTitle1').html("&quot;We love the king... / Liberate our nation&quot;");
    	break;
    	
    	case 2:
    		$('#photoTitle1').html("&quot;Hero / No Thaksin&quot;");
    	break;
    	
    	case 3:
    		$('#photoTitle1').html("&quot;Buddhist amulet printed T-shirt / Assortment of protective amulets and protective Yantra shirt&quot;");
    	break;
    	
    	case 4:
    		$('#photoTitle1').html("&quot;Intellectual Society, Thai Politics 2008 / Love you Thailand&quot;");
    	break;
    	
    	case 5:
    		$('#photoTitle1').html("&quot;Descendent of Taksin, the warrior king / We will fight for the king&quot;");
    	break;
    	
    	case 6:
    		$('#photoTitle1').html("&quot;Samak's big mouth / Khun Tong Daeng, the King's favourite pet&quot;");
    	break;
    	
    	case 7:
    		$('#photoTitle1').html("&quot;Born to repay the debt to our motherland / Burn the Thaksin's system, money and power&quot;");
    	break;
    	
    	case 8:
    		$('#photoTitle1').html("&quot;Patriotic Thai Muslim / Patriotic Thai Indian&quot;");
    	break;
    	
    	case 9:
    		$('#photoTitle1').html("&quot;We love the King & Queen / The Doors&quot;");
    	break;
    	
    	case 10:
    		$('#photoTitle1').html("&quot;Take back Preah Vihear Temple / Love the King, lead a sustainable life&quot;");
    	break;
    	
    	case 11:
    		$('#photoTitle1').html("&quot;We love the King / Siam&quot;");
    	break;
    	
    	case 12:
    		$('#photoTitle1').html("&quot;Thai / Patriotic Thai Chinese&quot;");
    	break;
    	
    	default:
    		$('#photoTitle').hmtl("");
    
    }
    
};

$(document).ready(function() {

	switchDescription();
	
	$('#next').click(function() {
		$('#photoTitle1').fadeOut(400, function() {
	    	
	    	switchDescription();
	    	$('#photoTitle1').fadeIn(400);
	    
	    });
	    
	});
	
	$('#previous').click(function() {
		$('#photoTitle1').fadeOut(400, function() {
	    	
	    	switchDescription();
	    	$('#photoTitle1').fadeIn(400);
	    
	    });
	    
	});

});