<!doctype html>
<html lang="en">
  <head>
    <title>Nuno Coelho Santos<?if ($page=='Home' || $page=='Perfil') {echo(' &nbsp;—&nbsp; ');
      } else {echo(' &nbsp;~&nbsp; ');};echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<? echo($description) ?>">
    <meta name="keywords" content="nuno, coelho, santos, graphic, web,
      design, identity, soares, reis, csm, central, saint, martins, london">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link href="/stylesheets/styles.css" rel="stylesheet">
    <link href="/humans.txt" rel="author">
    <style type="text/css">
      /* Translate labels to Portuguese */
      .work div.dev h4:after {content: "Brevemente";}
      .work div.new h4:after {content: "Novo";}
    </style>
    <script src="//use.typekit.com/qxu7res.js"></script>
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="/javascript/localscroll.js"></script>
    <script src="/javascript/scrollto.js"></script>
    <script src="/javascript/scripts.js"></script>
    <?
    $project_number = 0; // Initial value to iterate
    $projects_total = 23; // Total number of projects
    switch ($title) {
      case 'Fractures from Anxiety' : $project_number++;
      case 'Sophie Westerlind'      : $project_number++;
      case 'Miti Ruangkritya'       : $project_number++;
      case 'Ana Barreira'           : $project_number++;
      case 'Savant'                 : $project_number++;
      case 'Caroline Pera'          : $project_number++;
      case 'Ailara Berdyyeva'       : $project_number++;
      case 'Marili André'           : $project_number++;
      case 'Stethoscore'            : $project_number++;
      case 'Nostalgics'             : $project_number++;
      case 'Iterar'                 : $project_number++;
      case 'Jo Phipps'              : $project_number++;
      case 'Lilias Buchanan'        : $project_number++;
      case 'Shooting People'        : $project_number++;
      case 'Protein Journal'        : $project_number++;
      case 'Index 7'                : $project_number++;
      case 'Expresso Viagens'       : $project_number++;
      case 'Ava Mirabelle'          : $project_number++;
      case 'Vânia Coelho Santos'    : $project_number++;
      case 'Paul Cocksedge Shop'    : $project_number++;
      case 'Norman Hartnell'        : $project_number++;
      case '#todo'                  : $project_number++;
      case 'Keepon'                 : $project_number++;
      //Add new projects here using the same structure
    }
    ?>
  </head>
  <body <? if ($page=='Home') {echo('id="home"');} ?>>
    <div id="header">
      <h1>
        <em><a href="/pt/">Nuno Coelho Santos</a></em><br>
        Design Gráfico e Programação
      </h1>
      <ul id="nav">
        <li>
          <a href="<? if ($page=='Home') {echo('#portfolio');} else {echo('/pt/');}?>">Portfólio</a>
        </li>
        <li>
          <a href="/pt/perfil">Perfil</a>
        </li>
      </ul>
    </div>