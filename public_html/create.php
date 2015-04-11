<?php require_once("../resources/db_connection.php"); ?>
<?php require_once("../resources/functions.php"); ?>

<?php
	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM pages ";
	$query .= "WHERE id < 10 ";
	$query .= "ORDER BY id ASC";
	$result = mysqli_query($connection, $query);
	confirm_query($result);
?>
<!--Header-->
<?php include("../resources/layouts/header.php"); ?>

<!-- Open, save and publish buttons -->
<div class="fixed-left-container">
	<div class="fixed-left" id="open">
		<span class="glyphicon glyphicon-floppy-open"></span>
		<h3 class="hidden">Open File</h3>
	</div>
	<div class="fixed-left" id="save">
		<span class="glyphicon glyphicon-floppy-save"></span>
		<h3 class="hidden">Save File</h3>
	</div>
	<div class="fixed-left" id="publish">
	    <span class="glyphicon glyphicon-cloud-upload"></span>
	    <h3 class="hidden">Publish</h3>
	</div>
</div>

<div class="container">
	<div class="page-header">
		<h1>Create a Guide</h1>
	</div>
	<div class="row">
		<div id="create-panel" class="panel panel-default resizable resizable-e">
			<div class="panel-heading">
				<h4 class="panel-title">Section 1: Basic Guide Details</h4>
			</div>
			<div class="panel-body">

<p>As you fill in the information below, the preview panel on the right will update to show you your how-to guide. Once you're finished you can save the guide to PDF or use this website to share a digital version with your community.</p>
</p>
				<?php include("../resources/layouts/createform1.php"); ?>
			</div>
		</div>

		<div id="preview-panel" class="panel panel-default resizable resizable-w">
			<div class="panel-heading">
				<h4 class="panel-title">Preview</h4>
			</div>
			<div class="panel-body">
				<?php include("../resources/layouts/page1.php"); ?>
			</div>
		</div>
	</div>

	<!-- Navigation -->
	<div class="row">
		<div class="col-md-6">
			<nav>
				<ul class="pagination section">			
					<li class="section disabled" data-button="previous"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<li class="section active" data-button="1"><a href="#"><span class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="Section 1: Basic Information">1</span></a></li>
					<li class="section" data-button="2" data-heading="Section 2: Getting Started Section"><a href="#"><span class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="Section 2: Getting Started">2</span></a></li>
					<li class="section" data-button="3"><a href="#"><span class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="Section 3: Custom Content">3</span></a></li>
					<li class="section" data-button="next"><a href="#" aria-label="Next"><span aria-hidden="true">Next Section &raquo;</span></a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-6">
			<nav>
				<ul class="pagination page">			
					<li class="page disabled" data-button="previous"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<li class="page active" data-button="1"><a href="#">1</a></li>
					<li class="page" data-button="2"><a href="#">2</a></li>
					<li class="page" data-button="next"><a href="#" aria-label="Next"><span aria-hidden="true">Next Page &raquo;</span></a></li>
				</ul>
				<ul class="pagination modify" style="float: right;">			
					<li class="page" data-button="delete"><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
					<li class="page" data-button="add"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
				</ul>
			</nav>
		</div>		
	</div>	
</div>



<?php
  // 4. Release returned data
  mysqli_free_result($result);
?>

<!--Footer-->
<?php include("../resources/layouts/footer.php"); ?>




<script>
// // Show intro overlay 
	$(document).on('ready', function(event) {
		event.preventDefault();
		if (screen.width > 992) {
			if ($("#screen").length != 0) {
				$("#screen").fadeIn();
			} else {
				addScreen();
				$("#screen").fadeIn(1000);
			};	
			if ($("#create-intro-window").length != 0) {
				$("#create-intro-window").fadeIn();
			} else {
				addCreateIntroWindow();
				$("#create-intro-window").fadeIn();
			};	
			$("body").css("overflow", "hidden");
				
			}
	});



// Pan and zoom SVG
$(function() {
  panZoomInstance = svgPanZoom('#howtoguide', {
    zoomEnabled: true,
    controlIconsEnabled: true,
    fit: true,
    center: true,
    minZoom: 0.5,
    viewportSelector: document.getElementById('howtoguide').querySelector('#viewport')  
  });
 
})

// Create page pagination
$(document).on('click', '.pagination>li', function(event) {
	event.preventDefault();
	var data = $(this).data('button');
	var currentNumber = $(this).parents('.pagination').children('.active').data('button');
	var newNumber = currentNumber;
	var numPages = $(this).parents('.pagination').children().length - 2; // Length of child array minus two (one each for the next and previous buttons)
	var selector = "";
	var newElement = ""; 
	var deletedElement = "";
	var appendLoc = "";	

	// Remove active class from target
	$(this).parents('.pagination').children('li').removeClass('active');

	// Pages + Sections
	if (!isNaN(data)) {
		newNumber = data;
		// Add active class to target
		$(this).addClass('active');

	// Next 
	} else if (data==="next") {
		newNumber++;
		// Add active class to target
		selector = "li[data-button='" + newNumber + "']";
		$(this).parents('.pagination').children(selector).addClass('active');

	// Previous 
	} else if (data==="previous") {
		newNumber--;
		// Add active class to target
		selector = "li[data-button='" + newNumber + "']";
		$(this).parents('.pagination').children(selector).addClass('active');


	// Add new page
	} else if (data==="add") {
		if ($(this).hasClass('section')) {
			numPages = 	$(this).parents('.pagination').siblings('.section').children().length - 2; 
			newNumber = numPages + 1;
			appendLoc = "li:nth-child(" + newNumber + ")";
			newElement = "<li class='section' data-button='" + newNumber + "''><a href='#'>" + newNumber + "</a></li>";
			if (newNumber <= 8) {
				$(this).parents('.pagination').siblings('.section').children(appendLoc).after(newElement).next().addClass('active');
			}
		} else if ($(this).hasClass('page')) {
			numPages = 	$(this).parents('.pagination').siblings('.page').children().length - 2; 
			newNumber = numPages + 1;
			appendLoc = "li:nth-child(" + newNumber + ")";
			newElement = "<li class='page' data-button='" + newNumber + "''><a href='#'>" + newNumber + "</a></li>";
			if (newNumber <= 8) {
				$(this).parents('.pagination').siblings('.page').children('li').removeClass('active');
				$(this).parents('.pagination').siblings('.page').children(appendLoc).after(newElement).next().addClass('active');
			}
		}

	// // Delete page
	} else if (data==="delete") {
		if ($(this).hasClass('section')) {
			numPages = 	$(this).parents('.pagination').siblings('.section').children().length - 2; 			
			currentNumber = $(this).parents('.pagination').siblings('.section').children('.active').data('button');
			if (currentNumber > 3) {
				if (confirm("Are you sure you want to delete section " + currentNumber + " from your guide? You cannot undo this action.") == true) {
					$(this).parents('.pagination').siblings('.section').children('.active').remove();
					$(this).parents('.pagination').siblings('.section').children('li:nth-child(' + numPages + ')').addClass('active');					
				}
			} else {
				alert("Sorry, you cannot delete this section.")
			}

		} else if ($(this).hasClass('page')) {
			numPages = 	$(this).parents('.pagination').siblings('.page').children().length - 2; 			
			currentNumber = $(this).parents('.pagination').siblings('.page').children('.active').data('button');
			if (currentNumber > 2) { 
				if (confirm("Are you sure you want to delete page " + currentNumber + " from your guide? You cannot undo this action.") == true) {
					$(this).parents('.pagination').siblings('.page').children('.active').remove();
					$(this).parents('.pagination').siblings('.page').children('li:nth-child(' + numPages + ')').addClass('active');
				}
			} else {
				alert("Sorry, you cannot delete this page.");
			}
		}
	}


	// Assign load paths based on page number
	if ($(this).hasClass('section')) {
		var path = "../resources/layouts/createform" + newNumber + ".php";
	} else if ($(this).hasClass('page')) {
		var path = "../resources/layouts/page" + newNumber + ".php";
	}

	// Load new page into div
	if (!$(this).parents('.pagination').hasClass('modify')) {
		if ((newNumber !== currentNumber && newNumber <= numPages) || (newNumber !== currentNumber && newNumber > 1)) {
			if ($(this).hasClass('section')) {
				$("#create-panel .panel-body").load(path);
			} else if ($(this).hasClass('page')) {
				$("#preview-panel .panel-body").load(path);			
			}
		}
	}

	// Disable and enable next and previous buttons
	if (newNumber == numPages) {
		// disable next button
		$(this).parents('.pagination').children("li[data-button='next']").addClass('disabled');
	} else {
		// enable next button
		$(this).parents('.pagination').children("li[data-button='next']").removeClass('disabled');
	}

	if (newNumber == 1) {
		// disable previous button
		$(this).parents('.pagination').children("li[data-button='previous']").addClass('disabled');
	} else {
		// enable previous button
		$(this).parents('.pagination').children("li[data-button='previous']").removeClass('disabled');
	}

});


// Resizable divs
$(".resizable-w").resizable({
	handles: "w",
	minWidth: 300,
	maxWidth: 800
});

$(".resizable-e").resizable({
	handles: "e",
	minWidth: 300,
	maxWidth: 800
});

// Disable resizing on small screens
var screenWidth = window.innerWidth;
var minScreenWidth = 992;

	// If screen is small on document load
	$(document).on('ready', function() {
		if (screenWidth < minScreenWidth) {
			$(".resizable").resizable("disable");
		}
	});

	// If screen is resized below threshold
	$(window).resize(function(screenWidth) {
		if (screenWidth < minScreenWidth) {
			$(".resizable").resizable("disable");
		}
		if (screenWidth > minScreenWidth) {
			$(".resizable").resizable("enable");
		}
	});

// Dynamically change width of sibling div in same row when div is resized
$(".resizable").on("resize", function(event, ui) {

	// Find target container matching 'row'
	// (in Bootstrap, all inline divs should be in a parent .row)
	var container = $(event.target).parents('.row');
	var containerWidth = $(container).width();

	// Find width of target div
	var activeDivWidth = ui.size.width;
	var columnMargin = Number($(event.target).css('margin-right').replace('px', '')) + Number($(event.target).css('margin-left').replace('px', ''));

	// Find resizable sibling divs of event target
	var siblingDiv = $(event.target).siblings(".resizable");

	// Reset width of siblingColumns
	var siblingNewWidth = containerWidth - activeDivWidth - (2*columnMargin);
	var siblingNewWidthPercent = siblingNewWidth / containerWidth * 100;
	var activeNewWidthPercent = 100 - siblingNewWidthPercent;

	$(siblingDiv).css('width', siblingNewWidthPercent + "%");
});

  $(function(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
    	$('.dropdown-menu input').click(function() {return false;})
		    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      if ("onwebkitspeechchange"  in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
      } else {
        $('#voiceBtn').hide();
      }
	};
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
    initToolbarBootstrapBindings();  
	$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
  });
</script>
