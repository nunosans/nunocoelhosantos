<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Nuno Coelho Santos is a Graphic Designer and Front-end Developer based in London. Soon to be graduated from Central Saint Martins, working on freelance projects." />
	<meta name="keywords" content="nuno, coelho, santos, graphic, web, design, identity, soares, reis, csm, central, saint, martins, london" />
	<meta name="format-detection" content="telephone=no" >
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	
	<title>Nuno Coelho Santos<? if ($project=='NO') {echo(' &nbsp;—&nbsp; Graphic Designer');} else {echo(' &nbsp;~&nbsp; '); echo $project;} ?></title>
	 
	<link   href="/stylesheets/styles.css"	rel="stylesheet"	type="text/css"		media="screen"	/>
	<link   href="/humans.txt"				rel="author"		type="text/plain"					/>
	
	<script type="text/javascript" src="http://use.typekit.com/qxu7res.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="/javascript/jquery.flexslider.js"></script>
	<script type="text/javascript" src="/javascript/scripts.js"></script>
	
	<!--<script type="text/javascript" src="http://mint.nunocoelhosantos.com/?js"></script>-->
	
	<?
	
	$media_host = 'http://media.nunocoelhosantos.com/';
	
	$project_number = 0; // Initial value to iterate
	$projects_total = 23;
	
	switch ($project) {
		case 'Fractures from Anxiety': $project_number++;
		case 'Sophie Westerlind'     : $project_number++;
		case 'Miti Ruangkritya'      : $project_number++;
		case 'Design Classics'       : $project_number++;
		case 'Ana Barreira'          : $project_number++;
		//case 'Navigating News'       : $project_number++;
		case 'Savant'                : $project_number++;
		case 'Caroline Pera'         : $project_number++;
		case 'Ailara Berdyyeva'      : $project_number++;
		case 'Marili André'          : $project_number++;
		case 'Stethoscore'           : $project_number++;
		case 'Nostalgics'            : $project_number++;
		case 'Iterar'                : $project_number++;
		case 'Jo Phipps'             : $project_number++;
		case 'Lilias Buchanan'       : $project_number++;
		//case 'PUMA.Peace'            : $project_number++;
		case 'Shooting People'       : $project_number++;
		case 'Protein Journal'       : $project_number++;
		case 'Index 7'               : $project_number++;
		case 'Expresso Viagens'      : $project_number++;
		case 'Ava Mirabelle'         : $project_number++;
		case 'Tweet #todo'           : $project_number++;
		case 'Paul Cocksedge'        : $project_number++;
		case 'Norman Hartnell'       : $project_number++;
		//case 'Open Cinema'           : $project_number++;
		case 'Vânia Coelho Santos'   : $project_number++;
		// Add new projects here using the same structure
		}
	
	?>
	
	<!-- Five Columns -->
	<style type="text/css" media="only screen and (min-width: 1449px)">
		body > * {width: 1296px;}
		#header, .project, #project-nav {width: 1264px;}
		.slider {width: 1264px;}
		.slider .slides li .caption {background-color: transparent;}
		.slider .slides li .caption *, .flex-control-nav {margin: 0 auto; padding-right: 1008px; padding-left: 16px;}
		.work {width: 1280px;}
	</style>
	
	<!-- Four Columns -->
	<style type="text/css" media="only screen and (max-width: 1448px)">
		body > * {width: 1040px;}
		#header, .project, #project-nav {width: 1008px;}
		.slider {width: 100%;}
		.slider .slides li .caption {background-color: transparent;}
		.slider .slides li .caption *, .flex-control-nav {margin: 0 auto; padding-right: 768px; padding-left: 0;}
		.work {width: 1024px;}
		.txt.col5 {
			width: 1008px;
			column-count: 4;
			-webkit-column-count: 4;
			-moz-column-count: 4;
			-o-column-count: 4;
			}
		.project .full     {width: 1008px;}
		.project .side,
		.project .half     {width: 752px;}
		.project .both,
		.project .fourth   {width: 496px; }
		.project .third    {width: 240px; }
	</style>
	
	<!-- Three Columns -->
	<style type="text/css" media="only screen and (max-width: 1192px)">
		body > * {width: 784px;}
		#header, .project, #project-nav {width: 752px;}
		.slider .slides li .caption {background-color: rgba(0,0,0,0.66);}
		.slider .slides li .caption *, .flex-control-nav {padding-right: 512px;}
		.work {width: 768px;}
		.txt.col5,
		.txt.col4 {
			width: 752px;
			column-count: 3;
			-webkit-column-count: 3;
			-moz-column-count: 3;
			-o-column-count: 3;
			}
		.project .full     {width: 752px;}
		.project .side,
		.project .half,
		.project .third    {width: 496px; }
	</style>
	
	<!-- Two Columns -->
	<style type="text/css" media="only screen and (max-width:  936px)">
		body > * {width: 528px;}
		#header, .project, #project-nav, .work h3 {width: 496px;}
		.slider .slides li .caption *, .flex-control-nav {padding-right: 256px;}
		.work {width: 512px;}
		.work h3 {clear: both; height: 30px; border: none; border-bottom: 1px solid #E2E2E2; text-align: left; margin: 20px 8px 20px; padding: 0;}
		img {
			transition-duration: 0.0s;
			-webkit-transition-duration: 0.0s;
			-moz-transition-duration: 0.0s;
			-o-transition-duration: 0.0ss;
			}
		#about, #also {width: 100%;}
		.txt.col5,
		.txt.col4,
		.txt.col3 {
			width: 496px;
			column-count: 2;
			-webkit-column-count: 2;
			-moz-column-count: 2;
			-o-column-count: 2;
			}
		.project .side,
		.project .both,
		.project .full,
		.project .half,
		.project .third,
		.project .fourth {
			float: left;
			width: 496px;
			margin-top: 16px;
			margin-bottom: 16px;
			}
		.project .txt {
			margin-top: 0;
			margin-bottom: 16px;
			margin-left: 0;
			}
			.project .txt.clear {
				}
		
		#special-1 {margin-top: 0;}
	</style>
	
	<!-- Mobile Three Column -->
	<style type="text/css" media="only screen and (max-width:  680px)">
		body > * {width: 784px;}
		#header, .project, #project-nav, .work h3 {width: 752px;}
		.work {width: 768px;}
		.project .side,
		.project .both,
		.project .full,
		.project .half,
		.project .third,
		.project .fourth {
			width: 752px;
			}

		html {zoom: 50%;}
		* {font-size: 28px !important; line-height: 34px !important;}
		a, a:link, a:visited, a:hover, a:active {height: 31px;}

		/* Remove some elements */
		.work div p, .slider .slides li .caption p, .flex-control-nav {display: none;}

		/* Slider */
		.slider .slides li .caption {margin-top: 224px; height: 25px;}
		.slider .slides li .caption * {padding-right: 0px; width: 752px;}

		.work h3 {height: 40px;}

		#project-nav {height: 75px;}
		.project > * {padding-bottom: 40px;}

		.txt,
		.txt.col1, .txt.col2, .txt.col3, .txt.col4, .txt.col5, 
		.txt.grid3, .txt.grid4 {
			width: 752px;
			column-count: 1;
			-webkit-column-count: 1;
			-moz-column-count: 1;
			-o-column-count: 1;
			}
		.txt.grid1 {width:240px;}
		.txt.grid2 {width:496px;}

		#info .txt p {padding-right: 0;}
		#newsletter input[type="email"] {height: 48px; width: 351px; margin: 10px 0 0; padding-top:0; padding-bottom:0;}
		#newsletter input[type="submit"] {height: 52px; width: 129px; text-shadow: 0 -3px 0 rgba(0, 0, 0, 0.2); margin: 10px 0 0; padding-top:0; padding-bottom:0;}

	</style>

	<!-- Mobile Two Column -->
	<style type="text/css" media="only screen and (max-width:  440px)">
		body > * {width: 528px;}
		#header, .project, #project-nav, .work h3 {width: 496px;}
		.work {width: 512px;}
		.project .side,
		.project .both,
		.project .full,
		.project .half,
		.project .third,
		.project .fourth {
			width: 496px;
			}
		.slider .slides li .caption * {padding-right: 0px; width: 496px;}
		.txt,
		.txt.col1, .txt.col2, .txt.col3, .txt.col4, .txt.col5, 
		.txt.grid2, .txt.grid3, .txt.grid4 {
			width: 496px;
			}
	</style>
	
</head>


<body <? if ($nav=='home') {echo('id="home"');} ?>>

	<div id="header">
		<h1>
			<em><a href="/">Nuno Coelho Santos</a></em> &nbsp;/&nbsp; 
			<a class="tel" href="tel:+447919537622">+44 [0]7919 537 622</a> &nbsp;/&nbsp; 
			<a href="mailto:nuno@nunocoelhosantos.com?subject=Question%20about%20your%20work%20/%20Quote%20/%20Work%20proposal%20/%20Fan%20mail&body=Dear%20Nuno,%0D%0A%0D%0A%0D%0A">nuno&hairsp;@&hairsp;nunocoelhosantos.com</a>
		</h1>
		<h1><em>Graphic Designer</em> &nbsp;—&nbsp; <span>Specialised in Identity and Web</span></h1>
	</div>
	
	<? if ($project!='NO'): ?>
	<div id="project-nav">
		<h2><span class="pictogram">&#93;</span>Back</h2>
		<span><? echo $project_number ?> of <? echo $projects_total ?></span>
		<span><a href="">Previous</a> &nbsp;/&nbsp; <a href="">Next</a></span>
	</div>
	<? endif; ?>
	
	<div id="columns">
		<div class="thirty"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="three"></div>
		<div class="zero"></div>
		<div class="twenty"></div>
		<div class="thirty"></div>
	</div>
