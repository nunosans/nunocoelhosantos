<?php
  $page='Project';
  $title='Miti Ruangkritya';
  $description='Design and development of the website for the thai photojournalist';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../ana-barreira/">Previous</a> &thinsp;/&thinsp;
    <a href="../sophie-westerlind/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="miti-ruangkritya">

  <img class="clear side" width="1008" height="917"
    src="/media/images/miti-ruangkritya-screen.png">

</div>

<?php require_once('../../_footer.php'); ?>
