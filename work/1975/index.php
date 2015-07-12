<?php
  $page='Project';
  $title='1975';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../thread/">Previous</a> &thinsp;/&thinsp;
    <a href="../plenti/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="1975">

</div>

<?php require_once('../../_footer.php'); ?>
