<?
  $title='#todo';
  $description='User interface and experience of the Twitter-powered to-do list app';
  require_once('../../header.inc.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $project_number ?> of <? echo $projects_total ?></span>
  <span>
    <a href="../keepon/">Previous</a> &thinsp;/&thinsp;
    <a href="../norman-hartnell/">Next</a>
  </span>
</div>

<div class="project" id="hash-todo">

  <img class="full" width="1080" height="1080" src="/media/images/hash-todo-main.jpg">

</div>

<? require_once('../../footer.inc.php'); ?>
