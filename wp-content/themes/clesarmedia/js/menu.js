( function( $ ) {
$(document).ready(function() {
  var menu1Visible = false;
  $('.menu_bar_top button').click(function() {
    if (menu1Visible) {
      $('.menu').css({'left':'-200%'});
      menu1Visible = false;
      return;
    }
    $('.menu').css({'left':'0%'});
    menu1Visible = true;
  });
  $('.menu').click(function() {
    $(this).css({'left':'-200%'});
    menu1Visible = false;
  });
});
} )( jQuery );