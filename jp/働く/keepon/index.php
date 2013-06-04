<?
  $title='Keepon';
  $description='Design, Architecture and experience of the third-party Kickoff client for iOS';
  require_once('../../header.inc.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $projects_total ?>の<? echo $project_number ?></span>
  <span>
    <a href="../kent-and-curwen/">前</a> &thinsp;/&thinsp;
    <a href="../hash-todo/">次</a>
  </span>
</div>

<div class="project" id="keepon">

  <div class="clear txt">
    <h2>Keepon</h2>
    <h6>Icon design and app architecture</h6>
    <p>
      This iPhone application is a client for the Mac application
      <a href="http://v1.kickoffapp.com/" target="_blank">Kickoff</a>. Kickoff
      is a project manager tool with shared notes, chat, tasks and files. Keepon
      seeks to make all information available on-the-go. We wanted to
      keep the transition between the desktop and the mobile app simple and
      intuitive, sharing a similar structure and hierarchy but using the native
      components and established navigation systems.
    </p>
    <p>
      The current version, 1.1, has improved usability on the original version
      and fewer bugs. The next version of the app, 1.2, will include a
      completely bespoke <acronym title="User Interface">UI</acronym>.
    </p>
    <p class="icon-globe-1">
      <a href="https://itunes.apple.com/us/app/keepon/id533319825?ls=1&mt=8"
      target="_blank">Keepon on the App Store</a>
    </p>
  </div>
  <img class="side" width="1450" height="1100"
    src="/media/images/keepon-app-icon.jpg">

  <img class="full" width="1700" height="1100"
    src="/media/images/keepon-wireframe-a.png"
    alt="">
  <img class="full" width="1700" height="1100"
    src="/media/images/keepon-wireframe-b.png"
    alt="">
  <img class="full" width="1700" height="1100"
    src="/media/images/keepon-wireframe-c.png"
    alt="">

</div>

<? require_once('../../footer.inc.php'); ?>
