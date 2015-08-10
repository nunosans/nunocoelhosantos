<?php
  $page='Project';
  $title='Pomodoro for Watch';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../thread-for-ios/">Previous</a> &thinsp;/&thinsp;
    <a href="../thread/">Next</a>
  </span>
</div>

<div class="project" id="pomodoro-for-apple-watch">

</div>

<?php require_once('../../_footer.php'); ?>
