<?
  $title='Kerbside';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $project_number ?> of <? echo $projects_total ?></span>
</div>

<? require_once('../../_spinner.php'); ?>

<div class="project" id="kerbside">

</div>

<? require_once('../../_footer.php'); ?>
