// Title slider
		var howtos = [
			"Start a Social Media Marketing Strategy?",
			"Organize a Neighborhood Cleanup Day?",
			"Prepare a Grant Proposal?",
			"Outreach to My Community?"
		]; 

		function fadeTitle(title) {

		};

		$(document).on('ready', function() { 
				event.preventDefault();
					for (var i=0; i< howtos.length; i++) {
						var text = howtos[i];
						console.log(text);
						console.log(i);			
					$("#flip").fadeToggle(3000);
					$("#flip").text(text);
					};
		});	

// Overlays

		function addScreen() { 
			$("body").append("<div id='screen'></div>");	
		};

		function addLoginWindow() {
			$("body").append("<div class='overlay' id='login-window'><img class='close-button' src='assets/close.svg'><h5>Login</h5><a id='register-link' href='#'><strong>Create an account</strong></a><form action='action_page.php'><input type='email' name='email' placeholder='Email'><input type='password' name='password' placeholder='Password'><br><br><br><input type='submit' name='Sign in' value='Sign in'></form><button class='social-button' id='google'></button><button class='social-button' id='twitter'></button></div>");
		}

		function addDownloadWindow(filename) {
			$("body").append("<div class='overlay' id='download-window'><img class='close-button' src='assets/close.svg'><h5>Download</h5></a><form name='download-form'><input type='text' name='name' placeholder='Name or Organization'><input type='email' name='email' placeholder='Email'><input type='text' name='zip' placeholder='Zip Code'><br><br><br><input type='submit' id='download-now' name='download' value='Download'></form></div>");
		}

		function addRegisterWindow() {
			$("body").append("<div class='overlay' id='register-window'><img class='close-button' src='assets/close.svg'><form action='action_page.php'><div><h5>Register</h5><input type='text' name='name' placeholder='Name or Organization'><input type='email' name='email' placeholder='Email'><input type='password' name='password' placeholder='Password'><br><br><br></div><div><h5>We'd love to know more</h5><input type='text' name='title' placeholder='Title'><input type='text' name='role' placeholder='Role'><input type='text' name='zip' placeholder='Zip Code'><br><br><br></div><button class='social-button' id='google'></button><button class='social-button' id='twitter'></button><input type='submit' name='Sign in' value='Submit'></form></div>");
		}

		function addShareWindow() {
			$("body").append("<div class='overlay' id='share-window'><img class='close-button' src='assets/close.svg'><form action='action_page.php'><div><h5>Get the link</h5><input readonly type='text' name='link' placeholder='http://bit.ly/3jdl98'><input type='submit' id='copy-link' name='copy' value='Copy'></div><div><h5>Share</h5><a href='http://www.twitter.com'><img src='assets/icons/twitter.png'></a><a href='https://plus.google.com'><img src='assets/icons/google.png'></a><a href='http://www.tumblr.com'><img src='assets/icons/tumblr.png'></a><a href='http://www.facebook.com'><img src='assets/icons/facebook.png'></a></div><div><h5>Send an email</h5><input type='email' name='email' placeholder='Enter an email address'><input type='submit' name='send' value='Send'></form></div></div>");
		}
		function addSearchWindow(filename) {
			$("body").append("<div class='overlay' id='search-window'><img class='close-button' src='assets/close.svg'><h5>Search for a guide</h5></a><form name='search-form'><input type='search' name='search' placeholder='Search'><br><br><br><input type='submit' id='search-button' name='search' value='Search'></form></div>");
		}

		function showOverlay(trigger, overlay, functionName) {			
			$(document).on('click', trigger, function(event) {
				event.preventDefault();
				if ($("#screen").length != 0) {
					$("#screen").fadeIn();
				} else {
					addScreen();
					$("#screen").fadeIn();
				};	
				if ($(overlay).length != 0) {
					$(overlay).fadeIn();
				} else {
					functionName();
					$(overlay).fadeIn();
				};
			});
		}
			
		// Close button 
		$(document).on('click', '.close-button', function(event) {
		    event.preventDefault();
			$("#screen").fadeOut();
			$(".overlay").fadeOut();
		});

		$(document).on('click', '#screen', function(event) {
			event.preventDefault();
			$("#screen").fadeOut();
			$(".overlay").fadeOut();
		});

		// Login overlay
		showOverlay("#login-button", "#login-window", addLoginWindow);
			
		// Register overlay 
		showOverlay("#register-button-top", "#register-window", addRegisterWindow);
		showOverlay("#register-link", "#register-window", addRegisterWindow);
		showOverlay("#register-button", "#register-window", addRegisterWindow);


		// Register overlay 
		showOverlay("#search", "#search-window", addSearchWindow);

		
// Form validation
function validateForm(formName) {
	var email = document.forms[formName]["email"].value; 
    var name = document.forms[formName]["name"].value;
    var zip = document.forms[formName]["zip"].value;
    var title = document.forms[formName]["title"].value;
    var role = document.forms[formName]["role"].value;
    var password = document.forms[formName]["password"].value;

    return false;
    // if (name == null || name == "") {
    //     alert("Please provide your full name");
    //     return false;
    // }
}

// Library buttons (like, download, share)


		// Likes
		$(".likes").click(function() {
		    $(this).toggleClass("likes").toggleClass("isliked");
		    var i = $(this).text();
		    i++;
		    $(this).text(i);
		});

		$(".isliked").click(function() {
		    $(this).toggleClass("isliked").toggleClass("likes");
		    var j = $(this).text();
		    j--;
		    console.log(j);
		    $(this).text(j);
		});

		// Downloads
		// function downloadFile(numDownloads) {
		// 	if (validateForm()) {
		// 		$("#download-now").on('click', "#download-window", function(event) {
		// 			event.preventDefault();
		// 			numDownloads++;
		// 			window.open("guides/file.pdf", 'download_window');	
		// 		});	
		// 	}
		// };	

		$(document).on('click', ".downloads", function(event) {
			var numDownloads = $(this).text();
			event.preventDefault();
			if ($("#screen").length != 0) {
				$("#screen").fadeIn();
			} else {
				addScreen();
				$("#screen").fadeIn();
			};	
			if ($("#download-window").length != 0) {
				$("#download-window").fadeIn();
			} else {
				addDownloadWindow();
				$("#download-window").fadeIn();
			};

			if (validateForm()) {
				// downloadFile();
			} else {
				alert("Please check your information and try again.");
			};

			$(this).text(numDownloads);		
		});

		//Shares 
		$(document).on('click', ".shares", function(event) {
			var numShares = $(this).text();
			event.preventDefault();
			if ($("#screen").length != 0) {
				$("#screen").fadeIn();
			} else {
				addScreen();
				$("#screen").fadeIn();
			};	
			if ($("#share-window").length != 0) {
				$("#share-window").fadeIn();
			} else {
				addShareWindow();
				$("#share-window").fadeIn();
			};

			if (validateForm()) {
				// shareFile();
			} else {
				alert("Please check your information and try again.");
			};

			$(this).text(numDownloads);		
		});

		$(".shares").click(function() {
		    $(this).toggleClass("likes").toggleClass("isliked");
		    var i = $(this).text();
		    i++;
		    $(this).text(i);
		});

		// function shareFile(numShares) {
		// 	if (validateForm()) {
		// 		$("#share-now").on('click', "#download-window", function(event) {
		// 			event.preventDefault();
		// 			numDownloads++;
		// 			window.open("guides/file.pdf", 'download_window');	
		// 		});	
		// 	}
		// };	

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

