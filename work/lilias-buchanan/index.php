<?php
  $page='Project';
  $title='Lilias Buchanan';
  $description='Online portfolio for the portraitist illustrator and graphic designer';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../shooting-people/">Previous</a> &thinsp;/&thinsp;
    <a href="../jo-phipps/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="lilias-buchanan">

  <!-- Work goes here -->

</div>

<?php require_once('../../_footer.php'); ?>
