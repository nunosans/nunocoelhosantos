<?php
  $page='Project';
  $title='Thread V2';
  $description='';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    Previous &thinsp;/&thinsp;
    <a href="../15-days-in-japan/">Next</a>
  </span>
</div>

<div class="project" id="thread-v2">

  <!-- Home desktop and mobile interface image -->
  <img class="clear side" width="1008" height="730"
    src="/media/images/thread-v2-home.jpg"
    alt="Home desktop and mobile interface image">
  <div class="txt">
    <h2>Thread V2</h2>
    <h6>Full-time as Product Designer</h6>
    <p>
      Since I started working at Thread, we started thinking what the next
      version of the Thread experience would be and how we could achieve it.
      My role involved a lot of the product thinking and all of the user
      experience design, user interface design and front-end web development.
    </p>
    <p>
      Thread is a menswear styling service where users, mostly men or their
      partners, sign up to get a personal stylist for free.
    </p>
  </div>

  <!-- Home desktop and mobile interface image -->
  <img class="half no-margin clear" width="624" height="450"
    src="/media/images/thread-v2-wireframe-tour.png"
    alt="Home desktop and mobile interface image">

  <!-- Home desktop and mobile interface image -->
  <img class="half no-margin" width="624" height="450"
    src="/media/images/thread-v2-wireframe-price-ranges.png"
    alt="Home desktop and mobile interface image">

  <!-- Home desktop and mobile interface image -->
  <img class="half clear" width="624" height="450"
    src="/media/images/thread-v2-wireframe-quickview.png"
    alt="Home desktop and mobile interface image">

  <!-- Home desktop and mobile interface image -->
  <img class="half" width="624" height="450"
    src="/media/images/thread-v2-wireframe-messages.png"
    alt="Home desktop and mobile interface image">

  <div class="clear txt">
    <p>
      The key areas of the website were the registration, on-boarding,
      messaging, browsing, recommendations and purchase. We refined all these
      areas and dedicated most of our energy to iterate and experiment on
      the recommendations sent by the stylist to the user, both visually
      and in terms of content.
    </p>
  </div>
  <div class="txt">
    <p>
      Above you can see some mockups of this version of the website on desktop.
      All the flows and screens were mocked up in desktop and mobile to give
      the team a clear picture on where we were headed. It helped create
      a holistic view of the system and produce great discussions. These
      were also the mockups we used to build prototypes to test with users.
    </p>
  </div>

  <!-- Browse desktop interface image -->
  <video class="full site" width="1418" height="980" muted autoplay loop>
    <source src="/media/videos/thread-v2-browse.mp4"  type="video/mp4">
    <source src="/media/videos/thread-v2-browse.webm" type="video/webm">
    <source src="/media/videos/thread-v2-browse.ogg"  type="video/ogg">
  </video>

  <!-- Add to cart animation on desktop video -->
  <video class="full site" width="1418" height="980" muted autoplay loop>
    <source src="/media/videos/thread-v2-add-to-cart.mp4"  type="video/mp4">
    <source src="/media/videos/thread-v2-add-to-cart.webm" type="video/webm">
    <source src="/media/videos/thread-v2-add-to-cart.ogg"  type="video/ogg">
  </video>

  <div class="clear txt">
    <p>
      Some of my favourite details in the new interface of Thread are the
      icons at the top of the Browse experience. These were designed to go
      together perfectly well with the design of the logo and typeface of the
      website.
    </p>
    <p>
      Also on Browse, the filters appear as you hover on the labels
      and load new results instantly when you click on them. This makes a very
      fast and intuitive experience in a very clean interface.
    </p>
  </div>
  <div class="txt">
    <p>
      Another detail I quite like is when a user adds an item to the cart.
      If a user is viewing an item on the quickview modal and adds an item to
      the cart, that overlay slides down and the cart badge appears in the
      navigation as you can see from the video above.
    </p>
    <p>
      This is meaningful because not only clearly indicates what the next
      step on the flow is, proceeding to checkout by clicking on the cart icon,
      but it also resembles putting a clothing item inside of a shopping bag.
    </p>
  </div>

  <!-- Home mobile video -->
  <video class="clear half" width="624" height="1000" muted autoplay loop>
    <source src="/media/videos/thread-v2-mobile-home.mp4"  type="video/mp4">
    <source src="/media/videos/thread-v2-mobile-home.webm" type="video/webm">
    <source src="/media/videos/thread-v2-mobile-home.ogg"  type="video/ogg">
  </video>
  <!-- Browse mobile video -->
  <video class="half" width="624" height="1000" muted autoplay loop>
    <source src="/media/videos/thread-v2-mobile-browse.mp4"  type="video/mp4">
    <source src="/media/videos/thread-v2-mobile-browse.webm" type="video/webm">
    <source src="/media/videos/thread-v2-mobile-browse.ogg"  type="video/ogg">
  </video>

  <div class="clear txt">
    <p>
      Thread, as a team, moves incredibly fast and is constantly changing
      how the product looks and works. At the same time, most of the design
      is tested in different groups of users. So if you are an existing user
      you might have not seen any of this work and if you register now you
      might see a completely new version of the website.
    </p>
    <p class="icon-globe-1">
      <a href="https://thread.com/"
      target="_blank">Thread.com</a>
    </p>
  </div>

</div>

<?php require_once('../../_footer.php'); ?>
