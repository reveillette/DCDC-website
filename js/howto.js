// Title slider

var howtos = [
	"Start a Social Media Marketing Strategy?",
	"Organize a Neighborhood Cleanup Day?",
	"Prepare a Grant Proposal?",
	"Outreach to My Community?"
]; 

$(document).ready(function() { 
	for (var i=0; i< howtos.length; i++) {
		$("h2").fadeToggle(1000);
		$("#flip").text(howtos[i]);
		$("h2").fadeToggle(1000);
		console.log(howtos[i]);
		console.log(i);
	}
});	


// Login window
$(document).ready(function() { 
	$("#login-button").click(function() {
		$("#screen").fadeIn();
		$("#login-window").fadeIn();
	});

	$(".close-button").click(function() {
		$("#screen").fadeOut();
		$("#login-window").fadeOut();
	});
});


// // Main screen scroll to place

// function scrolljump(id){
//     var divid = document.getElementById(id);
//     divid.scrollIntoView({behavior: "smooth"});
//     return false;
// }

// $(window).scroll(function() { 
// 	scrolljump("main");
// });



//		$(".title>h2").slideToggle(1000);
//		$("#flip").text("Start a Social Media Marketing Strategy?");
//		$(".title>h2").slideToggle(1000);
//		$("#flip").text("Find Resources for My Small Business?");
//		$(".title>h2").slideToggle(1000);	

