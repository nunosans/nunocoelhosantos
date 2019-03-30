
$(document).ready(function() {

  $('.instagram').click(function() {
    $(this).next().toggleClass('open');
  });

  $('footer .btn').click(function() {
    var tab = $(this).attr('title');
    $('header').removeClass().addClass(tab);
    $('footer').removeClass().addClass(tab);
  })

});
