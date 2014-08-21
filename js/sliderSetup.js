$(document).ready(function(){

	// setup slider
	slider = $('.bxslider').bxSlider({
		pager: false,
		adaptiveHeight: true,
		controls: false
	});

	// custom key presses for slider
	$(document).keydown(function(key) {
		var keyPressed = parseInt(key.which,10);
		if (keyPressed === 37) {
			slider.goToPrevSlide();
		}
		else if (keyPressed === 39) {
			slider.goToNextSlide();
		}
	});

	//custom controls:
	$('#next').click(function() {
		slider.goToNextSlide();
	});
	$('#prev').click(function() {
		slider.goToPrevSlide();
	});

});