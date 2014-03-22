<!DOCTYPE html>
<html>
  <head>
    <title>Nuno Coelho Santos <? if ($page=='Home' || $page=='Profile') {echo(' &nbsp;—&nbsp; '); } else {echo(' &nbsp;~&nbsp; ');}; echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="content-type"     content="charset=utf-8">
    <meta http-equiv="content-language" content="en-gb">
    <meta http-equiv="expires"          content="Mon, 30 Dec 2013 00:00:00 GMT">
    <meta name="description" content="<? echo($description) ?>">
    <meta name="keywords"    content="nuno, coelho, santos, graphic, web,
      design, identity, soares, reis, csm, central, saint, martins, london,
      fontend, font, end, developer, ustwo, us, two">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon"          href="http://nunocoelhosantos.com/media/graphics/favicon.png">
    <link rel="shortcut icon" href="http://nunocoelhosantos.com/media/graphics/favicon.png">
    <link href="/stylesheets/all.css" rel="stylesheet">
    <script src="http://use.typekit.com/qxu7res.js"></script>
    <script>try{Typekit.load();}catch(e){};</script>
    <link href="/humans.txt" rel="author">
    <?
    $project_number = 0;  // Initial value to iterate
    $projects_total = 28; // Total number of projects
    switch ($title) {
      case 'Fractures from Anxiety'   : $project_number++;
      case 'Sophie Westerlind'        : $project_number++;
      case 'Miti Ruangkritya'         : $project_number++;
      case 'Ana Barreira'             : $project_number++;
      case 'Caroline Pera'            : $project_number++;
      case 'Ailara Berdyyeva'         : $project_number++;
      case 'Marili André'             : $project_number++;
      case 'Stethoscore'              : $project_number++;
      case 'Jo Phipps'                : $project_number++;
      case 'Lilias Buchanan'          : $project_number++;
      case 'Shooting People'          : $project_number++;
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
      // case 'Kerbside'                 : $project_number++;
      // case 'Plenti'                   : $project_number++;
      case '15 Days in Japan'         : $project_number++;
      // case 'ustwo Identity'           : $project_number++;
      //Add new projects here using the same structure
    }
    ?>
  </head>
  <body <? if ($page=='Home') {echo('id="home"');} ?>>
    <div id="header">
      <h1>
        <em><a href="/en/">Nuno Coelho Santos</a></em><br>
        London-based Designer <br>&amp; Web Developer
      </h1>
      <ul id="nav">
        <li>
          <a href="<? if ($page=='Home') {echo('#portfolio');} else {echo('/en/');}?>">Portfolio</a>
        </li>
        <li>
          <a href="/en/profile">Profile</a>
        </li>
        <!-- <li>
          <a href="http://blog.nunocoelhosantos.com/">Blog</a>
        </li> -->
      </ul>
    </div>
