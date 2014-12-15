<?php
  $page='Project';
  $title='Stethoscore';
  $description='User interface, user experience & web development for the
    medical utility app';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../protein-journal/">Previous</a> &thinsp;/&thinsp;
    <a href="../caroline-pera/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="stethoscore">

  <img class="full" width="1264" height="680"
    src="/media/images/stethoscore-main.jpg">

  <div class="clear txt">
    <h2>Stethoscore</h2>
    <h6>Interface Design</h6>
    <p>
      This is an independent project to build medical utility app that could to
      calculate the risk of a fatal heart disease. The app is meant to be
      drastically simpler and easier to use than any other medical apps in order
      to appeal to a wider audience. This was my first software interface design
      project, done using <a href="http://www.adobe.com/uk/products/photoshop.html"
      target="_blank">Adobe Photoshop</a> and <a
      href="http://www.adobe.com/uk/products/illustrator.html"
      target="_blank">Adobe Illustrator</a>.
    </p>
    <p class="icon-globe-1">
      <a href="https://itunes.apple.com/uk/app/stethoscore-cardiovascular/id502639495?ls=1&mt=8"
      target="_blank">Stethoscore on the App Store</a>
    </p>
  </div>
  <img class="side" width="1264" height="680"
    src="/media/images/stethoscore-overview.jpg">

</div>

<?php require_once('../../_footer.php'); ?>
