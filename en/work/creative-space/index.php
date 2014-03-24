<?
  $title='Creative Space';
  $description='';
  require_once('../../header.inc.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $project_number ?> of <? echo $projects_total ?></span>
  <span>
    <a href="../the-scientist/">Previous</a> &thinsp;/&thinsp;
    <a href="../instagram-redesign-brief/">Next</a>
  </span>
</div>

<? require_once('../../../_spinner.html'); ?>

<div class="project" id="creative-space">

  <img class="full" width="1008" height="456"
      src="/media/images/creative-space-on-ipad.jpg">

  <video class="clear side" width="1264" height="1094" autoplay="autoplay" autoplay loop>
    <source src="/media/videos/creative-space-homepage.webm" type="video/webm">
    <source src="/media/videos/creative-space-homepage.mp4"  type="video/mp4">
    <source src="/media/videos/creative-space-homepage.ogg"  type="video/ogg">
    <source src="/media/videos/creative-space-homepage.mov"  type="video/mov">
  </video>
  <div class="txt">
    <h2>15 Days in Japan</h2>
    <h6>Personal Project, Design and Development</h6>
    <p>
      Each day had its own blog post and the user could access a list of all
      the days on a side menu.
    </p>
  </div>

  <img class="full" width="1264" height="764"
    src="/media/images/creative-space-mobile.jpg">

  <div class="txt clear">
    <p>
      Each day had its own blog post and the user could access a list of all
      the days on a side menu.
    </p>
    <p class="icon-globe-1">
      <a href="http://15daysinjapan.com/"
      target="_blank">15 Days in Japan</a>
    </p>
  </div>
  <img class="side no-margin" width="1008" height="674"
    src="/media/images/creative-space-cms-1.jpg">

  <img class="clear side right" width="1008" height="674"
    src="/media/images/creative-space-cms-2.jpg">

  <video class="clear half" id="special-4"
    width="624" height="368" autoplay="autoplay" autoplay loop>
    <source src="/media/videos/creative-space-cms-link-popup.webm" type="video/webm">
    <source src="/media/videos/creative-space-cms-link-popup.mp4"  type="video/mp4">
    <source src="/media/videos/creative-space-cms-link-popup.ogg"  type="video/ogg">
    <source src="/media/videos/creative-space-cms-link-popup.mov"  type="video/mov">
  </video>
  <video class="half" id="special-5"
    width="624" height="368" autoplay="autoplay" autoplay loop>
    <source src="/media/videos/creative-space-cms-logo-hover.webm" type="video/webm">
    <source src="/media/videos/creative-space-cms-logo-hover.mp4"  type="video/mp4">
    <source src="/media/videos/creative-space-cms-logo-hover.ogg"  type="video/ogg">
    <source src="/media/videos/creative-space-cms-logo-hover.mov"  type="video/mov">
  </video>


</div>

<? require_once('../../footer.inc.php'); ?>
