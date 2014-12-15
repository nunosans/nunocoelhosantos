<?php
  $page='Project';
  $title='Jo Phipps';
  $description='Design & Development of the artist online portfolio';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../lilias-buchanan/">Previous</a> &thinsp;/&thinsp;
    <a href="../stethoscore/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="jo-phipps">

  <!-- Work goes here -->

</div>

<?php require_once('../../_footer.php'); ?>
