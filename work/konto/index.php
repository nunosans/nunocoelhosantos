<?php
  $page='Project';
  $title='Konto';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../thread/">Previous</a> &thinsp;/&thinsp;
    <a href="../black-app-website/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="konto">

</div>

<?php require_once('../../_footer.php'); ?>
