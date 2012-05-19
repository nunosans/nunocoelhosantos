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
		
		<script type="text/javascript" src="./js/switchDescriptionEastWest.js"></script>
		
		<script type="text/javascript">
			
			imageNumber = 1;
			
			totalImages = 14;
			
			ratio = 1.5;
			
			reduce = 85;
			
			left = "50%";
			
			top = 50;
			
			imageWidth = 667;
			
			imageHeight = 1000;
			
			cut = 67;
			
			$(document).ready(function(){
			
				$('#totalImages').html("&thinsp;/&thinsp;14");
				
				$('#selectedAlbumTitle').html("East&thinsp;/&thinsp;West");
				
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
			
			<span class="imagePhoto"><img src="albums/album3-east_west1.jpg" alt="album3-east_west1"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west2.jpg" alt="album3-east_west2"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west3.jpg" alt="album3-east_west3"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west4.jpg" alt="album3-east_west4"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west5.jpg" alt="album3-east_west5"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west6.jpg" alt="album3-east_west6"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west7.jpg" alt="album3-east_west7"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west8.jpg" alt="album3-east_west8"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west9.jpg" alt="album3-east_west9"/>	</span>
			<span class="imagePhoto"><img src="albums/album3-east_west10.jpg" alt="album3-east_west10"/></span>
			<span class="imagePhoto"><img src="albums/album3-east_west11.jpg" alt="album3-east_west11"/></span>
			<span class="imagePhoto"><img src="albums/album3-east_west12.jpg" alt="album3-east_west12"/></span>
			<span class="imagePhoto"><img src="albums/album3-east_west13.jpg" alt="album3-east_west13"/></span>
			<span class="imagePhoto"><img src="albums/album3-east_west14.jpg" alt="album3-east_west14"/></span>
		
		</div>
		
		<div id="descriptions">
		    <span id="photoTitle"></span>
		</div>
		
		<script type='text/javascript'>
			QueryLoader.init();
		</script>
		
	</body>
	
</html>