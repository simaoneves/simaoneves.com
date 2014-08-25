$(document).ready(function(){

	// Cache and setup slider
	slider = $('.bxslider').bxSlider({
		pager: false,
		adaptiveHeight: true,
		controls: false
	});

	// Cache slider buttons
	next = $('#next');
	prev = $('#prev');

	// Checks if one of the form elements is focused or not
	// Used to see if there are conflicts with slider controls and form
	function isFocused() {
		return ($('#name').is(':focus') || $('#email').is(':focus') || $('#message').is(':focus'));
	}

	// custom key presses for slider
	$(document).keydown(function(key) {
		var keyPressed = parseInt(key.which,10);
		if (keyPressed === 37 && !isFocused()) {
			slider.goToPrevSlide();
		}
		else if (keyPressed === 39 && !isFocused()) {
			slider.goToNextSlide();
		}
	});

	//custom controls:
	next.click(function() {
		slider.goToNextSlide();
	});
	prev.click(function() {
		slider.goToPrevSlide();
	});

});