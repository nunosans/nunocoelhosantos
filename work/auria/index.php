<?
  $title='Auria';
  $description='Website for Auria, the London-based swimswear designer';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $project_number ?> of <? echo $projects_total ?></span>
  <span>
    <a href="../15-days-in-japan/">Previous</a> &thinsp;/&thinsp;
    <a href="../the-scientist/">Next</a>
  </span>
</div>

<? require_once('../../_spinner.php'); ?>

<div class="project" id="auria">

  <video class="full" width="1264" height="711" autoplay="autoplay" loop="loop">
    <source src="/media/videos/auria-promo-video.webm" type="video/webm">
    <source src="/media/videos/auria-promo-video.mp4"  type="video/mp4">
    <source src="/media/videos/auria-promo-video.ogg"  type="video/ogg">
    <source src="/media/videos/auria-promo-video.mov"  type="video/mov">
  </video>

  <img class="clear side" width="1008" height="504"
    src="/media/images/auria-logo-3.png">
  <div class="txt">
    <h2>Auria</h2>
    <h6>Logo design, Web Design, Front-end Web Development</h6>
    <p>
      This is the website for
      <a href="http://auria-london.com" target="_blank">Auria</a>, an
      eco-friendly swimwear brand led by designers
      <a href="http://showtime.arts.ac.uk/Dianaauria" target="_blank">Diana Auria</a>
      and <a href="http://margotbowman.com" target="_blank">Margot Bowman</a>.
      Auria’s swimmer collections have been incredibly popular with their
      young and vibrand style as well as their ecological atitude by using only
      recycled materials and environmentally friendly means of production.
    </p>
    <p>
      The work on the logo was a small improvement over the original work by
      <a href="http://lucyverrechia.com" target="_blank">Lucy Verrechia</a>
      to bring thicker lines and better readability.
    </p>
  </div>

  <? require_once('../../_spinner.php'); ?>

  <div class="txt clear">
    <p>
      This project had a small budget and a goal of showcasing the
      photography at its best. The website aims to draw in the user with a
      simple grid and interesting use of layout, letting the content breathe
      and seduce the user. The navigation is aimed to be as simple as possible,
      the user should not have to struggle with understanding the navigation of
      finding information. Everything is given as a first impression.
    </p>
    <p>
      This is a static website built with
      <a href="http://middlemanapp.com/" target="_blank">Middleman</a>
      framework and a custom 6 column grid system. I wrote a Photoshop script
      to resize and save all the artwork into 12 different sizes for web to fit
      the 6 column grid in standard and high-resolution screens. The typeface is
      <a href="http://www.losttype.com/edmondsans/" target="_blank">Edmonsans</a> by
      <a href="http://losttype.com/" target="_blank">LostType</a>.
    </p>
    <p class="icon-globe-1">
      <a href="http://auria-london.com/" target="_blank">Auria</a>
    </p>
  </div>
  <video class="side" width="1008" height="674" autoplay="autoplay" loop="loop">
    <source src="/media/videos/auria-website-on-screen.webm" type="video/webm">
    <source src="/media/videos/auria-website-on-screen.mp4"  type="video/mp4">
    <source src="/media/videos/auria-website-on-screen.ogg"  type="video/ogg">
    <source src="/media/videos/auria-website-on-screen.mov"  type="video/mov">
  </video>

  <img class="clear side" width="624" height="916"
    src="/media/images/auria-photo-1.jpg">
  <img class="clear side" width="624" height="916"
    src="/media/images/auria-photo-2.jpg">

  <img class="full" width="1264" height="1896"
    src="/media/images/auria-photo-3.jpg">

  <!-- Site plan -->

</div>

<? require_once('../../_footer.php'); ?>
