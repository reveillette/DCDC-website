$('.selectpicker').selectpicker();


// Title slider
	var howtos = [
		"Start a Social Media Marketing Strategy?",
		"Organize a Neighborhood Cleanup Day?",
		"Prepare a Grant Proposal?",
		"Outreach to My Community?",
		"Create a Community How-to-Guide?"
	]; 

	$(document).on('ready', function(event) {
		$("#flip").text(howtos[0]);
		for (var i=1; i< howtos.length; i++) {
			var text = howtos[i];
			$("#flip").fadeOut(300, function(text, i) {
				return function(){
					$("#flip").text(text);
					if (i == howtos.length - 1) {
						$("#flip").css("color", "#ffcc33");	
					}
				}
			}(text, i));
			$("#flip").fadeIn(800);
		};
	});	

// How-to page
	// Fixed-left navigation buttons 
		$(document).ready(function() {
			$('.fixed-left').click(function() {
				var url = window.location.href;
				var lastChar = url[url.length - 1];
				console.log(lastChar);

				if ( $(this).is('#backtop') || (lastChar == "1" && $(this).is('#prev')) ){
					window.location.replace("#");
				} else if ( url.search("#") != -1 && (lastChar != "#") && (lastChar > 1) && ($(this).is('#prev')) ) {
					lastChar--;
					window.location.replace("#page0" + lastChar);
				} else if ( url.search("#") != -1 && (lastChar != "#") && (lastChar < 6) && ($(this).is('#next')) ) {
					lastChar++;
					window.location.replace("#page0" + lastChar);	
				} else if ( url.search("#") == -1 || (lastChar == "#") && ($(this).is('#next')) ) {
					window.location.replace("#page01");
				} 
			});
		});


	// FAQ hidden items view toggle
    $(document).ready(function() {
        $('.reveal li').click(function() {
        	$(this).siblings('li').removeClass('active');
        	$(this).siblings('.answer').not($(this).next()).slideUp();
        	$(this).toggleClass('active');
        	$(this).next('.answer').slideToggle();
        });
    });

    // Anchor hidden items view toggle 
    $(document).ready(function() {
    	$('a.reveal').click(function() {
        	$(this).parents().next('.answer').slideToggle(); 
        	$(this).toggleClass('more').toggleClass('less'); 		
    	});
    });

// fixed-left button reveal and hide text
	$(document).on('mouseenter', '.fixed-left', function(event) {
		$(this).animate({
			width: "250px"
		}, 200, "linear", function() {
			$(this).children('h3').toggleClass('hidden');
		});
	});

	$(document).on('mouseleave', '.fixed-left', function(event) {
			$(this).animate({
				width: "60px",
		}, 200, "linear", function() {
			$(this).children('h3').toggleClass('hidden');
		});
	});


// Overlays
	function addScreen() { 
		$("body").append("<div id='screen'></div>");	
	};

	function addLoginWindow() {
		$("body").append("<div class='overlay' id='login-window'></div>");
		$("#login-window").load('../resources/layouts/overlays/login.html');
	}

	function addDownloadWindow(filename) {
		$("body").append("<div class='overlay' id='download-window'></div>");
		$("#download-window").load('../resources/layouts/overlays/download.html');
	}

	function addRegisterWindow() {
		$("body").append("<div class='overlay' id='register-window'></div>");
		$("#register-window").load('../resources/layouts/overlays/register.html');
	}

	function addShareWindow() {
		$("body").append("<div class='overlay' id='share-window'></div>");			
		$("#share-window").load('../resources/layouts/overlays/share.html');
	}

	function addTermsWindow() {
		$("body").append("<div class='overlay' id='terms-window'></div>");
		$("#terms-window").load('../resources/layouts/overlays/terms.html');
		$("#terms-window").append(function() {
			return "<p><small>Last Updated " + lastModified('../resources/layouts/overlays/terms.html') + "</small></p>";
		}); 	
	}

	function addPrivacyWindow() {
		$("body").append("<div class='overlay' id='privacy-window'></div>");
		$("#privacy-window").load('../resources/layouts/overlays/privacy.html');
		$("#privacy-window").append(function() {
			return "<p><small>Last Updated " + lastModified('../resources/layouts/overlays/privacy.html') + "</small></p>";
		}); 
	}

	function addContactWindow() {
		$("body").append("<div class='overlay' id='contact-window'></div>");
		$("#contact-window").load('../resources/layouts/overlays/contact.html');
	}

	function addCreateIntroWindow() {
		$("body").append("<div class='overlay' id='create-intro-window'></div>");
		$("#create-intro-window").load('../resources/layouts/overlays/create_intro.html');
	}
	
	function showOverlay(eventTrigger, trigger, overlay, functionName) {			
		$(document).on(eventTrigger, trigger, function(event) {
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
			$("body").css("overflow", "hidden");
		});
	}
		
	// Close button 
	$(document).on('click', '.close-button', function(event) {
	    event.preventDefault();
		$("#screen").fadeOut();
		$(event.target).parent().fadeOut();
		$("body").css("overflow", "visible");	
	});

	$(document).on('click', '#screen', function(event) {
		event.preventDefault();
		$("#screen").fadeOut();
		$(".overlay").fadeOut();
		$("body").css("overflow", "visible");	
	});

	// Close topbar
	$(document).on('click', '.topbar>.no-inset', function(event) {
	    event.preventDefault();
		$(".navbar").css("top", "0");
	});


	// Login overlay
	showOverlay("click", "#login-button", "#login-window", addLoginWindow);
		
	// Register overlay 
	showOverlay("click", "#register-link", "#register-window", addRegisterWindow);
	showOverlay("click", "#register-button", "#register-window", addRegisterWindow);
	showOverlay("click", "#register-button-top", "#register-window", addRegisterWindow);

	// Terms overlay
	showOverlay("click", "#terms", "#terms-window", addTermsWindow);

	// Privacy overlay
	showOverlay("click", "#privacy", "#privacy-window", addPrivacyWindow);

	// Contact overlay
	showOverlay("click", "#contact", "#contact-window", addContactWindow);


// Library page
	// Library buttons (like, download, share)
	// Likes
    $(document).on('click', '.likes', function(event) {
        event.preventDefault();
        $(this).toggleClass("likes").toggleClass("isliked");
        var i = $(this).text();
        i++;
        $(this).text(i);
    });

    $(document).on('click', '.isliked', function(event) {
        event.preventDefault();
        $(this).toggleClass("isliked").toggleClass("likes");
        var j = $(this).text();
        j--;
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
	$(document).on('click', '.shares', function(event) {
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



// Miscellaneous functions 
	// Get last modified date of file on server
		function lastModified(url) {
		    var req = new XMLHttpRequest();
		    req.open("GET", url, false);
		    req.send(null);
			var dateLastMod = req.getResponseHeader("Last-Modified");
			console.log(dateLastMod);
			return dateLastMod;
		}
