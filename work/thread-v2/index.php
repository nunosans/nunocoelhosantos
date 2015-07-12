<?php
  $page='Project';
  $title='Thread V2';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    Previous &thinsp;/&thinsp;
    <a href="../thread-for-ios/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="thread-v2">

</div>

<?php require_once('../../_footer.php'); ?>
