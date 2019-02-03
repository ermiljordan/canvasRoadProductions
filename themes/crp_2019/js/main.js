(function($) {
$('#hamburger-icon_open').click(function(event) {
  event.stopPropagation();
  $(this).hide();
  $('#close-icon').show();
  $('.hamburger-menu_wrapper').animate({height:'show'}, 500, function() {});
  });
  $('#close').click(function(event) {
    event.stopPropagation();
    $(this).hide();
    $('#hamburger-icon_openn').show();
    $('.hamburger-menu_wrapper').animate({ height: 'hide' }, 500, function() {});
});

})(jQuery);