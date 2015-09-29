<!DOCTYPE html>
<html>
  <head>
    <title>Nuno Coelho Santos
      <?php if ($page=='Home' || $page=='Profile') {echo(' &nbsp;—&nbsp; '); }
         else {echo(' &nbsp;～&nbsp; ');}; echo $title; ?></title>
    <!-- Technical Formating Meta Tags -->
    <meta http-equiv="content-type"     content="charset=utf-8">
    <meta http-equiv="content-language" content="en-gb">
    <meta http-equiv="expires"          content="Wed, 31 Dec 2014 12:00:00 GMT">
    <!-- Authoring Meta Tags -->
    <meta name="author"    content="Nuno Coelho Santos">
    <meta name="publisher" content="Nuno Coelho Santos">
    <meta name="copyright" content="2014 by Nuno Coelho Santos">
    <meta name="host"      content="nunocoelhosantos.com">
    <meta name="generator" content="Sublime Text 3">
    <!-- Search Eengine and Browser Meta Tags -->
    <meta name="description" content="<?php echo($description) ?>">
    <meta name="keywords"    content="nuno, coelho, coehlo, santos, graphic, web,
      design, identity, soares, reis, csm, saint, martins, london,
      fontend, font, end, developer, ustwo, thread">
    <meta name="revisit-after" content="14 days">
    <meta name="rating"        content="General">
    <meta http-equiv="x-ua-compatible" content="ie=8; chrome=1">
    <!-- Open Graph Meta Tags (ogp.me) -->
    <meta property="og:image"            content="http://nunocoelhosantos.com/media/images/15-days-in-japan-card.jpg">
    <meta property="og:image"            content="http://nunocoelhosantos.com/media/images/auria-card.jpg">
    <meta property="og:image"            content="http://nunocoelhosantos.com/media/images/instagram-redesign-brief-card.jpg">
    <meta property="og:site_name"        content="Nuno Coelho Santos">
    <meta property="og:title"            content="Nuno Coelho Santos
      <?php if ($page=='Home' || $page=='Profile') {echo(' &nbsp;—&nbsp; '); }
         else {echo(' &nbsp;~&nbsp; ');}; echo $title; ?>">
    <meta property="og:description"      content="<?php echo($description) ?>">
    <meta property="og:type"             content="website">
    <meta property="og:url"              content="http://nunocoelhosantos.com/">
    <!-- Favicon Meta Tags (use both) -->
    <link rel="icon"          href="http://nunocoelhosantos.com/media/graphics/favicon.png">
    <link rel="shortcut icon" href="http://nunocoelhosantos.com/media/graphics/favicon.png">
    <!-- Apple iOS Meta Tags -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- Stylesheets -->
    <link href="/stylesheets/all.css" rel="stylesheet">
    <!-- Typekit -->
    <script src="http://use.typekit.com/qxu7res.js"></script>
    <script>try{Typekit.load();}catch(e){};</script>
    <!-- Humans -->
    <link href="/humans.txt" rel="author">
    <?php
    $project_number = 0;  // Initial value to iterate
    $projects_total = 23; // Total number of projects
    switch ($title) {
      case 'Fractures from Anxiety'   : $project_number++;
      // case 'Sophie Westerlind'        : $project_number++;
      // case 'Miti Ruangkritya'         : $project_number++;
      case 'Ana Barreira'             : $project_number++;
      case 'Caroline Pera'            : $project_number++;
      // case 'Ailara Berdyyeva'         : $project_number++;
      // case 'Marili André'             : $project_number++;
      case 'Stethoscore'              : $project_number++;
      // case 'Jo Phipps'                : $project_number++;
      // case 'Lilias Buchanan'          : $project_number++;
      // case 'Shooting People'          : $project_number++;
      case 'Protein Journal'          : $project_number++;
      case 'Index 7'                  : $project_number++;
      case 'Expresso Viagens'         : $project_number++;
      case 'Ava Mirabelle'            : $project_number++;
      case 'Vânia Coelho Santos'      : $project_number++;
      case 'Paul Cocksedge Shop'      : $project_number++;
      case 'Norman Hartnell'          : $project_number++;
      case '#todo'                    : $project_number++;
      case 'Keepon'                   : $project_number++;
      // case 'Google DoubleClick'       : $project_number++;
      case 'Kent & Curwen'            : $project_number++;
      // case 'Sony VAIO Message Center' : $project_number++;
      case 'Stylize/d'                : $project_number++;
      case 'Instagram Redesign Brief' : $project_number++;
      case 'Creative Space'           : $project_number++;
      case 'The Scientist'            : $project_number++;
      case 'Auria'                    : $project_number++;
      case '15 Days in Japan'         : $project_number++;
      case 'Plenti'                   : $project_number++;
      case '1975'                     : $project_number++;
      case 'Thread'                   : $project_number++;
      case 'Pomodoro for Watch'      : $project_number++;
      case 'Thread for iOS'           : $project_number++;
      case 'Thread V2'                : $project_number++;
      //Add new projects here using the same structure
    }
    ?>
  </head>
  <body <?php if ($page=='Home') {echo('id="home"');} ?>>
    <div id="header">
      <h1>
        <em><a href="/">Nuno Coelho Santos</a></em><br>
        Tokyo-based Designer &amp; Developer
      </h1>
      <ul id="nav">
        <li>
          <a href="<?php if ($page=='Home') {echo('#portfolio');} else {echo('/');}?>">Portfolio</a>
        </li>
        <li>
          <a href="/profile">Profile</a>
        </li>
      </ul>
    </div>
