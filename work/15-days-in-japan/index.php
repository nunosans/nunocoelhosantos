<?php
  $page='Project';
  $title='15 Days in Japan';
  $description='A live blog of the day-to-day of my travels in the land of the
    rising sun';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../plenti/">Previous</a> &thinsp;/&thinsp;
    <a href="../auria/">Next</a>
  </span>
</div>

<div class="project" id="15-days-in-japan">

  <img class="full" width="1264" height="680"
    src="/media/images/15-days-in-japan-on-ipad.jpg">

  <img class="clear side" width="1008" height="669"
    src="/media/images/15-days-in-japan-photo-1.jpg">
  <div class="txt">
    <h2>15 Days in Japan</h2>
    <h6>Personal Project, Design and Development</h6>
    <p>
      This is my personal travel blog. On
      <a href="http://15daysinjapan.com" target="_blank">15 Days in Japan</a>
      I documented every day of my trip, and uploaded the posts at the end of the
      day for my friends and family to follow. The model is inspired by the
      incredible <a href="http://19daysinjapan.com" target="_blank">19 Days in
      Japan</a>, which is part of a much bigger and better executed project by
      <a href="http://mutelife.com" target="_blank">Filipe</a> and
      <a href="http://akanekinomoto.com" target="_blank">Lena</a>.
    </p>
  </div>

  <div class="txt clear">
    <p>
      Each day had its own blog post and the user could access a list of all
      the days on a side menu.
    </p>
    <p>
      I built this as a static website using the
      <a href="http://middlemanapp.com" target="_blank">Middleman</a>
      framework. I wrote a custom
      <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
      function to server high resolution images if necessary after small ones
      have been loaded in view. I also wrote a
      <a href="http://www.adobe.com/uk/products/photoshop.html" target="_blank">Photoshop</a>
      droplet to enhance my  photos, resize them in the multiple sizes served
      by the website and save them for the web.
    </p>
    <p class="icon-globe-1">
      <a href="http://15daysinjapan.com/"
      target="_blank">15 Days in Japan</a>
    </p>
  </div>
  <video class="side" width="1264" height="790" muted autoplay loop>
    <source src="/media/videos/15-days-in-japan-sidebar.webm" type="video/webm">
    <source src="/media/videos/15-days-in-japan-sidebar.mp4"  type="video/mp4">
    <source src="/media/videos/15-days-in-japan-sidebar.ogg"  type="video/ogg">
    <source src="/media/videos/15-days-in-japan-sidebar.mov"  type="video/mov">
  </video>


  <img class="clear side" width="1008" height="669"
    src="/media/images/15-days-in-japan-photo-2.jpg">

  <img class="clear side right" width="1008" height="669"
    src="/media/images/15-days-in-japan-photo-3.jpg">

  <!-- Flat image of the site -->
  <img class="site-plan" width="1440" height="7300"
    src="/media/images/15-days-in-japan-website-plan.jpg">

</div>

<?php require_once('../../_footer.php'); ?>
