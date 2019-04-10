(function($) {
$('#hamburger-icon_open').click(function(event) {
  event.stopPropagation();
  $(this).hide();
  $('#close-icon').show();
  $('.hamburger-menu_wrapper').animate({height:'show'}, 500, function() {});
  });
  $('#close-icon').click(function(event) {
    event.stopPropagation();
    $(this).hide();
    $('#hamburger-icon_open').show();
    $('.hamburger-menu_wrapper').animate({ height: 'hide' }, 500, function() {});
});

$('.youtube-gallery--listing a').on('click', function(event) {
  event.stopPropagation();
  $('.youtube-gallery--listing .active').removeClass('active');
  $(this).addClass('active');
  $('.youtube-gallery--player iframe').attr('src', 'https://www.youtube.com/embed/' + $(this).data('id') + '?rel=0&showinfo=0' );
  $('.youtube-gallery--player h4').text( $(this).find('.title').text());
});

// document.getElementById("scroll-banner").animate([
//   // keyframes
//   { transform: 'translateX(600px)' }, 
//   { transform: 'translateX(0px)' },
//   { transform: 'translateX(0px)' }
// ], { 
//   // timing options
//   duration: 3000,
//   iterations: Infinity
// });
})(jQuery);
