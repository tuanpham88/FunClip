( function( $ ) {
$(document).ready(function() {
  var menuVisible = false;
  $('.menu2_bar button').click(function() {
    if (menuVisible) {
      $('.menu2').css({'left':'-200%'});
      menuVisible = false;
      return;
    }
    $('.menu2').css({'left':'0%'});
    menuVisible = true;
  });
  $('.menu2').click(function() {
    $(this).css({'left':'-200%'});
    menuVisible = false;
  });
});
} )( jQuery );