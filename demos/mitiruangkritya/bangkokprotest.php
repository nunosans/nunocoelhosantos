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
		
		<script type="text/javascript" src="./js/switchDescriptionBangkokProtest.js"></script>
		
		<script type="text/javascript">
			
			imageNumber = 1;
			
			totalImages = 12;
			
			ratio = 0.736;
			
			reduce = 85;
			
			left = "50%";
			
			top = 50;
			
			imageWidth = 1000;
			
			imageHeight = 736;
			
			cut = 90;
			
			$(document).ready(function(){
				$('#totalImages').html("&thinsp;/&thinsp;12");
				
				$('#selectedAlbumTitle').html("Bangkok Protest");
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
			
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest1.jpg"  alt="album2-bangkok_protest1"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest2.jpg"  alt="album2-bangkok_protest2"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest3.jpg"  alt="album2-bangkok_protest3"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest4.jpg"  alt="album2-bangkok_protest4"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest5.jpg"  alt="album2-bangkok_protest5"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest6.jpg"  alt="album2-bangkok_protest6"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest7.jpg"  alt="album2-bangkok_protest7"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest8.jpg"  alt="album2-bangkok_protest8"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest9.jpg"  alt="album2-bangkok_protest9"/>	 </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest10.jpg" alt="album2-bangkok_protest10"/> </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest11.jpg" alt="album2-bangkok_protest11"/> </span>
			<span class="imagePhoto"><img src="albums/album2-bangkok_protest12.jpg" alt="album2-bangkok_protest12"/> </span>
		
		</div>
		
		<div id="descriptionsBangkok">
		    <span id="photoTitle1"></span>
		</div>
		
		<script type='text/javascript'>
			QueryLoader.init();
		</script>

	</body>
	
</html>