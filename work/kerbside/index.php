<?php
  $title='Kerbside';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="kerbside">

</div>

<?php require_once('../../_footer.php'); ?>
