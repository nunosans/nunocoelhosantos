<?php
  $page='Project';
  $title='Protein Journal';
  $description='Development of the Protein’s journal version for the iPad';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../index-7/">Previous</a> &thinsp;/&thinsp;
    <a href="../stethoscore/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="protein-journal">

  <img class="clear side" width="1008" height="664"
    src="/media/images/protein-journal-main.png">
  <div class="txt">
    <h2>Protein® Journal</h2>
    <h6>iOS Development</h6>
    <p>
      This was a project made during my two-week internship at
      <a href="https://www.prote.in" target="_blank">Protein®</a>. With this project I learnt the
      basics of <a href="http://en.wikipedia.org/wiki/C_(programming_language)" target="_blank">C</a>,
      <a href="http://en.wikipedia.org/wiki/Objective-C" target="_blank">Objective-C</a>,
      <a href="https://developer.apple.com/xcode/" target="_blank">Xcode</a>, the basics of authenticating and
      publishing an app on the
      <a href="http://en.wikipedia.org/wiki/App_Store_(iOS)" target="_blank">App Store</a>.
    </p>
  </div>

  <img class="clear half" width="624" height="2350"
    src="/media/images/protein-journal-1.jpg">
  <img class="half" width="624" height="774"
    src="/media/images/protein-journal-2.jpg">

</div>

<?php require_once('../../_footer.php'); ?>
