<?php
  $page='Project';
  $title='Fractures from Anxiety';
  $description='Book and cover design for the short stories of Marcus Bastel';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../ana-barreira/">Previous</a> &thinsp;/&thinsp;
    Next
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="fractures-from-anxiety">

  <img id="special-2" class="clear side" width="1080" height="1080" src="/media/images/fractures-from-anxiety-cover-photo.jpg">
  <div class="txt col1">
    <h2>Fractures from Anxiety</h2>
    <h6>Book and Cover Design</h6>
    <p>
      This was a university brief to design a book interior and its cover for the
      collection of short stories by Marcus Bastel named “Fractures from Anxiety”.
    </p>
  </div>

  <img class="full" width="1264" height="6268" src="/media/images/fractures-from-anxiety-plans.jpg">


</div>

<?php require_once('../../_footer.php'); ?>
