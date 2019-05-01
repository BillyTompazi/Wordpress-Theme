$(function () {
  $(document).scroll(function () {
	  var $nav = $(".my-nav");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});

$("button.navbar-toggler").click(function(){
  $('nav.my-nav').toggleClass('toggle-nav');
})
