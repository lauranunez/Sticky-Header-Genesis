jQuery(function( $ ){

	$(".site-header").after('<div class="bumper"></div>');

	$(window).scroll(function () {
		if ($(document).scrollTop() > 10
	 ) {
			$('.site-header').addClass('shrink');
		} else {
			$('.site-header').removeClass('shrink');
		}
	});

});
