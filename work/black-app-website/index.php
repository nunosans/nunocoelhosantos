<?php
  $page='Project';
  $title='BLACK App Website';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../konto/">Previous</a> &thinsp;/&thinsp;
    <a href="../15-days-in-japan/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="black-app-website">

</div>

<?php require_once('../../_footer.php'); ?>
