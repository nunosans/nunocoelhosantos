<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-UK" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-UK">

	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>miti ruangkritya | photographer</title>
		
		<link rel="stylesheet" type="text/css" href="./css/mitiwebsite.css" />
		<link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
		
		<script type="text/javascript" src="./js/queryLoader.js"></script>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script type="text/javascript" src="./js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="./js/menuAnimations.js"></script>
		
		<script type="text/javascript">
			
			imageNumber = 1;
			
			totalImages = 11;
			
			//Define image ratio
			var ratio = 0.74;
			
			reduce = 70;
			
			left = "50%";
			
			top = 50;
			
			imageWidth = 2000;
			
			imageHeight = 1480;
			
			cut = 67;
			
			$(document).ready(function(){
				$('#totalImages').html("&thinsp;/&thinsp;11");
				
				$('#selectedAlbumTitle').html("Mae Hong Sorn");
			});
			
			big = 0;
			
		</script>
		
		<script type="text/javascript" src="./js/resizeBangkok.js"></script>
		<script type="text/javascript" src="./js/transition.js"></script>
		<script type="text/javascript" src="./js/controller.js"></script>
				
	</head>
	
	<body>
	
		<?php

			require("./snippets/menu.html");

		?>
		
		
		<div id="photos">
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn1.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn2.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn3.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn4.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn5.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn6.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn7.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn8.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn9.jpg"  alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn10.jpg" alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
			<span class="imagePhoto"><img src="./albums/album5-mae_hong_sorn11.jpg" alt="Mae Hong Sorn &copy Miti Ruangkritya"/></span>
		
		</div>
		
		<script type='text/javascript'>
			QueryLoader.init();
		</script>
		
	</body>
	
</html>
