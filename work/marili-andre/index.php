<?php
  $page='Project';
  $title='Marili André';
  $description='Identity for the fashion photographer and filmmaking artist';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../stethoscore/">Previous</a> &thinsp;/&thinsp;
    <a href="../ailara-berdyyeva/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="marili-andre">

  <img class="clear side" width="1008" height="917"
    src="/media/images/marili-andre-screen.png">

</div>

<?php require_once('../../_footer.php'); ?>
