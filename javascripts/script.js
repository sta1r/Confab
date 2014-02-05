// hand-rolled scrollTo function
function scrollTo(selector) {
	$('html, body').animate({
		scrollTop: $(selector).offset().top
	}, 300);
}

// document ready
$(function() {

	// section scrollers
	$('.scroll-btn').click(function() {
		var url = $(this).attr('href');
		scrollTo(url);
		return false;
	});

	$('.top-bar').scrollspy({
		//offset: -10
	});



});