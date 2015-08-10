<?php
  $page='Project';
  $title='Creative Space';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../the-scientist/">Previous</a> &thinsp;/&thinsp;
    <a href="../instagram-redesign-brief/">Next</a>
  </span>
</div>

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
    <h2>Creative Space</h2>
    <h6>Front-end and Back-end Web Development</h6>
    <p>
      I worked with
      <a href="http://roandcostudio.com" target="_blank">RoAndCo</a> for
      <a href="http://creativespace.us/" target="_blank">Creative Space</a>
      to build their brand new website. With the help from
      <a href="http://joaomagalhaes.me/" target="_blank">João Magalhães</a>,
      I implemented the design thought for every screen and input device and
      created a custom Content Management System for the team at Creative Space
      to edit the text on the website, update images and add new blog posts or
      press entires.
    </p>
  </div>

  <img class="full" width="1264" height="764"
    src="/media/images/creative-space-mobile.jpg">

  <div class="txt clear">
    <p>
      This is was a successful collaboration of three teams in three different
      timezones executed within time and budget with a great result. The website
      was featured on
      <a href="http://www.siteinspire.com" target="_blank">siteInspire</a>
      and other web design showcase networks.
    </p>
    <p>
      The website was build in
      <a href="http://rubyonrails.org" target="_blank">Ruby on Rails</a>,
      it supports
      <a href="http://en.wikipedia.org/wiki/Internet_Explorer_8" target="_blank">Internet Explorer 8</a>
      and above, modern desktop browsers and most mobile browsers.
    </p>
    <p class="icon-globe-1">
      <a href="http://creativespace.us/"
      target="_blank">Creative Space</a>
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

<?php require_once('../../_footer.php'); ?>
