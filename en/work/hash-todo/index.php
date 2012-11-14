<?
  $title='#todo';
  $description='User interface and experience of the Twitter-powered to-do list app';
  require_once('../../header.inc.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $project_number ?> of <? echo $projects_total ?></span>
  <span>
    <a href="../keepon/">Previous</a> &thinsp;/&thinsp;
    <a href="../norman-hartnell/">Next</a>
  </span>
</div>

<div class="project" id="hash-todo">

  <img class="full" width="1080" height="1080" src="/media/images/hash-todo-main.jpg">

  <div class="clear txt">
    <h2>#todo</h2>
    <h6>UI, UX, Icon Design</h6>
    <p>
      Interface design for the Twitter-powered to-do list. #todo, pronounced "hash to-do",
      is an utility app that let's you share things you always wanted to do with your
      twitter network and keeps all your dreams, tasks or wishes in one single view.
      This application was developed for iOS and Android.
    </p>
    <p class="icon-globe-1">
      <a href="https://itunes.apple.com/us/app/todo-twitter-powered-to-do/id538969906?mt=8"
      target="_blank">#todo on the App Store</a>
    </p>
    <!--<p class="icon-globe-1">
      <a href=""
      target="_blank">#todo on the Android Market</a>
    </p>-->
  </div>

  <img class="no-margin right half" width="624" height="870" src="/media/images/hash-todo-ios-screen-1.jpg">
  <img class="no-margin clear half" width="624" height="870" src="/media/images/hash-todo-ios-screen-2.jpg">
  <img class="no-margin half"       width="624" height="870" src="/media/images/hash-todo-ios-screen-3.jpg">
  <img class="no-margin clear half" width="624" height="870" src="/media/images/hash-todo-ios-screen-4.jpg">
  <img class="half"                 width="624" height="870" src="/media/images/hash-todo-ios-screen-5.jpg">

  <img class="no-margin clear half" width="624" height="1000" src="/media/images/hash-todo-android-screen-1.jpg">
  <img class="no-margin half"       width="624" height="1000" src="/media/images/hash-todo-android-screen-2.jpg">

</div>

<? require_once('../../footer.inc.php'); ?>
