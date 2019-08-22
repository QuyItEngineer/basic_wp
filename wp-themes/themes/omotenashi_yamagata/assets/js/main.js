jQuery(function($){
	var offset = 500;
  	var duration = 500;
  	var to_top = $('#back-to-top');
	$(window).scroll(function() {
	    $(this).scrollTop() > offset?$('#back-to-top').fadeIn(duration):$('#back-to-top').fadeOut(duration);
	});
	
	$('#back-to-top').click(function (event) {
	    event.preventDefault();
	    $('html, body').animate({scrollTop: offset}, 500);
	});
})