<?php
  $page='Project';
  $title='Plenti';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../1975/">Previous</a> &thinsp;/&thinsp;
    <a href="../15-days-in-japan/">Next</a>
  </span>
</div>

<div class="project" id="plenti">

</div>

<?php require_once('../../_footer.php'); ?>
