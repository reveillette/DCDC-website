// Load header and footer
	$(document).on('ready', function(event) {
		$("#header").load('html/header.html');
		$("#footer").load('html/footer.html');
	});

	function addCurrentClass() {
		var shortURL = document.URL.split("/");
		var i = shortURL.length - 1;
		var currentPage = shortURL[i].replace(".html", "");
		var id = "header-" + currentPage + "-url";
		$("#" + id).toggleClass("current-link");
	};

	function addCopyrightYear() {
		var currentYear = new Date().getFullYear();
		$("#current-year").text(currentYear);
	};

// // Main screen jump to place

	// function scrollJump(id) {
	//     var divid = document.getElementById(id);
	//     divid.scrollIntoView({behavior: "smooth"});
	//     return false;
	// }

	// $(window).scroll(function() { 
	// 	scrolljump("main");
	// });


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


// Overlays

	function addScreen() { 
		$("body").append("<div id='screen'></div>");	
	};

	function addLoginWindow() {
		$("body").append("<div class='overlay' id='login-window'></div>");
		$("#login-window").load('html/login.html');
	}

	function addDownloadWindow(filename) {
		$("body").append("<div class='overlay' id='download-window'></div>");
		$("#download-window").load('html/download.html');
	}

	function addRegisterWindow() {
		$("body").append("<div class='overlay' id='register-window'></div>");
		$("#register-window").load('html/register.html');
	}

	function addShareWindow() {
		$("body").append("<div class='overlay' id='share-window'></div>");			
		$("#share-window").load('html/share.html');
	}

	function addSearchWindow(filename) {
		$("body").append("<div class='overlay' id='search-window'></div>");
		$("#search-window").load('html/search.html');
	}

	function addTermsWindow() {
		$("body").append("<div class='overlay' id='terms-window'><img class='close-button' src='assets/close.svg'><h5>Terms and Conditions</h5><div id='terms-text'></div></div>");
		$("#terms-text").load('html/terms.html');
		$("#terms-window").append(function() {
			return "<br><br><br><p>Last Updated " + lastModified('html/terms.html') + "</p>";
		}); 
	}

	function addPrivacyWindow() {
		$("body").append("<div class='overlay' id='privacy-window'><img class='close-button' src='assets/close.svg'><h5>Privacy Policy</h5><div id='privacy-text'></div></div>");
		$("#privacy-text").load('html/privacy.html');
		$("#privacy-window").append(function() {
			return "<br><br><br><p>Last Updated " + lastModified('html/privacy.html') + "</p>";
		}); 
	}

	function addContactWindow() {
		$("body").append("<div class='overlay' id='contact-window'></div>");
		$("#contact-window").load('html/contact.html');
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
			$("body").css("overflow", "hidden");
		});
	}
		
	// Close button 
	$(document).on('click', '.close-button', function(event) {
	    event.preventDefault();
		$("#screen").fadeOut();
		$(".overlay").fadeOut();
		$("body").css("overflow", "visible");	
	});

	$(document).on('click', '#screen', function(event) {
		event.preventDefault();
		$("#screen").fadeOut();
		$(".overlay").fadeOut();
		$("body").css("overflow", "visible");	
	});

	// Login overlay
	showOverlay("#login-button", "#login-window", addLoginWindow);
		
	// Register overlay 
	showOverlay("#register-link", "#register-window", addRegisterWindow);
	showOverlay("#register-button", "#register-window", addRegisterWindow);


	// Register overlay 
	showOverlay("#search", "#search-window", addSearchWindow);

	// Terms overlay
	showOverlay("#terms", "#terms-window", addTermsWindow);

	// Privacy overlay
	showOverlay("#privacy", "#privacy-window", addPrivacyWindow);

	// Contact overlay
	showOverlay("#contact", "#contact-window", addContactWindow);


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



// Create page
	// Create draggable canvas
	var draw = SVG('container').size(400, 400)
	var rect = draw.rect(100, 100)

	rect.draggable()
	
	// Load form into create panel
	$(document).on('ready', function(event) {
		$("#create-panel").load('html/createform.html');
	});

	// Load preview into preview panel
	$(document).on('ready', function(event) {
		$("#preview-panel").load('assets/page1.html');
	});

	// Form preview actions
	// Change color 
	$(document).on('ready', function(event) {
		$('#create-panel').on('click', '.color-block', function(event) {
			var color = String(rgb2hex($(event.target).css('background-color')));
			$.get('assets/page1.html', function(data) {
				var html = String(data);
				var newHtml = html.replace(/#e2574c/gi, color);
				$("#preview-panel svg").replaceWith(newHtml);
			})	
		});
	});	

	// Replace preview text

	function replacePreviewText() {
			var id = "";
			var formSelector = "#create-panel " + id + "";
			var previewTarget = "#preview-panel " + id + "";
			console.log(formSelector);
			console.log(previewTarget);
	}
		
		$(document).on('ready', function(event) {
			$("#create-panel").on('keyup', 'form', function(event) {
				var id = event.target.id;
				console.log(id);
				var text = event.target.value;
				console.log(text);
				var previewTarget = "#preview-panel #" + id + ">tspan";
				console.log(previewTarget);
				$(previewTarget).text(text);
			});	
		});		
	showOverlay("#login-button", "#login-window", addLoginWindow);




// Miscellaneous functions

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

	// Get last modified date of file on server
	function lastModified(url) {
	    var req = new XMLHttpRequest();
	    req.open("GET", url, false);
	    req.send(null);
		var dateLastMod = req.getResponseHeader("Last-Modified");
		return dateLastMod
	}

	// RGB to Hex
	var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

	function rgb2hex(rgb) {
	 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	 return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
	}

	function hex(x) {
	  return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
	 }
