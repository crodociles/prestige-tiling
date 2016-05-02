$(document).ready(function(){
	$('.bathroom-gallery-open').click(function(){
		$('.bathroom-cover').animate({height:"0px"},1000);
		$('.bathroom-cover-title').css("visibility", "hidden");
		$('.bathroom-cover-subtitle').css("visibility", "hidden");
		$('.bathroom-gallery-open').css("visibility", "hidden");
	});
	$('.bathroom-gallery-close').click(function(){
		$('.bathroom-cover').animate({height:"450px"},1000);
		$('.bathroom-cover-title').css("visibility", "visible");
		$('.bathroom-cover-subtitle').css("visibility", "visible");
		$('.bathroom-gallery-open').css("visibility", "visible");
	});
})

$(document).ready(function(){
	$('.kitchen-gallery-open').click(function(){
		$('.kitchen-cover').animate({height:"0px"},1000);
		$('.kitchen-cover-title').css("visibility", "hidden");
		$('.kitchen-cover-subtitle').css("visibility", "hidden");
		$('.kitchen-gallery-open').css("visibility", "hidden");
	});
	$('.kitchen-gallery-close').click(function(){
		$('.kitchen-cover').animate({height:"450px"},1000);
		$('.kitchen-cover-title').css("visibility", "visible");
		$('.kitchen-cover-subtitle').css("visibility", "visible");
		$('.kitchen-gallery-open').css("visibility", "visible");
	});
})

$(document).ready(function(){
	$('.flooring-gallery-open').click(function(){
		$('.flooring-cover').animate({height:"0px"},1000);
		$('.flooring-cover-title').css("visibility", "hidden");
		$('.flooring-cover-subtitle').css("visibility", "hidden");
		$('.flooring-gallery-open').css("visibility", "hidden");
	});
	$('.flooring-gallery-close').click(function(){
		$('.flooring-cover').animate({height:"450px"},1000);
		$('.flooring-cover-title').css("visibility", "visible");
		$('.flooring-cover-subtitle').css("visibility", "visible");
		$('.flooring-gallery-open').css("visibility", "visible");
	});
})

$(document).ready(function(){
	$('.misc-gallery-open').click(function(){
		$('.misc-cover').animate({height:"0px"},1000);
		$('.misc-cover-title').css("visibility", "hidden");
		$('.misc-cover-subtitle').css("visibility", "hidden");
		$('.misc-gallery-open').css("visibility", "hidden");
	});
	$('.misc-gallery-close').click(function(){
		$('.misc-cover').animate({height:"450px"},1000);
		$('.misc-cover-title').css("visibility", "visible");
		$('.misc-cover-subtitle').css("visibility", "visible");
		$('.misc-gallery-open').css("visibility", "visible");
	});
})