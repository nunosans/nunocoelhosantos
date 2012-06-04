<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<META http-equiv="cache-control" CONTENT="public">
	<meta name="description" content="Nuno Coelho Santos is a Graphic Designer and Front-end Developer based in London. Soon to be graduated from Central Saint Martins, working on freelance projects." />
	<meta name="keywords" content="nuno, coelho, santos, graphic, web, design, identity, soares, reis, csm, central, saint, martins, london" />
	<meta name="format-detection" content="telephone=no" >
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	
	<title>Nuno Coelho Santos<? if ($project=='NO') {echo(' &nbsp;—&nbsp; Designer & Front-end Developer');} else {echo(' &nbsp;~&nbsp; '); echo $project;} ?></title>
	 
	<link   type="text/css"		href="/stylesheets/styles.css"	rel="stylesheet"		media="screen"	/>
	<link   type="text/plain"	href="/humans.txt"				rel="author"							/>
	
	<script type="text/javascript" src="http://use.typekit.com/qxu7res.js"></script>
	<script type="text/javascript" src="/javascript/jquery.js"></script>
	<script type="text/javascript" src="/javascript/scripts.js"></script>
	
	<script type="text/javascript" src="http://mint.nunocoelhosantos.com/?js"></script>
	
	<?
	
	$project_number = 0; // Initial value to iterate
	$projects_total = 3; // Total number of projects
	
	switch ($project) {
	//	case 'Fractures from Anxiety'	: $project_number++;
	//	case 'Sophie Westerlind'		: $project_number++;
	//	case 'Miti Ruangkritya'			: $project_number++;
		case 'Ana Barreira'				: $project_number++;
	//	case 'Savant'					: $project_number++;
	//	case 'Caroline Pera'			: $project_number++;
	//	case 'Ailara Berdyyeva'			: $project_number++;
	//	case 'Marili André'				: $project_number++;
	//	case 'Stethoscore'				: $project_number++;
	//	case 'Nostalgics'				: $project_number++;
	//	case 'Iterar'					: $project_number++;
	//	case 'Jo Phipps'				: $project_number++;
	//	case 'Lilias Buchanan'			: $project_number++;
	//	case 'Shooting People'			: $project_number++;
	//	case 'Protein Journal'			: $project_number++;
	//	case 'Index 7'					: $project_number++;
		case 'Expresso Viagens'			: $project_number++;
	//	case 'Ava Mirabelle'			: $project_number++;
		case 'Vânia Coelho Santos'		: $project_number++;
	//	case 'Paul Cocksedge Shop'		: $project_number++;
	//	case 'Norman Hartnell'			: $project_number++;
	//	case '#todo'					: $project_number++;
	//	Add new projects here using the same structure
		}
	
	?>
	
	<!-- Five Columns -->
	<style type="text/css" media="only screen and (min-width: 1449px)">
		body > * {width: 1296px;}
		#header, .project, .project-nav {width: 1264px;}
		.featured {width: 1264px; max-height: 695px;}
		.featured img {
			/* Override JS */
			top: 0 !important;
			left: 0 !important;
			height: 695px !important;
			width: 1264px !important;

			}
		.featured > div > * {
			padding-left: 16px;
			padding-right: 1008px;
			}
		.featured p {
			background-position: 1224px 0;
			}
		.work {width: 1280px;}
		.project .full  	{width: 1280px;}
		.project .side		{width: 1008px;}
		.project .site-plan {width: 752px;}
	</style>
	
	<!-- Four Columns -->
	<style type="text/css" media="only screen and (max-width: 1448px)">
		body > * {width: 1040px;}
		#header, .project, .project-nav {width: 1008px;}
		.featured > div > * {padding-right: 768px;}
		.work {width: 1024px;}
		.txt.col5 {
			width: 1008px;
			column-count: 4;
			-webkit-column-count: 4;
			-moz-column-count: 4;
			-o-column-count: 4;
			}

		.txt.grid1 			{width: 240px;}
		.txt.grid3 			{width: 496px;}
		.project .full  	{width: 1008px;}
		.project .side,
		.project .site-plan {width: 752px;}
		.project .both 		{width: 496px;}
	</style>
	
	<!-- Three Columns -->
	<style type="text/css" media="only screen and (max-width: 1192px)">
		body > * {width: 784px;}
		#header, .project, .project-nav {width: 752px;}
		.featured > div > * {padding-right: 512px;}
		.work {width: 768px;}
		.txt.grid1	{width: 112px;}
		.txt.grid3	{width: 368px;}
		.txt.col5,
		.txt.col4 {
			width: 752px;
			column-count: 3;
			-webkit-column-count: 3;
			-moz-column-count: 3;
			-o-column-count: 3;
			}
		.project .full 		{width: 752px;}
		.project .side,
		.project .site-plan,
		.project .both {width: 496px;}
	</style>
	
	<!-- Two Columns -->
	<style type="text/css" media="only screen and (max-width:  936px)">
		body > * {width: 528px;}
		#header, .project, .project-nav, .work h3 {width: 496px;}
		.featured > div > * {padding-right: 256px;}
		.work {width: 512px;}
		.work h3 {
			clear: both;
			height: 30px;
			border: none;
			border-bottom: 1px solid #E2E2E2;
			text-align: left;
			margin: 20px 8px 20px;
			padding: 0;
			}
		img {
			-webkit-transition-duration: 0.0s;
			   -moz-transition-duration: 0.0s;
			     -o-transition-duration: 0.0s;
			        transition-duration: 0.0s;
			}
		#about, #also {width: 100%;}
		.txt.col5,
		.txt.col4,
		.txt.col3 {
			width: 496px;
			-webkit-column-count: 2;
			   -moz-column-count: 2;
			     -o-column-count: 2;
			        column-count: 2;
			}
		.project .full,
		.project .side,
		.project .site-plan,
		.project .both {
			float: left;
			width: 496px;
			margin-top: 16px;
			margin-bottom: 16px;
			margin-left: 0;
			}
		.project .txt {
			margin-top: 0;
			margin-bottom: 16px;
			margin-left: 0;
			}
			.project .txt.clear {
				}
		
		#special-1,
		#special-2 {margin-top: 0;}
	</style>
	
	<!-- Mobile Three Column -->
	<style type="text/css" media="only screen and (max-width:  680px)">
		body {background-position: 50% 400px;}
		body > * {width: 784px;}
		#header, .project, .project-nav, .work h3, .featured > div > * {width: 752px;}
		
		
		.featured {
			min-height: 530px;
			}
			.featured img {
				/* Override jQuery resizing  */
				top: 0 !important;
			}

		.featured > div {background-color: black; background-color: rgba(0,0,0,0.75);}
		.featured > div > * {padding-right: 0px;}
		
		/* Have all content full-width  */
		.work {width: 768px;}
		.project .full,
		.project .side,
		.project .site-plan,
		.project .both {
			width: 752px;
			}

		html {zoom: 50%;}
		* {font-size: 28px !important; line-height: 34px !important;}
		a, a:link, a:visited, a:hover, a:active {height: 31px;}

		#nav li {margin-top: 16px;}
		.featured p {
			width: 480px;
			background-position:100% 0;
			padding-right: 272px;
			}

		/* Remove some elements */
		.work div p {display: none;}

		.work div.dev h4:after,
		.work div.new h4:after {
			width: 224px;
			top: 116px;
			right: 8px;
			border-radius: 0px;
			padding: 4px 8px 6px;
			}

		.work h3 {height: 40px;}

		.project-nav {height: 75px;}
		.project > * {padding-bottom: 40px;}

		.txt,
		.txt.col1,  .txt.col2,  .txt.col3,  .txt.col4, .txt.col5, 
		.txt.grid1, .txt.grid2, .txt.grid3, .txt.grid4 {
			width: 752px;
			column-count: 1;
			-webkit-column-count: 1;
			-moz-column-count: 1;
			-o-column-count: 1;
			}

		#info .txt p {padding-right: 0; max-width: 560px;}
	</style>

	<!-- Mobile Two Column -->
	<style type="text/css" media="only screen and (max-width:  440px)">
		/* Have all content full-width  */
		body > * {width: 528px;}
		#header, .project, .project-nav, .work h3, .featured > div > * {width: 496px;}
		.featured {
			min-height: 380px;
			}
		.work {width: 512px;}
		.project .full,
		.project .side,
		.project .site-plan,
		.project .both {
			width: 496px;
			}
		#nav{float: left;}
		#nav li:first-child {margin-left: 0;}
		.featured > div > div > * {padding-right: 0px; width: 496px;}
		.featured p {
			width: 464px;
			padding-right: 32px;
			background-position-x:100%;
			}
		.txt,
		.txt.col1,  .txt.col2,  .txt.col3,  .txt.col4, .txt.col5, 
		.txt.grid1, .txt.grid2, .txt.grid3, .txt.grid4 {
			width: 496px;
			}
	</style>
	
</head>


<body>

	<div id="header">
		<h1>
			<em><a href="/">Nuno Coelho Santos</a></em><br />
			Designer & Front-end Developer
		</h1>
		<ul id="nav">
			<li><a href="<? if ($nav=='home') {echo('#portfolio');} else {echo('/');}?>">Portfolio</a></li>
			<li><a href="/en/profile">Profile</a></li>
		</ul>
	</div>
	
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
