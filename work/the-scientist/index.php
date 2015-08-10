<?php
  $page='Project';
  $title='The Scientist';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../auria/">Previous</a> &thinsp;/&thinsp;
    <a href="../creative-space/">Next</a>
  </span>
</div>

<div class="project" id="the-scientist">

  <img class="full" width="1264" height="775"
    src="/media/images/the-scientist-screens.jpg">

  <img class="clear side" width="1008" height="1008"
    src="/media/images/the-scientist-app-icon.png">
  <div class="txt">
    <h2>The Scientist</h2>
    <h6>App Icon and User Interface Design</h6>
    <p>
      <a href="https://itunes.apple.com/us/app/the-scientist/id657192313?l=en&mt=8"
      target="_blank">The Scientist</a> is a scientific news aggregator reader,
      for feeds in the model of
      <a href="https://news.ycombinator.com" target="_blank">Hacker News</a> or
      <a href="https://news.layervault.com" target="_blank">Designer News.</a>
      The design shines in its typographical attention to detail.
      For this <acronym title="Minimum Viable Product">MVP</acronym> only the
      listing and reading functionalities. I worked on a wireframe that caters
      for night mode, favouriting, reading marks, log in, commenting, and more
      features that ensure the future success of the reader. The typefaces used were
      <a href="http://www.google.com/fonts/specimen/PT+Sans+Narrow" target="_blank">PT Sans Narrow</a> and
      <a href="http://www.google.com/fonts/specimen/PT+Serif" target="_blank">PT Serif</a>.
    </p>
    <p>
      This application was developed by
      <a href="http://iterar.co/" target="_blank">Iterar</a> and is a native iOS application
      <a href="https://itunes.apple.com/us/app/the-scientist/id657192313?l=en&mt=8"
      target="_blank">available at the App Store</a> for £0.69.
    </p>
    <p class="icon-globe-1">
      <a href="https://itunes.apple.com/us/app/the-scientist/id657192313?l=en&mt=8"
        target="_blank">The Scientist on the App Store</a>
    </p>
  </div>

  <img class="full" width="1264" height="687"
    src="/media/images/the-scientist-wireframes.png">

  <img class="full" width="1264" height="787"
    src="/media/images/the-scientist-user-photo.jpg">

</div>

<?php require_once('../../_footer.php'); ?>
