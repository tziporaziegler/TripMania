$(document).ready(function() {

	// When mouse rolls over
	$("nav ul li a").mouseover(function() {
		$(this).stop().animate({
			height : '150px'
		}, {
			queue : false,
			duration : 600,
			easing : 'easeOutBounce',
		})
	});

	// When mouse is removed
	$("nav ul li a").mouseout(function() {
		$(this).stop().animate({
			height : '50px'
		}, {
			queue : false,
			duration : 600,
			easing : 'easeOutBounce'
		})
	});

});