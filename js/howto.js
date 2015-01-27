$(document).ready(function() { 
	$("h2").slideUp(400);
	$("#flip").text("Prepare a Grant Proposal?");
	$("h2").slideDown(1000);
	$("h2").slideUp(1000);
	$("#flip").text("Start a Social Media Marketing Strategy?");
	$("h2").slideDown(1000);

	$(window).onScroll(function() { 
		$("#main").css("position", "absolute");
		$("#main").css("top", 0);
});

});


//		$(".title>h2").slideToggle(1000);
//		$("#flip").text("Start a Social Media Marketing Strategy?");
//		$(".title>h2").slideToggle(1000);
//		$("#flip").text("Find Resources for My Small Business?");
//		$(".title>h2").slideToggle(1000);	

