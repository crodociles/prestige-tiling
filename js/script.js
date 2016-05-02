$(document).ready(function(){
	$('#menu-small').click(function(){
		$('.menu-small-drop').toggleClass("hidden");
	});
});

$(function() {
	var demo1 = $("#slider").slippry({
		// transition: 'fade',
		// useCSS: true,
		// speed: 1000,
		// pause: 3000,
		// auto: true,
		// preload: 'visible',
		// autoHover: false
	});

	$('.stop').click(function () {
		demo1.stopAuto();
	});

	$('.start').click(function () {
		demo1.startAuto();
	});

	$('.prev').click(function () {
		demo1.goToPrevSlide();
		return false;
	});
	$('.next').click(function () {
		demo1.goToNextSlide();
		return false;
	});
	$('.reset').click(function () {
		demo1.destroySlider();
		return false;
	});
	$('.reload').click(function () {
		demo1.reloadSlider();
		return false;
	});
	$('.init').click(function () {
		demo1 = $("#slider").slippry();
		return false;
	});
});