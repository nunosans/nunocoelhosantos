<?php
  $page='Project';
  $title='Thread';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../pomodoro-for-apple-watch/">Previous</a> &thinsp;/&thinsp;
    <a href="../1975/">Next</a>
  </span>
</div>

<div class="project" id="thread">

</div>

<?php require_once('../../_footer.php'); ?>
