$(document).ready(function() {
	
	var index = 0, hash = window.location.hash;
	if (hash) { index = /\d+/.exec(hash)[0]; index = (parseInt(index) || 1) - 1; };
	
	$('#photos').cycle({
	
		fx: 'fade',
		
		speed: 800,
		
		timeout: 0,
		
		startingSlide: index,
		
		after: function (curr,next,opts) {
					window.location.hash = opts.currSlide + 1;
					imageNumber = opts.currSlide + 1;
				},
		
		next: '#next',
		
		prev: '#previous'
	
	});
	
	resize();
			
	$(window).resize(function() {
		big = 0;
		$('#photos img').unbind('mousemove');
	    resize();
	});
			
});