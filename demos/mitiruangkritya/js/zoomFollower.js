$(document).ready(function() {

	$("#tooltip").hide();

	$(".imagePhoto").mousemove(function(e){
		
		if(big == 0) {
			$("#tooltip").show();
			$("#tooltip").css({ top: (e.pageY + 10) + "px", left: (e.pageX + 10) + "px" });
		} else if (big == 1) {
			$("#tooltip").hide();
		}
		 
	});
	
	$(".imagePhoto").mouseout(function(e){ $("#tooltip").hide(); });

});