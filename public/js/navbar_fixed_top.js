$(document).ready(function() {
	$(this).scroll(function() {
		if(window.pageYOffset > 70) {
			$('.navbar-default').addClass('navbar-fixed-top');
			$('.navbar-default').css('opacity','0.9');
		} else {
			$('.navbar-default').removeClass('navbar-fixed-top');
			$('.navbar-default').css('opacity','1');
		}
	});
});